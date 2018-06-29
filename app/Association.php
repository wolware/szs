<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    public function region() {
        return $this->belongsTo('App\Region');
    }

    public function sport() {
        return $this->belongsTo('App\Sport');
    }

    public function clubs() {
        return $this->hasMany('App\Club');
    }
}
