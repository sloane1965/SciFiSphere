
<?php get_header(); ?>

    <!-- Add a placeholder for the Twitch embed -->
    <div class="live">
    <div class="container">
      <div id="twitch-embed"></div>
    </div>
    </div>

    <!-- Load the Twitch embed script -->
    <script src="https://embed.twitch.tv/embed/v1.js"></script>

    <!--
      Create a Twitch.Embed object that will render
      within the "twitch-embed" root element.
    -->
    <script type="text/javascript">
      var embed = new Twitch.Embed("twitch-embed", {
        width: 854,
        height: 480,
        channel: "lirik",
        layout: "video",
        autoplay: false
      });

      var player = embed.getPlayer();
      player.addEventListener(Twitch.Player.PLAY, function() {
        changeAdvertisementBanner();
      });
      player.play(); 
    </script>

    <?php get_footer(); ?>