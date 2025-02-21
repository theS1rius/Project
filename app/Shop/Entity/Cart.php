<?php

namespace App\Shop\Entity;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $connection = 'mariadb';

    protected $table = 'cart' ;

    protected $primaryKey = 'id' ;

    protected $fillable = [
        'user_id',
        'merchandise_id',
        'count',
    ];
}
