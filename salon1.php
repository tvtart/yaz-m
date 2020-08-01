
<link rel="stylesheet" href="//releases.flowplayer.org/7.0.4/commercial/skin/skin.css">
<style>
</style>
<script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="//releases.flowplayer.org/7.0.4/commercial/flowplayer.min.js"></script>
<script src="//releases.flowplayer.org/hlsjs/flowplayer.hlsjs.min.js"></script>
<script>
flowr(function (api) {
api.on("load", function (e, api, video) {
$("#vinfo").text(api.engine.engineName + " engine playing " + video.type);
}); });
</script>
<div class="flowplayer fixed-controls no-toggle no-time play-button obj"
style=" width: 100%;
height: 100%;

z-index: 1000;" data-key="$812975748999788" data-live="true" data-share="false" data-ratio="0.5625" data-logo="">
<video autoplay="true" stretch="true">
<source type="application/x-mpegurl" src="http://tvs.gggdns.com:34500/live/Ressam/eray812103/27.m3u8">
</video>
</div>