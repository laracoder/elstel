<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\ModelStatus\HasStatuses;

class Ad extends Model
{
    use HasStatuses, LogsActivity;

    protected static $logAttributes = ['id'];
    protected static $logName = 'content';

    /**
     * Get the comments for the blog post.
     */
    public function channels()
    {
        return $this->belongsToMany(AdChannel::class);
    }
}
