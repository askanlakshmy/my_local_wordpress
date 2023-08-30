<?php 
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true,
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
function register_my_menus()
 {
    register_nav_menus(
    array(
 'header-menu' => __('header-menu'),
 'sub-menu' => __('sub-menu'),
 'mobile_menu' => __('Mobile Menu'),
));
}
add_action( 'init', 'register_my_menus' );

function wpb_widgets_init() {
    register_sidebar( array(
        'name' => __( 'header 1', 'wpb' ),
        'id' => 'header-1',
        'description' => __( 'The bottom bar appears on each page', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'wpb_widgets_init' );
function wpb_widgets_init2() {
		register_sidebar( array(
			'name' => __( 'header 2', 'wpb' ),
			'id' => 'header-2',
			'description' => __( 'The bottom bar appears on each page', 'wpb' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
}
add_action( 'widgets_init', 'wpb_widgets_init2' );
function wpb_widgets_init3() {
			register_sidebar( array(
				'name' => __( 'header 3', 'wpb' ),
				'id' => 'header-3',
				'description' => __( 'The bottom bar appears on each page', 'wpb' ),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget' => '</aside>',
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>',
			) );
}
add_action( 'widgets_init', 'wpb_widgets_init3' );
if( function_exists('acf_add_options_page') ) {
acf_add_options_sub_page('footer_section');
}
// define the wpcf7_is_tel callback 
function custom_filter_wpcf7_is_tel( $result, $tel ) { 
	$result = preg_match( '/^\(?\+?([0-9]{1,4})?\)?[-\. ]?(\d{10})$/', $tel );
	return $result; 
  }
  
  add_filter( 'wpcf7_is_tel', 'custom_filter_wpcf7_is_tel', 10, 2 );
  function max_title_length( $title ) {
	$max = 60;
	if( strlen( $title ) > $max ) {
	return substr( $title, 0, $max ). " &hellip;";
	} else {
	return $title;
	}
	}
	
	add_filter( 'the_title', 'max_title_length');