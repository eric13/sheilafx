<?php
// Displays all of the <head> section and everything up till <div id="main">
// Adds JQuery and wraps images for non-strech containment via style.css
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=450">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script>
		$(function(){
			$('.entry-content img:not(h1 img)').wrap("<div class='imageContainer'></div>");
			$('.entry-content h1 img').wrap("<div class='imageContainerBig'></div>");
		});
	</script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="wrapper-one">
	<div id="wrapper-two">
	<div id="wrapper-three">

	<div id="page" class="hfeed site">

		<?php do_action( 'alexandria_before' ); ?>

		<header id="masthead" class="site-header" role="banner">

		<div class="responsive-container">

			<?php if( !of_get_option('logo_layout_style') || of_get_option('logo_layout_style') == 'sbys' ) : ?>

			<div class="site-header-half-width-logo">

				<div class="site-branding">

					<?php if( of_get_option('logo_image') ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo of_get_option('logo_image'); ?>" /></a>
					<?php else : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>

					<?php endif; ?>

				</div>

			</div>

			<div class="site-header-half-width-nav">

				<nav id="site-navigation" class="main-navigation" role="navigation">

				<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'alexandria' ); ?>"><?php _e( 'Skip to content', 'alexandria' ); ?></a></div>

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'main-nav', 'fallback_cb' => 'alexandria_backupmenu'  ) ); ?>
				</nav><!-- #site-navigation -->

			</div>

			<?php else : ?>

			<div class="site-branding">

				<div class="site-branding-inner">

				<?php if( of_get_option('logo_image') ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo of_get_option('logo_image'); ?>" /></a>
				<?php else : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				<?php endif; ?>

			</div>

			<div class="site-description-right">
				Contact<br />
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/email.png" alt="Contact" width="147" height="14" />
			</div>

		</div>

		<nav id="site-navigation" class="main-navigation nav-border-top" role="navigation">

		<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'alexandria' ); ?>"><?php _e( 'Skip to content', 'alexandria' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'main-nav', 'fallback_cb' => 'alexandria_backupmenu'  ) ); ?>
		</nav><!-- #site-navigation -->

		<?php endif; ?>

	</div><!-- #Responsive-Container -->

	</header><!-- #masthead -->

	<?php

		if( is_front_page() && ( !of_get_option('show_alexandria_slider_home') || of_get_option('show_alexandria_slider_home') == 'true' ) ) {
			get_template_part( 'slider' );
		}

		if( ( (is_page() && !is_front_page() ) || is_404() ) && ( !of_get_option('show_alexandria_slider_page') || of_get_option('show_alexandria_slider_page') == 'true' ) ) {
			get_template_part( 'slider' );
		}

		if( ( is_single() ) && ( !of_get_option('show_alexandria_slider_single') || of_get_option('show_alexandria_slider_single') == 'true' ) ) {
			get_template_part( 'slider' );
		}

		if( ( is_archive() || (is_home() && !is_front_page()) ) && ( !of_get_option('show_alexandria_slider_archive') || of_get_option('show_alexandria_slider_archive') == 'true' ) ) {
			get_template_part( 'slider' );
		}

	?>

	<div id="main" class="site-main">

		<div class="responsive-container">

		<div class="content-container">