<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DemoPaymentGuard
{
    public function handle(Request $request, Closure $next): Response
    {
        if (config('app.demo_mode') && (
            $request->is('donation/store', 'razorpay/create-order', 'payment/page/*',
                'admin/payment/razorpay/*', 'admin/donation/payment/*')
        )) {
            $message = 'Payments are disabled on this demonstration website. No money has been collected.';

            if ($request->expectsJson()) {
                return response()->json(['message' => $message], 403);
            }

            return redirect()->back()->with('demo_notice', $message);
        }

        return $next($request);
    }
}
