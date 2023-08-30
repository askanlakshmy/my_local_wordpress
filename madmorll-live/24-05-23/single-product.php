<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */ ?>

<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<style>
    html body a.button.wp-element-button.product_type_simple.add_to_cart_button.ajax_add_to_cart{
        width: -moz-available !important;
    }
    button.wpcbn-btn.wpcbn-btn-single.testing1.button.alt:hover {
    background: transparent !important;
    color: #000;
    border: 1px solid #8cc122;
    transition: .2s;
}
.footer_menu_section {
    padding-bottom: 7.5%;
}
.entry-summary button.wpcbn-btn.wpcbn-btn-single.single_add_to_cart_button.button.alt {
    border: 1px solid #8cc122;
}
.entry-summary button.wpcbn-btn.wpcbn-btn-single.single_add_to_cart_button.button.alt:hover {
    border: 1px solid #8cc122;
    background: transparent !important;
    color: #000 !important;
}
.entry-summary button.single_add_to_cart_button.button.alt.wp-element-button:hover {
    color: #fff !important;
}
    section.related.products p.stock,#search_funs p.stock{display:none !important;}
    @media screen and (min-width:1280px){
        @-moz-document url-prefix() {
            .flex-viewport a {
  width: 70% !important;}
}
    }
    .entry-summary button.wpcbn-btn.wpcbn-btn-single.button.alt{
        width: -moz-available;
    }
    @media screen and (max-width:767px){
        p.meta {
    clear: both;
    padding-top: 15px !important;
}
    }
    .active_footer_cm::before {
    content: '-' !important;
}
    .quantity input[type="number"] {
    cursor: default;
}
    .entry-summary button.wpcbn-btn.wpcbn-btn-single.button.alt{
        font-weight: 500;
    }
    @media screen and (min-width:1280px){
        .woocommerce #review_form #respond p{
            display: inline;
        }
        div#wc-stripe-payment-request-button {
    display: none !important;
}
        .first-submit .quantity input[type="number"] {
    height: 55px;
}
.first-submit .quantity{
    height: 55px;  
}
        p#wc-stripe-payment-request-button-separator {
    display: none !important;
}
    }
    @media screen and (min-width:768px) and (max-width:1279px){
        .rev_name:after{
            top: 3px !important;
        }
        .popup_review span.woocommerce-Price-amount.amount bdi {
    font-size: 17px !important;
}
        .first-submit .quantity input[type="number"] {
    height: 55px;
}
.first-submit .quantity{
    height: 55px;  
}
        p#wc-stripe-payment-request-button-separator {
    display: none !important;
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
    @media screen and (max-width:767px){
       .first-submit .quantity input[type="number"] {
    height: 55px;
}
.first-submit .quantity{
    height: 55px;  
}
        p#wc-stripe-payment-request-button-separator {
    display: none !important;
}
        input#email{width:100% !important;}
    }
    a.wpcbn-btn.wpcbn-btn-archive.button.product_type_simple.add_to_cart_button {
    width: 40%;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    text-transform: uppercase;
    color: #fff;
    margin-left:10px;
    background: #8cc122 !important;
    font-weight: 400;
}
    button.wpcbn-btn.wpcbn-btn-single.button.alt {
    width: -webkit-fill-available;
    margin-top: 20px;
    background: #8cc122 !important;
    text-transform: uppercase;
    font-size: 19px;
    font-family: 'Poppins' !important;
    font-weight: 400 !important;
}
   button.review_write {
    border: 1px solid #8cc122;
    background: #8cc122;
    padding: 10px 40px;
    font: normal normal 300 16px Poppins;
    cursor: pointer;
    color: #fff !important;
}
.comment-text .star-rating {
    border-right: none !important;
}
    ul.tabs.wc-tabs {
    display: none;
}

div#tab-reviews {
    display: block !important;
}
div#tab-reviews {
    display: block !important;
    max-height: inherit !important;
}
    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
input[type=number]{
    -moz-appearance: textfield;
}
    /* .summary.entry-summary {
    padding-right: 45px;
} */
.rev_name h1.product_title.entry-title,.rev_name h3.product_title.entry-title {
    font: normal normal 300 30px Poppins;
    position: relative;
    opacity: .6;
    margin: 0;
}
.rev_name:after {
    right: -13px;
    content: '';
    display: inline-block;
    width: 3px;
    height: 100%;
    /* background-color: #eee; */
    position: absolute;
    top: -8px;
}
.price-sticky {
    border-left: 2px solid #eee;
}
.price-sticky p.price {
    justify-content:center;
}
.price-sticky {
    margin: 0;
    position: relative;
    width: 24%;
}
.price-sticky p.price del {
    font: normal normal 300 40px Poppins;
}
.btn_pp_sec .stick-adding .cg-product-cta {
    justify-content: space-between;
    display: flex;
    width: 100%;
}
.btn_pp_sec {
    width: 24%;
}
.btn_pp_sec .stick-adding .cg-product-cta a#sbw_wc-adding-button-archive {
    padding: 12px 0;
    margin: 0;
    text-align: center;
    width: 47% !important;
    width: 100%;
    cursor: pointer;
    background: #8cc122;
    border: none;
    color: #fff;
    width: 91%;
    /* padding: 10px; */
    font: normal normal normal 14px/25px Poppins;
    text-transform: uppercase;
}
.btn_pp_sec .stick-adding .cg-product-cta a.button.wp-element-button.product_type_simple.add_to_cart_button.ajax_add_to_cart {
    color: #2C2C2C;
    text-align: center;
    padding: 12px 0 !important;
    font : normal normal normal 17px/25px Poppins !important;
    background: #fff;
    width: 47% !important;
    border: 1px solid #8cc122 !important;
    position: relative;
}
.btn_pp_sec {
    width: 24%;

}
.price-sticky p.price ins {
margin: 0;
    color: #676767;
    position: relative;
    font: normal normal 300 36px Poppins;
    margin-left: 10px;
}
.price-sticky p.price {
    border: none;
}
.rev_img img {
    width: 100;
}
.rev_name {
    width: 38%;
    position: relative;
}
.rev_sec {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
}
.rev_img {
    border: 1px solid #DDDDDD;
}
    .flex-viewport a {
    width: 90%;
    display: block;
    margin: auto;
    border: 1px solid #DDDDDD;
}
/* .woocommerce-product-gallery.woocommerce-product-gallery--with-images.woocommerce-product-gallery--columns-4.images {
    padding-left: 45px;
} */
    section.related.products {
    width: 90%;
    margin: auto;
}
    .woocommerce #review_form #respond textarea {
    box-sizing: border-box;
    width: 40%;
    height: 136px;
}
    ul.products.columns-4 {
    padding: revert !important;
}
span.price {
    text-align: center;
}
h2.woocommerce-loop-product__title {
    font: normal normal normal 20px Poppins;
    line-height: 1.2;
    margin: 0;
    justify-content: center;
    align-items: center;
    display: flex;
    color: #7a6d6d;
    height: 3px;
    margin-top: 49px !important;
}
/* span.woocommerce-Price-amount.amount {
    font: normal normal normal 18px Poppins;
    margin: 0;
    margin-bottom: 15px;
} */
span.price del {
    color: #A3A2A2 !important;
    opacity: 1 !important;
}
.price ins {
    text-decoration: none;
}
/* span.woocommerce-Price-amount.amount {
    font: normal normal normal 18px Poppins;
    margin: 0;
    margin-bottom: 15px;
} */
    ul.products.columns-4 li {
    padding-right: 6px !important;
    border: 1px solid #cdc5c5;
    border-radius: 8px;
    padding-left: 10px !important;
    padding-top: 42px !important;
    height: 402px;
    width: 21.05%;

    }
    h2.related-product-title:after {
    width: 90px;
    content: '';
    display: flex;
    background: #8cc122;
    height: 3px;
    margin: auto;
    position: relative;
    left: -24px;
    bottom: -7px;
}
img.attachment-woocommerce_thumbnail.size-woocommerce_thumbnail {
    margin: 0 auto !important;
    width: 60% !important;
    height: 300px;
    object-fit: contain !important;
    border-radius: 6px !important;
    height: 212px !important;
}
 h2.related-product-title {
    font: normal normal 300 36px Poppins!important;
    text-align: center;
    margin-bottom:2em;
}
    .form-submit input#submit {
    width: 18% !important;
    padding: 13px 0;
    color: #FFFFFF !important;
    width: 100%;
    margin-top: 18px;
    background: #8cc122 !important;
    border: none;
    padding: 10px 2px !important;
    text-transform: uppercase;
    font-weight: 500 !important;
    font-size: 17px !important;
    font-family: 'Poppins', sans-serif;
}
p.comment-form-cookies-consent label {
    color: #676767;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
}
h2.woocommerce-Reviews-title {
    margin: 0;
    font: normal normal 300 27px Poppins;
}
ul.tabs.wc-tabs {
    z-index: -1;
}
input#wp-comment-cookies-consent {
    width: auto;
}
    p.woocommerce-noreviews {
    color: #676767;
    font-size: 16px;
    /* margin-left: 8px; */
    font-family: 'Poppins', sans-serif;
}
    #sbw_wc-adding-button {
        margin-left: 0px !important;
    }
    ul.tabs.wc-tabs a {
    font-family: sans-serif,'roboto';
}
.woocommerce #reviews #comments ol.commentlist li .comment-text {
    padding: 1em 1em 3em !important;
}
.woocommerce .star-rating span::before {
    color: #8cc122 !important;
}
span#reply-title {
    margin: 0;
    font: normal normal 300 21px Poppins;
    padding-bottom: 10px;
}
.woocommerce #review_form #respond textarea {
    width:100% !important;
}
h2.woocommerce-Reviews-title {
    text-align:center;
}
.woocommerce #review_form #respond p {
    margin:revert !important;
}
p.comment-notes {
    display: none;
}
p.stars {
    font-size: 22px;
    margin-right: 4px;
    margin-bottom: 12px;
}
.comment-form-rating label {
    color: #676767;
    font-size: 16px;
    font-family: 'Poppins', sans-serif;
}
/* p.comment-form-author {
    display: none;
}
p.comment-form-email {
    display: none;
} */
p.comment-form-comment label {
    color: #676767;
    font-size: 16px;
    /* margin-left: 8px; */
    font-family: 'Poppins', sans-serif;
}
.woocommerce p.stars a {
    position: relative;
    color: #8cc122;
    height: 1em;
    width: 1em;
    text-indent: -999em;
    display: inline-block;
    text-decoration: none;
}
.woocommerce #reviews #comments ol.commentlist {
    padding:0 !important;
}
.woocommerce #reviews #comments ol.commentlist li .comment-text p {
    /* margin: 0 0 1em; */
    margin: 0 !important;
    font: normal normal 400 18px Poppins !important;
    padding-bottom: 10px;
}
    .woocommerce .quantity .qty {
    width: 3.631em;
    height: 51px !important;
    text-align: center;
    margin-right: 0 !important;
}
form.cart {
    display: flex;
    justify-content: flex-start;
    display: flex;
    flex-wrap: wrap;
    width: 65%;
}
.quantity {
    display: flex !important;
    /* display: flex; */
    width: 137px !important;
    margin-left: 0px !important;
}
    button.minus {
    padding: 13px 14px;
    background: none;
    border: 1px solid #D4D4D4;
    color: #707070;
    /* margin-right: -4px; */
    font: normal normal 300 15px Poppins;
}
input#quantity_63d7cbf2e56e3 {
    text-align: center;
    border: 1px solid #D4D4D4;
    border-left: none;
    padding: 10px 11px !important;
    width: 53px !important;
    border-right: none;
    color: #707070;
}
button.plus {
    padding: 13px 14px;
    background: none;
    border: 1px solid #D4D4D4;
    color: #707070;
    font: normal normal 300 15px Poppins;
}
    .single-product div.product form.cart .quantity {
    float: none;
    margin: 0;
    display: inline-block;
}
    ol.flex-control-nav.flex-control-thumbs li img {
    padding: 11px 8px !important;
    /* width: 100%; */
    max-width: 42% !important;
}
ol.flex-control-nav.flex-control-thumbs li {
    /* width:100% !important; */
}
/* ol.flex-control-nav.flex-control-thumbs {
    margin-left: 31px !important;
} */
ol.flex-control-nav.flex-control-thumbs li {
    margin: 0 auto;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
}
    .about_products ul {
    list-style: none;
    padding: 0;
    line-height: initial;
    margin: 0;
    float: left;
    width: 100%;
    margin-bottom: 20px;
    border-bottom: 1px solid #cecece;
    padding-bottom: 20px;
}
.about_products ul li {
    /* width: 100%;
    float: left; */
    font-family: 'Poppins', sans-serif;
    padding-left: 22px;
    position: relative;
    font-size: 15px;
    margin-top: 5px;
    font-weight: 400;
    color: #676767c7;
}
.about_products ul li::before {
    content: "";
    width: 6px;
    height: 6px;
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: 6px;
    background: #959393;
}
.about_products {
    margin-top: 12px;
}
a.woocommerce-product-gallery__trigger {
    display: none;
}
ol.flex-control-nav.flex-control-thumbs li {
    padding: 14px 6px 0 19px !important;
}
    .woocommerce .quantity .qty {
        border: 1px solid #D4D4D4;
    }
    .woocommerce-product-gallery__image {
    width: 86%;
    }
    .summary.entry-summary {
        width:40% !important;
    }
    button#sbw_wc-adding-button {
        width:55.5% !important;
    }
	.woocommerce div.product div.images img {
    /* height: 400px !important; */
    width: 82% !important;
    max-width: 76%;
    margin: 0 auto;
    transition: 0 auto;
    display: block;
    padding: 14px 14px 0 70px;
    height: auto;

}
.woocommerce-tabs.wc-tabs-wrapper {
    width: 90%;
    margin: auto;
}
.woocommerce div.product {
    margin: auto;
    margin-bottom: 0;
    position: relative;
    width: 100%;
}
h1.product_title.entry-title {
    width: 100%;
    /* position: absolute; */
    top: 0;
    height: auto;
    margin-top: 0 !important;
    font: normal normal 300 34px Poppins;
    color: #2C2C2C;
    opacity: .6;
    margin-top: 10px;
    margin-bottom: 0px;
}
.woocommerce div.product p.price, .woocommerce div.product span.price {
    color: #77a464;
    font-size: 1.25em;
    margin: 0;
}
/* span.woocommerce-Price-amount.amount {
    margin: 0;
    padding-right: 7px;
    font: normal normal 300 27px Poppins;
    color: #2C2C2C;
} */
.woocommerce-product-details__short-description p {
    padding-top: 12px;
}
.woocommerce div.product .stock {
    color: #8cc122;
    font-family: 'Poppins', sans-serif;
}
.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover {
    background-color: #8cc122 !important;
    color: #fff;
}
.product_meta {
    display: none;
}
.woocommerce-product-details__short-description p {
    font: normal normal 300 15px Poppins;
    margin: 0;
    color: #676767;
}
.woocommerce .quantity .qty {
    width: 3.631em;
    text-align: center;
    height: 36px;
    /* padding: 0; */
}
button.single_add_to_cart_button.button.alt.wp-element-button {
    font: normal normal normal 17px/25px Poppins;
    border: 1px solid #8cc122;
    background: transparent;
    /* height: 100%; */
    color: #2C2C2C;
    width: 63%;
    text-transform: uppercase;
}
button#sbw_wc-adding-button {
    width: 88% !important;
    padding: 13px 0;
    color: #FFFFFF;
    width: 100%;
    margin-top: 18px;
    background: #8cc122;
    border: none;
    padding: 10px 2px;
    font: normal normal 300 17px Poppins;
    text-transform: uppercase;
}
form.cart a {
    display: none;
}
	.woocommerce .woocommerce-breadcrumb a:nth-child(1) {
    padding-left: 3em;
}
.woocommerce-product-gallery__image {
    padding-bottom: 12px;
}
nav.woocommerce-breadcrumb {
    width: 100%;
    background: #F5F5F5;
    padding: 30px 0px !important;
    color: #2C2C2C;
    opacity: .6;
    margin: 0;
    font-family: 'Poppins', sans-serif;
    margin: auto;
}

.woocommerce div.product p.price ins, .woocommerce div.product span.price ins {
    text-decoration:none;
}
/* lakshmy  */
@media screen and (min-width:600px) and (max-width:767px) {
    ol.flex-control-nav.flex-control-thumbs {
    width: 72% !important;
}
}
@media screen and (min-width:1280px) {
    ol.flex-control-nav.flex-control-thumbs li img {
   margin-top: 0 !important;
    }
    ol.flex-control-nav.flex-control-thumbs li:first-child {
    margin-bottom: 8px !important;
    }
    .single-product div.product .woocommerce-product-gallery .flex-control-thumbs {
        margin-top:0 !important;
    }
}
@media screen and (max-width:1279px) {
    .single-product div.product .woocommerce-product-gallery .flex-control-thumbs {
    margin-top:16px !important;
    margin-bottom:16px !important;
}
    ol.flex-control-nav.flex-control-thumbs {
    display: flex;
    }
}
@media screen and (min-width:768px) and (max-width:1279px) {
    .woocommerce div.product .woocommerce-product-rating {
    margin-bottom:0 !important;
}
span.woocommerce-Price-amount.amount bdi {
    font: normal normal 300 30px Poppins;
    color: #2C2C2C;
}
p.price del {
    font: normal normal 300 29px Poppins !important;
    margin: 10px;
    margin-left: 0 !important;
    color:#8cc122 !important;
}
a.woocommerce-review-link {
    font: normal normal 300 18px Poppins;
    color: #676767;
    margin: 0 12px;
}
}
a.woocommerce-review-link {
    font: normal normal 300 18px Poppins;
    color: #676767;
}
.star-rating {
    border-right: 2px solid #eee;
    padding-right: 18px !important;
}
    .single-product div.product .woocommerce-product-gallery .flex-viewport {
        width:100% !important;
    }
    form.cart {
    width: 80%;
}
.first-submit {
    display: flex;
    justify-content: space-between;
    width: 100%;
}
.woocommerce div.product form.cart div.quantity {
    margin: 0 10px 0 0 !important;
}
.woocommerce .quantity .qty {
    height: 55px !important;
}
    /* button.single_add_to_cart_button.button.alt.wp-element-button {
        margin-top:8px !important;
    } */
    .woocommerce div.product div.images.woocommerce-product-gallery {
        float: left !important;
    width: 48% !important;
    }
    .single-product div.product .woocommerce-product-gallery .flex-control-thumbs {
    width: 75% !important;
    float: left;
}
@media screen and (max-width:767px){
    span.woocommerce-Price-amount.amount bdi {
    font: normal normal 300 22px Poppins;
    color: #2C2C2C;
}
p.price del {
    font: normal normal 300 20px Poppins;
    margin: 5px;
}
h1.product_title.entry-title {
    font:normal normal 300 21px Poppins !important;
}
.woocommerce div.product div.images.woocommerce-product-gallery {
    padding-left:0 !important;
}
}
.woocommerce div.product div.images.woocommerce-product-gallery {
    padding-left: 42px;
}
    /* .woocommerce-product-gallery.woocommerce-product-gallery--with-images.woocommerce-product-gallery--columns-1.images {
    display: flex;
    flex-direction: column-reverse;
} */
/* ol.flex-control-nav.flex-control-thumbs {
    display: flex;
    justify-content: start !important;
} */
ol.flex-control-nav.flex-control-thumbs li img {
    padding: 1px 8px !important;
    max-width: 62% !important;
}

ol.flex-control-nav.flex-control-thumbs li {
    padding:0 !important;
}
@media screen and (min-width:768px) and (max-width:933px) {
    .summary.entry-summary {
    width: 41% !important;
    padding-right: 42px;
    float: right !important;
}
}
@media screen and (min-width:934px) {
    .summary.entry-summary {
    width: 43% !important;
    padding-right: 42px;
    float: right !important;
}
}
.woocommerce div.product div.images img {
    padding: 14px 14px 0 28px;
}
h1.product_title.entry-title {
    font: normal normal 300 24px Poppins;
}
/* button.single_add_to_cart_button.button.alt.wp-element-button {
    margin-top:8px;
} */
/* } */

@media screen and (max-width:600px) {
    h2.woocommerce-Reviews-title::after {
        right:3px;
    }
    ol.flex-control-nav.flex-control-thumbs {
    width: 100% !important;
}
}
@media screen and (max-width:767px) {
    form.cart {
    display: flex !important;
    width: 100%;
}
.first-submit {
    display: flex;
    justify-content: space-between;
    width: 100% !important;
}
    .summary.entry-summary {
        width: 90% !important;
    margin: auto;
}
    .single-product div.product .woocommerce-product-gallery .flex-viewport {
    width: 100% !important;
    float: unset !important;
}
.woocommerce div.product div.images img {
    padding: 14px 14px 0 32px;
}
    .woocommerce div.product div.images.woocommerce-product-gallery {
    display: flex !important;
    flex-direction: column-reverse;
    width:100% !important;
}
ol.flex-control-nav.flex-control-thumbs {
    display: flex;
    justify-content: start !important;

}
ol.flex-control-nav.flex-control-thumbs li img {
    padding: 11px 8px !important;
    max-width: 62% !important;
}
}
@media screen and (min-width:1280px) and (max-width:1333px) {
    .summary.entry-summary {
    padding-right: 104px !important;
}
body .summary.entry-summary {
    width: 40% !important;
    padding-right: 120px;
}
.single-product div.product .woocommerce-product-gallery .flex-control-thumbs {
    width: 37% !important;
    float: left;
}
}
/* h2.woocommerce-Reviews-title::after {
    align-items: center;
    content: '';
    width: 70px;
    display: flex;
    background: #8cc122;
    height: 2px;
    text-align: center;
    justify-content: center;
    margin: auto;
    position: relative;
    bottom: 3px;
    right: 6px;
} */
/* .comment-text {
    width: 75%;
} */


/* p.comment-form-comment label {
    display: none !important;
} */
.comment-form-rating label {
    display: none !important;
}
@media screen and (min-width:280px) {
    div#reviews {
    width: 90%;
    margin: auto;
    padding-top:8px;
    padding-bottom: 16px;
}
}
div#tab-reviews {
    border: none;
    display: block !important;
    /* border: 1px solid; */
    box-shadow: 0 2px 20px 0 hsl(0deg 0% 51% / 15%);
    max-height: inherit !important;
}
@media screen and (max-width:1280px) {
    h2.woocommerce-Reviews-title {
    font: normal normal 300 20px Poppins;
    padding-bottom: 30px;
    }
}
@media screen and (min-width:1280px) {
    h2.woocommerce-Reviews-title {
        font: normal normal 300 30px Poppins;
    text-align: center;
    margin-top: 0;
    padding-bottom: 38px;
    }
    .single-product div.product .woocommerce-product-gallery .flex-control-thumbs {
    width: 41%;
    }
    .woocommerce div.product div.images.woocommerce-product-gallery {
    display: flex !important;
    width: 44% !important;
}
.single-product div.product .woocommerce-product-gallery .flex-viewport {
    width: 70%;
    float: left;
}
.flex-viewport a {
    width: 99%;
    margin-left: 0 !important;
    margin-right: 0 !important;
}
.woocommerce div.product div.images img {
    width: 83% !important;
}
.single-product div.product .woocommerce-product-gallery .flex-control-thumbs {
    width: 30%;
    float: left;
    padding-left: 30px !important;
}
.single-product div.product .woocommerce-product-gallery .flex-control-thumbs {
    width:37% !important;
}
ol.flex-control-nav.flex-control-thumbs li img {
    padding: 11px 8px !important;
    max-width: 43% !important;
}
.summary.entry-summary {
    width: 43% !important;
    padding-right: 120px;
}
form.cart {
    width:54% !important;
}
.first-submit {
    display: flex;
    justify-content: space-between;
    width: 100%;
}
.woocommerce div.product .woocommerce-product-rating {
    margin-bottom:0 !important;
}
.summary.entry-summary span.woocommerce-Price-amount.amount bdi {
    font: normal normal 300 30px Poppins;
    color: #2C2C2C;
}
.summary.entry-summary p.price del {
    font: normal normal 300 29px Poppins !important;
    margin: 10px;
    margin-left: 0 !important;
    color:#8cc122 !important;
}
a.woocommerce-review-link {
    font: normal normal 300 18px Poppins;
    color: #676767;
    margin: 0 12px;
}
}
a.woocommerce-review-link {
    font: normal normal 300 18px Poppins;
    color: #676767;
}
.star-rating {
    border-right: 2px solid #eee;
    padding-right: 18px !important;
}

/* .woocommerce div.product div.images.woocommerce-product-gallery{
  display: flex !important;
    width: 48% !important;
} */
.flex-viewport {
    order: 2;
}
ol.flex-control-nav.flex-control-thumbs {
    order: 1;
}
.woocommerce div.product div.images .flex-control-thumbs li{    width: 100% !important;}

.single-product div.product .woocommerce-product-gallery .flex-viewport {
    width: 75%;
    float: left;
}

/* / Make Gallery 25% width and place it beside the image / */

.single-product div.product .woocommerce-product-gallery .flex-control-thumbs {
    width: 25%;
    float: left;
}

/* / Style each Thumbnail with width and margins / */

.single-product div.product .woocommerce-product-gallery .flex-control-thumbs li img {
    width: 90%;
    float: none;
    margin: 0 0 10% 10%;
}
/* lakshmy  */
ol.flex-control-nav.flex-control-thumbs li img {
    border: 1px solid #dddddd !important;
}
@media screen and (max-width:767px) {
    .single-product div.product .woocommerce-product-gallery .flex-control-thumbs {
        width: 65% !important;
    }
    /* .comment-text  {
        width:100% !important;
    } */
    .rev_sec {
    position: relative;
    align-items: flex-start;
    justify-content: flex-start;
}
.price-sticky p.price ins {
font: normal normal 300 22px Poppins;
}
.price-sticky p.price del {
font: normal normal 300 21px Poppins;
}
.price-sticky p.price {
width: 30%;
    margin-top: 18px;
}

.price-sticky {
margin: 0;
    position: absolute;
    width: 100%;
    left: 110px;
    top: 37px;
}
.rev_name {
    width: 48%;
}
.rev_name h1.product_title.entry-title,.rev_name h3.product_title.entry-title {
    font: normal normal 300 18px Poppins;
}
.rev_img {
    margin-right:8px;
}
	nav.woocommerce-breadcrumb {
	text-align: center;
	}
}
@media screen and (min-width:769px) {
    figure.woocommerce-product-gallery__wrapper img{
    max-width: inherit !important;
    border: none !important;
}
}

/* @media screen and (min-width:701px) and (max-width:768px) {
    .woocommerce div.product div.images img {
    max-width: 86% !important;
}
} */

.woocommerce div.product div.images img {
    max-width: 74%;
}

@media screen and (min-width:769px) and (max-width:1176px) {
    button#sbw_wc-adding-button {
    padding: 10px 0 !important;
    width: 100% !important;
    margin-right: 0;
}
button.single_add_to_cart_button.button.alt.wp-element-button {
    padding: 10px 0 !important;
    width: 100% !important;
    /* margin-top: 8px; */
}
/* form.cart {
    width:100% !important;
} */
}

button.single_add_to_cart_button.button.alt.wp-element-button {
    width: 68%;
}
button#sbw_wc-adding-button {
    margin-right: 0 !important;
    width: 100% !important;
    padding: 13px 0;
}
}
@media screen and (max-width:768px) {
    ol.flex-control-nav.flex-control-thumbs li {
    width: 22% !important;
}
    /* ol.flex-control-nav.flex-control-thumbs li:first-child {
    padding-left: 5px !important;
} */
/* .summary.entry-summary {
    width: 100% !important;
} */
h1.product_title.entry-title {
    font: normal normal 300 19px Poppins;
    line-height: 1.4;
    padding-bottom: 7px !important;
}
button.single_add_to_cart_button.button.alt.wp-element-button {
    width: 55% !important;
}
.quantity {
    width: 43% !important;
}
#sbw_wc-adding-button {
    margin-right:0 !important;
}
button.minus {
    padding: 13px 14px;
    background: none;
    border: 1px solid #D4D4D4;
    color: #707070;
    /* margin-right: -4px; */
    font: normal normal 300 15px Poppins;
}
label.screen-reader-text {
    padding: 9px !important;
}
button.plus {
    padding: 11px !important;
}
button#sbw_wc-adding-button {
    width: 100% !important;
}
.woocommerce .quantity .qty {
    width: 51px !important;
    height: 55px !important;
}
form.cart {
    display: flex !important;
    /* justify-content: space-between; */
    width: 100%;
}
input#quantity_63d8f885da5a5 {
    text-align: center;
    border: 1px solid #D4D4D4;
    border-left: none;
    padding: 13px 10px;
    width: 40px !important;
    height: 51px !important;
    border-right: none;
    color: #707070;
}
}
@media screen and (max-width:767px) {
    h2.related-product-title {
    font: normal normal 300 24px Poppins!important;
}

    .woocommerce .woocommerce-breadcrumb a:nth-child(1) {
    padding: 0 !important;
}
ol.flex-control-nav.flex-control-thumbs {
    margin-left:0 !important;
}
.woocommerce div.product div.images img {
    width:100% !important;
    /* max-width:100% !important; */
}
/* .woocommerce div.product div.images .woocommerce-product-gallery__image:nth-child(n+2) {
    display:none !important;
} */
.flex-viewport {
    height: auto !important;
}
.woocommerce div.product div.images {
    margin-bottom:0 !important;
}
.woocommerce-product-gallery__image {
    padding-bottom:0 !important;
}
/* span.woocommerce-Price-amount.amount {
font: normal normal 300 21.6px Poppins !important;
} */
.woocommerce-product-details__short-description p {
    width: 100%;
    float: left;
    font-family: 'Poppins', sans-serif !important;
    list-style: none;
    padding: 0;
    line-height: initial;
    margin: 0;
    float: left;
    width: 100%;
    margin-bottom: 20px;
    border-bottom: 1px solid #cecece;
    padding-bottom: 20px;
    line-height: 1.7;
}
/* .woocommerce .quantity .qty {
    width: 100% !important;
    height: 44px !important;
} */
/* button.single_add_to_cart_button.button.alt.wp-element-button {
    width:80% !important;
} */
#sbw_wc-adding-button {
    margin-left:0 !important;
}
}
@media screen and (min-width:1360px) and (max-width:1399px){
    .woocommerce .woocommerce-breadcrumb a:nth-child(1) {
    padding-left: 4.5em !important;
}
}
@media screen and (min-width:1280px) and (max-width:1800px){
    .footer_menu_section {
    padding-bottom: 11.5% !important;
}
}
</style>
	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );

	?>
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop.  ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );

	?>
<!-- sticky section start -->
<section class="stick_cart_pp">
<div class="sticky_event" id="search_funs">
    <div class="container">

           <div class="popup_review">
                      <div class="rev_sec">
                        <div class="rev_img">
                        <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

<?php woocommerce_show_product_sale_flash( $post, $product ); ?>

<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
        </a>
                       </div>
                     <!-- img  -->
                      <div class="rev_name">
                       <!-- title  -->
                     <?php  echo the_title( '<h3 class="product_title entry-title">', '</h3>' ); ?>
                    </div>
                    <div class="price-sticky">
                <?php    global $product;
                ?>
                 <p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>">
                    <?php echo $product->get_price_html(); ?></p>
                    </div>
              <div class="btn_pp_sec">
                 <div class="stick-adding">
                 <?php
                    global $post, $product; ?>
                    <div class="cg-product-cta">
                 <?php   do_action( 'woocommerce_after_shop_loop_item' ); ?>
                 </div>


          </div>
          </div>

          </div>
</div>


</div></section>
<!-- sticky section end -->
	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		// do_action( 'woocommerce_sidebar' );
	?>

<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */

?>
<style>
    @media screen and (min-width:768px) and (max-width:991px){
        .carousel li {
    font-size: 16px !important;}
    .splide__arrow--next {
    right: -2em !important;
} 
    }
    @media screen and (min-width:768px) and (max-width:1199px) {
	.woocommerce div.product div.images.woocommerce-product-gallery {
    padding-left: 24px !important;
}
}
    html body input#author, html body input#email, textarea#comment {
    font-size: 16px;
}
    textarea#comment {
    padding: 15px;
}
    html body .summary.entry-summary p.price del{
        color: #000!important;
    }
    @media screen and (min-width:768px) and (max-width:991px){
        html body .btn_pp_sec .stick-adding .cg-product-cta a.button.wp-element-button.product_type_simple.add_to_cart_button.ajax_add_to_cart{
            font: normal normal normal 14px/25px Poppins !important;
        }
        html body .btn_pp_sec  a.wpcbn-btn.wpcbn-btn-archive.button.product_type_simple.add_to_cart_button{
            font-size: 14px;
        }
        .price-sticky{
            padding-left: 15px !important;
        }
    }
    @media screen and (min-width:501px) and (max-width:767px){
        .sticky_event.newsmooth{    height: 50px !important;}
        .rev_img,.rev_name,.price-sticky {
    display: none !important;
}
.btn_pp_sec {
    width: 100% !important;
}
html body .btn_pp_sec .stick-adding .cg-product-cta a.button.wp-element-button.product_type_simple.add_to_cart_button.ajax_add_to_cart {
    width: 50% !important;
    margin-bottom: 0 !important;
}
.btn_pp_sec .stick-adding .cg-product-cta{
    flex-direction: inherit !important;
}
    }
    .cg-product-cta a.button.wp-element-button.product_type_simple {
    border: 1px solid #8cc122;
    position: relative;
    padding: 8px 62px;
    color: #2C2C2C;
    font: normal normal normal 16px/25px Poppins;
    width: 50%;
    height: 22px;
    width: -moz-available;
    text-transform: uppercase;
    text-align: center;
    background: transparent;
    margin: 0 auto;
}
    @media screen and (max-width:767px){
        .woocommerce-product-gallery__image a{
	    border: 1px solid #DDDDDD;
    display: block;
}
.woocommerce-product-gallery__image{
    margin:0 auto;
}
    }
    @media screen and (min-width:1280px){
.woocommerce-product-gallery.woocommerce-product-gallery--with-images {
    justify-content: right;
}
.woocommerce-product-gallery__image {
    margin-left: auto;
}
.woocommerce-product-gallery__image a{
	    border: 1px solid #DDDDDD;
    display: block;
}
}

       .sticky_event {
        opacity: 0;
    height: 0;
    transition: height 2s;
}
.sticky_event.newsmooth {
    opacity: 1;
    height:94px;
    transition: height 2s;
}
.sticky_event{position:fixed;background:white;bottom:0;width:100%;z-index:1;    padding: 10px 0;}
.sticky_event img{width:100;}
.sticky_event img {
    padding-right: 13px;
    width: 106px;
    padding-left: 12px;
    padding-top: 13px;
    padding-bottom: 9px;
}
.sticky_event h2 {
    font: normal normal 300 26px Poppins;
    position: relative;
    opacity: .6;
    margin: 0;
}
.sticky_event h2{
        font: normal normal 300 32px Poppins;
    }
    @media  screen and  (max-width:767px){
        .rev_img {
    margin-right: 8px;
}
.rev_name {
    width: 48%;
}
        .sticky_event h2{
        font: normal normal 300 18px Poppins;
    }
    }
    @media  screen and  (min-width:768px) and (max-width:991px) {
        .price-sticky {
    width: 14%;
}
.btn_pp_sec .stick-adding .cg-product-cta a.button.wp-element-button.product_type_simple.add_to_cart_button.ajax_add_to_cart {
    padding: 14px 0;
}
.sticky_event.newsmooth {
    height: 102px;
}
.sticky_event img {
    width: 79px;
}
.btn_pp_sec {
    width: 33%;
}
.price-sticky p.price ins {
font: normal normal 300 21px Poppins;
    }
    .price-sticky p.price del {
    font: normal normal 300 21px Poppins;
}
        .rev_name {
    width: 25%;
}
.rev_name h1.product_title.entry-title,.rev_name h3.product_title.entry-title {
    font: normal normal 300 17px Poppins;
}
}
@media screen and (min-width:1024px) and (max-width:1919px) {
    div#search_funs .container {
    width: 90%;
    margin: auto;
}
}
@media screen and (min-width:1660px) {
    .btn_pp_sec .stick-adding .cg-product-cta a#sbw_wc-adding-button-archive, .btn_pp_sec .stick-adding .cg-product-cta a.button.wp-element-button.product_type_simple.add_to_cart_button.ajax_add_to_cart {
        font: normal normal normal 18px/25px Poppins !important;
    }
}
@media screen and (min-width:501px) and (max-width:767px) {
    .rev_name:after {
    display: none;
}
.btn_pp_sec .stick-adding .cg-product-cta a#sbw_wc-adding-button-archive {
        padding: 14px 0;
    }
    .btn_pp_sec .stick-adding .cg-product-cta a.button.wp-element-button.product_type_simple.add_to_cart_button.ajax_add_to_cart {
    margin-bottom: 8px;
    text-align: center;
    padding: 10px 0 !important;
    width: 100% !important;
    }
    .sticky_event img {
    width: 70px;
    }
    .btn_pp_sec .stick-adding .cg-product-cta {
    justify-content: space-between;
    display: flex;
    width: 100%;
    flex-direction: column;
    flex-wrap: wrap;
}
    .btn_pp_sec .stick-adding .cg-product-cta a#sbw_wc-adding-button-archive {
    padding: 10px 0;
    margin: 0;
    text-align: center;
    width: 100% !important;
    }
    .btn_pp_sec {
    flex-wrap: wrap;
}
.btn_btt {
    margin-bottom: 7px;
    width:100%;
}
}
@media screen and (max-width:500px) {
    .btn_pp_sec .stick-adding .cg-product-cta a.button.wp-element-button.product_type_simple.add_to_cart_button.ajax_add_to_cart {
        padding: 10px 0;
    }
    .btn_pp_sec .stick-adding .cg-product-cta a#sbw_wc-adding-button-archive {
        padding: 10px 0;
    }
    .btn_pp_sec {
        width:100%;
    }
    .price-sticky {
    display: none;
}
    .rev_name {
    display: none;
}
    .rev_img {
    display: none;
}
    .sticky_event.newsmooth .container {
        padding 0 15px;
    }
    .sticky_event h1{
        width: 200px;
    }
    .sticky_event.newsmooth{
        height:50px;
    }
}
@media screen and (max-width: 991px) {

    p.comment-form-cookies-consent label {
    font-size: 10px;
    }
    .form-submit input#submit {
    width: 40% !important;
    }
    span#reply-title {
    margin: 0;
    font: normal normal 300 15px Poppins;
    padding-bottom: 10px;
}
p.woocommerce-noreviews {
    font-size:14px;
}
p.woocommerce-noreviews {
    width:100%;
    /* height:100px !important; */
}
.woocommerce #review_form #respond textarea {
width: 100% !important;
height: 100px !important;
}
    .sticky_event.newsmooth .container {
        padding:0 15px;
    }
    div#search_funs .container {
    padding: 0 15px;
}
}
.btn_pp_sec .stick-adding .cg-product-cta a.added_to_cart.wc-forward {
    display: none;
}
@media screen and (min-width:1200px) and (max-width:1919px) {
    .btn_pp_sec .stick-adding .cg-product-cta a.button.wp-element-button.product_type_simple.add_to_cart_button.ajax_add_to_cart {
        padding: 12px 0;
    }
    .btn_pp_sec .stick-adding .cg-product-cta a#sbw_wc-adding-button-archive {
        padding: 12px 0;
    }
    .sticky_event.newsmooth {
    opacity: 1;
    height: 117px;
    }
    .rev_name:after {
        height: 100%;
    }
    .sticky_event img {
    padding-right: 13px;
    width: 90px;
    }
    .rev_name h1.product_title.entry-title,.rev_name h3.product_title.entry-title {
    font: normal normal 300 25px Poppins;
    }
    .price-sticky p.price del {
    font: normal normal 300 26px Poppins;
}
.price-sticky p.price del {
    font: normal normal 300 26px Poppins;
}
}
@media screen and (min-width:992px) {
    .woocommerce #review_form #respond textarea {
        width: 80%;
    }
    ol.flex-control-nav.flex-control-thumbs li img {
    border: 1px solid #DDDDDD;
    /* margin-top: 16px !important; */
}
ol.flex-control-nav.flex-control-thumbs li img:first-child {
    margin-top: 0;
}
}
@media screen and (min-width: 992px) and (max-width: 1199px) {
    .btn_pp_sec .stick-adding .cg-product-cta a.button.wp-element-button.product_type_simple.add_to_cart_button.ajax_add_to_cart {
        padding: 12px 0;
    }
    .btn_pp_sec .stick-adding .cg-product-cta a#sbw_wc-adding-button-archive {
        padding: 12px 0;
    }

    .rev_name {
    width: 25%;
}
.btn_pp_sec {
    width: 32%;
}
.rev_name h1.product_title.entry-title,.rev_name h3.product_title.entry-title {
font: normal normal 300 15px Poppins;
}
.price-sticky p.price ins {
    font: normal normal 300 30px Poppins;
}
.price-sticky p.price del {
    font: normal normal 300 24px Poppins;
}
    div#search_funs .container {
    width: 95%;
    margin: auto;
}
}
@media screen and (min-width: 1200px) and (max-width: 1919px) {
    div#search_funs .container {
    width: 90%;
    margin: auto;
}
}
@media screen and (min-width:1920px) {
    div#search_funs .container {
    width: 1650px;
    margin: auto;
    max-width: 1920px;
}
    .sticky_event.newsmooth{    height: 125px;}
    .add_to_cc_cart button{
        width: 100%;
    }
}
section.related.products .products img.woocommerce-placeholder.wp-post-image {
    height: 212px !important;
}
</style>
<script>
    $('input[type="number"]').keydown(function (e) {
  e.preventDefault();
});
       $(window).scroll(function(){
    if ($(this).scrollTop() >350) {
       $('#search_funs').addClass('newsmooth');
    } else {
       $('#search_funs').removeClass('newsmooth');
    }
});
$( document ).ready(function() {
jQuery('.woocommerce-review-link').click(function (e) {
			// alert("test");
            e.preventDefault();
            var link = jQuery(this).attr("href");
			jQuery('html, body').animate({
            scrollTop: jQuery(link).offset().top - 120
            }, 700);
            })
})
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.addEventListener( 'DOMContentLoaded', function () {
new Splide( '#related_ffs', {
 type   : 'loop',
 perPage: 3,
perMove: 1,
breakpoints: {
 '640': {
     perPage: 3,

 },
 '768': {
perPage: 4,
padding: {
right: '0',
left : '0',
arrows : true
},
},
'1024': {
perPage: 4,
padding: {
right: '0',
left : '0',
},

},
 '480': {
     perPage: 2,
     padding: {
right: '0px',
left : '0',
arrows : true
},

 },
}
} ).mount();
} );
</script>

