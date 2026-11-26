<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\Campaign;

class OurProjectController extends Controller
{


    public function ourProject()
    {

        $data['projects']=Project::where('status', '1')->orderBy('id', 'desc')->get();
        return view('frontend.pages.project',$data);
    }

    public function ourProjectDescription()
    {
        return view('frontend.pages.project_description');
    }

    public function skillDevelopment()
    {
        return view('frontend.pages.skill_development');
    }

    public function femaleHealthHygiene()
    {
        return view('frontend.pages.female_health_hygiene');
    }

    public function avadhootBalSeva()
    {
        return view('frontend.pages.avadhoot_bal_seva');
    }

    public function healthAwareness()
    {
        return view('frontend.pages.health_awareness');
    }

    public function happinessWellness()
    {
        return view('frontend.pages.happiness_wellness');
    }

    public function womenEmployment()
    {
        return view('frontend.pages.women_employment');
    }
    
    public function pradhanMantri()
    {
        return view('frontend.pages.pradhan_mantri');
    }

    public function journal()
    {
        return view('frontend.pages.journal_of_interdisciplinary');
    }

    public function femaleHealth()
    {
        return view('frontend.pages.female_health_hygiene');
    }

    public function femaleHealthCampaign()
    {
        return view('frontend.pages.female_health_campaign');
    }
    
    public function privacyPolicy()
    {
        return view('frontend.pages.privacy_policy');
    }
    
     public function termCondition()
    {
        return view('frontend.pages.term_condition');
    }
    
    
     public function shippingPolicy()
    {
        return view('frontend.pages.shipping_policy');
    }
    public function cancellationsRefunds()
    {
        return view('frontend.pages.cancellations-refunds');
    }
    
    public function pathologyLab()
    {
        return view('frontend.pages.pathology-lab');
    }

    public function wellnessCentresForFemales()
    {
        return view('frontend.pages.wellness_centres_for_females');
    }

    public function lokNyaySevaKendra()
    {
        return view('frontend.pages.lok_nyay_seva_kendra');
    }
    
     public function projectBhairavi()
    {
        $campaign = Campaign::where('slug', 'project-bhairavi')->first();

        // यदि data ना मिले
        if (!$campaign) {
            abort(404);
        }

        // VARCHAR → INT/FLOAT conversion
        $raised = (float) str_replace([',', '₹', 'Rs.', ' '], '', $campaign->rises_amount);
        // dd($raised);
        $goal   = (float) str_replace([',', '₹', 'Rs.', ' '], '', $campaign->goal_amount);

        // Percentage calculation (0 से 100)
        $percentage = 0;
        if ($goal > 0) {
            $percentage = ($raised / $goal) * 100;
        }

        // dd($percentage);

        // Round for UI (optional)
        $percentage = round($percentage, 2); // example: 65.25%

        return view('frontend.pages.project_bhairavi', compact('campaign', 'raised', 'goal', 'percentage'));
    }
    

}
