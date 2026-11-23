{{-- Project Bhairavi: original content and dynamic gallery preserved, with a cohesive editorial layout. --}}
<section class="pf-bhairavi" aria-labelledby="pf-bhairavi-title">
  <div class="pf-bhairavi-container">
    <div class="pf-bhairavi-layout">
      <div class="pf-bhairavi-visual" data-animate>
        @isset($projectGovindImages)
          <div class="pf-bhairavi-gallery">
            @foreach ($projectGovindImages->take(6) as $govind)
              <figure class="pf-bhairavi-photo">
                <img src="{{ asset('uploads/gallery/'.$govind->attach) }}"
                     alt="Project Bhairavi programme photograph {{ $loop->iteration }}"
                     loading="lazy" decoding="async">
              </figure>
            @endforeach
          </div>
        @endisset
        <div class="pf-bhairavi-visual-caption">
          <span class="pf-bhairavi-visual-dot" aria-hidden="true"></span>
          <span>PROJECT BHAIRAVI</span>
          <span class="pf-bhairavi-caption-rule" aria-hidden="true"></span>
          <span>COMMUNITY INITIATIVE</span>
        </div>
      </div>

      <div class="pf-bhairavi-content" data-animate>
        <div class="pf-bhairavi-heading">
          <span class="pf-bhairavi-eyebrow"><span aria-hidden="true"></span> Featured Project</span>
          <h2 id="pf-bhairavi-title">PROJECT BHAIRAVI</h2>
          <div class="pf-bhairavi-accent-line" aria-hidden="true"></div>
        </div>
        <p class="pf-bhairavi-description">Project Bhairavi is a community-driven initiative focused on improving women’s health, hygiene, and dignity, with a special emphasis on menstrual health awareness and access to essential hygiene resources. The project works at the grassroots level to educate women and girls about safe menstrual practices, address myths and taboos, and provide affordable or free sanitary products. Through training sessions, health checkups, and distribution camps, Project Bhairavi aims to empower women with knowledge, confidence, and the tools needed to lead healthier lives.</p>
        <div class="pf-bhairavi-actions">
          <a class="pf-bhairavi-button pf-bhairavi-button-primary" href="{{ route('our-project.project-bhairavi') }}">READ MORE <span aria-hidden="true">↗</span></a>
          <a class="pf-bhairavi-button pf-bhairavi-button-secondary" href="{{ route('donation-page') }}">DONATE NOW <span aria-hidden="true">↗</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.pf-refined .pf-bhairavi{background:#fff7ed!important;padding:94px 0 98px!important;color:#16163f;overflow:hidden}
.pf-refined .pf-bhairavi .pf-bhairavi-container{max-width:1440px!important;width:100%;margin:0 auto;padding:0 clamp(20px,3vw,52px)!important}
.pf-refined .pf-bhairavi .pf-bhairavi-layout{display:grid;grid-template-columns:minmax(0,1.12fr) minmax(0,.88fr);gap:clamp(32px,4.2vw,64px);align-items:start}
.pf-refined .pf-bhairavi .pf-bhairavi-visual{min-width:0;position:relative}
.pf-refined .pf-bhairavi .pf-bhairavi-gallery{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));grid-template-rows:repeat(3,130px);gap:10px;min-width:0}
.pf-refined .pf-bhairavi .pf-bhairavi-photo{position:relative;margin:0;min-width:0;min-height:0;overflow:hidden;border-radius:9px!important;background:#ebdfd4;box-shadow:0 3px 14px #16163f0e}
.pf-refined .pf-bhairavi .pf-bhairavi-photo:first-child{grid-column:1 / 3;grid-row:1 / 3}
.pf-refined .pf-bhairavi .pf-bhairavi-photo:nth-child(2){grid-column:3;grid-row:1}
.pf-refined .pf-bhairavi .pf-bhairavi-photo:nth-child(3){grid-column:3;grid-row:2}
.pf-refined .pf-bhairavi .pf-bhairavi-photo:nth-child(4){grid-column:1;grid-row:3}
.pf-refined .pf-bhairavi .pf-bhairavi-photo:nth-child(5){grid-column:2;grid-row:3}
.pf-refined .pf-bhairavi .pf-bhairavi-photo:nth-child(6){grid-column:3;grid-row:3}
.pf-refined .pf-bhairavi .pf-bhairavi-photo img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .45s ease}
.pf-refined .pf-bhairavi .pf-bhairavi-photo:hover img{transform:scale(1.06)}
.pf-refined .pf-bhairavi .pf-bhairavi-visual-caption{display:flex;gap:10px;align-items:center;margin-top:17px;color:#7b6970;font-size:10px;font-weight:800;letter-spacing:.11em;flex-wrap:wrap}
.pf-refined .pf-bhairavi .pf-bhairavi-visual-dot{width:7px;height:7px;border-radius:50%;background:#f46226;flex:none}
.pf-refined .pf-bhairavi .pf-bhairavi-caption-rule{height:1px;width:24px;background:#d3c2ba}
.pf-refined .pf-bhairavi .pf-bhairavi-content{min-width:0;padding:0;display:flex;flex-direction:column;min-height:454px;align-self:stretch}
.pf-refined .pf-bhairavi .pf-bhairavi-eyebrow{display:inline-flex;align-items:center;gap:10px;font-size:12px;font-weight:800;letter-spacing:.13em;text-transform:uppercase;color:#f46226}
.pf-refined .pf-bhairavi .pf-bhairavi-eyebrow span{width:26px;height:2px;background:#f46226}
.pf-refined .pf-bhairavi .pf-bhairavi-content h2{font-size:clamp(35px,3.6vw,53px)!important;line-height:1.14!important;font-weight:800;letter-spacing:-.045em;margin:14px 0 14px!important;color:#16163f!important}
.pf-refined .pf-bhairavi .pf-bhairavi-accent-line{width:58px;height:4px;border-radius:3px;background:#f46226;margin-bottom:20px}
.pf-refined .pf-bhairavi .pf-bhairavi-description{font-size:14px!important;line-height:1.8!important;color:#555665!important;text-align:left!important;margin:0 0 22px!important;max-width:62ch}
.pf-refined .pf-bhairavi .pf-bhairavi-actions{display:flex;align-items:center;gap:12px;flex-wrap:wrap;margin-top:auto;padding-top:16px}
.pf-refined .pf-bhairavi .pf-bhairavi-actions a.pf-bhairavi-button{display:inline-flex!important;align-items:center;justify-content:center;gap:20px;min-height:48px;min-width:145px;padding:13px 21px!important;border-radius:5px!important;font-size:12px!important;letter-spacing:.025em;font-weight:800!important;text-decoration:none;box-shadow:none!important;transition:background .2s ease,transform .2s ease}
.pf-refined .pf-bhairavi .pf-bhairavi-actions a.pf-bhairavi-button span{font-size:17px;line-height:1}
.pf-refined .pf-bhairavi .pf-bhairavi-actions a.pf-bhairavi-button:hover{transform:translateY(-2px)}
.pf-refined .pf-bhairavi .pf-bhairavi-actions a.pf-bhairavi-button-primary{background:#f46226!important;color:#fff!important;border:1px solid #f46226!important}
.pf-refined .pf-bhairavi .pf-bhairavi-actions a.pf-bhairavi-button-primary:hover{background:#d84c16!important}
.pf-refined .pf-bhairavi .pf-bhairavi-actions a.pf-bhairavi-button-secondary{background:#16163f!important;color:#fff!important;border:1px solid #16163f!important}
.pf-refined .pf-bhairavi .pf-bhairavi-actions a.pf-bhairavi-button-secondary:hover{background:#28285c!important}
@media(max-width:1050px){.pf-refined .pf-bhairavi .pf-bhairavi-layout{gap:32px;grid-template-columns:minmax(0,1fr) minmax(0,1fr)}.pf-refined .pf-bhairavi .pf-bhairavi-gallery{grid-template-rows:repeat(3,105px)}.pf-refined .pf-bhairavi .pf-bhairavi-content h2{font-size:36px!important}.pf-refined .pf-bhairavi .pf-bhairavi-content{min-height:369px}}
@media(max-width:767px){.pf-refined .pf-bhairavi{padding:65px 0 70px!important}.pf-refined .pf-bhairavi .pf-bhairavi-container{padding:0 18px!important}.pf-refined .pf-bhairavi .pf-bhairavi-layout{grid-template-columns:1fr;gap:29px}.pf-refined .pf-bhairavi .pf-bhairavi-gallery{grid-template-rows:repeat(3,clamp(80px,22vw,128px));gap:7px}.pf-refined .pf-bhairavi .pf-bhairavi-content{padding:0;min-height:0}.pf-refined .pf-bhairavi .pf-bhairavi-content h2{font-size:34px!important}.pf-refined .pf-bhairavi .pf-bhairavi-description{font-size:13px!important;line-height:1.85!important}.pf-refined .pf-bhairavi .pf-bhairavi-actions a.pf-bhairavi-button{min-width:0;flex:1}}
@media(max-width:375px){.pf-refined .pf-bhairavi .pf-bhairavi-actions{gap:9px}.pf-refined .pf-bhairavi .pf-bhairavi-actions a.pf-bhairavi-button{padding:11px 10px!important;font-size:11px!important;gap:7px}}
@media(prefers-reduced-motion:reduce){.pf-refined .pf-bhairavi *{transition:none!important}}
</style>