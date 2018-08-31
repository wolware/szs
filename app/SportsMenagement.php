<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SportsMenagement extends Model
{
    protected $table = 'sports_menagement';
    public function sport(){
        return $this->belongsTo('App\Sport');
    }
}
