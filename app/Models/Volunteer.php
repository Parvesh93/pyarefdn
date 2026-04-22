<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address',
        'phone',
        'city',
        'state',
        'zip',
        'date_of_birth',
        'gender',
        'experience',
        'join',
       
    ];

    
}
