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


	<header id="masthead" class="topbar site-header" role="banner">
        <div class="topbar-inner">

            <a href="<?php echo esc_url(home_url('/')); ?>" class="brand" rel="home">
                <?php
                $logo_id = 212;
                $logo_url = wp_get_attachment_image_url($logo_id, 'full');
                ?>

                <?php if ($logo_url) : ?>
                    <img
                        src="<?php echo esc_url($logo_url); ?>"
                        alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
                        class="brand-logo"
                    >
                <?php endif; ?>

                <div class="brand-text">
                    <div class="brand-title">
                        <?php bloginfo('name'); ?>
                    </div>
                    <div class="brand-subtitle">
                        Тернопільський національний технічний університет імені Івана Пулюя
                    </div>
                </div>
            </a>

            <div class="topbar-tools">
                <form role="search" method="get" class="header-search-form" action="<?php echo esc_url(home_url('/')); ?>">
                    <input
                        type="search"
                        name="s"
                        class="header-search-input"
                        placeholder="Пошук..."
                        value="<?php echo esc_attr(get_search_query()); ?>"
                    >
                    <button type="submit" class="header-search-button" aria-label="Пошук">
                        🔍
                    </button>
                </form>

                <div class="lang-switcher">
                    UA
                </div>
            </div>

        </div>
    </header>

    <nav class="navbar" aria-label="Головне меню">
        <div class="navbar-inner">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'navbar-menu',
                'menu_id'        => 'primary-menu',
                'fallback_cb'    => 'wp_page_menu',
            ));
            ?>
        </div>
    </nav>

	<div id="main" class="site-main">
