@extends('frontend.layouts.master')

@section('title')
    President
@endsection

@section('page_css')
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
/* President page — standalone styling, matching Pyare Foundation's refreshed identity. */
.pf-president{--pfp-navy:#16163f;--pfp-orange:#f46226;--pfp-cream:#fff9f4;color:#252638;font-family:'DM Sans',Arial,sans-serif}
.pf-president *{box-sizing:border-box}
.pf-president :is(h1,h2,h3){font-family:'Manrope',sans-serif;letter-spacing:-.045em}
.pf-president .pfp-container{max-width:1440px;width:100%;margin:0 auto;padding:0 clamp(20px,3vw,52px)}
.pf-president .pfp-eyebrow{display:inline-flex;align-items:center;gap:10px;color:#f46226;font-size:11px;font-weight:800;letter-spacing:.16em;text-transform:uppercase}
.pf-president .pfp-eyebrow:before{content:"";display:block;width:8px;height:8px;border-radius:50%;background:#f46226;flex:none}
.pf-president .pfp-hero{position:relative;isolation:isolate;overflow:hidden;background:#16163f;color:#fff;min-height:315px}
.pf-president .pfp-hero:before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 80% 40%,rgba(244,98,38,.18),transparent 48%),linear-gradient(110deg,#16163f 18%,#25234a 100%);z-index:-1}
.pf-president .pfp-hero:after{content:"";position:absolute;right:-140px;top:-200px;width:550px;height:550px;border:1px solid #ffffff18;border-radius:50%;box-shadow:0 0 0 64px #ffffff06,0 0 0 130px #ffffff04;pointer-events:none}
.pf-president .pfp-hero-inner{position:relative;padding:56px clamp(20px,3vw,52px) 65px}
.pf-president .pfp-breadcrumb{display:flex;align-items:center;gap:10px;flex-wrap:wrap;font-size:12px;margin-bottom:34px;color:#e6e4ef}
.pf-president .pfp-breadcrumb a{color:#fff;text-decoration:none;font-weight:700}
.pf-president .pfp-breadcrumb a:hover{color:#ffba95}
.pf-president .pfp-breadcrumb span:last-child{color:#ffb08a}
.pf-president .pfp-hero .pfp-eyebrow{color:#ffaf85}
.pf-president .pfp-hero h1{color:#fff;font-size:clamp(39px,4.2vw,60px);font-weight:800;line-height:1.15;margin:15px 0 12px}
.pf-president .pfp-hero h1 span{color:#ff8957}
.pf-president .pfp-hero-description{max-width:600px;color:#e4e0eb;font-size:14px;line-height:1.8;margin:0}
.pf-president .pfp-story{padding:92px 0 98px;background:#fff}
.pf-president .pfp-story-grid{display:grid;grid-template-columns:minmax(0,.82fr) minmax(0,1.18fr);align-items:start;gap:clamp(36px,5vw,85px)}
.pf-president .pfp-photo-area{min-width:0}
.pf-president .pfp-photo{position:relative;margin:0;background:#f5ece5;border-radius:10px;overflow:hidden;display:flex;align-items:center;justify-content:center}
.pf-president .pfp-photo img{display:block;width:100%;height:auto;max-height:640px;object-fit:contain}
.pf-president .pfp-photo-caption{display:flex;align-items:center;gap:12px;padding:19px 3px;font-size:11px;font-weight:800;letter-spacing:.11em;color:#777180}
.pf-president .pfp-photo-caption:before{content:"";height:8px;width:8px;background:#f46226;border-radius:50%}
.pf-president .pfp-story-content{min-width:0}
.pf-president .pfp-story-content h2{color:#16163f;font-size:clamp(32px,3.4vw,48px);font-weight:800;line-height:1.16;margin:14px 0 18px}
.pf-president .pfp-story-content h2 span{color:#f46226}
.pf-president .pfp-role{display:inline-block;padding:9px 14px;border-radius:4px;background:#fff2eb;color:#d9551f;font-weight:800;letter-spacing:.07em;font-size:11px;margin-bottom:24px}
.pf-president .pfp-story-content>p{color:#5a606c;font-size:14px;line-height:1.95;margin:0 0 17px;text-align:left}
.pf-president .pfp-quote{margin:29px 0 0;padding:26px 28px;border-left:3px solid #f46226;background:#fff9f4;border-radius:0 8px 8px 0;color:#16163f}
.pf-president .pfp-quote p{font-size:17px;font-weight:700;line-height:1.75;margin:0 0 12px}
.pf-president .pfp-quote cite{font-size:12px;color:#b5502e;font-weight:800;font-style:normal}
.pf-president .pfp-actions{display:flex;flex-wrap:wrap;gap:12px;margin-top:25px}
.pf-president .pfp-action{display:inline-flex;justify-content:center;align-items:center;gap:15px;padding:13px 20px;border-radius:5px;background:#f46226;color:#fff;font-size:12px;font-weight:800;text-decoration:none;min-height:45px;transition:background .2s,transform .2s}
.pf-president .pfp-action:hover{background:#d84c16;color:#fff;transform:translateY(-2px)}
.pf-president .pfp-action-alt{background:#16163f}
.pf-president .pfp-action-alt:hover{background:#2c2b57}
.pf-president .pfp-recognition{background:#fffaf5;padding:0}
.pf-president .pfp-recognition>section{background:transparent!important;padding:85px 0 95px!important}
.pf-president .pfp-recognition>section>div{max-width:1440px;width:100%;margin:auto;padding:0 clamp(20px,3vw,52px)!important}
.pf-president .pfp-recognition>section>div>h2{font-size:clamp(29px,3.3vw,45px)!important;line-height:1.2!important;font-weight:800!important;color:#16163f!important;letter-spacing:-.04em;text-align:center;margin:0 0 42px!important}
.pf-president .pfp-recognition aside>div{background:#fff!important;border:1px solid #eee3dc!important;border-radius:9px!important;box-shadow:none!important}
.pf-president .pfp-recognition aside nav a{font-size:12px;font-weight:700}
.pf-president .pfp-recognition aside nav a:hover{color:#e95c26;background:#fff4ed!important}
.pf-president .pfp-recognition section[id^="y"]{border-color:#f0d8c8!important;scroll-margin-top:105px}
.pf-president .pfp-recognition section[id^="y"]>span{background:#f46226!important}
.pf-president .pfp-recognition section[id^="y"] article{background:#fff!important;border:1px solid #eee3dc!important;border-radius:9px!important;box-shadow:0 7px 24px #16163f08!important;padding:24px!important}
.pf-president .pfp-recognition section[id^="y"] article>header{background:transparent!important;border:0!important;box-shadow:none!important;position:static!important}
.pf-president .pfp-recognition section[id^="y"] article>header>div{background:#f46226!important;border-radius:6px!important}
.pf-president .pfp-recognition section[id^="y"] h3{font-size:19px!important;font-weight:800!important;color:#16163f!important}
.pf-president .pfp-recognition section[id^="y"] li{font-size:13px;line-height:1.85;color:#626a75}
@media(min-width:768px){
 .pf-president .pfp-recognition aside{position:sticky!important;top:24px!important;align-self:start!important;height:max-content;z-index:10}
 .pf-president .pfp-recognition aside>div{max-height:calc(100vh - 48px);overflow-y:auto}
}
@media(max-width:900px){.pf-president .pfp-story-grid{grid-template-columns:1fr 1.1fr;gap:30px}.pf-president .pfp-story-content>p{font-size:13px;line-height:1.8}}
@media(max-width:767px){
 .pf-president .pfp-hero{min-height:290px}
 .pf-president .pfp-hero-inner{padding:46px 18px 55px}
 .pf-president .pfp-breadcrumb{margin-bottom:27px}
 .pf-president .pfp-hero h1{font-size:38px}
 .pf-president .pfp-story{padding:60px 0 68px}
 .pf-president .pfp-story-grid{grid-template-columns:1fr;gap:29px}
 .pf-president .pfp-photo{max-height:500px}
 .pf-president .pfp-photo img{max-height:500px}
 .pf-president .pfp-story-content h2{font-size:33px}
 .pf-president .pfp-quote{padding:22px}
 .pf-president .pfp-quote p{font-size:15px}
 .pf-president .pfp-recognition>section{padding:67px 0!important}
 .pf-president .pfp-recognition>section>div{padding:0 18px!important}
 .pf-president .pfp-recognition section[id^="y"] article{padding:19px!important}
}
@media(prefers-reduced-motion:reduce){.pf-president *{transition:none!important}}
</style>
@endsection

@section('content')
<main class="pf-president">
  <section class="pfp-hero" aria-labelledby="pfp-page-title">
    <div class="pfp-container pfp-hero-inner">
      <nav class="pfp-breadcrumb" aria-label="Breadcrumb">
        <a href="{{ route('home') }}">Home</a>
        <span aria-hidden="true">/</span>
        <span>About President</span>
      </nav>
      <span class="pfp-eyebrow">PYARE FOUNDATION LEADERSHIP</span>
      <h1 id="pfp-page-title">ABOUT <span>PRESIDENT</span></h1>
      <p class="pfp-hero-description">Dr. Anjali Thapliyal Kaul · President &amp; Director, Pyare Foundation</p>
    </div>
  </section>

  <section class="pfp-story" aria-labelledby="pfp-president-name">
    <div class="pfp-container pfp-story-grid">
      <div class="pfp-photo-area">
        <figure class="pfp-photo">
          <img src="{{ asset('uploads/images/organisation/president.jpg') }}" alt="Dr. Anjali Thapliyal Kaul" fetchpriority="high">
        </figure>
        <div class="pfp-photo-caption">PRESIDENT &amp; DIRECTOR · PYARE FOUNDATION</div>
      </div>
      <div class="pfp-story-content">
        <span class="pfp-eyebrow">LEADERSHIP &amp; JOURNEY</span>
        <h2 id="pfp-president-name">DR ANJALI <span>THAPLIYAL KAUL</span></h2>
        <span class="pfp-role">PRESIDENT &amp; DIRECTOR</span>
        <p>She passed 10th and 12th from UP Board with first division. Under the pressure of family, especially father, she pursued B.Sc (Bio) but showed disinterest and passed unexpectedly with second division. In order to live with an open mind, she pursued Master’s in History, showed the calibre with Gold Medal Degree. M.Phil. with Gender expertise again gave her a Gold Medal with Governor’s excellence award.</p>
        <p>She achieved Doctorate in short span through her aptitude and confidence. With M.Phil. and Ph.D., she generated interest in research, it took the level of Post-Doctoral to newer heights from India’s top institutions of History and Social Sciences (ICHR and ICSSR).</p>
        <p>She is the President and Director of Pyare Foundation through her skilled potential. She said,</p>
        <blockquote class="pfp-quote">
          <p>“I want to make the world beautiful by contributing my money, energy and values for holistic health. I feel proud and blessed when I think about my journey in the social field”.</p>
          <cite>Dr. Anjali Thapliyal Kaul</cite>
        </blockquote>
        <div class="pfp-actions">
          <a href="#pfp-awards" class="pfp-action">Awards &amp; Recognition <span aria-hidden="true">↗</span></a>
          <a href="{{ route('our-project') }}" class="pfp-action pfp-action-alt">Our Projects <span aria-hidden="true">↗</span></a>
        </div>
      </div>
    </div>
  </section>

  <div id="pfp-awards" class="pfp-recognition">
    @include('frontend.home.sections.award_recognitions')
  </div>
</main>
@endsection