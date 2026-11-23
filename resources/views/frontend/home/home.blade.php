@section('title')
    Pyare Foundation
@endsection


@extends('frontend.layouts.master')



@section('page_css')
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
/* Homepage-only visual refresh. All original Blade sections, text, data and links remain intact. */
.pf-refined{--pf-orange:#f46226;--pf-orange-dark:#d84c16;--pf-navy:#16163f;--pf-gold:#f59e0b;--pf-cream:#fff9f3;--pf-ink:#202033;--pf-grey:#656575;font-family:'DM Sans',sans-serif;color:var(--pf-ink);overflow:clip}
.pf-refined *{box-sizing:border-box}
.pf-refined :is(h1,h2,h3){font-family:'Manrope',sans-serif;letter-spacing:-.035em}
.pf-refined :is(section > div.mx-auto,section > div.max-w-screen-xl,section > div > div.max-w-screen-xl){max-width:1440px!important;width:100%;margin-left:auto!important;margin-right:auto!important;padding-left:clamp(18px,3vw,52px)!important;padding-right:clamp(18px,3vw,52px)!important}
.pf-refined section{scroll-margin-top:75px}
.pf-refined section:not(:first-child) h2{font-size:clamp(27px,2.7vw,39px)!important;line-height:1.23!important;letter-spacing:-.04em!important;font-weight:800!important}
.pf-refined section:not(:first-child) h2 span{color:#f46226!important}
.pf-refined section:not(:first-child) p{line-height:1.75}
.pf-refined section:not(:first-child) :is(a.rounded-full,a.rounded,button.rounded-full){border-radius:5px!important}
.pf-refined section:not(:first-child) :is(.bg-orange-500,.bg-\[\#F97316\],.bg-\[\#f46226\]){background:#f46226!important}
.pf-refined section:not(:first-child) :is(a.bg-orange-500,button.bg-orange-500):hover{background:#d84c16!important}
.pf-refined .swiper{min-width:0}
.pf-refined .swiper-slide{min-width:0}
.pf-refined .heroRedesignSwiper{height:clamp(530px,54vw,720px)!important;overflow:hidden}
.pf-refined .heroRedesignSwiper .swiper-slide>div{min-height:100%}
.pf-refined .heroRedesignSwiper picture img{filter:saturate(.82);object-position:center 38%}
.pf-refined .heroRedesignSwiper .bg-gradient-to-r{background:linear-gradient(90deg,rgba(16,16,37,.81),rgba(16,16,37,.48) 47%,rgba(16,16,37,.07) 100%)!important}
.pf-refined .heroRedesignSwiper .max-w-screen-xl{max-width:1440px!important;padding-left:clamp(20px,5vw,76px)!important;padding-right:clamp(20px,5vw,76px)!important}
.pf-refined .heroRedesignSwiper .max-w-\[760px\]{max-width:735px}
.pf-refined .heroRedesignSwiper h1{font-size:clamp(38px,4.6vw,70px)!important;font-weight:800;line-height:1.15!important;letter-spacing:-.045em;max-width:750px;text-transform:none}
.pf-refined .heroRedesignSwiper h1 + p{font-size:clamp(13px,1.12vw,16px);line-height:1.75;text-align:left!important;max-width:630px;display:-webkit-box;-webkit-line-clamp:4;-webkit-box-orient:vertical;overflow:hidden}
.pf-refined .heroRedesignSwiper .text-white\/80{color:#f9f7f5}
.pf-refined .heroRedesignSwiper a{border-radius:5px!important;background:#f46226!important;color:#ffffff!important;font-size:12px;font-weight:800;padding:13px 23px!important;text-decoration:none}
.pf-refined .heroR-prev,.pf-refined .heroR-next{width:44px!important;height:44px!important;border-radius:5px!important}
.pf-refined .heroR-next{background:#f46226!important;color:#ffffff!important}
.pf-refined .heroR-prev{background:#ffffff33!important}
.pf-refined .heroRedesignSwiper .heroR-pagination .swiper-pagination-bullet{background:white;opacity:.55}
.pf-refined .heroRedesignSwiper .heroR-pagination .swiper-pagination-bullet-active{background:#f46226;opacity:1}
.pf-refined section:has(.featuredSwiper){background:#fffaf5!important;padding-top:88px!important;padding-bottom:85px!important}
.pf-refined section:has(.featuredSwiper) .swiper-slide article{display:flex!important;flex-direction:column!important;height:100%;border-radius:8px!important;border:1px solid #e5e9e6;box-shadow:0 8px 30px rgba(18,47,38,.055)!important}
.pf-refined section:has(.featuredSwiper) .swiper-slide article>div:nth-child(2){flex:1;text-align:left!important;padding:23px 24px 17px!important}
.pf-refined section:has(.featuredSwiper) .swiper-slide article h3{font-weight:800;color:#16163f;font-size:19px}
.pf-refined section:has(.featuredSwiper) .swiper-slide article p{text-align:left;color:#5d6b64;font-size:13px}
.pf-refined section:has(.featuredSwiper) .swiper-slide article>div:first-child{aspect-ratio:16/10!important}
.pf-refined section:has(.featuredSwiper) .swiper-slide article>div:first-child img{width:100%;height:100%;object-fit:cover}
.pf-refined section:has(.featuredSwiper) .swiper-slide article>div:last-child{padding-left:24px;padding-right:24px}
.pf-refined .swiper-button-prev-custom-feature,.pf-refined .swiper-button-next-custom-feature,.pf-refined .swiper-button-prev-custom-news,.pf-refined .swiper-button-next-custom-news,.pf-refined .swiper-button-prev-custom-adviser,.pf-refined .swiper-button-next-custom-adviser,.pf-refined .swiper-button-prev-custom-testi,.pf-refined .swiper-button-next-custom-testi{background:#f46226!important;border-radius:5px!important}
.pf-refined section:has(.featuredSwiper) .swiper-slide a{font-size:12px;letter-spacing:.015em}
.pf-refined section:has(.featuredSwiper) .swiper-slide a:first-child{background:#16163f!important;color:white!important}
.pf-refined section:has(.featuredSwiper) .swiper-slide a:last-child{background:#f46226!important;color:#ffffff!important}
.pf-refined section:has(.featuredSwiper) .swiper-slide a svg:last-child{flex:none}
.pf-refined section:has(.featuredSwiper) .swiper-wrapper{align-items:stretch}
.pf-refined section:has(.featuredSwiper) .swiper-slide{height:auto}
.pf-refined section:has(.featuredSwiper) .swiper-slide article{min-height:100%}
.pf-refined section:has(.advisorySwiper){padding-top:82px!important;padding-bottom:72px!important;margin-bottom:0!important}
.pf-refined section:has(.advisorySwiper) .swiper-slide>div{border-radius:7px!important}
.pf-refined section:has(.advisorySwiper) img{height:350px!important}
.pf-refined section:has(.mediaSwiper){padding-top:78px!important;padding-bottom:84px!important;background:#fff8f2!important}
.pf-refined section:has(.mediaSwiper) img{border:1px solid #e2e5e1!important;border-radius:7px!important;box-shadow:none!important;height:355px!important}
.pf-refined section:has(.testimonialSwiper){background:#fffaf5!important;padding-top:84px!important;padding-bottom:85px!important}
.pf-refined section:has(.testimonialSwiper) .swiper-slide article{border:1px solid #e5e9e6!important;border-radius:7px!important;box-shadow:none!important}
.pf-refined section:has(.testimonialSwiper) .swiper-slide article p{text-align:left}
.pf-refined section:has(.testimonialSwiper) .swiper-slide article img{width:58px!important;height:58px!important}
.pf-refined section:has(.testimonialSwiper) .swiper-slide article .rounded-full{border-color:#e2e9e2!important}
.pf-refined section:has(#payment-form){background:#fff5e9!important}
.pf-refined #payment-form :is(input,button){min-height:40px}
.pf-refined section:has(#payment-form) button#pay-button{background:#f46226!important;color:white!important}
.pf-refined section:has(#payment-form) h2{margin-bottom:25px}
.pf-refined section:has(.advisorySwiper) .swiper-slide .absolute.bottom-0{background:linear-gradient(transparent,#101027e8)}
.pf-refined section:has(.featuredSwiper) .text-center.mb-12 a{background:#f46226!important;color:white}
.pf-refined section:has(.featuredSwiper) .text-center.mb-12 a:hover{background:#d84c16!important}
.pf-refined section:has(.featuredSwiper),.pf-refined section:has(.advisorySwiper),.pf-refined section:has(.mediaSwiper),.pf-refined section:has(.testimonialSwiper){overflow:hidden}
.pf-refined section:has(.featuredSwiper) .swiper,.pf-refined section:has(.mediaSwiper) .swiper{padding-bottom:70px}
.pf-refined section:has(.featuredSwiper) .swiper-slide>article,.pf-refined section:has(.testimonialSwiper) .swiper-slide>article{transition:transform .25s,box-shadow .25s}
.pf-refined section:has(.featuredSwiper) .swiper-slide>article:hover{transform:translateY(-4px);box-shadow:0 18px 40px #152f2615!important}
.pf-refined section:has(.grid-cols-2.sm\:grid-cols-3) img{border-radius:7px!important}
.pf-refined section:has(.grid-cols-2.sm\:grid-cols-3){background:#fff7ed!important}
.pf-refined section:has(.grid-cols-2.sm\:grid-cols-3) p{text-align:left!important}
.pf-refined section:has(.grid-cols-2.sm\:grid-cols-3) h2{text-align:left}
.pf-refined section:has(.grid-cols-2.sm\:grid-cols-3) a{border-radius:5px!important}
.pf-refined section:has(.grid-cols-2.sm\:grid-cols-3) a:last-child{background:#f46226!important;color:white!important}
.pf-refined section:has(.grid-cols-2.sm\:grid-cols-3) a:first-child{background:#f46226!important;color:#ffffff!important}
.pf-refined section:has(.grid-cols-2.sm\:grid-cols-3) figure{border-radius:7px!important}
@media(min-width:1024px){body:has(.pf-refined) header>div{max-width:1544px;margin:0 auto;padding-left:clamp(24px,3vw,52px);padding-right:clamp(24px,3vw,52px)}body:has(.pf-refined) header img{max-width:210px}body:has(.pf-refined) header nav{gap:0}}
@media(max-width:767px){
.pf-refined :is(section > div.mx-auto,section > div.max-w-screen-xl,section > div > div.max-w-screen-xl){padding-left:18px!important;padding-right:18px!important}
.pf-refined .heroRedesignSwiper{height:520px!important}
.pf-refined .heroRedesignSwiper picture img{object-position:62% center}
.pf-refined .heroRedesignSwiper .bg-gradient-to-r{background:linear-gradient(0deg,rgba(16,16,37,.90) 0%,rgba(16,16,37,.55) 65%,rgba(16,16,37,.14) 100%)!important}
.pf-refined .heroRedesignSwiper .max-w-screen-xl{padding-left:22px!important;padding-right:22px!important;align-items:end!important;padding-bottom:74px!important}
.pf-refined .heroRedesignSwiper h1{font-size:clamp(31px,8.2vw,44px)!important}
.pf-refined .heroRedesignSwiper h1 + p{-webkit-line-clamp:4;font-size:12px}
.pf-refined .heroRedesignSwiper .heroR-pagination{left:23px!important;transform:none!important;bottom:27px!important}
.pf-refined section:has(.featuredSwiper),.pf-refined section:has(.advisorySwiper),.pf-refined section:has(.mediaSwiper),.pf-refined section:has(.testimonialSwiper){padding-top:60px!important;padding-bottom:60px!important}
.pf-refined section:has(.featuredSwiper) .swiper-slide article>div:nth-child(2){padding:20px!important}
.pf-refined section:has(.mediaSwiper) img{height:300px!important}
.pf-refined section:not(:first-child) h2{font-size:27px!important}
}
@media(prefers-reduced-motion:reduce){.pf-refined *{scroll-behavior:auto!important;animation:none!important;transition:none!important}}

/* Final brand alignment: original orange + navy with readable CTAs. */
.pf-refined .heroRedesignSwiper a,
.pf-refined .heroRedesignSwiper a:hover,
.pf-refined .heroR-next,
.pf-refined .heroR-next svg{color:#fff!important}
.pf-refined .heroRedesignSwiper a:hover{background:#d84c16!important}
.pf-refined :is(.swiper-button-prev-custom-feature,.swiper-button-next-custom-feature,.swiper-button-prev-custom-news,.swiper-button-next-custom-news,.swiper-button-prev-custom-adviser,.swiper-button-next-custom-adviser,.swiper-button-prev-custom-testi,.swiper-button-next-custom-testi):hover{background:#d84c16!important}
.pf-refined section:has(.featuredSwiper) .swiper-slide a:last-child{color:#fff!important}
.pf-refined section:has(.grid-cols-2.sm\\:grid-cols-3) a:first-child{color:#fff!important}
.pf-refined section:not(:first-child) .text-\\[\\#f59e0b\\],
.pf-refined section:not(:first-child) .text-orange-600{color:#f46226!important}
.pf-refined section:has(.featuredSwiper) .swiper-slide article h3,
.pf-refined section:has(.testimonialSwiper) h3{color:#16163f!important}
.pf-refined section:has(.grid-cols-1.md\\:grid-cols-3) .bg-\\[\\#0B0D17\\]{background:#16163f!important}
.pf-refined section:has(.grid-cols-1.md\\:grid-cols-3) .bg-\\[\\#F59E0B\\]{background:#f46226!important}
.pf-refined section:has(.grid-cols-1.md\\:grid-cols-3) .bg-\\[\\#F97316\\]{background:#f46226!important}
.pf-refined section:has(.grid-cols-1.md\\:grid-cols-3) .bg-white{color:#16163f}
.pf-refined section:has(.grid-cols-1.md\\:grid-cols-3) a{min-height:40px}
.pf-refined section:has(.featuredSwiper) .swiper-slide a:first-child{background:#16163f!important}
.pf-refined section:has(.featuredSwiper) .swiper-slide a:first-child:hover{background:#272765!important}
.pf-refined section:has(#payment-form) button#pay-button{background:#f46226!important}
.pf-refined section:has(#payment-form) button#pay-button:hover{background:#d84c16!important}
.pf-refined section:has(.heroRedesignSwiper) h1{color:#fff!important}

</style>
@endsection

@section('content')
<div class="pf-refined">

    @include('frontend.home.sections.social')
    <!--Hero Section-->
    @include('frontend.home.sections.hero')
    
     <!--Founder Section-->


    <!--Our Focused Area -->
    @include('frontend.home.sections.focused_area')

    <!-- Our Featured projects -->
    @include('frontend.home.sections.featured_project')

    <!-- Impact marquee before Project Bhairavi -->
    @include('frontend.home.sections.impact_marquee')

    <!-- Govind leela  -->
    @include('frontend.home.sections.govind_leela')
    
     <!-- Events -->
    @include('frontend.home.sections.event')

    <!-- Become part of ORGANIZATION -->
    @include('frontend.home.sections.organization')

    <!-- advisory Board -->
    @include('frontend.home.sections.advisory')

    <!-- News and Media -->
    @include('frontend.home.sections.news_media')

    <!-- Testimonials -->
    @include('frontend.home.sections.testimonial')

    <!-- Our Footprints: geographic areas of work -->
    @include('frontend.home.sections.footprints')

    <!-- Join Our Hands -->
    @include('frontend.home.sections.join_our_hand')
    
    

</div>
@endsection
