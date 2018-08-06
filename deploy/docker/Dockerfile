FROM php:7.2-fpm

# Update packages and install composer and PHP dependencies.
RUN apt-get update && \
  DEBIAN_FRONTEND=noninteractive apt-get install -y \
    mysql-client \
    libpq-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libmcrypt-dev \
    libbz2-dev \
    cron \
    && pecl channel-update pecl.php.net \
    && pecl install apcu

# PHP Extensions
RUN docker-php-ext-install zip bz2 mbstring pdo pdo_mysql pcntl opcache \
&& docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
&& docker-php-ext-install gd

RUN echo "extension=apcu.so" > $PHP_INI_DIR/conf.d/apcu.ini

# Time Zone
RUN echo "date.timezone=${PHP_TIMEZONE:-Europe/Berlin}" > $PHP_INI_DIR/conf.d/date_timezone.ini
# Display errors in stderr
RUN echo "display_errors=stderr" > $PHP_INI_DIR/conf.d/display-errors.ini
# Change the default cache header
RUN echo "session.cache_limiter=public" > $PHP_INI_DIR/conf.d/session.ini

COPY ./deploy/php-fpm/memory-limit.ini $PHP_INI_DIR/conf.d/memory-limit.ini
COPY ./deploy/php-fpm/path-info.ini $PHP_INI_DIR/conf.d/path-info.ini

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD . /var/www/html
WORKDIR /var/www/html
RUN touch storage/logs/laravel.log
RUN composer install
RUN chmod -R 777 /var/www/html/storage
RUN touch /var/log/cron.log
ADD ./deploy/cron/artisan-schedule-run /etc/cron.d/artisan-schedule-run
RUN chmod 0644 /etc/cron.d/artisan-schedule-run
RUN chmod +x /etc/cron.d/artisan-schedule-run
RUN touch /var/log/cron.log

CMD ["/bin/sh", "-c", "php-fpm -D | tail -f storage/logs/laravel.log"]