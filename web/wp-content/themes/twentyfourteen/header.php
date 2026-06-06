<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">


	<header id="masthead" class="site-header header-redesign" role="banner">
       <?php
       $header_image_id = 212;
       $header_image_url = wp_get_attachment_image_url($header_image_id, 'full');

       if ($header_image_url) : ?>
           <div id="site-header">
               <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                   <img
                       src="<?php echo esc_url($header_image_url); ?>"
                       alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
                       class="custom-header-logo"
                   >
               </a>
           </div>
       <?php endif; ?>
        <div class="header-block">
        <div class="header-nav-menu">
        <?php if ( has_nav_menu( 'secondary' ) ) : ?>
        	<nav role="navigation" class="navigation site-navigation secondary-navigation">
        		<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
        	</nav>
        	<?php endif; ?>
        	<div class="search-toggle">
            				<a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
            			</div>
        </div>
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>



			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
    </div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">
