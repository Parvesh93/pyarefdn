{{-- Recent Events & Programs: original three events, dates, images and links preserved. --}}
<section class="pf-events" aria-labelledby="pf-events-title">
  <div class="pf-events-container">
    <div class="pf-events-heading" data-animate>
      <span class="pf-events-eyebrow"><span class="pf-events-marker" aria-hidden="true"></span> COMMITTED TO HELPING OUR SOCIETY</span>
      <h2 id="pf-events-title">RECENT EVENTS & <span>PROGRAMS</span></h2>
      <a class="pf-events-all" href="{{ route('event-page') }}">ALL EVENTS <span aria-hidden="true">↗</span></a>
    </div>
    <div class="pf-events-slider">
      <div class="swiper pf-events-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <article class="pf-event-card">
              <div class="pf-event-image">
                <img src="{{ asset('uploads/images/events/event41.jpeg') }}" alt="Independence Day Program" loading="lazy" decoding="async">
                <span class="pf-event-date">15th August, 2025</span>
              </div>
              <div class="pf-event-content">
                <h3>Independence Day Program</h3>
                <p>Pyare Foundation organized an Independence Day program at its office, focusing on education, values, and national development. The session highlighted the importance of holistic learning and academic awareness.</p>
                <a class="pf-event-link" href="{{ route('event-page') }}">READ MORE <span aria-hidden="true">↗</span></a>
              </div>
            </article>
          </div>
          <div class="swiper-slide">
            <article class="pf-event-card">
              <div class="pf-event-image">
                <img src="{{ asset('uploads/images/events/event5.jpeg') }}" alt="Gurukul Education & Academic Guidance Session" loading="lazy" decoding="async">
                <span class="pf-event-date">25th November, 2025</span>
              </div>
              <div class="pf-event-content">
                <h3>Gurukul Education & Academic Guidance Session</h3>
                <p>An academic session was conducted in collaboration with Sobhit University to promote Gurukul-based education integrated with science and technology. Dr. Anjali Thapliyal Kaul, President of Pyare Foundation, delivered a keynote address on numerology and academics.</p>
                <a class="pf-event-link" href="{{ route('event-page') }}">READ MORE <span aria-hidden="true">↗</span></a>
              </div>
            </article>
          </div>
          <div class="swiper-slide">
            <article class="pf-event-card">
              <div class="pf-event-image">
                <img src="{{ asset('uploads/images/events/event2.png') }}" alt="Eye Checkup Camp" loading="lazy" decoding="async">
                <span class="pf-event-date">13th September, 2022</span>
              </div>
              <div class="pf-event-content">
                <h3>Eye Checkup Camp</h3>
                <p>On 13th September, 2022, PYARE FOUNDATION collaborated with ICARE EYE HOSPITAL to organize a free eye checkup camp at Dilshad Garden. The event was a huge success</p>
                <a class="pf-event-link" href="{{ route('event-page') }}">READ MORE <span aria-hidden="true">↗</span></a>
              </div>
            </article>
          </div>
        </div>
      </div>
      <div class="pf-events-bottom"><div class="pf-events-controls">
          <button type="button" class="pf-events-prev" aria-label="Previous event"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path d="m14 6-6 6 6 6" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
          <button type="button" class="pf-events-next" aria-label="Next event"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true"><path d="m10 6 6 6-6 6" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
/* Isolated styling and Swiper class: does not affect the featured-project carousel. */
.pf-refined section.pf-events{padding:88px 0 82px!important;background:#fffaf5!important;color:#16163f}
.pf-refined .pf-events .pf-events-container{max-width:1440px!important;margin:0 auto;padding:0 clamp(20px,3vw,52px)!important;width:100%}
.pf-refined .pf-events .pf-events-heading{text-align:center;margin:0 auto 36px}
.pf-refined .pf-events .pf-events-eyebrow{display:block;font-size:11px;font-weight:800;letter-spacing:.18em;color:#f46226;margin-bottom:14px}
.pf-refined .pf-events .pf-events-heading h2{font-size:clamp(30px,3.2vw,43px)!important;line-height:1.22!important;color:#16163f!important;margin:0!important;font-weight:800!important;letter-spacing:-.045em}
.pf-refined .pf-events .pf-events-heading h2 span{color:#f46226!important}
.pf-refined .pf-events .pf-events-heading-rule{height:3px;width:54px;background:#f46226;border-radius:3px;margin:20px auto 0}
.pf-refined .pf-events .pf-events-swiper{overflow:hidden;padding:0 1px 7px}
.pf-refined .pf-events .pf-events-swiper .swiper-wrapper{align-items:stretch}
.pf-refined .pf-events .pf-events-swiper .swiper-slide{display:flex;height:auto!important}
.pf-refined .pf-events .pf-event-card{width:100%;height:100%;display:flex;flex-direction:column;background:white;border:1px solid #ebe5e2;border-radius:10px;overflow:hidden;box-shadow:0 8px 24px rgba(22,22,63,.045);transition:transform .25s,box-shadow .25s}
.pf-refined .pf-events .pf-event-card:hover{transform:translateY(-3px);box-shadow:0 15px 35px rgba(22,22,63,.09)}
.pf-refined .pf-events .pf-event-image{height:228px;position:relative;overflow:hidden;flex:none}
.pf-refined .pf-events .pf-event-image img{height:100%;width:100%;object-fit:cover;display:block;transition:transform .4s}
.pf-refined .pf-events .pf-event-card:hover .pf-event-image img{transform:scale(1.04)}
.pf-refined .pf-events .pf-event-date{position:absolute;left:18px;bottom:16px;border-radius:4px;background:#fff;color:#16163f;padding:9px 13px;box-shadow:0 3px 14px #16163f20;font-size:11px;font-weight:800;white-space:nowrap}
.pf-refined .pf-events .pf-event-content{display:flex;flex-direction:column;flex:1;padding:26px 26px 24px;min-width:0}
.pf-refined .pf-events .pf-event-content h3{font-size:19px!important;line-height:1.4!important;letter-spacing:-.03em;font-weight:800;color:#16163f;margin:0 0 12px}
.pf-refined .pf-events .pf-event-content p{font-size:13px!important;color:#69716f;line-height:1.8!important;margin:0 0 24px!important;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:4;overflow:hidden}
.pf-refined .pf-events .pf-event-link{margin-top:auto!important;padding:17px 0 0!important;border-top:1px solid #ece7e4;display:flex!important;align-items:center;justify-content:space-between;gap:10px;background:transparent!important;color:#16163f!important;font-size:12px!important;font-weight:800;letter-spacing:.035em;line-height:1.5;text-decoration:none;border-radius:0!important}
.pf-refined .pf-events .pf-event-link span{font-size:21px;color:#f46226;transition:transform .2s}
.pf-refined .pf-events .pf-event-link:hover{color:#f46226!important}
.pf-refined .pf-events .pf-event-link:hover span{transform:translate(3px,-3px)}
.pf-refined .pf-events .pf-events-bottom{display:flex;align-items:center;justify-content:space-between;gap:20px;margin-top:24px}
.pf-refined .pf-events .pf-events-all{display:inline-flex!important;align-items:center;gap:15px;color:#16163f!important;background:transparent!important;padding:10px 0!important;border-bottom:2px solid #f46226!important;border-radius:0!important;font-size:12px!important;font-weight:800;letter-spacing:.05em;text-decoration:none}
.pf-refined .pf-events .pf-events-all span{color:#f46226;font-size:18px}
.pf-refined .pf-events .pf-events-controls{display:flex;gap:10px}
.pf-refined .pf-events .pf-events-controls button{display:grid;place-items:center;width:43px;height:43px;flex:none;background:#fff!important;border:1px solid #eeded9;border-radius:50%!important;color:#16163f;cursor:pointer;transition:background .2s,color .2s}
.pf-refined .pf-events .pf-events-controls button:hover{background:#f46226!important;color:#fff;border-color:#f46226}
@media(max-width:767px){.pf-refined section.pf-events{padding:65px 0!important}.pf-refined .pf-events .pf-events-container{padding:0 18px!important}.pf-refined .pf-events .pf-events-heading{margin-bottom:27px}.pf-refined .pf-events .pf-events-heading h2{font-size:29px!important}.pf-refined .pf-events .pf-event-image{height:220px}.pf-refined .pf-events .pf-event-content{padding:22px}.pf-refined .pf-events .pf-event-content h3{font-size:18px!important}}
@media(prefers-reduced-motion:reduce){.pf-refined .pf-events *{transition:none!important}}

/* Shared visual proportions with the Featured Projects section. */
.pf-refined section.pf-events{padding:94px 0 92px!important}
.pf-refined section.pf-events .pf-events-heading{display:flex!important;flex-direction:column!important;align-items:center!important;justify-content:center!important;gap:15px!important;text-align:center!important;margin:0 auto 36px!important}
.pf-refined section.pf-events .pf-events-eyebrow{display:inline-flex!important;align-items:center;justify-content:center;gap:9px;font-size:11px!important;letter-spacing:.16em!important;font-weight:800;color:#e8612b;margin:0!important}
.pf-refined section.pf-events .pf-events-marker{width:8px;height:8px;border-radius:50%;background:#f46226;flex:none}
.pf-refined section.pf-events .pf-events-heading h2{font-size:clamp(29px,3.3vw,45px)!important;line-height:1.2!important;letter-spacing:-.04em!important;margin:0!important}
.pf-refined section.pf-events .pf-events-heading .pf-events-all{display:inline-flex!important;align-items:center;gap:17px;align-self:center;margin:0 auto!important;padding:11px 0 8px!important;border-bottom:2px solid #f46226!important;border-radius:0!important;background:transparent!important;color:#16163f!important;font-size:13px!important;font-weight:800;text-transform:none;letter-spacing:0}
.pf-refined section.pf-events .pf-events-all span{font-size:19px}
.pf-refined section.pf-events .pf-events-slider .pf-event-image{height:242px}
.pf-refined section.pf-events .pf-events-slider .pf-event-card{border:1px solid #ece5e1!important;box-shadow:0 7px 25px rgba(28,20,35,.045)!important}
.pf-refined section.pf-events .pf-events-slider .pf-event-card:hover{transform:translateY(-4px);box-shadow:0 20px 40px rgba(28,20,35,.085)!important}
.pf-refined section.pf-events .pf-events-slider .pf-event-content{padding:25px 25px 23px!important}
.pf-refined section.pf-events .pf-events-slider .pf-event-content h3{font-size:clamp(18px,1.5vw,22px)!important;line-height:1.42!important;margin-bottom:12px}
.pf-refined section.pf-events .pf-events-slider .pf-event-content p{font-size:13px!important;line-height:1.8!important;color:#66716d!important;margin-bottom:25px!important}
.pf-refined section.pf-events .pf-events-slider .pf-event-link{align-self:flex-start!important;width:auto!important;min-width:150px;min-height:44px;justify-content:center!important;gap:12px!important;padding:11px 16px!important;border:1px solid #16163f!important;border-radius:5px!important;background:#fff!important;color:#16163f!important;font-size:11px!important;font-weight:800!important;white-space:nowrap;letter-spacing:.035em}
.pf-refined section.pf-events .pf-events-slider .pf-event-link span{font-size:17px!important;color:inherit!important}
.pf-refined section.pf-events .pf-events-slider .pf-event-link:hover{background:#16163f!important;color:#fff!important}
.pf-refined section.pf-events .pf-events-bottom{justify-content:center!important;margin-top:24px!important}
.pf-refined section.pf-events .pf-events-controls{justify-content:center!important}
.pf-refined section.pf-events .pf-events-controls button{position:static!important;width:44px!important;height:44px!important;min-width:44px;border-radius:50%!important;border:1px solid #efded7!important;background:#fff!important;color:#16163f!important}
.pf-refined section.pf-events .pf-events-controls button:hover{background:#f46226!important;color:#fff!important;border-color:#f46226!important}
@media(max-width:1023px){.pf-refined section.pf-events .pf-events-slider .pf-event-image{height:220px}}
@media(max-width:767px){.pf-refined section.pf-events{padding:64px 0!important}.pf-refined section.pf-events .pf-events-heading{margin-bottom:24px!important}.pf-refined section.pf-events .pf-events-heading h2{font-size:29px!important}.pf-refined section.pf-events .pf-events-slider .pf-event-content{padding:23px!important}}

</style>
<script>
document.addEventListener('DOMContentLoaded', function () {
  if (typeof Swiper === 'undefined') return;
  var container = document.querySelector('.pf-events-swiper');
  if (!container || container.swiper) return;
  new Swiper(container, {
    slidesPerView: 1,
    spaceBetween: 20,
    watchOverflow: true,
    breakpoints: {
      640: { slidesPerView: 2 },
      1024: { slidesPerView: 3 }
    },
    navigation: {
      nextEl: '.pf-events-next',
      prevEl: '.pf-events-prev'
    }
  });
});
</script>