	</div><!-- #main -->	
	<?php while (have_posts()) : the_post(); ?>
	        <div id="slideupbox" <?php if( get_field('slideup_box')): ?>class='slideup'<?php endif; ?>>
	        	<a href="#" class="close-link">x</a>
				<p><?php the_field('slideup_box_content', 'option'); ?></p>
			</div>
	<?php endwhile;?>	
	<footer id="footer"  role="contentinfo">
		<div class="container">
			<div class="inner content clearfix">
				<div class="span two logos">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer First Column')) : ?><?php endif; ?>
				</div>
				<div class="span two footer-menu">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Second Column')) : ?><?php endif; ?>
				</div>
				<div class="span five break-on-mobile">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Third Column')) : ?><?php endif; ?>		
				</div>
			</div>			
		</div>
		<div class="bottom-nav">
			<div class="container">
				<span class="copyright">&copy; <?php bloginfo( 'name' ); ?></span>
				<?php wp_nav_menu( array( 'theme_location' => 'secondary_footer', 'menu_class' => 'clearfix menu', 'container' => false ) ); ?>
			</div>
		</div>		

	</footer><!-- #colophon -->
</div><!-- #page -->

<div class="floating-social-bar">

	<div class="facebook social">
		<!-- FB -->
		<div class="fb-like" data-href="http://www.facebook.com/henleymba " data-layout="box_count" data-action="like" data-show-faces="false" data-share="true"></div>
	</div>
	<div class="twitter social">
		<!-- Twitter -->
		<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-count="vertical">Tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>

	<div class="gplus social">
		<!-- Google + -->
		<div class="g-follow" data-annotation="vertical-bubble" data-height="15" data-href="https://plus.google.com/101311468312910554354" data-rel="publisher"></div>
		<script type="text/javascript">
		  (function() {
		    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		    po.src = 'https://apis.google.com/js/platform.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		  })();
		</script>
	</div>
</div>

<?php if( get_field('want_lightbox')): ?>
	<div id="lightbox" class="popupbox" data-delay="<?php the_field('lightbox_delay') ?>">
		<div id="lightbox-inner">
			<div class="container">
				<div class="span ten">
					<img class="scale" src="<?php the_field('lightbox_header_image', 'option'); ?>" alt="">
				</div>
				<div class="span five">
					<?php the_field('lightbox_content', 'option'); ?>
				</div>
				<div class="span five">
					<?php gravity_form(2, false, false, false, '', true); ?>
				</div>
			</div>			
		</div>
	</div>
<?php endif; ?>

<!-- responseTAP -->
<script type="text/javascript">
   var adiInit = "11230", adiRVO = true;
   var adiFunc = null;
   (function() {
      var adiSrc = document.createElement("script"); adiSrc.type = "text/javascript";
      adiSrc.async = true;
      adiSrc.src = ("https:" == document.location.protocol ? "https://static-ssl" : "http://static-cdn")
      	+ ".responsetap.com/static/scripts/rTapTrack.min.js";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(adiSrc, s);
   })();
</script>
<!--end of responseTAP -->
<?php wp_footer(); ?>
</body>
</html>