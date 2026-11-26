@section('title')
    Female health and hygiene
@endsection


@extends('frontend.layouts.master')

@section('page_css')
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
.pf-fhc{--navy:#16163f;--orange:#f46226;--cream:#fffaf5;font-family:'DM Sans',Arial,sans-serif;color:#26283c}
.pf-fhc *{box-sizing:border-box}
.pf-fhc :is(h1,h2,h3,h4){font-family:'Manrope',sans-serif;letter-spacing:-.035em}
.pf-fhc .fhc-shell{max-width:1440px;width:100%;margin:0 auto;padding-inline:clamp(20px,3vw,52px)}
.pf-fhc .fhc-hero{color:#fff;background:linear-gradient(105deg,rgba(16,16,47,.96),rgba(16,16,47,.78) 54%,rgba(16,16,47,.35)),url("{{ asset('uploads/images/campaign/image_2.jpg') }}") center 42%/cover no-repeat}
.pf-fhc .fhc-hero-inner{padding-top:55px;padding-bottom:75px;min-height:420px;display:flex;flex-direction:column;justify-content:center;align-items:flex-start}
.pf-fhc .fhc-breadcrumb{display:flex;flex-wrap:wrap;gap:12px;font-size:12px;color:#f5e8e8;margin-bottom:32px}
.pf-fhc .fhc-breadcrumb a{color:#fff;text-decoration:none;font-weight:700}
.pf-fhc .fhc-eyebrow{display:inline-flex;align-items:center;gap:9px;font-size:11px;font-weight:800;color:#ffae86;letter-spacing:.15em}
.pf-fhc .fhc-eyebrow:before{content:"";height:8px;width:8px;background:#f46226;border-radius:50%}
.pf-fhc .fhc-hero h1{font-size:clamp(36px,4.8vw,62px);line-height:1.15;font-weight:800;color:#fff;margin:14px 0 17px;max-width:840px}
.pf-fhc .fhc-hero h1 span{color:#ff8f63}
.pf-fhc .fhc-hero p{max-width:730px;font-size:14px;line-height:1.85;color:#eee9f0;margin:0 0 24px}
.pf-fhc .fhc-hero-link{display:inline-flex;align-items:center;background:#f46226;color:#fff;border-radius:5px;padding:13px 19px;text-decoration:none;font-size:12px;font-weight:800}
.pf-fhc .fhc-hero-link:hover{background:#de4e1b;color:#fff}
.pf-fhc .fhc-main-section{background:#fffaf5;padding:72px 0 95px}
.pf-fhc .fhc-layout{display:grid;grid-template-columns:minmax(0,1.76fr) minmax(310px,.82fr);gap:clamp(26px,3vw,48px);align-items:start}
.pf-fhc .fhc-story{min-width:0;overflow:visible}
.pf-fhc .fhc-story>div{min-width:0}
.pf-fhc .fhc-story h2{font-size:clamp(22px,2.3vw,31px)!important;color:#16163f!important;font-weight:800!important;line-height:1.34!important;margin:34px 0 17px!important}
.pf-fhc .fhc-story>div:first-child h2{margin-top:0!important}
.pf-fhc .fhc-story h3{color:#16163f!important;font-weight:800}
.pf-fhc .fhc-story p{font-size:14px!important;line-height:1.88!important;color:#606975;text-align:left!important;margin-bottom:15px}
.pf-fhc .fhc-story p .font-bold,.pf-fhc .fhc-story p span.font-bold{font-size:16px!important;line-height:1.55!important;color:#16163f;display:inline}
.pf-fhc .fhc-story p.italic{background:#fff1e7;border-left:3px solid #f46226;padding:15px 19px;color:#464657!important;font-weight:700;margin:20px 0!important}
.pf-fhc .fhc-story :is(ul,ol){padding-left:23px;color:#5f6771;font-size:13px;line-height:1.8;margin:14px 0 22px}
.pf-fhc .fhc-story :is(ul,ol) li{margin-bottom:7px}
.pf-fhc .fhc-story .relative.w-full.py-6{padding:14px 0 20px!important;margin:11px 0 20px}
.pf-fhc .fhc-gallery-swiper{width:100%;min-width:0;overflow:hidden;border-radius:6px}
.pf-fhc .fhc-gallery-swiper .swiper-wrapper{align-items:stretch}
.pf-fhc .fhc-gallery-swiper .swiper-slide{height:295px!important;overflow:hidden;border-radius:5px}
.pf-fhc .fhc-gallery-swiper .swiper-slide a{display:block;width:100%;height:100%}
.pf-fhc .fhc-gallery-swiper .swiper-slide img{display:block;width:100%!important;height:100%!important;object-fit:cover!important;border-radius:5px!important}
.pf-fhc .fhc-gallery-swiper~div [class*="swiper-button"]{background:#f46226!important;width:36px!important;height:36px!important;border-radius:50%!important;display:grid;place-items:center}
.pf-fhc .fhc-story .overflow-x-auto{width:100%;max-width:100%;border:1px solid #ebe3dd;border-radius:7px;background:#fff;margin:16px 0 26px}
.pf-fhc .fhc-story table{width:100%;border-collapse:collapse;background:#fff;min-width:580px}
.pf-fhc .fhc-story thead,.pf-fhc .fhc-story thead tr{background:#16163f!important;color:#fff!important}
.pf-fhc .fhc-story th{background:#16163f!important;color:#fff!important;font-size:11px!important;line-height:1.5;font-weight:800!important;text-align:left!important;border-color:#3b3b5e!important}
.pf-fhc .fhc-story td{font-size:12px!important;line-height:1.65;color:#596270;background:#fff;border-color:#ece7e2!important;text-align:left!important;vertical-align:top}
.pf-fhc .fhc-story :is(th,td){padding:11px 13px!important}
.pf-fhc .fhc-story tbody tr:nth-child(even) td{background:#fff9f5}
.pf-fhc .fhc-sidebar{position:sticky;top:22px;align-self:start;min-width:0}
.pf-fhc .fhc-donate-box{background:#fff;padding:25px;border:1px solid #ece2dc;box-shadow:0 9px 27px #16163f0a;border-radius:9px}
.pf-fhc .fhc-donate-box>h3{font-size:23px!important;font-weight:800!important;color:#16163f!important;margin:0 0 20px}
.pf-fhc .fhc-donate-box>h4{font-size:12px!important;font-weight:800!important;color:#16163f!important;margin:16px 0 12px}
.pf-fhc .fhc-donate-box .donation-btn,.pf-fhc .fhc-donate-box .amount-btn{width:100%;min-height:42px;border:1px solid #e9dfd8;border-radius:5px!important;padding:12px!important;font-size:12px!important;color:#16163f!important;font-weight:800!important}
.pf-fhc .fhc-donate-box .donation-btn:hover,.pf-fhc .fhc-donate-box .amount-btn:hover{border-color:#f46226}
.pf-fhc .fhc-donate-box .bg-yellow-400,.pf-fhc .fhc-donate-box .bg-\[\#FEB201\]{background:#fff0e7!important;color:#c84b1d!important;border-color:#f46226!important}
.pf-fhc .fhc-donate-box #payment-form{display:grid;gap:10px}
.pf-fhc .fhc-donate-box #payment-form input:not([type=hidden]){width:100%;min-height:45px;border:1px solid #e8ded9;border-radius:5px;padding:11px 13px;font-size:12px;color:#16163f;background:#fff;outline:none;margin:0!important}
.pf-fhc .fhc-donate-box #payment-form input:focus{border-color:#f46226}
.pf-fhc .fhc-donate-box #pay-button{background:#f46226!important;color:white!important;font-size:12px;font-weight:800;min-height:49px;border:0;border-radius:5px}
.pf-fhc .fhc-support-card{margin:18px 0 0!important;background:#fff9f4;border:1px solid #f0dfd3;border-radius:6px;padding:21px;min-height:0;display:flex;align-items:flex-start}
.pf-fhc .fhc-support-card>div.absolute{display:none}
.pf-fhc .fhc-support-card>div.relative{align-items:flex-start;text-align:left}
.pf-fhc .fhc-support-card p{font-size:12px!important;color:#606772;line-height:1.75;text-align:left!important;margin-bottom:14px}
.pf-fhc .fhc-support-link{display:inline-flex;padding:11px 13px;background:#16163f;color:#fff!important;border-radius:5px;text-decoration:none;font-size:11px;font-weight:800}
@media(max-width:1050px){.pf-fhc .fhc-layout{grid-template-columns:minmax(0,1fr) minmax(285px,.78fr);gap:23px}.pf-fhc .fhc-donate-box{padding:20px}}
@media(max-width:767px){.pf-fhc .fhc-hero-inner{min-height:365px;padding:43px 18px 53px}.pf-fhc .fhc-hero h1{font-size:35px}.pf-fhc .fhc-hero p{font-size:13px}.pf-fhc .fhc-main-section{padding:50px 0 74px}.pf-fhc .fhc-shell{padding-inline:18px}.pf-fhc .fhc-layout{grid-template-columns:1fr;gap:34px}.pf-fhc .fhc-sidebar{position:static}.pf-fhc .fhc-gallery-swiper .swiper-slide{height:230px!important}.pf-fhc .fhc-story h2{font-size:23px!important}}
@media(prefers-reduced-motion:reduce){.pf-fhc *{transition:none!important}}
</style>
@endsection

@section('content')
<main class="pf-fhc">
<section class="fhc-hero" aria-labelledby="fhc-page-title">
 <div class="fhc-shell fhc-hero-inner">
  <nav class="fhc-breadcrumb" aria-label="Breadcrumb"><a href="{{ route('home') }}">Home</a><span>/</span><a href="{{ route('our-project') }}">Projects</a><span>/</span><span>Female Health Camps</span></nav>
  <span class="fhc-eyebrow">SUPPORTED BY GAIL (INDIA) LIMITED</span>
  <h1 id="fhc-page-title">INTENSIVE CARE FOR <span>FEMALE HEALTH CAMPS</span></h1>
  <p>Community-focused health camps addressing menstrual hygiene, overall well-being and individual health needs, conducted from December 2023 to March 2024.</p>
  <a href="#fhc-report" class="fhc-hero-link">EXPLORE THE PROGRAMME <span aria-hidden="true">↗</span></a>
 </div>
</section>

    <!-- Main Content & Donate now Form -->
    <section class="fhc-main-section" id="fhc-report">
        <div class="fhc-shell fhc-layout">

            <!-- Left Content (scrollable text, images, sliders) -->
            <article class="fhc-story">

                <!-- Paragraphs -->
                <div class="space-y-4  leading-relaxed">
                    <h2 class="md:text-3xl font-bold text-2xl">
                        Overview
                    </h2>
                    <p class="text-justify">
                        In partnership with GAIL (India) Limited, Pyare Foundation successfully organized a series of
                        “Intensive Care For Female Health Camps” from December 2023 to March 2024. The objective of these
                        health camps was to comprehensively address the health needs of females in the community, focusing
                        on areas such as menstrual hygiene, overall well-being, and personalized health insights.
                    </p>
                </div>


                <!-- Slider 1 -->
                <!-- Swiper Section -->

                <div class="relative w-full py-6">
                    <!-- Swiper Container -->
                    <div class="swiper fhc-gallery-swiper">
                        <div class="swiper-wrapper">
                            <!-- Slide -->
                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_2.jpg') }}" data-fancybox="female-health-camps"
                                    data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_2.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_3.jpg') }}" data-fancybox="female-health-camps"
                                    data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_3.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_4.jpg') }}" data-fancybox="female-health-camps"
                                    data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_4.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_5.jpg') }}" data-fancybox="female-health-camps"
                                    data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_5.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_6.jpg') }}" data-fancybox="female-health-camps"
                                    data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_6.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_7.jpg') }}" data-fancybox="female-health-camps"
                                    data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_7.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_8.jpg') }}" data-fancybox="female-health-camps"
                                    data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_8.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_9.jpg') }}" data-fancybox="female-health-camps"
                                    data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_9.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_10.jpg') }}" data-fancybox="female-health-camps"
                                    data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_10.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_11.jpg') }}" data-fancybox="female-health-camps"
                                    data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_11.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_12.jpg') }}" data-fancybox="female-health-camps"
                                    data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_12.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_13.jpg') }}" data-fancybox="female-health-camps"
                                    data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_13.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_14.jpg') }}" data-fancybox="female-health-camps"
                                    data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_14.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_15.jpg') }}"
                                    data-fancybox="female-health-camps" data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_15.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_16.jpg') }}"
                                    data-fancybox="female-health-camps" data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_16.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_17.jpg') }}"
                                    data-fancybox="female-health-camps" data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_17.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_18.jpg') }}"
                                    data-fancybox="female-health-camps" data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_18.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_19.jpg') }}"
                                    data-fancybox="female-health-camps" data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_19.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_20.jpg') }}"
                                    data-fancybox="female-health-camps" data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_20.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>
                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_21.jpg') }}"
                                    data-fancybox="female-health-camps" data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_21.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_22.jpg') }}"
                                    data-fancybox="female-health-camps" data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_22.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_23.jpg') }}"
                                    data-fancybox="female-health-camps" data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_23.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_24.jpg') }}"
                                    data-fancybox="female-health-camps" data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_24.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_25.jpg') }}"
                                    data-fancybox="female-health-camps" data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_25.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_26.jpg') }}"
                                    data-fancybox="female-health-camps" data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_26.jpg') }}" alt="Training 1"
                                        class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                </a>

                            </div>

                            <div class="swiper-slide">

                                <a href="{{ asset('uploads/images/campaign/image_26.jpg') }}"
                                    data-fancybox="female-health-camps" data-caption="Health Campaigns">
                                    <img src="{{ asset('uploads/images/campaign/image_27.jpg') }}" alt="Training 1"
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
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

                <div class="space-y-5  leading-relaxed">
                    <h2 class="md:text-3xl font-bold text-2xl">
                        Program Progress
                    </h2>
                    <p class="text-justify">
                        <span class="font-bold text-lg">1. Needs Assessment and Planning:</span> Before the initiation of
                        each
                        health camp, a thorough needs assessment was conducted to identify specific health challenges within
                        the community. This information guided the planning process, ensuring that the interventions were
                        tailored to the unique health needs of the female population.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">3. Venue Selection: </span> Careful consideration was given to the
                        selection of venues for each health camp to ensure accessibility for the target population.
                    </p>
                </div>






                <div class="">
                    <h2 class="md:text-xl sm:text-3xl pb-4">
                        List of Team Members involved in the entire project
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
                                    <td class="px-4 py-2 border border-black">President</td>

                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">2.</td>
                                    <td class="px-4 py-2 border border-black">Mrs Pushpa Thapliyal</td>
                                    <td class="px-4 py-2 border border-black">Deputy Secretary</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">3.</td>
                                    <td class="px-4 py-2 border border-black">Mr. Parvesh</td>
                                    <td class="px-4 py-2 border border-black">Operations Head</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div>


                    <h2 class="md:text-xl sm:text-3xl py-4">
                        a. Lab Technician to take blood samples during health camps and Asha for providing helping hands
                    </h2>

                    <div class="max-w-full  overflow-x-auto">
                        <table class="min-w-full border border-black text-sm text-left text-black">
                            <thead class="bg-[#0A0A3C] text-white">
                                <tr>
                                    <th class="px-4 py-2 border border-black font-semibold">S. No</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Name</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Position</th>

                                    <!-- Add more columns here if needed -->
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="px-4 py-2 border border-black">1.</td>
                                    <td class="px-4 py-2 border border-black">Mr. Parash Kumar</td>
                                    <td class="px-4 py-2 border border-black">DMLT, BSc. MLT Final Year</td>

                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">2.</td>
                                    <td class="px-4 py-2 border border-black">Mrs Meena Devi</td>
                                    <td class="px-4 py-2 border border-black">Asha</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>


                <div>


                    <h2 class="md:text-xl sm:text-3xl py-4">
                        b. Available Doctors to perform online video conferencing in entire project
                    </h2>

                    <div class="max-w-full  overflow-x-auto">
                        <table class="min-w-full border border-black text-sm text-left text-black">
                            <thead class="bg-[#0A0A3C] text-white">
                                <tr>
                                    <th class="px-4 py-2 border border-black font-semibold">S. No</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Doctor’s Name</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Reg. No</th>

                                    <!-- Add more columns here if needed -->
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="px-4 py-2 border border-black">1.</td>
                                    <td class="px-4 py-2 border border-black">Dr Pradeep Kumar – MBBS - Orthopedic/ Neuro
                                        Surgery/ TBCD</td>
                                    <td class="px-4 py-2 border border-black">UPMCI26828</td>

                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">2.</td>
                                    <td class="px-4 py-2 border border-black">Dr. Rajesh Mishra – MBBS - Demonstrator
                                        Respiratory Medicine</td>
                                    <td class="px-4 py-2 border border-black">UPMCI97894</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">3.</td>
                                    <td class="px-4 py-2 border border-black">Dr Arshi Shafat – MBBS - Demonstrator
                                        Cardiology Department</td>
                                    <td class="px-4 py-2 border border-black">UPMCI80120</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">4.</td>
                                    <td class="px-4 py-2 border border-black">Dr. Vikrant Goswami - MBBS - Demonstrator
                                        Biochemistry Department</td>
                                    <td class="px-4 py-2 border border-black">UPMCI89469</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">5.</td>
                                    <td class="px-4 py-2 border border-black">Dr. Sanjiv Jha – MBBS</td>
                                    <td class="px-4 py-2 border border-black">UPMCI108363</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">6.</td>
                                    <td class="px-4 py-2 border border-black">Dr. Sneha Mishra – MBBS, MS – Obs Gyn.</td>
                                    <td class="px-4 py-2 border border-black">UPMCI108368</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">7.</td>
                                    <td class="px-4 py-2 border border-black">Dr. Siddharth Singh - MBBS</td>
                                    <td class="px-4 py-2 border border-black">UPMCI86872</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">8.</td>
                                    <td class="px-4 py-2 border border-black">Dr. Ipsita Singh, MBBS</td>
                                    <td class="px-4 py-2 border border-black">UPMCI86921</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>

                <p class="text-justify py-4">
                    <span class="font-bold text-lg">3. Venue Selection: </span> Careful consideration was given to the
                    selection of venues for each health camp to ensure accessibility for the target population.
                </p>
                <p class="italic text-justify py-4 font-bold">As per the CMO recommendation follow-up camps were also
                    organised along with health camps, therefore, there are 34 health camps in total including follow-up
                    camps.</p>


                <div>


                    <h2 class="md:text-xl sm:text-3xl py-4">
                        a. Health Camps Details
                    </h2>

                    <div class="max-w-full overflow-x-auto">
                        <table class="min-w-full border border-black text-sm text-left text-black">
                            <thead class="bg-[#0A0A3C] text-white">
                                <tr>
                                    <th class="px-4 py-2 border border-black font-semibold">S. No</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Month</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Location/ Venue</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Date of HC</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="px-4 py-2 border border-black">1.</td>
                                    <td class="px-4 py-2 border border-black align-center" rowspan="5">December</td>
                                    <td class="px-4 py-2 border border-black">Shri Gangadhar Maithani Rajkiye Mahavidyalaya
                                        Guptakashi Vidyapeeth, Rudraprayag, Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">18th Dec 2023</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">2.</td>
                                    <td class="px-4 py-2 border border-black">Government Girls High School, Ukhimath,
                                        Rudraprayag, Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">20th Dec 2023</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">3.</td>
                                    <td class="px-4 py-2 border border-black">Atal Utkrisht GIC, Ukhimath, Rudraprayag,
                                        Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">21st Dec 2023</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">4.</td>
                                    <td class="px-4 py-2 border border-black">Swami Pranavanand Vidya Mandir Ukhimath</td>
                                    <td class="px-4 py-2 border border-black">23rd Dec 2023</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">5.</td>
                                    <td class="px-4 py-2 border border-black">Village Giriya, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">26th Dec 2023</td>
                                </tr>


                                <tr>
                                    <td class="px-4 py-2 border border-black">6.</td>
                                    <td class="px-4 py-2 border border-black align-center" rowspan="4">January</td>
                                    <td class="px-4 py-2 border border-black">Village Gadgu, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">17th Jan 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">7.</td>
                                    <td class="px-4 py-2 border border-black">Village Kalimath, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">20rd Jan 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">8.</td>
                                    <td class="px-4 py-2 border border-black">Shri Uttarakhand Ayurved Bhaishajya Kalp
                                        (Pharmacist) Prashikshan Vidyalay, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">23rd Jan 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">9.</td>
                                    <td class="px-4 py-2 border border-black">Village Rayari, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">24th Jan 2024</td>
                                </tr>


                                <tr>
                                    <td class="px-4 py-2 border border-black">10.</td>
                                    <td class="px-4 py-2 border border-black align-center" rowspan="4">February</td>
                                    <td class="px-4 py-2 border border-black">Village Arkhund, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">14th Feb 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">11.</td>
                                    <td class="px-4 py-2 border border-black">Village Kandara, Agastyamuni, Rudraprayag
                                    </td>
                                    <td class="px-4 py-2 border border-black">15th Feb 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">12.</td>
                                    <td class="px-4 py-2 border border-black">Village Ransi, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">20th Feb 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">13.</td>
                                    <td class="px-4 py-2 border border-black">Government Degree College, Agastyamuni,
                                        Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">21st Feb 2024</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">14.</td>
                                    <td class="px-4 py-2 border border-black align-center" rowspan="4">March</td>
                                    <td class="px-4 py-2 border border-black">Village Dankot, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">10th March 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">15.</td>
                                    <td class="px-4 py-2 border border-black">Village Uchhola, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">11th March 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">16.</td>
                                    <td class="px-4 py-2 border border-black">Gauri Memorial Public School, Agastyamuni,
                                        Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">12th March 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">17.</td>
                                    <td class="px-4 py-2 border border-black">Village Dangwadi, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">15th March 2024</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>


                <div>


                    <h2 class="md:text-xl sm:text-3xl py-4">
                        b. Followup Camps Details
                    </h2>

                    <div class="max-w-full overflow-x-auto">
                        <table class="min-w-full border border-black text-sm text-left text-black">
                            <thead class="bg-[#0A0A3C] text-white">
                                <tr>
                                    <th class="px-4 py-2 border border-black font-semibold">S. No</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Month</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Location/ Venue</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Date of HC</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="px-4 py-2 border border-black">1.</td>
                                    <td class="px-4 py-2 border border-black align-center" rowspan="5">December</td>
                                    <td class="px-4 py-2 border border-black">Shri Gangadhar Maithani Rajkiye Mahavidyalaya
                                        Guptakashi Vidyapeeth, Rudraprayag, Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">27th Dec 2023</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">2.</td>
                                    <td class="px-4 py-2 border border-black">Government Girls High School, Ukhimath,
                                        Rudraprayag, Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">24th Dec 2023</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">3.</td>
                                    <td class="px-4 py-2 border border-black">Atal Utkrisht GIC, Ukhimath, Rudraprayag,
                                        Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">28th Dec 2023</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">4.</td>
                                    <td class="px-4 py-2 border border-black">Swami Pranavanand Vidya Mandir Ukhimath</td>
                                    <td class="px-4 py-2 border border-black">30th Dec 2023</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">5.</td>
                                    <td class="px-4 py-2 border border-black">Village Giriya, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">31st Dec 2023</td>
                                </tr>


                                <tr>
                                    <td class="px-4 py-2 border border-black">6.</td>
                                    <td class="px-4 py-2 border border-black align-center" rowspan="4">January</td>
                                    <td class="px-4 py-2 border border-black">Village Gadgu, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">21st Jan 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">7.</td>
                                    <td class="px-4 py-2 border border-black">Village Kalimath, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">22nd Jan 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">8.</td>
                                    <td class="px-4 py-2 border border-black">Shri Uttarakhand Ayurved Bhaishajya Kalp
                                        (Pharmacist) Prashikshan Vidyalay, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">29th Jan 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">9.</td>
                                    <td class="px-4 py-2 border border-black">Village Rayari, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">30th Jan 2024</td>
                                </tr>


                                <tr>
                                    <td class="px-4 py-2 border border-black">10.</td>
                                    <td class="px-4 py-2 border border-black align-center" rowspan="4">February</td>
                                    <td class="px-4 py-2 border border-black">Village Arkhund, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">17th Feb 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">11.</td>
                                    <td class="px-4 py-2 border border-black">Village Kandara, Agastyamuni, Rudraprayag
                                    </td>
                                    <td class="px-4 py-2 border border-black">18th Feb 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">12.</td>
                                    <td class="px-4 py-2 border border-black">Village Ransi, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">23rd Feb 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">13.</td>
                                    <td class="px-4 py-2 border border-black">Government Degree College, Agastyamuni,
                                        Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">22nd Feb 2024</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">14.</td>
                                    <td class="px-4 py-2 border border-black align-center" rowspan="4">March</td>
                                    <td class="px-4 py-2 border border-black">Village Dankot, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">13th March 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">15.</td>
                                    <td class="px-4 py-2 border border-black">Village Uchhola, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">14th March 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">16.</td>
                                    <td class="px-4 py-2 border border-black">Gauri Memorial Public School, Agastyamuni,
                                        Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">13th March 2024</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">17.</td>
                                    <td class="px-4 py-2 border border-black">Village Dangwadi, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">16th March 2024</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="space-y-5  leading-relaxed">



                    <p class="text-justify">
                        <span class="font-bold text-lg">a. Health Assessments and Sample Collection:</span> A significant
                        component of the health camps was the comprehensive health assessments, including the collection of
                        blood samples. This proactive approach allowed for a deeper understanding of individual health needs
                        and laid the groundwork for personalized health insights and interventions.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">b. Menstrual Hygiene Promotion: </span> Distribution of sanitary
                        pads during each health camp addressed a critical aspect of female health—menstrual hygiene. This
                        initiative aimed to eliminate barriers to access and promote healthy menstrual practices,
                        contributing to the overall reproductive health of women in the community.
                    </p>


                    <p class="text-justify">
                        <span class="font-bold text-lg">c. Supplement Distribution:</span> The provision of supplements
                        during the health camps was a proactive measure to support overall well-being. This step aligned
                        with the program’s holistic approach, addressing not only immediate health concerns but also
                        promoting preventive healthcare practices for a healthier community.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">d. Online Doctor Sessions: </span> Leveraging technology, online
                        sessions with experienced healthcare professionals, including Dr. Pradeep Kumar, Dr. Arshi Shafat,
                        and Dr. Rajesh Mishra, Dr. Siddharth Singh, Dr. Ipsita Singh etc. were conducted. These sessions
                        served as platforms for disseminating valuable health information, empowering women with knowledge,
                        and fostering a sense of community well-being.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">e. Installation of Sanitary Pad Incinerator: </span> Sanitary Pads
                        Incinerator was given to this school. Receiving from Principal was already attached with December
                        report. The machine was successfully installed in the school in the month of March, 2024 after
                        reaching the electricity connection in the school. Photographs and videos will be shared through
                        email
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">f. Gratitude and Acknowledgment: </span> A key element of the
                        program process involved expressing gratitude to GAIL (India) Limited for their steadfast support.
                        This acknowledgment highlighted the importance of collaborative efforts and reinforced the shared
                        commitment to improving female health within the community.
                    </p>


                    <p class="text-justify">
                        The success of the “Intensive Care For Female Health Camps” can be attributed to the systematic and
                        thoughtful execution of this program process. Each step was intricately woven to create a holistic
                        and impactful healthcare experience for the women served.
                    </p>



                </div>

                <div>


                    <h2 class="md:text-xl sm:text-3xl py-4">
                        5. Health Camp Wise Doctor’s Conferencing
                    </h2>

                    <div class="max-w-full  overflow-x-auto">
                        <table class="min-w-full border border-black text-sm text-left text-black">
                            <thead class="bg-[#0A0A3C] text-white">
                                <tr>
                                    <th class="px-4 py-2 border border-black font-semibold">S. No</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Location/ Venue</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Date of HC</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Doctor</th>
                                    <!-- Add more columns here if needed -->
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="px-4 py-2 border border-black">1.</td>
                                    <td class="px-4 py-2 border border-black">Shri Gangadhar Maithani Rajkiye Mahavidyalaya
                                        Guptakashi Vidyapeeth, Rudraprayag, Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">18th Dec 2023</td>
                                    <td class="px-4 py-2 border border-black">Dr Pradeep Kumar - UPMCI26828</td>

                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">2.</td>
                                    <td class="px-4 py-2 border border-black">Government Girls High School, Ukhimath,
                                        Rudraprayag, Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">20th Dec 2023</td>
                                    <td class="px-4 py-2 border border-black">Dr Arshi Shafat - UPMCI80120</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">3.</td>
                                    <td class="px-4 py-2 border border-black">Atal Utkrisht GIC, Ukhimath, Rudraprayag,
                                        Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">21st Dec 2023</td>
                                    <td class="px-4 py-2 border border-black">Dr. Rajesh Mishra - UPMCI97894</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">4.</td>
                                    <td class="px-4 py-2 border border-black">Swami Pranavanand Vidya Mandir Ukhimath</td>
                                    <td class="px-4 py-2 border border-black">23rd Dec 2023</td>
                                    <td class="px-4 py-2 border border-black">Dr. Rajesh Mishra - UPMCI97894</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">5.</td>
                                    <td class="px-4 py-2 border border-black">Village Giriya, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">26th Dec 2023</td>
                                    <td class="px-4 py-2 border border-black">Dr Arshi Shafat - UPMCI80120</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">6.</td>
                                    <td class="px-4 py-2 border border-black">Village Gadgu, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">17th Jan 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr Arshi Shafat - UPMCI80120</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">7.</td>
                                    <td class="px-4 py-2 border border-black">Village Kalimath, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">20th Jan 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr Arshi Shafat - UPMCI80120</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">8.</td>
                                    <td class="px-4 py-2 border border-black">Shri Uttarakhand Ayurved Bhaishajya Kalp
                                        (Pharmacist) Prashikshan Vidyalay, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">23rd Jan 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr Arshi Shafat - UPMCI80120</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">9.</td>
                                    <td class="px-4 py-2 border border-black">Village Rayari, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">24th Jan 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr. Siddharth Singh - UPMCI86872</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">10.</td>
                                    <td class="px-4 py-2 border border-black">Village Arkhund, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">14th Feb 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr. Ipsita Singh - UPMCI86921</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">11.</td>
                                    <td class="px-4 py-2 border border-black">Village Kandara, Agastyamuni, Rudraprayag
                                    </td>
                                    <td class="px-4 py-2 border border-black">15th Feb 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr. Siddharth Singh - UPMCI86872</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">12.</td>
                                    <td class="px-4 py-2 border border-black">Village Ransi, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">20th Feb 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr. Ipsita Singh - UPMCI86921</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">13.</td>
                                    <td class="px-4 py-2 border border-black">Government Degree College, Agastyamuni,
                                        Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">21st Feb 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr. Siddharth Singh - UPMCI86872</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">14.</td>
                                    <td class="px-4 py-2 border border-black">Village Dankot, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">10th March 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr. Siddharth Singh - UPMCI86872</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">15.</td>
                                    <td class="px-4 py-2 border border-black">Village Uchhola, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">11th March 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr. Ipsita Singh - UPMCI86921</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">16.</td>
                                    <td class="px-4 py-2 border border-black">Gauri Memorial Public School, Agastyamuni,
                                        Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">12th March 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr. Siddharth Singh - UPMCI86872</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">17.</td>
                                    <td class="px-4 py-2 border border-black">Village Dangwadi, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">15th March 2024</td>
                                    <td class="px-4 py-2 border border-black">Dr. Ipsita Singh - UPMCI86921</td>
                                </tr>



                            </tbody>
                        </table>
                    </div>
                </div>




                <div>


                    <h2 class="md:text-xl sm:text-3xl py-4">
                        6. Health Outcomes
                    </h2>

                    <div class="max-w-full  overflow-x-auto">
                        <table class="min-w-full border border-black text-sm text-left text-black">
                            <thead class="bg-[#0A0A3C] text-white">
                                <tr>
                                    <th class="px-4 py-2 border border-black font-semibold">S. No</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Location/ Venue</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Date of HC</th>
                                    <th class="px-4 py-2 border border-black font-semibold">No of Participants</th>

                                    <th class="px-4 py-2 border border-black font-semibold">No of Sample Collection</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Sanitary Pads</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Vitamins & Supplements</th>
                                    <th class="px-4 py-2 border border-black font-semibold">Doctors’ Sessions</th>


                                    <!-- Add more columns here if needed -->
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="px-4 py-2 border border-black">1.</td>
                                    <td class="px-4 py-2 border border-black">Shri Gangadhar Maithani Rajkiye Mahavidyalaya
                                        Guptakashi Vidyapeeth, Rudraprayag, Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">18th Dec 2023</td>
                                    <td class="px-4 py-2 border border-black">60</td>
                                    <td class="px-4 py-2 border border-black">20</td>
                                    <td class="px-4 py-2 border border-black">300 packets</td>
                                    <td class="px-4 py-2 border border-black">1800 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">2.</td>
                                    <td class="px-4 py-2 border border-black">Government Girls High School, Ukhimath,
                                        Rudraprayag, Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">20th Dec 2023</td>
                                    <td class="px-4 py-2 border border-black">39</td>
                                    <td class="px-4 py-2 border border-black">15</td>
                                    <td class="px-4 py-2 border border-black">150 packets</td>
                                    <td class="px-4 py-2 border border-black">780 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">3.</td>
                                    <td class="px-4 py-2 border border-black">Atal Utkrisht GIC, Ukhimath, Rudraprayag,
                                        Uttarakhand</td>
                                    <td class="px-4 py-2 border border-black">21st Dec 2023</td>
                                    <td class="px-4 py-2 border border-black">69</td>
                                    <td class="px-4 py-2 border border-black">20</td>
                                    <td class="px-4 py-2 border border-black">345 packets</td>
                                    <td class="px-4 py-2 border border-black">2070 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">4.</td>
                                    <td class="px-4 py-2 border border-black">Swami Pranavanand Vidya Mandir Ukhimath</td>
                                    <td class="px-4 py-2 border border-black">23rd Dec 2023</td>
                                    <td class="px-4 py-2 border border-black">39</td>
                                    <td class="px-4 py-2 border border-black">15</td>
                                    <td class="px-4 py-2 border border-black">150 packets</td>
                                    <td class="px-4 py-2 border border-black">780 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">5.</td>
                                    <td class="px-4 py-2 border border-black">Village Giriya, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">26th Dec 2023</td>
                                    <td class="px-4 py-2 border border-black">150</td>
                                    <td class="px-4 py-2 border border-black">55</td>
                                    <td class="px-4 py-2 border border-black">275 packets</td>
                                    <td class="px-4 py-2 border border-black">5100 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">6.</td>
                                    <td class="px-4 py-2 border border-black">Village Gadgu, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">17th Jan 2024</td>
                                    <td class="px-4 py-2 border border-black">175</td>
                                    <td class="px-4 py-2 border border-black">73</td>
                                    <td class="px-4 py-2 border border-black">400 packets</td>
                                    <td class="px-4 py-2 border border-black">10500 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">7.</td>
                                    <td class="px-4 py-2 border border-black">Village Kalimath, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">20th Jan 2024</td>
                                    <td class="px-4 py-2 border border-black">150</td>
                                    <td class="px-4 py-2 border border-black">81</td>
                                    <td class="px-4 py-2 border border-black">350 packets</td>
                                    <td class="px-4 py-2 border border-black">9000 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">8.</td>
                                    <td class="px-4 py-2 border border-black">Shri Uttarakhand Ayurved Bhaishajya Kalp
                                        (Pharmacist) Prashikshan Vidyalay, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">23rd Jan 2024</td>
                                    <td class="px-4 py-2 border border-black">43</td>
                                    <td class="px-4 py-2 border border-black">43</td>
                                    <td class="px-4 py-2 border border-black">86 packets</td>
                                    <td class="px-4 py-2 border border-black">2580 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">9.</td>
                                    <td class="px-4 py-2 border border-black">Village Rayari, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">24th Jan 2024</td>
                                    <td class="px-4 py-2 border border-black">204</td>
                                    <td class="px-4 py-2 border border-black">99</td>
                                    <td class="px-4 py-2 border border-black">410 packets</td>
                                    <td class="px-4 py-2 border border-black">12240 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">10.</td>
                                    <td class="px-4 py-2 border border-black">Village Arkhund, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">14th Feb 2024</td>
                                    <td class="px-4 py-2 border border-black">82</td>
                                    <td class="px-4 py-2 border border-black">22</td>
                                    <td class="px-4 py-2 border border-black">246 packets & 28 packets reserved</td>
                                    <td class="px-4 py-2 border border-black">4920 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">11.</td>
                                    <td class="px-4 py-2 border border-black">Village Kandara, Agastyamuni, Rudraprayag
                                    </td>
                                    <td class="px-4 py-2 border border-black">15th Feb 2024</td>
                                    <td class="px-4 py-2 border border-black">69</td>
                                    <td class="px-4 py-2 border border-black">15</td>
                                    <td class="px-4 py-2 border border-black">207 packets& 28 packets reserved</td>
                                    <td class="px-4 py-2 border border-black">4140 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">12.</td>
                                    <td class="px-4 py-2 border border-black">Village Ransi, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">20th Feb 2024</td>
                                    <td class="px-4 py-2 border border-black">45</td>
                                    <td class="px-4 py-2 border border-black">10</td>
                                    <td class="px-4 py-2 border border-black">135 packets & 24 packets reserved</td>
                                    <td class="px-4 py-2 border border-black">2700 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">13.</td>
                                    <td class="px-4 py-2 border border-black">Government Degree College, Agastyamuni,
                                        Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">21st Feb 2024</td>
                                    <td class="px-4 py-2 border border-black">168</td>
                                    <td class="px-4 py-2 border border-black">284</td>
                                    <td class="px-4 py-2 border border-black">504 packets & 28 packets reserved</td>
                                    <td class="px-4 py-2 border border-black">14112 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">14.</td>
                                    <td class="px-4 py-2 border border-black">Village Dankot, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">10th March 2024</td>
                                    <td class="px-4 py-2 border border-black">55</td>
                                    <td class="px-4 py-2 border border-black">11</td>
                                    <td class="px-4 py-2 border border-black">165 packets & 27 packets reserved</td>
                                    <td class="px-4 py-2 border border-black">3300 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">15.</td>
                                    <td class="px-4 py-2 border border-black">Village Uchhola, Jakholi, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">11th March 2024</td>
                                    <td class="px-4 py-2 border border-black">168</td>
                                    <td class="px-4 py-2 border border-black">2</td>
                                    <td class="px-4 py-2 border border-black">504 packets & 27 packets reserved</td>
                                    <td class="px-4 py-2 border border-black">10080 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 border border-black">16.</td>
                                    <td class="px-4 py-2 border border-black">Gauri Memorial Public School, Agastyamuni,
                                        Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">12th March 2024</td>
                                    <td class="px-4 py-2 border border-black">68</td>
                                    <td class="px-4 py-2 border border-black">28</td>
                                    <td class="px-4 py-2 border border-black">204 packets & 27 packets reserved</td>
                                    <td class="px-4 py-2 border border-black">4080 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-2 border border-black">17.</td>
                                    <td class="px-4 py-2 border border-black">Village Dangwadi, Ukhimath, Rudraprayag</td>
                                    <td class="px-4 py-2 border border-black">15th March 2024</td>
                                    <td class="px-4 py-2 border border-black">63</td>
                                    <td class="px-4 py-2 border border-black">9</td>
                                    <td class="px-4 py-2 border border-black">219 packets & 27 packets reserved</td>
                                    <td class="px-4 py-2 border border-black">4380 tabs</td>
                                    <td class="px-4 py-2 border border-black">3</td>
                                </tr>
                                <tr>

                                    <td class="px-4 py-2 border border-black align-center font-bold" colspan="3">Total
                                    </td>
                                    <td class="px-4 py-2 border border-black">1657</td>
                                    <td class="px-4 py-2 border border-black">1657</td>
                                    <td class="px-4 py-2 border border-black">4846 packets</td>
                                    <td class="px-4 py-2 border border-black">92562</td>
                                    <td class="px-4 py-2 border border-black">48</td>

                                </tr>



                            </tbody>
                        </table>
                    </div>
                </div>


                <p class="text-justify py-2 font-bold">a. Some patients come out to be anaemic and polycythemia</p>

                <p class="text-justify py-2 font-bold">b. Many medicines were distributed as per the doctor’s consultation
                    on video conferencing</p>



                <div>


                    <h2 class="md:text-xl sm:text-3xl py-4">
                        b. Followup Camps Details
                    </h2>

                    <div class="max-w-full overflow-x-auto">
                        <table class="min-w-full border border-black text-sm text-left text-black">
                            <thead class="bg-[#0A0A3C] text-white">
                                <tr>

                                    <th class="px-4 py-2 border border-black font-semibold" hidden>HGB</th>
                                    <th class="px-4 py-2 border border-black font-semibold" hidden>RBC</th>
                                    <th class="px-4 py-2 border border-black font-semibold" hidden>WBC</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>

                                    <td class="px-4 py-2 border border-black text-white align-center bg-[#0A0A3C]"
                                        rowspan="3">HGB</td>
                                    <td class="px-4 py-2 border border-black">Number of Patients with Hemoglobin More than
                                        Normal Value</td>
                                    <td class="px-4 py-2 border border-black">2</td>
                                </tr>
                                <tr>

                                    <td class="px-4 py-2 border border-black">Number of Patients with Hemoglobin Less than
                                        Normal Value</td>
                                    <td class="px-4 py-2 border border-black">138</td>
                                </tr>
                                <tr>

                                    <td class="px-4 py-2 border border-black">Number of Patients with Hemoglobin in Normal
                                        Range</td>
                                    <td class="px-4 py-2 border border-black">460</td>
                                </tr>


                                <tr>

                                    <td class="px-4 py-2 border border-black text-white align-center bg-[#0070C0]"
                                        rowspan="3">RBC</td>
                                    <td class="px-4 py-2 border border-black">Number of Patients with RBCs More than Normal
                                        Value</td>
                                    <td class="px-4 py-2 border border-black">22</td>
                                </tr>
                                <tr>

                                    <td class="px-4 py-2 border border-black">Number of Patients with RBCs Less than Normal
                                        Value</td>
                                    <td class="px-4 py-2 border border-black">43</td>
                                </tr>
                                <tr>

                                    <td class="px-4 py-2 border border-black">Number of Patients with RBCs in Normal Range
                                    </td>
                                    <td class="px-4 py-2 border border-black">535</td>
                                </tr>


                                <tr>

                                    <td class="px-4 py-2 border border-black text-white align-center bg-[#0A0A3C]"
                                        rowspan="3">WBC</td>
                                    <td class="px-4 py-2 border border-black">Number of Patients with WBCs More than Normal
                                        Value</td>
                                    <td class="px-4 py-2 border border-black">230</td>
                                </tr>
                                <tr>

                                    <td class="px-4 py-2 border border-black">Number of Patients with WBCs Less than Normal
                                        Value</td>
                                    <td class="px-4 py-2 border border-black">15</td>
                                </tr>
                                <tr>

                                    <td class="px-4 py-2 border border-black">Number of Patients with WBCs in Normal Range
                                    </td>
                                    <td class="px-4 py-2 border border-black">355</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>



                <h2 class="md:text-2xl font-bold sm:text-3xl py-4">
                    COMMUNITY ENGAGEMENT AND OUTREACH
                </h2>


                <div class="space-y-5  leading-relaxed">



                    <p class="text-justify">
                        <span class="font-bold text-lg">1. Community Needs Assessment: </span> The program commenced with a
                        thorough assessment of community needs, conducted through collaborative efforts with local leaders,
                        community representatives, and healthcare professionals. This participatory approach allowed for a
                        nuanced understanding of the specific health challenges faced by women in the community.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">2. Stakeholder Collaboration: </span> Strategic collaboration with
                        local stakeholders, including educational institutions, community leaders, and women’s groups,
                        played a pivotal role in ensuring widespread community participation. By engaging with key
                        influencers, the program gained credibility and fostered a sense of ownership within the community.


                    <p class="text-justify">
                        <span class="font-bold text-lg">3. Promotional Campaigns:</span> Prior to each health camp,
                        extensive promotional campaigns were conducted through various channels, including local media,
                        community bulletin boards, and social media platforms. These campaigns effectively communicated the
                        purpose, date, and location of the health camps, generating anticipation and interest within the
                        community.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">4. Engagement Through Education: </span> Beyond the health
                        assessments, a series of educational initiatives were integrated into the health camps. Interactive
                        sessions, workshops, and informative materials were utilized to educate women on various health
                        topics, promoting a culture of health awareness and empowerment.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">5. Continuous Feedback Loop: </span> Throughout the program, a
                        continuous feedback loop was established to gauge community responses and gather insights for future
                        improvements. Open channels of communication facilitated dialogue, allowing the program to evolve in
                        response to the dynamic needs of the community.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">6. Post-Event Follow-Up: </span> Following each health camp,
                        post-event follow-up mechanisms were implemented to ensure sustained impact. This included the
                        distribution of educational materials, contact information for healthcare resources, and information
                        on local health services, encouraging ongoing health-conscious behaviors.
                    </p>

                    <p class="text-justify">
                        <span class="font-bold text-lg">7. Social and Cultural Sensitivity: </span> Recognizing the
                        diversity of the community, efforts were made to approach health issues with sensitivity to social
                        and cultural norms. Tailored communication strategies were employed to ensure that health messages
                        resonated with the cultural context of the community.


                    <p class="text-justify">
                        <span class="font-bold text-lg">8. Gratitude and Recognition: </span> Expressing gratitude to
                        community members for their active participation and support was a key element of the outreach
                        strategy. Recognizing the community’s role in the success of the health camps fostered a sense of
                        collective achievement and strengthened the bond between the program organizers and the community.
                    </p>



                </div>

                <h2 class="md:text-2xl font-bold sm:text-3xl py-4">
                    CHALLENGES FACED
                </h2>


                <div class="space-y-5  leading-relaxed">
                    <p class="text-justify">
                        The execution of the “Intensive Care For Female Health Camps” brought to light various challenges,
                        each offering valuable lessons that have informed our understanding and approach towards future
                        initiatives. This section outlines the challenges encountered from this collaborative health
                        program.
                    </p>


                    <p class="text-justify">
                        <span class="font-bold text-lg">1. Logistical Coordination: </span> Coordinating logistics for
                        multiple health camps across diverse locations posed logistical challenges. Ensuring the timely
                        availability of resources, healthcare professionals, and support staff required meticulous planning
                        and coordination.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">2. Weather-related Constraints: </span> The outdoor nature of some
                        health camp venues exposed the program to weather-related constraints. Unpredictable weather
                        conditions, especially during the winter season, affected attendance and required adaptations to
                        ensure the safety and well-being of participants.
                    </p>

                    <p class="text-justify">
                        <span class="font-bold text-lg">3. Communication Barriers:</span> Despite efforts to promote
                        inclusivity, language and communication barriers were encountered. Tailoring health messages to
                        diverse linguistic preferences and ensuring effective communication with non-native speakers
                        presented ongoing challenges.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">4. Limited Technological Access: </span> Some participants faced
                        challenges accessing online sessions due to limited technological resources. Bridging the digital
                        divide in certain communities became crucial to ensuring equal participation and engagement during
                        virtual doctor sessions.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">5. Community Sensitivities: </span> Addressing health issues,
                        particularly those related to reproductive health, required careful consideration of cultural
                        sensitivities. Balancing the need for open discussion.

                    </p>





                </div>


                <h2 class="md:text-2xl font-bold sm:text-3xl py-4">
                    STORIES OF IMPACT
                </h2>


                <div class="space-y-5  leading-relaxed">
                    <p class="text-justify">
                        Amidst the challenges and lessons learned from the “Intensive Care For Female Health Camps,” the
                        initiative has generated profound stories of impact that illuminate the positive transformations
                        within the community. These anecdotes reflect the tangible and intangible changes experienced by
                        individuals, showcasing the meaningful outcomes of the health camps.
                    </p>


                    <p class="text-justify">
                        <span class="font-bold text-lg">1. Mrs Anita Jagwan (Head Teacher – Government Girls High School,
                            Ukhimath) – </span> Our school community is immensely grateful for the efforts put forth by
                        Pyare Foundation and the dedicated team involved in orchestrating this impactful health initiative.
                        The commitment and enthusiasm displayed during the health camp left an indelible mark on both the
                        students and staff.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">2. Dr PS Jagwan – Principal of Shri Gangadhar Maithani Rajkiye
                            Mahavidyalaya Guptakashi Vidyapeeth, Rudraprayag, Uttarakhand </span> As the Principal of Shri
                        Gangadhar Maithani Rajkiye Mahavidyalaya Guptakashi Vidyapeeth, I am deeply appreciative of the
                        positive impact that this health camp has had on our college community. The collaboration between
                        Pyare Foundation and GAIL (India) Limited has contributed significantly to the health and well-being
                        of our female students and staff.

                    <p class="text-justify">
                        <span class="font-bold text-lg">3. Mr. DS Thapliyal, Principal of Atal Utkrisht Government Inter
                            College, Ukhimath – </span> Despite efforts to promote
                        inclusivity, language and communication barriers were encountered. Tailoring health messages to
                        diverse linguistic preferences and ensuring effective communication with non-native speakers
                        presented ongoing challenges.
                    </p>

                    <p class="text-justify">
                        Dr. Rajesh Mishra’s expert session added an invaluable dimension to the health camp, providing our
                        students with expert insights and fostering a culture of health awareness. The engaging nature of
                        the session facilitated meaningful discussions and empowered our students with knowledge that
                        extends beyond the immediate health interventions.
                    </p>

                    <p class="text-justify">
                        <span class="font-bold text-lg">4. Swami Mahishanand, Manager, Administration of Swami Pravananand
                            Vidya Mandir, Ukhimath, Rudraprayag, Uttarakhand – </span>
                        The As the Manager of Administration at Swami Pranavanand Vidya Mandir, I extend my heartfelt
                        appreciation for the positive impact that this health camp has had on our school community. The
                        collaboration between Pyare Foundation and GAIL (India) Limited has not only addressed immediate
                        health needs but has also contributed significantly to the awareness and empowerment of our female
                        students.
                    </p>



                    <p class="text-justify">
                        The health camp, with its focus on individual health assessments, has provided valuable insights
                        that go beyond the immediate interventions. It lays the foundation for a sustained and holistic
                        approach to health and well-being.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">5. Mr Vikram Singh (Pradhan of village Gadgu, Ukhimath) – </span>
                        As the Pradhan of Village Gadgu, I am deeply grateful for the positive impact of the health camp on
                        our community. The collaboration between Pyare Foundation and GAIL (India) Limited has been
                        instrumental in addressing our health needs and promoting overall well-being.
                    </p>

                    <p class="text-justify">
                        <span class="font-bold text-lg">6. Dr. HB Bainjwal, Principal of Shri Uttarakhand Ayurved
                            Bhaishajya Kalp (Pharmacist) Prashikshan Vidyalay, Rudraprayag – </span>
                        The health camp has not only provided essential health services but has also raised awareness about
                        health issues and encouraged healthy practices among our students. The dedication and commitment of
                        the Pyare Foundation’s team has been exemplary, and we are grateful for their efforts in improving
                        the health of our community.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">7. Mr Gajpal Singh, Pradhan of village Kalimath, Ukhimath – </span>
                        The health camp has not only provided essential health services but has also strengthened the sense
                        of community and solidarity among our residents. The care and support extended by the organizers
                        have been commendable, and we are committed to continuing the health practices promoted during the
                        camp.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">8. Mrs. Sushma Pradhan of vilage Rayari, Jhakholi – </span>
                        In conclusion, I commend the Pyare Foundation team for their dedication, compassion, and commitment
                        to improving the health and well-being of our community. We look forward to continued collaborations
                        that benefit our village and its residents.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">9. Mrs Sarla Devi (Pradhan of Village Arkhund, Jakholi,
                            Rudraprayag) –</span>
                        As the Pradhan of Village Arkhund, I am deeply grateful for the positive impact of the health camp
                        on our community. The collaboration between Pyare Foundation and GAIL (India) Limited has been
                        instrumental in addressing our health needs and promoting overall well-being.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">10. Dr. Dalip Singh, Principal of Government Degree College,
                            Agastyamuni, Rudraprayag – </span>
                        The health camp has not only provided essential health services but has also raised awareness about
                        health issues and encouraged healthy practices among our students. The dedication and commitment of
                        the Pyare Foundation’s team has been exemplary, and we are grateful for their efforts in improving
                        the health of our community.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">11. Mrs Jyoti Negi, Pradhan of Village Kandara, Agastyamuni,
                            Rudraprayag – </span>
                        The health camp has not only provided essential health services but has also strengthened the sense
                        of community and solidarity among our residents. The care and support extended by the organizers
                        have been commendable, and we are committed to continuing the health practices promoted during the
                        camp.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">12. Mrs. Kunti Devi Pradhan of Village Ransi, Ukhimath, Rudraprayag
                            – </span>
                        In conclusion, I commend the Pyare Foundation team for their dedication, compassion, and commitment
                        to improving the health and well-being of our community. We look forward to continued collaborations
                        that benefit our village and its residents.
                    </p>
                    <p class="text-justify">

                        These stories of impact exemplify the transformative potential of community-centered health
                        interventions. Beyond the immediate health outcomes, they underscore the lasting changes in
                        awareness, behavior, and community dynamics fostered by the “Intensive Care For Female Health
                        Camps.”
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">13. Mrs Sumati Devi (Mahila Mangal Dal Adhyaksh )– </span>
                        In my role as the Pradhan of Village Dankot, I express
                        profound gratitude for the positive impact of the health camp on our community. The collaboration
                        between Pyare Foundation and GAIL (India) Limited has played a crucial role in addressing our health
                        needs and promoting overall well-being.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">14. Mr. Vijendra Singh Panwar, Pradhan of Village Uchhola, Jakholi,
                            Rudraprayag – </span>
                        In my capacity as the Pradhan of Village Ucchola, I extend heartfelt gratitude for the significant
                        impact of the health camp on our community. The collaboration between Pyare Foundation and GAIL
                        (India) Limited has been pivotal in addressing our health needs and promoting overall well-being.
                    </p>
                    <p class="text-justify">
                        <span class="font-bold text-lg">15. Mr. Vijay Chamola, Principal of Gauri Memorial Public Inter
                            College, Agastyamuni, Rudraprayag – </span>
                        The health camp has not only delivered crucial health services but has also heightened awareness
                        about health issues and promoted healthy practices among our students. The Pyare Foundation’s team
                        has shown exceptional dedication and commitment, and we deeply appreciate their endeavors to enhance
                        the health of our community.
                    </p>

                    <p class="text-justify">
                        <span class="font-bold text-lg">16. Mrs Arti Shaiv – Mahila Mangal Dal Adhyaksh Village Dangwadi,
                            Ukhimath, Rudraprayag –</span>
                        I applaud the Pyare Foundation team for their dedication, compassion, and steadfast commitment to
                        enhancing the health and well-being of our community. We eagerly anticipate further collaborations
                        that will positively impact our village and its residents.
                    </p>








                </div>


                <h2 class="md:text-2xl font-bold sm:text-3xl py-4">
                    MEDIA AND PROMOTION
                </h2>


                <div class="space-y-5  leading-relaxed">
                    <p class="text-justify">
                        Pyare Foundation recognizes the importance of effective media and promotion strategies to maximize
                        the reach and impact of our health camps. Our approach involves utilizing various channels to create
                        awareness and disseminate information about the upcoming events. The promotion plan for the January
                        health camps includes the following key components:
                    </p>


                    <p class="text-justify">
                        <span class="font-bold text-lg">1. Social Media Engagement: </span> We will leverage our active
                        presence on popular social media platforms, including but not limited to Facebook, LinkedIn and
                        Instagram, to promote the health camps. Regular posts, updates, and engaging content are being
                        shared to create awareness and encourage community participation.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">2. Website Content: </span> Detailed information about the health
                        camps, including dates, locations, and services offered, will be prominently featured on our
                        organization’s official website. The website will serve as a central hub for individuals seeking
                        information about the upcoming events.
                    </p>

                    <p class="text-justify">
                        <span class="font-bold text-lg">3. Newspaper Publications:</span>
                        Our health camps are extensively covered in leading newspapers to reach a wider audience. We have
                        established collaborations with prominent publications such as Amar Ujala, Dainik Bhaskar, Jan
                        Lahar, Journey of Success, Abitfar – News without noise and Akhand Bharat TV. Press releases and
                        articles will be strategically submitted to these newspapers to ensure comprehensive coverage.
                    </p>



                    <p class="text-justify">
                        <span class="font-bold text-lg">4. Posters and Flyers: </span> Physical promotional materials, such
                        as posters and flyers, were strategically placed in key locations within the targeted villages and
                        surrounding areas. This traditional approach complements our digital efforts and ensures a
                        multi-channel promotional strategy.
                    </p>
                    <p class="text-justify">
                        Through this comprehensive media and promotion plan, Pyare Foundation aims to reach diverse segments
                        of the community and maximize participation in the health camps. We believe that a well-rounded
                        promotional strategy is essential for creating awareness, fostering community engagement, and
                        ultimately achieving the desired impact on the health and well-being of the residents of
                        Rudraprayag.


                    </p>

                </div>

            </div>

            <!-- Right Donate Form -->

            <aside class="fhc-sidebar">
                <div class="fhc-donate-box" id="donationForm">
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

                        <input type="hidden" name="campaign" id="campaign" value="Female health and campaign" />

                        <input type="text" placeholder="LAST NAME"
                            class="w-full border px-4 py-2 rounded text-sm" name="lastName" />

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
                        class="fhc-support-card">
                        <div class="absolute -top-12 -left-10 w-40 h-40 bg-orange-400 rounded-full opacity-30 z-0">
                        </div>
                        <div class="absolute top-8 left-8 w-64 h-64 bg-orange-300 rounded-full opacity-20 z-0"></div>
                        <div class="relative z-10 flex flex-col items-center">
                            <p class="text-sm text-gray-800 font-medium leading-relaxed mb-4 max-w-xs text-justify">
                                Volunteers are the heart of our foundation. Sign up today and
                                be a part of something bigger.
                            </p>
                            <a class="fhc-support-link" href="{{ route('volunteer-member') }}">BECOME VOLUNTEER <span aria-hidden="true">↗</span></a>
                        </div>
                    </div>

                    <!-- Annual Member Box -->
                    <div
                        class="fhc-support-card">
                        <div class="absolute -top-12 -left-10 w-40 h-40 bg-orange-400 rounded-full opacity-30 z-0">
                        </div>
                        <div class="absolute top-8 left-8 w-64 h-64 bg-orange-300 rounded-full opacity-20 z-0"></div>
                        <div class="relative z-10 flex flex-col items-center">
                            <p class="text-sm text-gray-800 font-medium leading-relaxed mb-4 max-w-xs text-justify">
                                Join a community committed to long-term change. Your annual
                                membership fuels year-round impact — supporting education,
                                environment, and empowerment.
                            </p>
                            <a class="fhc-support-link" href="{{ route('annual-member') }}">BECOME ANNUAL MEMBER <span aria-hidden="true">↗</span></a>
                        </div>
                    </div>
                </div>
            </aside>

        </div>
    </section>
</main>
<script>
document.addEventListener('DOMContentLoaded', function () {
  var gallery = document.querySelector('.fhc-gallery-swiper');
  if (typeof Swiper === 'undefined' || !gallery || gallery.swiper) return;
  var parent = gallery.closest('.relative.w-full.py-6') || gallery.parentElement;
  new Swiper(gallery, {
    slidesPerView: 1.14, spaceBetween: 13, grabCursor: true, speed: 500,
    watchOverflow: true,
    breakpoints: {
      640: { slidesPerView: 2, spaceBetween: 15 },
      1024: { slidesPerView: 2.2, spaceBetween: 17 }
    },
    navigation: {
      prevEl: parent.querySelector('.swiper-button-prev-custom'),
      nextEl: parent.querySelector('.swiper-button-next-custom')
    }
  });
});
</script>
@endsection
