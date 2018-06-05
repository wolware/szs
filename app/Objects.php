<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objects extends Model
{
    protected $fillable = [
        'name',
        'image',
        'city',
        'established_in',
        'facebook',
        'instagram',
        'twitter',
        'youtube',
        'video',
        'region_id',
        'object_type_id',
        'latitude',
        'longitude',
        'history',
        'user_id',
        'created_at',
        'updated_at'
    ];
}
