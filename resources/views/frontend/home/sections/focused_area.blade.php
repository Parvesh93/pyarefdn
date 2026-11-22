<!-- Focus areas: editorial rows; content and destinations unchanged. -->
<section class="pf-focus-modern" aria-labelledby="pf-focus-title">
  <div class="pf-focus-container">
    <div class="pf-focus-intro" data-animate>
      <div>
        <span class="pf-focus-overline"><span class="pf-focus-dot"></span> WHAT WE WORK TOWARDS</span>
        <h2 id="pf-focus-title">OUR FOCUSED <span>AREAS</span></h2>
      </div>
      <div class="pf-focus-decor" aria-hidden="true">Purpose<span>.</span> People<span>.</span> Progress<span>.</span></div>
    </div>

    @php
      // Retain the existing CMS data and the original fallback content.
      $demo = [
        ['title'=>'Become a Volunteer','description'=>'Join your hand with us for a better life and beautiful future','btn'=>'Register Now','scheme'=>'light','icon'=>asset('uploads/focus/icons/volunteer.svg')],
        ['title'=>'Give Donation','description'=>'Help thousands of children to get their primary education','btn'=>'Donate Now','scheme'=>'dark','icon'=>asset('uploads/focus/icons/donation.svg')],
        ['title'=>'Give Scholarship','description'=>'Consider a gift to central scholarship to help pay for college','btn'=>'Learn More','scheme'=>'brand','icon'=>asset('uploads/focus/icons/scholarship.svg')],
      ];
      $items = isset($focuses) && count($focuses) ? $focuses : $demo;
    @endphp

    <div class="pf-focus-list">
      @foreach ($items as $i => $focus)
        @php
          $focusTitle = data_get($focus, 'title', '');
          $focusDescription = data_get($focus, 'description', '');
          $focusButton = data_get($focus, 'btn') ?: data_get($focus, 'heading', 'Explore');
          $focusIcon = data_get($focus, 'icon');
        @endphp
        <article class="pf-focus-row" data-animate>
          <div class="pf-focus-index" aria-hidden="true">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
          <div class="pf-focus-emblem" aria-hidden="true">
            @if ($focusIcon)
              <img src="{{ $focusIcon }}" alt="" loading="lazy">
            @else
              <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="24" cy="24" r="19" stroke="currentColor" stroke-width="1.4"/>
                <path d="M24 13v22M13 24h22" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
              </svg>
            @endif
          </div>
          <div class="pf-focus-body">
            <h3>{{ $focusTitle }}</h3>
            <p>{{ $focusDescription }}</p>
          </div>
          <a class="pf-focus-action" href="{{ route('our-project') }}">
            <span>{{ $focusButton }}</span>
            <span class="pf-focus-arrow" aria-hidden="true">↗</span>
          </a>
        </article>
      @endforeach
    </div>
  </div>
</section>

<style>
/* Independent component CSS; does not affect any other section. */
.pf-refined .pf-focus-modern{background:#fffaf5;position:relative;padding:100px 0 105px;color:#16163f}
.pf-refined .pf-focus-modern::before{content:"";position:absolute;right:0;top:0;width:29%;height:100%;background:linear-gradient(125deg,#fff5e9,#fffaf5);pointer-events:none}
.pf-refined .pf-focus-modern .pf-focus-container{position:relative;z-index:1;width:min(1440px,100%);margin:0 auto;padding:0 clamp(20px,3vw,52px)}
.pf-refined .pf-focus-modern .pf-focus-intro{display:flex;justify-content:space-between;align-items:end;gap:28px;margin-bottom:43px}
.pf-refined .pf-focus-modern .pf-focus-overline{display:inline-flex;gap:10px;align-items:center;color:#e65b25;font-size:11px;font-weight:800;letter-spacing:.17em}
.pf-refined .pf-focus-modern .pf-focus-dot{height:7px;width:7px;border-radius:50%;background:#f46226}
.pf-refined .pf-focus-modern h2{margin:14px 0 0;font-size:clamp(31px,3.1vw,46px)!important;font-weight:800;line-height:1.18;letter-spacing:-.045em}
.pf-refined .pf-focus-modern h2 span{color:#f46226!important}
.pf-refined .pf-focus-modern .pf-focus-decor{font-size:13px;font-weight:600;color:#777589;letter-spacing:.03em;padding-bottom:8px}
.pf-refined .pf-focus-modern .pf-focus-decor span{color:#f46226}
.pf-refined .pf-focus-modern .pf-focus-list{border-top:1px solid #e4dedb}
.pf-refined .pf-focus-modern .pf-focus-row{display:grid;grid-template-columns:65px 86px minmax(0,1fr) auto;gap:24px;align-items:center;min-height:164px;border-bottom:1px solid #e4dedb;padding:24px 24px 24px 12px;transition:background .25s ease,padding .25s ease}
.pf-refined .pf-focus-modern .pf-focus-row:hover{background:white;padding-left:24px}
.pf-refined .pf-focus-modern .pf-focus-index{align-self:start;margin-top:11px;font-size:13px;font-weight:800;color:#e46b36;letter-spacing:.08em}
.pf-refined .pf-focus-modern .pf-focus-emblem{display:grid;place-items:center;width:76px;height:76px;background:#fff;border:1px solid #efdfd4;border-radius:50%;color:#ef6a32}
.pf-refined .pf-focus-modern .pf-focus-emblem img{width:35px;height:35px;object-fit:contain}
.pf-refined .pf-focus-modern .pf-focus-emblem svg{width:43px;height:43px}
.pf-refined .pf-focus-modern .pf-focus-body{max-width:650px}
.pf-refined .pf-focus-modern .pf-focus-body h3{margin:0 0 10px;font-size:clamp(19px,1.65vw,25px);line-height:1.35;font-weight:800;letter-spacing:-.035em;color:#16163f}
.pf-refined .pf-focus-modern .pf-focus-body p{margin:0;font-size:14px;line-height:1.65;color:#6d6c75}
.pf-refined .pf-focus-modern .pf-focus-action{display:inline-flex;align-items:center;gap:15px;color:#16163f!important;font-size:12px;font-weight:800;white-space:nowrap;text-decoration:none;background:transparent!important}
.pf-refined .pf-focus-modern .pf-focus-action:hover{color:#f46226!important}
.pf-refined .pf-focus-modern .pf-focus-arrow{height:43px;width:43px;display:grid;place-items:center;border:1px solid #e9d4c8;border-radius:50%;background:#fff;color:#f46226;font-size:21px;transition:background .25s,color .25s,transform .25s}
.pf-refined .pf-focus-modern .pf-focus-action:hover .pf-focus-arrow{background:#f46226;color:#fff;transform:translate(2px,-2px)}
@media(max-width:850px){.pf-refined .pf-focus-modern .pf-focus-row{grid-template-columns:32px 65px minmax(0,1fr);gap:16px}.pf-refined .pf-focus-modern .pf-focus-emblem{width:61px;height:61px}.pf-refined .pf-focus-modern .pf-focus-action{grid-column:3;justify-self:start;margin-top:4px}}
@media(max-width:600px){.pf-refined .pf-focus-modern{padding:65px 0 70px}.pf-refined .pf-focus-modern .pf-focus-container{padding:0 20px}.pf-refined .pf-focus-modern .pf-focus-intro{margin-bottom:26px}.pf-refined .pf-focus-modern .pf-focus-decor{display:none}.pf-refined .pf-focus-modern h2{font-size:30px!important}.pf-refined .pf-focus-modern .pf-focus-row{grid-template-columns:30px 54px minmax(0,1fr);gap:12px;padding:22px 0;min-height:0}.pf-refined .pf-focus-modern .pf-focus-row:hover{padding-left:0}.pf-refined .pf-focus-modern .pf-focus-index{font-size:11px;margin-top:8px}.pf-refined .pf-focus-modern .pf-focus-emblem{width:52px;height:52px}.pf-refined .pf-focus-modern .pf-focus-emblem img{width:25px;height:25px}.pf-refined .pf-focus-modern .pf-focus-emblem svg{width:31px;height:31px}.pf-refined .pf-focus-modern .pf-focus-body h3{font-size:17px;margin-bottom:7px}.pf-refined .pf-focus-modern .pf-focus-body p{font-size:12px;line-height:1.6}.pf-refined .pf-focus-modern .pf-focus-action{font-size:11px;gap:10px}.pf-refined .pf-focus-modern .pf-focus-arrow{height:34px;width:34px;font-size:17px}}
@media(prefers-reduced-motion:reduce){.pf-refined .pf-focus-modern *{transition:none!important}}
</style>
