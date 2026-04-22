<?php
namespace App\Providers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class MailConfigServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
         Cache::forget('mail_settings');
        // Pehle cache se mail config lene ki koshish karo
        $mail = Cache::rememberForever('mail_settings', function () {
            return DB::table('mail_settings')->where('status', 1)->first();
        });

        if (!empty($mail) && $mail->status == 1) {
            Config::set('mail.mailers.smtp', [
                'transport' => $mail->driver,
                'host'      => $mail->host,
                'port'      => $mail->port,
                'encryption'=> $mail->encryption ?? null,
                'username'  => $mail->username,
                'password'  => $mail->password,
            ]);

            Config::set('mail.from', [
                'address' => $mail->sender_email,
                'name'    => $mail->sender_name,
            ]);
        }
    }
}
