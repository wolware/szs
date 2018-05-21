<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['firstname', 'lastname', 'avatar', 'date_of_birth', 'city', 'weight', 'height', 'facebook', 'instagram', 'twitter', 'youtube', 'video','biography', 'region_id', 'club_id', 'player_type_id', 'requested_club', 'player_nature', 'created_at', 'updated_at'];

    public function player_type() {
        return $this->belongsTo('App\Sport');
    }

    public function player_nature() {
        return $this->belongsTo('App\PlayerNature');
    }

    public function club_history() {
        return $this->hasMany('App\PlayerClubHistory');
    }

    public function images() {
        return $this->hasMany('App\Gallery');
    }

    public function current_club() {
        return $this->belongsTo('App\Club');
    }
}
