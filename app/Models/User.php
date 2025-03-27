<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Model
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'email',
        'password'
    ];
}
