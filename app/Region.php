<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regions';

    protected $fillable = ['name', 'region_type', 'region_parent'];

    protected $with = ['parent_region'];

    public function region_type() {
        return $this->belongsTo('App\RegionType');
    }

    public function parent_region() {
        return $this->belongsTo('App\Region', 'region_parent', 'id');
    }

}
