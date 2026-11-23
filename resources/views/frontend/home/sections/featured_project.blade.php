{{-- Featured projects: original CMS-driven content, images, links and Swiper retained. --}}
<section class="pf-projects-section" aria-labelledby="pf-projects-title">
  <div class="pf-projects-container">
    <div class="pf-projects-heading" data-animate>
      <div class="pf-projects-heading-copy">
        <span class="pf-projects-eyebrow"><span class="pf-projects-marker"></span> MAKING A DIFFERENCE</span>
        <h2 id="pf-projects-title">OUR FEATURED <span>PROJECTS</span></h2>
      </div>
      <a href="{{ route('our-project') }}" class="pf-projects-all-link">
        Explore All Projects <span aria-hidden="true">↗</span>
      </a>
    </div>

    @isset($features)
      <div class="pf-projects-slider-wrap">
        <div class="swiper featuredSwiper pf-projects-swiper">
          <div class="swiper-wrapper">
            @foreach($features as $feature)
              <div class="swiper-slide">
                <article class="pf-project-card">
                  <div class="pf-project-media">
                    <img src="{{ asset('uploads/feature/'.$feature->attach) }}"
                         alt="{{ $feature->title }}" loading="lazy" decoding="async">
                    <span class="pf-project-media-tag">PYARE FOUNDATION</span>
                  </div>
                  <div class="pf-project-content">
                    <h3>{{ $feature->title }}</h3>
                    <p>{{ $feature->description }}</p>
                    <div class="pf-project-actions">
                      <a class="pf-project-read" href="{{ $feature->button_link }}">
                        {{ $feature->button_more ?? 'READ MORE' }}
                        <span aria-hidden="true">↗</span>
                      </a>
                      <a class="pf-project-donate" href="{{ route('donation-page') }}">
                        DONATE NOW <span aria-hidden="true">↗</span>
                      </a>
                    </div>
                  </div>
                </article>
              </div>
            @endforeach
          </div>
        </div>
        <div class="pf-projects-nav" aria-label="Featured project navigation">
          <button type="button" class="swiper-button-prev-custom-feature pf-projects-nav-btn" aria-label="Previous featured project">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" width="18" height="18" aria-hidden="true"><path d="m14 6-6 6 6 6" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"/></svg>
          </button>
          <button type="button" class="swiper-button-next-custom-feature pf-projects-nav-btn" aria-label="Next featured project">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" width="18" height="18" aria-hidden="true"><path d="m10 6 6 6-6 6" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"/></svg>
          </button>
        </div>
      </div>
    @endisset
  </div>
</section>

<style>
/* Component-scoped overrides intentionally win over previous homepage card rules. */
.pf-refined .pf-projects-section{background:#fffaf5!important;padding:94px 0 92px!important}
.pf-refined .pf-projects-section .pf-projects-container{max-width:1440px!important;width:100%;padding:0 clamp(20px,3vw,52px)!important;margin:0 auto}
.pf-refined .pf-projects-section .pf-projects-heading{display:flex;align-items:flex-end;justify-content:space-between;gap:26px;margin-bottom:34px}
.pf-refined .pf-projects-section .pf-projects-eyebrow{display:flex;align-items:center;gap:9px;font-size:11px;letter-spacing:.16em;color:#e8612b;font-weight:800;margin-bottom:13px}
.pf-refined .pf-projects-section .pf-projects-marker{width:8px;height:8px;border-radius:50%;background:#f46226}
.pf-refined .pf-projects-section .pf-projects-heading h2{font-size:clamp(29px,3.3vw,45px)!important;line-height:1.2!important;color:#16163f;margin:0!important;font-weight:800!important;letter-spacing:-.04em}
.pf-refined .pf-projects-section .pf-projects-heading h2 span{color:#f46226!important}
.pf-refined .pf-projects-section .pf-projects-all-link{display:inline-flex;gap:17px;align-items:center;padding:11px 0 8px!important;color:#16163f!important;background:none!important;font-weight:800;font-size:13px;text-decoration:none;border-bottom:2px solid #f46226;white-space:nowrap;border-radius:0!important}
.pf-refined .pf-projects-section .pf-projects-all-link span{font-size:19px;color:#f46226;transition:transform .2s}
.pf-refined .pf-projects-section .pf-projects-all-link:hover span{transform:translate(3px,-3px)}
.pf-refined .pf-projects-section .pf-projects-slider-wrap{position:relative}
.pf-refined .pf-projects-section .pf-projects-swiper{padding:0 0 8px!important;overflow:hidden}
.pf-refined .pf-projects-section .pf-projects-swiper .swiper-wrapper{align-items:stretch}
.pf-refined .pf-projects-section .pf-projects-swiper .swiper-slide{height:auto!important;display:flex}
.pf-refined .pf-projects-section .pf-project-card{height:100%!important;min-height:100%;width:100%;display:flex!important;flex-direction:column!important;overflow:hidden;border-radius:10px!important;background:#fff;border:1px solid #ece5e1!important;box-shadow:0 7px 25px rgba(28,20,35,.045)!important;transition:box-shadow .3s,transform .3s}
.pf-refined .pf-projects-section .pf-project-card:hover{transform:translateY(-4px);box-shadow:0 20px 40px rgba(28,20,35,.085)!important}
.pf-refined .pf-projects-section .pf-project-media{position:relative;width:100%;height:242px;aspect-ratio:auto!important;flex:none;overflow:hidden}
.pf-refined .pf-projects-section .pf-project-media:after{content:"";position:absolute;inset:50% 0 0;background:linear-gradient(transparent,rgba(8,10,24,.28));pointer-events:none}
.pf-refined .pf-projects-section .pf-project-media img{width:100%;height:100%;object-fit:cover;transition:transform .45s ease}
.pf-refined .pf-projects-section .pf-project-card:hover .pf-project-media img{transform:scale(1.045)}
.pf-refined .pf-projects-section .pf-project-media-tag{position:absolute;z-index:1;bottom:16px;left:17px;padding:8px 11px;border-radius:3px;background:rgba(255,255,255,.94);color:#16163f;font-size:9px;font-weight:800;letter-spacing:.12em}
.pf-refined .pf-projects-section .pf-project-content{padding:25px 25px 23px!important;display:flex;flex-direction:column;flex:1;min-width:0;text-align:left!important}
.pf-refined .pf-projects-section .pf-project-content h3{font-size:clamp(18px,1.5vw,22px)!important;line-height:1.42!important;color:#16163f!important;font-weight:800!important;letter-spacing:-.03em;margin:0 0 12px;min-height:0}
.pf-refined .pf-projects-section .pf-project-content p{font-size:13px!important;line-height:1.8!important;color:#66716d!important;margin:0 0 25px!important;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:4;overflow:hidden;text-align:left}
.pf-refined .pf-projects-section .pf-project-actions{display:flex;align-items:center;justify-content:space-between;gap:12px;width:100%;padding-top:17px;margin-top:auto;border-top:1px solid #ece9e5}
.pf-refined .pf-projects-section .pf-project-actions a{display:inline-flex!important;align-items:center;justify-content:center;gap:8px;min-height:43px;font-size:11px!important;font-weight:800!important;letter-spacing:.035em;text-decoration:none;white-space:nowrap;transition:background .2s,color .2s,transform .2s}
.pf-refined .pf-projects-section .pf-project-actions .pf-project-read{color:#16163f!important;background:transparent!important;padding:8px 0!important;border-radius:0!important;flex:0 1 auto}
.pf-refined .pf-projects-section .pf-project-actions .pf-project-read:hover{color:#f46226!important}
.pf-refined .pf-projects-section .pf-project-actions .pf-project-donate{background:#f46226!important;color:#fff!important;padding:11px 17px!important;border-radius:5px!important;flex:0 0 auto}
.pf-refined .pf-projects-section .pf-project-actions .pf-project-donate:hover{background:#d94f1b!important}
.pf-refined .pf-projects-section .pf-project-actions a span{font-size:17px;line-height:1}
.pf-refined .pf-projects-section .pf-projects-nav{display:flex;justify-content:center;gap:10px;margin-top:24px}
.pf-refined .pf-projects-section .pf-projects-nav .pf-projects-nav-btn{position:static!important;display:grid;place-items:center;width:44px!important;height:44px!important;min-width:44px;flex:none;border-radius:50%!important;border:1px solid #efded7;background:#fff!important;color:#16163f!important;cursor:pointer;transition:background .2s,border-color .2s,color .2s}
.pf-refined .pf-projects-section .pf-projects-nav .pf-projects-nav-btn:hover{background:#f46226!important;border-color:#f46226;color:#fff!important}
.pf-refined .pf-projects-section .pf-projects-nav .pf-projects-nav-btn::after{display:none}
@media(max-width:1023px){.pf-refined .pf-projects-section .pf-project-media{height:220px}}
@media(max-width:767px){.pf-refined .pf-projects-section{padding:64px 0!important}.pf-refined .pf-projects-section .pf-projects-container{padding:0 18px!important}.pf-refined .pf-projects-section .pf-projects-heading{align-items:flex-start;flex-direction:column;gap:15px;margin-bottom:24px}.pf-refined .pf-projects-section .pf-projects-heading h2{font-size:29px!important}.pf-refined .pf-projects-section .pf-project-media{height:220px}.pf-refined .pf-projects-section .pf-project-content{padding:23px!important}.pf-refined .pf-projects-section .pf-projects-nav{margin-top:18px}}
@media(prefers-reduced-motion:reduce){.pf-refined .pf-projects-section *{transition:none!important}}

/* Correct conflicting homepage selectors and restore centered section heading. */
.pf-refined section.pf-projects-section .pf-projects-heading{
  display:flex!important;flex-direction:column!important;align-items:center!important;
  justify-content:center!important;text-align:center!important;gap:15px!important;
  margin-bottom:36px!important
}
.pf-refined section.pf-projects-section .pf-projects-heading-copy,
.pf-refined section.pf-projects-section .pf-projects-heading h2{
  text-align:center!important;width:100%
}
.pf-refined section.pf-projects-section .pf-projects-eyebrow{
  justify-content:center!important
}
.pf-refined section.pf-projects-section .pf-projects-all-link{
  align-self:center!important;margin:0 auto!important
}
.pf-refined section.pf-projects-section:has(.featuredSwiper) .pf-project-actions{
  display:grid!important;grid-template-columns:minmax(0,1fr) minmax(0,1fr)!important;
  gap:12px!important;align-items:stretch!important
}
.pf-refined section.pf-projects-section:has(.featuredSwiper) .pf-project-actions a.pf-project-read:first-child{
  display:inline-flex!important;justify-content:center!important;align-items:center!important;
  width:100%!important;min-width:0!important;min-height:44px!important;
  padding:11px 13px!important;border:1px solid #16163f!important;border-radius:5px!important;
  color:#16163f!important;background:#fff!important;flex:none!important;
  font-weight:800!important;white-space:nowrap!important;box-shadow:none!important
}
.pf-refined section.pf-projects-section:has(.featuredSwiper) .pf-project-actions a.pf-project-read:first-child:hover{
  background:#16163f!important;color:#fff!important
}
.pf-refined section.pf-projects-section:has(.featuredSwiper) .pf-project-actions a.pf-project-donate:last-child{
  display:inline-flex!important;justify-content:center!important;align-items:center!important;
  width:100%!important;min-width:0!important;min-height:44px!important;
  padding:11px 12px!important;border-radius:5px!important;
  background:#f46226!important;color:#fff!important;flex:none!important;
  white-space:nowrap!important;box-shadow:none!important
}
.pf-refined section.pf-projects-section:has(.featuredSwiper) .pf-project-actions a.pf-project-donate:last-child:hover{
  background:#d84c16!important
}
@media(max-width:380px){
  .pf-refined section.pf-projects-section:has(.featuredSwiper) .pf-project-actions{gap:8px!important}
  .pf-refined section.pf-projects-section:has(.featuredSwiper) .pf-project-actions a{font-size:10px!important;padding-inline:8px!important}
}

</style>
