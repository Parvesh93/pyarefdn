<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\SocialSetting;
use Illuminate\Http\Request;

class SocialSettingController extends Controller
{
    public function __construct()
    {
        // Module Data
        $this->title    = trans_choice('module_social_setting', 1);
        $this->route    = 'admin.social-setting';
        $this->view     = 'admin.web.social-setting';
        $this->access   = 'social-setting';

        $this->middleware('permission:' . $this->access . '-view');
    }


    public function index()
    {
        //
        $data['title']  = $this->title;
        $data['route']  = $this->route;
        $data['view']   = $this->view;
        $data['access'] = $this->access;

        $data['row'] = SocialSetting::first();

        return view($this->view . '.index', $data);
    }

    public function store(Request $request)
    {
        // Field Validation
        $request->validate([
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',

            'linkedin' => 'nullable|url',
            'youtube' => 'nullable|url',

        ]);

        $id = $request->id;


        // -1 means no data row found
        if ($id == -1) {
            // Insert Data
            $social = new SocialSetting;
            $social->facebook = $request->facebook;
            $social->twitter = $request->twitter;
            $social->instagram = $request->instagram;

            $social->linkedin = $request->linkedin;
            $social->youtube = $request->youtube;


            $social->telegram = $request->telegram;
            $social->whatsapp = $request->whatsapp;
            $social->save();
        } else {
            // Update Data
            $social = SocialSetting::find($id);
            $social->facebook = $request->facebook;
            $social->twitter = $request->twitter;
            $social->instagram = $request->instagram;

            $social->linkedin = $request->linkedin;
            $social->youtube = $request->youtube;


            $social->telegram = $request->telegram;
            $social->whatsapp = $request->whatsapp;
            $social->save();
        }


        $notification = array(
            'message' => __('msg_updated_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);
    }
}
