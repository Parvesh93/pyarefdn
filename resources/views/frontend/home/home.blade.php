@extends('frontend.layouts.master')
@section('title', 'Pyare Foundation | Together for a Better Tomorrow')

@section('page_css')
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
.pf-v2{--green:#075746;--deep:#073f34;--gold:#f3b12e;--text:#1b2522;--muted:#65706d;--off:#f7f5f0;font-family:'DM Sans',sans-serif;color:var(--text);overflow:hidden}
.pf-v2 *{box-sizing:border-box}.pf-v2 h1,.pf-v2 h2,.pf-v2 h3,.pf-v2 p{margin-top:0}.pf-v2 h1,.pf-v2 h2,.pf-v2 h3{font-family:'Manrope',sans-serif;letter-spacing:-.045em}.pf-v2 a{text-decoration:none}
.pf-v2 .pf-container{width:min(1170px,calc(100% - 44px));margin:auto}.pf-v2 .pf-kicker{font-size:11px;font-weight:800;text-transform:uppercase;letter-spacing:.14em;color:#ad7920}.pf-v2 .pf-heading{font-size:clamp(30px,3.3vw,45px);line-height:1.2;font-weight:800;color:#162620}.pf-v2 .pf-lead{color:var(--muted);line-height:1.8;font-size:15px}.pf-v2 .pf-button{display:inline-flex;align-items:center;justify-content:center;gap:12px;padding:13px 21px;background:var(--gold);color:#222;min-height:45px;border-radius:5px;font-size:12px;font-weight:800;transition:transform .2s,background .2s}.pf-v2 .pf-button:hover{transform:translateY(-2px);background:#ffc34d;color:#222}.pf-v2 .pf-button-outline{background:transparent;border:1px solid #d8e0dc;color:var(--deep)}.pf-v2 .pf-button-outline:hover{background:#e9f1eb}.pf-v2 .pf-section{padding:86px 0}.pf-v2 .pf-center{text-align:center}.pf-v2 .pf-section-header{margin:0 auto 39px;max-width:580px}.pf-v2 .pf-section-header .pf-heading{margin:10px 0}
.pf-v2 .pf-hero{height:clamp(510px,52vw,675px);position:relative;background:#202722;display:flex;align-items:center;color:white}.pf-v2 .pf-hero>img{width:100%;height:100%;object-fit:cover;position:absolute;inset:0;filter:grayscale(100%)}.pf-v2 .pf-hero::after{content:'';position:absolute;inset:0;background:linear-gradient(90deg,rgba(0,0,0,.79) 0%,rgba(0,0,0,.58) 44%,rgba(0,0,0,.10) 100%)}.pf-v2 .pf-hero .pf-container{position:relative;z-index:1}.pf-v2 .pf-hero-copy{max-width:630px}.pf-v2 .pf-hero .pf-kicker{color:#e9c470}.pf-v2 .pf-hero h1{font-weight:800;font-size:clamp(39px,5.15vw,71px);line-height:1.14;margin:20px 0 19px;color:#fff}.pf-v2 .pf-hero p{max-width:500px;font-size:15px;line-height:1.8;color:#e7e7e7;margin-bottom:29px}.pf-v2 .pf-hero-actions{display:flex;gap:12px;flex-wrap:wrap}.pf-v2 .pf-hero-secondary{background:transparent;color:white;border:1px solid #ffffff9e}.pf-v2 .pf-hero-secondary:hover{background:white;color:#18342d}.pf-v2 .pf-hero-label{position:absolute;bottom:26px;right:max(22px,calc((100vw - 1170px)/2));z-index:2;color:#fff;font-size:11px;letter-spacing:.09em;opacity:.84}
.pf-v2 .pf-about-grid{display:grid;grid-template-columns:1fr 1fr;align-items:center;gap:8%}.pf-v2 .pf-about-photo{position:relative;min-height:460px}.pf-v2 .pf-about-photo img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;border-radius:6px}.pf-v2 .pf-about-photo::after{content:'';position:absolute;inset:17px -17px -17px 17px;border:2px solid #e3b75b;border-radius:6px;z-index:-1}.pf-v2 .pf-about-copy .pf-heading{margin:10px 0 18px}.pf-v2 .pf-about-copy .pf-lead{margin-bottom:19px}.pf-v2 .pf-checks{display:grid;grid-template-columns:1fr 1fr;gap:12px 16px;margin:24px 0 28px}.pf-v2 .pf-checks span{font-size:12px;font-weight:700;color:#2c4840}.pf-v2 .pf-checks i{color:#d19d32;margin-right:6px}.pf-v2 .pf-stat-row{display:grid;grid-template-columns:repeat(4,1fr);gap:22px;padding:55px 0 5px}.pf-v2 .pf-stat{border-right:1px solid #e5eae7;text-align:center}.pf-v2 .pf-stat:last-child{border:0}.pf-v2 .pf-stat b{font-size:36px;font-weight:800;color:var(--deep)}.pf-v2 .pf-stat small{display:block;color:var(--muted);font-size:12px;margin-top:4px}
.pf-v2 .pf-causes{background:#faf9f6}.pf-v2 .pf-cause-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:22px}.pf-v2 .pf-cause{background:#fff;border:1px solid #ecece7;min-width:0;border-radius:6px;overflow:hidden;display:flex;flex-direction:column}.pf-v2 .pf-cause-image{height:215px;overflow:hidden}.pf-v2 .pf-cause-image img{height:100%;width:100%;object-fit:cover;transition:transform .35s}.pf-v2 .pf-cause:hover img{transform:scale(1.045)}.pf-v2 .pf-cause-body{padding:23px;display:flex;flex-direction:column;flex:1}.pf-v2 .pf-cause-body h3{font-size:19px;line-height:1.4;font-weight:800;margin:10px 0}.pf-v2 .pf-cause-body p{font-size:12px;color:var(--muted);line-height:1.8;margin-bottom:20px}.pf-v2 .pf-cause-rule{height:4px;background:#e9ede9;border-radius:4px;margin-top:auto;overflow:hidden}.pf-v2 .pf-cause-rule::before{content:'';display:block;width:35%;height:100%;background:#d5ac54}.pf-v2 .pf-cause-bottom{display:flex;align-items:center;justify-content:space-between;gap:10px;padding-top:17px}.pf-v2 .pf-cause-bottom a{font-size:12px;font-weight:800;color:var(--green)}.pf-v2 .pf-cause-bottom a:last-child{color:#a87823}
.pf-v2 .pf-gallery{display:grid;grid-template-columns:repeat(5,minmax(0,1fr));gap:9px;margin-top:10px}.pf-v2 .pf-gallery img{height:190px;width:100%;object-fit:cover}
.pf-v2 .pf-values{background:#f7f2e8}.pf-v2 .pf-value-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px}.pf-v2 .pf-value{background:white;padding:30px 30px 27px;border-radius:6px;border:1px solid #ece8df}.pf-v2 .pf-value i{font-size:24px;color:#dda52b}.pf-v2 .pf-value h3{font-size:17px;font-weight:800;margin:18px 0 9px}.pf-v2 .pf-value p{font-size:13px;line-height:1.8;color:var(--muted);margin-bottom:0}
.pf-v2 .pf-event-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:23px}.pf-v2 .pf-event{border:1px solid #e6eae6;border-radius:6px;overflow:hidden;background:#fff}.pf-v2 .pf-event-picture{position:relative}.pf-v2 .pf-event img{width:100%;height:215px;object-fit:cover}.pf-v2 .pf-event-date{position:absolute;top:13px;right:13px;background:#f3b12e;color:#19241d;padding:9px 12px;border-radius:4px;text-align:center;font-size:11px;font-weight:800}.pf-v2 .pf-event-body{padding:21px}.pf-v2 .pf-event h3{font-size:17px;line-height:1.5;font-weight:800;margin-bottom:12px}.pf-v2 .pf-event a{font-size:12px;font-weight:800;color:var(--green)}
.pf-v2 .pf-join{background:#075746;color:#fff;position:relative;padding:64px 0;overflow:hidden}.pf-v2 .pf-join::after{content:'';position:absolute;width:360px;height:360px;border:1px solid #ffffff2b;right:-65px;top:-90px;border-radius:50%}.pf-v2 .pf-join-inner{position:relative;z-index:1;display:flex;align-items:center;justify-content:space-between;gap:28px}.pf-v2 .pf-join h2{font-size:clamp(27px,3.2vw,39px);line-height:1.25;font-weight:800;max-width:650px;margin:9px 0 0;color:#fff}.pf-v2 .pf-join .pf-kicker{color:#f1d188}.pf-v2 .pf-join-actions{display:flex;gap:10px;flex-wrap:wrap}.pf-v2 .pf-join .pf-button-outline{border-color:#ffffff80;color:white}.pf-v2 .pf-join .pf-button-outline:hover{color:#075746;background:white}
.pf-v2 .pf-news-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}.pf-v2 .pf-news-card{border:1px solid #ebeee9;border-radius:6px;overflow:hidden;background:white}.pf-v2 .pf-news-card img{width:100%;height:220px;object-fit:cover}.pf-v2 .pf-news-card div{padding:18px}.pf-v2 .pf-news-card h3{font-size:15px;line-height:1.5;font-weight:800}.pf-v2 .pf-news-card a{font-size:12px;font-weight:800;color:var(--green)}
.pf-v2 .pf-section-head-row{display:flex;align-items:end;justify-content:space-between;gap:20px;margin-bottom:32px}.pf-v2 .pf-section-head-row h2{margin:8px 0 0}
@media(min-width:1024px){body:has(.pf-v2)>header,body:has(.pf-v2) header{box-shadow:none}body:has(.pf-v2) header>div{max-width:1280px;margin:auto}body:has(.pf-v2) header img{max-width:210px}body:has(.pf-v2) header nav{gap:0}}
@media(max-width:850px){.pf-v2 .pf-about-grid{gap:5%}.pf-v2 .pf-about-photo{min-height:360px}.pf-v2 .pf-cause-grid,.pf-v2 .pf-event-grid,.pf-v2 .pf-news-grid,.pf-v2 .pf-value-grid{grid-template-columns:repeat(2,minmax(0,1fr))}.pf-v2 .pf-gallery{grid-template-columns:repeat(5,minmax(0,1fr))}.pf-v2 .pf-gallery img{height:140px}}
@media(max-width:640px){.pf-v2 .pf-container{width:calc(100% - 36px)}.pf-v2 .pf-section{padding:60px 0}.pf-v2 .pf-hero{height:590px;align-items:end;padding-bottom:78px}.pf-v2 .pf-hero h1{font-size:clamp(35px,9vw,51px)}.pf-v2 .pf-hero::after{background:linear-gradient(0deg,#000000e6 0%,#0000009e 50%,#00000025 100%)}.pf-v2 .pf-hero>img{object-position:center}.pf-v2 .pf-hero p{font-size:13px}.pf-v2 .pf-hero-label{bottom:18px;right:18px}.pf-v2 .pf-about-grid{grid-template-columns:1fr;gap:38px}.pf-v2 .pf-about-photo{min-height:360px;margin-right:15px}.pf-v2 .pf-checks{gap:11px}.pf-v2 .pf-stat-row{grid-template-columns:repeat(2,1fr);gap:26px 10px;padding:50px 0 0}.pf-v2 .pf-stat:nth-child(2){border:0}.pf-v2 .pf-cause-grid,.pf-v2 .pf-value-grid,.pf-v2 .pf-event-grid,.pf-v2 .pf-news-grid{grid-template-columns:1fr}.pf-v2 .pf-gallery{display:flex;gap:9px;overflow-x:auto;scroll-snap-type:x mandatory;padding-bottom:8px}.pf-v2 .pf-gallery img{flex:0 0 62vw;width:62vw;height:190px;scroll-snap-align:start}.pf-v2 .pf-join-inner{flex-direction:column;align-items:flex-start}.pf-v2 .pf-section-head-row{align-items:start;flex-direction:column}.pf-v2 .pf-cause-image{height:225px}}
@media(prefers-reduced-motion:reduce){.pf-v2 *{transition:none!important;animation:none!important}}
</style>
@endsection

@section('content')
<main class="pf-v2">
    <section class="pf-hero" aria-labelledby="pf-main-title">
        <img src="{{ asset('uploads/hero/banner6.jpeg') }}" alt="Community health and awareness work by Pyare Foundation" fetchpriority="high">
        <div class="pf-container">
            <div class="pf-hero-copy">
                <span class="pf-kicker">Pyare Foundation · Serving communities for over 14 years</span>
                <h1 id="pf-main-title">Together, we can create a brighter tomorrow.</h1>
                <p>Advancing women's health, education and community wellbeing through compassionate, on-ground programmes across India.</p>
                <div class="pf-hero-actions">
                    <a href="{{ route('donation-page') }}" class="pf-button">Donate Now <span aria-hidden="true">↗</span></a>
                    <a href="{{ route('our-project') }}" class="pf-button pf-hero-secondary">Explore Our Work <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
        <span class="pf-hero-label">PEOPLE FIRST · PURPOSE ALWAYS</span>
    </section>

    <section class="pf-section" aria-labelledby="pf-about-title">
        <div class="pf-container">
            <div class="pf-about-grid">
                <div class="pf-about-photo" data-animate>
                    <img src="{{ asset('uploads/hero/Banner-5.webp') }}" alt="Pyare Foundation female health camp" loading="lazy">
                </div>
                <div class="pf-about-copy" data-animate>
                    <span class="pf-kicker">Welcome to Pyare Foundation</span>
                    <h2 id="pf-about-title" class="pf-heading">You can be the hope of others.</h2>
                    <p class="pf-lead">Every community deserves a chance to flourish. At Pyare Foundation, we work to make essential health knowledge, opportunity and support more accessible, especially for women and underserved families.</p>
                    <p class="pf-lead">Our initiatives bring people together around preventive healthcare, education, wellbeing and meaningful social change.</p>
                    <div class="pf-checks">
                        <span><i class="fa-solid fa-circle-check"></i> Women’s wellbeing</span>
                        <span><i class="fa-solid fa-circle-check"></i> Community outreach</span>
                        <span><i class="fa-solid fa-circle-check"></i> Inclusive education</span>
                        <span><i class="fa-solid fa-circle-check"></i> Sustainable impact</span>
                    </div>
                    <a class="pf-button" href="{{ route('about-organization') }}">Discover Our Story <span aria-hidden="true">→</span></a>
                </div>
            </div>
            <div class="pf-stat-row" aria-label="Our focus">
                <div class="pf-stat"><b>14+</b><small>Years of service</small></div>
                <div class="pf-stat"><b>3</b><small>Core focus areas</small></div>
                <div class="pf-stat"><b>CSR</b><small>Community partnerships</small></div>
                <div class="pf-stat"><b>One</b><small>Shared purpose</small></div>
            </div>
        </div>
    </section>

    <section class="pf-section pf-causes" aria-labelledby="pf-causes-title">
        <div class="pf-container">
            <div class="pf-section-header pf-center">
                <span class="pf-kicker">Our programmes</span>
                <h2 class="pf-heading" id="pf-causes-title">Find a cause close to your heart.</h2>
                <p class="pf-lead">Explore initiatives creating awareness, dignity and opportunity on the ground.</p>
            </div>
            <div class="pf-cause-grid">
                @forelse(($features ?? collect())->take(3) as $feature)
                    <article class="pf-cause" data-animate>
                        <div class="pf-cause-image"><img src="{{ asset('uploads/feature/'.$feature->attach) }}" alt="{{ $feature->title }}" loading="lazy"></div>
                        <div class="pf-cause-body">
                            <span class="pf-kicker">Featured project</span>
                            <h3>{{ $feature->title }}</h3>
                            <p>{{ \Illuminate\Support\Str::limit(strip_tags($feature->description), 135) }}</p>
                            <div class="pf-cause-rule" aria-hidden="true"></div>
                            <div class="pf-cause-bottom">
                                <a href="{{ $feature->button_link ?: route('our-project') }}">Learn More →</a>
                                <a href="{{ route('donation-page') }}">Donate Now ↗</a>
                            </div>
                        </div>
                    </article>
                @empty
                    <article class="pf-cause" data-animate>
                        <div class="pf-cause-image"><img src="{{ asset('uploads/hero/banner6.jpeg') }}" alt="Project Bhairavi health awareness programme" loading="lazy"></div>
                        <div class="pf-cause-body"><span class="pf-kicker">Women's health</span><h3>Project Bhairavi</h3><p>Supporting women with health awareness, menstrual hygiene education and community wellbeing initiatives.</p><div class="pf-cause-rule" aria-hidden="true"></div><div class="pf-cause-bottom"><a href="{{ route('our-project.project-bhairavi') }}">Learn More →</a><a href="{{ route('donation-page') }}">Donate Now ↗</a></div></div>
                    </article>
                    <article class="pf-cause" data-animate>
                        <div class="pf-cause-image"><img src="{{ asset('uploads/images/lok_nyay/lok2.jpg') }}" alt="Legal awareness education workshop" loading="lazy"></div>
                        <div class="pf-cause-body"><span class="pf-kicker">Awareness & rights</span><h3>Lok Nyay Seva Kendra</h3><p>Encouraging informed communities through legal literacy and awareness workshops.</p><div class="pf-cause-rule" aria-hidden="true"></div><div class="pf-cause-bottom"><a href="{{ route('our-project.lok-nyay-seva-kendra') }}">Learn More →</a><a href="{{ route('donation-page') }}">Donate Now ↗</a></div></div>
                    </article>
                    <article class="pf-cause" data-animate>
                        <div class="pf-cause-image"><img src="{{ asset('uploads/hero/Banner-5.webp') }}" alt="Female health camp" loading="lazy"></div>
                        <div class="pf-cause-body"><span class="pf-kicker">Preventive care</span><h3>Female Health Camps</h3><p>Making information and preventive health support more accessible to women in communities.</p><div class="pf-cause-rule" aria-hidden="true"></div><div class="pf-cause-bottom"><a href="{{ route('our-project.female-health-campaign') }}">Learn More →</a><a href="{{ route('donation-page') }}">Donate Now ↗</a></div></div>
                    </article>
                @endforelse
            </div>
        </div>
    </section>

    <div class="pf-gallery" aria-label="Moments from our community programmes">
        <img src="{{ asset('uploads/images/events/femaleHealthCamp1.png') }}" alt="Women's health awareness" loading="lazy">
        <img src="{{ asset('uploads/images/events/event41.jpeg') }}" alt="Community event" loading="lazy">
        <img src="{{ asset('uploads/images/events/govindleela1.png') }}" alt="Community programme" loading="lazy">
        <img src="{{ asset('uploads/images/events/event5.jpeg') }}" alt="Education programme" loading="lazy">
        <img src="{{ asset('uploads/images/events/femaleHealthCamp2.png') }}" alt="Health outreach programme" loading="lazy">
    </div>

    <section class="pf-section pf-values" aria-labelledby="pf-values-title">
        <div class="pf-container">
            <div class="pf-section-header pf-center">
                <span class="pf-kicker">Why our work matters</span>
                <h2 class="pf-heading" id="pf-values-title">Rooted in compassion. Driven by purpose.</h2>
            </div>
            <div class="pf-value-grid">
                <div class="pf-value" data-animate><i class="fa-solid fa-hand-holding-heart" aria-hidden="true"></i><h3>Community-first approach</h3><p>We listen to local needs and build programmes around people, with respect and dignity at their centre.</p></div>
                <div class="pf-value" data-animate><i class="fa-solid fa-heart-pulse" aria-hidden="true"></i><h3>Health & wellbeing</h3><p>Accessible health awareness and preventive care can make a lasting difference for families and communities.</p></div>
                <div class="pf-value" data-animate><i class="fa-solid fa-people-group" aria-hidden="true"></i><h3>Meaningful collaboration</h3><p>Working with volunteers, communities and partners helps turn shared concern into practical action.</p></div>
            </div>
        </div>
    </section>

    <section class="pf-section" aria-labelledby="pf-events-title">
        <div class="pf-container">
            <div class="pf-section-header pf-center">
                <span class="pf-kicker">Our activities</span>
                <h2 class="pf-heading" id="pf-events-title">Recent events & programmes</h2>
                <p class="pf-lead">A closer look at the people, activities and conversations shaping our work.</p>
            </div>
            <div class="pf-event-grid">
                <article class="pf-event" data-animate><div class="pf-event-picture"><img src="{{ asset('uploads/images/events/event41.jpeg') }}" alt="Independence Day programme" loading="lazy"><div class="pf-event-date">15 AUG<br>2025</div></div><div class="pf-event-body"><h3>Independence Day Programme</h3><a href="{{ route('event-page') }}">View event →</a></div></article>
                <article class="pf-event" data-animate><div class="pf-event-picture"><img src="{{ asset('uploads/images/events/event5.jpeg') }}" alt="Education and academic guidance event" loading="lazy"><div class="pf-event-date">25 NOV<br>2025</div></div><div class="pf-event-body"><h3>Education & Academic Guidance Session</h3><a href="{{ route('event-page') }}">View event →</a></div></article>
                <article class="pf-event" data-animate><div class="pf-event-picture"><img src="{{ asset('uploads/images/events/First-AID-2.webp') }}" alt="First aid workshop" loading="lazy"><div class="pf-event-date">COMMUNITY<br>CARE</div></div><div class="pf-event-body"><h3>First Aid & Community Awareness</h3><a href="{{ route('event-page') }}">View event →</a></div></article>
            </div>
        </div>
    </section>

    <section class="pf-join" aria-labelledby="pf-join-title">
        <div class="pf-container pf-join-inner">
            <div><span class="pf-kicker">Join our hands</span><h2 id="pf-join-title">Your support can help bring hope to more people.</h2></div>
            <div class="pf-join-actions"><a class="pf-button" href="{{ route('donation-page') }}">Donate Today ↗</a><a class="pf-button pf-button-outline" href="{{ route('volunteer-member') }}">Become a Volunteer →</a></div>
        </div>
    </section>

    @if(isset($news) && $news->count())
    <section class="pf-section pf-causes" aria-labelledby="pf-news-title">
        <div class="pf-container">
            <div class="pf-section-header pf-center"><span class="pf-kicker">Updates & coverage</span><h2 class="pf-heading" id="pf-news-title">In the news & media</h2></div>
            <div class="pf-news-grid">
                @foreach($news->take(3) as $new)
                    <article class="pf-news-card"><a href="{{ asset('uploads/news/'.$new->attach) }}" target="_blank" rel="noopener"><img src="{{ asset('uploads/news/'.$new->attach) }}" alt="{{ $new->title }}" loading="lazy"></a><div><h3>{{ $new->title }}</h3><a href="{{ asset('uploads/news/'.$new->attach) }}" target="_blank" rel="noopener">View coverage →</a></div></article>
                @endforeach
            </div>
        </div>
    </section>
    @endif
</main>
@endsection