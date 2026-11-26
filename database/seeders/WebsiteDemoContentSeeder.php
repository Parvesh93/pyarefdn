<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use RuntimeException;

class WebsiteDemoContentSeeder extends Seeder
{
    /**
     * Restore ONLY public-facing CMS content in an isolated demonstration DB.
     *
     * Never seeds users, donors, donations, volunteers, annual members,
     * contacts, payment settings, passwords or submitted personal details.
     * Existing content is not deleted. All inserts use stable unique keys.
     */
    public function run(): void
    {
        if (!config('app.demo_mode')) {
            throw new RuntimeException('Refusing to seed: DEMO_MODE=true is required in the test installation.');
        }

        if (app()->environment('testing') === false &&
            !str_contains(strtolower((string) config('database.connections.'.config('database.default').'.database')), 'test') &&
            !str_contains(strtolower((string) config('database.connections.'.config('database.default').'.database')), 'demo')) {
            throw new RuntimeException('Refusing to seed: database name must contain test or demo.');
        }

        $this->put('settings', 'title', [
            'title' => 'Pyare Foundation', 'meta_title' => 'Pyare Foundation | Community Health, Education & Empowerment',
            'meta_description' => 'Pyare Foundation works on community health, awareness, education and empowerment. This is a demonstration website.',
            'meta_keywords' => 'Pyare Foundation, community health, NGO, women empowerment, education',
            'logo_path' => 'image_1_1758171687.png', 'favicon_path' => 'cropped_PyareIcon_32x32_1755603392.png',
            'currency' => 'INR', 'currency_symbol' => '₹', 'language' => 'en', 'time_zone' => 'Asia/Kolkata',
            'copyright_text' => '© Pyare Foundation — Demonstration website', 'status' => 1,
        ]);
        $this->put('topbar_settings', 'address_title', [
            'address_title' => 'Community Outreach', 'address' => 'Uttarakhand and Delhi, India',
            'about_title' => 'About Pyare Foundation',
            'about_summery' => 'Working with communities on health, education and empowerment.',
            'social_title' => 'Connect with us', 'status' => 1,
        ]);
        $this->put('social_settings', 'facebook', [
            'facebook' => 'https://www.facebook.com/Pyarefoundation/',
            'instagram' => 'https://www.instagram.com/anjalipyarefound/',
            'youtube' => 'https://www.youtube.com/channel/UC-wbMX7tBO74dF_votB0QEg',
            'status' => 1,
        ]);

        foreach ([
            ['Community Health & Wellness', 'Supporting awareness, preventive care and community wellbeing.', 'Health and Wellness', 'jeena.jpeg'],
            ['Education & Skills', 'Promoting learning, confidence and practical skills.', 'Education', 'project5_1756280400.png'],
            ['Women Empowerment', 'Creating opportunities for women and girls through awareness and participation.', 'Empowerment', 'volunteer.jpeg'],
        ] as [$title, $description, $heading, $attach]) {
            $this->put('focuses', 'title', compact('title', 'description', 'heading', 'attach') + ['status'=>1]);
        }

        foreach ([
            ['Women Health & Hygiene', 'women-health', 'Community-led sessions to build menstrual health awareness and dignity.', '/project/female-health-campaign', 'WhatsApp_Image_2025_12_16_at_15.05.27_1765879157.jpeg'],
            ['Community Education & Life Skills', 'education-skills', 'Interactive learning activities for children and young people.', '/project/skill-development', 'image_12_(1)_1765887058.webp'],
            ['Community Support & Legal Awareness', 'community-support', 'Helping families understand available services and rights.', '/project/lok-nyay-seva-kendra', 'lok4_1765886946.webp'],
            ['Rural Health Outreach', 'rural-health', 'Community engagement focused on prevention and access to information.', '/project/health-awareness', 'rudra6_1756362319.jpg'],
        ] as [$title,$slug,$description,$button_link,$attach]) {
            $this->put('features','slug',compact('title','slug','description','button_link','attach') + [
                'subtitle'=>'Community Programme','button_more'=>'Explore Project','donate_link'=>'/donate','status'=>1
            ]);
        }

        foreach ([
            ['Women Health & Hygiene', '/project/female-health-campaign', 'female-health', 'Promoting menstrual hygiene awareness and preventive healthcare.', 'banner6_1763100473.jpeg'],
            ['Pathology Lab', '/project/pathology-lab', 'health', 'Supporting local access to testing and diagnostics.', 'project1_1756880457.png'],
            ['Wellness Centres for Females', '/project/wellness-centres-for-females', 'women-wellness', 'Creating community spaces for holistic wellbeing.', 'project2_1756880317.png'],
            ['Skill Development', '/project/skill-development', 'education', 'Encouraging skill-building and self-reliance.', 'project4_1756880429.png'],
            ['Project Bhairavi', '/project/project-bhairavi', 'health-hygiene', 'Menstrual health, dignity and community awareness.', 'banner6_1763100473.jpeg'],
            ['Lok Nyay Seva Kendra', '/project/lok-nyay-seva-kendra', 'community', 'Awareness and outreach around community services.', 'lok2_1762776032.jpg'],
        ] as [$title,$button_link,$attribute,$description,$attach]) {
            $this->put('projects','title',compact('title','button_link','attribute','description','attach')+[
                'button_more'=>'Read More','status'=>1
            ]);
        }

        // This project page requires its own campaign record to avoid a 404.
        $this->put('campaigns', 'slug', [
            'title'=>'Project Bhairavi', 'slug'=>'project-bhairavi',
            'attach'=>'banner6_1763381619.jpeg',
            'description'=>'Demonstration programme: community awareness and menstrual health education.',
            'rises_amount'=>'0', 'goal_amount'=>'500000', 'status'=>1,
        ]);

        // Use existing committed gallery photographs. Paths here are relative
        // to public/uploads/gallery, not uploads of volunteers or members.
        $sectionId = $this->ensureSection('Project Bhairavi Gallery');
        if (Schema::hasTable('image_conditions')) {
            $record = DB::table('image_conditions')->first();
            if ($record) {
                DB::table('image_conditions')->where('id',$record->id)->update([
                    'govind_leela'=>$sectionId,'updated_at'=>now()
                ]);
            } else {
                DB::table('image_conditions')->insert([
                    'govind_leela'=>$sectionId,'created_at'=>now(),'updated_at'=>now()
                ]);
            }
        }
        foreach ([
            'phase4_7_1765947925.jpeg','phage12_1765948236.webp',
            'Phage3_66_1765948295.jpeg','phase33_1765948569.webp',
            'WhatsApp_Image_2025_12_28_at_12.21.54_1766908374.jpeg',
            'WhatsApp_Image_2025_12_28_at_12.24.25_1766908422.jpeg',
        ] as $i=>$image) {
            $this->put('galleries','title',[
                'title'=>'Project Bhairavi — Gallery '.($i+1),'image_section'=>$sectionId,
                'description'=>'Programme image from existing website assets',
                'attach'=>$image,'status'=>1,
            ]);
        }

        // Existing photo assets are public. These are sample programme/team
        // records for layout demonstration, not verified biographies.
        foreach ([
            ['Programme Coordination', 'Community programme team', 'pushpa_1756467178.png'],
            ['Health & Wellness', 'Health outreach team', 'Dr_Anjali_Thapliyal_Kaul_photo_1758169821.webp'],
            ['Education & Skills', 'Education programme team', 'ritu_1756467215.png'],
        ] as [$name,$designation,$attach]) {
            $this->put('core_teams','name',compact('name','designation','attach') + [
                'organization'=>'Demo profile — illustrative','status'=>1
            ]);
        }

        foreach ([
            ['Health Programme Advisory', 'Health and wellbeing', 'Dr1_1756369418.jpg'],
            ['Education Programme Advisory', 'Learning and development', 'Dr2_1756369473.jpg'],
            ['Community Outreach Advisory', 'Community engagement', 'Dr3_1756369527.jpg'],
        ] as [$name,$designation,$attach]) {
            $this->put('advisories','name',compact('name','designation','attach') + [
                'organization'=>'Illustrative demo profile', 'primary_role'=>'Programme advisory','status'=>1
            ]);
        }

        foreach ([
            ['Health awareness in local communities', 'Illustrative website news entry for demonstrating the news and media section.', 'News_13_min_1757924724_1766378862.PNG'],
            ['Education and skills outreach', 'Sample description of activities supporting children and young people.', 'News_14_min_1757929451_1766378920.webp'],
            ['Community participation and wellbeing', 'Sample media entry. Replace with an approved, verified report for publication.', 'pn10_1766379187.webp'],
        ] as [$title,$description,$attach]) {
            $this->put('news','title',['title'=>$title,'content'=>$description,'attach'=>$attach,'status'=>'1']);
        }

        foreach ([
            ['Demo Participant A', 'Illustrative feedback', 'The awareness session helped me learn about community health and wellbeing.', 't1_1756380808.jpg'],
            ['Demo Participant B', 'Illustrative feedback', 'A welcoming programme that encourages learning and participation.', 't2_1756380928.jpg'],
            ['Demo Participant C', 'Illustrative feedback', 'The information shared was clear, practical and encouraging.', 't3_1756381007.jpg'],
        ] as [$name,$sub_title,$description,$attach]) {
            $this->put('testimonials','name',compact('name','sub_title','description','attach') + ['status'=>'1']);
        }

        foreach ([
            ['Community Health Awareness Session','Uttarakhand, India','event1_1757590480.png'],
            ['Education and Life Skills Workshop','Uttarakhand, India','event2_1757590653.png'],
            ['Women Wellness Outreach','Uttarakhand, India','event3_1757590759.png'],
        ] as [$name,$location,$attach]) {
            $this->put('events','name',compact('name','location','attach') + [
                'description'=>'Illustrative demo event, not a scheduled public event.',
            ]);
        }

        $this->command?->info('Demo CMS content restored. No donor, donation, volunteer or member records were created.');
    }

    private function put(string $table, string $key, array $values): void
    {
        if (!Schema::hasTable($table)) {
            $this->command?->warn("Skipping missing table: {$table}");
            return;
        }
        // Prevent failures on slight differences between legacy and fresh schemas.
        $values = array_filter($values, fn ($v, $k) => Schema::hasColumn($table,$k), ARRAY_FILTER_USE_BOTH);
        if (!array_key_exists($key,$values)) {
            $this->command?->warn("Skipping {$table}: missing key {$key}");
            return;
        }
        $existing = DB::table($table)->where($key,$values[$key])->exists();
        // Only add records not already present; never overwrite real content.
        if (!$existing) {
            $values['created_at'] = now();
            $values['updated_at'] = now();
            DB::table($table)->insert($values);
        }
    }

    private function ensureSection(string $title): int
    {
        if (!Schema::hasTable('image_sections')) {
            throw new RuntimeException('Missing image_sections table: run test migrations first.');
        }
        $record = DB::table('image_sections')->where('title',$title)->first();
        if ($record) return (int) $record->id;
        return (int) DB::table('image_sections')->insertGetId([
            'title'=>$title,'description'=>'Project Bhairavi demonstration gallery',
            'status'=>1,'created_at'=>now(),'updated_at'=>now()
        ]);
    }
}
