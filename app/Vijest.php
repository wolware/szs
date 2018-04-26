<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vijest extends Model
{
    protected $table = 'vijest';

    protected $fillable = ['naslov', 'sadrzaj', 'vijest_kategorija_id', 'user_id'];

    public function tagovi() {
        return $this->belongsToMany('App\Tag', 'vijest_tag');
    }
}
