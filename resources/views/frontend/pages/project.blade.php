@extends('frontend.layouts.master')

@section('title')
    Our Projects
@endsection

@section('page_css')
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
.pf-projects-page{--pp-navy:#16163f;--pp-orange:#f46226;--pp-cream:#fff9f4;--pp-muted:#656d73;font-family:'DM Sans',sans-serif;color:#16163f}
.pf-projects-page *{box-sizing:border-box}
.pf-projects-page :is(h1,h2,h3){font-family:'Manrope',sans-serif;letter-spacing:-.04em}
.pf-projects-page .pp-container{max-width:1440px;margin:0 auto;width:100%;padding:0 clamp(20px,3vw,52px)}
.pf-projects-page .pp-eyebrow{display:inline-flex;align-items:center;gap:9px;font-size:11px;font-weight:800;letter-spacing:.16em;color:#f46226;text-transform:uppercase}
.pf-projects-page .pp-eyebrow::before{content:"";height:8px;width:8px;border-radius:50%;background:#f46226;flex:none}
.pf-projects-page .pp-hero{position:relative;background:#16163f;color:#fff;isolation:isolate;overflow:hidden}
.pf-projects-page .pp-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse at 83% 45%,rgba(244,98,38,.2),transparent 47%),linear-gradient(112deg,#121232,#22224d);z-index:-1}
.pf-projects-page .pp-hero::after{content:"";position:absolute;right:-180px;top:-170px;width:560px;height:560px;border:1px solid #ffffff16;border-radius:50%;box-shadow:0 0 0 75px #ffffff04,0 0 0 145px #ffffff03;pointer-events:none}
.pf-projects-page .pp-hero-inner{position:relative;padding-top:62px;padding-bottom:76px}
.pf-projects-page .pp-breadcrumb{display:flex;gap:10px;align-items:center;flex-wrap:wrap;margin:0 0 36px;font-size:12px;color:#eae5ed}
.pf-projects-page .pp-breadcrumb a{font-weight:700;color:#fff;text-decoration:none}
.pf-projects-page .pp-breadcrumb a:hover{color:#ffaf8a}
.pf-projects-page .pp-breadcrumb span:last-child{color:#ffb58e}
.pf-projects-page .pp-hero .pp-eyebrow{color:#ffae84}
.pf-projects-page .pp-hero h1{font-size:clamp(41px,4.8vw,67px);font-weight:800;line-height:1.13;color:#fff;letter-spacing:-.055em;margin:16px 0 18px}
.pf-projects-page .pp-hero h1 span{color:#ff895a}
.pf-projects-page .pp-hero-description{color:#e8e5ee;font-size:15px;line-height:1.85;max-width:680px;margin:0}
.pf-projects-page .pp-main{padding:87px 0 100px;background:#fffaf6}
.pf-projects-page .pp-intro{display:flex;align-items:end;justify-content:space-between;gap:20px;margin-bottom:37px}
.pf-projects-page .pp-intro h2{font-size:clamp(29px,3.2vw,43px);line-height:1.2;font-weight:800;margin:13px 0 0;color:#16163f}
.pf-projects-page .pp-intro h2 span{color:#f46226}
.pf-projects-page .pp-count{font-size:12px;font-weight:800;color:#72717a;letter-spacing:.08em;border-bottom:2px solid #f46226;padding-bottom:8px;white-space:nowrap}
.pf-projects-page .pp-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:26px;align-items:stretch}
.pf-projects-page .pp-card{display:flex;flex-direction:column;min-width:0;height:100%;background:#fff;border:1px solid #ece5e1;border-radius:10px;overflow:hidden;box-shadow:0 7px 25px rgba(22,22,63,.045);transition:transform .25s,box-shadow .25s}
.pf-projects-page .pp-card:hover{transform:translateY(-4px);box-shadow:0 17px 38px rgba(22,22,63,.09)}
.pf-projects-page .pp-image{display:block;position:relative;aspect-ratio:16/10;overflow:hidden;background:#e9e5e2;flex:none}
.pf-projects-page .pp-image img{display:block;width:100%;height:100%;object-fit:cover;transition:transform .4s ease}
.pf-projects-page .pp-card:hover .pp-image img{transform:scale(1.035)}
.pf-projects-page .pp-image-label{position:absolute;bottom:15px;left:17px;padding:9px 12px;background:#fff;color:#16163f;border-radius:4px;font-size:10px;font-weight:800;letter-spacing:.1em;box-shadow:0 3px 12px #1112}
.pf-projects-page .pp-card-content{display:flex;flex-direction:column;flex:1;min-width:0;padding:26px 25px 23px}
.pf-projects-page .pp-card-content h3{font-size:20px;font-weight:800;line-height:1.4;color:#16163f;margin:0 0 14px;overflow-wrap:break-word}
.pf-projects-page .pp-card-description{font-size:13px;line-height:1.8;color:#65706e;display:-webkit-box;-webkit-line-clamp:5;-webkit-box-orient:vertical;overflow:hidden}
.pf-projects-page .pp-card-description p{font-size:inherit!important;line-height:inherit!important;margin:0 0 9px;text-align:left!important;color:inherit!important}
.pf-projects-page .pp-card-description :is(ul,ol){padding-left:18px;margin:0 0 9px}
.pf-projects-page .pp-card-subtitle{font-size:12px;line-height:1.7;color:#666a76;margin:13px 0 0}
.pf-projects-page .pp-card-link{display:flex;align-items:center;justify-content:space-between;gap:14px;min-height:44px;margin-top:auto;padding:21px 0 0;border-top:1px solid #eee7e4;color:#16163f;font-size:12px;font-weight:800;letter-spacing:.045em;text-decoration:none;transition:color .2s}
.pf-projects-page .pp-card-link span{font-size:22px;line-height:1;color:#f46226;transition:transform .2s}
.pf-projects-page .pp-card-link:hover{color:#f46226}
.pf-projects-page .pp-card-link:hover span{transform:translate(3px,-3px)}
.pf-projects-page .pp-card-bottom{display:flex;flex-direction:column;gap:18px;margin-top:auto;padding-top:24px}
.pf-projects-page .pp-card-bottom .pp-card-link{margin-top:0;padding-top:15px}
.pf-projects-page .pp-empty{text-align:center;padding:60px 20px;background:#fff;border:1px solid #eee6e0;border-radius:10px;color:#606674}
@media(max-width:1050px){.pf-projects-page .pp-grid{grid-template-columns:repeat(2,minmax(0,1fr));gap:22px}}
@media(max-width:767px){.pf-projects-page .pp-hero-inner{padding-block:48px 58px}.pf-projects-page .pp-breadcrumb{margin-bottom:28px}.pf-projects-page .pp-hero h1{font-size:39px}.pf-projects-page .pp-hero-description{font-size:13px}.pf-projects-page .pp-main{padding:64px 0 72px}.pf-projects-page .pp-intro{align-items:start;flex-direction:column;gap:15px;margin-bottom:26px}.pf-projects-page .pp-grid{grid-template-columns:1fr;gap:19px}.pf-projects-page .pp-card-content{padding:23px 22px 21px}.pf-projects-page .pp-card-content h3{font-size:19px}.pf-projects-page .pp-image{aspect-ratio:16/10}}
@media(prefers-reduced-motion:reduce){.pf-projects-page *{transition:none!important}}
</style>
@endsection

@section('content')
<main class="pf-projects-page">
  <section class="pp-hero" aria-labelledby="pp-title">
    <div class="pp-container pp-hero-inner">
      <nav class="pp-breadcrumb" aria-label="Breadcrumb">
        <a href="{{ route('home') }}">Home</a><span aria-hidden="true">/</span><span>Projects</span>
      </nav>
      <span class="pp-eyebrow">OUR INITIATIVES</span>
      <h1 id="pp-title">OUR <span>PROJECTS</span></h1>
      <p class="pp-hero-description">Discover the initiatives and programmes undertaken by Pyare Foundation to support communities and create meaningful change.</p>
    </div>
  </section>

  <section class="pp-main" aria-labelledby="pp-list-heading">
    <div class="pp-container">
      <div class="pp-intro">
        <div>
          <span class="pp-eyebrow">MAKING A DIFFERENCE</span>
          <h2 id="pp-list-heading">EXPLORE OUR <span>WORK</span></h2>
        </div>
        <span class="pp-count">{{ $projects->count() }} PROJECTS</span>
      </div>

      @if($projects->isNotEmpty())
        <div class="pp-grid">
          @foreach($projects as $project)
            <article class="pp-card">
              <div class="pp-image">
                <img src="{{ asset('uploads/project/' . $project->attach) }}" alt="{{ $project->title }}" loading="lazy" decoding="async">
                <span class="pp-image-label">PYARE FOUNDATION</span>
              </div>
              <div class="pp-card-content">
                <h3>{{ $project->title }}</h3>
                <div class="pp-card-description">{!! strip_tags($project->description, '<p><br><strong><em><ul><ol><li>') !!}</div>
                <div class="pp-card-bottom">
                  @if(filled($project->sub_title))
                    <p class="pp-card-subtitle">{{ $project->sub_title }}</p>
                  @endif
                  @if(filled($project->button_more))
                    <a class="pp-card-link" href="{{ $project->button_more }}">KNOW MORE <span aria-hidden="true">↗</span></a>
                  @endif
                </div>
              </div>
            </article>
          @endforeach
        </div>
      @else
        <p class="pp-empty">No projects are available at the moment.</p>
      @endif
    </div>
  </section>
</main>
@endsection