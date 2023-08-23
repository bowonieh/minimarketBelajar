<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Auth extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $table = 'tbl_akun';
    protected $casts = [
        'password' => 'hashed',
    ];
}
