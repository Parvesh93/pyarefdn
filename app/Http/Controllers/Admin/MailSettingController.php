<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MailSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MailSettingController extends Controller
{

    public function __construct()
    {
        // Module Data
        $this->title    = trans_choice('module_mail_setting', 1);
        $this->route    = 'admin.mail-settings';
        $this->view     = 'admin.mail-settings';
        $this->access   = 'mail-setting';

        $this->middleware('permission:' . $this->access . '-view');
    }

    public function index()
    {

        $data['title']  = $this->title;
        $data['route']  = $this->route;
        $data['view']   = $this->view;
        $data['access'] = $this->access;

        $data['row'] = MailSetting::where('status', '1')->first();
        return view($this->view . '.index', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'driver' => 'required',
            'host' => 'required',
            'port' => 'required',
            'username' => 'required',
            'password' => 'required',
            'encryption' => 'required',
            'sender_email' => 'required|email',
            'sender_name' => 'required',
        ]);

        $id = $request->id;

        if ($id == -1) {
            // Insert
            $data = MailSetting::create($request->all());
        } else {
            // Update
            $data = MailSetting::find($id);
            $data->update($request->all());
        }

        // Clear the mail settings cache so changes take effect
        Cache::forget('mail_settings');

        // toastr('Mail settings updated successfully', 'success');

        $notification = array(
            'message' => __('msg_updated_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);
    }
}
