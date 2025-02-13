<?php

namespace App\Shop\Entity;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $connection = 'mariadb';

    protected $table = 'users' ;

    protected $primaryKey = 'id' ;

    protected $fillable = [
        'email',
        'account',
        'password',
        'type',
        'nickname',
    ];
}
