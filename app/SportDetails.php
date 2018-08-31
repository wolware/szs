<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SportDetails extends Model
{
    public function sport(){
        return $this->hasOne('App\Sport');
    }
}
