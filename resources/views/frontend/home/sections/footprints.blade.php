{{-- Pyare Foundation geographic presence. Map geometry: India Maps open GeoJSON dataset. --}}
<section class="pf-footprints" aria-labelledby="pf-footprints-title">
  <div class="pf-footprints-container">
    <div class="pf-footprints-heading" data-animate>
      <span class="pf-footprints-overline"><span aria-hidden="true"></span> WHERE WE WORK</span>
      <h2 id="pf-footprints-title">OUR <span>FOOTPRINTS</span></h2>
      <p>Our initiatives have reached communities across Delhi, Uttar Pradesh and Uttarakhand.</p>
    </div>
    <div class="pf-footprints-content">
      <div class="pf-footprints-map-panel">
        <div class="pf-footprints-map-label"><span class="pf-footprints-pulse" aria-hidden="true"></span> INDIA · AREAS OF WORK</div>
        <div id="pf-footprints-map" role="img" aria-label="Map of India highlighting Delhi, Uttar Pradesh and Uttarakhand"></div>
        <p id="pf-footprints-map-status" class="pf-footprints-status" aria-live="polite">Loading India map…</p>
      </div>
      <div class="pf-footprints-details">
        <div class="pf-footprints-summary"><strong>03</strong><div><span>States & Union Territories</span><p>Our geographic presence</p></div></div>
        <div class="pf-footprints-state" data-region="delhi"><span class="pf-footprints-state-number">01</span><div><h3>Delhi</h3><p>National Capital Territory</p></div><span class="pf-footprints-state-mark" aria-hidden="true">↗</span></div>
        <div class="pf-footprints-state" data-region="uttar pradesh"><span class="pf-footprints-state-number">02</span><div><h3>Uttar Pradesh</h3><p>Northern India</p></div><span class="pf-footprints-state-mark" aria-hidden="true">↗</span></div>
        <div class="pf-footprints-state" data-region="uttarakhand"><span class="pf-footprints-state-number">03</span><div><h3>Uttarakhand</h3><p>Himalayan region</p></div><span class="pf-footprints-state-mark" aria-hidden="true">↗</span></div>
        <div class="pf-footprints-note"><span aria-hidden="true">●</span> Highlighted regions show Pyare Foundation's areas of work.</div>
      </div>
    </div>
  </div>
</section>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.9.4/dist/leaflet.css">
<style>
.pf-refined section.pf-footprints{padding:90px 0!important;background:#fff!important;color:#16163f}
.pf-refined .pf-footprints .pf-footprints-container{width:100%;max-width:1440px!important;margin:auto;padding:0 clamp(20px,3vw,52px)!important}
.pf-refined .pf-footprints .pf-footprints-heading{text-align:center;max-width:710px;margin:0 auto 39px}
.pf-refined .pf-footprints .pf-footprints-overline{display:flex;align-items:center;justify-content:center;gap:9px;color:#f46226;font-size:11px;letter-spacing:.16em;font-weight:800;margin-bottom:12px}
.pf-refined .pf-footprints .pf-footprints-overline span{height:8px;width:8px;background:#f46226;border-radius:50%}
.pf-refined .pf-footprints h2{font-size:clamp(29px,3.3vw,45px)!important;font-weight:800!important;line-height:1.2!important;margin:0 0 16px!important;letter-spacing:-.045em;color:#16163f!important}
.pf-refined .pf-footprints h2 span{color:#f46226!important}
.pf-refined .pf-footprints .pf-footprints-heading p{font-size:14px!important;line-height:1.8!important;color:#69716f;max-width:600px;margin:auto}
.pf-refined .pf-footprints .pf-footprints-content{display:grid;grid-template-columns:minmax(0,1.15fr) minmax(0,.85fr);gap:25px;align-items:stretch}
.pf-refined .pf-footprints .pf-footprints-map-panel{position:relative;min-height:485px;border:1px solid #eee5e1;border-radius:12px;background:#fffaf5;overflow:hidden}
.pf-refined .pf-footprints .pf-footprints-map-label{position:absolute;top:20px;left:22px;z-index:500;display:flex;align-items:center;gap:9px;color:#16163f;font-size:10px;font-weight:800;letter-spacing:.12em;background:#ffffffec;padding:9px 12px;border-radius:4px}
.pf-refined .pf-footprints .pf-footprints-pulse{width:8px;height:8px;border-radius:50%;background:#f46226}
.pf-refined .pf-footprints #pf-footprints-map{height:485px;width:100%;background:#fffaf5;z-index:0}
.pf-refined .pf-footprints #pf-footprints-map .leaflet-control-attribution{font-size:9px;background:#fffc}
.pf-refined .pf-footprints #pf-footprints-map .leaflet-interactive:focus-visible{outline:2px solid #16163f}
.pf-refined .pf-footprints .pf-footprints-status{position:absolute;left:16px;bottom:18px;z-index:500;margin:0!important;font-size:11px;color:#74717b}
.pf-refined .pf-footprints .pf-footprints-details{display:flex;flex-direction:column;background:#fff;border:1px solid #eee5e1;border-radius:12px;padding:28px 30px;box-shadow:0 5px 25px #16163f08}
.pf-refined .pf-footprints .pf-footprints-summary{display:flex;align-items:center;gap:17px;margin-bottom:10px;padding-bottom:23px;border-bottom:1px solid #eee8e4}
.pf-refined .pf-footprints .pf-footprints-summary strong{font-size:62px;font-weight:800;letter-spacing:-.06em;color:#f46226;line-height:1}
.pf-refined .pf-footprints .pf-footprints-summary span{font-size:14px;color:#16163f;font-weight:800}
.pf-refined .pf-footprints .pf-footprints-summary p{margin:4px 0 0!important;color:#75717a;font-size:12px}
.pf-refined .pf-footprints .pf-footprints-state{display:flex;align-items:center;gap:16px;border-bottom:1px solid #eee8e4;padding:20px 4px}
.pf-refined .pf-footprints .pf-footprints-state-number{font-size:12px;color:#f46226;font-weight:800;align-self:start;margin-top:5px}
.pf-refined .pf-footprints .pf-footprints-state h3{color:#16163f!important;font-size:19px;font-weight:800;margin:0 0 5px!important}
.pf-refined .pf-footprints .pf-footprints-state p{font-size:12px!important;color:#777784;margin:0!important}
.pf-refined .pf-footprints .pf-footprints-state-mark{margin-left:auto;color:#f46226;font-size:18px}
.pf-refined .pf-footprints .pf-footprints-note{display:flex;gap:10px;align-items:center;margin-top:auto;padding-top:22px;color:#77717b;font-size:12px}
.pf-refined .pf-footprints .pf-footprints-note span{color:#f46226}
@media(max-width:840px){.pf-refined .pf-footprints .pf-footprints-content{grid-template-columns:1fr}.pf-refined .pf-footprints .pf-footprints-map-panel{min-height:425px}.pf-refined .pf-footprints #pf-footprints-map{height:425px}}
@media(max-width:640px){.pf-refined section.pf-footprints{padding:64px 0!important}.pf-refined .pf-footprints .pf-footprints-container{padding:0 18px!important}.pf-refined .pf-footprints .pf-footprints-heading{margin-bottom:25px}.pf-refined .pf-footprints h2{font-size:29px!important}.pf-refined .pf-footprints #pf-footprints-map{height:375px}.pf-refined .pf-footprints .pf-footprints-map-panel{min-height:375px}.pf-refined .pf-footprints .pf-footprints-details{padding:22px}.pf-refined .pf-footprints .pf-footprints-summary strong{font-size:51px}}
</style>
<script src="https://cdn.jsdelivr.net/npm/leaflet@1.9.4/dist/leaflet.js" defer></script>
<script>
(function () {
  function initFootprints() {
    var target = document.getElementById('pf-footprints-map');
    if (!target || target.dataset.initialized || !window.L) return;
    target.dataset.initialized = 'true';
    var status = document.getElementById('pf-footprints-map-status');
    var map = L.map(target, {scrollWheelZoom:false, dragging:false, zoomControl:false, doubleClickZoom:false, touchZoom:false, attributionControl:true});
    var highlighted = ['delhi','uttar pradesh','uttarakhand','uttaranchal'];
    function labelFor(feature) {
      var p=feature.properties || {};
      return String(p.st_nm||p.ST_NM||p.state||p.STATE||p.state_name||p.STATE_NAME||p.NAME_1||p.NAME||p.name||'');
    }
    function normalize(name) { return String(name).trim().toLowerCase().replace(/[^a-z ]/g,'').replace(/\s+/g,' '); }
    var url='https://cdn.jsdelivr.net/gh/udit-001/india-maps-data@2884453/geojson/india.geojson';
    fetch(url).then(function(resp){if(!resp.ok)throw Error('Map data');return resp.json();}).then(function(geo){
      var bounds = L.latLngBounds([]);
      var geoLayer=L.geoJSON(geo,{
        style:function(feature){
          var active=highlighted.indexOf(normalize(labelFor(feature)))>=0;
          return {color:'#ffffff',weight:.65,fillColor:active?'#f46226':'#e3dfe2',fillOpacity:active?.96:1};
        },
        onEachFeature:function(feature,layer) {
          var name=labelFor(feature), active=highlighted.indexOf(normalize(name))>=0;
          if(active) layer.bindTooltip(name,{sticky:true,direction:'top'});
        }
      }).addTo(map);
      bounds=geoLayer.getBounds();
      if(bounds.isValid())map.fitBounds(bounds.pad(.06),{animate:false});
      if(status)status.remove();
      setTimeout(function(){map.invalidateSize();},120);
    }).catch(function(){if(status)status.textContent='Map temporarily unavailable. Our presence includes Delhi, Uttar Pradesh and Uttarakhand.';});
  }
  function whenReady() { if(window.L){initFootprints();return;}setTimeout(function(){if(window.L)initFootprints();else{var s=document.getElementById('pf-footprints-map-status');if(s)s.textContent='Map is temporarily unavailable.';}},1300); }
  if(document.readyState==='loading')document.addEventListener('DOMContentLoaded',whenReady);
  else whenReady();
})();
</script>