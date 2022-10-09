<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $fillable= [
        'name',
        'size',
        'extension',
        'mime',
        'url',
        'user_id',
        'post_id',
    ];
}
