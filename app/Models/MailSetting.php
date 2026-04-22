<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailSetting extends Model
{
    protected $fillable = [
        'driver', 'host', 'port', 'username', 'password', 'encryption', 'sender_email', 'sender_name', 'reply_email', 'status',
    ];
}
