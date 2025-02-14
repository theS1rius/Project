<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoogleUser extends Model
{
    use HasFactory;

    protected $table = 'google_users';
    protected $fillable = [
        'google_id',
        'email',
        'name'
        ];

    // 與 User 關聯
    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }
}