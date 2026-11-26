<?php

namespace App\Providers;

use App\Models\RazorpaySetting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
        // The demo database is freshly rebuilt and may have no permission
        // records yet. Honour the explicitly assigned Super Admin role for
        // application abilities without granting access to ordinary staff.
        Gate::before(function ($user, string $ability) {
            return $user instanceof \App\Models\User && $user->hasRole('Super Admin', 'web') ? true : null;
        });

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
