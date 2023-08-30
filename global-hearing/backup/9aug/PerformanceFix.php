<?php
 
if(!is_admin()) {
    function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
    $src = remove_query_arg( 'ver', $src ); //to avoid removing ver?
    return $src;
    }
    add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
    add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 ); 
    add_filter( 'script_loader_tag', function ( $tag, $handle ) {
    // echo $handle; 
        if ( 'jquery-core' == $handle){ return $tag; }
        if ( 'wpfront-notification-bar' == $handle){ return $tag; } 
        return str_replace( ' src', ' defer="defer" src', $tag );
    }, 10, 2 );
    }
    
    function disable_wp_responsive_images() {
        return 1;
    }
    add_filter('max_srcset_image_width', 'disable_wp_responsive_images');
    
    add_filter( 'wp_calculate_image_srcset_meta', '__return_empty_array' );
    
    function custom_enqueue_styles()
    {
        // wp_register_style('custom-css', site_url() . '/wp-content/uploads/css/custom.css', array(), NULL, true);
        // wp_enqueue_style('custom-css');
    }
    //add_action('wp_head','custom_enqueue_styles');
    
    function map_dequeue_scripts()
    {
         if ( !is_user_logged_in() ) {
        if (is_front_page()) {   
            //  wp_dequeue_script('jquery-core-js'); wp_deregister_script('jquery-core-js');
            //  wp_dequeue_script('jquery-migrate-js'); wp_deregister_script('jquery-migrate-js');
            //  wp_dequeue_script('jquery-blockui-js'); wp_deregister_script('jquery-blockui-js');
            //  wp_dequeue_script('jquery-migrate-js'); wp_deregister_script('jquery-migrate-js');
            //  wp_dequeue_script('hoverintent-js-js'); wp_deregister_script('hoverintent-js-js');
            //  wp_dequeue_script('admin-bar-jss'); wp_deregister_script('admin-bar-js');
            //  wp_dequeue_script('wpcbn-frontend-js'); wp_deregister_script('wpcbn-frontend-js');
            //  wp_dequeue_script('jquery-ui-core'); wp_deregister_script('jquery-ui-core');
            //  wp_dequeue_script('wp-util'); wp_deregister_script('wp-util');
            //  wp_dequeue_script('wd-cookie-library'); wp_deregister_script('wd-cookie-library');

        }
     }
    }
    
    add_action('wp_print_scripts', 'map_dequeue_scripts', 100);
    add_action( 'wp_print_styles','my_deregister_styles', 1 );
    //add_action( 'wp_enqueue_scripts', 'my_deregister_styles', 9999 );
    add_action( 'wp_head', 'my_deregister_styles', 1 );
    
    function my_deregister_styles()    { 
    if (!is_admin()) {
        if ( !is_user_logged_in() ) {
       if (is_front_page()) {
        
        wp_deregister_style('dashicons-css');
        wp_deregister_style('admin-bar-css');
        // wp_deregister_style('formcraft-common');
        // wp_deregister_style('formcraft-form');
        // wp_deregister_style('swiper');
        // wp_deregister_style('wd-wp-gutenberg');
        // wp_deregister_style('wd-base-deprecated');
        // wp_deregister_style('wd-header-base');
        // wp_deregister_style('wd-mod-tools');
        // wp_deregister_style('wd-header-elements-base');
        // wp_deregister_style('wd-text-block');
        // wp_deregister_style('wd-widget-nav-mega-menu');
        // wp_deregister_style('wd-mod-nav-vertical');
        // wp_deregister_style('wd-header-search');
        // wp_deregister_style('wd-info-box');
        // wp_deregister_style('wd-photoswipe');
        // wp_deregister_style('wd-image-gallery');
        // wp_deregister_style('wd-mod-star-rating');
        // wp_deregister_style('wd-testimonial-old');
        // wp_deregister_style('wd-blog-base');
        // wp_deregister_style('wd-blog-loop-base-old');
        // wp_deregister_style('wd-blog-loop-design-mask');
        // wp_deregister_style('wd-widget-collapse');
        // wp_deregister_style('wd-widget-collapse');

        }
    }
    }
    }
    //Inline Footer
    function inline_footer(){ ?>
      <!-- Allpage -->
      <script type="text/javascript">
              let amframe = document.querySelectorAll('.iframelazy');
              window.onload = function(){
              for(let i=0; i<amframe.length;i++){
                  let amsrc = amframe[i];
                  let amdata = amsrc.getAttribute("data-src");
                  let datanew = amsrc.getAttribute("lazy");
                  if(datanew === null){
                  datanew = 1500;
                  }
                  setTimeout(function(){
                  amframe[i].setAttribute("src",amdata);
                  console.info(datanew + "ms Lazyloaded " + amframe[i].src);
                  }, datanew);
              }
              }
          </script>
        
            </script>
            <?php if ( !is_user_logged_in() ) {  
            if (is_front_page()) { ?>
               <?php   } } ?>
    <?php }
    add_action('wp_footer', 'inline_footer', 100);
    //Inline Footer
    //Inline Header
    function inline_header(){ ?>
      <!-- Allpage -->
      <script type="text/javascript">
                  function _extends(){return(_extends=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var o in n)Object.prototype.hasOwnProperty.call(n,o)&&(t[o]=n[o])}return t}).apply(this,arguments)}function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}!function(t,e){"object"===("undefined"==typeof exports?"undefined":_typeof(exports))&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):t.LazyLoad=e()}(this,function(){"use strict";var t="undefined"!=typeof window,e=t&&!("onscroll"in window)||"undefined"!=typeof navigator&&/(gle|ing|ro)bot|crawl|spider/i.test(navigator.userAgent),n=t&&"IntersectionObserver"in window,o=t&&"classList"in document.createElement("p"),r={elements_selector:"img",container:e||t?document:null,threshold:300,thresholds:null,data_src:"src",data_srcset:"srcset",data_sizes:"sizes",data_bg:"bg",class_loading:"loading",class_loaded:"loaded",class_error:"error",load_delay:0,auto_unobserve:!0,callback_enter:null,callback_exit:null,callback_reveal:null,callback_loaded:null,callback_error:null,callback_finish:null,use_native:!1},a=function(t,e){var n,o=new t(e);try{n=new CustomEvent("LazyLoad::Initialized",{detail:{instance:o}})}catch(t){(n=document.createEvent("CustomEvent")).initCustomEvent("LazyLoad::Initialized",!1,!1,{instance:o})}window.dispatchEvent(n)};var i=function(t,e){return t.getAttribute("data-"+e)},s=function(t,e,n){var o="data-"+e;null!==n?t.setAttribute(o,n):t.removeAttribute(o)},c=function(t){return"true"===i(t,"was-processed")},l=function(t,e){return s(t,"ll-timeout",e)},u=function(t){return i(t,"ll-timeout")},d=function(t,e){t&&t(e)},f=function(t,e){t._loadingCount+=e,0===t._elements.length&&0===t._loadingCount&&d(t._settings.callback_finish)},_=function(t){for(var e,n=[],o=0;e=t.children[o];o+=1)"SOURCE"===e.tagName&&n.push(e);return n},v=function(t,e,n){n&&t.setAttribute(e,n)},g=function(t,e){v(t,"sizes",i(t,e.data_sizes)),v(t,"srcset",i(t,e.data_srcset)),v(t,"src",i(t,e.data_src))},m={IMG:function(t,e){var n=t.parentNode;n&&"PICTURE"===n.tagName&&_(n).forEach(function(t){g(t,e)});g(t,e)},IFRAME:function(t,e){v(t,"src",i(t,e.data_src))},VIDEO:function(t,e){_(t).forEach(function(t){v(t,"src",i(t,e.data_src))}),v(t,"src",i(t,e.data_src)),t.load()}},b=function(t,e){var n,o,r=e._settings,a=t.tagName,s=m[a];if(s)return s(t,r),f(e,1),void(e._elements=(n=e._elements,o=t,n.filter(function(t){return t!==o})));!function(t,e){var n=i(t,e.data_src),o=i(t,e.data_bg);n&&(t.style.backgroundImage='url("'.concat(n,'")')),o&&(t.style.backgroundImage=o)}(t,r)},h=function(t,e){o?t.classList.add(e):t.className+=(t.className?" ":"")+e},p=function(t,e,n){t.addEventListener(e,n)},y=function(t,e,n){t.removeEventListener(e,n)},E=function(t,e,n){y(t,"load",e),y(t,"loadeddata",e),y(t,"error",n)},w=function(t,e,n){var r=n._settings,a=e?r.class_loaded:r.class_error,i=e?r.callback_loaded:r.callback_error,s=t.target;!function(t,e){o?t.classList.remove(e):t.className=t.className.replace(new RegExp("(^|\\s+)"+e+"(\\s+|$)")," ").replace(/^\s+/,"").replace(/\s+$/,"")}(s,r.class_loading),h(s,a),d(i,s),f(n,-1)},I=function(t,e){var n=function n(r){w(r,!0,e),E(t,n,o)},o=function o(r){w(r,!1,e),E(t,n,o)};!function(t,e,n){p(t,"load",e),p(t,"loadeddata",e),p(t,"error",n)}(t,n,o)},k=["IMG","IFRAME","VIDEO"],A=function(t,e){var n=e._observer;z(t,e),n&&e._settings.auto_unobserve&&n.unobserve(t)},L=function(t){var e=u(t);e&&(clearTimeout(e),l(t,null))},x=function(t,e){var n=e._settings.load_delay,o=u(t);o||(o=setTimeout(function(){A(t,e),L(t)},n),l(t,o))},z=function(t,e,n){var o=e._settings;!n&&c(t)||(k.indexOf(t.tagName)>-1&&(I(t,e),h(t,o.class_loading)),b(t,e),function(t){s(t,"was-processed","true")}(t),d(o.callback_reveal,t),d(o.callback_set,t))},O=function(t){return!!n&&(t._observer=new IntersectionObserver(function(e){e.forEach(function(e){return function(t){return t.isIntersecting||t.intersectionRatio>0}(e)?function(t,e){var n=e._settings;d(n.callback_enter,t),n.load_delay?x(t,e):A(t,e)}(e.target,t):function(t,e){var n=e._settings;d(n.callback_exit,t),n.load_delay&&L(t)}(e.target,t)})},{root:(e=t._settings).container===document?null:e.container,rootMargin:e.thresholds||e.threshold+"px"}),!0);var e},N=["IMG","IFRAME"],C=function(t,e){return function(t){return t.filter(function(t){return!c(t)})}((n=t||function(t){return t.container.querySelectorAll(t.elements_selector)}(e),Array.prototype.slice.call(n)));var n},M=function(t,e){this._settings=function(t){return _extends({},r,t)}(t),this._loadingCount=0,O(this),this.update(e)};return M.prototype={update:function(t){var n,o=this,r=this._settings;(this._elements=C(t,r),!e&&this._observer)?(function(t){return t.use_native&&"loading"in HTMLImageElement.prototype}(r)&&((n=this)._elements.forEach(function(t){-1!==N.indexOf(t.tagName)&&(t.setAttribute("loading","lazy"),z(t,n))}),this._elements=C(t,r)),this._elements.forEach(function(t){o._observer.observe(t)})):this.loadAll()},destroy:function(){var t=this;this._observer&&(this._elements.forEach(function(e){t._observer.unobserve(e)}),this._observer=null),this._elements=null,this._settings=null},load:function(t,e){z(t,this,e)},loadAll:function(){var t=this;this._elements.forEach(function(e){A(e,t)})}},t&&function(t,e){if(e)if(e.length)for(var n,o=0;n=e[o];o+=1)a(t,n);else a(t,e)}(M,window.lazyLoadOptions),M});
          </script>
          <?php  if (is_front_page()) { ?>
         
            <?php    } ?>
      <!-- Allpage -->
    <?php }
    add_action('wp_head', 'inline_header', 100);
    //Inline Header
//Inline Header
/**
 * Plugin Name: Lazy Load for Images
 */
//* Quit files
defined( 'ABSPATH' ) || exit;
//* Lazy Load Images plugin class
add_action( 'wp', array( 'Lazy_Load_Images', 'instance' ) );
final class Lazy_Load_Images {
	//* Class for instance
	public static function instance() {
		new self();
	}
	//* Class for constructor
	public function __construct() {
		//* Don't Lazy Load
		if ( is_admin() || is_preview() || is_feed() || ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) || ( defined( 'DOING_CRON' ) && DOING_CRON ) || ( defined( 'DOING_AJAX' ) && DOING_AJAX ) || ( defined( 'XMLRPC_REQUEST' ) && XMLRPC_REQUEST ) ) {
			return;
		}
		//* LLI Hooks
		add_filter( 'the_content', array( __CLASS__, 'lli_images' ), 12 );
		add_filter( 'post_thumbnail_html', array( __CLASS__, 'lli_images' ) );
		//add_action( 'wp_enqueue_scripts', array( __CLASS__, 'lli_effects' ) );
		//add_action( 'wp_footer', array( __CLASS__, 'lli_scripts' ) );
	}
	//* LLI content images for Lazy Loaded
	public static function lli_images( $content ) {
		//* Don't lazy-load if content already loaded
		if ( false !== strpos( $content, 'data-src' ) ) {
			return $content;
		}
		
		//* No lazy images
		if ( strpos( $content, '-image' ) === false ) {
			return $content;
		}
	
	    //* Replace images src to data-src
		return preg_replace_callback( '/(?P<all> (?# ) <img(?P<before>[^>]*) (?# ) ( (?# ) class=["\'](?P<class1>.*?(?:wp-image-|wp-post-image)[^>"\']*)["\'] (?P<between1>[^>]*) src=["\'](?P<src1>[^>"\']*)["\'] | (?# ) src=["\'](?P<src2>[^>"\']*)["\'] (?P<between2>[^>]*) class=["\'](?P<class2>.*?(?:wp-image-|wp-post-image)[^>"\']*)["\'] ) (?P<after>[^>]*) (?# ) (?P<closing>\/?)> (?# ) )/x', array( 'Lazy_Load_Images', 'replace_images' ), $content );
	}
	//* Add lazy class for data-src attribute images
	public static function replace_images( $matches ) {
		
		//* Image Placeholder
		$placeholder_image = 'data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=';
		
		//* Disable lazy load for specific images
		if ( false !== strpos( $matches['all'], 'data-lazy="1"' ) || false !== strpos( $matches['class1'] . $matches['class2'], 'lazy' ) ) {
			return $matches['all'];
		} else {
            return '<img ' . $matches['before']
                   . ' class="' . $matches['class1'] . $matches['class2'] . ' lazy" src="" data-src="' . $matches['src1'] . $matches['src2'] . '" '
                   . $matches['after']
                   . $matches['closing'] . '>';
		}
	}
	//* Image load effect style.css
	public static function lli_effects() {?>
		<style>img.lazy[data-src]{opacity:0;width:1px;height:1px;position:absolute;}</style>
     <?php
	}
	//* Add lazyload script in footer
	public static function lli_scripts() {?><script>!function(){function i(){var t=document.querySelectorAll("img.lazy"),e=t.length;for(!e&&window.removeEventListener("scroll",i);e--;){var r=window.innerHeight;if(t[e].getBoundingClientRect().top-r<=100){if(t[e].getAttribute("data-src")&&(t[e].src=t[e].getAttribute("data-src")),"PICTURE"===t[e].parentElement.tagName)for(var n=t[e].parentElement.querySelectorAll("source"),a=n.length;a--;);t[e].addEventListener("load",function(){this.classList.remove("lazy")})}}}i(),window.addEventListener("scroll",i)}();</script><?php
	}
}
add_filter( 'wp_calculate_image_srcset_meta', '__return_empty_array' );