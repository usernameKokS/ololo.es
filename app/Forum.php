<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    // const FORUM_NAMES = ['Sexomercadobcn.com', 'Sexomercadomadrid.com', 'Spalumi.com', 'Forosx.com', 'Rincontranny.com', 'Follatemallorca.com', 'Lumismalaga.com', 'Sexforos.com'];

    const FORUM_NAMES = [];

    protected $hidden = [
        'login', 'password', 'phone',
        'linkModificar', 'proxy',
        'unixtime_posting', 'unixtime_update'
    ];
}
