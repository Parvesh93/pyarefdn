{{-- Compact Join Our Hands CTA: text and links preserved. --}}
<section class="pf-join-section" aria-labelledby="pf-join-title">
  <div class="pf-join-container">
    <div class="pf-join-copy">
      <p class="pf-join-eyebrow">Join Our Hands</p>
      <h2 id="pf-join-title">BECOME A PART OF ORGANISATION</h2>
    </div>
    <div class="pf-join-actions">
      <a href="{{ route('volunteer-member') }}" class="pf-join-btn pf-join-volunteer">BECOME VOLUNTEER <span aria-hidden="true">↗</span></a>
      <a href="{{ route('annual-member') }}" class="pf-join-btn pf-join-member">BECOME ANNUAL MEMBER <span aria-hidden="true">↗</span></a>
    </div>
  </div>
</section>
<style>
/* Compact single-row CTA, scoped to homepage. */
.pf-refined section.pf-join-section{background:#16163f!important;color:#fff!important;padding:29px 0!important;min-height:0!important;overflow:visible}
.pf-refined .pf-join-section .pf-join-container{max-width:1440px!important;width:100%;margin:0 auto;padding:0 clamp(20px,3vw,52px)!important;display:flex;align-items:center;justify-content:space-between;gap:28px}
.pf-refined .pf-join-section .pf-join-copy{min-width:0;flex:1}
.pf-refined .pf-join-section .pf-join-eyebrow{font-size:11px!important;line-height:1.3!important;letter-spacing:.1em;font-weight:700;color:#ffb77f!important;margin:0 0 6px!important}
.pf-refined .pf-join-section h2{color:#fff!important;font-size:clamp(21px,2vw,29px)!important;line-height:1.2!important;font-weight:800!important;letter-spacing:-.035em!important;margin:0!important;max-width:none!important}
.pf-refined .pf-join-section .pf-join-actions{display:flex;align-items:center;justify-content:flex-end;gap:10px;flex-shrink:0}
.pf-refined .pf-join-section .pf-join-actions a.pf-join-btn{display:inline-flex!important;align-items:center!important;justify-content:center!important;gap:12px;min-height:43px!important;min-width:0!important;padding:11px 15px!important;border-radius:4px!important;white-space:nowrap;font-size:11px!important;line-height:1.3!important;font-weight:800!important;letter-spacing:0!important;text-decoration:none!important;box-shadow:none!important;transition:background .2s}
.pf-refined .pf-join-section .pf-join-actions a.pf-join-volunteer{background:#f46226!important;border:1px solid #f46226!important;color:#fff!important}
.pf-refined .pf-join-section .pf-join-actions a.pf-join-volunteer:hover{background:#dc4e18!important}
.pf-refined .pf-join-section .pf-join-actions a.pf-join-member{background:#fff!important;border:1px solid #fff!important;color:#16163f!important}
.pf-refined .pf-join-section .pf-join-actions a.pf-join-member:hover{background:#f7ece7!important}
.pf-refined .pf-join-section .pf-join-actions a.pf-join-btn span{font-size:15px;line-height:1}
@media(max-width:1060px){.pf-refined .pf-join-section .pf-join-container{flex-wrap:wrap;gap:16px}.pf-refined .pf-join-section .pf-join-copy{flex-basis:100%}.pf-refined .pf-join-section .pf-join-actions{justify-content:flex-start}}
@media(max-width:600px){.pf-refined section.pf-join-section{padding:27px 0!important}.pf-refined .pf-join-section .pf-join-container{padding:0 18px!important}.pf-refined .pf-join-section h2{font-size:23px!important}.pf-refined .pf-join-section .pf-join-actions{display:grid;grid-template-columns:1fr;gap:9px;width:100%}.pf-refined .pf-join-section .pf-join-actions a.pf-join-btn{width:100%;justify-content:space-between!important}}
@media(prefers-reduced-motion:reduce){.pf-refined .pf-join-section *{transition:none!important}}
</style>