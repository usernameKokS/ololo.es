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

    function is_json($data)
    {
        if (!empty($data)) {
            return is_string($data) &&
                is_array(json_decode($data, true));
        }
        return false;
    }


    // get value  attribute
    public function getValueAttribute($value)
    {
        // check if attribute is a json
        if ($this->is_json($value)) {
            return json_decode($value, true);
        }

        return $value;
    }
}
