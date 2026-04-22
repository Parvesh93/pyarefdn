<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RazorpaySetting;
use Illuminate\Http\Request;

class PaymentSettingController extends Controller
{

    public function __construct()
    {
        // Module Data
        $this->title = trans_choice('module_razorpay_setting', 1);
        $this->route = 'admin.razorpay-setting';
        $this->view = 'admin.razorpay';
        $this->path = 'razorpay-setting';
        $this->access = 'razorpay-setting';

        $this->middleware('permission:' . $this->access . '-view');
    }

    public function index()
    {

        $data['title']  = $this->title;
        $data['route']  = $this->route;
        $data['view']   = $this->view;
        $data['access'] = $this->access;

        $data['row'] = RazorpaySetting::where('status', '1')->first();
        return view($this->view . '.index', $data);
    }


    public function store(Request $request)
    {
        // Field Validation
        $request->validate([
            'country' => 'nullable|string',
            'razorpay_key_id' => 'nullable|string',
            'razorpay_key_secret' => 'nullable|string',
            'mode' => 'nullable|string',
        ]);

        $id = $request->id;

        // -1 means no data row found
        if ($id == -1) {
            // Insert Data
            $razorpay_setting = new RazorpaySetting();
            $razorpay_setting->country = $request->country;
            $razorpay_setting->razorpay_key_id = $request->razorpay_key_id;
            $razorpay_setting->razorpay_key_secret = $request->razorpay_key_secret;
            $razorpay_setting->mode = $request->mode;
            $razorpay_setting->status = $request->status;
            $razorpay_setting->save();
        } else {
            // Update Data
            $razorpay_setting = RazorpaySetting::find($id);
            $razorpay_setting->country = $request->country;
            $razorpay_setting->razorpay_key_id = $request->razorpay_key_id;
            $razorpay_setting->razorpay_key_secret = $request->razorpay_key_secret;
            $razorpay_setting->mode = $request->mode;
            $razorpay_setting->status = $request->status;
            $razorpay_setting->save();
        }

        $notification = array(
            'message' => __('msg_updated_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);
    }
}
