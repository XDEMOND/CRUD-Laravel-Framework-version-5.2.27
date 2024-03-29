<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Hash;
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','last_name','second_last_name','telephone','cell_number' , 'email', 'password','rol_name'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
}
