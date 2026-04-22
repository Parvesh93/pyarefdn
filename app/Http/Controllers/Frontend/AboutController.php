<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Advisory;
use App\Models\CoreTeam;
use App\Models\FounderStory;
use Illuminate\Http\Request;

class AboutController extends Controller
{
   public function aboutOrganization()
   {
      $data['advisories'] = Advisory::where('status', '1')->orderBy('id', 'asc')->get();
      $data['coreTeams'] = CoreTeam::where('status', '1')->orderBy('id', 'asc')->get();

      return view('frontend.pages.about_organization', $data);
   }

   public function aboutPyareLal()
   {
      $stories = FounderStory::where('status', 1)
         ->where('is_featured', 1)
         ->orderBy('sort_order', 'asc')
         ->orderBy('story_date', 'desc')
         ->take(6)
         ->get();

      return view('frontend.pages.about_pyarelal', compact('stories'));
   }

   public function aboutPresident()
   {
      return view('frontend.pages.about_president');
   }
}