<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SportsTrophies extends Model
{
    public function sport(){
        return $this->belongsTo('App\Sport');
    }
}
