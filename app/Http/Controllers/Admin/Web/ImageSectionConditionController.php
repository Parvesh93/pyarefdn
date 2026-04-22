<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use App\Models\ImageCondintion;
use App\Models\ImageCondition;
use App\Models\ImageSection;
use Illuminate\Http\Request;

class ImageSectionConditionController extends Controller
{

    public function __construct()
    {
        // Module Data

        $this->route    = 'admin.image-section-condition';
        $this->view     = 'admin.web.image-section-condition';
        $this->access   = 'image-section-condition';
    }


    public function index()
    {
        $data['route'] = $this->route;
        $data['view'] = $this->view;
        $data['access'] = $this->access;
        $data['row'] = ImageCondition::first();
        $data['imageSections'] = ImageSection::where('status', '1')->orderBy('id', 'asc')->get();

        return view('admin.web.image_section_condition.index', $data);
    }


    public function store(Request $request)
    {
        // Field Validation
        $request->validate([
            'govind_leela' => 'required',
            'gallery'=>'required'
            
        ]);



        $id = $request->id;


        // -1 means no data row found
        if ($id == -1) {
            // Insert Data
            $imageCondition = new ImageCondition();
            $imageCondition->govind_leela = $request->govind_leela;
            $imageCondition->gallery=$request->gallery;
            
            $imageCondition->save();
        } else {
            // Update Data
            $imageCondition = ImageCondition::find($id);
            $imageCondition->govind_leela = $request->govind_leela;
            $imageCondition->gallery=$request->gallery;
            $imageCondition->save();
        }



        $notification = array(
            'message' => __('msg_updated_successfully'),
            'alert-type' => __('msg_success')
        );

        return redirect()->back()->with($notification);
    }
}
