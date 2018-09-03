<?php

namespace App;

use Cmgmyr\Messenger\Traits\Messagable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use CanResetPassword;
    use Messagable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'spol', 'dob', 'country', 'language'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function clubs(){
        return $this->hasMany('App\Club');
    }

    public function schools(){
        return $this->hasMany('App\School');
    }

    public function players(){
        return $this->hasMany('App\Player');
    }

    public function objects(){
        return $this->hasMany('App\Objects');
    }

    public function staff(){
        return $this->hasMany('App\Staff');
    }

    public function vijesti() {
        return $this->hasMany('App\Vijest');
    }
}
