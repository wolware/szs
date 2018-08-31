<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    public function sportDetails()
    {
        return $this->hasOne('App\SportDetails');
    }

    public function sportsEvents()
    {
        return $this->hasMany('App\SportsEvent');
    }

    public function sportsMenagement()
    {
        return $this->hasMany('App\SportsMenagement');
    }

    public function sportPeople()
    {
        return $this->hasMany('App\SportsPeople');
    }

    public function sportTrophies()
    {
        return $this->hasMany('App\SportsTrophies');
    }
}
