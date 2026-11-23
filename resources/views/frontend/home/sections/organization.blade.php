{{-- Join Our Hands: visual redesign only; original copy and destinations retained. --}}
<section class="pf-join-section" aria-labelledby="pf-join-title">
  <div class="pf-join-glow pf-join-glow-one" aria-hidden="true"></div>
  <div class="pf-join-glow pf-join-glow-two" aria-hidden="true"></div>
  <div class="pf-join-container">
    <div class="pf-join-copy" data-animate>
      <p class="pf-join-eyebrow"><span class="pf-join-small-line" aria-hidden="true"></span>Join Our Hands</p>
      <h2 id="pf-join-title">BECOME A PART OF ORGANISATION</h2>
    </div>
    <div class="pf-join-actions" data-animate>
      <a href="{{ route('volunteer-member') }}" class="pf-join-btn pf-join-volunteer">
        <span>BECOME VOLUNTEER</span>
        <svg aria-hidden="true" viewBox="0 0 24 24" width="18" height="18" fill="none"><path d="M5 12h14m-6-6 6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
      <a href="{{ route('annual-member') }}" class="pf-join-btn pf-join-member">
        <span>BECOME ANNUAL MEMBER</span>
        <svg aria-hidden="true" viewBox="0 0 24 24" width="18" height="18" fill="none"><path d="M5 12h14m-6-6 6 6-6 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
    </div>
  </div>
</section>
<style>
.pf-refined section.pf-join-section{position:relative;isolation:isolate;overflow:hidden;background:#16163f!important;color:#fff;padding:76px 0!important}
.pf-refined .pf-join-section .pf-join-container{position:relative;z-index:2;max-width:1440px!important;width:100%;margin:0 auto;padding:0 clamp(20px,3vw,52px)!important;display:grid;grid-template-columns:minmax(0,1fr) auto;align-items:center;gap:clamp(28px,4vw,75px)}
.pf-refined .pf-join-section .pf-join-glow{position:absolute;pointer-events:none;z-index:0;border-radius:50%}
.pf-refined .pf-join-section .pf-join-glow-one{width:440px;height:440px;left:-140px;top:-235px;background:radial-gradient(circle,#49436f66,transparent 68%)}
.pf-refined .pf-join-section .pf-join-glow-two{width:420px;height:420px;right:-155px;bottom:-255px;border:1px solid #ffffff20;box-shadow:0 0 0 50px #ffffff05,0 0 0 100px #ffffff04}
.pf-refined .pf-join-section .pf-join-eyebrow{display:flex;gap:10px;align-items:center;color:#ffb37f!important;font-size:12px!important;font-weight:800;letter-spacing:.14em;text-transform:uppercase;margin:0 0 13px!important}
.pf-refined .pf-join-section .pf-join-small-line{height:2px;width:27px;background:#f46226}
.pf-refined .pf-join-section h2{font-size:clamp(28px,3.2vw,44px)!important;line-height:1.2!important;letter-spacing:-.04em;font-weight:800!important;color:#fff!important;max-width:690px;margin:0!important}
.pf-refined .pf-join-section .pf-join-actions{display:flex;gap:14px;align-items:center;flex-wrap:wrap;justify-content:flex-end}
.pf-refined .pf-join-section .pf-join-actions a.pf-join-btn{display:inline-flex!important;align-items:center!important;justify-content:space-between!important;gap:22px;min-height:55px;min-width:216px;padding:16px 19px!important;font-size:12px!important;font-weight:800!important;line-height:1.3;letter-spacing:.025em;text-decoration:none;border-radius:6px!important;white-space:nowrap;transition:background .2s ease,transform .2s ease,color .2s ease}
.pf-refined .pf-join-section .pf-join-actions a.pf-join-btn:hover{transform:translateY(-2px)}
.pf-refined .pf-join-section .pf-join-actions a.pf-join-volunteer{background:#f46226!important;border:1px solid #f46226;color:#fff!important}
.pf-refined .pf-join-section .pf-join-actions a.pf-join-volunteer:hover{background:#dc4e18!important}
.pf-refined .pf-join-section .pf-join-actions a.pf-join-member{background:#fff!important;border:1px solid #fff;color:#16163f!important}
.pf-refined .pf-join-section .pf-join-actions a.pf-join-member:hover{background:#f6e9e0!important}
.pf-refined .pf-join-section .pf-join-actions svg{flex:none}
@media(max-width:1100px){.pf-refined .pf-join-section .pf-join-container{grid-template-columns:1fr;gap:26px}.pf-refined .pf-join-section .pf-join-actions{justify-content:flex-start}.pf-refined .pf-join-section h2{max-width:850px}}
@media(max-width:640px){.pf-refined section.pf-join-section{padding:58px 0!important}.pf-refined .pf-join-section .pf-join-container{padding:0 18px!important;gap:26px}.pf-refined .pf-join-section h2{font-size:29px!important}.pf-refined .pf-join-section .pf-join-actions{display:grid;grid-template-columns:1fr;gap:10px;width:100%}.pf-refined .pf-join-section .pf-join-actions a.pf-join-btn{width:100%;min-width:0}}
@media(prefers-reduced-motion:reduce){.pf-refined .pf-join-section *{transition:none!important}}
</style>