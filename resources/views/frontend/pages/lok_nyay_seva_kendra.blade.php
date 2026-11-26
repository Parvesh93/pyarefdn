@section('title')
    Lok Nyay Seva Kendra
@endsection


@extends('frontend.layouts.master')

@section('page_css')
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
.pf-lok-page{--pfl-navy:#16163f;--pfl-orange:#f46226;--pfl-cream:#fffaf5;font-family:'DM Sans',Arial,sans-serif;color:#24263b}
.pf-lok-page *{box-sizing:border-box}
.pf-lok-page :is(h1,h2,h3,h4){font-family:'Manrope',sans-serif;letter-spacing:-.035em}
.pf-lok-page .pfl-container{max-width:1440px;margin:0 auto;width:100%;padding-left:clamp(20px,3vw,52px);padding-right:clamp(20px,3vw,52px)}
.pf-lok-page .pfl-hero{position:relative;overflow:hidden;color:#fff;background:linear-gradient(100deg,rgba(16,16,47,.94),rgba(16,16,47,.78) 54%,rgba(16,16,47,.3)),url("{{ asset('uploads/images/lok_nyay/prize/prize1.jpeg') }}") center 40%/cover no-repeat}
.pf-lok-page .pfl-hero-inner{min-height:430px;padding-top:55px;padding-bottom:70px;display:flex;flex-direction:column;align-items:flex-start;justify-content:center}
.pf-lok-page .pfl-breadcrumb{display:flex;flex-wrap:wrap;gap:10px;align-items:center;font-size:12px;color:#e8e3ec;margin-bottom:36px}
.pf-lok-page .pfl-breadcrumb a{color:#fff;text-decoration:none;font-weight:700}
.pf-lok-page .pfl-breadcrumb a:hover{color:#ffc29f}
.pf-lok-page .pfl-breadcrumb span:last-child{color:#ffb186}
.pf-lok-page .pfl-eyebrow{display:inline-flex;align-items:center;gap:9px;color:#f46226;font-size:11px;letter-spacing:.14em;font-weight:800}
.pf-lok-page .pfl-hero .pfl-eyebrow{color:#ffb389}
.pf-lok-page .pfl-eyebrow::before{content:"";height:8px;width:8px;border-radius:50%;background:#f46226;flex:none}
.pf-lok-page .pfl-hero h1{font-size:clamp(37px,4.5vw,62px)!important;line-height:1.15!important;font-weight:800;color:#fff!important;max-width:820px;margin:14px 0 12px}
.pf-lok-page .pfl-hero h1 span{color:#ff8b5b}
.pf-lok-page .pfl-hero-sub{font-size:16px!important;color:#f1e9ed;line-height:1.75;margin:0 0 25px;max-width:590px}
.pf-lok-page .pfl-hero-link{display:inline-flex;align-items:center;gap:18px;border-radius:5px;background:#f46226;color:#fff;text-decoration:none;padding:14px 20px;font-size:12px;font-weight:800;transition:background .2s}
.pf-lok-page .pfl-hero-link:hover{background:#dc4b18;color:#fff}
.pf-lok-page .pfl-main{background:#fffaf5;padding:80px 0 100px}
.pf-lok-page .pfl-layout{display:grid;grid-template-columns:minmax(0,1.75fr) minmax(315px,.84fr);gap:clamp(26px,3vw,48px);align-items:start}
.pf-lok-page .pfl-story{min-width:0;scroll-margin-top:20px}
.pf-lok-page .pfl-story-intro{margin-bottom:28px}
.pf-lok-page .pfl-story-intro h2{font-size:clamp(28px,2.8vw,40px);line-height:1.24;color:#16163f;font-weight:800;margin:13px 0}
.pf-lok-page .pfl-story-intro h2 span{color:#f46226}
.pf-lok-page .pfl-story-intro p{font-size:16px;line-height:1.7;color:#626a74;font-weight:600;margin:0}
.pf-lok-page .pfl-story>div.space-y-4,.pf-lok-page .pfl-story>div.space-y-3,.pf-lok-page .pfl-story>div:not(.relative):not(.pfl-story-intro){margin-bottom:32px}
.pf-lok-page .pfl-story h2:not(.pfl-story-intro h2){font-size:clamp(22px,2.2vw,28px)!important;line-height:1.35!important;font-weight:800!important;color:#16163f!important;margin:28px 0 15px!important}
.pf-lok-page .pfl-story p{font-size:14px;line-height:1.9;color:#5f6670;text-align:left!important}
.pf-lok-page .pfl-story p.font-bold,.pf-lok-page .pfl-story p>span.font-bold{font-size:18px!important;line-height:1.45;font-weight:800;color:#16163f}
.pf-lok-page .pfl-story :is(ul,ol){color:#5f6670;font-size:13px;line-height:1.85;padding-left:24px;margin:13px 0 22px;list-style-position:outside}
.pf-lok-page .pfl-story :is(ul,ol) li{margin-bottom:7px}
.pf-lok-page .pfl-story .swiper{overflow:hidden;border-radius:8px}
.pf-lok-page .pfl-story .swiper-slide{min-width:0}
.pf-lok-page .pfl-story .swiper-slide a{display:block}
.pf-lok-page .pfl-story .swiper-slide img{width:100%;height:270px!important;object-fit:cover;border-radius:6px!important;display:block}
.pf-lok-page .pfl-story [class*="swiper-button-prev-custom"],.pf-lok-page .pfl-story [class*="swiper-button-next-custom"]{width:36px!important;height:36px!important;background:#f46226!important;border-radius:50%!important;display:grid;place-items:center;cursor:pointer}
.pf-lok-page .pfl-story>div.relative.w-full.py-6{padding:10px 0 23px!important;margin-bottom:17px}
.pf-lok-page .pfl-story table{width:100%;border-collapse:separate;border-spacing:0;border:1px solid #ece2dd!important;border-radius:8px;overflow:hidden;background:#fff}
.pf-lok-page .pfl-story thead{background:#16163f!important;color:#fff!important}
.pf-lok-page .pfl-story th{background:#16163f;color:#fff;font-weight:800!important;font-size:11px;letter-spacing:.035em}
.pf-lok-page .pfl-story :is(td,th){padding:12px 14px!important;border:0!important;border-bottom:1px solid #eee6e2!important;text-align:left;line-height:1.5}
.pf-lok-page .pfl-story td{color:#565d6b;font-size:12px;vertical-align:top}
.pf-lok-page .pfl-story tbody tr:last-child td{border-bottom:0!important}
.pf-lok-page .pfl-story tbody tr:nth-child(even){background:#fff9f4}
.pf-lok-page .pfl-story .overflow-x-auto{border-radius:8px;margin-top:15px}
.pf-lok-page .pfl-sidebar{position:sticky;top:22px;align-self:start;min-width:0}
.pf-lok-page .pfl-donate{background:#fff;border:1px solid #eee4e0;box-shadow:0 8px 26px rgba(22,22,63,.055);border-radius:10px;padding:25px;scroll-margin-top:18px}
.pf-lok-page .pfl-donate>h3{color:#16163f!important;font-size:22px!important;line-height:1.3;font-weight:800!important;margin-bottom:19px!important}
.pf-lok-page .pfl-donate>h4{color:#16163f!important;font-size:12px!important;font-weight:800!important;margin:18px 0 12px!important}
.pf-lok-page .pfl-donate button.donation-btn,.pf-lok-page .pfl-donate button.amount-btn{min-height:43px;border:1px solid #eaded8;border-radius:5px!important;font-size:12px!important;font-weight:800;color:#16163f!important;padding:11px 13px!important;margin-bottom:9px!important}
.pf-lok-page .pfl-donate button.donation-btn:hover,.pf-lok-page .pfl-donate button.amount-btn:hover{border-color:#f46226}
.pf-lok-page .pfl-donate button.bg-yellow-400,.pf-lok-page .pfl-donate button.bg-\[\#FEB201\]{background:#fff0e8!important;border-color:#f46226!important;color:#ce4c1e!important}
.pf-lok-page .pfl-donate #payment-form{display:flex;flex-direction:column;gap:10px}
.pf-lok-page .pfl-donate #payment-form input:not([type="hidden"]){width:100%;height:45px;background:#fff;border:1px solid #e5dddb;border-radius:5px;padding:11px 14px;font-size:12px;color:#16163f;margin:0!important;outline:none}
.pf-lok-page .pfl-donate #payment-form input:focus{border-color:#f46226}
.pf-lok-page .pfl-donate #pay-button{background:#f46226!important;color:#fff;border:0;border-radius:5px;font-weight:800;min-height:48px;margin-top:7px}
.pf-lok-page .pfl-donate #pay-button:hover{background:#da4b19!important}
.pf-lok-page .pfl-join-card{background:#fff9f4;border:1px solid #f1ddcf;border-radius:8px;padding:20px;margin:20px 0 0!important;min-height:0;display:flex;justify-content:center;align-items:flex-start}
.pf-lok-page .pfl-join-card .absolute{display:none!important}
.pf-lok-page .pfl-join-card>div.relative{align-items:flex-start;text-align:left}
.pf-lok-page .pfl-join-card p{font-size:12px!important;line-height:1.7;color:#616878;text-align:left!important;margin-bottom:15px!important}
.pf-lok-page .pfl-join-link{display:inline-flex;align-items:center;gap:11px;border-radius:5px;background:#16163f;color:#fff!important;padding:11px 14px;font-size:11px;font-weight:800;text-decoration:none}
.pf-lok-page .pfl-join-link:hover{background:#2b2b5b}
@media(max-width:1030px){.pf-lok-page .pfl-layout{grid-template-columns:minmax(0,1fr) minmax(290px,.78fr);gap:25px}.pf-lok-page .pfl-donate{padding:20px}}
@media(max-width:767px){.pf-lok-page .pfl-hero-inner{min-height:350px;padding:43px 18px 56px}.pf-lok-page .pfl-breadcrumb{margin-bottom:25px}.pf-lok-page .pfl-hero h1{font-size:36px!important}.pf-lok-page .pfl-hero-sub{font-size:13px!important}.pf-lok-page .pfl-main{padding:52px 0 75px}.pf-lok-page .pfl-container{padding-left:18px;padding-right:18px}.pf-lok-page .pfl-layout{grid-template-columns:1fr;gap:35px}.pf-lok-page .pfl-sidebar{position:static}.pf-lok-page .pfl-story .swiper-slide img{height:240px!important}.pf-lok-page .pfl-story-intro h2{font-size:28px}.pf-lok-page .pfl-story :is(td,th){padding:10px 12px!important}}
@media(prefers-reduced-motion:reduce){.pf-lok-page *{transition:none!important}}
</style>
@endsection

@section('content')
    <main class="pf-lok-page">
      <section class="pfl-hero" aria-labelledby="pfl-title">
        <div class="pfl-container pfl-hero-inner">
          <nav class="pfl-breadcrumb" aria-label="Breadcrumb">
            <a href="{{ route('home') }}">Home</a><span aria-hidden="true">/</span>
            <a href="{{ route('our-project') }}">Projects</a><span aria-hidden="true">/</span><span>Lok Nyay Seva Kendra</span>
          </nav>
          <span class="pfl-eyebrow">LEGAL AWARENESS &amp; COMMUNITY EMPOWERMENT</span>
          <h1 id="pfl-title">LOK NYAY <span>SEVA KENDRA</span></h1>
          <p class="pfl-hero-sub">“Nyay Aapke Dwaar; Adhikaar Aapke Saath”</p>
          <a href="#pfl-story" class="pfl-hero-link">DISCOVER THE INITIATIVE <span aria-hidden="true">↗</span></a>
        </div>
      </section>
    <!-- Main Content & Donate now Form -->
    <section class="pfl-main">
        <div class="pfl-container pfl-layout">

            <!-- Left Content (scrollable text, images, sliders) -->
            <div class="pfl-story" id="pfl-story">
                <div class="pfl-story-intro"><span class="pfl-eyebrow">ABOUT OUR INITIATIVE</span><h2>JUSTICE, ACCESS &amp; <span>EMPOWERMENT</span></h2><p>“Nyay Aapke Dwaar; Adhikaar Aapke Saath”</p></div>
                <!-- Paragraphs -->
                <div class="space-y-4  leading-relaxed">
                    <h2 class="md:text-2xl font-bold text-2xl">
                        About the Initiative
                    </h2>
                    <p class="text-justify">
                        Lok Nyay Seva Kendra is a <strong>legal aid cell of Pyare Foundation,</strong> established
                        <strong>on 3rd August 2025
                            (Sunday)</strong> with the objective of spreading <strong>legal awareness</strong> among
                        students, citizens, and economically
                        weaker sections of society.
                    </p>
                    <p class="text-justify">
                        The initiative aims to make justice <strong>accessible, inclusive, and compassionate,</strong>
                        ensuring that every
                        individual is aware of their rights and empowered to uphold them.
                    </p>
                </div>


                <!-- Slider 1 -->
                <!-- Swiper Section -->

                <div class="relative w-full py-6">
                    <!-- Swiper Container -->
                    <div class="swiper shambhooSwiper">
                        <div class="swiper-wrapper">
                            <!-- Slide -->
                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize1.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize1.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize2.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize2.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize3.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize3.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize4.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize4.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>


                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize5.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize5.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>


                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize6.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize6.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>



                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize7.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize7.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize8.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize8.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>


                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize9.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize9.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize10.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize10.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize11.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize11.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>
                            
                             <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize12.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize12.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>
                            
                            
                             <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize13.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize13.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>
                            
                             <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize14.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize14.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>
                            
                             <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize15.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize15.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>
                            
                             <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize16.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize16.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>
                            
                             <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize17.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize17.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>
                            
                             <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/prize/prize18.jpeg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/prize/prize18.jpeg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>
                           
                        </div>
                    </div>

                    <!-- Custom Arrows -->
                    <div class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10">
                        <div
                            class="swiper-button-prev-custom bg-orange-400 hover:bg-orange-500 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </div>
                    </div>

                    <div class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10">
                        <div
                            class="swiper-button-next-custom bg-orange-400 hover:bg-orange-500 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="space-y-4  leading-relaxed mb-4">
                    <h2 class="md:text-2xl font-bold text-2xl">
                        Our Vision
                    </h2>
                    <p class="text-justify">
                        To build an <strong>inclusive society</strong> where every individual, regardless of socio-economic
                        status,<strong>enjoys
                            equal and unhindered access to justice, legal empowerment, healthcare,</strong> and
                        the<strong>means to live with
                            dignity and security.</strong>
                    </p>

                </div>


                <div class="space-y-3  leading-relaxed">
                    <h2 class="md:text-2xl font-bold text-2xl">
                        Our Mission
                    </h2>
                    <p class="text-justify">
                        To ensure <strong>simple and secure access to justice </strong> for all sections of society,
                        especially the <strong> poor and marginalized communities.</strong>

                    </p>

                </div>


                <div>
                    <p class="text-justify py-4">
                        <span class="font-bold text-lg">Lok Nyay Seva Kendra strives to: </span>
                    </p>
                    <ul class="list-disc list-inside space-y-2 mx-3">
                        <li>Provide <strong>free legal advice and support</strong></li>
                        <li>Offer <strong>quality representation </strong>through dedicated legal professionals</li>
                        <li>Conduct <strong>legal awareness and educational programs </strong>for citizens</li>
                    </ul>
                </div>


                <div>
                    <p class="text-justify py-4">
                        <span class="font-bold text-lg">Key Activities: </span>
                    </p>
                    <ul class="list-disc list-inside space-y-2 mx-3">
                        <li><strong>Awareness Campaigns </strong> on laws and social issues including POCSO, POSH, Juvenile
                            Justice, and Menstrual Health</li>
                        <li><strong>Workshops and Interactive Sessions </strong>in both online and offline formats</li>
                        <li><strong>Free Legal Aid & Counseling </strong>for individuals in need</li>
                        <li><strong>Collaboration </strong>with law schools, social organizations, and professionals</li>
                        <li>And many more initiatives that promote <strong>justice and empowerment</strong></li>
                    </ul>
                </div>



                <div class="">
                    <p class="text-justify py-4">
                        <span class="font-bold text-2xl">Project Team Structure </span>
                    </p>
                    <p class="font-bold text-lg">
                        1. Legal Cell
                    </p>
                    <p class="my-2">
                        Acts as the <strong>frontline unit</strong> providing direct legal support and awareness programs.
                    </p>
                    <div class="">
                    <h2 class="md:text-xl sm:text-3xl pb-4">
                        Members:
                    </h2>
                    <div class="max-w-full overflow-x-auto">
                        <table class="min-w-full border border-black text-sm text-left text-black">
                            <thead class="bg-[#0A0A3C] text-white">
                                <tr>
                                    <th class="px-4 py-2 border border-black font-semibold">S. No</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Team Members</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Position</th>

                                    <!-- Add more columns here if needed -->
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="px-4 py-2 border border-black">1.</td>
                                    <td class="px-4 py-2 border border-black">Mayank Upadhyay</td>
                                    <td class="px-4 py-2 border border-black">President</td>

                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">2.</td>
                                    <td class="px-4 py-2 border border-black">Prateek Saxena</td>
                                    <td class="px-4 py-2 border border-black">Secretary</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">3.</td>
                                    <td class="px-4 py-2 border border-black">Abhinav Bindal</td>
                                    <td class="px-4 py-2 border border-black">Treasurer</td>
                                </tr>
                                 <tr>
                                    <td class="px-4 py-2 border border-black">4.</td>
                                    <td class="px-4 py-2 border border-black">Abhay Dubey</td>
                                    <td class="px-4 py-2 border border-black">Deputy Secretary</td>
                                </tr>
                            
                            </tbody>
                        </table>
                    </div>
                 </div>
                    
                </div>

                <div>

                    <p class="font-bold text-lg mt-3">
                        2. Managerial Cell
                    </p>
                    <p class="my-2">
                        
                         The <strong>operational and coordination unit</strong> ensuring the smooth functioning of all
                        initiatives.
                        
                    </p>
                    
                    
                    <div class="">
                    <h2 class="md:text-xl sm:text-3xl pb-4">
                        Members:
                    </h2>
                    <div class="max-w-full overflow-x-auto">
                        <table class="min-w-full border border-black text-sm text-left text-black">
                            <thead class="bg-[#0A0A3C] text-white">
                                <tr>
                                    <th class="px-4 py-2 border border-black font-semibold">S. No</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Team Members</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Position</th>

                                    <!-- Add more columns here if needed -->
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <!--<tr>-->
                                <!--    <td class="px-4 py-2 border border-black">1.</td>-->
                                    <!--<td class="px-4 py-2 border border-black">Krish</td>-->
                                <!--    <td class="px-4 py-2 border border-black">President</td>-->

                                <!--</tr>-->
                                <tr>
                                    <td class="px-4 py-2 border border-black">1.</td>
                                    <td class="px-4 py-2 border border-black">Jagmohan Kashyap</td>
                                    <td class="px-4 py-2 border border-black">Secretary</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">2.</td>
                                    <td class="px-4 py-2 border border-black">Gulshan</td>
                                    <td class="px-4 py-2 border border-black">Management Incharge</td>
                                </tr>
                                
                                <!--<tr>-->
                                <!--    <td class="px-4 py-2 border border-black">4.</td>-->
                                <!--    <td class="px-4 py-2 border border-black">Anmol</td>-->
                                <!--    <td class="px-4 py-2 border border-black">Media Incharge</td>-->
                                <!--</tr>-->

                            </tbody>
                        </table>
                    </div>
                 </div>
                    
                    
                </div>


                <div>

                    <p class="font-bold text-lg mt-3">
                        3. Advisory Board
                    </p>
                    <p class="my-2">
                        Guiding the mission and strategy of Lok Nyay Seva Kendra.
                    </p>
                   
                    <div class="">
                    <h2 class="md:text-xl sm:text-3xl pb-4">
                        Members:
                    </h2>
                    <div class="max-w-full overflow-x-auto">
                        <table class="min-w-full border border-black text-sm text-left text-black">
                            <thead class="bg-[#0A0A3C] text-white">
                                <tr>
                                    <th class="px-4 py-2 border border-black font-semibold">S. No</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Team Members</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Position</th>

                                    <!-- Add more columns here if needed -->
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="px-4 py-2 border border-black">1.</td>
                                    <td class="px-4 py-2 border border-black">Dr. Anjali Thapliyal Kaul</td>
                                    <td class="px-4 py-2 border border-black">President & Founder, Pyare Foundation</td>

                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">2.</td>
                                    <td class="px-4 py-2 border border-black">Dr. Neha Bahl</td>
                                    <td class="px-4 py-2 border border-black">Professor, DME Law School</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">3.</td>
                                    <td class="px-4 py-2 border border-black">Dr. Ashish Kulshreshtha</td>
                                    <td class="px-4 py-2 border border-black">Legal Expert</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                 </div>
                </div>


                <div class="space-y-4  leading-relaxed">

                    <h2 class="md:text-2xl font-bold text-2xl mt-4">
                        Workshops & Training Programs
                    </h2>
                    <p class="font-bold text-lg">
                        1. Workshop on POSH Act, 2013
                    </p>

                    <p class="text-justify">
                        <span class="font-bold text-lg">Venue: </span> Rajkiya Kanya Mahavidyalaya, Kharkhoda, Meerut, U.P.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">Date & Day: </span> 18th October 2025 (Saturday)
                    </p>


                    <p class="text-justify">
                        Lok Nyay Seva Kendra (a legal aid cell of Pyare Foundation) successfully organized an <strong>
                            enlightening
                            workshop on “Prevention of Sexual Harassment (POSH) Act, 2013”</strong> at Government Girls
                        School,
                        Kharkhoda.
                    </p>
                    
                      <!-- Slider 1 -->
                <!-- Swiper Section -->

                <div class="relative w-full py-6">
                    <!-- Swiper Container -->
                    <div class="swiper shambhooSwiper">
                        <div class="swiper-wrapper">
                            <!-- Slide -->
                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/lok1.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/lok1.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/lok2.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/lok2.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/lok4.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/lok4.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>
                        </div>
                    </div>

                    <!-- Custom Arrows -->
                    <div class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10">
                        <div
                            class="swiper-button-prev-custom bg-orange-400 hover:bg-orange-500 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </div>
                    </div>

                    <div class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10">
                        <div
                            class="swiper-button-next-custom bg-orange-400 hover:bg-orange-500 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                </div>



                    <p class="text-justify">
                        The program began with a warm welcome by <strong>Mrs. Neelam Singh,</strong> the school’s Principal,
                        followed by an
                        interactive session by <strong>Dr. Anjali Thapliyal Kaul,</strong> Chairperson and Founder of Pyare
                        Foundation.
                        <strong>Rishabh Raj Malhotra</strong> (Treasurer) introduced Pyare Foundation and Dr. Anjali, while
                        <strong>Mayank Upadhyay</strong>
                        (President) spoke on the Indian philosophy of <i>“Vasudhaiva Kutumbakam”</i> and explained the
                        objectives
                        of the Kendra.


                    </p>
                    <p class="text-justify">
                        <strong>Prateek Saxena</strong> (Secretary) and <strong>Paras Kaul</strong> (Delhi Head, Pyare
                        Foundation) managed media and
                        coordination duties. A fun <strong>Rapid-Fire Quiz</strong> on general knowledge was conducted by
                        Mayank and Rishabh,
                        engaging the students actively.
                    </p>



                    <p class="text-justify">
                        After a short break, <strong>Dr. Ashish Kumar Kulshreshtha,</strong> Advocate – Supreme Court of
                        India, delivered a
                        deeply insightful session on the POSH Act, the role of Internal Complaints Committees, and
                        constitutional aspects.
                    </p>


                    <p class="text-justify">
                        <strong>Advocate Seema Kulshreshtha</strong> also shared her valuable thoughts during the session.
                    </p>

                    <p>
                        The workshop concluded with <strong>Dr. Anjali Thapliyal Kaul distributing free sanitary
                            napkins</strong> to students
                        who answered quiz questions correctly.
                    </p>

                    <p>
                        This workshop was an <strong>inspiring step toward women empowerment and legal awareness.</strong>
                    </p>



                </div>



                <div class="space-y-4  leading-relaxed">


                    <p class="font-bold text-lg mt-4">
                        2. Online Workshop on POSH Act, 2013
                    </p>

                    <p class="text-justify">
                        <span class="font-bold text-lg">Date & Day: </span> 18th October 2025 (Saturday)
                    </p>


                    <p class="text-justify">
                        Lok Nyay Seva Kendra also organized an <strong>online certificate training program</strong> on “POSH
                        Act, 2013,”
                        featuring <strong>Dr. Ashish Kulshreshtha,</strong> Advocate – Supreme Court of India, Ph.D., as the
                        <strong>guest speaker.</strong>
                    </p>
                    
                      <!-- Slider 1 -->
                <!-- Swiper Section -->

                <div class="relative w-full py-6">
                    <!-- Swiper Container -->
                    <div class="swiper shambhooSwiper">
                        <div class="swiper-wrapper">
                            <!-- Slide -->
                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/lok5.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/lok5.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>


                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/lok7.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/lok7.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>
                            
                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/lok6.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/lok6.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/lok_nyay/lok8.jpg') }}" data-fancybox="rugra-gallery"
                                    data-caption="Lok Nyay Seva Kendra">
                                    <img src={{ asset('uploads/images/lok_nyay/lok8.jpg') }} alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>


                        </div>
                    </div>

                    <!-- Custom Arrows -->
                    <div class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10">
                        <div
                            class="swiper-button-prev-custom bg-orange-400 hover:bg-orange-500 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </div>
                    </div>

                    <div class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10">
                        <div
                            class="swiper-button-next-custom bg-orange-400 hover:bg-orange-500 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                </div>



                    <p class="text-justify">
                        The session was highly <strong>interactive and informative,</strong> where Dr. Ashish explained the
                        <strong>key provisions of
                            the POSH Act</strong> and how individuals can handle such situations effectively. Students
                        participated
                        enthusiastically, asking questions and sharing insights throughout the session.
                    </p>
                    <p class="text-justify">
                        This virtual workshop expanded the outreach of Pyare Foundation’s legal initiatives, ensuring
                        <strong>awareness beyond geographical boundaries.</strong>
                    </p>


                </div>



                <div class="space-y-4  leading-relaxed">


                    <p class="font-bold text-2xl mt-4">
                        Join the Cause
                    </p>




                    <p class="text-justify">
                        Lok Nyay Seva Kendra welcomes <strong>law students, advocates, and social enthusiasts</strong> to
                        join hands in this
                        mission.
                    </p>



                    <p class="text-justify">
                        Together, let’s build a society where <strong>justice, awareness, and dignitys</strong> reach every
                        individual.
                    </p>



                </div>


            </div>

            <!-- Right Donate Form -->

            <aside class="pfl-sidebar">
                <div class="pfl-donate" id="donationForm">
                    <h3 class="text-md font-semibold text-gray-800 mb-4">DONATE NOW</h3>

                    <!-- Give Type -->
                    <button id="onceBtn" data-type="one-time"
                        type="button" class="donation-btn give-type w-full bg-gray-100 text-sm font-bold py-2 px-4 rounded mb-2">
                        GIVE ONCE
                    </button>
                    <button id="monthlyBtn" data-type="monthly"
                        type="button" class="donation-btn give-type w-full bg-gray-100 text-sm py-2 px-4 rounded mb-4">
                        GIVE MONTHLY
                    </button>

                    <h4 class="text-sm font-semibold text-gray-700 mb-2">
                        Choose Amount to Donate
                    </h4>

                    <!-- Amount Buttons -->
                    <button type="button" class="amount-btn w-full bg-yellow-400 text-sm font-bold py-2 px-4 rounded mb-2"
                        data-value="500">
                        ₹500
                    </button>
                    <button type="button" class="amount-btn w-full bg-gray-100 text-sm py-2 px-4 rounded mb-2" data-value="1000">
                        ₹1000
                    </button>
                    <button type="button" class="amount-btn w-full bg-gray-100 text-sm py-2 px-4 rounded mb-2" data-value="2000">
                        ₹2000
                    </button>
                    <button type="button" class="amount-btn w-full bg-gray-100 text-sm py-2 px-4 rounded mb-4" data-value="3000">
                        ₹3000
                    </button>
                    <button id="customBtn" type="button" class="amount-btn w-full bg-gray-100 text-sm py-2 px-4 rounded mb-6"
                        data-value="">
                        ₹ CUSTOM AMOUNT
                    </button>



                    <!-- Donation Form -->
                    <form id="payment-form" action="{{ route('web.donation.store') }}" method="POST"
                        class="space-y-2">
                        @csrf
                        <input type="text" placeholder="FIRST NAME" class="w-full border px-4 py-2 rounded text-sm"
                            name="firstName" />

                        <!-- Hidden input to store selected type -->
                        <input type="hidden" name="donationTypeValue" id="donationTypeValue" value="one-time" />

                        <input type="hidden" name="campaign" id="campaign" value="Lok Nyay Seva Kendra" />

                        <input type="text" placeholder="LAST NAME" class="w-full border px-4 py-2 rounded text-sm"
                            name="lastName" />

                        <input id="customAmount" type="text" placeholder="AMOUNT"
                            class="w-full border px-4 py-2 rounded text-sm" name="amount" />
                        <input type="email" placeholder="EMAIL" class="w-full border px-4 py-2 rounded text-sm"
                            name="email" />
                        <input type="text" placeholder="+91" class="w-full border px-4 py-2 rounded text-sm"
                            name="contact" />

                        <input type="text" placeholder="ADDRESS" class="w-full border px-4 py-2 rounded text-sm"
                            name="address" />

                        <!-- Hidden input for payment_id -->
                        <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" />
                        <input type="hidden" name="razorpay_order_id" id="razorpay_order_id">
                        <input type="hidden" name="razorpay_signature" id="razorpay_signature">

                        <button type="submit" id="pay-button"
                            class="w-full bg-gray-900 text-white font-semibold py-2 px-4 rounded">
                            PROCEED TO DONATE
                        </button>
                    </form>

                    <!-- Volunteer Box -->
                    <div
                        class="pfl-join-card">
                        <div class="absolute -top-12 -left-10 w-40 h-40 bg-orange-400 rounded-full opacity-30 z-0">
                        </div>
                        <div class="absolute top-8 left-8 w-64 h-64 bg-orange-300 rounded-full opacity-20 z-0"></div>
                        <div class="relative z-10 flex flex-col items-center">
                            <p class="text-sm text-gray-800 font-medium leading-relaxed mb-4 max-w-xs text-justify">
                                Volunteers are the heart of our foundation. Sign up today and
                                be a part of something bigger.
                            </p>
                            <a class="pfl-join-link" href="{{ route('volunteer-member') }}">BECOME VOLUNTEER <span aria-hidden="true">↗</span></a>
                        </div>
                    </div>

                    <!-- Annual Member Box -->
                    <div
                        class="pfl-join-card">
                        <div class="absolute -top-12 -left-10 w-40 h-40 bg-orange-400 rounded-full opacity-30 z-0">
                        </div>
                        <div class="absolute top-8 left-8 w-64 h-64 bg-orange-300 rounded-full opacity-20 z-0"></div>
                        <div class="relative z-10 flex flex-col items-center">
                            <p class="text-sm text-gray-800 font-medium leading-relaxed mb-4 max-w-xs text-justify">
                                Join a community committed to long-term change. Your annual
                                membership fuels year-round impact — supporting education,
                                environment, and empowerment.
                            </p>
                            <a class="pfl-join-link" href="{{ route('annual-member') }}">BECOME ANNUAL MEMBER <span aria-hidden="true">↗</span></a>
                        </div>
                    </div>
                </div>
            </aside>

        </div>
    </section>
    </main>

@endsection
