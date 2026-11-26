<!-- Title section -->


    @extends('frontend.layouts.master')

@section('title', 'Wellness Centres for Females')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<section class="relative py-8 bg-[#11144a] overflow-hidden text-white">
    <div class="absolute inset-0 bg-gradient-to-r from-[#11144a] via-[#171a59] to-[#ff8a3d]/80"></div>

    <div class="relative max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-14">
        <span class="inline-block bg-orange-400/20 text-orange-300 px-4 py-2 rounded-full text-sm font-semibold mb-4">
            Supported by GAIL (India) Limited
        </span>

        <h1 class="text-3xl md:text-5xl font-bold leading-tight max-w-4xl">
            Wellness Centres for Females
        </h1>
        
        <div class="mt-4 inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-4 py-2">
    <i class="fa-solid fa-calendar-days text-orange-400"></i>
    <span class="text-white font-medium">
        January – June 2026
    </span>
</div>

        <p class="mt-4 max-w-3xl text-gray-200 text-base md:text-lg leading-relaxed">
            Improving women’s health through preventive healthcare, diagnostic screening,
            menstrual hygiene awareness, nutrition counselling, mental health support, and community outreach.
        </p>

        <nav class="mt-5 text-sm">
            <a href="{{ route('home') }}" class="text-orange-300 font-semibold hover:underline">Home</a>
            <span class="mx-2 text-gray-300">/</span>
            <span class="text-gray-200">Wellness Centres for Females</span>
        </nav>
    </div>
</section>

<!-- Gallery -->
<section class="py-10 bg-white">
    <div class="max-w-screen-2xl mx-auto px-4 lg:px-14">

        <div class="swiper wellnessGallery">

            <div class="swiper-wrapper">

                @for($i = 1; $i <= 17; $i++)
                    <div class="swiper-slide">

                        <a href="{{ asset('resources/views/frontend/images/wellness-centres-2026/image_'.$i.'.jpeg') }}"
                           data-fancybox="wellness-gallery"
                           data-caption="Wellness Centre {{ $i }}">

                            <img
                                src="{{ asset('resources/views/frontend/images/wellness-centres-2026/image_'.$i.'.jpeg') }}"
                                alt="Gallery {{ $i }}"
                                class="w-full aspect-[4/3] object-cover rounded-2xl">

                        </a>

                    </div>
                @endfor

            </div>

        </div>

    </div>
</section>

<section class="w-full py-10 bg-gray-50">
    <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-14">

        @php
            $highlights = [
                ['number' => '6', 'label' => 'Wellness Camps Conducted', 'icon' => 'fa-hospital-user'],
                ['number' => '1,885', 'label' => 'Women & Girls Benefitted', 'icon' => 'fa-users'],
                ['number' => '1,860', 'label' => 'Blood Samples Collected', 'icon' => 'fa-vial'],
                ['number' => '1,885', 'label' => 'Sanitary Pads Distributed', 'icon' => 'fa-hand-holding-heart'],
                ['number' => '1,885', 'label' => 'Supplement Kits Distributed', 'icon' => 'fa-kit-medical'],
                ['number' => '6', 'label' => 'Villages & Institutions Covered', 'icon' => 'fa-location-dot'],
            ];

            $objectives = [
                'Improve access to preventive healthcare',
                'Promote menstrual hygiene awareness',
                'Encourage early diagnosis through health screening',
                'Improve nutrition and healthy lifestyle practices',
                'Strengthen mental health awareness',
                'Empower women through health education',
                'Increase community participation in women’s healthcare',
            ];

            $services = [
                [
                    'title' => 'Medical Care',
                    'icon' => 'fa-stethoscope',
                    'items' => ['General Health Check-up', 'Doctor Consultation', 'Blood Sample Collection', 'Diagnostic Tests', 'Preventive Health Screening']
                ],
                [
                    'title' => 'Nutrition & Wellness',
                    'icon' => 'fa-apple-whole',
                    'items' => ['Nutrition Assessment', 'Diet Counselling', 'Vitamins & Nutritional Supplements', 'Healthy Lifestyle Guidance']
                ],
                [
                    'title' => 'Women’s Health',
                    'icon' => 'fa-person-dress',
                    'items' => ['Menstrual Hygiene Education', 'Reproductive Health Awareness', 'Personal Hygiene Awareness', 'Sanitary Pads & Heating Pads Distribution']
                ],
                [
                    'title' => 'Mental Well-being',
                    'icon' => 'fa-brain',
                    'items' => ['Mental Health Counselling', 'Stress Management', 'Motivation Sessions', 'Interactive Awareness Programmes']
                ],
            ];

            $camps = [
                ['camp' => 'Camp 1', 'place' => 'Village Gadgu, Ukhimath Block', 'date' => '30–31 January 2026', 'desc' => 'The inaugural Wellness Centre introduced comprehensive healthcare services through medical consultations, diagnostic screening, nutrition counselling, menstrual hygiene awareness, and distribution of health support materials.', 'stats' => ['200 Beneficiaries', '175 Blood Samples', '200 Sanitary Pads', '200 Supplement Kits']],
                ['camp' => 'Camp 2', 'place' => 'Government Degree College, Guptkashi', 'date' => '24–28 February 2026', 'desc' => 'Focused on adolescent girls and young women, this camp promoted preventive healthcare, nutrition, reproductive health awareness, counselling, and diagnostic screening.', 'stats' => ['299 Beneficiaries', '299 Blood Samples', 'Nutrition Sessions', 'Mental Health Sessions']],
                ['camp' => 'Camp 3', 'place' => 'Government Degree College, Jakholi', 'date' => '25–29 March 2026', 'desc' => 'The largest camp of the project, reaching the highest number of beneficiaries through comprehensive healthcare services and awareness programmes.', 'stats' => ['456 Beneficiaries', '456 Blood Samples', 'Highest Participation', 'Health Awareness']],
                ['camp' => 'Camp 4', 'place' => 'Government Degree College, Rudraprayag', 'date' => '20–24 April 2026', 'desc' => 'This Wellness Centre strengthened preventive healthcare awareness among college-going women through medical screening, nutrition counselling, and mental wellness sessions.', 'stats' => ['260 Beneficiaries', '260 Blood Samples', 'Health Screening', 'Women’s Health Education']],
                ['camp' => 'Camp 5', 'place' => 'Village Rayari, Jakholi Block', 'date' => '14–15 May 2026', 'desc' => 'Returning to a rural setting, this camp expanded healthcare access through consultations, counselling, hygiene awareness, and distribution of essential materials.', 'stats' => ['340 Beneficiaries', '340 Blood Samples', 'Hygiene Awareness', 'Pads, Heating Pads & Supplements']],
                ['camp' => 'Camp 6', 'place' => 'Government Degree College, Augustmuni', 'date' => '4–8 June 2026', 'desc' => 'The concluding Wellness Centre reinforced preventive healthcare practices while providing comprehensive health services and counselling.', 'stats' => ['330 Beneficiaries', '330 Blood Samples', 'Health Check-ups', 'Nutrition & Counselling']],
            ];

            $impact = [
                'Improved healthcare accessibility',
                'Better menstrual hygiene awareness',
                'Early identification of common health conditions',
                'Enhanced nutrition knowledge',
                'Greater confidence in seeking medical support',
                'Increased community participation',
                'Improved mental health awareness and counselling support',
            ];

            $testimonials = [
                ['name' => 'Smt. Bina Devi', 'role' => 'Mahila Mangal Dal Adhyaksha, Rayari Village', 'quote' => 'We sincerely thank Pyare Foundation for organizing this highly beneficial health camp in Rayari Village. The initiative supported women and girls by providing sanitary pads, heating pads, and health supplements while creating greater awareness about feminine hygiene and healthcare.'],
                ['name' => 'Smt. Sushma', 'role' => 'Village Pradhan, Rayari Village', 'quote' => 'The Wellness Centre was a remarkable initiative for our village. Through the distribution of essential health resources and hygiene awareness sessions, the programme strengthened healthcare access and empowered women with knowledge.'],
                ['name' => 'Dr. Ashish Tripathi', 'role' => 'Principal, Government Degree College, Rudraprayag', 'quote' => 'Pyare Foundation successfully organized a holistic health programme covering both physical and mental wellness. The practical support provided through heating pads and health awareness activities offered meaningful benefits.'],
                ['name' => 'Dr. Rajani', 'role' => 'Professor, Government Degree College, Rudraprayag', 'quote' => 'The Wellness Centre for Females was truly remarkable. The mental wellness sessions, along with the guidance provided by counsellors, mentors, and motivators, greatly benefited the participants.'],
                ['name' => 'Dr. Manoj Gairi', 'role' => 'Principal, Government Degree College, Guptkashi', 'quote' => 'Health camps like these reflect the true spirit of humanity, service, and social welfare. Such initiatives encourage students and communities to become more aware of their health.'],
                ['name' => 'Dr. K. C. Dudpure', 'role' => 'Principal, Government Degree College, Augustmuni', 'quote' => 'We are grateful to Pyare Foundation for organizing this impactful health camp on our campus. The distribution of sanitary pads, heating pads, and nutritional supplements promoted healthcare and hygiene awareness.'],
            ];
        @endphp

        <!-- Highlights -->
        <div class="grid grid-cols-2 lg:grid-cols-6 gap-3 sm:gap-4 -mt-2">
            @foreach($highlights as $item)
                <div class="bg-white rounded-2xl p-4 sm:p-5 shadow-sm border border-gray-100 text-center">
                    <div class="w-11 h-11 mx-auto rounded-full bg-orange-100 flex items-center justify-center mb-3">
                        <i class="fa-solid {{ $item['icon'] }} text-orange-500"></i>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-bold text-[#11144a]">{{ $item['number'] }}</h3>
                    <p class="text-xs sm:text-sm text-gray-600 mt-1 leading-snug">{{ $item['label'] }}</p>
                </div>
            @endforeach
        </div>

        <!-- About -->
        <div class="mt-12 grid lg:grid-cols-2 gap-8 items-center">
            <div>
                <span class="text-orange-500 font-bold uppercase tracking-wide text-sm">About the Initiative</span>
                <h2 class="text-2xl md:text-4xl font-bold text-[#11144a] mt-2">
                    Preventive Healthcare for Women & Adolescent Girls
                </h2>
                <p class="mt-4 text-gray-700 leading-relaxed text-justify">
                    The Wellness Centres for Females project was designed to improve access to quality healthcare for women and adolescent girls living in rural communities and educational institutions. Through an integrated approach combining medical consultation, diagnostic testing, nutrition education, counselling, menstrual hygiene awareness, and preventive healthcare, the initiative empowered beneficiaries with knowledge and resources for healthier lives.
                </p>
            </div>

            <div class="bg-[#11144a] rounded-3xl p-6 sm:p-8 text-white relative overflow-hidden">
                <div class="absolute -top-16 -right-16 w-44 h-44 bg-orange-400 rounded-full opacity-20"></div>
                <h3 class="text-2xl font-bold relative">Project Objectives</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-5 relative">
                    @foreach($objectives as $objective)
                        <div class="flex gap-2 items-start">
                            <i class="fa-solid fa-circle-check text-orange-400 mt-1"></i>
                            <span class="text-sm text-gray-100">{{ $objective }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        
        <!-- ================= TEAM SECTION ================= -->

<section class="mt-16">

    <div class="text-center mb-10">
        <span class="text-orange-500 font-semibold uppercase tracking-wider text-sm">
            Project Team
        </span>

        <h2 class="text-3xl md:text-4xl font-bold text-[#11144a] mt-2">
            Dedicated Team Behind the Initiative
        </h2>

        <p class="mt-3 max-w-3xl mx-auto text-gray-600">
            A multidisciplinary team of healthcare professionals, counsellors,
            technical experts, and community workers collaborated to successfully
            implement the Wellness Centres across Rudraprayag District.
        </p>
    </div>

    <!-- ================= Leadership ================= -->

    <div class="mb-12">

        <h3 class="text-2xl font-bold text-[#11144a] mb-6">
            Project Leadership
        </h3>

        <div class="grid grid-cols-2 gap-4 sm:gap-5">

            <div class="bg-white rounded-2xl border border-gray-200 p-4 sm:p-6 shadow-sm h-full">

                <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-orange-100 flex items-center justify-center mb-4">
                    <i class="fa-solid fa-user-tie text-orange-500 text-lg sm:text-xl"></i>
                </div>

                <h4 class="font-bold text-base sm:text-xl text-[#11144a] leading-tight">
                    Dr. Anjali Thapliyal Kaul
                </h4>

                <p class="text-orange-500 font-semibold text-sm sm:text-base mt-2">
                    President
                </p>

            </div>

            <div class="bg-white rounded-2xl border border-gray-200 p-4 sm:p-6 shadow-sm h-full">

                <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-orange-100 flex items-center justify-center mb-4">
                    <i class="fa-solid fa-user-tie text-orange-500 text-lg sm:text-xl"></i>
                </div>

                <h4 class="font-bold text-base sm:text-xl text-[#11144a] leading-tight">
                    Mr. Rajesh Kaul
                </h4>

                <p class="text-orange-500 font-semibold text-sm sm:text-base mt-2">
                    Secretary
                </p>

            </div>

        </div>

    </div>

    <!-- ================= Medical Team ================= -->

    <h3 class="text-2xl font-bold text-[#11144a] mb-6">
        Medical & Technical Team
    </h3>

    <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-5">

        <div class="bg-white rounded-2xl border border-gray-200 p-4 sm:p-6 shadow-sm h-full">
            <h4 class="font-bold text-base sm:text-lg text-[#11144a]">Dr. Anand Kaler</h4>
            <p class="text-orange-500 font-semibold text-sm mt-2 mb-3">Physician</p>
            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                Medical consultation, diagnosis and treatment guidance.
            </p>
        </div>

        <div class="bg-white rounded-2xl border border-gray-200 p-4 sm:p-6 shadow-sm h-full">
            <h4 class="font-bold text-base sm:text-lg text-[#11144a]">Mr. Paras Kumar</h4>
            <p class="text-orange-500 font-semibold text-sm mt-2 mb-3">Lab Technician</p>
            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                Blood sample collection and laboratory procedures.
            </p>
        </div>

        <div class="bg-white rounded-2xl border border-gray-200 p-4 sm:p-6 shadow-sm h-full">
            <h4 class="font-bold text-base sm:text-lg text-[#11144a]">Mr. Vipin Rawat</h4>
            <p class="text-orange-500 font-semibold text-sm mt-2 mb-3">Pharmacist</p>
            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                Medicine dispensing and beneficiary guidance.
            </p>
        </div>

        <div class="bg-white rounded-2xl border border-gray-200 p-4 sm:p-6 shadow-sm h-full">
            <h4 class="font-bold text-base sm:text-lg text-[#11144a]">Ms. Ekta Aggarwal</h4>
            <p class="text-orange-500 font-semibold text-sm mt-2 mb-3">Dietician</p>
            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                Nutrition assessment and dietary counselling.
            </p>
        </div>

        <div class="bg-white rounded-2xl border border-gray-200 p-4 sm:p-6 shadow-sm h-full">
            <h4 class="font-bold text-base sm:text-lg text-[#11144a]">
                Mrs. Sushma Kotnala Thapliyal
            </h4>
            <p class="text-orange-500 font-semibold text-sm mt-2 mb-3">
                Clinical Psychologist & Counsellor
            </p>
            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                Mental health counselling and psychosocial support.
            </p>
        </div>

        <div class="bg-white rounded-2xl border border-gray-200 p-4 sm:p-6 shadow-sm h-full">
            <h4 class="font-bold text-base sm:text-lg text-[#11144a]">
                Mr. Mukesh Prasad
            </h4>
            <p class="text-orange-500 font-semibold text-sm mt-2 mb-3">
                Mentor
            </p>
            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                Leadership, life skills and motivation sessions.
            </p>
        </div>

        <div class="bg-white rounded-2xl border border-gray-200 p-4 sm:p-6 shadow-sm h-full">
            <h4 class="font-bold text-base sm:text-lg text-[#11144a]">
                Mr. Ankit Chaurasia
            </h4>
            <p class="text-orange-500 font-semibold text-sm mt-2 mb-3">
                Motivator
            </p>
            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                Community motivation and awareness programmes.
            </p>
        </div>

        <div class="bg-white rounded-2xl border border-gray-200 p-4 sm:p-6 shadow-sm h-full">
            <h4 class="font-bold text-base sm:text-lg text-[#11144a]">
                Mrs. Meena Devi
            </h4>
            <p class="text-orange-500 font-semibold text-sm mt-2 mb-3">
                ASHA Worker
            </p>
            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                Community mobilization and beneficiary coordination.
            </p>
        </div>

        <div class="bg-white rounded-2xl border border-gray-200 p-4 sm:p-6 shadow-sm h-full">
            <h4 class="font-bold text-base sm:text-lg text-[#11144a]">
                Mrs. Vineeta Devi
            </h4>
            <p class="text-orange-500 font-semibold text-sm mt-2 mb-3">
                Anganwadi Worker
            </p>
            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
                Local outreach and participant support.
            </p>
        </div>

    </div>

</section>

        <!-- Services -->
        <div class="mt-14">
            <div class="text-center max-w-3xl mx-auto">
                <span class="text-orange-500 font-bold uppercase tracking-wide text-sm">Services Offered</span>
                <h2 class="text-2xl md:text-4xl font-bold text-[#11144a] mt-2">Holistic Healthcare Support</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mt-8">
                @foreach($services as $service)
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                        <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center mb-4">
                            <i class="fa-solid {{ $service['icon'] }} text-orange-500 text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#11144a] mb-4">{{ $service['title'] }}</h3>
                        <ul class="space-y-2">
                            @foreach($service['items'] as $point)
                                <li class="flex gap-2 text-sm text-gray-700">
                                    <i class="fa-solid fa-check text-orange-500 mt-1"></i>
                                    <span>{{ $point }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Camps -->
        <div class="mt-14">
            <div class="text-center max-w-3xl mx-auto">
                <span class="text-orange-500 font-bold uppercase tracking-wide text-sm">Wellness Camps Conducted</span>
                <h2 class="text-2xl md:text-4xl font-bold text-[#11144a] mt-2">Six Camps Across Rudraprayag District</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-8">
                @foreach($camps as $camp)
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="bg-[#11144a] text-white p-5">
                            <span class="inline-block bg-orange-400 text-[#11144a] px-3 py-1 rounded-full text-xs font-bold mb-3">
                                {{ $camp['camp'] }}
                            </span>
                            <h3 class="text-xl font-bold">{{ $camp['place'] }}</h3>
                            <p class="text-orange-300 text-sm mt-2">
                                <i class="fa-solid fa-calendar-days mr-1"></i> {{ $camp['date'] }}
                            </p>
                        </div>

                        <div class="p-5">
                            <p class="text-gray-700 text-sm leading-relaxed">{{ $camp['desc'] }}</p>

                            <div class="grid grid-cols-2 gap-2 mt-5">
                                @foreach($camp['stats'] as $stat)
                                    <div class="bg-orange-50 text-[#11144a] rounded-lg p-3 text-xs font-semibold">
                                        {{ $stat }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Impact + Statistics -->
        <div class="mt-14 grid lg:grid-cols-2 gap-8">
            <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-gray-100">
                <span class="text-orange-500 font-bold uppercase tracking-wide text-sm">Overall Impact</span>
                <h2 class="text-2xl md:text-3xl font-bold text-[#11144a] mt-2">
                    Creating Healthier, Informed Communities
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-6">
                    @foreach($impact as $point)
                        <div class="flex gap-3 bg-gray-50 rounded-xl p-3">
                            <i class="fa-solid fa-circle-check text-orange-500 mt-1"></i>
                            <p class="text-sm text-gray-700">{{ $point }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-gray-100">
                <span class="text-orange-500 font-bold uppercase tracking-wide text-sm">Project Statistics</span>
                <h2 class="text-2xl md:text-3xl font-bold text-[#11144a] mt-2 mb-5">
                    Achievement Summary
                </h2>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <tbody class="divide-y divide-gray-100">
                            <tr><td class="py-3 text-gray-700">Wellness Camps Conducted</td><td class="py-3 text-right font-bold text-[#11144a]">6</td></tr>
                            <tr><td class="py-3 text-gray-700">Women & Girls Benefitted</td><td class="py-3 text-right font-bold text-[#11144a]">1,885</td></tr>
                            <tr><td class="py-3 text-gray-700">Blood Samples Collected</td><td class="py-3 text-right font-bold text-[#11144a]">1,860</td></tr>
                            <tr><td class="py-3 text-gray-700">Sanitary Pads Distributed</td><td class="py-3 text-right font-bold text-[#11144a]">1,885</td></tr>
                            <tr><td class="py-3 text-gray-700">Supplement Kits Distributed</td><td class="py-3 text-right font-bold text-[#11144a]">1,885</td></tr>
                            <tr><td class="py-3 text-gray-700">Villages & Institutions Covered</td><td class="py-3 text-right font-bold text-[#11144a]">6</td></tr>
                            <tr><td class="py-3 text-gray-700">Doctor Consultation Sessions</td><td class="py-3 text-right font-bold text-[#11144a]">6</td></tr>
                            <tr><td class="py-3 text-gray-700">Nutrition Awareness Sessions</td><td class="py-3 text-right font-bold text-[#11144a]">6</td></tr>
                            <tr><td class="py-3 text-gray-700">Counselling & Motivation Sessions</td><td class="py-3 text-right font-bold text-[#11144a]">6</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="mt-14">
            <div class="text-center max-w-3xl mx-auto">
                <span class="text-orange-500 font-bold uppercase tracking-wide text-sm">Voices from the Community</span>
                <h2 class="text-2xl md:text-4xl font-bold text-[#11144a] mt-2">Stories of Appreciation</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-8">
                @foreach($testimonials as $testimonial)
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                        <i class="fa-solid fa-quote-left text-orange-400 text-3xl mb-4"></i>
                        <p class="text-gray-700 text-sm leading-relaxed italic">
                            “{{ $testimonial['quote'] }}”
                        </p>
                        <div class="mt-5 pt-5 border-t border-gray-100">
                            <h3 class="font-bold text-[#11144a]">{{ $testimonial['name'] }}</h3>
                            <p class="text-xs text-gray-500 mt-1">{{ $testimonial['role'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Gallery -->
        <div class="mt-14">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-6">
                <div>
                    <span class="text-orange-500 font-bold uppercase tracking-wide text-sm">Gallery</span>
                    <h2 class="text-2xl md:text-4xl font-bold text-[#11144a] mt-2">Project Highlights</h2>
                </div>
                <p class="text-gray-600 max-w-2xl text-sm md:text-base">
                    Explore highlights from all six Wellness Camps showcasing health screenings,
                    counselling sessions, awareness programmes, and community participation.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-3 sm:gap-5">
                @for($i = 1; $i <= 12; $i++)
                    <a href="{{ asset('resources/views/frontend/images/wellness-centres-2026/image_'.$i.'.jpeg') }}"
                       data-fancybox="wellness-gallery"
                       class="block overflow-hidden rounded-2xl bg-gray-200 aspect-[4/3]">
                        <img src="{{ asset('resources/views/frontend/images/wellness-centres-2026/image_'.$i.'.jpeg') }}"
                             alt="Wellness Centre Gallery {{ $i }}"
                             class="w-full h-full object-cover hover:scale-105 transition duration-500">
                    </a>
                @endfor
            </div>
        </div>

        <!-- CTA -->
        <div class="mt-14 bg-[#11144a] rounded-3xl p-6 sm:p-10 text-white text-center relative overflow-hidden">
            <div class="absolute -top-20 -left-20 w-52 h-52 bg-orange-400 rounded-full opacity-20"></div>
            <div class="absolute -bottom-20 -right-20 w-52 h-52 bg-orange-400 rounded-full opacity-20"></div>

            <div class="relative max-w-3xl mx-auto">
                <h2 class="text-2xl md:text-4xl font-bold">Together Towards Better Women’s Health</h2>
                <p class="mt-4 text-gray-200 leading-relaxed">
                    Through six Wellness Centres, Pyare Foundation, with the support of GAIL (India) Limited,
                    empowered 1,885 women and adolescent girls with preventive healthcare, diagnostic services,
                    counselling, menstrual hygiene education, and nutrition support.
                </p>

<!--                <div class="mt-7 flex flex-col sm:flex-row gap-3 justify-center">-->
<!--                    <a href="#"-->
<!--   class="bg-orange-400 text-[#11144a] px-6 py-3 rounded-full font-bold hover:bg-orange-300 transition">-->
<!--    Support Our Mission-->
<!--</a>-->

<!--<a href="#"-->
<!--   class="bg-white text-[#11144a] px-6 py-3 rounded-full font-bold hover:bg-gray-100 transition">-->
<!--    Partner With Us-->
<!--</a>-->
<!--                </div>-->
            </div>
        </div>

    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    new Swiper(".wellnessGallery", {

    slidesPerView: 1.2,
    spaceBetween: 16,

    breakpoints: {

        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },

        1024: {
            slidesPerView: 3,
            spaceBetween: 24,
        }

    },

    loop: true,

    navigation: {
        nextEl: ".gallery-next",
        prevEl: ".gallery-prev",
    },

});
</script>
@endsection
