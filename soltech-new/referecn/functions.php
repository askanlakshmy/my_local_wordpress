<?php 
	// Theme support
	if (function_exists( 'add_theme_support' )) {
		
		add_theme_support( 'menus' );

		add_theme_support ( 'custom-logo' );

		add_theme_support( 'post-thumbnails' );   

		add_theme_support( 'title-tag' );
	}
		
	// Menus
	function soltech_menus() {
		register_nav_menus(
			array(
				'header' => __( 'Header Menu' ),
				'header-about' => __( 'HeaderAbout Menu' ),
				'header-below' => __( 'HeaderBelow Menu' ),
				'software' => __( 'software' ),
				'staffing' => __( 'staffing' ),
				'salesforce' => __( 'salesforce' ),
				'casestudy' => __( 'casestudy' ),
			)
		);
	}

	add_action( 'init', 'soltech_menus' );

	/* sidebar title tag change by NPA */
  function sidebar_widget_title_tag( $params ) {
    $params[0]['before_title'] = '<p class="widget-title">' ;
    $params[0]['after_title']  = '</p>' ;
    return $params;
   }
  add_filter( 'dynamic_sidebar_params' , 'sidebar_widget_title_tag' );

  /* sidebar title tag change by NPA */
  
   /* service schema for staffing solutions updated by NPA */
    function service_schema() {
  if (is_page ('72')) { 
    ?> 
  <script type="application/ld+json">
 {
  "@context": "https://schema.org/", 
  "@type": "Service",
  "serviceType": "IT Staffing",
  "provider": {
    "@type": "LocalBusiness",
    "name": "SOLTECH",
    "address": "950 East Paces Ferry Rd NE Suite 2400 Atlanta, GA 30326",
    "telephone": "404-601-6000"
  },
  "name": "IT Staffing Solutions",
  "description": "Looking to grow your IT team? SOLTECH's IT staffing services include Contract Labor, Contract to Hire, Direct Hire and Managed Staffing.",
  "brand": {
    "@type": "Brand",
    "name": "SOLTECH"
  }
 }
 </script>
    <?php
  }
  }
 add_action('wp_head', 'service_schema');
  /* service schema for staffing solutions updated by NPA */
	
	
 /* schema for homepage updated by NPA */	
  function homepage_schema() {
  if (is_page ('759')) { 
    ?> 
   <script type="application/ld+json">
  {
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "SOLTECH",
  "url": "https://soltech.net/",
  "logo": "https://soltech.net/wp-content/uploads/2022/01/logo-soltech.png",
  "sameAs": [
    "https://www.facebook.com/SolTechATL",
    "https://twitter.com/soltechatlanta",
    "https://www.instagram.com/soltechatlanta/",
    "https://www.linkedin.com/company/soltech-inc"
  ]
  }
  </script>
  <script type="application/ld+json">
  {
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Soltech",
  "image": "https://soltech.net/wp-content/uploads/2022/01/logo-soltech.png",
  "@id": "",
  "url": "https://soltech.net/",
  "telephone": "404-601-6000",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "950 East Paces Ferry Rd NE Suite 2400",
    "addressLocality": "Atlanta",
    "addressRegion": "GA",
    "postalCode": "30326",
    "addressCountry": "US"
  }  
 }
 </script>
    <?php
  }
  }
add_action('wp_head', 'homepage_schema');

/* schema for homepage updated by NPA */

	if (!class_exists('Soltech_Menu')) {
		class Soltech_Menu extends Walker_Nav_Menu { 
			function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) { 
				if (!$element)
					return;
				
				$id_field = $this->db_fields['id'];

				if (is_array($args[0]))
					$args[0]['has_children'] = !empty($children_elements[$element->$id_field]);
				else if (is_object($args[0]))
					$args[0]->has_children = !empty($children_elements[$element->$id_field]);

				$cb_args = array_merge(array(&$output, $element, $depth), $args);
				call_user_func_array(array(&$this, 'start_el'), $cb_args);

				$id = $element->$id_field;
				if (($max_depth == 0 || $max_depth > $depth + 1) && isset($children_elements[$id])) {

					foreach ($children_elements[$id] as $child) {

						if (!isset($newlevel)) {
							$newlevel = true;
							$cb_args = array_merge(array(&$output, $depth), $args);
							call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
						}
						$this->display_element($child, $children_elements, $max_depth, $depth + 1, $args, $output);
					}
					unset($children_elements[$id]);
				}

				if (isset($newlevel) && $newlevel) {
					$cb_args = array_merge(array(&$output, $depth), $args);
					call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
				}

				$cb_args = array_merge(array(&$output, $element, $depth), $args);
				call_user_func_array(array(&$this, 'end_el'), $cb_args);
			}

			public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) { 
				if ((is_object($item) && $item->title == null) || (!is_object($item))) {
					return ;
				}

				$indent = ($depth) ? str_repeat("\t", $depth) : '';

				$li_attributes = '';
				$class_names = $value = '';

				$classes[] = 'Nav_item';
				$classes[] .= $item->classes[0];
				
				$level = "";
				if (is_object($args) && $args->has_children) {
					if ($depth == 0) {
						$level = "one";
					} elseif ($depth == 1) {
						$level = "two";
					} elseif ($depth == 2) {
						$level = "three";
					}
					$classes[] .= 'Level_'.$level;
				}
				
				$classes[] = ($item->current) ? 'Active' : '';

				$class_names = join(' ', apply_filters('', array_filter($classes), $item, $args));
				$class_names = ' class="' . esc_attr($class_names) . '"';

				$id = apply_filters('nav_menu_item_id', '', $item, $args);
				$id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

				$output .= $indent . '<li' . $id . $value . $class_names . '>';

				$attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
				$attributes .=!empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
				$attributes .=!empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
				$attributes .=!empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
				$attributes .= (is_object($args) && $args->has_children) ? ' class="Nav_link Link_'.$level.'" ' : ' class="Nav_link"';

				$item_output = (is_object($args)) ? $args->before : '';
				$item_output .= '<a' . $attributes . '><span class="Box_nav_link Nav_link_'.$level.'">';
				$item_output .= '<span>' . (is_object($args) ? $args->link_before : '') . apply_filters('the_title', $item->title, $item->ID) . (is_object($args) ? $args->link_after : '') . '</span>';
				$item_output .= (is_object($args) && $args->has_children) ? ' <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg> ' : '';
				$item_output .= '</span></a>';
				$item_output .= (is_object($args) ? $args->after : '');

				$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
			}

			public function start_lvl(&$output, $depth = 0, $args = array()) { 
				$indent = str_repeat("\t", $depth);
				if ($depth == 0) {
					$level = "one";
				} elseif ($depth == 1) {
					$level = "two";
				} elseif ($depth == 2) {
					$level = "three";
				}
				$output .= "\n$indent<ul class=\"Sub_menu_".$level."\">\n";
			}
		}
	}

	// Styles - Scripts
	function soltech_styles_scripts() {
		wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/assets/css/theme-styles.min.css' );

		wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/assets/js/scripts.js' );
	}
	add_action( 'wp_enqueue_scripts', 'soltech_styles_scripts' );

	// Widgets
	function soltech_widgets_init() {
		register_sidebar( array(
			'name'		  => esc_html__( 'Information', 'soltech' ),
			'id'			=> 'menu-cero',
			'description'   => esc_html__( 'Add widgets here.', 'soltech' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

		register_sidebar( array(
			'name'		  => esc_html__( 'Software Development', 'soltech' ),
			'id'			=> 'menu-one',
			'description'   => esc_html__( 'Add widgets here.', 'soltech' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

		register_sidebar( array(
			'name'		  => esc_html__( 'Staffing & Recruitment', 'soltech' ),
			'id'			=> 'menu-two',
			'description'   => esc_html__( 'Add widgets here.', 'soltech' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

		register_sidebar( array(
			'name'		  => esc_html__( 'Learning Center', 'soltech' ),
			'id'			=> 'menu-three',
			'description'   => esc_html__( 'Add widgets here.', 'soltech' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );
		
		register_sidebar( array(
			'name'		  => esc_html__( 'About', 'soltech' ),
			'id'			=> 'menu-four',
			'description'   => esc_html__( 'Add widgets here.', 'soltech' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );
	}
	add_action( 'widgets_init', 'soltech_widgets_init' );
		
	// Support SVG
	add_filter( 'wp_check_filetype_and_ext', 'svg_support', 10, 4 );

	function svg_support($data, $file, $filename, $mimes) {
		$filetype = wp_check_filetype( $filename, $mimes );
		return [
			'ext'			 => $filetype['ext'],
			'type'			=> $filetype['type'],
			'proper_filename' => $data['proper_filename']
		];
	}

	function cc_mime_types( $mimes ){
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	add_filter( 'upload_mimes', 'cc_mime_types' );

	function fix_svg() {
		echo '<style type="text/css">
				.attachment-266x266, .thumbnail img {
					width: 100% !important;
					height: auto !important;
				}
			</style>';
	}
	add_action( 'admin_head', 'fix_svg' );

	function scanwp_buttons( $buttons ) {
		
		array_unshift( $buttons, 'fontsizeselect' ); 
		return $buttons;
	  }
	add_filter( 'mce_buttons_2', 'scanwp_buttons' );

	function scanwp_font_size( $initArray ){
		$initArray['fontsize_formats'] = "8px 9px 10px 11px 12px 13px 14px 15px 16px 17px 18px 19px 20px 21px 22px 23px 24px 25px 26px 27px 28px 29px 30px 31px 32px 33px 34px 35px 36px 37px 38px 39px 40px 41px 42px 45px 44px 45px 46px 47px 48px 49px 50px";
		return $initArray;
	  }
	add_filter( 'tiny_mce_before_init', 'scanwp_font_size' );

	add_filter( 'excerpt_length', function($length) {
		return 34;
	}, PHP_INT_MAX );

	// Pagination
	function soltech_pagination() {
		if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
			return;
		}

		$paged		= get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
		$pagenum_link = html_entity_decode( get_pagenum_link() );
		$query_args   = array();
		$url_parts	= explode( '?', $pagenum_link );

		if ( isset( $url_parts[1] ) ) {
			wp_parse_str( $url_parts[1], $query_args );
		}

		$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
		$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

		$format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
		$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

		$links = paginate_links( array(
			'base'	 => $pagenum_link,
			'format'   => $format,
			'total'	=> $GLOBALS['wp_query']->max_num_pages,
			'current'  => $paged,
			'mid_size' => 4,
			'add_args' => array_map( 'urlencode', $query_args ),
			'prev_text' => __( '<svg width="20px" height="20px" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 1792"><path d="M627 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"></path></svg>' ),
			'next_text' => __( '<svg width="20px" height="20px" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 1792"><path d="M595 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"></path></svg>' ),
			'type'	  => 'list',
		) );

		if ( $links ) :

		?>
		<nav class="Container_pagination">
			<div class="Pagination">
				<?php echo $links; ?>
			</div>
			<div class="Label">
				<?php echo "<span>Page ".$paged." of ". $GLOBALS['wp_query']->max_num_pages ."</span>" ?>
			</div>
		</nav>
		<?php
		endif;
	}

	//	ACF THEME OPTIONS
	if( function_exists('acf_add_options_page') ) {

		acf_add_options_page(array(
			'page_title'	=> 'Theme Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug'	 => 'theme-settings',
			'capability'	=> 'edit_posts',
			'redirect'	  => false
		));

	}

	// CUSTOM POST TYPES
	function cptui_register_my_cpts() {

		/**
		 * Post Type: Banner Images.
		 */

		$labels = [
			"name" => __( "Soltech Ads", "soltech" ),
			"singular_name" => __( "Soltech Ad", "soltech" ),
		];

		$args = [
			"label" => __( "Soltech Ads", "soltech" ),
			"labels" => $labels,
			"description" => "",
			"public" => false,
			"publicly_queryable" => false,
			"show_ui" => true,
			"show_in_rest" => true,
			"rest_base" => "",
			"rest_controller_class" => "WP_REST_Posts_Controller",
			"has_archive" => false,
			"show_in_menu" => true,
			"show_in_nav_menus" => true,
			"delete_with_user" => false,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => [ "slug" => "banner_images", "with_front" => true ],
			"query_var" => true,
			"menu_icon" => "dashicons-format-image",
			"supports" => [ "title", "editor" ],
			"show_in_graphql" => false,
		];

		register_post_type( "banner_images", $args );
	}
		
	add_action( 'init', 'cptui_register_my_cpts' );

	function cptui_register_my_cpts_va() {

		/**
		 * Post Type: Video Articles.
		 */

		$labels = [
			"name" => __( "Video Articles", "soltech" ),
			"singular_name" => __( "Video Article", "soltech" ),
		];

		$args = [
			"label" => __( "Video Articles", "soltech" ),
			"labels" => $labels,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => true,
			"rest_base" => "",
			"rest_controller_class" => "WP_REST_Posts_Controller",
			"has_archive" => false,
			"show_in_menu" => true,
			"show_in_nav_menus" => true,
			"delete_with_user" => false,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => [ "slug" => "video-articles", "with_front" => true ],
			"query_var" => true,
			"menu_icon" => "dashicons-video-alt3",
			"supports" => [ "title", "editor", "thumbnail" ],
			// "taxonomies" => [ "category" ],
			"show_in_graphql" => false,
		];

		register_post_type( "video-articles", $args );
	}
		
	add_action( 'init', 'cptui_register_my_cpts_va' );

	add_action( 'after_switch_theme', 'flush_rewrite_rules' );

	add_action( 'init', 'custom_category_bi', 0 );
	 
	function custom_category_bi() {
	 
		$labels = array(
			'name' => _x( 'Positions', 'soltech' ),
			'singular_name' => _x( 'Positions', 'soltech' ),
			'search_items' =>  __( 'Search Positions' ),
			'popular_items' => __( 'Popular Positions' ),
			'all_items' => __( 'All Positions' ),
			'parent_item' => null,
			'parent_item_colon' => null,
			'edit_item' => __( 'Edit Position' ), 
			'update_item' => __( 'Update Position' ),
			'add_new_item' => __( 'Add New Position' ),
			'new_item_name' => __( 'New Position Name' ),
			'separate_items_with_commas' => __( 'Separate position with commas' ),
			'add_or_remove_items' => __( 'Add or remove positions' ),
			'choose_from_most_used' => __( 'Choose from the most used positions.' ),
			'menu_name' => __( 'Positions' ),
		); 
	 
		register_taxonomy('positions','banner_images',array(
			'hierarchical' => true,
			'labels' => $labels,
			'public' => false,
			'publicly_queryable' => false,
			'show_ui' => true,
			'show_in_rest' => true,
			'show_admin_column' => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var' => true,
			'rewrite' => array( 'slug' => 'positions' ),
		));
	}

	function custom_post_mime_types( $post_mime_types ) {	
		$post_mime_types['image/jpeg'] = array( __( 'JPGs' ), __( 'Manage JPEGs' ), _n_noop( 'JPEG <span class="count">(%s)</span>', 'JPEGs <span class="count">(%s)</span>' ) );
		$post_mime_types['image/png'] = array( __( 'PNGs' ), __( 'Manage PNGs' ), _n_noop( 'PNG <span class="count">(%s)</span>', 'PNGs <span class="count">(%s)</span>' ) );
		$post_mime_types['image/gif'] = array( __( 'GIFs' ), __( 'Manage GIFs' ), _n_noop( 'GIF <span class="count">(%s)</span>', 'GIFs <span class="count">(%s)</span>' ) );
		$post_mime_types['image/bmp'] = array( __( 'BMPs' ), __( 'Manage BMPs' ), _n_noop( 'BMP <span class="count">(%s)</span>', 'BMPs <span class="count">(%s)</span>' ) );
		$post_mime_types['image/tiff'] = array( __( 'TIFs' ), __( 'Manage TIFFs' ), _n_noop( 'TIFF <span class="count">(%s)</span>', 'TIFFs <span class="count">(%s)</span>' ) );
		$post_mime_types['image/webp'] = array( __( 'WEBPs' ), __( 'Manage WEBPs' ), _n_noop( 'WEBP <span class="count">(%s)</span>', 'WEBPs <span class="count">(%s)</span>' ) );
		$post_mime_types['application/pdf'] = array( __( 'PDFs' ), __( 'Manage PDFs' ), _n_noop( 'PDF <span class="count">(%s)</span>', 'PDFs <span class="count">(%s)</span>' ) );

		return $post_mime_types;
	}
		
	// Add Filter Hook
	add_filter( 'post_mime_types', 'custom_post_mime_types' );

	//	Admin Styles
	function admin_theme_style() {
		wp_enqueue_style( 'admin-theme', get_stylesheet_directory_uri() . '/assets/css/wp-admin.css' );
	}

	add_action('admin_enqueue_scripts', 'admin_theme_style');
	add_action('login_enqueue_scripts', 'admin_theme_style');

	//	Get SVG Code from file
	function getSVG($img_url) {
		if (empty($img_url)) {
			return false;
		}
		$newPath = wp_upload_dir()['basedir'].explode('uploads', $img_url)[1];
		$svgContent = file_get_contents($newPath);

		if(!$svgContent) {
			$remote_svg_file = wp_remote_get($img_url);
			$svgContent = wp_remote_retrieve_body($remote_svg_file );
		}

		return $svgContent;
	}

	// Editor Styles
	function my_theme_add_editor_styles() {
		add_editor_style( 'custom-editor-style.css' );
	}
	add_action( 'init', 'my_theme_add_editor_styles' );

	// Add page slug to body class
	function add_slug_to_body_class($classes) {
		global $post;
		if (is_home()) {
			$key = array_search('blog', $classes);
			if ($key > -1) {
				unset($classes[$key]);
			}
		} elseif (is_page()) {
			$classes[] = sanitize_html_class($post->post_name);
		} elseif (is_singular()) {
			$classes[] = sanitize_html_class($post->post_name);
		}
		
		return $classes;
	}
	add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)

	// Remove Content Editor from Pages
	add_action('admin_init', 'remove_textarea');

	function remove_textarea() {
		remove_post_type_support( 'page', 'editor' );
	}

	function add_category_to_pages() {
		$labels = [
			"name" => __( "Categories", "soltech" ),
			"singular_name" => __( "Category", "soltech" ),
		];	  
		$args = [
			"label" => __( "Categories", "soltech" ),
			"labels" => $labels,
			"public" => false,
			"publicly_queryable" => false,
			"hierarchical" => true,
			"has_archive" => true,
			"show_ui" => true,
			"show_in_menu" => true,
			"show_in_nav_menus" => true,
			"query_var" => true,
			"rewrite" => [ 'slug' => 'page-categories', 'with_front' => true, ],
			"show_admin_column" => false,
			"show_in_rest" => true,
			"show_tagcloud" => false,
			"rest_base" => "page-categories",
			"rest_controller_class" => "WP_REST_Terms_Controller",
			"show_in_quick_edit" => true,
			"show_in_graphql" => false,
		];
		register_taxonomy( "page-categories", [ "page" ], $args );
	}
	add_action( 'init', 'add_category_to_pages' );

	// Customize API
	function soltech_customizer($wp_customize){

		$wp_customize->add_panel('soltech_options',array(
			'title'	 => 'Soltech',
			'priority'  => 30,
		));

		$wp_customize->add_section('footer_options',array(
			'title'	 => 'Footer',
			'priority'  => 30,
			'panel'	 => 'soltech_options',
		));

		// Text Footer
		$wp_customize->add_setting( 'privacy_policy_footer', array(
			'default'   => '/privacy-terms-of-use/',
		) );

		$wp_customize->add_control('privacy_policy_footer_control',array(
			'label'	 => 'Privacy Policy page link',
			'type'	  => 'url',
			'section'   => 'footer_options',
			'settings'  => 'privacy_policy_footer',
		));

		// Text Footer
		$wp_customize->add_setting( 'site_map_footer', array(
			'default'   => '/site-map/',
		) );

		$wp_customize->add_control('site_map_footer_control',array(
			'label'	 => 'Site Map page link',
			'type'	  => 'url',
			'section'   => 'footer_options',
			'settings'  => 'site_map_footer',
		));

	}   

	add_action('customize_register','soltech_customizer');

	// Add default colors editor WP
	function my_mce4_options($init) {

		$custom_colors = '
			"000000", "Black",
			"3C5BA8", "Blue",
			"3FA9F5", "Light Blue",
			"8DC63F", "Green",
			"A4D65E", "Green",
			"626366", "Gray Dark",
			"F2F2F2", "Gray",
			"F9F9F9", "light Gray",
			"FFFFFF", "White"
		';

		$init['textcolor_map'] = '['.$custom_colors.']';
		$init['textcolor_rows'] = 2;

		return $init;
	}

	add_filter('tiny_mce_before_init', 'my_mce4_options');

	// Add default colors color picker ACF
	function klf_acf_input_admin_footer() { ?>
		<script type="text/javascript">
			function addColors() {
				acf.add_filter('color_picker_args', function( args, $field ){
					args.palettes = ['#000000', '#3C5BA8', '#3FA9F5', '#8DC63F', '#A4D65E', "#626366", '#F2F2F2', '#F9F9F9', '#FFFFFF']
					return args;
				});
			}
			addColors();
		</script>
	<?php }
	add_action('acf/input/admin_footer', 'klf_acf_input_admin_footer');

	/* Sitemap
	************************************
	*HTML Sitemap in WordPress   
	************************************/

	function sitemap() {
		$sitemap = '';

		$pages_args = array(
			'exclude' => '', /* ID of pages to be excluded, separated by comma */
			'post_type' => 'page',
			'post_status' => 'publish'
		);
		$sitemap .= '<h2>Pages</h2>';
		$sitemap .= '<ul>';
		$pages = get_pages($pages_args);
		foreach ($pages as $index => $page) :
			$sitemap .= '<li><a href="' . get_page_link($page->ID) . '" rel="bookmark">' . ($index + 1) . ' - ' . $page->post_title . '</a></li>';
		endforeach;
		$sitemap .= '</ul>';

		
		$sitemap .= '<h2>Articles</h2>';
		$sitemap .= '<ul>';
		$posts_array = get_posts(['numberposts' => -1]);
		foreach ($posts_array as $index => $spost):
			$sitemap .='<li><a href="' . $spost->guid . '" rel="bookmark" >' . ($index + 1) . ' - ' . $spost->post_title . '</a></li>';
		endforeach;
		
		$sitemap .= '</ul>';
		
		return$sitemap;
	}
	add_shortcode('soltech_sitemap', 'sitemap');

?>
<?php
	add_action( 'wp_footer', 'ajax_fetch' );
	function ajax_fetch() {
?>
	<script type="text/javascript">
		let searchs = document.querySelectorAll('.searchformajax');
		let timer;

		searchs.forEach(search => {
			if (search != null) {
				search.addEventListener('input', (event) => {
					let listResultsSearch = search.parentNode;
					listResultsSearch = listResultsSearch.nextElementSibling;
					listResultsSearch.style.display = "none";

					clearTimeout(timer);
					if (search.value) {
						timer = setTimeout(function() {
							let xhr = new XMLHttpRequest();
							xhr.onreadystatechange = function() {
								if (this.readyState == 4 && this.status == 200) {
									listResultsSearch.innerHTML = this.responseText;
									listResultsSearch.style.display = "block";
								}
							};

							let ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
							xhr.open( 'POST', ajaxurl, true );
							xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=UTF-8");

							let valuesearch = search.value;
							let datasearch = "action=data_fetch&s="+valuesearch;
							xhr.send(datasearch);
						}, 750);
					}
				});
			}
		})
	</script>
<?php
}

add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');

function data_fetch(){

	$the_query = new WP_Query( 
		array( 
			'post_type' 		=> array('post', 'page', 'video-articles'),
			'posts_per_page' 	=> 	8, 
			's' 				=> 	esc_attr( $_POST['s'] ), 
			'orderby'			=> 'date',
			'order'				=> 'DESC',
			'post_status'		=> 'publish'
		) 
	);

	if( $the_query->have_posts() ) :
		while( $the_query->have_posts() ): $the_query->the_post(); ?>
			<li>
				<a href="<?php echo esc_url( post_permalink() ); ?>">
					<?php if (has_post_thumbnail( $post->ID )): ?>
						<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'thumbnail'); ?>" alt="">
					<?php else: ?>
						<i>
							<svg class="mk-svg-icon" data-name="mk-moon-pencil" data-cacheid="icon-61f07fcc95997" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M432 0c44.182 0 80 35.817 80 80 0 18.01-5.955 34.629-16 48l-32 32-112-112 32-32c13.371-10.045 29.989-16 48-16zm-400 368l-32 144 144-32 296-296-112-112-296 296zm325.789-186.211l-224 224-27.578-27.578 224-224 27.578 27.578z"></path></svg>
						</i>
					<?php endif ?>
					<span class="Title"><?php the_title();?></span>
					<span class="Date"><?php echo get_the_date();?></span>
				</a>
			</li>
		<?php endwhile;
		wp_reset_postdata();  
	else: ?>
		<li class="No_results">No Result.</li>
	<?php
	endif;

	die();
}

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

/* Hover Module Effect */
function my_acf_admin_head() {
$siteURL = get_site_url();
?>

<script>
	window.addEventListener("load", function(){
		let buttons = document.querySelectorAll('a[data-name="add-layout"]');
		buttons.forEach(function(button, index) {
			button.addEventListener('click', function() {
				waitForEl('.acf-tooltip li', function() {
					let items = document.querySelectorAll('.acf-tooltip li a');
					items.forEach(function(item, index) {
						item.addEventListener('mouseenter', function(event) {
							let y = event.clientY;
							let intViewportHeight = window.innerHeight;
							let style = 'top: ' + y + 'px';
							if ( (y + 200) >= intViewportHeight) {
								style = 'bottom: 50px; top: initial;';
							}

							imageTP = item.getAttribute('data-layout');
							let div = document.createElement('div');
							div.setAttribute('class', 'imagePreview')
							div.setAttribute('style', style)
							
							let image = document.createElement('img');
							image.setAttribute('src', '<?php echo $siteURL; ?>/wp-content/themes/soltech/assets/img/previews/'+imageTP+'.webp');
							div.appendChild(image);
							document.querySelector('.acf-tooltip').appendChild(div);
						});

						item.addEventListener('mouseleave', function(event) {
							let previews = document.querySelectorAll('.imagePreview');
							previews.forEach(function(preview, index) {
								preview.remove();
							});
						});
					});
				});
			});
		});

		let waitForEl = function(selector, callback) {
			if (document.querySelector(selector) != null) {
				callback();
			} else {
				setTimeout(function() {
					waitForEl(selector, callback);
				}, 100);
			}
		};
	});
</script>
<?php
}
add_action('acf/input/admin_head', 'my_acf_admin_head');

?>


<?php
add_filter( 'the_content', 'prefix_insert_post_ads' );
function prefix_insert_post_ads( $content ) {
$ad_code = '<div class="free-consultation-banner">
  <div class="banner-content-section">
    <h2>Let us do the heavy lifting.</h2>
    <p>Are you ready to start a new software development project? Work with our local team of software designers and developers or let us help you recruit a team of your own.</p>
    <button><a href="/free-consultation/">FREE CONSULTATION</a></button>
  </div>
  <div class="banner-image-section"></div>
</div>';
if ( is_single() && ! is_admin() ) {
	return prefix_insert_after_paragraph( $ad_code, $content );
}
return $content;
}

function prefix_insert_after_paragraph( $insertion, $content ) {
$closing_p = '</p>';
$paragraphs = explode( $closing_p, $content );
$paragraph_id = round(count($paragraphs) / 2);
foreach ($paragraphs as $index => $paragraph) {
if ( trim( $paragraph ) ) {
$paragraphs[$index] .= $closing_p;
}
if ( $paragraph_id == $index + 1 ) {
$paragraphs[$index] .= $insertion;
}
}
return implode( '', $paragraphs );
}
?>
