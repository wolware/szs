<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regions';

    protected $fillable = ['name', 'region_type', 'region_parent'];

    public function region_type() {
        return $this->belongsTo('App\RegionType');
    }
}
