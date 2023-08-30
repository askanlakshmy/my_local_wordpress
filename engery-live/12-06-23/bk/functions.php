<?php
/**
 * Askan Tech functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Askan Tech
 * @since Askan Tech 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Askan 1.0
 */

//include('slug/slug.php');
include('constantContact/source.php');
include('stripe/config.php');
include('acuity_scheduling/vendor/autoload.php');
use Ctct\Components\Contacts\Contact;
use Ctct\ConstantContact;
use Ctct\Services;
use Ctct\Exceptions\CtctException;
define("__API_KEY","g4ht6p4atfcc24um3usssg8q");
define("__ACCESS_TOKEN","0404f2fb-91a1-4fed-b445-ac278965355d");
define("__PAID_MLIST_ID","1783513629");
define("__DIDNT_SUBS_YET","1875429143");
define("__FREE_MLIST_ID","1551336468");
define("__CANCEL_MLIST_ID","1490214724");
define("__ET_NEWS_LETTER_ID","1913861676");
$global_acuity_products = array('12994', '17082', '17083', '17084','21019','13043','13042','13041','13040','13047','13046','13045','13044','20608','20609','20645','20646','20615','20616');

if (!function_exists('write_log')){
    function write_log($log) {
        if (true === WP_DEBUG) {
            if (is_array($log) || is_object($log)) {
                error_log(print_r($log, true));
            } else {
                error_log($log);
            }
        }
    }
}

function add_or_update_contact($contact_arr){
    $email = $contact_arr['email'];
    $fname = $contact_arr['fname'];
    $lname = $contact_arr['lname'];
    $usertype = $contact_arr['usertype'];
    $listID = __DIDNT_SUBS_YET;
    if(trim(strtolower($usertype)) == 'free'){
        $listID = __FREE_MLIST_ID;
    } else if(trim(strtolower($usertype)) == 'paid'){
        $listID = __PAID_MLIST_ID;
    } else if(trim($usertype) == 'canceled'){
        $listID = __CANCEL_MLIST_ID;
    } else if(trim($usertype) == 'session_users'){
        $listID = __ET_NEWS_LETTER_ID;
    }

    $__CC = new ConstantContact(__API_KEY);

    $ca = new Services\ActivityService(__API_KEY);

    try {
        $response = $__CC->contactService->getContacts(__ACCESS_TOKEN, array("email" => $email));
        if (empty($response->results)) {
            $action = "Creating Contact";
            $contact = new Contact();
            $contact->addEmail($email);
            $contact->addList($listID);
            $contact->first_name = $fname;
            $contact->last_name = $lname;
            $returnContact = $__CC->contactService->addContact(__ACCESS_TOKEN, $contact);
        } else {
            $contact = $response->results[0];
            if(trim(strtolower($usertype)) == 'paid'){
                $action = "Remove contact from didn't subcribe list list";
                try {
                    //List Id from which you want the contact to be removed from
                    $ca->addRemoveContactsFromListsActivity( __ACCESS_TOKEN,
                        array("email" => $email),
                        array(__DIDNT_SUBS_YET)
                    );
                } catch (Exception $e) {
                    var_dump($e->getMessage());
                }
            }
            if(trim(strtolower($usertype)) == 'canceled'){
                $action = "Remove contact from paid member list";
                try {
                    //List Id from which you want the contact to be removed from
                    $ca->addRemoveContactsFromListsActivity( __ACCESS_TOKEN,
                        array("email" => $email),
                        array(__PAID_MLIST_ID)
                    );
                } catch (Exception $e) {
                    var_dump($e->getMessage());
                }
            }
            $response = $__CC->contactService->getContacts(__ACCESS_TOKEN, array("email" => $email));
            $contact = $response->results[0];
            $action = "Updating Contact";
            if ($contact instanceof Contact) {
                $contact->addList($listID);
                $contact->first_name = $fname;
                $contact->last_name = $lname;
                $returnContact = $__CC->contactService->updateContact(__ACCESS_TOKEN, $contact);
            } else {
                $e = new CtctException();
                $e->setErrors(array("type", "Contact type not returned"));
                throw $e;
            }
        }
    } catch (CtctException $ex) {
        echo '<span class="label label-important">Error ' . $action . '</span>';
        echo '<div class="container alert-error"><pre class="failure-pre">';
        print_r($ex->getErrors());
        echo '</pre></div>';
        die();
    }
}
function register_my_menu() {
    register_nav_menus( array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' ),
        'mobile-menu' => __( 'Mobile Menu' )
    ));
}
add_action( 'init', 'register_my_menu' );

function theme_prefix_setup() {
    add_theme_support( 'custom-logo' );
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

function theme_prefix_the_custom_logo() {

    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }

}

class Child_Wrap extends Walker_Nav_Menu
{
    /**
     * Start the element output.
     *
     * @param  string $output Passed by reference. Used to append additional content.
     * @param  object $item   Menu item data object.
     * @param  int $depth     Depth of menu item. May be used for padding.
     * @param  array $args    Additional strings.
     * @return void
     */
    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output )
    {
        $id_field = $this->db_fields['id'];
        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
        }
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

    function start_lvl( &$output, $depth = 0, $args = array()) {
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth); // because it counts the first submenu as 0
        $classes = array('sub-menu'. $display_depth,'level-' . $display_depth);
        $class_names = implode( ' ', $classes );
        // build html
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $classes     = empty ( $item->classes ) ? array () : (array) $item->classes;
        $class_names = join(
            ' '
            ,   apply_filters(
                'nav_menu_css_class'
                ,   array_filter( $classes ), $item
            )
        );
        if ($args->has_children && $depth == 0){
            ! empty ( $class_names )
            and $class_names = ' class="'. esc_attr( $class_names ) . ' has_children"';
        }else{
            ! empty ( $class_names )
            and $class_names = ' class="'. esc_attr( $class_names ) . 'hasMenu has-dropdown not-click has-category-dropdown "';
        }
        $output .= "<li data-objectid='$item->object_id' id='menu-item-$item->ID' $class_names>" ;
        $attributes  = '';
        ! empty( $item->attr_title )
        and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
        ! empty( $item->target )
        and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
        ! empty( $item->xfn )
        and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
        ! empty( $item->url )
        and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';
        // insert description for top level elements only
        // you may change this
        $description = ( ! empty ( $item->description ) and 0 == $depth )
            ? '' : '';
        $title = apply_filters( 'the_title', $item->title, $item->ID );
        if ( $depth == 0 ) {//top level items
            $item_output = $args->before
                //."<div class='first-level'>"
                . "<a $attributes>"
                . $args->link_before
                . $title
                . '</a>'
                . $args->link_after
                . $description
                //. '</div>'
                . $args->after;
        }else{//everything else
            $item_output = $args->before
                . "<a $attributes>"
                . $args->link_before
                . $title
                . '</a> '
                . $args->link_after
                . $args->after;
        }
        // Since $output is called by reference we don't need to return anything.
        $output .= apply_filters(
            'walker_nav_menu_start_el'
            ,   $item_output
            ,   $item
            ,   $depth
            ,   $args
        );
    }
}
class Child_Wrap1 extends Walker_Nav_Menu
{
    /**
     * Start the element output.
     *
     * @param  string $output Passed by reference. Used to append additional content.
     * @param  object $item   Menu item data object.
     * @param  int $depth     Depth of menu item. May be used for padding.
     * @param  array $args    Additional strings.
     * @return void
     */
    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output )
    {
        $id_field = $this->db_fields['id'];
        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
        }
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

    function start_lvl( &$output, $depth = 0, $args = array()) {
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth); // because it counts the first submenu as 0
        $classes = array('sub-menu'. $display_depth,'level-' . $display_depth);
        $class_names = implode( ' ', $classes );
        // build html
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $classes     = empty ( $item->classes ) ? array () : (array) $item->classes;
        $class_names = join(
            ' '
            ,   apply_filters(
                'nav_menu_css_class'
                ,   array_filter( $classes ), $item
            )
        );
        if ($args->has_children && $depth == 0){
            ! empty ( $class_names )
            and $class_names = ' class="'. esc_attr( $class_names ) . ' has_children"';
        }else{
            ! empty ( $class_names )
            and $class_names = ' class="'. esc_attr( $class_names ) . ' hasMenu"';
        }
        $output .= "<li data-count='$item->ID' id='menu-item-$item->ID' $class_names>" ;

        $attributes  = '';
        ! empty( $item->attr_title )
        and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
        ! empty( $item->target )
        and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
        ! empty( $item->xfn )
        and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
        ! empty( $item->url )
        and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';
        // insert description for top level elements only
        // you may change this
        $description = ( ! empty ( $item->description ) and 0 == $depth )
            ? '' : '';
        $title = apply_filters( 'the_title', $item->title, $item->ID );
        if ( $depth == 0 ) {//top level items
            $item_output = $args->before
                //."<div class='first-level'>"
                . "<a $attributes>"
                . $args->link_before
                . $title
                . '</a>'
                . $args->link_after
                . $description
                //. '</div>'
                . $args->after;
        }else{//everything else
            $item_output = $args->before
                . "<a $attributes>"
                . $args->link_before
                . $title
                . '</a> '
                . $args->link_after
                . $args->after;
        }
        // Since $output is called by reference we don't need to return anything.
        $output .= apply_filters(
            'walker_nav_menu_start_el'
            ,   $item_output
            ,   $item
            ,   $depth
            ,   $args
        );
    }
}
class Child_Wrap2 extends Walker_Nav_Menu
{
    /**
     * Start the element output.
     *
     * @param  string $output Passed by reference. Used to append additional content.
     * @param  object $item   Menu item data object.
     * @param  int $depth     Depth of menu item. May be used for padding.
     * @param  array $args    Additional strings.
     * @return void
     */
    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output )
    {
        $id_field = $this->db_fields['id'];
        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
        }
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

    function start_lvl( &$output, $depth = 0, $args = array()) {
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth); // because it counts the first submenu as 0
        $classes = array('sub-menu'. $display_depth,'level-' . $display_depth);
        $class_names = implode( ' ', $classes );
        // build html
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $classes     = empty ( $item->classes ) ? array () : (array) $item->classes;
        $class_names = join(
            ' '
            ,   apply_filters(
                'nav_menu_css_class'
                ,   array_filter( $classes ), $item
            )
        );
        if ($args->has_children && $depth == 0){
            ! empty ( $class_names )
            and $class_names = ' class="'. esc_attr( $class_names ) . ' has_children"';
        }else{
            ! empty ( $class_names )
            and $class_names = ' class="'. esc_attr( $class_names ) . 'hasMenu"';
        }
        $output .= "<li class='category_submenu_post'>" ;
        $attributes  = '';
        ! empty( $item->attr_title )
        and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
        ! empty( $item->target )
        and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
        ! empty( $item->xfn )
        and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
        ! empty( $item->url )
        and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';
        // insert description for top level elements only
        // you may change this
        $description = ( ! empty ( $item->description ) and 0 == $depth )
            ? '' : '';
        $title = apply_filters( 'the_title', $item->title, $item->ID );
        $menu_img_src = rw_resize(get_post_thumbnail_id($item->object_id),268,155);
        if(!get_post_thumbnail_id($item->object_id)){ $menu_img_src = get_template_directory_uri().'/images/et-images-267x173.jpg'; }
        $img = '<img src="'.$menu_img_src.'" class="attachment-th-medium wp-post-image" alt="'.$title.'" height="154" width="266">';
        if ( $depth == 0 ) {//top level items
            $item_output = $args->before
                //."<div class='first-level'>"
                . "<a class='th post-thumbnail' href='$item->url' >"
                . $img
                . '</a>'
                . "<h5><a $attributes>"
                . $args->link_before
                . $title
                . '</a></h5>'
                . $args->link_after
                . $description
                //. '</div>'
                . $args->after;
        }else{//everything else
            $item_output = $args->before
                . "<a $attributes>"
                . $args->link_before
                . $title
                . '</a> '
                . $args->link_after
                . $args->after;
        }
        // Since $output is called by reference we don't need to return anything.
        $output .= apply_filters(
            'walker_nav_menu_start_el'
            ,   $item_output
            ,   $item
            ,   $depth
            ,   $args
        );
    }
}

class Child_Wrap3 extends Walker_Nav_Menu
{
    /**
     * Start the element output.
     *
     * @param  string $output Passed by reference. Used to append additional content.
     * @param  object $item   Menu item data object.
     * @param  int $depth     Depth of menu item. May be used for padding.
     * @param  array $args    Additional strings.
     * @return void
     */

    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output )
    {
        $id_field = $this->db_fields['id'];
        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
        }
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

    function start_lvl( &$output, $depth = 0, $args = array()) {
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth); // because it counts the first submenu as 0
        $classes = array('sub-menu'. $display_depth,'level-' . $display_depth);
        $class_names = implode( ' ', $classes );
        // build html
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $classes     = empty ( $item->classes ) ? array () : (array) $item->classes;
        $class_names = join(
            ' '
            ,   apply_filters(
                'nav_menu_css_class'
                ,   array_filter( $classes ), $item
            )
        );
        if ($args->has_children && $depth == 0){
            ! empty ( $class_names )
            and $class_names = ' class="'. esc_attr( $class_names ) . ' has_children"';
        }else{
            ! empty ( $class_names )
            and $class_names = ' class="'. esc_attr( $class_names ) . 'hasMenu"';
        }
        //$output .= "<li class='category_submenu_post'>" ;
        $attributes  = '';
        ! empty( $item->attr_title )
        and $attributes .= ' title="'  . esc_attr( $item->attr_title ) .'"';
        ! empty( $item->target )
        and $attributes .= ' target="' . esc_attr( $item->target     ) .'"';
        ! empty( $item->xfn )
        and $attributes .= ' rel="'    . esc_attr( $item->xfn        ) .'"';
        ! empty( $item->url )
        and $attributes .= ' href="'   . esc_attr( $item->url        ) .'"';
        // insert description for top level elements only
        // you may change this
        $description = ( ! empty ( $item->description ) and 0 == $depth )
            ? '' : '';
        $title = apply_filters( 'the_title', $item->title, $item->ID );
        $menu_img_src = rw_resize(get_post_thumbnail_id($item->object_id),268,155);
        if(!get_post_thumbnail_id($item->object_id)){ $menu_img_src = get_template_directory_uri().'/images/et-images-267x173.jpg'; }
        $img = '<img src="'.$menu_img_src.'" class="attachment-th-medium wp-post-image" alt="'.$title.'" height="154" width="266">';
        if ( $depth == 0 ) {//top level items
            $item_output = $args->before
                //."<div class='first-level'>"
                . "<a class='th post-thumbnail' href='$item->url' >"
                . $img
                . '</a>'
                . "<h5><a $attributes>"
                . $args->link_before
                . $title
                . '</a></h5>'
                . $args->link_after
                . $description
                //. '</div>'
                . $args->after;
        }else{//everything else
            $item_output = $args->before
                . "<a $attributes>"
                . $args->link_before
                . $title
                . '</a> '
                . $args->link_after
                . $args->after;
        }
        // Since $output is called by reference we don't need to return anything.
        $output .= apply_filters(
            'walker_nav_menu_start_el'
            ,   $item_output
            ,   $item
            ,   $depth
            ,   $args
        );
    }
}

/**** Custom Quotes starts ****/
add_action( 'init', 'create_posttype' );
function create_posttype() {
    register_post_type( 'quote',
        array(
            'labels' => array(
                'name' => __( 'Quotes' ),
                'singular_name' => __( 'Quote' ),
				'add_new' => __( 'Add New Quote' ),
				'add_new_item' => __( 'Add New Quote' ),
				'edit_item' => __( 'Edit Quote' ),
				'view_item' => __( 'View Quote' ),
				'view_items' => __( 'View Quote' )
            ),
            'public' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'quotes'),
            'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail'),
        )
    );
	register_post_type( 'book',
        array(
            'labels' => array(
                'name' => __( 'Books' ),
                'singular_name' => __( 'Book' ),
				'add_new' => __( 'Add New Book' ),
				'add_new_item' => __( 'Add New Book' ),
				'edit_item' => __( 'Edit Book' ),
				'view_item' => __( 'View Book' ),
				'view_items' => __( 'View Book' )
            ),
            'public' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'quotes-books'),
            'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail'),
        )
    );
	register_post_type( 'quote_author',
        array(
            'labels' => array(
                'name' => __( 'Authors' ),
                'singular_name' => __( 'Author' ),
				'add_new' => __( 'Add New Author' ),
				'add_new_item' => __( 'Add New Author' ),
				'edit_item' => __( 'Edit Author' ),
				'view_item' => __( 'View Author' ),
				'view_items' => __( 'View Author' )

            ),
            'public' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'query_var' => true,
			'rewrite' => array('slug' => 'quotes-authors'),
            'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail'),
        )
    );
    register_post_type( 'subscribers_audio',
        array(
            'labels' => array(
                'name' => __( 'Audios' ),
                'singular_name' => __( 'Audio' ),
				'add_new' => __( 'Add New Audio' ),
				'add_new_item' => __( 'Add New Audio' ),
				'edit_item' => __( 'Edit Audio' ),
				'view_item' => __( 'View Audio' ),
				'view_items' => __( 'View Audio' )

            ),
            'public' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'menu_icon' => 'dashicons-media-audio',
            'has_archive' => true,
            'query_var' => true,
			'rewrite' => array('slug' => 'subscribers-audios'),
            'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail'),
        )
    );
	register_post_type( 'subscribers_ebook',
        array(
            'labels' => array(
                'name' => __( 'EBooks' ),
                'singular_name' => __( 'EBook' ),
				'add_new' => __( 'Add New EBook' ),
				'add_new_item' => __( 'Add New EBook' ),
				'edit_item' => __( 'Edit EBook' ),
				'view_item' => __( 'View EBook' ),
				'view_items' => __( 'View EBook' )

            ),
            'public' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'menu_icon' => 'dashicons-book-alt',
            'has_archive' => true,
            'query_var' => true,
			'rewrite' => array('slug' => 'subscribers-ebooks'),
            'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail'),
        )
    );
    register_post_type( 'subscribers_video',
        array(
            'labels' => array(
                'name' => __( 'Videos' ),
                'singular_name' => __( 'Video' ),
				'add_new' => __( 'Add New Video' ),
				'add_new_item' => __( 'Add New Video' ),
				'edit_item' => __( 'Edit Video' ),
				'view_item' => __( 'View Video' ),
				'view_items' => __( 'View Video' )

            ),
            'public' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'menu_icon' => 'dashicons-video-alt3',
            'has_archive' => true,
            'query_var' => true,
			'rewrite' => array('slug' => 'subscribers-videos'),
            'supports' => array( 'title', 'editor', 'comments', 'excerpt', 'custom-fields', 'thumbnail'),
        )
    );
}

function add_tags_categories() {
    //register_taxonomy_for_object_type('category', 'quotes');
    register_taxonomy('topics', 'quote', array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => true,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
            'name' => _x( 'topics', 'taxonomy general name' ),
            'singular_name' => _x( 'topics', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Locations' ),
            'all_items' => __( 'All topics' ),
            'parent_item' => __( 'Parent topics' ),
            'parent_item_colon' => __( 'Parent topics:' ),
            'edit_item' => __( 'Edit topics' ),
            'update_item' => __( 'Update topics' ),
            'add_new_item' => __( 'Add New topics' ),
            'new_item_name' => __( 'New topics Name' ),
            'menu_name' => __( 'topics' ),
        ),
        // Control the slugs used for this taxonomy
        'rewrite' => array(
            'slug' => 'quotes-topics', // This controls the base slug that will display before each term
            'with_front' => false, // Don't display the category base before "/locations/"
            'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
        ),
    ));
    register_taxonomy_for_object_type('post_tag', 'quote');
   /*register_taxonomy('tag','quotes',array( // replace your post type with "news"
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'quotes-tag' ),
  ));*/
}
add_action('init', 'add_tags_categories');

/**** Custom Events Ends ****/


acf_add_options_sub_page('Ads');
acf_add_options_sub_page('Header');
acf_add_options_sub_page('Pricing');
acf_add_options_sub_page('Auto Response');
acf_add_options_sub_page('Automate Message');
//acf_add_options_sub_page('Footer');

function wpb_widgets_init() {

    register_sidebar( array(
        'name' => __( 'Home page Google Ads', 'wpb' ),
        'id' => 'home_page_google_ads',
        'description' => __( 'This is the ads section for home page below slider', 'wpb' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	register_sidebar( array(
        'name' => __( 'Single Page Ads Under Articles', 'wpb' ),
        'id' => 'single_page_under-articles_ads',
        'description' => __( 'This is the ads section for single page under articles', 'wpb' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	register_sidebar( array(
        'name' => __( 'Quotes single Page Rightside ads', 'wpb' ),
        'id' => 'quotes_page_right_ads',
        'description' => __( 'This is the ads section for Quotes Rights sidebar Ads', 'wpb' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	register_sidebar( array(
        'name' => __( 'Quotes single Page under Ads', 'wpb' ),
        'id' => 'single_quotes_page_under-articles_ads',
        'description' => __( 'This is the ads section for single page under articles', 'wpb' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	register_sidebar( array(
        'name' => __( 'Author Quotes Page Rightside Ads', 'wpb' ),
        'id' => 'author_page_ads',
        'description' => __( 'This is the ads section for Author page third column', 'wpb' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	register_sidebar( array(
        'name' => __( 'Author Quotes Page under Ads', 'wpb' ),
        'id' => 'author_page_under-articles_ads',
        'description' => __( 'This is the ads section for Author page under content', 'wpb' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	register_sidebar( array(
        'name' => __( 'Footer Column 1', 'wpb' ),
        'id' => 'footer-1',
        'description' => __( 'This is the common footer section', 'wpb' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer Column 2', 'wpb' ),
        'id' => 'footer-2',
        'description' => __( 'This is the common footer section', 'wpb' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer Column 3', 'wpb' ),
        'id' => 'footer-3',
        'description' => __( 'This is the common footer section', 'wpb' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer Column 4', 'wpb' ),
        'id' => 'footer-4',
        'description' => __( 'This is the common footer section', 'wpb' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( 'Footer Menu', 'wpb' ),
        'id' => 'footer-5',
        'description' => __( 'This is the common footer section', 'wpb' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => __( 'Right Side Bar', 'wpb' ),
        'id' => 'sidebar-1',
        'description' => __( 'This is the common sidebar', 'wpb' ),
        'before_widget' => '<div class="widget-1  first sidebox">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}

add_action( 'widgets_init', 'wpb_widgets_init' );

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

add_filter( 'get_the_archive_title', function ( $title ) {
    if( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;

});


//featured image
add_theme_support( 'post-thumbnails' );


function theme_enqueue_scripts()
{
	$flash_message = get_field('flash_message','options');
	$message_accept = get_field('show_flash_message','options');
	$start_date = get_field('start_date','options');
	$end_date = get_field('end_date','options');
	$show_message = array('flash_message' => $flash_message);
	$today_date = strtotime(date("Ymd"));
	$sdate = strtotime($start_date);
	$edate = strtotime($end_date);
    if(!wp_is_mobile()){
        $send_custom1 = array('ajax_url' => admin_url( 'admin-ajax.php' ),'site_url' => site_url());
    }else{
        $send_custom1 = array('ajax_url' => admin_url( 'admin-ajax.php' ),'site_url' => site_url(),'is_mobile'=>1);
    }
   // $send_custom = array('site_url' => site_url());
    //wp_register_script('ET-jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), NULL, true);
    //wp_enqueue_script('ET-jquery');
    if(!wp_is_mobile()){
        wp_register_script('ET-superfish', get_template_directory_uri() . '/js/superfish.js', array(), NULL, true);
        wp_enqueue_script('ET-superfish');
        wp_register_script('ET-easyaspie', get_template_directory_uri() . '/js/easyaspie.js', array(), NULL, true);
        wp_enqueue_script('ET-easyaspie');
        wp_register_script('ET-modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), NULL, true);
        wp_enqueue_script('ET-modernizr');
    }
    wp_register_script('ET-responsiveslides', get_template_directory_uri() . '/js/responsiveslides.min.js', array(), NULL, true);
    wp_enqueue_script('ET-responsiveslides');
    wp_register_script('ET-popup-js',get_stylesheet_directory_uri().'/js/jquery.popup.js',array(),NULL,true);
    wp_enqueue_script('ET-popup-js');
    wp_register_script('ET-salvattore-js',get_stylesheet_directory_uri().'/js/salvattore.js',array(),NULL,true);
    wp_enqueue_script('ET-salvattore-js');
    wp_register_script('ET-custom-js',get_stylesheet_directory_uri().'/js/custom.js',array(),NULL,true);
    wp_enqueue_script('ET-custom-js');
    wp_register_script('ET-contact-js',get_stylesheet_directory_uri().'/js/contactform.js',array(),NULL,true);
    wp_enqueue_script('ET-contact-js');
	wp_register_script('ET-foundation-js',get_stylesheet_directory_uri().'/js/foundation.js',array(),NULL,true);
    wp_enqueue_script('ET-foundation-js');
    wp_register_script('ET-theme-js',get_stylesheet_directory_uri().'/js/theme.js',array(),NULL,true);
    wp_enqueue_script('ET-theme-js');
    if(wp_is_mobile()){
        wp_register_script('ET-jquery-mobile-mega-menu-js',get_stylesheet_directory_uri().'/js/jquery-mobile-mega-menu.js',array(),NULL,true);
        wp_enqueue_script('ET-jquery-mobile-mega-menu-js');
    }
    wp_localize_script( 'ET-contact-js', 'et_url_para', $send_custom1 );
    wp_localize_script( 'ET-custom-js', 'site_url_para', $send_custom1 );
    wp_register_script('ET-custom-sshare', get_template_directory_uri() . '/js/et-custom-sshare.js', array(), NULL, true);
    wp_enqueue_script('ET-custom-sshare');
    wp_register_script('ET-share_count', get_template_directory_uri() . '/js/share_count.js', array(), NULL, true);
    wp_enqueue_script('ET-share_count');
	if (($message_accept == 1) && ($today_date >= $sdate) && ($today_date <= $edate) && !empty($show_message)){
		wp_register_script('ET-cookieBanner-js',get_stylesheet_directory_uri().'/js/cookieBanner.js',array(),NULL,true);
		wp_enqueue_script('ET-cookieBanner-js');
		wp_localize_script( 'ET-cookieBanner-js', 'cookieBanner', $show_message );
    }
    if(is_page(19145)){
        wp_register_script('ET-clipboard_copy-js',get_stylesheet_directory_uri().'/js/clipboard_copy.js',array(),NULL,true);
        wp_enqueue_script('ET-clipboard_copy-js');
    }
    if( (is_page(18866)) || (is_page(19378)) ){
        //wp_register_script('ET-stripe-js','https://checkout.stripe.com/checkout.js',array(),NULL,true);
        wp_register_script('ET-stripe-js','https://js.stripe.com/v3',array(),NULL,true);
        wp_enqueue_script('ET-stripe-js');
        wp_register_script('ET-stripe-card-js',get_stylesheet_directory_uri().'/js/card.js',array(),NULL,true);
        wp_enqueue_script('ET-stripe-card-js');
        wp_enqueue_script( 'password-strength-meter' );
    }
    if(is_page(19575)){
        wp_register_style('jquery-css', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');
        wp_enqueue_style('jquery-css');
        wp_register_script( 'jquery-1', 'https://code.jquery.com/jquery-1.12.4.js' );
		wp_enqueue_script( 'jquery-1' );
		wp_register_script( 'jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js' );
		wp_enqueue_script( 'jquery-ui' );
        wp_register_script( 'datepicker-js', get_stylesheet_directory_uri() . '/js/datepicker.js' );
		wp_enqueue_script( 'datepicker-js' );
    }
}
add_action('wp_enqueue_scripts','theme_enqueue_scripts');

function date_picker() {
	 if($_GET['page'] == 'acf-options-ads'){
		wp_register_style('jquery-css', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');
		wp_enqueue_style('jquery-css');

		/*wp_register_script( 'jquery-1', 'https://code.jquery.com/jquery-1.12.4.js' );
		wp_enqueue_script( 'jquery-1' );

		wp_register_script( 'jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js' );
		wp_enqueue_script( 'jquery-ui' );*/

		wp_register_script( 'datepicker-js', get_stylesheet_directory_uri() . '/js/datepicker.js' );
		wp_enqueue_script( 'datepicker-js' );
	}

}
add_action( 'admin_enqueue_scripts', 'date_picker' );

function my_gallery_css() {
	wp_register_style( 'gallery_css', get_stylesheet_directory_uri() . '/css/gallery.css' );
	wp_enqueue_style('gallery_css');
}
add_action( 'admin_enqueue_scripts', 'my_gallery_css' );

function remove_cssjs_ver( $src ) {
 if( strpos( $src, '?ver=' ) )
 $src = remove_query_arg( 'ver', $src );
 return $src;
}
if(!is_admin()) {
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_tag', function ( $tag, $handle ) {
//echo $handle;
    if ( 'jquery-core' == $handle){ return $tag; }
    if ( 'ET-cookieBanner-js' == $handle){ return $tag; }
    /*if ( 'testimonial_basics_rotator_js' == $handle){ return $tag; }
    if ( 'google-recaptcha' == $handle){ return $tag; }
    if ( 'katb-recaptcha-doc-ready' == $handle){ return $tag; }*/
    return str_replace( ' src', ' defer="defer" src', $tag );
}, 10, 2 );
}

if(!is_admin()) {
    if(!is_front_page()) {
        function disable_wp_emojicons() {

            // all actions related to emojis
            remove_action( 'admin_print_styles', 'print_emoji_styles' );
            remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
            remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
            remove_action( 'wp_print_styles', 'print_emoji_styles' );
            remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
            remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
            remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

            // filter to remove TinyMCE emojis
            add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
        }
        add_action( 'init', 'disable_wp_emojicons' );

        function disable_emojicons_tinymce( $plugins ) {
            if ( is_array( $plugins ) ) {
                return array_diff( $plugins, array( 'wpemoji' ) );
            } else {
                return array();
            }
        }
    }
}

function more_post_ajax(){

   $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
   $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 1;
   $tag = (isset($_POST['tag'])) ? $_POST['tag'] : '';
	if($page == 2){
		$offset = 11;
	}else if($page == 1){
		$offset = 5;
	}else if($page > 2){
		$offset = ($page * 6) - 1;
	}else{
		$offset = 5;
	}
    header("Content-Type: text/html");

    $args = array(
        'suppress_filters' => true,
        'post_type' => 'post',
        'posts_per_page' => $ppp,
       // 'tag' => $tag,
        'post_status' => 'publish',
        'paged'    => $page,
		'offset' => $offset
    );

    $loop = new WP_Query($args);
	print_r($args);
    $out = '';

    if ($loop -> have_posts()) :  while ($loop -> have_posts()) : $loop -> the_post(); ?>
        <section>
            <div class="place-holder effectss">
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <?php $thumb_id = get_post_thumbnail_id($post->ID); ?>
                <?php $alt_thumb = get_post_meta($thumb_id, '_wp_attachment_image_alt', true); ?>
				<div class="img">
                <img src="<?php echo rw_resize($thumb_id,400,225); ?>" alt="<?php echo $alt_thumb; ?>"/>
				<div class="overlay">
					<a href="<?php the_permalink();?>" class="expand"><i class="fa fa-link" aria-hidden="true"></i></a>
					<a class="close-overlay hidden">x</a>
				</div>
				</div>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="post-read-more">Read more &raquo; </a>
            </div>
        </section>
<?php
    endwhile;
    endif;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');

//add_filter( 'max_srcset_image_width', create_function( '', 'return 1;' ) );

add_action( 'wp_print_styles','my_deregister_styles', 100 );

function my_deregister_styles()    {
if (!is_admin()) {
   if (!is_page(2916)) {
	wp_deregister_style( 'cff-font-awesome' );
    }
	   if (is_front_page()) {
	wp_deregister_style( 'woocommerce-layout' );
	wp_deregister_style( 'woocommerce-smallscreen' );
	wp_deregister_style( 'woocommerce-general' );
    }
}
}

//custom shortcode for et events
function et_related_events($atts){
    global $wpdb;
     $atts = shortcode_atts( array(
        'related' => '0'
    ), $atts, 'et_related_events' );
    if ($atts['related'] > 0){
        global $post;
        /*$all_events = $wpdb->get_results("SELECT event_related_pages.event_id, event_related_pages.page_id, energy_events.* FROM event_related_pages
        LEFT JOIN energy_events ON event_related_pages.event_id=energy_events.id WHERE energy_events.end_date >= '".time()."' AND energy_events.active='1' AND event_related_pages.page_id='".$post->ID."'
        ORDER BY energy_events.end_date ASC, energy_events.position ASC LIMIT 5");*/
        $all_events = $wpdb->get_results("SELECT event_related_pages.event_id, event_related_pages.page_id, energy_events.* FROM event_related_pages
        LEFT JOIN energy_events ON event_related_pages.event_id=energy_events.id WHERE energy_events.end_date >= '".time()."' AND energy_events.active='1' AND event_related_pages.page_id='".$post->ID."'  AND energy_events.event_type IN ('ET','Feat.')
        ORDER BY CASE energy_events.event_type WHEN 'ET' THEN 1 WHEN 'Feat.' THEN 2 END, energy_events.end_date ASC, energy_events.position ASC LIMIT 8");
    }
    if (!$all_events){
        /*$all_events = $wpdb->get_results("SELECT * FROM energy_events WHERE end_date >= '".time()."' AND active='1'
         ORDER BY end_date ASC, position ASC LIMIT 5");*/
        $all_events = $wpdb->get_results("SELECT * FROM energy_events WHERE end_date >= '".time()."' AND active='1' AND event_type IN('','ET','Feat.')
         ORDER BY CASE event_type WHEN 'ET' THEN 1 WHEN 'Feat.' THEN 2 END, end_date ASC, position ASC LIMIT 8");
    }
    $content = '<div class="events-list">';
    if ($all_events){
        foreach ($all_events as $event){
            if($event->event_type != 'ET' && $event->event_type != ''){
                $event_paid = $wpdb->get_row("select * from ".$wpdb->usermeta." where meta_key='orderEvent_".$event->id."'");
                if($event_paid->meta_value != 'paid')
                  continue;
                $order_data = $wpdb->get_row("select * from ".$wpdb->postmeta." where meta_key='order_event_ID' and meta_value=".$event->id);
                if(!empty($order_data)){
                  $order_id = $order_data->post_id;
                  $subscription_post_ids = get_posts(array(
                      'posts_per_page'    => -1,
                      'post_type'         => 'subscription',
                      'meta_query'        => array(
                          array(
                              'key'       => 'all_order_ids',
                              'value'     => $order_id,
                              'compare'   => '=',
                          ),
                      ),
                      'fields'            => 'ids',
                  ));
                  $subscription_status = true;
                  foreach ($subscription_post_ids as $id) {
                      if ($subscription = Subscriptio_Subscription::get_by_id($id)) {
                          if(strpos(strtolower($subscription->product_name), 'facebook') !== false){
                            if($subscription->status != active)
                              $subscription_status = false;
                          }
                      }
                  }
                  if(!$subscription_status)
                    continue;
                }
              }
            $content .= '<div class="event-holder">
                   <div class="event-thumbnail">
                        <a href="'.get_permalink($event->post_id).'"><img src="'.site_url().'/wp-content/site_images/events/'.$event->id.'/'.$wpdb->get_var("SELECT gallery_photo_name FROM energy_photo_gallery WHERE event_id='".$event->id."' ORDER BY photo_pos ASC LIMIT 1").'" alt="" /></a>
                    </div>
                    <div class="event-info">
                        <a href="'.get_permalink($event->post_id).'">'.stripslashes($event->title).' ('.format_event_date($event->start_date, $event->end_date, 1).')</a>';
                      //  '<p>'.stripslashes(substr(strip_tags($event->overview), 0, 250)).'</p>';
                  $content .=' </div>
                </div>';
        }
    }
    $content .= '</div>';
    return $content;
}
function all_events_slider(){
    global $wpdb;
    $contentDate = '';
    $content = ' <div class="featured-slider all-events-mini-slider">';
    $all_featured = $wpdb->get_results("SELECT * FROM energy_events WHERE featured_status='1' AND active='1' AND end_date >= '".time()."'");
    foreach ($all_featured as $featured){
        if ($featured->country != 'online' && $featured->country != 'worldwide'){
            $countryRow = $wpdb->get_row("SELECT countryName FROM countries WHERE idCountry='".$featured->country."'");
            $contentDate = $featured->city.', '.$countryRow->countryName;
        }else{
            $contentDate = ucfirst($featured->country);
        }
        $content .= '<div>
                                        <a href="'.get_permalink($featured->post_id).'"><img src="'.site_url().'/wp-content/site_images/events/'.$featured->id.'/'.$featured->promo_slider_image.'" alt="" /></a>
                                        <span class="caption"><a href="'.get_permalink($featured->post_id).'">'.stripslashes($featured->title).' ('.format_event_date($featured->start_date, $featured->end_date, 1).')</a><p class="eventLoc">'.$contentDate.'</p></span>
                                    </div>';
    }
    $content .= '</div>';
    $content .= '
';
    return $content;
}

function et_product($atts){
    $atts = shortcode_atts( array(
        'product_id' => '0',
        'attribute' => 'treatment-length'
    ), $atts, 'et_products' );
    $atts['attribute'] = strtolower(str_replace(' ', '-', $atts['attribute']));
    if ($atts['product_id'] > 0){
        // make sure we actually have a produc to look for
        // globalize woo data
        global $woocommerce, $product, $wpdb;
        // initialize and grab variation data
        $product = new WC_Product_Variable($atts['product_id']);
        //print_r($product);
        global $product;
        //print_r($product);
        $available_variations = $product->get_available_variations();
        //print_r($available_variations);
        //print_r($ch_price = $available_variations [0]['price_html']);
        // gather nice names for the items
        $attributes_from_db = unserialize($wpdb->get_var("SELECT meta_value FROM et_postmeta WHERE post_id='".$atts['product_id']."' AND meta_key='_product_attributes'"));
        $attributes_array = explode(' | ', $attributes_from_db[$atts['attribute']]['value']);
        $attributes_array = $attributes_array;
        global $WOOCS;
        $content = '<div class="et-product-holder">';
        //$content .= '<div class="et-product-title">'.$product->post->post_title.'</div>';
        $clean_type = ucwords(str_replace('-', ' ', $atts['attribute']));
        // form data
        $content .='<div class="choose_currency"><span>
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;
                    <strong>Choose Your Currency Here:</strong>&nbsp;&nbsp;</span><span>';
        $content .= do_shortcode('[woocs show_flags=0 txt_type="code" width="100px"]');
        $content .='</span></div>';
        $content .= '<div class="choose_currency_form">
                <form class="cart" method="post" enctype="multipart/form-data">
                 <div class="cart-msg"></div>
                 <div class="varieties-holder">
                    <strong>Choose a '.$clean_type.':</strong><br>';
                        foreach ($available_variations as $variation){
                            foreach ($attributes_array as $test_att){
                                if ($variation['attributes']['attribute_'.$atts['attribute']] == $test_att){
                                    $currency_symbol = get_woocommerce_currency_symbol();
                                    $ch_price = '&nbsp;'.$variation['price_html'];
                                    $str1 = explode("-",$test_att);
                                    if(count($str1)==3){
                                        $explo = $str1[2];
                                    } else {
                                        $explo = $str1[1];
                                    }
                                    $replace_str = str_replace($explo,$ch_price,$test_att);
                                    $content .="<label class='radio-container'>
                                                    <div class='radio-overlay' style='display:none'></div>
                                                    <input type='radio' name='available_variations' class='select_variation' value='".$variation['variation_id']."' >
                                                    <span class='radio-checkmark'></span>
                                                    <span class='radio-text-show'>$replace_str</span>
                                                </label>";
                                }
                            }
                        }
        $content .= '<div class="add_cart"><a class="btn btn-default btn-submit add-to-cart-button post-read-more" style="width: 125px; transition: all 0.2s ease-out 0s; -webkit-transition: all 0.2s ease-out 0s; min-height: 0px; min-width: 0px; border-width: 0px; letter-spacing: 0px; font-size: 14px;display:none;" data-product="'.$atts["product_id"].'">Add To Cart &gt;&gt;</a></div>
                </div>
    </form></div>';
    $content .= '</div>';
    }
    return $content;
}
add_shortcode('et-related-events', 'et_related_events');
add_shortcode('all-events-slider', 'all_events_slider');
add_shortcode('et-product', 'et_product');

function taxonomy_slug_rewrite($wp_rewrite) {
    $rules = array();
    // get all custom taxonomies
    $taxonomies = get_taxonomies(array('_builtin' => false), 'objects');
    // get all custom post types
    $post_types = get_post_types(array('public' => true, '_builtin' => false), 'objects');

    foreach ($post_types as $post_type) {
        foreach ($taxonomies as $taxonomy) {

            // go through all post types which this taxonomy is assigned to
            foreach ($taxonomy->object_type as $object_type) {

                // check if taxonomy is registered for this custom type
                if ($object_type == $post_type->rewrite['slug']) {

                    // get category objects
                    $terms = get_categories(array('type' => $object_type, 'taxonomy' => $taxonomy->name, 'hide_empty' => 0));

                    // make rules
                    foreach ($terms as $term) {
                        $rules[$object_type . '/' . $term->slug . '/?$'] = 'index.php?' . $term->taxonomy . '=' . $term->slug;
                    }
                }
            }
        }
    }
    // merge with global rules
    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
}
add_filter('generate_rewrite_rules', 'taxonomy_slug_rewrite');

add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

function woocommerce_header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;

    ob_start();

    ?>
    <a href="<?php echo site_url().'/cart/'; ?>" class="cart-mini-icon">
        <span class="count"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></span>
    </a>
    <?php

    $fragments['a.cart-mini-icon'] = ob_get_clean();

    return $fragments;

}

function sa_get_bootstrap_paginate_links() {
    ob_start();
    global $the_query;
    $current = max( 1, absint( get_query_var( 'paged' ) ) );
    $pagination = paginate_links( array(
        'base' => str_replace( PHP_INT_MAX, '%#%', esc_url( get_pagenum_link( PHP_INT_MAX ) ) ),
        'format' => '?paged=%#%',
        'current' => $current,
        'total' => $the_query->max_num_pages,
        'type' => 'array',
        'prev_text' => 'PREV',
        'next_text' => 'NEXT',
    ) ); ?>
    <?php if ( ! empty( $pagination ) ) : ?>
        <ul>
            <?php foreach ( $pagination as $key => $page_link ) : ?>
                <li class="single_page <?php if ( strpos( $page_link, 'current' ) !== false ) { echo ' active'; } ?>"><?php echo $page_link ?></li>
            <?php endforeach ?>
        </ul>
    <?php endif;
    $links = ob_get_clean();
    return apply_filters( 'sa_bootstap_paginate_links', $links );
}
function sa_bootstrap_paginate_links() {
    echo sa_get_bootstrap_paginate_links();
}

/*** custom social Share starts ***/
/*function ds_post_tweet_count( $post_id ) {
    // Check for transient
    if ( ! ( $count = get_transient( 'ds_post_tweet_count' . $post_id ) ) ) {
        $url = get_permalink( $post_id );
        // Do API call
        $response = wp_remote_retrieve_body( wp_remote_get( 'https://cdn.api.twitter.com/1/urls/count.json?url=' . $url ) );
        // If error in API call, stop and don't store transient
        if ( is_wp_error( $response ) )
            return 'error';
        // Decode JSON
        $json = json_decode( $response );
        // Set total count
        $count = absint( $json->count );
        // Set transient to expire every 30 minutes
        set_transient( 'ds_post_tweet_count' . $post_id, absint( $count ), 30 * MINUTE_IN_SECONDS );
    }
    return absint( $count );
} */ /** Twitter End */

/** pinterest count starts */
/*function get_pinterest_count($post_id) {

    //$url = get_permalink( $post_id );
	if(isset($_REQUEST['img'])){
		 $link = get_the_permalink($post_id).'?img='.$_REQUEST['img'];
	} else {
		 $link = get_the_permalink($post_id);
	}
    $pin_agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)';
    //$pin_url = 'http://api.pinterest.com/v1/urls/count.json?callback=receiveCount&url='.$url;
    $pin_url = 'http://api.pinterest.com/v1/urls/count.json?callback=receiveCount&url='.$link;
    $ch31 = curl_init($pin_url);
    curl_setopt($ch31, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch31, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch31, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch31, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch31, CURLOPT_HEADER, false);
    curl_setopt($ch31, CURLOPT_ENCODING, "");
    curl_setopt($ch31, CURLOPT_USERAGENT, $pin_agent);
    curl_setopt($ch31, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch31, CURLOPT_MAXREDIRS, 3);
    curl_setopt($ch31, CURLOPT_RETURNTRANSFER, true);
    $pin_content = curl_exec($ch31);
    curl_close($ch31);
    $html = str_replace("receiveCount(","",$pin_content);
    $html = substr($html,"0", -1);
    $pinterest = json_decode($html,true);
    $pincount =  $pinterest['count'];
    if(!$pincount) {
        $pincount = 0;
    }
    return $pincount;
}*/
/** pinterest count end */
/** Get like count from Facebook FQL  */
/*function get_facebook_count($post_id) {

	if(isset($_REQUEST['img'])){
		 $link = get_the_permalink($post_id).'?img='.$_REQUEST['img'];
	} else {
		 $link = get_the_permalink($post_id);
	}

    //$url = get_permalink( $post_id );
    $agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)';
	$parse_url = 'https://graph.facebook.com/?id='.$link.'&fields=og_object{engagement}';
    //$parse_url = 'https://graph.facebook.com/v3.0/?access_token=EAAOEWVbekswBAI3BREjCwB3zcfPuXmNHaJ8ZCMObWUyh0S3VmCYOJK0qyjZAacmPDETtkI4zh4XxYlSmgNvxkAKDUmozyCyngOH1FZAaqqBM7E0HNVk66SoCJjs1mkqtRJW145iU6EdqiJosUT2URxK3xdDaAWhaskEvh3GHQfnrrlWcCpf&id='.$link.'&fields=og_object{engagement}';
    $ch21 = curl_init($parse_url);
    curl_setopt($ch21, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch21, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch21, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch21, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch21, CURLOPT_HEADER, false);
    curl_setopt($ch21, CURLOPT_ENCODING, "");
    curl_setopt($ch21, CURLOPT_USERAGENT, $agent);
    curl_setopt($ch21, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch21, CURLOPT_MAXREDIRS, 3);
    curl_setopt($ch21, CURLOPT_RETURNTRANSFER, true);
    $content = curl_exec($ch21);
    curl_close($ch21);
    $result = 0;
    $result_comments = 0;
    if ($content != '') {
        //print "response = ".$content;
        $content = json_decode ( $content, true );
        $data_parsers = $content;
        //print_r($data_parsers);
        //$result = isset ( $data_parsers ['share'] ['share_count'] ) ? intval ( $data_parsers ['share'] ['share_count'] ) : 0;
        $result = isset ( $data_parsers ['og_object'] ['engagement'] ['count'] ) ? intval ( $data_parsers ['og_object'] ['engagement'] ['count'] ) : 0;
    }
    return $result;
}*/ /** Facebook End  */

/*function get_facebook_count( $post_id ) {
	$cache_key = 'et_share' . $post_id;
    $access_token = '1650485341730886|yB4cZ-lP3rFiHyJKsCapWMtNesY';
    //$access_token = 'EAACEdEose0cBAIdxnxTILpJ0fjZBRQLU8ixKZBhYfey5tqqzF33K3xprNSqqRVZAfqbq7qHPjUD96pZCLAW17Yv9fzI3APE3D0SuWf6dsMDMp3ZCp4JjWzwTyTcTgaO6HqNV1jhIGYPYRaKzHSVOShtm6PmWZC9boRAbRB0owio94XqozNZBVZAtj9I0DzNYbYv6gkNr04BCALYRqZBAishEa';
	$count = get_transient( $cache_key ); // try to get value from Wordpress cache
	// if no value in the cache
	if ( $count == 0 ) {
		$response = wp_remote_get('https://graph.facebook.com/v3.0/?id=' . urlencode( get_permalink( $post_id ) ) . '&access_token=' . $access_token .'&fields=og_object{engagement}');
		$body = json_decode( $response['body'] );
		//print_r($body);
		echo $count = intval( $body->share->share_count );
		set_transient( $cache_key, $count, 3600 ); // store value in cache for a 1 hour
	}
	return $count;
}*/

/** Get share count from Google Plus */
/*function ds_post_plusone_count($post_id) {
    // Check for transient
    if ( ! ( $count = get_transient( 'ds_post_plus_count' . $post_id ) ) ) {
        $url = get_permalink( $post_id );
        $args = array(
            'method' => 'POST',
            'headers' => array(
                // setup content type to JSON
                'Content-Type' => 'application/json'
            ),
            // setup POST options to Google API
            'body' => json_encode(array(
                'method' => 'pos.plusones.get',
                'id' => 'p',
                'method' => 'pos.plusones.get',
                'jsonrpc' => '2.0',
                'key' => 'p',
                'apiVersion' => 'v1',
                'params' => array(
                    'nolog'=>true,
                    'id'=> $url,
                    'source'=>'widget',
                    'userId'=>'@viewer',
                    'groupId'=>'@self'
                )
            )),
            // disable checking SSL sertificates
            'sslverify'=>false
        );
        // retrieves JSON with HTTP POST method for current URL
        $json_string = wp_remote_post("https://clients6.google.com/rpc", $args);
        if (is_wp_error($json_string)){
            // return zero if response is error
            return "0";
        } else {
            $json = json_decode($json_string['body'], true);
            // return count of Google +1 for requsted URL
            $count = intval( $json['result']['metadata']['globalCounts']['count'] );
        }
        // Set transient to expire every 30 minutes
        set_transient( 'ds_post_plus_count' . $post_id, absint( $count ), 30 * MINUTE_IN_SECONDS );
    }
    return absint( $count );
} /** Google Plus End */

/** Get Count from LinkedIn */
/*function ds_post_linkedin_count( $post_id ) {
    // Check for transient
    if ( ! ( $count = get_transient( 'ds_post_linkedin_count' . $post_id ) ) ) {
        $url = get_permalink( $post_id );
        // Do API call
        $response = wp_remote_retrieve_body( wp_remote_get( 'https://www.linkedin.com/countserv/count/share?url=' . $url . '&format=json' ) );
        // If error in API call, stop and don't store transient
        if ( is_wp_error( $response ) )
            return 'error';
        // Decode JSON
        $json = json_decode( $response );
        // Set total count
        $count = absint( $json->count );
        // Set transient to expire every 30 minutes
        set_transient( 'ds_post_linkedin_count' . $post_id, absint( $count ), 30 * MINUTE_IN_SECONDS );
    }
    return absint( $count );
} */ /** LinkedIn End */
function  wpbitly_get_shortlink_custom($permalink, $post_id){
    $shortlink = '';
    if($permalink == 'shorten'){
        $long_url='';
        $long_url = $post_id['longUrl'];
    }else{
        $content_post = get_post($post_id);
        $long_url = get_permalink($post_id); //get_site_url().'/'.date('Y/m/d',strtotime($content_post->post_date)).'/'.$content_post->post_name.'/';
        $shortlink = get_post_meta($post_id, '_wpbitly', true);
    }
    if(empty($shortlink)){
    $apiv4 = 'https://api-ssl.bitly.com/v4/bitlinks';
    $genericAccessToken = '67115d95255f6134c14c8d0a0bf589d8926a3e0e';
    //live token
    //local f82590350e5a940749b0caab8be77bdd76841020
    //live 67115d95255f6134c14c8d0a0bf589d8926a3e0e
    $data = array(
        'long_url' => $long_url
    );
    $payload = json_encode($data);
    $header = array(
        'Authorization: Bearer ' . $genericAccessToken,
        'Content-Type: application/json',
        'Content-Length: ' . strlen($payload)
    );
    $ch = curl_init($apiv4);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $result = curl_exec($ch);
   //print_r($result );
    $short = json_decode($result);

    $shortlink = $short->link;
    if($post_id){
        update_post_meta($post_id, '_wpbitly', $shortlink);
    }
    }
    return $shortlink;
    }
function ds_social_media_icons() {
    // Get the post ID
    $post_id = get_the_ID();  $permalink = get_site_url();
  // print_r(wpbitly_get_shortlink_custom($permalink, $post_id));
    ?>
    <ul class="social-icons">
        <div class="nc_socialPanel swp_flatFresh swp_d_fullColor swp_i_fullColor swp_o_fullColor scale-100 scale-fullWidth" data-position="both" data-float="floatNone" data-count="6" data-floatColor="#ffffff" data-emphasize="0">
        <div class="nc_tweetContainer telegram_link">
                <a rel="nofollow"  href="https://t.me/share/url?url=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>" target="_blank" class="nc_tweet1">
                    <span class="iconFiller">
                        <span class="spaceManWilly">
                            <i class="sw fa fa-telegram"></i>
                            <span class="swp_share"> Share</span>
                        </span>
                    </span>
                    <span class="swp_count my_count" data-sc-ln="<?php the_permalink(); ?>" ></span>
                </a>
            </div>
            <div class="nc_tweetContainer swp_fb" data-id="4" data-network="facebook">
                <a rel="nofollow" target="_blank" data-link="javascript:void(0)" class="nc_tweet1" onclick="javascript:popupCenter('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;appId=energytherapy','Facebook Share', '540', '400');return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;appId=energytherapy">
                    <span class="iconFiller">
                        <span class="spaceManWilly">
                            <i class="sw sw-facebook"></i>
                            <span class="swp_share"> Share</span>
                        </span>
                    </span>
                    <span class="swp_count my_count" data-sc-fb="<?php the_permalink(); ?>" ></span>
                </a>
            </div>

            <div class="nc_tweetContainer twitter" data-id="3" data-network="twitter">
                <a rel="nofollow" target="_blank" onclick="javascript:popupCenter('https://twitter.com/share?&amp;url=<?php echo $shortlink = wpbitly_get_shortlink_custom($permalink, $post_id); ?>&amp;text=<?php echo str_replace('|','',get_the_title( $post_id )); ?>&amp;via=energy_therapy','Tweet', '540', '400');return false;" href="https://twitter.com/share?&amp;url=<?php echo $shortlink; ?>&amp;text=<?php echo str_replace('|','',get_the_title( $post_id )); ?>&amp;via=energy_therapy" class="nc_tweet1">
                    <span class="iconFiller">
                        <span class="spaceManWilly">
                            <i class="sw sw-twitter"></i>
                            <span class="swp_share"> Tweet</span>
                        </span>
                    </span>
                    <span class="swp_count my_count" data-sc-tw="<?php the_permalink(); ?>" ></span>
                </a>
            </div>
            <!--div class="nc_tweetContainer googlePlus" data-id="2" data-network="google_plus">
                <a rel="nofollow"  onclick="javascript:popupCenter('https://plus.google.com/share?url=<?php //the_permalink(); ?>','Share on Google+', '600', '600');return false;" href="https://plus.google.com/share?url=<?php //the_permalink(); ?>" target="blank" data-link="javascript:void(0)" class="nc_tweet1">
                    <span class="iconFiller">
                        <span class="spaceManWilly">
                            <i class="sw sw-google-plus"></i>
                            <span class="swp_share"> +1</span>
                        </span>
                    </span>
                    <span class="swp_count my_count" data-sc-gp="<?php //the_permalink(); ?>" ></span>
                </a>
            </div-->

            <div class="nc_tweetContainer nc_pinterest" data-id="6" data-network="pinterest">
                <a rel="nofollow" href="javascript:void(0);" onclick="var e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e);" class="nc_tweet noPop">
                    <span class="iconFiller">
                        <span class="spaceManWilly">
                            <i class="sw sw-pinterest"></i>
                            <span class="swp_share"> Pin</span>
                        </span>
                    </span>
                    <span class="swp_count my_count" data-sc-pr="<?php the_permalink(); ?>" ></span>
                </a>
            </div>
            <div class="nc_tweetContainer linkedIn" data-id="5" data-network="linked_in">
                <a rel="nofollow" onclick="javascript:popupCenter('http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $shortlink = wpbitly_get_shortlink_custom($permalink, $post_id); ?>&amp;title=<?php echo str_replace('|','',get_the_title( $post_id )); ?>&amp;source=<?php echo site_url(); ?>','Share on LinkedIn', '520', '570');return false;" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $shortlink; ?>&amp;title=<?php echo str_replace('|','',get_the_title( $post_id )); ?>&amp;source=<?php echo site_url(); ?>" target="blank" data-link="javascript:void(0)" class="nc_tweet1">
                    <span class="iconFiller">
                        <span class="spaceManWilly">
                            <i class="sw sw-linkedin"></i>
                            <span class="swp_share"> Share</span>
                        </span>
                    </span>
                    <span class="swp_count my_count" data-sc-ln="<?php the_permalink(); ?>" ></span>
                </a>
            </div>

            <div class="nc_tweetContainer totes totesalt" data-id="7" >
                <span class="swp_count" style="margin-left:0px;">
					<span class="swp_label">Shares</span>
                </span>
            </div>
        </div>
    </ul>

<?php }

function ds_social_share_icons() {
    // Get the post ID
    $post_id = get_the_ID();
		if(isset($_REQUEST['img'])){
		 $link = get_the_permalink().'?img='.$_REQUEST['img'];
	} else {
		 $link = get_the_permalink();
	}
	$endpoint ='shorten';
	$params = array();
    $params['longUrl'] = $link;
    // echo 'dsfsadf';
    // echo wpbitly_get_shortlink_custom($endpoint,$params);
	?>
    <ul class="social-icons">
        <div class="nc_socialPanel swp_flatFresh swp_d_fullColor swp_i_fullColor swp_o_fullColor scale-100 scale-fullWidth" data-post-id="<?php echo $post_id; ?>" data-position="both" data-float="floatNone" data-count="6" data-floatColor="#ffffff" data-emphasize="0">
        <div class="nc_tweetContainer telegram_link">
                <a rel="nofollow" href="https://t.me/share/url?url=<?php the_permalink(); ?> &text=<?php the_title(); ?>" target="_blank" class="nc_tweet1">
                    <span class="iconFiller">
                        <span class="spaceManWilly">
                            <i class="sw fa fa-telegram"></i>
                            <span class="swp_share"> Share</span>
                        </span>
                    </span>
                    <span class="swp_count my_count" data-sc-ln="<?php the_permalink(); ?>" ></span>
                </a>
            </div>
            <div class="nc_tweetContainer swp_fb" data-id="4" data-network="facebook">
                <a rel="nofollow" target="_blank" data-link="javascript:void(0)" class="nc_tweet1" onclick="javascript:popupCenter('https://www.facebook.com/sharer/sharer.php?u=<?php echo $link; //the_permalink(); ?>&amp;appId=energytherapy','Facebook Share', '540', '400');return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $link; //the_permalink(); ?>&amp;appId=energytherapy">
                    <span class="iconFiller">
                        <span class="spaceManWilly">
                            <i class="sw sw-facebook"></i>
                            <span class="swp_share"> Share</span>
                        </span>
                    </span>
                    <span class="swp_count my_count" data-sc-fb="<?php echo $link; ?>" ></span>
                </a>
            </div>
            <?php if(isset($_REQUEST['img'])){ ?>
            <div class="nc_tweetContainer twitter" data-id="3" data-network="twitter">
                <a rel="nofollow" target="_blank" onclick="javascript:popupCenter('https://twitter.com/share?&amp;url=<?php  echo $shortlink = wpbitly_get_shortlink_custom($endpoint,$params); ?>&amp;text=<?php the_title(); ?>&amp;via=energy_therapy','Tweet', '540', '400');return false;" href="https://twitter.com/share?&amp;url=<?php  echo $shortlink; ?>&amp;text=<?php the_title(); ?>&amp;via=energy_therapy" class="nc_tweet1">
                    <span class="iconFiller">
                        <span class="spaceManWilly">
                            <i class="sw sw-twitter"></i>
                            <span class="swp_share"> Tweet</span>
                        </span>
                    </span>
                    <span class="swp_count my_count" data-sc-tw="<?php echo $link; ?>" ></span>
                </a>
            </div>
            <?php } else { ?>
            <div class="nc_tweetContainer twitter" data-id="3" data-network="twitter">
                <a rel="nofollow" target="_blank" onclick="javascript:popupCenter('https://twitter.com/share?&amp;url=<?php  echo $shortlink = wpbitly_get_shortlink_custom($permalink, $post_id); ?>&amp;text=<?php the_title(); ?>&amp;via=energy_therapy','Tweet', '540', '400');return false;" href="https://twitter.com/share?&amp;url=<?php  echo $shortlink; ?>&amp;text=<?php the_title(); ?>&amp;via=energy_therapy" class="nc_tweet1">
                    <span class="iconFiller">
                        <span class="spaceManWilly">
                            <i class="sw sw-twitter"></i>
                            <span class="swp_share"> Tweet</span>
                        </span>
                    </span>
                    <span class="swp_count" data-sc-tw="<?php echo $link; ?>" ></span>
                </a>
            </div>
            <?php } ?>
            <!--div class="nc_tweetContainer googlePlus" data-id="2" data-network="google_plus">
                <a rel="nofollow"  onclick="javascript:popupCenter('https://plus.google.com/share?url=<?php //echo $link; //the_permalink(); ?>','Share on Google+', '600', '600');return false;" href="https://plus.google.com/share?url=<?php //echo $link; //the_permalink(); ?>" target="blank" data-link="javascript:void(0)" class="nc_tweet1">
                    <span class="iconFiller">
                        <span class="spaceManWilly">
                            <i class="sw sw-google-plus"></i>
                            <span class="swp_share"> +1</span>
                        </span>
                    </span>
                    <span class="swp_count my_count" data-sc-gp="<?php //echo $link; ?>" ></span>
                </a>
            </div-->

            <div class="nc_tweetContainer nc_pinterest" data-id="6" data-network="pinterest">
                <a rel="nofollow" href="javascript:void(0);" onclick="var e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e);" class="nc_tweet noPop">
                    <span class="iconFiller">
                        <span class="spaceManWilly">
                            <i class="sw sw-pinterest"></i>
                            <span class="swp_share"> Pin</span>
                        </span>
                    </span>
                    <span class="swp_count" data-sc-pr="<?php echo $link; ?>" ></span>
                </a>
            </div>
            <div class="nc_tweetContainer linkedIn" data-id="5" data-network="linked_in">
                <a rel="nofollow" onclick="javascript:popupCenter('http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $shortlink = wpbitly_get_shortlink_custom($endpoint,$params); //echo $shortlink = wpwpbitly_get_shortlink_custom$link); // ?>&amp;title=<?php the_title(); ?>&amp;source=<?php echo site_url(); ?>','Share on LinkedIn', '520', '570');return false;" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $shortlink; ?>&amp;title=<?php the_title(); ?>&amp;source=<?php echo site_url(); ?>" target="blank" data-link="javascript:void(0)" class="nc_tweet1">
                    <span class="iconFiller">
                        <span class="spaceManWilly">
                            <i class="sw sw-linkedin"></i>
                            <span class="swp_share"> Share</span>
                        </span>
                    </span>
                    <span class="swp_count my_count" data-sc-ln="<?php echo $link; ?>" ></span>
                </a>
            </div>

            <div class="nc_tweetContainer totes totesalt" data-id="7" >
                <span class="swp_count" style="margin-left:0px;">
					<span class="swp_label">Shares</span>
                </span>
            </div>
        </div>
    </ul>

<?php }

function ds_social_media_small_icons() {

    // Get the post ID
    $post_id = get_the_ID();    $permalink=get_site_url();
   ?>

    <div class="social-icons-wrap small-icons test1">
        <ul class="social-icons">
        <li class="social-icon telegram_link">
                <a  href="https://t.me/share/url?url=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>" target="_blank">
                    <i class="fa fa-telegram"></i>
                    <span class="share-text-fontz"> Share </span>
                    <span class="share-count" data-sc-ln="<?php the_permalink(); ?>" ></span>
                </a>
            </li>
            <!-- Facebook Button-->
            <li class="social-icon facebook">
                <a onclick="javascript:popupCenter('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;appId=energytherapy','Facebook Share', '540', '400');return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;appId=energytherapy" target="blank">
                    <i class="fa fa-facebook"></i>
                    <span class="share-text-fontz">Share</span>
                    <span class="share-count" data-sc-fb="<?php the_permalink(); ?>" ></span>
                </a>
            </li>
            <!-- Twitter Button -->
			<?php if($post_id == 12983){?>
            <li class="social-icon twitter">
                <a onclick="javascript:popupCenter('https://twitter.com/share?&amp;url=<?php echo $shortlink = wpbitly_get_shortlink_custom($permalink, $post_id); ?>&amp;text=Explore The <?php the_title(); ?>&amp;via=energy_therapy','Tweet', '540', '400');return false;" href="https://twitter.com/share?&amp;url=<?php echo $shortlink; ?>&amp;text=Explore The <?php the_title(); ?>&amp;via=energy_therapy" target="blank">
                    <i class="fa fa-twitter"></i>
                    <span class="share-text-fontz"> Tweet </span>
                    <span class="share-count" data-sc-tw="<?php the_permalink(); ?>" ></span>
                </a>
            </li>
			<?php } else { ?>
			<li class="social-icon twitter">
                <a onclick="javascript:popupCenter('https://twitter.com/share?&amp;url=<?php echo $shortlink = wpbitly_get_shortlink_custom($permalink, $post_id); ?>&amp;text=<?php the_title(); ?>&amp;via=energy_therapy','Tweet', '540', '400');return false;" href="https://twitter.com/share?&amp;url=<?php echo $shortlink; ?>&amp;text=<?php the_title(); ?>&amp;via=energy_therapy" target="blank">
                    <i class="fa fa-twitter"></i>
                    <span class="share-text-fontz"> Tweet </span>
                    <span class="share-count" data-sc-tw="<?php the_permalink(); ?>" ></span>
                </a>
            </li>
			<?php } ?>
            <li class="social-icon pinterest">
                <!--<a rel="nofollow" href="http://www.pinterest.com/pin/create/button/?url=<?php /*the_permalink(); */?>&media=<?php /*echo $pin_img_url = get_the_post_thumbnail_url($post_id); */?>&description=<?php /*the_title();*/?>" onclick="javascript:popupCenter('http://www.pinterest.com/pin/create/button/?url=<?php /*the_permalink();*/?>&media=<?php /*echo $pin_img_url = get_the_post_thumbnail_url($post_id); */?>&description=<?php /*the_title();*/?>','Pinit','scrollbars=yes,width=540,height=400');return false;"><i class="fa fa-pinterest"></i><span class="share-text-fontz"> Pin </span><span class="share-count"><?php /*$pinterest_count = get_pinterest_count( $post_id ); */?></span></a>-->
                <a rel="nofollow" href="javascript:void(0);" onclick="var e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e);" class="nc_tweet noPop">
                    <i class="fa fa-pinterest"></i>
                    <span class="share-text-fontz"> Pin </span>
                    <span class="share-count" data-sc-pr="<?php the_permalink(); ?>" ></span>
                </a>
            </li>
            <!-- Google + Button-->
            <!--li class="social-icon google-plus">
                <a onclick="javascript:popupCenter('https://plus.google.com/share?url=<?php //the_permalink(); ?>','Share on Google+', '600', '600');return false;" href="https://plus.google.com/share?url=<?php //the_permalink(); ?>" target="blank">
                    <i class="fa fa-google-plus"></i>
                    <span class="share-text-fontz"> +1 </span>
                    <span class="share-count" data-sc-gp="<?php //the_permalink(); ?>" ></span>
                </a>
            </li-->
            <!-- LinkedIn Button -->
            <li class="social-icon linkedin">
                <a onclick="javascript:popupCenter('http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $shortlink; ?>&amp;title=<?php the_title(); ?>&amp;source=<?php echo site_url(); ?>','Share on LinkedIn', '520', '570');return false;" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>&amp;source=<?php echo site_url(); ?>" target="blank">
                    <i class="fa fa-linkedin"></i>
                    <span class="share-text-fontz"> Share </span>
                    <span class="share-count" data-sc-ln="<?php the_permalink(); ?>" ></span>
                </a>
            </li>


        </ul>
        <div class="social-icon total-share">
            <span class="icon-div"><img src="<?php echo get_template_directory_uri(); ?>/images/share-icon.png" alt="share-icon" /></span><span class="total-text"><span> </span><br/>SHARES </span>
        </div>
    </div><!-- .social-icons-wrap -->

<?php }

function ds_social_media_icons_author() {

    // Get the post ID
    $post_id = get_the_ID();
    $permalink=get_site_url();?>

    <div class="social-icons-wrap small-icons test1">
        <ul class="social-icons">
            <!-- Facebook Button-->
            <li class="social-icon telegram_link">
                <a  href="https://t.me/share/url?url=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>" target="_blank">
                    <i class="fa fa-telegram"></i>
                    <span class="share-text-fontz"> Share </span>
                    <span class="share-count" data-sc-ln="<?php the_permalink(); ?>" ></span>
                </a>
            </li>
            <li class="social-icon facebook">
                <a onclick="javascript:popupCenter('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;appId=energytherapy','Facebook Share', '540', '400');return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;appId=energytherapy" target="blank">
                    <i class="fa fa-facebook"></i>
                    <span class="share-text-fontz"> Share</span>
                    <span class="share-count" data-sc-fb="<?php the_permalink(); ?>" ></span>
                </a>
            </li>
            <!-- Twitter Button -->
            <li class="social-icon twitter">
                <a onclick="javascript:popupCenter('https://twitter.com/share?&amp;url=<?php echo $shortlink = wpbitly_get_shortlink_custom($permalink, $post_id); ?>&amp;text=Explore Inspiring And Meaningful Quotes by <?php the_title(); ?>&amp;via=energy_therapy','Tweet', '540', '400');return false;" href="https://twitter.com/share?&amp;url=<?php echo $shortlink; ?>&amp;text=Explore Inspiring And Meaningful Quotes by <?php the_title(); ?>&amp;via=energy_therapy" target="blank">
                    <i class="fa fa-twitter"></i>
                    <span class="share-text-fontz"> Tweet </span>
                    <span class="share-count" data-sc-tw="<?php the_permalink(); ?>" ></span>
                </a>
            </li>
            <li class="social-icon pinterest">
                <a rel="nofollow" href="javascript:void(0);" onclick="var e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e);" class="nc_tweet noPop">
                    <i class="fa fa-pinterest"></i>
                    <span class="share-text-fontz"> Pin </span>
                    <span class="share-count" data-sc-pr="<?php the_permalink(); ?>" ></span>
                </a>
            </li>
            <!-- Google + Button-->
            <!--li class="social-icon google-plus">
                <a onclick="javascript:popupCenter('https://plus.google.com/share?url=<?php //the_permalink(); ?>','Share on Google+', '600', '600');return false;" href="https://plus.google.com/share?url=<?php //the_permalink(); ?>" target="blank">
                    <i class="fa fa-google-plus"></i>
                    <span class="share-text-fontz"> +1 </span>
                    <span class="share-count" data-sc-gp="<?php //the_permalink(); ?>" ></span>
                </a>
            </li-->
            <!-- LinkedIn Button -->
            <li class="social-icon linkedin">
                <a onclick="javascript:popupCenter('http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $shortlink = wpbitly_get_shortlink_custom($permalink, $post_id); ?>&amp;title=<?php the_title(); ?>&amp;source=<?php echo site_url(); ?>','Share on LinkedIn', '520', '570');return false;" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>&amp;source=<?php echo site_url(); ?>" target="blank">
                    <i class="fa fa-linkedin"></i>
                    <span class="share-text-fontz"> Share </span>
                    <span class="share-count" data-sc-ln="<?php the_permalink(); ?>" ></span>
                </a>
            </li>


        </ul>
        <div class="social-icon total-share">
            <span class="icon-div"><img src="<?php echo get_template_directory_uri(); ?>/images/share-icon.png" alt="share-icon" /></span><span class="total-text"><span> </span><br/>SHARES </span>
        </div>
    </div><!-- .social-icons-wrap -->

<?php }

/*function get_fb_count($url) {

    //$url = 'https://www.energytherapy.biz/quotes/';
    $agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)';
    $parse_url = 'https://graph.facebook.com/?id='.$url;
    $ch21 = curl_init($parse_url);
    curl_setopt($ch21, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch21, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch21, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch21, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch21, CURLOPT_HEADER, false);
    curl_setopt($ch21, CURLOPT_ENCODING, "");
    curl_setopt($ch21, CURLOPT_USERAGENT, $agent);
    curl_setopt($ch21, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch21, CURLOPT_MAXREDIRS, 3);
    curl_setopt($ch21, CURLOPT_RETURNTRANSFER, true);
    $content = curl_exec($ch21);
    curl_close($ch21);
    $result = 0;
    $result_comments = 0;

    if ($content != '') {
        //print "response = ".$content;
        $content = json_decode ( $content, true );
        $data_parsers = $content;
        $result = isset ( $data_parsers ['share'] ['share_count'] ) ? intval ( $data_parsers ['share'] ['share_count'] ) : 0;
    }

    return $result;

}

function get_pin_count($url) {

    //$url = get_permalink( $post_id );
    $pin_agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)';
    $pin_url = 'http://api.pinterest.com/v1/urls/count.json?callback=receiveCount&url='.$url;
    $ch31 = curl_init($pin_url);
    curl_setopt($ch31, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch31, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch31, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch31, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch31, CURLOPT_HEADER, false);
    curl_setopt($ch31, CURLOPT_ENCODING, "");
    curl_setopt($ch31, CURLOPT_USERAGENT, $pin_agent);
    curl_setopt($ch31, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch31, CURLOPT_MAXREDIRS, 3);
    curl_setopt($ch31, CURLOPT_RETURNTRANSFER, true);
    $pin_content = curl_exec($ch31);
    curl_close($ch31);
    $html = str_replace("receiveCount(","",$pin_content);
    $html = substr($html,"0", -1);
    $pinterest = json_decode($html,true);
    $pincount =  $pinterest['count'];
    if(!$pincount) {
        $pincount = 0;
    }
    return $pincount;
}

function get_plusone_count($url) {
    if ( ! ( $count = get_transient( 'get_plusone_count') ) ) {
        $args = array(
            'method' => 'POST',
            'headers' => array(
                'Content-Type' => 'application/json'
            ),
            'body' => json_encode(array(
                'method' => 'pos.plusones.get',
                'id' => 'p',
                'method' => 'pos.plusones.get',
                'jsonrpc' => '2.0',
                'key' => 'p',
                'apiVersion' => 'v1',
                'params' => array(
                    'nolog'=>true,
                    'id'=> $url,
                    'source'=>'widget',
                    'userId'=>'@viewer',
                    'groupId'=>'@self'
                )
            )),
            'sslverify'=>false
        );
        $json_string = wp_remote_post("https://clients6.google.com/rpc", $args);
		//print_r ($json_string);
        if (is_wp_error($json_string)){
            return "0";
        } else {
            $json = json_decode($json_string['body'], true);
            $count = intval( $json['result']['metadata']['globalCounts']['count'] );
        }
        set_transient( 'get_plusone_count' . absint( $count ), 30 * MINUTE_IN_SECONDS );
    }
    return absint( $count );
}

function get_linkedin_count( $url ) {
	 if ( ! ( $count = get_transient( 'get_linkedin_count' ) ) ) {
        $response = wp_remote_retrieve_body( wp_remote_get( 'https://www.linkedin.com/countserv/count/share?url=' . $url . '&format=json' ) );
        if ( is_wp_error( $response ) )
            return 'error';
        $json = json_decode( $response );
        $count = absint( $json->count );
		set_transient( 'get_linkedin_count' . absint( $count ), 30 * MINUTE_IN_SECONDS );
    }
    return absint( $count );
}
*/
function ds_social_quote_icons() {
    $actual_link1 = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $val = explode('?',$actual_link1);
    if(count($val) > 1){
        $actual_link = $val[0];
    }else{
        $actual_link = $val[0];
    }
	$endpoint ='shorten';
	$params = array();
    $params['longUrl'] = $actual_link;
  //print_r(wpbitly_get_shortlink_custom($endpoint,$params));
    // Get the post ID
    //$post_id = 'https://www.energytherapy.biz/quotes/'?>
    <div class="social-icons-wrap small-icons">
        <ul class="social-icons">
            <!-- Facebook Button-->
            <li class="social-icon telegram_link">
                <a href="https://t.me/share/url?url=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>" target="_blank">
                    <i class="fa fa-telegram"></i>
                    <span class="share-text-fontz"> Share </span>
                    <span class="share-count" data-sc-ln="<?php echo $actual_link; ?>" ></span>
                </a>
            </li>
            <li class="social-icon facebook">
                <a onclick="javascript:popupCenter('https://www.facebook.com/sharer/sharer.php?u=<?php echo $actual_link; ?>&amp;appId=energytherapy','Facebook Share', '540', '400');return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $actual_link; ?>&amp;appId=energytherapy" target="blank">
                    <i class="fa fa-facebook"></i>
                    <span class="share-text-fontz"> Share</span>
                    <span class="share-count" data-sc-fb="<?php echo $actual_link; ?>" ></span>
                </a>
            </li>
            <!-- Twitter Button -->
            <!--li class="social-icon twitter">
                <a onclick="javascript:popupCenter('https://twitter.com/share?&amp;url=http://bit.ly/2DNyr6j&amp;text=Explore The Latest Insightful And Meaningful Quotes On Energy Therapy&amp;via=energy_therapy','Tweet', '540', '400');return false;" href="https://twitter.com/share?&amp;url=http://bit.ly/2DNyr6j&amp;text=Explore The Latest Insightful And Meaningful Quotes On Energy Therapy&amp;via=energy_therapy" target="blank"><i class="fa fa-twitter"></i><span class="share-text-fontz"> Tweet </span><span class="share-count"><?php //$total_twit_count = ds_post_tweet_count( $post_id );  $twit_count = ds_post_tweet_count( $post_id ); if($twit_count < 1000000 && $twit_count > 750) {$twit_count = round($twit_count/1000); echo $twit_count."K";} else if($twit_count > 1000000) { $twit_count = round($twit_count/1000000);echo $twit_count."M";} else if($twit_count == 0){} else {echo $twit_count;} ?></span></a>
            </li-->
			<li class="social-icon twitter">
                <a onclick="javascript:popupCenter('https://twitter.com/share?&amp;url=<?php echo $shortlink = wpbitly_get_shortlink_custom($endpoint,$params); ?>&amp;text=Explore The Latest Insightful And Meaningful Quotes On Energy Therapy&amp;via=energy_therapy','Tweet', '540', '400');return false;" href="https://twitter.com/share?&amp;url=<?php echo ''; ?>&amp;text=Explore The Latest Insightful And Meaningful Quotes On Energy Therapy&amp;via=energy_therapy" target="blank">
                    <i class="fa fa-twitter"></i>
                    <span class="share-text-fontz"> Tweet </span>
                    <span class="share-count" data-sc-tw="<?php echo $actual_link; ?>" ></span>
                </a>
            </li>
            <li class="social-icon pinterest">
                <!--<a rel="nofollow" href="http://www.pinterest.com/pin/create/button/?url=<?php /*the_permalink(); */?>&media=<?php /*echo $pin_img_url = get_the_post_thumbnail_url($post_id); */?>&description=<?php /*the_title();*/?>" onclick="javascript:popupCenter('http://www.pinterest.com/pin/create/button/?url=<?php /*the_permalink();*/?>&media=<?php /*echo $pin_img_url = get_the_post_thumbnail_url($post_id); */?>&description=<?php /*the_title();*/?>','Pinit','scrollbars=yes,width=540,height=400');return false;"><i class="fa fa-pinterest"></i><span class="share-text-fontz"> Pin </span><span class="share-count"><?php /*$pinterest_count = get_pinterest_count( $post_id ); */?></span></a>-->
                <a rel="nofollow" href="javascript:void(0);" onclick="var e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e);" class="nc_tweet noPop">
                    <i class="fa fa-pinterest"></i>
                    <span class="share-text-fontz"> Pin </span>
                    <span class="share-count" data-sc-pr="<?php echo $actual_link; ?>" ></span>
                </a>
            </li>
            <!-- Google + Button-->
            <!--li class="social-icon google-plus">
                <a onclick="javascript:popupCenter('https://plus.google.com/share?url=<?php //echo $actual_link; ?>','Share on Google+', '600', '600');return false;" href="https://plus.google.com/share?url=<?php //echo $actual_link; ?>" target="blank">
                    <i class="fa fa-google-plus"></i>
                    <span class="share-text-fontz"> +1 </span>
                    <span class="share-count" data-sc-gp="<?php //echo $actual_link; ?>" ></span>
                </a>
            </li-->
            <!-- LinkedIn Button -->
            <!--li class="social-icon linkedin">
                <a onclick="javascript:popupCenter('http://www.linkedin.com/shareArticle?mini=true&amp;url=http://bit.ly/2DNyr6j&amp;title=Quotes&amp;source=http://bit.ly/2ByyZeG','Share on LinkedIn', '520', '570');return false;" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://bit.ly/2DNyr6j&amp;title=Quotes&amp;source=http://bit.ly/2ByyZeG" target="blank"><i class="fa fa-linkedin"></i><span class="share-text-fontz"> Share </span><span class="share-count"><?php //$li_count = get_linkedin_count($actual_link); ?></span></a>
            </li-->
			<li class="social-icon linkedin">
                <a onclick="javascript:popupCenter('http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $shortlink; ?>&amp;title=Quotes&amp;source=<?php echo $shortlink; ?>','Share on LinkedIn', '520', '570');return false;" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $shortlink; ?>&amp;title=Quotes&amp;source=<?php echo $shortlink; ?>" target="blank">
                    <i class="fa fa-linkedin"></i>
                    <span class="share-text-fontz"> Share </span>
                    <span class="share-count" data-sc-ln="<?php echo $actual_link; ?>" ></span>
                </a>
            </li>

        </ul>
		<div class="social-icon total-share">
			<span class="icon-div"><img src="<?php echo get_template_directory_uri(); ?>/images/share-icon.png" alt="share-icon" /></span><span class="total-text"><span> </span><br/>SHARES </span>
		</div>
    </div><!-- .social-icons-wrap -->
<?php }
function ds_social_media_taxonomy_icons() {
	is_tax();
	$term = get_queried_object()->term_id;
	$link = get_term_link( $term, 'topics' );
?>
	<div class="social-icons-wrap small-icons">
        <ul class="social-icons">
        <li class="social-icon telegram_link">
                <a href="https://t.me/share/url?url=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>" target="_blank">
                    <i class="fa fa-telegram"></i>
                    <span class="share-text-fontz"> Share </span>
                    <span class="share-count" data-sc-ln="<?php echo $actual_link; ?>" ></span>
                </a>
            </li>
            <!-- Facebook Button-->
            <li class="social-icon facebook">
                <a onclick="javascript:popupCenter('https://www.facebook.com/sharer/sharer.php?u=<?php echo $link; ?>&amp;appId=energytherapy','Facebook Share', '540', '400');return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $link; ?>&amp;appId=energytherapy" target="blank">
                    <i class="fa fa-facebook"></i>
                    <span class="share-text-fontz"> Share</span>
                    <span class="share-count" data-sc-fb="<?php echo $link; ?>" ></span>
                </a>
            </li>
            <!-- Twitter Button -->
            <li class="social-icon twitter">
                <a onclick="javascript:popupCenter('https://twitter.com/share?&amp;url=<?php echo $shortlink = wpbitly_generate_shortlink($link, $term); ?>&amp;text=<?php single_cat_title(); ?>&amp;via=energy_therapy','Tweet', '540', '400');return false;" href="https://twitter.com/share?&amp;url=<?php echo $link; ?>&amp;text=<?php single_cat_title(); ?>&amp;via=energy_therapy" target="blank">
                    <i class="fa fa-twitter"></i>
                    <span class="share-text-fontz"> Tweet </span>
                    <span class="share-count" data-sc-tw="<?php echo $link; ?>" ></span>
                </a>
            </li>
            <li class="social-icon pinterest">
                <!--<a rel="nofollow" href="http://www.pinterest.com/pin/create/button/?url=<?php /*the_permalink(); */?>&media=<?php /*echo $pin_img_url = get_the_post_thumbnail_url($post_id); */?>&description=<?php /*the_title();*/?>" onclick="javascript:popupCenter('http://www.pinterest.com/pin/create/button/?url=<?php /*the_permalink();*/?>&media=<?php /*echo $pin_img_url = get_the_post_thumbnail_url($post_id); */?>&description=<?php /*the_title();*/?>','Pinit','scrollbars=yes,width=540,height=400');return false;"><i class="fa fa-pinterest"></i><span class="share-text-fontz"> Pin </span><span class="share-count"><?php /*echo $total_pinterest_count = get_pinterest_count( $post_id ); $pinterest_count = get_pinterest_count( $post_id ); if($pinterest_count < 1000000 && $pinterest_count > 750) {$pinterest_count = round($pinterest_count/1000); echo $pinterest_count."K";} else if($pinterest_count == 0){} else if($pinterest_count > 1000000) { $pinterest_count = round($pinterest_count/1000000);echo $pinterest_count."M";} else {echo $pinterest_count;} */?></span></a>-->
                <a rel="nofollow" href="javascript:void(0);" onclick="var e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e);" class="nc_tweet noPop">
                    <i class="fa fa-pinterest"></i>
                    <span class="share-text-fontz"> Pin </span>
                    <span class="share-count" data-sc-pr="<?php echo $link; ?>" ></span>
                </a>
            </li>
            <!-- Google + Button-->
            <!--li class="social-icon google-plus">
                <a onclick="javascript:popupCenter('https://plus.google.com/share?url=<?php //echo $link; ?>','Share on Google+', '600', '600');return false;" href="https://plus.google.com/share?url=<?php //echo $link; ?>" target="blank">
                    <i class="fa fa-google-plus"></i>
                    <span class="share-text-fontz"> +1 </span>
                    <span class="share-count" data-sc-gp="<?php //echo $link; ?>" ></span>
                </a>
            </li-->
            <!-- LinkedIn Button -->
            <li class="social-icon linkedin">
                <a onclick="javascript:popupCenter('http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $shortlink = wpbitly_get_shortlink_custom($link, $term); ?>&amp;title=<?php single_cat_title(); ?>&amp;source=<?php site_url(); ?>','Share on LinkedIn', '520', '570');return false;" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $link; ?>&amp;title=<?php single_cat_title(); ?>&amp;source=<?php site_url(); ?>" target="blank">
                    <i class="fa fa-linkedin"></i>
                    <span class="share-text-fontz"> Share </span>
                    <span class="share-count" data-sc-ln="<?php echo $link; ?>" ></span>
                </a>
            </li>

        </ul>
		<div class="social-icon total-share">
			<span class="icon-div"><img src="<?php //echo get_template_directory_uri(); ?>/images/share-icon.png" alt="share-icon" /></span><span class="total-text"><span> </span><br/>SHARES </span>
		</div>
    </div><!-- .social-icons-wrap -->
<?php }

function ds_social_media_small_icons_quotes($atts) {

    // Get the post ID
    $pid = $atts['pid'];
    $permalink = get_the_permalink($pid);
    $post_id = get_the_ID(); ?>

    <div class="social-icons-wrap small-icons test1">
        <ul class="social-icons">
        <li class="social-icon telegram_link">
                <a  href="https://t.me/share/url?url=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>" target="_blank">
                    <i class="fa fa-telegram"></i>
                    <span class="share-text-fontz"> Share </span>
                    <span class="share-count" data-sc-ln="<?php the_permalink(); ?>" ></span>
                </a>
            </li>
            <!-- Facebook Button-->
            <li class="social-icon facebook">
                <a onclick="javascript:popupCenter('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink($pid); ?>&amp;appId=energytherapy','Facebook Share', '540', '400');return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink($pid); ?>&amp;appId=energytherapy" target="blank">
                    <i class="fa fa-facebook"></i>
                    <span class="share-text-fontz"> Share</span>
                    <span class="share-count" data-sc-fb="<?php the_permalink($pid); ?>" ></span>
                </a>
            </li>
            <!-- Twitter Button -->
            <li class="social-icon twitter">
                <a onclick="javascript:popupCenter('https://twitter.com/share?&amp;url=<?php echo $shortlink = wpbitly_get_shortlink_custom($permalink, $pid); ?>&amp;text=<?php echo get_the_title($pid); ?>&amp;via=energy_therapy','Tweet', '540', '400');return false;" href="https://twitter.com/share?&amp;url=<?php echo $shortlink; ?>&amp;text=<?php echo get_the_title($pid); ?>&amp;via=energy_therapy" target="blank">
                    <i class="fa fa-twitter"></i>
                    <span class="share-text-fontz"> Tweet </span>
                    <span class="share-count" data-sc-tw="<?php the_permalink($pid); ?>" ></span>
                </a>
            </li>
            <li class="social-icon pinterest">
                <!--<a rel="nofollow" href="http://www.pinterest.com/pin/create/button/?url=<?php /*the_permalink(); */?>&media=<?php /*echo $pin_img_url = get_the_post_thumbnail_url($post_id); */?>&description=<?php /*the_title();*/?>" onclick="javascript:popupCenter('http://www.pinterest.com/pin/create/button/?url=<?php /*the_permalink();*/?>&media=<?php /*echo $pin_img_url = get_the_post_thumbnail_url($post_id); */?>&description=<?php /*the_title();*/?>','Pinit','scrollbars=yes,width=540,height=400');return false;"><i class="fa fa-pinterest"></i><span class="share-text-fontz"> Pin </span><span class="share-count"><?php /*$pinterest_count = get_pinterest_count( $post_id ); */?></span></a>-->
                <a rel="nofollow" href="javascript:void(0);" onclick="var e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e);" class="nc_tweet noPop">
                    <i class="fa fa-pinterest"></i>
                    <span class="share-text-fontz"> Pin </span>
                    <span class="share-count" data-sc-pr="<?php the_permalink($pid); ?>" ></span>
                </a>
            </li>
            <!-- Google + Button-->
            <!--li class="social-icon google-plus">
                <a onclick="javascript:popupCenter('https://plus.google.com/share?url=<?php //the_permalink($pid); ?>','Share on Google+', '600', '600');return false;" href="https://plus.google.com/share?url=<?php //the_permalink($pid); ?>" target="blank">
                    <i class="fa fa-google-plus"></i>
                    <span class="share-text-fontz"> +1 </span>
                    <span class="share-count" data-sc-gp="<?php //the_permalink($pid); ?>" ></span>
                </a>
            </li-->
            <!-- LinkedIn Button -->
            <li class="social-icon linkedin">
                <a onclick="javascript:popupCenter('http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $shortlink = wpbitly_get_shortlink_custom($permalink, $pid); ?>&amp;title=<?php the_title(); ?>&amp;source=<?php echo site_url(); ?>','Share on LinkedIn', '520', '570');return false;" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink($pid); ?>&amp;title=<?php the_title(); ?>&amp;source=<?php echo site_url(); ?>" target="blank">
                    <i class="fa fa-linkedin"></i>
                    <span class="share-text-fontz"> Share </span>
                    <span class="share-count" data-sc-ln="<?php the_permalink($pid); ?>" ></span>
                </a>
            </li>


        </ul>
        <div class="social-icon total-share">
            <span class="icon-div"><img src="<?php echo get_template_directory_uri(); ?>/images/share-icon.png" alt="share-icon" /></span><span class="total-text"><span> </span><br/>SHARES </span>
        </div>
    </div><!-- .social-icons-wrap -->

<?php }

function ds_social_media_small_icons_single($atts) {

    // Get the post ID
    $pid = $atts['pid'];
    $permalink = get_the_permalink($pid);
    $post_id = get_the_ID();

	$fb_count =  get_facebook_count( $pid );
	$twit_count = ds_post_tweet_count( $pid );
	$pinterest_count = get_pinterest_count( $pid );
	$gp_count = ds_post_plusone_count( $pid );
	$li_count = ds_post_linkedin_count( $pid );
	?>

    <div class="social-icons-wrap small-icons test1" style="width:100%; margin:0">
        <ul class="social-icons" style="width:100%;margin:0px;">
			<div class="social-icon total-share" style="width:40%">
            <span class="icon-div"><img src="<?php echo get_template_directory_uri(); ?>/images/share-icon.png" alt="share-icon" /></span><span class="total-text"><span><?php $total = $fb_count + $twit_count + $pinterest_count + $gp_count + $li_count; if($total < 1000000 && $total > 999) {$total = round(($total/1000),1); echo $total."K";} else if($total > 1000000) { $total = round(($total/1000000),1);echo $total."M";} else {echo $total;}?></span><br/>SHARES </span>
        </div>
        </ul>
    </div><!-- .social-icons-wrap -->
<?php }

function ds_social_media_small_icons_home() {

    // Get the post ID
    $post_id = get_the_ID(); $permalink=get_site_url(); ?>

    <div class="social-icons-wrap small-icons home">
        <ul class="social-icons">
        <li class="social-icon telegram_lin">
                <a href="https://t.me/share/url?url=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>" target="blank">
                    <i class="fa fa-telegram"></i>
                    <span class="share-text-fontz"> Share </span>
                    <!--span class="share-count" data-sc-ln="<?php //the_permalink(); ?>" ></span-->
                </a>
            </li>
            <!-- Facebook Button-->
            <li class="social-icon facebook">
                <a onclick="javascript:popupCenter('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;appId=energytherapy','Facebook Share', '540', '400');return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&amp;appId=energytherapy" target="blank">
                    <i class="fa fa-facebook"></i>
                    <span class="share-text-fontz"> Share</span>
                    <!--span class="share-count" data-sc-fb="<?php //the_permalink(); ?>" ></span-->
                </a>
            </li>
            <!-- Twitter Button -->
            <li class="social-icon twitter">
                <a onclick="javascript:popupCenter('https://twitter.com/share?&amp;url=<?php echo $shortlink = wpbitly_get_shortlink_custom($permalink, $post_id); ?>&amp;text=<?php the_title(); ?>&amp;via=energy_therapy','Tweet', '540', '400');return false;" href="https://twitter.com/share?&amp;url=<?php echo $shortlink; ?>&amp;text=<?php the_title(); ?>&amp;via=energy_therapy" target="blank">
                    <i class="fa fa-twitter"></i>
                    <span class="share-text-fontz"> Tweet </span>
                    <!--span class="share-count" data-sc-tw="<?php //the_permalink(); ?>" ></span-->
                </a>
            </li>
            <li class="social-icon pinterest">
                <!--<a rel="nofollow" href="http://www.pinterest.com/pin/create/button/?url=<?php /*the_permalink(); */?>&media=<?php /*echo $pin_img_url = get_the_post_thumbnail_url($post_id); */?>&description=<?php /*the_title();*/?>" onclick="javascript:popupCenter('http://www.pinterest.com/pin/create/button/?url=<?php /*the_permalink();*/?>&media=<?php /*echo $pin_img_url = get_the_post_thumbnail_url($post_id); */?>&description=<?php /*the_title();*/?>','Pinit','scrollbars=yes,width=540,height=400');return false;"><i class="fa fa-pinterest"></i><span class="share-text-fontz"> Pin </span><span class="share-count"><?php /*echo $total_pinterest_count = get_pinterest_count( $post_id ); $pinterest_count = get_pinterest_count( $post_id ); if($pinterest_count < 1000000 && $pinterest_count > 750) {$pinterest_count = round($pinterest_count/1000); echo $pinterest_count."K";} else if($pinterest_count == 0){} else if($pinterest_count > 1000000) { $pinterest_count = round($pinterest_count/1000000);echo $pinterest_count."M";} else {echo $pinterest_count;} */?></span></a>-->
                <a rel="nofollow" href="javascript:void(0);" onclick="var e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e);" class="nc_tweet1 noPop">
                    <i class="fa fa-pinterest"></i>
                    <span class="share-text-fontz"> Pin </span>
                    <!--span class="share-count" data-sc-pr="<?php //the_permalink(); ?>" ></span-->
                </a>
            </li>
            <!-- Google + Button-->
            <!--li class="social-icon google-plus">
                <a onclick="javascript:popupCenter('https://plus.google.com/share?url=<?php //the_permalink(); ?>','Share on Google+', '600', '600');return false;" href="https://plus.google.com/share?url=<?php //the_permalink(); ?>" target="blank">
                    <i class="fa fa-google-plus"></i>
                    <span class="share-text-fontz"> +1 </span>
                    <span class="share-count" data-sc-gp="<?php //the_permalink(); ?>" ></span>
                </a>
            </li-->
            <!-- LinkedIn Button -->
            <li class="social-icon linkedin">
                <a onclick="javascript:popupCenter('http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $shortlink = wpbitly_get_shortlink_custom($permalink, $post_id); ?>&amp;title=<?php the_title(); ?>&amp;source=<?php echo site_url(); ?>','Share on LinkedIn', '520', '570');return false;" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>&amp;source=<?php echo site_url(); ?>" target="blank">
                    <i class="fa fa-linkedin"></i>
                    <span class="share-text-fontz"> Share </span>
                    <!--span class="share-count" data-sc-ln="<?php //the_permalink(); ?>" ></span-->
                </a>
            </li>


        </ul>
        <div class="social-icon total-share 232">
        <span class="icon-div">
                <img src="<?php echo get_template_directory_uri(); ?>/images/share-icon.png" alt="share-icon" />
            </span>
            <span class="total-text">
                <span><?php $total = get_post_meta($post_id,'total_share');
                if($total[0] < 1000000 && $total[0] > 999) {
                    $total = round(($total[0]/1000),1);
                    echo $total."K";}
                else if($total[0] > 1000000) { $total = round(($total[0]/1000000),1);echo $total."M";}
                else {echo $total[0];}?></span><br/>SHARES </span>
        </div>
    </div><!-- .social-icons-wrap -->

<?php }

add_shortcode('social_large_icons','ds_social_media_icons');
add_shortcode('social_share_icons','ds_social_share_icons');
add_shortcode('social_small_icons','ds_social_media_small_icons');
add_shortcode('social_author_icons','ds_social_media_icons_author');
add_shortcode('social_quote_icons','ds_social_quote_icons');
add_shortcode('social_taxonomy_icons','ds_social_media_taxonomy_icons');
add_shortcode('social_small_icons_quotes','ds_social_media_small_icons_quotes');
add_shortcode('social_small_icons_article','ds_social_media_small_icons_single');
add_shortcode('social_small_icons_home','ds_social_media_small_icons_home');
/*** custom social Share ends ***/

add_action( 'wp_ajax_nopriv_post_contact_form', 'post_contact_form' );
add_action( 'wp_ajax_post_contact_form', 'post_contact_form' );

function post_contact_form() {
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    $fname=$_POST['name'];
    $mail=$_POST['email'];
    $subject=$_POST['subject'];
    $place=$_POST['place'];
    $Country=$_POST['Country'];
    $tarea=$_POST['textarea'];
    $dte=date("d-m-y");
    $to = "contact@energytherapy.biz";
    // $to = "contact@energytherapy.biz.test-google-a.com";
    $subject1 = "Energy Therapy - Contact Form";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $fname <$mail> \r\n";
    //$headers .= "Reply-To: $mail" . "\r\n";
	$headers .= 'Cc: jaime@energytherapy.biz, jennifer@energytherapy.biz' . "\r\n";
    if($fname != '' && $mail != '' && $subject != '' && $place != '' && $Country != '' && $tarea != ''){
        //insert into database
        mysqli_query($mysqli,"insert into et_contact(name,email,subject,place,country,message,created_on) values('$fname','$mail','$subject','$place','$Country','$tarea',NOW())");
        // Mail sending
        $tarea = nl2br(urldecode(stripslashes($tarea)));
        $message = "<p>Name: ".$fname."</p><p>E-mail: ".$mail."</p><p>Subject: ".$subject."<p/><p>Place: ".$place."</p><p>Country: ".$Country."</p><p> Message: ".$tarea."</p><p> Submitted On: ".$dte."</p>";
        if( wp_mail($to,$subject1,$message,$headers))
        {
            $header = "MIME-Version: 1.0" . "\r\n";
            $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $header .= "From: Energytherapy <contact@energytherapy.biz> \r\n";
            $mail_auto_respond = get_field('mail_auto_response','options');
            $mail_subject = get_field('mail_subject','options');
            $mail_content = get_field('mail_content','options');
            if($mail_auto_respond == 1 ){
                wp_mail($mail,$mail_subject,$mail_content,$header);
            } else {
                //Customer Acknowledgement
                $message2 = "<p>Thanks for contacting us. Here's a copy of the message you sent:</p>";
                $message2 .= "<p>Name: ".$fname."</p><p>E-mail: ".$mail."</p><p>Subject: ".$subject."<p/><p>Place: ".$place."</p><p>Country: ".$Country."</p><p> Message: ".$tarea."</p><p> Submitted On: ".$dte."</p>";
                $message2 .= "<p>We'll get back to you shortly.</p>";
                $message2 .= "<p>Best wishes,<br/>Jaime and Jennifer</p>";
                wp_mail($mail,'Thanks for contacting us at Energy Therapy',$message2,$header);
            }
        }
        else{
            echo 'Your message could not reach.  Please try again later.';
        }
    }
}

/***** user registration verification via emial start *****/
// this is just to prevent the user log in automatically after register
function wc_registration_redirect( $redirect_to ) {
	if (is_user_logged_in() && is_checkout()) {
        // feel free to customize the following line to suit your needs
        //wp_redirect(wp_login_url());
        wp_redirect( '/checkout/');
        exit;
    }else{
        wp_logout();
        wp_redirect( '/my-account/?q=');
        exit;
	}
}
// when user login, we will check whether this guy email is verify
function wp_authenticate_user( $userdata ) {
        $isActivated = get_user_meta($userdata->ID, 'is_activated', true);
        if ( !$isActivated ) {
                $userdata = new WP_Error(
                                'inkfool_confirmation_error',
                    __( '<strong>ERROR:</strong> You have not verified your email address. Please click on the verification link that was sent, or <a href="/my-account/?u='.$userdata->ID.'">click here</a> to resend one', 'inkfool' )
                                );
        }
        return $userdata;
}
// when a user register we need to send them an email to verify their account
function my_user_register($user_id) {
    // get user data
    $user_info = get_userdata($user_id);
    // create md5 code to verify later
    $code = md5(time());
    // make it into a code to send it to user via email
    $string = array('id'=>$user_id, 'code'=>$code);
    // create the activation code and activation status
    update_user_meta($user_id, 'is_activated', 0);
    update_user_meta($user_id, 'activationcode', $code);
    // create the url
    $url = get_site_url(). '/my-account/?p=' .base64_encode( serialize($string));
    // basically we will edit here to make this nicer
    if(!isset($_COOKIE["user_email"])){
        $html = 'Please click the below button to activate your account on Energy Therapy <br/><br/>
        <a href="'.$url.'">
        <button style="
        color:brown;
        background-color:#f49542;
        border-color:#eea236;
        height:56px;
        width:190px;
        font-size:20px;
        text-align:center;
        cursor: pointer;">Activate Account</button></a>
        <br/><br/>
        <br/>If the above button doesn’t work, please copy/paste the entire URL into your browser address bar.<br/><br/>
        <a href="'.$url.'">'.$url.'</a><br/><br/>
        Having problems with account activation? <a href="mailto:thilak.askan@gmail.com">Contact technical support</a><br/>
        Kind regards,<br/>Energy Therapy';
        // send an email out to user
        wc_mail($user_info->user_email, __('Please activate your account'), $html);
    }
}
// we need this to handle all the getty hacks i made
function my_init(){
        // check whether we get the activation message
        if(isset($_GET['p'])){
                $data = unserialize(base64_decode($_GET['p']));
                $code = get_user_meta($data['id'], 'activationcode', true);
                // check whether the code given is the same as ours
                if($code == $data['code']){
                        // update the db on the activation process
                        update_user_meta($data['id'], 'is_activated', 1);
                        if(!is_user_logged_in()){
                        wc_add_notice( __( '<strong>Success:</strong> Your account has been activated. ', 'inkfool' )  );
                        }
                }else{
                        wc_add_notice( __( '<strong>Error:</strong> Activation fails, please contact our administrator. ', 'inkfool' )  );
                }
        }
        if(isset($_GET['q'])){
                wc_add_notice( __( '<strong>Error:</strong> This account has not been activated. Please check your email inbox for the activation link.', 'inkfool' ) );
        }
        if(isset($_GET['u']) && $_GET['u'] != '' && !empty($_GET['u']) ){
                my_user_register($_GET['u']);
                wc_add_notice( __( '<strong>Success:</strong> your activation email has been resent. Please check email Inbox.', 'inkfool' ) );
        }


}
// hooks handler
add_action( 'init', 'my_init' );
add_filter('woocommerce_registration_redirect', 'wc_registration_redirect');
add_filter('wp_authenticate_user', 'wp_authenticate_user',10,2);
add_action('user_register', 'my_user_register',10,2);
/***** user registration verification via emial end *****/


/**** WooCommerce registeration confirm password field starts ****/
// Add the code below to your theme's functions.php file to add a confirm password field on the register form under My Accounts.
add_filter('woocommerce_registration_errors', 'registration_errors_validation', 10,3);
function registration_errors_validation($reg_errors, $sanitized_user_login, $user_email) {
    global $woocommerce;
    extract( $_POST );
    if ( strcmp( $password, $password2 ) !== 0 ) {
        return new WP_Error( 'registration-error', __( 'Passwords do not match.', 'woocommerce' ) );
    }
    return $reg_errors;
}
add_action( 'woocommerce_register_form', 'wc_register_form_password_repeat' );
function wc_register_form_password_repeat() {
    ?>
    <p class="form-row form-row-wide">
        <label for="reg_password2"><?php _e( 'Password Repeat', 'woocommerce' ); ?> <span class="required">*</span></label>
        <input type="password" class="input-text" name="password2" id="reg_password2" value="<?php if ( ! empty( $_POST['password2'] ) ) echo esc_attr( $_POST['password2'] ); ?>" />
    </p>
	<p>
	<div id="divCheckPasswordMatch"></div>
	</p>
	<p>
	<div class="g-recaptcha" data-sitekey="6Ld9SBgUAAAAAI2gB_iGYfouQfcsqmrKftmFhevg"></div>
	</p>
    <?php
}
/**** WooCommerce registeration confirm password field ends ****/

function et_content_nav( $html_id ) {
    global $wp_query;

    $html_id = esc_attr( $html_id );

    if ( $wp_query->max_num_pages > 1 ) : ?>
        <nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">
            <h3 class="assistive-text"><?php _e( 'Post navigation', 'et' ); ?></h3>
            <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentytwelve' ) ); ?></div>
            <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?></div>
        </nav><!-- #<?php echo $html_id; ?> .navigation -->
    <?php endif;
}

add_action('init','et_content_nav');

function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**** Latest Posts Shortcode starts ***/
function latest_post(){
	global $post;
    $current_post_id =  $post->ID;
?>
<div class="widget_recent_entries">
<h3 class="widget-title common-style">Latest from Energy Therapy</h3>
<ul>
	<?php
    $args = array(
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'orderby' => 'DESC',
        'ignore_sticky_posts' => 1,
		'post__not_in' => array($current_post_id)
    );
	$latest_query = new WP_Query( $args );
	if ( $latest_query->have_posts() ) {
		while ( $latest_query->have_posts() ) {
			$latest_query->the_post(); ?>
	<li>
		<span class="div100 img" style="padding-right:15px;">
		<?php $latest_thumb_id = get_post_thumbnail_id($post->ID); ?>
		<?php $latest_thumb_alt_thumb = get_post_meta($latest_thumb_id, '_wp_attachment_image_alt', true); ?>
		<?php if($latest_thumb_id) { ?>
		<a href="<?php the_permalink();?>"><img src="<?php echo rw_resize($latest_thumb_id,310,164); ?>" alt="<?php echo $latest_thumb_alt_thumb; ?>"/></a>
		<?php } else { ?>
		<a href="<?php the_permalink();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/et-images-85x48.jpg" alt="Et-Image"/></a>
		<?php } ?>
		<div class="overlay" style="width:95%">
            <a href="<?php the_permalink();?>" class="expand"><i class="fa fa-link" aria-hidden="true"></i></a>
            <a class="close-overlay hidden">x</a>
        </div>
		</span>
		<span class="div100 lp"><a href="<?php the_permalink();?>"><?php the_title(); ?><!--<span class="post-date">January 30, 2017</span>--></a></span>

	</li>
	<?php } } ?>
</ul></div>
<?php }

function footer_latest_post(){
?>
<div class="widget_recent_entries">
<a href="<?php echo site_url(); ?>/articles/"><h3 class="widget-title">Recent Posts</h3></a>
<ul>
	<?php
    $args = array(
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'orderby' => 'DESC',
        'ignore_sticky_posts' => 1
    );
    $latest_query = new WP_Query( $args );
	if ( $latest_query->have_posts() ) {
		while ( $latest_query->have_posts() ) {
			$latest_query->the_post(); ?>
	<li>
		<span class="div30" style="padding-right:15px;">
		<?php $latest_thumb_id = get_post_thumbnail_id($post->ID); ?>
		<?php $latest_thumb_alt_thumb = get_post_meta($latest_thumb_id, '_wp_attachment_image_alt', true); ?>
		<?php if($latest_thumb_id) { ?>
		<img src="<?php echo rw_resize($latest_thumb_id,85,45); ?>" alt="<?php echo $latest_thumb_alt_thumb; ?>"/>
		<?php } else { ?>
		<img src="<?php echo get_template_directory_uri(); ?>/images/et-images-85x48.jpg" alt="Et-Image"/>
		<?php } ?>
		</span>
		<span class="div70 lp">
		<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
		<!--<span class="post-date">January 30, 2017</span></span>-->
	</li>
	<?php } } ?>
</ul></div>
<?php }
add_shortcode('footer_latest_posts','footer_latest_post');
add_shortcode('latest_posts','latest_post');
/**** Latest Posts Shortcode end ***/
/**** Popular Posts starts ***/
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}
/**** Popular Posts end ***/

function wpse28145_add_custom_types( $query ) {
    if( is_tag() && $query->is_main_query() ) {

        // this gets all post types:
        $post_types = get_post_types();

        // alternately, you can add just specific post types using this line instead of the above:
        // $post_types = array( 'post', 'your_custom_type' );

        $query->set( 'post_type', $post_types );
    }
}
add_filter( 'pre_get_posts', 'wpse28145_add_custom_types' );

function et_word_count() {
   return sprintf(
      __( '%s', 'text-domain' ),
      str_word_count( strip_tags( get_post_field( 'post_content', get_the_ID() ) ) )
   );
}
add_filter('the_content', 'mte_add_incontent_ad');
function mte_add_incontent_ad($content)
{	if(is_single()){
    $content_block = explode('<p>',$content);
    $pos_id = get_the_ID();
    if(get_field('suppress_google_ad', $pos_id) == true ){
		$suppress_google_ad = 1;
	} else {
		$suppress_google_ad = 0;
	}
   global $wpdb;
	$data = $wpdb->get_results ( "SELECT * FROM energy_aam WHERE post_type = 'Articles' AND article_ad_position = 'After Paragraph' AND ad_order!='Before Last Paragraph' AND ad_order!='After Last Paragraph' AND ad_status ='0' ORDER BY length(ad_order) ASC" );
	$data1 = $wpdb->get_results ( "SELECT * FROM energy_aam WHERE post_type = 'Articles' AND article_ad_position = 'After Paragraph' AND ad_order = 'Before Last Paragraph' AND ad_status ='0'" );
	$row1 = $wpdb->num_rows;
	$data2 = $wpdb->get_results ( "SELECT * FROM energy_aam WHERE post_type = 'Articles' AND article_ad_position = 'After Paragraph' AND ad_order = 'After Last Paragraph' AND ad_status ='0'" );
	$row2 = $wpdb->num_rows;

	if ($row1 == 1){
		$befo_ad_type = $data1[0]->ad_type;
		if(($befo_ad_type == 'Google Ad') && ($suppress_google_ad == 0 )){
				$befo_last_content = stripslashes($data1[0]->ad_content);
		} else if ($befo_ad_type == 'Amazon Ad' ){
            $befo_last_content = stripslashes($data1[0]->ad_content);
        } else if ($befo_ad_type == 'Affiliate Ad') {
			$affi_ad_link = $data1[0]->affiliated_ad_url;
			$affi_ad_img = site_url().'/wp-content/uploads/ads/'.$data1[0]->affiliated_ad_img;
			$affi_ad = stripslashes("<a href='$affi_ad_link' target='_blank' style='text-align:center;display: block;' ><img src='$affi_ad_img' /></a>");
			$befo_last_content = $affi_ad;
		}
	}

	if ($row2 == 1){
		$aft_ad_type = $data2[0]->ad_type;
		if(($aft_ad_type == 'Google Ad') && ($suppress_google_ad == 0 )){
			$aft_last_content = stripslashes($data2[0]->ad_content);
		} else if ($aft_ad_type == 'Amazon Ad' ){
			$aft_last_content = stripslashes($data2[0]->ad_content);
		} else if ($aft_ad_type == 'Affiliate Ad') {
			$affi_ad_link = $data2[0]->affiliated_ad_url;
			$affi_ad_img = site_url().'/wp-content/uploads/ads/'.$data2[0]->affiliated_ad_img;
			$affi_ad = stripslashes("<a href='$affi_ad_link' target='_blank' style='text-align:center;display: block;' ><img src='$affi_ad_img' /></a>");
			$aft_last_content = $affi_ad;
		}
	}

	foreach ( $data as $k => $value )   {
		$ad_type = $value->ad_type;
		$ad_content = $value->ad_content;
		$ad_order = $value->ad_order;
        if (($ad_type == 'Google Ad') && ($suppress_google_ad == 0 )){
				${'after_paragraph_' . $ad_order} = stripslashes($ad_content);
			} else if ($ad_type == 'Amazon Ad'){
				${'after_paragraph_' . $ad_order} = stripslashes($ad_content);
			} else if ($ad_type == 'Affiliate Ad') {
				$affi_ad_link = $value->affiliated_ad_url;
				$affi_ad_img = site_url().'/wp-content/uploads/ads/'.$value->affiliated_ad_img;
				$affi_ad = stripslashes("<a href='$affi_ad_link' target='_blank' style='text-align:center;display: block;' ><img src='$affi_ad_img' /></a>");
				${'after_paragraph_' . $ad_order} = $affi_ad;
			}
	}

	$count = et_word_count();
	if($count > 300) {

		$block_count = count($content_block);
		$last_block =  $block_count - 1;
		$before_last_block =  $block_count - 3;
		if( (!is_single(12769)) && (!is_single(12187)) && (!is_single(20260)) ){
            if (!empty($content_block[1])){
                $content_block[1] .= ${'after_paragraph_1'};
            }
            if (!empty($content_block[2])) {
                $content_block[2] .= ${'after_paragraph_2'};
            }
            if (!empty($content_block[3])) {
                $content_block[3] .= ${'after_paragraph_3'};
            }
            if (!empty($content_block[4])) {
                $content_block[4] .= ${'after_paragraph_4'};
            }
            if (!empty($content_block[5])) {
                $content_block[5] .= ${'after_paragraph_5'};
            }
            if (!empty($content_block[6])) {
                $content_block[6] .= ${'after_paragraph_6'};
            }
            if (!empty($content_block[7])) {
                $content_block[7] .= ${'after_paragraph_7'};
            }
            if (!empty($content_block[8])) {
                $content_block[8] .= ${'after_paragraph_8'};
            }
            if (!empty($content_block[9])) {
                $content_block[9] .= ${'after_paragraph_9'};
            }
            if (!empty($content_block[10])) {
                $content_block[10] .= ${'after_paragraph_10'};
            }
            if (!empty($content_block[$last_block])){
                $content_block[$last_block] .= $aft_last_content;
            }
            if (!empty($content_block[$before_last_block])){
                $content_block[$before_last_block] .= $befo_last_content;
            }
        }
	}

    for($i=1;$i<count($content_block);$i++)
    {	$content_block[$i] = '<p>'.$content_block[$i];
    }
    $content = implode('',$content_block);
}
    return $content;
}

function no_captcha_recaptcha_menu() {
	add_menu_page("reCapatcha Options", "reCaptcha Options", "manage_options", "recaptcha-options", "recaptcha_options_page", "", 100);
}

function recaptcha_options_page() { ?>
	<div class="wrap">
		<h1>reCaptcha Options</h1>
		<form method="post" action="options.php">
		<?php settings_fields("header_section");
			do_settings_sections("recaptcha-options");
			submit_button(); ?>
		</form>
	</div>
<?php }
add_action("admin_menu", "no_captcha_recaptcha_menu");

function display_recaptcha_options() {
	add_settings_section("header_section", "Keys", "display_recaptcha_content", "recaptcha-options");

	add_settings_field("captcha_site_key", __("Site Key"), "display_captcha_site_key_element", "recaptcha-options", "header_section");
	add_settings_field("captcha_secret_key", __("Secret Key"), "display_captcha_secret_key_element", "recaptcha-options", "header_section");

	register_setting("header_section", "captcha_site_key");
	register_setting("header_section", "captcha_secret_key");
}

function display_recaptcha_content() {
	echo __('<p>You need to <a href="https://www.google.com/recaptcha/admin" rel="external">register you domain</a> and get keys to make this plugin work.</p>');
	echo __("Enter the key details below");
}

function display_captcha_site_key_element() { ?>
	<input type="text" name="captcha_site_key" id="captcha_site_key" value="<?php echo get_option('captcha_site_key'); ?>" />
<?php }

function display_captcha_secret_key_element() { ?>
	<input type="text" name="captcha_secret_key" id="captcha_secret_key" value="<?php echo get_option('captcha_secret_key'); ?>" />
<?php }
add_action("admin_init", "display_recaptcha_options");

function login_recaptcha_script() {
    if(!is_page(2867)){
	    wp_register_script("recaptcha_login", "https://www.google.com/recaptcha/api.js");
        wp_enqueue_script("recaptcha_login");
    }
}
add_action("login_enqueue_scripts", "login_recaptcha_script");
add_action("wp_enqueue_scripts", "login_recaptcha_script");
function display_login_captcha() { ?>
	<div class="g-recaptcha" data-sitekey="<?php echo get_option('captcha_site_key'); ?>"></div>
<?php }
add_action( "login_form", "display_login_captcha" );

function verify_login_captcha($user, $password) {
	if (isset($_POST['g-recaptcha-response'])) {
		$recaptcha_secret = get_option('captcha_secret_key');
		$response = wp_remote_get("https://www.google.com/recaptcha/api/siteverify?secret=". $recaptcha_secret ."&response=". $_POST['g-recaptcha-response']);
        $response = json_decode($response["body"], true);
        /*print_r($response);
        exit();*/
		if (trim($response["success"]) == '1') {
			return $user;
		} else {
            $isActivated = get_user_meta($user->ID, 'is_activated', true);
            if ( !$isActivated ) {
                    $userdata = new WP_Error(
                                    'inkfool_confirmation_error',
                        __( '<strong>ERROR:</strong> This account has not been activated. Please check your email inbox for the activation link.', 'inkfool' )
                                    );
                                    return $user;
            } else {
                return $user;
                return new WP_Error("Captcha Invalid", __("<strong>ERROR</strong>: You are a bot"));
            }
		}
	} else {
		return new WP_Error("Captcha Invalid", __("<strong>ERROR</strong>: You are a bot. If not then enable JavaScript"));
	}
}
add_filter("wp_authenticate_user", "verify_login_captcha", 10, 2);
function display_comment_recaptcha() { ?>
	<div class="g-recaptcha" data-sitekey="<?php echo get_option('captcha_site_key'); ?>"></div><br/>
	<input name="submit" type="submit" class="submit" value="Post Comment">
<?php }
add_action("comment_form", "display_comment_recaptcha");

function verify_comment_captcha($commentdata) {
	if (isset($_POST['g-recaptcha-response'])) {
		$recaptcha_secret = get_option('captcha_secret_key');
		$response = wp_remote_get("https://www.google.com/recaptcha/api/siteverify?secret=". $recaptcha_secret ."&response=". $_POST['g-recaptcha-response']);
		$response = json_decode($response["body"], true);
		if (true == $response["success"]) {
			return $commentdata;
		} else {
			echo __("Bots are not allowed to submit comments.");
			return null;
		}
	} else if ((!isset($_POST['g-recaptcha-response'])) && ($_POST['mode'] == 'dashboard')){
		return $commentdata;
    } else if ((!isset($_POST['g-recaptcha-response'])) && ($_POST['mode'] == 'detail')){
		return $commentdata;
    } else {
		echo __("Bots are not allowed to submit comments. If you are not a bot then please enable JavaScript in browser.");
		return null;
	}
}
add_filter("preprocess_comment", "verify_comment_captcha");
remove_action('wp_head', 'wp_generator');

add_action('save_post','save_post_callback');
function save_post_callback($post_id){
    session_start();
    global $post, $pagenow, $typenow;
    if (empty($typenow) && !empty($_GET['post'])) {
        $post = get_post($_GET['post']);
        $typenow = $post->post_type;
    }
    if (is_admin() && $typenow == 'quote_author') {
        $_SESSION['related_auth'] = $_POST['fields']['field_58b55903a3be3'];
        $_SESSION['post_temp_id'] = $post_id;
        if(!empty($related_auth)) {
            update_post_meta($post_id, 'related_author',  $related_auth);
        }
        if(empty($_SESSION['related_auth'])){
            //update_post_meta($post_id, 'related_author',  $_SESSION['related_auth']);
            $_SESSION['related_auth'] = 1;
        }
        return;
    }
    //if you get here then it's your post type so do your thing....
}

add_action('admin_init','load_my_script');
function load_my_script()
{
    global $post, $pagenow, $typenow;
    if (empty($typenow) && !empty($_GET['post'])) {
        $post = get_post($_GET['post']);
        $typenow = $post->post_type;
    }
   if (is_admin() && $typenow == 'quote_author') {
	session_start();
        if($_SESSION['post_temp_id'] != $post->ID) {
            unset($_SESSION['related_auth']);
        }
       ?>
        <style>
            #acf-field-related_author option[value='<?php echo $post->ID; ?>'] {
                display: none;
            }

            .acf_relationship .relationship_list li a[data-post_id='<?php echo $post->ID; ?>'] {
                display: none;
            }
        </style>
        <?php $value = $post->ID;
        global $wpdb;

        $meta = $wpdb->get_results("SELECT * FROM " . $wpdb->postmeta . " WHERE meta_key='related_author' AND meta_value LIKE '%\"$value\"%'");
        //echo "SELECT * FROM " . $wpdb->postmeta . " WHERE meta_key='related_author' AND meta_value LIKE '%\"$value\"%'";
        if (is_array($meta) && !empty($meta)) {
            foreach ($meta as $pid) {
                $npod[] = $pid->post_id;
            }
        }
         //print_r($npod);
        $related_auth = $_SESSION['related_auth'];
         if (!empty($npod)) {
            // echo "SELECT * FROM ".$wpdb->postmeta." WHERE meta_key='related_author' AND post_id='".$value."'";exit;
            $get_post_meta = get_post_meta($value, 'related_author', true);
            if(empty($get_post_meta)) {
                if(!empty($related_auth)){
                    update_post_meta($value, 'related_author',  $related_auth);
                }else {
                    update_post_meta($value, 'related_author', $npod);
                }
            }
            else if(in_array($npod,$get_post_meta ))
            {
                if(!empty($related_auth)){
                    update_post_meta($value, 'related_author',  $related_auth);
                }else {
                    update_post_meta($value, 'related_author', $npod);
                }
            }
            else
            {
                //$result=array_diff($get_post_meta,$npod);
                if(!empty($related_auth)){
                    update_post_meta($value, 'related_author',  $related_auth);
                }else {
                    update_post_meta($value, 'related_author', $npod);
                }
                //print_r($_SESSION['related_auth']);
            }
        } else {
             if(!empty($related_auth)){
                 update_post_meta($value, 'related_author',  $related_auth);
             }else{
                 update_post_meta($value, 'related_author', $npod);
             }

            return;
        }

    }
    if (is_admin() && $typenow == 'quote') {

        $post_id = $post->ID;
        $book_authors = array();
        $book_value = '';
        $value = get_field('books', $post->ID);
        //print_r($value);
        foreach ($value as $val) {
           $book_value = $val->ID;
        }

        $book_author = get_field('book_author', $book_value);

		foreach ($book_author as $book_aut) {
            //print_r($book_aut);exit;
            $book_authors[] = (string)$book_aut->ID;
            $book_a = $book_aut->ID;

        }
        global $wpdb;
        $meta = $wpdb->get_results("SELECT * FROM " . $wpdb->postmeta . " WHERE meta_key='author' AND meta_value LIKE '%\"$book_a\"%' AND post_id='$post_id' LIMIT 1");
        $count_rows = $wpdb->num_rows;

        if (!empty($book_a)) {
            if ($count_rows == 0) {
                update_post_meta($post_id, 'author', $book_authors);
            }
        } else {
            return false;
        }
    }
}

/* HIDDEN PRODUCTS REMOVED IN SEARCH */
if ( ! function_exists( 'gamma_search_query_fix' ) ){
    function gamma_search_query_fix( $query = false ) {
        if(!is_admin() && is_search()){
            $query->set( 'meta_query', array(
                'relation' => 'OR',
                array(
                    'key' => '_visibility',
                    'value' => 'hidden',
                    'compare' => 'NOT EXISTS',
                ),
                array(
                    'key' => '_visibility',
                    'value' => 'hidden',
                    'compare' => '!=',
                ),
            ));
        }
    }
}
add_action( 'pre_get_posts', 'gamma_search_query_fix' );
/* HIDDEN PRODUCTS REMOVED IN SEARCH */

/* Adding Image Upload Fields */
add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user )
{
    ?>

    <h3>Profile Picture</h3>

    <style type="text/css">
        .fh-profile-upload-options th,
        .fh-profile-upload-options td,
        .fh-profile-upload-options input {
            vertical-align: top;
        }

        .user-preview-image {
            display: block;
            height: auto;
            width: 96px;
        }

    </style>

    <table class="form-table fh-profile-upload-options">
        <tr>
            <th>
                <label for="image">Profile Picture (250px x 250px)</label>
            </th>

            <td>
                <img class="user-preview-image" src="<?php echo esc_attr( get_the_author_meta( 'image', $user->ID ) ); ?>">

                <input type="text" name="image" id="custompromainimage" value="<?php echo esc_attr( get_the_author_meta( 'image', $user->ID ) ); ?>" class="regular-text" />
                <input type='button' class="button-primary" value="Upload Image" id="uploadmainimage"/><br />

                <span class="description">Please upload an image for your profile.</span>
            </td>
        </tr>
    </table>

    <script type="text/javascript">
        (function( $ ) {
            $( 'input#uploadmainimage' ).on( 'click', function() {
                tb_show('Upload', 'media-upload.php?type=image&TB_iframe=1');
                window.send_to_editor = function( html )
                {
                    imgurl = $( 'img',html ).attr( 'src' );
                    $( '#custompromainimage' ).val(imgurl);
                    console.log(imgurl);
                    tb_remove();
                }

                return false;
            });
        })(jQuery);
    </script>

    <?php
}
add_action( 'admin_enqueue_scripts', 'enqueue_admin' );

function enqueue_admin()
{
    wp_enqueue_script( 'thickbox' );
    wp_enqueue_style('thickbox');

    wp_enqueue_script('media-upload');
}

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {

    if ( !current_user_can( 'edit_user', $user_id ) )
    {
        return false;
    }
    update_user_meta( $user_id, 'image', $_POST[ 'image' ] );
}

remove_filter('pre_user_description', 'wp_filter_kses');
//add sanitization for WordPress posts
add_filter( 'pre_user_description', 'wp_filter_post_kses');

add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );

function extra_user_profile_fields( $user ) { ?>
    <h3><?php _e("Extra profile information", "blank"); ?></h3>

    <table class="form-table">
        <tr>
            <th><label for="facebook"><?php _e("Facebook URL"); ?></label></th>
            <td>
                <input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php _e("Please enter your Facebook URL."); ?></span>
            </td>
        </tr>
        <tr>
            <th><label for="twitter"><?php _e("Twitter URL"); ?></label></th>
            <td>
                <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php _e("Please enter your Twitter URL."); ?></span>
            </td>
        </tr>
        <tr>
            <th><label for="pinterest"><?php _e("Pinterest URL"); ?></label></th>
            <td>
                <input type="text" name="pinterest" id="pinterest" value="<?php echo esc_attr( get_the_author_meta( 'pinterest', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php _e("Please enter your Pinterest URL."); ?></span>
            </td>
        </tr>
        <tr>
            <th><label for="youtube"><?php _e("YouTube URL"); ?></label></th>
            <td>
                <input type="text" name="youtube" id="youtube" value="<?php echo esc_attr( get_the_author_meta( 'youtube', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php _e("Please enter your YouTube URL."); ?></span>
            </td>
        </tr>
        <tr>
            <th><label for="instagram"><?php _e("Instagram URL"); ?></label></th>
            <td>
                <input type="text" name="instagram" id="instagram" value="<?php echo esc_attr( get_the_author_meta( 'instagram', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php _e("Please enter your Instagram URL."); ?></span>
            </td>
        </tr>
        <tr>
            <th><label for="web"><?php _e("Website URL"); ?></label></th>
            <td>
                <input type="text" name="web" id="web" value="<?php echo esc_attr( get_the_author_meta( 'web', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php _e("Please enter your Web URL."); ?></span>
            </td>
        </tr>
    </table>
<?php }

add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );

function save_extra_user_profile_fields( $user_id ) {

    if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }

    update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
    update_user_meta( $user_id, 'twitter', $_POST['twitter'] );
    update_user_meta( $user_id, 'pinterest', $_POST['pinterest'] );
    update_user_meta( $user_id, 'web', $_POST['web'] );
    update_user_meta( $user_id, 'instagram', $_POST['instagram'] );
    update_user_meta( $user_id, 'youtube', $_POST['youtube'] );
}

add_action('admin_init','load_my_script1');
function load_my_script1()
{
	 global $typenow;
	  if (empty($typenow) && !empty($_GET['post'])) {
        $post = get_post($_GET['post']);
        $typenow = $post->post_type;
    }

	$ss_url = get_bloginfo('stylesheet_directory');
    wp_enqueue_script('jquery');
    wp_enqueue_script('my-canvas',"https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js",array('jquery'));
    wp_enqueue_script('my-canvas2image',"{$ss_url}/js/canvas2image.js",array('my-canvas'));
    wp_enqueue_script('my-custom-script',"{$ss_url}/js/my-custom-script.js",array('my-canvas2image'));

	if (is_admin() && $typenow == 'post') {
		$ss_url = get_bloginfo('stylesheet_directory');
        wp_enqueue_script('jquery');
        wp_enqueue_script('custom-script',"{$ss_url}/js/custom-script.js",array('jquery'));
	}
}

//opengraph
function doctype_opengraph($output) {
    return $output . '
    xmlns:og="http://opengraphprotocol.org/schema/"
    xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'doctype_opengraph');

function fb_opengraph() {
	global $post;
	$post = get_post($_GET['post']);
    $typenow = $post->post_type;
    $actual_link_shop = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$actual_link_shop_arr = explode('/',$actual_link_shop);
    //print_r($actual_link_shop_arr);
		echo '<meta property="og:image:width" content="600" />
		<meta property="og:image:height" content="315" />';
		if(is_tax('topics', get_queried_object()->term_id)){
			$term = get_queried_object()->term_id;
			$link = get_term_link( $term, 'topics' );
			echo '<meta property="fb:app_id" content="851749861552175" />';
            echo '<meta property="og:image" content="https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png"/>';
            echo '<meta name="twitter:image:src" content="https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png">';
		?>
		<meta property="og:title" content="<?php echo 'Explore Quotes On '; ?><?php single_cat_title() ?>"/>
		<meta property="og:description" content="Meaningful and inspiring quotes from Energy Therapy..." />
		<meta property="og:type" content="article"/>
		<meta property="og:url" content="<?php echo $link; ?>" />
		<meta property="og:site_name" content="<?php echo get_bloginfo(); ?>" />
		<meta name="twitter:card" content="summary_large_image">
		<?php }
		else if($typenow == 'quote') {
			$author_det =  get_field('author');
			foreach($author_det as $author_details) {
				$author_id = $author_details->ID;
				$author_name = trim(str_replace(' ' ,'_',get_the_title( $author_details->ID )));
			}
			if(is_single()) {
				echo '<meta property="fb:app_id" content="851749861552175" />';

			if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
				if(isset($_REQUEST['img'])){
					$thumbnail_src_url = rw_resize($_REQUEST['img'], 600, 315);
					$image_url = $author_name.'_quote_'.$_REQUEST['img'].'_'.$post->ID.'.jpg';
					if(file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/uploads/ads/'.$image_url)){
						$final_image_url = 'https://www.energytherapy.biz/wp-content/uploads/ads/'.$image_url;
					}else{
						$final_image_url = 'https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png';
					}
                    echo '<meta property="og:image" content="'.$final_image_url.'"/>';
                    echo '<meta name="twitter:image:src" content="'.$final_image_url.'">';
				}else if (empty(get_field('gallery_images',$post->ID))) {
					$author_det =  get_field('author',$post->ID);
						foreach($author_det as $author_details) {
						$author_name_gal = get_the_title( $author_details->ID );
						}
						if(has_post_thumbnail($author_details->ID)) {
							$thumbnail_src_url = rw_resize(get_post_thumbnail_id($author_details->ID),600,315);
                        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src_url ) . '"/>';
                        echo '<meta name="twitter:image:src" content="' . esc_attr( $thumbnail_src_url ) . '">';
						} else {
                            echo '<meta property="og:image" content="https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png"/>';
                            echo '<meta name="twitter:image:src" content="https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png">';
                        }
				}else{
					if(get_field('gallery_images',$post->ID)){
						$rows = get_field('gallery_images', $post->ID);
						$first_row = $rows[0];
						$first_quote_image = $first_row['quotes_images'];
						$image = $first_quote_image['id'];
						$image_url = $author_name.'_quote_'.$image.'_'.$post->ID.'.jpg';
					if(file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/uploads/ads/'.$image_url)){
						$final_image_url = 'https://www.energytherapy.biz/wp-content/uploads/ads/'.$image_url;
					}else{
						$final_image_url = 'https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png';
					}
                        echo '<meta property="og:image" content="'.$final_image_url.'"/>';
                        echo '<meta name="twitter:image:src" content="'.$final_image_url.'">';
					} else {
					$default_image="https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png"; //replace this with a default image on your server or an image in your media library
                    echo '<meta property="og:image" content="' . $default_image . '"/>';
                    echo '<meta name="twitter:image:src" content="'.$default_image.'">';
					}
				}

			}else{
				if(isset($_REQUEST['img'])){
					$image_url = $author_name.'_quote_'.$_REQUEST['img'].'_'.$post->ID.'.jpg';
					if(file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/uploads/ads/'.$image_url)){
						$final_image_url = 'https://www.energytherapy.biz/wp-content/uploads/ads/'.$image_url;
					}else{
						$final_image_url = 'https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png';
					}
                    echo '<meta property="og:image" content="'.$final_image_url.'"/>';
                    echo '<meta name="twitter:image:src" content="'.$final_image_url.'">';
				}else {
				$thumbnail_src_url = rw_resize(get_post_thumbnail_id($post->ID),600,315);
                echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src_url ) . '"/>';
                echo '<meta name="twitter:image:src" content="' . esc_attr( $thumbnail_src_url ) . '">';
				}
			}
				$post_id = get_post($post->ID);
				$content = strip_tags($post_id->post_content);
				$desc = trim_excerpt_without_filters1($content , 200);
				$desc = str_replace(array("\n", "\r"),'' , $desc);
				}
			if($excerpt = $post->post_excerpt) {
				$excerpt = strip_tags($post->post_excerpt);
				$excerpt = str_replace("", "'", $excerpt);
			}else{
				$excerpt = get_bloginfo('description');
				}
				$people = get_field('author');
			if( $people ){
				foreach( $people as $person ){
				$author .= $person->post_title.',';
				}
			}
				$author = rtrim($author,',');

				$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				$actual_link_arr = explode('/',$actual_link);
		  if (trim(strtolower($actual_link_arr[4])) == 'authors'){ ?>
		<meta property="og:title" content="<?php echo $author .' Quotes'; ?>"/>
		<meta property="og:url" content="<?php if(isset($_REQUEST['img'])){ echo the_permalink() .'?img='.$_REQUEST['img']; } else { echo the_permalink(); } ?>" />
		<?php } else if ((trim(strtolower($actual_link_arr[3])) == 'quotes') && empty($actual_link_arr[4]) ){ ?>
		<meta property="fb:app_id" content="851749861552175" />
		<meta property="og:title" content="<?php echo "Explore The Latest Insightful And Meaningful Quotes"; ?> | <?php echo get_bloginfo(); ?> "/>
		<meta property="og:url" content="https://www.energytherapy.biz/quotes/" />
		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$the_query = new WP_Query('orderby=post_date&order=DESC&post_type=quote&showposts=20&paged='.$paged);
				if ($the_query->have_posts()) : $the_query->the_post();
					if(has_post_thumbnail()){
						$thumbnail_src_url = rw_resize(get_post_thumbnail_id($post->ID),600,315);
                        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src_url ) . '"/>';
                        echo '<meta name="twitter:image:src" content="' . esc_attr( $thumbnail_src_url ) . '">';
					} else if (!empty(get_field('gallery_images',$post->ID))) {
						$rows = get_field('gallery_images',$post->ID);
						$first_row = $rows[0];
						$first_quote_image = $first_row['quotes_images'];
						$image = $first_quote_image['url'];
						$image_alt = $first_quote_image['alt'];
						$author_det =  get_field('author',$post->ID);
							foreach($author_det as $author_details) {
							$author_name_gal = get_the_title( $author_details->ID );
							}
						$image_url = str_replace(' ','_',$author_name_gal).'_quote_'.$first_quote_image['id'].'_'.$post->ID.'.jpg';
						if(file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/uploads/ads/'.$image_url)){
							$final_image_url = 'https://www.energytherapy.biz/wp-content/uploads/ads/'.$image_url;
						}
						if($final_image_url != '') {
                            echo '<meta property="og:image" content="' . $final_image_url . '"/>';
                            echo '<meta name="twitter:image:src" content="' . $final_image_url . '">';
						}
					} else if (empty(get_field('gallery_images',$post->ID))) {
						$author_det =  get_field('author',$post->ID);
							foreach($author_det as $author_details) {
							$author_name_gal = get_the_title( $author_details->ID );
							}
							if(has_post_thumbnail($author_details->ID)) {
								$thumbnail_src_url = rw_resize(get_post_thumbnail_id($author_details->ID),600,315);
                            echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src_url ) . '"/>';
                            echo '<meta name="twitter:image:src" content="' . esc_attr( $thumbnail_src_url ) . '">';
							} else {
                                echo '<meta property="og:image" content="https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png"/>';
                                echo '<meta name="twitter:image:src" content="https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png">';
                            }
					} else {
                        echo '<meta property="og:image" content="https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png"/>';
                        echo '<meta name="twitter:image:src" content="https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png">';
					}
                endif;
                wp_reset_query();
				$post_id = get_post($post->ID);
				$content = strip_tags($post_id->post_content);
				$desc = trim_excerpt_without_filters1($content , 200);
				$desc = str_replace(array("\n", "\r"),'' , $desc);
			} else if ((trim(strtolower($actual_link_arr[3])) == 'quotes') && ($actual_link_arr[4] == 'page') ){ ?>
		<meta property="fb:app_id" content="851749861552175" />
		<meta property="og:title" content="<?php echo "Explore The Latest Insightful And Meaningful Quotes"; ?> | <?php echo get_bloginfo(); ?> "/>
		<meta property="og:url" content="<?php echo $actual_link; ?>" />
		<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$the_query = new WP_Query('orderby=post_date&order=DESC&post_type=quote&showposts=20&paged='.$paged);
				if ($the_query->have_posts()) : $the_query->the_post();
					if(has_post_thumbnail()){
						$thumbnail_src_url = rw_resize(get_post_thumbnail_id($post->ID),600,315);
                        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src_url ) . '"/>';
                        echo '<meta name="twitter:image:src" content="' . esc_attr( $thumbnail_src_url ) . '">';
					} else if (!empty(get_field('gallery_images',$post->ID))) {
						$rows = get_field('gallery_images',$post->ID);
						$first_row = $rows[0];
						$first_quote_image = $first_row['quotes_images'];
						$image = $first_quote_image['url'];
						$image_alt = $first_quote_image['alt'];
						$author_det =  get_field('author',$post->ID);
							foreach($author_det as $author_details) {
							$author_name_gal = get_the_title( $author_details->ID );
							}
						$image_url = str_replace(' ','_',$author_name_gal).'_quote_'.$first_quote_image['id'].'_'.$post->ID.'.jpg';
						if(file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/uploads/ads/'.$image_url)){
							$final_image_url = 'https://www.energytherapy.biz/wp-content/uploads/ads/'.$image_url;
						}
						if($final_image_url != '') {
                            echo '<meta property="og:image" content="' . $final_image_url . '"/>';
                            echo '<meta name="twitter:image:src" content="' . $final_image_url . '">';
						}
					} else if (empty(get_field('gallery_images',$post->ID))) {
						$author_det =  get_field('author',$post->ID);
							foreach($author_det as $author_details) {
							$author_name_gal = get_the_title( $author_details->ID );
							}
							if(has_post_thumbnail($author_details->ID)) {
								$thumbnail_src_url = rw_resize(get_post_thumbnail_id($author_details->ID),600,315);
                            echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src_url ) . '"/>';
                            echo '<meta name="twitter:image:src" content="' . esc_attr( $thumbnail_src_url ) . '">';
							} else {
                                echo '<meta property="og:image" content="https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png"/>';
                                echo '<meta name="twitter:image:src" content="https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png">'; }
					} else {
                        echo '<meta property="og:image" content="https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png"/>';
                        echo '<meta name="twitter:image:src" content="https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png">';
					}
                endif;
                wp_reset_query();
				$post_id = get_post($post->ID);
				$content = strip_tags($post_id->post_content);
				$desc = trim_excerpt_without_filters1($content , 200);
				$desc = str_replace(array("\n", "\r"),'' , $desc);
				}  ?>
		<meta property="og:description" content="<?php echo htmlentities ('"'.$desc.'" - ' .$author .' quotes from '. get_bloginfo(),ENT_QUOTES);?>"/>
		<meta property="og:type" content="article"/>
		<meta property="og:site_name" content="<?php echo get_bloginfo(); ?>" />
		<meta name="twitter:card" content="summary_large_image">
		<?php }
			else if($typenow == 'quote_author') {
					echo '<meta property="fb:app_id" content="851749861552175" />';
				if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
					$default_image="https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png"; //replace this with a default image on your server or an image in your media library
                    echo '<meta property="og:image" content="' . $default_image . '"/>';
                    echo '<meta name="twitter:image:src" content="' . $default_image . '">';
				}else{
					$thumbnail_src_url = rw_resize(get_post_thumbnail_id($post->ID),600,315);
                    echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src_url ) . '"/>';
                    echo '<meta name="twitter:image:src" content="' . esc_attr( $thumbnail_src_url ) . '">';
				}
				$post_id = get_post($post->ID);
				$content = strip_tags($post_id->post_content);
				$desc = trim_excerpt_without_filters1($content , 1000);
				$desc = str_replace(array("\n", "\r"),'' , $desc);
		?>
		<meta property="og:title" content="<?php echo 'Explore Inspiring And Meaningful Quotes by '; ?><?php the_title() ?>"/>
		<meta property="og:description" content="<?php echo $desc; ?>" />
		<meta property="og:type" content="article"/>
		<meta property="og:url" content="<?php echo the_permalink(); ?>" />
		<meta property="og:site_name" content="<?php echo get_bloginfo(); ?>" />
		<meta name="twitter:card" content="summary_large_image">
		<?php }
			else if ($typenow == 'post') {
					echo '<meta property="fb:app_id" content="851749861552175" />';
				if(!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
					$default_image="https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png"; //replace this with a default image on your server or an image in your media library
                    echo '<meta property="og:image" content="' . $default_image . '"/>';
                    echo '<meta name="twitter:image:src" content="' . $default_image . '">';
				}else{
					$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array(200,200) );
					$thumbnail_src_url = rw_resize(get_post_thumbnail_id($post->ID),600,315);
					//echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
                    echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src_url ) . '"/>';
                    echo '<meta name="twitter:image:src" content="' . esc_attr( $thumbnail_src_url ) . '">';
				}
				$post_id = get_post($post->ID);
				$content = strip_tags($post_id->post_content);
				$desc = trim_excerpt_without_filters1($content , 1000);
				$desc = str_replace(array("\n", "\r"),'' , $desc);
		?>
		<meta property="og:title" content="<?php the_title() ?> | <?php echo get_bloginfo(); ?>"/>
		<meta property="og:description" content="<?php echo $desc; ?>"/>
		<meta property="og:type" content="article"/>
		<meta property="og:url" content="<?php the_permalink(); ?>" />
		<meta property="og:site_name" content="<?php echo get_bloginfo(); ?>" />
		<meta name="twitter:card" content="summary_large_image">
		<?php }
			else if(($typenow == 'page') &&($post->ID == 12983)) {
                wp_cache_flush();
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$the_query = new WP_Query('meta_key=total_share&orderby=meta_value_num&order=DESC&post_type=quote&showposts=20&paged=' . $paged );
				if ($the_query->have_posts()) : $the_query->the_post();
					if(has_post_thumbnail()){
						$thumbnail_src_url = rw_resize(get_post_thumbnail_id($post->ID),600,315);
                        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src_url ) . '"/>';
                        echo '<meta name="twitter:image:src" content="' . esc_attr( $thumbnail_src_url ) . '">';
					} else if (!empty(get_field('gallery_images',$post->ID))) {
						$rows = get_field('gallery_images',$post->ID);
						$first_row = $rows[0];
						$first_quote_image = $first_row['quotes_images'];
						$image = $first_quote_image['url'];
						$image_alt = $first_quote_image['alt'];
						$author_det =  get_field('author',$post->ID);
							foreach($author_det as $author_details) {
							$author_name_gal = get_the_title( $author_details->ID );
							}
						$image_url = str_replace(' ','_',$author_name_gal).'_quote_'.$first_quote_image['id'].'_'.$post->ID.'.jpg';
					if(file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/uploads/ads/'.$image_url)){
						$final_image_url = 'https://www.energytherapy.biz/wp-content/uploads/ads/'.$image_url;
					}
					if($final_image_url != '') {
                        echo '<meta property="og:image" content="' . $final_image_url . '"/>';
                        echo '<meta name="twitter:image:src" content="' . $final_image_url . '">';
					}
				} else if (empty(get_field('gallery_images',$post->ID))) {
                    $author_det =  get_field('author',$post->ID);
                        foreach($author_det as $author_details) {
                        $author_name_gal = get_the_title( $author_details->ID );
                        }
                        if(has_post_thumbnail($author_details->ID)) {
                            $thumbnail_src_url = rw_resize(get_post_thumbnail_id($author_details->ID),600,315);
                        echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src_url ) . '"/>';
                        echo '<meta name="twitter:image:src" content="' . esc_attr( $thumbnail_src_url ) . '">';
                        } else {
                            echo '<meta property="og:image" content="https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png"/>';
                            echo '<meta name="twitter:image:src" content="https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png">'; }
                } else {
                    echo '<meta property="og:image" content="https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png"/>';
                    echo '<meta name="twitter:image:src" content="https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png">';
                }
                endif;
                wp_reset_query();
            }
            else if(($typenow == 'product') && (trim(strtolower($actual_link_shop_arr[3])) == 'shop')){
                $post_id = get_post($post->ID);
                $content = strip_tags($post_id->post_content);
                $desc = trim_excerpt_without_filters1($content , 1000);
                $desc = str_replace(array("\n", "\r"),'' , $desc); ?>
                <meta property="fb:app_id" content="851749861552175" />
                <meta property="og:title" content="<?php woocommerce_page_title(); ?> | <?php echo get_bloginfo(); ?>"/>
                <meta property="og:description" content="<?php echo $desc; ?>"/>
                <meta property="og:type" content="article"/>
                <meta property="og:url" content="<?php echo site_url(); ?>/shop/" />
                <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>" />
                <meta property="og:image" content="https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png"/>
                <meta name="twitter:image:src" content="https://www.energytherapy.biz/wp-content/uploads/2017/03/et-logo-square.png">
                <meta name="twitter:card" content="summary_large_image">
            <?php
            }
		}
add_action('wp_head', 'fb_opengraph', 5);

function quote_gallery(){
	$img = $_POST['data_url'];
	$img_id = $_POST['img_id'];
	$img_post_id = $_POST['img_post_id'];
	$author_name = trim(str_replace(' ' ,'_',$_POST['author']));
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace('data:image/jpeg;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = $_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/' . $author_name.'_quote_'.$img_id .'_'. $img_post_id . '.jpg';
	$success = file_put_contents($file, $data);
	$source_img = $_SERVER['DOCUMENT_ROOT'].'/wp-content/uploads/ads/' . $author_name.'_quote_'.$img_id .'_'. $img_post_id . '.jpg';
	$destination_img = $_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/' . $author_name.'_quote_'.$img_id .'_'. $img_post_id . '.jpg';
	$image_compress = compress($source_img, $destination_img, 90);
	echo site_url().'/wp-content/uploads/ads/' . $author_name.'_quote_'.$img_id .'_'. $img_post_id . '.jpg';
	die();
}
add_action('wp_ajax_nopriv_quote_gallery', 'quote_gallery');
add_action('wp_ajax_quote_gallery', 'quote_gallery');

function compress($source, $destination, $quality) {
		$info = getimagesize($source);
		if ($info['mime'] == 'image/jpeg'){
			$image = imagecreatefromjpeg($source);
		}elseif ($info['mime'] == 'image/gif') {
			$image = imagecreatefromgif($source);
		}elseif ($info['mime'] == 'image/png') {
			$image = imagecreatefrompng($source);
		}
		imagejpeg($image, $destination, $quality);
		return $destination;
	}

function trim_excerpt_without_filters1( $text, $max = 0 ) {

		$text = str_replace( ']]>', ']]&gt;', $text );
		$text = preg_replace( '|\[(.+?)\](.+?\[/\\1\])?|s', '', $text );
		$text = wp_strip_all_tags( $text );
		// Treat other common word-break characters like a space.
		$text2 = preg_replace( '/[,._\-=+&!\?;:*]/s', ' ', $text );
		if ( ! $max ) {
			$max = 160;
		}
		$max_orig = $max;
		$len      = strlen( $text2 );
		if ( $max < $len ) {
			if ( function_exists( 'mb_strrpos' ) ) {
				$pos = mb_strrpos( $text2, ' ', - ( $len - $max ) );
				if ( false === $pos ) {
					$pos = $max;
				}
				if ( $pos > 1 ) {
					$max = $pos;
				} else {
					$max = 1;
				}
			} else {
				while ( ' ' != $text2[ $max ] && $max > 1 ) {
					$max --;
				}
			}
			// Probably no valid chars to break on?
			if ( $len > $max_orig && $max < intval( $max_orig / 2 ) ) {
				$max = $max_orig;
			}
		}
		$text = substr( $text, 0, $max );

		return trim( strip_tags( $text) );
	}

add_filter('login_errors','login_error_message');

function login_error_message($error){
    //check if that's the error you are looking for
    $username = $_POST['username'];
    $pos = strpos($error, 'incorrect');
    if (is_int($pos)) {
        //its the right error so you can overwrite it
        return sprintf( __( '<strong>ERROR</strong>: You have entered a wrong username and/or password. If you have forgotten your password <a href="%2$s" title="Password Lost and Found">click here</a>.' ), '', wp_lostpassword_url() );
    }
    return $error;
}

add_action( 'password_reset', 'my_password_reset', 10, 2 );

function my_password_reset( $user, $new_pass ) {
    if (isset($_POST['g-recaptcha-response'])) {
        $recaptcha_secret = get_option('captcha_secret_key');
        $response = wp_remote_get("https://www.google.com/recaptcha/api/siteverify?secret=". $recaptcha_secret ."&response=". $_POST['g-recaptcha-response']);
        $response = json_decode($response["body"], true);
        if (true == $response["success"]) {
            return $user;
        } else {
            global $errors;
            $errors = new WP_Error("Captcha Invalid", __("<strong>ERROR</strong>: You are a bot"));
            if( is_wp_error( $errors ) )
                wp_die( $errors->get_error_message(), __('Input Error', 'askan') );
            return $errors;
        }
    } else {
        global $errors;
        $errors = new WP_Error("Captcha Invalid", __("<strong>ERROR</strong>: You are a bot. If not then enable JavaScript"));
        if( is_wp_error( $errors ) )
            wp_die( $errors->get_error_message(), __('Input Error', 'askan') );
        return $errors;
    }
    // Do something before password reset.
}


function get_related_author_posts() {
    global $authordata, $post;
    $authors_posts = get_posts( array( 'author' => $authordata->ID, 'post__not_in' => array( $post->ID ), 'posts_per_page' => 5 ) );
    $output = '<ul>';
    foreach ( $authors_posts as $authors_post ) {
        $output .= '<li><a href="' . get_permalink( $authors_post->ID ) . '">' . apply_filters( 'the_title', $authors_post->post_title, $authors_post->ID ) . '</a></li>';
    }
    $output .= '</ul>';
    return $output;
}

function add_tags_categories_books() {
    //register_taxonomy_for_object_type('category', 'quotes');
    register_taxonomy('categories', 'book', array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => true,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
            'name' => _x( 'categories', 'taxonomy general name' ),
            'singular_name' => _x( 'categories', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Locations' ),
            'all_items' => __( 'All categories' ),
            'parent_item' => __( 'Parent categories' ),
            'parent_item_colon' => __( 'Parent categories:' ),
            'edit_item' => __( 'Edit categories' ),
            'update_item' => __( 'Update categories' ),
            'add_new_item' => __( 'Add New categories' ),
            'new_item_name' => __( 'New categories Name' ),
            'menu_name' => __( 'Categories' ),
        ),
        // Control the slugs used for this taxonomy
        'rewrite' => array(
            'slug' => 'book-categories', // This controls the base slug that will display before each term
            'with_front' => false, // Don't display the category base before "/locations/"
            'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
        ),
    ));
    register_taxonomy_for_object_type('post_tag', 'book');
    /*register_taxonomy('tag','quotes',array( // replace your post type with "news"
     'hierarchical' => false,
     'labels' => $labels,
     'show_ui' => true,
     'update_count_callback' => '_update_post_term_count',
     'query_var' => true,
     'rewrite' => array( 'slug' => 'quotes-tag' ),
   ));*/
}
add_action('init', 'add_tags_categories_books');

add_action('lostpassword_post', 'validate_reset', 99, 3);

function validate_reset(){
    session_start();
    $_SESSION['requested_username'] = $_POST['user_login'];
   if (isset($_POST['g-recaptcha-response'])) {

        $recaptcha_secret = get_option('captcha_secret_key');

        $response = wp_remote_get("https://www.google.com/recaptcha/api/siteverify?secret=". $recaptcha_secret ."&response=". $_POST['g-recaptcha-response']);

        $response = json_decode($response["body"], true);

        if (true == $response["success"]) {

            return $_POST['user_login'];

        } else {
            global $errors;
            $errors = new WP_Error("Captcha Invalid", __("<strong>ERROR</strong>: You are a bot"));
            if( is_wp_error( $errors ) )
                wp_die( $errors->get_error_message(), __('Input Error', 'askan') );
            return $errors;
        }
    } else {
        global $errors;
        $errors = new WP_Error("Captcha Invalid", __("<strong>ERROR</strong>: You are a bot. If not then enable JavaScript"));
        if( is_wp_error( $errors ) )
            wp_die( $errors->get_error_message(), __('Input Error', 'askan') );
        return $errors;
    }
}

function get_pagination_links() {
	ob_start();
    global $wp_query;
    $current = max( 1, absint( get_query_var( 'paged' ) ) );
    $pagination = paginate_links( array(
        'base' => str_replace( PHP_INT_MAX, '%#%', esc_url( get_pagenum_link( PHP_INT_MAX ) ) ),
        'format' => '?paged=%#%',
        'current' => $current,
        'total' => $wp_query->max_num_pages,
        'type' => 'array',
        'prev_text' => 'PREV',
        'next_text' => 'NEXT',
    ) ); ?>
    <?php if ( ! empty( $pagination ) ) : ?>
        <ul>
            <?php foreach ( $pagination as $key => $page_link ) : ?>
                <li class="single_page <?php if ( strpos( $page_link, 'current' ) !== false ) { echo ' active'; } ?>"><?php echo $page_link ?></li>
            <?php endforeach ?>
        </ul>
    <?php endif;
    $links = ob_get_clean();
    return apply_filters( 'sa_pagination_links', $links );
}

add_action( 'pre_get_posts', 'my_search_is_exact', 10 );

function my_search_is_exact( $query ) {
    if ( !is_admin() && $query->is_main_query() && $query->is_search ) {
        $query->set( 'sentence', true );
    }
}

add_filter( 'posts_search', 'my_search_is_perfect', 20, 2 );

function my_search_is_perfect( $search, $wp_query ) {
    global $wpdb;
    if ( empty( $search ) )
        return $search;
    $q = $wp_query->query_vars;
    $n = !empty( $q['exact'] ) ? '' : '%';
    $search = $searchand = '';
    foreach ( (array) $q['search_terms'] as $term ) {
        $term = esc_sql( like_escape( trim($term) ) );
        $search .= "{$searchand}($wpdb->posts.post_title REGEXP '[[:<:]]{$term}[[:>:]]') OR ($wpdb->posts.post_content REGEXP '[[:<:]]{$term}[[:>:]]')";
        $searchand = ' AND ';
    }
    if ( ! empty( $search ) ) {
        $search = " AND ({$search}) ";
        if ( ! is_user_logged_in() )
            $search .= " AND ($wpdb->posts.post_password = '') ";
    }
    return $search;
}
add_action ( 'wp_footer', 'my_custom_style' );
function my_custom_style(){
	 if( !is_front_page() ){ ?>
		<!--script>
			window.UpviralConfig = {
			camp: "G$&$4",
			widget_style:'popup',
			opacity:0.60,
			close_popup:'yes',
			close_days:'0',
			}
		</script>
		<script language="javascript" src="https://snippet.upviral.com/upviral.js"></script--->
	<?php  }
}

function add_your_meta_box(){

add_meta_box('generate-gallery-id', 'Generate Gallery', 'function_of_metabox', 'quote', 'side', 'high');
}
add_action('add_meta_boxes', 'add_your_meta_box');

function function_of_metabox(){ ?>
    <input type="submit" class="button button-primary button-large" value="Generate" id="generate_gallery"/>
	<div id="overlay">
		<div class="loader-gif">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif"/>
		</div>
	</div>
<?php }

// function wpbitly_get_shortlink_custom$endpoint, $params, $complex=false) {
// 	$bitly_oauth_api = 'https://api-ssl.bit.ly/v3/';
// 	$user_access_token = '67115d95255f6134c14c8d0a0bf589d8926a3e0e';
// 	$params['access_token'] = $user_access_token;
// 	$params['domain'] = 'entherapy.biz';

//   $result = array();
//   if ($complex) {
//     $url_params = "";
//     foreach ($params as $key => $val) {
//       if (is_array($val)) {
//         // we need to flatten this into one proper command
//         $recs = array();
//         foreach ($val as $rec) {
//           $tmp = explode('/', $rec);
//           $tmp = array_reverse($tmp);
//           array_push($recs, $tmp[0]);
//         }
//         $val = implode('&' . $key . '=', $recs);
//       }
//       $url_params .= '&' . $key . "=" . $val;
//     }
//     $url = $bitly_oauth_api . $endpoint . "?" . substr($url_params, 1);
//   } else {
//     $url = $bitly_oauth_api . $endpoint . "?" . http_build_query($params);
//   }

//   //echo $url . "\n";

//   $result = json_decode(bitly_get_curl($url), true);

//   return $result['data']['url'];
// }

// function bitly_get_curl($uri) {
//   $output = "";
//   try {
//     $ch = curl_init($uri);
//     curl_setopt($ch, CURLOPT_HEADER, 0);
//     curl_setopt($ch, CURLOPT_TIMEOUT, 4);
//     curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 2);
//     curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
//     $output = curl_exec($ch);
//   } catch (Exception $e) {
//   }
//   return $output;
// }

function author_bio(){
	if ($_POST['page_type'] == 'quote_author'){
		global $wpdb;
		$post_author = stripslashes($_POST['post_author']);
		$post_title = stripslashes($_POST['post_title']);
		$thumbnail_id = stripslashes($_POST['thumbnail_id']);
		$post_name = stripslashes($_POST['post_name']);
		$post_type = stripslashes($_POST['post_type']);
		$post_status = stripslashes($_POST['post_status']);
		$content = stripslashes($_POST['content']);

		$data = $wpdb->get_results ( "SELECT * FROM et_posts WHERE post_type ='$post_type' AND post_title ='$post_title' AND post_title ='$post_title'");
		$row = $wpdb->num_rows;
		foreach($data as $k => $v){
			$id = $v->ID;
		}

		if ($row == 0){
			$wpdb->insert($wpdb->prefix . 'posts', array('post_author'=>$post_author, 'post_title'=>$post_title, 'post_status'=>$post_status, 'post_content'=>$content, 'post_name'=>$post_name, 'post_type'=>$post_type, 'comment_status'=>'closed', 'ping_status'=>'closed', 'post_date'=> current_time('mysql'), 'post_date_gmt'=> current_time('mysql'), 'post_modified'=> current_time('mysql'), 'post_modified_gmt'=> current_time('mysql')));
				$data = $wpdb->get_results ( "SELECT * FROM et_posts WHERE post_type ='$post_type' AND post_title ='$post_title' AND post_title ='$post_title'");
				foreach($data as $k => $v){
					$id = $v->ID;
				}
				add_post_meta($id,'_wp_page_template','page-template/author-biography.php');
				add_post_meta($id,'_thumbnail_id',$thumbnail_id);
				$arr_post_id = array($_POST['post_ID']);
				$serial_arr_post_id = serialize($arr_post_id);
				$data = $wpdb->get_results("SELECT meta_key FROM et_postmeta WHERE post_id ='$id' AND meta_key ='author'");
				$row = $wpdb->num_rows;
				if ($row == 0 ){
					$wpdb->insert($wpdb->prefix . 'postmeta',array('meta_key'=>'author','meta_value'=>$serial_arr_post_id,'post_id'=>$id));
				} else {
					$wpdb->update($wpdb->prefix . 'postmeta',array('meta_value'=>$serial_arr_post_id),array('meta_key'=>'author','post_id'=>$id));
				}
				$guid = get_site_url().'?page_id='.$id;
				$wpdb->update($wpdb->prefix . 'posts', array('guid'=>$guid),array('ID'=>$id));
				//$wpdb->insert($wpdb->prefix. 'postmeta', array('post_id'=>$id) );
		} else if ($row == 1) {
			$wpdb->update($wpdb->prefix . 'posts', array('post_author'=>$post_author, 'post_content'=>$content, 'post_title'=>$post_title, 'post_status'=>$post_status, 'post_content'=>$content, 'post_name'=>$post_name, 'post_type'=>$post_type, 'comment_status'=>'closed', 'ping_status'=>'closed', 'post_date'=> current_time('mysql'), 'post_date_gmt'=> current_time('mysql'), 'post_modified'=> current_time('mysql'), 'post_modified_gmt'=> current_time('mysql')),array('ID'=>$id));

			update_post_meta($id,'_thumbnail_id',$thumbnail_id);
			$arr_post_id = array($_POST['post_ID']);
			$serial_arr_post_id = serialize($arr_post_id);

			$data = $wpdb->get_results("SELECT meta_key FROM et_postmeta WHERE post_id ='$id' AND meta_key ='author'");
			$row = $wpdb->num_rows;
			if ($row == 0 ){
				$wpdb->insert($wpdb->prefix . 'postmeta',array('meta_key'=>'author','meta_value'=>$serial_arr_post_id,'post_id'=>$id));
			} else {
				$wpdb->update($wpdb->prefix . 'postmeta',array('meta_value'=>$serial_arr_post_id),array('meta_key'=>'author','post_id'=>$id));
			}
		}
	}
	die();
}

add_action('wp_ajax_nopriv_author_bio', 'author_bio');
add_action('wp_ajax_author_bio', 'author_bio');

function author_trash(){
	if ($_POST['page_type'] == 'quote_author'){
		global $wpdb;
		$arr_post_id = array($_POST['post_ID']);
		$serial_arr_post_id = serialize($arr_post_id);
		$post_status = $_POST['post_status'];
		$data = $wpdb->get_results ( "SELECT * FROM et_postmeta WHERE meta_value = '$serial_arr_post_id'");
		foreach($data as $k => $v){
			$id = $v->post_id;
			$wpdb->update($wpdb->prefix . 'posts', array('post_status'=>$post_status),array('ID'=>$id));

		}
	}
	die();
}

add_action('wp_ajax_nopriv_author_trash', 'author_trash');
add_action('wp_ajax_author_trash', 'author_trash');

function trash_to_publish(){
	if ($_POST['page_type'] == 'quote_author'){
		global $wpdb;
		$arr_post_id = array($_POST['post_ID']);
		$serial_arr_post_id = serialize($arr_post_id);
		$post_status = $_POST['post_status'];
		$data = $wpdb->get_results ( "SELECT * FROM et_postmeta WHERE meta_value = '$serial_arr_post_id'");
		foreach($data as $k => $v){
			$id = $v->post_id;
			$wpdb->update($wpdb->prefix . 'posts', array('post_status'=>$post_status),array('ID'=>$id));
		}
	}
	die();
}

add_action('wp_ajax_nopriv_trash_to_publish', 'trash_to_publish');
add_action('wp_ajax_trash_to_publish', 'trash_to_publish');

function trash_empty(){
	if ($_POST['page_type'] == 'quote_author'){
		global $wpdb;
		$arr_post_id = array($_POST['post_ID']);
		$serial_arr_post_id = serialize($arr_post_id);

		$data = $wpdb->get_results ( "SELECT * FROM et_postmeta WHERE meta_value = '$serial_arr_post_id'");
		foreach($data as $k => $v){
			$id = $v->post_id;

			$query = $wpdb->query('DELETE FROM '.$wpdb->prefix.'posts WHERE id = "'.$id.'"');
			$query1 = $wpdb->query('DELETE FROM '.$wpdb->prefix.'postmeta WHERE post_id = "'.$id.'"');
		}
	}
	die();
}

add_action('wp_ajax_nopriv_trash_empty', 'trash_empty');
add_action('wp_ajax_trash_empty', 'trash_empty');

/*function count_total_share($total,$post_id){
	global $wpdb;
	$data = $wpdb->get_results ( "SELECT meta_key FROM et_postmeta WHERE post_id ='$post_id' AND meta_key ='total_share'");
	$row = $wpdb->num_rows;
	if($row == 0){
	$wpdb->insert($wpdb->prefix . 'postmeta',array('meta_key'=>'total_share','meta_value'=>$total,'post_id'=>$post_id));
	} else {
        $total_count = $wpdb->get_results ( "SELECT meta_value FROM et_postmeta WHERE post_id ='$post_id' AND meta_key ='total_share'");
        $total_share_count = $total_count[0]->meta_value;
        if($total > $total_share_count){
            $wpdb->update($wpdb->prefix . 'postmeta',array('meta_value'=>$total),array('meta_key'=>'total_share','post_id'=>$post_id));
        }
	}
}*/

function count_total_share(){
    $total = $_POST['total'];
    $post_id = $_POST['post_id'];
	global $wpdb;
	$data = $wpdb->get_results ( "SELECT meta_key FROM et_postmeta WHERE post_id ='$post_id' AND meta_key ='total_share'");
	$row = $wpdb->num_rows;
	if($row == 0){
	$wpdb->insert($wpdb->prefix . 'postmeta',array('meta_key'=>'total_share','meta_value'=>$total,'post_id'=>$post_id));
	} else {
        $total_count = $wpdb->get_results ( "SELECT meta_value FROM et_postmeta WHERE post_id ='$post_id' AND meta_key ='total_share'");
        $total_share_count = $total_count[0]->meta_value;
        if($total > $total_share_count){
            $wpdb->update($wpdb->prefix . 'postmeta',array('meta_value'=>$total),array('meta_key'=>'total_share','post_id'=>$post_id));
        }
	}
}
add_action('wp_ajax_nopriv_count_total_share', 'count_total_share');
add_action('wp_ajax_count_total_share', 'count_total_share');

function show_testimonials(){
	global $wpdb;
		$data = $wpdb->get_results ( "SELECT tb_testimonial, tb_name FROM et_testimonial_basics WHERE tb_approved ='1' Order BY rand() limit 1");
		echo json_encode($data[0]);
		die();
}

add_action('wp_ajax_nopriv_show_testimonials', 'show_testimonials');
add_action('wp_ajax_show_testimonials', 'show_testimonials');

function show_pop_quote(){
	global $wpdb;
	//global $post;
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$pargs = array(
			'post_type'    => 'quote',
			'showposts'    => 1,
			'order'       => 'DESC',
			'orderby'       => 'rand',
			'paged'       => $paged,
			'meta_query' => array(
				'relation' => 'AND',
				array(
					'key'     => 'total_share',
					'value'	  => 1000,
					'compare' => '>',
					'type' => 'NUMERIC'
				),
				array(
					'relation' => 'OR',
						array(
						'key'     => 'gallery_images',
						'value'     => '',
						'compare'   => '!='
					),
						array(
						'key'     => '_thumbnail_id',
					),
				),
			),
		);
	query_posts($pargs); ?>
	<?php while (have_posts()) : the_post();
		$id = get_the_ID();?>
		<div class="div100 effectss">
			<div class="row">
				<div class="quote-container">
					<!--a href="<?php //the_permalink(); ?>" class="landing-quote-link"-->
					<?php $pq_img_id = get_post_thumbnail_id($id); ?>
					<?php $pq_alt_text = get_post_meta($pq_img_id, '_wp_attachment_image_alt', true); ?>
					<?php $quote_image = rw_resize($pq_img_id,555,408); ?>
					<div class="quote-image img">
						<?php if($pq_img_id){ ?>
						<img src="<?php echo $quote_image; ?>" alt="<?php echo $pq_alt_text; ?>" />
						<div class="overlay">
							<a href="<?php the_permalink($id);?>" class="expand"><i class="fa fa-link" aria-hidden="true"></i></a>
							<a class="close-overlay hidden">x</a>
						</div>
						<?php } else if (!empty(get_field('gallery_images',$id))) {
							$rows = get_field('gallery_images',$id);
							$first_row = $rows[0];
							$first_quote_image = $first_row['quotes_images'];
							$image = $first_quote_image['url'];
							$image_alt = $first_quote_image['alt'];
							$author_det =  get_field('author',$id);
								foreach($author_det as $author_details) {
								$author_name_gal = get_the_title( $author_details->ID );
								}
							$image_url = str_replace(' ','_',$author_name_gal).'_quote_'.$first_quote_image['id'].'_'.$id.'.jpg';
								if(file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/uploads/ads/'.$image_url)){
									$final_image_url = $image_url;
								}
									if($final_image_url != '') { ?>
						<img src="<?php echo site_url();?>/wp-content/uploads/ads/<?php echo $final_image_url; ?>"alt="<?php echo $image_alt; ?>" />
						<div class="overlay">
							<a href="<?php echo get_permalink($id); ?>" class="expand">
							<i class="fa fa-link" aria-hidden="true"></i></a>
							<a class="close-overlay hidden">x</a>
						</div>
						<?php } } else { ?>
						<div class="quote-content home-quote-content">
							<div class="quote-inner-content">
								<div class="no-img-content"><?php $cont = get_the_content();
									$string = strip_tags($cont);
									if (strlen($string) > 400) {
										$stringCut = substr($string, 0, 350);
										$string = substr($stringCut, 0, strrpos($stringCut, ' ')).' [...]';
										echo $string;
									} else {
										echo $cont; }?>
								</div>
							</div>
							<div class="overlay">
								<a href="<?php the_permalink($id);?>" class="expand"><i class="fa fa-link" aria-hidden="true"></i></a>
								<a class="close-overlay hidden">x</a>
							</div>
						</div>
						<?php } ?>
					</div>
					<!--/a-->
					<div class="popular-quotes-home">
						<div class="div100">
							<ul class="social-icons">
								<?php echo do_shortcode('[social_small_icons_home]');//social_warfare();?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile;
		wp_reset_query();
		die();
}

add_action('wp_ajax_nopriv_show_pop_quote', 'show_pop_quote');
add_action('wp_ajax_show_pop_quote', 'show_pop_quote');

function show_recent_quote(){
	global $wpdb;
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$rargs = array(
					'post_type'   => 'quote',
					'showposts'   => 1,
					'orderby'     => 'rand',
					'paged'       => $paged,
					'date_query' => array(
										array(
										  'after'   => '-6 month',
										),
									  ),
					'meta_query'  => array(
						array(
							'relation' => 'OR',
								array(
								'key'     => 'gallery_images',
								'value'     => '',
                                'compare'   => '!=',
                                'type' => 'NUMERIC',
							),
								array(
								'key'     => '_thumbnail_id',
							),
						),
					),
				);
	$query = new WP_Query( $rargs );
	while ($query->have_posts()) : $query->the_post();
		$id = get_the_ID(); ?>
	<div class="div100 effectss">
		<div class="row">
			<div class="quote-container">
				<!--a href="<?php //the_permalink(); ?>" class="landing-quote-link"-->
				<?php $rq_img_id = get_post_thumbnail_id($id); ?>
				<?php $rq_alt_text = get_post_meta($rq_img_id, '_wp_attachment_image_alt', true); ?>
				<?php $quote_image = rw_resize($rq_img_id,555,408); ?>
				<div class="quote-image img">
				<?php if($rq_img_id){ ?>
					<img src="<?php if($rq_img_id){ echo $quote_image; }?>" alt="<?php echo $rq_alt_text; ?>" />
					<div class="overlay">
						<a href="<?php the_permalink();?>" class="expand"><i class="fa fa-link" aria-hidden="true"></i></a>
						<a class="close-overlay hidden">x</a>
					</div>
					<?php } else if (!empty(get_field('gallery_images',$id))) {
						$rows = get_field('gallery_images',$id);
						$first_row = $rows[0];
						$first_quote_image = $first_row['quotes_images'];
						$image = $first_quote_image['url'];
						$image_alt = $first_quote_image['alt'];
						$author_det =  get_field('author',$id);
							foreach($author_det as $author_details) {
							$author_name_gal = get_the_title( $author_details->ID );
							}
						$image_url = str_replace(' ','_',$author_name_gal).'_quote_'.$first_quote_image['id'].'_'.$id.'.jpg';
							if(file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/uploads/ads/'.$image_url)){
								$final_image_url = $image_url;
							}
								if($final_image_url != '') { ?>
					<img src="<?php echo site_url();?>/wp-content/uploads/ads/<?php echo $final_image_url; ?>"alt="<?php echo $image_alt; ?>" />
					<div class="overlay">
						<a href="<?php echo get_permalink($id); ?>" class="expand">
						<i class="fa fa-link" aria-hidden="true"></i></a>
						<a class="close-overlay hidden">x</a>
					</div>
					<?php } } else { ?>
					<div class="quote-content home-quote-content">
						<div class="quote-inner-content">
							<div class="no-img-content"><?php $cont = get_the_content();
								$string = strip_tags($cont);
								if (strlen($string) > 400) {
									$stringCut = substr($string, 0, 350);
									$string = substr($stringCut, 0, strrpos($stringCut, ' ')).' [...]';
									echo $string;
								} else {
									echo $cont; }?>
							</div>
						</div>
						<div class="overlay">
							<a href="<?php the_permalink($id);?>" class="expand"><i class="fa fa-link" aria-hidden="true"></i></a>
							<a class="close-overlay hidden">x</a>
						</div>
					</div>
				<?php } ?>
				</div>
				<!--/a-->
				<div class="popular-quotes-home">
					<div class="div100">
						<ul class="social-icons">
							<?php echo do_shortcode('[social_small_icons_home]'); //social_warfare(); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php  endwhile;
	wp_reset_query();
	die();
}

add_action('wp_ajax_nopriv_show_recent_quote', 'show_recent_quote');
add_action('wp_ajax_show_recent_quote', 'show_recent_quote');

add_filter("manage_edit-quote_columns", "my_page_columns");

function my_custom_columns($column){
	global $post;
	$c_i_d=0;
	if($column == 'author1'){
		if(get_field('author', $post->ID)){
			$author = get_field('author', $post->ID);
            echo $author[0]->post_title;
		}else{
			echo 'No';
		}
	}
}

add_action("manage_posts_custom_column", "my_custom_columns",10,2);

function modified_column_register( $columns ) {
	$columns['Modified'] = __( 'Date Modified', 'show_modified_date_in_admin_lists' );
	return $columns;
}
add_filter( 'manage_edit-quote_columns', 'modified_column_register' );
add_filter( 'manage_edit-quote_author_columns', 'modified_column_register' );
add_filter( 'manage_edit-book_columns', 'modified_column_register' );

function modified_column_display( $column_name, $post_id ) {
	switch ( $column_name ) {
	case 'Modified':
		global $post;
	       	echo '<p class="mod-date">';
	       	echo '<em>'.get_the_modified_date().' '.get_the_modified_time().'</em><br />';
			echo '<small>' . esc_html__( 'by ', 'show_modified_date_in_admin_lists' ) . '<strong>'.get_the_modified_author().'<strong></small>';
			echo '</p>';
		break; // end all case breaks
	}
}
add_action( 'manage_posts_custom_column', 'modified_column_display', 10, 2 );


function modified_column_register_sortable( $columns ) {
	$columns['Modified'] = 'modified';
	return $columns;
}
add_filter( 'manage_edit-quote_sortable_columns', 'modified_column_register_sortable' );
add_filter( 'manage_edit-quote_author_sortable_columns', 'modified_column_register_sortable' );
add_filter( 'manage_edit-book_sortable_columns', 'modified_column_register_sortable' );

function my_page_columns($columns){
	$columns = array(
		'cb'	 	=> '<input type="checkbox" />',
		'title' 	=> 'Title',
        'tags'      => 'Tags',
		'author1'	=>	'Author',
		'date'		=>	'Date'

	);
	return $columns;
}



function my_column_width() {
    echo '<style type="text/css">';
    echo '.column-Modified, .column-author1 { width:15%; }';
    echo '.wp-list-table #type{width: 8%} .wp-list-table #user_registered, .wp-list-table #user_registered1{width: 10%}';
    echo '</style>';
}
add_action('admin_head', 'my_column_width');

remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
add_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' , 30);

add_filter( 'woocommerce_product_categories_widget_dropdown_args', 'rv_exclude_wc_widget_categories' );


//* Used when the widget is displayed as a list

add_filter( 'woocommerce_product_categories_widget_args', 'rv_exclude_wc_widget_categories' );
function rv_exclude_wc_widget_categories( $cat_args ) {
    $cat_args['exclude'] = array('2833','1109','1110','1099','1098','1106','1107','1094');
    // Insert the product category IDs you wish to exclude
    return $cat_args;
}

function related_products_all(){
	global $post;
	global $product;
	$ids = get_field('select_product','options', false, false);
	$query = new WP_Query(array(
		'post_type'      	=> 'product',
		'posts_per_page'	=> 4,
		'post__in'			=> $ids,
		'post_status'		=> 'publish',
		'orderby'        	=> 'post__in',
    ));
    $no_pro = count($query->posts);
    if(!is_product()){
        if (!empty($ids)){
        global $post;
        $typenow = $post->post_type;
            echo '<div class="custom_related_products">';
            echo '<h2> Products And Services You Might Like... </h2>';
            echo '<ul class="custom_products-'.$no_pro.'">';
            while ($query -> have_posts()) : $query -> the_post();
                echo '<li class="custom_products_type">';
                echo '<a href="'. get_the_permalink($post->ID) .'" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>';
                if(has_post_thumbnail()){
                    echo '<a href="'. get_the_permalink($post->ID) .'">';
                    the_post_thumbnail(array(350, 265));
                }
                echo '<h3>'. get_the_title() .'</h3>';
                $price= wc_get_product( $post->ID );
                $product = wc_get_product( $post->ID );
                if (!empty($price->regular_price)){
                    echo '<span class="custom_products_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">£</span>' .$price->regular_price.'</span></span></a><a href="'. get_the_permalink($post->ID) .'" rel="nofollow" class="custom_products_button test1">learn more</a></li>';
                    } else {
                        echo $product->get_price_html() .'<br><br><a href="'. get_the_permalink($post->ID) .'" rel="nofollow" class="custom_products_button test">learn more</a></li>';
                    }
            endwhile;
            echo '</ul></div>';
        }
    wp_reset_query();
    }
}

add_action( 'publish_book','related_book_update');

function related_book_update(){

    $curr_book_id = get_the_ID();

    $related_book_id = $_POST['fields']['field_58d8b15fe075e'];

    if(isset($_COOKIE['book_id'])) {
        $remove_id =  $_COOKIE['book_id'];
        $exp_arr = explode(',',$remove_id);
        foreach($exp_arr as $rem_book_id){
            $remove_book = get_post_meta($rem_book_id,'related_book');
            $remove_book['0'];
                if(!empty($remove_book['0'])){
                    $rem_id = array($curr_book_id);
                    $remove_book_arr = array_diff($remove_book['0'],$rem_id);
                    update_post_meta( $rem_book_id, 'related_book', $remove_book_arr);
                }
        }
    }

    foreach($related_book_id as $book_id){
        $rel_book_id = get_post_meta($book_id,'related_book');
            if(empty($rel_book_id['0'])){
                $curr_book_id_arr = array($curr_book_id);
                update_post_meta( $book_id, 'related_book', $curr_book_id_arr);
            } else {
            $book_id_arr = $rel_book_id['0'];
            array_push($book_id_arr, $curr_book_id);
            $book_id_uni_arr = array_unique($book_id_arr);
            update_post_meta( $book_id, 'related_book', $book_id_uni_arr);
           }
    }

    unset( $_COOKIE['book_id'] );
    setcookie( 'book_id',null,-1, '/');
}

add_action( 'publish_quote_author','related_author_update');

function related_author_update(){

    $curr_auth_id = get_the_ID();

    $related_auth_id = $_POST['fields']['field_58b55903a3be3'];

    if(isset($_COOKIE['related_author_id'])) {
       $remove_auth_id =  $_COOKIE['related_author_id'];
        $explo_arr = explode(',' , $remove_auth_id);
        foreach($explo_arr as $rem_auth_id){
            $remove_author = get_post_meta($rem_auth_id,'related_author');
                if(!empty($remove_author['0'])){
                   $rem_ath_id = array($curr_auth_id);
                   $remove_auth_arr = array_diff($remove_author['0'],$rem_ath_id);
                    update_post_meta( $rem_auth_id, 'related_author', $remove_auth_arr);
                }
        }
    }

   foreach($related_auth_id as $autho_id){
        $rel_auth_id = get_post_meta($autho_id,'related_author');
            if(empty($rel_auth_id['0'])){
                $curr_auth_id_arr = array($curr_auth_id);
                update_post_meta( $autho_id, 'related_author', $curr_auth_id_arr);
            } else {
            $auth_id_arr = $rel_auth_id['0'];
            array_push($auth_id_arr, $curr_auth_id);
            $auth_id_uni_arr = array_unique($auth_id_arr);
            update_post_meta( $autho_id, 'related_author', $auth_id_uni_arr);
           }
    }

    unset( $_COOKIE['related_author_id'] );
    setcookie( 'related_author_id',null,-1, '/');

}

add_filter( 'wc_stripe_show_payment_request_on_checkout', '__return_true' );
/*// remove current instance of apple pay button
remove_action( ‘woocommerce_checkout_before_customer_details’, array( WC_Stripe_Apple_Pay::instance(), ‘display_apple_pay_button’ ), 95 );
remove_action( ‘woocommerce_checkout_before_customer_details’, array( WC_Stripe_Apple_Pay::instance(), ‘display_apple_pay_separator_html’ ), 96 );

// Add Actions Back at desired location
add_action( ‘woocommerce_review_order_before_payment’, array( WC_Stripe_Apple_Pay::instance(), ‘display_apple_pay_button’ ), 98 );
add_action( ‘woocommerce_review_order_before_payment’, array( WC_Stripe_Apple_Pay::instance(), ‘display_apple_pay_separator_html’ ), 99 );*/

function add_scripts() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-ui-autocomplete' );
	wp_register_script( 'my-autocomplete', get_template_directory_uri() . '/js/my-autocomplete.js', array( 'jquery', 'jquery-ui-autocomplete' ), '1.0', false );
	wp_localize_script( 'my-autocomplete', 'MyAutocomplete', array( 'url' => admin_url( 'admin-ajax.php' ) ) );
	wp_enqueue_script( 'my-autocomplete' );
}

add_action( 'wp_enqueue_scripts', 'add_scripts' );

function my_search() {
    $term = strtolower( $_GET['term'] );
    $suggestions = array();
    $suggestions1 = array();
    $search_args = array(
        's'            =>  $term,
        'post_status'   =>  'publish',
        'post_type'     =>  array('post','quote','page','quote_author','book','product'),
    );
    $search_args1 = array(
        's'            =>  $term,
        'post_status'   =>  'publish',
        'post_type'     =>  array('subscribers_audio','subscribers_ebook','subscribers_video'),
    );
    $loop = new WP_Query( $search_args );

    while( $loop->have_posts() ) {
        $loop->the_post();
        $suggestion = array();
        $suggestion['label'] = get_the_title();
        $suggestion['link'] = get_permalink();
        $suggestions[] = $suggestion;
    }
    wp_reset_query();
    $loop1 = new WP_Query( $search_args1 );
    while( $loop1->have_posts() ) {
        $loop1->the_post();
        $suggestion1 = array();
        $suggestion1['label'] = get_the_title();

        $suggestion1['link'] = get_permalink();
        $suggestions1[] = $suggestion1;
    }
    wp_reset_query();
    $response = json_encode( $suggestions );
    $response1 = json_encode( $suggestions1 );
    $response = html_entity_decode($response);
    $response1 = html_entity_decode($response1);
    $final = json_encode(array_merge(json_decode($response, true),json_decode($response1, true)));
    $final = html_entity_decode($final);
    echo $final;
    exit();
}

add_action( 'wp_ajax_my_search', 'my_search' );
add_action( 'wp_ajax_nopriv_my_search', 'my_search' );

add_filter( 'woocommerce_payment_complete_order_status', 'virtual_order_payment_complete_order_status', 10, 2 );

function virtual_order_payment_complete_order_status( $order_status, $order_id ) {
    $order = new WC_Order( $order_id );
    if ( 'processing' == $order_status &&
        ( 'on-hold' == $order->status || 'pending' == $order->status || 'failed' == $order->status ) ) {
    $virtual_order = null;
    if ( count( $order->get_items() ) > 0 ) {
        foreach( $order->get_items() as $item ) {
        if ( 'line_item' == $item['type'] ) {
            $_product = $order->get_product_from_item( $item );
            if ( ! $_product->is_virtual() ) {
            // once we've found one non-virtual product we know we're done, break out of the loop
            $virtual_order = false;
            break;
            } else {
            $virtual_order = true;
            }
        }
        }
    }
    // virtual order, mark as completed
    if ( $virtual_order ) {
        return 'completed';
    }
    }
    // non-virtual order, return original status
    return $order_status;
}

function create_mem_user(){
    global $wpdb, $user_ID;
	parse_str($_POST['data'],$form_data);
    if(isset($form_data['email'])) {
        $flag =0;
        // Check email address is present and valid
        $email = $wpdb->escape($form_data['email']);
        $user = get_user_by( 'email',  trim($email) );
        $user_id = $user->ID;
        $fname = trim($form_data['first_name']);
        $lname = trim($form_data['last_name']);
        $user_status = get_user_meta($user_id,'is_activated',true);
            if( !is_email( $email ) ) {
                $errors['email'] = "Please enter a valid email";
                $flag = 1;
            } else if( email_exists( $email ) && $user_status == 1)  {
                $errors['email'] = " An account is already registered with your email address. Please login.";
                $flag = 2;
            }  else {
                if(trim($form_data['txtType']) == 'monthly') {
                    $price = get_field('price_per_month', 'option');
                    $cons_month = get_field('consecutive_month', 'option');
                    $discount = get_field('discount_in_percent_for_product', 'option');
                    $period = "Month";
                } else if(trim($form_data['txtType']) == 'annual') {
                    $price = get_field('price_per_year', 'option');
                    $discount = get_field('discount_in_percent_for_product', 'option');
                    $period = "Year";
                } else {
                    $price = 0;
                    $cons_month = 0;
                    $discount = 0;
                    $period = "Free";
                    $free_user = 1;
                }

                $username = trim($form_data['email']);
                $email = trim($form_data['email']);
                $password = $form_data['password'];


                $contact_add_update = array( 'fname' => $fname, 'lname' => $lname , 'email' => $email, 'usertype' => 'free');
                //add_or_update_contact($contact_add_update);

                if( email_exists( $email ) ) {
                    $user = get_user_by( 'email',  $email );
                    $user_id = $user->ID;
                } else{
                    $user_id = wp_create_user( $username, $password, $email );
                }
                // You could do all manner of other things here like send an email to the user, etc. I leave that to you.
                $success = 1;
                if($free_user == 1){
                    update_user_meta( $user_id, 'first_name', $fname);
                    update_user_meta( $user_id, 'last_name', $lname);
                    update_user_meta( $user_id, 'membership', $period );
                    update_user_meta( $user_id, 'membership_status', 0 );
                    update_user_meta( $user_id, 'price', trim($price));
                    update_user_meta( $user_id, 'consecutive_month', $cons_month);
                    update_user_meta( $user_id, 'discount_in_percent_for_product', $discount);
                    update_user_meta( $user_id, 'is_paid', 0);
                    update_user_meta( $user_id, 'subscription', 'free');
                    update_user_meta( $user_id, 'createdon', date('Y-m-d H:i:s'));
                    $u = new WP_User( $user_id );
                    $u->set_role( 'Free Members' );
                    $user_info = get_userdata($user_id);
                    $code = md5(time());
                    $string = array('id'=>$user_id, 'code'=>$code);
                    update_user_meta($user_id, 'activationcode', $code);
                    $url = get_site_url(). '/my-account/?p=' .base64_encode( serialize($string));
                    $html = 'Please click the below button to activate your account on Energy Therapy <br/><br/>
                    <a href="'.$url.'">
                    <button style="
                    color:brown;
                    background-color:#f49542;
                    border-color:#eea236;
                    height:56px;
                    width:190px;
                    font-size:20px;
                    text-align:center;
                    cursor: pointer;">Activate Account</button></a>
                    <br/><br/>
                    <br/>If the above button doesn’t work, please copy/paste the entire URL into your browser address bar.<br/><br/>
                    <a href="'.$url.'">'.$url.'</a><br/><br/>
                    Having problems with account activation? <a href="mailto:thilak.askan@gmail.com">Contact technical support</a><br/>
                    Kind regards,<br/>Energy Therapy';
                    // send an email out to user
                    wc_mail($email, __('Please activate your account'), $html);

                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= "From: 	Energy Therapy <jaime@energytherapy.biz> \r\n";
                    $subject = "Welcome to Energy Therapy’s Membership Site";
                    $message = "Dear $email,";
                    $message .='<br><br>';
                    $message .='Thank you for signing up with us here at Energy Therapy,';
                    $message .='<br><br>';
                    $message .='We really hope you enjoy the free downloads from us each month but to really get your energy in tip top shape,
                    <a href="https://www.energytherapy.biz/pricing/" target="_blank">we recommend you sign up for our monthly or annual package</a>, where you will get incredible, life changing updates from us every month. Simple how to guidance and insights you won’t get anywhere else for living consciously and joyfully.';
                    $message .='<br><br>';
                    $message .='Plus, if you sign up as a paying member, you will receive an ongoing discount on many of our key products and services, like
                    <a href="https://www.energytherapy.biz/energy-healing-with-jaime-tanna/" target="_blank">remote healing</a> or
                    <a href="https://www.energytherapy.biz/law-of-attraction-coaching/" target="_blank">law of attraction coaching</a> with
                    <a href="https://www.energytherapy.biz/product/law-of-attraction-coaching-with-jaime/" target="_blank">Jaime</a> or
                    <a href="https://www.energytherapy.biz/product/law-of-attraction-coaching-with-jennifer/" target="_blank">Jennifer</a> – highly gifted intuitives, who share powerful wisdom teachings for today’s ultra fast-paced modern world.';
                    $message .='<br><br>';
                    $message .='Blessings from the Energy Therapy team.';
                    $message .='<br>';
                    $message .='<a href="https://www.energytherapy.biz/" target="_blank">https://www.energytherapy.biz/ </a>';
                    //mail("munusamy.askan@gmail.com",$subject,$message,$headers);
                    mail($email,$subject,$message,$headers);
                } else {
                    update_user_meta( $user_id, 'first_name', $fname);
                    update_user_meta( $user_id, 'last_name', $lname);
                    update_user_meta( $user_id, 'is_paid', 0);
                    update_user_meta( $user_id, 'membership', 'Free');
                    update_user_meta( $user_id, 'subscription', 'free');
                    update_user_meta( $user_id, 'createdon', date('Y-m-d H:i:s'));
                    update_user_meta( $user_id, 'membership_status', 0 );
                }
                if(isset($_COOKIE['referrer_email'])){
                    global $wpdb;
                    $referrer_email = $_COOKIE['referrer_email'];
                    $referrer_key = $_COOKIE['referrer_key'];
                    $referrer_query = $wpdb->get_results("SELECT ID, user_email  FROM et_users WHERE user_email = '".$referrer_email."'");
                    $referrer_id = $referrer_query[0]->ID;
                    $referrer_email_ckeck = $referrer_query[0]->user_email;
                    $referrer_check = $wpdb->get_results("SELECT meta_value FROM et_usermeta WHERE user_id = '".$referrer_id."' AND meta_key = 'referral_key'");
                    $referrer_key_check = $referrer_check[0]->meta_value;
                    if(($referrer_email_ckeck == $referrer_email) && ($referrer_key_check == $referrer_key)){
                        update_user_meta( $user_id, 'is_referrer', 1);
                        update_user_meta( $user_id, 'referred_by', $referrer_id);
                    } else {
                        update_user_meta( $user_id, 'is_referrer', 0);
                        update_user_meta( $user_id, 'referred_by', 0);
                    }
                } else {
                    update_user_meta( $user_id, 'is_referrer', 0);
                    update_user_meta( $user_id, 'referred_by', 0);
                }
               $querystr = " SELECT * from et_usermeta where user_id ='".$user_id."' AND meta_key = 'activationcode'";
               $pageposts = $wpdb->get_results($querystr, OBJECT);
                if((count($pageposts)>0) && ($free_user == 1)){
                    $act_code = $pageposts[0]->meta_value;
                    $referlink = home_url('/').'account-activate?id='.$username.'&key='.MD5($act_code);
                    update_user_meta($user_id, 'referlink', $referlink);
                    update_user_meta($user_id, 'referral_key', MD5($act_code));
                    $to = $email;
                    $subject = 'Your Membership Details on Energy Therapy';
                    $message = 'Dear '.$email.',';
                    $message .= "<br/><br/>";
                    $message .= 'Welcome to Energy Therapy’s Membership Site!';
                    $message .= "<br/><br/>";
                    $message .= 'Here are the details you signed up with (keep them in a safe place).';
                    $message .= "<br/>";
                    $message .= 'Username: '.$username;
                    $message .= "<br/>";
                    $message .= 'Password: '.$password;
                    $message .= "<br/><br/>";
                    $message .= 'We hope you’ll love being a member for a long time to come!';
                    $message .= "<br/><br/>";
                    $message .= "<a href='https://www.energytherapy.biz/pricing/' target='_blank'> We recommend you sign up for our monthly or annual package</a>, where you will get incredible,
                    life changing updates from us every month – plus
                    <a href='https://www.energytherapy.biz/refer-a-friend/' target='_blank'>you’ll be eligible to gain referral credits if your friends sign up!</a>
                    You can gain a full year’s free membership simply by referring enough people – and they gain free credits too!
                    <a href='https://www.energytherapy.biz/refer-a-friend/' target='_blank'>Terms and conditions apply </a>";
                    $message .= "<br/><br/>";
                    $message .= "As a paying member, you’ll also receive an ongoing discount on many of our key products and services, like
                    <a href='https://www.energytherapy.biz/energy-healing-with-jaime-tanna/' target='_blank'>remote healing</a> or
                    <a href='https://www.energytherapy.biz/law-of-attraction-coaching/' target='_blank'>law of attraction coaching</a> with
                    <a href='https://www.energytherapy.biz/product/law-of-attraction-coaching-with-jaime/' target='_blank'>Jaime</a> or
                    <a href='https://www.energytherapy.biz/product/law-of-attraction-coaching-with-jennifer/' target='_blank'>Jennifer</a> – highly gifted intuitives, who share powerful wisdom teachings for today’s ultra fast-paced modern world.";
                    $message .= "<br/><br/>";
                    $message .= "Blessings,";
                    $message .= "<br/>";
                    $message .= "Jaime and Jennifer";
                    $message .= "<br/>";
                    $message .= "<a href='https://www.energytherapy.biz/' target='_blank'>https://www.energytherapy.biz/ </a>";
                    $headers = "MIME-Version: 1.0" . "\r\n";
		            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= "From: 	Energy Therapy <jaime@energytherapy.biz> \r\n";
                    wp_mail($to, $subject, $message, $headers);
                } else {
                    $u = new WP_User( $user_id );
                    $u->set_role( 'Free Members' );
                    $user_info = get_userdata($user_id);
                    $code = md5(time());
                    $string = array('id'=>$user_id, 'code'=>$code);
                    update_user_meta($user_id, 'activationcode', $code);
                    $url = get_site_url(). '/my-account/?p=' .base64_encode( serialize($string));
                    $act_code = $pageposts[0]->meta_value;
                    $referlink = home_url('/').'account-activate?id='.$username.'&key='.MD5($act_code);
                    update_user_meta($user_id, 'referlink', $referlink);
                    update_user_meta($user_id, 'referral_key', MD5($act_code));
                }
            $flag =0;
        }
        if ($flag == 0){
            $user_exits = $wpdb->get_results("SELECT * FROM user_login_details WHERE user_id = $user_id");
            $row = $wpdb->num_rows;
            if($row > 0){
                $user_detail_sql = "UPDATE user_login_details SET user_name = '$username' ,user_password = '$password' WHERE user_id = $user_id";
                $wpdb->query($user_detail_sql);
            } else {
                $user_detail_sql = "INSERT INTO user_login_details (user_id,user_name,user_password) VALUES ($user_id,'$username','$password')";
                $wpdb->query($user_detail_sql);
            }
        }
        echo json_encode(array('flag'=>$flag,'user_id'=>$user_id));
    }
    die();
}

add_action('wp_ajax_nopriv_create_mem_user', 'create_mem_user');
add_action('wp_ajax_create_mem_user', 'create_mem_user');

// function send_act_mail(){
//     global $wpdb;
//     $user_id = $_POST['user_id'];
//     if(!empty($user_id)){
//         $send_act_mail = get_user_meta($user_id,'send_act_mail',true);
//         $user_status = get_user_meta($user_id,'is_activated',true);
//         $first_name = get_user_meta($user_id,'first_name',true);
//         $user_details = $wpdb->get_results("SELECT * FROM user_login_details WHERE user_id = $user_id");
//         $username = $user_details[0]->user_name;
//         $password = $user_details[0]->user_password;
//         if($user_status == 0){
//             if( (empty($send_act_mail)) || ($send_act_mail != 1)  ){
//                 $user_info = get_userdata($user_id);
//                 $code = md5(time());
//                 $string = array('id'=>$user_id, 'code'=>$code);
//                 update_user_meta($user_id, 'activationcode', $code);
//                 $url = get_site_url(). '/my-account/?p=' .base64_encode( serialize($string));
//                 $to = $user_info->user_email;
//                 $subject = "Registration for Energy Therapy’s new e-learning platform. Can we help?";
//                 $message = 'Hello '.$first_name.',';
//                 $message .= "<br/><br/>";
//                 $message .= "We noticed you started the registration process for our new e-learning platform but didn't complete checkout to start your 14 day free trial.";
//                 $message .= "<br/><br/>";
//                 $message .= "Can we help?  Let us know by <a href='https://www.energytherapy.biz/get-in-touch/' target='_blank'>contacting us here.</a>";
//                 $message .= "<br/><br/>";
//                 $message .= "Remember, you can cancel at any time during your 14 day trial and you won't be charged a penny.  Promise!";
//                 $message .= "<br/><br/>";
//                 $message .= "During your trial, you can LISTEN to the great meditation audios, WATCH the videos, and DOWNLOAD the guidance sheets - all for free during your trial period!";
//                 $message .= "<br/><br/>";
//                 $message .= "Energy Therapy is https compliant and we're using STRIPE to take your card details, so everything is 100% secure.";
//                 $message .= "<br/><br/>";
//                 $message .= "We know that the exciting material we’re sharing with you has the enormous potential to change your life for the better!";
//                 $message .= "<br/><br/>";
//                 $message .= "So, don’t wait!";
//                 $message .= "<br/><br/>";
//                 $message .= "To sign back in and complete your registration, you’ll need to click this activation link first.";
//                 $message .= "<br/>";
//                 $message .= '<a href="'.$url.'">'.$url.'</a>';
//                 $message .= "<br/><br/>";
//                 $message .= "here are the details you signed up with (keep them in a safe place).";
//                 $message .= "<br/><br/>";
//                 $message .= 'Username: '.$username;
//                 $message .= "<br/>";
//                 $message .= 'Password: '.$password;
//                 $message .= "<br/><br/>";
//                 $message .= "Blessings,";
//                 $message .= "<br/>";
//                 $message .= "Jaime and Jennifer";
//                 $message .= "<br/>";
//                 $message .= "<a href='https://www.energytherapy.biz/' target='_blank'>https://www.energytherapy.biz/ </a>";
//                 $headers = "MIME-Version: 1.0" . "\r\n";
//                 $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//                 $headers .= "From: 	Energy Therapy <jaime@energytherapy.biz> \r\n";
//                 $mailResult = false;
//                 $mailResult = wp_mail($to, $subject, $message, $headers);
//             }
//         }
//         if($mailResult == 1){
//             update_user_meta($user_id, 'send_act_mail', 1);
//             echo 1;
//         } else {
//             echo 0;
//         }
//     }
//     die();
// }

// add_action('wp_ajax_nopriv_send_act_mail', 'send_act_mail');
// add_action('wp_ajax_send_act_mail', 'send_act_mail');

add_role('Membership Subscriber', __(
    'Membership Subscriber'),
    array(
    'read' => true, // Allows a user to read
    'create_posts' => false, // Allows user to create new posts
    'edit_posts' => false, // Allows user to edit their own posts
    )
);
$membership_subscriber = get_role( 'Membership Subscriber' );
$membership_subscriber->add_cap( 'customer' );

add_role('Free Members', __(
    'Free Members'),
    array(
    'read' => true, // Allows a user to read
    'create_posts' => false, // Allows user to create new posts
    'edit_posts' => false, // Allows user to edit their own posts
    )
);
$free_members = get_role( 'Free Members' );
$free_members->add_cap( 'customer' );

add_action( 'template_redirect', 'subscriber_redirect' );

function subscriber_redirect() {
    //(!current_user_can('administrator')) &&
    $queried_post_type = get_query_var('post_type');
    if ((!is_user_logged_in())){

        if ( is_single() && 'subscribers_audio' ==  $queried_post_type ) {
            wp_redirect( 'https://www.energytherapy.biz/membership/pricing/', 301 );
            exit();
        }
        if ( is_single() && 'subscribers_ebook' ==  $queried_post_type ) {
        wp_redirect( 'https://www.energytherapy.biz/membership/pricing/', 301 );
        exit();
        }
        if ( is_single() && 'subscribers_video' ==  $queried_post_type ) {
        wp_redirect( 'https://www.energytherapy.biz/membership/pricing/', 301 );
        exit();
        }
    }
     if(is_user_logged_in()){
         $user = wp_get_current_user();
         $roles = ( array ) $user->roles;
         //print_r($roles[0]);
         if($roles[0] != "Membership Subscriber" && $roles[0] != "administrator"){
            //echo 1;
            if ( is_single() && 'subscribers_audio' ==  $queried_post_type ) {
                wp_redirect( 'https://www.energytherapy.biz/membership/pricing/', 301 );
            exit();
            }
            if ( is_single() && 'subscribers_ebook' ==  $queried_post_type ) {
                wp_redirect( 'https://www.energytherapy.biz/membership/pricing/', 301 );
            exit();
            }
            if ( is_single() && 'subscribers_video' ==  $queried_post_type ) {
                wp_redirect( 'https://www.energytherapy.biz/membership/pricing/', 301 );
            exit();
            }
            //wp_redirect( 'https://www.energytherapy.biz/membership/pricing/', 301 );
            //exit();
         }
     }
}

function cancel_membership(){
    global $wpdb;
    $user_id = $_POST['user_id'];
    $subscriber_id = get_user_meta($user_id,'subscriber_id',true);
    $first_name = get_user_meta($user_id,'first_name',true);
    $last_name = get_user_meta($user_id,'last_name',true);
    $user_det = get_user_by('ID', $user_id);
    $email = $user_det->user_email;
    $subscription = \Stripe\Subscription::retrieve($subscriber_id);
    $subscription['cancel_at_period_end'] = true;
    $subscription->save();
    if(!empty($subscription['cancel_at_period_end'])){
        update_user_meta($user_id, 'subscription_cancel', 1);
        echo 1;
    } else {
        echo 0;
    }
    exit();
}

add_action('wp_ajax_nopriv_cancel_membership', 'cancel_membership');
add_action('wp_ajax_cancel_membership', 'cancel_membership');

/*add_action('woocommerce_get_price', 'discount_price', 10, 2);
function discount_price($price, $product) {
    global $post;
	global $product;
    if (!is_user_logged_in()) {
		return $price;
    }
    $ids = get_field('discounted_products','options', false, false);
    if(in_array($post->ID,$ids)){
		$discount = find_user_have_discount();
        if ($discount){
            $price = $price - (($price * $discount)/100);
        }
    } else {
        return $price;
    }
    return $price;
}*/

function filter_woocommerce_get_discounted_price( $price, $values, $instance ) {
    $ids = get_field('discounted_products','options', false, false);
    if (is_user_logged_in()) {
		if(!in_array($values['product_id'],$ids)){
            $discount = find_user_have_discount();
            $message = "Discount applied";
            $notice_type = 'success';
                if ($discount){
                    /*if (is_page(2902)){
                        $notice = wc_add_notice($message, $notice_type);
                        print_r($notice);
                    }*/
                    if( WC()->cart->get_coupons() ){
                        return $price;
                    } else {
						if($price >= 60){
                        	$price = $price - (($price * $discount)/100);
						}
                        return $price;
                    }
                } else {
                    return $price;
                }
        } else {
            return $price;
        }
    }  else {
        return $price;
    }
}

add_filter('woocommerce_get_discounted_price','filter_woocommerce_get_discounted_price', 10, 3 );

function find_user_have_discount(){
	global $wpdb;
	$user_now = get_current_user_id();
	$is_paid = $wpdb->get_results("SELECT meta_value FROM et_usermeta WHERE user_id = '".$user_now."' AND meta_key = 'is_paid'");
	$user_paid = $is_paid[0]->meta_value;

	$subscription = $wpdb->get_results("SELECT meta_value FROM et_usermeta WHERE user_id = '".$user_now."' AND meta_key = 'subscription'");
	$user_subsc = $subscription[0]->meta_value;

	$discount = $wpdb->get_results("SELECT meta_value FROM et_usermeta WHERE user_id = '".$user_now."' AND meta_key = 'discount_in_percent_for_product'");
	$user_discount = $discount[0]->meta_value;

	if(($user_paid == 1 )&&($user_subsc == 'annual')){
		return $user_discount;
	}
	else if(($user_paid == 1 )&&($user_subsc == 'monthly')){
		$consicutive_dis = find_user_consecutive($user_now);
		if ($consicutive_dis){
			return $user_discount;
		}
	}
}

function find_user_consecutive($user_id) {
	global $wpdb;
	$querystr1 = " SELECT date_format(payment_date,'%Y-%m') as pay_date, payment_date, payment_status from payment_details where user_id = '".$user_id."' and trans_type = 'subscr_payment' order by payment_date ";
    $pageposts1 = $wpdb->get_results($querystr1, OBJECT);

    $user_consecutive_month = get_user_meta($user_id,'consecutive_month',true);

	if(count($pageposts1)>$user_consecutive_month) {
		$date_cover = date('Y-m-d',strtotime($pageposts1[0]->payment_date));
		$arr= array();
		$payment_flag = true;
		$user_consecutive_check = $user_consecutive_month + 1;
		for($i=0;$i<$user_consecutive_check;$i++) {
			if($i==0) {
				$arr[$i] = date('Y-m',strtotime($date_cover));
				if($arr[$i] != $pageposts1[$i]->pay_date) {
					$payment_flag = false;
				}
			} else {
				$start  = (new DateTime($arr[$i-1]))->modify('first day of next month');
				$renewal_start_month  = $start->format('m');
				$renewal_start_year  = $start->format('Y');
				$arr[$i] = $renewal_start_year."-".$renewal_start_month;
				if($arr[$i] != $pageposts1[$i]->pay_date) {
					$payment_flag = false;
				}
			}
		}
	} else {
        $payment_flag = false;
    }
    return $payment_flag;
}

function upgrade_membership(){
    global $wpdb;
    $user_id = $_POST['user_id'];
    update_user_meta( $user_id, 'is_paid', 0);
    update_user_meta( $user_id, 'subscription', 'free');
    update_user_meta( $user_id, 'membership_status', 4 );
    if ((0 == get_user_meta( $user_id,  'is_paid', true )) && ('free' == get_user_meta( $user_id,  'subscription', true ))) {
        $u = new WP_User( $user_id );
        $u->set_role( 'Free Members' );
        echo 1;
    } else {
        echo 0;
    }
    exit();

}
add_action('wp_ajax_nopriv_upgrade_membership', 'upgrade_membership');
add_action('wp_ajax_upgrade_membership', 'upgrade_membership');

function get_description($id){
    $content_post = get_post($id);
    $content = $content_post->post_content;
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}

/*Browser finder*/
function getBrowser(){

    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    } elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }

    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)){
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    } elseif(preg_match('/Firefox/i',$u_agent)){
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    } elseif(preg_match('/Chrome/i',$u_agent)){
        $bname = 'Google Chrome';
        $ub = "Chrome";
    } elseif(preg_match('/Safari/i',$u_agent)){
        $bname = 'Apple Safari';
        $ub = "Safari";
    } elseif(preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Opera';
        $ub = "Opera";
    } elseif(preg_match('/Netscape/i',$u_agent)) {
        $bname = 'Netscape';
        $ub = "Netscape";
    }

    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }

    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    } else {
        $version= $matches['version'][0];
    }

    // check if we have a number
    if ($version==null || $version=="") {$version="?";}

    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
}
/*Browser finder*/

/*Mobile Model*/
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];
function getOS() {

    global $user_agent;
    $os_platform = "Unknown OS Platform";
        $os_array = array(
            '/windows nt 10.0/i' => 'Windows 10',
            '/windows nt 6.3/i' => 'Windows 8.1',
            '/windows nt 6.2/i' => 'Windows 8',
            '/windows nt 6.1/i' => 'Windows 7',
            '/windows nt 6.0/i' => 'Windows Vista',
            '/windows nt 5.2/i' => 'Windows Server 2003/XP x64',
            '/windows nt 5.1/i' => 'Windows XP',
            '/windows xp/i' => 'Windows XP',
            '/windows nt 5.0/i' => 'Windows 2000',
            '/windows me/i' => 'Windows ME',
            '/win98/i' => 'Windows 98',
            '/win95/i' => 'Windows 95',
            '/win16/i' => 'Windows 3.11',
            '/macintosh|mac os x/i' => 'Mac OS X',
            '/mac_powerpc/i' => 'Mac OS 9',
            '/linux/i' => 'Linux',
            '/ubuntu/i' => 'Ubuntu',
            '/iphone/i' => 'iPhone',
            '/ipod/i' => 'iPod',
            '/ipad/i' => 'iPad',
            '/android/i' => 'Android',
            '/blackberry/i' => 'BlackBerry',
            '/webos/i' => 'Mobile'
        );
    foreach ($os_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $os_platform = $value;
            $device = !preg_match('/(windows|mac|linux|ubuntu)/i',$os_platform) ?'MOBILE':(preg_match('/phone/i', $os_platform)?'MOBILE':'SYSTEM');
        }
    }
    return array('os'=>$os_platform,'device'=>$device);
}
/*Mobile Model*/

function send_tech_mail(){
    $from_fname = $_POST['ur_fname'];
    $from_email = $_POST['ur_email'];
    $email_msg = $_POST['email_msg'];
    $selected_device = $_POST['selected_device'];
    $device_make = $_POST['device_make'];
    $device_os = $_POST['device_os'];
    $user_browser = getBrowser();
    $user_browser_name = $user_browser['name'];
    $user_os = getOS();
    $user_Type = $user_os['os'];
    $user_Device = $user_os['device'];

    //$to = 'munusamy.askan@gmail.com';

    $to = 'thilak.askan@gmail.com';
    $to2 = 'info@askantech.com';

    $to_multiple = $to.', '.$to2;

    $cc = 'jennifer@energytherapy.biz';
    $cc2 = 'jaime@energytherapy.biz';

    $cc_multiple = $cc.', '.$cc2;

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: '.$from_fname.' <'.$from_email.'>' . "\r\n";
    $headers .= 'Cc: '.$cc_multiple. "\r\n";
    $subject = $_POST['subject'];

    //$message = $email_msg;

    $htmlContent .= '<html><body>';
    $htmlContent .='<table style="width:60%;border:1px solid #eee;" border="1" bordercolor="#ac7ec0" cellpadding="6" cellspacing="0">';
    $htmlContent .="<tr><td style='background-color:#FFE4C4;color: black;'><b>Name</b></td><td>".$from_fname."</td></tr>";
    $htmlContent .="<tr><td style='background-color:#FFE4C4;color: black;'><b>E-mail</b></td><td>".$from_email."</td></tr>";
    $htmlContent .="<tr><td style='background-color:#FFE4C4;color: black;'><b>Browser Name</b></td><td>".$user_browser_name."</td></tr>";
    $htmlContent .="<tr><td style='background-color:#FFE4C4;color: black;'><b>Device OS</b></td><td>".$user_Type."</td></tr>";
    $htmlContent .="<tr><td style='background-color:#FFE4C4;color: black;'><b>Date</b></td><td>".date("d/m/Y")."</td></tr>";
    $htmlContent .="<tr><td style='background-color:#FFE4C4;color: black;'><b>Message</b></td><td>".$email_msg."</td></tr>";
    $htmlContent .="</table>";
    $htmlContent .= "</body></html>";

    $mailResult = false;
    $mailResult = mail($to,$subject,$htmlContent,$headers);
    echo $mailResult;
    exit();
}

add_action('wp_ajax_nopriv_send_tech_mail', 'send_tech_mail');
add_action('wp_ajax_send_tech_mail', 'send_tech_mail');

function refer_mail(){
    $ref_name = $_POST['ref_name'];
    $to_email = $_POST['ref_email'];
    $share_code = $_POST['share_code'];
    $ur_name = $_POST['ur_name'];
    $from_email = $_POST['ur_email'];
    $email_title = $_POST['title'];
    $email_msg = $_POST['email_msg'];

    $to = $to_email;
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // More headers
    $headers .= 'From:'.$ur_name.' <'.$from_email.'>' . "\r\n";
    $subject = $email_title;
    $message = 'Hey '.$ref_name.',';
    $message .= "<br/><br/>";
    $message .= $email_msg;
    $message .= "<br/><br/>";
    //$message .= "I’m loving Energy Therapy’s new membership site and want to share it with you so you get a free month if you sign up using this link :";
    //$message .= "<br/>";
    $message .= $share_code;
    $message .= "<br/><br/>";
    $message .= $ur_name;
    //$message .= "<br/><br/>";
    //$message .= 'Email sent from <a href="https://www.energytherapy.biz/" target="_blank">https://www.energytherapy.biz/ </a> on behalf of '.$from_email;
    $mailResult = false;
    $mailResult = mail($to, $subject, $message, $headers);
    echo $mailResult;
    exit();
}
add_action('wp_ajax_nopriv_refer_mail', 'refer_mail');
add_action('wp_ajax_refer_mail', 'refer_mail');

function new_modify_user_table( $column ) {
    $column['type'] = 'Plan';
    $column['user_registered1'] = 'Registered';
    $column['user_registered'] = 'Joined';
    return $column;
}
add_filter( 'manage_users_columns', 'new_modify_user_table' );

function new_modify_user_table_row( $val, $column_name, $user_id ) {
    switch ($column_name) {
        case 'type' :
            $plan_type =  get_user_meta( $user_id,'membership'  );
            return $plan_type[0];
            break;
        case 'user_registered' :
            $createdon = get_user_meta( $user_id,'createdon'  );//get_userdata($user_id);
            return $createdon[0];//$createdon->user_registered;
            break;
        case 'user_registered1' :
            $createdon = get_userdata($user_id);
            return $createdon->user_registered;
            break;
        default:
    }
    return $val;
}
add_filter( 'manage_users_custom_column', 'new_modify_user_table_row', 10, 3 );
add_filter( 'manage_users_sortable_columns', 'new_modify_user_table' );

function prefix_sort_by_level( $query ) {
if ( 'Plan' == $query->get( 'orderby' ) ) {
    $query->set( 'orderby', 'meta_value' );
    $query->set( 'meta_key', 'membership' );
}
if ( 'Joined' == $query->get( 'orderby' ) ) {
     /*$query->set( 'orderby', 'user_registered' );
    $query->set( 'order', $query->get( 'order' ) );*/
    $query->set( 'orderby', 'meta_value' );
    $query->set( 'meta_key', 'createdon' );
}
if ( 'Registered' == $query->get( 'orderby' ) ) {
     $query->set( 'orderby', 'user_registered' );
    $query->set( 'order', $query->get( 'order' ) );
}
}
add_action( 'pre_get_users', 'prefix_sort_by_level' );

function accept_disclaimer(){
    $accept = $_POST['accept'];
    $user_now = $_POST['user_now'];
    $updated = update_user_meta( $user_now, 'disclaimer', $accept );
    if ( $accept != get_user_meta( $user_now,  'disclaimer', true ) ) {
        echo 0;
    } else {
        echo 1;
    }
    exit();
}

add_action('wp_ajax_nopriv_accept_disclaimer', 'accept_disclaimer');
add_action('wp_ajax_accept_disclaimer', 'accept_disclaimer');


function my_form(){ ?>
    <div id="tech_issue" class="modal-box tech_issue refer-modal" style="display:none"> <a href="javascript:void(0)" class="js-modal-close close close_mail">×</a>
        <div class="send_mail ctext">
            <h2>Technical Support</h2>
        </div>
        <div class="send_mail ctext">
        <div class="wrap_from_to_details">
        <div class="from_details">
            <p class="form-row">
                <label for="ur_fname">Enter your Name<span class="required">*</span></label></br>
                <input type="text" class="input-text" name="ur_fname" id="ur_fname" value="">
            </p>
            <p class="form-row">
                <label for="ur_email">Enter your email address<span class="required">*</span></label></br>
                <input type="email" class="input-text" name="ur_email" id="ur_email" value="">
            </p>
            <p class="form-row">
                <label for="confirm_email">Confirm your email address<span class="required">*</span></label></br>
                <input type="email" class="input-text" name="confirm_email" id="confirm_email" value="">
            </p>
            <p class="form-row">
                <label for="select_device">Select your device<span class="required">*</span></label></br>
                <select name="select_device" id="select_device">
                    <option disabled selected value> -- Select Your Device -- </option>
                    <option value="Desktop_Computer">Desktop Computer</option>
                    <option value="Laptop">Laptop</option>
                    <option value="Mobile_Phone">Mobile Phone</option>
                    <option value="Other_handheld_device">Other handheld device</option>
                </select>
            </p>
            </div>
            <div class="to_details">
            <p class="form-row" style="margin-top: 0px !important;">
                <label for="device_make"><span class="required">*</span>Device make, e.g. Apple, Sony etc</label></br>
                <input type="text" class="input-text" name="device_make" id="device_make"
                value="">
            </p>
            <p class="form-row">
                <label for="device_os">Operating system (if known)<span class="required"></span></label></br>
                <input type="text" class="input-text" name="device_os" id="device_os"
                value="">
            </p>
            <p class="form-row">
                <label for="email_subject">Subject<span class="required">*</span></label></br>
                <input type="text" class="input-text" name="email_subject" id="email_subject"
                value="Tech help">
            </p>
            <p class="form-row">
                <label for="email_msg">Message<span class="required">*</span></label></br>
                <textarea placeholder="Describe as accurately as possible what is happening" id="email_msg"></textarea>
            </p>
            </div>
        </div>
        <div class="ctext">
            <p class="email_error"> </p>
            <p class="msg_div ctext"></p>
            <p class="form-row">
                <input type="submit" class="button" id="send_tech_email" name="submit" value="Submit">
            </p>
        </div>
        </div>
    </div>
    <div class="modal-overlay tech_issue"></div>
    <div id="overlay">
        <div class="loader-gif">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loaders.gif"/>
        </div>
    </div>
<?php }
add_shortcode('my_c_form', 'my_form');

function get_currency_code(){
    $ip = $_SERVER['REMOTE_ADDR']; // This will contain the ip of the request
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://www.geoplugin.net/json.gp?ip='.$ip);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    $response = curl_exec($ch);
    curl_close($ch);
    return $result = json_decode($response, true);
}

function admin_preview_menu(){
    add_menu_page('Preview Menu', 'Preview', 'administrator',
		'select-preview', 'preview_menu','dashicons-visibility',29);
}
add_action( 'admin_menu', 'admin_preview_menu' );

function preview_menu(){
    wp_redirect( 'https://www.energytherapy.biz/select-preview/', 301 );
    exit();
}

add_action('admin_head','preview_button');

function preview_button(){
    global $current_screen;
    if(($current_screen->post_type == 'subscribers_audio') || ($current_screen->post_type == 'subscribers_ebook') || ($current_screen->post_type == 'subscribers_video')){ ?>
        <script type="text/javascript">
            jQuery(document).ready( function($){
                jQuery( ".subsubsub li" ).last().append('<li class="pre_view"><a class="button-primary" href="https://www.energytherapy.biz/select-preview/" target="_blank">Preview</a></li>');
            });
        </script>
       <?php
    }
}

function _et_calendar() {
    $geo_detail = get_currency_code();
    $user_timezone = $geo_detail['geoplugin_timezone'];
    $time_zone = $user_timezone;
    $current_user = wp_get_current_user();
    $user_email = $current_user->user_email; ?>
        <div id="available_dates_times_div_id" class="available_dates_times_div_modal">
            <div class="available_dates_times_div_content">
                <div class="available_dates_times_div_top">
                    <span class="back _hide">←</span>
                    <span class="date_sel _hide"></span>
                    <span class="time_sel _hide"></span>
                    <span class="close">&times;</span>
                </div>
                <div class="available_dates_times_div">
                    <div class="session_data">
                        <div class="session_title"></div>
                        <div class="session_data"></div>
                    </div>
                    <div class="available_dates_times_step available_dates_times_step_1" data-step="1">
                        <div class="step1_1">
                            <div class="half_div div100">
                                <div class="half_div div60">
                                    <h2 class="mbl text-center">Select your TimeZone</h2>
                                    <select name="timezone" class="form-control inline-field babel-ignore timezone-select-inactive" id="timezone">
                                        <optgroup label="United States">
                                            <option value="Pacific/Honolulu" data-time_zone="<?php echo $time_zone; ?>" <?php if($time_zone == "Pacific/Honolulu"){ echo "selected"; } ?>>(GMT-10:00) Hawaii Time</option>
                                            <option value="America/Anchorage" <?php if($time_zone == "America/Anchorage"){ echo "selected"; } ?>>(GMT-8:00) Alaska Time</option>
                                            <option value="America/Los_Angeles" <?php if($time_zone == "America/Los_Angeles"){ echo "selected"; } ?>>(GMT-7:00) Pacific Time</option>
                                            <option value="America/Denver" <?php if($time_zone == "America/Denver"){ echo "selected"; } ?>>(GMT-6:00) Mountain Time - Denver</option>
                                            <option value="America/Phoenix" <?php if($time_zone == "America/Phoenix"){ echo "selected"; } ?>>(GMT-7:00) Arizona Time</option>
                                            <option value="America/Chicago" <?php if($time_zone == "America/Chicago"){ echo "selected"; } ?>>(GMT-5:00) Central Time</option>
                                            <option value="America/New_York" <?php if($time_zone == "America/New_York"){ echo "selected"; } ?>>(GMT-4:00) Eastern Time</option>
                                        </optgroup>
                                        <option disabled=""></option>
                                        <option value="Pacific/Apia" <?php if($time_zone == "Pacific/Apia"){ echo "selected"; } ?>>(GMT+14:00) Apia</option>
                                        <option value="Pacific/Midway" <?php if($time_zone == "Pacific/Midway"){ echo "selected"; } ?>>(GMT-11:00) Midway</option>
                                        <option value="Pacific/Niue" <?php if($time_zone == "Pacific/Niue"){ echo "selected"; } ?>>(GMT-11:00) Niue</option>
                                        <option value="Pacific/Pago_Pago" <?php if($time_zone == "Pacific/Pago_Pago"){ echo "selected"; } ?>>(GMT-11:00) Pago Pago</option>
                                        <option value="Pacific/Fakaofo" <?php if($time_zone == "Pacific/Fakaofo"){ echo "selected"; } ?>>(GMT+13:00) Fakaofo</option>
                                        <option value="Pacific/Johnston" <?php if($time_zone == "Pacific/Johnston"){ echo "selected"; } ?>>(GMT-10:00) Johnston</option>
                                        <option value="Pacific/Rarotonga" <?php if($time_zone == "Pacific/Rarotonga"){ echo "selected"; } ?>>(GMT-10:00) Rarotonga</option>
                                        <option value="Pacific/Tahiti" <?php if($time_zone == "Pacific/Tahiti"){ echo "selected"; } ?>>(GMT-10:00) Tahiti</option>
                                        <option value="Pacific/Marquesas" <?php if($time_zone == "Pacific/Marquesas"){ echo "selected"; } ?>>(GMT-9:30) Marquesas</option>
                                        <option value="Pacific/Gambier" <?php if($time_zone == "Pacific/Gambier"){ echo "selected"; } ?>>(GMT-9:00) Gambier</option>
                                        <option value="America/Tijuana" <?php if($time_zone == "America/Tijuana"){ echo "selected"; } ?>>(GMT-7:00) Pacific Time - Tijuana</option>
                                        <option value="America/Vancouver" <?php if($time_zone == "America/Vancouver"){ echo "selected"; } ?>>(GMT-7:00) Pacific Time - Vancouver</option>
                                        <option value="America/Whitehorse" <?php if($time_zone == "America/Whitehorse"){ echo "selected"; } ?>>(GMT-7:00) Pacific Time - Whitehorse</option>
                                        <option value="Pacific/Pitcairn" <?php if($time_zone == "Pacific/Pitcairn"){ echo "selected"; } ?>>(GMT-8:00) Pitcairn</option>
                                        <option value="America/Dawson_Creek" <?php if($time_zone == "America/Dawson_Creek"){ echo "selected"; } ?>>(GMT-7:00) Mountain Time - Dawson Creek</option>
                                        <option value="America/Edmonton" <?php if($time_zone == "America/Edmonton"){ echo "selected"; } ?>>(GMT-6:00) Mountain Time - Edmonton</option>
                                        <option value="America/Hermosillo" <?php if($time_zone == "America/Hermosillo"){ echo "selected"; } ?>>(GMT-7:00) Mountain Time - Hermosillo</option>
                                        <option value="America/Mazatlan" <?php if($time_zone == "America/Mazatlan"){ echo "selected"; } ?>>(GMT-7:00) Mountain Time - Chihuahua, Mazatlan</option>
                                        <option value="America/Yellowknife" <?php if($time_zone == "America/Yellowknife"){ echo "selected"; } ?>>(GMT-6:00) Mountain Time - Yellowknife</option>
                                        <option value="America/Belize" <?php if($time_zone == "America/Belize"){ echo "selected"; } ?>>(GMT-6:00) Belize</option>
                                        <option value="America/Costa_Rica" <?php if($time_zone == "America/Costa_Rica"){ echo "selected"; } ?>>(GMT-6:00) Costa Rica</option>
                                        <option value="America/El_Salvador" <?php if($time_zone == "America/El_Salvador"){ echo "selected"; } ?>>(GMT-6:00) El Salvador</option>
                                        <option value="America/Guatemala" <?php if($time_zone == "America/Guatemala"){ echo "selected"; } ?>>(GMT-6:00) Guatemala</option>
                                        <option value="America/Managua" <?php if($time_zone == "America/Managua"){ echo "selected"; } ?>>(GMT-6:00) Managua</option>
                                        <option value="America/Mexico_City" <?php if($time_zone == "America/Mexico_City"){ echo "selected"; } ?>>(GMT-6:00) Central Time - Mexico City</option>
                                        <option value="America/Regina" <?php if($time_zone == "America/Regina"){ echo "selected"; } ?>>(GMT-6:00) Central Time - Regina</option>
                                        <option value="America/Tegucigalpa" <?php if($time_zone == "America/Tegucigalpa"){ echo "selected"; } ?>>(GMT-6:00) Central Time - Tegucigalpa (no DST)</option>
                                        <option value="America/Winnipeg" <?php if($time_zone == "America/Winnipeg"){ echo "selected"; } ?>>(GMT-5:00) Central Time - Winnipeg</option>
                                        <option value="Pacific/Easter" <?php if($time_zone == "Pacific/Easter"){ echo "selected"; } ?>>(GMT-5:00) Easter Island</option>
                                        <option value="Pacific/Galapagos" <?php if($time_zone == "Pacific/Galapagos"){ echo "selected"; } ?>>(GMT-6:00) Galapagos</option>
                                        <option value="America/Bogota" <?php if($time_zone == "America/Bogota"){ echo "selected"; } ?>>(GMT-5:00) Bogota</option>
                                        <option value="America/Cayman" <?php if($time_zone == "America/Cayman"){ echo "selected"; } ?>>(GMT-5:00) Cayman</option>
                                        <option value="America/Grand_Turk" <?php if($time_zone == "America/Grand_Turk"){ echo "selected"; } ?>>(GMT-4:00) Grand Turk</option>
                                        <option value="America/Guayaquil" <?php if($time_zone == "America/Guayaquil"){ echo "selected"; } ?>>(GMT-5:00) Guayaquil</option>
                                        <option value="America/Havana" <?php if($time_zone == "America/Havana"){ echo "selected"; } ?>>(GMT-4:00) Havana</option>
                                        <option value="America/Iqaluit" <?php if($time_zone == "America/Iqaluit"){ echo "selected"; } ?>>(GMT-4:00) Eastern Time - Iqaluit</option>
                                        <option value="America/Jamaica" <?php if($time_zone == "America/Jamaica"){ echo "selected"; } ?>>(GMT-5:00) Jamaica</option>
                                        <option value="America/Lima" <?php if($time_zone == "America/Lima"){ echo "selected"; } ?>>(GMT-5:00) Lima</option>
                                        <option value="America/Cancun" <?php if($time_zone == "America/Cancun"){ echo "selected"; } ?>>(GMT-5:00) Cancun - Eastern Time - Quintana Roo</option>
                                        <option value="America/Nassau" <?php if($time_zone == "America/Nassau"){ echo "selected"; } ?>>(GMT-4:00) Nassau</option>
                                        <option value="America/Panama" <?php if($time_zone == "America/Panama"){ echo "selected"; } ?>>(GMT-5:00) Panama</option>
                                        <option value="America/Port- <?php if($time_zone == "America/Port"){ echo "selected"; } ?>au-Prince">(GMT-4:00) Port-au-Prince</option>
                                        <option value="America/Toronto" <?php if($time_zone == "America/Toronto"){ echo "selected"; } ?>>(GMT-4:00) Eastern Time - Toronto</option>
                                        <option value="America/Caracas" <?php if($time_zone == "America/Caracas"){ echo "selected"; } ?>>(GMT-4:00) Caracas</option>
                                        <option value="America/Anguilla" <?php if($time_zone == "America/Anguilla"){ echo "selected"; } ?>>(GMT-4:00) Anguilla</option>
                                        <option value="America/Antigua" <?php if($time_zone == "America/Antigua"){ echo "selected"; } ?>>(GMT-4:00) Antigua</option>
                                        <option value="America/Aruba" <?php if($time_zone == "America/Aruba"){ echo "selected"; } ?>>(GMT-4:00) Aruba</option>
                                        <option value="America/Asuncion" <?php if($time_zone == "America/Asuncion"){ echo "selected"; } ?>>(GMT-4:00) Asuncion</option>
                                        <option value="America/Barbados" <?php if($time_zone == "America/Barbados"){ echo "selected"; } ?>>(GMT-4:00) Barbados</option>
                                        <option value="America/Boa_Vista" <?php if($time_zone == "America/Boa_Vista"){ echo "selected"; } ?>>(GMT-4:00) Boa Vista</option>
                                        <option value="America/Campo_Grande" <?php if($time_zone == "America/Campo_Grande"){ echo "selected"; } ?>>(GMT-4:00) Campo Grande</option>
                                        <option value="America/Cuiaba" <?php if($time_zone == "America/Cuiaba"){ echo "selected"; } ?>>(GMT-4:00) Cuiaba</option>
                                        <option value="America/Curacao" <?php if($time_zone == "America/Curacao"){ echo "selected"; } ?>>(GMT-4:00) Curacao</option>
                                        <option value="America/Dominica" <?php if($time_zone == "America/Dominica"){ echo "selected"; } ?>>(GMT-4:00) Dominica</option>
                                        <option value="America/Grenada" <?php if($time_zone == "America/Grenada"){ echo "selected"; } ?>>(GMT-4:00) Grenada</option>
                                        <option value="America/Guadeloupe" <?php if($time_zone == "America/Guadeloupe"){ echo "selected"; } ?>>(GMT-4:00) Guadeloupe</option>
                                        <option value="America/Guyana" <?php if($time_zone == "America/Guyana"){ echo "selected"; } ?>>(GMT-4:00) Guyana</option>
                                        <option value="America/Halifax" <?php if($time_zone == "America/Halifax"){ echo "selected"; } ?>>(GMT-3:00) Atlantic Time - Halifax</option>
                                        <option value="America/La_Paz" <?php if($time_zone == "America/La_Paz"){ echo "selected"; } ?>>(GMT-4:00) La Paz</option>
                                        <option value="America/Manaus" <?php if($time_zone == "America/Manaus"){ echo "selected"; } ?>>(GMT-4:00) Manaus</option>
                                        <option value="America/Martinique" <?php if($time_zone == "America/Martinique"){ echo "selected"; } ?>>(GMT-4:00) Martinique</option>
                                        <option value="America/Montserrat" <?php if($time_zone == "America/Montserrat"){ echo "selected"; } ?>>(GMT-4:00) Montserrat</option>
                                        <option value="America/Port_of_Spain" <?php if($time_zone == "America/Port_of_Spain"){ echo "selected"; } ?>>(GMT-4:00) Port of Spain</option>
                                        <option value="America/Porto_Velho" <?php if($time_zone == "America/Porto_Velho"){ echo "selected"; } ?>>(GMT-4:00) Porto Velho</option>
                                        <option value="America/Puerto_Rico" <?php if($time_zone == "America/Puerto_Rico"){ echo "selected"; } ?>>(GMT-4:00) Puerto Rico</option>
                                        <option value="America/Rio_Branco" <?php if($time_zone == "America/Rio_Branco"){ echo "selected"; } ?>>(GMT-5:00) Rio Branco</option>
                                        <option value="America/Santiago" <?php if($time_zone == "America/Santiago"){ echo "selected"; } ?>>(GMT-3:00) Santiago</option>
                                        <option value="America/Santo_Domingo" <?php if($time_zone == "America/Santo_Domingo"){ echo "selected"; } ?>>(GMT-4:00) Santo Domingo</option>
                                        <option value="America/St_Kitts" <?php if($time_zone == "America/St_Kitts"){ echo "selected"; } ?>>(GMT-4:00) St. Kitts</option>
                                        <option value="America/St_Lucia" <?php if($time_zone == "America/St_Lucia"){ echo "selected"; } ?>>(GMT-4:00) St. Lucia</option>
                                        <option value="America/St_Thomas" <?php if($time_zone == "America/St_Thomas"){ echo "selected"; } ?>>(GMT-4:00) St. Thomas</option>
                                        <option value="America/St_Vincent" <?php if($time_zone == "America/St_Vincent"){ echo "selected"; } ?>>(GMT-4:00) St. Vincent</option>
                                        <option value="America/Thule" <?php if($time_zone == "America/Thule"){ echo "selected"; } ?>>(GMT-3:00) Thule</option>
                                        <option value="America/Tortola" <?php if($time_zone == "America/Tortola"){ echo "selected"; } ?>>(GMT-4:00) Tortola</option>
                                        <option value="Antarctica/Palmer" <?php if($time_zone == "Antarctica/Palmer"){ echo "selected"; } ?>>(GMT-3:00) Palmer</option>
                                        <option value="Atlantic/Bermuda" <?php if($time_zone == "Atlantic/Bermuda"){ echo "selected"; } ?>>(GMT-3:00) Bermuda</option>
                                        <option value="Atlantic/Stanley" <?php if($time_zone == "Atlantic/Stanley"){ echo "selected"; } ?>>(GMT-3:00) Stanley</option>
                                        <option value="America/St_Johns" <?php if($time_zone == "America/St_Johns"){ echo "selected"; } ?>>(GMT-2:30) Newfoundland Time - St. Johns</option>
                                        <option value="America/Araguaina" <?php if($time_zone == "America/Araguaina"){ echo "selected"; } ?>>(GMT-3:00) Araguaina</option>
                                        <option value="America/Argentina/ <?php if($time_zone == "America/Argentina"){ echo "selected"; } ?>Buenos_Aires">(GMT-3:00) Buenos Aires</option>
                                        <option value="America/Bahia" <?php if($time_zone == "America/Bahia"){ echo "selected"; } ?>>(GMT-3:00) Salvador</option>
                                        <option value="America/Belem" <?php if($time_zone == "America/Belem"){ echo "selected"; } ?>>(GMT-3:00) Belem</option>
                                        <option value="America/Cayenne" <?php if($time_zone == "America/Cayenne"){ echo "selected"; } ?>>(GMT-3:00) Cayenne</option>
                                        <option value="America/Fortaleza" <?php if($time_zone == "America/Fortaleza"){ echo "selected"; } ?>>(GMT-3:00) Fortaleza</option>
                                        <option value="America/Godthab" <?php if($time_zone == "America/Godthab"){ echo "selected"; } ?>>(GMT-2:00) Godthab</option>
                                        <option value="America/Maceio" <?php if($time_zone == "America/Maceio"){ echo "selected"; } ?>>(GMT-3:00) Maceio</option>
                                        <option value="America/Miquelon" <?php if($time_zone == "America/Miquelon"){ echo "selected"; } ?>>(GMT-2:00) Miquelon</option>
                                        <option value="America/Montevideo" <?php if($time_zone == "America/Montevideo"){ echo "selected"; } ?>>(GMT-3:00) Montevideo</option>
                                        <option value="America/Paramaribo" <?php if($time_zone == "America/Paramaribo"){ echo "selected"; } ?>>(GMT-3:00) Paramaribo</option>
                                        <option value="America/Recife" <?php if($time_zone == "America/Recife"){ echo "selected"; } ?>>(GMT-3:00) Recife</option>
                                        <option value="America/Sao_Paulo" <?php if($time_zone == "America/Sao_Paulo"){ echo "selected"; } ?>>(GMT-3:00) Sao Paulo</option>
                                        <option value="Antarctica/Rothera" <?php if($time_zone == "Antarctica/Rothera"){ echo "selected"; } ?>>(GMT-3:00) Rothera</option>
                                        <option value="America/Noronha" <?php if($time_zone == "America/Noronha"){ echo "selected"; } ?>>(GMT-2:00) Noronha</option>
                                        <option value="Atlantic/South_Georgia" <?php if($time_zone == "Atlantic/South_Georgia"){ echo "selected"; } ?>>(GMT-2:00) South Georgia</option>
                                        <option value="America/Scoresbysund" <?php if($time_zone == "America/Scoresbysund"){ echo "selected"; } ?>>(GMT+0:00) Scoresbysund</option>
                                        <option value="Atlantic/Azores" <?php if($time_zone == "Atlantic/Azores"){ echo "selected"; } ?>>(GMT+0:00) Azores</option>
                                        <option value="Atlantic/Cape_Verde" <?php if($time_zone == "Atlantic/Cape_Verde"){ echo "selected"; } ?>>(GMT-1:00) Cape Verde</option>
                                        <option value="Africa/Abidjan" <?php if($time_zone == "Africa/Abidjan"){ echo "selected"; } ?>>(GMT+0:00) Abidjan</option>
                                        <option value="Africa/Accra" <?php if($time_zone == "Africa/Accra"){ echo "selected"; } ?>>(GMT+0:00) Accra</option>
                                        <option value="Africa/Bamako" <?php if($time_zone == "Africa/Bamako"){ echo "selected"; } ?>>(GMT+0:00) Bamako</option>
                                        <option value="Africa/Banjul" <?php if($time_zone == "Africa/Banjul"){ echo "selected"; } ?>>(GMT+0:00) Banjul</option>
                                        <option value="Africa/Bissau" <?php if($time_zone == "Africa/Bissau"){ echo "selected"; } ?>>(GMT+0:00) Bissau</option>
                                        <option value="Africa/Casablanca" <?php if($time_zone == "Africa/Casablanca"){ echo "selected"; } ?>>(GMT+1:00) Casablanca</option>
                                        <option value="Africa/Conakry" <?php if($time_zone == "Africa/Conakry"){ echo "selected"; } ?>>(GMT+0:00) Conakry</option>
                                        <option value="Africa/Dakar" <?php if($time_zone == "Africa/Dakar"){ echo "selected"; } ?>>(GMT+0:00) Dakar</option>
                                        <option value="Africa/El_Aaiun" <?php if($time_zone == "Africa/El_Aaiun"){ echo "selected"; } ?>>(GMT+1:00) El Aaiun</option>
                                        <option value="Africa/Freetown" <?php if($time_zone == "Africa/Freetown"){ echo "selected"; } ?>>(GMT+0:00) Freetown</option>
                                        <option value="Africa/Lome" <?php if($time_zone == "Africa/Lome"){ echo "selected"; } ?>>(GMT+0:00) Lome</option>
                                        <option value="Africa/Monrovia" <?php if($time_zone == "Africa/Monrovia"){ echo "selected"; } ?>>(GMT+0:00) Monrovia</option>
                                        <option value="Africa/Nouakchott" <?php if($time_zone == "Africa/Nouakchott"){ echo "selected"; } ?>>(GMT+0:00) Nouakchott</option>
                                        <option value="Africa/Ouagadougou" <?php if($time_zone == "Africa/Ouagadougou"){ echo "selected"; } ?>>(GMT+0:00) Ouagadougou</option>
                                        <option value="Africa/Sao_Tome" <?php if($time_zone == "Africa/Sao_Tome"){ echo "selected"; } ?>>(GMT+1:00) Sao Tome</option>
                                        <option value="America/Danmarkshavn" <?php if($time_zone == "America/Danmarkshavn"){ echo "selected"; } ?>>(GMT+0:00) Danmarkshavn</option>
                                        <option value="Atlantic/Canary" <?php if($time_zone == "Atlantic/Canary"){ echo "selected"; } ?>>(GMT+1:00) Canary Islands</option>
                                        <option value="Atlantic/Faroe" <?php if($time_zone == "Atlantic/Faroe"){ echo "selected"; } ?>>(GMT+1:00) Faeroe</option>
                                        <option value="Atlantic/Reykjavik" <?php if($time_zone == "Atlantic/Reykjavik"){ echo "selected"; } ?>>(GMT+0:00) Reykjavik</option>
                                        <option value="Atlantic/St_Helena" <?php if($time_zone == "Atlantic/St_Helena"){ echo "selected"; } ?>>(GMT+0:00) St Helena</option>
                                        <option value="Etc/GMT" <?php if($time_zone == "Etc/GMT"){ echo "selected"; } ?>>(GMT+0:00) GMT (no daylight saving)</option>
                                        <option value="Europe/Dublin" <?php if($time_zone == "Europe/Dublin"){ echo "selected"; } ?>>(GMT+1:00) Dublin</option>
                                        <option value="Europe/Lisbon" <?php if($time_zone == "Europe/Lisbon"){ echo "selected"; } ?>>(GMT+1:00) Lisbon</option>
                                        <option value="Europe/London" <?php if($time_zone == "Europe/London"){ echo "selected"; } ?>>(GMT+1:00) London</option>
                                        <option value="Africa/Algiers" <?php if($time_zone == "Africa/Algiers"){ echo "selected"; } ?>>(GMT+1:00) Algiers</option>
                                        <option value="Africa/Bangui" <?php if($time_zone == "Africa/Bangui"){ echo "selected"; } ?>>(GMT+1:00) Bangui</option>
                                        <option value="Africa/Brazzaville" <?php if($time_zone == "Africa/Brazzaville"){ echo "selected"; } ?>>(GMT+1:00) Brazzaville</option>
                                        <option value="Africa/Ceuta" <?php if($time_zone == "Africa/Ceuta"){ echo "selected"; } ?>>(GMT+2:00) Ceuta</option>
                                        <option value="Africa/Douala" <?php if($time_zone == "Africa/Douala"){ echo "selected"; } ?>>(GMT+1:00) Douala</option>
                                        <option value="Africa/Kinshasa" <?php if($time_zone == "Africa/Kinshasa"){ echo "selected"; } ?>>(GMT+1:00) Kinshasa</option>
                                        <option value="Africa/Lagos" <?php if($time_zone == "Africa/Lagos"){ echo "selected"; } ?>>(GMT+1:00) Lagos</option>
                                        <option value="Africa/Libreville" <?php if($time_zone == "Africa/Libreville"){ echo "selected"; } ?>>(GMT+1:00) Libreville</option>
                                        <option value="Africa/Luanda" <?php if($time_zone == "Africa/Luanda"){ echo "selected"; } ?>>(GMT+1:00) Luanda</option>
                                        <option value="Africa/Malabo" <?php if($time_zone == "Africa/Malabo"){ echo "selected"; } ?>>(GMT+1:00) Malabo</option>
                                        <option value="Africa/Ndjamena" <?php if($time_zone == "Africa/Ndjamena"){ echo "selected"; } ?>>(GMT+1:00) Ndjamena</option>
                                        <option value="Africa/Niamey" <?php if($time_zone == "Africa/Niamey"){ echo "selected"; } ?>>(GMT+1:00) Niamey</option>
                                        <option value="Africa/Porto- <?php if($time_zone == "Africa/Porto"){ echo "selected"; } ?>Novo">(GMT+1:00) Porto-Novo</option>
                                        <option value="Africa/Tunis" <?php if($time_zone == "Africa/Tunis"){ echo "selected"; } ?>>(GMT+1:00) Tunis</option>
                                        <option value="Africa/Windhoek" <?php if($time_zone == "Africa/Windhoek"){ echo "selected"; } ?>>(GMT+2:00) Windhoek</option>
                                        <option value="Europe/Amsterdam" <?php if($time_zone == "Europe/Amsterdam"){ echo "selected"; } ?>>(GMT+2:00) Amsterdam</option>
                                        <option value="Europe/Andorra" <?php if($time_zone == "Europe/Andorra"){ echo "selected"; } ?>>(GMT+2:00) Andorra</option>
                                        <option value="Europe/Belgrade" <?php if($time_zone == "Europe/Belgrade"){ echo "selected"; } ?>>(GMT+2:00) Central European Time (Europe/Belgrade)</option>
                                        <option value="Europe/Berlin" <?php if($time_zone == "Europe/Berlin"){ echo "selected"; } ?>>(GMT+2:00) Berlin</option>
                                        <option value="Europe/Brussels" <?php if($time_zone == "Europe/Brussels"){ echo "selected"; } ?>>(GMT+2:00) Brussels</option>
                                        <option value="Europe/Budapest" <?php if($time_zone == "Europe/Budapest"){ echo "selected"; } ?>>(GMT+2:00) Budapest</option>
                                        <option value="Europe/Copenhagen" <?php if($time_zone == "Europe/Copenhagen"){ echo "selected"; } ?>>(GMT+2:00) Copenhagen</option>
                                        <option value="Europe/Gibraltar" <?php if($time_zone == "Europe/Gibraltar"){ echo "selected"; } ?>>(GMT+2:00) Gibraltar</option>
                                        <option value="Europe/Luxembourg" <?php if($time_zone == "Europe/Luxembourg"){ echo "selected"; } ?>>(GMT+2:00) Luxembourg</option>
                                        <option value="Europe/Madrid" <?php if($time_zone == "Europe/Madrid"){ echo "selected"; } ?>>(GMT+2:00) Madrid</option>
                                        <option value="Europe/Malta" <?php if($time_zone == "Europe/Malta"){ echo "selected"; } ?>>(GMT+2:00) Malta</option>
                                        <option value="Europe/Monaco" <?php if($time_zone == "Europe/Monaco"){ echo "selected"; } ?>>(GMT+2:00) Monaco</option>
                                        <option value="Europe/Oslo" <?php if($time_zone == "Europe/Oslo"){ echo "selected"; } ?>>(GMT+2:00) Oslo</option>
                                        <option value="Europe/Paris" <?php if($time_zone == "Europe/Paris"){ echo "selected"; } ?>>(GMT+2:00) Paris</option>
                                        <option value="Europe/Prague" <?php if($time_zone == "Europe/Prague"){ echo "selected"; } ?>>(GMT+2:00) Central European Time (Europe/Prague)</option>
                                        <option value="Europe/Rome" <?php if($time_zone == "Europe/Rome"){ echo "selected"; } ?>>(GMT+2:00) Rome</option>
                                        <option value="Europe/Stockholm" <?php if($time_zone == "Europe/Stockholm"){ echo "selected"; } ?>>(GMT+2:00) Stockholm</option>
                                        <option value="Europe/Tirane" <?php if($time_zone == "Europe/Tirane"){ echo "selected"; } ?>>(GMT+2:00) Tirane</option>
                                        <option value="Europe/Vaduz" <?php if($time_zone == "Europe/Vaduz"){ echo "selected"; } ?>>(GMT+2:00) Vaduz</option>
                                        <option value="Europe/Vienna" <?php if($time_zone == "Europe/Vienna"){ echo "selected"; } ?>>(GMT+2:00) Vienna</option>
                                        <option value="Europe/Warsaw" <?php if($time_zone == "Europe/Warsaw"){ echo "selected"; } ?>>(GMT+2:00) Warsaw</option>
                                        <option value="Europe/Zurich" <?php if($time_zone == "Europe/Zurich"){ echo "selected"; } ?>>(GMT+2:00) Zurich</option>
                                        <option value="Africa/Blantyre" <?php if($time_zone == "Africa/Blantyre"){ echo "selected"; } ?>>(GMT+2:00) Blantyre</option>
                                        <option value="Africa/Bujumbura" <?php if($time_zone == "Africa/Bujumbura"){ echo "selected"; } ?>>(GMT+2:00) Bujumbura</option>
                                        <option value="Africa/Cairo" <?php if($time_zone == "Africa/Cairo"){ echo "selected"; } ?>>(GMT+2:00) Cairo</option>
                                        <option value="Africa/Gaborone" <?php if($time_zone == "Africa/Gaborone"){ echo "selected"; } ?>>(GMT+2:00) Gaborone</option>
                                        <option value="Africa/Harare" <?php if($time_zone == "Africa/Harare"){ echo "selected"; } ?>>(GMT+2:00) Harare</option>
                                        <option value="Africa/Johannesburg" <?php if($time_zone == "Africa/Johannesburg"){ echo "selected"; } ?>>(GMT+2:00) Johannesburg</option>
                                        <option value="Africa/Kigali" <?php if($time_zone == "Africa/Kigali"){ echo "selected"; } ?>>(GMT+2:00) Kigali</option>
                                        <option value="Africa/Lubumbashi" <?php if($time_zone == "Africa/Lubumbashi"){ echo "selected"; } ?>>(GMT+2:00) Lubumbashi</option>
                                        <option value="Africa/Lusaka" <?php if($time_zone == "Africa/Lusaka"){ echo "selected"; } ?>>(GMT+2:00) Lusaka</option>
                                        <option value="Africa/Maputo" <?php if($time_zone == "Africa/Maputo"){ echo "selected"; } ?>>(GMT+2:00) Maputo</option>
                                        <option value="Africa/Maseru" <?php if($time_zone == "Africa/Maseru"){ echo "selected"; } ?>>(GMT+2:00) Maseru</option>
                                        <option value="Africa/Mbabane" <?php if($time_zone == "Africa/Mbabane"){ echo "selected"; } ?>>(GMT+2:00) Mbabane</option>
                                        <option value="Africa/Tripoli" <?php if($time_zone == "Africa/Tripoli"){ echo "selected"; } ?>>(GMT+2:00) Tripoli</option>
                                        <option value="Asia/Amman" <?php if($time_zone == "Asia/Amman"){ echo "selected"; } ?>>(GMT+3:00) Amman</option>
                                        <option value="Asia/Beirut" <?php if($time_zone == "Asia/Beirut"){ echo "selected"; } ?>>(GMT+3:00) Beirut</option>
                                        <option value="Asia/Damascus" <?php if($time_zone == "Asia/Damascus"){ echo "selected"; } ?>>(GMT+3:00) Damascus</option>
                                        <option value="Asia/Gaza" <?php if($time_zone == "Asia/Gaza"){ echo "selected"; } ?>>(GMT+3:00) Gaza</option>
                                        <option value="Asia/Jerusalem" <?php if($time_zone == "Asia/Jerusalem"){ echo "selected"; } ?>>(GMT+3:00) Jerusalem</option>
                                        <option value="Asia/Nicosia" <?php if($time_zone == "Asia/Nicosia"){ echo "selected"; } ?>>(GMT+3:00) Nicosia</option>
                                        <option value="Europe/Athens" <?php if($time_zone == "Europe/Athens"){ echo "selected"; } ?>>(GMT+3:00) Athens</option>
                                        <option value="Europe/Bucharest" <?php if($time_zone == "Europe/Bucharest"){ echo "selected"; } ?>>(GMT+3:00) Bucharest</option>
                                        <option value="Europe/Chisinau" <?php if($time_zone == "Europe/Chisinau"){ echo "selected"; } ?>>(GMT+3:00) Chisinau</option>
                                        <option value="Europe/Helsinki" <?php if($time_zone == "Europe/Helsinki"){ echo "selected"; } ?>>(GMT+3:00) Helsinki</option>
                                        <option value="Europe/Istanbul" <?php if($time_zone == "Europe/Istanbul"){ echo "selected"; } ?>>(GMT+3:00) Istanbul</option>
                                        <option value="Europe/Kaliningrad" <?php if($time_zone == "Europe/Kaliningrad"){ echo "selected"; } ?>>(GMT+2:00) Russia - Kaliningrad</option>
                                        <option value="Europe/Kiev" <?php if($time_zone == "Europe/Kiev"){ echo "selected"; } ?>>(GMT+3:00) Kiev</option>
                                        <option value="Europe/Minsk" <?php if($time_zone == "Europe/Minsk"){ echo "selected"; } ?>>(GMT+3:00) Minsk</option>
                                        <option value="Europe/Riga" <?php if($time_zone == "Europe/Riga"){ echo "selected"; } ?>>(GMT+3:00) Riga</option>
                                        <option value="Europe/Sofia" <?php if($time_zone == "Europe/Sofia"){ echo "selected"; } ?>>(GMT+3:00) Sofia</option>
                                        <option value="Europe/Tallinn" <?php if($time_zone == "Europe/Tallinn"){ echo "selected"; } ?>>(GMT+3:00) Tallinn</option>
                                        <option value="Europe/Vilnius" <?php if($time_zone == "Europe/Vilnius"){ echo "selected"; } ?>>(GMT+3:00) Vilnius</option>
                                        <option value="Africa/Addis_Ababa" <?php if($time_zone == "Africa/Addis_Ababa"){ echo "selected"; } ?>>(GMT+3:00) Addis Ababa</option>
                                        <option value="Africa/Asmara" <?php if($time_zone == "Africa/Asmara"){ echo "selected"; } ?>>(GMT+3:00) Asmera</option>
                                        <option value="Africa/Dar_es_Salaam" <?php if($time_zone == "Africa/Dar_es_Salaam"){ echo "selected"; } ?>>(GMT+3:00) Dar es Salaam</option>
                                        <option value="Africa/Djibouti" <?php if($time_zone == "Africa/Djibouti"){ echo "selected"; } ?>>(GMT+3:00) Djibouti</option>
                                        <option value="Africa/Kampala" <?php if($time_zone == "Africa/Kampala"){ echo "selected"; } ?>>(GMT+3:00) Kampala</option>
                                        <option value="Africa/Khartoum" <?php if($time_zone == "Africa/Khartoum"){ echo "selected"; } ?>>(GMT+2:00) Khartoum</option>
                                        <option value="Africa/Mogadishu" <?php if($time_zone == "Africa/Mogadishu"){ echo "selected"; } ?>>(GMT+3:00) Mogadishu</option>
                                        <option value="Africa/Nairobi" <?php if($time_zone == "Africa/Nairobi"){ echo "selected"; } ?>>(GMT+3:00) Nairobi</option>
                                        <option value="Antarctica/Syowa" <?php if($time_zone == "Antarctica/Syowa"){ echo "selected"; } ?>>(GMT+3:00) Syowa</option>
                                        <option value="Asia/Aden" <?php if($time_zone == "Asia/Aden"){ echo "selected"; } ?>>(GMT+3:00) Aden</option>
                                        <option value="Asia/Baghdad" <?php if($time_zone == "Asia/Baghdad"){ echo "selected"; } ?>>(GMT+3:00) Baghdad</option>
                                        <option value="Asia/Bahrain" <?php if($time_zone == "Asia/Bahrain"){ echo "selected"; } ?>>(GMT+3:00) Bahrain</option>
                                        <option value="Asia/Kuwait" <?php if($time_zone == "Asia/Kuwait"){ echo "selected"; } ?>>(GMT+3:00) Kuwait</option>
                                        <option value="Asia/Qatar" <?php if($time_zone == "Asia/Qatar"){ echo "selected"; } ?>>(GMT+3:00) Qatar</option>
                                        <option value="Asia/Riyadh" <?php if($time_zone == "Asia/Riyadh"){ echo "selected"; } ?>>(GMT+3:00) Riyadh</option>
                                        <option value="Europe/Moscow" <?php if($time_zone == "Europe/Moscow"){ echo "selected"; } ?>>(GMT+3:00) Russia - Moscow</option>
                                        <option value="Indian/Antananarivo" <?php if($time_zone == "Indian/Antananarivo"){ echo "selected"; } ?>>(GMT+3:00) Antananarivo</option>
                                        <option value="Indian/Comoro" <?php if($time_zone == "Indian/Comoro"){ echo "selected"; } ?>>(GMT+3:00) Comoro</option>
                                        <option value="Indian/Mayotte" <?php if($time_zone == "Indian/Mayotte"){ echo "selected"; } ?>>(GMT+3:00) Mayotte</option>
                                        <option value="Asia/Tehran" <?php if($time_zone == "Asia/Tehran"){ echo "selected"; } ?>>(GMT+4:30) Tehran</option>
                                        <option value="Asia/Baku" <?php if($time_zone == "Asia/Baku"){ echo "selected"; } ?>>(GMT+4:00) Baku</option>
                                        <option value="Asia/Dubai" <?php if($time_zone == "Asia/Dubai"){ echo "selected"; } ?>>(GMT+4:00) Dubai</option>
                                        <option value="Asia/Muscat" <?php if($time_zone == "Asia/Muscat"){ echo "selected"; } ?>>(GMT+4:00) Muscat</option>
                                        <option value="Asia/Tbilisi" <?php if($time_zone == "Asia/Tbilisi"){ echo "selected"; } ?>>(GMT+4:00) Tbilisi</option>
                                        <option value="Asia/Yerevan" <?php if($time_zone == "Asia/Yerevan"){ echo "selected"; } ?>>(GMT+4:00) Yerevan</option>
                                        <option value="Europe/Samara" <?php if($time_zone == "Europe/Samara"){ echo "selected"; } ?>>(GMT+4:00) Russia - Samara</option>
                                        <option value="Indian/Mahe" <?php if($time_zone == "Indian/Mahe"){ echo "selected"; } ?>>(GMT+4:00) Mahe</option>
                                        <option value="Indian/Mauritius" <?php if($time_zone == "Indian/Mauritius"){ echo "selected"; } ?>>(GMT+4:00) Mauritius</option>
                                        <option value="Indian/Reunion" <?php if($time_zone == "Indian/Reunion"){ echo "selected"; } ?>>(GMT+4:00) Reunion</option>
                                        <option value="Asia/Kabul" <?php if($time_zone == "Asia/Kabul"){ echo "selected"; } ?>>(GMT+4:30) Kabul</option>
                                        <option value="Asia/Aqtau" <?php if($time_zone == "Asia/Aqtau"){ echo "selected"; } ?>>(GMT+5:00) Aqtau</option>
                                        <option value="Asia/Aqtobe" <?php if($time_zone == "Asia/Aqtobe"){ echo "selected"; } ?>>(GMT+5:00) Aqtobe</option>
                                        <option value="Asia/Ashgabat" <?php if($time_zone == "Asia/Ashgabat"){ echo "selected"; } ?>>(GMT+5:00) Ashgabat</option>
                                        <option value="Asia/Dushanbe" <?php if($time_zone == "Asia/Dushanbe"){ echo "selected"; } ?>>(GMT+5:00) Dushanbe</option>
                                        <option value="Asia/Karachi" <?php if($time_zone == "Asia/Karachi"){ echo "selected"; } ?>>(GMT+5:00) Karachi</option>
                                        <option value="Asia/Tashkent" <?php if($time_zone == "Asia/Tashkent"){ echo "selected"; } ?>>(GMT+5:00) Tashkent</option>
                                        <option value="Asia/Yekaterinburg" <?php if($time_zone == "Asia/Yekaterinburg"){ echo "selected"; } ?>>(GMT+5:00) Russia - Yekaterinburg</option>
                                        <option value="Indian/Kerguelen" <?php if($time_zone == "Indian/Kerguelen"){ echo "selected"; } ?>>(GMT+5:00) Kerguelen</option>
                                        <option value="Indian/Maldives" <?php if($time_zone == "Indian/Maldives"){ echo "selected"; } ?>>(GMT+5:00) Maldives</option>
                                        <option value="Asia/Kolkata" <?php if($time_zone == "Asia/Kolkata"){ echo "selected"; } ?>>(GMT+5:30) India Standard Time</option>
                                        <option value="Asia/Colombo" <?php if($time_zone == "Asia/Colombo"){ echo "selected"; } ?>>(GMT+5:30) Colombo</option>
                                        <option value="Asia/Kathmandu" <?php if($time_zone == "Asia/Kathmandu"){ echo "selected"; } ?>>(GMT+5:45) Katmandu</option>
                                        <option value="Antarctica/Mawson" <?php if($time_zone == "Antarctica/Mawson"){ echo "selected"; } ?>>(GMT+5:00) Mawson</option>
                                        <option value="Antarctica/Vostok" <?php if($time_zone == "Antarctica/Vostok"){ echo "selected"; } ?>>(GMT+6:00) Vostok</option>
                                        <option value="Asia/Almaty" <?php if($time_zone == "Asia/Almaty"){ echo "selected"; } ?>>(GMT+6:00) Almaty</option>
                                        <option value="Asia/Bishkek" <?php if($time_zone == "Asia/Bishkek"){ echo "selected"; } ?>>(GMT+6:00) Bishkek</option>
                                        <option value="Asia/Dhaka" <?php if($time_zone == "Asia/Dhaka"){ echo "selected"; } ?>>(GMT+6:00) Dhaka</option>
                                        <option value="Asia/Omsk" <?php if($time_zone == "Asia/Omsk"){ echo "selected"; } ?>>(GMT+6:00) Russia - Omsk, Novosibirsk</option>
                                        <option value="Asia/Thimphu" <?php if($time_zone == "Asia/Thimphu"){ echo "selected"; } ?>>(GMT+6:00) Thimphu</option>
                                        <option value="Indian/Chagos" <?php if($time_zone == "Indian/Chagos"){ echo "selected"; } ?>>(GMT+6:00) Chagos</option>
                                        <option value="Asia/Rangoon" <?php if($time_zone == "Asia/Rangoon"){ echo "selected"; } ?>>(GMT+6:30) Rangoon</option>
                                        <option value="Indian/Cocos" <?php if($time_zone == "Indian/Cocos"){ echo "selected"; } ?>>(GMT+6:30) Cocos</option>
                                        <option value="Antarctica/Davis" <?php if($time_zone == "Antarctica/Davis"){ echo "selected"; } ?>>(GMT+7:00) Davis</option>
                                        <option value="Asia/Bangkok" <?php if($time_zone == "Asia/Bangkok"){ echo "selected"; } ?>>(GMT+7:00) Bangkok</option>
                                        <option value="Asia/Hovd" <?php if($time_zone == "Asia/Hovd"){ echo "selected"; } ?>>(GMT+7:00) Hovd</option>
                                        <option value="Asia/Jakarta" <?php if($time_zone == "Asia/Jakarta"){ echo "selected"; } ?>>(GMT+7:00) Jakarta</option>
                                        <option value="Asia/Krasnoyarsk" <?php if($time_zone == "Asia/Krasnoyarsk"){ echo "selected"; } ?>>(GMT+7:00) Russia - Krasnoyarsk</option>
                                        <option value="Asia/Phnom_Penh" <?php if($time_zone == "Asia/Phnom_Penh"){ echo "selected"; } ?>>(GMT+7:00) Phnom Penh</option>
                                        <option value="Asia/Ho_Chi_Minh" <?php if($time_zone == "Asia/Ho_Chi_Minh"){ echo "selected"; } ?>>(GMT+7:00) Hanoi</option>
                                        <option value="Asia/Vientiane" <?php if($time_zone == "Asia/Vientiane"){ echo "selected"; } ?>>(GMT+7:00) Vientiane</option>
                                        <option value="Indian/Christmas" <?php if($time_zone == "Indian/Christmas"){ echo "selected"; } ?>>(GMT+7:00) Christmas</option>
                                        <option value="Antarctica/Casey" <?php if($time_zone == "Antarctica/Casey"){ echo "selected"; } ?>>(GMT+8:00) Casey</option>
                                        <option value="Asia/Brunei" <?php if($time_zone == "Asia/Brunei"){ echo "selected"; } ?>>(GMT+8:00) Brunei</option>
                                        <option value="Asia/Choibalsan" <?php if($time_zone == "Asia/Choibalsan"){ echo "selected"; } ?>>(GMT+8:00) Choibalsan</option>
                                        <option value="Asia/Hong_Kong" <?php if($time_zone == "Asia/Hong_Kong"){ echo "selected"; } ?>>(GMT+8:00) Hong Kong</option>
                                        <option value="Asia/Irkutsk" <?php if($time_zone == "Asia/Irkutsk"){ echo "selected"; } ?>>(GMT+8:00) Russia - Irkutsk</option>
                                        <option value="Asia/Kuala_Lumpur" <?php if($time_zone == "Asia/Kuala_Lumpur"){ echo "selected"; } ?>>(GMT+8:00) Kuala Lumpur</option>
                                        <option value="Asia/Macau" <?php if($time_zone == "Asia/Macau"){ echo "selected"; } ?>>(GMT+8:00) Macau</option>
                                        <option value="Asia/Makassar" <?php if($time_zone == "Asia/Makassar"){ echo "selected"; } ?>>(GMT+8:00) Makassar</option>
                                        <option value="Asia/Manila" <?php if($time_zone == "Asia/Manila"){ echo "selected"; } ?>>(GMT+8:00) Manila</option>
                                        <option value="Asia/Shanghai" <?php if($time_zone == "Asia/Shanghai"){ echo "selected"; } ?>>(GMT+8:00) China Time - Beijing</option>
                                        <option value="Asia/Singapore" <?php if($time_zone == "Asia/Singapore"){ echo "selected"; } ?>>(GMT+8:00) Singapore</option>
                                        <option value="Asia/Taipei" <?php if($time_zone == "Asia/Taipei"){ echo "selected"; } ?>>(GMT+8:00) Taipei</option>
                                        <option value="Asia/Ulaanbaatar" <?php if($time_zone == "Asia/Ulaanbaatar"){ echo "selected"; } ?>>(GMT+8:00) Ulaanbaatar</option>
                                        <option value="Australia/Perth" <?php if($time_zone == "Australia/Perth"){ echo "selected"; } ?>>(GMT+8:00) Western Time - Perth</option>
                                        <option value="Asia/Dili" <?php if($time_zone == "Asia/Dili"){ echo "selected"; } ?>>(GMT+9:00) Dili</option>
                                        <option value="Asia/Jayapura" <?php if($time_zone == "Asia/Jayapura"){ echo "selected"; } ?>>(GMT+9:00) Jayapura</option>
                                        <option value="Asia/Pyongyang" <?php if($time_zone == "Asia/Pyongyang"){ echo "selected"; } ?>>(GMT+9:00) Pyongyang</option>
                                        <option value="Asia/Seoul" <?php if($time_zone == "Asia/Seoul"){ echo "selected"; } ?>>(GMT+9:00) Seoul</option>
                                        <option value="Asia/Tokyo" <?php if($time_zone == "Asia/Tokyo"){ echo "selected"; } ?>>(GMT+9:00) Tokyo</option>
                                        <option value="Asia/Yakutsk" <?php if($time_zone == "Asia/Yakutsk"){ echo "selected"; } ?>>(GMT+9:00) Russia - Yakutsk</option>
                                        <option value="Pacific/Palau" <?php if($time_zone == "Pacific/Palau"){ echo "selected"; } ?>>(GMT+9:00) Palau</option>
                                        <option value="Australia/Adelaide" <?php if($time_zone == "Australia/Adelaide"){ echo "selected"; } ?>>(GMT+10:30) Central Time - Adelaide</option>
                                        <option value="Australia/Darwin" <?php if($time_zone == "Australia/Darwin"){ echo "selected"; } ?>>(GMT+9:30) Central Time - Darwin</option>
                                        <option value="Antarctica/DumontDUrville" <?php if($time_zone == "Antarctica/DumontDUrville"){ echo "selected"; } ?>>(GMT+10:00) Dumont D'Urville</option>
                                        <option value="Asia/Vladivostok" <?php if($time_zone == "Asia/Vladivostok"){ echo "selected"; } ?>>(GMT+10:00) Russia - Yuzhno-Sakhalinsk</option>
                                        <option value="Australia/Brisbane" <?php if($time_zone == "Australia/Brisbane"){ echo "selected"; } ?>>(GMT+10:00) Eastern Time - Brisbane</option>
                                        <option value="Australia/Hobart" <?php if($time_zone == "Australia/Hobart"){ echo "selected"; } ?>>(GMT+11:00) Eastern Time - Hobart</option>
                                        <option value="Australia/Sydney" <?php if($time_zone == "Australia/Sydney"){ echo "selected"; } ?>>(GMT+11:00) Eastern Time - Sydney</option>
                                        <option value="Australia/Melbourne" <?php if($time_zone == "Australia/Melbourne"){ echo "selected"; } ?>>(GMT+11:00) Eastern Time - Melbourne</option>
                                        <option value="Pacific/Guam" <?php if($time_zone == "Pacific/Guam"){ echo "selected"; } ?>>(GMT+10:00) Guam</option>
                                        <option value="Pacific/Port_Moresby" <?php if($time_zone == "Pacific/Port_Moresby"){ echo "selected"; } ?>>(GMT+10:00) Port Moresby</option>
                                        <option value="Pacific/Saipan" <?php if($time_zone == "Pacific/Saipan"){ echo "selected"; } ?>>(GMT+10:00) Saipan</option>
                                        <option value="Pacific/Chuuk" <?php if($time_zone == "Pacific/Chuuk"){ echo "selected"; } ?>>(GMT+10:00) Chuuk</option>
                                        <option value="Asia/Magadan" <?php if($time_zone == "Asia/Magadan"){ echo "selected"; } ?>>(GMT+11:00) Russia - Magadan</option>
                                        <option value="Pacific/Efate" <?php if($time_zone == "Pacific/Efate"){ echo "selected"; } ?>>(GMT+11:00) Efate</option>
                                        <option value="Pacific/Guadalcanal" <?php if($time_zone == "Pacific/Guadalcanal"){ echo "selected"; } ?>>(GMT+11:00) Guadalcanal</option>
                                        <option value="Pacific/Kosrae" <?php if($time_zone == "Pacific/Kosrae"){ echo "selected"; } ?>>(GMT+11:00) Kosrae</option>
                                        <option value="Pacific/Noumea" <?php if($time_zone == "Pacific/Noumea"){ echo "selected"; } ?>>(GMT+11:00) Noumea</option>
                                        <option value="Pacific/Pohnpei" <?php if($time_zone == "Pacific/Pohnpei"){ echo "selected"; } ?>>(GMT+11:00) Pohnpei</option>
                                        <option value="Pacific/Norfolk" <?php if($time_zone == "Pacific/Norfolk"){ echo "selected"; } ?>>(GMT+11:00) Norfolk</option>
                                        <option value="Asia/Kamchatka" <?php if($time_zone == "Asia/Kamchatka"){ echo "selected"; } ?>>(GMT+12:00) Russia - Petropavlovsk-Kamchatskiy</option>
                                        <option value="Pacific/Auckland" <?php if($time_zone == "Pacific/Auckland"){ echo "selected"; } ?>>(GMT+13:00) Auckland</option>
                                        <option value="Pacific/Fiji" <?php if($time_zone == "Pacific/Fiji"){ echo "selected"; } ?>>(GMT+12:00) Fiji</option>
                                        <option value="Pacific/Funafuti" <?php if($time_zone == "Pacific/Funafuti"){ echo "selected"; } ?>>(GMT+12:00) Funafuti</option>
                                        <option value="Pacific/Kwajalein" <?php if($time_zone == "Pacific/Kwajalein"){ echo "selected"; } ?>>(GMT+12:00) Kwajalein</option>
                                        <option value="Pacific/Majuro" <?php if($time_zone == "Pacific/Majuro"){ echo "selected"; } ?>>(GMT+12:00) Majuro</option>
                                        <option value="Pacific/Nauru" <?php if($time_zone == "Pacific/Nauru"){ echo "selected"; } ?>>(GMT+12:00) Nauru</option>
                                        <option value="Pacific/Tarawa" <?php if($time_zone == "Pacific/Tarawa"){ echo "selected"; } ?>>(GMT+12:00) Tarawa</option>
                                        <option value="Pacific/Wake" <?php if($time_zone == "Pacific/Wake"){ echo "selected"; } ?>>(GMT+12:00) Wake</option>
                                        <option value="Pacific/Wallis" <?php if($time_zone == "Pacific/Wallis"){ echo "selected"; } ?>>(GMT+12:00) Wallis</option>
                                        <option value="Pacific/Enderbury" <?php if($time_zone == "Pacific/Enderbury"){ echo "selected"; } ?>>(GMT+13:00) Enderbury</option>
                                        <option value="Pacific/Tongatapu" <?php if($time_zone == "Pacific/Tongatapu"){ echo "selected"; } ?>>(GMT+13:00) Tongatapu</option>
                                        <option value="Pacific/Kiritimati" <?php if($time_zone == "Pacific/Kiritimati"){ echo "selected"; } ?>>(GMT+14:00) Kiritimati</option>
                                    </select>
                                </div>
                                <?php $curr_mon = date('m');  ?>
                                <div class="half_div div40 <?php echo $curr_mon; ?>">
                                    <h2 class="mbl text-center">Choose a Month</h2>
                                    <select name="select_month" class="form-control inline-field babel-ignore timezone-select-inactive" id="select_month">
                                        <?php for ($x = $curr_mon; $x <= $curr_mon+1; $x++):
                                            if($x == 1 || $x == 13){ $mon = 'JAN'; }elseif($x == 2){ $mon = 'FEB';}elseif($x == 3){ $mon = 'MAR';}elseif($x == 4){ $mon = 'APR';}elseif($x == 5){ $mon = 'MAY';}elseif($x == 6){ $mon = 'JUN';}elseif($x == 7){ $mon = 'JUL';}elseif($x == 8){ $mon = 'AUG';}elseif($x == 9){ $mon = 'SEP';}elseif($x == 10){ $mon = 'OCT';}elseif($x == 11){ $mon = 'NOV';}elseif($x == 12){ $mon = 'DEC';}?>
                                            <option value="<?php if($x==13){ echo 1; }else{echo $x;} ?>" <?php if($curr_mon == $x){ echo "selected"; } ?>><?php echo $mon; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="step1_2">
                            <h2 class="mbl text-center">Select a Day</h2>
                            <div id="day_available_list">
                            </div>
                        </div>
                    </div>
                    <div class="available_dates_times_step available_dates_times_step_2" data-step="2" style="display:none;">
                        <h2 class="mbl text-center">Select a Time</h2>
                        <div id="au_available_times"></div>
                    </div>
                    <div class="available_dates_times_step available_dates_times_step_3" data-step="3" style="display:none;">
                        <h2 class="mbm">Enter Details</h2>
                        <form class="js-form" autocomplete="off" novalidate="" autocorrect="off">
                            <div class="field js-input-container mbm">
                                <label>Full Name <span class="_red_color">*</span></label>
                                <input class="js-input text" type="text" name="full_name" autocorrect="off" autocomplete="off" value="" required="" maxlength="155">
                                <span data-error="full_name"></span>
                            </div>
                            <div class="field js-input-container mbm">
                                <label>Your e-mail address <span class="_red_color">*</span></label>
                                <input class="js-input text" type="email" name="email" autocorrect="off" autocomplete="off" value="<?php echo $user_email; ?>" required="">
                                <span data-error="email"></span>
                            </div>
                            <div class="field js-input-container mbm">
                                <label>Confirm e-mail address <span class="_red_color">*</span></label>
                                <input class="js-input text" type="email" name="confirm_email" autocorrect="off" autocomplete="off" value="" required="">
                                <span data-error="confirm_email"></span>
                            </div>
                            <div class="field js-input-container mbm">
                                <label>Phone<span class="_red_color">*</span></label>
                                <input class="js-input text" type="text" name="user_phone" autocorrect="off" autocomplete="off" value="" required="" maxlength="255">
                                <span data-error="user_phone"></span>
                            </div>
                            <!-- <div class="field js-input-container mbm">
                                <label>Please update fully Skype or FaceTime ID if you have one</label>
                                <input class="js-input text" type="text" name="skype_facetime" autocorrect="off" autocomplete="off" value="" required="" maxlength="255">
                                <span data-error="skype_facetime"></span>
                            </div> -->
                            <div id="intake_form"></div>
                            <div class="field js-input-container mbm">
                                <input class="button datatime-avail-button-submit js-loading-hide" type="submit" value="Schedule Event">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .available_dates_times_div_content input[type="text"], .available_dates_times_div_content input[type="email"]{
                width: 100%;
            }
            .available_dates_times_div_content .termC label{
                display: inline-block;
                position: relative;
                top: 1px;
            }
            .available_dates_times_div_content .back{
                font-size: 28px;
                color: #ababab;
                font-weight: bold;
                cursor: pointer;
            }
            .available_dates_times_div_content .back:hover, .available_dates_times_div_content .back:focus{
                color: #000;
            }
            .available_dates_times_div_content #timezone,.available_dates_times_div_content #select_month{
                width: 100%;
                color: #000;
                background: #f0f8fe;
                border: 1px solid #fff;
            }
            .available_dates_times_div_content textarea{ height: 75px; }
            .available_dates_times_div_content textarea, .available_dates_times_div_content select{ width: 100%; }
            .available_dates_times_div_content .date_sel, .available_dates_times_div_content .time_sel{ font-size: 20px; color: #2196F3; font-weight: 500; text-transform: uppercase; }
            .available_dates_times_div_content .available_dates_times_div_top{ display: flex; width: 100%; justify-content: space-between; }
            .available_dates_times_div_content{
                margin: 10% auto;
            }
            .mloaderwrap{
                display: flex;
                width: 100%;
                height: 100%;
                justify-content: center;
                align-items: center;
                background: #00000045;
                position: fixed;
                top: 0;
                right: 0;
                z-index: 99999999999;
            }
            .mloader {
                border: 16px solid #f3f3f3;
                border-radius: 50%;
                border-top: 16px solid #f48c2e;
                width: 120px;
                height: 120px;
                -webkit-animation: mspin 1s cubic-bezier(0.46, -0.08, 0.29, 0.99) infinite; /* Safari */
                animation: mspin 1s cubic-bezier(0.46, -0.08, 0.29, 0.99) infinite;
            }

            /* Safari */
            @-webkit-keyframes mspin {
                0% { -webkit-transform: rotate(0deg); }
                100% { -webkit-transform: rotate(360deg); }
            }

            @keyframes mspin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
        </style>
        <script type="text/javascript">
            jQuery('body').on('click', '.date_avail, .confirm-button', function(e){
                e.preventDefault();
                e.stopPropagation();
                var me = this;
                if(jQuery(me).parents('.available_dates_times_step').length > 0){
                    var cStep = parseInt(jQuery(me).parents('.available_dates_times_step').data("step"));
                    var nStep = cStep + 1;
                    var myVal = jQuery(me).data("val");
                    var myTime = jQuery(me).data("time");
                    var timezone = jQuery('#timezone option:selected').val();
                    if(cStep < 3 && jQuery('.available_dates_times_step[data-step="'+nStep+'"]').length > 0){
                        console.log(cStep);
                        if(cStep == 1){
                            sessionStorage.avail_dates_times_time = "";
                            sessionStorage.avail_dates_times_time = myVal;
                            sessionStorage.avail_dates_times_date_orig = "";
                            sessionStorage.avail_dates_times_date_orig = myTime;
                            sessionStorage.avail_dates_times_timezone = "";
                            sessionStorage.avail_dates_times_timezone = timezone;
                            jQuery('.date_sel').text(new Date(myVal).toDateString()).removeClass('_hide');
                            jQuery('.time_sel').removeClass('_hide');
                            var dFind = jQuery(me).data("find");
                            var data = {
                                'action': 'check_time_availablity',
                                //'timezone': sessionStorage.avail_dates_times_timezone,
                                'timezone': jQuery( "#timezone" ).val(),
                                'check_time_available': myVal,
                                'variation_id': jQuery('.select_variation:checked').val()
                            };
                            jQuery.ajax({
                                url: "/wp-admin/admin-ajax.php",
                                type: "POST",
                                data : data,
                                beforeSend: function(){
                                    jQuery('.mloaderwrap').remove();
                                    jQuery('html').append('<div class="mloaderwrap"><div class="mloader"><\/div><\/div>');
                                },
                                success: function(res){
                                    jQuery('.mloaderwrap').remove();
                                    jQuery('#au_available_times').html(res);
                                    jQuery(me).parents('.available_dates_times_step').removeClass("_show").addClass("_hide");
                                    jQuery('.available_dates_times_step[data-step="'+nStep+'"]').removeClass("_hide").addClass("_show");
                                },
                            });
                        } else if(cStep == 2){
                            sessionStorage.avail_dates_times_time = "";
                            sessionStorage.avail_dates_times_time = myVal;
                            sessionStorage.avail_dates_times_date_orig = "";
                            sessionStorage.avail_dates_times_date_orig = myTime;
                            sessionStorage.avail_dates_times_timezone = "";
                            sessionStorage.avail_dates_times_timezone = timezone;
                            var data = {
                                'action': 'get_intake_form',
                                'variation_id': jQuery('.select_variation:checked').val(),
                            };
                            jQuery.ajax({
                                url: "/wp-admin/admin-ajax.php",
                                type: "POST",
                                data : data,
                                beforeSend: function(){
                                    jQuery('.mloaderwrap').remove();
                                    jQuery('html').append('<div class="mloaderwrap"><div class="mloader"><\/div><\/div>');
                                },
                                success: function(res){
                                    jQuery('.mloaderwrap').remove();
                                    jQuery('#intake_form').html(res);
                                },
                            });
                        } else {
                            sessionStorage.avail_dates_times_time = "";
                            sessionStorage.avail_dates_times_time = myVal;
                            sessionStorage.avail_dates_times_date_orig = "";
                            sessionStorage.avail_dates_times_date_orig = myTime;
                            sessionStorage.avail_dates_times_timezone = "";
                            sessionStorage.avail_dates_times_timezone = timezone;
                            jQuery('.time_sel').text(new Date(sessionStorage.avail_dates_times_date +' '+ myVal).toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true })).removeClass('_hide');
                            jQuery('.date_sel').removeClass('_hide');
                            jQuery('.available_dates_times_step[data-step="'+nStep+'"] .90ml').removeClass("_show").addClass("_hide");
                            if((jQuery('.select_variation:checked').val() == "21019") || (jQuery('.select_variation:checked').val() == "13043") || (jQuery('.select_variation:checked').val() == "13047") ){
                                jQuery('.available_dates_times_step[data-step="'+nStep+'"] .90ml').removeClass("_hide").addClass("_show");
                            } else {
                                jQuery('.available_dates_times_step[data-step="'+nStep+'"] .termC').removeClass("_hide").addClass("_show");
                            }
                        }
                        jQuery('.available_dates_times_div_modal .back').removeClass("_hide").addClass("_show");
                        jQuery(me).parents('.available_dates_times_step').removeClass("_show").addClass("_hide");
                        jQuery('.available_dates_times_step[data-step="'+nStep+'"]').removeClass("_hide").addClass("_show");
                    }
                }
            });
            jQuery('body').on('click', '.datatime-avail-button-submit', function(e){
                e.preventDefault();
                e.stopPropagation();
                var me = this;
                var productID = jQuery('.add-to-cart-button').data("product");
                var variationID = jQuery('.select_variation:checked').val();
                console.log( variationID);
                var full_name = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='full_name']").val());
                var email = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='email']").val());
                var confirm_email = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='confirm_email']").val());
                var skype_facetime = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='skype_facetime']").val());
                var user_phone = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='user_phone']").val());


                var intRegex = /[0-9 -()+]+$/;
                //var intRegex = /^[0-9-+]+$/;
                var emailReg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                var status = true;

                jQuery(".available_dates_times_step_3 span[data-error='full_name']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='full_name']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='email']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='email']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='confirm_email']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='confirm_email']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='skype_facetime']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='skype_facetime']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='user_phone']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='user_phone']").css('border-color', '#e3e3e3');

                jQuery(".available_dates_times_step_3 span[data-error='6036545']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6036545']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6036546']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6036546']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6036547']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6036547']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6036549']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6036549']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6036551']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6036551']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6036550']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 select[name='6036550']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6036576']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6036576']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6036552']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6036552']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6036553']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6036553']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6036554']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6036554']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6036555']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6036555']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6036561']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6036561']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6036562']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6036562']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6036563']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6036563']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6036578']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6036578']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6036577']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6036577']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6036564']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6036564']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6036572']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6036572']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6036573']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6036573']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6036569']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6036569']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6036579']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6036579']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6036571']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6036571']").css('border-color', '#e3e3e3');
                jQuery(".available_dates_times_step_3 span[data-error='6342311']").text("").removeClass('_show').addClass('_hide');
                jQuery(".available_dates_times_step_3 input[name='6342311']").css('border-color', '#e3e3e3');

                if(variationID == 20616){
                    var terms = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036543']:checked").val());
                    console.log(terms);
                }else if((variationID == 21019) || (variationID == 13047)|| (variationID == 20615)){
                    var sess_bef = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036545']:checked").val());
                    var treat_bef = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036546']:checked").val());
                    var said_bef = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036547']:checked").val());
                    var interest_in = [];
                    jQuery(".available_dates_times_step_3 input[name='6036549[]']:checked").map(function(i,v){ interest_in.push(v.value) });
                    var made_you_book = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036551']").val());
                    var find_abt_us = jQuery.trim(jQuery(".available_dates_times_step_3 select[name='6036550']").val());
                    var newsletter = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036576']:checked").val());
                    var terms = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036543']:checked").val());
                } else if(variationID == 13043){
                    var LOA_sess_bef = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036552']:checked").val());
                    var level = [];
                    jQuery(".available_dates_times_step_3 input[name='6036553[]']:checked").map(function(i,v){ level.push(v.value) });
                    var LOA_pro = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036554']:checked").val());
                    var influences = [];
                    jQuery(".available_dates_times_step_3 input[name='6036555[]']:checked").map(function(i,v){ influences.push(v.value) });
                    var influences_add = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036561']").val());
                    var focus = [];
                    jQuery(".available_dates_times_step_3 input[name='6036562[]']:checked").map(function(i,v){ focus.push(v.value) });
                                    var achieve = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036563']").val());
                    var find_us = [];
                    jQuery(".available_dates_times_step_3 input[name='6036578[]']:checked").map(function(i,v){ find_us.push(v.value) });
                    var LOA_newsletter = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036577']:checked").val());
                    var terms = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036543']:checked").val());
                } else if((variationID == 20608) || (variationID == 20645)){
                    var INT_sess_bef = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036564']:checked").val());
                    var predictive = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036572']:checked").val());
                    var empower = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036573']:checked").val());
                    var concern = [];
                    jQuery(".available_dates_times_step_3 input[name='6036569[]']:checked").map(function(i,v){ concern.push(v.value) });
                    var INT_hear = [];
                    jQuery(".available_dates_times_step_3 input[name='6036579[]']:checked").map(function(i,v){ INT_hear.push(v.value) });
                    var INT_newsletter = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036571']:checked").val());
                    var terms = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036543']:checked").val());
                }else if(variationID == 12994){
                    var sess_bef = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036545']:checked").val());
                    var treat_bef = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036546']:checked").val());
                    var said_bef = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036547']:checked").val());
                    var interest_in = [];
                    jQuery(".available_dates_times_step_3 input[name='6036549[]']:checked").map(function(i,v){ interest_in.push(v.value) });
                    var made_you_book = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036551']").val());
                    var find_abt_us = jQuery.trim(jQuery(".available_dates_times_step_3 select[name='6036550']").val());
                    var newsletter = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6036576']:checked").val());
                    var terms_15_min = jQuery.trim(jQuery(".available_dates_times_step_3 input[name='6342311']:checked").val());
                }
                if((full_name == "") || (email == "") || (!emailReg.test(String(email).toLowerCase())) || (confirm_email == "") || (!emailReg.test(String(confirm_email).toLowerCase())) || (terms == "") || (sess_bef == "")|| (treat_bef == "") || (said_bef == "") || (interest_in == "") || (made_you_book == "") || (find_abt_us == "") || (newsletter == "") || (LOA_sess_bef == "") || (level == "") || (LOA_pro == "") || (influences == "") || (influences_add == "") || (focus == "") || (achieve == "") || (find_us == "") || (LOA_newsletter == "") || (INT_sess_bef == "") || (predictive == "") || (empower == "") || (concern == "") || (INT_hear == "") || (INT_newsletter == "") || (terms_15_min == "") || (user_phone == '') || (!intRegex.test(user_phone))){
                    if(full_name == ""){
                        jQuery(".available_dates_times_step_3 input[name='full_name']").css('border-color', 'red');
                        jQuery(".available_dates_times_step_3 span[data-error='full_name']").text("Full Name is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                    }
                    if(email == ""){
                        jQuery(".available_dates_times_step_3 input[name='email']").css('border-color', 'red');
                        jQuery(".available_dates_times_step_3 span[data-error='email']").text("Email is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                    }else if(!emailReg.test(String(email).toLowerCase())){
                        jQuery(".available_dates_times_step_3 input[name='email']").css('border-color', 'red');
                        jQuery(".available_dates_times_step_3 span[data-error='email']").text("Wrong Email Format.").removeClass('_hide').addClass('_show').css('color', 'red');
                    }
                    if(confirm_email == ""){
                        jQuery(".available_dates_times_step_3 input[name='confirm_email']").css('border-color', 'red');
                        jQuery(".available_dates_times_step_3 span[data-error='confirm_email']").text("Confirm your email").removeClass('_hide').addClass('_show').css('color', 'red');
                    }else if(!emailReg.test(String(email).toLowerCase())){
                        jQuery(".available_dates_times_step_3 input[name='confirm_email']").css('border-color', 'red');
                        jQuery(".available_dates_times_step_3 span[data-error='confirm_email']").text("Wrong Email Format.").removeClass('_hide').addClass('_show').css('color', 'red');
                    } else if(email != confirm_email){
                        jQuery(".available_dates_times_step_3 input[name='confirm_email']").css('border-color', 'red');
                        jQuery(".available_dates_times_step_3 span[data-error='confirm_email']").text("Email do not match!").removeClass('_hide').addClass('_show').css('color', 'red');
                    }
                    if(user_phone == ""){
                        jQuery(".available_dates_times_step_3 input[name='user_phone']").css('border-color', 'red');
                        jQuery(".available_dates_times_step_3 span[data-error='user_phone']").text("Phone is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                    } else if((user_phone.length < 6) || (!intRegex.test(user_phone))){
                        jQuery(".available_dates_times_step_3 input[name='user_phone']").css('border-color', 'red');
                        jQuery(".available_dates_times_step_3 span[data-error='user_phone']").text("Wrong Phone Format.").removeClass('_hide').addClass('_show').css('color', 'red');
                    }
                    // if(skype_facetime == ""){
                    //     jQuery(".available_dates_times_step_3 input[name='skype_facetime']").css('border-color', 'red');
                    //     jQuery(".available_dates_times_step_3 span[data-error='skype_facetime']").text("Skype or FaceTime ID is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                    // }
                    if(terms == ""){
                        jQuery(".available_dates_times_step_3 input[name='6036543']").css('border-color', 'red');
                        jQuery(".available_dates_times_step_3 span[data-error='6036543']").text("Kindly accept our terms & conditions").removeClass('_hide').addClass('_show').css('color', 'red');
                    }
                    if((variationID == 21019) || (variationID == 13047) || (variationID == 20615)){
                        if(sess_bef == ""){
                            jQuery(".available_dates_times_step_3 input[name='6036545']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036545']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }
                        if(interest_in.length == 0){
                            jQuery(".available_dates_times_step_3 input[name='6036549']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036549']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }
                        if(made_you_book == ""){
                            jQuery(".available_dates_times_step_3 input[name='6036551']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036551']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }
                        if(find_abt_us == ""){
                            jQuery(".available_dates_times_step_3 select[name='6036550']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036550']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }
                        if(said_bef == ""){
                            jQuery(".available_dates_times_step_3 input[name='6036547']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036547']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }
                        if(treat_bef == ""){
                            jQuery(".available_dates_times_step_3 input[name='6036546']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036546']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }
                        if(newsletter == ""){
                            jQuery(".available_dates_times_step_3 input[name='6036576']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036576']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }
                    } else if(variationID == 13043){
                        if(LOA_sess_bef == ""){
                            jQuery(".available_dates_times_step_3 input[name='6036552']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036552']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }if(level.length == 0){
                            jQuery(".available_dates_times_step_3 input[name='6036553']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036553']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }if(LOA_pro == ""){
                            jQuery(".available_dates_times_step_3 input[name='6036554']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036554']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }if(influences.length == 0){
                            jQuery(".available_dates_times_step_3 input[name='6036555']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036555']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }if(influences_add == ""){
                            jQuery(".available_dates_times_step_3 input[name='6036561']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036561']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }if(focus.length == 0){
                            jQuery(".available_dates_times_step_3 input[name='6036562']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036562']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }if(achieve == ""){
                            jQuery(".available_dates_times_step_3 input[name='6036563']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036563']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }if(find_us.length == 0){
                            jQuery(".available_dates_times_step_3 input[name='6036578']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036578']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }if(LOA_newsletter == ""){
                            jQuery(".available_dates_times_step_3 input[name='6036577']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036577']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }
                    } else if((variationID == 20608) || (variationID == 20645)){
                        if(INT_sess_bef == ""){
                            jQuery(".available_dates_times_step_3 input[name='6036564']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036564']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }if(predictive == ""){
                            jQuery(".available_dates_times_step_3 input[name='6036572']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036572']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }if(empower == ""){
                            jQuery(".available_dates_times_step_3 input[name='6036573']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036573']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }if(concern.length == 0){
                            jQuery(".available_dates_times_step_3 input[name='6036569']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036569']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }if(INT_hear.length == 0){
                            jQuery(".available_dates_times_step_3 input[name='6036579']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036579']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }if(INT_newsletter == ""){
                            jQuery(".available_dates_times_step_3 input[name='6036571']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036571']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }
                    }else if(variationID == 12994){
                        if(sess_bef == ""){
                            jQuery(".available_dates_times_step_3 input[name='6036545']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036545']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }
                        if(interest_in.length == 0){
                            jQuery(".available_dates_times_step_3 input[name='6036549']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036549']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }
                        if(made_you_book == ""){
                            jQuery(".available_dates_times_step_3 input[name='6036551']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036551']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }
                        if(find_abt_us == ""){
                            jQuery(".available_dates_times_step_3 select[name='6036550']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036550']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }
                        if(said_bef == ""){
                            jQuery(".available_dates_times_step_3 input[name='6036547']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036547']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }
                        if(treat_bef == ""){
                            jQuery(".available_dates_times_step_3 input[name='6036546']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036546']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }
                        if(newsletter == ""){
                            jQuery(".available_dates_times_step_3 input[name='6036576']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6036576']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }
                        if(terms_15_min == ""){
                            jQuery(".available_dates_times_step_3 input[name='6342311']").css('border-color', 'red');
                            jQuery(".available_dates_times_step_3 span[data-error='6342311']").text("This field is Required.").removeClass('_hide').addClass('_show').css('color', 'red');
                        }
                    }
                status = false;
                return false;
                }
                sessionStorage.avail_dates_times_full_name = "";
                sessionStorage.avail_dates_times_full_name = full_name;
                sessionStorage.avail_dates_times_email = "";
                sessionStorage.avail_dates_times_email = email;
                sessionStorage.avail_dates_times_skype_facetime = "";
                sessionStorage.avail_dates_times_skype_facetime = skype_facetime;
                sessionStorage.avail_dates_times_productID = "";
                sessionStorage.avail_dates_times_productID = productID;
                sessionStorage.avail_dates_times_variationID = "";
                sessionStorage.avail_dates_times_variationID = variationID;
                sessionStorage.avail_dates_times_user_phone = "";
                sessionStorage.avail_dates_times_user_phone = user_phone;
                var data = {
                    'action': 'insert_acuity_session',
                    'full_name': full_name,
                    'email': email,
                    'date': sessionStorage.avail_dates_times_date,
                    'date_orig': sessionStorage.avail_dates_times_date_orig,
                    'time': sessionStorage.avail_dates_times_time,
                    'skype_facetime': sessionStorage.avail_dates_times_skype_facetime,
                    'user_phone': sessionStorage.avail_dates_times_user_phone,
                    'timezone': sessionStorage.avail_dates_times_timezone,
                    'productID': productID,
                    'variationID': variationID,
                    'sess_bef': sess_bef,
                    'interest_in': interest_in,
                    'made_you_book': made_you_book,
                    'find_abt_us': find_abt_us,
                    'said_bef': said_bef,
                    'treat_bef': treat_bef,
                    'newsletter': newsletter,
                    'LOA_sess_bef': LOA_sess_bef,
                    'level': level,
                    'LOA_pro': LOA_pro,
                    'influences': influences,
                    'influences_add': influences_add,
                    'focus': focus,
                    'achieve': achieve,
                    'find_us': find_us,
                    'LOA_newsletter': LOA_newsletter,
                    'INT_sess_bef': INT_sess_bef,
                    'predictive': predictive,
                    'empower': empower,
                    'concern': concern,
                    'INT_hear': INT_hear,
                    'INT_newsletter': INT_newsletter,
                };
                console.log(data);
                jQuery.ajax({
                    url: "/wp-admin/admin-ajax.php",
                    type: "POST",
                    data : data,
                    beforeSend: function(){
                        jQuery('.mloaderwrap').remove();
                        jQuery('html').append('<div class="mloaderwrap"><div class="mloader"><\/div><\/div>');
                    }, success: function(res){
                        jQuery('.add-to-cart-button').trigger('click');
                        setTimeout(() => {
                            jQuery('.mloaderwrap').remove();
                            closeModal();
                            window.location.href = "/cart/";
                        }, 250);
                    }, error: function(err){
                        console.log(err)
                    }
                });
            });
            jQuery('body').on('click', '.select_variation', function(e){
                console.log('yoyo');
                var variation_id = jQuery('.select_variation:checked').val();
                console.log(variation_id);
                var data = {
                    'action': 'check_availablity',
                    'variation_id': variation_id
                };
                jQuery.ajax({
                    url: "/wp-admin/admin-ajax.php",
                    type: "POST",
                    data : data,
                    beforeSend: function(){
                        jQuery('.mloaderwrap').remove();
                        jQuery('html').append('<div class="mloaderwrap"><div class="mloader"><\/div><\/div>');
                    },
                    success: function(res){
                        jQuery('.mloaderwrap').remove();
                        jQuery('#day_available_list').html(res);
                        jQuery('.available_dates_times_step').removeClass("_show").addClass("_hide");
                        jQuery('.available_dates_times_step[data-step="1"]').removeClass("_hide").addClass("_show");
                        jQuery('.available_dates_times_div_modal').removeClass("_hide").addClass("_show");
                        jQuery('.add-to-cart-button').addClass('_hide').removeClass('_show');
                    },
                });
            });

            jQuery('body').on('click', '.available_dates_times_div_modal .close', function(e){
                closeModal();
            });

            jQuery('body').on('change', '.available_dates_times_div_modal #timezone, .available_dates_times_div_modal #select_month', function(e){
                var _this = this;
                sessionStorage.avail_dates_times_timezone = jQuery(_this).val();
                var data = {
                    'action': 'check_day_availablity',
                    'timezone': jQuery("select#timezone option").filter(":selected").val(),
                    'select_month': jQuery("select#select_month option").filter(":selected").val(),
                    'variation_id': jQuery('.select_variation:checked').val()
                };

                jQuery.ajax({
                    url: "/wp-admin/admin-ajax.php",
                    type: "POST",
                    data : data,
                    beforeSend: function(){
                        jQuery('.mloaderwrap').remove();
                        jQuery('html').append('<div class="mloaderwrap"><div class="mloader"><\/div><\/div>');
                    },
                    success: function(res){
                        jQuery('.mloaderwrap').remove();
                        jQuery('#day_available_list').html(res);
                    },
                });
            });

            jQuery('body').on('click', '.available_dates_times_div_modal .back', function(e){
                var cStep = jQuery('.available_dates_times_div').children('.available_dates_times_step:visible').data('step');
                var _this = this;
                jQuery('.date_sel').addClass('_hide').removeClass('_show');
                jQuery('.time_sel').addClass('_hide').removeClass('_show');
                if(cStep == 2)
                    jQuery(_this).addClass('_hide').removeClass('_show');
                else if(cStep == 1)
                    return false;
                var pStep = parseInt(cStep) - 1;
                if(jQuery('.available_dates_times_step[data-step="'+pStep+'"]').length > 0){
                    jQuery('.available_dates_times_step').removeClass("_show").addClass("_hide");
                    jQuery('.available_dates_times_step[data-step="'+pStep+'"]').removeClass("_hide").addClass("_show");
                }
            });

            jQuery('body').on('click', '.time-button', function(e){
                e.preventDefault();
                e.stopPropagation();
                var me = this;
                if(jQuery(me).parents('.available_dates_times_step').length > 0){
                    jQuery(me).parents('.available_dates_times_step').find('.confirm-button').removeClass("_show_inline").removeClass('width50').removeClass('ml5').addClass("_hide");
                    jQuery(me).parents('.available_dates_times_step').find('.time-button').removeClass("width50");
                    jQuery(me).parent().find('.confirm-button').removeClass("_hide").addClass("_show_inline").addClass("width50").addClass('ml5');
                    jQuery(me).addClass("width50");
                }
            });

            window.onclick = function(event) {
                if (event.target == document.getElementById('available_dates_times_div_id')) {
                    closeModal();
                }
            }

            function closeModal(){
                jQuery('.available_dates_times_div_modal').removeClass("_show").addClass("_hide");
            }
        </script>
    <?php
}
add_shortcode('et_calendar','_et_calendar');

function get_appintment_type_id($_variation_id){
    if($_variation_id == "21019"){
        $_message = "90 Minutes Session";
        $_appintment_type_id = 9176445;
    }else if($_variation_id == "17082"){
        $_appintment_type_id = 9233817;
        $_message = "60 Minutes Session";
    }else if($_variation_id == "17083"){
        $_appintment_type_id = 9233820;
        $_message = "45 Minutes Session";
    }else if($_variation_id == "17084"){
        $_appintment_type_id = 9233821;
        $_message = "30 Minutes Session";
    }else if($_variation_id == "12994"){
        $_appintment_type_id = 10090684;
        $_message = "Initial Consultation (15 minutes)";
    }else if($_variation_id == "13043"){
        $_appintment_type_id = 9233823;
        $_message = "LOA 90 Minutes Session";
    }else if($_variation_id == "13042"){
        $_appintment_type_id = 9233825;
        $_message = "LOA 60 Minutes Session";
    }else if($_variation_id == "13041"){
        $_appintment_type_id = 9233828;
        $_message = "LOA 45 Minutes Session";
    }else if($_variation_id == "13040"){
        $_appintment_type_id = 9233830;
        $_message = "LOA 30 Minutes Session";
    }else if($_variation_id == "13047"){
        $_appintment_type_id = 9623120;
        $_message = "SR 90 Minutes Session";
    }else if($_variation_id == "13046"){
        $_appintment_type_id = 9623086;
        $_message = "SR 60 Minutes Session";
    }else if($_variation_id == "13045"){
        $_appintment_type_id = 9623100;
        $_message = "SR 45 Minutes Session";
    }else if($_variation_id == "13044"){
        $_appintment_type_id = 9623106;
        $_message = "SR 30 Minutes Session";
    }else if($_variation_id == "20608"){
        $_appintment_type_id = 9712540;
        $_message = "IN 50 Minutes Session";
    }else if($_variation_id == "20609"){
        $_appintment_type_id = 9233837;
        $_message = "IN 45 Minutes Session";
    }else if($_variation_id == "20645"){
        $_appintment_type_id = 9233839;
        $_message = "YAR 50 Minutes Session";
    }else if($_variation_id == "20646"){
        $_appintment_type_id = 9755272;
        $_message = "YAR 45 Minutes Session";
    }else if($_variation_id == "20615"){
        $_appintment_type_id = 9623067;
        $_message = "CB 45 Minutes Session";
    }else if($_variation_id == "20616"){
        $_appintment_type_id = 9930958;
        $_message = "CB 40 Minutes Session";
    }
    return array('appintment_type_id'=>$_appintment_type_id,'message'=>$_message);
}

function check_day_availablity(){
    $geo_detail = get_currency_code();
    $userID = '17221077';
    $key = 'a17048f3e9a79566e610bac0e93e4696';
    $curr_yar = date('Y');
    $user_timezone = $_POST['timezone'];
    $user_select_month = $_POST['select_month'];
    $cur_month = date('m');
    if($cur_month == 12 && $user_select_month == 1){
        $curr_yar = date('Y', strtotime('+1 year'));
    }
    $pro_variation_id = $_POST['variation_id'];

    $_message = get_appintment_type_id($pro_variation_id)['message'];
    $_appintment_type_id = get_appintment_type_id($pro_variation_id)['appintment_type_id'];

    $url = 'https://acuityscheduling.com/api/v1/availability/dates?appointmentTypeID='.$_appintment_type_id.'&month='.$curr_yar.'-'.$user_select_month.'&timezone='.$user_timezone;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, "$userID:$key");
    $result = curl_exec($ch);
    curl_close($ch);

    $datas = json_decode($result, true);

    if(empty($datas)){
        echo 'No Time available in selected date, Kindly check with different date';
    } else {
        foreach($datas as $k=>$data){
            echo'<div class="date_avail date_avail_'.$k.' available" data-find="date_avail_'.$k.'" data-val="'.date("Y-m-d", strtotime($data['date'])).'">
                    <div class="day js-show-picker">
                        <div>
                            <strong class="shorthand mobile_show">'.date("D", strtotime($data['date'])).'</strong>
                            <strong class="full desktop_show">'.date("l", strtotime($data['date'])).'</strong>
                        </div>
                        <div>
                            <div class="muted shorthand mobile_show">'.date("M j", strtotime($data['date'])).'</div>
                            <div class="full muted desktop_show">'.date("F j, Y", strtotime($data['date'])).'</div>
                        </div>
                        <i class="fa fa-arrow-circle-o-right"></i>
                    </div>
                </div>';
        }
    }
    die();
}
add_action('wp_ajax_nopriv_check_day_availablity', 'check_day_availablity');
add_action('wp_ajax_check_day_availablity', 'check_day_availablity');

function get_intake_form(){
    $_variation_id = $_POST['variation_id'];

    $userID = '17221077';
    $key = 'a17048f3e9a79566e610bac0e93e4696';

    $url = 'https://acuityscheduling.com/api/v1/forms';

    $_message = get_appintment_type_id($_variation_id)['message'];
    $_appintment_type_id = get_appintment_type_id($_variation_id)['appintment_type_id'];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, "$userID:$key");
    $result = curl_exec($ch);
    curl_close($ch);

    $datas = json_decode($result, true);
    foreach($datas as $k=>$data){
        foreach($data['appointmentTypeIDs'] as $key=>$appointment_id){
            if($appointment_id == $_appintment_type_id){ ?>
                <h2><?php echo $data['name'];?></h2>
                <p><?php echo $data['description']; ?></p>
                <?php foreach($data['fields'] as $fields ){ ?>
                    <div class="field js-input-container mbm 90ml">
                        <?php if($fields['type'] == 'checkbox'):?>
                        <label>
                            <span class="input_checkbox">
                                <input class="js-input text" type="checkbox" name="<?php echo $fields['id'];?>" value="1" required="">
                            </span>
                            <?php echo $fields['name'];?>
                            <?php if($fields['required'] == 1):?>
                                <span class="_red_color">*</span>
                            <?php endif; ?>
                        </label>
                        <?php else: ?>
                        <label>
                            <?php echo $fields['name'];?>
                            <?php if($fields['required'] == 1):?>
                                <span class="_red_color">*</span>
                            <?php endif; ?>
                        </label>
                        <?php if($fields['type'] == 'yesno'):?>
                            <span class="input_checkbox">
                                <input class="js-input text" type="radio" name="<?php echo $fields['id'];?>" value="1" required="">Yes
                            </span>
                            <span class="input_checkbox">
                                <input class="js-input text" type="radio" name="<?php echo $fields['id'];?>" value="0" required="">No
                            </span>
                        <?php endif; ?>
                        <?php if($fields['type'] == 'checkboxlist'):?>
                            <?php foreach($fields['options'] as $options):?>
                                <span class="input_checkbox">
                                    <input type="checkbox" name="<?php echo $fields['id'];?>[]" value="<?php echo $options; ?>"> <?php echo $options; ?>
                                </span>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if($fields['type'] == 'textbox'):?>
                            <span class="input_checkbox">
                                <input class="js-input text" type="text" name="<?php echo $fields['id'];?>">
                            </span>
                        <?php endif; ?>
                        <?php if($fields['type'] == 'dropdown'):?>
                            <select name="<?php echo $fields['id'];?>" class="form-control inline-field">
                                <option selected disabled > </option>
                                <?php foreach($fields['options'] as $options):?>
                                    <option value="<?php echo $options; ?>"><?php echo $options; ?></option>
                                <?php endforeach; ?>
                            </select>
                        <?php endif; ?>
                        <?php endif; ?>
                        <span data-error="<?php echo $fields['id'];?>"></span>
                    </div>
            <?php }
            }
        }
    }
    die();
}
add_action('wp_ajax_nopriv_get_intake_form', 'get_intake_form');
add_action('wp_ajax_get_intake_form', 'get_intake_form');

function check_availablity(){
    $_variation_id = $_POST['variation_id'];
    $check_date = $_POST['appointment_date'];
    $newDate = date("Y-m-d", strtotime($check_date));
    $geo_detail = get_currency_code();

    $_message = get_appintment_type_id($_variation_id)['message'];
    $_appintment_type_id = get_appintment_type_id($_variation_id)['appintment_type_id'];

    $userID = '17221077';
    $key = 'a17048f3e9a79566e610bac0e93e4696';
    $curr_mon = date('Y-m');

    $user_timezone = $geo_detail['geoplugin_timezone'];
    $url = 'https://acuityscheduling.com/api/v1/availability/dates?appointmentTypeID='.$_appintment_type_id.'&month='.$curr_mon.'&timezone='.$user_timezone;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, "$userID:$key");
    $result = curl_exec($ch);
    curl_close($ch);

    $datas = json_decode($result, true);

    if(empty($datas)){
        echo 'No Time available in selected date, Kindly check with different date';
    } else {
        foreach($datas as $k=>$data){
        echo'<div class="date_avail date_avail_'.$k.' available" data-find="date_avail_'.$k.'" data-val="'.date("Y-m-d", strtotime($data['date'])).'">
                <div class="day js-show-picker">
                    <div>
                        <strong class="shorthand mobile_show">'.date("D", strtotime($data['date'])).'</strong>
                        <strong class="full desktop_show">'.date("l", strtotime($data['date'])).'</strong>
                    </div>
                    <div>
                        <div class="muted shorthand mobile_show">'.date("M j", strtotime($data['date'])).'</div>
                        <div class="full muted desktop_show">'.date("F j, Y", strtotime($data['date'])).'</div>
                    </div>
                    <i class="fa fa-arrow-circle-o-right"></i>
                </div>
            </div>';
        }
    }
    die();
}
add_action('wp_ajax_nopriv_check_availablity', 'check_availablity');
add_action('wp_ajax_check_availablity', 'check_availablity');

function check_time_availablity(){
    $check_date = $_POST['check_time_available'];
    $_variation_id = $_POST['variation_id'];
    $userID = '17221077';
    $key = 'a17048f3e9a79566e610bac0e93e4696';

    $_message = get_appintment_type_id($_variation_id)['message'];
    $_appintment_type_id = get_appintment_type_id($_variation_id)['appintment_type_id'];

    $geo_detail = get_currency_code();

    $user_timezone = $geo_detail['geoplugin_timezone'];
    if(trim($_POST['timezone']) != "")
        $user_timezone = $_POST['timezone'];

    $url = 'https://acuityscheduling.com/api/v1/availability/times?appointmentTypeID='.$_appintment_type_id.'&calendarID=2777379&date='.$check_date.'&timezone='.$user_timezone;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, "$userID:$key");
    $result = curl_exec($ch);
    curl_close($ch);

    $datas = json_decode($result, true);
    date_default_timezone_set($user_timezone);

    if(!empty($datas)){
        foreach($datas as $k => $data){
            foreach($data as $key_time => $time_slots){
                if($time_slots != '1'){
                    $temp_time = $time_slots;
                    echo
                    '<div class="time_avail time_avail_'.$k.'" data-dependent="date_avail_'.$k.'">
                        <div class="time_avail_inner available time_avail_inner_'.$key_time.'" data-time="'.$temp_time.'" data-orig-time="'.date("H:i:s", strtotime($temp_time)).'">
                            <button class="button js-select time-button ">
                                '.date("h:i a", strtotime($temp_time)).'
                                <div class="status _hide">
                                    available
                                </div>
                            </button>
                            <button class="base button confirm-button js-confirm _hide" data-time="'.$temp_time.'" data-val="'.date("H:i:s", strtotime($temp_time)).'">Confirm</button>
                        </div>
                    </div>';
                }
            }
        }
    } else {
        echo
        '<div>
            <p>Sorry, there are no session times available for the day you selected. Please try another day.</p>
        </div>';
    }
    die();
}
add_action('wp_ajax_nopriv_check_time_availablity', 'check_time_availablity');
add_action('wp_ajax_check_time_availablity', 'check_time_availablity');

add_action( 'woocommerce_remove_cart_item', 'update_acuity_session', 10, 2 );
function update_acuity_session($cart_item_key, $cart){
    session_start();
    $global_acuity_products = array('12994', '17082', '17083', '17084','21019','13043','13042','13041','13040','13047','13046','13045','13044','20608','20609','20645','20646','20615','20616');
    $product_id = $cart->cart_contents[$cart_item_key]['product_id'];
    $variation_id = $cart->cart_contents[$cart_item_key]['variation_id'];
    if(in_array($variation_id, $global_acuity_products)){
        unset($_SESSION['acuity'][$product_id][$variation_id]);
    }
}

function insert_acuity_session(){
    session_start();
    $_SESSION['acuity'][$_REQUEST['productID']][$_REQUEST['variationID']] = array(
        'full_name' => $_REQUEST['full_name'],
        'email' => $_REQUEST['email'],
        'date' => $_REQUEST['date'],
        'time' => $_REQUEST['time'],
        'timezone' => $_REQUEST['timezone'],
        'date_orig' => $_REQUEST['date_orig'],
        'skype_facetime' => $_REQUEST['skype_facetime'],
        'user_phone' => $_REQUEST['user_phone'],
        'sess_bef' => $_REQUEST['sess_bef'],
        'interest_in' => $_REQUEST['interest_in'],
        'made_you_book' => $_REQUEST['made_you_book'],
        'find_abt_us' => $_REQUEST['find_abt_us'],
        'said_bef' => $_REQUEST['said_bef'],
        'treat_bef' => $_REQUEST['treat_bef'],
        'newsletter' => $_REQUEST['newsletter'],
        'LOA_sess_bef' => $_REQUEST['LOA_sess_bef'],
        'level' => $_REQUEST['level'],
        'LOA_pro' => $_REQUEST['LOA_pro'],
        'influences' => $_REQUEST['influences'],
        'influences_add' => $_REQUEST['influences_add'],
        'focus' => $_REQUEST['focus'],
        'achieve' => $_REQUEST['achieve'],
        'find_us' => $_REQUEST['find_us'],
        'LOA_newsletter' => $_REQUEST['LOA_newsletter'],
        'INT_sess_bef' => $_REQUEST['INT_sess_bef'],
        'predictive' => $_REQUEST['predictive'],
        'empower' => $_REQUEST['empower'],
        'concern' => $_REQUEST['concern'],
        'INT_hear' => $_REQUEST['INT_hear'],
        'INT_newsletter' => $_REQUEST['INT_newsletter']
    );
    write_log($_SESSION['acuity'][$_REQUEST['productID']][$_REQUEST['variationID']]);
    die();
}

add_action('wp_ajax_nopriv_insert_acuity_session', 'insert_acuity_session');
add_action('wp_ajax_insert_acuity_session', 'insert_acuity_session');

function acuity_scheduling($order_id){
    session_start();
    $global_acuity_products = array('12994', '17082', '17083', '17084','21019','13043','13042','13041','13040','13047','13046','13045','13044','20608','20609','20645','20646','20615','20616');
    $userId = 17221077;
    $apiKey = 'a17048f3e9a79566e610bac0e93e4696';

    $order = wc_get_order( $order_id );
    $order_data = $order->get_data();
    $totalvalue = $order_data['total'];
    $payment_method = $order_data['payment_method'];
    $user = $order->get_user();

    $acuity = new AcuityScheduling(array(
        'userId' => $userId,
        'apiKey' => $apiKey
    ));

	$items = $order->get_items();

    foreach($items as $item => $values) {
        $_product_id = $values->get_product_id();
        $_variation_id = $values->get_variation_id();
		if($_variation_id && isset($_SESSION['acuity'][$_product_id][$_variation_id])){

			$_message = get_appintment_type_id($_variation_id)['message'];
            $_appintment_type_id = get_appintment_type_id($_variation_id)['appintment_type_id'];

			if(in_array($_variation_id, $global_acuity_products)){
				if(isset($_SESSION['acuity'][$_product_id][$_variation_id])){
					$_date = date("Y-m-d", strtotime($_SESSION['acuity'][$_product_id][$_variation_id]['date']));
                    $_date_time = $_SESSION['acuity'][$_product_id][$_variation_id]['date_orig'];
                    $time_zone = $_SESSION['acuity'][$_product_id][$_variation_id]['timezone'];
					$_time = $_SESSION['acuity'][$_product_id][$_variation_id]['time'];
					$skype_facetime = $_SESSION['acuity'][$_product_id][$_variation_id]['skype_facetime'];
					$user_phone = $_SESSION['acuity'][$_product_id][$_variation_id]['user_phone'];
					$_email = $_SESSION['acuity'][$_product_id][$_variation_id]['email'];
					$_full_name = $_SESSION['acuity'][$_product_id][$_variation_id]['full_name'];

					if(($_variation_id == "21019") || ($_variation_id == "13047") || ($_variation_id == "20615")){
                        $fields = array(
                            array("id" => 6036545, "value" => ($_SESSION['acuity'][$_product_id][$_variation_id]['sess_bef'] == 1) ? "Yes" : "No"),
                            array("id" => 6036546, "value" => ($_SESSION['acuity'][$_product_id][$_variation_id]['said_bef'] == 1) ? "Yes" : "No"),
                            array("id" => 6036547, "value" => ($_SESSION['acuity'][$_product_id][$_variation_id]['treat_bef'] == 1) ? "Yes" : "No"),
                            array("id" => 6036549, "value" => implode(', ',$_SESSION['acuity'][$_product_id][$_variation_id]['interest_in'])),
                            array("id" => 6036551, "value" => $_SESSION['acuity'][$_product_id][$_variation_id]['made_you_book']),
                            array("id" => 6036550, "value" => $_SESSION['acuity'][$_product_id][$_variation_id]['find_abt_us']),
                            array("id" => 6036576, "value" => ($_SESSION['acuity'][$_product_id][$_variation_id]['newsletter'] == 1) ? "Yes" : "No"),
                            array("id" => 6036543, "value" => "Yes")
                        );
                    } else if ($_variation_id == "13043"){
                        $fields = array(
                            array("id" => 6036552, "value" => ($_SESSION['acuity'][$_product_id][$_variation_id]['LOA_sess_bef'] == 1) ? "Yes" : "No"),
                            array("id" => 6036553, "value" => implode(', ',$_SESSION['acuity'][$_product_id][$_variation_id]['level'])),
                            array("id" => 6036554, "value" => ($_SESSION['acuity'][$_product_id][$_variation_id]['LOA_pro'] == 1) ? "Yes" : "No"),
                            array("id" => 6036555, "value" => implode(', ',$_SESSION['acuity'][$_product_id][$_variation_id]['influences'])),
                            array("id" => 6036561, "value" => $_SESSION['acuity'][$_product_id][$_variation_id]['influences_add']),
                            array("id" => 6036562, "value" => implode(', ',$_SESSION['acuity'][$_product_id][$_variation_id]['focus'])),
                            array("id" => 6036563, "value" => ($_SESSION['acuity'][$_product_id][$_variation_id]['achieve'] == 1) ? "Yes" : "No"),
                            array("id" => 6036578, "value" => implode(', ',$_SESSION['acuity'][$_product_id][$_variation_id]['find_us'])),
                            array("id" => 6036577, "value" => ($_SESSION['acuity'][$_product_id][$_variation_id]['LOA_newsletter'] == 1) ? "Yes" : "No"),
                            array("id" => 6036543, "value" => "Yes")
                        );
                    } else if (($_variation_id == "20608") || ($_variation_id == "20645")){
                        $fields = array(
                            array("id" => 6036564, "value" => ($_SESSION['acuity'][$_product_id][$_variation_id]['INT_sess_bef'] == 1) ? "Yes" : "No"),
                            array("id" => 6036572, "value" => ($_SESSION['acuity'][$_product_id][$_variation_id]['predictive'] == 1) ? "Yes" : "No"),
                            array("id" => 6036573, "value" => ($_SESSION['acuity'][$_product_id][$_variation_id]['empower'] == 1) ? "Yes" : "No"),
                            array("id" => 6036569, "value" => implode(', ',$_SESSION['acuity'][$_product_id][$_variation_id]['concern'])),
                            array("id" => 6036579, "value" => implode(', ',$_SESSION['acuity'][$_product_id][$_variation_id]['INT_hear'])),
                            array("id" => 6036571, "value" => ($_SESSION['acuity'][$_product_id][$_variation_id]['INT_newsletter'] == 1) ? "Yes" : "No"),
                            array("id" => 6036543, "value" => "Yes")
                        );
                    } else if ($_variation_id == "12994") {
                        $fields = array(
                            array("id" => 6036545, "value" => ($_SESSION['acuity'][$_product_id][$_variation_id]['sess_bef'] == 1) ? "Yes" : "No"),
                            array("id" => 6036546, "value" => ($_SESSION['acuity'][$_product_id][$_variation_id]['said_bef'] == 1) ? "Yes" : "No"),
                            array("id" => 6036547, "value" => ($_SESSION['acuity'][$_product_id][$_variation_id]['treat_bef'] == 1) ? "Yes" : "No"),
                            array("id" => 6036549, "value" => implode(', ',$_SESSION['acuity'][$_product_id][$_variation_id]['interest_in'])),
                            array("id" => 6036551, "value" => $_SESSION['acuity'][$_product_id][$_variation_id]['made_you_book']),
                            array("id" => 6036550, "value" => $_SESSION['acuity'][$_product_id][$_variation_id]['find_abt_us']),
                            array("id" => 6036576, "value" => ($_SESSION['acuity'][$_product_id][$_variation_id]['newsletter'] == 1) ? "Yes" : "No"),
                            array("id" => 6342311, "value" => "Yes")
                        );
                    } else {
                        $fields = array(
                            array("id" => 6036543, "value" => "Yes")
                        );
                    }

					$contact_add_update = array( 'first_name' => $order_data['billing']['first_name'], 'last_name' => $order_data['billing']['last_name'], 'email' => $_email, 'usertype' => 'session_users');

					if(($_SESSION['acuity'][$_product_id][$_variation_id]['newsletter'] == 1) || ($_SESSION['acuity'][$_product_id][$_variation_id]['LOA_newsletter'] == 1)){
                        add_or_update_contact($contact_add_update);
                    }

					$appointment = $acuity->request('/appointments', array(
						'method' => 'POST',
						'data' => array(
							'appointmentTypeID' => $_appintment_type_id,
                            'datetime'          => $_date_time,
                            'timezone'          => $time_zone,
							'firstName'         => $order_data['billing']['first_name'],
							'lastName'          => $order_data['billing']['last_name'],
							'email'             => $_email,
							'phone'             => ($user_phone) ? $user_phone : $order_data['billing']['phone'],
							'fields'            => $fields
						)
                    ));
                    $d = new DateTime($_date_time);
                    $msg = 'FirstName: '.$order_data['billing']['first_name'].'<br>';
                    $msg .= 'LastName: '.$order_data['billing']['last_name'].'<br>';
                    $msg .= 'Phone: '.($user_phone) ? $user_phone : $order_data['billing']['phone'].'<br>';
                    $msg .= '<br>DateTime: '.$d->format( 'd-m-Y' ).' '.$d->format('h:i A').'<br>';
                    $msg .= 'Product: '.$_variation_id;
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
					if(isset($appointment['id'])){
                        acuity_schedule_payment($appointment['id'],$totalvalue,$payment_method);
                        $_SESSION['acuity']['message'][$_variation_id] = ' Your appointment for '.$_message.' has been successfully created on '.$d->format( 'd-m-Y' ).' at '.$d->format('h:i A').'';
                       // mail("info@askantech.com","Acuity Schedule Success ",$msg,$headers);
                        mail("thilak.askan@gmail.com","Acuity Schedule Success ",$msg,$headers);
					}else{
                        $_SESSION['acuity']['message'][$_variation_id] = ' Your appointment for '.$_message.' was not created. Please <a href="/contact-us/">contact us</a></b>';
                        //mail("info@askantech.com","Acuity Schedule Failed ",$msg,$headers);
                        mail("thilak.askan@gmail.com","Acuity Schedule Failed ",$msg,$headers);
					}
					unset($_SESSION['acuity'][$_product_id][$_variation_id]);
				}
			}
		}
    }
}
function acuity_schedule_payment($app_id,$total_value,$payment){
$userID = '17221077';
$key = 'a17048f3e9a79566e610bac0e93e4696';
$url = "https://acuityscheduling.com/api/v1/appointments/".$app_id."/payments";
$acuity = new AcuityScheduling(array(
    'userId' => $userID,
    'apiKey' => $key
    ));
    // Make the update appointment request:
    $appointment = $acuity->request('/appointments/'.$app_id.'/payments', array(
    'method' => 'POST',
    'data' => array(
        'source' => array(
            'type' => 'cash'
        ),
        'amount' => $total_value,
        'notes' => 'ET-Site Payment'
        ),
    ));
}
add_action( 'woocommerce_thankyou', 'add_content_thankyou', 2, 2 );
function add_content_thankyou($order_id) {
    session_start();
    if( ! $order_id ) return;
    $order = wc_get_order( $order_id );
    $note = "";
    if(isset($_SESSION['acuity']['message'])){
        foreach($_SESSION['acuity']['message'] as $message){
            $note = $note.'Thank you for making this purchase! '.$message.' ';
        }
        echo "<p>$note</p>";
        unset($_SESSION['acuity']['message']);
    }
    if($note != ""){
        $note = __($note);
        $order->add_order_note($note);
        $order->save();
    }
}

function wc_phone_field( $fields ) {
    $fields['billing_phone']['required'] = true;
    return $fields;
}
add_filter( 'woocommerce_billing_fields', 'wc_phone_field' );

function remove_item_from_cart() {

    global $wpdb, $woocommerce;

    foreach ($woocommerce->cart->get_cart() as $cart_item_key => $cart_item){

       $prod_id = $cart_item['product_id'];

       $post = $_POST['product_id'];
        if( $prod_id == $post ){
            // Remove product in the cart using  cart_item_key.
            $woocommerce->cart->remove_cart_item($cart_item_key);

        }
    }
}
    add_action('wp_ajax_remove_item_from_cart', 'remove_item_from_cart');
    add_action('wp_ajax_nopriv_remove_item_from_cart', 'remove_item_from_cart');

    add_action( 'woocommerce_thankyou', 'constant_contact_new_letter',  1, 1  );
    function constant_contact_new_letter($order_id){

        $order = new WC_Order( $order_id );
        $user_email = $order->get_billing_email();
        $user_first_name = $order->get_shipping_first_name();
        $user_last_name = $order->get_shipping_first_name();
        $user_user_type = $order->get_billing_email();
        if ( email_exists( $user_email ) ){
            $user = wp_get_current_user();
            $user_meta = get_userdata($user->ID);
            $user_type = $user_meta->roles[0];
            $c_array =  array(  'email' => $user_email,
                            'first_name' => $user_first_name,
                            'last_name' => $user_last_name,
                            'usertype' => $user_type );
        }else{
            $c_array =  array(  'email' => $user_email,
                            'first_name' => $user_first_name,
                            'last_name' => $user_last_name,
                            'usertype' => $user_type );
        }
        add_or_update_contact($c_array);
    }
add_filter('woocommerce_save_account_details_required_fields', 'wc_save_account_details_required_fields' );
function wc_save_account_details_required_fields( $required_fields ){
    unset( $required_fields['account_display_name'] );
    return $required_fields;
}

function display_options($content)
{
    if (is_single() && 'post' == get_post_type()||is_page(22004))
    {
        $afterparastyle="<div style='border:1px solid #ee8b14;background-color: #ee8b14;'></div>";
        $styleshet="</div><div id='automated_msg1'><div style='border:1px solid #ee8b14;background-color:#ee8b14;margin-top: 19px;'></div><div style='text-align:center;font-weight:600;font-size:20px;margin-top: 9px;'>Expand Your Awareness:</div>";
        $post_page_check=get_field('automated_show_message');
        if($post_page_check[0]=='No')
        {
            $content= $content.$styleshet.get_field('automated_custom_text');
            return $content.$afterparastyle.'</div>';
        }else
        {
            $selected_date=get_field('automated_date_select','options');
            $automate_msg_content=get_field('automated_message_content','options');
            if($selected_date[0]=='Show')
            {
                $current_date=date("m/d/Y");
                $current_date = strtotime($current_date);
                $from_date=get_field('automated_message_from_date','options');
                $from_date = strtotime($from_date);
                $to_date=get_field('automated_message_to_date','options');
                $to_date = strtotime($to_date);
                if($from_date<=$current_date&&$to_date>=$current_date)
                {
                    $content = $content.$styleshet.$automate_msg_content;
                    return $content.$afterparastyle.'</div>';

                }else{
                    return $content.$styleshet.$afterparastyle.'</div>';

                }
             }
             else{
                 $content = $content.$styleshet.$automate_msg_content;
                 return $content.$afterparastyle.'</div>';
             }
        }
    }else{
       return $content.$styleshet.$afterparastyle;
    }
}
add_filter('the_content','display_options');
