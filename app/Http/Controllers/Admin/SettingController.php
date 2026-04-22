<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{

    public function __construct()
    {
        // Module Data
        $this->title = trans_choice('module_setting', 1);
        $this->route = 'admin.settings';
        $this->view = 'admin.settings';
        $this->path = 'settings';
        $this->access = 'settings';

        $this->middleware('permission:' . $this->access . '-view');
    }

    public function index()
    {
        $data['title'] = $this->title;
        $data['route'] = $this->route;
        $data['view'] = $this->view;
        $data['path'] = $this->path;
        $data['access'] = $this->access;

        $data['row'] = Setting::where('status', '1')->first();

        return view($this->view . '.index', $data);
    }


    public function siteInfo(Request $request)
    {
        // Field Validation
        $request->validate([
            'title' => 'required',

            'meta_title' => 'required',
            'logo' => 'nullable|image',
            'favicon' => 'nullable|image',

            'email' => 'nullable|email',
            'date_format' => 'required',
            'time_format' => 'required',
            'time_zone' => 'required',
            // 'week_start' => 'required',
            'currency' => 'required',
            'currency_symbol' => 'required',
            'decimal_place' => 'required|numeric',
        ]);

        $id = $request->id;


        // Logo upload, fit and store inside public folder 
        if ($request->hasFile('logo')) {

            //Delete Old Image
            $old_file = Setting::find($id);

            if (isset($old_file->logo_path)) {
                $file_path = public_path('uploads/' . $this->path . '/' . $old_file->logo_path);
                if (File::isFile($file_path)) {
                    File::delete($file_path);
                }
            }

            //Upload New Image
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('logo')->getClientOriginalExtension();
            $logoNameToStore = str_replace([' ', '-', '&', '#', '$', '%', '^', ';', ':'], '_', $filename) . '_' . time() . '.' . $extension;

            //Crete Folder Location
            $path = public_path('uploads/' . $this->path . '/');
            if (! File::exists($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            //Resize And Crop as Fit image here (auto width, 200 height)
            $thumbnailpath = $path . $logoNameToStore;
            $img = ImageManager::imagick()->read($request->file('logo')->getRealPath())->resize(600, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($thumbnailpath);
        } else {

            $old_file = Setting::find($id);

            if (isset($old_file->logo_path)) {
                $logoNameToStore = $old_file->logo_path;
            } else {
                $logoNameToStore = Null;
            }
        }



        // Favicon upload, fit and store inside public folder 
        if ($request->hasFile('favicon')) {

            //Delete Old Image
            $old_file = Setting::find($id);

            if (isset($old_file->favicon_path)) {
                $file_path = public_path('uploads/' . $this->path . '/' . $old_file->favicon_path);
                if (File::isFile($file_path)) {
                    File::delete($file_path);
                }
            }

            //Upload New Image
            $filenameWithExt = $request->file('favicon')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('favicon')->getClientOriginalExtension();
            $faviconNameToStore = str_replace([' ', '-', '&', '#', '$', '%', '^', ';', ':'], '_', $filename) . '_' . time() . '.' . $extension;

            //Crete Folder Location
            $path = public_path('uploads/' . $this->path . '/');
            if (! File::exists($path)) {
                File::makeDirectory($path, 0777, true, true);
            }

            //Resize And Crop as Fit image here (64 width, 64 height)
            $thumbnailpath = $path . $faviconNameToStore;
            $img = ImageManager::imagick()->read($request->file('favicon')->getRealPath())->resize(64, 64, function ($constraint) {
                $constraint->upsize();
            })->save($thumbnailpath);
        } else {

            $old_file = Setting::find($id);

            if (isset($old_file->favicon_path)) {
                $faviconNameToStore = $old_file->favicon_path;
            } else {
                $faviconNameToStore = Null;
            }
        }



        // -1 means no data row found
        if ($id == -1) {
            // Insert Data
            $data = new Setting;
            $data->title = $request->title;

            $data->academy_code = $request->academy_code;
            $data->meta_title = $request->meta_title;
            $data->meta_description = $request->meta_description;
            $data->meta_keywords = $request->meta_keywords;
            $data->logo_path = $logoNameToStore;
            $data->favicon_path = $faviconNameToStore;
            $data->phone = $request->phone;
            $data->email = $request->email;

            $data->address = $request->address;

            $data->date_format = $request->date_format;
            $data->time_format = $request->time_format;

            $data->time_zone = $request->time_zone;
            $data->currency = $request->currency;
            $data->currency_symbol = $request->currency_symbol;
            $data->decimal_place = $request->decimal_place;
            $data->copyright_text = $request->copyright_text;
            $data->save();
        } else {
            // Update Data
            $data = Setting::find($id);
            $data->title = $request->title;

            $data->academy_code = $request->academy_code;
            $data->meta_title = $request->meta_title;
            $data->meta_description = $request->meta_description;
            $data->meta_keywords = $request->meta_keywords;
            $data->logo_path = $logoNameToStore;
            $data->favicon_path = $faviconNameToStore;
            $data->phone = $request->phone;
            $data->email = $request->email;

            $data->address = $request->address;

            $data->date_format = $request->date_format;
            $data->time_format = $request->time_format;

            $data->time_zone = $request->time_zone;
            $data->currency = $request->currency;
            $data->currency_symbol = $request->currency_symbol;
            $data->decimal_place = $request->decimal_place;
            $data->copyright_text = $request->copyright_text;
            $data->save();
        }



        // ✅ Setting cache clear karo
        Cache::forget('setting');
        // Toastr::success(__('msg_updated_successfully'), __('msg_success'));

        $notification = array(
            'message' => __('msg_updated_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);
    }
}
