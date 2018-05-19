<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['firstname', 'lastname', 'avatar', 'date_of_birth', 'city', 'weight', 'height', 'facebook', 'instagram', 'twitter', 'youtube', 'video','biography', 'region_id', 'club_id', 'player_type_id', 'requested_club', 'player_nature', 'created_at', 'updated_at'];

    public function player_type() {
        return $this->belongsTo('App\PlayerType');
    }

}
