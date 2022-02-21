<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['currency', 'price', 'user_id', 'post_id', 'name', 'order_number', 'start', 'end'];
}
