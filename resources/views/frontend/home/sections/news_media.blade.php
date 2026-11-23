{{-- News & Media: original CMS uploads and Fancybox gallery preserved. --}}
<section class="pf-news-section" aria-labelledby="pf-news-title">
  <div class="pf-news-container">
    <div class="pf-news-heading" data-animate>
      <span class="pf-news-eyebrow"><span class="pf-news-dot" aria-hidden="true"></span> OUR WORK IN THE SPOTLIGHT</span>
      <h2 id="pf-news-title">IN NEWS & <span>MEDIA</span></h2>
    </div>

    @isset($news)
      <div class="pf-news-carousel">
        <div class="swiper pf-news-swiper">
          <div class="swiper-wrapper">
            @foreach ($news as $new)
              <div class="swiper-slide">
                <article class="pf-news-card">
                  <a class="pf-news-image-link"
                     href="{{ asset('uploads/news/' . $new->attach) }}"
                     data-fancybox="news-gallery"
                     data-caption="{{ $new->title }}"
                     aria-label="View {{ $new->title }} in full size">
                    <span class="pf-news-image-frame" style="--pf-image:url(&quot;{{ asset('uploads/news/' . $new->attach) }}&quot;)">
                      <img src="{{ asset('uploads/news/' . $new->attach) }}"
                           alt="{{ $new->title }}" loading="lazy" decoding="async">
                    </span>
                    <span class="pf-news-zoom" aria-hidden="true">
                      <svg viewBox="0 0 24 24" width="17" height="17" fill="none" stroke="currentColor">
                        <path d="M14 4h6v6M10 14 20 4M20 14v6H4V4h6" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </span>
                  </a>
                  <div class="pf-news-card-footer">
                    <span class="pf-news-card-category">PRESS COVERAGE</span>
                    <p class="pf-news-card-title">{{ $new->title }}</p>
                  </div>
                </article>
              </div>
            @endforeach
          </div>
        </div>

        <div class="pf-news-controls" aria-label="News and media carousel navigation">
          <button type="button" class="pf-news-prev" aria-label="Previous news coverage">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" aria-hidden="true"><path d="m14 6-6 6 6 6" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>
          <button type="button" class="pf-news-next" aria-label="Next news coverage">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" aria-hidden="true"><path d="m10 6 6 6-6 6" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </button>
        </div>
      </div>
    @endisset
  </div>
</section>
<style>
/* Local styles only - preserve original press images without cropping. */
.pf-refined section.pf-news-section{background:#fff8f2!important;padding:90px 0 88px!important;margin:0!important;overflow:hidden;color:#16163f}
.pf-refined .pf-news-section .pf-news-container{max-width:1440px!important;width:100%;margin:0 auto;padding:0 clamp(20px,3vw,52px)!important}
.pf-refined .pf-news-section .pf-news-heading{display:flex;flex-direction:column;align-items:center;justify-content:center;gap:14px;text-align:center;margin-bottom:38px}
.pf-refined .pf-news-section .pf-news-eyebrow{display:inline-flex;align-items:center;gap:9px;color:#e8612b;font-size:11px;font-weight:800;letter-spacing:.16em}
.pf-refined .pf-news-section .pf-news-dot{width:8px;height:8px;flex:none;background:#f46226;border-radius:50%}
.pf-refined .pf-news-section .pf-news-heading h2{font-size:clamp(29px,3.3vw,45px)!important;font-weight:800!important;letter-spacing:-.04em;line-height:1.2!important;margin:0!important;color:#16163f!important}
.pf-refined .pf-news-section .pf-news-heading h2 span{color:#f46226!important}
.pf-refined .pf-news-section .pf-news-swiper{overflow:hidden;padding:0 1px 8px}
.pf-refined .pf-news-section .pf-news-swiper .swiper-wrapper{align-items:stretch}
.pf-refined .pf-news-section .pf-news-swiper .swiper-slide{display:flex;height:auto!important}
.pf-refined .pf-news-section .pf-news-card{width:100%;height:100%;min-width:0;display:flex;flex-direction:column;overflow:hidden;background:#fff;border:1px solid #eee4de;border-radius:10px;box-shadow:0 7px 25px rgba(22,22,63,.045);transition:transform .25s,box-shadow .25s}
.pf-refined .pf-news-section .pf-news-card:hover{transform:translateY(-3px);box-shadow:0 17px 36px rgba(22,22,63,.085)}
.pf-refined .pf-news-section .pf-news-image-link{display:block;position:relative;padding:13px;background:#f7f4ef;text-decoration:none;flex:none}
.pf-refined .pf-news-section .pf-news-image-frame{display:flex;align-items:center;justify-content:center;width:100%;height:330px;overflow:hidden;border-radius:5px;background:#fff;box-shadow:0 2px 12px rgba(16,16,30,.07)}
.pf-refined .pf-news-section .pf-news-image-frame img{display:block;max-width:100%!important;max-height:100%!important;width:100%!important;height:100%!important;object-fit:contain!important;object-position:center!important;border:0!important;border-radius:0!important;box-shadow:none!important;filter:none!important;transition:none!important}
.pf-refined .pf-news-section .pf-news-zoom{position:absolute;right:22px;bottom:22px;display:grid;place-items:center;width:34px;height:34px;border-radius:5px;background:#fff;color:#16163f;border:1px solid #eee2db;box-shadow:0 3px 12px #16163f14;transition:background .2s,color .2s}
.pf-refined .pf-news-section .pf-news-image-link:hover .pf-news-zoom{background:#f46226;color:#fff}
.pf-refined .pf-news-section .pf-news-card-footer{flex:1;display:flex;flex-direction:column;gap:7px;padding:17px 19px 21px}
.pf-refined .pf-news-section .pf-news-card-category{font-size:10px;letter-spacing:.13em;font-weight:800;color:#f46226}
.pf-refined .pf-news-section .pf-news-card-title{font-size:13px!important;line-height:1.55!important;font-weight:700;color:#16163f;margin:0!important;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2;overflow:hidden}
.pf-refined .pf-news-section .pf-news-controls{display:flex;justify-content:center;gap:10px;margin-top:25px}
.pf-refined .pf-news-section .pf-news-controls button{display:grid;place-items:center;width:44px;height:44px;flex:none;border:1px solid #efded7;border-radius:50%;background:#fff;color:#16163f;cursor:pointer;transition:background .2s,color .2s,border-color .2s}
.pf-refined .pf-news-section .pf-news-controls button:hover{background:#f46226;color:#fff;border-color:#f46226}
.pf-refined .pf-news-section .pf-news-controls button.swiper-button-disabled{opacity:.4;cursor:default}
@media(max-width:1023px){.pf-refined .pf-news-section .pf-news-image-frame{height:325px}}
@media(max-width:767px){.pf-refined section.pf-news-section{padding:65px 0!important}.pf-refined .pf-news-section .pf-news-container{padding:0 18px!important}.pf-refined .pf-news-section .pf-news-heading{margin-bottom:27px}.pf-refined .pf-news-section .pf-news-heading h2{font-size:29px!important}.pf-refined .pf-news-section .pf-news-image-frame{height:360px}}
@media(prefers-reduced-motion:reduce){.pf-refined .pf-news-section *{transition:none!important}}

/* Full-bleed newspaper previews: no nested cream frame or empty white gutters.
   The entire original clipping remains visible above a subtle image-derived backdrop. */
.pf-refined section.pf-news-section .pf-news-image-link{padding:0!important;background:transparent!important;overflow:hidden}
.pf-refined section.pf-news-section .pf-news-image-frame{height:365px!important;position:relative;isolation:isolate;background:#e9e5e2!important;border-radius:0!important;box-shadow:none!important;overflow:hidden}
.pf-refined section.pf-news-section .pf-news-image-frame::before{content:"";position:absolute;inset:-24px;background-image:var(--pf-image);background-position:center;background-size:cover;filter:blur(24px) brightness(.92);transform:scale(1.06);z-index:-1}
.pf-refined section.pf-news-section .pf-news-image-frame img{position:relative;z-index:1;width:100%!important;height:100%!important;object-fit:contain!important;object-position:center!important;max-width:100%!important;max-height:100%!important;box-shadow:none!important}
.pf-refined section.pf-news-section .pf-news-zoom{right:14px;bottom:14px}
.pf-refined section.pf-news-section .pf-news-card-footer{padding:14px 18px 17px!important}
@media(max-width:767px){.pf-refined section.pf-news-section .pf-news-image-frame{height:355px!important}}
</style>
<script>
document.addEventListener('DOMContentLoaded', function () {
  var carousel = document.querySelector('.pf-news-swiper');
  if (carousel && typeof Swiper !== 'undefined' && !carousel.swiper) {
    new Swiper(carousel, {
      slidesPerView: 1.15,
      spaceBetween: 16,
      watchOverflow: true,
      breakpoints: {
        0: { slidesPerView: 1.15, spaceBetween: 16 },
        640: { slidesPerView: 2, spaceBetween: 20 },
        1024: { slidesPerView: 3, spaceBetween: 22 }
      },
      navigation: { nextEl: '.pf-news-next', prevEl: '.pf-news-prev' }
    });
  }
  if (typeof Fancybox !== 'undefined' && typeof Fancybox.bind === 'function') {
    Fancybox.bind('[data-fancybox="news-gallery"]', {
      contentClick: 'toggleZoom',
      dragToClose: true
    });
  }
});
</script>