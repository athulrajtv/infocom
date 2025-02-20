<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Login extends Authenticatable
{
    use Notifiable;
    
    protected $table = 'logins';
    protected $fillable = [
        'user_type',
        'name',
        'email',
        'password',
    ];
}
