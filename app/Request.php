<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public function requested_by(){
        return $this->belongsTo('App\User','user_id');
    }

    public function requested_for(){
        return $this->belongsTo('App\Group','group_id');
    }
}
