<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    use HasCompositePrimaryKey;
    
    protected $fillable = [
        'user_id','ISBN','copy_nbr','borrowed_at','must_be_returned_at',
    ];

    public $timestamps = false;

    protected $primaryKey = ['ISBN','copy_nbr','user_id'];
}
