<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostAttribute extends Model
{
    protected $fillable = [
        'post_id',
        'slug',
        'value',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
