<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'name','description'
    ];

    public function admin(){
        return $this->belongsTo('App\User','user_id');
    }

    public function member(){
        return $this->hasMany('App\User','group_id');
    }

    public function posts(){
        return $this->hasMany('App\Post','group_id');
    }
    public function requests(){
        return $this->hasMany('App\Request','group_id');
    }
}
