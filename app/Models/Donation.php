<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'address',
        'contact',
        'email',
        'given_method',
        'amount',
        'payment_id',
        'payment_method'
    ];

    public function donor()
    {
        return $this->belongsTo(Donor::class,'donor_id');
    }
}
