<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable 
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','firstname', 'lastname',  'email', 'password', 'class', 'phone', 'address', 'person_id', 'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function person()
    {
        return $this->belongsTo('App\Person','person_id');
    }

    public function copies()
    {
        return $this->belongsToMany('App\Copy','borrowing');
    }

    public $timestamps = false;
}
