<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;  
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable {
    use HasFactory;

    protected $table    = 'users';
    protected $fillable = ['username', 'password', 'email', 'phone', 'role', 'remember_token'];
    protected $hidden   = ['password', 'remember_token'];
}
