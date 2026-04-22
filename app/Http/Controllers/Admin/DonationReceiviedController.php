<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationReceiviedController extends Controller
{

    public function MarkAsRead( $notificationId)
    {
        // dd('s');
        $user = Auth::user();
        $notification = $user->notifications()->where('id', $notificationId)->first();

        if ($notification) {
            $notification->markAsRead();
        }
         
         return redirect()->back();

        // return response()->json(['count' => $user->unreadNotifications->count()]);
    } // End Method 
}
