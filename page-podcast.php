<?php get_header(); ?>



<div class="container" style="background-color: #1E4F5A;">
<div class="podcast">

<div class="spaceghost">
  <img src="http://static.tvtropes.org/pmwiki/pub/images/spaceghostcoast.gif" alt="">
</div>


<iframe id="sc-widget" src="https://w.soundcloud.com/player/?url=http://api.soundcloud.com/users/1539950/favorites" width="60%" height="465" scrolling="yes" frameborder="no"></iframe>
</div>
</div>
<script src="https://w.soundcloud.com/player/api.js" type="text/javascript"></script>

<script type="text/javascript">
  (function(){
    var widgetIframe = document.getElementById('sc-widget'),
        widget       = SC.Widget(widgetIframe);

    widget.bind(SC.Widget.Events.READY, function() {
      widget.bind(SC.Widget.Events.PLAY, function() {
        // get information about currently playing sound
        widget.getCurrentSound(function(currentSound) {
          console.log('sound ' + currentSound.get('') + 'began to play');
        });
      });
      // get current level of volume
      widget.getVolume(function(volume) {
        console.log('current volume value is ' + volume);
      });
      // set new volume level
      widget.setVolume(50);
      // get the value of the current position
    });

  }());
</script>


<?php get_footer(); ?>