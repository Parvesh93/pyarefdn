<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Donor extends Authenticatable
{
    use Notifiable;
    
     protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
        'password_text'
    ];

    public function donations()
    {
        return $this->hasMany(Donation::class,'donor_id');
    }
}
