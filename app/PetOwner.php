<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

    class PetOwner extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'pet_owner';

        protected $fillable = [
            'name', 'email', 'password','uuid'
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }
