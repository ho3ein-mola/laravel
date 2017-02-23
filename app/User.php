<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Http\Requests\authRequest;

class User extends Authenticatable 
{
    public function posts()
    {
        return $this->hasMany('App\Post');
	}
}
