<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostFactura extends Model
{
    protected $fillable = [
        'company_name',
        'first_name',
        'last_name',
        'cif',
        'address',
        'country',
        'email'
    ];
}
