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
	
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url");?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url");?>/css/mobile.css">
    <link href="<?php bloginfo("template_url");?>/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="<?php bloginfo("template_url");?>/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="<?php bloginfo("template_url");?>/css/bootstrap-responsive.css" type="text/css" rel="stylesheet" />
    <link href="<?php bloginfo("template_url");?>/css/bootstrap-responsive.min.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url");?>/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url");?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url");?>/js/js.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url");?>/js/jquery.stellar.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url");?>/js/waypoints.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url");?>/js/jquery.easing.1.3.js"></script>
    <script src="<?php bloginfo("template_url");?>/js/jquery.ba-hashchange.min.js"></script>
    <script src="<?php bloginfo("template_url");?>/js/jquery.sequence-min.js"></script>
    <script src="<?php bloginfo("template_url");?>/js/sequencejs-options.modern-slide-in.js"></script>
</head>

<body <?php body_class(); ?>>
<?php /*?><div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</div>

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
	</header><!-- #masthead -->

	<div id="main" class="site-main"><?php */?>
