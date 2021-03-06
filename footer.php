<footer>
   <div class="social-links">
	   <div class="container">   	
	   	  <?php wp_nav_menu( array(
	        'container' => '<nav>',
	        'theme_location' => 'footer'
	      )); ?>
	   </div>
   </div>
  <div class="container footer-bottom">
    <div class="search">
      <?php  get_search_form(); ?>
    </div>

    <ul class="address">
		<?php  dynamic_sidebar( 'footer-widget-area' ); ?>
	</ul>
  <div class="copyright"><p>Designed and developed by Nadia Rasul</p></div>
  </div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>

<script src="https://cdn.rawgit.com/noelboss/featherlight/1.4.1/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>