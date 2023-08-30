<?php require_once('aq_resizer.php');
 if ( ! defined( 'ABSPATH' ) ) {
 	exit( 'Direct script access denied.' );
 }
// Speed
if (!is_user_logged_in()){
    include('PerformanceFix.php');
}

/**
 * Enables the HTTP Strict Transport Security (HSTS) header in WordPress.
 */

function wps_enable_strict_transport_security_hsts_header_wordpress() {
    header( 'Strict-Transport-Security: max-age=31536000; includeSubDomains; preload' );
}

add_action('send_headers','wps_enable_strict_transport_security_hsts_header_wordpress' );

// Speed

// Theme Styles
function header_style() {
    $rand = rand( 1, 9999);
    if (!is_front_page()) {
    wp_enqueue_style('grid',get_stylesheet_directory_uri().'/assets/css/grid.css','',$rand);
    wp_enqueue_style('stellarnav',get_stylesheet_directory_uri().'/assets/css/stellarnav.min.css','',$rand);
    wp_enqueue_style('owl-carousel',get_stylesheet_directory_uri().'/assets/css/owl.carousel.min.css','',$rand);
    wp_enqueue_style('owl-theme-default',get_stylesheet_directory_uri().'/assets/css/owl.theme.default.min.css','',$rand);
    wp_enqueue_style('custom',get_stylesheet_directory_uri().'/assets/css/custom.css?x=3','',$rand);
    wp_enqueue_style('all-css',get_stylesheet_directory_uri().'/assets/icon/css/all.css','',$rand);
    wp_enqueue_style( 'style', get_stylesheet_uri(),'',$rand);
    }
    if(is_product_category()){
        wp_enqueue_style('custom-new',get_stylesheet_directory_uri().'/assets/css/custom-new.css','',$rand);
        wp_enqueue_style('cat-custom',get_stylesheet_directory_uri().'/assets/css/cat-custom.css','',$rand);
        wp_enqueue_style('grid',get_stylesheet_directory_uri().'/assets/css/grid-new.css','',$rand);
        //wp_enqueue_style('style.min',get_stylesheet_directory_uri().'/assets/css/style.min.css','',$rand);
        //wp_enqueue_style('styles__ltr',get_stylesheet_directory_uri().'/assets/css/styles__ltr.css','',$rand);
        wp_enqueue_style('woocommerce',get_stylesheet_directory_uri().'/assets/css/woocommerce.css','',$rand);
        //wp_enqueue_style('woocommerce-smallscreen',get_stylesheet_directory_uri().'/assets/css/woocommerce-smallscreen.css','',$rand);
        //wp_enqueue_style('woocommerce-layout',get_stylesheet_directory_uri().'/assets/css/woocommerce-layout.css','',$rand);

    }
    if(is_single()){
        wp_enqueue_style('custom-new',get_stylesheet_directory_uri().'/assets/css/custom-new.css','',$rand);
        wp_enqueue_style('cat-custom',get_stylesheet_directory_uri().'/assets/css/pro-custom.css','',$rand);
        wp_enqueue_style('social-share',get_stylesheet_directory_uri().'/assets/css/social-share.css','',$rand);
        wp_enqueue_style('woocommerce-smallscreen', get_stylesheet_directory_uri().'/assets/css/woocommerce-smallscreen.css', array(), false, 'screen and (min-width:320px) and (max-width:767px)');

    }

    if(is_page(71478)){
        wp_enqueue_style('custom-new',get_stylesheet_directory_uri().'/assets/css/custom-new.css','',$rand);
        wp_enqueue_style('blog-custom',get_stylesheet_directory_uri().'/assets/css/blog-custom.css','',$rand);
        wp_enqueue_style('grid',get_stylesheet_directory_uri().'/assets/css/grid-new.css','',$rand);
        wp_enqueue_style('style.min',get_stylesheet_directory_uri().'/assets/css/style.min.css','',$rand);
        wp_enqueue_style('search-bar',get_stylesheet_directory_uri().'/assets/css/search-bar.css','',$rand);

    }
    if(is_category('67')){
        wp_enqueue_style('custom-new',get_stylesheet_directory_uri().'/assets/css/custom-new.css','',$rand);
        wp_enqueue_style('blog-custom',get_stylesheet_directory_uri().'/assets/css/blog-custom.css','',$rand);
        wp_enqueue_style('grid-new',get_stylesheet_directory_uri().'/assets/css/grid-new.css','',$rand);
        wp_enqueue_style('style.min',get_stylesheet_directory_uri().'/assets/css/style.min.css','',$rand);
        wp_enqueue_style('search-bar',get_stylesheet_directory_uri().'/assets/css/search-bar.css','',$rand);
    }

}
add_action( 'wp_enqueue_scripts', 'header_style' );
function themeslug_enqueue_script() {
	$rand = rand( 1, 9999);
	if(is_product_category()){
       wp_register_script('jquery', site_url().'/wp-content/themes/xyzreptiles/assets/js/jquery.js','','',true);
       wp_enqueue_script('jquery');
       wp_register_script('custom',site_url().'/wp-content/themes/xyzreptiles/assets/js/custom.js','','',true);
       wp_enqueue_script('custom');
       wp_register_script('stellarnav.min',site_url().'/wp-content/themes/xyzreptiles/assets/js/stellarnav.min.js','','',true);
       wp_enqueue_script('stellarnav.min');

    }

    if(is_page(71478)){
        wp_register_script('jquery', site_url().'/wp-content/themes/xyzreptiles/assets/js/jquery.js','','',true);
        wp_enqueue_script('jquery');
        wp_register_script('custom',site_url().'/wp-content/themes/xyzreptiles/assets/js/custom.js','','',true);
        wp_enqueue_script('custom');
        wp_register_script('stellarnav.min',site_url().'/wp-content/themes/xyzreptiles/assets/js/stellarnav.min.js','','',true);
        wp_enqueue_script('stellarnav.min');

    }
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

// Including Mailchimp
include_once('mailchimp/MailChimp.php');
function get_products_from_category_by_ID($category )
{
    if(is_product()):
        global $post;
        $products = new WP_Query( array(
            'post_type'   => 'product',
            'post_status' => 'publish',
            'fields'      => 'ids',
            'posts_per_page'      => -1,
            //'post__not_in' => array($post->ID),
            'tax_query'   => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'product_cat',
                    'field'    => 'term_id',
                    'terms'    => $category,
                )
            ),
        ) );
        else:
            $products = new WP_Query( array(
                'post_type'   => 'product',
                'post_status' => 'publish',
                'fields'      => 'ids',
                'posts_per_page'      => -1,
                'tax_query'   => array(
                    'relation' => 'AND',
                    array(
                        'taxonomy' => 'product_cat',
                        'field'    => 'term_id',
                        'terms'    => $category,
                    )
                ),

            ) );
    endif;
    return $products->posts;
}
//Woocommerce Reveiw Custom Code - Askan Tech
function woo_reviews() {
    $html_r = "";
    $title="";
    global $wp_query;
    global $product;
    $category = get_queried_object();
    $categoryproduct = get_products_from_category_by_ID($category->term_id);
     /*get category id to product id */
     if(is_product()):
        $product_id = $product->get_id();
        //print_r($product->get_categories());
        global $post;
        $terms = get_the_terms( $post->ID, 'product_cat' );
        $categoryname = '';
        $categoryname1 = '';
        foreach ( $terms as $term ) {
        $product_cat_id = $term->term_id;
        if($product_cat_id != 181):
        if( $term = get_term_by( 'id', $product_cat_id, 'product_cat' ) )
        {
            $categoryname = $term->term_id;
            $categoryname1= $term->name;
        }
        break;
        endif;
        }
        $product_title = get_the_title();
        if (strpos($product_title, 'Ball Python') !== false)
        {
            $categoryname = 358;
        }
        else
        {
            $categoryname;
        }
        $fianlprodut_id = get_products_from_category_by_ID($categoryname);
        shuffle($fianlprodut_id);
        $args1 = array(
            'orderby' => 'date',
            'status' => 'approve',
            'order' => 'DESC',
            'post_type' => 'product',
            'post__in' => array_unique($fianlprodut_id),
            'posts_per_page'      => -1,
            'author__not_in' => array(1)
        );
        $comments1 = get_comments($args1);
     else:
        $args1 = array(
            'orderby' => 'date',
            'status' => 'approve',
            'order' => 'DESC',
            'post_type' => 'product',
            'post__in' => array_unique($categoryproduct),
            'posts_per_page'      => -1,
            'author__not_in' => array(1)
        );
    $args = array(
        'orderby' => 'date',
        'status' => 'approve',
        'order' => 'DESC',
        'post_type' => 'product',
        'posts_per_page'      => -1
    );
    $comments = get_comments($args1);
    if(count($comments) > 0):
        $comments1 = get_comments($args1);
    else:
        $comments1 = get_comments($args);
    endif;
        endif;
        /*get category id to product id */
    // Display the array elements
    $array_unique_comment = array();
    foreach($comments1 as $comment):
        $comment_id_7 = get_comment($comment->comment_ID );
        if(!isset($array_unique_comment[$comment_id_7->comment_post_ID]))
        {
        $post = get_post();
        $links = get_comment_link($comment->comment_ID);
        $link = explode("#",$links);
        $comment_post_id = $comment_id_7->comment_post_ID;
        $product = wc_get_product($comment_post_id);
        $rating_count = $product->get_rating_count();
        $image = wp_get_attachment_image_src(get_post_thumbnail_id($comment->comment_post_ID), 'thumbnail');
        //$rating_count = $product->get_rating_count();
        //$review_count = $comment->get_review_count();
        //$average      = $product->get_average_rating();
        // $image = rw_resize(get_post_thumbnail_id($comment->comment_post_ID),150,150);
        $user = get_user_by( 'email',$comment->comment_author_email);
        $limited_comment=$comment->comment_content;
            $stringCut = substr($limited_comment,0, 250);
            if(strlen($stringCut)>=80){
                $value='<p>'.$stringCut.'... <a class="stringcut" href="'.$link[0].'">Read review</a></p>';
            }else{
                $value='<p>'.$stringCut.'</p>';
            }
        $title .='<div class="col-md-6">
        <div class="cc-review-wrapper">
        <div class="cc-review-info">
        <div class="cc-image-wrapper">
            <a href="'.$link[0].'">
                <img src="'.$image[0].'" alt="'.$comment->post_title.'">
            </a>
        </div>
        <div class="cc-review-info-section">
            <div class="cc-review-section-one">
                <div class="cc-proname">
                    <h4><a href="'.$link[0].'">'.$comment->post_title.'</a></h4>
                </div>
            <div class="cc-review-star">
            </div>
        </div>
        <div class="cc-review-section-two">
            <div class="cc-img-wrapper">
                <img class="lazy" src="'.get_stylesheet_directory_uri().'/assets/images/author_avator.png" alt="gravator" />
            </div>
            <div class="cc-review-author-details">
                <div class="cc-name">
                    <h5>'.$user->first_name . ' ' . $user->last_name.'</h5>
                </div>
                <div class="cc-date">
                    <h5><img class="lazy" src="'.get_stylesheet_directory_uri().'/assets/icon/calender.png" alt="caldendar icon">'.date("F d, Y", strtotime($comment->comment_date)).'</h5>
                </div>
            </div>
        </div>
    </div></div><div class="cc-review-blog-section">'
    .$value.'</p></div><div class="cc-star-count woocommerce"><a class="stringcut" href="'.$link[0].'#tab-reviews"><div class="star-rating" style="font-size: 1.5em !important;" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating"><span style="width:' . ( get_comment_meta( $comment->comment_ID, 'rating', true ) / 5 ) * 100 . '%"><strong itemprop="ratingValue">' . get_comment_meta( $comment->comment_ID, 'rating', true ) . '</strong></span></div></a><div class="review-count" title="Customer Review">(<a class="stringcut" href="'.$link[0].'#tab-reviews">'.$rating_count. ' Customer Reviews</a>)</div></div></div></div>';
    $array_unique_comment[$comment_id_7->comment_post_ID] = 1;
    if(count($array_unique_comment) == 4)
    {
       break;
    }
    }
    endforeach;
    wp_reset_query();
    wp_reset_postdata();
    return $title;
}
    add_shortcode("testimonials","woo_reviews");

//Widgets

    register_sidebar( array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-sidebar-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => 'Footer Sidebar 2',
        'id' => 'footer-sidebar-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => 'Footer Sidebar 3',
        'id' => 'footer-sidebar-3',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => 'Shop Sidebar',
        'id' => 'shop-sidebar',
        'description' => 'Appears in the  area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => 'Shop cart Sidebar',
        'id' => 'shop-cart-sidebar',
        'description' => 'Appears in the  cart area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Sidebar for blog',
        'id' => 'sidebar-for-blog',
        'description' => 'Appears in the  Blog page',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => 'Sidebar for blogimage',
        'id' => 'sidebar-for-blogimage',
        'description' => 'Appears in the  Blog page',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
//Widgets

/*MailChimp custom code Askan Tech */
function subcribe_form_submitted(){
    parse_str($_POST['data'],$form_data);
    // print_r($form_data);
    $name = $form_data['first_name'];
    $name = explode(" ",$name);
    $first_name = $name[0];
    $last_name = $name[1];
    $email = urldecode($form_data['email']);
    $reptiles = $form_data['reptiles'];
    $reptiles1 = $form_data['reptiles1'];
    $reptiles2 = $form_data['reptiles2'];
    $reptiles3 = $form_data['reptiles3'];

    if(!empty($reptiles)){ $reptiles = true; } else { $reptiles = false; }

    if(!empty($reptiles1)){ $reptiles1 = true;} else { $reptiles1 = false; }

    if(!empty($reptiles2)){ $reptiles2 = true;} else { $reptiles2 = false; }

    if(!empty($reptiles3)){ $reptiles3 = true;} else { $reptiles3 = false; }

    $MailChimp = new MailChimp('e1f5b36f967ebbb880318c0dd003e0e2-us10');

    if(!empty($email)){
        $mailchimp_api = get_option('mailchimp');
        //print_r($mailchimp_api);
        $apiKey = $mailchimp_api[0];
        $listId = $mailchimp_api[1];
        $group_id=$mailchimp_api[2];
        $list_id = $listId;//'4d4fb023de';
        //$list_id = 'b230fb7f65';
        $result = $MailChimp->post("lists/$list_id/members", [
                        'merge_fields' => ['FNAME'=>$first_name, 'LNAME'=>$last_name],
                        'interests' => ['fd2fe9d9b3' => $reptiles, '89fadeaae3' => $reptiles1, '100618a978' => $reptiles2, '7fbb1fdb56' => true ], //, 'c0d8ff10ab' => $reptiles3
                        'email_address' => $email,
                        //'message' => $reptiles3,
                        'status'        => 'subscribed'
                    ]);
                   // print_r($result);

        if($result['status'] == 'subscribed'){
            echo 1;
        } else if ($result['status'] == 400 ) {
            echo 0;
        } else {
            echo 2;
        }
    }
    exit();
}
add_action('wp_ajax_nopriv_subcribe_form_submitted', 'subcribe_form_submitted');
add_action('wp_ajax_subcribe_form_submitted', 'subcribe_form_submitted');

/*MailChimp custom code Askan Tech */

/* Woocommerce Custom Theme Support hooks */
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 150,
        'single_image_width'    => 300,
        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ) );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
/* Woocommerce Custom Theme Support hooks */

//Enqueue CSS and JS
/*function woocommmerce_style() {
   wp_enqueue_style('woocommerce_stylesheet', WP_PLUGIN_URL. '/woocommerce/assets/css/woocommerce.css',false,'1.0',"all");
}
add_action( 'wp_head', 'woocommmerce_style' );*/

/*function themeslug_enqueue_script() {
	$rand = rand( 1, 9999);
	if(is_front_page()){
       wp_register_script('carouFred', site_url().'/wp-content/plugins/yith-woocommerce-zoom-magnifier/assets/js/jquery.carouFredSel.min.js','','',true);
       wp_enqueue_script('carouFred');
       wp_register_script('magnifier',site_url().'/wp-content/plugins/yith-woocommerce-zoom-magnifier/assets/js/yith_magnifier.min.js','','',true);
       wp_enqueue_script('magnifier');
       wp_register_script('frontend-ywzm',site_url().'/wp-content/plugins/yith-woocommerce-zoom-magnifier/assets/js/ywzm_frontend.min.js','','',true);
       wp_enqueue_script('frontend-ywzm');
    }
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );*/

function wpb_adding_scripts() {
    if(is_page(66813)){
    wp_register_script('accordion_js', get_stylesheet_directory_uri().'/assets/js/accordion.js');

    wp_enqueue_script('accordion_js');
    }
}
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );
//Enqueue CSS and JS

/*Woocommerce add to cart functionality*/
//add to cart ajax
function woocommerce_ajax_add_to_cart_js() {
    if (function_exists('is_product')) {
        //if(!(is_checkout) && !(is_cart())){
            $product_id = get_the_ID();
            $subscription = get_post_meta($product_id, '_wcsatt_force_subscription', true);
            if(!is_single('91066')){
                if(empty($subscription) || $subscription == 'no'){
            wp_register_script('woocommerce-ajax-add-to-cart',get_stylesheet_directory_uri().'/assets/js/ajax-add-to-cart.js',array(),NULL,true);
            wp_enqueue_script('woocommerce-ajax-add-to-cart');
                }
        //}
            }
    }
}

add_action('wp_enqueue_scripts', 'woocommerce_ajax_add_to_cart_js');

add_action('wp_ajax_woocommerce_ajax_add_to_cart', 'woocommerce_ajax_add_to_cart');
add_action('wp_ajax_nopriv_woocommerce_ajax_add_to_cart', 'woocommerce_ajax_add_to_cart');

function woocommerce_ajax_add_to_cart() {
    $product_id = apply_filters('woocommerce_add_to_cart_product_id', absint($_POST['product_id']));
    $quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);
    $variation_id = absint($_POST['variation_id']);
    $passed_validation = apply_filters('woocommerce_add_to_cart_validation', true, $product_id, $quantity);
    $product_status = get_post_status($product_id);
            if($variation_id > 0){
        $product = wc_get_product($variation_id);
    }else{
        $product = wc_get_product($product_id);
    }

    	if($quantity == ''){
		$quantity = 1;
	}
//	echo $quantity;
  // echo $product->get_stock_quantity();

    if(empty($product->get_stock_quantity())){
        if ($passed_validation && WC()->cart->add_to_cart($product_id, $quantity, $variation_id) && 'publish' === $product_status) {
            do_action('woocommerce_ajax_added_to_cart', $product_id);
            if ('yes' === get_option('woocommerce_cart_redirect_after_add')) {
                wc_add_to_cart_message(array($product_id => $quantity), true);
            }
            WC_AJAX :: get_refreshed_fragments();
        } else {
            $data = array(
                'error' => true,
                'product_url' => apply_filters('woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id)
                );
                echo wp_send_json($data);
        }
    }else{
        if($product->get_stock_quantity() < $quantity ){
        $data = array(
            'error' => true,
            'product_url' => apply_filters('woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id)
            );
            echo wp_send_json($data);
        }
        else if ($passed_validation && WC()->cart->add_to_cart($product_id, $quantity, $variation_id) && 'publish' === $product_status) {
            do_action('woocommerce_ajax_added_to_cart', $product_id);
            if ('yes' === get_option('woocommerce_cart_redirect_after_add')) {
                wc_add_to_cart_message(array($product_id => $quantity), true);
            }
            WC_AJAX :: get_refreshed_fragments();
        } else {
            $data = array(
                'error' => true,
                'product_url' => apply_filters('woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id)
                );
                echo wp_send_json($data);
        }
    }

    wp_die();
}

function wif_woocommerce_header_add_to_cart_fragment($fragments) {
    ob_start();
    echo '<span class="cart-count">';
    if(WC()->cart->cart_contents_count == 0){
        echo sprintf('%d', 'No Products in the Cart');
        exit();
    }else{
       echo sprintf('%d', WC()->cart->cart_contents_count);
    }
    echo '</span>';
    $fragments['#minicart .cart-count'] = ob_get_clean();
    return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'wif_woocommerce_header_add_to_cart_fragment');

//add to cart ajax
/*Woocommerce add to cart functionality*/


/*Onfly resize images custom code Askan Tech*/
function rw_resize_url( $url, $width, $height, $crop = true )
{
    // Get upload directory info
    $upload_info = wp_upload_dir();
    $upload_dir  = $upload_info['basedir'];
    $upload_url  = $upload_info['baseurl'];
    // Get file path info
    $path= $url;
    $path_info = pathinfo( $path );
    $sub_dir = str_replace($upload_url,'',$path_info['dirname']).'/';
    $filename = $path_info['filename'];
    $ext       = $path_info['extension'];
    $rel_path  = str_replace( array( $upload_dir.$sub_dir, ".$ext" ), '', $path );
    $suffix    = "{$width}x{$height}";
    $dest_path = "{$upload_dir}{$sub_dir}{$filename}-{$suffix}.{$ext}";
    $url       = "{$rel_path}-{$suffix}.{$ext}";

    // If file exists: do nothing
    if ( file_exists( $dest_path ) )
        return $url;

    // Generate thumbnail
    if ( image_make_intermediate_size( $upload_dir.$sub_dir.$filename.'.'.$ext, $width, $height, $crop ) )
        return $url;
    // Fallback to full size
    return "{$upload_url}{$rel_path}.{$ext}";
}
/*Onfly resize images custom code Askan Tech*/

/*Custom Filter*/
/* Search Sold Products in Backend */
add_filter( 'parse_query', 'xyz_admin_product_filter' );
add_action( 'restrict_manage_posts', 'xyz_admin_product_filter_form' );

function xyz_admin_product_filter($query)
{
    global $pagenow;
    $post_type = isset($_GET['post_type'])? $_GET['post_type']:'';
    if($post_type=='product'){

        $product_stock = isset($_GET['product_stock'])? $_GET['product_stock']:'';
        if ( is_admin() && $pagenow=='edit.php' && isset($product_stock)){
            if($product_stock=='sold') {
                $query->set('meta_query',array(
                    'relation' => 'AND',
                    array(
                        'key'       => '_backorders',
                        'value'     => 'no', // This cannot be empty because of a bug in WordPress
                        'compare'   => '='
                    ),
                    array(
                        'relation' => 'OR',
                        array(
                            'key'       => '_stock',
                            'value'     => '0.000000', // This cannot be empty because of a bug in WordPress
                            'compare'   => '='
                        ),
                        array(
                            'key'       => '_stock',
                            'value'     => '', // This cannot be empty because of a bug in WordPress
                            'compare'   => '='
                        )
                    )
                ));
            }
            elseif($product_stock=='backorder'){

                $query->set('meta_query',array(
                    'relation' => 'AND',
                    array(
                        'relation' => 'OR',
                        array(
                            'key'       => '_backorders',
                            'value'     => 'yes', // This cannot be empty because of a bug in WordPress
                            'compare'   => '='
                        ),
                        array(
                            'key'       => '_backorders',
                            'value'     => 'notify', // This cannot be empty because of a bug in WordPress
                            'compare'   => '='
                        )
                    ),
                    array(
                        'relation' => 'OR',
                        array(
                            'key'       => '_stock',
                            'value'     => '0.000000', // This cannot be empty because of a bug in WordPress
                            'compare'   => '='
                        ),
                        array(
                            'key'       => '_stock',
                            'value'     => '', // This cannot be empty because of a bug in WordPress
                            'compare'   => '='
                        )
                    )
                ));
            }
        }
    }
}
function xyz_admin_product_filter_form(){
    $post_type = isset($_GET['post_type'])? $_GET['post_type']:'';
    if($post_type=='product'){
        $product_stock = isset($_GET['product_stock'])? $_GET['product_stock']:''; ?>
        <select name="product_stock">
            <option value="">
            <?php _e('All Products', 'commercegurus'); ?>
            </option>

            <option value="sold" <?php if($product_stock=='sold') { ?> selected <?php } ?>>
            <?php _e('Sold Products', 'commercegurus'); ?>
            </option>

            <option value="backorder" <?php if($product_stock=='backorder') { ?> selected <?php } ?>>
            <?php _e('Out Of Stock', 'commercegurus'); ?>
            </option>
        </select>
        <?php
    }
}
/*Custom Filter*/


//Image resize
    add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
    function wpdocs_theme_setup() {
        add_image_size( 'category-thumb', 263 ); // 300 pixels wide (and unlimited height)
        add_image_size( 'customer-review', 150 );
        add_image_size( 'homepage-thumb', 220, 180, true ); // (cropped)
    }
//Image resize

// Speed
add_action('woocommerce_checkout_process', 'askan_check_if_selected');

function askan_check_if_selected() {
    // you can add any custom validations here
    if ( empty( $_POST['terms'] ) )
        wc_add_notice( 'Please accept terms & conditions', 'error' );
}

//Woocommerce Cancelled Order Adding Customer email Address
function wc_cancelled_order_add_customer_email( $recipient, $order ){
    return $recipient.','.$order->billing_email;
}

add_filter( 'woocommerce_email_recipient_cancelled_order', 'wc_cancelled_order_add_customer_email', 10, 2 );
//Woocommerce Cancelled Order Adding Customer email Address

/* Add Shortcode For rss Button */
function add_rss_button($atts) {
    $result.='<span class="rss-button">'.
    '<a href="https://www.rss.com/" target="_blank">'.
    '<img src="'.get_stylesheet_directory_uri().'/images/rss.png" alt="xyzReptile Rss"  />'.
    '</a>'.
    '</span>';
    return $result;
}
add_shortcode('rss_button', 'add_rss_button' );


add_action( 'admin_footer-post-new.php', 'wpse_98269_script' );
add_action( 'admin_footer-post.php', 'wpse_98269_script' );

function wpse_98269_script()
{
if ( ! isset ( $GLOBALS['post'] ) )
return;

$post_type = get_post_type( $GLOBALS['post'] );

if ( ! post_type_supports( $post_type, 'custom-fields' ) )
return;
?>
<script>
if ( jQuery( "[value='sex']" ).length < 1 ) // avoid duplication
jQuery( "#metakeyselect").append( "<option value='sex'>Sex</option>" );

if ( jQuery( "[value='species']" ).length < 1 ) // avoid duplication
jQuery( "#metakeyselect").append( "<option value='species'>Species</option>" );

if ( jQuery( "[value='length']" ).length < 1 ) // avoid duplication
jQuery( "#metakeyselect").append( "<option value='length'>Length</option>" );

if ( jQuery( "[value='weight']" ).length < 1 ) // avoid duplication
jQuery( "#metakeyselect").append( "<option value='weight'>Weight</option>" );

if ( jQuery( "[value='diet']" ).length < 1 ) // avoid duplication
jQuery( "#metakeyselect").append( "<option value='diet'>Diet</option>" );

if ( jQuery( "[value='other_info']" ).length < 1 ) // avoid duplication
jQuery( "#metakeyselect").append( "<option value='other_info'>Other Info</option>" );

if ( jQuery( "[value='Blog_Description']" ).length < 1 ) // avoid duplication
jQuery( "#metakeyselect").append( "<option value='Blog_Description'>Blog Description</option>" );

if ( jQuery( "[value='cart_page_sub_title']" ).length < 1 ) // avoid duplication
jQuery( "#metakeyselect").append( "<option value='cart_page_sub_title'>Cart Page Sub title</option>" );

if ( jQuery( "[value='Blog_Title']" ).length < 1 ) // avoid duplication
jQuery( "#metakeyselect").append( "<option value='Blog_Title'>Blog Title</option>" );

if ( jQuery( "[value='orange_bar_title']" ).length < 1 ) // avoid duplication
jQuery( "#metakeyselect").append( "<option value='orange_bar_title'>Orange Bar Title</option>" );

if ( jQuery( "[value='orange_bar_content']" ).length < 1 ) // avoid duplication
jQuery( "#metakeyselect").append( "<option value='orange_bar_content'>Orange Bar Content</option>" );

if ( jQuery( "[value='custome_page_desc']" ).length < 1 ) // avoid duplication
jQuery( "#metakeyselect").append( "<option value='custome_page_desc'>Custome Page Desc</option>" );
</script>
<?php
}

function isa_extended_paypal_icon() {
        // picture of accepted credit card icons for PayPal payments
    $im = array();
    $im[] = get_bloginfo('template_directory').'/images/checkout-logo-medium.png';
    $im[] = get_bloginfo('template_directory').'/images/ppcredit_MD_BNPOT_1x.png';

    return $im;

}
add_filter( 'woocommerce_paypal_icon', 'isa_extended_paypal_icon' );

/* remove addtional tab on product page*/
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
function woo_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] );   // Remove the additional information tab
    return $tabs;
}

/*add custom field on a checkout form*/
add_action( 'woocommerce_after_order_notes', 'xyz_checkout_send_notification' );
function xyz_checkout_send_notification( $checkout ) {
    woocommerce_form_field(
        'subscribe_to_mailing_list',
        array(
            'type'          => 'checkbox',
            'label'         => __('Send Special Offers and Coupons'),
            'default'     => 1 ,
        ),
        $checkout->get_value('subscribe_to_mailing_list')
    );
}


/**
 * Update the order meta with field value
 */
add_action( 'woocommerce_checkout_update_order_meta', 'xyz_checkout_field_update_order_meta' );

function xyz_checkout_field_update_order_meta( $order_id ) {
    if ( ! empty( $_POST['subscribe_to_mailing_list'] ) ) {
        update_post_meta( $order_id, 'subscribe_to_mailing_list', sanitize_text_field( $_POST['subscribe_to_mailing_list'] ) );
    }
}
function wooc_extra_register_fields() { ?>
    <p class="form-row " id="subscribe_to_mailing_list_field" data-priority=""><span class="cc-wrapping-login-checkbox"><input type="checkbox" class="input-checkbox " readonly name="subscribe_to_mailing_list" id="subscribe_to_mailing_list" value="1" checked ><label class="checkbox "> Send Special Offers and Coupons</label></span></p>
    <?php
}
add_action( 'woocommerce_register_form', 'wooc_extra_register_fields' );

/* Add Setting Page for mail chimp API */
function xyz_mail_chimp_setting() {
    add_submenu_page('options-general.php','Mail Chimp','Mail Chimp','manage_options','mail-chimp','xyz_mail_chimp_setting_page');
}
add_action('admin_menu', 'xyz_mail_chimp_setting');

function xyz_mail_chimp_setting_page(){
    if(isset($_POST['mailchimp_submit']))
    {
        $mailchimp_api=$_POST['mailchimp_api'];
        $mailchimp_lsit_id=$_POST['mailchimp_lsit_id'];
        $mailchimp_group= $_POST['mailchimp_group'];
        $mailchimp_details=array($mailchimp_api,$mailchimp_lsit_id,$mailchimp_group);
        update_option('mailchimp',$mailchimp_details);
    }
    $mailchimp_api = get_option('mailchimp');

    ?>
    <div class="wrap">
      <h2>Mail Chimp Settings</h2>

      <form method="post" >
       <table class="form-table">
          <tbody>
            <tr>
              <th scope="row"><label for="mailchimp_api"><?php _e("API Detail"); ?></label></th>
              <td><input name="mailchimp_api" type="text" id="blogname" value="<?php echo $mailchimp_api[0]; ?>" class="regular-text"></td>
            </tr>
            <tr>
              <th scope="row"><label for="mailchimp_lsit_id"><?php _e("List Id"); ?></label></th>
              <td><input name="mailchimp_lsit_id" type="text" id="mailchimp_lsit_id" aria-describedby="tagline-description" value="<?php echo $mailchimp_api[1]; ?>" class="regular-text">
            </tr>
            <tr>
              <th scope="row"><label for="mailchimp_lsit_id"><?php _e("Interested Group"); ?></label></th>
              <td><input name="mailchimp_group" type="text" id="mailchimp_group" aria-describedby="tagline-description" value="<?php echo $mailchimp_api[2]; ?>" class="regular-text" required="required">

            </tr>
          </tbody>
        </table>
        <p class="submit">
          <input type="submit" name="mailchimp_submit" id="submit" class="button button-primary" value="Save Changes">
        </p>
      </form>
    </div>
<?php
}

/* Add Setting Page for cartPage */
function xyz_cart_page_products() {
    add_submenu_page('options-general.php','Cart Products','Cart Products','manage_options','cart-products','xyz_cart_page_products_option');
}
add_action('admin_menu', 'xyz_cart_page_products');

function xyz_cart_page_products_option(){

    if(isset($_POST['cart_submit'])){
        $cart_products=$_POST['cart_products'];
        //print_r($cart_products);
        update_option('cart_products',$cart_products);
    }

    global $wpdb;
    $all_products = $wpdb->get_results("SELECT * FROM `wp_posts` WHERE `post_type` LIKE 'product' and `post_status` = 'publish' ORDER BY `ID` DESC ",ARRAY_A);
    $cart_products = get_option('cart_products');

    ?>

    <div class="wrap">
      <h2>Cart Page Settings</h2>

      <form method="post"  >
       <table class="form-table">
          <tbody>
            <tr>
              <th scope="row"><label for="cart_products"><?php _e("Cart Product-1 "); ?></label></th>
              <td>
                <?php

                echo '<select name="cart_products[]" >
                <option value="">--Select product--</option>';
                $select='';

                foreach($all_products as $cproduct)
                {


                        ?>
                        <option value="<?php echo $cproduct["ID"]; ?>" <?php if($cart_products[0]==$cproduct["ID"]){ ?> selected <?php } ?>><?php echo $cproduct["post_title"]; ?></option>
                        <?php

                }
                echo '</select>';
              ?>
              </td>
            </tr>

             <tr>
              <th scope="row"><label for="cart_products"><?php _e("Cart Product-2 "); ?></label></th>
              <td>
              <?php


                echo '<select name="cart_products[]" >
                <option value="">--Select product--</option>';
                $select='';


                foreach($all_products as $cproduct)
                {
                      //echo '<option value="'.$lastetFour["ID"].'"';
                        if($cart_products[1]==$cproduct["ID"])
                        {
                             $select ="selected";
                        }
                        else{
                            $select = '';
                        }
                        ?>
                        <option value="<?php echo $cproduct["ID"]; ?>" <?php if($cart_products[1]==$cproduct["ID"]){ ?> selected <?php } ?>><?php echo $cproduct["post_title"]; ?></option>
                        <?php


                }
                echo '</select>';
              ?>
              </td>
            </tr>
             <tr>
              <th scope="row"><label for="cart_products"><?php _e("Cart Product-3 "); ?></label></th>
              <td>  <?php
                echo '<select name="cart_products[]" >
                <option value="">--Select product--</option>';
                $select='';
                foreach($all_products as $cproduct)
                {

                        ?>
                        <option value="<?php echo $cproduct["ID"]; ?>" <?php if($cart_products[2]==$cproduct["ID"]){ ?> selected <?php } ?>><?php echo $cproduct["post_title"]; ?></option>
                        <?php


                }
                echo '</select>';
              ?>
              </td>
            </tr>
             <tr>
              <th scope="row"><label for="cart_products"><?php _e("Cart Product-4 "); ?></label></th>
              <td>  <?php
                echo '<select name="cart_products[]" >
                <option value="">--Select product--</option>';
                $select='';
                foreach($all_products as $cproduct)
                {

                        ?>
                        <option value="<?php echo $cproduct["ID"]; ?>" <?php if($cart_products[3]==$cproduct["ID"]){ ?> selected <?php } ?>><?php echo $cproduct["post_title"]; ?></option>
                        <?php

                }
                echo '</select>';
              ?>
              </td>
            </tr>

          </tbody>
        </table>

        <p class="submit">
          <input type="submit" name="cart_submit" id="submit" class="button button-primary" value="Save Changes">
        </p>
      </form>
    </div>
<?php }

/* Update Shipping Methods
add_filter( 'woocommerce_package_rates', 'xyz_shipping_method');
function xyz_shipping_method($available_methods){
    global $woocommerce;

    $items = $woocommerce->cart->get_cart();

    $animal_exist=0;
    $live_feeder_exist=0;
    $dry_goods_exist=0;
    $gift_card_exist = 0;
    $isopods = 0;
    $fedex_ground = 0;
    foreach($items as $item){
        if($item['data']->get_shipping_class()=='animals' || $item['data']->get_shipping_class()=='animal'){
            $animal_exist=1;
        }
        if($item['data']->get_shipping_class()=='live-feeders'){
            $live_feeder_exist=1;
        }
        if($item['data']->get_shipping_class()=='dry-goods'){
            $dry_goods_exist=1;
        }
        if($item['data']->get_shipping_class() == 'gift-card'){
            $gift_card_exist = 1;
        }
        if($item['data']->get_shipping_class() == 'isopods' || $item['data']->get_shipping_class() == 'habitat'){
            $isopods = 1;
        }
        if($item['data']->get_shipping_class() == 'fedex-ground'){
            $fedex_ground = 1;
        }
    }

    $avail_array=$available_methods;
    //print_r($available_methods);
    foreach($available_methods as $smethod){
        $sid=$smethod->id;
        / * if($sid == 'legacy_flat_rate' && $sid !='legacy_free_shipping' && $sid !='usps:D_PRIORITY_MAIL' && $sid !='usps:D_FIRST_CLASS' && $sid !='flat_rate:4' ){

            unset($avail_array['legacy_flat_rate']);

        }* /

        if($sid=='legacy_free_shipping'){

            $avail_array['legacy_free_shipping']->label='Local Pickup Miami, FL Only';

            unset($avail_array['usps:D_PRIORITY_MAIL']);
            unset($avail_array['legacy_flat_rate']);
            unset($avail_array['usps:D_FIRST_CLASS']);
            //legacy_flat_rate
            ?>
                <style type="text/css">#shipping_method_0_legacy_free_shipping{display: none;}</style>
            <?php
        }
        if($sid=='free_shipping'){

            $avail_array['free_shipping']->label='Local Pickup Miami, FL Only';

            unset($avail_array['usps:D_PRIORITY_MAIL']);
            unset($avail_array['legacy_flat_rate']);
            unset($avail_array['usps:D_FIRST_CLASS']);
            //legacy_flat_rate
            ?>
                <style type="text/css">#shipping_method_0_legacy_free_shipping{display: none;}</style>
            <?php
        }

        if($sid=='usps:D_FIRST_CLASS'){

            unset($avail_array['usps:D_PRIORITY_MAIL']);
        }
        //print_r($available_methods);
        if($smethod->method_id=='flat_rate' && $animal_exist==1 && $isopods == 1 && $dry_goods_exist==0 && $gift_card == 0){
		    unset($avail_array['usps:D_FIRST_CLASS']);
            unset($avail_array['usps:D_PRIORITY_MAIL']);
            $shipping_flat=new WC_Shipping_Flat_Rate();
            $cost_per_order=$shipping_flat->settings['class_cost_184'];
            if($fedex_ground == 1){
               $shipping_flat5=new WC_Shipping_Flat_Rate(5);
               $cost_per_order=$cost_per_order+$shipping_flat5->instance_settings['class_cost_725'];
            }
            $shipping_flat1=new WC_Shipping_Flat_Rate(4);
            $cost_per_order=$cost_per_order+$avail_array['flat_rate:4']->cost;//$shipping_flat1->instance_settings['class_cost_687'];
            $avail_array[$sid]->cost=$cost_per_order;
            $avail_array[$sid]->label=$shipping_flat->settings['title'];
            break;
        }else if($smethod->method_id=='flat_rate' && $animal_exist==1 && $isopods == 0 && $dry_goods_exist==0 && $gift_card == 0 && $fedex_ground == 1){
		    unset($avail_array['usps:D_FIRST_CLASS']);
            unset($avail_array['usps:D_PRIORITY_MAIL']);
            $shipping_flat=new WC_Shipping_Flat_Rate();
            $cost_per_order=$shipping_flat->settings['class_cost_184'];
            if($fedex_ground == 1){
               $shipping_flat5=new WC_Shipping_Flat_Rate(5);
               $cost_per_order=$cost_per_order+$shipping_flat5->instance_settings['class_cost_725'];
            }
            $avail_array[$sid]->cost=$cost_per_order;
            $avail_array[$sid]->label=$shipping_flat->settings['title'];
            break;
        }else if($smethod->method_id=='flat_rate' && $animal_exist==0 && $isopods == 1 && $dry_goods_exist==0 && $gift_card == 0 && $fedex_ground == 1){
		    unset($avail_array['usps:D_FIRST_CLASS']);
            unset($avail_array['usps:D_PRIORITY_MAIL']);
            $shipping_flat4=new WC_Shipping_Flat_Rate(4);
            $cost_per_order=$shipping_flat4->instance_settings['class_cost_687'];
            if($fedex_ground == 1){
               $shipping_flat5=new WC_Shipping_Flat_Rate(5);
               $cost_per_order=$cost_per_order+$shipping_flat5->instance_settings['class_cost_725'];
            }
            $avail_array[$sid]->cost=$cost_per_order;
            $avail_array[$sid]->label='FedEx 2Day Service';
            break;
        }else if($smethod->method_id=='usps' && ($animal_exist==1 || $isopods == 1 || $fedex_ground == 1)){
            if($avail_array['flat_rate:2']->cost > 0){
                $shipping_flat=new WC_Shipping_Flat_Rate();
                $cost_per_order=$shipping_flat->settings['class_cost_184'];
            }
            if($fedex_ground == 1 && $isopods == 0 && $animal_exist == 0 ){
                unset($avail_array['flat_rate:2']);
                unset($avail_array['flat_rate:4']);
               $shipping_flat5=new WC_Shipping_Flat_Rate(5);
               $cost_per_order=$shipping_flat5->instance_settings['class_cost_725'];
            }
            if($fedex_ground == 1 && $isopods == 0 && $animal_exist == 1 ){
                unset($avail_array['flat_rate:4']);
               $shipping_flat5=new WC_Shipping_Flat_Rate(5);
               $shipping_flat5->instance_settings['class_cost_725'];
               $cost_per_order=$cost_per_order+$shipping_flat5->instance_settings['class_cost_725'];
            }
            if($isopods == 1 && $animal_exist == 0){
                unset($avail_array['flat_rate:2']);
               $shipping_flat1=new WC_Shipping_Flat_Rate(4);
               $cost_per_order=$avail_array['flat_rate:4']->cost;//$shipping_flat1->instance_settings['class_cost_687'];
               if($fedex_ground == 1){
                   $shipping_flat5=new WC_Shipping_Flat_Rate(5);
                    $cost_per_order=$cost_per_order+$shipping_flat5->instance_settings['class_cost_725'];
               }
             }
             if($isopods == 1 && $animal_exist == 1){
                $shipping_flat1=new WC_Shipping_Flat_Rate(4);
                 if($fedex_ground == 1){
                    $cost_per_order=$cost_per_order+$avail_array['flat_rate:4']->cost;//$shipping_flat1->instance_settings['class_cost_687'];
                   $shipping_flat5=new WC_Shipping_Flat_Rate(5);
                   $cost_per_order=$cost_per_order+$shipping_flat5->instance_settings['class_cost_725'];
               }else{
                   $cost_per_order=$cost_per_order+$avail_array['flat_rate:4']->cost;//$shipping_flat1->instance_settings['class_cost_687'];
               }
             }
            $avail_array[$sid]->cost=$cost_per_order+$available_methods[$sid]->cost;
            if($isopods == 1 && $animal_exist == 0 && $fedex_ground == 0 && $dry_goods_exist == 1){
                $avail_array[$sid]->label= 'FedEx 2Day Service';
            }else{
                $avail_array[$sid]->label=$shipping_flat->settings['title'];
            }
            if($dry_goods_exist==1){

                unset($avail_array['legacy_flat_rate']);

            }else{
                if($gift_card_exist == 1){
                    unset($avail_array['usps:D_PRIORITY_MAIL']);
                }
                unset($avail_array['usps:D_FIRST_CLASS']);
                //unset($avail_array['flat_rate:4']);


            }
            if($smethod->method_id=='usps' && $isopods == 0 && $animal_exist == 1 && $dry_goods_exist == 1 && $gift_card == 0 && $feeders_exist == 0 && $fedex_ground == 0){
                $avail_array[$sid]->label='FedEx Overnight Tues-Wed';
            }
            if($smethod->method_id=='usps' && $isopods == 1 && $animal_exist == 1 && $dry_goods_exist == 1 && $gift_card == 0 && $feeders_exist == 0 && $fedex_ground == 0){
                $avail_array[$sid]->label='FedEx Overnight Tues-Wed';
            }
        }else if(($dry_goods_exist == 1) && $animal_exist == 0 && $smethod->method_id=='flat_rate' && $isopods == 0){
            // || $live_feeder_exist == 1
            //unset($avail_array['usps:D_PRIORITY_MAIL']);
            //unset($avail_array['usps:D_FIRST_CLASS']);
            unset($avail_array['flat_rate:2']);
            //unset($avail_array['legacy_flat_rate']);
        }

        if($sid=='legacy_flat_rate' && $animal_exist==0 && $live_feeder_exist==1 && $dry_goods_exist==0){
            $avail_array[$sid]->label='Free Shipping On Feeders';
            unset($avail_array['usps:D_PRIORITY_MAIL']);
        }
        if($sid=='usps:D_PRIORITY_MAIL' && $dry_goods_exist==1){
            unset($avail_array['legacy_flat_rate']);
        }

        if($gift_card_exist == 1){

            if($animal_exist != 1 && $dry_goods_exist != 1 && $live_feeder_exist != 1){
                unset($avail_array['legacy_flat_rate']);
                unset($avail_array['usps:D_PRIORITY_MAIL']);

            }
            / *if($live_feeder_exist == 1){

                $avail_array['legacy_flat_rate']->label='Free Shipping On Feeders';


            }* /

        }
        if($isopods == 1 && $animal_exist == 0 && $dry_goods_exist == 0 && $gift_card == 0 && $feeders_exist == 0 && $fedex_ground == 0){
		    unset($avail_array['flat_rate:2']);
		    unset($avail_array['usps:D_PRIORITY_MAIL']);
		    unset($avail_array['usps:D_FIRST_CLASS']);
		    //print_r($avail_array);
		    break;
		}
		if($fedex_ground == 1 && $isopods == 0 && $animal_exist == 0 && $dry_goods_exist == 0 && $gift_card == 0 && $feeders_exist == 0){
		    unset($avail_array['flat_rate:2']);
		    unset($avail_array['flat_rate:4']);
		    unset($avail_array['usps:D_PRIORITY_MAIL']);
		    unset($avail_array['usps:D_FIRST_CLASS']);
		    //print_r($avail_array);
		    break;
		}
    }
    return $avail_array;
}
*/
// Edit term page
function product_cat_edit_meta_field($term) {

    // put the term ID into a variable
    $t_id = $term->term_id;
    // retrieve the existing value(s) for this meta field. This returns an array
    $term_meta = get_option( "taxonomy_$t_id" ); ?>
      <tr class="form-field">
    <th scope="row" valign="top"><label for="term_meta[custom_term_meta]"><?php _e( 'Page Title', 'woocommerce' ); ?></label></th>
        <td>
            <input type="text" name="term_meta[custom_page_title]" id="term_meta[custom_page_title]" value="<?php echo esc_attr( $term_meta['custom_page_title'] ) ? esc_attr( $term_meta['custom_page_title'] ) : ''; ?>">
            <p class="description"><?php _e( 'Enter a title for this field','woocommerce' ); ?></p>
        </td>
    </tr>
    <!-- <tr class="form-field">
    <th scope="row" valign="top"><label for="term_meta[custom_term_meta]"><?php //_e( 'Short Description', 'woocommerce' ); ?></label></th>
        <td>
            <input type="text" name="term_meta[custom_term_meta]" id="term_meta[custom_term_meta]" value="<?php //echo esc_attr( $term_meta['custom_term_meta'] ) ? esc_attr( $term_meta['custom_term_meta'] ) : ''; ?>">
            <p class="description"><?php //_e( 'Enter a value for this field','woocommerce' ); ?></p>
        </td>
    </tr> -->
<?php
}
add_action( 'product_cat_edit_form_fields', 'product_cat_edit_meta_field', 10, 2 );

// Save extra taxonomy fields callback function.
function product_cat_custom_meta( $term_id ) {
	if ( isset( $_POST['term_meta'] ) ) {
		$t_id = $term_id;
		$term_meta = get_option( "taxonomy_$t_id" );
		$cat_keys = array_keys( $_POST['term_meta'] );
		foreach ( $cat_keys as $key ) {
			if ( isset ( $_POST['term_meta'][$key] ) ) {
				$term_meta[$key] = $_POST['term_meta'][$key];
			}
		}
		// Save the option array.
		update_option( "taxonomy_$t_id", $term_meta );
	}
}
add_action( 'edited_product_cat', 'product_cat_custom_meta', 10, 2 );
add_action( 'create_product_cat', 'product_cat_custom_meta', 10, 2 );

add_filter('manage_product_posts_columns', 'waitlist_column_into_product_list');
function waitlist_column_into_product_list($columns) {
    $columns['on_waitlist'] = 'Waitlist';
    return $columns;
}

//Add option for waitlist in product page
add_action( 'manage_product_posts_custom_column' , 'waitlist_into_product_list', 10, 2 );
function waitlist_into_product_list($column, $post_id ){
	global $woocommerce, $product;
    $temp = 0;
    
  if ($product->product_type == 'variable') {
			 $available_variations = $product->get_available_variations();

			 $vari = $available_variations[1]['attributes']['attribute_pa_size'];


			 $first_variation = $available_variations[0]['variation_id'];
			 $second_variation = $available_variations[1]['variation_id'];
			 $male_list_array = get_post_meta( $first_variation , 'woocommerce_waitlist' , true );
			 if($male_list_array)
			 {
			 	$male_waitlist = count($male_list_array);
			 }
			 $male_stock = get_post_meta( $first_variation , '_stock' , true );
			 $female_list_array = get_post_meta( $second_variation , 'woocommerce_waitlist' , true );
			 if($female_list_array)
			 {
			 	$female_waitlist = count($female_list_array);
			 }
			 $female_stock = get_post_meta( $second_variation , '_stock' , true );

		 switch ( $column ) {
			case 'on_waitlist': {
				if($male_waitlist != 0 & $male_stock == 0) {
                    $temp = 1;
					echo "<b>M:</b> ".$male_waitlist;
				}
				if($female_waitlist != 0 & $female_stock == 0) {
                    $temp = 1;
					if($vari == 'small'){
						echo "&nbsp;&nbsp;<b>S:</b> ".$female_waitlist;
					}
					else
					{
						echo "&nbsp;&nbsp;<b>F:</b> ".$female_waitlist;
					}
                }
                if( $temp == 0){
                    echo "-";
                }

			}
		 }
  }

  else{
		$waitlist = get_post_meta( $post_id , 'woocommerce_waitlist' , true );
		$stock = get_post_meta( $post_id , '_stock' , true );
	   switch ( $column ) {
		case 'on_waitlist': if(! $waitlist == 0 & $stock <=  0){ echo count($waitlist);}else{ echo "-";}
	   }
   }
}
/*function waitlist_into_product_list($column, $post_id ){
    global $woocommerce, $product;

  if ($product->product_type == 'variable')
  {
             $available_variations = $product->get_available_variations();
             $vari = $available_variations[1]['attributes']['attribute_pa_size'];
             $first_variation = $available_variations[0]['variation_id'];
             $second_variation = $available_variations[1]['variation_id'];
             //$male_list_array = get_post_meta( $second_variation , 'cwginstock_variation_id' , true );
            //  $male_list_array = new WP_Query(array( 'meta_key' => 'cwginstock_variation_id', 'meta_value' => $second_variation ) );
            global $wpdb;
            //$malecount = $wpdb->get_results("SELECT * FROM wp_postmeta WHERE (meta_key = 'cwginstock_variation_id' AND meta_value = '$first_variation' AND meta_key <> '_wp_trash_meta_status')");
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $malecount = $wpdb->get_results($wpdb->prepare("SELECT wp_postmeta.meta_key FROM wp_postmeta AS wp_postmeta INNER JOIN wp_posts AS wp_posts ON wp_postmeta.post_id = wp_posts.Id WHERE meta_key LIKE 'cwginstock_variation_id' and meta_key <> '_wp_trash_meta_status' and meta_value = '$first_variation' and post_status = 'cwg_subscribed' limit 10"));
            $femalecount = $wpdb->get_results($wpdb->prepare("SELECT wp_postmeta.meta_key FROM wp_postmeta AS wp_postmeta INNER JOIN wp_posts AS wp_posts ON wp_postmeta.post_id = wp_posts.Id WHERE meta_key LIKE 'cwginstock_variation_id' and meta_key <> '_wp_trash_meta_status' and meta_value = '$second_variation' and post_status = 'cwg_subscribed' limit 10"));
            $male_stock = get_post_meta( $first_variation , '_stock' , true );
            $female_stock = get_post_meta($second_variation , '_stock' , true );
         switch ( $column ) {
            case 'on_waitlist': {
                if(count($malecount) != 0 && $male_stock == 0)
                {
                    echo "<b>M:</b> ".count($malecount);
                }
                if(count($femalecount) != 0 && $female_stock == 0)
                {

                    echo "&nbsp;&nbsp;<b>F:</b> ".count($femalecount);
                }
            }
         }
  }
  else{
    global $wpdb;
    //$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    //$waitlist = $wpdb->get_results("SELECT * FROM wp_postmeta WHERE (meta_key = 'cwginstock_product_id' AND meta_value = '$post_id' AND meta_key <> '_wp_trash_meta_status')");
    $waitlist = $wpdb->get_results($wpdb->prepare("SELECT wp_postmeta.meta_key FROM wp_postmeta AS wp_postmeta INNER JOIN wp_posts AS wp_posts ON wp_postmeta.post_id = wp_posts.Id WHERE meta_key LIKE 'cwginstock_product_id' and meta_value = '$post_id' and post_status = 'cwg_subscribed' limit 10"));

    //$waitlist = get_post_meta( $post_id , 'cwginstock_product_id' , true );
    $stock = get_post_meta( $post_id , '_stock' , true );
   switch ( $column ) {
   case 'on_waitlist': if(! count($waitlist) == 0 && $stock <=  0){ echo count($waitlist);}
       }
   }
}*/
add_filter('manage_edit-product_columns', 'instock_column_into_product_list');
function instock_column_into_product_list($columns) {
    $new_columns = array();
    foreach( $columns as $key => $column ){
        $new_columns[$key] =  $columns[$key];
        if( $key === 'sku' )
            $new_columns['in_stock'] = __( 'In Stock','woocommerce');
    }
    return $new_columns;
}

//Add option for waitlist in product page
add_action( 'manage_product_posts_custom_column' , 'instock_into_product_list', 10, 2 );
function instock_into_product_list($column, $post_id ){
    global $woocommerce, $product;

    if ($product->is_type( 'variable' )){

        // Get the available variations for the variable product
        $available_variations = $product->get_available_variations();

        // Initializing variables
        $variations_count = count($available_variations);
        $loop_count = 0;

        // Iterating through each available product variation
        foreach( $available_variations as $key => $values )
        {
            $loop_count++;
            // Get the term color name
            if(isset($values['attributes']['attribute_pa_sex'])):
            $attribute_color = $values['attributes']['attribute_pa_sex'];
            $attribute_name = 'pa_sex';
            elseif(isset($values['attributes']['attribute_pa_size'])):
            $attribute_color = $values['attributes']['attribute_pa_size'];
            $attribute_name = 'pa_size';
            elseif(isset($values['attributes']['attribute_pa_quantity'])):
            $attribute_color = $values['attributes']['attribute_pa_quantity'];
            $attribute_name = 'pa_quantity';
            elseif(isset($values['attributes']['attribute_pa_price'])):
                $attribute_color = $values['attributes']['attribute_pa_price'];
                $attribute_name = 'pa_price';
            endif;
            $wp_term = get_term_by('slug',$attribute_color,$attribute_name);
            $term_name = $wp_term->name;

            // Get the variation quantity
            $variation_obj = wc_get_product( $values['variation_id'] );
            $stock_qty = $variation_obj->get_stock_quantity(); // Stock qty
            // The display
        switch ( $column ) {
            case 'in_stock':
            {
                if($stock_qty == ''): $stock_qty = 0; endif;
                echo $term_name . ' : ' .$stock_qty .'</br>';
            }
         }
        }

    }
      else
  {
        $stock = get_post_meta( $post_id , '_stock' , true );
       switch ( $column ) {
       case 'in_stock': if($stock == ''): $stock = 0; endif;  echo (int) $stock;
       }
   }

}
//add extra fields to category edit form hook
add_action ( 'edit_category_form_fields', 'extra_category_fields');

//add extra fields to category edit form callback function
function extra_category_fields( $tag ) {    //check for existing featured ID
    $t_id = $tag->term_id;
    $cat_meta = get_option( "category_$t_id");
?>

<tr class="form-field">
<th scope="row" valign="top"><label for="short_des"><?php _e('Short Description'); ?></label></th>
<td>
<input type="text" name="Cat_meta[short_des]" id="Cat_meta[short_des]" value="<?php echo $cat_meta['short_des'] ? $cat_meta['short_des'] : ''; ?>"><br />
        <p class="description"><?php _e('Enter a value for this field'); ?></p>
    </td>
</tr>
<?php
}
// save extra category extra fields hook
add_action ( 'edited_category', 'save_extra_category_fileds');

// save extra category extra fields callback function
function save_extra_category_fileds( $term_id ) {
    if ( isset( $_POST['Cat_meta'] ) ) {
        $t_id = $term_id;
        $cat_meta = get_option( "category_$t_id");
        $cat_keys = array_keys($_POST['Cat_meta']);
            foreach ($cat_keys as $key){
            if (isset($_POST['Cat_meta'][$key])){
                $cat_meta[$key] = $_POST['Cat_meta'][$key];
            }
        }
        //save the option array
        update_option( "category_$t_id", $cat_meta );
    }
}
// Remove Password Strength from user registation
function wc_ninja_remove_password_strength() {
    if ( wp_script_is( 'wc-password-strength-meter', 'enqueued' ) ) {
        wp_dequeue_script( 'wc-password-strength-meter' );
    }
}
add_action( 'wp_print_scripts', 'wc_ninja_remove_password_strength', 100 );

//function lw_gpf_exclude_product($excluded, $product_id, $feed_format) {
//    // Return TRUE to exclude a product, FALSE to include it, $excluded to use the default behaviour.
//    $cats = wp_get_post_terms( $product_id, 'product_cat', array( 'fields' => 'ids' ) );
//    if ( in_array( 480, $cats ) ) {
//        return TRUE;
//    }
//    return $excluded;
//}
//add_filter( 'woocommerce_gpf_exclude_product', 'lw_gpf_exclude_product', 11, 3);

// Average Rating issue
add_action('transition_comment_status', 'my_approve_comment_callback', 10, 3);
function my_approve_comment_callback($new_status, $old_status, $comment) {

    global $wpdb;
    $product_id = $comment->comment_post_ID;

    $count = $wpdb->get_var("
        SELECT COUNT(meta_value) FROM $wpdb->commentmeta
        LEFT JOIN $wpdb->comments ON $wpdb->commentmeta.comment_id = $wpdb->comments.comment_ID
        WHERE meta_key = 'rating'
        AND comment_post_ID = $product_id
        AND comment_approved = '1'
        AND meta_value > 0
    ");

    $rating = $wpdb->get_var("
        SELECT SUM(meta_value) FROM $wpdb->commentmeta
        LEFT JOIN $wpdb->comments ON $wpdb->commentmeta.comment_id = $wpdb->comments.comment_ID
        WHERE meta_key = 'rating'
        AND comment_post_ID = $product_id
        AND comment_approved = '1'
    ");

    if ($count > 0) {
        $average = number_format($rating / $count, 2);
        update_post_meta( $product_id, '_wc_average_rating', $average);
    }

}
//restores the "Purchased Items" column in the orders page.

add_filter('manage_edit-shop_order_columns', 'wc_custom_purchased_column');
function wc_custom_purchased_column($columns)
{
    $new_array = array();
    foreach ($columns as $key => $title) {
        if ($key == 'billing_address') {
            $new_array['order_items'] = __('Purchased', 'woocommerce');
        }
        $new_array[$key] = $title;
    }
    return $new_array;
}

add_action('manage_shop_order_posts_custom_column', 'wc_shop_custom_column', 10, 2);
function wc_shop_custom_column($column)
{
    global $post, $woocommerce, $the_order;
    switch ($column) {
        case 'order_items':
            $terms = $the_order->get_items();
            echo '<a href="#" class="show_order_items">' . apply_filters( 'woocommerce_admin_order_item_count', sprintf( _n( '%d item', '%d items', $the_order->get_item_count(), 'woocommerce' ), $the_order->get_item_count() ), $the_order ) . '</a>';
                if ( sizeof( $the_order->get_items() ) > 0 ) {
                    echo '<table class="order_items" cellspacing="0">';
                    foreach ( $the_order->get_items() as $item ) {
                        $product        = apply_filters( 'woocommerce_order_item_product', $item->get_product(), $item );
                        $item_meta      = new WC_Order_Item_Meta( $item, $product );
                        $item_meta_html = $item_meta->display( true, true );
                        ?>
                        <tr class="<?php echo apply_filters( 'woocommerce_admin_order_item_class', '', $item, $the_order ); ?>">
                            <td class="qty"><?php echo esc_html( $item->get_quantity() ); ?></td>
                            <td class="name">
                                <?php  if ( $product ) : ?>
                                    <?php echo ( wc_product_sku_enabled() && $product->get_sku() ) ? $product->get_sku() . ' - ' : ''; ?><a href="<?php echo get_edit_post_link( $product->get_id() ); ?>"><?php echo apply_filters( 'woocommerce_order_item_name', $item->get_name(), $item, false ); ?></a>
                                <?php else : ?>
                                    <?php echo apply_filters( 'woocommerce_order_item_name', $item->get_name(), $item, false ); ?>
                                <?php endif; ?>
                                <?php if ( ! empty( $item_meta_html ) ) : ?>
                                    <?php echo wc_help_tip( $item_meta_html ); ?>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php
                    }
                    echo '</table>';
                } else echo '&ndash;';
            break;
        }
}
add_filter( 'dynamic_sidebar_params', 'b3m_wrap_widget_titles', 20 );
function b3m_wrap_widget_titles( array $params ) {

        // $params will ordinarily be an array of 2 elements, we're only interested in the first element
        $widget =& $params[0];
        $widget['before_title'] = '<p class="Custom_title_wid">';
        $widget['after_title'] = '</p>';

        return $params;

}
add_filter("woocommerce_checkout_fields", "order_fields");



function order_fields($fields) {
    $order = array(
        "billing_first_name",
        "billing_last_name",
        "billing_email",
        "billing_company",
        "billing_country",
        "billing_address_1",
        "billing_address_2",
        "billing_city",
        "billing_state",
        "billing_postcode",
        "billing_phone"

    );
    foreach($order as $field)
    {
        $ordered_fields[$field] = $fields["billing"][$field];
    }

    $fields["billing"] = $ordered_fields;
    $fields["billing"]["billing_first_name"]["priority"] = 10;
    $fields["billing"]["billing_last_name"]["priority"] = 20;
    $fields["billing"]["billing_email"]["priority"] = 30;
    $fields["billing"]["billing_company"]["priority"] = 40;
    $fields["billing"]["billing_address_1"]["priority"] = 50;
    $fields["billing"]["billing_address_2"]["priority"] = 60;
    $fields["billing"]["billing_city"]["priority"] = 70;
    $fields["billing"]["billing_state"]["priority"] = 80;
    $fields["billing"]["billing_postcode"]["priority"] = 90;
    $fields["billing"]["billing_phone"]["priority"] = 100;
    return $fields;

}

add_action( 'woocommerce_share', 'add_content_after_addtocart_button_func' );

function add_content_after_addtocart_button_func() {
// Echo content.
echo do_shortcode( '[Sassy_Social_Share title="Share This"]' );
}

function new_excerpt_more($more) {
    $post = get_post();
    $excerpt .= '...<a class="re_more" href="'. get_permalink($post->ID) . '">Read More</a>';
    return $excerpt;
}
//add_filter('excerpt_more', 'new_excerpt_more', 21 );

add_action('admin_head', 'my_custom_fonts');
function my_custom_fonts() {
  echo '<style>
    input#woocommerce_gpf_excluded+label {
    display: none;
}
input#woocommerce_gpf_excluded {
    display: none;
}
  </style>';
}
add_filter( 'woocommerce_shipping_calculator_enable_city', '__return_true' );

add_filter( 'woocommerce_structured_data_product_offer', 'omai_woocommerce_structured_data_product_offer', 10, 2 );

function omai_woocommerce_structured_data_product_offer( $markup, $product ) {

    /* By default, we assume all products sold in the ecommerce are in
    new condition */
    if ( empty( $markup[ 'itemCondition' ] ) ) {
        $markup[ 'itemCondition' ] = 'http://schema.org/NewCondition';
    }

    return $markup;

}
// add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

// function new_loop_shop_per_page( $cols ) {
//   // $cols contains the current number of products per page based on the value stored on Options -> Reading
//   // Return the number of products you wanna show per page.
//   $cols = 5;
//   return $cols;
// }

// Our hooked in function $availablity is passed via the filter!
add_filter( 'woocommerce_get_availability', 'xyz_get_availability', 1,2);
function xyz_get_availability( $availability, $product ) {
//     $product = wc_get_product( $product->id );
//     $getstock_status=$product->get_stock_status();

// if($product->backorders_allowed() && $product->get_total_stock() <= get_option( 'woocommerce_notify_no_stock_amount' ) || $getstock_status=='outofstock'){
// //$availability['availability'] = __('Out of Stock - Join waitlist to be emailed when this product is available', 'woocommerce');
// $availability['availability'] = __('Out of Stock - Join waitlist to be emailed when this product is available. <span class="quikview"><a href="'.get_the_permalink($product->ID).'" style="color:#ff9900">View Waitlist Options</a></span>', 'woocommerce');
// $availability['class'] = 'out-of-stock';
// }
if($availability['class']=='out-of-stock' && !($availability['class']=='available-on-backorder')){
    $availability['availability'] = __('Out of Stock - Join waitlist to be emailed when this product is available. <span class="quikview"><a href="'.get_the_permalink($product->ID).'" style="color:#ff9900">View Waitlist Options</a></span>', 'woocommerce');
    $availability['class'] = 'out-of-stock';
 }
if ( !$product->managing_stock() && $product->is_on_backorder( 1 ) ) {
        $availability['availability']  = __( 'In Stock', 'xyzreptiles' );
}

return $availability;
}

//Add custom column into Product Page
add_filter('manage_product_posts_columns', 'my_columns_into_product_list');
function my_columns_into_product_list($columns) {
    $columns['recent_check'] = 'New Arrivals';
    return $columns;
}
 //Add rows value into Product Page
add_action( 'manage_product_posts_custom_column' , 'my_custom_column_into_product_list', 10, 2 );
function my_custom_column_into_product_list($column, $post_id ){
    switch ( $column ) {
    case 'recent_check':
	?>
    <script>
	jQuery(document).ready(function(e) {
        //alert("Here");
		jQuery('body').on('click','#new_arrivals<?php echo $post_id; ?>',function(){
		//  var thisCheck = jQuery(this);
		  if (jQuery(this).is(':checked')) {
			var new_arrivals = jQuery(this).val();
		  } else {
			  var new_arrivals = "no";
			}
			var post_id = <?php echo $post_id; ?>;
			var info = 'post_id=' + post_id +'&new_arrivals='+new_arrivals;
			var ajax_url = "<?php echo get_template_directory_uri(); ?>/new_arrival_ajax.php";
			//alert(ajax_url);
			jQuery.ajax({
				type: "POST",
				url: ajax_url,
				data: info,
				success: function(msg){
					//alert(msg);
					}
			});

		  //}
		});
    });
	</script>
    <?php
        $n_a_check=get_post_meta( $post_id , 'new_arrivals' , true );?>

		<input type="checkbox" value="yes" id="new_arrivals<?php echo $post_id; ?>" name="new_arrivals" class="recent_check" <?php if($n_a_check=='yes')echo 'checked="checked"'; ?>>

	<?php
    break;
    }
}

//Add custom column into Product Page
add_filter('manage_product_posts_columns', 'my_columns_into_product_list2');
function my_columns_into_product_list2($columns) {
    $columns['hide_product'] = 'Hide product';
    return $columns;
}

//Add rows value into Product Page
add_action( 'manage_product_posts_custom_column' , 'my_custom_column_into_product_list2', 10, 2 );
function my_custom_column_into_product_list2($column, $post_id ){
    switch ( $column ) {
    case 'hide_product':
	?>
    <script>
	jQuery(document).ready(function(e) {

		jQuery('body').on('click','#hide_product<?php echo $post_id; ?>',function(){

			//alert('right');

			if (jQuery(this).is(':checked')) {
				var val = jQuery(this).val();
			} else {
				var val = 'a:0:{}';
			}


			var post_id = <?php echo $post_id; ?>;
			var info = 'post_id=' + post_id +'&hide_val='+val;
			var ajax_url = "<?php echo get_template_directory_uri(); ?>-child/hide_feed_ajax.php";

			jQuery.ajax({
				type: "POST",
				url: ajax_url,
				data: info,
				success: function(msg){
					 //alert(msg);
					}
			});


		});
    });
	</script>
    <?php
        $n_a_check=get_post_meta( $post_id , '_woocommerce_gpf_data' , true );?>

		<input type="checkbox" value='a:1:{s:15:"exclude_product";s:2:"on";}' id="hide_product<?php echo $post_id; ?>" name="hide_product" class="recent_hide" <?php if($n_a_check=='a:1:{s:15:"exclude_product";s:2:"on";}')echo 'checked="checked"'; ?>>

	<?php
    break;
    }
}

// numbered pagination
function pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span class=\"cc-pagination-span-page\">Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a class=\"cc-first-page\" href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a class=\"cc-Previous-page\" href='".get_pagenum_link($paged - 1)."'> Previous</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a class=\"cc-next-page\" href=\"".get_pagenum_link($paged + 1)."\">Next </a>";
        // if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a class=\"cc-last-page\" href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}
// numbered pagination

/*Image id to Resize images on fly Crop*/
function rw_resize( $attachment_id, $width, $height, $crop = true )
{
    // Get upload directory info
    $upload_info = wp_upload_dir();
    $upload_dir  = $upload_info['basedir'];
    $upload_url  = $upload_info['baseurl'];

    // Get file path info
    $path      = get_attached_file( $attachment_id );
    $path_info = pathinfo( $path );
    $ext       = $path_info['extension'];
    $rel_path  = str_replace( array( $upload_dir, ".$ext" ), '', $path );
    $suffix    = "{$width}x{$height}";
    $dest_path = "{$upload_dir}{$rel_path}-{$suffix}.{$ext}";
    $url       = "{$upload_url}{$rel_path}-{$suffix}.{$ext}";

    // If file exists: do nothing
    if ( file_exists( $dest_path ) )
        return $url;

    // Generate thumbnail
    if ( image_make_intermediate_size( $path, $width, $height, $crop ) )
        return $url;

    // Fallback to full size
    return "{$upload_url}{$rel_path}.{$ext}";
}
/*Image id to Resize images on fly Crop*/

function fb_opengraph() {
    global $post;
    global $product;
    global $wp_query;
    $typenow = $post->post_type;
    $thumbnail_src_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    $alt_text = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true);
    $upload_dir = wp_upload_dir();
    /*Get Category name*/
    $cat_desc = '';
    $cat_id = $wp_query->get_queried_object_id();
    $cat_desc = term_description( $cat_id, 'product_cat' );
    $t_id = get_queried_object()->term_id;
    $term_meta = get_option( "taxonomy_$t_id" );
    $page_title=$term_meta['custom_page_title'];
    /*End of Cateogory name*/
    $product_facebook_url = '/home/xyzreptiles/public_html/wp-content/uploads/facebook/'.substr($thumbnail_src_url[0], strrpos($thumbnail_src_url[0], '/') + 1);
    if(file_exists($product_facebook_url)):  $product_facebook_url1 = $productimage = $upload_dir['baseurl'].'/facebook/'.substr($thumbnail_src_url[0], strrpos($thumbnail_src_url[0], '/') + 1); endif;
    $image = get_field('facebook_image');
    if(!empty($image)): $productimage= $image['url']; elseif(!empty($product_facebook_url1)): $productimage= $product_facebook_url1;  else: $productimage = $thumbnail_src_url[0]; endif;
    if((is_product_category() || is_category())):
    $thumb_id = get_post_thumbnail_id(get_the_ID());
    $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
    ?>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php if($page_title): echo trim($page_title); else: echo woocommerce_page_title(); endif; ?>" />
    <meta property="og:description" content="<?php
    $term = get_queried_object();
    $shortdescripton=get_field('short_description', $term);
echo wp_strip_all_tags($shortdescripton);
    //echo wp_strip_all_tags($term_meta['custom_term_meta']); ?>"/>
    <meta property="og:url" content="<?php echo get_category_link($cat_id); ?>" />
    <meta property="og:site_name" content="xyzReptiles" />
    <meta property="fb:app_id" content="464192210417440" />
    <meta property="og:image" content="<?php echo $productimage; ?>" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:image:alt" content="<?php echo $alt; ?>" />
    <?php elseif(is_product()): ?>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php the_title(); ?>" />
    <meta property="og:description" content="<?php //echo $term->description; ?>"/>
    <meta property="og:url" content="<?php the_permalink(); ?>" />
    <meta property="og:site_name" content="xyzReptiles" />
    <meta property="fb:app_id" content="464192210417440" />
    <meta property="og:image" content="<?php echo $productimage; ?>"/>
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:image:alt" content="<?php echo $alt; ?>" />
    <?php elseif(is_author() || is_tag() || is_date() || is_home() || is_single()):
    $thumb_id = get_post_thumbnail_id(get_the_ID());
    $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
     ?>
     <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php the_title(); ?>" />
    <meta property="og:description" content=""/>
    <meta property="og:url" content="<?php the_permalink(); ?>" />
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="fb:app_id" content="464192210417440" />
    <meta property="og:image" content="<?php echo $thumbnail_src_url[0]; ?>"/>
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:image:alt" content="<?php echo $alt; ?>" />
<?php else: ?>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php wp_title(); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>"/>
    <meta property="og:url" content="<?php the_permalink(); ?>" />
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="fb:app_id" content="464192210417440" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/facebookimage.png">
    <!--meta property="og:image" content="https://www.xyzreptiles.com/wp-content/uploads/2019/05/baby-hypo-columbian-boa-constrictor-ds.jpg"-->
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="xyzreptiles logo" />
    <?php endif;
}
add_action('wp_head', 'fb_opengraph', 5);

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page('Theme Settings');
	acf_add_options_page('More Theme Settings');

}

// Add this code to your theme functions.php file or a custom plugin
add_filter( 'woocommerce_shipstation_export_custom_field_3', 'shipstation_custom_field_3' );

function shipstation_custom_field_3() {
	return '_species'; // Replace this with the key of your custom field

}


add_action('woocommerce_thankyou', 'update_order_item_sex', 10, 1);
function update_order_item_sex( $order_id ) {

    if ( ! $order_id )
        return;

    // Getting an instance of the order object
    $order = wc_get_order( $order_id );
	$items = $order->get_items();

	foreach ( $items as $key =>$item ) {

	     //print_r($item->get_variation_id());
	     $variation = wc_get_product($item->get_variation_id());
	     if(!empty($variation)){
	        $sex = $variation->get_attributes()['pa_sex'];
    	   //wc_update_order_item_meta( $order_id, '_species', $data, $prev_value = '' );
    	   //wc_add_order_item_meta(  $order_id, '_species',  $data,  $unique);
    	   //echo $order_id;
    	    $pa_sex = wc_get_order_item_meta( $key, 'pa_sex', true );
    	    $s_sex = wc_get_order_item_meta( $key, '_sex', true );
    	    if(empty($pa_sex)){
	            wc_add_order_item_meta(  $key, 'pa_sex',  $sex,  $unique);
    	    }
    	    if(empty($s_sex)){
	            wc_add_order_item_meta(  $key, '_sex',  $sex,  $unique);
    	    }
	     }

	}
}

// Add this code to your theme functions.php file or a custom plugin

/*mailchip subscribed new user*/
add_action( 'user_register', 'mailchip_custom_code', 10, 1 );
function mailchip_custom_code ($user_id){
    if(!empty($_POST['email'])){
        $email = $_POST['email'];
        $MailChimp = new MailChimp('e1f5b36f967ebbb880318c0dd003e0e2-us10');
        if(!empty($email)){
            $mailchimp_api = get_option('mailchimp');
            $apiKey = $mailchimp_api[0];
            $listId = $mailchimp_api[1];
            $group_id=$mailchimp_api[2];
            $list_id = $listId;
            $first_name = 'Valued customer';
            $last_name = 'last_name';
            $result = $MailChimp->post("lists/$list_id/members", [
                    'merge_fields' => ['FNAME'=>$first_name, 'LNAME'=>$last_name],
                    'interests' => ['fd2fe9d9b3' => true, '89fadeaae3' => true, '100618a978' => true, '7fbb1fdb56' => true ], //'c0d8ff10ab' => false
                    'email_address' => $email,
                    'status'        => 'subscribed'
                ]);
            if($result['status'] == 'subscribed'){
                //echo 'Subscribed';
            } else if ($result['status'] == 400 ) {
                //echo 'Not found';
            } else {
                //echo "two";
            }
        }
    }
}

/*acf preview*/
/*add_filter('_wp_post_revision_fields', 'add_field_debug_preview');
function add_field_debug_preview($fields){
   $fields["debug_preview"] = "debug_preview";
   return $fields;
}

add_action( 'edit_form_after_title', 'add_input_debug_preview' );
function add_input_debug_preview() {
   echo '<input type="hidden" name="debug_preview" value="debug_preview">';
}*/

add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );
function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 18;
  return $cols;
}
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 6 );

add_action('woocommerce_after_shop_loop_item_title', 'get_star_rating', 3, 1 );
function get_star_rating(){
    global $woocommerce, $product;
    $average = $product->get_average_rating();
    $review_count = $product->get_review_count();
    // if ($average = $product->get_average_rating()){
        echo '<div class="cc-star-count woocommerce"><div class="star-rating" title="Rated 5.00 out of 5"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span> </div><div class="review-count" title="Customer Review">('.$review_count.')</div></div>';
    // }
}
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10, 1 );

add_action('woocommerce_add_to_cart', 'custome_add_to_cart');
function custome_add_to_cart() {
    $product_id = $_REQUEST['add-to-cart'];
    $subscription = get_post_meta($product_id, '_wcsatt_force_subscription', true);
    if($product_id != 91066){
    if(empty($subscription) && $subscription == 'no'){
    $url = get_permalink( $product_id );
    if ( wp_redirect( $url ) ) {
        exit();
    }
    }
}
}
function comment_additonal_column( $columns )
{
	$columns['rating_count'] = __( 'Rating Count' );
	return $columns;
}
add_filter( 'manage_edit-comments_columns', 'comment_additonal_column' );

function comment_additonal_column_data( $column, $comment_ID )
{

    //
    if ( 'rating_count' == $column )
    {
		echo get_comment_meta($comment_ID, 'rating', true );;
	}
}
add_filter( 'manage_comments_custom_column', 'comment_additonal_column_data', 10, 2 );

function my_column_width() {
    echo '<style type="text/css">';
    echo '#rating_count{width:100px;}';
    echo '</style>';
}
add_action('admin_head', 'my_column_width');
function remove_output_structured_data() {
    remove_action( 'wp_footer', array( WC()->structured_data, 'output_structured_data' ), 10 ); // This removes structured data from all frontend pages
    remove_action( 'woocommerce_email_order_details', array( WC()->structured_data, 'output_email_structured_data' ), 30 ); // This removes structured data from all Emails sent by WooCommerce
  }
  add_action( 'init', 'remove_output_structured_data' );
/*Display name change*/
add_action( 'woocommerce_save_account_details', 'save_favorite_color_account_details', 12, 1 );
function save_favorite_color_account_details( $user_id ) {
    // For Favorite color
    if( isset( $_POST['account_username'] ) )
        update_user_meta( $user_id, 'display_name', sanitize_text_field( $_POST['account_username'] ) );
}
/*Display name change*/
/*Coupon Code added on abandaned cart*/

add_action( 'woocommerce_before_cart_table', 'custom_woocommerce_auto_complete_order');
add_action( 'template_redirect', 'custom_woocommerce_auto_complete_order', 10, 3 );
function custom_woocommerce_auto_complete_order()
{
    if( ! is_admin() ) {
        global $woocommerce;
        $cat_in_cart = false;

        // Loop through all products in the Cart
        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {

            // If Cart has category "download", set $cat_in_cart to true
            if ( has_term( 'animals', 'product_cat', $cart_item['product_id'] ) ) {
                $cat_in_cart = true;
                break;
            }
        }
        // Do something if category "download" is in the Cart
        if ( $cat_in_cart )
        {
            $coupon_code = $_GET['coupon'];
            if(isset($coupon_code)):
            if ( WC()->cart->has_discount( $coupon_code ) ) return;
            WC()->cart->add_discount( $coupon_code );
            wc_print_notices();
            endif;
        }
    }
}
/*Coupon Code added on abandaned cart*/
add_filter('woocommerce_save_account_details_required_fields', 'wc_save_account_details_required_fields' );
function wc_save_account_details_required_fields( $required_fields ){
    unset( $required_fields['account_display_name'] );
    return $required_fields;
}
function is_edit_page($new_edit = null){
    global $pagenow;
    //make sure we are on the backend
    if (!is_admin()) return false;


    if($new_edit == "edit")
        return in_array( $pagenow, array( 'post.php',  ) );
    elseif($new_edit == "new") //check for new post page
        return in_array( $pagenow, array( 'post-new.php' ) );
    else //check for either new or edit
        return in_array( $pagenow, array( 'post.php', 'post-new.php' ) );
}

if (is_edit_page()):
    add_filter('acf/settings/remove_wp_meta_box', '__return_false');
endif;

add_action('woocommerce_after_cart_item_quantity_update', 'update_cart_items_quantities', 10, 3 );
function update_cart_items_quantities( $cart_item_key, $quantity, $old_quantity ){
    $cart = WC()->cart;
    $cart_data = $cart->get_cart();
    $cart_item = $cart_data[$cart_item_key];
    $manage_stock = $cart_item['data']->get_manage_stock();
    $product_stock = $cart_item['data']->get_stock_quantity();

    // Zero or negative stock (remove the product)
    if( $product_stock <= 0 && $manage_stock ){
        unset( $cart->cart_contents[ $cart_item_key ] );
    }
    if( $quantity > $product_stock && $manage_stock )
    {
        $cart->cart_contents[ $cart_item_key ]['quantity'] = $product_stock;
        if($product_id = $cart->cart_contents[ $cart_item_key ]['variation_id'])
        {
            $product_id = $cart->cart_contents[ $cart_item_key ]['variation_id'];
        }else
        {
            $product_id = $cart->cart_contents[ $cart_item_key]['product_id'];
        }
        $_product =  wc_get_product($product_id);
        $error = 'Sorry, we do not have enough "'.$_product->get_title().'" in stock to fulfill your order. Please edit your cart and try again. We apologize for any inconvenience caused.';
        wc_add_notice( apply_filters( 'wc_add_to_cart_message',$error, $_product ),$notice_type = 'error');
    }
    return $product_quantity;
}
/*Custom Order Restock code
if ( ! class_exists( 'WC_Auto_Stock_Restore' ) ) {

	class WC_Auto_Stock_Restore {

		public function __construct() {
			//add_action( 'woocommerce_order_status_processing_to_cancelled', array( $this, 'restore_order_stock' ), 10, 1 );
			//add_action( 'woocommerce_order_status_completed_to_cancelled', array( $this, 'restore_order_stock' ), 10, 1 );
			//add_action( 'woocommerce_order_status_on-hold_to_cancelled', array( $this, 'restore_order_stock' ), 10, 1 );
			add_action( 'woocommerce_order_status_processing_to_refunded', array( $this, 'restore_order_stock' ), 10, 1 );
			add_action( 'woocommerce_order_status_completed_to_refunded', array( $this, 'restore_order_stock' ), 10, 1 );
			add_action( 'woocommerce_order_status_on-hold_to_refunded', array( $this, 'restore_order_stock' ), 10, 1 );
		} // End __construct()

		public function restore_order_stock( $order_id ) {
			$order = new WC_Order( $order_id );

			if ( ! get_option('woocommerce_manage_stock') == 'yes' && ! sizeof( $order->get_items() ) > 0 ) {
				return;
			}

			foreach ( $order->get_items() as $item ) {

				if ( $item['product_id'] > 0 ) {
					$_product = $order->get_product_from_item( $item );

					if ( $_product && $_product->exists() && $_product->managing_stock() ) {

						$old_stock = $_product->stock;

						$qty = apply_filters( 'woocommerce_order_item_quantity', $item['qty'], $this, $item );

						$new_quantity = $_product->increase_stock( $qty );

						do_action( 'woocommerce_auto_stock_restored', $_product, $item );

						$order->add_order_note( sprintf( __( 'Item #%s stock incremented from %s to %s.', 'woocommerce' ), $item['product_id'], $old_stock, $new_quantity) );

						$order->send_stock_notifications( $_product, $new_quantity, $item['qty'] );
					}
				}
			}
		} // End restore_order_stock()
	}
	$GLOBALS['wc_auto_stock_restore'] = new WC_Auto_Stock_Restore();
}
*/


/* backorder products issues for quantity */
function xyz_minimum_item_quantity_validation($passed, $product_id, $quantity ) {
    $subscription = get_post_meta($product_id, '_wcsatt_force_subscription', true);
    if(!$_GET['add-to-cart']){
    if($product_id != 91066 ){
        if(empty($subscription) && $subscription == 'no'){
	global $woocommerce;
	$item_quantity=0;
	$items = $woocommerce->cart->get_cart();
	$product_id = absint($_POST['product_id']);
    $variation_id = absint($_POST['variation_id']);
    $quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);
	if(!empty($items)){
    	foreach($items as $item){
    		if($variation_id > 0){
        		if($item['data']->variation_id==$variation_id){
        		$item_quantity = $item['quantity'];
        		break;
        		}
    		}elseif($item['data']->id == $product_id){
        		$item_quantity = $item['quantity'];
        		break;
    		}
    	}
    	$quantity=$quantity+$item_quantity;
	}
	if($quantity == ''){
		$quantity = 1;
	}

	/*if($variation_id!=''){
		$product_main_id=$variation_id;
	}
	else{
		$product_main_id=$product_id;
	}*/
	//$product = get_product($product_id);
	 if($variation_id > 0){
        $product = wc_get_product($variation_id);

    }else{
        $product = wc_get_product($product_id);
    }
	$product_title = $product->post->post_title;
	$stock= $product->get_stock_quantity();
	if($product->backorders_allowed() && $stock < $quantity ){
		//wc_add_notice('Quantity should be less than or equal to available stock of product "'.$product_title.'".','error');
		$passed = false;
		 $data = array(
        'error' => true,
        'product_url' => apply_filters('woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id)
        );
        echo wp_send_json($data);
         wp_die();
	}
        }
}
    return $passed;
}
}
add_action( 'woocommerce_add_to_cart_validation', 'xyz_minimum_item_quantity_validation', 10, 5 );

add_action('woocommerce_after_checkout_validation', 'rei_after_checkout_validation');

function rei_after_checkout_validation( $posted ) {
    //print_r($posted);
    if(!$_GET['add-to-cart']){
        //if($product_id != 91066 ){
        	global $woocommerce;
        	$item_quantity=0;
        	$items = $woocommerce->cart->get_cart();
        	//$product_id = absint($_POST['product_id']);
            //$variation_id = absint($_POST['variation_id']);
            // $quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);
        	if(!empty($items)){
            	foreach($items as $item){
            	    $product_id = $item['product_id'];
            	    $subscription = get_post_meta($product_id, '_wcsatt_force_subscription', true);
            	    $variation_id = $item['variation_id'];
            	    if($product_id != 91066){
            	    if(empty($subscription) && $subscription == 'no'){
            		if($variation_id > 0){
                		if($item['data']->variation_id==$variation_id){
                    		$item_quantity = $item['quantity'];
                    		$product = wc_get_product($variation_id);
                            $product_title = $product->post->post_title;
                        	$stock= $product->get_stock_quantity();
                        	if($product->backorders_allowed() && $stock < $item_quantity ){
                        		wc_add_notice('Sorry, "'.$product_title.'" - Out of Stock.','error');
                        		$passed = false;
                                break;
                        	}
                    		return $passed;
                		}
            		}elseif($item['data']->id == $product_id){
                		//$item_quantity = $item['quantity'];
                		$item_quantity = $item['quantity'];
                		$product = wc_get_product($product_id);
                        $product_title = $product->post->post_title;
                    	$stock= $product->get_stock_quantity();
                    	if($product->backorders_allowed() && $stock < $item_quantity ){
                    		wc_add_notice('Sorry, Out of Stock "'.$product_title.'" - Out of Stock.','error');
                    		$passed = false;
                            break;
                    	}
                		return $passed;
            		}
            	    }
        	    }
            	}
            	$quantity=$quantity+$item_quantity;
        	}
        return $passed;
    }
}

function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo '...';
	} else {
		echo $excerpt;
	}
}
/*Remove Subject square brackets in Email*/
add_filter('wp_mail', 'email_subject_remove_sitename');
function email_subject_remove_sitename($email) {
  $blogname = wp_specialchars_decode(get_option('blogname'), ENT_QUOTES);
  $email['subject'] = str_replace("[".$blogname."] - ", "", $email['subject']);
  $email['subject'] = str_replace("[".$blogname."]", "", $email['subject']);
  return $email;
}
/*Remove Subject square brackets in Email*/
/*Remove products from the breadcumbs*/
add_filter( 'wpseo_breadcrumb_single_link' ,'wpseo_remove_breadcrumb_link', 10 ,2);
function wpseo_remove_breadcrumb_link( $link_output , $link ){
    $text_to_remove = 'Products';

    if( $link['text'] == $text_to_remove ) {
      $link_output = '';
    }

    if( $link['text'] == 'Shop' ) {
        $link_output = '';
    }

    return $link_output;
}
/*Remove products from the breadcumbs*/
function adjust_single_breadcrumb( $link_output) {
	if(strpos( $link_output, 'breadcrumb_last' ) !== false ) {
		$link_output = '';
	}
   	return $link_output;
}
// add_filter('wpseo_breadcrumb_single_link', 'adjust_single_breadcrumb' );

/*Custom Code for User Agent*/
include('customplugin.php');
/*Custom Code for User Agent*/

function checkout_product_validation( $posted_data) {
    global $woocommerce;
	$item_quantity=0;
	$items = $woocommerce->cart->get_cart();
	$cart = WC()->cart;
    $cart_data = $cart->get_cart();
	if(!empty($items)){
    	foreach($items as $item){
    	        $cart_item = $item['key'];
        		$manage_stock = $item['data']->get_manage_stock();
                $product_stock = $item['data']->get_stock_quantity();
                // Zero or negative stock (remove the product)
                if($product_stock <= 0 && $manage_stock )
                {
                    unset( $cart->cart_contents[ $cart_item ] );
                }
    	}
	}
}

 add_action('woocommerce_checkout_update_order_review', 'checkout_product_validation');

/*instock sort of category page*/
function bbloomer_sort_by_name_woocommerce_shop( $args ) {
    //global $wpdb;
    //$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    //if ( $args['orderby'] == "stock" )
    //{
    //    $args['orderby'] 		= array('meta_value_num' => 'DESC');
    //    //$args['order']   		= 'ASC';
    //    $args['meta_key'] = 'rearrange_stock';
    //    //  $args['meta_key'] = '_stock_status';
    //    $args['paged'] = $paged;
    global $wpdb, $product;
    //$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    if (  $args['orderby'] == "stock" )
    {
        $category = get_queried_object();
        $currentcategory_id = $category->term_id;
        $arg = array(
            'post_type' => 'product',
            'post_status' => 'publish',
            'tax_query' => array(
                            array(
                                'taxonomy' => 'product_cat',
                                'field'    => 'term_id',
                                'operator' => 'IN',
                                'posts_per_page' => '-1',
                                'terms'    => $currentcategory_id,
                                ),
                            ),
                );
                $query = new WP_Query($arg);
                $psts = $query->posts;
                $arr_prdt = array();
                $prdct_count = count($psts);
                for($t1=0;$t1<$prdct_count;$t1++){
                    $arr_prdt[]= $psts[$t1]->ID;
                }
                $string_version = implode(',', $arr_prdt);
                $arrange_stock = $wpdb->get_results("SELECT * FROM `wp_postmeta` WHERE `post_id` IN ($string_version) AND `meta_key` LIKE 'rearrange_stock' ORDER BY `wp_postmeta`.`meta_value` +0 DESC");

        //$args['orderby'] 		= array('meta_value_num' => 'DESC');
        //$args['order']   		= 'DESC';
        ////$args['meta_key'] = '_stock';

        //  $args['meta_key'] = 'rearrange_stock';
        ////$args['paged'] = $paged;
        //}
    }
    //echo "<pre>";
    //print_r($args);
    return $arrange_stock;
    // wp_reset_query();
    //echo "<pre>";
    //print_r($args);
    //die;
    //}
    //return $args;
}
add_filter( 'woocommerce_get_catalog_ordering_args', 'bbloomer_sort_by_name_woocommerce_shop' );
function bbloomer_load_custom_woocommerce_catalog_sorting( $options ) {
    $options['stock'] = 'Sort by In Stock';
    return $options;
}
add_filter( 'woocommerce_default_catalog_orderby_options', 'bbloomer_load_custom_woocommerce_catalog_sorting' );

add_filter( 'woocommerce_catalog_orderby', 'bbloomer_load_custom_woocommerce_catalog_sorting' );

add_filter('woocommerce_product_data_tabs', 'custom_product_settings_tabs' );
function custom_product_settings_tabs( $tabs ){
	//unset( $tabs['inventory'] );
	$tabs['custom_data'] = array(
		'label'		=> 'Rearrange Stock',
		'target'	=> 'custom_product_data',
		'class'		=> array( 'show_if_simple', 'show_if_variable'  ),
		'priority'	=> 21,
	);
	return $tabs;
}

add_action( 'woocommerce_product_data_panels', 'custom_product_panels');
function custom_product_panels()
{
    echo '<div id="custom_product_data" class="panel woocommerce_options_panel hidden">';
    global $post;
    $product_id = $post->ID;
    $product = wc_get_product( $product_id );
    $r_stock = get_post_meta($product_id, 'rearrange_stock' , true );
    echo '<p class="form-field rearrange_stock_field "><label for="rearrange_stock">Rearrange Stock</label><input type="text" class="short" style="" name="rearrange_stock" id="rearrange_stock" value="'.$r_stock.'" placeholder="Rearrange Stock"> </p>';
//     if ($product->is_type( 'variable'))
//     {
//         // Get the available variations for the variable product
//         $available_variations = $product->get_available_variations();

//         // Initializing variables
//         $variations_count = count($available_variations);
//         $loop_count = 0;
//         $sum = 0;
//         // Iterating through each available product variation
//         foreach($available_variations as $key => $values )
//         {
//             // Get the variation quantity
//             $variation_obj = wc_get_product( $values['variation_id'] );
//             $stock_qty = $variation_obj->get_stock_quantity(); // Stock qty
//             // The display
//                 if($stock_qty == ''): $stock_qty = 0; endif;
//                 $sum+= $stock_qty;
//         }
//         if (!$product->managing_stock() && $product->is_in_stock()){
//             echo '<p class="form-field rearrange_stock_field "><label for="rearrange_stock">Rearrange Stock</label><input type="text" class="short" style="" name="rearrange_stock" id="rearrange_stock" value="1" placeholder="Rearrange Stock"> </p>';
//         }else{
//             echo '<p class="form-field rearrange_stock_field "><label for="rearrange_stock">Rearrange Stock</label><input type="text" class="short" style="" name="rearrange_stock" id="rearrange_stock" value="'.$sum.'" placeholder="Rearrange Stock"> </p>';
//         }


//             //update_post_meta($product_id,'rearrange_stock', $sum );
//         }else{
//         $stock = get_post_meta($product_id, '_stock' , true );
//         if($stock == ''): $stock = 0; endif;
//         if($product->is_in_stock() && $stock == 0){
//             $stock = get_post_meta($product_id, 'rearrange_stock' , true );
//         }else{
//             $stock;
//          }
//          if (!$product->managing_stock() && $product->is_in_stock()){
//             $stock = 1;
//         }
//         echo '<p class="form-field rearrange_stock_field "><label for="rearrange_stock">Rearrange Stock</label><input type="text" class="short" style="" name="rearrange_stock" id="rearrange_stock" value="'.$stock.'" placeholder="Rearrange Stock"> </p>';
//         //update_post_meta($product_id,'rearrange_stock', $stock );
//    }
	echo '</div>';
}

add_action( 'woocommerce_update_product', 'mp_sync_on_product_save', 10, 1 );
function mp_sync_on_product_save( $product_id ) {
    $product = wc_get_product( $product_id );
    if ($product->is_type( 'variable')){
        if (!$product->managing_stock() && $product->is_in_stock()){
            if($_POST['rearrange_stock'] > 1){
                $v_stock = $_POST['rearrange_stock'];
            }else{
                $v_stock = 1;
            }
            update_post_meta($product_id,'rearrange_stock', $v_stock );
        }else{
            // Get the available variations for the variable product
            $available_variations = $product->get_available_variations();
            // Initializing variables
            $variations_count = count($available_variations);
            $loop_count = 0;
            $sum = 0;
            // Iterating through each available product variation
            foreach($available_variations as $key => $values )
            {
                // Get the variation quantity
                $variation_obj = wc_get_product( $values['variation_id'] );
                $stock_qty = $variation_obj->get_stock_quantity(); // Stock qty
                // The display
                if($stock_qty == '' || $stock_qty <= 0): $stock_qty = 0; endif;
                $sum+= $stock_qty;
            }
            update_post_meta($product_id,'rearrange_stock', $sum );
        }
    }else{
        $stock = get_post_meta($product_id, '_stock' , true );
        if($stock == '' || $stock_qty <= 0 ): $stock = 0; endif;
        if($product->managing_stock() && $stock == 0){
            $stock = get_post_meta($product_id, '_stock' , true );
        }else if (!$product->managing_stock() && $product->is_in_stock()){
            if($_POST['rearrange_stock'] > 1){
                $stock = $_POST['rearrange_stock'];
            }else{
                $stock = 1;
            }
        }
        update_post_meta($product_id,'rearrange_stock', $stock );
   }
}
function custom_remove_quantity_fields( $return, $product ) {
    if($product->bundle_data)
    {
		return true;
	}
    return false;
}
add_filter( 'woocommerce_is_sold_individually', 'custom_remove_quantity_fields', 10, 2 );

add_action('woocommerce_process_product_meta', 'woocommerce_product_custom_fields_save');
function woocommerce_product_custom_fields_save($post_id)
{
    // WooCommerce custom dropdown Select
    $woocommerce_custom_product_select = $_POST['rearrange_stock'];
    if (!empty($woocommerce_custom_product_select))
        update_post_meta($post_id, 'rearrange_stock', esc_attr($woocommerce_custom_product_select));
}

function orderstatuscompletedforrearrangestock( $order_id )
{
$order = wc_get_order( $order_id );
$items = $order->get_items();
foreach ( $items as $item )
{
    // Initializing variables
      $product_variation_id = $item->get_variation_id();
      $product_id = $item->get_product_id();

      $product = wc_get_product( $product_id );
      if ($product->is_type( 'variable')){
          if (!$product->managing_stock() && $product->is_in_stock()){
              if($_POST['rearrange_stock'] > 1){
                  $v_stock = $_POST['rearrange_stock'];
              }else{
                  $v_stock = 1;
              }
              update_post_meta($product_id,'rearrange_stock', $v_stock );
          }else{
              // Get the available variations for the variable product
              $available_variations = $product->get_available_variations();
              // Initializing variables
              $variations_count = count($available_variations);
              $loop_count = 0;
              $sum = 0;
              // Iterating through each available product variation
              foreach($available_variations as $key => $values )
              {
                  // Get the variation quantity
                  $variation_obj = wc_get_product( $values['variation_id'] );
                  $stock_qty = $variation_obj->get_stock_quantity(); // Stock qty
                  // The display
                  if($stock_qty == '' || $stock_qty <= 0): $stock_qty = 0; endif;
                  $sum+= $stock_qty;
              }
              update_post_meta($product_id,'rearrange_stock', $sum );
          }
      }else{
          $stock = get_post_meta($product_id, '_stock' , true );
          if($stock == '' || $stock_qty <= 0 ): $stock = 0; endif;
          if($product->managing_stock() && $stock == 0){
              $stock = get_post_meta($product_id, '_stock' , true );
          }else if (!$product->managing_stock() && $product->is_in_stock()){
              if($_POST['rearrange_stock'] > 1){
                  $stock = $_POST['rearrange_stock'];
              }else{
                  $stock = 1;
              }
          }
          update_post_meta($product_id,'rearrange_stock', $stock );
     }
    //   if($product_variation_id)
    //   {
    //     $product_id = $item->get_product_id();
    //     $product_quantity = $item->get_quantity();
    //     if($product_quantity <= 0){
    //         $product_quantity = 0;
    //     }
    //     $existingamount = get_post_meta($product_id, 'rearrange_stock',true);
    //     if($existingamount != 0)
    //     {
    //         $final = $existingamount - $product_quantity;
    //         update_post_meta($product_id,'rearrange_stock',$final);
    //     }
    //   }
    //   else
    //   {
    //     $product_id = $item->get_product_id();
    //     $product_quantity = $item->get_quantity();
    //     if($product_quantity <= 0){
    //         $product_quantity = 0;
    //     }
    //     $existingamount = get_post_meta($product_id,'rearrange_stock',true);
    //     if($existingamount != 0)
    //     {
    //         $final = $existingamount - $product_quantity;
    //         update_post_meta($product_id,'rearrange_stock',$final);
    //     }
    //   }
}
}
add_action( 'woocommerce_thankyou', 'orderstatuscompletedforrearrangestock', 10, 1 );

/*Instock sort of category page End */

// function action_woocommerce_removed_coupon( $coupon_code )
// {
//     global $woocommerce;
//     $c = new WC_Coupon($coupon_code);
//     $product_id = $c->product_ids;
//         // Set the product ID to remove
//         // Cycle through each product in the cart
//         $i = 0;
//         foreach(WC()->cart->cart_contents as $prod_in_cart ) {
//             // Get the Variation or Product ID
//             $prod_id = (isset( $prod_in_cart['variation_id'] ) && $prod_in_cart['variation_id'] != 0 ) ? $prod_in_cart['variation_id'] : $prod_in_cart['product_id'];
//             echo $product_id[$i];
//             // Check to see if IDs match
//             // print_r($prod_id);
//             // print_r($product_id);
//             if($prod_id == $product_id[$i]) {
//                 // Get it's unique ID within the Cart
//                 $prod_unique_id = WC()->cart->generate_cart_id($product_id[$i]);
//                 // Remove it from the cart by un-setting it
//                 WC()->cart->remove_cart_item($prod_unique_id);
//             }
//         $i++;
//         }

// };

// // add the action
// add_action( 'woocommerce_removed_coupon', 'action_woocommerce_removed_coupon', 10, 1 );



function action_woocommerce_removed_coupon( $coupon_code )
{
    global $woocommerce;
    $c = new WC_Coupon($coupon_code);
    $coupon_id = wc_get_coupon_id_by_code($coupon_code);
    $automatically_product_id = get_post_meta($coupon_id, 'auto_add_product_ids', true );
    $product_id = $automatically_product_id;
        $i = 0;
        foreach ($woocommerce->cart->get_cart() as $cart_item_key => $cart_item) {
            // Get the Variation or Product ID
            $prod_id = (isset($cart_item['variation_id'] ) && $cart_item['variation_id'] != 0 ) ? $cart_item['variation_id'] : $cart_item['product_id'];
            if($prod_id == $product_id[$i])
            {
                WC()->cart->remove_cart_item($cart_item_key);
                $i++;
            }
        }
}
add_action( 'woocommerce_removed_coupon', 'action_woocommerce_removed_coupon', 10, 1 );
function ss_cart_updated( $cart_item_key, $cart )
{
    global $woocommerce;
    $product_id = $cart->cart_contents[ $cart_item_key ]['product_id'];
    $coupons_get = array();
    if( WC()->cart->get_coupons())
    {
        foreach($woocommerce->cart->applied_coupons as $cart_coupons)
        {
            $i = 0;
            $coupon_id = wc_get_coupon_id_by_code($cart_coupons);
            $automatically_product_id = get_post_meta($coupon_id, 'auto_add_product_ids', true );
            $product_id = $automatically_product_id;
            $count_product = count($product_id);
            $coupon_remove =  array();
            foreach ($woocommerce->cart->get_cart() as $cart_item_key => $cart_item)
            {
               $prod_id = (isset($cart_item['variation_id'] ) && $cart_item['variation_id'] != 0 ) ? $cart_item['variation_id'] : $cart_item['product_id'];
               if($prod_id == $product_id[$i])
               {
                $coupon_remove[] =  $product_id[$i];
                $i++;
               }
            }
            if($count_product &&  count($coupon_remove == 0))
            {
                WC()->cart->remove_coupon($cart_coupons);
            }
        }
    }
};
add_action( 'woocommerce_remove_cart_item', 'ss_cart_updated', 10, 2 );
function wpa_filter_list_comments($args){
    $args['reverse_top_level'] = true;
    return $args;
  }
  add_filter( 'woocommerce_product_review_list_args', 'wpa_filter_list_comments' );

add_filter( 'woocommerce_product_description_heading', 'remove_product_description_heading' );
function remove_product_description_heading() {
    return '';
}
add_filter( 'wcwl_enable_waitlist_for_backorder_products', '__return_true' );

add_filter( 'woocommerce_dropdown_variation_attribute_options_args', 'cinchws_filter_dropdown_args', 10 );

function cinchws_filter_dropdown_args( $args ) {
    global $product;
    $product_id = get_the_ID();
    $r_stock = get_post_meta($product_id, 'rearrange_stock' , true );
    $choose = 'Choose an option';
    //echo $r_stock;
    if($product->managing_stock()){
        $available_variations = $product->get_available_variations();
        $sum = 0;
        foreach ($available_variations as $key => $values) {
              // Get the variation quantity
            $variation_obj = wc_get_product($values['variation_id']);
            $stock_qty = $variation_obj->get_stock_quantity(); // Stock qty
            // The display
            if ($stock_qty == '' || $stock_qty <= 0): $stock_qty = 0;endif;
            $sum += $stock_qty;
            }

    //    if($r_stock <= 0){
    //        $args['show_option_none'] = 'Join Waitlist';
    //    }
    if($sum <= 0){
        $args['show_option_none'] = 'Join Waitlist';
    }
       else{
           $args['show_option_none'] = 'Choose Option';
       }
    }
    else{
          $args['show_option_none'] = 'Choose Option';
    }
    return $args;
}


//Allow jpf format
function my_custom_mime_types( $mimes ) {

// Add new MIME types here
$mimes['jpf'] = 'image/x-jpf';     // Adding .jpf extension
$mimes['jp2'] = 'image/x-jp2';     // Adding .jp2 extension
$mimes['webp'] = 'image/webp';     // Adding .webp extension

return $mimes;

}

add_filter( 'upload_mimes', 'my_custom_mime_types' );

// disable src set

/* renaming the woocommerce tab in single page */
// add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
// function woo_rename_tabs( $tabs ) {

// 	$tabs['product']['title'] = __( 'Product Inquiry' );		// Rename the description tab
// 	return $tabs;

// }

// function dequeue_dequeue_plugin_style(){
//     wp_dequeue_style( 'dashicons' );
//     wp_dequeue_style( 'admin-bar' );
//     wp_dequeue_style( 'vendors-style' );
//     wp_dequeue_style( 'jquery.selectBox' );
//     wp_dequeue_style( 'woocommerce_gift_cards_lite-public' );
//     wp_dequeue_style( 'wgdr-frontend' );
//     wp_dequeue_style( 'prettyPhoto' );
//     wp_dequeue_style( 'yith-quick-view' );
//     wp_dequeue_style( 'wc-groupbuy-public' );
//     wp_dequeue_style('v-wc-payment-gateway-payment-form');
// }
// add_action( 'wp_enqueue_scripts', 'dequeue_dequeue_plugin_style', 999 );
add_action( "woocommerce_thankyou", "rfsn_post_purchase", 20 );
function rfsn_post_purchase( $order_id ) {
if ( $order_id > 0 ) {
$order = wc_get_order( $order_id );
if ( $order instanceof WC_Order ) {
$billing_email          = $order->get_billing_email();
$billing_first_name     = $order->get_billing_first_name();
$billing_last_name      = $order->get_billing_last_name();
?>
<script type="text/javascript">
lr(function(){
var customerEmail = '<?php echo $billing_email ;?>';
if (customerEmail.includes("@")) {
REFERSION.box.show({
loc : 'https://xyzreptiles.refersion.com/channels/post_purchase/v2',
code : '799b8f8c28',
customer_first_name : encodeURIComponent('<?php echo $billing_first_name ;?>'),
customer_last_name : encodeURIComponent('<?php echo $billing_last_name ;?>'),
customer_email : encodeURIComponent('<?php echo $billing_email ;?>')
});
}
});
function lr(e){var t=document.createElement("script");t.type="text/javascript";if(t.readyState){t.onreadystatechange=function(){if(t.readyState=="loaded"||t.readyState=="complete"){t.onreadystatechange=null;e()}}}else{t.onload=function(){e()}}t.src="https://www.refersion.com/channels/post_purchase/v2/js";document.body.appendChild(t)}
</script>
<?php
 }
}
}
// acf_add_options_sub_page('Notification bar');


/* sort by stock ordering   */
add_action('admin_footer', 'my_admin_footer_function');
function my_admin_footer_function()
{
    $product_posttye=isset($_REQUEST['post_type']) ? $_REQUEST['post_type'] : '';
    if($product_posttye=='product') {
    ?>
    <script>
        jQuery(document).ready(function(){
            jQuery("#doaction").after('<input type="submit" name="save_post_new_vi" id="savepostidnew" class="button action" value="Update">');
        });
    </script>
    <?php
if (isset($_GET['save_post_new_vi'])) {
        $currentid = get_current_user_id();
        $checkedvalues = $_GET['post'];
        foreach ($checkedvalues as $product_id) {
            $product = wc_get_product($product_id);
            if ($product->is_type('variable')) {
                if (!$product->managing_stock() && $product->is_in_stock()) {
                    $v_stock = 1;
                    wp_update_post(array('ID' => $product_id, 'post_status' => 'publish'));
                    update_post_meta($product_id, '_edit_last', $currentid);
                    update_post_meta($product_id, 'rearrange_stock', $v_stock);
                } else {
                    // Get the available variations for the variable product
                    $available_variations = $product->get_available_variations();
                    // Initializing variables
                    $variations_count = count($available_variations);
                    $loop_count = 0;
                    $sum = 0;
                    // Iterating through each available product variation
                    foreach ($available_variations as $key => $values) {
                        // Get the variation quantity
                        $variation_obj = wc_get_product($values['variation_id']);
                        $stock_qty = $variation_obj->get_stock_quantity(); // Stock qty
                        // The display
                        if ($stock_qty == '' || $stock_qty <= 0): $stock_qty = 0;endif;
                        $sum += $stock_qty;
                    }
                    wp_update_post(array('ID' => $product_id, 'post_status' => 'publish'));
                    update_post_meta($product_id, '_edit_last', $currentid);
                    update_post_meta($product_id, 'rearrange_stock', $sum);
                }
            } else {
                $stock = get_post_meta($product_id, '_stock', true);
                if ($stock == '' || $stock_qty <= 0): $stock = 0;endif;
                if ($product->managing_stock() && $stock == 0) {
                    $stock = get_post_meta($product_id, '_stock', true);
                } else if (!$product->managing_stock() && $product->is_in_stock()) {
                    $stock = 1;
                }
                wp_update_post(array('ID' => $product_id, 'post_status' => 'publish'));
                update_post_meta($product_id, '_edit_last', $currentid);
                update_post_meta($product_id, 'rearrange_stock', $stock);
            }
        }
    }
    }
}
add_action("wp_ajax_ajax_product_insert_admin", "ajax_product_insert_admin");
add_action("wp_ajax_nopriv_ajax_product_insert_admin", "ajax_product_insert_admin");
function ajax_product_insert_admin()
{

    // $user = wp_get_current_user();
    // if (in_array("default_wholesaler", (array) $user->roles)) {

 $prod_id=trim($_POST['productval']);
//  echo $prod_id;
//  die;
    $items = WC()->cart->get_cart();
    $countcart = WC()->cart->get_cart_contents_count();
    if ($countcart > 0) {
        $_product = wc_get_product($prod_id);
        $shipclass = $_product->get_shipping_class();
        $gift_card = 0;
        $animal_exist = 0;
        $feeders_exist = 0;
        $dry_goods_exist = 0;
        $isopods = 0;
        $fedex_ground = 0;
        $habitat = 0;
        $freeshipping = 0;
        $wholesalefedex = 0;
        $wholesalenonlive == 0;
        foreach ($items as $item) {
            if ($item['data']->get_shipping_class() == 'gift-card' || $shipclass ==  'gift-card') {
                // echo "1";
                $gift_card = 1;
            }
            if ($item['data']->get_shipping_class() == 'free-shipping' || $shipclass ==  'free-shipping') {
                // echo "1";
                $freeshipping = 1;
                //echo 'free-shipping'. $freeshipping;
            }
            if ($item['data']->get_shipping_class() == 'animals' || $item['data']->get_shipping_class() == 'animal' || $shipclass ==  'animals' || $shipclass ==  'animal') {
                // echo "2";
                $animal_exist = 1;
            }
            if ($item['data']->get_shipping_class() == 'live-feeders' || $shipclass ==  'live-feeders') {
                // echo "3";
                $feeders_exist = 1;
            }
            if ($item['data']->get_shipping_class() == 'isopods' || $item['data']->get_shipping_class() == 'habitat' || $shipclass ==  'isopods' ||$shipclass ==  'habitat') {
                // echo "4";
                $isopods = 1;
                if ($item['data']->get_shipping_class() == 'habitat' || $shipclass ==  'habitat') {
                    $habitat = 1;
                }
            }
            if ($item['data']->get_shipping_class() == 'dry-goods' || $shipclass ==  'dry-goods') {
                // echo "5";
                $dry_goods_exist = 1;
            }
            if ($item['data']->get_shipping_class() == 'fedex-ground' || $shipclass ==  'fedex-ground') {
                // echo "6";
                $fedex_ground = 1;
            }

            //if ($item['data']->get_shipping_class() == 'wholesale-fedex-ground' || $shipclass ==  'wholesale-fedex-ground') {
            //    // echo "7";
            //    // echo "wholesale";
            //    $wholesalefedex = 1;
            //}
            //if ($item['data']->get_shipping_class() == 'wholesale-non-live' || $shipclass ==  'wholesale-non-live') {
            //    // echo "7";
            //    // echo "wholesale";
            //    $wholesalenonlive = 1;
            //}
        }

            if ($wholesalefedex == 1 && ($fedex_ground == 1 || $isopods == 1 || $animal_exist == 1 || $dry_goods_exist == 1 || $freeshipping == 1 || $gift_card == 1 && $feeders_exist == 1)) {
                echo $response = json_encode(array("status" => 'trueis'));

                die;
            }
            else if($wholesalenonlive == 1 && ($fedex_ground == 1 || $isopods == 1 || $freeshipping == 1 || $animal_exist == 1 || $dry_goods_exist == 1 || $gift_card == 1 && $feeders_exist == 1))
            {
                echo $response = json_encode(array("status" => 'trueis'));

                die;

            }

            else {
                echo $response = json_encode(array("status" => 'ok'));
                die;

            }
        }
    else {
        // echo "ok";
        // die;
        echo $response = json_encode(array("status" => 'ok'));
        die;

    }
}

// remove the additional tabs in accounts page
add_filter ( 'woocommerce_account_menu_items', 'remove_my_account_links' );
function remove_my_account_links( $menu_links ){
    unset( $menu_links['dashboard'] ); // Addresses
    unset( $menu_links['orders'] ); // Addresses
    unset( $menu_links['downloads'] ); // Addresses
    unset( $menu_links['edit-address'] ); // Addresses
	unset( $menu_links['payment-methods'] ); // Addresses
    unset( $menu_links['edit-account'] ); // Remove Orders
    unset( $menu_links['woocommerce-waitlist'] ); // Disable Downloads
    unset( $menu_links['customer-logout'] );
    unset( $menu_links['customer-logout'] );
    // woocommerce-waitlis
	return $menu_links;
}


/* custom order filtering */

/* 10-3-21  custom orders filtering*/
add_action('wp_ajax_update_paymentinfo', 'update_paymentinfo');
add_action('wp_ajax_nopriv_update_paymentinfo', 'update_paymentinfo');

function update_paymentinfo()
{
    $listofpostid = $_POST['postid'];
    $subject = $_POST['sub_field'];
    $body_content = $_POST['body_content'];
    $headers = 'From:XYZReptiles<info@xyzreptiles.com>' . "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    foreach ($listofpostid as $emailids) {
        $order = wc_get_order($emailids);
        $firstname= $order->get_billing_first_name();
        $content= '<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /></head><body><div id="template_header_image">' .
   '<p style="font-size:18px;">Hi '. $firstname.',</p><div><p style="font-size:18px;">'.$body_content.'</p><p style="font-size:18px;"> <b>XYZReptiles</b><br/>17021 South Dixie Hwy.<br/> Suite A <br/>Palmetto Bay, FL 33157<br/> xyzreptiles.com <br/>info@xyzreptiles.com</p><p style="font-size:18px;"><img src="' . site_url() . "/wp-content/themes/xyzreptiles/assets/images/customlognew.jpg" . '" alt="' . "XYZReptiles" . '" /></p></div></div> </body></html>';
   $toemail=$order->get_billing_email();
   //$mailsent = mail('vigneswaran.askan@gmail.com', $subject, $content, $headers);
       $mailsent = wp_mail($toemail, $subject, $content, $headers);
        if ($mailsent == true) {
             $mailsent = 'ok';
        } else {
             $mailsent = 'notok'; //$mailsent[]=$emailids;
        }
    }
    echo $mailsent;
    die;
}


// walmartcode
add_action('wp_ajax_walmart_actions', 'walmart_actions');
add_action('wp_ajax_nopriv_walmart_actions', 'walmart_actions');

function walmart_actions()
{

    $args = array(
        'post_type'=> 'product',
        'orderby'    => 'ID',
        'post_status' => 'publish',
        'order'    => 'DESC',
        'posts_per_page' => -1 // this will retrive all the post that is published
        );
        $result = new WP_Query( $args );

        if ( $result-> have_posts() ) : ?>
        <?php while ( $result->have_posts() ) : $result->the_post();
          $postid = get_the_ID();
          $walmartchecked=get_post_meta($postid,'add_this_product_to_walmart',true);
          if($walmartchecked[0]=='yes'){
              $arraynew[]=$postid;
          }
        endwhile; ?>
        <?php endif; wp_reset_postdata();
        //echo "<pre>postid in array";
        //print_r( $arraynew);
                $array_count_total=sizeof($arraynew);
                if($array_count_total>0){

                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                  CURLOPT_URL => 'https://marketplace.walmartapis.com/v3/token/detail',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'POST',
                  CURLOPT_POSTFIELDS => 'grant_type=client_credentials',
                  CURLOPT_HTTPHEADER => array(
                    'grant_type: client_credentials',
                    'WM_SVC.NAME: Walmart Marketplace',
                    'WM_QOS.CORRELATION_ID: Test Seller',
                    'Authorization:Basic ZmFlZTMxNGQtZDhiMC00ZWMwLWIyODYtZjYwNDg4YzY1ZDRlOmIyV000bmRpYXJkakVQNVBmTkc5Mko4T3NzWi0wVEJNb21MWDdCOU9GNXR4T2llS19JQVBYZmp2elE4T2oxaTVqMTdYdzRoSzZaWHFUWG1Fb1R0SS13',
                    'Content-Type: application/x-www-form-urlencoded',
                    'Accept: application/json',
                    'Cookie: TS01f4281b=0130aff2324e94b8afc0d76d2d012030288d6b429ee42e408e1db04c3261e235416eb82f7ca7ae4b9b550887dac0dd7d4ff565f220'
                  ),
                ));
                $response = curl_exec($curl);
                curl_close($curl);
                $book = json_decode($response);
                $responsecode=$book->access_token;

                    if($_POST['walmart_post_actions']=='walmartbulkitemfield'){
                        $repeater_body_content=[];
                        $r=0;
            foreach($arraynew as $listofproducttopushfor_walmart){
            //echo "<pre>pushfor walmart";
            //print_r($listofproducttopushfor_walmart);
            $variation_imgs = array();
            $new_variations = array();
            $image_tag = array();
            $variationdf = array();
            $emty_array = array();
            $variantdb_ids = array();
            $variable_gtin=array();
            $last_attribute = array();
            $image_arrays = array();
            $vanrt = array();
            $ovr_variant = array();
            $attribute_name1 = '';
            $product_attr_name1 = '';
            $walmart_additional_img = array();
            $product = wc_get_product($listofproducttopushfor_walmart);
            $wooproduct_type = $product->get_type();

            if ( $wooproduct_type == 'simple'){
                // echo"this is simple product";
                // die;
            $walmart_product_weight= $product->get_weight();
            $walmart_product_length=$product->get_length();
            $walmart_product_width=$product->get_width();
            $walmart_product_height=$product->get_height();
            $walmart_product_dimensions=$product->get_dimensions();
            $walmart_product_image=$product->get_image();
            // echo "<pre>";
            // print_r(json_decode($product));
            $walmart_product_get_name= $product->get_name();
            $walmart_product_price = $_POST['_regular_price']; //$product->get_price();
            $walmart_product_id =$product->get_id();
            $walmart_product_created= $product->get_date_created();
            $walmart_product_shortdesc= $product->get_short_description();
            $walmart_product_sku= strip_tags($product->get_sku());
            $walmart_product_category=$product->get_categories();

            $wal_product_name=$product->get_name();
            $wal_date_created=$product->get_date_created();
            $product_price=$product->get_price();
            $product_quantity=$product->get_stock_quantity();
            $walmart_product_weight=$product->get_weight();
            $walmart_product_lenght=$product->get_length();
            $walmart_product_width=$product->get_width();
            $walmart_productss=$product->get_height();
            if($walmart_productss<1){
                $walmart_product_height='0'.$walmart_productss;
            }
            $walmart_sku=strip_tags($product->get_sku());
            //$walmart_get_description=strip_tags($product->get_description());
             //echo 'welc'.$walmart_get_description;
            //$walmart_description = preg_replace('/\s+/', ' ',$walmart_get_description);
            global $wpdb;
            $walmart_get_description = $wpdb->get_results("SELECT `post_content` FROM `wp_posts` WHERE `ID` = $walmart_product_id");
            $site_des = $walmart_get_description[0]->post_content;
            $descrip = json_encode($site_des);




		    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $listofproducttopushfor_walmart ), 'single-post-thumbnail' );
            $walmart_va_img = get_post_meta( $listofproducttopushfor_walmart,'walmart_main_image',true);

            if($walmart_va_img != ''){
            $walmart_main_img = wp_get_attachment_image_url($walmart_va_img[0],'full');
            }
            else{
                $walmart_main_img = $image[0];
            }
            $walmart_prdct_add_img = get_post_meta( $listofproducttopushfor_walmart,'walmart_additional_images',true);
            $walmart_additional_product_count = count($walmart_prdct_add_img);
            for($j=0;$j<$walmart_additional_product_count;$j++){
            $walmart_additional_img[] = wp_get_attachment_image_url($walmart_prdct_add_img[$j],'full');
            }
            $walmart_xyz_image = '"'. implode('", "', $walmart_additional_img) .'"';
            //print_r($walmart_xyz_image);
            if($walmart_prdct_add_img!='')
            {
                $walmart_secondary_img='"'."productSecondaryImageURL".'":['.$walmart_xyz_image.'],';
            }
            else
            {
                $walmart_secondary_img='';
            }
            $walmart_gtin_id=get_post_meta($listofproducttopushfor_walmart,'_woocommerce_gpf_data',true);
            $wal_gtin_id=$walmart_gtin_id['gtin'];
            if(!(empty($wal_gtin_id))){
            $addnumberofzero='';
            $totalgtinlength=strlen($wal_gtin_id);
            if($totalgtinlength<14){
                $findlenght=14-$totalgtinlength;
               for($di=0;$di<$findlenght;$di++){
                   $addnumberofzero=  $addnumberofzero."0";
               }
            }
            $finalproudctidgtin=$addnumberofzero.$wal_gtin_id;
            $spec_name = array();
            $spec_value = array();

            if( have_rows('walmart_specifications',$listofproducttopushfor_walmart) ):

                while( have_rows('walmart_specifications',$listofproducttopushfor_walmart) ) : the_row();

                    $spec_name[] = get_sub_field('name');
                    $spec_value[] = get_sub_field('value');


            endwhile;
            endif;

            // echo $new_data;
            //die;
            $spec_name_count = count($spec_name);
            $spec_value_count = count($spec_value);

            $specifications=array();

                foreach($spec_name as $key=>$value){
                    if($value!='' && $spec_value[$key]!=''){
                        $specifications[$value]=$spec_value[$key];
                    }

                }

                //echo "<pre>";
                //print_r($specifications);
                if(!empty($specifications)){
                    //echo 'specific-date';
                    $new_data=json_encode($specifications);
                    $new_data=str_replace("{","",$new_data);
                    $new_data=str_replace("}",",",$new_data);
                }else{
                    //echo "new_date";
                    $new_data='';
                }

            $repeater_body_content[]='{
                "Visible": {
                  "Animal Accessories": {
                    '.$new_data.'
                    "pieceCount": 1,
                    "countPerPack": 1,
                    "msrp":'.$product_price.',
                    "mainImageUrl": "'.$walmart_main_img.'",
                    '.$walmart_secondary_img.'
                    "warrantyText": "Warranty is based on the specific manufacturer of this product.",
                    "assembledProductHeight": {
                      "unit": "in",
                      "measure":1
                    },
                    "count": "1",
                    "shortDescription": '.$descrip.',
                    "assembledProductWeight": {
                      "unit": "oz",
                      "measure": '.$walmart_product_weight.'
                    },
                    "assembledProductWidth": {
                      "unit": "in",
                      "measure": '.$walmart_product_width.'
                    },
                    "manufacturerPartNumber": "'.strip_tags($walmart_sku).'",
                    "assembledProductLength": {
                      "unit": "in",
                      "measure": '.$walmart_product_lenght.'
                    },
                    "material": [
                      "not available"
                    ],
                    "modelNumber": "'.strip_tags($walmart_sku).'",
                    "prop65WarningText": "none"
                  }
                },
                "Orderable": {
                  "fulfillmentLagTime": 1,
                  "endDate": "2040-09-01T00:00:00.000Z",
                  "MustShipAlone": "No",
                  "SkuUpdate": "No",
                  "productName": "'.$wal_product_name.'",
                  "productIdentifiers": {
                    "productId": "'.$finalproudctidgtin.'",
                    "productIdType": "GTIN"
                  },
                  "ProductIdUpdate": "No",
                  "price": '.$product_price.',
                  "chemicalAerosolPesticide": "No",
                  "sku": "'.strip_tags($walmart_sku).'",
                  "ShippingWeight": '.$walmart_product_weight.',
                  "brand": "XYZReptiles",
                  "startDate": "2021-07-07T00:00:00.000Z"
                }
              }';

            }
        }
        else if($wooproduct_type == 'variable'){
            //echo "<pre>";
            //print_r(json_decode($product));
            $walmart_product_weight = $product->get_weight();
            $walmart_product_length=$product->get_length();
            $walmart_product_width=$product->get_width();
            $walmart_product_height1=$product->get_height();
            $walmart_product_dimensions=$product->get_dimensions();
            $walmart_product_image=$product->get_image();
            $walmart_product_get_name= $product->get_name();
            // $walmart_product_price = $_POST['_regular_price']; //$product->get_price();
            $walmart_product_ids =$product->get_id();
            $walmart_product_created= $product->get_date_created();
            $walmart_product_shortdesc= $product->get_short_description();
            // $walmart_product_sku= strip_tags($product->get_sku());
            $walmart_product_category=$product->get_categories();
            $wooproduct_type=$product->get_type();
            $product_attributes = $product->get_attributes(); //for varient product
            $newArray = array_keys($product_attributes);
            $attribute_name=$newArray[0];
            $attribute_name1 = $newArray[1];
            $product_attr_name = substr($attribute_name, 3);
            // echo $attribute_name1;
            // die;
            if($attribute_name1!='')
            {
                $product_attr_name1 = substr($attribute_name1, 3);
            }
            $variations = $product->get_available_variations();
            //echo "<pre>";
            //print_r($variations);
            $variation_count = count($variations);
            $variations_id = array();
            for($v=0;$v<$variation_count;$v++){
                $variations_id[] = $variations[$v]['variation_id'];

            }
            sort($variations_id);
            //echo "<pre>testing";
            //print_r($variations_id);
            $variable_count = count($variations_id);
            //echo "sorting";
            //print_r($variable_count);
            //$variations_id = sort($variation_sort);
            //echo "text".$variations_id;

            //$variable_count =sizeof($variations);
            //$variations_id = wp_list_pluck( $variations, 'variation_id' );

            $variant1_id =  $variations_id[0];
            $variant2_id =  $variations_id[1];
            $variant3_id =  $variations_id[2];
            $variant4_id =  $variations_id[3];
            $variant5_id =  $variations_id[4];
            $variant6_id =  $variations_id[5];
            $parent_sku = $product->get_sku();
            $wal_product_name=$product->get_name();
            $wal_date_created=$product->get_date_created();
            global $wpdb;
            $database_gtin = $wpdb->get_results("SELECT * FROM `wp_postmeta` WHERE `post_id` IN ('$variant1_id','$variant2_id','$variant3_id','$variant4_id','$variant5_id','$variant6_id') AND `meta_key` LIKE '_woocommerce_gpf_data' ORDER BY `post_id`");
            // print_r($database_gtin);
            //$variant_decode = base64_decode($database_gtin[0]->meta_value);
            for($i=0;$i<$variable_count;$i++){
            // $categry1_chunk = explode('gtin";s:12:"', $database_gtin[$i]->meta_value);
            $string_var = unserialize($database_gtin[$i]->meta_value);
            $origial_gtin = $string_var['gtin'];
            $variable_gtin[] = $origial_gtin;
            $variantdb_ids[] =  $database_gtin[$i]->post_id;
        }
        foreach($variantdb_ids as $varintdb){
         $variationdf[] = wc_get_product($varintdb);
         $variation_imgs[] = new WC_Product_Variation( $varintdb );

            }
            //echo "<pre>";
            //print_r($variable_gtin);
                        //print_r($variation_imgs);
                        foreach($variation_imgs as $variation_images){
                            $image_tag[] = $variation_images->get_image_id();

                        }
                        //echo "<pre>";
                        //print_r($image_tag);
                        foreach($variation_imgs as $orgin_main_img){
                            $image_arrays[] = wp_get_attachment_image_src($orgin_main_img, 'thumbnail');


                        }

                        //die;
                        for($cm=0;$cm<$variable_count;$cm++){
                            $new_variations[] = json_decode($variationdf[$cm]);
                        }
                        //echo "<pre>";
                        //print_r($new_variations);
                        //die;
                        for($vk=0;$vk<$variable_count;$vk++){
                        $last_attribute[] = json_decode(json_encode($new_variations[$vk]->attributes), true);

                        }

                        foreach($last_attribute as $keys => $values){

                            $ovra_attri = array_keys($values);

                            $emty_array[] = $values;

                            //foreach($values as $val => $attr_varnt){
                            //    $variations12[] =  $attr_varnt;
                            //    echo "<pre>";
                            //    print_r($attr_varnt);
                            //}
                        }
                        //$attibute_count = count($emty_array);
                        //echo "<pre>";
                        //print_r($emty_array);

                        $attribute_name=$ovra_attri[0];
                        $attribute_name1 = $ovra_attri[1];
                        $product_attr_name = substr($attribute_name, 3);
                        if($attribute_name1!='')
                        {
                            $product_attr_name1 = substr($attribute_name1, 3);
                        }
            $walmart_product = $variable_gtin[0];
            $walmart_product1 = $variable_gtin[1];
            $walmart_product2 = $variable_gtin[2];
            $walmart_product3 = $variable_gtin[3];
            $walmart_product4 = $variable_gtin[4];
            $walmart_product_id0 = sprintf('%014d', $walmart_product);
            $walmart_product_id1 = sprintf('%014d', $walmart_product1);
            $walmart_product_id2 = sprintf('%014d', $walmart_product2);
            $walmart_product_id3 = sprintf('%014d', $walmart_product3);
            $walmart_product_id4 = sprintf('%014d', $walmart_product4);
            $product_gtin_id = array($walmart_product_id0,$walmart_product_id1,$walmart_product_id2,$walmart_product_id3,$walmart_product_id4);

            // For Specifications
            $spec_ovral_name = array();
            if( have_rows('walmart_variant_specifications',$listofproducttopushfor_walmart) ):
                while( have_rows('walmart_variant_specifications',$listofproducttopushfor_walmart) ) : the_row();
                $spec_var_name = array();
                $spec_var_value = array();

                    if( have_rows('walmart_variable_repeater',$listofproducttopushfor_walmart) ):
                        while( have_rows('walmart_variable_repeater',$listofproducttopushfor_walmart) ) : the_row();

                            $spec_var_name[] = get_sub_field('name');
                            $spec_var_value[] = get_sub_field('value');

                        endwhile;
                    endif;
                    //echo "<pre>";
                    //print_r($spec_var_name);
                    $variant_specific = array();
                    foreach($spec_var_name as $key=>$value){
                        //echo $variant_specific;
                        if($value!='' && $spec_var_value[$key]!=''){
                            $variant_specific[$value]=$spec_var_value[$key];
                        }

                    }
                    $specific_variable=json_encode($variant_specific);
                    $specific_variable=str_replace("{","",$specific_variable);
                    $specific_variable=str_replace("}",",",$specific_variable);

                    $spec_ovral_name[] =  $specific_variable;
                endwhile;
            endif;

            //echo "<pre>";
            //print_r($spec_ovral_name);
            //die;














            //$walmart_get_description=strip_tags($product->get_description());
            //// $image = wp_get_attachment_image_src( get_post_thumbnail_id( $listofproducttopushfor_walmart ), 'single-post-thumbnail' );
            //$walmart_description = preg_replace('/\s+/', ' ',$walmart_get_description);
            global $wpdb;
            $walmart_get_description = $wpdb->get_results("SELECT `post_content` FROM `wp_posts` WHERE `ID` = $walmart_product_ids");
            $site_des = $walmart_get_description[0]->post_content;
            $descrip = json_encode($site_des);
            // $walmart_description = preg_replace('/\s+/',$walmart_get_description);
            // $walmart_gtin_id=get_post_meta($listofproducttopushfor_walmart,'_woocommerce_gpf_data',true);

            if($product_attr_name == "millet"){
                $product_attr_name = "size";
            }
            if($product_attr_name == "pack"){
                $product_attr_name = "countPerPack";
            }
            //if($variations[0]['attributes']['attribute_'.$attribute_name]=='single'){
            //$variations[0]['attributes']['attribute_'.$attribute_name] = 1;
            //// echo $variations[0]['attributes']['attribute_'.$attribute_name];
            //}
            //if($variations[1]['attributes']['attribute_'.$attribute_name]=='2-pack'){
            //$variations[1]['attributes']['attribute_'.$attribute_name] = 2;
            //// echo $variations[1]['attributes']['attribute_'.$attribute_name];
            //}
            //if($variations[2]['attributes']['attribute_'.$attribute_name]=='3-pack'){
            //$variations[2]['attributes']['attribute_'.$attribute_name] = 3;
            //// echo $variations[2]['attributes']['attribute_'.$attribute_name];
            //}
            if($product_attr_name1 != ''){
            $original_attribute =  '"'.$product_attr_name.'","'.$product_attr_name1.'"';
            }
            else{
            $original_attribute = '"'.$product_attr_name.'"';
            }

            // echo "check attributes";
            // echo $parent_sku;
            // echo $original_attribute;
            // echo"second_attribute $second_attribute";
            $walmart_va_img = get_post_meta( $listofproducttopushfor_walmart,'walmart_main_image',true);

            $count_img1 = array();
            if( have_rows('walmart_variable_product_images',$listofproducttopushfor_walmart) ):

                while( have_rows('walmart_variable_product_images',$listofproducttopushfor_walmart) ) : $i=0; the_row();

                    $sub_value = get_sub_field('walmart_additional_image1');
                    $img_count = count($sub_value);

                    $count_img=array();
                    foreach($sub_value as $key=>$img_datas){
                        $count_img[$i] = $img_datas['url'];
                        //echo 'Mathi_'.$i.'_'.$img_datas['url'];
                        $i++;

                    }
                    $count_img1[]=$count_img;
                    //echo "testttt";
                    //print_r($count_img1);
                endwhile;

                // No value.
                else :
                echo "no repeater";
                endif;
                //echo "tstttt1";
                //print_r($count_img1);
                $img_cnt = count($count_img1);
                //echo 'mathi'.$img_cnt;
                //die;
                $total_arr = array();
                for($y = 0; $y < $img_cnt ; $y++){

                $count1_img = $count_img1[$y];
                $total_arr[] = '"'.implode('","',$count1_img).'"';

                }

            $walmart_prdct_add_img = get_post_meta( $listofproducttopushfor_walmart,'walmart_additional_images',true);
            $walmart_additional_product_count = count($walmart_prdct_add_img);
            for($j=0;$j<$walmart_additional_product_count;$j++){
            $walmart_additional_img[] = wp_get_attachment_image_url($walmart_prdct_add_img[$j],'full');
            }
            $walmart_xyz_image = '"'. implode('", "', $walmart_additional_img) .'"';
            // $walmart_xyz_image = "'" . implode ( "', '", $walmart_additional_im ) . "'";
            //print_r($walmart_xyz_image);
            if($walmart_prdct_add_img!='')
            {
                $walmart_secondary_img='"'."productSecondaryImageURL".'":['.$walmart_xyz_image.'],';
            }
            else
            {
                $walmart_secondary_img='';
            }
            if(!(empty($walmart_product))){

                for($i=0;$i<$variable_count;$i++){
                                       $walmart_productss = '';
                    $walmart_product_height = '';
                        $vanr1 = array_key_first($emty_array[$i]);
                        $tedr = $emty_array[$i][$vanr1];
                            if($tedr == 'single'){
                                $tedr = 1;

                            }
                            if($tedr == '2-pack'){
                                $tedr = 2;
                                // echo $variations[1]['attributes']['attribute_'.$attribute_name];
                            }
                            if($tedr=='3-pack'){
                                $tedr = 3;
                                // echo $variations[2]['attributes']['attribute_'.$attribute_name];
                            }
                        $varnt_attr = count($emty_array[$i]);

                        if($varnt_attr == '2'){
                            //$vanr = array_key_first($emty_array[$i]);
                            //$testin = $emty_array[$i][$vanr];
                            $attrib = array_key_last($emty_array[$i]);
                            $atitest = $emty_array[$i][$attrib];

                            //echo $testin;
                            //echo $atitest;
                        }



                    if($walmart_va_img != ''){
                        $walmart_main_img = wp_get_attachment_image_url($walmart_va_img[$i],'full');
                    }
                    else{


                        $walmart_main_img = $variations[$i]['image']['src'];
                    }
                    //$walmart_productss = $variations[$i]['dimensions']['height'];
                    //if($walmart_productss<1){
                    //    $walmart_product_height='0'.$walmart_productss;
                    //}

                    //$tedr = $variations[$i]['attributes']['attribute_'.$attribute_name];
                    $ttre = is_string($tedr);
                    if($ttre == 1){
                        $test= '"'.$tedr.'"';
                        $attribute_name_type=$test;
                    }
                    else
                    {
                        $attribute_name_type=$tedr;
                    }


                    $secnd_vble = $atitest;
                    $second_var = is_string($secnd_vble);
                    if($second_var == 1){
                     $second = '["'.$secnd_vble.'"]';
                     $attribute_name_type1 =  $second;
                    }
                    else{
                        $attribute_name_type1 = $atitest;
                    }
                    if($attribute_name1 == ''){
                        $attribute_name_type1= '""';
                    }


                    if($primary_id[$i] == $primary_id[0]){
                        $primary_id[$i] = "Yes";
                     }else {
                         $primary_id[$i] = "No";
                     }
                     if($product_attr_name1!='' && $attribute_name_type1!='')
                     {
                         $second_attribute='"'.$product_attr_name1.'":'.$attribute_name_type1.',';
                     }
                     else
                     {
                         $second_attribute='';
                     }

                     $walmart_variable_img =array();
                     if(count($total_arr) > 0)
                     {
                    // if($total_arr[$i] != ''){
                    //     echo "sandu".$total_arr[$i];
                    if(!empty($total_arr[$i])){
                        $walmart_variable_img='"'."productSecondaryImageURL".'":['.$total_arr[$i].'],';

                    }else{
                        $walmart_variable_img='';

                    }

                    // }

                    }
                    if(count($walmart_variable_img)>0){
                        $walmrt_var = $walmart_variable_img;
                    }
                     else
                     {
                         $walmrt_var = '';
                     }
                     $walmart_product_height = $new_variations[$i]->height;
                     if($walmart_product_height<1){
                        $walmart_product_height='0'.$walmart_product_height;
                    }
                    $walmart_variable_weight = $new_variations[$i]->weight;
                    if($walmart_variable_weight != ''){
                        $variable_product_weight = $walmart_variable_weight;
                    }else{
                        $variable_product_weight = $walmart_product_weight;
                    }

                    $walmart_variable_width = $new_variations[$i]->width;
                    if($walmart_variable_width != ''){
                        $variable_product_width = $walmart_variable_width;
                    }else{
                        $variable_product_width = $walmart_product_width;
                    }

                    $walmart_variable_length =  $new_variations[$i]->length;
                    if($walmart_variable_length != ''){
                        $variable_product_length = $walmart_variable_length;
                    }else{
                        $variable_product_length = $walmart_product_length;
                    }
                    if($walmart_product_height == 0 || $walmart_product_height == ''){

                        $walmart_product_height = $walmart_product_height1;
                    }
                    $repeater_body_content[]='{
                        "Visible": {
                        "Animal Accessories": {
                            '.$spec_ovral_name[$i].'
                            "pieceCount": 1,
                            "countPerPack": 1,

                            "msrp":'.$new_variations[$i]->regular_price.',
                            "variantGroupId":"'.addslashes($parent_sku).'",
                            "variantAttributeNames":[
                                '.$original_attribute.'
                            ],
                            "'.$product_attr_name.'":'.$attribute_name_type.',
                           '.$second_attribute.'
                            "isPrimaryVariant":"'.$primary_id[$i].'",
                            "mainImageUrl": "'.$walmart_main_img.'",
                            '.$walmrt_var.'
                            "warrantyText": "Warranty is based on the specific manufacturer of this product.",
                            "assembledProductHeight": {
                            "unit": "in",
                            "measure":'.$walmart_product_height.'
                            },
                            "count": "0",
                            "shortDescription": '.$descrip.',
                            "assembledProductWeight": {
                            "unit": "oz",
                            "measure": '.$variable_product_weight.'
                            },
                            "assembledProductWidth": {
                            "unit": "in",
                            "measure": '.$variable_product_width.'
                            },
                            "manufacturerPartNumber": "'.strip_tags($new_variations[$i]->sku).'",
                            "assembledProductLength": {
                            "unit": "in",
                            "measure": '.$variable_product_length.'
                            },
                            "material": [
                            "not available"
                            ],
                            "modelNumber": "'.strip_tags($new_variations[$i]->sku).'",
                            "prop65WarningText": "none"
                        }
                        },
                        "Orderable": {
                        "fulfillmentLagTime": 1,
                        "endDate": "2040-09-01T00:00:00.000Z",
                        "MustShipAlone": "No",
                        "SkuUpdate": "No",
                        "productName": "'.$wal_product_name.'",
                        "productIdentifiers": {
                            "productId": "'.$product_gtin_id[$i].'",
                            "productIdType": "GTIN"
                        },
                        "ProductIdUpdate": "No",
                        "price": '.$new_variations[$i]->regular_price.',
                        "chemicalAerosolPesticide": "No",
                        "sku": "'.strip_tags($new_variations[$i]->sku).'",
                        "ShippingWeight": '.$variable_product_weight.',
                        "brand": "XYZReptiles",
                        "startDate": "2021-07-07T00:00:00.000Z"
                        }
                    }';

                }
            }
        }
    }
    //echo "<pre>json_generated";
    //print_r($repeater_body_content);
            $repeater_body_content_converted=implode(',',$repeater_body_content);
            $header_paramertes='{
             "MPItemFeedHeader": {
               "subCategory": "animal_accessories",
               "sellingChannel": "marketplace",
               "processMode": "REPLACE",
               "locale": "en",
               "version": "1.2",
               "subset": "EXTERNAL"
             },
             "MPItem": ['. $repeater_body_content_converted.']
           }';
          echo "<pre>";
          print_r($header_paramertes);
          die;



$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://marketplace.walmartapis.com/v3/feeds?feedType=MP_ITEM',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>$header_paramertes,
  CURLOPT_HTTPHEADER => array(
    'WM_SVC.NAME: xyzreptiles',
    'WM_QOS.CORRELATION_ID: xyzreptileslivepushfirstap',
    'Accept: application/json',
    'WM_SEC.ACCESS_TOKEN:'.$responsecode,
    'Content-Type: application/json',
    'Authorization: Basic ZmFlZTMxNGQtZDhiMC00ZWMwLWIyODYtZjYwNDg4YzY1ZDRlOmIyV000bmRpYXJkakVQNVBmTkc5Mko4T3NzWi0wVEJNb21MWDdCOU9GNXR4T2llS19JQVBYZmp2elE4T2oxaTVqMTdYdzRoSzZaWHFUWG1Fb1R0SS13',
    'Cookie: TS01f4281b=0130aff232733228bbea74c7305d04cf02a7cf22a1e498c93f61b1b6631d668fba23a59993545c5f89f8f964f8e7cbd40059e1cbe3'
  ),
));

$response = curl_exec($curl);
curl_close($curl);
$responsesample = json_decode($response);
$item_update_item='bulk_item_api';
$item_type_req='walmart_bulk_item_api_request_';
$item_type_res='walmart_bulk_item_api_response_';
$responsecode=$responsesample->feedId;
    }
}

    if($_POST['walmart_post_actions']=='walmartbulkpricefield'){
        foreach($arraynew as $listofproducttopushfor_walmart){
            $product = wc_get_product($listofproducttopushfor_walmart);
            $wooproduct = $product->get_type();
            if($wooproduct == 'simple'){
                $status_ofitem=$product->get_stock_status();
                $product_price=$product->get_price();
                $product_sku=$product->get_sku();
                $dynamicvalue[]='{
                    "sku": "'.$product_sku.'",
                    "pricing": [
                    {
                        "currentPrice": {
                        "currency": "USD",
                        "amount": '.$product_price.'
                        },
                        "currentPriceType": "REDUCED",
                        "comparisonPriceType":"BASE",
                        "comparisonPrice": {
                        "currency": "USD",
                        "amount": '.$product_price.'
                        }
                    }
                    ]
                }';
            }
            else if($wooproduct == 'variable'){
                $variations = $product->get_available_variations();
                $variable_count =sizeof($variations);
                for($i=0;$i<$variable_count;$i++){
                    $dynamicvalue[]='{
                        "sku": "'.strip_tags($variations[$i]['sku']).'",
                        "pricing": [
                        {
                            "currentPrice": {
                            "currency": "USD",
                            "amount": '.$variations[$i]['display_regular_price'].'
                            },
                            "currentPriceType": "REDUCED",
                            "comparisonPriceType":"BASE",
                            "comparisonPrice": {
                            "currency": "USD",
                            "amount": '.$variations[$i]['display_regular_price'].'
                            }
                        }
                        ]
                    }';
                }
            }
        }
        $dynamic_sku_converiosn=implode(',',$dynamicvalue);
        // echo $dynamic_sku_converiosn;
        // die;

          $header_paramertes='{
            "PriceHeader": {
              "version": "1.7"
            },
            "Price": ['.$dynamic_sku_converiosn.']
              }';
          echo $header_paramertes;
        //   die;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://marketplace.walmartapis.com/v3/feeds?feedType=price',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>$header_paramertes,
  CURLOPT_HTTPHEADER => array(
    'WM_SVC.NAME: Walmart Marketplace',
    'WM_QOS.CORRELATION_ID: test',
    'Accept: application/json',
    'WM_SEC.ACCESS_TOKEN: '.$responsecode,
    'Content-Type: application/json',
    'Authorization: Basic ZmFlZTMxNGQtZDhiMC00ZWMwLWIyODYtZjYwNDg4YzY1ZDRlOmIyV000bmRpYXJkakVQNVBmTkc5Mko4T3NzWi0wVEJNb21MWDdCOU9GNXR4T2llS19JQVBYZmp2elE4T2oxaTVqMTdYdzRoSzZaWHFUWG1Fb1R0SS13',
    'Cookie: TS01f4281b=0130aff23275d0df1ff2482a435cfe01eb40cb849e6ffa1fe5a501fe17bda2dd2bc518f4186586cc262c67091c5c603cd7a2ebce8d'
  ),
));
                $response = curl_exec($curl);
                curl_close($curl);
                $responsesample = json_decode($response);
               $item_update_item='bulk_price_api';
               $item_type_req='walmart_bulk_price_api_request_';
               $item_type_res='walmart_bulk_price_api_response_';
               $responsecode=$responsesample->feedId;

    }
    if($_POST['walmart_post_actions']=='walmartbulk_inventory_field'){
        $array_count_total=sizeof($arraynew);
        foreach($arraynew as $listofproducttopushfor_walmart){
            $product = wc_get_product($listofproducttopushfor_walmart);
            $wooproduct = $product->get_type();
            if($wooproduct == 'simple'){
                $status_ofitem=$product->get_stock_status();
                $product_price=$product->get_price();
                $product_sku=$product->get_sku();
                $product_quanity=$product->get_stock_quantity();
                $product_managestock=$product->managing_stock();
                if($product_managestock){
                    $product_quanity=get_post_meta($listofproducttopushfor_walmart, '_stock' , true );
                }
                else {
                    $product_quanity=10;
                }
                $dynamicvalue[]='{
                    "sku": "'.$product_sku.'",
                    "quantity": {
                    "unit": "EACH",
                    "amount": "'.$product_quanity.'"
                    }
                }';
            }
            else if($wooproduct == 'variable'){
                $variations = $product->get_available_variations();
                $variable_count =sizeof($variations);
                $product_managestock=$product->managing_stock();
                // echo $product_managestock;
                // die;
                if($product_managestock){
                    $product_quanity=get_post_meta($listofproducttopushfor_walmart, '_stock' , true );
                }
                else{
                    $product_quanity=10;
                }
                for($i=0;$i<$variable_count;$i++){
                    $dynamicvalue[]='{
                        "sku": "'.strip_tags($variations[$i]['sku']).'",
                        "quantity": {
                        "unit": "EACH",
                        "amount": "'.$product_quanity.'"
                        }
                    }';
                }
            }
        }

        $dynamic_sku_converiosn=implode(',',$dynamicvalue);
        $header_paramertes='{
            "InventoryHeader": {
              "version": "1.4"
              },
              "Inventory": ['.$dynamic_sku_converiosn.']
          }
          ';
          echo "<pre>";
        print_r($header_paramertes);
         die;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://marketplace.walmartapis.com/v3/feeds?feedType=inventory',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>$header_paramertes,
            CURLOPT_HTTPHEADER => array(
              'WM_SVC.NAME: Walmart Marketplace',
              'WM_QOS.CORRELATION_ID: test',
              'Accept: application/json',
              'WM_SEC.ACCESS_TOKEN: '.$responsecode.'',
              'Content-Type: application/json',
              'Authorization: Basic ZmFlZTMxNGQtZDhiMC00ZWMwLWIyODYtZjYwNDg4YzY1ZDRlOmIyV000bmRpYXJkakVQNVBmTkc5Mko4T3NzWi0wVEJNb21MWDdCOU9GNXR4T2llS19JQVBYZmp2elE4T2oxaTVqMTdYdzRoSzZaWHFUWG1Fb1R0SS13',
              'Cookie: TS01f4281b=01c5a4e2f9270a4836a0cece03245ad915bc096a264a86c5ef3d19fb77c151bbabd2797a6a95d2806d1f616875145139966bf21d9b'
            ),
          ));
        $response = curl_exec($curl);
        curl_close($curl);
        $responsesample = json_decode($response);
        $item_update_item='bulk_inventory_api';
        $item_type_req='walmart_bulk_inventory_api_request_';
        $item_type_res='walmart_bulk_inventory_api_response_';
        $responsecode=$responsesample->feedId;
    }
    global $wpdb;
    $file_name= strtotime("now");
    $file_saving_name=$file_name;
    $file_saving_name_req=$item_type_req.$file_name;
    $file_saving_name_res=$item_type_res.$file_name;
     $paths = __DIR__.'/walmartrequestandresponse/'.$file_saving_name_res.'.txt';
    $vickybahi= fopen($paths, "w");
    fwrite($vickybahi,$response);
    fclose($vickybahi);
     $request_paths = __DIR__.'/walmartrequestandresponse/'.$file_saving_name_req.'.txt';
if(empty($responsecode)){
    $responsecode='No Feed Id found.';
}
    $requestinfor_open= fopen($request_paths, "w");
    fwrite($requestinfor_open,$header_paramertes);
    fclose($requestinfor_open);
    $value= $wpdb->insert('wp_walmart_log_information', array(
     'Status' => '-',
     'Feedid' => $responsecode,
     'Requestinfo' => $request_paths,
     'Responseinfo'=>$paths,
     'typeofevent'=>$item_update_item
    ));
    die;
}


function wpdocs_register_my_custom_menu_page_two()
{

	$dir = wp_get_upload_dir('https://cellkbstaging.wpengine.com/wp-content/plugins/icon.png');
    add_menu_page(
        __('Order Filtering', 'textdomain'),
        'Order Filtering',
        'manage_options',
        'ordersdetails',
        'my_custom_menu_page_two',
        $dir['path'],
        6
    );
}
add_action('admin_menu', 'wpdocs_register_my_custom_menu_page_two');

/**
 * Display a custom menu page
 */
function my_custom_menu_page_two()
{
    global $wpdb;
    $results = $wpdb->get_results("SELECT * FROM `wp_users` limit 10");
    ?>
<form action="" method="post" style="text-align:center;margin:20px;">
<select name="bilingaddressfiltering" id="">
<option disabled value="" selected>SELECT</option>
<option value="sameaddress">Address Matches</option>
<option value="differentaddress">Address Mismatch</option>
<option value="shippingnotes">Hold For Pickup</option>
<option value="getallorders">All Processing Orders</option>
</select>
<input type="submit" value="Filter" id="sendemailtoorders" class="button-primary" name="submitfilter">
</form>
    <?php
if (isset($_POST['submitfilter'])) {
        ?>
<script>
   jQuery(document).ready(function(){
            jQuery("#sendemailtoorders").after('<input style="margin-left:10px;" type="submit" name="save_post_new_vi" id="savepostidnew_mail" class="button action" value="Send Email">');
   });
</script>
<?php
$orderid = [];
        global $wpdb;
        $orderlists = $wpdb->get_results("SELECT ID FROM `wp_posts` where post_type='shop_order' and post_status='wc-processing'");
        foreach ($orderlists as $orders) {
            $order_id = $orders->ID;
            $order = wc_get_order($order_id);
            $billingaddress = $order->get_formatted_billing_address();
            $shippingaddress = $order->get_formatted_shipping_address();
            $checkbillingaddress = $_POST['bilingaddressfiltering'];
            if ($checkbillingaddress == 'sameaddress') {
                $shippingvaluepassed='Address Matches';
                if ($billingaddress == $shippingaddress) {
                    $orderid[] = $orders->ID;
                }
            } else if ($checkbillingaddress == 'shippingnotes') {
                $shippingvaluepassed='Hold For Pickup';
                if ($billingaddress != $shippingaddress) {
                    $shippingnote = get_post_meta($orders->ID, '_shipping_company', true);
                    if ($shippingnote == 'FedEx Hold For Pick Up' || !(empty($shippingnote))) {
                        $orderid[] = $orders->ID;
                    }
                }
            } else if($checkbillingaddress == 'getallorders') {
                $shippingvaluepassed='All Processing Orders';
                $orderid[] = $orders->ID;
            }
            else {
                $shippingvaluepassed='Address Mismatch';
                if ($billingaddress != $shippingaddress) {
                    $shippingnote = get_post_meta($orders->ID, '_shipping_company', true);
                    if ($shippingnote != "FedEx Hold For Pick Up" || empty($shippingnote)) {
                        $orderid[] = $orders->ID;
                    }

                }
            }
        }
        echo "<div style='text-align:center;'><h3 style='font-weight:400'>List of filtered users</h3>";
        echo "<p><b>".$shippingvaluepassed."</b></p>";
        echo "<div style='margin:10px;'>";
        echo ' Select All&nbsp;&nbsp;<input type="checkbox" value="Select All" id="selectall" name="checkall"  />';
        echo "</div>";
        echo "<table  id='myTable'>";
        echo "<thead><tr><th>Select</th><th>Order</th><th>Date</th><th>Status</th><th>Purchased</th><th>Billing</th><th>Ship to</th><th>Total</th></tr></thead><tbody>";
        foreach ($orderid as $orderid) {
            $order = wc_get_order($orderid);
            $updatedat = $order->get_date_created();
            $date = date_create($updatedat);
            $updatedat = date_format($date, "Y-m-d");
            $billingaddress = $order->get_formatted_billing_address();
            $shippingaddress = $order->get_formatted_shipping_address();
            $j = 0;
            foreach ($order->get_items() as $item_id => $item) {
                $j++;
            }
            $orderinfo = '<a href=' . site_url() . '/wp-admin/post.php?post=' . $order->get_id() . '&action=edit class="order-view"><strong># ' . $order->get_id() . " " . $order->get_billing_first_name . $order->get_billing_last_name() . '</strong></a>';

            echo "<tr><td><input type='checkbox' class='case' name='billingemail[]' value='" . $order->get_id() . "'/></td><td>" . $orderinfo . "</td><td>" . $updatedat . "</td><td>" . $order->get_status() . "</td><td>" . $j . " item" . "</td><td>" . $billingaddress . "</td><td>" . $shippingaddress . "</td><td>" . $order->get_formatted_order_total() . "</td></tr>";
        }
        echo "</tbody></table></div>";
    }
}
add_action("admin_footer", "change_thedata");
function change_thedata()
{
    ?>
<script>
jQuery(document).ready(function() {
jQuery('.close').click(function(){
            jQuery("#myModal").css("display", "none");
});
jQuery("#savepostidnew_mail").click(function(){
var newarr=[];
   jQuery("input[name='billingemail[]']:checked").each(function() {
    newarr.push(jQuery(this).val());
            });
            if(newarr=="")
            {
            alert("please select the users to send email");
            return false;
            }
            else
            {
            jQuery("#myModal").css("display", "block");
            return false;
            }
});
});
</script>
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <p>Send Email</p>
      <hr>
      <form method="POST">
      <label for="">Subject</label>
      <input type="text" name="sub_field"  id="sub_field">
      <label for="">Email Body</label>
      <textarea name="email_body" id="email_bodycontent" cols="30" rows="5">
      </textarea>
      <br/>
      <img style="display:none;width:20%;" class="gifimage" src="<?php echo site_url(); ?>/wp-content/themes/xyzreptiles/assets/images/ajaxload.gif"/>
      <div class="ss-order-btns-vi">
      <button class="button close" style="margin-top:-25px;">Cancel</button>
      <input type="submit" class="vi_read_more"  name="submit_value" value="Send Email"/>
      </div>
      <!-- <input type="submit" class="vi_read_more close"  name="close" value="Send Email"/> -->
      </form>
      </div>
      </div>
      <style>
      label{
          display:block;
      }
     #to_email,#from_email {
      border-radius: 6px;
    border-color: #828282;
    }
    input.vi_read_more {
    margin: 0 auto;
    display: block;
}
button.button.close {
    margin-top: -10%;
}
      .vi_read_more{
    background-color: #21409A;
    color: #ffffff;
    border-radius: 6px !important;
    width: auto;
    margin: 0;
    padding: 20px;
    font-size: 16px;
    border: none;
    padding: 10px;
      }
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      padding-top: 100px;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0,0,0);
      background-color: rgba(0,0,0,0.4);
    }
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border-radius: 16px;
      border: 1px solid #888;
      height: auto;
      width: 25%;
    }
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }
    textarea#email_bodycontent {
    width: 100%;
}
input#sub_field {
    width: 100%;
}
.modal-content p { margin-top: 0;}
.modal-content input#sub_field {margin-bottom:10px;}
.modal-content form > label { margin-bottom: 10px; text-transform: capitalize; letter-spacing: 0.5px;}
.ss-order-btns-vi button.button.close { margin-top: 0 !important; width: 40%; margin: 0 auto; background-color: #ffffff; border-color: #21409A; color: #21409A; text-transform: uppercase; letter-spacing: 0.5px;}
.ss-order-btns-vi input.vi_read_more { width: 40%; text-transform: uppercase; letter-spacing: 0.5px; font-family: "Segoe UI", sans-serif; font-size:13px; line-height: 28px; font-weight: 700; border: 1px solid#21409A;}
.ss-order-btns-vi button.button.close:hover {background-color: #21409A; border-color: #21409A; color: #ffffff;}
.ss-order-btns-vi input.vi_read_more:hover {background-color: #ffffff; border: 1px solid#21409A; color: #21409A;}
.ss-order-btns-vi { display: flex; flex-wrap: wrap; margin: 0 auto;}
.ss-order-btns-vi button.button.close, .ss-order-btns-vi input.vi_read_more { line-height: 20px; cursor: pointer;}
.modal-content input#sub_field, textarea#email_bodycontent { border-color: #e8e8e8;}
.modal-content p { margin-top: 0; font-size: 15px; font-weight: 700; text-transform: uppercase; color: #808080;}
.modal-content .close {cursor:pointer;}
.modal-content form { position: relative;}
.modal-content img.gifimage { width: 30% !important; position: absolute; top: 17%; left: 34%;}
@media only screen and (max-width: 767px) {
	html body .modal-content {width:80%;}
}
      </style>
<script>
        jQuery(document).ready(function(){
            jQuery('.vi-walmart-bulkcupdate').click(function(){
                jQuery(".gifimage").show();
        var walmart_value=jQuery(".vi-walmartbulkupdatevalue").val();
        var data = {
           'action': 'walmart_actions','walmart_post_actions':walmart_value,
       };
       jQuery.post(ajaxurl, data, function(response) {
           console.log(response,"response");
     if(response=='ok')
     {

         jQuery(".gifimage").hide();
        // window.location.reload();
     }
     else
     {
        //  alert("mail not sent try again");
         jQuery(".gifimage").hide();
        // window.location.reload();
     }
   });
return false;
    });

jQuery(".vi_read_more").click(function(){
   var bodycontent= jQuery("#email_bodycontent").val();
   var sub_field = jQuery("#sub_field").val();
   var array = [];
   var namearr=[];
   jQuery(".gifimage").show();
            jQuery("input[name='billingemail[]']:checked").each(function() {
                array.push(jQuery(this).val());
            });
            jQuery("a.order-view strong").each(function() {
                namearr.push(jQuery(this).val());
            });
            var selectedids=array;
       var data = {
           'action': 'update_paymentinfo','postid': selectedids,'body_content':bodycontent,'sub_field':sub_field,'nameofuser':namearr
       };
       jQuery.post(ajaxurl, data, function(response) {
     if(response=='ok')
     {
         alert("mail sent");

         jQuery("#myModal").css("display", "none");
         jQuery(".gifimage").hide();

     }
     else
     {
         alert("mail not sent try again");
         jQuery(".gifimage").hide();
     }
   });
   return false;
 });
    });
    </script>

<script language="javascript">
jQuery(document).ready(function(){

jQuery("#selectall").click(function () {
	jQuery('.case').attr('checked', this.checked);
});
jQuery(".case").click(function(){

	if(jQuery(".case").length == jQuery(".case:checked").length) {
		jQuery("#selectall").attr("checked", "checked");
	}
	else {
		jQuery("#selectall").removeAttr("checked");
	}
});
});
</script>
    <?php }
function my_admin_footer_function2()
{
    ?>
	<style>
	#toplevel_page_ordersdetails .wp-menu-image.dashicons-before:before {
    content: "\f316";
}
html body table.dataTable td {
    padding: 10px 10px;
}
html body table.dataTable tr.odd, html body table.dataTable tr.odd td.sorting_1
{
	background-color: #f9f9f9;
}
html body table.dataTable tr.even td.sorting_1
{
	background-color: #ffffff;
}
div#myTable_wrapper {
    background-color: #ffffff;
    padding: 20px;
}
html body table.dataTable thead th
{
	padding: 10px;
	padding: 3px 18px 10px 10px;
	border-bottom: 1px solid #bcbcbc;
	font-weight: 400;
    font-size: 16px;
}
html body a.dt-button {
	top: 0;
    left: 0;
    color: #80bfe8;
    position: relative;
    display: inline-block;
    padding: 0.5em 3em;
    border: 2px solid #80bfe8;
    background-color: white;
    cursor: pointer;
    font-size: 0.88em;
    background-image: unset;
}
a.dt-button.buttons-excel.buttons-html5:hover {
	background-image: unset;
	border: 2px solid #80bfe8;

}
tr th {
    text-align: left;
}
	</style>
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.css" rel="stylesheet" />
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
<script>
jQuery(document).ready(function() {
    jQuery('.myTable').DataTable();
    jQuery('#myTable').DataTable({
    dom: 'Bfrtip',
    buttons: [ {
	  extend: 'excel',
	  text: 'Export Data',
      title: 'List of users',
      filename: 'download list'
    },],
	"lengthMenu": [100 ]
  });
});
</script>
   <?php
}
add_action('admin_footer', 'my_admin_footer_function2');


add_action('wp_ajax_variableproduct_set_paypal', 'variableproduct_set_paypal');
add_action('wp_ajax_nopriv_variableproduct_set_paypal', 'variableproduct_set_paypal');

function variableproduct_set_paypal(){

    $price = get_post_meta($_POST['varationid'], '_price', true);
    echo json_encode(array("value"=>$price));
    die;

}

add_filter( 'wpcf7_validate', 'maybe_skip_mail2' );
function maybe_skip_mail2($result, $tags = '') {

    $currentformInstance  = WPCF7_ContactForm::get_current();
    $contactformsubmition = WPCF7_Submission::get_instance();
    $mail = $currentformInstance->prop('mail');
    $data = $contactformsubmition->get_posted_data();
    //stop multiple submissions
    if ( ! session_id() ) {
        session_start();
    }
    if (isset($_SESSION['cf7_form_timer'])) {
        if ($_SESSION['cf7_form_timer'] > time()) {
            echo '{"mailSent":false,"status":"validation_failed","into":"#'.$data['_wpcf7_unit_tag'].'","message":"Form already submitted, Please wait.","invalidFields":[{"into":"span.wpcf7-form-control-wrap.captcha-170","message":"Form already submitted, Please wait.","idref":null}]}';
            die();
        } else {
            $_SESSION['cf7_form_timer'] = strtotime('+1 minute', time());
        }
    } else {
        $_SESSION['cf7_form_timer'] = strtotime('+1 minute', time());
    }

    return $result;
}

add_action('wp_ajax_nopriv_register_form_validations', 'register_form_validations');
add_action('wp_ajax_register_form_validations', 'register_form_validations');

function register_form_validations(){

  $mail_check=$_POST['register_u_email'];
  $register_user_pass=$_POST['register_user_pass'];

  $getuserbyemail= get_user_by_email( $mail_check );
  if($getuserbyemail->user_email==$mail_check){
      $v=array("mailexist"=>'yes');
   echo json_encode($v);
  }
  else {

  $otp_value=$_POST['otp_value'];
  if(empty($otp_value))
  {
    $six_digit_random_number = random_int(100000, 999999);
    global $wpdb;
    $send=$wpdb->insert('wp_temp_otp_table', array(
      'user_email' => $mail_check,
      'email_otp' => $six_digit_random_number,
  ));
  if($send==true){
    $headers = 'From:XYZReptiles<info@xyzreptiles.com>' . "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
    $activation_link='<a href="'.site_url().'/my-account/?email='.$mail_check.'&password='.$register_user_pass.'&email_otpverify='.$six_digit_random_number.'">activate now</a>';

        $content= '<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /></head><body><div id="template_header_image"><div><p style="font-size:18px;">Hello and thank you for registering for an account at XYZReptiles. Please click this link to activate your account: '.$activation_link.'</p><p style="font-size:18px;"> <b>XYZReptiles</b><br/>17021 South Dixie Hwy.<br/> Suite A <br/>Palmetto Bay, FL 33157<br/> xyzreptiles.com <br/>info@xyzreptiles.com</p><p style="font-size:18px;"><img src="' . site_url() . "/wp-content/themes/xyzreptiles/assets/images/customlognew.jpg" . '" alt="' . "XYZReptiles" . '" /></p></div></div> </body></html>';
        $mailsenttrue=wp_mail($mail_check,'XYZreptiles Email verification',$content,$headers);
    $inserted=1;
  }
  else {
    $inserted=1;
  }
  $v=array("mailsend"=>$inserted,"user_mail"=>$mail_check);
  }
  else{
    global $wpdb;
    $user_otp_sent_email=$_COOKIE['user_email_in_registeration'];
    $result=$wpdb->get_results("SELECT email_otp FROM wp_temp_otp_table where user_email='$mail_check' order by slno desc limit 1");
    $otpvalue=$result[0]->email_otp;
    if($otpvalue==$otp_value)
    {
        $verify_otp=1;
    }
    else {
        $verify_otp=0;
    }
    $v=array("optvalue"=>$verify_otp);

  }
   echo json_encode($v);
}
    die;
}


// restock rearrange issue fixing

add_action('woocommerce_order_status_changed', 'orderstatuscompletedforrearrangestock', 10, 3);
function woo_order_status_change_custom($order_id,$old_status,$new_status) {

    $order = wc_get_order( $order_id );
    $items = $order->get_items();
    foreach ( $items as $item )
    {
        // Initializing variables
          $product_variation_id = $item->get_variation_id();
          $product_id = $item->get_product_id();
          $product = wc_get_product( $product_id );
          if ($product->is_type( 'variable')){
              if (!$product->managing_stock() && $product->is_in_stock()){
                  if($_POST['rearrange_stock'] > 1){
                      $v_stock = $_POST['rearrange_stock'];
                  }else{
                      $v_stock = 1;
                  }
                  update_post_meta($product_id,'rearrange_stock', $v_stock );
              }else{
                  // Get the available variations for the variable product
                  $available_variations = $product->get_available_variations();
                  // Initializing variables
                  $variations_count = count($available_variations);
                  $loop_count = 0;
                  $sum = 0;
                  // Iterating through each available product variation
                  foreach($available_variations as $key => $values )
                  {
                      // Get the variation quantity
                      $variation_obj = wc_get_product( $values['variation_id'] );
                      $stock_qty = $variation_obj->get_stock_quantity(); // Stock qty
                      // The display
                      if($stock_qty == '' || $stock_qty <= 0): $stock_qty = 0; endif;
                      $sum+= $stock_qty;
                  }
                  update_post_meta($product_id,'rearrange_stock', $sum );
              }
          }else{
              $stock = get_post_meta($product_id, '_stock' , true );
              if($stock == '' || $stock_qty <= 0 ): $stock = 0; endif;
              if($product->managing_stock() && $stock == 0){
                  $stock = get_post_meta($product_id, '_stock' , true );
              }else if (!$product->managing_stock() && $product->is_in_stock()){
                  if($_POST['rearrange_stock'] > 1){
                      $stock = $_POST['rearrange_stock'];
                  }else{
                      $stock = 1;
                  }
              }
              update_post_meta($product_id,'rearrange_stock', $stock );
         }

    }
    }

    add_action( 'woocommerce_before_cart', 'bbloomer_apply_matched_coupons' );


    add_action('init','checkcoupon_passed');
    function checkcoupon_passed(){
    if(isset($_GET['coupon'])){
    $cookie_name = "refresion_coupn";
    $cookie_value = $_GET['coupon'];
    setcookie($cookie_name, $cookie_value, time() + (8640 * 30), "/");
    }
    if(isset($_COOKIE['refresion_coupn'])) {
        $_COOKIE['refresion_coupn'];
    }
    }

    function bbloomer_apply_matched_coupons() {
    //   session_start();
    // $_SESSION["refresion_coupn"] = "local";
    // echo "test".$_SESSION['refresion_coupn'];
        if(isset($_COOKIE['refresion_coupn'])){
            // echo "coming";
        $coupon_code =$_COOKIE['refresion_coupn'];
        if ( WC()->cart->has_discount( $coupon_code ) ) return;

        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {

        // this is your product ID
        // $autocoupon = array( 745 );

        // if ( in_array( $cart_item['product_id'], $autocoupon ) ) {
             WC()->cart->apply_coupon( $coupon_code );
             $_COOKIE['refresion_coupn']='';
            wc_print_notices();
            // $_COOKIE['refresion_coupn']='';
        // }
        }
    }
    else {
        //echo "not set";
    }
    }
    function walmart_menu()
    {

        add_menu_page('Walmart Controls', 'Walmart Controls', 'read', 'walmartpage', 'my_menu_output','dashicons-cart',3);
        add_submenu_page('walmartpage', 'Inventory', 'Inventory', 'read', 'inventory','testoutput');
        add_submenu_page('walmartpage', 'Item', 'Item', 'read', 'walmartitem','walmartitem');
        add_submenu_page('walmartpage', 'Price Feed', 'Price Feed', 'read', 'pricefeed','pricefeed');
        // add_submenu_page('walmartpage', 'Bulk Update', 'Bulk Update', 'read', 'bulkupdae','bulkupdae');
    }
    add_action('admin_menu', 'walmart_menu');

    function pricefeed(){
        ?>
    <div class="commondiv" style="margin-top:10px;text-align:center;">
    <div style="display:flex;">
    <div style="width:50%">
        <form action="" method="post">
        <!-- <input type="checkbox" name="walmartitem" id="inventorycheckbox">Check box -->
        <input type="hidden" name="price_bulkupdate" value="walmartbulkpricefield" class="vi-walmartbulkupdatevalue">
        <img style="display:none;width: 21%;margin-left: 15%;text-align: center;position: absolute;z-index: 1;" class="gifimage" src="<?php echo site_url(); ?>/wp-content/themes/xyzreptiles/assets/images/ajaxload.gif"/>
        <input type="submit" class="button button-primary button-large vi-walmart-bulkcupdate" value="Bulk  Update Price" name="walmartitem_submit">
        </form>
        </div>
        <div style="width:50%">
        <a href="#vicky"><button  class="button button-primary button-large">View Details for the Real Time Call</button></a>
        </div>
        </div>
        <h1>Walmart Price Updated History with Bulk Updates </h1>
        <table id="myTable">
        <thead>
        <tr><th>Sl.No</th><th>FeedID</th><th>Request Information</th><th>Response Sample</th><th>Date</th></tr>
        </thead>
        <tbody>
        <?php global $wpdb;
        $result=$wpdb->get_results('SELECT * from wp_walmart_log_information WHERE typeofevent="bulk_price_api" ');
        $d=1;
        foreach($result as $ressdf){
           ?>
            <tr><td><?php echo $d; ?></td><td><?php echo $ressdf->Feedid; ?></td><td>
            <?
            $site_url=site_url();
            $message_need_change=$ressdf->Requestinfo;
            $download_path=str_replace("/home/xyzreptiles/public_html",$site_url,$message_need_change); ?>
            <a download href="<?php echo $download_path; ?>">Download Request</a></td><td>
            <?
            $site_url=site_url();
            $message_need_change=$ressdf->Responseinfo;
            $download_path=str_replace("/home/xyzreptiles/public_html",$site_url,$message_need_change);          ?>
            <a download   href="<?php echo $download_path; ?>">Download Response<?php //echo $ressdf->Responseinfo; ?></a></td><td>

            <?php
                $date = date_create($ressdf->Date);
                echo $updatedat = date_format($date, "Y-m-d");
             ?></td></tr>
            <?php
    $d++;
    }
        ?>

        </tbody>
        </table>
        <h2> Real Time update log for the Price</h2>
        <table id="vicky" class="myTable">
        <thead>
        <tr><th>Sl.No</th><th>FeedID</th><th>Request Informaiton</th><th>Response Sample</th><th>Date</th></tr>
        </thead>
        <tbody>
        <?php global $wpdb;
        $result=$wpdb->get_results('SELECT * from wp_walmart_log_information WHERE typeofevent="individual_price_api"');
        $d=1;
        foreach($result as $ressdf){
           ?>
            <tr><td><?php echo $d; ?></td><td><?php echo $ressdf->Feedid; ?></td><td>
            <?
            $site_url=site_url();
            $message_need_change=$ressdf->Requestinfo;
            $download_path=str_replace("/home/xyzreptiles/public_html",$site_url,$message_need_change); ?>
            <a download href="<?php echo $download_path; ?>">Download Request</a></td><td>
            <?
            $site_url=site_url();
            $message_need_change=$ressdf->Responseinfo;
            $download_path=str_replace("/home/xyzreptiles/public_html",$site_url,$message_need_change);          ?>
            <a download   href="<?php echo $download_path; ?>">Download Response<?php //echo $ressdf->Responseinfo; ?></a></td><td><?php
                        $date = date_create($ressdf->Date);
                        echo $updatedat = date_format($date, "Y-m-d");
            //echo $ressdf->Date; ?></td></tr>
            <?php
    $d++;
    }
        ?>

        </tbody>

        </table>
        </div>
           <?php
    }
    function my_menu_output()
    {
        echo "<h1>Walmart Information</h1>";
        ?>
        <!-- <table id="myTable">
        <thead>
        <th><tr><td>slno</td></tr></th>
        </thead>
        <tbody>
        <tr>
        <td>1</td>
        </tr>
        </tbody>
        </table>  -->
        <ul  class="walmart" style="display:flex;padding:5px;">
        <li><a href="<?php echo admin_url() ?>/admin.php?page=inventory">Inventory</a></li> <span class="spancap">|</span>
        <li><a href="<?php echo admin_url() ?>/admin.php?page=walmartitem">Item</a></li> <span class="spancap">|</span>
        <li><a href="<?php echo admin_url() ?>/admin.php?page=pricefeed">Price Feed</a></li>
        </ul>
    <style>
    span.spancap{
        font-weight:800;
        padding-right:10px;
    }
    .walmart li{
        padding-right:5px;
        font-weight:800;
    }
    .commondiv{
        margin-top:10px;
        text-align:Center;
    }
    .walmartproduct_id_list{
        display:none;
    }
    </style>
        <?php
    }
    function testoutput(){
        ?>
        <div class="commondiv" style="margin-top:10px;text-align:center;">

        <div style="display:flex;">

        <div style="width:50%">
            <form action="" method="post">
            <!-- <input type="checkbox" name="walmartitem" id="inventorycheckbox">Check box -->
            <input type="hidden" name="walmartbulkinventoryfield" value="walmartbulk_inventory_field" class="vi-walmartbulkupdatevalue">
            <img style="display:none;width: 21%;margin-left: 15%;text-align: center;position: absolute;z-index: 1;" class="gifimage" src="<?php echo site_url(); ?>/wp-content/themes/xyzreptiles/assets/images/ajaxload.gif"/>
            <input type="submit" class="button button-primary button-large vi-walmart-bulkcupdate" value="Bulk  Update Inventory" name="walmartitem_submit">
            </form>
            </div>
            <div style="width:50%">
            <a href="#vicky"><button  class="button button-primary button-large">View Details for the Real Time Call</button></a>
            </div>
            </div>
            <h1>Walmart Itemed History with Bulk Updates </h1>
            <table  id="myTable">
            <thead>
            <tr><th>Sl.No</th><th>FeedID</th><th>Request Informaiton</th><th>Response Sample</th><th>Date</th></tr>
            </thead>
            <tbody>
            <?php global $wpdb;
            $result=$wpdb->get_results('SELECT * from wp_walmart_log_information WHERE typeofevent="bulk_inventory_api" ');
            $d=1;
            foreach($result as $ressdf){
               ?>
                <tr><td><?php echo $d; ?></td><td><?php echo $ressdf->Feedid; ?></td><td>
                <?
                $site_url=site_url();
                $message_need_change=$ressdf->Requestinfo;
                $download_path=str_replace("/home/xyzreptiles/public_html",$site_url,$message_need_change); ?>
                <a download href="<?php echo $download_path; ?>">Download Request</a></td><td>
                <?
                $site_url=site_url();
                $message_need_change=$ressdf->Responseinfo;
                $download_path=str_replace("/home/xyzreptiles/public_html",$site_url,$message_need_change);          ?>
                <a download   href="<?php echo $download_path; ?>">Download Response<?php //echo $ressdf->Responseinfo; ?></a></td><td><?php
                            $date = date_create($ressdf->Date);
                            echo $updatedat = date_format($date, "Y-m-d");
                //echo $ressdf->Date; ?></td></tr>
                <?php
        $d++;
        }
            ?>

            </tbody>
            </table>
            <h2> Real Time update log for the Item </h2>
            <table id="vicky" class="myTable">
            <thead>
            <tr><th>Sl.No</th><th>FeedID</th><th>Request Informaiton</th><th>Response Sample</th><th>Date</th></tr>
            </thead>
            <tbody>
            <?php global $wpdb;
            $result=$wpdb->get_results('SELECT * from wp_walmart_log_information WHERE typeofevent="realtime_api_call"');
            $d=1;
            foreach($result as $ressdf){
               ?>
                <tr ><td ><?php echo $d; ?></td><td><?php echo $ressdf->Feedid; ?></td><td>
                <?
                $site_url=site_url();
                $message_need_change=$ressdf->Requestinfo;
                $download_path=str_replace("/home/xyzreptiles/public_html",$site_url,$message_need_change); ?>
                <a download href="<?php echo $download_path; ?>">Download Request</a></td><td>
                <?
                $site_url=site_url();
                $message_need_change=$ressdf->Responseinfo;
                $download_path=str_replace("/home/xyzreptiles/public_html",$site_url,$message_need_change);          ?>
                <a download   href="<?php echo $download_path; ?>">Download Response<?php //echo $ressdf->Responseinfo; ?></a></td><td><?php
                            $date = date_create($ressdf->Date);
                            echo $updatedat = date_format($date, "Y-m-d");
                //echo $ressdf->Date; ?></td></tr>
                <?php
        $d++;
        }
            ?>

            </tbody>

            </table>
            </div>
               <?php
    }
    function walmartitem(){
        ?>
    <div class="commondiv" style="margin-top:10px;text-align:center;">

    <div style="display:flex;">

    <div style="width:50%">
        <form action="" method="post">
        <!-- <input type="checkbox" name="walmartitem" id="inventorycheckbox">Check box -->
        <input type="hidden" name="itembulkupdate" value="walmartbulkitemfield" class="vi-walmartbulkupdatevalue">
        <img style="display:none;width: 21%;margin-left: 15%;text-align: center;position: absolute;z-index: 1;" class="gifimage" src="<?php echo site_url(); ?>/wp-content/themes/xyzreptiles/assets/images/ajaxload.gif"/>
        <input type="submit" class="button button-primary button-large vi-walmart-bulkcupdate" value="Bulk a Update Item" name="walmartitem_submit">
        </form>
        </div>
        <div style="width:50%">
        <a href="#vicky"><button  class="button button-primary button-large">View Details for the Real Time Call</button></a>
        </div>
        </div>
        <h1>Walmart Item Pushed History with Bulk Updates </h1>
        <table id="myTable" >
        <thead>
        <tr><th>Sl.No</th><th>FeedID</th><th>Request Informaiton</th><th>Response Sample</th><th>Date</th></tr>
        </thead>
        <tbody>
        <?php global $wpdb;
        $result=$wpdb->get_results('SELECT * from wp_walmart_log_information WHERE typeofevent="bulk_item_api" ');
        $d=1;
        foreach($result as $ressdf){
           ?>
            <tr></td><td><?php echo $d; ?></td><td><?php echo $ressdf->Feedid; ?></td><td>
            <?
            $site_url=site_url();
            $message_need_change=$ressdf->Requestinfo;
            $download_path=str_replace("/home/xyzreptiles/public_html",$site_url,$message_need_change); ?>
            <a download href="<?php echo $download_path; ?>">Download Request</a></td><td>
            <?
            $site_url=site_url();
            $message_need_change=$ressdf->Responseinfo;
            $download_path=str_replace("/home/xyzreptiles/public_html",$site_url,$message_need_change);          ?>
            <a download   href="<?php echo $download_path; ?>">Download Response<?php //echo $ressdf->Responseinfo; ?></a></td><td><?php
                        $date = date_create($ressdf->Date);
                        echo $updatedat = date_format($date, "Y-m-d");
            //echo $ressdf->Date; ?></td></tr>
            <?php
    $d++;
    }
        ?>
        </tbody>
        </table>
        <h2> Real Time update log for the Item</h2>
        <table id="vicky" class="myTable">
        <thead>
        <tr><th>Sl.No</th><th>FeedID</th><th>Request Informaiton</th><th>Response Sample</th><th>Date</th></tr>
        </thead>
        <tbody>
        <?php global $wpdb;
        $result=$wpdb->get_results('SELECT * from wp_walmart_log_information WHERE typeofevent="item_update_api"');
        $d=1;
        foreach($result as $ressdf){
           ?>
            <tr ><td><?php echo $d; ?></td><td><?php echo $ressdf->Feedid; ?></td><td>
            <?
            $site_url=site_url();
            $message_need_change=$ressdf->Requestinfo;
            $download_path=str_replace("/home/xyzreptiles/public_html",$site_url,$message_need_change); ?>
            <a download href="<?php echo $download_path; ?>">Download Request</a></td><td>
            <?
            $site_url=site_url();
            $message_need_change=$ressdf->Responseinfo;
            $download_path=str_replace("/home/xyzreptiles/public_html",$site_url,$message_need_change);          ?>
            <a download   href="<?php echo $download_path; ?>">Download Response<?php //echo $ressdf->Responseinfo; ?></a></td><td><?php
                        $date = date_create($ressdf->Date);
                        echo $updatedat = date_format($date, "Y-m-d");
            // echo $ressdf->Date; ?></td></tr>
            <?php
    $d++;
    }
        ?>

        </tbody>

        </table>
        </div>
           <?php

    }

    add_action( 'save_post', 'check_valuesss', 10, 3 );
    function check_valuesss(){
        $current_id=get_the_ID();
        $post = get_post( $current_id );
            if(is_object($post) && $post->post_type=='product' )
            {
        $postmeta_value=get_post_meta($current_id,'add_this_product_to_walmart',true);
        $check_which_field_to_save=get_post_meta($current_id,'update_all_apis',true);
        if($postmeta_value[0]=='yes'){

        $curl = curl_init();
        curl_setopt_array($curl, array(
       CURLOPT_URL => 'https://marketplace.walmartapis.com/v3/token/detail',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => 'grant_type=client_credentials',
      CURLOPT_HTTPHEADER => array(
        'grant_type: client_credentials',
        'WM_SVC.NAME: Walmart Marketplace',
        'WM_QOS.CORRELATION_ID: Test Seller',
        'Authorization:Basic ZmFlZTMxNGQtZDhiMC00ZWMwLWIyODYtZjYwNDg4YzY1ZDRlOmIyV000bmRpYXJkakVQNVBmTkc5Mko4T3NzWi0wVEJNb21MWDdCOU9GNXR4T2llS19JQVBYZmp2elE4T2oxaTVqMTdYdzRoSzZaWHFUWG1Fb1R0SS13',
        'Content-Type: application/x-www-form-urlencoded',
        'Accept: application/json',
        'Cookie: TS01f4281b=0130aff2324e94b8afc0d76d2d012030288d6b429ee42e408e1db04c3261e235416eb82f7ca7ae4b9b550887dac0dd7d4ff565f220'
      ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    $book = json_decode($response);
    $responsecode=$book->access_token;
            $check_which_field_to_save=get_post_meta($current_id,'update_all_apis',true);

            if($check_which_field_to_save=='updateinventory'){
                $product = wc_get_product( $current_id );
                $wal_woo_product = $product->get_type();
                if($wal_woo_product == 'simple'){
                    $status_ofitem=$product->get_stock_status();
                    $product_price=$product->get_price();
                    $product_sku=$product->get_sku();
                    $product_managestock=$product->managing_stock();
                    if($product_managestock){
                        $product_quanity=get_post_meta($listofproducttopushfor_walmart, '_stock' , true );
                    }
                    else {
                        $product_quanity=0;
                    // $product_quanity=get_post_meta($listofproducttopushfor_walmart, '_stock' , true );
                    // echo "test".$product_quanity;
                    }
                    $header_paramertes='{
                        "sku": "'.$product_sku.'",
                        "quantity": {
                        "unit": "EACH",
                        "amount": "'.$product_quanity.'"
                        }
                    },
                    "fulfillmentLagTime": "1"
                    }   ';
                }
                else if($wal_woo_product == 'varibale'){
                    $variations = $product->get_available_variations();
                    $variable_count =sizeof($variations);
                    $product_managestock=$product->managing_stock();
                    if($product_managestock){
                        $product_quanity=get_post_meta($listofproducttopushfor_walmart, '_stock' , true );
                    }
                    else {
                        $product_quanity=5;
                    }
                    for($i=0;$i<$variable_count;$i++){
                        $individual_inventory[]='{
                            "sku": "'.strip_tags($variations[$i]['sku']).'",
                            "quantity": {
                            "unit": "EACH",
                            "amount": "'.$product_quanity.'"
                            }
                        },
                        "fulfillmentLagTime": "1"
                        }   ';
                    }
                    $header_paramertes = implode(',',$individual_inventory);

                }
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://marketplace.walmartapis.com/v3/inventory',
            //   CURLOPT_URL => 'https://marketplace.walmartapis.com/v3/inventory?sku='.$product_sku,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'PUT',
              CURLOPT_POSTFIELDS =>$header_paramertes,
              CURLOPT_HTTPHEADER => array(
                'WM_SVC.NAME: Walmart Marketplace',
                'WM_QOS.CORRELATION_ID: inventoryupdate',
                'Accept: application/json',
                'WM_SEC.ACCESS_TOKEN:'.$responsecode.'',
                'Content-Type: application/json',
                'Authorization: Basic MjEzZWRiN2EtODJmYi00OGZmLWI4YTAtZDI1OGY4ZDYwNTZlOkFOLTdMWFNZcDZMVk9leGlkWkZQc0Z6dmtTQS1TOElteW5ncUpwMnQzc2Fid294bFZDYVQ4c2o5S3ZHWVpnMm5POGxkZEl0MU52Wnd2cWtSRG1jdVVmSQ==',
                'Cookie: TS01f4281b=0130aff232b88d9bac8785f30301520985542e9de42a585742bf02b30d47a9278f6e02b59a1e797b273a2e61da8d59cf2e3b6aa96f'
              ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            $responsesample = json_decode($response);

            $item_type_req='walmart_inventory_request_';
            $item_type_res='walmart_inventory_response_';
            $item_update_item='item_inventory_api';
            $responsecode=$responsesample->feedId;
            }
            if($check_which_field_to_save=='updateprice'){
                $product = wc_get_product( $current_id );
                $wal_woo_product = $product->get_type();
                if($wal_woo_product == 'simple'){
                    $status_ofitem=$product->get_stock_status();
                    $product_price=$product->get_price();
                    $product_sku=$product->get_sku();
                    $header_paramertes='{
                        "sku":"'.$product_sku.'",
                        "pricing":[{
                            "currentPriceType":"BASE",
                            "currentPrice":{
                                "currency":"USD",
                                "amount":'.$product_price.'
                            }
                        }]
                    }';
                    // echo "<hr/>";
                    //echo $header_paramertes;
                    // echo "<hr/>";
                }
                else if($wal_woo_product == 'variable'){
                    $variations = $product->get_available_variations();
                    $variable_count =sizeof($variations);
                    for($i=0;$i<$variable_count;$i++){
                        $walmart_price_update[]='{
                            "sku":"'.strip_tags($variations[$i]['sku']).'",
                            "pricing":[{
                                "currentPriceType":"BASE",
                                "currentPrice":{
                                    "currency":"USD",
                                    "amount":'.$variations[$i]['display_regular_price'].'
                                }
                            }]
                        }';
                    }
                    $header_paramertes =implode(',', $walmart_price_update);
                }
              $curl = curl_init();
              curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://marketplace.walmartapis.com/v3/price',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'PUT',
              CURLOPT_POSTFIELDS =>$header_paramertes,
              CURLOPT_HTTPHEADER => array(
                'WM_SVC.NAME: Walmart Marketplace',
                'WM_SEC.ACCESS_TOKEN:'.$responsecode.'',
                'WM_QOS.CORRELATION_ID: priceupdateapifromcode',
                'Accept: application/json',
                'content-type:  application/json',
                'Authorization: Basic ZmFlZTMxNGQtZDhiMC00ZWMwLWIyODYtZjYwNDg4YzY1ZDRlOmIyV000bmRpYXJkakVQNVBmTkc5Mko4T3NzWi0wVEJNb21MWDdCOU9GNXR4T2llS19JQVBYZmp2elE4T2oxaTVqMTdYdzRoSzZaWHFUWG1Fb1R0SS13',
                'Cookie: TS01f4281b=01c5a4e2f9e93b36ea81e870819354b6e92fe633427d054db0d98670b59730a156ee5895982e54c8cbc17a38bc756aebfb216c3a9b'
              ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
                    $responsesample = json_decode($response);
                    $item_type_req='walmart_price_request_';
                    $item_type_res='walmart_price_response_';
                    $item_update_item='individual_price_api';
            }

            if($check_which_field_to_save=='updateall'){
                $product = wc_get_product($current_id);
                $wal_woo_product = $product->get_type();
                if($wal_woo_product == 'simple'){
                    $walmart_product_weight= $product->get_weight();
                    $walmart_product_length=$product->get_length();
                    $walmart_product_width=$product->get_width();
                    $walmart_product_height=$product->get_height();
                    $walmart_product_dimensions=$product->get_dimensions();
                    $walmart_product_image=$product->get_image();
                    $walmart_product_get_name= $product->get_name();
                    $walmart_product_price = $_POST['_regular_price']; //$product->get_price();
                    $walmart_product_id =$product->get_id();
                    $walmart_product_created= $product->get_date_created();
                    $walmart_product_shortdesc= $product->get_short_description();
                    $walmart_product_sku= strip_tags($product->get_sku());
                    $walmart_product_category=$product->get_categories();

                    $wooproduct_type=$product->get_type();
                    $wal_product_name=$product->get_name();
                    $wal_date_created=$product->get_date_created();
                    $product_price=$product->get_price();
                    $product_quantity=$product->get_stock_quantity();
                    $walmart_product_weight=$product->get_weight();
                    $walmart_product_lenght=$product->get_length();
                    $walmart_product_width=$product->get_width();
                    $walmart_productss=$product->get_height();
                    $spec_name = array();
                    $spec_value = array();

                    if( have_rows('walmart_specifications',$current_id) ):

                        while( have_rows('walmart_specifications',$current_id) ) : the_row();

                            $spec_name[] = get_sub_field('name');
                            $spec_value[] = get_sub_field('value');


                    endwhile;
                    endif;

                    // echo $new_data;
                    //die;
                    $spec_name_count = count($spec_name);
                    $spec_value_count = count($spec_value);

                    $specifications=array();

                        foreach($spec_name as $key=>$value){
                            if($value!='' && $spec_value[$key]!=''){
                                $specifications[$value]=$spec_value[$key];
                            }

                        }

                        //echo "<pre>";
                        //print_r($specifications);
                        if(!empty($specifications)){
                            //echo 'specific-date';
                            $new_data=json_encode($specifications);
                            $new_data=str_replace("{","",$new_data);
                            $new_data=str_replace("}",",",$new_data);
                        }else{
                            //echo "new_date";
                            $new_data='';
                        }
                    if($walmart_productss<1){
                        $walmart_product_height='0'.$walmart_productss;
                    }
                    $walmart_sku=strip_tags($product->get_sku());
                    //$walmart_get_description=strip_tags($product->get_description());
                    global $wpdb;
                    $walmart_get_description = $wpdb->get_results("SELECT `post_content` FROM `wp_posts` WHERE `ID` = $walmart_product_id");
                    $site_des = $walmart_get_description[0]->post_content;
                    $descrip = json_encode($site_des);

                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $current_id ), 'single-post-thumbnail' );
                    //newly added 15.12.2021
                    $walmart_va_img = get_post_meta( $current_id,'walmart_main_image',true);
                    if($walmart_va_img != ''){
                    $walmart_main_img = wp_get_attachment_image_url($walmart_va_img[0],'full');
                    }
                    else{
                        $walmart_main_img = $image[0];
                    }
                    $walmart_prdct_add_img = get_post_meta( $current_id,'walmart_additional_images',true);
                    $walmart_additional_product_count = count($walmart_prdct_add_img);
                    for($j=0;$j<$walmart_additional_product_count;$j++){
                    $walmart_additional_img[] = wp_get_attachment_image_url($walmart_prdct_add_img[$j],'full');
                    }
                    $walmart_xyz_image = '"'. implode('", "', $walmart_additional_img) .'"';
                    //print_r($walmart_xyz_image);
                    if($walmart_prdct_add_img!='')
                    {
                        $walmart_secondary_img='"'."productSecondaryImageURL".'":['.$walmart_xyz_image.'],';
                    }
                    else
                    {
                        $walmart_secondary_img='';
                    }
                    //newly added 15.12.2021
                    $walmart_gtin_id=get_post_meta($current_id,'_woocommerce_gpf_data',true);
                    $wal_gtin_id=$walmart_gtin_id['gtin'];
                    if(!(empty($wal_gtin_id))){
                        $addnumberofzero='';
                        $totalgtinlength=strlen($wal_gtin_id);
                        if($totalgtinlength<14){
                            $findlenght=14-$totalgtinlength;
                            for($di=0;$di<$findlenght;$di++){
                                $addnumberofzero=  $addnumberofzero."0";
                            }
                        }


                        $finalproudctidgtin=$addnumberofzero.$wal_gtin_id;
                        $header_paramertes='{
                            "MPItemFeedHeader": {
                            "subCategory": "animal_accessories",
                            "sellingChannel": "marketplace",
                            "processMode": "REPLACE",
                            "locale": "en",
                            "version": "1.2",
                            "subset": "EXTERNAL"
                            },
                            "MPItem": [
                            {
                                "Visible": {
                                "Animal Accessories": {
                                    '.$new_data.'
                                    "pieceCount": 1,
                                    "countPerPack": 1,
                                    "msrp":'.$walmart_product_price.',
                                    "mainImageUrl": "'.$walmart_main_img.'",
                                    '.$walmart_secondary_img.'
                                    "warrantyText": "Warranty is based on the specific manufacturer of this product.",
                                    "assembledProductHeight": {
                                    "unit": "in",
                                    "measure":1
                                    },
                                    "count": "1",
                                    "shortDescription": '.$descrip.',
                                    "assembledProductWeight": {
                                    "unit": "oz",
                                    "measure": '.$walmart_product_weight.'
                                    },
                                    "assembledProductWidth": {
                                    "unit": "in",
                                    "measure": '.$walmart_product_width.'
                                    },
                                    "manufacturerPartNumber": "'.strip_tags($walmart_sku).'",
                                    "assembledProductLength": {
                                    "unit": "in",
                                    "measure": '.$walmart_product_lenght.'
                                    },
                                    "material": [
                                    "not available"
                                    ],
                                    "modelNumber": "'.strip_tags($walmart_sku).'",
                                    "prop65WarningText": "none"
                                }
                                },
                                "Orderable": {
                                "fulfillmentLagTime": 1,
                                "endDate": "2040-09-01T00:00:00.000Z",
                                "MustShipAlone": "No",
                                "SkuUpdate": "No",
                                "productName": "'.$wal_product_name.'",
                                "productIdentifiers": {
                                    "productId": "'.$finalproudctidgtin.'",
                                    "productIdType": "GTIN"
                                },
                                "ProductIdUpdate": "No",
                                "price": '.$product_price.',
                                "chemicalAerosolPesticide": "No",
                                "sku": "'.strip_tags($walmart_sku).'",
                                "ShippingWeight": '.$walmart_product_weight.',
                                "brand": "XYZReptiles",
                                "startDate": "2021-07-07T00:00:00.000Z"
                                }
                            }
                            ]
                        }';
                        //   echo $header_paramertes;
                        //   die;
                        $curl = curl_init();

                        curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://marketplace.walmartapis.com/v3/feeds?feedType=MP_ITEM',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS =>$header_paramertes,
                        CURLOPT_HTTPHEADER => array(
                            'WM_SVC.NAME: xyzreptiles',
                            'WM_QOS.CORRELATION_ID: xyzreptileslivepushfirstap',
                            'Accept: application/json',
                            'WM_SEC.ACCESS_TOKEN:'.$responsecode,
                            'Content-Type: application/json',
                            'Authorization: Basic ZmFlZTMxNGQtZDhiMC00ZWMwLWIyODYtZjYwNDg4YzY1ZDRlOmIyV000bmRpYXJkakVQNVBmTkc5Mko4T3NzWi0wVEJNb21MWDdCOU9GNXR4T2llS19JQVBYZmp2elE4T2oxaTVqMTdYdzRoSzZaWHFUWG1Fb1R0SS13',
                            'Cookie: TS01f4281b=0130aff232733228bbea74c7305d04cf02a7cf22a1e498c93f61b1b6631d668fba23a59993545c5f89f8f964f8e7cbd40059e1cbe3'
                        ),
                        ));

                        $response = curl_exec($curl);
                        curl_close($curl);
                        $responsesample = json_decode($response);
                        $item_update_item='item_update_api';
                        $item_type_req='walmart_item_api_request_';
                        $item_type_res='walmart_item_api_response_';
                    }
                }
                else if($wal_woo_product == 'variable'){
                    $walmart_product_weight= $product->get_weight();
            $walmart_product_length=$product->get_length();
            $walmart_product_width=$product->get_width();
            $walmart_product_height=$product->get_height();
            $walmart_product_dimensions=$product->get_dimensions();
            $walmart_product_image=$product->get_image();
            $walmart_product_get_name= $product->get_name();
            // $walmart_product_price = $_POST['_regular_price']; //$product->get_price();
            $walmart_product_ids =$product->get_id();
            $walmart_product_created= $product->get_date_created();
            $walmart_product_shortdesc= $product->get_short_description();
            // $walmart_product_sku= strip_tags($product->get_sku());
            $walmart_product_category=$product->get_categories();
            $wooproduct_type=$product->get_type();
            $product_attributes = $product->get_attributes(); //for varient product
            $newArray = array_keys($product_attributes);
            $attribute_name=$newArray[0];
            $attribute_name1 = $newArray[1];
            $product_attr_name = substr($attribute_name, 3);
            // echo $attribute_name1;
            // die;
            if($attribute_name1!='')
            {
                $product_attr_name1 = substr($attribute_name1, 3);
            }
            $variations = $product->get_available_variations();
            //echo "<pre>";
            //print_r($variations);
            $variation_count = count($variations);
            $variations_id = array();
            for($v=0;$v<$variation_count;$v++){
                $variations_id[] = $variations[$v]['variation_id'];
            }
            sort($variations_id);
            $variable_count = count($variations_id);
            //echo "sorting";
            //print_r($variable_count);
            //$variations_id = sort($variation_sort);
            //echo "text".$variations_id;

            //$variable_count =sizeof($variations);
            //$variations_id = wp_list_pluck( $variations, 'variation_id' );

            $variant1_id =  $variations_id[0];
            $variant2_id =  $variations_id[1];
            $variant3_id =  $variations_id[2];
            $variant4_id =  $variations_id[3];
            $variant5_id =  $variations_id[4];
            $variant6_id =  $variations_id[5];
            $parent_sku = $product->get_sku();
            $wal_product_name=$product->get_name();
            $wal_date_created=$product->get_date_created();
            global $wpdb;
            $database_gtin = $wpdb->get_results("SELECT * FROM `wp_postmeta` WHERE `post_id` IN ($variant1_id,$variant2_id,'$variant3_id','$variant4_id','$variant5_id','$variant6_id') AND `meta_key` LIKE '_woocommerce_gpf_data'");
            // print_r($database_gtin);
            //$variant_decode = base64_decode($database_gtin[0]->meta_value);
            for($i=0;$i<$variable_count;$i++){
            // $categry1_chunk = explode('gtin";s:12:"', $database_gtin[$i]->meta_value);
            $string_var = unserialize($database_gtin[$i]->meta_value);
            $origial_gtin = $string_var['gtin'];
            $variable_gtin[] = $origial_gtin;
            }
            //echo "<pre>";
            //print_r($variable_gtin);
            $walmart_product = $variable_gtin[0];
            $walmart_product1 = $variable_gtin[1];
            $walmart_product2 = $variable_gtin[2];
            $walmart_product3 = $variable_gtin[3];
            $walmart_product4 = $variable_gtin[4];
            $walmart_product_id0 = sprintf('%014d', $walmart_product);
            $walmart_product_id1 = sprintf('%014d', $walmart_product1);
            $walmart_product_id2 = sprintf('%014d', $walmart_product2);
            $walmart_product_id3 = sprintf('%014d', $walmart_product3);
            $walmart_product_id4 = sprintf('%014d', $walmart_product4);
            $product_gtin_id = array($walmart_product_id0,$walmart_product_id1,$walmart_product_id2,$walmart_product_id3,$walmart_product_id4);
            // print_r($product_gtin_id);
            //$walmart_get_description=strip_tags($product->get_description());
            global $wpdb;
            $walmart_get_description = $wpdb->get_results("SELECT `post_content` FROM `wp_posts` WHERE `ID` = $walmart_product_ids");
            $site_des = $walmart_get_description[0]->post_content;
            $descrip = json_encode($site_des);
            // $image = wp_get_attachment_image_src( get_post_thumbnail_id( $listofproducttopushfor_walmart ), 'single-post-thumbnail' );
            //$walmart_description = preg_replace('/\s+/', ' ',$walmart_get_description);
            // $walmart_description = preg_replace('/\s+/',$walmart_get_description);
            // $walmart_gtin_id=get_post_meta($listofproducttopushfor_walmart,'_woocommerce_gpf_data',true);

            if($product_attr_name == "millet"){
                $product_attr_name = "size";
            }
            if($product_attr_name == "pack"){
                $product_attr_name = "countPerPack";
            }
            if($variations[0]['attributes']['attribute_'.$attribute_name]=='single'){
            $variations[0]['attributes']['attribute_'.$attribute_name] = 1;
            // echo $variations[0]['attributes']['attribute_'.$attribute_name];
            }
            if($variations[1]['attributes']['attribute_'.$attribute_name]=='2-pack'){
            $variations[1]['attributes']['attribute_'.$attribute_name] = 2;
            // echo $variations[1]['attributes']['attribute_'.$attribute_name];
            }
            if($variations[2]['attributes']['attribute_'.$attribute_name]=='3-pack'){
            $variations[2]['attributes']['attribute_'.$attribute_name] = 3;
            // echo $variations[2]['attributes']['attribute_'.$attribute_name];
            }
            if($product_attr_name1 != ''){
            $original_attribute =  '"'.$product_attr_name.'","'.$product_attr_name1.'"';
            }
            else{
            $original_attribute = '"'.$product_attr_name.'"';
            }
            // echo "check attributes";
            // echo $parent_sku;
            // echo $original_attribute;
            // echo"second_attribute $second_attribute";
            $spec_ovral_name = array();
            if( have_rows('walmart_variant_specifications',$current_id) ):
                while( have_rows('walmart_variant_specifications',$current_id) ) : the_row();
                $spec_var_name = array();
                $spec_var_value = array();

                    if( have_rows('walmart_variable_repeater',$current_id) ):
                        while( have_rows('walmart_variable_repeater',$current_id) ) : the_row();

                            $spec_var_name[] = get_sub_field('name');
                            $spec_var_value[] = get_sub_field('value');

                        endwhile;
                    endif;
                    //echo "<pre>";
                    //print_r($spec_var_name);
                    $variant_specific = array();
                    foreach($spec_var_name as $key=>$value){
                        //echo $variant_specific;
                        if($value!='' && $spec_var_value[$key]!=''){
                            $variant_specific[$value]=$spec_var_value[$key];
                        }

                    }
                    $specific_variable=json_encode($variant_specific);
                    $specific_variable=str_replace("{","",$specific_variable);
                    $specific_variable=str_replace("}",",",$specific_variable);

                    $spec_ovral_name[] =  $specific_variable;
                endwhile;
            endif;

            $walmart_va_img = get_post_meta( $current_id,'walmart_main_image',true);
            $count_img1 = array();
            if( have_rows('walmart_variable_product_images',$walmart_product_ids) ):

                while( have_rows('walmart_variable_product_images',$walmart_product_ids) ) : $i=0; the_row();

                    $sub_value = get_sub_field('walmart_additional_image1');
                    $img_count = count($sub_value);

                    $count_img=array();
                    foreach($sub_value as $key=>$img_datas){
                        $count_img[$i] = $img_datas['url'];
                        //echo 'Mathi_'.$i.'_'.$img_datas['url'];
                        $i++;

                    }
                    $count_img1[]=$count_img;
                    echo "testttt";
                    print_r($count_img1);
                endwhile;

                // No value.
                else :
                echo "no repeater";
                endif;
                //echo "tstttt1";
                //print_r($count_img1);
                $img_cnt = count($count_img1);
                //echo 'mathi'.$img_cnt;
                //die;
                $total_arr = array();
                for($y = 0; $y < $img_cnt ; $y++){

                $count1_img = $count_img1[$y];
                $total_arr[] = '"'.implode('","',$count1_img).'"';

                }

            $walmart_prdct_add_img = get_post_meta( $current_id,'walmart_additional_images',true);
            $walmart_additional_product_count = count($walmart_prdct_add_img);
            for($j=0;$j<$walmart_additional_product_count;$j++){
            $walmart_additional_img[] = wp_get_attachment_image_url($walmart_prdct_add_img[$j],'full');
            }
            $walmart_xyz_image = '"'. implode('", "', $walmart_additional_img) .'"';
            // $walmart_xyz_image = "'" . implode ( "', '", $walmart_additional_im ) . "'";
            //print_r($walmart_xyz_image);
            if($walmart_prdct_add_img!='')
            {
                $walmart_secondary_img='"'."productSecondaryImageURL".'":['.$walmart_xyz_image.'],';
            }
            else
            {
                $walmart_secondary_img='';
            }
            if(!(empty($walmart_product))){

                for($i=0;$i<$variable_count;$i++){
                    // echo $walmart_product;
                    // die;

                    if($walmart_va_img != ''){
                        $walmart_main_img = wp_get_attachment_image_url($walmart_va_img[$i],'full');
                    }
                    else{
                        $walmart_main_img = $variations[$i]['image']['src'];
                    }
                    $walmart_productss = $variations[$i]['dimensions']['height'];
                    if($walmart_productss<1){
                        $walmart_product_height='0'.$walmart_productss;
                    }
                    $tedr = $variations[$i]['attributes']['attribute_'.$attribute_name];
                    $ttre = is_string($tedr);
                    if($ttre == 1){
                        $test= '"'.$tedr.'"';
                        $attribute_name_type=$test;
                    }
                    else
                    {
                        $attribute_name_type=$variations[$i]['attributes']['attribute_'.$attribute_name];
                    }
                    $secnd_vble = $variations[$i]['attributes']['attribute_'.$attribute_name1];
                    $second_var = is_string($secnd_vble);
                    if($second_var == 1){
                     $second = '["'.$secnd_vble.'"]';
                     $attribute_name_type1 =  $second;
                    }
                    else{
                        $attribute_name_type1 = $variations[$i]['attributes']['attribute_'.$attribute_name1];
                    }
                    if($attribute_name1 == ''){
                        $attribute_name_type1= '""';
                    }
                    if($primary_id[$i] == $primary_id[0]){
                        $primary_id[$i] = "Yes";
                     }else {
                         $primary_id[$i] = "No";
                     }
                     if($product_attr_name1!='' && $attribute_name_type1!='')
                     {
                         $second_attribute='"'.$product_attr_name1.'":'.$attribute_name_type1.',';
                     }
                     else
                     {
                         $second_attribute='';
                     }

                     $walmart_variable_img =array();
                     if(count($total_arr) > 0)
                     {
                    // if($total_arr[$i] != ''){
                    //     echo "sandu".$total_arr[$i];
                    if(!empty($total_arr[$i])){
                        $walmart_variable_img='"'."productSecondaryImageURL".'":['.$total_arr[$i].'],';

                    }else{
                        $walmart_variable_img='';

                    }

                    // }

                    }
                    if(count($walmart_variable_img)>0){
                        $walmrt_var = $walmart_variable_img;
                    }
                     else
                     {
                         $walmrt_var = '';
                     }


                    $repeater_body_content[]='{
                        "Visible": {
                        "Animal Accessories": {
                            '.$spec_ovral_name[$i].'
                            "pieceCount": 1,
                            "countPerPack": 1,

                            "msrp":'.$variations[$i]['display_regular_price'].',
                            "variantGroupId":"'.addslashes($parent_sku).'",
                            "variantAttributeNames":[
                                '.$original_attribute.'
                            ],
                            "'.$product_attr_name.'":'.$attribute_name_type.',
                           '.$second_attribute.'
                            "isPrimaryVariant":"'.$primary_id[$i].'",
                            "mainImageUrl": "'.$walmart_main_img.'",
                            '.$walmrt_var.'
                            "warrantyText": "Warranty is based on the specific manufacturer of this product.",
                            "assembledProductHeight": {
                            "unit": "in",
                            "measure":'.$walmart_product_height.'
                            },
                            "count": "0",
                            "shortDescription": '.$descrip.',
                            "assembledProductWeight": {
                            "unit": "oz",
                            "measure": '.$variations[$i]['weight'].'
                            },
                            "assembledProductWidth": {
                            "unit": "in",
                            "measure": '.$variations[$i]['dimensions']['width'].'
                            },
                            "manufacturerPartNumber": "'.strip_tags($variations[$i]['sku']).'",
                            "assembledProductLength": {
                            "unit": "in",
                            "measure": '.$variations[$i]['dimensions']['length'].'
                            },
                            "material": [
                            "not available"
                            ],
                            "modelNumber": "'.strip_tags($variations[$i]['sku']).'",
                            "prop65WarningText": "none"
                        }
                        },
                        "Orderable": {
                        "fulfillmentLagTime": 1,
                        "endDate": "2040-09-01T00:00:00.000Z",
                        "MustShipAlone": "No",
                        "SkuUpdate": "No",
                        "productName": "'.$wal_product_name.'",
                        "productIdentifiers": {
                            "productId": "'.$product_gtin_id[$i].'",
                            "productIdType": "GTIN"
                        },
                        "ProductIdUpdate": "No",
                        "price": '.$variations[$i]['display_regular_price'].',
                        "chemicalAerosolPesticide": "No",
                        "sku": "'.strip_tags($variations[$i]['sku']).'",
                        "ShippingWeight": '.$variations[$i]['weight'].',
                        "brand": "XYZReptiles",
                        "startDate": "2021-07-07T00:00:00.000Z"
                        }
                    }';

                }
            }
                    $repeater_body_content_converted=implode(',',$repeater_body_content);
                    $header_paramertes='{
                    "MPItemFeedHeader": {
                    "subCategory": "animal_accessories",
                    "sellingChannel": "marketplace",
                    "processMode": "REPLACE",
                    "locale": "en",
                    "version": "1.2",
                    "subset": "EXTERNAL"
                    },
                    "MPItem": ['. $repeater_body_content_converted.']
                    }';

                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://marketplace.walmartapis.com/v3/feeds?feedType=MP_ITEM',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS =>$header_paramertes,
                    CURLOPT_HTTPHEADER => array(
                        'WM_SVC.NAME: xyzreptiles',
                        'WM_QOS.CORRELATION_ID: xyzreptileslivepushfirstap',
                        'Accept: application/json',
                        'WM_SEC.ACCESS_TOKEN:'.$responsecode,
                        'Content-Type: application/json',
                        'Authorization: Basic ZmFlZTMxNGQtZDhiMC00ZWMwLWIyODYtZjYwNDg4YzY1ZDRlOmIyV000bmRpYXJkakVQNVBmTkc5Mko4T3NzWi0wVEJNb21MWDdCOU9GNXR4T2llS19JQVBYZmp2elE4T2oxaTVqMTdYdzRoSzZaWHFUWG1Fb1R0SS13',
                        'Cookie: TS01f4281b=0130aff232733228bbea74c7305d04cf02a7cf22a1e498c93f61b1b6631d668fba23a59993545c5f89f8f964f8e7cbd40059e1cbe3'
                    ),
                    ));
                    $response = curl_exec($curl);
                    curl_close($curl);
                    $responsesample = json_decode($response);
                    $item_update_item='item_update_api';
                    $item_type_req='walmart_item_api_request_';
                    $item_type_res='walmart_item_api_response_';

                }
            }

            $responsecode=$responsesample->feedId;
            global $wpdb;
            $file_name= strtotime("now");
            $file_saving_name=$file_name;
            $file_saving_name_req=$item_type_req.$file_name;
            $file_saving_name_res=$item_type_res.$file_name;
             $paths = __DIR__.'/walmartrequestandresponse/'.$file_saving_name_res.'.txt';
            $vickybahi= fopen($paths, "w");
            fwrite($vickybahi,$response);
            fclose($vickybahi);
             $request_paths = __DIR__.'/walmartrequestandresponse/'.$file_saving_name_req.'.txt';
            if(empty($responsecode)){
                $responsecode='No Feed Id found.';
            }
            $requestinfor_open= fopen($request_paths, "w");
            fwrite($requestinfor_open,$header_paramertes);
            fclose($requestinfor_open);
            $value= $wpdb->insert('wp_walmart_log_information', array(
             'Status' => '-',
             'Feedid' => $responsecode,
             'Requestinfo' => $request_paths,
             'Responseinfo'=>$paths,
             'typeofevent'=>$item_update_item
            ));
        }

    }
}
function orb_check_for_out_of_stock_products() { // to remove the out of stock product
    if ( WC()->cart->is_empty() ) {
        return;
    }
    $removed_products = [];
    foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        // echo "<pre>";
        // print_r($cart_item);

        $product = $cart_item['data'];
        $product_decde = json_decode($product,true);
        $product_stock = $product_decde['stock_quantity'];
        // $product_manage_stck = $product_decde['manage_stock'];
        // echo $product_manage_stck;
        if (  $product_stock == 0 && $product->managing_stock()) {
            WC()->cart->remove_cart_item( $cart_item_key );
            $removed_products[] = $product_stock;
            // echo $product_decde['name'];
        }
    }
}

add_action('woocommerce_before_cart', 'orb_check_for_out_of_stock_products');
//added by chandra 24.09.2021

add_filter( 'woocommerce_product_add_to_cart_text', function( $text ) {
    if(is_product()){
	global $product;
    $productid = $product->get_id();
//   echo $productid.'proid';
	if ( $product->is_type( 'variable' ) ) {
          $product_manage_stock = $product->get_manage_stock();
          $in_stock=$product->is_in_stock();
        //  echo 'mathi'. $in_stock;

    if($product_manage_stock == '1'){
    //    echo 'chandra';

        $available_variations = $product->get_available_variations();
        // echo'<pre>';
        // print_r($product);

		foreach ($available_variations as $key => $value)
			{
				$variation_id = $value['variation_id'];

				//$attribute_pa_colour = $value['attributes']['attribute_pa_colour'];
				$variation_obj = new WC_Product_variation($variation_id);
				$stock_qnty[] = $variation_obj->get_stock_quantity();
                // echo '<pre>';
                // print_r($stock_qnty);
			}
            $stock_status = array_sum($stock_qnty);
            // echo $stock_status;
            if($stock_status==0){
		    $text = $product->is_purchasable() ? __( 'Join Waitlist', 'woocommerce' ) : __( 'Read more', 'woocommerce' );
        ?>
        <style>
                            a[data-product_id=$productid] {
background: #fff !important;
        color: #000 !important;
        border: 1px solid #000 !important;
}
            .product.woocommerce.add_to_cart_inline a.add_to_cart_button{color: #000 !important;background-color: transparent !important;border-color: #000 !important;}
        </style>
          <?php  }
    }
    else{
        if ( !$in_stock) {
    //    echo 'chandra1';
            $available_variations = $product->get_available_variations();

            foreach ($available_variations as $key => $value)
                {
                    $variation_id = $value['variation_id'];

                    //$attribute_pa_colour = $value['attributes']['attribute_pa_colour'];
                    $variation_obj = new WC_Product_variation($variation_id);
                    $stock_qnty[] = $variation_obj->get_stock_quantity();

                }
                $stock_status = array_sum($stock_qnty);
                if($stock_status==0){
                $text = $product->is_purchasable() ? __( 'Join Waitlist', 'woocommerce' ) : __( 'Read more', 'woocommerce' );
            ?>
            <style>
                .product.woocommerce.add_to_cart_inline a.add_to_cart_button{color: #000 !important;background-color: transparent !important;border-color: #000 !important;}
                a[data-product_id=$productid] {
background: #fff !important;
        color: #000 !important;
        border: 1px solid #000 !important;
}
            </style>
              <?php  }
        }
    }
}
}
	return $text;

}, 10 );


function add_cart_variant_remove_function(){
    global $woocommerce;
        $items = $woocommerce->cart->get_cart();

            foreach($items as $item => $values) {
                $productId = $values['product_id'];
                $product_detail = wc_get_product($productId);
                if($product_detail -> is_type('variable') && $values['variation_id'] == 0){
                    WC()->cart->remove_cart_item($item);
                    header('Location: '.$_SERVER['REQUEST_URI']);


                }
    }
    }
    add_action('woocommerce_before_cart', 'add_cart_variant_remove_function');

// Add product new column in administration
add_filter('manage_product_posts_columns', 'total_waitlist_column_into_product_list');
function total_waitlist_column_into_product_list($columns) {
    $columns['total_waitlist'] = 'Waitlist';
    return $columns;
}

//Add option for waitlist in product page
add_action( 'manage_product_posts_custom_column' , 'total_waitlist_into_product_list', 10, 2 );
function total_waitlist_into_product_list($column, $post_id ){
	global $woocommerce, $product;

  if ($product->product_type == 'variable') {
			 $available_variations = $product->get_available_variations();

			 $vari = $available_variations[1]['attributes']['attribute_pa_size'];

			 $first_variation = $available_variations[0]['variation_id'];
			 $second_variation = $available_variations[1]['variation_id'];
			 $male_list_array = get_post_meta( $first_variation , 'woocommerce_waitlist' , true );
			 if($male_list_array)
			 {
			 	$male_waitlist = count($male_list_array);
			 }
			 $male_stock = get_post_meta( $first_variation , '_stock' , true );
			 $female_list_array = get_post_meta( $second_variation , 'woocommerce_waitlist' , true );
			 if($female_list_array)
			 {
			 	$female_waitlist = count($female_list_array);
			 }
			 $female_stock = get_post_meta( $second_variation , '_stock' , true );

		 switch ( $column ) {
			case 'total_waitlist': {

				// if($male_waitlist != 0 || $female_stock != 0) {
                    $total_waitlist = $male_waitlist + $female_waitlist;
                    if($total_waitlist > 0){
                        echo $total_waitlist;
                    }else{
                        echo "-";
                    }

                // }

			}

		 }
  }

  else{
    // echo 'sdvsdvf';
		$waitlist = get_post_meta( $post_id , 'woocommerce_waitlist' , true );
		$stock = get_post_meta( $post_id , '_stock' , true );
         if($waitlist != ''){
        $total_waitlist = count($waitlist);
        }else{
            $total_waitlist = 0;
        }
        switch ( $column ) {
			case 'total_waitlist': {
                    if($total_waitlist > 0){
                        echo $total_waitlist;
                    }else{
                        echo "-";
                    }
			}

		 }
	//    switch ( $column ) {
		// case 'total_waitlist': if(! $waitlist == 0 & $stock <=  0){ echo count($waitlist);}
	   }
//    }
}

function featuredtoRSS($content) {
    global $post;
     if ( has_post_thumbnail( $post->ID ) ){
      $content = '<div>' . get_the_post_thumbnail( $post->ID, 'medium', array( 'style' => 'margin-bottom: 15px;' ) ) . '</div>' . $content;
     }
    return $content;
    }

    add_filter('the_excerpt_rss', 'featuredtoRSS');
    add_filter('the_content_feed', 'featuredtoRSS');
//function custom_url_forward() {
//    if ( $_SERVER['REQUEST_URI'] == '/reptiles/reptiles-wholesale/' ) {
//        wp_redirect( "/" );
//        exit();
//    }else{
//        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
//        $url = "https://";
//        else
//        $url = "http://";
//        $url.= $_SERVER['HTTP_HOST'];
//        $url.= $_SERVER['REQUEST_URI'];
//        $url_components = parse_url($url);
//        $test_url = $url_components['path'];
//        $slash_exp = explode('/',$test_url);
//        $hypen_exp = explode('-',$slash_exp[2]);
//        if(in_array('wholesale', $hypen_exp)){
//            wp_redirect( "/" );
//            exit();
//        }
//    }
//}
//add_action( 'template_redirect', 'custom_url_forward' );