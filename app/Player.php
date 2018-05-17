<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function player_type() {
        return $this->belongsTo('App\PlayerType');
    }

}
