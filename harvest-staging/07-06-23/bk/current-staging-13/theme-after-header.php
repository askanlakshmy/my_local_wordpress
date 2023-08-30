<?php
/**
 * Template partial used to add content to the page in Theme Builder.
 * Duplicates partial content from header.php in order to maintain
 * backwards compatibility with child themes.
 */

if ( et_builder_is_product_tour_enabled() || is_page_template( 'page-template-blank.php' ) ) {
	return;
}
?>
<link href="https://fonts.cdnfonts.com/css/avenir" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/Divi/js/stellarnav.css">

<style>
@media screen and (min-width:1800px){
   html body.logged-in .product_sub_menu,    html body.logged-in .product_sub_menu1,    html body.logged-in .product_sub_menu2,    html body.logged-in .product_sub_menu3 {
    top: 168px !important;
}
    .sticky .product_sub_menu, .sticky .product_sub_menu1, .sticky .product_sub_menu2, .sticky .product_sub_menu3{
        top: 102px !important;  
    }
    .product_sub_menu, .product_sub_menu1, .product_sub_menu2, .product_sub_menu3{
        top: 120px !important;  
    }
}
    header#custom_header {
    font-family: 'Avenir', sans-serif;
}
	.list_lang ul li:first-child {
    padding-right: 18px;
}
.list_lang ul {
    display: flex;
    justify-content: end;
}
.list_lang ul li a {
    color: #A9A9A9;
}
.header_list {
    display: flex;
    align-items: center;
}
ul#menu-new-menu {
    display: flex;
}
ul.sub-menu {
    display: none;
}
/* .subm_menu {
 
} */
.menu-item-has-children a:after {
    content: "\f078" !important;
    font-family: 'FontAwesome';
    font-weight: 400;
	font-size: 12px;
    position: relative;
    left: 4px;
	color:#cdb460;
}
li#menu-item-50049 ul li a {
    padding: 0 !important;
}
ul#menu-insigts-learing li:last-child {
    border-bottom: none;
}
li#menu-item-50049 ul li a {
    padding: 0 !important;
}
ul#menu-insigts-learing {
    border-right: 1px solid #9993;
}
ul#menu-new-menu li a {
    color: #333333;
	padding: 25px 22px 25px 0;
}
.clearfix1 {
    display: flex;
	justify-content: end;
}
button.button.button-default {
    display: flex;
    align-items: center;
    background: transparent;
    outline: none;
    border: none;
}
header#custom_header .container {
    width: 95% !important;
    max-width: 100%;
}
.search_visible {
    width: 20%;
}
.menu_list {
    width: 65%;
}
.logo_head {
    width: 15%;
}
.logo_head img {
    width: 76%;
}
.shap {
    background: #FFFFFF;
    border: 2px solid #08274224;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-left: 0;
    border-right: 0;
	border-bottom: 0;
	padding: 1% 0;
}
header#custom_header {
    padding-bottom: 2%;
}
.list_lang {
    width: 95%;
    margin: 0 auto;
	padding: 5px 0;
}

ul#menu-new-menu li {
    padding-right: 3%;
}
ul.sub-menu {
    position: absolute;
    padding: 20px 0;
    z-index: 9999;
    width: max-content;
    background: #fff;
    opacity: 1;
    border-top: 3px solid #cdb460;
    box-shadow: 0 2px 5px rgba(0,0,0,.1);
    -moz-box-shadow: 0 2px 5px rgba(0,0,0,.1);
    -webkit-box-shadow: 0 2px 5px rgba(0,0,0,.1);
    -webkit-transform: translateZ(0);
    text-align: left;
    margin-top: 1.6%;
}
.removed_sub_menu ul li a:after {
    content: "";
}	
.removed_sub_menu ul li a {
    padding: 15px 15px !important;
    border: none !important;
}
li#menu-item-49948 .sub-menu {
    display: none !important;
}
.logged-in .sticky .product_sub_menu{top: 79px;}
.logged-in .product_sub_menu,.logged-in .product_sub_menu1,.logged-in .product_sub_menu2,.logged-in .product_sub_menu3{
    top: 143px; 
}
.product_sub_menu,.product_sub_menu1,.product_sub_menu2,.product_sub_menu3{
	position: fixed;
    width: 100%;
	right: 0;
    left: 0;
    top: 111px;
    /* overflow: hidden; */
    left: 0;
    /* top: 150px; */
    background-color: #fff;
    padding: 0px 0;
    border-top: 1px solid #eaeaea;
    line-height: 24px;
    z-index: 99999;
	opacity: 0;
	-webkit-transform: translateY(-300%);
    transform: translateY(-300%);
}
.sticky .product_sub_menu1, .sticky .product_sub_menu2, .sticky .product_sub_menu3 {
    top: 78px !important;
}
.product_sub_menu.selected,.product_sub_menu1.selected1,.product_sub_menu2.selected2,.product_sub_menu3.selected3{
	opacity: 1;
	/* display:block; */
	-moz-transform: translateY(0);
    -o-transform: translateY(0);
    -ms-transform: translateY(0);
    -webkit-transform: translateY(0);
    transform: translateY(0);
}
li#menu-item-49950 .sub-menu {
    display: none !important;
}
.main_menu,.main_menu1,.main_menu2,.main_menu3 {
    display: block;
    width: 95%;
    margin: 0 auto;
}
.menu-soft-right,.menu-soft-right1,.menu-soft-right2,.menu-soft-right3 {
    display: inline-block;
	width: 30%;
}
.product_sub_menu2 ul#menu-about-harvest li a:after {
    display: none;
}
.subm_menu li {
    padding: 6% 0;
    border-bottom: 2px solid #9999992e;
}
ul#menu-main-menu.subm_menu {
    border-right: 1px solid #9999992e;
}
.mega_menu_custom .product_sub_menu.selected ul li a,.product_sub_menu1.selected2 ul li a,.product_sub_menu2.selected2 ul li a,.product_sub_menu3.selected3 ul li a {
    border-bottom: 0 !important;
}
.subm_menu li a:after {
    float: right;
    transform: rotate(-95deg);
}
html body li#menu-item-49948 .subm_menu li:hover .sub-menu {
    display: flex !important;
}
li#menu-item-49948 .subm_menu ul.sub-menu {
    left: 31%;
    top: -23px;
    width: -webkit-fill-available;
	padding-left: 2%;
    flex-wrap: wrap;
}
.subm_menu ul li a:after{content:none !important;}
li#menu-item-49948 .subm_menu ul.sub-menu:hover{
	display: flex !important;
}
.subm_menu ul li a {
    border-bottom: none !important;
    font-size:16px;
}
.subm_menu ul{
    box-shadow: none !important;
}
.subm_menu ul li {
    padding-top: 10px;
    padding-bottom: 10px;
    width: 50%;
    border: none !important;

}
.removed_sub_menu ul li {
    padding: 3% 0;
}
.left_position ul.sub-menu {
    left: 100%;
    margin-top: -22px;
    border-top: 0 !important;
}
input#s {
    border: none;
    border-bottom: 1px solid #fff;
    width: 0;
    right: -3px;
    position: relative;
}
.show_line {
    border-color: #999 !important;
    width: 100% !important;
    right: 0 !important;
	transition: .2s;
}
.search-form-button{display:flex;}
@media screen and (min-width:1536px) and (max-width:1600px){
   html body  ul#menu-new-menu li a{
    padding: 25px 21px 30px 0;
    padding-right: 0 !important;
    }
}
@media screen and (min-width:1601px){
   html body  ul#menu-new-menu li a {
    padding: 25px 21px 35px 0;
    padding-right: 0 !important;
}
}
@media screen and (min-width:1280px) and (max-width:1399px){
    .product_sub_menu,.product_sub_menu1,.product_sub_menu2,.product_sub_menu3{
    top: 104px !important;
    }
}
@media screen and (min-width:1212px){
    .subm_menu li a {
    border-bottom: 0 !important;
}
    li#menu-item-49964 .product_sub_menu3 {
    height: 400px;
}
    ul#menu-menu-media li {
    padding-top: 6%;
    padding-bottom: 6%;
}
    ul#menu-menu-media {
    border-right: 1px solid #9999994f;
}
.menu_fea {
    margin-bottom: 5%;
}
     .im2{margin-top:10%;}
    .content_c h3 {
    color: #666666;
    font-size: 16px;
    font-weight: 400;
}
.content_c {
    width: 95%;
}
html body .content_c a {
    padding: 0 !important;
    color: #cdb460 !important;
    font-weight: 300;
    font-size: 16px;
}
    ul#menu-menu-media li:hover .sub-menu.mm {
    display: flex !important;
}
    html body ul.sub-menu.mm {
    left: 31%;
    top: -23px;
    width: -webkit-fill-available;
    padding-left: 2%;
    flex-wrap: wrap;
    display: flex !important;
}

    li#menu-item-49964 ul.sub-menu {
    display: none !important;
}
    li#menu-item-50064 ul li a {
    padding: 0 !important;
}
.menu-soft-right2 {
    border-right: 1px solid #9999994a;
}
ul#menu-about-harvest li:last-child {
    border-bottom: none !important;
}
    html body li#menu-item-50064:hover .sub-menu {
    display: flex !important;
}
li#menu-item-50064 ul.sub-menu {
    left: 31%;
    top: -23px;
    width: -webkit-fill-available;
    padding-left: 2%;
    flex-wrap: wrap;
}
    li#menu-item-49969 .sub-menu {
    display: none !important;
}
    .removed_sub_menu ul li {
    padding: 5% 0;
}
    .subm_menu li ul li {
        padding-top: 10px !important;
    padding-bottom: 10px !important;
    width: 50% !important;
    border: none !important;
}
    .subm_menu .sub-menu{border-top:none !important;}
    li#menu-item-49950 .subm_menu li:hover .sub-menu {
    display: flex !important;
}
    html body li#menu-item-49950 .subm_menu li:hover .sub-menu {
    display: flex !important;
}
li#menu-item-49950 .subm_menu ul.sub-menu {
    left: 31%;
    top: -23px;
    width: -webkit-fill-available;
    padding-left: 2%;
    flex-wrap: wrap;
}
    .product_sub_menu ul#menu-main-menu li a:hover,.product_sub_menu1 ul#menu-main-menu li a:hover,.product_sub_menu2 ul#menu-main-menu li a:hover,.product_sub_menu4 ul#menu-main-menu li a:hover {
    color: #cdb460;
}
    img#search-imag2 {
    margin-top: 10px;
}
    div#top_header {
    position: relative;
}
div#top_header.sticky {
    position: fixed;
    width: 100%;
    z-index: 9999;
    top: 0;
    transition: .2s;
}
    .menu-item-has-children:hover .sub-menu {
    display: block;
}
.menu-item-has-children:hover a {
    border-bottom: 2px solid #cdb460;
}
	.mobile_section{display:none;}
}
@media screen and (max-width:1211px){
    /* .product_sub_menu2 ul#menu-about-harvest li a:after {
    display: none !important;
} */
li#menu-item-50064 {
    position: relative;
}
li#menu-item-50064 a:before{
    content: "\f078" !important;
    font-family: 'FontAwesome';
    font-weight: 400;
	font-size: 12px;
    position: relative;
    left: 4px;
	color:#cdb460;
}
    ul.sub-menu {
    padding-top: 0 !important;
    margin-top: 0 !important;
    border-top: 1px solid #9999996b !important;
}
li.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.menu-item-50007.has-sub{border-bottom:0 !important;}
    li.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.menu-item-49982.has-sub.open ul li,li.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.menu-item-49995.has-sub.open ul li,li.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.menu-item-50002.has-sub.open ul li,li.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.menu-item-50007.has-sub.open ul li  {
    border-bottom: none !important;

}
li.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.menu-item-49982.has-sub.open ul, li.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.menu-item-49995.has-sub.open ul{
    border-top:1px solid #999 !important;
    padding-top:0 !important;
    margin-top:0 !important;
}
.menu-item-49948.has-sub.open ul.sub-menu li {
    border-bottom: 1px solid #99999926!important;
}

    .hide_form.open-s {
    display: block;
    width: 100%;
    position: absolute;
    width: 100%;
    background: #cbb25c!important;
    padding: 10px;
    z-index: 9999;
    margin-top: 2%;
    transition: .2s;
}
input#sm {
    width: 250px;
    border: none;
    padding: 10px;
}
button.button.button-default {
    background: #000;
    color: #fff;
}
    ul.sub-menu li {
    border-bottom: none;
}
    .mobile_nav ul li a{color:#000 !important;}
    .mobile_nav ul li {
        padding: 0;
    border-bottom: 1px solid #9999;
}
    .mobile_section {
    padding: 2.5% 0;
}
    .mobile_logo img {
    width: 60%;
}
	.desktop_view_only{
		display:none;
	}
	.mobile_list {
    display: flex;
    align-items: center;
}
.mobile_logo {
    width: 65%;
    text-align:center;
}
.mobile_search {
    width: 15%;
}
.menu_mobile {
    width: 15%;
}
.hamburger {
    display: block;
    position: absolute;
    cursor: pointer;
    right: 5%;
    top: 50%;
    transform: translate(-5%,-50%);
    z-index: 2;
    transition: all .7s ease;
    z-index: 0;
}
.hamburger div {
    width: 30px;
    height: 2px;
    background: #000;
    margin: 5px;
    transition: all .3s ease;
}
.menu_mobile {
    position: relative;
}
/* .mobile_nav ul#menu-new-menu-1 {
    z-index: 999;
    background:#f4f4f4;
    position: fixed;
    opacity: 1;
    left: 0;
    height: 100%;
    overflow: scroll;
    width: 100%;
    flex-direction: column;
   clip-path: circle(26px at 90% -20%); 
   -webkit-clip-path: circle(26px at 90% -10%);
    transition: all 1s ease-out;
    pointer-events: none;
    top: 60px;
} */
a.menu-toggle {
    opacity: 0;
}
.stellarnav.dark.right.mobile {
    background: transparent;
}
.lang_sec {
    display: none;
}
/* .mobile_nav.open ul#menu-new-menu-1 {
    -webkit-clip-path: circle(1330px at 58% -10%);
    pointer-events: all;
} */
span.newSpan:before {
    border: solid #000;
    border-width: 0 2px 2px 0;
    display: inline-block;
    padding: 3px;
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    content: "";
    position: absolute;
    right: 8px;
    top: 3px;
}
span.newSpan {
    width: 30px;
    height: 30px;
    display: inline-block;
    position: absolute;
    float: right;
    left: 0;
    right: 0;
    margin-left: auto;
}
.menu-item-has-children a:after{
    content:none !important
}
ul.sub-menu.slow1 {
    display: block;
    left: 0 !important;
    width: 100%;
    border-top: 0 !important;
    position: relative !important;
}
.menu_open ul.sub-menu {
    left: 0 !important;
    width: 100%;
    border-top: 0 !important;
    position: relative !important;
}
.menu_open .sub-menu {
    display: block;
}
.mobile_nav ul#menu-new-menu-1 {
    z-index: 999;
    background: #f4f4f4 !important;
    max-width: 100%;
}
.stellarnav.mobile.right > ul, .stellarnav.mobile.left > ul{
    top: 87px !important;
}
span.icon-plus:before {
    border: solid #000 !important;
    border-width: 0 2px 2px 0 !important;
    display: inline-block;
    padding: 3px;
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg) !important;
    content: "";
    position: absolute;
    right: 8px !important;
    /* top: 50px !important; */
    width: auto !important;
}
span.icon-plus:after{
display:none !important;
}
a.close-menu.full {
    display: none !important;
}
ul.sub-menu {
    background: #fff !important;
    border-top: 0;
}
ul.sub-menu li{
    border-bottom:none !important;
}
.stellarnav li.open > a.dd-toggle .icon-plus:before {
    -webkit-transform: rotate(220deg);
    -ms-transform: rotate(220deg);
    -o-transform: rotate(220deg);
    transform: rotate(220deg) !important;
}
.stellarnav li.open > a.dd-toggle .icon-plus {
    -webkit-transform: inherit !important;
    -ms-transform: inherit !important;
    -o-transform: inherit !important;
    transform: inherit !important;
}
div#top_header_mobile {
    position: relative;
}
div#top_header_mobile.sticky {
    position: fixed;
    width: 100%;
    z-index: 9999;
    background: #fff;
}
.image_search_list {
    padding-left: 15px;
}
.hide_form {
    display: none;
}
}
.borchure {
    background: #082742;
    display: flex;
    align-items: center;
    padding: 2% 0px;
    color: #fff;
}
.borchure .container {
    display: flex;
}
.file_one, .file_two {
    display: flex;
    align-items: center;
}
.file_one img, .file_two img{
padding-right:10px;
}
.file_two {
    padding-left: 10%;
}
.file_two a {
    padding: 0 !important;
    color: #fff !important;
    display: flex;
    align-items: center;
    border:none !important;
}
.file_one a{
    padding: 0 !important;
    color: #fff !important;
    display: flex;
    align-items: center;
    border:none !important;
}
.file_two a:after, .file_one a:after{
    display:none !important;
}
.list_lang li:first-child:after {
    content: "|";
    position: relative;
    left: 10px;
    color: #bbb;
    font-size: 15px;
}
.product_sub_menu ul#menu-main-menu:hover .sub-menu,.product_sub_menu1 ul#menu-main-menu:hover .sub-menu,.product_sub_menu2 ul#menu-main-menu:hover .sub-menu,.product_sub_menu3 ul#menu-main-menu:hover .sub-menu {
    border-top: none !important;
}
</style>
<script>
$( document ).ready(function() {
    $('.image_search_list').click(function(){
        $('.hide_form').toggleClass("open-s");
    });
$(".hamburger").click(function(){
    $('.hamburger').toggleClass("toggle_m");
    $('.custom_header').toggleClass("change");
    $('.mobile_nav').toggleClass("open");
});
});
$( document ).ready(function() {
$('.mega_menu_custom').hover(function(){
$('.product_sub_menu').addClass("selected");
}, function(){
$('.product_sub_menu').removeClass("selected");
});
$('.menu-item-49950').hover(function(){
$('.product_sub_menu1').addClass("selected1");
}, function(){
$('.product_sub_menu1').removeClass("selected1");
});
$('.menu-item-49969').hover(function(){
$('.product_sub_menu2').addClass("selected2");
}, function(){
$('.product_sub_menu2').removeClass("selected2");
});
$('#menu-item-49964').hover(function(){
$('.product_sub_menu3').addClass("selected3");
}, function(){
$('.product_sub_menu3').removeClass("selected3");
});

$("#search-imag2").click(function(){
 $("#s").toggleClass("show_line");
});
});
$(window).on('load', function() {
$("#menu-item-49948").append('<div class="product_sub_menu"><div class="main_menu"><div class="menu-soft-right">'+ $("div#class_none").html()+'</div></div><div class="borchure"><div class="container"><div class="file_one"><a href=""><img src="https://harvestetfsdev.wpengine.com/wp-content/uploads/2023/07/Daily-PriceiconHover.png"><span>View All Products Daily Price</span></a></div><div class="file_two"><a href=""><img src="https://harvestetfsdev.wpengine.com/wp-content/uploads/2023/07/Download-Icon.png"><span>Download Harvest ETFs Product Brochure</span></a></div></div></div></div>');
$("#menu-item-49950").append('<div class="product_sub_menu1"><div class="main_menu1"><div class="menu-soft-right1">'+ $("div#class_none1").html()+'</div></div></div>');
$("#menu-item-49969").append('<div class="product_sub_menu2"><div class="main_menu2"><div class="menu-soft-right2">'+ $("div#class_none2").html()+'</div></div></div>');
$("#menu-item-49964").append('<div class="product_sub_menu3"><div class="main_menu3"><div class="menu-soft-right3">'+ $("div#class_none3").html()+'</div></div></div>');
});
</script>

<header id="custom_header">
<div class="menu-soft-right" id="class_none" style="display:none;"><?php $new_var= wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_class'=>'subm_menu' ) ); ?></div>
<div class="menu-soft-right" id="class_none1" style="display:none;"><?php $new_var= wp_nav_menu( array( 'theme_location' => 'insigts-learing', 'menu_class'=>'subm_menu') ); ?></div>
<div class="menu-soft-right" id="class_none2" style="display:none;"><?php $new_var= wp_nav_menu( array( 'theme_location' => 'about-harvest', 'menu_class'=>'subm_menu') ); ?></div>
<div class="menu-soft-right" id="class_none3" style="display:none;">
<ul id="menu-menu-media" class="subm_menu">
<li><a href="">In The News</a>
<?php
if ( is_active_sidebar( 'media_submenu_one' ) ) : ?>
<div id="secondary" class="widget-area" role="complementary">
<?php dynamic_sidebar( 'media_submenu_one' ); ?>
</div>
<?php endif; ?>
</li>
<li><a href="">TV Interviews</a>
<?php
if ( is_active_sidebar( 'media_submenu_two' ) ) : ?>
<div id="secondary" class="widget-area" role="complementary">
<?php dynamic_sidebar( 'media_submenu_two' ); ?>
</div>
<?php endif; ?>
</li>
<li><a href="">Press Releases</a>
<?php
if ( is_active_sidebar( 'media_submenu_three' ) ) : ?>
<div id="secondary" class="widget-area" role="complementary">
<?php dynamic_sidebar( 'media_submenu_three' ); ?>
</div>
<?php endif; ?>
</li>
<li><a href="">Media Contact</a>
<?php
if ( is_active_sidebar( 'media_submenu_four' ) ) : ?>
<div id="secondary" class="widget-area" role="complementary">
<?php dynamic_sidebar( 'media_submenu_four' ); ?>
</div>
<?php endif; ?>
</li>
</ul>
</div>
<div class="lang_sec">
<div class="list_lang">
<?php
if ( is_active_sidebar( 'header-lang' ) ) : ?>
<div id="secondary" class="widget-area" role="complementary">
<?php dynamic_sidebar( 'header-lang' ); ?>
</div>
<?php endif; ?>
</div></div>
<div class="shap desktop_view_only" id="top_header">
<div class="container">
	<div class="header_list">
		<div class="logo_head">
		<a href="<?php echo site_url();?>" class="ec-logo ">
                        <?php $custom_logo_id = get_theme_mod('custom_logo');
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        ?>
                        <img width="210" height="93" src="<?php echo $image[0];?>" alt="harveste Logo"width="210" height="93" class="no_lz">
                 </a>
		</div>
		<!-- logo -->
		<div class="menu_list">
		<nav class="main-navigation">
         <?php wp_nav_menu( array( 'theme_location' => 'new-menu', 'container_class' => '', 'menu_class'=>'header_menu nav-links') ); ?>
        </nav>
		</div>
		<div class="search_visible">
			<form role="search" method="get" class="search-form" action="/">
               <div class="clearfix1">
                  <div class="search-form-input">
                     <input type="search" value="" name="s" id="s" aria-label="Search for:" required>
                  </div>
                  <div class="search-form-button">
				  <img id="search-imag2" src="https://harvestetfsdev.wpengine.com/wp-content/uploads/2023/07/Search-Hover.png" alt="search">
                     <button type="submit" class="button button-default">Search</button>
                  </div>
               </div>
  </form>
		</div>
	</div>
</div>

</div>
<div class="mobile_section" id="top_header_mobile">
	<div class="mobile_list">
        
<div class="mobile_search">
<div class="image_search_list"><img id="search-imag2" src="https://harvestetfsdev.wpengine.com/wp-content/uploads/2023/07/Search-Hover.png" alt="search"></div>
<div class="hide_form">
		<form role="search" method="get" class="search-form" action="/">
               <div class="clearfix1">
                  
                  
				  <div class="search-form-input">
                     <input type="search" value="" name="s" id="sm" aria-label="Search for:" required>
                  </div>
                  <div class="search-form-button">
				  
                     <button type="submit" class="button button-default">Search</button>
                  </div>
               </div>
  </form>
</div>
</div>
<div class="mobile_logo">
<a href="<?php echo site_url();?>" class="ec-logo ">
                        <?php $custom_logo_id = get_theme_mod('custom_logo');
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        ?>
                        <img width="210" height="93" src="<?php echo $image[0];?>" alt="harveste Logo"width="210" height="93" class="no_lz">
                 </a>
</div>
<div class="menu_mobile">
<div class="hamburger"><div class="bars1"></div><div class="bars2"></div><div class="bars3"></div></div>
<div class="mobile_nav">
<?php wp_nav_menu( array( 'theme_location' => 'new-menu', 'container_class' => 'stellarnav', 'menu_class'=>'header_menu nav-links') ); ?>
</div>
</div>

	</div>
</div>
</header>
<script type="text/javascript" src="/wp-content/themes/Divi/js/stellarnav.min.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			jQuery('.stellarnav').stellarNav({
				theme: 'dark',
				breakpoint: 960,
				position: 'right'
			});
		});
    window.addEventListener('scroll', function (e) {
	var box = document.querySelector('#top_header');
	var x = window.scrollY;
	if (x >= 20) {
		box.classList.add("sticky");
	} else {
		box.classList.remove("sticky");
	}
});
window.addEventListener('scroll', function (e) {
	var box = document.querySelector('#top_header_mobile');
	var x = window.scrollY;
	if (x >= 20) {
		box.classList.add("sticky");
	} else {
		box.classList.remove("sticky");
	}
});
	</script>
<div id="et-main-area">
	<?php
	/**
	 * Fires after the header, before the main content is output.
	 *
	 * @since 3.10
	 */
	do_action( 'et_before_main_content' );
	?>
