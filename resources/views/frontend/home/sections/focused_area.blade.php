<!-- Focus areas: three-column cards, existing CMS content and destinations preserved. -->
<section class="pf-focus-modern" aria-labelledby="pf-focus-title">
  <div class="pf-focus-container">
    <div class="pf-focus-intro" data-animate>
      <span class="pf-focus-overline">OUR PURPOSE · OUR WORK</span>
      <h2 id="pf-focus-title">OUR FOCUSED <span>AREAS</span></h2>
    </div>
    @php
      $demo = [
        ['title'=>'Become a Volunteer','description'=>'Join your hand with us for a better life and beautiful future','btn'=>'Register Now','scheme'=>'light','icon'=>asset('uploads/focus/icons/volunteer.svg')],
        ['title'=>'Give Donation','description'=>'Help thousands of children to get their primary education','btn'=>'Donate Now','scheme'=>'dark','icon'=>asset('uploads/focus/icons/donation.svg')],
        ['title'=>'Give Scholarship','description'=>'Consider a gift to central scholarship to help pay for college','btn'=>'Learn More','scheme'=>'brand','icon'=>asset('uploads/focus/icons/scholarship.svg')],
      ];
      $items = isset($focuses) && count($focuses) ? $focuses : $demo;
    @endphp
    <div class="pf-focus-grid">
      @foreach($items as $i => $focus)
        <article class="pf-focus-card" data-animate>
          <div class="pf-focus-card-top">
            <span class="pf-focus-icon" aria-hidden="true">
              @if($i % 3 === 0)
                <svg viewBox="0 0 48 48" fill="none" aria-hidden="true"><path d="M24 40S7 30 7 19a9 9 0 0 1 17-4 9 9 0 0 1 17 4c0 11-17 21-17 21Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M13 25h6l3-6 4 12 3-6h6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
              @elseif($i % 3 === 1)
                <svg viewBox="0 0 48 48" fill="none" aria-hidden="true"><path d="M24 39V12M24 14c-5-5-12-5-18-3v25c6-2 13-2 18 3Zm0 0c5-5 12-5 18-3v25c-6-2-13-2-18 3Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M11 19c4-1 7-1 10 1M28 20c3-2 6-2 10-1M11 26c4-1 7-1 10 1M28 27c3-2 6-2 10-1" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
              @else
                <svg viewBox="0 0 48 48" fill="none" aria-hidden="true"><path d="M24 41V22M24 33c-11 0-17-7-17-18 9 0 17 6 17 18Zm0-8c0-10 6-16 17-17 0 10-6 17-17 17Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M14 41h20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
              @endif
            </span>
            <span class="pf-focus-index">{{ str_pad($i+1,2,'0',STR_PAD_LEFT) }}</span>
          </div>
          <h3>{{ data_get($focus,'title','') }}</h3>
          <p>{{ data_get($focus,'description','') }}</p>
          <a class="pf-focus-action" href="{{ route('our-project') }}">
            <span>{{ data_get($focus,'btn') ?: data_get($focus,'heading','Explore') }}</span>
            <span class="pf-focus-arrow" aria-hidden="true">↗</span>
          </a>
        </article>
      @endforeach
    </div>
  </div>
</section>
<style>
/* Isolated visual styling for the focus-area section only. */
.pf-refined .pf-focus-modern{padding:92px 0 102px;background:#fff9f4;color:#16163f;position:relative;isolation:isolate;overflow:hidden}
.pf-refined .pf-focus-modern::before{content:"";position:absolute;inset:0;z-index:-2;background-image:url("{{ asset('uploads/focus/focus_bg.jpg') }}");background-position:center 42%;background-size:cover;background-repeat:no-repeat}
.pf-refined .pf-focus-modern::after{content:"";position:absolute;inset:0;z-index:-1;background:linear-gradient(105deg,rgba(255,250,245,.91),rgba(255,250,245,.88) 55%,rgba(255,250,245,.93));pointer-events:none}
.pf-refined .pf-focus-modern .pf-focus-container{width:min(1440px,100%);margin:0 auto;padding:0 clamp(20px,3vw,52px)}
.pf-refined .pf-focus-modern .pf-focus-intro{text-align:center;margin:0 auto 42px}
.pf-refined .pf-focus-modern .pf-focus-overline{display:block;color:#ed642e;font-size:11px;font-weight:800;letter-spacing:.18em;margin-bottom:13px}
.pf-refined .pf-focus-modern h2{margin:0!important;color:#16163f;font-size:clamp(30px,3vw,43px)!important;font-weight:800;line-height:1.18!important}
.pf-refined .pf-focus-modern h2 span{color:#f46226!important}
.pf-refined .pf-focus-modern .pf-focus-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:22px;align-items:stretch}
.pf-refined .pf-focus-modern .pf-focus-card{backdrop-filter:blur(3px);-webkit-backdrop-filter:blur(3px);min-width:0;min-height:320px;display:flex;flex-direction:column;align-items:flex-start;text-align:left;background:rgba(255,255,255,.96);border:1px solid #eee4df;border-radius:12px;padding:32px 32px 28px;box-shadow:0 6px 28px rgba(28,22,39,.035);position:relative;overflow:hidden;transition:transform .25s ease,box-shadow .25s ease,border-color .25s ease}
.pf-refined .pf-focus-modern .pf-focus-card::before{content:"";position:absolute;top:0;left:0;width:100%;height:4px;background:#f46226;transform:scaleX(0);transform-origin:left;transition:transform .3s}
.pf-refined .pf-focus-modern .pf-focus-card:hover{transform:translateY(-5px);border-color:#f7c5b1;box-shadow:0 18px 40px rgba(28,22,39,.085)}
.pf-refined .pf-focus-modern .pf-focus-card:hover::before{transform:scaleX(1)}
.pf-refined .pf-focus-modern .pf-focus-card-top{display:flex;justify-content:space-between;align-items:flex-start;width:100%;margin-bottom:24px}
.pf-refined .pf-focus-modern .pf-focus-icon{display:grid;place-items:center;width:76px;height:76px;background:#fff1e9;border:1px solid #ffe2d1;color:#ed612d;border-radius:17px;flex:none}
.pf-refined .pf-focus-modern .pf-focus-icon svg{height:44px;width:44px}
.pf-refined .pf-focus-modern .pf-focus-index{color:#ece6e6;font:800 35px 'Manrope',sans-serif;line-height:1}
.pf-refined .pf-focus-modern .pf-focus-card h3{font-size:clamp(18px,1.55vw,23px)!important;font-weight:800;line-height:1.35;color:#16163f;margin:0 0 12px}
.pf-refined .pf-focus-modern .pf-focus-card p{font-size:14px!important;line-height:1.75!important;color:#686778;max-width:36ch;margin:0 0 24px;opacity:1}
.pf-refined .pf-focus-modern .pf-focus-action{display:inline-flex;align-items:center;justify-content:space-between;gap:14px;margin-top:auto;padding:0 0 6px;background:none!important;border:none!important;border-bottom:1px solid #fac9b6!important;color:#e85620!important;border-radius:0!important;font-size:12px!important;font-weight:800;letter-spacing:.025em;text-decoration:none;transition:color .2s,border-color .2s}
.pf-refined .pf-focus-modern .pf-focus-action:hover{color:#bb3e10!important;border-bottom-color:#bb3e10!important}
.pf-refined .pf-focus-modern .pf-focus-arrow{font-size:21px;line-height:1;transition:transform .2s}
.pf-refined .pf-focus-modern .pf-focus-action:hover .pf-focus-arrow{transform:translate(3px,-3px)}
@media(max-width:900px){.pf-refined .pf-focus-modern .pf-focus-grid{gap:13px}.pf-refined .pf-focus-modern .pf-focus-card{padding:23px;min-height:320px}.pf-refined .pf-focus-modern .pf-focus-icon{width:64px;height:64px}.pf-refined .pf-focus-modern .pf-focus-icon svg{width:36px;height:36px}}
@media(max-width:680px){.pf-refined .pf-focus-modern{padding:65px 0 70px}.pf-refined .pf-focus-modern .pf-focus-container{padding:0 18px}.pf-refined .pf-focus-modern .pf-focus-intro{margin-bottom:29px}.pf-refined .pf-focus-modern .pf-focus-grid{grid-template-columns:1fr;gap:15px}.pf-refined .pf-focus-modern .pf-focus-card{min-height:0;padding:24px}.pf-refined .pf-focus-modern .pf-focus-card-top{margin-bottom:17px}.pf-refined .pf-focus-modern .pf-focus-card p{margin-bottom:20px}}
@media(prefers-reduced-motion:reduce){.pf-refined .pf-focus-modern *{transition:none!important}}
</style>