@extends('frontend.layouts.master')
@section('title')Wellness Centres for Females@endsection
@section('page_css')
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;600;700;800&display=swap" rel="stylesheet">
<style>
.pf-wellness{--navy:#16163f;--orange:#f46226;--cream:#fff9f4;--muted:#66707a;font-family:'DM Sans',Arial,sans-serif;color:#25283d}
.pf-wellness *{box-sizing:border-box}
.pf-wellness h1,.pf-wellness h2,.pf-wellness h3{font-family:'Manrope',sans-serif;letter-spacing:-.035em}
.pf-wellness .pw-container{max-width:1440px;margin:auto;padding:0 clamp(20px,3vw,52px)}
.pf-wellness .pw-tag{display:inline-flex;align-items:center;gap:9px;color:var(--orange);font-size:11px;letter-spacing:.15em;font-weight:800;text-transform:uppercase}
.pf-wellness .pw-tag:before{content:"";width:8px;height:8px;border-radius:50%;background:var(--orange)}
.pf-wellness .pw-hero{background:linear-gradient(90deg,rgba(14,17,49,.97),rgba(16,17,51,.83) 54%,rgba(16,17,51,.42)),url("{{ asset('uploads/female-health/image_2.jpg') }}") center/cover no-repeat;color:#fff}
.pf-wellness .pw-hero-inner{padding-top:52px;padding-bottom:76px;min-height:455px;display:flex;flex-direction:column;justify-content:center;align-items:flex-start}
.pf-wellness .pw-breadcrumb{display:flex;gap:10px;flex-wrap:wrap;font-size:12px;margin-bottom:35px;color:#eedfdc}
.pf-wellness .pw-breadcrumb a{color:#fff;text-decoration:none}
.pf-wellness .pw-hero .pw-tag{color:#ffaf82}
.pf-wellness .pw-hero h1{font-size:clamp(38px,4.8vw,66px);line-height:1.13;font-weight:800;color:#fff;margin:14px 0 17px;max-width:850px}
.pf-wellness .pw-hero h1 span,.pf-wellness .pw-section-heading h2 span{color:var(--orange)}
.pf-wellness .pw-hero p{font-size:15px;line-height:1.85;max-width:760px;color:#f2e8e6;margin:0 0 16px}
.pf-wellness .pw-hero-date{font-size:12px;font-weight:800;letter-spacing:.12em;color:#ffc5a5}
.pf-wellness .pw-stats{position:relative;background:#fff;border-bottom:1px solid #eee6e0}
.pf-wellness .pw-stats-inner{display:grid;grid-template-columns:repeat(5,minmax(0,1fr));gap:0;padding-top:29px;padding-bottom:29px}
.pf-wellness .pw-stat{padding:12px 20px;border-right:1px solid #f0e5dd}
.pf-wellness .pw-stat:last-child{border-right:0}
.pf-wellness .pw-stat strong{display:block;color:var(--navy);font-size:clamp(26px,2.6vw,39px);font-weight:800;letter-spacing:-.055em;line-height:1.15}
.pf-wellness .pw-stat span{display:block;color:#66707a;font-size:12px;line-height:1.5;margin-top:8px}
.pf-wellness .pw-section{padding:86px 0;background:#fff}
.pf-wellness .pw-section.alt{background:var(--cream)}
.pf-wellness .pw-section-heading{margin:0 auto 36px;max-width:800px;text-align:center}
.pf-wellness .pw-section-heading h2{font-size:clamp(28px,3.2vw,43px);line-height:1.22;color:var(--navy);font-weight:800;margin:12px 0 0}
.pf-wellness .pw-section-heading p{font-size:14px;line-height:1.8;color:#64707a;margin:14px 0 0}
.pf-wellness .pw-about{display:grid;grid-template-columns:minmax(0,1.05fr) minmax(0,.95fr);gap:65px;align-items:center}
.pf-wellness .pw-about-media{display:grid;grid-template-columns:1.2fr .8fr;gap:11px;height:465px;overflow:hidden}
.pf-wellness .pw-about-media img{width:100%;height:100%;object-fit:cover;display:block;border-radius:8px}
.pf-wellness .pw-about-media img:nth-child(2){height:76%;align-self:end}
.pf-wellness .pw-about-text h2{font-size:clamp(29px,3vw,41px);color:var(--navy);font-weight:800;line-height:1.2;margin:13px 0 20px}
.pf-wellness .pw-about-text p{font-size:14px;line-height:1.9;color:#5b636e;margin:0 0 20px}
.pf-wellness .pw-objectives,.pf-wellness .pw-impact-list{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:13px}
.pf-wellness .pw-objectives li,.pf-wellness .pw-impact-list li{list-style:none;position:relative;background:#fff;border:1px solid #eee5dd;border-radius:7px;padding:17px 16px 17px 36px;color:#434c5a;font-size:13px;line-height:1.6}
.pf-wellness .pw-objectives li:before,.pf-wellness .pw-impact-list li:before{content:"✓";color:var(--orange);font-weight:800;position:absolute;left:15px}
.pf-wellness .pw-services{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:18px}
.pf-wellness .pw-service{padding:26px 22px;border:1px solid #eee4df;border-radius:9px;background:#fff;box-shadow:0 8px 22px #16163f08}
.pf-wellness .pw-service-icon{display:grid;place-items:center;width:44px;height:44px;border-radius:9px;background:#fff0e8;color:var(--orange);font-size:23px;font-weight:800;margin-bottom:20px}
.pf-wellness .pw-service h3{font-size:19px;font-weight:800;color:var(--navy);margin:0 0 16px}
.pf-wellness .pw-service ul{padding:0;margin:0;list-style:none;display:grid;gap:10px}
.pf-wellness .pw-service li{font-size:12px;color:#626a75;line-height:1.65;padding-left:15px;position:relative}
.pf-wellness .pw-service li:before{content:"";position:absolute;left:0;top:8px;width:5px;height:5px;background:var(--orange);border-radius:50%}
.pf-wellness .pw-team-leaders{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:15px;margin-bottom:25px}
.pf-wellness .pw-leader,.pf-wellness .pw-person{background:#fff;border:1px solid #eee6e1;border-radius:8px;padding:19px 22px}
.pf-wellness .pw-leader{border-left:3px solid var(--orange)}
.pf-wellness .pw-leader strong,.pf-wellness .pw-person strong{display:block;color:var(--navy);font-size:15px;font-weight:800;margin-bottom:5px}
.pf-wellness .pw-leader span,.pf-wellness .pw-person span{display:block;font-size:12px;color:var(--orange);font-weight:700;margin-bottom:6px}
.pf-wellness .pw-person p{font-size:12px;color:#66707a;line-height:1.6;margin:0}
.pf-wellness .pw-team-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:15px}
.pf-wellness .pw-subheading{font-size:19px;color:var(--navy);font-weight:800;margin:30px 0 18px}
.pf-wellness .pw-camps{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:22px}
.pf-wellness .pw-camp{background:#fff;border:1px solid #ece5e0;border-radius:9px;padding:27px;display:flex;flex-direction:column;gap:13px;box-shadow:0 5px 19px #16163f08}
.pf-wellness .pw-camp-top{display:flex;align-items:center;justify-content:space-between;gap:13px}
.pf-wellness .pw-camp-number{color:var(--orange);font-size:11px;font-weight:800;letter-spacing:.13em}
.pf-wellness .pw-camp-date{font-size:11px;color:#6b6b76;font-weight:700;text-align:right}
.pf-wellness .pw-camp h3{color:var(--navy);font-size:21px;line-height:1.4;font-weight:800;margin:0}
.pf-wellness .pw-camp>p{color:#626a75;font-size:13px;line-height:1.8;flex:1;margin:0}
.pf-wellness .pw-camp-pills{display:flex;flex-wrap:wrap;gap:8px}
.pf-wellness .pw-camp-pills span{background:#fff2e9;color:#b54b20;border-radius:4px;padding:8px 10px;font-size:10px;font-weight:800}
.pf-wellness .pw-impact-wrap{display:grid;grid-template-columns:1fr 1fr;gap:55px}
.pf-wellness .pw-impact-wrap h3{color:var(--navy);font-size:23px;font-weight:800;margin:0 0 20px}
.pf-wellness .pw-achievement-table{width:100%;border-collapse:collapse;background:#fff;font-size:12px}
.pf-wellness .pw-achievement-table th,.pf-wellness .pw-achievement-table td{padding:13px 16px;border-bottom:1px solid #eee5df;text-align:left;color:#646c76}
.pf-wellness .pw-achievement-table th{color:var(--navy);font-weight:800}
.pf-wellness .pw-achievement-table td{text-align:right;color:var(--orange);font-weight:800}
.pf-wellness .pw-quotes{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:20px}
.pf-wellness .pw-quote{margin:0;border:1px solid #eee6e0;background:#fff;padding:26px;border-radius:9px;display:flex;flex-direction:column}
.pf-wellness .pw-quote:before{content:"“";font-size:54px;font-weight:800;color:var(--orange);line-height:.7;margin-bottom:17px}
.pf-wellness .pw-quote blockquote{margin:0 0 21px;font-size:13px;color:#55606c;line-height:1.85;flex:1}
.pf-wellness .pw-quote strong{color:var(--navy);font-size:14px;font-weight:800}
.pf-wellness .pw-quote span{color:var(--orange);font-size:11px;font-weight:700;line-height:1.65;margin-top:4px}
.pf-wellness .pw-gallery{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:12px}
.pf-wellness .pw-gallery a{display:block;overflow:hidden;border-radius:7px;aspect-ratio:4/3;background:#eee6e0}
.pf-wellness .pw-gallery img{display:block;width:100%;height:100%;object-fit:cover;transition:transform .3s}
.pf-wellness .pw-gallery a:hover img{transform:scale(1.04)}
.pf-wellness .pw-cta{padding:62px 0;background:var(--navy);color:#fff;text-align:center}
.pf-wellness .pw-cta h2{color:#fff;font-size:clamp(26px,3vw,40px);line-height:1.3;font-weight:800;margin:0 0 15px}
.pf-wellness .pw-cta p{font-size:14px;line-height:1.8;color:#efecf3;max-width:770px;margin:0 auto}
@media(max-width:1030px){.pf-wellness .pw-stats-inner{grid-template-columns:repeat(3,1fr)}.pf-wellness .pw-stat:nth-child(3){border-right:0}.pf-wellness .pw-about{gap:30px}.pf-wellness .pw-services{grid-template-columns:repeat(2,1fr)}.pf-wellness .pw-gallery{grid-template-columns:repeat(3,1fr)}}
@media(max-width:767px){.pf-wellness .pw-container{padding:0 18px}.pf-wellness .pw-hero-inner{min-height:380px;padding-top:45px;padding-bottom:55px}.pf-wellness .pw-hero h1{font-size:38px}.pf-wellness .pw-hero p{font-size:13px}.pf-wellness .pw-section{padding:62px 0}.pf-wellness .pw-stats-inner{grid-template-columns:repeat(2,1fr);padding-top:18px;padding-bottom:18px}.pf-wellness .pw-stat{padding:14px 12px;border-bottom:1px solid #eee6e0}.pf-wellness .pw-stat:nth-child(3){border-right:1px solid #eee6e0}.pf-wellness .pw-stat:nth-child(even){border-right:0}.pf-wellness .pw-stat strong{font-size:30px}.pf-wellness .pw-about{grid-template-columns:1fr}.pf-wellness .pw-about-media{height:340px}.pf-wellness .pw-objectives,.pf-wellness .pw-impact-list,.pf-wellness .pw-camps,.pf-wellness .pw-impact-wrap,.pf-wellness .pw-team-leaders,.pf-wellness .pw-quotes{grid-template-columns:1fr}.pf-wellness .pw-services,.pf-wellness .pw-team-grid{grid-template-columns:repeat(2,minmax(0,1fr))}.pf-wellness .pw-gallery{grid-template-columns:repeat(2,1fr)}.pf-wellness .pw-section-heading h2{font-size:29px}.pf-wellness .pw-service{padding:20px 15px}}
@media(max-width:470px){.pf-wellness .pw-services,.pf-wellness .pw-team-grid{grid-template-columns:1fr}.pf-wellness .pw-camp{padding:20px}}
@media(prefers-reduced-motion:reduce){.pf-wellness .pw-gallery img{transition:none!important}}
</style>
@endsection
@section('content')
<main class="pf-wellness">
<section class="pw-hero" aria-labelledby="pw-title"><div class="pw-container pw-hero-inner">
 <nav class="pw-breadcrumb" aria-label="Breadcrumb"><a href="{{ route('home') }}">Home</a><span>/</span><a href="{{ route('our-project') }}">Projects</a><span>/</span><span>Wellness Centres for Females</span></nav>
 <span class="pw-tag">JANUARY – JUNE 2026</span>
 <h1 id="pw-title">WELLNESS CENTRES <span>FOR FEMALES</span></h1>
 <p>Improving women’s health through preventive healthcare, diagnostic screening, menstrual hygiene awareness, nutrition counselling, mental health support, and community outreach.</p>
 <span class="pw-hero-date">PYARE FOUNDATION · RUDRAPRAYAG DISTRICT</span>
</div></section>
<section class="pw-stats" aria-label="Project achievements"><div class="pw-container pw-stats-inner">
 @foreach([['6','Wellness Camps Conducted'],['1,885','Women & Girls Benefitted'],['1,860','Blood Samples Collected'],['1,885','Sanitary Pads Distributed'],['1,885','Supplement Kits Distributed']] as $stat)
 <div class="pw-stat"><strong>{{ $stat[0] }}</strong><span>{{ $stat[1] }}</span></div>
 @endforeach
</div></section>
<section class="pw-section"><div class="pw-container pw-about">
 <div class="pw-about-media"><img src="{{ asset('uploads/female-health/image_3.jpg') }}" alt="Pyare Foundation women's health programme" loading="lazy"><img src="{{ asset('uploads/female-health/image_4.jpg') }}" alt="Community healthcare activity" loading="lazy"></div>
 <div class="pw-about-text"><span class="pw-tag">ABOUT THE INITIATIVE</span><h2>PREVENTIVE HEALTHCARE FOR WOMEN &amp; ADOLESCENT GIRLS</h2>
 <p>The Wellness Centres for Females project was designed to improve access to quality healthcare for women and adolescent girls living in rural communities and educational institutions. Through an integrated approach combining medical consultation, diagnostic testing, nutrition education, counselling, menstrual hygiene awareness, and preventive healthcare, the initiative empowered beneficiaries with knowledge and resources for healthier lives.</p>
 </div>
</div></section>
<section class="pw-section alt"><div class="pw-container">
 <div class="pw-section-heading"><span class="pw-tag">PROJECT OBJECTIVES</span><h2>OUR <span>OBJECTIVES</span></h2></div>
 <ul class="pw-objectives">
 @foreach(['Improve access to preventive healthcare','Promote menstrual hygiene awareness','Encourage early diagnosis through health screening','Improve nutrition and healthy lifestyle practices','Strengthen mental health awareness','Empower women through health education','Increase community participation in women’s healthcare'] as $objective)<li>{{ $objective }}</li>@endforeach
 </ul>
</div></section>
<section class="pw-section"><div class="pw-container">
 <div class="pw-section-heading"><span class="pw-tag">SERVICES OFFERED</span><h2>HOLISTIC <span>HEALTHCARE SUPPORT</span></h2></div>
 <div class="pw-services">
 @foreach([
 ['+','Medical Care',['General Health Check-up','Doctor Consultation','Blood Sample Collection','Diagnostic Tests','Preventive Health Screening']],
 ['✳','Nutrition & Wellness',['Nutrition Assessment','Diet Counselling','Vitamins & Nutritional Supplements','Healthy Lifestyle Guidance']],
 ['♡','Women’s Health',['Menstrual Hygiene Education','Reproductive Health Awareness','Personal Hygiene Awareness','Sanitary Pads & Heating Pads Distribution']],
 ['◉','Mental Well-being',['Mental Health Counselling','Stress Management','Motivation Sessions','Interactive Awareness Programmes']]
 ] as $service)
 <article class="pw-service"><div class="pw-service-icon" aria-hidden="true">{{ $service[0] }}</div><h3>{{ $service[1] }}</h3><ul>@foreach($service[2] as $item)<li>{{ $item }}</li>@endforeach</ul></article>
 @endforeach
 </div>
</div></section>
<section class="pw-section alt"><div class="pw-container">
 <div class="pw-section-heading"><span class="pw-tag">PROJECT TEAM</span><h2>DEDICATED TEAM <span>BEHIND THE INITIATIVE</span></h2><p>A multidisciplinary team of healthcare professionals, counsellors, technical experts, and community workers collaborated to successfully implement the Wellness Centres across Rudraprayag District.</p></div>
 <h3 class="pw-subheading">Project Leadership</h3><div class="pw-team-leaders">
 <div class="pw-leader"><strong>Dr. Anjali Thapliyal Kaul</strong><span>President</span></div>
 <div class="pw-leader"><strong>Mr. Rajesh Kaul</strong><span>Secretary</span></div></div>
 <h3 class="pw-subheading">Medical &amp; Technical Team</h3>
 <div class="pw-team-grid">
 @foreach([
 ['Dr. Anand Kaler','Physician','Medical consultation, diagnosis and treatment guidance.'],
 ['Mr. Paras Kumar','Lab Technician','Blood sample collection and laboratory procedures.'],
 ['Mr. Vipin Rawat','Pharmacist','Medicine dispensing and beneficiary guidance.'],
 ['Ms. Ekta Aggarwal','Dietician','Nutrition assessment and dietary counselling.'],
 ['Mrs. Sushma Kotnala Thapliyal','Clinical Psychologist & Counsellor','Mental health counselling and psychosocial support.'],
 ['Mr. Mukesh Prasad','Mentor','Leadership, life skills and motivation sessions.'],
 ['Mr. Ankit Chaurasia','Motivator','Community motivation and awareness programmes.'],
 ['Mrs. Meena Devi','ASHA Worker','Community mobilization and beneficiary coordination.'],
 ['Mrs. Vineeta Devi','Anganwadi Worker','Local outreach and participant support.']
 ] as $person)
 <article class="pw-person"><strong>{{ $person[0] }}</strong><span>{{ $person[1] }}</span><p>{{ $person[2] }}</p></article>
 @endforeach
 </div>
</div></section>
<section class="pw-section"><div class="pw-container">
 <div class="pw-section-heading"><span class="pw-tag">WELLNESS CAMPS CONDUCTED</span><h2>SIX CAMPS ACROSS <span>RUDRAPRAYAG DISTRICT</span></h2></div>
 <div class="pw-camps">
 @foreach([
 ['Village Gadgu, Ukhimath Block','30–31 January 2026','The inaugural Wellness Centre introduced comprehensive healthcare services through medical consultations, diagnostic screening, nutrition counselling, menstrual hygiene awareness, and distribution of health support materials.',['200 Beneficiaries','175 Blood Samples','200 Sanitary Pads','200 Supplement Kits']],
 ['Government Degree College, Guptkashi','24–28 February 2026','Focused on adolescent girls and young women, this camp promoted preventive healthcare, nutrition, reproductive health awareness, counselling, and diagnostic screening.',['299 Beneficiaries','299 Blood Samples','Nutrition Sessions','Mental Health Sessions']],
 ['Government Degree College, Jakholi','25–29 March 2026','The largest camp of the project, reaching the highest number of beneficiaries through comprehensive healthcare services and awareness programmes.',['456 Beneficiaries','456 Blood Samples','Highest Participation','Health Awareness']],
 ['Government Degree College, Rudraprayag','20–24 April 2026','This Wellness Centre strengthened preventive healthcare awareness among college-going women through medical screening, nutrition counselling, and mental wellness sessions.',['260 Beneficiaries','260 Blood Samples','Health Screening','Women’s Health Education']],
 ['Village Rayari, Jakholi Block','14–15 May 2026','Returning to a rural setting, this camp expanded healthcare access through consultations, counselling, hygiene awareness, and distribution of essential materials.',['340 Beneficiaries','340 Blood Samples','Hygiene Awareness','Pads, Heating Pads & Supplements']],
 ['Government Degree College, Augustmuni','4–8 June 2026','The concluding Wellness Centre reinforced preventive healthcare practices while providing comprehensive health services and counselling.',['330 Beneficiaries','330 Blood Samples','Health Check-ups','Nutrition & Counselling']]
 ] as $camp)
 <article class="pw-camp">
 <div class="pw-camp-top"><span class="pw-camp-number">CAMP {{ $loop->iteration }} / 06</span><span class="pw-camp-date">{{ $camp[1] }}</span></div>
 <h3>{{ $camp[0] }}</h3><p>{{ $camp[2] }}</p>
 <div class="pw-camp-pills">@foreach($camp[3] as $highlight)<span>{{ $highlight }}</span>@endforeach</div>
 </article>
 @endforeach
 </div>
</div></section>
<section class="pw-section alt"><div class="pw-container">
 <div class="pw-section-heading"><span class="pw-tag">OVERALL IMPACT</span><h2>CREATING HEALTHIER, <span>INFORMED COMMUNITIES</span></h2></div>
 <div class="pw-impact-wrap">
 <div><h3>Overall Impact</h3><ul class="pw-impact-list">
 @foreach(['Improved healthcare accessibility','Better menstrual hygiene awareness','Early identification of common health conditions','Enhanced nutrition knowledge','Greater confidence in seeking medical support','Increased community participation','Improved mental health awareness and counselling support'] as $impact)<li>{{ $impact }}</li>@endforeach
 </ul></div>
 <div><h3>Achievement Summary</h3><table class="pw-achievement-table" aria-label="Project statistics"><tbody>
 @foreach([
 ['Wellness Camps Conducted','6'],['Women & Girls Benefitted','1,885'],['Blood Samples Collected','1,860'],['Sanitary Pads Distributed','1,885'],['Supplement Kits Distributed','1,885'],['Villages & Institutions Covered','6'],['Doctor Consultation Sessions','6'],['Nutrition Awareness Sessions','6'],['Counselling & Motivation Sessions','6']
 ] as $row)<tr><th scope="row">{{ $row[0] }}</th><td>{{ $row[1] }}</td></tr>@endforeach
 </tbody></table></div>
 </div>
</div></section>
<section class="pw-section"><div class="pw-container">
 <div class="pw-section-heading"><span class="pw-tag">VOICES FROM THE COMMUNITY</span><h2>STORIES OF <span>APPRECIATION</span></h2></div>
 <div class="pw-quotes">
 @foreach([
 ['We sincerely thank Pyare Foundation for organizing this highly beneficial health camp in Rayari Village. The initiative supported women and girls by providing sanitary pads, heating pads, and health supplements while creating greater awareness about feminine hygiene and healthcare.','Smt. Bina Devi','Mahila Mangal Dal Adhyaksha, Rayari Village'],
 ['The Wellness Centre was a remarkable initiative for our village. Through the distribution of essential health resources and hygiene awareness sessions, the programme strengthened healthcare access and empowered women with knowledge.','Smt. Sushma','Village Pradhan, Rayari Village'],
 ['Pyare Foundation successfully organized a holistic health programme covering both physical and mental wellness. The practical support provided through heating pads and health awareness activities offered meaningful benefits.','Dr. Ashish Tripathi','Principal, Government Degree College, Rudraprayag'],
 ['The Wellness Centre for Females was truly remarkable. The mental wellness sessions, along with the guidance provided by counsellors, mentors, and motivators, greatly benefited the participants.','Dr. Rajani','Professor, Government Degree College, Rudraprayag']
 ] as $quote)
 <figure class="pw-quote"><blockquote>“{{ $quote[0] }}”</blockquote><figcaption><strong>{{ $quote[1] }}</strong><span>{{ $quote[2] }}</span></figcaption></figure>
 @endforeach
 </div>
 <p style="font-size:13px;line-height:1.8;color:#68707b;margin-top:30px">Health camps like these reflect the spirit of humanity, service, and social welfare, encouraging students and communities to become more aware of their health.</p>
</div></section>
<section class="pw-section alt"><div class="pw-container">
 <div class="pw-section-heading"><span class="pw-tag">PROJECT HIGHLIGHTS</span><h2>GLIMPSES OF <span>COMMUNITY HEALTH WORK</span></h2><p>Photographs from the Wellness Centres for Females programme.</p></div>
 <div class="pw-gallery">
 @foreach(array_merge(array_map(fn($n) => 'image_'.$n.'.jpeg', range(1,17)), ['image_18.jpg','image_19.jpeg','image_20.jpeg']) as $photo)
 <a href="{{ asset('uploads/images/wellness-centres-2026/'.$photo) }}" data-fancybox="wellness-gallery" aria-label="View women’s health programme photograph"><img src="{{ asset('uploads/images/wellness-centres-2026/'.$photo) }}" alt="Pyare Foundation women's health activity" loading="lazy" decoding="async"></a>
 @endforeach
 </div>
</div></section>
<section class="pw-cta"><div class="pw-container"><h2>TOGETHER TOWARDS BETTER WOMEN’S HEALTH</h2><p>Through six Wellness Centres, Pyare Foundation, with the support of GAIL (India) Limited, empowered 1,885 women and adolescent girls with preventive healthcare, diagnostic services, counselling, menstrual hygiene education, and nutrition support.</p></div></section>
</main>
@endsection