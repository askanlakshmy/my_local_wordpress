<?php
/**
 * The template for displaying the header
 */
?>
<!DOCTYPE html>
<html class="no-js yes-js js_active js" lang="en-US">
<head>
<title>Reptiles for Sale | Online Reptile Store | Reptile Pets</title>
<meta http-equiv="Content-Type" content="application/xml; charset=UTF-8">
<?= '<?xml version="1.0" encoding="utf-8"? "application/xml">'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
       @media screen and (max-width:767px) {
        .js-dgwt-wcas-enable-mobile-form.dgwt-wcas-enable-mobile-form {
        display:none;
    }
}
    @media screen and (max-width:767px) {
        html body .cc-logo-section {
    margin-top: 2em;
    }
    }

    .woocommerce a.button{
    color: #000 !important;
    background-color: transparent !important;
    border-color: #000 !important;
}
.woocommerce a.button:hover {
    color: #000 !important;
    background-color: transparent !important;
    border-color: #000 !important;
}

    iframe.classic {
    margin: auto;
    text-align: center;
    width: 55%;
    height: 376px;
    display: flex;
    padding-bottom: 22px;
    padding-top: 0px;
    align-items: center;
}

        a.added_to_cart.wc-forward.category {
    display:none !important;
}
.cc-image-wrapper {
    visibility: hidden;
}

@media screen and (min-width:320px) and (max-width:767px) {
    .cc-image-wrapper .desktop-view-banner {
        display: none;
    }
    .xyz-logo1 {
        display: none;
    }
}
.cc-price a {cursor: default;}
    /* .mtsnb-button-type.mtsnb-content a{border-bottom: none !important; cursor: default;} */
    a.added_to_cart.wc-forward{display:none;color: #fff;
    font-size: 0px;}
    li#menu-item-90472 a:after {transform: rotate( 0deg) !important;top: 8px !important;left: -7px !important;}
    @media screen and (min-width:1366px){
        li#menu-item-90808 .sub-menu { width: 130px;}
        li#menu-item-90472 .sub-menu {left: 50px;width: 169px;top: 48px;}
        li#menu-item-90473 .sub-menu {width: 215px;left: 60px;top: 47px;}
    }
 @media (min-width:1024px){
    .stellarnav li.has-sub>a:after {
    border-top: 6px solid #f90!important;
}

.stellarnav li.has-sub>a:after {
    content: '';
    margin-left: 10px;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-top: 6px solid #fff;
    display: inline-block;
}
 }
 @media (min-width:1024px){
.slider-section{
    visibility: hidden;
}
#cc-block-section {
    visibility: hidden;
}
.stellarnav.dark.right.desktop{visibility: hidden;}
}
@media screen and (min-width:425px) and (max-width:767px){
    .mtsnb-button-type.mtsnb-content {
    padding: 0 10px;
}
}
    @media screen and (min-width:320px) and (max-width:767px){
        html body span.mtsnb-text {
    margin: 0px !important;
    padding: 0 2px !important;
}
        .mtsnb-button-type.mtsnb-content a{font-size:16px !important;}
        html body .cc-top-header {
    margin-top: 30px !important;
}
    /* .container {
    min-height: 24px;
} */
.cc-logo-section a img {
    min-height: 75px !important;
}.cc-slider-block-wrapper{margin-top:25px !important;}
.cc-search-form{min-height:25px !important;}
.cc-logo-section{min-height: 75px !important;max-height: 75px !important;min-width: 100px;
    max-width: 300px;;}
.cc-left-list {
    min-height: 35px;
}}
@media (min-width:1366px){
/* html body .cc-product-image img{max-height:50px !important;} */
.container{min-height:35px;}
/* .desktop-view-banner img {min-height: 360px !important;max-height:480px !important} */
/* header {min-height: 550px;} */
.cc-orange-block.cc-left-block {width: 35% !important;position:initial;}
header .container .row {min-height: 134px;}
.cc-logo-section {min-width: 300px;max-width: 320px;min-height: 70px;max-height:100px;}
.cc-nav {min-height: 35px;}

/* .dgwt-wcas-search-wrapp.dgwt-wcas-is-detail-box.dgwt-wcas-no-submit.woocommerce form {text-align: center !important;}
.dgwt-wcas-search-wrapp.dgwt-wcas-is-detail-box.dgwt-wcas-no-submit.woocommerce form {margin-left: 46px;margin-right: 46px;} */
/* .cc-left-list.cls-border.cls-red.cls-border-71 {
    min-width: 230px;min-height: 20px;
} */
.cc-left-list {
    min-width: 350px;
    max-width: 380px;
    min-height: 25px;
    max-height: 50px;
}
.cc-overlay-section a{margin-top:0px !important}

.stellarnav.dark.right.desktop {
    /* width: 1072px !important;
    margin: auto; */
    text-align:center;
}
.cc-logo-section {
    width: 30% !important;
}

.cc-search-form {
    width: 40% !important;
}
.cc-left-list {
    width: 30% !important;
    padding-left: 5%;

}

.slider-section {
    min-height: 382px !important;
    max-height: 460px !important;
}
/* .cc-slider-block-wrapper {
    visibility: hidden;
} */
/* #cc-block-section {
    visibility: hidden;
}
.stellarnav.dark.right.desktop{visibility: hidden;} */
}
@media (min-width:1280px){
    .container{min-width: 1260px !important;}

}

@media (min-width:1920px){
    .stellarnav.dark.right.desktop{min-width:1090px !important}
}
@media (min-width:1920px){
.slider-section{min-height:460px !important}


}
<?php if(is_admin() || is_user_logged_in()) {?>
    /* @media (min-width:1024px){html body #mtsnb-103979{top:31px !important} }
 @media (max-width:1023px){
   html body .mtsnb.mtsnb-shown.mtsnb-top.mtsnb-fixed.str {
    top: 0px !important;
}
 } */
<?php }?>


</style>
<meta name="description" content="Reptiles for sale at discount prices. Buy reptile pets and reptile supplies with ease at our secure online reptile store. Quality, Service and Selection!" />
<link rel="canonical" href="https://www.xyzreptiles.com/" />
	<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="Reptiles for Sale | Online Reptile Store | Reptile Pets" />
	<meta name="twitter:description" content="Reptiles for sale at discount prices. Buy reptile pets and reptile supplies with ease at our secure online reptile store. Quality, Service and Selection!" />
	<meta name="twitter:creator" content="@XYZReptiles" />
	<meta name="twitter:site" content="@XYZReptiles" />

    <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://www.xyzreptiles.com/#website","url":"https://www.xyzreptiles.com/","name":"XYZReptiles","description":"","potentialAction":[{"@type":"SearchAction","target":"https://www.xyzreptiles.com/?s={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"WebPage","@id":"https://www.xyzreptiles.com/#webpage","url":"https://www.xyzreptiles.com/","name":"Reptiles for Sale | Online Reptile Store | Reptile Pets","isPartOf":{"@id":"https://www.xyzreptiles.com/#website"},"datePublished":"2014-10-20T18:52:37+00:00","dateModified":"2020-10-21T05:39:05+00:00","description":"Reptiles for sale at discount prices. Buy reptile pets and reptile supplies with ease at our secure online reptile store. Quality, Service and Selection!","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://www.xyzreptiles.com/"]}]}]}</script>

        <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Reptiles for Sale | Online Reptile Store | Reptile Pets" />
    <meta property="og:description" content=""/>
    <meta property="og:url" content="https://www.xyzreptiles.com/" />
    <meta property="og:site_name" content="XYZReptiles" />
    <meta property="fb:app_id" content="464192210417440" />
    <meta property="og:image" content="https://www.xyzreptiles.com/wp-content/themes/xyzreptiles/images/facebookimage.png">
    <!--meta property="og:image" content="https://www.xyzreptiles.com/wp-content/uploads/2019/05/baby-hypo-columbian-boa-constrictor-ds.jpg"-->
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="xyzreptiles logo" />
	<meta name="google-site-verification" content="BRhAxLHh5Yw0y0w7JSi2QlbqnOZSFzRpi4yGLFX6ZVA" />
    <meta name="generator" content="WordPress 5.5.1" />
<meta name="generator" content="WooCommerce 4.5.2" />
<meta name="referrer" content="always"/>	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>


<link rel="shortcut icon" href="https://www.xyzreptiles.com/wp-content/themes/xyzreptiles/assets/img/xyzrep-favi.ico">
<link rel="stylesheet" href="https://www.xyzreptiles.com/wp-content/themes/xyzreptiles/assets/css/custom-new.css">
<link rel='stylesheet' id='woocommerce_prettyPhoto_css-css'  href='//www.xyzreptiles.com/wp-content/plugins/woocommerce/assets/css/prettyPhoto.css' type='text/css' media='all' />
<?php if(is_page(71478)){ ?>
    <link rel="stylesheet" href="https://www.xyzreptiles.com/wp-content/themes/xyzreptiles/assets/css/custom-new.css">
    <link rel="stylesheet" href="https://www.xyzreptiles.com/wp-content/themes/xyzreptiles/assets/css/blog-custom.css">
    <link rel="stylesheet" href="https://www.xyzreptiles.com/wp-content/themes/xyzreptiles/assets/css/grid-new.css">
    <link rel="stylesheet" href="https://www.xyzreptiles.com/wp-content/themes/xyzreptiles/assets/css/style.min.css">
    <link rel="stylesheet" href="https://www.xyzreptiles.com/wp-content/themes/xyzreptiles/assets/css/search-bar.css">
<?php } ?>

<!-- <meta name="facebook-domain-verification" content="vvvi56foj3a5b25kiy8gzv7idc6431" /> -->
<script>
    var agent = navigator.userAgent;
  var n = agent.includes("Chrome-Lighthouse");
  var m = agent.includes("PingdomPageSpeed/1.0");
    if(!n && !m){
}
</script>
</script>

<?php do_action('wp_head'); ?>
</head>
<body>
<?php
if(is_front_page()) {
 $clicked = get_field('show_in_home_page', 'option');
 if ($clicked == "Only Home" || $clicked == "Across the Site") {

    ?>
    <link rel='stylesheet' id='wp-notification-bars-css'  href='https://www.xyzreptiles.com/wp-content/themes/xyzreptiles/assets/css/wp-notification-bars-public.css' type='text/css' media='all' />
        <?php
        // echo $backgroundColor.'backgroundColor';
        if($backgroundColor != '') {
            $backgroundColor = $backgroundColor;
        }else{
                $backgroundColor = '#ff9900';
            }
        ?>
    <div class="mtsnb mtsnb-shown mtsnb-top mtsnb-fixed" id="mtsnb-103979" data-mtsnb-id="103979" style="background-color:<?php echo $backgroundColor?>">
    <?php
if(current_user_can('update_core')){
    ?>
    <style>
    #mtsnb-103979{
        top:0px !important;
    }
    .cc-top-header {
    margin-top: 53px !important;
}
    </style>
    <?php
}
else {
    ?>
    <style>
        #mtsnb-103979{
        top:0px !important;
    }
        .cc-top-header {
    margin-top: 53px !important;
}
    </style>
    <?php
}
    ?>
				<style type="text/css">
					.mtsnb { position: fixed; -webkit-box-shadow: 0 3px 4px rgba(0, 0, 0, 0.05);box-shadow: 0 3px 4px rgba(0, 0, 0, 0.05);}
					.mtsnb .mtsnb-container { width: 1080px; font-size: 18px;}
					.mtsnb a { color: #000000;}
					.mtsnb .mtsnb-button { background-color: #000000;}
                    span.mtsb-title {
    font-weight: bold;
    font-family: Arial !important;
}
                    /* commented by vicky*/
@media only screen and (max-width: 767px) {
	form.dgwt-wcas-search-form.sticky { top: 45px !important;}
	html body .stellarnav.dark.right.mobile.sticky1 {top: 90px !important; display: block; background-color: #ffffff !important; padding: 12px 0;}
    .mtsnb-button-type.mtsnb-content a {
    border-bottom: 1px solid;
    font-size: 14px;
}
    .sticky {
        position: fixed;
      top: 45px !important;;
        width: 100%;
        /* height: 100px; */
        left: 0;
        transition: .3s;
        z-index: 999;
    }
    html body .stellarnav.dark.right.mobile.sticky1{
    top: 87px !important;
    padding: 12px 0 !important;
}
}
				</style>
				<div class="mtsnb-container-outer">
					<div class="mtsnb-container mtsnb-clearfix">
                                                <?php
                                                 $content_txt = get_field('page_content','option');

                                                $test = get_field('page_linknew', 'option');
                                                // print_r($test);
                                                    ?>
												<div class="mtsnb-button-type mtsnb-content">
                                                <?php
                                               // if($content_txt == ''){ ?>
                                                <span class="mtsnb-text"></span>
                                                <span class="mtsb-title" style="color:<?php echo get_sub_field('text_color', 'options') ?>"><?php echo $content_txt; ?></span>
                                                <a href="<?php echo $test["url"]; ?>" class="mtsnb-link">
                                                 <b> <?php echo $test["title"]; ?></b></a>
                                                <?php //} ?>
                                                <!-- <span class="mtsb-title"><?php //echo $content_txt; ?></span> -->
                                            </div>
                                                </div>
									</div>
			</div>
            <?php
}
else
{

   ?>
<style>
@media screen and (max-width:767px){



    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
        left: 0;
        transition: .3s;
        z-index: 999;
    }
    .stellarnav.dark.right.mobile.sticky1 {
        position: fixed;
        top: 45px;
        width: 100%;

        left: 0;
        transition: .3s;
        z-index: 999;
    }
}
</style>
<?php

}

?>
<style>
.sticky1 {
    position: fixed;
    top: 0;
    width: 100%;
    margin-top: 0px !important;
    z-index: 999;
  }
</style>
<?php } ?>
<header>
    <div class="container">
        <div class="row">
            <div class="cc-top-header">
                <div class="cc-logo-section">
                    <!-- <a href="#"><img class="lazy" data-src="https://www.xyzreptiles.com/wp-content/themes/xyzreptiles/assets/img/logo2.png" alt="xyzreptiles logo"></a> -->
                    <a href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo2-new.png" class="xyz-logo" alt="xyzreptiles logo"></a>
                </div>
                <div class="cc-search-form" id="search_sticky">
                    <div class="cc-form-wrapper">
                        <!-- <div class="dgwt-wcas-search-wrapp dgwt-wcas-is-detail-box dgwt-wcas-no-submit woocommerce"
                            data-wcas-context="d014">
                            <form class="dgwt-wcas-search-form" role="search" action="#"
                                method="get">
                                <div class="dgwt-wcas-sf-wrapp">
                                    <svg version="1.1" class="dgwt-wcas-ico-magnifier"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 51.539 51.361"
                                        enable-background="new 0 0 51.539 51.361" xml:space="preserve">
                                        <path d="M51.539,49.356L37.247,35.065c3.273-3.74,5.272-8.623,5.272-13.983c0-11.742-9.518-21.26-21.26-21.26
                                            S0,9.339,0,21.082s9.518,21.26,21.26,21.26c5.361,0,10.244-1.999,13.983-5.272l14.292,14.292L51.539,49.356z M2.835,21.082
                                            c0-10.176,8.249-18.425,18.425-18.425s18.425,8.249,18.425,18.425S31.436,39.507,21.26,39.507S2.835,31.258,2.835,21.082z">
                                        </path>
                                    </svg>
                                    <label class="screen-reader-text">Products search</label>
                                    <input type="search" class="dgwt-wcas-search-input" name="s" value="" placeholder="Search for products..." autocomplete="off">
                                    <div class="dgwt-wcas-preloader"></div>
                                    <input type="hidden" name="post_type" value="product">
                                    <input type="hidden" name="dgwt_wcas" value="1">
                                    <input type="hidden" name="orderby" value="stock">
                                </div>
                            </form>
                        </div> -->
                        <?php echo do_shortcode('[wcas-search-form]'); ?>
                    </div>
                </div>
                <div class="cc-left-list">
                <ul>
                        <li><a href="<?php echo site_url(); ?>/wishlist/">
                        <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/whislist.png" class="xyz-logo lazy" alt="whislist">Wishlist</a></li>
                        <?php global $woocommerce;?>
                      <li>
                    <div class="header-cart-icon">
                        <a id="minicart" href="<?php echo  wc_get_cart_url(); ?>">
                            <img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cart.png" class="xyz-logo lazy" alt="cart icon">
                            <span class="cart-count">0</span>
                        </a>


                        <div class="cc-wrapp-minicart">
                            <div class="cc-content-block">
                             <?php
                            if(is_active_sidebar('shop-cart-sidebar')){
                            dynamic_sidebar('shop-cart-sidebar');
                            }
                            ?>
                            </div>
                        </div>


                    </div>
                    </li>
                    <?php if (is_user_logged_in() ) {
                    $current_user= wp_get_current_user();
                    $display_name_wp = $current_user->display_name;

                    if($display_name_wp=="")
                    {
                        $first_name = $current_user->user_firstname;
                        $lastname_wp = $current_user->user_lastname;
                        $myaccount_name = $first_name.' '.$lastname_wp;
                    }
                    else
                    {
                        $myaccount_name = $display_name_wp;

                    }
                    echo '<li><a href="'.site_url().'/my-account/"><img class="lazy" data-src="'.get_stylesheet_directory_uri().'/assets/images/user.png" alt="user_login"><span class="ss-nwy">'.$myaccount_name.'</span></a></li>';
                    }else{ ?>
                    <li><a href="<?php echo site_url(); ?>/my-account/"><img class="xyz-logo lazy" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/user.png" alt="Login">Login</a></li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="cc-nav">
        <div class="container">
            <div class="">
                <div class="stellarnav dark right desktop">
                <?php
                        wp_nav_menu(array(
                        'menu' => 'Main Menu',
                        'container' => false,
                        'container' => 'ul',
                        'menu_class' => 'cc-nav-ul'
                        ));
                        ?>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-section">
        <div class="banner-section" id="banner-slider">
           <?php // if(is_front_page()) { ?>
        <?php
                    $image = get_field('slider_image');
                    $mobileimage = get_field('slider_image_mobile');
                    $title = get_field('home_slider_title');
                    $second_title = get_field('second_title');
                    $link = get_field('home_slider_link');
                   // $check= get_field('visible');
                    //$condition=$check[0];
                    //if($condition == 'Visible'):
                    ?>
            <div class="home-slider-image-wrapper">
                <div class="cc-image-wrapper">
                    <div class="desktop-view-banner">
                    <a href="<?php echo $link; ?>">
                        <img class="xyz-logo1 lazy" data-src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
                    </a>
                    </div>
                    <div class="mobile-view-banner">
                        <a href="<?php echo $link; ?>">
                        <img src="<?php echo $mobileimage; ?>" alt="<?php echo $title; ?>">
                    </a>
                    </div>
                </div>
                <div class="cc-overlay-text">
                    <div class="cc-overlay-section">
                        <h3><?php echo $title; ?></h3>
                        <div class="cc-secondary-text">
                            <a href="<?php echo $link; ?>">View Now</a>
                            <span><?php echo $second_title;?></span>
                        </div>
                    </div>
                </div>

            </div>

       <?php // endif; ?>
                    <?php // } ?>


        </div>
    </div>
</header>