<?php

namespace App\Providers;

use App\Models\RazorpaySetting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Cache::forget('setting');
        $setting = Cache::rememberForever('setting', function () {
            return \App\Models\Setting::where('status', 1)->first();
        });

        $razorpay_setting = RazorpaySetting::where('status', '1')->first();


        view()->share([
            'setting' => $setting,
            'razorpay_setting' => $razorpay_setting,
        ]);
    }
}
