{{-- Homepage impact marquee, positioned ahead of Project Bhairavi. --}}
<section class="pf-impact-marquee" aria-label="Our commitment to women's health and community wellbeing">
  <div class="pf-impact-marquee-track">
    <div class="pf-impact-marquee-group">
      <span>WOMEN'S HEALTH</span><span class="pf-impact-marquee-star" aria-hidden="true">✳</span>
      <span>MENSTRUAL HYGIENE</span><span class="pf-impact-marquee-star" aria-hidden="true">✳</span>
      <span>HEALTH AWARENESS</span><span class="pf-impact-marquee-star" aria-hidden="true">✳</span>
      <span>COMMUNITY WELLBEING</span><span class="pf-impact-marquee-star" aria-hidden="true">✳</span>
      <span>DIGNITY &amp; EMPOWERMENT</span><span class="pf-impact-marquee-star" aria-hidden="true">✳</span>
    </div>
    <div class="pf-impact-marquee-group" aria-hidden="true">
      <span>WOMEN'S HEALTH</span><span class="pf-impact-marquee-star">✳</span>
      <span>MENSTRUAL HYGIENE</span><span class="pf-impact-marquee-star">✳</span>
      <span>HEALTH AWARENESS</span><span class="pf-impact-marquee-star">✳</span>
      <span>COMMUNITY WELLBEING</span><span class="pf-impact-marquee-star">✳</span>
      <span>DIGNITY &amp; EMPOWERMENT</span><span class="pf-impact-marquee-star">✳</span>
    </div>
  </div>
</section>
<style>
.pf-refined section.pf-impact-marquee{
  position:relative;overflow:hidden;background:#16163f!important;
  color:#fff;padding:0!important;border:0;isolation:isolate
}
.pf-refined .pf-impact-marquee::before,
.pf-refined .pf-impact-marquee::after{
  content:"";position:absolute;top:0;bottom:0;width:52px;z-index:2;pointer-events:none
}
.pf-refined .pf-impact-marquee::before{left:0;background:linear-gradient(90deg,#16163f,transparent)}
.pf-refined .pf-impact-marquee::after{right:0;background:linear-gradient(270deg,#16163f,transparent)}
.pf-refined .pf-impact-marquee-track{
  display:flex;width:max-content;align-items:center;animation:pf-impact-scroll 40s linear infinite;
  will-change:transform
}
.pf-refined .pf-impact-marquee-group{
  display:flex;align-items:center;gap:34px;flex:none;
  padding:21px 17px;white-space:nowrap
}
.pf-refined .pf-impact-marquee-group>span:not(.pf-impact-marquee-star){
  color:#fff;font-family:'Manrope',sans-serif;font-size:clamp(15px,1.6vw,23px);
  font-weight:800;letter-spacing:.075em;line-height:1.2
}
.pf-refined .pf-impact-marquee-group .pf-impact-marquee-star{
  color:#f46226;font-size:25px;line-height:1;flex:none
}
.pf-refined .pf-impact-marquee:hover .pf-impact-marquee-track{animation-play-state:paused}
@keyframes pf-impact-scroll{to{transform:translateX(-50%)}}
@media(max-width:640px){
  .pf-refined .pf-impact-marquee-group{gap:20px;padding:17px 10px}
  .pf-refined .pf-impact-marquee-group>span:not(.pf-impact-marquee-star){font-size:15px;letter-spacing:.045em}
  .pf-refined .pf-impact-marquee-group .pf-impact-marquee-star{font-size:19px}
  .pf-refined .pf-impact-marquee::before,.pf-refined .pf-impact-marquee::after{width:22px}
  .pf-refined .pf-impact-marquee-track{animation-duration:35s}
}
@media(prefers-reduced-motion:reduce){
  .pf-refined .pf-impact-marquee-track{animation:none!important;width:100%;overflow-x:auto}
  .pf-refined .pf-impact-marquee-group[aria-hidden="true"]{display:none}
}
</style>