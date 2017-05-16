<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';

    protected $guarded =[
        'password', 'remember_token',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
