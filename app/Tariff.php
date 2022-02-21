<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    const TARIFF = [
        'silver' => [
            'passion.com', 'skokka.com', 'destacamos.com', 'mileroticos.com', 'adultguia.com', 'milanunciosex.com',
            'slumi.com',
        ],
        'gold' => [
            'pasion.com', 'skokka.com', 'sexobarato.es', 'hott.es', 'milanunciosex.com', 'destacamos.com',
            'escortpasion.com', 'lujoypasion.com', 'sexoyrelax.com', 'loquovip.com', 'adultguia.com', 'mileroticos.com',
            'eanuncios.com', 'coneroticas.com', 'mundosexanuncio.com',
        ],
        'diamond' => [
            'pasion.com', 'skokka.com', 'sexobarato.es', 'hott.es', 'milanunciosex.com', 'destacamos.com',
            'escortpasion.com', 'lujoypasion.com', 'sexoyrelax.com', 'loquovip.com', 'adultguia.com', 'mileroticos.com',
            'eanuncios.com', 'coneroticas.com', 'mundosexanuncio.com', 'nuevoloquo.com', 'slumi.com', 'hottescorts.com',
            'erosguia.com',
        ],
    ];

    public function post() {
        return $this->belongsTo(Post::class);
    }
}
