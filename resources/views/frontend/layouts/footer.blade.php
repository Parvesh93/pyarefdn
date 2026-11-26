{{-- Site footer: original content, policy routes, contacts and social links preserved. --}}
<footer class="pf-site-footer">
  <div class="pf-footer-top">
    <div class="pf-footer-inner pf-footer-newsletter">
      <div class="pf-footer-newsletter-copy">
        <span class="pf-footer-overline">STAY CONNECTED</span>
        <h2>Subscribe</h2>
        <p>Enter your email to receive relevant messages..</p>
      </div>
      <div class="pf-footer-subscribe">
        <label for="pf-footer-email" class="sr-only">Email address</label>
        <input id="pf-footer-email" type="email" autocomplete="email" placeholder="EMAIL" />
        <button type="button">SUBSCRIBE <span aria-hidden="true">↗</span></button>
      </div>
    </div>
  </div>

  <div class="pf-footer-main">
    <div class="pf-footer-inner pf-footer-grid">
      <div class="pf-footer-about">
        <a href="{{ route('home') }}" class="pf-footer-brand">
          <img src="{{ asset('uploads/settings/'.$setting->logo_path) }}" alt="Pyare Foundation">
        </a>
        <p>Pyare Foundation is a multi-dimensional group in the sector of human service and knowledge concern to represent and present skills, methods, procedure and approach that are primarily tailor made to fill the gaps of realignment delinquency...</p>
        <div class="pf-footer-social" aria-label="Social media">
          <a href="https://www.instagram.com/anjalipyarefound/" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><img src="{{ asset('uploads/images/icon/instagram.png') }}" alt=""></a>
          <a href="https://www.facebook.com/Pyarefoundation/" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><img src="{{ asset('uploads/images/icon/facebook.png') }}" alt=""></a>
          <a href="https://www.youtube.com/channel/UC-wbMX7tBO74dF_votB0QEg" target="_blank" rel="noopener noreferrer" aria-label="YouTube"><img src="{{ asset('uploads/images/icon/youtube.png') }}" alt=""></a>
        </div>
      </div>
      <div class="pf-footer-column">
        <h3>IMPORTANT LINKS</h3>
        <ul>
          <li><a href="{{ route('about-organization') }}">About Us</a></li>
          <li><a href="{{ route('donation-page') }}">Donate Now</a></li>
          <li><a href="{{ route('volunteer-member') }}">Become Volunteer</a></li>
          <li><a href="{{ route('annual-member') }}">Become Member</a></li>
          <li><a href="{{ route('annual-report') }}">Annual Reports</a></li>
          <li><a href="{{ route('gallery-page') }}">Gallery</a></li>
        </ul>
      </div>
      <div class="pf-footer-column">
        <h3>POLICIES</h3>
        <ul>
          <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
          <li><a href="{{ route('term-condition') }}">Terms &amp; Conditions</a></li>
          <li><a href="{{ route('shipping-policy') }}">Shipping Policy</a></li>
          <li><a href="{{ route('cancellations-refunds') }}">Cancellations &amp; Refunds</a></li>
        </ul>
      </div>
      <div class="pf-footer-column pf-footer-contact">
        <h3>CONTACT DETAILS</h3>
        <p><strong>Address</strong><br>370-D, J&amp;K Pocket Dilshad Garden, Delhi – 110095</p>
        <p><strong>Mobile</strong><br><a href="tel:+919811409367">+91-9811409367</a></p>
        <p><strong>Email</strong><br><a href="mailto:info@pyarefoundation.org">info@pyarefoundation.org</a><br><a href="mailto:pyarefdn@gmail.com">pyarefdn@gmail.com</a></p>
      </div>
    </div>
  </div>
  <div class="pf-footer-bottom">
    <div class="pf-footer-inner pf-footer-bottom-inner">
      <p>Copyright © 2025 Pyare Foundation</p>
      <a href="{{ route('home') }}">PYARE FOUNDATION <span aria-hidden="true">↗</span></a>
    </div>
  </div>
</footer>
<style>
.pf-site-footer{font-family:'DM Sans',Arial,sans-serif;color:#fff;background:#16163f}
.pf-site-footer *{box-sizing:border-box}
.pf-site-footer .pf-footer-inner{max-width:1440px;width:100%;padding:0 clamp(20px,3vw,52px);margin:0 auto}
.pf-site-footer .pf-footer-top{background:#16163f;border-bottom:1px solid #ffffff24}
.pf-site-footer .pf-footer-newsletter{display:flex;align-items:center;justify-content:space-between;gap:35px;padding-top:38px;padding-bottom:38px}
.pf-site-footer .pf-footer-overline{font-size:10px;color:#f8a474;font-weight:800;letter-spacing:.15em}
.pf-site-footer .pf-footer-newsletter-copy h2{font-size:28px;color:#fff;font-weight:800;letter-spacing:-.035em;margin:5px 0}
.pf-site-footer .pf-footer-newsletter-copy p{font-size:13px;color:#cecedc;line-height:1.6;margin:0}
.pf-site-footer .pf-footer-subscribe{display:flex;align-items:stretch;width:min(100%,440px);min-height:48px}
.pf-site-footer .pf-footer-subscribe input{min-width:0;flex:1;padding:13px 15px;border:1px solid #ffffff56;border-right:0;background:#ffffff10;color:#fff;border-radius:5px 0 0 5px;outline:none;font-size:13px}
.pf-site-footer .pf-footer-subscribe input::placeholder{color:#d8d7e1}
.pf-site-footer .pf-footer-subscribe input:focus{border-color:#f46226}
.pf-site-footer .pf-footer-subscribe button{flex:none;background:#f46226;color:#fff;padding:12px 20px;border:1px solid #f46226;border-radius:0 5px 5px 0;font-size:12px;font-weight:800;cursor:pointer}
.pf-site-footer .pf-footer-subscribe button:hover{background:#d94f1b}
.pf-site-footer .pf-footer-subscribe button span{margin-left:8px}
.pf-site-footer .pf-footer-main{background:#fffaf5;color:#16163f}
.pf-site-footer .pf-footer-grid{display:grid;grid-template-columns:minmax(0,1.35fr) minmax(0,.75fr) minmax(0,.85fr) minmax(0,1fr);gap:clamp(24px,3.8vw,60px);padding-top:65px;padding-bottom:70px}
.pf-site-footer .pf-footer-brand{display:inline-flex;align-items:center;max-width:260px;margin-bottom:21px}
.pf-site-footer .pf-footer-brand img{max-width:250px;width:100%;height:auto;max-height:72px;object-fit:contain;object-position:left}
.pf-site-footer .pf-footer-about p{font-size:13px;line-height:1.85;color:#606575;margin:0 0 23px;max-width:360px;text-align:left}
.pf-site-footer .pf-footer-column h3{font-size:12px;font-weight:800;letter-spacing:.09em;color:#16163f;margin:7px 0 24px;padding-bottom:15px;position:relative}
.pf-site-footer .pf-footer-column h3::after{content:"";position:absolute;bottom:0;left:0;width:35px;height:3px;background:#f46226;border-radius:3px}
.pf-site-footer .pf-footer-column ul{padding:0;margin:0;list-style:none;display:flex;flex-direction:column;gap:14px}
.pf-site-footer .pf-footer-column li,.pf-site-footer .pf-footer-column a{font-size:13px;line-height:1.5;color:#606575;text-decoration:none;overflow-wrap:anywhere}
.pf-site-footer .pf-footer-column a:hover{color:#f46226}
.pf-site-footer .pf-footer-contact p{color:#606575;line-height:1.75;font-size:13px;margin:0 0 13px;overflow-wrap:anywhere}
.pf-site-footer .pf-footer-contact strong{color:#16163f;font-weight:800}
.pf-site-footer .pf-footer-social{display:flex;gap:9px}
.pf-site-footer .pf-footer-social a{width:37px;height:37px;border:1px solid #e6dbd5;border-radius:5px;display:grid;place-items:center;background:#fff;transition:border-color .2s,transform .2s}
.pf-site-footer .pf-footer-social a:hover{border-color:#f46226;transform:translateY(-2px)}
.pf-site-footer .pf-footer-social img{height:17px;width:17px;object-fit:contain}
.pf-site-footer .pf-footer-bottom{background:#111135;color:#dddde6}
.pf-site-footer .pf-footer-bottom-inner{display:flex;justify-content:space-between;align-items:center;gap:15px;padding-top:18px;padding-bottom:18px}
.pf-site-footer .pf-footer-bottom p{font-size:12px;color:#dddde6;margin:0}
.pf-site-footer .pf-footer-bottom a{font-size:11px;letter-spacing:.08em;font-weight:800;color:#fff;text-decoration:none}
.pf-site-footer .pf-footer-bottom a span{color:#f46226}
@media(max-width:1100px){.pf-site-footer .pf-footer-grid{grid-template-columns:repeat(2,minmax(0,1fr));gap:36px 40px}}
@media(max-width:767px){.pf-site-footer .pf-footer-newsletter{flex-direction:column;align-items:stretch;gap:20px;padding-top:32px;padding-bottom:32px}.pf-site-footer .pf-footer-grid{padding-top:42px;padding-bottom:45px;gap:31px 22px}.pf-site-footer .pf-footer-bottom-inner{align-items:flex-start;flex-direction:column}.pf-site-footer .pf-footer-column h3{margin-bottom:18px}.pf-site-footer .pf-footer-subscribe{width:100%}}
@media(max-width:520px){.pf-site-footer .pf-footer-inner{padding-left:18px;padding-right:18px}.pf-site-footer .pf-footer-grid{grid-template-columns:repeat(2,minmax(0,1fr))}.pf-site-footer .pf-footer-about,.pf-site-footer .pf-footer-contact{grid-column:1/-1}.pf-site-footer .pf-footer-subscribe button{padding:12px 13px;font-size:11px}.pf-site-footer .pf-footer-brand img{width:225px}}
@media(prefers-reduced-motion:reduce){.pf-site-footer *{transition:none!important}}
</style>
<!-- Retained from the live website: AARYVO assistant widget. -->
<script src="https://aaryvo.ppdesigntech.com/widget.js" data-agent="cmu0eoidl0003ay4qkjo3n2ae" defer></script>
