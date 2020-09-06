<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = [
        'ISBN','title','author','category', 'description', 'image',
    ];

    public function copies()
    {
        return $this->hasMany('App\Copy','ISBN','copy_nbr');
    }



    protected $primaryKey = 'ISBN';
    public $timestamps = false;

}
