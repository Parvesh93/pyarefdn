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
        <div id="pf-footprints-map" aria-label="Interactive map of India with highlighted regions Delhi, Uttar Pradesh and Uttarakhand"></div>
        <button type="button" class="pf-footprints-reset" id="pf-footprints-reset" hidden>View all India <span aria-hidden="true">↗</span></button>
        <p id="pf-footprints-map-status" class="pf-footprints-status" aria-live="polite">Loading India map…</p>
        <a class="pf-footprints-data-credit" href="https://github.com/udit-001/india-maps-data" target="_blank" rel="noopener noreferrer" aria-label="India boundary data source">Map data</a>
      </div>
      <div class="pf-footprints-details">
        <div class="pf-footprints-summary"><strong>03</strong><div><span>States & Union Territories</span><p>Our geographic presence</p></div></div>
        <p class="pf-footprints-select-label">SELECT A REGION TO EXPLORE</p>
        <button type="button" class="pf-footprints-state" data-region="delhi" aria-pressed="false"><span class="pf-footprints-state-number">01</span><span class="pf-footprints-state-text"><strong>Delhi</strong><small>National Capital Territory</small></span><span class="pf-footprints-state-mark" aria-hidden="true">↗</span></button>
        <button type="button" class="pf-footprints-state" data-region="uttar pradesh" aria-pressed="false"><span class="pf-footprints-state-number">02</span><span class="pf-footprints-state-text"><strong>Uttar Pradesh</strong><small>Northern India</small></span><span class="pf-footprints-state-mark" aria-hidden="true">↗</span></button>
        <button type="button" class="pf-footprints-state" data-region="uttarakhand" aria-pressed="false"><span class="pf-footprints-state-number">03</span><span class="pf-footprints-state-text"><strong>Uttarakhand</strong><small>Himalayan region</small></span><span class="pf-footprints-state-mark" aria-hidden="true">↗</span></button>
        <div class="pf-footprints-selected" id="pf-footprints-selected" aria-live="polite">
          <span class="pf-footprints-selected-label">EXPLORE OUR PRESENCE</span>
          <h3 id="pf-footprints-selected-title">Three regions. Shared purpose.</h3>
          <p id="pf-footprints-selected-description">Select a highlighted state on the map or a region above to explore our geographical presence.</p>
          <a href="{{ route('our-project') }}" class="pf-footprints-project-link">Explore Our Projects <span aria-hidden="true">↗</span></a>
        </div>
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
.pf-refined .pf-footprints .pf-footprints-content{display:grid;grid-template-columns:minmax(0,1.35fr) minmax(320px,.65fr);gap:25px;align-items:stretch}
.pf-refined .pf-footprints .pf-footprints-map-panel{position:relative;min-height:600px;border:1px solid #eee5e1;border-radius:12px;background:#fffaf5;overflow:hidden}
.pf-refined .pf-footprints .pf-footprints-map-label{position:absolute;top:20px;left:22px;z-index:500;display:flex;align-items:center;gap:9px;color:#16163f;font-size:10px;font-weight:800;letter-spacing:.12em;background:#ffffffec;padding:9px 12px;border-radius:4px}
.pf-refined .pf-footprints .pf-footprints-pulse{width:8px;height:8px;border-radius:50%;background:#f46226}
.pf-refined .pf-footprints #pf-footprints-map{height:600px;width:100%;background:#fffaf5;z-index:0}
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
@media(max-width:840px){.pf-refined .pf-footprints .pf-footprints-content{grid-template-columns:1fr}.pf-refined .pf-footprints .pf-footprints-map-panel{min-height:505px}.pf-refined .pf-footprints #pf-footprints-map{height:505px}}
@media(max-width:640px){.pf-refined section.pf-footprints{padding:64px 0!important}.pf-refined .pf-footprints .pf-footprints-container{padding:0 18px!important}.pf-refined .pf-footprints .pf-footprints-heading{margin-bottom:25px}.pf-refined .pf-footprints h2{font-size:29px!important}.pf-refined .pf-footprints #pf-footprints-map{height:375px}.pf-refined .pf-footprints .pf-footprints-map-panel{min-height:375px}.pf-refined .pf-footprints .pf-footprints-details{padding:22px}.pf-refined .pf-footprints .pf-footprints-summary strong{font-size:51px}}

/* Interactive regions and legible mobile map. */
.pf-refined .pf-footprints .pf-footprints-select-label{margin:0!important;padding:7px 4px 3px;color:#ec622b;font-size:10px!important;letter-spacing:.13em;font-weight:800}
.pf-refined .pf-footprints button.pf-footprints-state{appearance:none;width:100%;background:transparent;border:0;border-bottom:1px solid #eee8e4;border-radius:6px;display:flex;text-align:left;align-items:center;gap:16px;padding:15px 10px;cursor:pointer;transition:background .2s,box-shadow .2s}
.pf-refined .pf-footprints button.pf-footprints-state:hover,.pf-refined .pf-footprints button.pf-footprints-state[aria-pressed="true"]{background:#fff2e9;box-shadow:inset 3px 0 0 #f46226}
.pf-refined .pf-footprints .pf-footprints-state-text{display:flex;flex-direction:column;gap:5px}
.pf-refined .pf-footprints .pf-footprints-state-text strong{color:#16163f;font-weight:800;font-size:17px}
.pf-refined .pf-footprints .pf-footprints-state-text small{color:#777784;font-size:12px}
.pf-refined .pf-footprints .pf-footprints-selected{padding:18px 18px 17px;margin-top:18px;background:#fff9f4;border:1px solid #f2ded3;border-radius:8px}
.pf-refined .pf-footprints .pf-footprints-selected-label{color:#ed642e;font-weight:800;font-size:10px;letter-spacing:.14em}
.pf-refined .pf-footprints .pf-footprints-selected h3{color:#16163f!important;font-size:19px!important;font-weight:800;margin:10px 0!important}
.pf-refined .pf-footprints .pf-footprints-selected p{color:#626875!important;font-size:12px!important;line-height:1.7!important;margin:0 0 12px!important}
.pf-refined .pf-footprints .pf-footprints-project-link{color:#d84c16!important;font-size:12px;font-weight:800;text-decoration:none}
.pf-refined .pf-footprints .pf-footprints-project-link:hover{text-decoration:underline}
.pf-refined .pf-footprints .pf-footprints-reset{position:absolute;z-index:500;right:16px;bottom:16px;background:#fff;border:1px solid #ecd8cc;border-radius:5px;color:#16163f;padding:10px 13px;font-size:11px;font-weight:800;cursor:pointer;box-shadow:0 3px 12px #16163f12}
.pf-refined .pf-footprints .pf-footprints-reset[hidden]{display:none!important}
.pf-refined .pf-footprints .pf-footprints-reset:hover{color:#f46226}
.pf-refined .pf-footprints #pf-footprints-map .leaflet-interactive{transition:fill .2s,fill-opacity .2s,stroke-width .2s}
@media(max-width:640px){
 .pf-refined .pf-footprints .pf-footprints-content{gap:17px}
 .pf-refined .pf-footprints .pf-footprints-map-panel{min-height:560px!important}
 .pf-refined .pf-footprints #pf-footprints-map{height:560px!important}
 .pf-refined .pf-footprints .pf-footprints-map-label{top:12px;left:12px;font-size:9px}
 .pf-refined .pf-footprints .pf-footprints-reset{right:12px;bottom:12px}
}


/* Frame-free map: the country sits directly on the page background. */
.pf-refined .pf-footprints .pf-footprints-map-panel,
.pf-refined .pf-footprints .pf-footprints-map-panel:hover{
  border:0!important;border-radius:0!important;box-shadow:none!important;
  background:transparent!important;overflow:visible!important;
  padding:0!important
}
.pf-refined .pf-footprints #pf-footprints-map,
.pf-refined .pf-footprints #pf-footprints-map .leaflet-container,
.pf-refined .pf-footprints #pf-footprints-map .leaflet-pane{
  background:transparent!important;border:0!important;box-shadow:none!important
}
.pf-refined .pf-footprints .pf-footprints-map-label{display:none!important}


/* Map sits directly on the page with a larger canvas and no Leaflet badge. */
.pf-refined .pf-footprints .pf-footprints-map-panel{min-height:600px!important}
.pf-refined .pf-footprints #pf-footprints-map{height:600px!important}
.pf-refined .pf-footprints .pf-footprints-data-credit{
 position:absolute;bottom:8px;left:12px;z-index:500;color:#89818b!important;
 font-size:10px;line-height:1.4;text-decoration:none;opacity:.8
}
.pf-refined .pf-footprints .pf-footprints-data-credit:hover{text-decoration:underline;opacity:1}
@media(max-width:840px){
 .pf-refined .pf-footprints .pf-footprints-map-panel{min-height:505px!important}
 .pf-refined .pf-footprints #pf-footprints-map{height:505px!important}
}
@media(max-width:640px){
 .pf-refined .pf-footprints .pf-footprints-map-panel{min-height:560px!important}
 .pf-refined .pf-footprints #pf-footprints-map{height:560px!important}
}

</style>
<script src="https://cdn.jsdelivr.net/npm/leaflet@1.9.4/dist/leaflet.js" defer></script>
<script>
(function () {
  var regions = {
    'delhi': {name:'Delhi',description:'Explore Pyare Foundation\'s presence in the National Capital Territory.'},
    'uttar pradesh': {name:'Uttar Pradesh',description:'Explore Pyare Foundation\'s work across Uttar Pradesh.'},
    'uttarakhand': {name:'Uttarakhand',description:'Explore Pyare Foundation\'s community initiatives in Uttarakhand.'}
  };
  var aliases = {'nct of delhi':'delhi','delhi nct':'delhi','national capital territory of delhi':'delhi','uttaranchal':'uttarakhand'};
  function normalize(value) { return String(value || '').toLowerCase().replace(/[^a-z ]/g,'').replace(/\s+/g,' ').trim(); }
  function regionKey(feature) {
    var p = feature.properties || {};
    var keys = ['st_nm','ST_NM','state','STATE','state_name','STATE_NAME','NAME_1','NAME','name','State','stname'];
    for(var i=0;i<keys.length;i++) {
      var v=normalize(p[keys[i]]);
      if(aliases[v])v=aliases[v];
      if(regions[v])return v;
    }
    return '';
  }
  function init() {
    var target=document.getElementById('pf-footprints-map');
    if(!target || target.dataset.initialized || !window.L) return;
    target.dataset.initialized='true';
    var status=document.getElementById('pf-footprints-map-status');
    var reset=document.getElementById('pf-footprints-reset');
    var title=document.getElementById('pf-footprints-selected-title');
    var description=document.getElementById('pf-footprints-selected-description');
    var buttons=Array.prototype.slice.call(document.querySelectorAll('.pf-footprints-state[data-region]'));
    var map=L.map(target,{scrollWheelZoom:false,dragging:false,zoomControl:false,doubleClickZoom:false,touchZoom:false,attributionControl:false,zoomSnap:0.1});
    var layerByRegion={}, selected='',allBounds=null,geoLayer=null;
    function isMobile(){return window.matchMedia('(max-width:640px)').matches;}
    function isTablet(){return window.matchMedia('(max-width:840px)').matches;}
    function fit(bounds) {
      if(bounds && bounds.isValid()) map.fitBounds(bounds,{padding:[8,8],animate:false,maxZoom:9});
    }
    function defaultView(){
      if(isMobile()){
        // Mobile shows the north Indian work area large, rather than shrinking all of India.
        fit(L.latLngBounds([[23.4,75.5],[32.0,84.7]]));
      }else if(isTablet()){
        fit(L.latLngBounds([[19.8,71.4],[34.3,88.5]]));
      }else fit(allBounds);
    }
    function refreshStyles(){
      if(!geoLayer)return;
      geoLayer.eachLayer(function(layer){
        var key=regionKey(layer.feature || {});
        var active=!!key,chosen=active && key===selected;
        layer.setStyle({color:chosen?'#af451e':active?'#ffffff':'#d8d3d4',weight:chosen?2.3:active?1.2:.7,
          fillColor:chosen?'#e64b17':active?'#f46226':'#ece8e6',
          fillOpacity:chosen?1:active?.96:1});
        if(chosen)layer.bringToFront();
      });
    }
    function updatePanel(key){
      selected=key||'';
      buttons.forEach(function(button){button.setAttribute('aria-pressed',String(button.dataset.region===selected));});
      if(selected){
        title.textContent=regions[selected].name;
        description.textContent=regions[selected].description;
      } else {
        title.textContent='Three regions. Shared purpose.';
        description.textContent='Select a highlighted state on the map or a region above to explore our geographical presence.';
      }
      reset.hidden=!selected && !isMobile();
      refreshStyles();
    }
    function choose(key){
      if(!regions[key])return;
      updatePanel(key);
      var layer=layerByRegion[key];
      if(layer) fit(layer.getBounds().pad(.5));
      else if(isMobile())defaultView();
    }
    buttons.forEach(function(button){button.addEventListener('click',function(){choose(button.dataset.region);});});
    reset.addEventListener('click',function(){updatePanel('');fit(allBounds);reset.hidden=true;});
    fetch('https://cdn.jsdelivr.net/gh/udit-001/india-maps-data@2884453/geojson/india.geojson')
      .then(function(res){if(!res.ok)throw Error('map download');return res.json();})
      .then(function(data){
        geoLayer=L.geoJSON(data,{
          style:function(feature){var active=!!regionKey(feature);return {color:active?'#ffffff':'#d8d3d4',weight:active?1.2:.7,fillColor:active?'#f46226':'#ece8e6',fillOpacity:1};},
          onEachFeature:function(feature,layer){
            var key=regionKey(feature);
            if(!key)return;
            layerByRegion[key]=layer;
            layer.bindTooltip(regions[key].name,{sticky:true,direction:'top'});
            layer.on('click',function(){choose(key);});
            layer.on('mouseover',function(){if(selected!==key)layer.setStyle({fillColor:'#ff864e',fillOpacity:1});});
            layer.on('mouseout',refreshStyles);
          }
        }).addTo(map);
        allBounds=geoLayer.getBounds();
        defaultView();
        updatePanel('');
        if(status)status.remove();
        setTimeout(function(){map.invalidateSize();if(!selected)defaultView();},150);
      })
      .catch(function(){
        if(status)status.textContent='Map unavailable. Choose a region on the right to explore our presence.';
        if(reset)reset.hidden=true;
      });
    window.addEventListener('resize',function(){map.invalidateSize();if(!selected&&allBounds)defaultView();});
  }
  function boot(retries){
    if(window.L)return init();
    if(retries>0)return setTimeout(function(){boot(retries-1);},300);
    var s=document.getElementById('pf-footprints-map-status');
    if(s)s.textContent='Map temporarily unavailable. You can still explore the regions.';
  }
  if(document.readyState==='loading')document.addEventListener('DOMContentLoaded',function(){boot(18);});
  else boot(18);
})();
</script>