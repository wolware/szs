<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SportsPeople extends Model
{
    protected $table = 'sports_people';

    public function sport(){
        return $this->belongsTo('App\Sport');
    }
}
