<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $hidden = [
        'site', 'login', 'password', 'phone',
        'linkModificar', 'proxy',
        'unixtime_posting', 'unixtime_update'
    ];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
