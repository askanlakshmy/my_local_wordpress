<?php add_theme_support( 'custom-logo' );

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


function learningwp_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
	// wp_enqueue_style('header', get_stylesheet_uri());
	// wp_enqueue_style('custom-slider',get_stylesheet_directory_uri().'../css/custom-slider.css','');
    // wp_enqueue_style('fontawsome',get_stylesheet_uri().'../css/fontawsome.css','');
	// custom-slider.css
}
add_action('wp_enqueue_scripts', 'learningwp_resources');

// Menu bar
function register_my_menus()
 {
    register_nav_menus(
    array(
 'header-menu' => __('header-menu'),
 'sub-menu' => __('sub-menu'),
 'mobile_menu' => __('Mobile Menu'),
 'footer-menu1' => __('footer-menu1'),
 'footer-menu2' => __('footer-menu2'),
 'product_footer-menu' => __('product_footer-menu'),
 'quick_menu' => __('quick_menu'),
 'policies_menu' => __('policies_menu'),
 'our_network' => __('our_network'),
 'quick_link_mob' => __('quick_link_mob'),
 'policies_mob' => __('policies_mob'),
 'our_network_mob' => __('our_network_mob')
));
}
  add_action( 'init', 'register_my_menus' );

  function add_menuclass($ulclass) {

    return preg_replace('/<a /', '<a class="nav__link"', $ulclass);

 }

 add_filter('wp_nav_menu','add_menuclass');


// register a mobile menu
function wdm_register_mobile_menu() {
    add_theme_support( 'nav-menus' );
    register_nav_menus( array('mobile-menu' => __( 'Mobile Menu', 'wdm' )) );
}
add_action( 'init', 'wdm_register_mobile_menu' );


function webp_upload_mimes( $existing_mimes ) {
    // add webp to the list of mime types
    $existing_mimes['webp'] = 'image/webp';
    // return the array back to the function with our added mime type
    return $existing_mimes;
}
add_filter( 'mime_types', 'webp_upload_mimes' );
//** * Enable preview / thumbnail for webp image files.*/
function webp_is_displayable($result, $path) {
    if ($result === false) {
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );
        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }
    return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);


if( function_exists('acf_add_options_page') ) {

    acf_add_options_sub_page('Notification bar');
}
if( function_exists('acf_add_options_page') ) {

    acf_add_options_sub_page('Choose SEction');
}

// minicart count
function filter__woocommerce_add_to_cart_fragments($fragments) {
    ob_start(); ?>
    <div class="number bold">
        <?php echo sprintf( '%d', WC()->cart->cart_contents_count ); ?>
    </div>

    <?php
    $fragments['#desktopcart .cart_count'] = ob_get_clean();
    return $fragments;
}

add_filter( 'woocommerce_add_to_cart_fragments', 'filter__woocommerce_add_to_cart_fragments' );


add_theme_support( 'woocommerce' );


// short description
add_action( 'woocommerce_before_shop_loop_item', 'woo_show_excerpt_shop_page', 5 );
function woo_show_excerpt_shop_page() {
    global $product; ?>
    <p class="one_liners">
    <?php   $description_short = $product->post->post_excerpt;
    $des = substr($product->post->post_excerpt ,0 ,40);
    $colon = "...";
    $short_description = $des."".$colon;
     echo $short_description; ?> </p>

<?php
} ?>
<?php
// search form
add_filter( 'get_product_search_form' , 'woo_custom_product_searchform' );
function woo_custom_product_searchform( $form ) {
    $form = '<form role="search" method="get" id="searchform" action="' . esc_url( home_url( '/'  ) ) . '">
    <div>
      <label class="screen-reader-text" for="s">' . __( 'Search for:', 'woocommerce' ) . '</label>
      <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __( 'My Search form', 'woocommerce' ) . '" />
      <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search', 'woocommerce' ) .'" />
      <input type="hidden" name="post_type" value="product" />
    </div>
  </form>';
    return $form;
}

function custom_search_result($query) {
    if($query->is_main_query() && !is_admin() && $query->is_search()) {
        $query->set('post_type',array('post'));
        $query->set('post_per_page', 3);
    }
}


add_action('woocommerce_after_add_to_cart_button','webrpoint');
function webrpoint() {
  $product_id = get_the_ID();
  $poduct = wc_get_product($product_id);
  $checkout_url = wc_get_checkout_url();
  if($poduct->is_type('simple')) {
    echo '<a href="'.$checkout_url.'?add_to_cart='.$product_id.'">BUY NOW</a>';
  }
}

// widget
function wpb_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Footer 1', 'wpb' ),
        'id' => 'footer-1',
        'description' => __( 'The bottom bar appears on each page', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
    add_action( 'widgets_init', 'wpb_widgets_init' );

    // mobile filter widget
function wpb_widgets_init1() {
    register_sidebar( array(
        'name' => __( 'Filter Mobile', 'wpb' ),
        'id' => 'mobile-filter-1',
        'description' => __( 'The bottom bar appears on each page', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
    add_action( 'widgets_init', 'wpb_widgets_init1' );

// price filter widget
function wpb_widgets_init2() {
    register_sidebar( array(
        'name' => __( 'Filter Sort', 'wpb' ),
        'id' => 'mobile-sort-1',
        'description' => __( 'The bottom bar appears on each page', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
    add_action( 'widgets_init', 'wpb_widgets_init2' );


    /*
     ==================
     * WooCommerce Ajax Product Search Code
     * Live search product Search with Category filter
    ======================
    */
    // ajax fetch function
    add_action( 'wp_footer', 'ajax_fetch' );
    function ajax_fetch() {
    ?>
    <script type="text/javascript">
    function search_fetch(){

        jQuery.ajax({
            url: '<?php echo admin_url('admin-ajax.php'); ?>',
            type: 'post',
            data: { action: 'data_fetch', keyword: jQuery('#keyword').val(), pcat: jQuery('#cat').val() },
            success: function(data) {
                jQuery('#datafetch').html( data );
            }
        });

    }
    </script>

    <?php
    }

    // the ajax function
    add_action('wp_ajax_data_fetch' , 'data_fetch');
    add_action('wp_ajax_nopriv_data_fetch','data_fetch');
    function data_fetch(){
        if ($_POST['pcat']) {
            $product_cat_id = array(esc_attr( $_POST['pcat'] ));
        }else {
            $terms = get_terms( 'product_cat' );
            $product_cat_id = wp_list_pluck( $terms, 'term_id' );
        }
        $the_query = new WP_Query(
            array(
                'posts_per_page' => -1,
                's' => esc_attr( $_POST['keyword'] ),
                'post_type' => array('product'),

                'tax_query' => array(
                    array(
                        'taxonomy'  => 'product_cat',
                        'field'     => 'term_id',
                        'terms'     => $product_cat_id,
                        'operator'  => 'IN',
                    )
               )
            )
        );
        if( $the_query->have_posts() ) :
            echo '<ul>';
            while( $the_query->have_posts() ): $the_query->the_post(); ?>

                <li><a href="<?php echo esc_url( post_permalink() ); ?>"><span><?php the_post_thumbnail('thumbnail')?></span><?php the_title();?></a></li>

            <?php endwhile;
           echo '</ul>';
            wp_reset_postdata();
        endif;

        die();
    }

    function wp_search_filter($query) {
        $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        if ( (strpos($url,'post_type=product') !== false) && is_search() ) {
            $query->set('post_type', 'product');
        }
        return $query;
    }

    add_filter('pre_get_posts','wp_search_filter');

// Quantity design for product page

/* Woocommerce Custom Theme Support hooks */
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
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

add_filter ( 'woocommerce_product_thumbnails_columns', 'bbloomer_change_gallery_columns' );

function bbloomer_change_gallery_columns() {
     return 1;
}

add_filter ( 'storefront_product_thumbnail_columns', 'bbloomer_change_gallery_columns_storefront' );

function bbloomer_change_gallery_columns_storefront() {
     return 1;
}


// increament decreament product functionality
add_action( 'woocommerce_after_quantity_input_field', 'bbloomer_display_quantity_plus' );

function bbloomer_display_quantity_plus() {
   echo '<button type="button" class="plus" >+</button>';
}

add_action( 'woocommerce_before_quantity_input_field', 'bbloomer_display_quantity_minus' );

function bbloomer_display_quantity_minus() {
   echo '<button type="button" class="minus" >-</button>';
}

// -------------
// 2. Trigger update quantity script

add_action( 'wp_footer', 'bbloomer_add_cart_quantity_plus_minus' );

function bbloomer_add_cart_quantity_plus_minus() {

   if ( ! is_product() && ! is_cart() ) return;

   wc_enqueue_js( "

      $('form.cart,form.woocommerce-cart-form').on( 'click', 'button.plus, button.minus', function() {

         var qty = $( this ).parent( '.quantity' ).find( '.qty' );
         var val = parseFloat(qty.val());
         var max = parseFloat(qty.attr( 'max' ));
         var min = parseFloat(qty.attr( 'min' ));
         var step = parseFloat(qty.attr( 'step' ));

         if ( $( this ).is( '.plus' ) ) {
            if ( max && ( max <= val ) ) {
               qty.val( max );
               $('.stock_limit').text('Stock limit crossed');
            } else {
               qty.val( val + step );
            }
         } else {
            if ( min && ( min >= val ) ) {
               qty.val( min );
            } else if ( val > 1 ) {
               qty.val( val - step );
               $('.stock_limit').text('');
            }
         }

      });

   " );
}

// // cart increament
// function wif_woocommerce_header_add_to_cart_fragment($fragments) {
// ob_start();
// echo '<span id="cart_count">';
// if(WC()->cart->cart_contents_count == 0) {
//     echo sprintf('%d', 'No Products in the Cart');
//     exit();
// }else{
//    echo sprintf('%d', WC()->cart->cart_contents_count);
// }
// echo '</span>';
// $fragments['#minicart #cart_count'] = ob_get_clean();
// return $fragments;
// }
// add_filter('woocommerce_add_to_cart_fragments', 'wif_woocommerce_header_add_to_cart_fragment');

// change the text of stock text
// function puri_woocommerce_get_availability_text( $text, $product ) {
//     if (!$product->is_in_stock()) {
//         $text = 'Sold out';
//     } else {
//     // You can add more conditions here. e.g if product is available.
//     $text = 'In Stock';
//     }
//     return $text;
// }

// add_filter( 'woocommerce_get_availability_text', 'puri_woocommerce_get_availability_text', 999, 2);
add_action( 'woocommerce_after_shop_loop_item', 'bbloomer_show_stock_shop', 10 );
  
function bbloomer_show_stock_shop() {
   global $product;
   echo wc_get_stock_html( $product );
}
add_filter( 'woocommerce_add_to_cart_fragments', 'header_add_to_cart_fragment', 30, 1 );
function header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;

    ob_start();

    ?>
    <a class="cart-customlocation testing" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"><span class="badge count-label" id="cart_count"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></span></a>
    <?php
    $fragments['a.cart-customlocation'] = ob_get_clean();

    return $fragments;
}
function ql_woocommerce_ajax_add_to_cart_js() {
    if (function_exists('is_product') && is_product()) {
       wp_enqueue_script('custom_script', '/wp-content/themes/madmorlic/js/ajax-add-to-cart.js');
    }
}
add_action('wp_enqueue_scripts', 'ql_woocommerce_ajax_add_to_cart_js');

add_action('wp_ajax_ql_woocommerce_ajax_add_to_cart', 'ql_woocommerce_ajax_add_to_cart');
add_action('wp_ajax_nopriv_ql_woocommerce_ajax_add_to_cart', 'ql_woocommerce_ajax_add_to_cart');
function ql_woocommerce_ajax_add_to_cart() {
    $product_id = apply_filters('ql_woocommerce_add_to_cart_product_id', absint($_POST['product_id']));
    $quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);
    $variation_id = absint($_POST['variation_id']);
    $passed_validation = apply_filters('ql_woocommerce_add_to_cart_validation', true, $product_id, $quantity);
    $product_status = get_post_status($product_id);
    if ($passed_validation && WC()->cart->add_to_cart($product_id, $quantity, $variation_id) && 'publish' === $product_status) {
        do_action('ql_woocommerce_ajax_added_to_cart', $product_id);
            if ('yes' === get_option('ql_woocommerce_cart_redirect_after_add')) {
                wc_add_to_cart_message(array($product_id => $quantity), true);
            }
            WC_AJAX :: get_refreshed_fragments();
            } else {
                $data = array(
                    'error' => true,
                    'product_url' => apply_filters('ql_woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id));
                echo wp_send_json($data);
            }
            wp_die();
        }
// remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

add_filter( 'woocommerce_catalog_orderby', 'bbloomer_remove_sorting_option_woocommerce_shop' );
  
function bbloomer_remove_sorting_option_woocommerce_shop( $options ) {
   unset( $options['menu_order'] ); 
   unset( $options['rating'] );   
   return $options;
}

function webroom_add_short_description_in_product_categories() {
	global $product;
	if ( ! $product->get_short_description() ) return;
	?>
	<div itemprop="description" class="achive_pg">
		<?php echo apply_filters( 'woocommerce_short_description', $product->get_short_description() ) ?>
	</div>
	<?php
}
add_action('woocommerce_after_shop_loop_item_title', 'webroom_add_short_description_in_product_categories', 5);

add_filter( 'woocommerce_checkout_fields', 'bbloomer_shipping_phone_checkout' );
 
function bbloomer_shipping_phone_checkout( $fields ) {
   $fields['shipping']['shipping_phone'] = array(
      'label' => 'Phone',
      'type' => 'tel',
      'required' => false,
      'class' => array( 'form-row-wide' ),
      'validate' => array( 'phone' ),
      'autocomplete' => 'tel',
      'priority' => 25,
   );
   return $fields;
}
  
add_action( 'woocommerce_admin_order_data_after_shipping_address', 'bbloomer_shipping_phone_checkout_display' );
 
function bbloomer_shipping_phone_checkout_display( $order ){
    echo '<p><b>Shipping Phone:</b> ' . get_post_meta( $order->get_id(), '_shipping_phone', true ) . '</p>';
}


add_filter( 'woocommerce_checkout_fields', 'bbloomer_shipping_email_checkout' );
 
function bbloomer_shipping_email_checkout( $fields ) {
   $fields['shipping']['shipping_email'] = array(
      'label' => 'Email',
      'type' => 'email',
      'required' => false,
      'class' => array( 'form-row-wide' ),
      'validate' => array( 'email' ),
   );
   return $fields;
}
  
add_action( 'woocommerce_admin_order_data_after_shipping_address', 'bbloomer_shipping_email_checkout_display' );
 
function bbloomer_shipping_email_checkout_display( $order ){
    echo '<p><b>Shipping Email:</b> ' . get_post_meta( $order->get_id(), '_shipping_email', true ) . '</p>';
}

function woocommerce_quantity_input_min_callback( $min, $product ) {
	$min = 1;  
	return $min;
}
add_filter( 'woocommerce_quantity_input_min', 'woocommerce_quantity_input_min_callback', 10, 2 );

add_action( 'woocommerce_after_checkout_validation', 'misha_validate_fname_lname', 10, 2 );
 
function misha_validate_fname_lname( $fields, $errors ){
 
    if ( preg_match( '/\\d/', $fields[ 'billing_first_name' ] ) || preg_match( '/\\d/', $fields[ 'billing_last_name' ] ) ){
        $errors->add( 'validation', 'Your billing name contains a number. Really?' );
    }
}
add_action('woocommerce_checkout_process', 'custom_validate_billing_phone');
function custom_validate_billing_phone() {
    $is_correct = preg_match('/^[0-9]{6,10}$/', $_POST['billing_phone']);
    if ( $_POST['billing_phone'] && !$is_correct) {
        wc_add_notice( __( 'The Phone field should be <strong> 10 digits</strong>.' ), 'error' );
    }
}
add_action( 'woocommerce_after_checkout_validation', 'misha1_validate_fname_lname', 10, 2 );
function misha1_validate_fname_lname( $fields, $errors ){
 
    if ( preg_match( '/\\d/', $fields[ 'shipping_first_name' ] ) || preg_match( '/\\d/', $fields[ 'shipping_last_name' ] ) ){
        $errors->add( 'validation', 'Your shipping first name contains a number. Really?' );
    }
}

// add_action('woocommerce_checkout_process', 'custom_validate_shipping_phone');
// function custom_validate_shipping_phone() {
//     $is_correct = preg_match('/^[0-9]{6,10}$/', $_POST['shipping_phone']);
//     if ( $_POST['shipping_phone'] && !$is_correct) {
//         wc_add_notice( __( 'The Shipping Phone field should be <strong> 10 digits</strong>.' ), 'error' );
//     }
// }


function add_credit_card_gateway_icons( $icon_string, $gateway_id ) {

    if ( 'stripe' === $gateway_id ) {
    $icon_string  =   '<div class="stip_flot">';
    $icon_string .=  ' <img class="stripe-visa-icon stripe-icon" src="' . WC_STRIPE_PLUGIN_URL . '/assets/images/visa.svg" alt="Visa" /> ' ;
    $icon_string .= ' <img class="stripe-mastercard-icon stripe-icon" src="' . WC_STRIPE_PLUGIN_URL . '/assets/images/mastercard.svg" alt="mastercard" /> ' ;
    $icon_string .= ' <img class="stripe-amex-icon stripe-icon" src="' . WC_STRIPE_PLUGIN_URL . '/assets/images/amex.svg" alt="amex" /> ' ;
    $icon_string .= ' <img class="stripe-discover-icon stripe-icon" src="' . WC_STRIPE_PLUGIN_URL . '/assets/images/discover.svg" alt="Discover" /> ' ;
    $icon_string .= '</div>';
    // $icon_string .= ' <img class="stripe-diners-icon stripe-icon" src="' . WC_STRIPE_PLUGIN_URL . '/assets/images/diners.svg" alt="diners" /> ' ;
    // $icon_string .= ' <img class="stripe-jcb-icon stripe-icon" src="' . WC_STRIPE_PLUGIN_URL . '/assets/images/jcb.svg" alt="jcb" /> ' ;
    
    }
    return $icon_string;
    }
    
    add_filter( 'woocommerce_gateway_icon', 'add_credit_card_gateway_icons', 10, 2 );

    add_filter( 'woocommerce_breadcrumb_defaults', 'my_change_breadcrumb_delimiter' );
    function my_change_breadcrumb_delimiter( $defaults ) {
        
    // Change the breadcrumb delimiter from '/' to '>'
    
        $defaults['delimiter'] = ' > ';
        return $defaults;
    }
remove_action('wp_head', 'wp_generator');
function remove_wordpress_version() {
    return '';
}
add_filter('the_generator', 'remove_wordpress_version');