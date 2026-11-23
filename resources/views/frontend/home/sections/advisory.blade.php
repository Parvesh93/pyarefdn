{{-- Advisory Board: dashboard-driven members preserved, redesigned presentation only. --}}
<section class="pf-advisory-section" aria-labelledby="pf-advisory-title">
  <div class="pf-advisory-container">
    <div class="pf-advisory-heading" data-animate>
      <span class="pf-advisory-eyebrow"><span class="pf-advisory-dot" aria-hidden="true"></span> THE PEOPLE WHO GUIDE US</span>
      <h2 id="pf-advisory-title">ADVISORY <span>BOARD</span></h2>
    </div>

    @isset($advisories)
    <div class="pf-advisory-slider-wrap">
      <div class="swiper advisorySwiper pf-advisory-swiper">
        <div class="swiper-wrapper">
          @foreach($advisories as $advisory)
          <div class="swiper-slide">
            <article class="pf-advisory-card">
              <div class="pf-advisory-photo" style="--pf-image:url(&quot;{{ asset('uploads/advisory/'.$advisory->attach) }}&quot;)">
                <img src="{{ asset('uploads/advisory/'.$advisory->attach) }}" alt="{{ $advisory->name }}" loading="lazy" decoding="async">
              </div>
              <div class="pf-advisory-info">
                <div class="pf-advisory-rule" aria-hidden="true"></div>
                <h3>{{ $advisory->name }}</h3>
                <p class="pf-advisory-designation">{{ $advisory->designation }}</p>
                <p class="pf-advisory-organization">{{ $advisory->organization }}</p>
              </div>
            </article>
          </div>
          @endforeach
        </div>
      </div>
      <div class="pf-advisory-nav" aria-label="Advisory board carousel controls">
        <button type="button" class="swiper-button-prev-custom-adviser pf-advisory-nav-btn" aria-label="Previous advisory member">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" aria-hidden="true"><path d="m14 6-6 6 6 6" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"/></svg>
        </button>
        <button type="button" class="swiper-button-next-custom-adviser pf-advisory-nav-btn" aria-label="Next advisory member">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" aria-hidden="true"><path d="m10 6 6 6-6 6" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"/></svg>
        </button>
      </div>
    </div>
    @endisset
  </div>
</section>
<style>
/* Advisory component styling - independent of other homepage carousels. */
.pf-refined section.pf-advisory-section{background:#fff!important;padding:86px 0 84px!important;margin:0!important;overflow:hidden;color:#16163f}
.pf-refined .pf-advisory-section .pf-advisory-container{max-width:1440px!important;width:100%;padding:0 clamp(20px,3vw,52px)!important;margin:0 auto}
.pf-refined .pf-advisory-section .pf-advisory-heading{display:flex;align-items:center;flex-direction:column;text-align:center;gap:13px;margin-bottom:34px}
.pf-refined .pf-advisory-section .pf-advisory-eyebrow{display:flex;justify-content:center;align-items:center;gap:9px;font-size:11px;font-weight:800;letter-spacing:.16em;color:#e8612b}
.pf-refined .pf-advisory-section .pf-advisory-dot{width:8px;height:8px;background:#f46226;border-radius:50%}
.pf-refined .pf-advisory-section .pf-advisory-heading h2{color:#16163f!important;font-size:clamp(29px,3.3vw,45px)!important;line-height:1.2!important;font-weight:800!important;letter-spacing:-.04em;margin:0!important}
.pf-refined .pf-advisory-section .pf-advisory-heading h2 span{color:#f46226!important}
.pf-refined .pf-advisory-section .pf-advisory-swiper{padding:0 1px 8px!important;overflow:hidden}
.pf-refined .pf-advisory-section .pf-advisory-swiper .swiper-wrapper{align-items:stretch}
.pf-refined .pf-advisory-section .pf-advisory-swiper .swiper-slide{height:auto!important;display:flex}
.pf-refined .pf-advisory-section .pf-advisory-card{width:100%;height:100%;overflow:hidden;display:flex;flex-direction:column;border:1px solid #ece5e1;background:#fff;border-radius:10px;box-shadow:0 7px 24px rgba(22,22,63,.045);transition:box-shadow .25s,transform .25s}
.pf-refined .pf-advisory-section .pf-advisory-card:hover{transform:translateY(-3px);box-shadow:0 17px 36px rgba(22,22,63,.09)}
.pf-refined .pf-advisory-section .pf-advisory-photo{position:relative;height:330px;overflow:hidden;background:#f6f1ec;flex:none}
.pf-refined .pf-advisory-section .pf-advisory-photo img{display:block;width:100%;height:100%!important;object-fit:contain!important;object-position:center center!important;opacity:1!important;filter:none!important;transition:none}
.pf-refined .pf-advisory-section .pf-advisory-card:hover .pf-advisory-photo img{transform:none!important}
.pf-refined .pf-advisory-section .pf-advisory-info{display:flex;flex-direction:column;flex:1;padding:23px 22px 25px;min-width:0}
.pf-refined .pf-advisory-section .pf-advisory-rule{width:35px;height:3px;border-radius:2px;background:#f46226;margin-bottom:13px}
.pf-refined .pf-advisory-section .pf-advisory-info h3{font-size:17px!important;font-weight:800;letter-spacing:-.025em;color:#16163f;line-height:1.4;margin:0 0 7px!important}
.pf-refined .pf-advisory-section .pf-advisory-info p{margin:0!important;line-height:1.55!important;text-align:left!important}
.pf-refined .pf-advisory-section .pf-advisory-designation{font-size:12px!important;color:#f46226!important;font-weight:700;margin-bottom:7px!important}
.pf-refined .pf-advisory-section .pf-advisory-organization{font-size:12px!important;color:#687077!important}
.pf-refined .pf-advisory-section .pf-advisory-nav{display:flex;justify-content:center;gap:10px;margin-top:24px}
.pf-refined .pf-advisory-section .pf-advisory-nav .pf-advisory-nav-btn{position:static!important;display:grid;place-items:center;width:44px!important;height:44px!important;flex:none;border-radius:50%!important;border:1px solid #efded7!important;background:#fff!important;color:#16163f!important;cursor:pointer;transition:background .2s,color .2s,border-color .2s}
.pf-refined .pf-advisory-section .pf-advisory-nav .pf-advisory-nav-btn:hover{background:#f46226!important;color:#fff!important;border-color:#f46226!important}
.pf-refined .pf-advisory-section .pf-advisory-nav .pf-advisory-nav-btn::after{display:none}
@media(max-width:1023px){.pf-refined .pf-advisory-section .pf-advisory-photo{height:330px}}
@media(max-width:767px){.pf-refined section.pf-advisory-section{padding:64px 0!important}.pf-refined .pf-advisory-section .pf-advisory-container{padding:0 18px!important}.pf-refined .pf-advisory-section .pf-advisory-heading{margin-bottom:25px}.pf-refined .pf-advisory-section .pf-advisory-heading h2{font-size:29px!important}.pf-refined .pf-advisory-section .pf-advisory-photo{height:330px}.pf-refined .pf-advisory-section .pf-advisory-info{padding:22px}}
@media(prefers-reduced-motion:reduce){.pf-refined .pf-advisory-section *{transition:none!important}}

/* Image-led portrait presentation: retain the entire photograph, fill letterboxing
   with a soft extension of the same image instead of leaving empty strips. */
.pf-refined section.pf-advisory-section .pf-advisory-card{border-color:#eee6e3!important;box-shadow:0 5px 22px rgba(22,22,63,.055)!important}
.pf-refined section.pf-advisory-section .pf-advisory-photo{height:340px!important;isolation:isolate;background:#e9e3dd!important;overflow:hidden}
.pf-refined section.pf-advisory-section .pf-advisory-photo::before{content:"";position:absolute;inset:-22px;background-image:var(--pf-image);background-size:cover;background-position:center;filter:blur(23px) brightness(.82);transform:scale(1.06);z-index:-1}
.pf-refined section.pf-advisory-section .pf-advisory-photo img{position:relative;z-index:1;display:block;width:100%!important;height:100%!important;object-fit:contain!important;object-position:center!important;transform:none!important}
.pf-refined section.pf-advisory-section .pf-advisory-info{padding:19px 21px 22px!important}
@media(max-width:767px){.pf-refined section.pf-advisory-section .pf-advisory-photo{height:320px!important}}
</style>