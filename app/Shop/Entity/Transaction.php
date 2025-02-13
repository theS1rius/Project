<?php

namespace App\Shop\Entity;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'users' ;

    protected $primaryKey = 'id' ;

    protected $fillable = [
        'account',
    ];
}
