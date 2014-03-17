<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package landing-mba
 * @since landing-mba 1.0
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>	

	<div id="content">

		<?php if(get_field('slideshow')): ?>
		<div id="header-image" class="container clearfix">
			<?php
				$values = get_field('slideshow');
				$number_of_slides = count($values);
				?>
				<?php if($number_of_slides > 1): ?>
					<div id="homepage-scroller" class="scroller" data-auto-scroll="true">
						<div class="outer">
							<div class="inner">
								<div class="scroller-mask">						
									<?php $i = 0; ?>
									<?php while (the_repeater_field('slideshow')) : ?>					
									<div class="scroll-item <?php if($i == 0) echo 'current'; ?>" data-id="<?php echo $i;?>">
										<img class="scale" src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>">
										<span class="title <?php the_sub_field('title_position'); ?>" style="background-color: <?php the_sub_field('title_background_colour'); ?>;">
											<?php the_sub_field('title'); ?>
										</span> 
									</div>
									<?php $i++; ?>
									<?php endwhile; ?>
								</div>
								<div class="scroller-navigation">
									<a class="prev-btn icons-arrow-left"></a>
									<a class="next-btn icons-arrow-right"></a>
								</div>
							</div>
						</div>
					</div><!-- #homepage-scroller -->			
				<?php else: ?>
					<?php while (the_repeater_field('slideshow', $curr_page_id)) : ?>		
						<div class="scroll-item">
							<img class="scale" src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('title'); ?>">
							<span class="title <?php the_sub_field('title_position'); ?>" style="background-color: <?php the_sub_field('title_background_colour'); ?>;">
								<?php the_sub_field('title'); ?>
							</span>
						</div>
					<?php endwhile; ?>								
				<?php endif; ?>
			</div>	
		<?php endif; ?>	
		<!-- end slideshow -->
		<div class="post">
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
				<div class="linkedin social">
					<script src="//platform.linkedin.com/in.js" type="text/javascript">
					  lang: en_US
					</script>
					<script type="IN/Share" data-url="http://dev.kishandchips.com/landing-mba/website/build/" data-counter="top"></script>					
				</div>
			</div>
		
			<?php if(!$post->post_content == ''): ?>
			<div class="page-content">
			<?php the_content(); ?>
			</div>
			<?php endif; ?>

			<?php if ( get_field('content')):?>
				<?php get_template_part('inc/content'); ?>
			<?php endif; ?>
		</div>
	</div>
	<?php get_template_part('sidebar'); ?>
	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>