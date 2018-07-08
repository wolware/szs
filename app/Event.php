<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'image',
        'name',
        'sport_id',
        'region_id',
        'latitude',
        'longitude',
        'city',
        'date_start',
        'time_start',
        'event_type_id',
        'max_participants',
        'registration_fee',
        'first_place_award',
        'duration',
        'description',
        'user_id'
    ];

    public function region() {
        return $this->belongsTo('App\Region');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function sport() {
        return $this->belongsTo('App\Sport');
    }

    public function type() {
        return $this->belongsTo('App\EventType', 'event_type_id');
    }
}
