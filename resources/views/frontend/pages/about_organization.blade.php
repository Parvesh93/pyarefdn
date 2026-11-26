@extends('frontend.layouts.master')
@section('title')
    About Organisation
@endsection

@section('page_css')
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
/* Organisation page design system — scoped to this page. */
.pf-about-org{--ao-navy:#16163f;--ao-orange:#f46226;--ao-cream:#fff9f4;--ao-text:#252638;--ao-muted:#656a72;overflow:clip;font-family:'DM Sans',Arial,sans-serif;color:var(--ao-text)}
.pf-about-org *{box-sizing:border-box}
.pf-about-org h1,.pf-about-org h2,.pf-about-org h3,.pf-about-org h4{font-family:'Manrope',sans-serif;letter-spacing:-.04em}
.pf-about-org .ao-container{width:100%;max-width:1440px;margin:0 auto;padding:0 clamp(20px,3vw,52px)}
.pf-about-org .ao-label{display:inline-flex;align-items:center;gap:10px;color:var(--ao-orange);font-size:11px;letter-spacing:.16em;font-weight:800;text-transform:uppercase}
.pf-about-org .ao-label::before{content:"";height:8px;width:8px;background:var(--ao-orange);border-radius:50%}
.pf-about-org .ao-button{display:inline-flex;justify-content:center;align-items:center;gap:15px;padding:13px 22px;min-height:46px;border-radius:5px;font-size:12px;font-weight:800;text-decoration:none;transition:background .2s,transform .2s}
.pf-about-org .ao-button:hover{transform:translateY(-2px)}
.pf-about-org .ao-button-primary{background:var(--ao-orange);color:#fff}
.pf-about-org .ao-button-primary:hover{background:#d84c16;color:#fff}
.pf-about-org .ao-button-outline{background:transparent;color:var(--ao-navy);border:1px solid #d9d6da}
.pf-about-org .ao-button-outline:hover{background:#fff2e8}
.pf-about-org .ao-hero{position:relative;min-height:435px;background:#16163f;color:#fff;display:flex;align-items:center;overflow:hidden}
.pf-about-org .ao-hero-photo{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:center 35%}
.pf-about-org .ao-hero::after{content:"";position:absolute;inset:0;background:linear-gradient(90deg,rgba(17,17,48,.91),rgba(17,17,48,.64) 51%,rgba(17,17,48,.12))}
.pf-about-org .ao-hero-inner{position:relative;z-index:1;padding-top:75px;padding-bottom:75px}
.pf-about-org .ao-breadcrumb{display:flex;align-items:center;gap:9px;flex-wrap:wrap;color:#ece9f1;font-size:12px;font-weight:600;margin-bottom:28px}
.pf-about-org .ao-breadcrumb a{color:#fff;text-decoration:none}
.pf-about-org .ao-breadcrumb a:hover{color:#ffba91}
.pf-about-org .ao-breadcrumb span:last-child{color:#ffb58e}
.pf-about-org .ao-hero h1{font-size:clamp(39px,4.8vw,65px);max-width:710px;line-height:1.14;letter-spacing:-.055em;color:#fff;font-weight:800;margin:14px 0 21px}
.pf-about-org .ao-hero h1 em{font-style:normal;color:#ff8353}
.pf-about-org .ao-hero-sub{max-width:560px;font-size:15px;line-height:1.85;color:#ece9ef;margin:0}
.pf-about-org .ao-intro{background:#fff;padding:92px 0 100px}
.pf-about-org .ao-intro-grid{display:grid;grid-template-columns:minmax(0,.9fr) minmax(0,1.1fr);align-items:start;gap:clamp(36px,5vw,84px)}
.pf-about-org .ao-visual{position:relative;min-height:595px}
.pf-about-org .ao-visual img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;border-radius:9px}
.pf-about-org .ao-visual::after{content:"";position:absolute;inset:20px -17px -17px 18px;border:2px solid #f0c6aa;border-radius:9px;z-index:-1}
.pf-about-org .ao-visual-flag{position:absolute;bottom:24px;left:24px;padding:12px 17px;background:#fff;color:#16163f;border-left:4px solid #f46226;border-radius:4px;box-shadow:0 5px 26px #0002;font-size:11px;font-weight:800;letter-spacing:.12em}
.pf-about-org .ao-intro-copy h2{font-size:clamp(31px,3.2vw,45px);font-weight:800;color:#16163f;line-height:1.19;margin:12px 0 22px}
.pf-about-org .ao-intro-copy h2 span{color:#f46226}
.pf-about-org .ao-intro-copy p{font-size:14px;line-height:1.9;color:#5a606b;margin:0 0 15px;text-align:left}
.pf-about-org .ao-vision{margin-top:31px;padding:25px 28px;background:#fff9f4;border-left:3px solid #f46226;border-radius:0 8px 8px 0}
.pf-about-org .ao-vision h3{font-size:20px;font-weight:800;color:#16163f;margin:0 0 10px}
.pf-about-org .ao-vision p{margin:0}
.pf-about-org .ao-shortcuts{display:flex;align-items:center;gap:11px;flex-wrap:wrap;margin-top:29px}
.pf-about-org .ao-chapter{padding:15px 0;background:#fff9f4;border-block:1px solid #f1e9e2}
.pf-about-org .ao-chapter-inner{display:flex;gap:28px;align-items:center;justify-content:space-between;flex-wrap:wrap}
.pf-about-org .ao-chapter-caption{color:#e45b26;font-size:11px;letter-spacing:.13em;font-weight:800}
.pf-about-org .ao-chapter-links{display:flex;gap:25px;align-items:center;flex-wrap:wrap}
.pf-about-org .ao-chapter-links a{color:#16163f;font-weight:800;font-size:12px;text-decoration:none}
.pf-about-org .ao-chapter-links a:hover{color:#f46226}
.pf-about-org #ao-community,.pf-about-org #ao-recognition,.pf-about-org #ao-team{scroll-margin-top:95px}
.pf-about-org .ao-community-label{padding:76px 0 0;background:#fffaf5;text-align:center}
.pf-about-org .ao-community-label h2{font-size:clamp(29px,3.3vw,45px);line-height:1.2;font-weight:800;color:#16163f;margin:12px 0 0}
.pf-about-org .ao-community-label h2 span{color:#f46226}
/* Existing CTA cards — remove dated hex overlays and align them with the homepage cards. */
.pf-about-org #ao-community>section{background:#fffaf5!important;padding:38px 0 88px!important}
.pf-about-org #ao-community>section>div{max-width:1440px;margin:auto;padding:0 clamp(20px,3vw,52px)!important}
.pf-about-org #ao-community article{border-radius:10px!important;box-shadow:0 7px 25px rgba(22,22,63,.055)!important;border:1px solid #eee6e2;display:flex;flex-direction:column;overflow:hidden;transition:transform .25s,box-shadow .25s}
.pf-about-org #ao-community article:hover{transform:translateY(-4px);box-shadow:0 18px 38px #16163f15!important}
.pf-about-org #ao-community article>div:first-child{height:255px!important;flex:none}
.pf-about-org #ao-community article>div:first-child .absolute.-bottom-10{display:none!important}
.pf-about-org #ao-community article>div:nth-child(2){padding:23px 25px 26px!important;background:#fff!important;flex:1}
.pf-about-org #ao-community article p{color:#5b606c!important;font-size:14px!important;line-height:1.8!important;text-align:left}
.pf-about-org #ao-community article a button{background:#f46226!important;color:#fff!important;padding:12px 20px!important;font-size:12px!important;border-radius:5px!important;margin-top:20px!important}
.pf-about-org #ao-community article a button:hover{background:#d84c16!important}
/* Retain all dated award records while refreshing the timeline and year navigation. */
.pf-about-org #ao-recognition>section{background:#fff!important;padding:88px 0 95px!important}
.pf-about-org #ao-recognition>section>div{max-width:1440px;margin:auto;padding:0 clamp(20px,3vw,52px)!important}
.pf-about-org #ao-recognition>section>div>h2,.pf-about-org #ao-team>section>div:first-child h2{font-size:clamp(29px,3.3vw,45px)!important;text-align:center;font-weight:800;color:#16163f;margin:0 0 38px!important}
.pf-about-org #ao-recognition{overflow:visible!important}
.pf-about-org #ao-recognition>section,
.pf-about-org #ao-recognition>section>div,
.pf-about-org #ao-recognition>section>div>.grid{overflow:visible!important}
@media(min-width:768px){
 .pf-about-org #ao-recognition aside{position:sticky!important;top:24px!important;align-self:start!important;height:max-content;z-index:10}
 .pf-about-org #ao-recognition aside>div{max-height:calc(100vh - 48px);overflow-y:auto;overscroll-behavior:contain}
}
.pf-about-org #ao-recognition section[id^="y"]{scroll-margin-top:105px}
.pf-about-org #ao-recognition aside>div{border:1px solid #efe5df!important;border-radius:8px!important;background:#fff9f4!important;box-shadow:none!important}
.pf-about-org #ao-recognition aside nav a{font-size:12px;font-weight:700;border-radius:4px}
.pf-about-org #ao-recognition aside nav a:hover{color:#f46226;background:#fff!important}
.pf-about-org #ao-recognition section[id^="y"]{border-color:#f1d9c9!important}
.pf-about-org #ao-recognition section[id^="y"]>span{background:#f46226!important}
.pf-about-org #ao-recognition section[id^="y"]>article{border-radius:9px!important;border:1px solid #ebe6e4!important;box-shadow:0 4px 20px rgba(22,22,63,.04)!important;padding:24px!important}
.pf-about-org #ao-recognition section[id^="y"] header{background:transparent!important;box-shadow:none!important;border:0!important;position:static!important;z-index:auto!important}
.pf-about-org #ao-recognition section[id^="y"] header>div{background:#f46226!important;border-radius:6px!important}
.pf-about-org #ao-recognition section[id^="y"] h3{font-size:20px!important;font-weight:800;color:#16163f}
.pf-about-org #ao-recognition section[id^="y"] li{font-size:13px;line-height:1.8;color:#606675}
.pf-about-org #ao-team{background:#fffaf5;padding:75px 0 85px}
.pf-about-org #ao-team>section{background:transparent!important;padding:0!important}
.pf-about-org #ao-team>section>div:nth-child(2){max-width:1440px;margin:auto;padding:0 clamp(20px,3vw,52px)!important}
.pf-about-org #ao-team>section>div:first-child{margin-bottom:29px!important}
.pf-about-org #ao-team>section>div:first-child p{color:#f46226!important;font-size:11px!important;letter-spacing:.16em;font-weight:800}
.pf-about-org #ao-team .swiper-slide>div{border-radius:10px!important}
.pf-about-org #ao-team .swiper-slide img{object-position:center 15%}
.pf-about-org #ao-advisory{background:#fff}
.pf-about-org #ao-advisory .pf-advisory-section{padding-top:84px!important}
@media(max-width:1023px){.pf-about-org .ao-intro-grid{grid-template-columns:1fr 1fr;gap:35px}.pf-about-org .ao-visual{min-height:510px}.pf-about-org .ao-intro-copy p{font-size:13px;line-height:1.78}}
@media(max-width:767px){.pf-about-org .ao-hero{min-height:340px}.pf-about-org .ao-hero-inner{padding-block:55px}.pf-about-org .ao-hero h1{font-size:38px}.pf-about-org .ao-hero-sub{font-size:13px}.pf-about-org .ao-intro{padding:65px 0 70px}.pf-about-org .ao-intro-grid{grid-template-columns:1fr;gap:38px}.pf-about-org .ao-visual{min-height:380px;margin-right:12px}.pf-about-org .ao-intro-copy h2{font-size:31px}.pf-about-org .ao-vision{padding:21px}.pf-about-org .ao-chapter-inner{gap:12px}.pf-about-org .ao-chapter-links{gap:16px}.pf-about-org .ao-community-label{padding-top:59px}.pf-about-org #ao-community>section{padding:26px 0 65px!important}.pf-about-org #ao-recognition>section{padding:67px 0!important}.pf-about-org #ao-recognition section[id^="y"]>article{padding:18px!important}.pf-about-org #ao-team{padding:62px 0 66px}.pf-about-org #ao-team>section>div:nth-child(2){padding:0 18px!important}.pf-about-org #ao-community>section>div,.pf-about-org #ao-recognition>section>div{padding:0 18px!important}}
@media(prefers-reduced-motion:reduce){.pf-about-org *{transition:none!important}}
</style>
@endsection

@section('content')
<main class="pf-refined pf-about-org">
  <section class="ao-hero" aria-labelledby="ao-page-title">
    <img class="ao-hero-photo" src="{{ asset('uploads/images/organisation/about_organization.jpeg') }}" alt="Pyare Foundation community activity" fetchpriority="high">
    <div class="ao-container ao-hero-inner">
      <nav class="ao-breadcrumb" aria-label="Breadcrumb">
        <a href="{{ route('home') }}">Home</a><span aria-hidden="true">/</span><span>About Organisation</span>
      </nav>
      <span class="ao-label">PYARE FOUNDATION</span>
      <h1 id="ao-page-title">ABOUT <em>ORGANISATION</em></h1>
      <p class="ao-hero-sub">Learn about the organisation's introduction, vision, recognitions and the people behind its work.</p>
    </div>
  </section>

  <nav class="ao-chapter" aria-label="On this page">
    <div class="ao-container ao-chapter-inner">
      <span class="ao-chapter-caption">DISCOVER OUR STORY</span>
      <div class="ao-chapter-links">
        <a href="#ao-introduction">Introduction</a>
        <a href="#ao-community">Get Involved</a>
        <a href="#ao-recognition">Awards &amp; Recognition</a>
        <a href="#ao-team">Core Team</a>
        <a href="#ao-advisory">Advisory Board</a>
      </div>
    </div>
  </nav>

  <section id="ao-introduction" class="ao-intro" aria-labelledby="ao-intro-title">
    <div class="ao-container ao-intro-grid">
      <div class="ao-visual">
        <img src="{{ asset('uploads/images/organisation/about_organization.jpeg') }}" alt="Pyare Foundation organisation introduction" loading="lazy">
        <span class="ao-visual-flag">PEOPLE · PURPOSE · IMPACT</span>
      </div>
      <div class="ao-intro-copy">
        <span class="ao-label">WHO WE ARE</span>
        <h2 id="ao-intro-title">OUR <span>INTRODUCTION</span></h2>
        <p>Pyare Foundation is a multi dimensional group in the sector of human service and knowledge concern to represent and present skills, methods, procedure and approach that are primarily tailor made to fill the gaps of realignment/ delinquency. This group has experience to furnish the rights of self actualization and realization. The services would follow till shadow is removed and light transcends through written, psychological, presentable and consented manner. The foundation is equipped with latest and finest tools to overcome the difficulty in being geared and linked up to make the difference count towards the realistic change. This change is the utility or suitability through the honed skills to realize dream, drive, ambition and objective. The educated values inculcated with practical character enable opportunity, justice, recourse and discourse to be dutiful &amp; momentous in small but sure means.</p>
        <div class="ao-vision">
          <h3>VISION</h3>
          <p>Pyare foundation will support the system of care cure and heal for perfect health by standards, parameters and gradients that are universally scientifically and technologically accepted.</p>
        </div>
        <div class="ao-shortcuts">
          <a class="ao-button ao-button-primary" href="{{ route('our-project') }}">Explore Our Projects <span aria-hidden="true">↗</span></a>
          <a class="ao-button ao-button-outline" href="{{ route('donation-page') }}">Support Our Work <span aria-hidden="true">↗</span></a>
        </div>
      </div>
    </div>
  </section>

  <div id="ao-community">
    <div class="ao-community-label">
      <div class="ao-container">
        <span class="ao-label">MAKE A DIFFERENCE</span>
        <h2>BE PART OF <span>OUR JOURNEY</span></h2>
      </div>
    </div>
    @include('frontend.home.sections.cta_section')
  </div>

  <div id="ao-recognition">
    @include('frontend.home.sections.award_recognitions')
  </div>

  <div id="ao-team">
    @include('frontend.home.sections.core_team_member')
  </div>

  <div id="ao-advisory">
    @include('frontend.home.sections.advisory')
  </div>
</main>
@endsection
