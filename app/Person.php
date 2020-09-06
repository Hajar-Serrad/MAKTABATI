<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    protected $fillable = [
        'id', 'firstname', 'lastname',  'email', 'status',
    ];

    public function user()
    {
        return $this->hasOne('App\User','person_id');
    }

    public function admin()
    {
        return $this->hasOne('App\Admin','person_id');
    }


    public $timestamps = false;

}
