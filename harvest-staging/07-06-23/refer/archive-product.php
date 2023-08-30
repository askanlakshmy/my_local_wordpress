

<!-- akila -->
<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
?>
<script>
    $(document).ready(function() {
// $(window).load(function() {
    $(".fa-plus").click();
});
// });
</script>
<script>
// document.addEventListener('DOMContentLoaded', function() {
//     new Splide('#nav-splide', {
//         perPage: 1,
//         type: 'loop',
//         arrows: false,
//         rewind: true,
//         autoplay: true,
//         pagination: false,
//         breakpoints: {
//             '640': {

//                 perPage: 1,
//                 perMove: 1,

//                 rewind: true,

//             },
//             '480': {
//                 // type   : 'loop',
//                 perPage: 1,
//                 perMove: 1,


//             },
//         }
//     }).mount();
// });
</script>
<style>
    button.btn.btn-primary.yith-wcan-reset-filters.reset-filters.enhanced {
    background: #8cc122 !important;
    padding: 15px 10px;
    width: 100%;
    border: none;
    color: #fff;
    font-size: 18px;
    border-radius: 3px;
}
    label[for="filter_852_0_24"],label[for="filter_869_0_22"] {
    display: none;
}
    .yith-wcan-filters .yith-wcan-filter .filter-items .filter-item{
        margin-bottom: 4%;
    }
    ul.filter-items.filter-checkbox.level-1 {
    padding-top: 4%;
}
    @media screen and (max-width:768px){
        .tab_parent_cc.product-sidebar-filter.add_new_left_tab_prt.desktop_nn {
    display: none;
}
.mobile_nn h4.filter-title {
    display: none;
}
    }
    /* @media screen and (max-width:767px){
        .mobile_nn h4.filter-title {
    display: none;
}
    } */
    @media screen and (min-width:1280px){
        .yith-wcan-filters .yith-wcan-filter .filter-items.level-0 ul {
    padding-left: 20px !important;
}
    }
    li.filter-item label input {
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    appearance: none;
    display: inline-block;
    vertical-align: middle;
    border: 2px solid #555;
    width: 20px;
    height: 20px;
    outline: 0;
    padding: 4px;
    margin-right: 5px;
    position: relative;
    background: #8cc122;
    border-color: #8cc122 !important;
}
li.filter-item.checkbox input[type=checkbox]:checked:after {
    content: "";
    width: 8px;
    height: 12px;
    border-bottom: 2px solid #333;
    border-right: 2px solid #333;
    display: block;
    position: absolute;
    top: 0;
    left: 4px;
    transform: rotate(45deg);
    top: -2px !important;
    border-bottom: 2px solid #fff !important;
    border-right: 2px solid #fff !important;
}
h4.filter-title {
    margin-top: 0 !important;
    padding-top: 0 !important;
    width: 78%;
    padding: 10px 0;
    margin: 10px 0;
    color: #000;
    font-size: 16px;
    font-weight: 500;
    opacity: inherit;
    font-family: 'Poppins', sans-serif;
    border-bottom: 1px solid #adadad;
}
.yith-wcan-filters .yith-wcan-filter .filter-items .filter-item>a:hover, .yith-wcan-filters .yith-wcan-filter .filter-items .filter-item>label>a:hover {
    color: #000 !important;
}
.yith-wcan-filters .yith-wcan-filter .filter-items .filter-item.active>a, .yith-wcan-filters .yith-wcan-filter .filter-items .filter-item.active>label>a{
    color: #000 !important; 
}
    @media screen and (min-width:760px) and (max-width:768px){
        .woocommerce-ordering.mobile_sorting{width: 100% !important;padding-left: 8% !important;}
    }
    @media screen and (max-width:768px) {
	select.orderby {
    display: none;
}
.stock-order {
    padding-bottom: 19px;
}

section.filtr_pp_ss.main_category_page {
	padding-top:20px;
}
}
    @media screen and (min-width:768px) and (max-width:991px) {html body .checkBoxCus input:checked~.checkmarkBx {
    width: 20px !important;
    height: 20px !important;
}

    }
    @media screen and (min-width: 650px) and (max-width: 768px) {
.header_menu_section.TopNav, .filter_all_categories .filter_sub {
	z-index:1 !important;
}
/* html body .left_short_filter .sort_title, html body .filter_all_categories .filter_sub {
	height:542px !important;
} */
}
    @media screen and (max-width:992px){
        .bapf_cchild, .bapf_ochild {
    position: relative;
    left: 25px;
}
    }
    html body a.button.wp-element-button.product_type_simple.add_to_cart_button.ajax_add_to_cart{
        width: -moz-available !important;
    }
    @media screen and (min-width:769px) and (max-width:1279px){
        html body .bapf_ckbox_sqchck input[type=checkbox]:checked:after {
            width: 5px !important;
    height: 9px !important;
    left: 3px !important;
    top: -1px !important;
}
        .bapf_sfilter .bapf_cchild, .bapf_sfilter .bapf_ochild{
            left: 15px;
            position: relative;
        }
        .bapf_sfilter ul li{
            margin-bottom: 10px !important;
    position: relative;
    top: 10px;
        }
    }
    @media screen and (min-width:769px) and (max-width:873px){
        html body .bapf_sfilter .bapf_body ul li ul {
    margin-left: -14px !important;
}
    }
    @media screen and (min-width:600px) and (max-width:768px){
        .woocommerce ul.products li.product .woocommerce-placeholder {
    border: 1px solid #f2f2f2;
    min-height: 180px;
    height: 140px !important;
    object-fit: contain;
}
    }
    @media screen and (min-width:769px) and (max-width:1023px){
        .woocommerce ul.products li.product .woocommerce-placeholder {
    border: 1px solid #f2f2f2;
    min-height: 180px;
    height: 130px !important;
    object-fit: contain;
}
    }
    @media screen and (min-width:1024px) and (max-width:1279px){
        .woocommerce ul.products li.product .woocommerce-placeholder {
    border: 1px solid #f2f2f2;
    min-height: 150px;
    height: 140px !important;
}
    }

    .fa-minus:before,.fa-plus:before{
        vertical-align: middle;
    }
    @media screen and (max-width:767px){
    html body input#bapf_2_23, html body label[for="bapf_2_23"] {
    display: inline-block !important;
}
}
 p.stock {
    display: none !important;
}
    @media screen and (min-width:1280px) and (max-width:1600px){
        html body .bapf_sfilter .bapf_body ul li ul {
    margin-left: -23px !important;
}
    }
    .testingchecked input {
    background: #8cc122;
}
.mobile_testing input,.mobile_sorting span.checkmarkBx {
    background: #8cc122;
}
    .add_new_left_tab_prt li.checked input {
    background: #8cc122 !important;
}
    section.filtr_pp_ss.main_category_page {
    padding-bottom: 15px;
}
    .bapf_sfilter .bapf_body ul li ul {
    margin-left: 0 !important;
}
    input#bapf_1_23, input#bapf_1_33, input#bapf_1_24, input#bapf_1_22,input#bapf_2_23, input#bapf_2_33, input#bapf_2_24, input#bapf_2_22 {
    display: none !important;
}
html body label[for="bapf_1_22"],html body label[for="bapf_1_23"],html body label[for="bapf_1_33"],html body label[for="bapf_1_24"],html body label[for="bapf_2_22"],html body label[for="bapf_2_33"],html body label[for="bapf_2_24"] {
    display: none !important;
}
@media screen and (max-width:991px){
    .woocommerce-ordering.mobile_sorting {
    float: revert !important;
}
    .woocommerce-ordering.mobile_sorting {
    width: 60%;
    margin: 0 auto !important;
    padding-bottom: 7%;
}
}
     @media screen and (min-width:1920px){
                html body .search_function input[type="submit"] {
            right: 1px !important;
        }
    }
      @media screen and (min-width:1280px){
        input#send{    left: -175px !important;}
    }
    @media screen and (min-width:991px){
        
  .mobile_only_show {
    display: none !important;
}
        .mobile_sorting{display:none !important;}
    }
    @media screen and (max-width:767px){
        #filter-cat .tab_parent_cc.product-sidebar-filter.add_new_left_tab_prt{
            height: 450px;  
            overflow:scroll;
        }
        input#email{width:100% !important;}
    }
html body a.button.wp-element-button.product_type_simple.add_to_cart_button.ajax_add_to_cart{ width: -webkit-fill-available !important;}

a.wpcbn-btn.wpcbn-btn-archive.button.product_type_simple.add_to_cart_button {
    width: -webkit-fill-available;
    background: #8cc122 !important;
    color: #fff;
    text-transform: uppercase;
    font-weight: 400;
    font-size: 18px;
}
    /* stick bar  */
    #stricky_sec{
    display:none;
  }
  .woocommerce .star-rating span {
    color: #ffca2c;
  }
  .woocommerce .star-rating::before {
    right:0 !important;
  }
  .woocommerce .star-rating span::before {
    right:0 !important;
  }
  .woocommerce .star-rating {
    width:100% !important;
  }
  .bapf_sfilter {
    margin-bottom:0 !important;
  }
  li.menu-item {
    padding: 0 !important;
  }
  a.button.wp-element-button.product_type_simple.add_to_cart_button.ajax_add_to_cart {
    /* margin: 0 auto; */
    padding: 7px 8px !important;
    width: 96% !important;
}
  .bapf_ckbox_sqchck input[type=checkbox] {
    border: 2px solid #8cc122 !important;
  }
  .desktop_filter .bapf_sfilter .bapf_body>ul {
    margin-left: -40px;
  }
  .bapf_sfilter.bapf_ckbox input[type=checkbox] {
    margin-right: 11px !important;
  }
  /* .bapf_sfilter.bapf_ckbox input[type=checkbox] {
    width:auto;
  } */
  li.checked input {
    background: #8cc122;
}
.bapf_ckbox_sqchck input[type=checkbox]:checked:after {
    top: -2px !important;
    border-bottom: 2px solid #fff !important;
    border-right: 2px solid #fff !important;
}
  .checkBoxCus input:checked~.checkmarkBx {
    border: #8cc122 solid 1px;
    background-color: #8cc122;
    width: 21px;
    height: 21px;
}
.checkBoxCus input:checked~.checkmarkBx::after {
    display: block;
}
.checkBoxCus .checkmarkBx::after {
    border: #ffffff solid 1px;
    background-color: #8cc122;
    border-width: 0 2px 2px 0;
    left: 6px;
    top: 2px;
    width: 7px;
    height: 12px;
}
.checkBoxCus strong {
    font-family: 'Poppins', sans-serif;
    color: #7e7e7e;
    font-weight: 500;
}

  /* #check_sort {
    display: none;
} */
    section#stricky_sec {
    position: fixed;
    z-index: 9999;
    bottom: 0;
    top:auto;
    width: 100%;
}
/* div#check_sort {
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 1;
    bottom: 0;
    margin-top: 269px;
} */
.cate_sec {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.str_cc {
    width: 49.75%;
    text-align: center;
    background: black;
}
button.str-fm {
    background: black;
    width: 100%;
    border: none;
}
.st_bt {
    background: black;
    display: flex;
    align-items: center;
    padding: 0px 50px;
}
.fdd {
    padding-right: 10px;
}
.category_stricky {
    font: normal normal normal 14px/21px Poppins;
    letter-spacing: 0px;
    color: #FFFFFF;
}
span.div_sep {
    background: white;
    width: 1px;
}
section#stricky_sec {
    position: fixed;
    z-index: 1 !important;
    bottom: 0;
    width: 100%;
}
@media screen and (max-width:768px) {
    ul.products.columns-4{margin-left:0 !important;}
    #stricky_sec{
    display:block !important;
  }
  .stock-order form {
    display: none;
}
  .st_bt {
    justify-content:center;
  }
}
@media screen and (max-width: 767px) {
    div#bapf_3 {
    display: none;
}
.fdd img {
    height: unset !important;
    max-width: unset !important;
}
    .berocket_single_filter_widget.berocket_single_filter_widget_279.desktop_filter {
    display: none;
}
    /* .mobile-filter  {
        display: block;
    }
    .berocket_single_filter_widget.berocket_single_filter_widget_278 {
    display: block;
}
    .tab_parent_cc .bapf_body {
    display: none;
} */

    .bapf_head {
    display: none;
}
    #filter-cat {
    position: FIXED;
    top: 0;
    width: 100%;
    z-index: 9;
}
.filter_all_categories .filter_sub {
    top: 146px;
    background: #fffffff2;
}
.filter_sub {
    top: 53px;
    position: fixed;
    width: 100%;
    /* background: #ffffffe6; */
    background: #fffffffa;
    height: 100%;
}
.filter_all_categories .filter_sub .filt-hed {
    border-bottom: 1px solid #b3b3b3;
    margin-top: -9px;
    background: #fff;
}
.filter_all_categories .filter_sub h3 {
    position: sticky;
    margin-left: 26px;
    padding: 0;
    display: block;
    height: inherit;
    padding-top: 12px;
    margin: 14px;
    padding-left: 12px;
    font-size: 19px;
}
Span#close_cat {
    position: absolute;
    top: 20px;
    bottom: 0;
    right: 15px;
    /* width: 8px; */
}
.filter_all_categories .filter_sub .tab {
    display: block;
    overflow: auto;
    margin: 0px 21px;
    padding: unset;
    padding-top: 10px;
    overflow-x: hidden;
}
    .ck_PP {
    padding: 13px 15px;
    color: #808080;
    /* border: 1px solid #D4D4D4; */
    /* border-bottom: 1px solid #D4D4D4; */
}
.short_filter_scroll {
    display: block;
    height: 500px;
    overflow: scroll;
}
    .left_short_filter {
    width: 100%;
    float: left;
}
.left_short_filter .sort_title {
    position: fixed;
    width: 100%;
    background: #FFFFFF 0% 0% no-repeat padding-box;
    opacity: 0.95;
    border: 1px solid #D4D4D4;
    bottom: 0;
    height: 100%;
    z-index: 999;
    top: 146px;
}
.ck_ss {
    /* border: 1px solid #D4D4D4; */
    border-bottom: 1px solid #D4D4D4;
}
.ck_ss p {
    text-align: left;
    font: normal normal normal 18px Poppins;
    letter-spacing: 0px;
    color: #808080;
    opacity: 1;
    margin: 13px 25px;
}
span.st-cle {
    position: absolute;
    top: 11px;
    right: 16px;
    font-size: 17px;
}

    /* .tab_parent_cc {
        display: none;
    } */
/* #stricky_sec {
    display: block;
} */
}
    /* filter section */
    .bapf_head h3 {
    float: left;
    margin-top:0 !important;
    padding-top:0 !important;
    width: 78%;
    padding: 10px 0;
    margin: 5px 0;
    color: #000;
    font-size: 16px;
    font-weight: 500;
    opacity: inherit;
    font-family: 'Poppins', sans-serif;
    border-bottom: 1px solid #adadad;
}
.bapf_body label {
    color: #7e7e7e;
    font-weight: 500;
    font-size: 17px;
    line-height: 2.5;
    font-family: 'Poppins', sans-serif;
}
.bapf_body ul li input:checked~ .checkmarkBx {
    border: #8cc122 solid 1px;
    background-color: #8cc122;
    width: 21px;
    height: 21px;
}
input:checked~.checkmarkBx:after {
    border: #ffffff solid 1px;
    background-color: #8cc122;
    border-width: 0 2px 2px 0;
    left: 6px;
    top: 2px;
    width: 7px;
    height: 12px;
    display: block;
    content: "";
    position: absolute;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
    .all-categories-item {
    display: inline-grid;
}
 .checkBoxCus strong {
    color: #7e7e7e;
    font-weight: 500;
}
.checkBoxCus input {
    position: absolute;
    left: -37px;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}
.checkBoxCus input:checked~.checkmarkBx::before {
    content: '';
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    position: absolute;
    border: #ffffff solid 1px;
    background-color: #8cc122;
    border-width: 0 2px 2px 0;
    left: 6px;
    top: 2px;
    width: 7px;
    height: 12px;
    display: block;
}
.checkBoxCus .checkmarkBx {
    border: #8cc122 solid 1px;
}
.checkmarkBx {
    position: absolute;
    top: -3px;
    left: -36px;
    height: 20px;
    width: 20px;
}
.checkBoxCus input:checked~.checkmarkBx:after {
    display: block;
}
 .checkBoxCus .checkmarkBx:after {
    border: #ffffff solid 1px;
    background-color: #8cc122;
    border-width: 0 2px 2px 0;
    left: 6px;
    top: 2px;
    width: 7px;
    height: 12px;
}
.checkBoxCus .checkmarkBx::after {
    webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
.checkBoxCus input:checked~.checkmarkBx {
    border: #8cc122 solid 1px;
    background-color: #8cc122;
    width: 21px;
    height: 21px;
}
label.checkBoxCus {
    float: left;
    width: 100%;
    font-size: 15px;
    color: #231F20;
    line-height: 1;
    font-weight: 300;
    margin-bottom: 0px;
    margin-top: 15px;
    margin-bottom: 15px;
    position: relative;
}
    .all_menu_main_top a .tablinks {
    font-size: 16px;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
    opacity: inherit;
}
.all_menu_main_top {
    width: 100%;
    float: left;
    position: relative;
}
.add_new_left_tab_prt .arrow_none .tablinks.active {
    color: #000;
}
a.arrow_none {
    text-decoration:none;
    width: 100%;
    border-bottom: 1px solid #adadad;
    color: #2C2C2C;
    font-weight: 500;
    font-size: 17px;
    float: left;
    padding: 10px 0;
    margin: 5px 0;
}
    #image-slider_mob1 .splide__list {
    height: auto;
}
	 #image-slider_mob1 ul.splide__pagination {
    display: none !important;
}
.post_recent_slide_cat a {
    text-decoration: none;
}
p.last_update_right_cat {
    font: normal normal normal 16px Poppins;
    margin-bottom: 0;
    color: #686868;
    /* text-decoration: none; */
}
.read_blogs p {
    font: normal normal normal 16px Poppins;
    margin-bottom: 0;
    color: #686868;
}
p.read_blogs {
    /* position: absolute; */
    bottom: -50px;
    background: url(https://staging.madmorllc.com/wp-content/uploads/2023/02/icons8-right-arrow-30.png) 106px 1px / 22px no-repeat;
    width: 200px;
}
p.read_blogs a {
    color: #8cc122;
    font: normal normal normal 16px Poppins;
}
.View-all-video {
    margin-top: 63px;
    font-family: 'Poppins', sans-serif;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 36px;
}
.View-all-video a {
    border: 1px solid #8cc122;
    /* padding: 10px 35px; */
    color: #2C2C2C;
    position: relative;
    width: 170px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration:none;
}
.View-all-video a:before {
    content: 'VIEW ALL';
}
.splide_whole_cc {
    width: 80%;
    margin: auto;
}
.splide_whole_cc {
    padding-right: 10px;
    border: 1px solid #F5F5F5;
    border-radius: 8px;
    padding-left: 10px;
    padding-top: 42px;
    height: 360px;
}
p.conter_nks {
    font: normal normal normal 18px Poppins;
    margin-top: 13px;
    margin-bottom: 8px;
}
	.blog_Cc h2 {
    text-align: center;
    font: normal normal 300 36px Poppins;
}
.blog_Cc h2 {
    margin-bottom: 70px;
    color: #2C2C2C;
}
.container_germ h2:after, .blog_Cc h2:after, .review_sec h2:after {
    content: '';
    width: 60px;
    display: flex;
    background: #8cc122;
    height: 2px;
    margin: auto;
    position: relative;
    bottom: -12px;
}
	/* .woocommerce .woocommerce-ordering {
    margin: 0 5.4em 1em !important;
} */
ul.products.columns-4 {
    display: flex;
    flex-wrap: wrap;
}
	ul.products.columns-4 {
    margin-left: 20px;
}
li.product.type-product {
	float: none !important;
    position: relative;
    width: 25.5% !important;
    padding: 20px !important;
    text-align: center;
    margin-right: 26px !important;
    border: 1px solid #D4D4D4;
    margin-bottom: 40px;
}
span.price {
    margin-bottom: 10px !important;
    margin: 0px;
    opacity: 1;
    font: normal normal normal 17px Poppins !important;
    color: #2c2c2cd6 !important;
    text-align: center !important;
}
a.button.wp-element-button.product_type_simple.add_to_cart_button.ajax_add_to_cart {
    background-color: unset;
    border: 1px solid #8cc122;
    position: relative;
    padding: 8px 62px;
    color: #2C2C2C;
    font: normal normal normal 14px/25px Poppins;
    height: 22px;
    text-decoration: none;
    cursor: pointer;
}
a#sbw_wc-adding-button-archive {
    /* background-color: #8cc122; */
    color: white;
    width: 30%;
    /* height: 35px; */
    padding: 8px 64px;
    FONT-WEIGHT: 500;
    /* padding: 5px 0px; */
    background: #8cc122;
    border: none;
    color: #fff;
    font: normal normal normal 14px/25px Poppins;
    text-transform: uppercase;
    cursor: pointer;
    margin-left: auto;
    margin-right: auto;
}
h2.woocommerce-loop-product__title {
    height: 40px;
    color: #2C2C2C !important;
    opacity: 0.5;
    text-transform: capitalize;
    line-height: 1.1;
    font-family: 'Poppins', sans-serif;
    text-decoration: none;
}
p.one_liners {
    font: normal normal normal 16px Poppins;
    color: #7a6d6d;
    height: 40px;
    line-height: 1.2;
}
img.attachment-woocommerce_thumbnail.size-woocommerce_thumbnail {
    width: 66% !important;
    height: auto;
    object-fit: contain;
    display: flex;
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    justify-content: center !important;
    margin: auto !important;
    border-bottom: 1px solid #D4D4D4;
    padding: 6px 15px;
    margin-top: -10px;
}
	   .tab-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    }
    .tab_parent_cc {
        width: 18%;
    margin-left: 9px;
    }
    .content_pp_sec {
    width: 80%;
}
.sticky {
    top: 0;
    position: fixed;
    background: #ffff;
    z-index: 1111;
    box-shadow: 0 0 10px 5px rgb(0 0 0 / 10%);
}
select.orderby {
    padding: 7px 35px !important;
}
		.stock-order {
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
    width: 100%;
}
.woocommerce-notices-wrapper {
    display: none;
}
p.woocommerce-result-count {
    font-family: 'Poppins', sans-serif;
    color: #2C2C2C;
}
.stock-order h2 {
text-align: left;
    font: normal normal 509 22px Poppins;
    color: #2C2C2C;
}
	.cat_hed {
    position: absolute;
    top: 43%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.category_banner img {
    height: 325px !important;
}
.cate_con h1 {
    font: normal normal 300 48px Poppins;
    color: #fff;
    margin-bottom: 0;
    text-align: center;
}
.content-area {
    text-align: center;
    color: white;
    font: normal normal 300 16px Poppins;
}
.woocommerce .woocommerce-breadcrumb {
    color: white !important;
}
.woocommerce .woocommerce-breadcrumb a {
	color: white !important;
}
select.orderby {
    border: 1px solid #8cc122;
    padding: 7px 42px;
    font-size: 14px;
    font-family: Arial;
    font-weight: 400;
    color: #8cc122;
    letter-spacing: 1px;
    -webkit-appearance: none;
    background-image: url(https://staging.madmorllc.com/wp-content/uploads/2023/01/icons8-down-arrow-32.png);
    background-repeat: no-repeat;
    background-position: 95%;
    background-color: #fff;
    background-size: 6% !important;
	outline: none;
}
ul.products.columns-4{
    margin-left:0 !important;
}
/* .woocommerce-breadcrumb::before {
content: '';
    border: solid #fff;
    border-width: 0 1.2px 1.2px 0;
    display: inline-block;
    padding: 3px;
    transform: rotate(45deg);
    -webkit-transform: rotate(-45deg);
    position: relative;
    margin: 1px 5px;
} */
@media screen and (min-width:769px) and (max-width:1023px) {
    .second-instock-sec {
    width: 72% !important;
}
}
@media screen and (min-width:1024px) and (max-width:1279px){
  
    html body select.orderby {
    padding: 7px 23px !important;
    background-position: 97% !important;
}
    .products img.woocommerce-placeholder.wp-post-image{
        object-fit: cover;  
    }
}
@media screen and (min-width:1024px) and (max-width:1084px) {
    li.product.type-product {
        width:24.5% !important;
    }
    .woocommerce .woocommerce-ordering {
    margin: 0 2.4em 1em !important;
}
}
@media screen and (min-width:1280px) and (max-width:1326px) {
    .woocommerce .woocommerce-ordering {
    margin: 0 2.5em 1em !important;
}
}
@media screen and (min-width:1400px) and (max-width:1439px) {
.woocommerce .woocommerce-ordering {
    margin: 0 3.6em 1em !important;
}
}
@media screen and (min-width:1536px) and (max-width:1579px) {
.woocommerce .woocommerce-ordering {
    margin: 0 5.2em 1em !important;
}
}
@media screen and (min-width:769px) and (max-width:824px) {
    .woocommerce .woocommerce-result-count {
    margin-left: 4em !important;
    }
    .woocommerce .woocommerce-ordering {
    margin: 0 1.4em 1em !important;
}
}
@media screen and (min-width:1366px) and (max-width:1380px) {
.woocommerce .woocommerce-ordering {
    margin: 0 3.4em 1em !important;
}
}
@media screen and (min-width:1440px) and (max-width:1480px) {
.woocommerce .woocommerce-ordering {
    margin: 0 4.1em 1em !important;
}
}
/* @media screen and (min-width:1440px) and (max-width:1480px) {
    .woocommerce .woocommerce-ordering {
    margin: 0 5.5em 1em !important;
}
} */
@media screen and (min-width:1660px) and (max-width:1680px) {
    .woocommerce .woocommerce-ordering {
    margin: 0 6.5em 1em !important;
}
}
@media screen and (min-width:1800px) and (max-width:1820px) {
    .woocommerce .woocommerce-ordering {
    margin: 0 8.1em 1em !important;
}
}
@media screen and (min-width:1600px) and (max-width:1659px) {
.woocommerce .woocommerce-ordering {
    margin: 0 5.8em 1em !important;
}
}
@media screen and (min-width:1880px) and (max-width:1890px) {
    .woocommerce .woocommerce-ordering {
    margin: 0 8.6em 1em !important;
}
}

@media screen and (min-width:1920px) {
    .woocommerce .woocommerce-breadcrumb a:nth-child(1) {
    padding-left: 6.5em !important;
}
    /* html body li.product.type-product{
        width: 27.5% !important;
    } */
.woocommerce .woocommerce-ordering {
    margin: 0 3.4em 1em !important;
}
}
a#sbw_wc-adding-button-archive, a.button.wp-element-button.product_type_simple.add_to_cart_button.ajax_add_to_cart {
    width: 63%;
}
@media screen and (min-width:1280px) and (max-width:1366px) {
    /* a.button.wp-element-button.product_type_simple.add_to_cart_button.ajax_add_to_cart {
    width: 92%;
    padding:0;
    } */
    a#sbw_wc-adding-button-archive {
        width: 92%;
    padding:0;
    }
}
/* } */
ul#menu-quick_menu a.nav__link, ul#menu-policies_menu a.nav__link, ul#menu-our_network a.nav__link {
    padding-bottom: 12px;
}
@media screen and (min-width:769px) {
    /* form.woocommerce-ordering.custom-code {
        display:block !important;
    } */
    form.woocommerce-ordering {
    display: none !important;
}
    .overall-sec-sad {
    display: flex;
    justify-content: space-between;
}
.first-con-empty {
    width: 18%;
    margin-left: 9px;
}
.second-instock-sec {
    width: 80%;
}
    section#stricky_sec {
    display: none !important;
}
}
@media screen and (min-width:768px) {
    span.checkmarkBx {
    border: 1px solid;
}
.bapf_body li {
    float: left;
    width: 100%;
    font-size: 15px;
    color: #231F20;
    line-height: 1;
    font-weight: 300;
    margin-bottom: 0px;
    margin-top: 15px;
    margin-bottom: 15px;
    position: relative;
}
/* input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
} */
.bapf_body label {
    color: #7e7e7e;
    font-weight: 500;
    font-size: 17px;
    line-height: 2.5;
    font-family: 'Poppins', sans-serif;
}
.checkmarkBx {
    position: absolute;
    top: 12px;
    left: -30px;
    height: 20px;
    width: 20px;
}
span.checkmarkBx {
    border: 1px solid;
}

}
@media screen and (min-width:500px) and (max-width:768px) {
    a#sbw_wc-adding-button-archive {
    width: 68%;
    }
    /* a.button.wp-element-button.product_type_simple.add_to_cart_button.ajax_add_to_cart {
    width: 69%;
    } */
}
div#image-slider_mob1 .splide__arrows {
    display: none;
}
@media screen and (max-width: 767px) {
    .cate_con h1 {
    line-height: 1.2;
    font: normal normal 300 32px Poppins;
}
h2.woocommerce-loop-product__title {
    font: normal normal normal 19px Poppins !important;
}
	.splide__list {
		height:unset !important;
	}
.container {
    padding: 0 15px;
}
}
@media screen and (max-width:992px) {
	.splide__arrows {
    display: none;
}
.splide__pagination {
	display: none !important;
}
}

@media screen and (min-width: 768px) and (max-width: 1023px) {
.tab_parent_cc {
    width: 25%;
}
.content_pp_sec {
    width: 72%;
}
li.product.type-product {
    width: 36.5% !important;
}
a#sbw_wc-adding-button-archive {
    width: 36%;
}
}

@media screen and (min-width: 1400px) and (max-width: 1880px) {
    /* li.product.type-product{
        width: 27.5% !important;
    }
    .woocommerce .woocommerce-ordering {
    margin: 0 0em 1em !important;
} */
    .woocommerce .woocommerce-breadcrumb a:nth-child(1){
        padding-left: 5em !important;
    }
.container {
    width: 90%;
    margin: auto;
}
section#myHeader .container {
    width: 100%;
}
}
@media screen and (min-width: 1881px) and (max-width: 1919px) {
.container, .subscribe_footer_sec {
    width: 90%;
    margin: auto;
}
section#myHeader .container {
    width: 100%;
}
}
@media screen and (min-width: 1920px) and (max-width: 2000px) {
.container, .subscribe_footer_sec, .cart-table, .bread_cc p {
    width: 1650px;
    margin: auto;
    max-width: 1920px;
}
section#myHeader .container {
    width: 100%;
}
}
@media screen and (min-width: 2001px) {
    section#myHeader .container {
    width: 100%;
}
.container, .cart-table, .bread_cc p {
    width: 1650px;
    margin: auto;
    /* max-width: 1920px; */
}
}

@media screen and (max-width:768px) {
    .checkBoxCus input:checked~.checkmarkBx::before {
        display: none;
    }
    input:checked~.checkmarkBx:after {
        left: 5px;
    top: 0px;
    }
    .checkBoxCus input:checked~.checkmarkBx {
        width: 9px !important;
    height: 9px !important;
    }

    .stock-order {
    display: block !important;
}
    p.woocommerce-result-count {
        float: revert !important;
    text-align: center !important;
    }
    form.woocommerce-ordering {
    float: revert !important;
}
    section.filtr_pp_ss.main_category_page .container {
    padding: 0 15px;
}
    .tab_parent_cc {
    width: 100%;
    margin-left: 9px;
}
.stock-order {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 30px;
    align-items: center;
    width: 100%;
}
	.tab-container {
    width: 90%;
    margin: auto;
    display: block;
	}
	li.product.type-product {
		width:100% !important;
		margin-right: auto !important;
	}
	.content_pp_sec {
    width: 100%;
    margin: auto;
}
	/* form.woocommerce-ordering {
		display:none;
	} */
	.woocommerce .woocommerce-result-count {
		margin:auto;
	}
}
@media screen and (min-width:992px) {
    .sticky {
    width: 100%;
}
}
@media screen and (min-width: 1200px) and (max-width: 1399px) {
.container {
    width: 90%;
    margin: auto;
}
}
@media screen and (min-width: 1024px) {
.category_banner .category_content {
    min-height: 323px;
}
}
.category_content {
    position: relative;
}
.category_content img {
    width: 100%;
}
div#nav-splide {
	height : 55px;
}
@media screen and (max-width:336) {
    a#sbw_wc-adding-button-archive {
    width: 35%;
    }
}
@media screen and (min-width:337px) and (max-width:500px) {
    /* a.button.wp-element-button.product_type_simple.add_to_cart_button.ajax_add_to_cart {
        width:65%
    } */
    a#sbw_wc-adding-button-archive {
        width:65%
    }
}
@media screen and (min-width:650px) and (max-width:768px){
   html body .filter_all_categories .filter_sub{
        z-index: 111111111111 !important;
    }
    .berocket_single_filter_widget.berocket_single_filter_widget_532.desktop_filter{
        display:none !important;
    }
    .filter_all_categories .filter_sub{
        bottom: 0 !important; 
        top: auto !important;
        /* height: 600px; */
    overflow: scroll;
    }
    .bapf_head h3 {
    display: none !important;
}
    .filter_all_categories .filter_sub {
    top: 146px;
    background: #fff;
}
.filter_sub {
    top: 53px;
    position: fixed;
    width: 100%;
    /* background: #ffffffe6; */
    background: #fffffffa;
    height: 100%;
}
.filter_all_categories .filter_sub .filt-hed {
    border-bottom: 1px solid #b3b3b3;
    margin-top: -9px;
    background: #fff;
}
.filter_all_categories .filter_sub h3 {
    position: sticky;
    margin-left: 26px;
    padding: 0;
    display: block;
    height: inherit;
    padding-top: 12px;
    margin: 14px;
    padding-left: 12px;
    font-size: 19px;
}
Span#close_cat {
    position: absolute;
    top: 20px;
    bottom: 0;
    right: 15px;
    /* width: 8px; */
}
.filter_all_categories .filter_sub .tab {
    display: block;
    overflow: auto;
    margin: 0px 21px;
    padding: unset;
    padding-top: 10px;
    overflow-x: hidden;
}
.short_filter_scroll {
    display: block;
    /* height: 500px;
    overflow: scroll; */
}
    .left_short_filter {
    width: 100%;
    float: left;
}
.left_short_filter .sort_title {
    position: fixed;
    width: 100%;
    background: #FFFFFF 0% 0% no-repeat padding-box;
    /* opacity: 0.95; */
    border: 1px solid #D4D4D4;
    bottom: 0;
    height: 100%;
    z-index: 999999999 !important;
    top: 107px;
}
.ck_ss {
    /* border: 1px solid #D4D4D4; */
    border-bottom: 1px solid #D4D4D4;
}
.ck_ss p {
    text-align: left;
    font: normal normal normal 18px Poppins;
    letter-spacing: 0px;
    color: #808080;
    opacity: 1;
    margin: 13px 25px;
}
span.st-cle {
    position: absolute;
    top: 11px;
    right: 16px;
    font-size: 17px;
}
.left_short_filter .sort_title{
    top: auto !important; 
    /* height: 600px !important; */
}
.checkmarkBx{
    top: 0px !important;   
}
}
@media screen and (min-width:1280px) and (max-width:1600px){
    h2.woocommerce-loop-product__title{
        min-height: 50px;
    }
    html body .products img.woocommerce-placeholder.wp-post-image {
    height: 180px !important;
    object-fit: cover;
}
}
.woocommerce .woocommerce-breadcrumb{margin:0 0 1em;padding:0;font-size:.92em;color:#767676 !important;}
.woocommerce .woocommerce-breadcrumb::after,.woocommerce .woocommerce-breadcrumb::before{content:" ";display:table;}
.woocommerce .woocommerce-breadcrumb::after{clear:both;}
.woocommerce .woocommerce-breadcrumb a{color:#767676 !important;}
.woocommerce .woocommerce-breadcrumb a:nth-child(1){padding-left:3em;}
nav.woocommerce-breadcrumb{width:100%;background:#F5F5F5;padding:30px 0px!important;color:#2C2C2C;opacity:.6;margin:0;font-family:'Poppins', sans-serif;margin:auto;}
@media screen and (max-width:767px){
nav.woocommerce-breadcrumb{text-align:center;}
}
@media screen and (max-width:767px){
.woocommerce .woocommerce-breadcrumb a:nth-child(1){padding:0!important;}
}
section#category_name_display h1 {
    text-align: center;
    margin-bottom: 2%;
    font-size: 30px;
    font-weight: 400;
}
/*categorychanges*/
ul.product-categories {
    padding-left: 0;
    list-style: none;
}
#secondary h3.widget-title {
    margin-top: 0 !important;
    padding-top: 0 !important;
    width: 78%;
    padding: 10px 0;
    margin: 10px 0;
    color: #000;
    font-size: 16px;
    font-weight: 500;
    opacity: inherit;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
}
#secondary ul.product-categories li {
    margin-bottom: 6%;
    border-bottom: 1px solid #99999924;
    width: 90%;
}
#secondary ul.product-categories li a {
    padding-bottom: 4px;
    display: inline-block;
}
ul.product-categories li a {
    padding-bottom: 4px;
    display: inline-block;
}
ul.children {
    list-style: none;
    padding-left: 9px;
    width: 100%;
}

/* ul.product-categories li {
    display: none;
}
ul.product-categories li.current-cat {
    display: block !important;
}
.cat-parent.current-cat-parent {
    display: block;
}
.current-cat.cat-parent ul li {
    display: block;
}
li.cat-item.cat-item-42.cat-parent.current-cat-parent a:not(.children li a), li.cat-item.cat-item-42.cat-parent.current-cat-parent span:not(.children li span) {
    display: none !important;
}
ul.children li {
    width: 100% !important;
}
li.cat-item.cat-item-42.cat-parent.current-cat-parent {
    border: none !important;
}
li.cat-item.cat-item-34.current-cat.cat-parent {
    border: none !important;
}
li.cat-item.cat-item-34 ul.children {
    padding-top: 6%;
}
li.cat-item.cat-item-34.cat-parent.current-cat-parent {
    border: none !important;
}
li.cat-item.cat-item-34.cat-parent.current-cat-parent ul li a,li.cat-item.cat-item-34.cat-parent.current-cat-parent ul li span {
    display: inline-block !important;
}
li.cat-item.cat-item-34.cat-parent.current-cat-parent a,li.cat-item.cat-item-34.cat-parent.current-cat-parent span {
    display: none !important;
}
.term-42 li.cat-item.cat-item-34.cat-parent ul.children {
    display: none;
}
.term-42 li.cat-item.cat-item-42.current-cat.cat-parent {
    border: none !important;
}
.term-42 ul.children {
    padding-top: 6%;
}
.archive.post-type-archive.post-type-archive-product ul.product-categories li {
    display: inline-block;
}
.archive.post-type-archive.post-type-archive-product li.cat-item.cat-item-42.cat-parent {
    border: none !important;
} */
li.cat-item.cat-item-23, li.cat-item.cat-item-24, li.cat-item.cat-item-22 {
    display: none;
}
@media screen and (min-width:1400px) and (max-width:1535px){
    section.filtr_pp_ss.main_category_page .container {
    width: 92%;}
    li.product.type-product{
        width: 26.5% !important;
    }
    ul.products.columns-4 {
    position: relative;
    left: 33px;
}
html body.woocommerce .woocommerce-ordering {
    margin: 0 2.1em 1em !important;
}
section#search_fun .container {
    width: 92% !important;
}
.logged-in .icon_palets {
    width: 210px;
}
.stock-order {
    position: relative;
    left: 33px;
}
#secondary ul.product-categories li{
    width: 95% !important;
}
#secondary h3.widget-title{
    width: 100% !important;
}
}
@media screen and (min-width:1360px) and (max-width:1399px){
    #secondary h3.widget-title{width:100% !important;}
    .woocommerce .woocommerce-breadcrumb a:nth-child(1) {
    padding-left: 4.5em !important;
}
}
@media screen and (min-width:1280px) and (max-width:1359px){
    #secondary h3.widget-title{width:100% !important;}
}
@media screen and (min-width:1327px) and (max-width:1365px){
    .woocommerce .woocommerce-ordering {
    margin: 0 3rem 0 1em !important;
}
}
/*newChanges*/
@media screen and (max-width:991px){
    #secondary h3.widget-title{display:none;}
}
ul.children li:last-child {
    border-bottom: none !important;
}
ul.children {
    padding-top: 5%;
}
li.cat-item.cat-item-34.current-cat.cat-parent a {
    color: #8cc122 !important;
}
li.cat-item.cat-item-34.current-cat.cat-parent ul.children li a {
    color: black !important;
}
.current-cat a {
    color: #8cc122 !important;
}
li.cat-item.cat-item-42.current-cat.cat-parent ul.children li a {
    color: black !important;
}
/*category*/
.cat-item-34 span.newSpan {
    width: 83px;
    height: 40px;
    display: inline-block;
    position: absolute;
    float: right;
    left: 0;
    right: 0;
    margin-left: auto;
    cursor: pointer;
}
.cat-item-34 span.newSpan:before {
    border: solid #50575e;
    border-width: 0 2px 2px 0;
    display: inline-block;
    padding: 3px;
    transform: rotate(224deg);
    -webkit-transform: rotate(224deg);
    content: "";
    position: absolute;
    right: 33px;
    top: 7px;
}
li.cat-item.cat-item-34 {
    position: relative;
    
}
.spanopen ul.children {
    display: none;
}

.cat-item-34.spanopen span.newSpan:before{
	-webkit-transform: rotate(45deg);
}
@media screen and (min-width:1381px) and (max-width:1399px){
	.woocommerce .woocommerce-ordering{
	    margin: 0 3.5rem 0 1em !important;
	}
}
@media screen and (min-width:1280px) and (max-width:1399px){
    #secondary ul.product-categories li{
        width: 100% !important;
    }
}
@media screen and (min-width:1206px) and (max-width:1279px){
    .woocommerce .woocommerce-ordering {
    margin: 0 1.6rem 0px 1em !important;
}
#secondary ul.product-categories li{
    width: 100% !important;
}
#secondary h3.widget-title{
    width: 100% !important;
}
}
@media screen and (min-width:1200px) and (max-width:1279px){
    .woocommerce ul.products::before{
        display:none;
    }
    .woocommerce .woocommerce-ordering {
    margin: 0 0rem 0px 1em !important;
}
li.product.type-product{
    margin-right: 0px !important;   
    width: auto !important;
}
#product-list-data ul.products.columns-4{
    grid-template-columns: repeat( auto-fit, minmax(250px, 1fr));
    display: grid !important;
    gap: 22px;
}
}
</style>
<section id="category_name_display">
    <?php global $post;
       $cate = get_queried_object();
       $cateID = $cate->term_id;
       $product_cat_name = $cate->name;    
      ?>
       <h1><?php echo $product_cat_name; ?></h1>
</section>
<section class="filtr_pp_ss main_category_page">
	<div class="container">
        <div class="overall-sec-sad">
        <div class="first-con-empty">
        </div>
        <div class="second-instock-sec">
<div class="stock-order">
<?php
if ( woocommerce_product_loop() ) {
	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' ); ?>

    </div>
    </div>
	</div>
    <div class="tab-container">
            <div class="tab_parent_cc  product-sidebar-filter add_new_left_tab_prt desktop_nn">
            <?php //echo do_shortcode( '[yith_wcan_filters slug="default-preset"]' ); ?>
            <?php
                    if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <div id="secondary" class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                    <!-- <span class="akilakarthik"></span> -->
                    </div>
                    <?php endif; ?>

            </div>


		<div class="content_pp_sec" id="product-list-data"><?php

	        woocommerce_product_loop_start();

                if ( wc_get_loop_prop( 'total' ) ) {
                    while ( have_posts() ) {
                        the_post();

                            /**
                             * Hook: woocommerce_shop_loop.
                             */
                            do_action( 'woocommerce_shop_loop' );
                            wc_get_template_part( 'content', 'product' );
                                    }
                                }
                                // echo "Sdfgdgsdg";

	                    woocommerce_product_loop_end();

                                /**
                                 * Hook: woocommerce_after_shop_loop.
                                 *
                                 * @hooked woocommerce_pagination - 10
                                 */
	                            do_action( 'woocommerce_after_shop_loop' );
                                        } else {
                                    /**
                                     * Hook: woocommerce_no_products_found.
                                     *
                                     * @hooked wc_no_products_found - 10
                                     */
                                    do_action( 'woocommerce_no_products_found' );
                                }

                                        /**
                                         * Hook: woocommerce_after_main_content.
                                         *
                                         * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                                         */
                                        do_action( 'woocommerce_after_main_content' );

                                        /**
                                         * Hook: woocommerce_sidebar.
                                         *
                                         * @hooked woocommerce_get_sidebar - 10
                                         */
                                        //do_action( 'woocommerce_sidebar' ); ?>
        </div>
   </div>
</div>
</div>
</section>
<section class="Readers_sec">
   <div class="single-container">
   <div class="container">
        <!-- mobile splider -->

       <div class="spliper_post trend">
            <div class="blog_Cc">
                <h2>Our Blogs</h2>

            </div>
            <div id="image-slider_mob1" class="post_splide">
                <div class="splide__track">
                    <div class="splide__list">
                          <?php $the_query = new WP_Query( array ( 'orderby' => 'rand', 'posts_per_page' => '3' ) );
                         while ( $the_query->have_posts() ) : $the_query->the_post();?>
                        <div class="splide__slide">
                            <div class="splide_whole_cc">
                                 <a href="<?php echo get_permalink() ?>">
                                <?php the_post_thumbnail('single-post-thumbnail');?>
                                   <!-- <span class="card-des-cc1">Dolorsit amet/Loremipsum</span> -->
                                <div class="post_recent_slide">
                                            <?php $categories = get_the_category();
                                            if ( ! empty( $categories ) ) {?>

                                            <?php } ?>
                                            <p class="slider-caption-class">
                                            <?php //echo the_title();?>

                                            </p>
                                                <p class="last_update_right"><?php echo the_modified_date('F j, Y'); ?><?php //$count_val=round(str_word_count($post->post_content)/ 120);
                                                        //echo ". $count_val mins read";
                                                    ?></p>
                                            <p class="conter_nks"> <?php echo wp_trim_words( get_the_content(),10, '' ); ?></p>
                                            <p class="read_blogs"><a href="<?php the_permalink() ?>">Read Article</a></p>
                                                <!-- <div class="read-more">
                                                <a href="<?php //the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php //the_title_attribute(); ?>"><button>Read Article</button></a>
                                                </div> -->
                                 </div>
                                                   </a>
                            </div>
                        </div>
                                            <?php endwhile;
                                        wp_reset_postdata(); ?>

                    </div>
                        <div class="View-all-video">
                        <a href="#"></a>
                        </div>
                 </div>
            </div>
        </div>
        </div>

<!-- end -->
</section>
<!-- 
<section>
                  <div class="choose-section">
					  <div class="container">
                    <h2 class="choose_h">Why Choose Us</h2>
                        <div class="chosse_content">
                            <div class="icon_banner">
                              <img class="choose_image" src="< ?php echo get_field('first_image', 'option'); ?>">
                              <p class="choose_para">< ?php echo get_field('first_content', 'option'); ?></p>
                            </div>
                            <div class="icon_banner">
                              <img class="choose_image" src="< ?php echo get_field('second_image', 'option'); ?>">
                              <p class="choose_para">< ?php echo get_field('second_content', 'option'); ?></p>
                            </div>
                            <div class="icon_banner">
                              <img class="choose_image" src="< ?php echo get_field('third_image', 'option'); ?>">
                              <p class="choose_para">< ?php echo get_field('third_content', 'option'); ?></p>
                            </div>
                            <div class="icon_banner">
                              <img class="choose_image" src="< ?php echo get_field('fourth_image', 'option'); ?>">
                              <p class="choose_para">< ?php echo get_field('fourth_content', 'option'); ?></p>
                            </div>
                        </div>
						</div>
                  </div>
</section> -->


<section class="cat-footer" id="stricky_sec">
    <div class="category_sticky">
        <div class="cate_sec">
                <div class="str_cc" id="two-srt" onclick="sortText()">
                  <button class="str-fm">
                  <div class="st_bt" id="s11">
                  <div class="fdd">
                      <img class="" src="https://staging.madmorllc.com/wp-content/uploads/2023/01/sort_cc.png">
                 </div>
                      <div class="fdc">
                      <p id="flag_3" class="category_stricky">sort </p></div>
                      </div>
                     </button>

                </div>
                <span class="div_sep"></span>

              <div class="str_cc " id="two-flt" onclick="filterText()">
                     <button class="str-fm">
                     <div class="st_bt" id="f11">
                     <div class="fdd">
                        <img class="" src="https://staging.madmorllc.com/wp-content/uploads/2023/01/filter_cc.png">
                        </div>
                        <div class="fdc">
                        <p id="globle_3" class="category_stricky">filter </p>
                        </div>
                        </div>
                      </button>

              </div>
        </div>
      </div>
</section>

<section>

<div class="check_PP left_short_filter" id="check_sort" style="display: none;">
<div class="sort_title">
<div class="ck_ss">
<p>sort by <span class="st-cle" id="srt-cls" onclick="sortclose()">✕</span></p>

</div>
<div class="short_filter_scroll">
<div class="mobile_only_show">
<div class="woocommerce-ordering mobile_sorting" method="get">
<div name="orderby" class="orderby" aria-label="Shop order">
<style>
    input#bapf_1_23,html body label[for="bapf_1_23"]{
        display:inline-block !important
    }
    .new {
        background: #8CC121;
}
.new:after{
content: "";
    width: 8px;
    height: 12px;
    border-bottom: 2px solid #fff;
    border-right: 2px solid #fff;
    display: block;
    position: absolute;
    top: 0 !important;
    left: 4px !important;
    transform: rotate(45deg);
}
</style>
<?php $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
parse_str($url_components['query'], $params);
// echo $url;
$url1= $params['orderby'];
$url_m=$_GET['orderby'];
?>
<?php if($url_m == 'popularity') { ?>

<script>
    console.log("testing");
    $(document).ready(function() {
$('body .p1').addClass("new");
});
</script>
<?php } ?>
<?php if($url_m == 'date') { ?>

<script>
    $(document).ready(function() {
$('body .p3').addClass("new");
});
</script>
<?php } ?>
<?php if($url_m == 'price') { ?>

<script>
    $(document).ready(function() {
$('body .p4').addClass("new");
});
</script>
<?php } ?>
<?php if($url_m == 'price-desc') { ?>

<script>
    $(document).ready(function() {
$('body .p4').addClass("new");
});
</script>
<?php } ?>

<div class="ck_new">
<label class="checkBoxCus">
	<strong> Sort by popularity </strong>
	<input type="radio" class="categories sort_by_tag ss" name="orderbysort" value="popularity">
	<span class="checkmarkBx p1"></span>
</label>
</div>
<div class="ck_new">
<label class="checkBoxCus">
	<strong> Sort by latest </strong>
	<input type="radio" class="categories sort_by_tag ss" name="orderbysort" value="date">
	<span class="checkmarkBx  p3"></span>
</label>
</div>

<div class="ck_new">
<label class="checkBoxCus">
	<strong> Sort by price: low to high </strong>
	<input type="radio" class="categories sort_by_tag ss" name="orderbysort" value="price">
	<span class="checkmarkBx p4"></span>
</label>
</div>

<div class="ck_new">
<label class="checkBoxCus">
	<strong> Sort by price: high to low </strong>
	<input type="radio" class="categories sort_by_tag ss" name="orderbysort" id="demo2" value="price-desc">
	<span class="checkmarkBx p5"></span>
</label>
</div>
 </div>
<input type="hidden" name="paged" value="1">
</div>
</div>
</div>
	</div>
</section>

<section class="filter_all_categories" id="filter-cat" style="display: none;">
	<div class="filter_sub">
	<div class="filt-hed">
	<h3>Filter</h3>
	<span id="close_cat" onclick="filclose()">✕</span>
	</div>
	<div class="tab">
    <div class="tab_parent_cc  product-sidebar-filter add_new_left_tab_prt mobile_nn">
        <div class="mobile-filter">
        <?php
                    if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <div id="secondary" class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                    <!-- <span class="akilakarthik"></span> -->
                    </div>
                    <?php endif; ?>
         </div>
            </div>
				</div>

	</div>

</section>

<?php

get_footer( 'shop' ); ?>

<script>
document.addEventListener( 'DOMContentLoaded', function () {
	new Splide( '#image-slider_mob1', {
	 type   : 'loop',
	 autoplay :  'true',
	 perPage: 4,
	perMove: 1,
	breakpoints: {
	 '640': {
		 perPage: 2,
		 padding: {
		 right: '2.5rem',
		 left: '2.5rem',
		 },
	 },
	 '768': {
	perPage: 2,
	padding: {
	right: '3.5rem',
	left: '3.5rem',
	},
	},
	'1024': {
	perPage: 3,
	padding: {
	right: '3.5rem',
	left: '3.5rem',
	},
	},
	 '480': {
		 perPage: 1,
		 padding: {
		 right: '1.5rem',
		 left: '1.5rem',
		 },
	 },
	}
	} ).mount();
	} );
</script>

<script>
	function filterText() {
	  document.getElementById("filter-cat").style.display = "block";
	  // document.body.style.overflow = 'hidden';
	}

	function sortText() {
	  document.getElementById("check_sort").style.display = "block";
	  // document.body.style.overflow = 'hidden';
	}
	</script>
	<script>
	function filclose() {
	  document.getElementById("filter-cat").style.display = "none";
	}

	function sortclose() {
	  document.getElementById("check_sort").style.display = "none";
	}

	</script>
<!-- // verify that this is a product category page -->

<script>
	document.getElementById('two-srt').addEventListener('click', () => {
	  document.getElementById('filter-cat').style.display = 'none';
	  document.getElementById('check_sort').style.display = 'block';

	})
	document.getElementById('two-flt').addEventListener('click', () => {
	  document.getElementById('check_sort').style.display = 'none';
	  document.getElementById('filter-cat').style.display = 'block';

	})
					</script>
	  <script>
	window.addEventListener('scroll', function (e) {
		var box = document.querySelector('#stricky_sec');
		var x = window.scrollY;
		if (x >= 900) {
			box.classList.add("sticky");
		} else {
			box.classList.remove("sticky");
		}
	});


	</script>
<script>
$(".ss").change(function () {
let orderbysortval=$('input[name="orderbysort"]:checked').val();
var urlParams = new URLSearchParams(window.location.search); 
var foo = urlParams.get('orderby'); 
if(foo) { 
	var currentUrl = window.location.href;
	var url = new URL(currentUrl);
	url.searchParams.set("orderby", orderbysortval); 
	var newUrl = url.href; 
	window.location.href=newUrl;
	console.log(newUrl);
}else{
	const url = window.location.href.split('?')[0];
	var currentUrl = url+"?orderby="+orderbysortval;
	window.location.href=currentUrl;

}

});
jQuery(document).ready(function(){
$("#f11").click(function () {
      $("body").toggleClass('ast-main-header-nav-open');
   })
})
var acc=document.querySelectorAll(".cat-item-34");var i;for(i=0;i<acc.length;i++){var newSpan=document.createElement('span');newSpan.className="newSpan";acc[i].insertBefore(newSpan,acc[i].childNodes[0]);}
var acc=document.querySelectorAll(".cat-item-34 span.newSpan");var i;for(i=0;i<acc.length;i++){acc[i].addEventListener("click",function(){this.parentElement.classList.toggle("spanopen");});}
    </script>



