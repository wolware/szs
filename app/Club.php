<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
   	protected $fillable = [
        'name', 'drzava', 'grad'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   
}
