@extends('frontend.layouts.master')

@section('title', 'Pyare Foundation | Building healthier, stronger communities')

@section('page_css')
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
<style>
  .pf-home { --pine:#183b34; --pine-dark:#102b26; --sage:#e7eee7; --cream:#f8f6f1; --ink:#20302a; --muted:#68746c; --accent:#c78b52; color:var(--ink); font-family:'DM Sans',sans-serif; overflow:hidden; }
  .pf-home *, .pf-home *::before, .pf-home *::after { box-sizing:border-box; }
  .pf-home h1,.pf-home h2,.pf-home h3 { font-family:'Playfair Display',Georgia,serif; letter-spacing:-.035em; }
  .pf-wrap { width:min(1180px,calc(100% - 40px)); margin-inline:auto; }
  .pf-eyebrow { display:inline-flex; align-items:center; gap:11px; color:#a56f40; font-size:11px; font-weight:700; letter-spacing:.18em; text-transform:uppercase; }
  .pf-eyebrow::before { content:''; width:26px; height:1px; background:currentColor; }
  .pf-title { font-size:clamp(34px,4.2vw,58px); line-height:1.13; font-weight:600; }
  .pf-copy { font-size:16px; line-height:1.85; color:var(--muted); }
  .pf-btn { display:inline-flex; align-items:center; justify-content:center; gap:17px; min-height:49px; padding:12px 22px; border-radius:4px; font-size:13px; font-weight:700; text-decoration:none; transition:background .25s,transform .25s,color .25s; }
  .pf-btn:hover { transform:translateY(-2px); }
  .pf-btn-primary { background:var(--pine); color:white; }
  .pf-btn-primary:hover { background:#265448; color:white; }
  .pf-btn-light { background:#fff; color:var(--pine); }
  .pf-btn-light:hover { background:#e5e9e2; }
  .pf-btn-ghost { border:1px solid #c9d1ca; color:var(--pine); }
  .pf-btn-ghost:hover { background:#e8eee7; }
  .pf-hero { position:relative; min-height:650px; display:flex; align-items:center; background:var(--cream); }
  .pf-hero-inner { display:grid; grid-template-columns:.94fr 1.06fr; align-items:center; gap:6%; padding-block:80px 92px; }
  .pf-hero-copy { position:relative; z-index:2; max-width:560px; }
  .pf-hero h1 { font-size:clamp(46px,5.5vw,83px); line-height:1.09; margin:25px 0 25px; font-weight:600; }
  .pf-hero h1 em { color:#9a7655; font-style:italic; }
  .pf-hero-copy>p { max-width:490px; }
  .pf-actions { display:flex; flex-wrap:wrap; gap:12px; margin-top:31px; }
  .pf-hero-art { position:relative; min-height:500px; }
  .pf-hero-image { position:absolute; inset:0 0 30px 40px; width:calc(100% - 40px); height:calc(100% - 30px); object-fit:cover; border-radius:185px 185px 7px 7px; }
  .pf-hero-art::before { content:''; position:absolute; inset:-18px 17px 48px 24px; border:1px solid #c9b79f; border-radius:200px 200px 7px 7px; }
  .pf-hero-note { position:absolute; bottom:0; left:0; max-width:250px; padding:23px 26px; background:var(--pine); color:white; box-shadow:0 15px 35px #102b2626; }
  .pf-hero-note strong { font-family:'Playfair Display',serif; font-size:39px; display:block; line-height:1.1; }
  .pf-hero-note span { font-size:12px; line-height:1.6; opacity:.85; }
  .pf-small-line { display:flex; align-items:center; gap:11px; color:#68746c; font-size:12px; margin-top:38px; }
  .pf-small-line span { width:26px; height:1px; background:#a6b0a5; }
  .pf-strip { background:var(--pine); color:#fff; }
  .pf-strip-inner { display:grid; grid-template-columns:1.45fr repeat(3,1fr); align-items:center; padding:28px 0; gap:22px; }
  .pf-strip-intro { font-family:'Playfair Display',serif; font-size:24px; line-height:1.3; max-width:250px; }
  .pf-strip-item { border-left:1px solid #ffffff35; padding-left:26px; }
  .pf-strip-item strong { display:block; font-size:14px; margin-bottom:6px; }
  .pf-strip-item span { display:block; font-size:12px; color:#d2dfd8; line-height:1.5; }
  .pf-section { padding:104px 0; }
  .pf-section-head { display:flex; align-items:end; justify-content:space-between; gap:30px; margin-bottom:42px; }
  .pf-section-head .pf-title { max-width:640px; margin-top:16px; }
  .pf-section-head .pf-copy { max-width:380px; margin-bottom:3px; }
  .pf-about { background:#fff; }
  .pf-about-grid { display:grid; grid-template-columns:1fr 1fr; gap:10%; align-items:center; }
  .pf-about-photos { min-height:525px; position:relative; }
  .pf-about-main { position:absolute; top:0; left:0; width:81%; height:83%; object-fit:cover; border-radius:5px; }
  .pf-about-small { position:absolute; bottom:0; right:0; width:51%; height:46%; object-fit:cover; border:9px solid #fff; border-radius:5px; }
  .pf-about-panel { position:absolute; top:28px; right:0; background:var(--cream); padding:20px 22px; max-width:185px; box-shadow:0 12px 35px #00000012; font-size:12px; line-height:1.5; }
  .pf-about-panel strong { display:block; color:var(--pine); font:600 28px 'Playfair Display',serif; margin-bottom:5px; }
  .pf-about-copy .pf-title { margin:17px 0 24px; }
  .pf-about-copy .pf-copy { margin-bottom:17px; }
  .pf-values { display:grid; grid-template-columns:1fr 1fr; gap:18px; margin:27px 0 35px; }
  .pf-value { display:flex; align-items:flex-start; gap:10px; font-size:13px; font-weight:700; }
  .pf-value i { color:#9b744d; margin-top:2px; }
  .pf-focus { background:var(--cream); }
  .pf-focus-grid { display:grid; grid-template-columns:repeat(3,minmax(0,1fr)); gap:18px; }
  .pf-focus-card { background:#fff; padding:35px 30px 33px; border:1px solid #eae8e0; min-height:295px; display:flex; flex-direction:column; transition:transform .25s,box-shadow .25s; }
  .pf-focus-card:hover { transform:translateY(-5px); box-shadow:0 20px 40px #183b3412; }
  .pf-focus-num { font-size:12px; color:#9c8b77; letter-spacing:.1em; }
  .pf-focus-icon { height:43px; width:43px; display:grid; place-items:center; background:#e8eee8; border-radius:50%; color:var(--pine); margin:21px 0; }
  .pf-focus-card h3 { font-size:23px; font-weight:600; line-height:1.35; margin:0 0 12px; }
  .pf-focus-card p { color:var(--muted); font-size:13px; line-height:1.75; margin-bottom:22px; }
  .pf-focus-card a { margin-top:auto; color:var(--pine); font-size:12px; font-weight:700; text-decoration:none; }
  .pf-focus-card a:hover { text-decoration:underline; }
  .pf-projects { background:#fff; }
  .pf-projects-grid { display:grid; grid-template-columns:repeat(3,minmax(0,1fr)); gap:23px; }
  .pf-project { min-width:0; border:1px solid #e4e8e3; overflow:hidden; background:#fff; display:flex; flex-direction:column; }
  .pf-project img { width:100%; height:235px; object-fit:cover; transition:transform .4s; }
  .pf-project:hover img { transform:scale(1.035); }
  .pf-project-photo { overflow:hidden; }
  .pf-project-body { padding:25px; display:flex; flex-direction:column; flex:1; }
  .pf-project-tag { color:#8d7358; text-transform:uppercase; letter-spacing:.14em; font-size:10px; font-weight:700; }
  .pf-project h3 { font-size:24px; line-height:1.3; margin:13px 0; font-weight:600; }
  .pf-project p { color:var(--muted); font-size:13px; line-height:1.75; margin-bottom:24px; }
  .pf-project-links { margin-top:auto; display:flex; align-items:center; justify-content:space-between; gap:10px; padding-top:17px; border-top:1px solid #e9ece7; }
  .pf-project-links a { color:var(--pine); text-decoration:none; font-size:12px; font-weight:700; }
  .pf-project-links a:last-child { color:#986b40; }
  .pf-cta { background:var(--pine-dark); color:#fff; position:relative; }
  .pf-cta::after { content:''; position:absolute; width:420px; height:420px; border:1px solid #ffffff1a; border-radius:50%; right:-90px; top:-170px; pointer-events:none; }
  .pf-cta-inner { position:relative; z-index:1; display:flex; align-items:center; justify-content:space-between; gap:35px; padding-block:73px; }
  .pf-cta h2 { max-width:670px; margin:14px 0 0; font-size:clamp(33px,4vw,54px); line-height:1.2; }
  .pf-cta .pf-eyebrow { color:#cfa67d; }
  .pf-cta-actions { display:flex; gap:12px; flex-wrap:wrap; }
  .pf-cta-actions .pf-btn-ghost { color:white; border-color:#ffffff70; }
  .pf-cta-actions .pf-btn-ghost:hover { background:#ffffff18; }
  .pf-news-wrapper { background:var(--cream); }
  .pf-news-wrapper > section { background:transparent; }
  @media(max-width:950px) {
    .pf-hero-inner { gap:4%; }.pf-hero-art { min-height:420px; }
    .pf-about-grid { gap:5%; }.pf-about-photos { min-height:430px; }
    .pf-focus-grid,.pf-projects-grid { grid-template-columns:repeat(2,minmax(0,1fr)); }
    .pf-strip-inner { grid-template-columns:repeat(2,1fr); }.pf-strip-item:nth-child(2) { border-left:0; padding-left:0; }
  }
  @media(max-width:700px) {
    .pf-wrap { width:calc(100% - 36px); }.pf-section { padding:67px 0; }
    .pf-hero { min-height:unset; }.pf-hero-inner { display:flex; flex-direction:column; align-items:stretch; padding-block:53px 52px; gap:47px; }
    .pf-hero h1 { font-size:clamp(42px,10vw,62px); margin:17px 0; }
    .pf-copy { font-size:14px; line-height:1.8; }
    .pf-hero-art { min-height:370px; width:100%; }.pf-hero-image { left:25px; width:calc(100% - 25px); }
    .pf-hero-art::before { left:12px; }.pf-hero-note { padding:15px 19px; max-width:196px; }.pf-hero-note strong { font-size:30px; }
    .pf-small-line { margin-top:27px; }.pf-btn { min-height:45px; }
    .pf-strip-inner { grid-template-columns:1fr 1fr; gap:25px 14px; padding:29px 0; }
    .pf-strip-intro { grid-column:1/-1; max-width:none; font-size:22px; }
    .pf-strip-item { border-left:0; padding-left:0; }.pf-strip-item:nth-child(4) { grid-column:1/-1; }
    .pf-section-head { align-items:flex-start; flex-direction:column; gap:14px; margin-bottom:28px; }
    .pf-section-head .pf-title { margin-top:12px; }.pf-title { font-size:clamp(33px,8vw,44px); }
    .pf-about-grid { grid-template-columns:1fr; gap:45px; }.pf-about-photos { min-height:395px; }
    .pf-about-copy .pf-title { margin-top:14px; }.pf-about-panel { top:14px; right:0; }
    .pf-focus-grid,.pf-projects-grid { grid-template-columns:1fr; }.pf-focus-card { min-height:0; padding:27px; }
    .pf-project img { height:230px; }.pf-cta-inner { align-items:flex-start; flex-direction:column; padding-block:58px; }
  }
  @media(prefers-reduced-motion:reduce) { .pf-home *, .pf-home *::before, .pf-home *::after { animation:none!important; transition:none!important; } }
</style>
@endsection

@section('content')
<div class="pf-home">
    <section class="pf-hero" aria-labelledby="pf-hero-title">
        <div class="pf-wrap pf-hero-inner">
            <div class="pf-hero-copy" data-animate>
                <span class="pf-eyebrow">A commitment to community wellbeing</span>
                <h1 id="pf-hero-title">Small acts of care. <em>Lasting change.</em></h1>
                <p class="pf-copy">At Pyare Foundation, we work alongside communities to advance women's health, education, dignity and opportunity. Because lasting progress begins when everyone has the chance to thrive.</p>
                <div class="pf-actions">
                    <a class="pf-btn pf-btn-primary" href="{{ route('donation-page') }}">Support our work <span aria-hidden="true">↗</span></a>
                    <a class="pf-btn pf-btn-ghost" href="{{ route('our-project') }}">Explore our projects <span aria-hidden="true">→</span></a>
                </div>
                <div class="pf-small-line"><span></span> Rooted in compassion. Guided by purpose.</div>
            </div>
            <div class="pf-hero-art" data-animate>
                <img class="pf-hero-image" src="{{ asset('uploads/hero/banner6.jpeg') }}" alt="Pyare Foundation community health and awareness programme" fetchpriority="high" decoding="async">
                <div class="pf-hero-note"><strong>14+ years</strong><span>of working towards healthier and more empowered communities</span></div>
            </div>
        </div>
    </section>

    <div class="pf-strip">
        <div class="pf-wrap pf-strip-inner">
            <div class="pf-strip-intro">A shared vision for meaningful progress.</div>
            <div class="pf-strip-item"><strong>Women's health</strong><span>Awareness, access and dignity</span></div>
            <div class="pf-strip-item"><strong>Education & opportunity</strong><span>Knowledge that opens doors</span></div>
            <div class="pf-strip-item"><strong>Community wellbeing</strong><span>Care reaching those who need it</span></div>
        </div>
    </div>

    <section class="pf-section pf-about" aria-labelledby="pf-about-title">
        <div class="pf-wrap pf-about-grid">
            <div class="pf-about-photos" data-animate>
                <img class="pf-about-main" src="{{ asset('uploads/hero/Banner-5.webp') }}" alt="Women's healthcare initiative by Pyare Foundation" loading="lazy" decoding="async">
                <img class="pf-about-small" src="{{ asset('uploads/images/lok_nyay/lok2.jpg') }}" alt="Community education and awareness workshop" loading="lazy" decoding="async">
                <div class="pf-about-panel"><strong>People first.</strong> Listening, learning and working together.</div>
            </div>
            <div class="pf-about-copy" data-animate>
                <span class="pf-eyebrow">Who we are</span>
                <h2 class="pf-title" id="pf-about-title">Compassion in action. Change that endures.</h2>
                <p class="pf-copy">Pyare Foundation is dedicated to strengthening communities through practical initiatives in health, education and social development.</p>
                <p class="pf-copy">Our work connects awareness with action, with a special commitment to the wellbeing and empowerment of women and underserved communities.</p>
                <div class="pf-values">
                    <div class="pf-value"><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Community-led action</div>
                    <div class="pf-value"><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Dignity and inclusion</div>
                    <div class="pf-value"><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Long-term commitment</div>
                    <div class="pf-value"><i class="fa-solid fa-circle-check" aria-hidden="true"></i> Meaningful partnerships</div>
                </div>
                <a href="{{ route('about-organisation') }}" class="pf-btn pf-btn-primary">Discover our story <span aria-hidden="true">↗</span></a>
            </div>
        </div>
    </section>

    <section class="pf-section pf-focus" aria-labelledby="pf-focus-title">
        <div class="pf-wrap">
            <div class="pf-section-head" data-animate>
                <div><span class="pf-eyebrow">Our areas of impact</span><h2 class="pf-title" id="pf-focus-title">Where compassion<br>meets purpose.</h2></div>
                <p class="pf-copy">We focus on interconnected needs, helping build resilient, informed and empowered communities.</p>
            </div>
            <div class="pf-focus-grid">
                <article class="pf-focus-card" data-animate>
                    <span class="pf-focus-num">01 / HEALTH</span><div class="pf-focus-icon"><i class="fa-solid fa-heart-pulse" aria-hidden="true"></i></div>
                    <h3>Women's health & wellbeing</h3>
                    <p>Advancing health awareness, menstrual hygiene, preventive care and access to essential information.</p>
                    <a href="{{ route('our-project.female-health-campaign') }}">Discover the initiatives &nbsp;→</a>
                </article>
                <article class="pf-focus-card" data-animate>
                    <span class="pf-focus-num">02 / EDUCATION</span><div class="pf-focus-icon"><i class="fa-solid fa-book-open" aria-hidden="true"></i></div>
                    <h3>Education & awareness</h3>
                    <p>Supporting informed choices through workshops, learning opportunities and community outreach.</p>
                    <a href="{{ route('our-project') }}">Discover the initiatives &nbsp;→</a>
                </article>
                <article class="pf-focus-card" data-animate>
                    <span class="pf-focus-num">03 / EMPOWERMENT</span><div class="pf-focus-icon"><i class="fa-solid fa-hand-holding-heart" aria-hidden="true"></i></div>
                    <h3>Community empowerment</h3>
                    <p>Creating stronger support systems and opportunities for people to participate in their own progress.</p>
                    <a href="{{ route('our-project.women-employment') }}">Discover the initiatives &nbsp;→</a>
                </article>
            </div>
        </div>
    </section>

    <section class="pf-section pf-projects" aria-labelledby="pf-projects-title">
        <div class="pf-wrap">
            <div class="pf-section-head" data-animate>
                <div><span class="pf-eyebrow">Stories of action</span><h2 class="pf-title" id="pf-projects-title">Our work on the ground.</h2></div>
                <a class="pf-btn pf-btn-ghost" href="{{ route('our-project') }}">View all projects <span aria-hidden="true">↗</span></a>
            </div>
            <div class="pf-projects-grid">
                @forelse(($features ?? collect())->take(3) as $feature)
                    <article class="pf-project" data-animate>
                        <div class="pf-project-photo"><img src="{{ asset('uploads/feature/' . $feature->attach) }}" alt="{{ $feature->title }}" loading="lazy" decoding="async"></div>
                        <div class="pf-project-body">
                            <span class="pf-project-tag">Featured initiative</span>
                            <h3>{{ $feature->title }}</h3>
                            <p>{{ \Illuminate\Support\Str::limit(strip_tags($feature->description), 145) }}</p>
                            <div class="pf-project-links">
                                <a href="{{ $feature->button_link ?: route('our-project') }}">Read the story &nbsp;→</a>
                                <a href="{{ route('donation-page') }}">Support this work ↗</a>
                            </div>
                        </div>
                    </article>
                @empty
                    <article class="pf-project" data-animate>
                        <div class="pf-project-photo"><img src="{{ asset('uploads/hero/banner6.jpeg') }}" alt="Project Bhairavi community health event" loading="lazy"></div>
                        <div class="pf-project-body"><span class="pf-project-tag">Community health</span><h3>Project Bhairavi</h3><p>Supporting women's wellbeing through health awareness, menstrual hygiene education and community engagement.</p><div class="pf-project-links"><a href="{{ route('our-project.project-bhairavi') }}">Read the story →</a><a href="{{ route('donation-page') }}">Support this work ↗</a></div></div>
                    </article>
                    <article class="pf-project" data-animate>
                        <div class="pf-project-photo"><img src="{{ asset('uploads/images/lok_nyay/lok2.jpg') }}" alt="Legal awareness workshop" loading="lazy"></div>
                        <div class="pf-project-body"><span class="pf-project-tag">Rights & awareness</span><h3>Lok Nyay Seva Kendra</h3><p>Helping communities understand rights, access legal information and participate in awareness programmes.</p><div class="pf-project-links"><a href="{{ route('our-project.lok-nyay-seva-kendra') }}">Read the story →</a><a href="{{ route('donation-page') }}">Support this work ↗</a></div></div>
                    </article>
                    <article class="pf-project" data-animate>
                        <div class="pf-project-photo"><img src="{{ asset('uploads/hero/Banner-5.webp') }}" alt="Female health camp programme" loading="lazy"></div>
                        <div class="pf-project-body"><span class="pf-project-tag">Preventive healthcare</span><h3>Female Health Camps</h3><p>Bringing health information and supportive care closer to women through dedicated community initiatives.</p><div class="pf-project-links"><a href="{{ route('our-project.female-health-campaign') }}">Read the story →</a><a href="{{ route('donation-page') }}">Support this work ↗</a></div></div>
                    </article>
                @endforelse
            </div>
        </div>
    </section>

    <section class="pf-cta" aria-labelledby="pf-cta-title">
        <div class="pf-wrap pf-cta-inner">
            <div data-animate><span class="pf-eyebrow">Be part of the journey</span><h2 id="pf-cta-title">A better tomorrow begins with what we do today.</h2></div>
            <div class="pf-cta-actions" data-animate>
                <a class="pf-btn pf-btn-light" href="{{ route('donation-page') }}">Make a donation ↗</a>
                <a class="pf-btn pf-btn-ghost" href="{{ route('volunteer-member') }}">Become a volunteer →</a>
            </div>
        </div>
    </section>
</div>
@endsection
