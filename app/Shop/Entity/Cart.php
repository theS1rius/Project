<?php

namespace App\Shop\Entity;

use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    protected $connection = 'mariadb';

    protected $table = 'cart' ;

    protected $primaryKey = 'cart_id' ;

    protected $fillable = [
        'user_id',
        'merchandise_id',
        'count',
    ];
}
