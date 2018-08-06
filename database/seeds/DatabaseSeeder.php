<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(SystemDataSeeder::class);

         if (env('APP_ENV') !== 'production') {
             $this->call(SampleDataSeeder::class);
         }
    }
}
