<?php

namespace App\Shop\Entity;

use Illuminate\Database\Eloquent\Model;
use App\Models\GoogleUser;

class User extends Model
{
    protected $table = 'users' ;

    protected $primaryKey = 'id' ;

    protected $fillable = [
        'name',
        'account',
        'password',
        'email',
        'type',
    ];

    public function googleUser()
    {
        return $this->hasOne(GoogleUser::class, 'email', 'email');
    }
}
