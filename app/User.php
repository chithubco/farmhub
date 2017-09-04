<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'phone_number','business_name','first_name', 'middle_name','last_name','sex','dob','address','city','_state','alt_phone','education','focus','yoe','segment','email','constraint','comment',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'timestamps',
    ];


}

