<?php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';
    protected $fillable = [
        'id', 'firstname', 'lastname', 'email', 'password', 'person_id'
    ];




    public function getAuthPassword()
    {
      return $this->password;
    }

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

    public $timestamps = false;
}
