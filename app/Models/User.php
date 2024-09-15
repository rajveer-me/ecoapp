<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;  // <-- Use the correct class
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Add this protected property to use the create method
    protected $fillable = ['name', 'email', 'password'];

    //be hidden when the model is converted to an array or JSON
    protected $hidden = [
        'password', 'remember_token',
    ];
}
