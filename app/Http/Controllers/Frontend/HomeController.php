<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Advisory;
use App\Models\Donation;
use App\Models\Feature;
use App\Models\Focuse;
use App\Models\Gallery;
use App\Models\ImageCondition;
use App\Models\News;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    public function index()
    {
        $data['focuses'] = Focuse::where('status', '1')->orderBy('id', 'asc')->get();
        $data['features'] = Feature::where('status', '1')->orderBy('id', 'desc')->get();
        $data['advisories'] = Advisory::where('status', '1')->orderBy('id', 'desc')->get();
        $data['news'] = News::where('status', '1')->orderBy('id', 'desc')->get();
        $data['testimonials'] = Testimonial::where('status', '1')->orderBy('id', 'desc')->get();
        $imageSectionCondition = ImageCondition::first();
        $data['projectGovindImages']=Gallery::where('image_section',$imageSectionCondition->govind_leela)->where('status', '1')->orderBy('id', 'desc')->get();

        return view('frontend.home.home', $data);
    }


    public function donatePage()
    {
        return view('frontend.pages.donate_page');
    }

    public function plantationPage()
    {
        return view('frontend.pages.plantation_page1');
    }

    public function rudraPage(string $title)
    {
        return view('frontend.pages.rudra', compact('title'));
    }

    public function shambhooPage(string $title)
    {
        return view('frontend.pages.shambhoo', compact('title'));
    }
    public function govindPage(string $title)
    {
        return view('frontend.pages.govind', compact('title'));
    }

    public function thankuPage()
    {
        return view('frontend.pages.thanku',1);
    }

    public function paymentPage(string $id)
    {
        $receiptData = Donation::where('id', $id)->first();
        return view('frontend.pages.payment_recipt',compact('receiptData'));
    }
    
    public function event()
    {
        return view('frontend.pages.all_event');
    }


}
