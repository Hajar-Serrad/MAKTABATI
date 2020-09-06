<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    use HasCompositePrimaryKey;

    protected $fillable = [
        'copy_nbr','ISBN','editor',
    ];

    public function users()
    {
        return $this->belongsToMany('App\User','borrowing');
    }

    public function book()
    {
        return $this->belongsTo('App\Book','ISBN');
    }


    public $timestamps = false;

    protected $primaryKey = ['copy_nbr','ISBN'];

    

 
}
