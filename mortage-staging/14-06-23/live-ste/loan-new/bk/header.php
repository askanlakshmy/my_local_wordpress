<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kava
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<script src="https://www.googleoptimize.com/optimize.js?id=OPT-PP9JRJV"></script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<?php wp_head(); ?>
<script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0084/9097.js" async="async" ></script>
</head>

<body <?php body_class(); ?>>
<?php kava_body_open(); ?>
<?php do_action( 'kava-theme/site/page-start' ); ?>
<?php kava_get_page_preloader(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kava' ); ?></a>
	<header id="masthead" <?php echo kava_get_container_classes( 'site-header' ); ?>>
		<?php kava_theme()->do_location( 'header', 'template-parts/header' ); ?>
	</header><!-- #masthead -->
	<?php do_action( 'kava-theme/site/breadcrumbs-area' ); ?>
	<div id="content" <?php echo kava_get_container_classes( 'site-content' ); ?>>
