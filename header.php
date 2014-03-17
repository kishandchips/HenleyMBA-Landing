<!DOCTYPE html>
<!--[if lt IE 7]>      <html xmlns:fb="http://ogp.me/ns/fb#" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html xmlns:fb="http://ogp.me/ns/fb#" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html xmlns:fb="http://ogp.me/ns/fb#" class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html xmlns:fb="http://ogp.me/ns/fb#" class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html xmlns:fb="http://ogp.me/ns/fb#" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta name="format-detection" content="telephone=no">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />     
	<?php 
		function load_assets(){
			wp_enqueue_style('style', get_template_directory_uri().'/css/style.css');

			wp_enqueue_script('modernizr', get_template_directory_uri().'/js/libs/modernizr.min.js');
			wp_enqueue_script('jquery', get_template_directory_uri().'/js/libs/jquery.min.js');
			wp_enqueue_script('scroller', get_template_directory_uri().'/js/plugins/jquery.scroller.js');	
			wp_enqueue_script('easing', get_template_directory_uri().'/js/plugins/jquery.easing.js');
			wp_enqueue_script('selecter', get_template_directory_uri().'/js/plugins/jquery.fs.selecter.min.js');
			wp_enqueue_script('prettyPhoto', get_template_directory_uri().'/js/plugins/jquery.colorbox-min.js');
			wp_enqueue_script('main', get_template_directory_uri().'/js/main.js');
		}
		add_action('wp_enqueue_scripts', 'load_assets');
	?>
	<?php wp_head(); ?>
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/ie.css" />
	<![endif]-->
	<!--[if lt IE 8]> <script src="<?php bloginfo('template_url')?>/js/lte-ie7.js"></script> <![endif]-->
	<!--[if lt IE 8]> <script src="<?php bloginfo('template_url')?>/css/ie7.css"></script> <![endif]-->

    <script type="text/javascript">
		var themeUrl = '<?php bloginfo( 'template_url' ); ?>';
		var baseUrl = '<?php bloginfo( 'url' ); ?>';
	</script>	
	<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<link rel="stylesheet" type="text/css" href="http://assets.cookieconsent.silktide.com/current/style.min.css"/>
<script type="text/javascript" src="http://assets.cookieconsent.silktide.com/current/plugin.min.js"></script>
<script type="text/javascript">
// <![CDATA[
cc.initialise({
	cookies: {
		necessary: {}
	},
	settings: {
		consenttype: "implicit",
		bannerPosition: "push",
		style: "monochrome",
		tagPosition: "vertical-left",
		hideprivacysettingstab: true
	}
});
// ]]>
</script>
<!-- End Cookie Consent plugin -->
<script type="text/javascript" class="cc-onconsent-social" src="https://apis.google.com/js/plusone.js"></script>
</head>
<?php 
	global $post;
	$curr_page_id = $post->ID;
?>
<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=579639135402354";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


	<div id="page">
		<div class="container">
			<div class="call-us">
				<p class="number">Freephone: <span class="rTapNumber74358">07595 292 684</span></p>
				<p class="number">International: <span class="rTapNumber74357">07595 292 684</span></p>
				<i class="call-icon"></i>
			</div>
		</div>
		<header id="header" role="banner">
			<div class="container">
				<div class="logos">
					<a href="<?php bloginfo( 'url' ); ?>" class="logo henley-bus" title="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
						<img src="<?php bloginfo('template_url')?>/images/logos/site.jpg" alt="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
					</a>				
				</div>				

				<div class="mob-menu">
					<a href="#">Menu</a>
				</div>
				
				<?php wp_nav_menu( array( 'theme_location' => 'header_top_nav', 'menu_class' => 'menu clearfix', 'container' => false ) ); ?>

			</div>		
		</header><!-- #masthead -->

		<div id="main" role="main" class="container">
