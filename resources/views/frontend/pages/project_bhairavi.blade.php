@section('title')
    Project Bhairavi
@endsection


@extends('frontend.layouts.master')

@section('page_css')
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
.pf-bhairavi-page{--pfb-navy:#16163f;--pfb-orange:#f46226;--pfb-cream:#fffaf5;font-family:'DM Sans',Arial,sans-serif;color:#22243d}
.pf-bhairavi-page *{box-sizing:border-box}
.pf-bhairavi-page :is(h1,h2,h3,h4){font-family:'Manrope',sans-serif;letter-spacing:-.035em}
.pf-bhairavi-page .pfb-shell{width:100%;max-width:1440px;margin:0 auto;padding-left:clamp(20px,3vw,52px);padding-right:clamp(20px,3vw,52px)}
.pf-bhairavi-page .pfb-hero{position:relative;overflow:hidden;color:white;background:linear-gradient(105deg,rgba(14,15,42,.93) 0%,rgba(18,17,48,.75) 52%,rgba(21,18,46,.38) 100%),url("{{ asset('uploads/images/bhairavi/phage1/phage1.jpg') }}") center 43%/cover no-repeat}
.pf-bhairavi-page .pfb-hero .pfb-shell{position:relative;min-height:420px;padding-top:55px;padding-bottom:70px;display:flex;flex-direction:column;justify-content:center;align-items:flex-start}
.pf-bhairavi-page .pfb-breadcrumb{display:flex;align-items:center;flex-wrap:wrap;gap:11px;font-size:12px;color:#f1e7e5;margin:0 0 34px}
.pf-bhairavi-page .pfb-breadcrumb a{color:#fff;text-decoration:none;font-weight:700}
.pf-bhairavi-page .pfb-breadcrumb a:hover{color:#ffb58f}
.pf-bhairavi-page .pfb-breadcrumb span:last-child{color:#ffb58f}
.pf-bhairavi-page .pfb-eyebrow{font-size:11px;font-weight:800;letter-spacing:.15em;color:#ffb186;display:inline-flex;align-items:center;gap:9px}
.pf-bhairavi-page .pfb-eyebrow:before{content:"";display:block;width:8px;height:8px;background:#f46226;border-radius:50%}
.pf-bhairavi-page .pfb-hero h1{font-size:clamp(39px,5vw,66px)!important;color:#fff!important;font-weight:800;line-height:1.15!important;margin:13px 0 15px}
.pf-bhairavi-page .pfb-hero h1 span{color:#ff8756}
.pf-bhairavi-page .pfb-hero-lead{font-size:15px;line-height:1.75;color:#f6f0ef;max-width:630px;margin:0 0 23px}
.pf-bhairavi-page .pfb-hero-cta{display:inline-flex;gap:17px;align-items:center;background:#f46226;color:#fff;text-decoration:none;border-radius:5px;padding:14px 22px;font-size:12px;font-weight:800}
.pf-bhairavi-page .pfb-hero-cta:hover{background:#dd4e18;color:#fff}
.pf-bhairavi-page .pfb-main-section{background:#fffaf5;padding:75px 0 95px}
.pf-bhairavi-page .pfb-layout{display:grid;grid-template-columns:minmax(0,1.72fr) minmax(325px,.83fr);gap:clamp(25px,3vw,48px);align-items:start}
.pf-bhairavi-page .pfb-content{min-width:0;overflow:visible}
.pf-bhairavi-page .pfb-summary-wrap{margin-bottom:46px}
.pf-bhairavi-page .pfb-summary-card{background:#fff;border:1px solid #ebe3df;border-radius:10px;overflow:hidden;box-shadow:0 8px 25px rgba(22,22,63,.055)}
.pf-bhairavi-page .pfb-summary-top{display:flex;flex-wrap:wrap;justify-content:space-between;align-items:center;gap:22px;padding:26px}
.pf-bhairavi-page .pfb-summary-top>div:first-child{display:flex;align-items:center;gap:23px;min-width:0}
.pf-bhairavi-page .pfb-summary-top .relative.w-28{flex:none;width:95px;height:95px}
.pf-bhairavi-page .pfb-summary-top .text-xl.font-semibold{font-size:12px!important;text-transform:uppercase;letter-spacing:.11em;color:#626777;font-weight:800}
.pf-bhairavi-page .pfb-summary-top .text-orange-600{font-size:22px!important;color:#f46226!important;line-height:1.35}
.pf-bhairavi-page .pfb-summary-top .text-orange-600 span{font-size:13px!important;display:block;font-weight:500}
.pf-bhairavi-page .pfb-summary-top .bg-yellow-400{background:#fff2e9!important;color:#c74c1f!important;font-size:11px!important;border-radius:4px;margin-top:12px;padding:7px 11px}
.pf-bhairavi-page .pfb-summary-top>div:last-child p{font-size:12px!important;color:#626777;text-align:right}
.pf-bhairavi-page .pfb-summary-bottom{display:flex;justify-content:space-between;align-items:center;gap:20px;background:#16163f;color:#fff;padding:21px 26px}
.pf-bhairavi-page .pfb-summary-bottom p{font-size:13px!important;font-weight:700;line-height:1.6;max-width:500px;margin:0;text-align:left}
.pf-bhairavi-page .pfb-summary-donate{white-space:nowrap;display:inline-flex;align-items:center;gap:15px;border-radius:5px;background:#f46226;color:#fff;font-weight:800;font-size:11px;padding:13px 17px;text-decoration:none}
.pf-bhairavi-page .pfb-summary-donate:hover{background:#d84c16;color:#fff}
.pf-bhairavi-page .pfb-timeline{min-width:0}
.pf-bhairavi-page .pfb-timeline>p:first-child{font-family:'Manrope',sans-serif;font-style:normal!important;font-size:clamp(25px,2.3vw,35px)!important;line-height:1.3;font-weight:800;color:#16163f;margin:0 0 21px}
.pf-bhairavi-page .pfb-timeline>p:not(:first-child){font-size:14px;line-height:1.85;color:#606775;margin:0 0 15px;text-align:left}
.pf-bhairavi-page .pfb-timeline>p.font-bold{font-size:17px!important;font-family:'Manrope',sans-serif;font-weight:800;color:#16163f;border-left:3px solid #f46226;padding:7px 0 7px 15px;margin:36px 0 13px!important;line-height:1.5}
.pf-bhairavi-page .pfb-timeline>ul{font-size:13px;color:#5c6370;line-height:1.85;padding-left:19px;margin:0 0 22px}
.pf-bhairavi-page .pfb-timeline>ul li{padding:3px 0}
.pf-bhairavi-page .pfb-timeline>div.relative.w-full.py-6{padding:10px 0 20px!important;overflow:hidden}
.pf-bhairavi-page .pfb-timeline .swiper{overflow:hidden;border-radius:8px}
.pf-bhairavi-page .pfb-timeline .swiper-slide{height:auto;min-width:0}
.pf-bhairavi-page .pfb-timeline .swiper-slide a{display:block}
.pf-bhairavi-page .pfb-timeline .swiper-slide img{width:100%;height:270px!important;object-fit:cover;border-radius:6px!important;display:block}
.pf-bhairavi-page .pfb-timeline [class*="swiper-button-prev-custom"],.pf-bhairavi-page .pfb-timeline [class*="swiper-button-next-custom"]{width:36px!important;height:36px!important;background:#f46226!important;border-radius:50%!important;display:flex;justify-content:center;align-items:center}
.pf-bhairavi-page .pfb-sidebar{min-width:0;position:sticky;top:22px;align-self:start}
.pf-bhairavi-page .pfb-donate-box{background:#fff;border:1px solid #eee4df;box-shadow:0 8px 27px rgba(22,22,63,.06);border-radius:10px;padding:25px;scroll-margin-top:26px}
.pf-bhairavi-page .pfb-donate-box>h3{color:#16163f!important;font-size:22px!important;font-weight:800!important;line-height:1.25;margin-bottom:18px!important}
.pf-bhairavi-page .pfb-donate-box>h4{font-size:12px!important;font-weight:800!important;color:#16163f;margin:18px 0 12px!important}
.pf-bhairavi-page .pfb-donate-box button.donation-btn,.pf-bhairavi-page .pfb-donate-box button.amount-btn{border-radius:5px!important;min-height:43px;border:1px solid #eee2dc;color:#16163f!important;font-size:12px!important;font-weight:800;padding:11px 13px!important;margin-bottom:9px!important;transition:background .2s,border-color .2s}
.pf-bhairavi-page .pfb-donate-box button.donation-btn:hover,.pf-bhairavi-page .pfb-donate-box button.amount-btn:hover{border-color:#f46226}
.pf-bhairavi-page .pfb-donate-box button.bg-\[\#FEB201\],.pf-bhairavi-page .pfb-donate-box button.bg-yellow-400{background:#fff0e7!important;border-color:#f46226!important;color:#d94f1a!important}
.pf-bhairavi-page .pfb-donate-box #payment-form{display:flex;flex-direction:column;gap:10px}
.pf-bhairavi-page .pfb-donate-box #payment-form input:not([type="hidden"]){height:45px;width:100%;border:1px solid #e5dedb;border-radius:5px;padding:11px 14px;font-size:12px;outline:none;color:#16163f;background:#fff;margin:0!important}
.pf-bhairavi-page .pfb-donate-box #payment-form input:focus{border-color:#f46226}
.pf-bhairavi-page .pfb-donate-box #pay-button{background:#f46226!important;border:0;border-radius:5px;color:#fff;font-weight:800;min-height:49px;margin-top:6px}
.pf-bhairavi-page .pfb-donate-box #pay-button:hover{background:#dc4c18!important}
.pf-bhairavi-page .pfb-join-card{background:#fff9f4;border:1px solid #f2dfd3;border-radius:8px;padding:21px 19px;margin:20px 0 0!important;min-height:0;display:flex;flex-direction:column;align-items:flex-start;justify-content:center}
.pf-bhairavi-page .pfb-join-card .absolute{display:none!important}
.pf-bhairavi-page .pfb-join-card>div.relative{align-items:flex-start;text-align:left}
.pf-bhairavi-page .pfb-join-card p{font-size:12px!important;line-height:1.75;color:#646573;text-align:left!important;margin-bottom:14px!important}
.pf-bhairavi-page .pfb-join-link{display:inline-flex;align-items:center;gap:9px;background:#16163f;color:#fff!important;border-radius:5px;padding:11px 13px;font-size:11px;font-weight:800;text-decoration:none}
.pf-bhairavi-page .pfb-join-link:hover{background:#292958}
@media(max-width:1000px){.pf-bhairavi-page .pfb-layout{grid-template-columns:minmax(0,1fr) minmax(300px,.8fr);gap:24px}.pf-bhairavi-page .pfb-donate-box{padding:21px}.pf-bhairavi-page .pfb-summary-top{padding:20px}}
@media(max-width:767px){.pf-bhairavi-page .pfb-hero .pfb-shell{min-height:370px;padding:43px 18px 56px}.pf-bhairavi-page .pfb-breadcrumb{margin-bottom:24px}.pf-bhairavi-page .pfb-hero h1{font-size:39px!important}.pf-bhairavi-page .pfb-hero-lead{font-size:13px}.pf-bhairavi-page .pfb-main-section{padding:48px 0 70px}.pf-bhairavi-page .pfb-shell{padding-left:18px;padding-right:18px}.pf-bhairavi-page .pfb-layout{grid-template-columns:1fr;gap:35px}.pf-bhairavi-page .pfb-sidebar{position:static}.pf-bhairavi-page .pfb-summary-top>div:first-child{flex-wrap:wrap}.pf-bhairavi-page .pfb-summary-bottom{flex-direction:column;align-items:flex-start;padding:19px}.pf-bhairavi-page .pfb-timeline>p:first-child{font-size:25px!important}.pf-bhairavi-page .pfb-timeline .swiper-slide img{height:245px!important}}
@media(prefers-reduced-motion:reduce){.pf-bhairavi-page *{transition:none!important}}
</style>
@endsection

@section('content')
    <main class="pf-bhairavi-page">
    <section class="pfb-hero" aria-labelledby="pfb-title">
      <div class="pfb-shell">
        <nav class="pfb-breadcrumb" aria-label="Breadcrumb">
          <a href="{{ route('home') }}">Home</a><span aria-hidden="true">/</span>
          <a href="{{ route('our-project') }}">Projects</a><span aria-hidden="true">/</span>
          <span>Project Bhairavi</span>
        </nav>
        <span class="pfb-eyebrow">COMMUNITY HEALTH &amp; WOMEN'S WELLBEING</span>
        <h1 id="pfb-title">PROJECT <span>BHAIRAVI</span></h1>
        <p class="pfb-hero-lead">Support Project Bhairavi to Empower Women With Menstrual Health &amp; Dignity</p>
        <a class="pfb-hero-cta" href="#donationForm">SUPPORT THIS PROJECT <span aria-hidden="true">↗</span></a>
      </div>
    </section>

    <!-- Main Content & Donate now Form -->
    <section class="pfb-main-section">
        <div class="pfb-shell pfb-layout">

            <!-- Left Content (scrollable text, images, sliders) -->
            <div class="pfb-content">


                <div class="pfb-summary-wrap">

                    <div class="pfb-summary-card">

                        <!--Top Section -->
                        <div class="pfb-summary-top">

                            <!--Circular Progress -->
                            <div class="flex items-center gap-4">
                                <div class="relative w-28 h-28">
                                    <svg class="w-full h-full transform -rotate-90" viewBox="0 0 100 100">
                                        <circle cx="50" cy="50" r="45" stroke="#ddd" stroke-width="10"
                                            fill="none" />
                                        <circle cx="50" cy="50" r="45" stroke="#f46226" stroke-width="10"
                                            fill="none" stroke-dasharray="282.6" stroke-dashoffset="{{ 282.6 * (1 - min(100, max(0, $percentage)) / 100) }}"
                                            stroke-linecap="round" />
                                    </svg>
                                    <span
                                        class="absolute inset-0 flex items-center justify-center text-xl md:text-2xl font-bold">{{ $percentage }}%</span>
                                </div>

                                <!--Raised Info -->
                                <div>
                                    <p class="text-xl font-semibold">Raised</p>
                                    <p class="text-orange-600 font-bold text-lg  md:text-2xl">
                                        Rs.{{ $campaign->rises_amount }} <span
                                            class="text-gray-600 font-medium text-lg md:text-lg">of
                                            Rs.{{ $campaign->goal_amount }}</span></p>
                                    <span
                                        class="inline-block mt-2 bg-yellow-400 text-black font-semibold px-4 py-1 rounded">521
                                        Supporters</span>
                                </div>
                                <div class="-mt-20 sm:-mt-6 text-orange-500 hover:text-orange-600">
                                    <i
                                        class="fa-regular block md:hidden fa-share-from-square text-2xl hover:text-orange-500 cursor-pointer"></i>
                                </div>

                            </div>

                            <!--End Date + Share Button -->
                            <div class="flex flex-col items-end ">
                                <button type="button" class="text-orange-500 hover:text-orange-600" aria-label="Share Project Bhairavi">

                                    <i
                                        class="fa-regular fa-share-from-square hidden md:inline-block text-2xl hover:text-orange-500 cursor-pointer"></i>


                                </button>
                                <p class="text-gray-800 font-semibold md:mt-10">End Date:
                                    {{ \Carbon\Carbon::parse($campaign->end_date)->format('d-m-Y') }}</p>
                            </div>

                        </div>

                        <!--Bottom Section -->
                        <div
                            class="bg-orange-500 text-white p-6 flex flex-col md:flex-row md:items-center justify-between gap-6">
                            <p class="text-lg font-semibold text-center md:text-left">
                                Support Project Bhairavi to Empower Women With Menstrual Health & Dignity
                            </p>
                            <a href="#donationForm" class="pfb-summary-donate">DONATE NOW <span aria-hidden="true">↗</span></a>
                        </div>

                    </div>

                </div>



                <div class="pfb-timeline">

                    <p class="md:text-2xl font-bold text-2xl italic">
                        Official Progress Summary (2025–2026)
                    </p>
                    <p class="my-2">
                        Phase III of the <strong>Bhairavi Project</strong> represents a decisive shift from strategic
                        planning to
                        full-scale on-ground execution. This phase focused on strengthening women-led leadership, delivering
                        structured
                        health and wellness programs, and deepening community engagement across the selected project
                        location in Delhi.
                    </p>



                    <p class="font-bold text-lg">April 2025 – Concept Development</p>
                    <p class="my-2">The phase commenced with the development of a comprehensive concept for the Delhi
                        initiative. Clear
                        objectives, target communities, and implementation frameworks were defined in alignment with the
                        core mission of
                        the Bhairavi Project.</p>

                    <p class="font-bold text-lg">May 2025 – Strategic Planning</p>
                    <p class="my-2">A detailed strategy plan was completed, outlining program goals, timelines, roles, and
                        execution
                        mechanisms to ensure structured and sustainable impact.</p>


                    <p class="font-bold text-lg">June 2025 – Resource Mapping & Shortlisting</p>
                    <p class="my-2">Resource mapping was undertaken to identify key human resources, local support
                        systems, and
                        suitable project locations. Shortlisted locations were evaluated based on accessibility, need, and
                        community
                        readiness.</p>


                    <p class="font-bold text-lg">July 2025 – Project Location Finalization</p>
                    <p class="my-2">Action steps were initiated as per the approved plan. Preparatory groundwork,
                        stakeholder
                        coordination, and execution readiness were achieved during this period.</p>

                    <p class="font-bold text-lg">August 2025 – Action Plan Initiation</p>
                    <p class="my-2">A detailed strategy plan was completed, outlining program goals, timelines, roles, and
                        execution
                        mechanisms to ensure structured and sustainable impact.</p>

                    <p class="font-bold text-lg">September 2025 – Full Execution</p>
                    <p class="my-2">The Bhairavi Project entered the full execution phase, with active on-ground
                        implementation of
                        planned initiatives focused on women’s physical well-being and empowerment.</p>




                    <p class="font-bold text-lg">October 2025 – Leadership Appointment & Program Implementation:</p>
                    <ul class="list-disc list-inside space-y-2 mx-3 mb-2">
                        <li>Appointment of <strong>two Bhairavi Leaders – Devi and Geeta,</strong> responsible for community
                            coordination and program facilitation</li>
                        <li><strong>Supervisor appointed: </strong><strong>Jagmohan Kashyap</strong>, overseeing
                            implementation and
                            field execution</li>
                        <li>
                            Completion of <strong>three Physical Well-Being Programs</strong>
                        </li>
                        <li>
                            <strong>Program Date: 10<sup class="text-xs relative -top-1">th</sup> October 2025</strong>
                        </li>
                    </ul>



                    <!-- Slider 1 -->
                    <!-- Swiper Section -->

                    <div class="relative w-full py-6">
                        <!-- Swiper Container -->
                        <div class="swiper shambhooSwiper">
                            <div class="swiper-wrapper">
                                <!-- Slide -->
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage1.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage1.jpg') }} alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage2.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage2.jpg') }} alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage3.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage3.jpg') }} alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage4.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage4.jpg') }} alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage5.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage5.jpg') }} alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage6.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage6.jpg') }} alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>



                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage7.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage7.jpg') }} alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage8.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage8.jpg') }} alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage9.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage9.jpg') }} alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage10.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage10.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage11.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage11.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage12.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage12.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage13.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage13.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage14.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage14.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage15.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage15.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage16.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage16.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage17.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage17.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage18.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage18.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage19.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage19.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage20.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage20.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage21.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage21.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage22.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage22.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage23.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage23.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage24.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage24.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage25.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage25.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage26.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage26.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage27.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage27.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage28.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage28.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage29.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage29.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phage30.jpg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phage30.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phase31.jpeg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phase31.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phase32.jpeg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phase32.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phase33.jpeg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phase33.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>



                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phase35.jpeg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phase35.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phase36.jpeg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phase36.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage1/phase37.jpeg') }}"
                                        data-fancybox="Phase1" data-caption="Phase1">
                                        <img src={{ asset('uploads/images/bhairavi/phage1/phase37.jpeg') }}
                                            alt="Training 1"
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
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </div>



                    <p class="md:text-2xl font-bold text-2xl">
                        Survey & Data Collection
                    </p>
                    
                    
                    <!-- Slider 1 -->
                    <!-- Swiper Section -->

                    <div class="relative w-full py-6">
                        <!-- Swiper Container -->
                        <div class="swiper shambhooSwiper4">
                            <div class="swiper-wrapper">
                                <!-- Slide -->
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage2/phage2_1.jpg') }}"
                                        data-fancybox="Phase2" data-caption="Phase2">
                                        <img src={{ asset('uploads/images/bhairavi/phage2/phage2_1.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage2/phage2_2.jpg') }}"
                                        data-fancybox="Phase2" data-caption="Phase2">
                                        <img src={{ asset('uploads/images/bhairavi/phage2/phage2_2.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage2/phage2_3.jpg') }}"
                                        data-fancybox="Phase2" data-caption="Phase2">
                                        <img src={{ asset('uploads/images/bhairavi/phage2/phage2_3.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>



                            </div>
                        </div>

                        <!-- Custom Arrows -->
                        <div class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10">
                            <div
                                class="swiper-button-prev-custom-4 bg-orange-400 hover:bg-orange-500 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>
                            </div>
                        </div>

                        <div class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10">
                            <div
                                class="swiper-button-next-custom-4 bg-orange-400 hover:bg-orange-500 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <p class="font-bold text-lg">November 2025 – Community Engagement & Recognition:</p>
                    <ul class="list-disc list-inside space-y-2 mx-3 mb-2">
                        <li>Launch of a structured <strong>field survey</strong> to assess impact and community feedback
                        </li>
                        <li>Conduct of a <strong>major Bhairavi community program</strong></li>
                        <li>
                            <strong>Bhairavi Samman 2025</strong> awarded to <strong>Snehi</strong> and
                            <strong>Anita</strong> for their
                            significant contributions
                        </li>
                        <li>
                            <strong>Program Date: 11<sup class="text-xs relative -top-1">th</sup> November 2025</strong>
                        </li>
                    </ul>


                    <!-- Slider 1 -->
                    <!-- Swiper Section -->

                    <div class="relative w-full py-6">
                        <!-- Swiper Container -->
                        <div class="swiper shambhooSwiper">
                            <div class="swiper-wrapper">
                                <!-- Slide -->
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_1.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_1.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_2.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_2.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_3.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_3.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_4.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_4.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_5.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_5.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_6.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_6.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>



                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_7.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_7.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_8.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_8.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_9.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_9.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_10.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_10.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_11.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_11.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_12.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_12.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_13.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_13.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_14.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_14.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_15.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_15.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_16.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_16.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>



                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_18.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_18.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_19.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_19.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_20.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_20.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_21.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_21.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_22.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_22.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_23.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_23.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_24.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_24.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_25.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_25.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_26.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_26.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_27.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_27.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_28.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_28.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_29.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_29.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_30.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_30.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_31.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_31.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_32.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_32.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_33.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_33.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_34.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_34.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_35.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_35.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_36.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_36.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_37.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_37.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_38.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_38.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_39.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_39.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_40.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_40.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_41.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_41.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_42.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_42.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_43.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_43.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_44.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_44.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_45.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_45.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_46.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_46.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_47.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_47.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_48.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_48.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_49.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_49.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_50.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_50.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_51.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_51.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_52.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_52.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_53.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_53.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_54.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_54.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_55.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_55.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_56.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_56.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_57.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_57.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_58.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_58.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_59.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_59.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_60.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_60.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_61.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_61.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_62.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_62.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_63.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_63.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_64.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_64.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/phage3_65.jpg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/phage3_65.jpg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>



                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/Phage3_66.jpeg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/Phage3_66.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>




                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/Phage3_67.jpeg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/Phage3_67.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/Phage3_671.jpeg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/Phage3_671.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/Phage3_68.jpeg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/Phage3_68.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/Phage3_69.jpeg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/Phage3_69.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/Phage3_70.jpeg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/Phage3_70.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>



                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/Phage3_71.jpeg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/Phage3_71.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>


                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phage3/Phage3_72.jpeg') }}"
                                        data-fancybox="Phase3" data-caption="Phase3">
                                        <img src={{ asset('uploads/images/bhairavi/phage3/Phage3_72.jpeg') }}
                                            alt="Training 1"
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
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                    

                    <p class="font-bold text-lg">December 2025 – Annual Wellness Activities:</p>
                    <ul class="list-disc list-inside space-y-2 mx-3 mb-2">
                        <li>Continued engagement through annual activities</li>
                        <li>Implementation of the <strong>Yoga B.P. (Blood Pressure) Program,</strong> promoting preventive
                            health and
                            lifestyle awareness</li>
                        <li>
                            <strong>Program Date: 12<sup class="text-xs relative -top-1">th</sup> December 2025</strong>
                        </li>

                    </ul>
                    
                    
                    
                    <!-- Slider 1 -->
                    <!-- Swiper Section -->

                    <div class="relative w-full py-6">
                        <!-- Swiper Container -->
                        <div class="swiper shambhooSwiper3">
                            <div class="swiper-wrapper">
                                <!-- Slide -->
                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phase4/phase4_1.jpeg') }}"
                                        data-fancybox="Phase4" data-caption="Phase4">
                                        <img src={{ asset('uploads/images/bhairavi/phase4/phase4_1.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phase4/phase4_2.jpeg') }}"
                                        data-fancybox="Phase4" data-caption="Phase4">
                                        <img src={{ asset('uploads/images/bhairavi/phase4/phase4_2.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>

                                <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phase4/phase4_3.jpeg') }}"
                                        data-fancybox="Phase4" data-caption="Phase4">
                                        <img src={{ asset('uploads/images/bhairavi/phase4/phase4_3.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                
                                
                                 <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phase4/phase4_4.jpeg') }}"
                                        data-fancybox="Phase4" data-caption="Phase4">
                                        <img src={{ asset('uploads/images/bhairavi/phase4/phase4_4.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                
                                 <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phase4/phase4_5.jpeg') }}"
                                        data-fancybox="Phase4" data-caption="Phase4">
                                        <img src={{ asset('uploads/images/bhairavi/phase4/phase4_5.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                
                                 <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phase4/phase4_6.jpeg') }}"
                                        data-fancybox="Phase4" data-caption="Phase4">
                                        <img src={{ asset('uploads/images/bhairavi/phase4/phase4_6.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                
                                 <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phase4/phase4_7.jpeg') }}"
                                        data-fancybox="Phase4" data-caption="Phase4">
                                        <img src={{ asset('uploads/images/bhairavi/phase4/phase4_7.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                
                                 <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phase4/phase4_8.jpeg') }}"
                                        data-fancybox="Phase4" data-caption="Phase4">
                                        <img src={{ asset('uploads/images/bhairavi/phase4/phase4_8.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>
                                
                                
                                 <div class="swiper-slide">

                                    <a href="{{ asset('uploads/images/bhairavi/phase4/phase4_9.jpeg') }}"
                                        data-fancybox="Phase4" data-caption="Phase4">
                                        <img src={{ asset('uploads/images/bhairavi/phase4/phase4_9.jpeg') }}
                                            alt="Training 1"
                                            class="w-full h-[350px] md:h-[350px] rounded-md object-cover" />
                                    </a>

                                </div>



                            </div>
                        </div>

                        <!-- Custom Arrows -->
                        <div class="absolute left-0 top-1/2 transform -translate-y-1/2 z-10">
                            <div
                                class="swiper-button-prev-custom-3 bg-orange-400 hover:bg-orange-500 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>
                            </div>
                        </div>

                        <div class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10">
                            <div
                                class="swiper-button-next-custom-3 bg-orange-400 hover:bg-orange-500 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <p class="font-bold text-lg">January 2026 – Collective Program:</p>
                    <ul class="list-disc list-inside space-y-2 mx-3 mb-2">
                        <li><strong>Collective Bhairavi Program will be conducted on 1 January 2026,</strong> bringing
                            together
                            community members, leaders, and facilitators to reinforce shared goals and ongoing commitment
                        </li>


                    </ul>

                    <p class="font-bold text-lg">Overall Impact</p>
                    <p class="my-2">Phase III strengthened the Bhairavi Project’s foundation through structured
                        leadership, timely
                        program execution, and consistent community participation. The integration of women leaders,
                        supervised
                        implementation, and health-focused initiatives has laid a strong pathway for future growth and
                        sustained impact.
                    </p>
                </div>


            </div>

            <!-- Right Donate Form -->

            <aside class="pfb-sidebar">
                <div id="donationForm" class="pfb-donate-box">
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

                        <input type="hidden" name="campaign" id="campaign" value="Project Bhairavi" />

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
                        class="pfb-join-card">
                        <div class="absolute -top-12 -left-10 w-40 h-40 bg-orange-400 rounded-full opacity-30 z-0">
                        </div>
                        <div class="absolute top-8 left-8 w-64 h-64 bg-orange-300 rounded-full opacity-20 z-0"></div>
                        <div class="relative z-10 flex flex-col items-center">
                            <p class="text-sm text-gray-800 font-medium leading-relaxed mb-4 max-w-xs text-justify">
                                Volunteers are the heart of our foundation. Sign up today and
                                be a part of something bigger.
                            </p>
                            <a class="pfb-join-link" href="{{ route('volunteer-member') }}">BECOME VOLUNTEER <span aria-hidden="true">↗</span></a>
                        </div>
                    </div>

                    <!-- Annual Member Box -->
                    <div
                        class="pfb-join-card">
                        <div class="absolute -top-12 -left-10 w-40 h-40 bg-orange-400 rounded-full opacity-30 z-0">
                        </div>
                        <div class="absolute top-8 left-8 w-64 h-64 bg-orange-300 rounded-full opacity-20 z-0"></div>
                        <div class="relative z-10 flex flex-col items-center">
                            <p class="text-sm text-gray-800 font-medium leading-relaxed mb-4 max-w-xs text-justify">
                                Join a community committed to long-term change. Your annual
                                membership fuels year-round impact — supporting education,
                                environment, and empowerment.
                            </p>
                            <a class="pfb-join-link" href="{{ route('annual-member') }}">BECOME ANNUAL MEMBER <span aria-hidden="true">↗</span></a>
                        </div>
                    </div>
                </div>
            </aside>

        </div>
    </section>
    </main>

@endsection
