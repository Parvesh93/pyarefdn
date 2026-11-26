@extends('frontend.layouts.master')
@section('title')
Pyare Foundation Pathology Lab
@endsection
@section('page_css')
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
.pf-pathology-page{--navy:#16163f;--orange:#f46226;font-family:'DM Sans',Arial,sans-serif;color:#22243a}
.pf-pathology-page *{box-sizing:border-box}
.pf-pathology-page :is(h1,h2,h3,h4){font-family:'Manrope',sans-serif;letter-spacing:-.035em}
.pf-pathology-page .pl-shell{width:100%;max-width:1440px;margin:auto;padding-left:clamp(20px,3vw,52px);padding-right:clamp(20px,3vw,52px)}
.pf-pathology-page .pl-eyebrow{display:inline-flex;align-items:center;gap:9px;font-size:11px;font-weight:800;letter-spacing:.14em;color:var(--orange)}
.pf-pathology-page .pl-eyebrow:before{content:"";width:8px;height:8px;background:var(--orange);border-radius:50%}
.pf-pathology-page .pl-hero{color:#fff;background:linear-gradient(100deg,rgba(15,17,47,.96),rgba(15,17,47,.81) 56%,rgba(15,17,47,.43)),url("{{ asset('uploads/images/pathology/pathology-1.jpeg') }}") center 43%/cover no-repeat}
.pf-pathology-page .pl-hero-inner{padding-top:53px;padding-bottom:75px;min-height:400px;display:flex;flex-direction:column;align-items:flex-start;justify-content:center}
.pf-pathology-page .pl-breadcrumb{display:flex;gap:10px;flex-wrap:wrap;color:#f0e9e9;font-size:12px;margin:0 0 34px}
.pf-pathology-page .pl-breadcrumb a{color:#fff;text-decoration:none;font-weight:700}
.pf-pathology-page .pl-hero .pl-eyebrow{color:#ffb78e}
.pf-pathology-page .pl-hero h1{font-size:clamp(36px,4.4vw,62px)!important;line-height:1.13;font-weight:800;color:white;margin:15px 0}
.pf-pathology-page .pl-hero h1 span{color:#ff895b}
.pf-pathology-page .pl-hero p{font-size:15px;color:#f1ecf0;line-height:1.85;max-width:670px;margin:0 0 21px}
.pf-pathology-page .pl-hero a.pl-button{background:var(--orange);color:#fff;text-decoration:none;padding:13px 20px;font-weight:800;font-size:12px;border-radius:5px}
.pf-pathology-page .pl-main{background:#fffaf6;padding:73px 0 95px}
.pf-pathology-page .pl-layout{display:grid;grid-template-columns:minmax(0,1.72fr) minmax(320px,.82fr);gap:clamp(25px,3vw,46px);align-items:start}
.pf-pathology-page .pl-content{min-width:0}
.pf-pathology-page .pl-intro h2{font-size:clamp(26px,2.9vw,38px);font-weight:800;color:#16163f;line-height:1.2;margin:13px 0 19px}
.pf-pathology-page .pl-intro p,.pf-pathology-page .pl-block>p,.pf-pathology-page .pl-note p{font-size:14px;color:#626975;line-height:1.9;text-align:left;margin:0 0 14px}
.pf-pathology-page .pl-gallery{margin:0 0 40px}
.pf-pathology-page .pl-gallery-heading{display:flex;justify-content:space-between;align-items:center;gap:15px;margin-bottom:16px}
.pf-pathology-page .pl-gallery-heading h3{color:#16163f;font-weight:800;font-size:18px;margin:0}
.pf-pathology-page .pl-photo-grid{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:13px}
.pf-pathology-page .pl-photo-grid a{display:block;overflow:hidden;border-radius:6px;aspect-ratio:4/3;background:transparent}
.pf-pathology-page .pl-photo-grid img{display:block;width:100%;height:100%;object-fit:cover;transition:transform .3s}
.pf-pathology-page .pl-photo-grid a:hover img{transform:scale(1.04)}
.pf-pathology-page .pl-note{margin:27px 0;padding:22px 25px;border-left:3px solid var(--orange);background:#fff;border-radius:0 6px 6px 0}
.pf-pathology-page .pl-note h3{font-size:18px;font-weight:800;color:#16163f;margin:0 0 9px}
.pf-pathology-page .pl-note.mission{background:#fff1e7}
.pf-pathology-page .pl-block{margin:45px 0 0}
.pf-pathology-page .pl-block h2{font-size:clamp(22px,2.3vw,30px);line-height:1.3;color:#16163f;font-weight:800;margin:0 0 20px}
.pf-pathology-page .pl-tests{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:12px}
.pf-pathology-page .pl-test{display:flex;align-items:center;gap:13px;padding:16px 18px;background:#fff;border:1px solid #ece3df;border-radius:6px;font-size:13px;color:#3e4554;font-weight:700;min-height:64px}
.pf-pathology-page .pl-test svg{width:20px;height:20px;stroke:#f46226;flex:none}
.pf-pathology-page .pl-checkups{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:13px}
.pf-pathology-page .pl-checkup{display:flex;flex-direction:column;justify-content:center;align-items:center;gap:13px;min-height:138px;background:#16163f;color:#fff;text-align:center;padding:20px 14px;border-radius:6px}
.pf-pathology-page .pl-checkup i{font-size:27px;color:#ff925f}
.pf-pathology-page .pl-checkup strong{font-size:13px;font-weight:800}
.pf-pathology-page .pl-benefits{list-style:none;padding:0;margin:0;display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:13px}
.pf-pathology-page .pl-benefits li{position:relative;background:#fff;border:1px solid #ede4df;padding:16px 16px 16px 37px;border-radius:6px;font-size:13px;line-height:1.65;color:#535e69}
.pf-pathology-page .pl-benefits li:before{content:"✓";position:absolute;left:16px;top:15px;font-weight:800;color:#f46226}
.pf-pathology-page .pl-location{background:#fff;border:1px solid #e9dfd9;border-radius:7px;padding:25px}
.pf-pathology-page .pl-location p{font-size:13px;line-height:1.85;color:#5d6771;margin:8px 0}
.pf-pathology-page .pl-location p strong{color:#16163f}
.pf-pathology-page .pl-visit{padding:28px 29px;background:#16163f;color:#fff;border-radius:7px}
.pf-pathology-page .pl-visit h2{color:#fff;font-size:22px;margin:0 0 10px}
.pf-pathology-page .pl-visit p{font-size:13px;line-height:1.8;color:#e9e7ee;margin-bottom:20px}
.pf-pathology-page .pl-visit a{display:inline-flex;background:#f46226;padding:12px 18px;border-radius:5px;color:#fff;font-size:12px;font-weight:800;text-decoration:none}
.pf-pathology-page .pl-sidebar{position:sticky;top:22px;min-width:0}
.pf-pathology-page .pl-donate{padding:26px;background:#fff;border:1px solid #ebe2de;box-shadow:0 8px 27px #16163f0c;border-radius:9px}
.pf-pathology-page .pl-donate h3{font-size:23px;color:#16163f;font-weight:800;margin:0 0 11px}
.pf-pathology-page .pl-donate>p{font-size:12px;line-height:1.8;color:#68707c;margin:0 0 21px}
.pf-pathology-page .pl-give{display:grid;grid-template-columns:1fr 1fr;gap:8px;margin-bottom:19px}
.pf-pathology-page .pl-donate .donation-btn{width:100%;border-radius:5px;border:1px solid #eadfd9;background:#f7f5f4;font-size:11px;font-weight:800;padding:12px 8px;color:#16163f}
.pf-pathology-page .pl-donate h4{font-size:12px;color:#16163f;font-weight:800;margin:0 0 12px}
.pf-pathology-page .pl-amounts{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:8px;margin-bottom:18px}
.pf-pathology-page .pl-donate .amount-btn{width:100%;padding:12px 8px;background:#f7f5f4;border:1px solid #eee4dd;border-radius:5px;color:#16163f;font-size:12px;font-weight:800}
.pf-pathology-page .pl-donate .amount-btn.bg-\[\#FEB201\],.pf-pathology-page .pl-donate .amount-btn.bg-yellow-400{background:#fff0e7!important;border-color:#f46226!important;color:#d34c1a!important}
.pf-pathology-page .pl-donate .donation-btn.bg-black{background:#16163f!important;color:#fff!important}
.pf-pathology-page #payment-form{display:grid;gap:10px}
.pf-pathology-page #payment-form input:not([type=hidden]){width:100%;height:45px;padding:10px 13px;border:1px solid #e6ddda;border-radius:5px;font-size:12px;background:#fff;color:#16163f;outline:none}
.pf-pathology-page #payment-form input:focus{border-color:#f46226}
.pf-pathology-page #pay-button{background:#f46226;border:0;color:#fff;padding:14px 16px;min-height:48px;font-size:12px;font-weight:800;border-radius:5px}
.pf-pathology-page .pl-volunteer{margin-top:20px;background:#fff9f4;border:1px solid #f0dfd4;padding:20px;border-radius:7px}
.pf-pathology-page .pl-volunteer p{font-size:12px;line-height:1.8;color:#666b75;margin:0 0 14px}
.pf-pathology-page .pl-volunteer a{display:inline-block;color:white;text-decoration:none;padding:11px 13px;background:#16163f;border-radius:5px;font-size:11px;font-weight:800}
@media(max-width:1100px){.pf-pathology-page .pl-layout{grid-template-columns:minmax(0,1fr) minmax(290px,.8fr);gap:24px}.pf-pathology-page .pl-photo-grid{grid-template-columns:repeat(2,minmax(0,1fr))}}
@media(max-width:767px){.pf-pathology-page .pl-hero-inner{min-height:355px;padding:43px 18px 54px}.pf-pathology-page .pl-hero h1{font-size:37px!important}.pf-pathology-page .pl-hero p{font-size:13px}.pf-pathology-page .pl-main{padding:52px 0 75px}.pf-pathology-page .pl-shell{padding-inline:18px}.pf-pathology-page .pl-layout{grid-template-columns:1fr;gap:32px}.pf-pathology-page .pl-sidebar{position:static}.pf-pathology-page .pl-photo-grid{grid-template-columns:repeat(2,minmax(0,1fr))}.pf-pathology-page .pl-tests,.pf-pathology-page .pl-benefits{grid-template-columns:1fr}.pf-pathology-page .pl-checkups{gap:9px}.pf-pathology-page .pl-checkup{min-height:113px;padding:15px 7px}.pf-pathology-page .pl-checkup strong{font-size:11px}}
@media(prefers-reduced-motion:reduce){.pf-pathology-page *{transition:none!important}}
</style>
@endsection

@section('content')
<main class="pf-pathology-page">
<section class="pl-hero" aria-labelledby="pl-title"><div class="pl-shell pl-hero-inner">
 <nav class="pl-breadcrumb" aria-label="Breadcrumb"><a href="{{ route('home') }}">Home</a><span>/</span><a href="{{ route('our-project') }}">Projects</a><span>/</span><span>Pathology Lab</span></nav>
 <span class="pl-eyebrow">RURAL HEALTHCARE &amp; DIAGNOSTICS</span>
 <h1 id="pl-title">PYARE FOUNDATION <span>PATHOLOGY LAB</span></h1>
 <p>Reliable, affordable diagnostic services for Ukhimath and nearby rural communities, supporting timely diagnosis and informed healthcare decisions.</p>
 <a class="pl-button" href="#pl-services">EXPLORE SERVICES ↗</a>
</div></section>
<section class="pl-main"><div class="pl-shell pl-layout">
 <div class="pl-content">
   <div class="pl-gallery">
     <div class="pl-gallery-heading"><h3>GLIMPSES OF OUR LABORATORY</h3><span class="pl-eyebrow">PHOTO GALLERY</span></div>
     <div class="pl-photo-grid"><a href="{{ asset('uploads/images/pathology/pathology-1.jpeg') }}" data-fancybox="pathology-gallery" aria-label="View Pathology laboratory photograph 1"><img src="{{ asset('uploads/images/pathology/pathology-1.jpeg') }}" alt="Pathology laboratory photograph 1" loading="lazy" decoding="async"></a>
<a href="{{ asset('uploads/images/pathology/pathology-2.jpeg') }}" data-fancybox="pathology-gallery" aria-label="View Pathology laboratory photograph 2"><img src="{{ asset('uploads/images/pathology/pathology-2.jpeg') }}" alt="Pathology laboratory photograph 2" loading="lazy" decoding="async"></a>
<a href="{{ asset('uploads/images/pathology/pathology-3.jpg') }}" data-fancybox="pathology-gallery" aria-label="View Pathology laboratory photograph 3"><img src="{{ asset('uploads/images/pathology/pathology-3.jpg') }}" alt="Pathology laboratory photograph 3" loading="lazy" decoding="async"></a>
<a href="{{ asset('uploads/images/pathology/pathology-4.jpg') }}" data-fancybox="pathology-gallery" aria-label="View Pathology laboratory photograph 4"><img src="{{ asset('uploads/images/pathology/pathology-4.jpg') }}" alt="Pathology laboratory photograph 4" loading="lazy" decoding="async"></a></div>
   </div>
   <div class="pl-intro"><span class="pl-eyebrow">ABOUT THE LABORATORY</span><h2>DIAGNOSTIC CARE <span style="color:#f46226">CLOSER TO HOME</span></h2>
     <p>Inaugurated on <strong>20th May 2026</strong>, the Pyare Foundation Pathology Lab was established with the aim of making reliable and affordable diagnostic services accessible to the people of Ukhimath and nearby rural communities.</p>
     <p>The lab supports timely diagnosis through essential blood tests and basic health checkups, helping individuals take better healthcare decisions at the right time. With modern equipment, hygienic sample collection, and patient-focused service, the laboratory is a step towards strengthening rural healthcare access.</p>
   </div>
   <div class="pl-note"><h3>LABORATORY SERVICES</h3><p>Diagnostic laboratory services at the Pyare Foundation are provided by <strong>Shanta Bansi Diagnostic Lab</strong>, ensuring high-quality, accurate, and reliable diagnostic testing for the community.</p></div>
   <div class="pl-note mission"><h3>OUR MISSION</h3><p>To provide accurate, affordable, and accessible diagnostic services that support early detection, timely treatment, and better health outcomes for the community.</p></div>
   <section class="pl-block" id="pl-services"><span class="pl-eyebrow">HEALTH TESTING</span><h2>DIAGNOSTIC TESTS AVAILABLE</h2><div class="pl-tests"><div class="pl-test"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3h6m-5 0v6l-5.7 8.5A2 2 0 006 21h12a2 2 0 001.7-3.5L14 9V3M8 15h8"/></svg><span>Complete Blood Count (CBC)</span></div>
<div class="pl-test"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3h6m-5 0v6l-5.7 8.5A2 2 0 006 21h12a2 2 0 001.7-3.5L14 9V3M8 15h8"/></svg><span>Kidney Function Test (KFT)</span></div>
<div class="pl-test"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3h6m-5 0v6l-5.7 8.5A2 2 0 006 21h12a2 2 0 001.7-3.5L14 9V3M8 15h8"/></svg><span>Liver Function Test (LFT)</span></div>
<div class="pl-test"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3h6m-5 0v6l-5.7 8.5A2 2 0 006 21h12a2 2 0 001.7-3.5L14 9V3M8 15h8"/></svg><span>Lipid Profile</span></div>
<div class="pl-test"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3h6m-5 0v6l-5.7 8.5A2 2 0 006 21h12a2 2 0 001.7-3.5L14 9V3M8 15h8"/></svg><span>Blood Sugar Test</span></div>
<div class="pl-test"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3h6m-5 0v6l-5.7 8.5A2 2 0 006 21h12a2 2 0 001.7-3.5L14 9V3M8 15h8"/></svg><span>Thyroid Profile</span></div>
<div class="pl-test"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3h6m-5 0v6l-5.7 8.5A2 2 0 006 21h12a2 2 0 001.7-3.5L14 9V3M8 15h8"/></svg><span>Vitamin Tests</span></div>
<div class="pl-test"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 3h6m-5 0v6l-5.7 8.5A2 2 0 006 21h12a2 2 0 001.7-3.5L14 9V3M8 15h8"/></svg><span>Uric Acid Test</span></div></div></section>
   <section class="pl-block"><span class="pl-eyebrow">PREVENTIVE HEALTH</span><h2>BASIC HEALTH CHECKUPS</h2><div class="pl-checkups">
     <div class="pl-checkup"><i class="fa-solid fa-heart-pulse" aria-hidden="true"></i><strong>BP Checkup</strong></div>
     <div class="pl-checkup"><i class="fa-solid fa-lungs" aria-hidden="true"></i><strong>Oxygen Level</strong></div>
     <div class="pl-checkup"><i class="fa-solid fa-weight-scale" aria-hidden="true"></i><strong>Weight</strong></div>
   </div></section>
   <section class="pl-block"><span class="pl-eyebrow">WHY CHOOSE US</span><h2>ACCESSIBLE, DEPENDABLE HEALTHCARE</h2><ul class="pl-benefits"><li>Affordable diagnostic services for local communities</li>
<li>Accurate and reliable test reports</li>
<li>Hygienic sample collection and safe testing process</li>
<li>Essential tests available under one roof</li>
<li>Convenient location near Omkareshwar Mandir</li>
<li>Open every day from 8:00 AM to 7:00 PM</li></ul></section>
   <section class="pl-block"><span class="pl-eyebrow">VISIT THE LAB</span><h2>LOCATION &amp; TIMINGS</h2><div class="pl-location">
     <p><strong>Address:</strong> Near Omkareshwar Mandir, Ukhimath, Asama, Uttarakhand - 246469</p>
     <p><strong>Opening Hours:</strong> 8:00 AM – 7:00 PM</p><p><strong>Open:</strong> Monday to Sunday</p>
   </div></section>
   <div class="pl-block pl-visit"><h2>GET RELIABLE HEALTH TESTING NEAR YOU</h2><p>Visit Pyare Foundation Pathology Lab for affordable diagnostic tests and basic health checkups.</p>
      <a href="https://www.google.com/maps?gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIHCAEQIRigATIHCAIQIRigATIHCAMQIRiPAtIBCTEwNTk5ajBqN6gCCLACAfEFMvF2Am7rmQA&um=1&ie=UTF-8&fb=1&gl=in&sa=X&geocode=KZe_TB5ONQg5MbL6ys2nVFbW&daddr=near+Omkareshwar+Mandir,+Ukhimath,+Asama,+Uttarakhand+246469" target="_blank" rel="noopener noreferrer">GET DIRECTIONS ↗</a>
   </div>
 </div>
 <aside class="pl-sidebar">
  <div class="pl-donate"><h3>SUPPORT OUR WORK</h3><p>Help Pyare Foundation continue its community healthcare initiatives.</p>
    <div class="pl-give"><button type="button" id="onceBtn" data-type="one-time" class="donation-btn give-type bg-black text-white">GIVE ONCE</button><button type="button" id="monthlyBtn" data-type="monthly" class="donation-btn give-type bg-[#f4e0b9] text-black">GIVE MONTHLY</button></div>
    <h4>CHOOSE AMOUNT TO DONATE</h4><div class="pl-amounts">
      <button type="button" class="amount-btn bg-gray-100" data-value="500">₹500</button>
      <button type="button" class="amount-btn bg-gray-100" data-value="1000">₹1,000</button>
      <button type="button" class="amount-btn bg-gray-100" data-value="2000">₹2,000</button>
      <button type="button" class="amount-btn bg-gray-100" data-value="3000">₹3,000</button>
    </div>
    <form id="payment-form" action="{{ route('web.donation.store') }}" method="POST">@csrf
      <input type="hidden" name="donationTypeValue" id="donationTypeValue" value="one-time">
      <input type="hidden" name="campaign" id="campaign" value="Pathology Lab">
      <input type="text" name="firstName" placeholder="FIRST NAME" autocomplete="given-name">
      <input type="text" name="lastName" placeholder="LAST NAME" autocomplete="family-name">
      <input id="customAmount" type="number" min="1" step="1" name="amount" placeholder="AMOUNT">
      <input type="email" name="email" placeholder="EMAIL" autocomplete="email">
      <input type="text" name="contact" placeholder="PHONE" autocomplete="tel">
      <input type="text" name="address" placeholder="ADDRESS" autocomplete="street-address">
      <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
      <input type="hidden" name="razorpay_order_id" id="razorpay_order_id">
      <input type="hidden" name="razorpay_signature" id="razorpay_signature">
      <button type="submit" id="pay-button">PROCEED TO DONATE ↗</button>
    </form>
    <div class="pl-volunteer"><p>Volunteers are the heart of our foundation. Sign up today and be a part of something bigger.</p><a href="{{ route('volunteer-member') }}">BECOME VOLUNTEER ↗</a></div>
  </div>
 </aside>
</div></section>
</main>
@endsection