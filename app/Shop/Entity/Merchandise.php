<?php

namespace App\Shop\Entity;

use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    protected $connection = 'mariadb';

    protected $table = 'merchandise' ;

    protected $primaryKey = 'id' ;

    protected $fillable = [
        'status',
        'name',
        'introduction',
        'photo',
        'price',
        'remain_count',
    ];
}
