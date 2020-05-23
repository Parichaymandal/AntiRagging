<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','discipline','university','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts(){
        return $this->hasMany('App\Post','user_id');
    }

    public function comments(){
        return $this->hasMany('App\Comment','user_id');
    }

    public function messages(){
        return $this->hasMany('App\Message','user_id');
    }

    public function ownedgroup(){
        return $this->hasMany('App\Group','user_id');
    }

    public function group(){
        return $this->belongsTo('App\Group','group_id');
    }

    public function article(){
    return $this->hasMany('App\Status','user_id');
}

    public function requests(){
        return $this->hasMany('App\Request','user_id');
    }
}
