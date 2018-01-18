<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footballer extends Model
{
	protected $fillable = [
        'imre', 'prezime', 'grad'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}
