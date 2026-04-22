<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RazorpaySetting extends Model
{
    
    protected $fillable = [
        'razorpay_key_id', 'razorpay_key_secret', 'country', 'currency_rate', 'mode', 'webhook_secret', 'status',
    ];
}
