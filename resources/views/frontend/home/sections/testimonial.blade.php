{{-- Testimonials: original dashboard-managed quotes and authors preserved. --}}
<section class="pf-testimonials" aria-labelledby="pf-testimonials-title">
  <div class="pf-testimonials-container">
    <div class="pf-testimonials-heading" data-animate>
      <span class="pf-testimonials-eyebrow"><span class="pf-testimonials-dot" aria-hidden="true"></span> TESTIMONIALS</span>
      <h2 id="pf-testimonials-title">WHAT OTHERS SAY <span>ABOUT US</span></h2>
    </div>
    @isset($testimonials)
    <div class="pf-testimonials-carousel">
      <div class="swiper testimonialSwiper pf-testimonials-swiper">
        <div class="swiper-wrapper">
          @foreach($testimonials as $t)
          <div class="swiper-slide">
            <article class="pf-testimonial-card">
              <div class="pf-testimonial-top" aria-hidden="true">
                <svg class="pf-testimonial-quote" viewBox="0 0 48 48" fill="currentColor"><path d="M21 12c-7 4-11 10-11 19v6h15V22H16c1-4 4-7 8-9l-3-1Zm20 0c-7 4-11 10-11 19v6h15V22h-9c1-4 4-7 8-9l-3-1Z"/></svg>
                <span class="pf-testimonial-top-rule"></span>
              </div>
              <blockquote class="pf-testimonial-quote-text">{!! strip_tags($t->description) !!}</blockquote>
              <div class="pf-testimonial-author">
                <div class="pf-testimonial-avatar">
                  <img src="{{ asset('uploads/testimonial/'.$t->attach) }}" alt="{{ $t->name }}" loading="lazy" decoding="async">
                </div>
                <div class="pf-testimonial-author-info">
                  <h3>{{ $t->name }}</h3>
                  <p>{{ $t->sub_title }}</p>
                </div>
              </div>
            </article>
          </div>
          @endforeach
        </div>
      </div>
      <div class="pf-testimonials-controls" aria-label="Testimonial navigation">
        <button type="button" class="swiper-button-prev-custom-testi" aria-label="Previous testimonial">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path d="m14 6-6 6 6 6" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <button type="button" class="swiper-button-next-custom-testi" aria-label="Next testimonial">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path d="m10 6 6 6-6 6" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
      </div>
    </div>
    @endisset
  </div>
</section>
<style>
/* Testimonials visual system: same dimensions/heading/nav as Projects & Events. */
.pf-refined section.pf-testimonials{padding:94px 0 92px!important;background:#fffaf5!important;color:#16163f;overflow:hidden}
.pf-refined .pf-testimonials .pf-testimonials-container{width:100%;max-width:1440px!important;margin:0 auto;padding:0 clamp(20px,3vw,52px)!important}
.pf-refined .pf-testimonials .pf-testimonials-heading{display:flex;align-items:center;justify-content:center;flex-direction:column;gap:14px;text-align:center;margin-bottom:36px}
.pf-refined .pf-testimonials .pf-testimonials-eyebrow{display:inline-flex;align-items:center;gap:9px;color:#e8612b;font-size:11px;font-weight:800;letter-spacing:.16em}
.pf-refined .pf-testimonials .pf-testimonials-dot{width:8px;height:8px;background:#f46226;border-radius:50%}
.pf-refined .pf-testimonials .pf-testimonials-heading h2{font-size:clamp(29px,3.3vw,45px)!important;line-height:1.2!important;font-weight:800!important;letter-spacing:-.04em;color:#16163f!important;margin:0!important}
.pf-refined .pf-testimonials .pf-testimonials-heading h2 span{color:#f46226!important}
.pf-refined .pf-testimonials .pf-testimonials-swiper{padding:0 1px 8px!important;overflow:hidden}
.pf-refined .pf-testimonials .pf-testimonials-swiper .swiper-wrapper{align-items:stretch}
.pf-refined .pf-testimonials .pf-testimonials-swiper .swiper-slide{height:auto!important;display:flex;min-width:0}
.pf-refined .pf-testimonials .pf-testimonial-card{position:relative;width:100%;height:100%;min-height:350px;display:flex;flex-direction:column;padding:29px 29px 25px;background:#fff!important;border:1px solid #ece5e1!important;border-radius:10px!important;box-shadow:0 7px 25px rgba(28,20,35,.045)!important;transition:transform .25s,box-shadow .25s}
.pf-refined .pf-testimonials .pf-testimonial-card:hover{transform:translateY(-3px);box-shadow:0 19px 40px rgba(28,20,35,.08)!important}
.pf-refined .pf-testimonials .pf-testimonial-card::before{content:"";position:absolute;inset:0 auto 0 0;width:3px;border-radius:10px 0 0 10px;background:#f46226}
.pf-refined .pf-testimonials .pf-testimonial-top{display:flex;align-items:center;justify-content:space-between;height:32px;margin-bottom:23px}
.pf-refined .pf-testimonials .pf-testimonial-quote{width:39px;height:39px;color:#f46226;opacity:.9}
.pf-refined .pf-testimonials .pf-testimonial-top-rule{width:52px;height:1px;background:#ecd7cc}
.pf-refined .pf-testimonials blockquote.pf-testimonial-quote-text{margin:0 0 29px;padding:0;border:0;flex:1;font-size:14px!important;line-height:1.85!important;color:#454756!important;font-weight:400;display:-webkit-box;-webkit-line-clamp:7;-webkit-box-orient:vertical;overflow:hidden}
.pf-refined .pf-testimonials .pf-testimonial-author{display:flex;align-items:center;gap:14px;padding-top:19px;border-top:1px solid #ede8e5;margin-top:auto;min-width:0}
.pf-refined .pf-testimonials .pf-testimonial-avatar{width:58px;height:58px;flex:none;border-radius:50%;overflow:hidden;background:#fff3ec;border:2px solid #ffe4d4}
.pf-refined .pf-testimonials .pf-testimonial-avatar img{display:block;width:100%!important;height:100%!important;object-fit:cover;border:0!important;border-radius:50%!important}
.pf-refined .pf-testimonials .pf-testimonial-author-info{min-width:0}
.pf-refined .pf-testimonials .pf-testimonial-author-info h3{font-size:15px!important;font-weight:800!important;color:#16163f!important;line-height:1.4;margin:0 0 3px!important}
.pf-refined .pf-testimonials .pf-testimonial-author-info p{font-size:12px!important;color:#e8612b!important;line-height:1.45!important;margin:0!important;font-weight:600}
.pf-refined .pf-testimonials .pf-testimonials-controls{display:flex;align-items:center;justify-content:center;gap:10px;margin-top:24px}
.pf-refined .pf-testimonials .pf-testimonials-controls button{position:static!important;display:grid;place-items:center;width:44px!important;height:44px!important;min-width:44px;flex:none;border:1px solid #efded7!important;border-radius:50%!important;background:#fff!important;color:#16163f!important;cursor:pointer;transition:background .2s,color .2s,border-color .2s}
.pf-refined .pf-testimonials .pf-testimonials-controls button:hover{background:#f46226!important;color:#fff!important;border-color:#f46226!important}
@media(max-width:767px){.pf-refined section.pf-testimonials{padding:64px 0!important}.pf-refined .pf-testimonials .pf-testimonials-container{padding:0 18px!important}.pf-refined .pf-testimonials .pf-testimonials-heading{margin-bottom:25px}.pf-refined .pf-testimonials .pf-testimonials-heading h2{font-size:29px!important}.pf-refined .pf-testimonials .pf-testimonial-card{padding:25px;min-height:330px}}
@media(prefers-reduced-motion:reduce){.pf-refined .pf-testimonials *{transition:none!important}}
</style>