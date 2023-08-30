<?php

// define('TEMPLATEPATH', get_template_directory_uri());

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/redux/framework.php' ) ) {
	require_once( dirname( __FILE__ ) . '/redux/framework.php' );
}
if ( !isset( $youthist_option ) && file_exists( dirname( __FILE__ ) . '/theme-options.php' ) ) {
	require_once( dirname( __FILE__ ) . '/theme-options.php' );
}


include(TEMPLATEPATH . '/includes/widgets/youthist-ad-300x250-1.php');
include(TEMPLATEPATH . '/includes/widgets/youthist-ad-300x250-2.php');
include(TEMPLATEPATH . '/includes/widgets/youthist-ad-300x250-3.php');

include(TEMPLATEPATH . '/includes/widgets/youthist-ad-300x600-1.php');

include(TEMPLATEPATH . '/includes/widgets/youthist-featured-product.php');
include(TEMPLATEPATH . '/includes/widgets/youthist-featured-literature.php');


function custom_remove_meta_boxes() {

	remove_meta_box('aiosp','event','advanced');
	remove_meta_box('aiosp','post','advanced');
	remove_meta_box('mymetabox_revslider_0', 'page', 'normal' );
	remove_meta_box('mymetabox_revslider_0', 'post', 'normal' );
	remove_meta_box('mymetabox_revslider_0', 'event', 'normal' );
}
add_action( 'do_meta_boxes', 'custom_remove_meta_boxes' );

function get_excerpt($excerpt, $length = 50){
	//Strips tags and images
	$the_excerpt = strip_tags(strip_shortcodes($excerpt));
	//explode string by spacing
	$words = explode(' ', $the_excerpt, $length + 1);

	if(count($words) > $length) :
		array_pop($words);
		array_push($words, '..');
		$the_excerpt = implode(' ', $words);
	endif;

	$the_excerpt = '<p>' . $the_excerpt . '</p>';
	return $the_excerpt;
}

add_filter('comment_form_defaults', 'change_comment_title');

function change_comment_title($defaults) {
	$defaults['title_reply'] = 'Leave a comment';
	return $defaults;
}


function add_post_type_product() {
	register_post_type( 'product',
		array(
			'label'				=> __('Product' ),
			'labels'			=> array(
				'add_new_item'	=> 'Add New Product',
				'edit_item'		=> 'Edit Product',
			),
			'public'			=> true,
			'show_ui'			=> true,
			'show_in_nav_menus' => false,
			'rewrite'			=> array( 'slug' => 'product', 'with_front' => true ),
			'hierarchical'		=> true,
			'menu_position'		=> 5,
			'has_archive'		=> false,
			'exclude_from_search'=> false,//true,
			'supports'			=> array('title','editor','thumbnail','excerpt')
		)
	);

	$taxonomyargs = array(
		'query_var' 		=> true,
		'hierarchical' 		=> true,
		'show_in_nav_menus' => true,
		'label' 			=>  __('Product Categories' ),
		'singular_name' 	=> __('Category' )
	);
	register_taxonomy('products', 'product', $taxonomyargs );
}

function add_post_type_literature() {

	register_post_type( 'literature',
		array(
			'label'				=> __('Literature' ),
			'labels'			=> array(
				'add_new_item'	=> 'Add New Literature',
				'edit_item'		=> 'Edit Literature',
			),
			'public'			=> true,
			'show_ui'			=> true,
			'show_in_nav_menus' => false,
			'rewrite'			=> array( 'slug' => 'literature', 'with_front' => true ),
			'hierarchical'		=> true,
			'menu_position'		=> 5,
			'has_archive'		=> false,
			'exclude_from_search'=> false,//true,
			'supports'			=> array('title','editor','thumbnail')
		)
	);

	$taxonomyargs = array(
		'query_var' 		=> true,
		'hierarchical' 		=> true,
		'show_in_nav_menus' => true,
		'label' 			=>  __('Literature Categories' ),
		'singular_name' 	=> __('Category' )
	);

	register_taxonomy('literatures', 'literature', $taxonomyargs );
}

function add_post_type_glossary() {
	register_post_type( 'glossary',
		array(
			'label'				=> __('Glossary' ),
			'labels'			=> array(
				'add_new_item'	=> 'Add New Glossary',
				'edit_item'		=> 'Edit Glossary',
			),
			'public'			=> true,
			'show_ui'			=> true,
			'show_in_nav_menus' => false,
			'rewrite'			=> array( 'slug' => 'glossary', 'with_front' => true ),
			'hierarchical'		=> true,
			'menu_position'		=> 5,
			'has_archive'		=> false,
			'exclude_from_search'=> false,//true,
			'supports'			=> array('title','editor','thumbnail')
		)
	);

	$taxonomyargs = array(
		'query_var' 		=> true,
		'hierarchical' 		=> true,
		'show_in_nav_menus' => true,
		'label' 			=>  __('Glossary Categories' ),
		'singular_name' 	=> __('Category')
	);
	register_taxonomy('glossaries', 'glossary', $taxonomyargs );
}



function add_list_columns_product($columns){

	$new_columns = array();
	$new_columns['cb'] = '<input type="checkbox" />';

	$new_columns['title'] = __('Title');
	$new_columns['images'] = __('Images');
	//$new_columns['author'] = __('Author');
	$new_columns['menu_order'] = "Order";
	$new_columns['products'] = __('Categories');
	$new_columns['date'] = __('Date');
	return $new_columns;
}

function add_list_columns_literature($columns){

	$new_columns = array();
	$new_columns['cb'] = '<input type="checkbox" />';

	$new_columns['title'] = __('Title');
	$new_columns['images'] = __('Images');
	//$new_columns['author'] = __('Author');
	$new_columns['menu_order'] = "Order";
	$new_columns['literatures'] = __('Categories');
	$new_columns['date'] = __('Date');
	return $new_columns;
}

function add_list_columns_glossary($columns){

	$new_columns = array();
	$new_columns['cb'] = '<input type="checkbox" />';

	$new_columns['title'] = __('Title');
	$new_columns['images'] = __('Images');
	//$new_columns['author'] = __('Author');
	$new_columns['menu_order'] = "Order";
	$new_columns['glossaries'] = __('Categories');
	$new_columns['date'] = __('Date');
	return $new_columns;
}

function manage_column_product($column_name){
	global $post;
	$posttype = 'product';
	$taxonom = 'products';

	$id = $post->ID;
	$title = $post->post_title;
	switch($column_name){
		case 'images':
			$thumbnailid = get_post_thumbnail_id($id);
			$imagesrc = wp_get_attachment_image_src($thumbnailid, 'thumbnail');
			if($imagesrc){
				echo '<img src="'.$imagesrc[0].'" width="50" alt="'.$title.'" />';
			}else{
				_e('No Featured Image');
			}
			break;

		case 'products':
			$postterms = get_the_terms($id, $taxonom);
			if($postterms){
				$termlists = array();
				foreach($postterms as $postterm){
					$termlists[] = '<a href="'.admin_url('edit.php?'.$taxonom.'='.$postterm->slug.'&post_type='.$posttype).'">'.$postterm->name.'</a>';
				}
				if(count($termlists)>0){
					$termtext = implode(", ",$termlists);
					echo $termtext;
				}
			}

			break;
		case 'menu_order':
			$order = $post->menu_order;
			echo $order;
		break;
	}
}

function manage_column_literature($column_name){
	global $post;
	$posttype = 'literature';
	$taxonom = 'literatures';

	$id = $post->ID;
	$title = $post->post_title;
	switch($column_name){
		case 'images':
			$thumbnailid = get_post_thumbnail_id($id);
			$imagesrc = wp_get_attachment_image_src($thumbnailid, 'thumbnail');
			if($imagesrc){
				echo '<img src="'.$imagesrc[0].'" width="50" alt="'.$title.'" />';
			}else{
				_e('No Featured Image');
			}
			break;

		case 'literatures':
			$postterms = get_the_terms($id, $taxonom);
			if($postterms){
				$termlists = array();
				foreach($postterms as $postterm){
					$termlists[] = '<a href="'.admin_url('edit.php?'.$taxonom.'='.$postterm->slug.'&post_type='.$posttype).'">'.$postterm->name.'</a>';
				}
				if(count($termlists)>0){
					$termtext = implode(", ",$termlists);
					echo $termtext;
				}
			}

			break;
		case 'menu_order':
			$order = $post->menu_order;
			echo $order;
		break;
	}
}

function manage_column_glossary($column_name){
	global $post;
	$posttype = 'glossary';
	$taxonom = 'glossaries';

	$id = $post->ID;
	$title = $post->post_title;
	switch($column_name){
		case 'images':
			$thumbnailid = get_post_thumbnail_id($id);
			$imagesrc = wp_get_attachment_image_src($thumbnailid, 'thumbnail');
			if($imagesrc){
				echo '<img src="'.$imagesrc[0].'" width="50" alt="'.$title.'" />';
			}else{
				_e('No Featured Image');
			}
			break;

		case 'glossaries':
			$postterms = get_the_terms($id, $taxonom);
			if($postterms){
				$termlists = array();
				foreach($postterms as $postterm){
					$termlists[] = '<a href="'.admin_url('edit.php?'.$taxonom.'='.$postterm->slug.'&post_type='.$posttype).'">'.$postterm->name.'</a>';
				}
				if(count($termlists)>0){
					$termtext = implode(", ",$termlists);
					echo $termtext;
				}
			}

			break;
		case 'menu_order':
			$order = $post->menu_order;
			echo $order;
		break;
	}
}


function add_taxonomy_filter_product() {
	global $typenow;
	$posttype = 'product';
	$taxonomy = 'products';
	if( $typenow==$posttype){
		$filters = array($taxonomy);
		foreach ($filters as $tax_slug) {
			$tax_obj = get_taxonomy($tax_slug);
			$tax_name = $tax_obj->labels->name;
			$terms = get_terms($tax_slug);
			echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
			echo "<option value=''>".__('View All')." "."$tax_name</option>";
			if(count($terms)){
				foreach ($terms as $term) {
					$selectedstr = '';
					if(isset($_GET[$tax_slug]) && $_GET[$tax_slug] == $term->slug){
						$selectedstr = ' selected="selected"';
					}
					echo '<option value='. $term->slug. $selectedstr . '>' . $term->name .' (' . $term->count .')</option>';
				}
			}
			echo "</select>";
		}
	}
}

function add_taxonomy_filter_literature() {
	global $typenow;
	$posttype = 'literature';
	$taxonomy = 'literatures';
	if( $typenow==$posttype){
		$filters = array($taxonomy);
		foreach ($filters as $tax_slug) {
			$tax_obj = get_taxonomy($tax_slug);
			$tax_name = $tax_obj->labels->name;
			$terms = get_terms($tax_slug);
			echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
			echo "<option value=''>".__('View All')." "."$tax_name</option>";
			if(count($terms)){
				foreach ($terms as $term) {
					$selectedstr = '';
					if(isset($_GET[$tax_slug]) && $_GET[$tax_slug] == $term->slug){
						$selectedstr = ' selected="selected"';
					}
					echo '<option value='. $term->slug. $selectedstr . '>' . $term->name .' (' . $term->count .')</option>';
				}
			}
			echo "</select>";
		}
	}
}

function add_taxonomy_filter_glossary() {
	global $typenow;
	$posttype = 'glossary';
	$taxonomy = 'glossaries';
	if( $typenow==$posttype){
		$filters = array($taxonomy);
		foreach ($filters as $tax_slug) {
			$tax_obj = get_taxonomy($tax_slug);
			$tax_name = $tax_obj->labels->name;
			$terms = get_terms($tax_slug);
			echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
			echo "<option value=''>".__('View All')." "."$tax_name</option>";
			if(count($terms)){
				foreach ($terms as $term) {
					$selectedstr = '';
					if(isset($_GET[$tax_slug]) && $_GET[$tax_slug] == $term->slug){
						$selectedstr = ' selected="selected"';
					}
					echo '<option value='. $term->slug. $selectedstr . '>' . $term->name .' (' . $term->count .')</option>';
				}
			}
			echo "</select>";
		}
	}
}


/*
function order_column_register_sortable($columns){
  $columns['menu_order'] = 'menu_order';
  return $columns;
}*/


add_action('init', 'add_post_type_product');
add_filter('manage_edit-product_columns', 'add_list_columns_product');
add_action('manage_product_posts_custom_column', 'manage_column_product');
add_action('restrict_manage_posts', 'add_taxonomy_filter_product');

function add_mens_menu() {
  register_nav_menu('mens-menu',__( 'Mens Menu' ));
}
add_action( 'init', 'add_mens_menu' );
/*
add_action('init', 'add_post_type_literature');
add_filter('manage_edit-literature_columns', 'add_list_columns_literature');
add_action('manage_literature_posts_custom_column', 'manage_column_literature');
add_action('restrict_manage_posts', 'add_taxonomy_filter_literature');
*/

/*add_action('init', 'add_post_type_glossary');
add_filter('manage_edit-glossary_columns', 'add_list_columns_glossary');
add_action('manage_glossary_posts_custom_column', 'manage_column_glossary');
add_action('restrict_manage_posts', 'add_taxonomy_filter_glossary');
*/
//add_filter('manage_edit-product_sortable_columns','order_column_register_sortable');


function theme_uri($src = ''){
	$data = get_template_directory_uri();
	if($src != '') $data.="/".$src;
	return $data;
}

// function add_favicon() {
// 	$favicon_url = get_template_directory_uri() . '/favicon.ico';
// 	echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
// }
// add_action('wp_head', 'add_favicon');
// add_action('login_head', 'add_favicon');
// add_action('admin_head', 'add_favicon');


function login_size() { ?>
	<style type="text/css">
		body.login div#login p#nav,
		body.login div#login p#backtoblog { display:block; margin:0; padding:0; line-height:1.6; font-size:12px;}
		body.login div#login p#nav{ margin:10px 0 2px 15px; }
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'login_size' );

function remove_admin_bar() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('wp-logo');          // Remove the WordPress logo
	$wp_admin_bar->remove_menu('about');            // Remove the about WordPress link
	$wp_admin_bar->remove_menu('wporg');            // Remove the WordPress.org link
	$wp_admin_bar->remove_menu('documentation');    // Remove the WordPress documentation link
	$wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
	$wp_admin_bar->remove_menu('feedback');         // Remove the feedback link
	$wp_admin_bar->remove_menu('view-site');        // Remove the view site link
	$wp_admin_bar->remove_menu('updates');          // Remove the updates link
	$wp_admin_bar->remove_menu('comments');         // Remove the comments link
	$wp_admin_bar->remove_menu('w3tc');             // If you use w3 total cache remove the performance link
}
add_action( 'wp_before_admin_bar_render', 'remove_admin_bar' );

function remove_dashboard_meta() {
		remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
}
add_action( 'admin_init', 'remove_dashboard_meta' );


function remove_admin_menus() {
	remove_menu_page( 'edit-comments.php' );
}
//add_action( 'admin_menu', 'remove_admin_menus' );

function remove_comment_support() {
	remove_post_type_support( 'post', 'comments' );
	remove_post_type_support( 'page', 'comments' );
}
//add_action('init', 'remove_comment_support', 100);


remove_action('wp_head', 'wp_generator');
add_filter('show_admin_bar', '__return_false');
add_filter('widget_text', 'do_shortcode');


function youthist_setup() {
	load_theme_textdomain( 'youthist', get_template_directory() . '/languages' );
	add_editor_style();

	register_nav_menu( 'primary', __( 'Primary Menu', 'youthist' ) );
	register_nav_menu( 'topmenu', __( 'Top Menu', 'youthist' ) );
	register_nav_menu( 'footer', __( 'Footer Menu', 'youthist' ) );
	register_nav_menu( 'kr_menu', __( 'KR Menu', 'youthist' ) );
	register_nav_menu( 'in_menu', __( 'IN Menu', 'youthist' ) );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 720, 9999 );
	add_image_size( 'literature-thumb', 300, 350, true );
	add_image_size( 'product-thumb', 250, 200, true );
	add_image_size( 'recommended-thumb', 240, 300, true );
}
add_action( 'after_setup_theme', 'youthist_setup' );



function youthist_scripts_styles() {
	global $wp_styles;

	wp_register_script('hoverIntent', get_template_directory_uri().'/js/hoverIntent.js');
	wp_register_script('easing', get_template_directory_uri().'/js/jquery.easing.1.3.min.js');
	wp_register_script('flexslider', get_template_directory_uri().'/js/jquery.flexslider-min.js');

	//loading js from google cdn - currenty off
	// wp_deregister_script('jquery');
	// wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', false, false, false);
	wp_enqueue_script('jquery');

	wp_enqueue_script('flexslider');
	wp_enqueue_script('ajax-load-more'); // Already registered, just needs to be enqueued
	// wp_enqueue_script('youthist-site-js', get_template_directory_uri() . '/js/site.js');
	// wp_enqueue_script('youthist-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20140711', true );

	// Loads our main stylesheet.
	wp_register_style('font-awesome', get_template_directory_uri() . '/css/fontawesome-all.min.css');
	wp_register_style('MyFontsWebfontsKit',   get_template_directory_uri() . '/css/MyFontsWebfontsKit.css');

	wp_enqueue_style('customcss', get_template_directory_uri() . '/custom.min.css', array(), '2');

	// Speed
	// if ( (is_front_page()) || (is_single()) || (is_category()) || (is_archive()) ) {
	// 	wp_register_style('customcss',   get_template_directory_uri() . '/custom.css', array(
	// 		// 'superfish',
	// 		// 'font-awesome',
	// 		// 'flexslider',
	// 		// 'fancyboxcss',
	//   //       'MyFontsWebfontsKit'
	// 	));
	// 	wp_enqueue_style('customcss');
	// }else{
	// 	wp_register_style('customcss',   get_template_directory_uri() . '/custom.css', array(
	// 		// 'superfish',
	// 		'font-awesome',
	// 		'flexslider',
	// 		// 'fancyboxcss',
	// 		'MyFontsWebfontsKit'
	// 	));
	// 	wp_enqueue_style('customcss');
	// }
	// Speed
}

add_action( 'wp_enqueue_scripts', 'youthist_scripts_styles' );



function youthist_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'youthist' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'youthist_wp_title', 10, 2 );




function youthist_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) )
		$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'youthist_page_menu_args' );



function youthist_widgets_init() {

	register_sidebar( array(
		'name'			=> 'Main Sidebar',
		'id'			=> 'sidebar',
		'description'	=> '',
		'before_widget' => '<div id="%1$s" class="widget-sidebar %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="widget-sidebar-title">',
		'after_title'	=> '</h3>',
	));

	register_sidebar( array(
		'name'			=> 'Homepage Second Sidebar',
		'id'			=> 'sidebar-1',
		'description'	=> '',
		'before_widget' => '<div id="%1$s" class="widget-sidebar %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="widget-sidebar-title">',
		'after_title'	=> '</h3>',
	));
	register_sidebar( array(
		'name'			=> 'India Banner',
		'id'			=> 'sidebar-2',
		'description'	=> '',
		'before_widget' => '<div id="%1$s" class="widget-sidebar %2$s" style="display:flex;flex-direction:column;">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3 class="yt-story-caption animate border-box clr" style="order:2;text-align:center;">',
		'after_title'	=> '</h3>',
	));
}
add_action( 'widgets_init', 'youthist_widgets_init' );



if ( ! function_exists( 'youthist_content_nav' ) ) :
function youthist_content_nav( $html_id ) {
	global $wp_query;

	$html_id = esc_attr( $html_id );

	if ( $wp_query->max_num_pages > 1 ) :
		if(function_exists('wp_pagenavi')){
			wp_pagenavi();
		} else {
	?>
		<nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">
			<h3 class="assistive-text"><?php _e( 'Post navigation :', 'youthist' ); ?></h3>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'youthist' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'youthist' ) ); ?></div>
		</nav><!-- #<?php echo $html_id; ?> .navigation -->
	<?php }
	endif;
}
endif;




if ( ! function_exists( 'youthist_comment' ) ) :
function youthist_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'youthist' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'youthist' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<header class="comment-meta comment-author vcard">
				<?php
					echo get_avatar( $comment, 44 );
					printf( '<cite><b class="fn">%1$s</b> %2$s</cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually.
						( $comment->user_id === $post->post_author ) ? '<span>' . __( 'Post author', 'youthist' ) . '</span>' : ''
					);
					printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						/* translators: 1: date, 2: time */
						sprintf( __( '%1$s at %2$s', 'youthist' ), get_comment_date(), get_comment_time() )
					);
				?>
			</header><!-- .comment-meta -->

			<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'youthist' ); ?></p>
			<?php endif; ?>

			<section class="comment-content comment">
				<?php comment_text(); ?>
				<?php edit_comment_link( __( 'Edit', 'youthist' ), '<p class="edit-link">', '</p>' ); ?>
			</section><!-- .comment-content -->

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'youthist' ), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // end comment_type check
}
endif;



if ( ! function_exists( 'youthist_entry_meta' ) ) :
function youthist_entry_meta() {

	$utility_text = __( 'Posted on %1$s.', 'youthist' );

	printf(
		$utility_text,
		get_the_time('d M y')
	);
}
endif;


function new_excerpt_more($more) {
	return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');



function new_excerpt_length($length) {
	if(is_search()) return 30;
	return 45;
}
add_filter('excerpt_length', 'new_excerpt_length');




function taxonomy_checklist_checked_ontop_filter ($args){
	$args['checked_ontop'] = false;
	return $args;

}
add_filter('wp_terms_checklist_args','taxonomy_checklist_checked_ontop_filter');




function my_post_queries( $query ) {
	if (!is_admin() && $query->is_main_query()){
		if(is_tax('products')){
			$query->set('posts_per_page', 21);
			//$query->set('orderby', 'menu_order');
			//$query->set('order','ASC');
		} else if(is_tax('literatures')){
			$query->set('posts_per_page', 21);
		}else if (is_home()){
			$query->set('posts_per_page', 7);
			$query->set('post_type', array('product', 'post'));
			//$query->set('post_type', 'product');
		}

	}
}
add_action( 'pre_get_posts', 'my_post_queries' );



function youthist_body_class( $classes ) {
	if(is_search()) $classes[] = "archive";
	if(is_active_sidebar('sidebar')){
		$classes[] = "with-sidebar";
	} else {
		$classes[] = "full-width";
	}
	return $classes;
}
add_filter('body_class', 'youthist_body_class' );


function tax_term_title($term){
	$terms = get_the_terms(get_the_ID(), $term);
	$title = "";
	foreach($terms as $term) {
		if($term->parent > 0){
			$title = $term->name;
			break;
		}
	}
	echo $title;
}


/* Custom MetaBox */
add_filter( 'rwmb_meta_boxes', 'youthist_register_meta_boxes' );

function youthist_register_meta_boxes( $meta_boxes )
{
	$prefix = 'youthist_';

	// 1st meta box
	$meta_boxes[] = array(
		'id'       => 'advertisement',
		'title'    => 'Advertisement',
		'pages'    => array( 'post', 'page', 'glossary', 'literature', 'product' ),
		'context'  => 'normal',
		'priority' => 'high',

		'fields' => array(
			array(
				'name'   => '728x90 Top 3rd Ads options :',
				'desc'   => 'This setting will replace "728x90 Top 3rd Ads" in "Theme Options >> Advertisement" for this post. ',
				'id'     => $prefix . 'ads_type',
				'type'	 => 'radio',
				'options'=> array('1'=>'Disabled ', '2'=>'Global ', '3'=>'Force for this post'),
				'std'    => '2',
				'class'  => '',
				'clone'  => false
			),
			array(
				'name'   => '728x90 Top 3rd Ads Code :',
				'desc'   => 'Please insert your Ads Code if you choose "Force Ads for this post". Paste your image/iframe tag or your Google Ads script. ',
				'id'     => $prefix . 'ads_code',
				'type'	 => 'textarea',
				'std'    => '',
				'class'  => '',
				'clone'  => false
			)
		)
	);

	return $meta_boxes;
}

function wcs_exclude_category_search( $query ) {
    //   if (! is_admin() || ! $query->is_main_query() )
    //     return;
    //   if (is_search()) {
    //     $query->set( 'category__in', array(47,48,50,51,53,52,49));
    //   }

    $exclude = (!is_admin() || (defined('DOING_AJAX') && DOING_AJAX)) && $query->is_search;

    $exclude = apply_filters('searchexclude_filter_search', $exclude, $query);

    if ($exclude) {
        $query->set('post__not_in', $ids);
    }

}
//add_action( 'pre_get_posts', 'wcs_exclude_category_search',1);

function wpb_exclude_from_home( $query ) {
    if ($query->is_front_page()) {
        $query->set( 'cat', '-47,-57,-58' );
    }
}
//add_action( 'pre_get_posts', 'wpb_exclude_from_home' );





function crunchify_deals_custom_post_type_ind() {
	$labels = array(
		'name'                => __( 'india' ),
		'singular_name'       => __( 'india'),
		'menu_name'           => __( 'india'),
		'parent_item_colon'   => __( 'Parent India'),
		'all_items'           => __( 'All India'),
		'view_item'           => __( 'View India'),
		'add_new_item'        => __( 'Add New India'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit India'),
		'update_item'         => __( 'Update India'),
		'search_items'        => __( 'Search India'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'india'),
		'description'         => __(''),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		//'taxonomies' 	      => array('post_tag'),
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'india', $args );
}

add_action( 'init', 'crunchify_deals_custom_post_type_ind', 0 );
add_action( 'init', 'crunchify_create_deals_custom_taxonomy_ind', 0 );
function crunchify_create_deals_custom_taxonomy_ind() {

    $labels = array(
      'name' => _x( 'India category', 'taxonomy general name' ),
      'singular_name' => _x( 'India category', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Types' ),
      'all_items' => __( 'All Types' ),
      'parent_item' => __( 'Parent Type' ),
      'parent_item_colon' => __( 'Parent Type:' ),
      'edit_item' => __( 'Edit Type' ),
      'update_item' => __( 'Update Type' ),
      'add_new_item' => __( 'Add New Type' ),
      'new_item_name' => __( 'New Type Name' ),
      'menu_name' => __( 'India category' ),
    );

    register_taxonomy('in',array('india'), array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'in','with_front' => true ),
    ));
  }

add_action('wp_footer','tyist_insert_script_code');
function tyist_insert_script_code() {
	?>
		<script type="text/javascript">

			jQuery(function($){
				$(document).on('click','.close-banner',function(){
					var parent = $(this).parents('.footer-banner-mobile');
					parent.removeClass('show');
				})
				setTimeout(function(){
					$('.footer-banner-mobile').addClass('show');
				},5000);
			})
		</script>

	<?php
}


add_action('wp_head', 'apj_customestyles', 100);

function apj_customestyles()
{

    if ( (is_front_page()) || (is_page()) || (is_single()) || (is_category()) || (is_archive()) ) { ?>
    <!-- Front page only  -->
      <style type="text/css">
        /*font-awesome*/
          .fab,.fas{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1}.fa-lg{font-size:1.33333em;line-height:.75em;vertical-align:-.0667em}.fa-chevron-right:before{content:"\f054"}.fa-envelope:before{content:"\f0e0"}.fa-facebook-f:before{content:"\f39e"}.fa-instagram:before{content:"\f16d"}.fa-pinterest-p:before{content:"\f231"}.fa-search:before{content:"\f002"}.fa-times:before{content:"\f00d"}.fa-twitter:before{content:"\f099"}
          @font-face{font-family:Font Awesome\ 5 Brands; font-display:swap; font-style:normal;font-weight:400;src:url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-brands-400.eot);src:url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-brands-400.eot?#iefix) format("embedded-opentype"),url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-brands-400.woff2) format("woff2"),url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-brands-400.woff) format("woff"),url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-brands-400.ttf) format("truetype"),url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-brands-400.svg#fontawesome) format("svg")}.fab{font-family:Font Awesome\ 5 Brands}
          @font-face{font-family:Font Awesome\ 5 Free; font-display:swap; font-style:normal;font-weight:400;src:url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-regular-400.eot);src:url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-regular-400.eot?#iefix) format("embedded-opentype"),url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-regular-400.woff2) format("woff2"),url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-regular-400.woff) format("woff"),url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-regular-400.ttf) format("truetype"),url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-regular-400.svg#fontawesome) format("svg")}
          @font-face{font-family:Font Awesome\ 5 Free; font-display:swap; font-style:normal;font-weight:900;src:url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-solid-900.eot);src:url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"),url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-solid-900.woff2) format("woff2"),url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-solid-900.woff) format("woff"),url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-solid-900.ttf) format("truetype"),url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-solid-900.svg#fontawesome) format("svg")}.fas{font-family:Font Awesome\ 5 Free}.fas{font-weight:900}
        /*font-awesome*/

        /*MyFontsWebfontsKit*/
          @font-face{font-family:brandongrotesqueweb-light; font-display:swap; src:url(https://www.theyouthist.com/wp-content/themes/youthist/css/webfonts/304852_0_0.eot);src:url(https://www.theyouthist.com/wp-content/themes/youthist/css/webfonts/304852_0_0.eot?#iefix) format('embedded-opentype'),url(https://www.theyouthist.com/wp-content/themes/youthist/css/webfonts/304852_0_0.woff2) format('woff2'),url(https://www.theyouthist.com/wp-content/themes/youthist/css/webfonts/304852_0_0.woff) format('woff'),url(https://www.theyouthist.com/wp-content/themes/youthist/css/webfonts/304852_0_0.ttf) format('truetype')}
          @font-face{font-family:brandongrotesqueweb-regular; font-display:swap; src:url(https://www.theyouthist.com/wp-content/themes/youthist/css/webfonts/304852_1_0.eot);src:url(https://www.theyouthist.com/wp-content/themes/youthist/css/webfonts/304852_1_0.eot?#iefix) format('embedded-opentype'),url(https://www.theyouthist.com/wp-content/themes/youthist/css/webfonts/304852_1_0.woff2) format('woff2'),url(https://www.theyouthist.com/wp-content/themes/youthist/css/webfonts/304852_1_0.woff) format('woff'),url(https://www.theyouthist.com/wp-content/themes/youthist/css/webfonts/304852_1_0.ttf) format('truetype')}
        /*MyFontsWebfontsKit*/

      </style>
    <!-- Front page only  -->
  <?php } ?>
  <style>
      @font-face {
          font-family: brandongrotesqueweb-light;
          font-display: swap;
          src: url(https://www.theyouthist.com/wp-content/themes/youthist/css/webfonts/304852_0_0.eot);
          src: url(https://www.theyouthist.com/wp-content/themes/youthist/css/webfonts/304852_0_0.eot?#iefix) format('embedded-opentype'), url(https://www.theyouthist.com/wp-content/themes/youthist/css/webfonts/304852_0_0.woff2) format('woff2'), url(https://www.theyouthist.com/wp-content/themes/youthist/css/webfonts/304852_0_0.woff) format('woff'), url(https://www.theyouthist.com/wp-content/themes/youthist/css/webfonts/304852_0_0.ttf) format('truetype')
        }

        @font-face {
          font-family: brandongrotesqueweb-regular;
          font-display: swap;
          src: url(https://www.theyouthist.com/wp-content/themes/youthist/css/webfonts/304852_1_0.eot);
          src: url(https://www.theyouthist.com/wp-content/themes/youthist/css/webfonts/304852_1_0.eot?#iefix) format('embedded-opentype'), url(https://www.theyouthist.com/wp-content/themes/youthist/css/webfonts/304852_1_0.woff2) format('woff2'), url(https://www.theyouthist.com/wp-content/themes/youthist/css/webfonts/304852_1_0.woff) format('woff'), url(https://www.theyouthist.com/wp-content/themes/youthist/css/webfonts/304852_1_0.ttf) format('truetype')
        }
        @font-face {
          font-family: Font Awesome\ 5 Brands;
          font-display: swap;
          font-style: normal;
          font-weight: 400;
          src: url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-brands-400.eot);
          src: url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-brands-400.eot?#iefix) format("embedded-opentype"), url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-brands-400.woff2) format("woff2"), url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-brands-400.woff) format("woff"), url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-brands-400.ttf) format("truetype"), url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-brands-400.svg#fontawesome) format("svg")
        }
        @font-face {
          font-family: Font Awesome\ 5 Free;
          font-display: swap;
          font-style: normal;
          font-weight: 400;
          src: url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-regular-400.eot);
          src: url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-regular-400.eot?#iefix) format("embedded-opentype"), url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-regular-400.woff2) format("woff2"), url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-regular-400.woff) format("woff"), url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-regular-400.ttf) format("truetype"), url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-regular-400.svg#fontawesome) format("svg")
        }

        @font-face {
          font-family: Font Awesome\ 5 Free;
          font-display: swap;
          font-style: normal;
          font-weight: 900;
          src: url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-solid-900.eot);
          src: url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"), url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-solid-900.woff2) format("woff2"), url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-solid-900.woff) format("woff"), url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-solid-900.ttf) format("truetype"), url(https://www.theyouthist.com/wp-content/themes/youthist/webfonts/fa-solid-900.svg#fontawesome) format("svg")
        }
        @font-face {
          font-family: flexslider-icon;
          src: url(https://www.theyouthist.com/wp-content/themes/youthist/fonts/flexslider-icon.eot);
          src: url(https://www.theyouthist.com/wp-content/themes/youthist/fonts/flexslider-icon.eot?#iefix) format('embedded-opentype'), url(https://www.theyouthist.com/wp-content/themes/youthist/fonts/flexslider-icon.woff) format('woff'), url(https://www.theyouthist.com/wp-content/themes/youthist/fonts/flexslider-icon.ttf) format('truetype'), url(https://www.theyouthist.com/wp-content/themes/youthist/fonts/flexslider-icon.svg#flexslider-icon) format('svg');
          font-weight: 400;
          font-style: normal
        }
  </style>
 
    <?php
}