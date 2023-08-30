<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Askan Tech
 * @since Askan Tech 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="google-site-verification" content="7-7Bo3weL4J_F9678oa798ZWKh0tIO4hWhu8dGKJS2Y" />
<title><?php wp_title(' '); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>

    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/favicons/favicon.ico">
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/common.css"> -->
    
    <!-- calling style for specific page -->
    <?php if(is_front_page()) { ?> 
        <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/home.css"> -->
        <style>
            .video-section{
  width:100vw;
  height:100vh;
  overflow:hidden;
  position:relative;
}


.video-section iframe{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.video-section iframe {
  pointer-events: none;
}
.video-section iframe{
  position: absolute;
  top: -60px;
  left: 0;
  width: 100%;
  height: calc(100% + 120px);
}
.video-wrapper{
  pointer-events:none;
}
            /* @media screen and (max-width:425px){
                .banner-section {background-image: url('https://www.askantech.com/wp-content/themes/askantech/assets/images/mobilebanner.jpg') !important;}
            } */
             .banner-section {position: relative;padding-top: 56.23%;width: 100%;top: 0;left: 0;}.banner-section .video-section, .banner-section .image-section, .banner-section .overlay-section {position: absolute;height: 100%;width: 100%;left: 0;top: 0;}.banner-section .overlay-section {background: rgba(0, 0, 0, 0.6);z-index: 3333;}.banner-section .video-section {z-index: 3;}.video-section .video-wrapper {height: 100%;width: 100%;}.video-section .video-wrapper video {height: 100%;width: 100%;-o-object-fit: unset;object-fit: unset;}#video-start {display: none;}.overlay-section .container {height: 100%;display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;-webkit-box-align: center;-ms-flex-align: center;align-items: center;position: relative;}.overlay-section .container .banner-content {width: 100%;color: #fff;}.text-two h2 {font-size: 70px;text-shadow: 0px 5px 0px rgba(0, 0, 0, 0.6);}.text-two .type-wrap #typed1, .text-two .type-effect-style, .text-two .type-effect-style span {font-size: 60px;text-shadow: 0px 5px 0px rgba(0, 0, 0, 0.6);margin-bottom: 35px !important;font-weight: bold;min-height: 60px;min-width: 960px;}.cc-typeeffect-one {margin-bottom: 35px;min-width: 960px;min-height: 60px;}.text-two {display: -webkit-box;display: -ms-flexbox;display: flex;position: relative;}.banner-play-button {margin-left: 160px;}.banner-play-button img {width: 60px;cursor: pointer;}.text-one h3 {font-size: 25px;font-weight: normal;margin-bottom: 25px;}.text-three h3 {font-size: 24px;font-weight: 400;}.text-two::before {content: "";display: block;height: 8px;width: 145px;background: #53e0d0;background: -webkit-gradient(left top, right top, color-stop(0%, #53e0d0), color-stop(100%, #009afa));background: -webkit-gradient(linear, left top, right top, from(#53e0d0), to(#009afa));background: linear-gradient(to right, #53e0d0 0%, #009afa 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#53e0d0', endColorstr='#009afa', GradientType=1 );position: absolute;left: -175px;top: 25px;}.bottom-scroll {position: absolute;bottom: 10%;left: 50%;-webkit-transform: translate(-50%);transform: translate(-50%);cursor: pointer;}.bottom-scroll a {display: block;}.services {padding: 120px 0px 30px 0px;background-position: right top, left bottom;background-repeat: no-repeat, no-repeat;}.service-block-title {margin-bottom: 60px;}.services .cc-row {margin-bottom: 120px;}.technologies {padding: 120px 0px 90px 0px;}.animate-center-box {position: relative;z-index: 10;max-width: 600px;margin: 0px auto;}.animate-center-box .particles {position: absolute;top: 0;left: 0;width: 100%;height: 100%;}.sprite {background-image: url(/wp-content/themes/askantech/assets/images/spritesheet.png);background-repeat: no-repeat;display: block;}.sprite-android {width: 50px;height: 60px;background-position: -5px -5px;}.sprite-angular {width: 65px;height: 69px;background-position: -65px -5px;}.sprite-codeigniter {width: 60px;height: 71px;background-position: -140px -5px;}.sprite-flutter {width: 85px;height: 35px;background-position: -5px -86px;}.sprite-google-analitics {width: 35px;height: 35px;background-position: -210px -5px;}.sprite-ios {width: 70px;height: 42px;background-position: -100px -86px;}.sprite-joomla {width: 43px;height: 43px;background-position: -210px -50px;}.sprite-laravel {width: 65px;height: 70px;background-position: -180px -103px;}.sprite-magento {width: 40px;height: 46px;background-position: -5px -183px;}.sprite-php {width: 71px;height: 37px;background-position: -55px -183px;}.sprite-prestashop {width: 75px;height: 63px;background-position: -136px -183px;}.sprite-react {width: 70px;height: 68px;background-position: -263px -5px;}.sprite-woo {width: 77px;height: 46px;background-position: -255px -103px;}.sprite-wordpress {width: 45px;height: 45px;background-position: -255px -159px;}.sprite-yii {width: 81px;height: 46px;background-position: -221px -214px;}.particles-logo {position: absolute;z-index: -1;}.particles-logo.android {top: 15px;left: 220px;}.particles-logo.php {top: 80px;left: 20px;}.particles-logo.yii {top: 150px;left: 180px;}.particles-logo.joomla {top: 220px;left: 20px;}.particles-logo.wordpress {top: 280px;left: 120px;}.particles-logo.magento {top: 340px;left: 300px;}.particles-logo.codeigniter {top: 250px;left: 300px;}.particles-logo.react {top: 135px;left: 290px;}.particles-logo.ios {top: 15px;right: 220px;}.particles-logo.angular {top: 98px;right: 235px;}.particles-logo.google-analitics {top: 80px;right: 20px;}.particles-logo.woo {top: 190px;right: 250px;}.particles-logo.flutter {top: 133px;right: 80px;}.particles-logo.prestashop {top: 284px;right: 103px;}.particles-logo.laravel {top: 325px;right: 240px;}.tech-mobile-part {display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;-webkit-box-align: center;-ms-flex-align: center;align-items: center;-ms-flex-wrap: wrap;flex-wrap: wrap;}.mobile-logo-section {background-image: url(/wp-content/themes/askantech/assets/images/mobile_sprites.png);background-repeat: no-repeat;display: block;height: 90px;width: 180px;margin: 10px 20px;}.mobile-logo-section-android {background-position: -5px -5px;}.mobile-logo-section-angular {background-position: -195px -5px;}.mobile-logo-section-codeigniter_logo {background-position: -5px -105px;}.mobile-logo-section-flutter {background-position: -195px -105px;}.mobile-logo-section-ios {background-position: -5px -205px;}.mobile-logo-section-joomla {background-position: -195px -205px;}.mobile-logo-section-laravel {background-position: -5px -305px;}.mobile-logo-section-megento {background-position: -195px -305px;}.mobile-logo-section-presta_shop {background-position: -385px -5px;}.mobile-logo-section-react {background-position: -385px -105px;}.mobile-logo-section-wordpress {background-position: -385px -205px;}.mobile-logo-section-yii {background-position: -385px -305px;}.testimonial, .testimonial-wrapper {min-height: 700px;position: relative;}.testimonial .content-section {position: absolute;top: 0;left: 0;width: 100%;height: 100%;}.testimonial .content-section .test-video-section, .testimonial .content-section {height: 100%;}.testimonial .content-section .test-content-section .test-image-section {height: 100%;position: absolute;width: 100%;top: 0px;left: 0px;background-size: cover;background-repeat: no-repeat;background-position: center center;}.test-video-section video {height: 100%;width: 100%;position: relative;}.test-content-overlay {display: -webkit-box;display: -ms-flexbox;display: flex;position: absolute;top: 0;left: 0;width: 100%;height: 100%;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;-webkit-box-align: center;-ms-flex-align: center;align-items: center;}.test-content-overlay .test-cont {margin: 0px auto;color: #fff;text-align: center;}.test-cont .desc {font-family: "poppins";font-size: 30px;font-weight: normal;margin-bottom: 37px;}#test2 .test-cont .desc{font-size: 18px;}.test-cont .name {font-family: "poppins";font-weight: normal;font-size: 16px;margin-bottom: 45px;}.play-test-btn {display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;-webkit-box-align: center;-ms-flex-align: center;align-items: center;-webkit-box-orient: vertical;-webkit-box-direction: normal;-ms-flex-direction: column;flex-direction: column;}.play-test-btn img {width: 65px;}.test-play {margin-top: 10px;}.test-list {position: absolute;bottom: -10%;left: 0;width: 100%;display: -webkit-box;display: -ms-flexbox;display: flex;z-index: 3;}.wrapp-img-list {display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;position: relative;z-index: 33333;}.list-circle {position: relative;margin-right: 30px;}.list-circle:last-child {margin-right: 0;}.cc-circle-wrapper {position: relative;text-align: center;}.cc-circle-wrapper .circle-image {-webkit-transition: all ease-out 0.3s;transition: all ease-out 0.3s;-webkit-transform: scale(0.75);transform: scale(0.75);}.cc-circle-wrapper:hover .circle-image {-webkit-transform: scale(1);transform: scale(1);cursor: pointer;}.cc-circle-wrapper:hover .play-icon-img {visibility: hidden;}.test-list .circle-image img {border-radius: 100%;border: 3px solid #fff;width: 110px;-webkit-transition: all ease-out 0.2s;transition: all ease-out 0.2s;}.test-list .play-icon-img {position: absolute;top: 50%;left: 50%;-webkit-transform: translate(-50%, -50%);transform: translate(-50%, -50%);cursor: pointer;}.test-list .play-icon-img img {width: 14px;}.circle-desc .author-name {color: #000;font-size: 13px;font-family: "poppins";}.cc-testimonial-section {position: relative;height: 700px;}.cc-test-tabcontent {height: 100%;width: 100%;position: relative;}.cc-test-tabsection {position: absolute;height: 100%;width: 100%;left: 0;}.cc-testvideo-section {position: absolute;height: 100%;width: 100%;}.cc-testcontent-section {position: relative;height: 100%;width: 100%;}.cc-content-overlay {position: relative;top: 50%;-webkit-transform: translateY(-50%);transform: translateY(-50%);}.cc-test-imwrapper {position: absolute;height: 100%;width: 100%;background-size: cover;background-repeat: no-repeat;background-position: center;}.cc-test-imwrapper::after {content: "";display: block;background: rgba(0, 0, 0, 0.48);position: absolute;height: 100%;width: 100%;}.cc-testcontent-section .cc-content-overlay {text-align: center;color: #fff;}.contact {padding: 120px 0px 30px 0px;}.home-contact-form {max-width: 1040px;margin: 0px auto;}.form-wrapper form {display: -webkit-box;display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;justify-content: space-between;}.form-wrapper .wrapp-field {width: 48%;}.form-wrapper .full-wrap {width: 100%;}.form-wrapper .wrapp-field input[type="text"], .form-wrapper .wrapp-field input[type="email"], .form-wrapper .wrapp-field input[type="file"], .form-wrapper .wrapp-field textarea {width: 100%;padding: 33px 0px 10px 0px;border-bottom: 2px solid #e2e2e2;font-size: 18px;text-transform: capitalize;outline: none;font-family: "poppins";-webkit-transition: all ease-out 0.3s;transition: all ease-out 0.3s;}.form-wrapper .wrapp-field textarea {width: 100%;padding-bottom: 40px;resize: none;}.filelabel {position: relative;display: block;width: 100%;padding: 33px 0px 10px 0px;border-bottom: 2px solid #e2e2e2;font-size: 18px;text-transform: capitalize;outline: none;font-family: "poppins";color: grey;}.filelabel .filetype {position: absolute;z-index: 232;padding: 0;height: 100%;width: 100%;left: 0;opacity: 0;top: 0;}.wrap-submit-btn {width: 100%;text-align: right;margin-top: 45px;}.wrap-submit-btn.more-btn button {font-size: 16px;}.cc-col-50.cs-content-section {color: #fff;}.case-study-wrapper {background-size: cover !important;}.case-study-row {padding: 60px 0px 120px 0px;}.cs-content-section {position: relative;}.cs-content {padding: 0px 0px 0px 90px;margin-top: -20px;}.cs-content .title {font-size: 35px;}.cs-content .desc {font-size: 14px;padding: 10px 0px 30px 0px;}.cs-content .cont {margin-bottom: 45px;}.top-heading h2 {font-size: 60px;color: #fff;opacity: 0.2;font-family: "poppins";line-height: 48px;font-weight: 600;letter-spacing: 2px;}.parcel-image, .parcel-service-image {text-align: center;position: relative;}.parcel-image .flight-left {position: relative;top: 60px;left: 30px;-webkit-transition: all ease-in 0.5s;transition: all ease-in 0.5s;}.parcel-image .flight-right {position: relative;top: 50px;right: 0px;z-index: 0;-webkit-transition: all ease-in 0.5s;transition: all ease-in 0.5s;}.parcel-image .parcel-box {position: absolute;bottom: 30px;left: 0px;z-index: 10;}.parcel-image-div {width: 250px;height: 200px;margin: 0 auto;position: relative;}.ppi-image-wrapper {margin-top: 88px;}.parcel-image .flyleft {position: relative;top: 15px;left: -45px;-webkit-transition: all ease-in 0.5s;transition: all ease-in 0.5s;}.parcel-image .flyright {position: relative;top: 10px;right: -40px;-webkit-transition: all ease-in 0.5s;transition: all ease-in 0.5s;}.multi-getmesoon .multi-gadgets {background: #6c237b;}.multi-gadgets {background-size: cover !important;color: #fff;}.multi-getmesoon .case-study-row {padding: 0;}.multi-getmesoon .cs-content {margin-top: 0;}.cc-col-60.multi-gadgets {padding-top: 95px;background-size: contain !important;}.cc-col-60.multi-gadgets .cc-row {position: relative;top: 0px;}.multi-getmesoon .cc-col-40.cs-content-section {background: #3d98d4;color: #fff;}.getmesoon-wrapper {position: relative;top: -75px;}.getmesoon-wrapper .title .cc-trmc-desc {font-size: 24px;margin-left: 10px;}.getmesoon-img-wrapper {text-align: center;}.getmesoon-img-wrapper img {width: 75%;}.multi-gadgets .cs-content {padding-left: 45px;}.multi-gadgets .multi-image-wrapper {padding-right: 20px;}@media only screen and (min-width:1200px) {.multi-gadgets .multi-image-wrapper .parcel-image {top: -30px;}}.case-study-wrapper.three-dids {background-color: #ff5a6f;color: #fff;}.case-study-wrapper.three-dids .cc-row.case-study-row {padding: 14px 0px 24px 0px;}.case-study-wrapper.three-dids .cs-content {padding: 90px 0px 0px 45px;margin-top: 0px;}.cc-homesection-testimonial .modal {display: none;position: fixed;z-index: 88888;padding-top: 100px;left: 0;top: 0;width: 100%;height: 100%;overflow: auto;background-color: black;background-color: rgba(0, 0, 0, 0.76);}.cc-homesection-testimonial .modal-content {background-color: #fefefe;margin: auto;padding: 20px;border: 1px solid #888;width: 80%;max-width: 950px;}.cc-homesection-testimonial .close {color: #aaaaaa;font-size: 28px;font-weight: bold;}.cc-homesection-testimonial .close:hover, .cc-homesection-testimonial .close:focus {color: #000;text-decoration: none;cursor: pointer;}.modal-content .cc-cls {display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-pack: end;-ms-flex-pack: end;justify-content: flex-end;}.cc-homesection-testimonial .cc-popup-video {height: 540px;position: relative;}.cc-homesection-testimonial .cc-popup-video iframe {height: 100%;width: 100%;}.cc-homesection-testimonial .close {position: relative;z-index: 33;}.cc-homesection-testimonial .close {display: block;height: 20px;width: 17px;}.cc-homesection-testimonial .close svg {fill: #ff6d6d;}@media only screen and (max-width: 768px) {.services {padding: 80px 0px 10px 0px;}.service-block-title {margin-bottom: 40px;}.image-block .image-two {left: 30px;}.services .cc-row {margin-bottom: 40px;}.services {background-position: left top, right bottom;background-size: 100%;}.test-cont .desc {font-size: 20px;margin-bottom: 20px;}.test-cont .name {margin-bottom: 15px;}.test-list {bottom: -65px;}.testimonial, .testimonial-wrapper {min-height: 480px;}.list-circle {margin-right: 20px;}.test-list .circle-image img {width: 80px;}.test-list .play-icon-img {top: 50%;left: 50%;}.circle-desc .author-name {text-align: center;}.list-circle .circle-image {display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;-webkit-box-align: center;-ms-flex-align: center;align-items: center;}.footer-case-study .cc-col-45 {text-align: center;}.technologies {padding: 60px 0px 30px 0px;}.form-wrapper .wrapp-field {width: 100%;}.form-wrapper .wrapp-field input[type="text"], .form-wrapper .wrapp-field input[type="email"], .form-wrapper .wrapp-field input[type="file"], .form-wrapper .wrapp-field textarea, .filelabel {width: 100%;font-size: 16px;}.wrap-submit-btn {width: 100%;}.contact-block-title {margin-bottom: 20px;}.form-wrapper form {padding: 0px 15px;margin-bottom: 30px;}.csw-row-one.csw-row .side-bg {width: 0;}.case-study-row {padding: 45px 0px;}.cc-row.case-study-row .cs-content {padding-left: 0;}.cc-col-60.multi-gadgets .cc-row {top: 0;}.cc-col-60.multi-gadgets {padding: 45px 10px 0px 10px;margin-bottom: 0;}.getmesoon-wrapper {top: 0px;}.getmesoon-img-wrapper img {margin: 20px 0px;}.cc-row.case-study-row .cs-content {padding: 0px 10px;}.multi-getmesoon .cc-col-40.cs-content-section {margin-bottom: 0;}.getmesoon-wrapper {padding: 45px 0px;}.case-study-wrapper.three-dids {padding: 45px 0px;}.threedids-image-wrapper {text-align: center;}.threedids-image-wrapper img {width: 80%;}}@media only screen and (min-width: 320px) and (max-width: 420px) {.mobile-logo-section {margin: 5px 4px;background-size: 469px;height: 60px;width: 148px;}.mobile-logo-section-android {background-position: -16px -16px;}.mobile-logo-section-angular {background-position: -163px -14px;}.mobile-logo-section-codeigniter_logo {background-position: -5px -105px;}.mobile-logo-section-flutter {background-position: -163px -98px;}.mobile-logo-section-ios {background-position: 5px -180px;}.mobile-logo-section-joomla {background-position: -162px -180px;}.mobile-logo-section-laravel {background-position: -6px -260px;}.mobile-logo-section-megento {background-position: -172px -262px;}.mobile-logo-section-presta_shop {background-position: -319px -11px;}.mobile-logo-section-react {background-position: -321px -94px;}.mobile-logo-section-wordpress {background-position: -319px -175px;}.mobile-logo-section-yii {background-position: -320px -261px;}.block-titles .small-title .title-content h3 {font-size: 20px;}}@media only screen and (min-width: 320px) and (max-width: 567px) {.banner-section .image-section {background-position: center center !important;}.banner-section .overlay-section.opacity0 .text-two h2 {font-size: 28px;}}@media only screen and (min-width: 769px) and (max-width: 1200px) {#case-study .banner-section {max-height: 600px;}.cc-row.seo-feature-tiles .cc-col-33 {min-width: 365px;}.seo-feature-tiles .cc-tiles-wrapper {width: 95%;}.seo-feature-tiles .text-wrapper {padding-left: 20px;min-height: 120px;}}@media only screen and (min-width: 1024px) {.mobile-text-two-sty {display: none;}.typed-effect {display: block;}.text-two {-ms-flex-wrap: wrap;flex-wrap: wrap;}}@media only screen and (min-width: 1023px) and (max-width: 1299px) {.banner-section .image-section {background-position: center center !important;}}@media only screen and (min-width: 1025px) and (max-width: 1299px) {.banner-section .image-section {background-position: center center !important;}}.show-typed {display: none;}.tech-mobile-part {display: none;}@media only screen and (max-width: 1250px) {.tech-mobile-part {display: -webkit-box;display: -ms-flexbox;display: flex;}.tech-animation-part {display: none;}}@media only screen and (max-width: 1023px) {.text-two .typed-effect {display: none;}.cc-homesection-testimonial .modal-content {padding: 0px;position: relative;top: 50%;-webkit-transform: translateY(-50%);transform: translateY(-50%);}.modal-content .cc-cls {display: none;}.cc-homesection-testimonial .modal-content {width: 84%;background: transparent;border: 0px;}.cc-homesection-testimonial .modal {padding-top: 0px;}.cc-homesection-testimonial .cc-popup-video {height: auto;line-height: 0px;position: relative;padding-bottom: 56.25%;overflow: hidden;}.cc-homesection-testimonial .cc-popup-video iframe {height: 100%;width: 100%;position: absolute;}}@media only screen and (max-width: 767px) {.bottom-scroll {left: 47%;}.text-two h2 {font-size: 40px;width: 100%;}.text-two {text-align: center;}.banner-section {padding: 0px;min-height: 100vh;background-repeat: no-repeat;background-size: cover;background-position: center center;}.banner-section .video-section iframe {display: none;}.cc-testimonial-section {min-height: 600px;height: auto;}#test2 .test-cont .desc {font-size: 12.5px;}}@media only screen and (max-width:1390px) {.getmesoon-wrapper .cs-content {padding-left: 45px;}}@media only screen and (min-width:768px) and (max-width:1200px) {.getmesoon-wrapper .title .cc-trmc-desc {display: block;margin-left: 0px;}}@media only screen and (min-width:1023px) {.cc-homesection-testimonial .modal {padding-top: 0px;}.cc-homesection-testimonial .modal-content {top: 50%;position: absolute;left: 50%;transform: translate(-50%,-50%);}}.cc-mobile-bannervideo {display: block }@media only screen and (max-width:767px) {.getmesoon-wrapper .title .cc-trmc-desc {display: block ;margin-left: 0px;}.cc-desk-bannervideo {display: none;}.cc-mobile-bannervideo {display: block;}.cc-typeeffect-one {display: none !important;}.show-typed , .cc-typeeffect-two , .text-two .typed-effect{display: block !important;}.text-two .type-wrap #typed1, .text-two .type-effect-style, .text-two .type-effect-style span {min-width: unset;margin-bottom: 10px !important;min-height: 40px;font-size: 35px;}.mobile-text-two-sty {display: none;}.text-two .typed-effect {left: 50%;position: relative;transform: translateX(-50%);}#test2 .test-cont .desc {font-size: 20px;overflow: auto;height: 400px;}}@media only screen and (max-width:567px) {.banner-section .video-section .video-wrapper > video {display: block !important;width: 376.683% !important;height: 100% !important;position: absolute !important;top: 0px !important;left: -138.341% !important;}}img:not([src]) {visibility: hidden;}.banner-section {background-image: url('https://www.askantech.com/wp-content/uploads/2019/07/cc-bannerbg-opt.jpg');}
        </style>
    <?php  } ?>
<?php if(is_404()){ ?>
<style>
    h1, h2, h3, h4, h5, h6{margin:20px 0;padding:0;font-weight:normal;}
h1{font-size:32px;line-height:32px;}
h2{font-size:30px;line-height:30px;}
h3{font-size:28px;line-height:28px;}
h4{font-size:26px;line-height:26px;}
h5{font-size:20px;line-height:20px;}
h6{font-size:18px;}
h4 strong{font-family:'open_sanssemibold';font-size:22px;color:#777;}
p{margin:3px 0;}
.search404{padding:15px 0;margin:30px 0 40px 0;border:1px solid #ddd;}
.page404{text-align:center;}
.page404 h1{font-size:72px;color:#bbb;font-family:'open_sanssemibold';}
.page404 h5{font-size:26px;color:#777;}
.page404 p{font-size:16px;}
.page404 form{margin:20px auto;text-align:center;}
.page404 input[type="search"]{border:none;padding:5px 3px;font-family:'open_sansregular';font-size:17px;border-bottom:1px solid #bfbfbf;width:300px;}
.page404 h3{text-align:left;}
.page404 ul{margin:0 0 40px 0;}
.page404 ul li{text-align:left;background: url(/wp-content/themes/askantech/assets/images/bulletin.png) no-repeat left 8px;
    padding-left: 25px;
    margin-bottom: 15px;
    line-height: 26px;}
.page404 input.search-submit{background:#0bbff2 url(/wp-content/themes/askantech/assets/images/search.png) no-repeat center center;padding:10px;min-width:50px;}
.page404 input.search-submit:hover{background:#13b0e4 url(/wp-content/themes/askantech/assets/images/search.png) no-repeat center center;}
</style>
<?php  } ?>
<?php if(is_page(823)){ ?> 
<style>
/*about us css*/
/**about-us**/
#about-us .overlay-section.opacity0{position:relative;}
#about-us .overlay-section.opacity0 .container .banner-content, #about-us .overlay-section.opacity0 .container .banner-content-right{width:50%;}
#about-us .overlay-section.opacity0 .container {transform: translateY(-20%);}
#about-us .overlay-section.opacity0 .container .banner-content-right{text-align:center;}
#about-us .overlay-section.opacity0 .container .banner-content-right img{top:0px;max-width:420px;}
#about-us .aboutusdiv .content-block-contents p {  margin-bottom: 18px;  width: 80%;margin-left:auto;margin-right:auto;}
#about-us .app-technology .apptech-box h3{font-weight:200;font-size:44px;}
#about-us .app-technology .apptech-box .fa{font-size:36px;margin-bottom:15px;}
#about-us .customer-choose{padding:100px 0 80px 0;background:#bfe2f7;margin-top:80px;}
#about-us .ourmission, #about-us .ourvision{box-sizing:border-box;padding:10%;color:#fff;max-width:90%;margin:60px 0;background-size:100%;}
#about-us .ourvision{margin-top:100px;}
#about-us .ourmission h4, #about-us .ourvision h4{font-size:24px;text-align:left;margin-bottom:25px;}
#about-us .ourmission p, #about-us .ourvision p{text-align:left;}
#about-us .apptech-txt h3{color:#009bfa;font-size:26px;text-align:left;font-weight: 500;position:relative;padding:10px 0;}
#about-us .apptechbox{padding:17% 0;}

.apptech-txt h3{color:#009bfa;font-size:26px;text-align:left;font-weight: 500;padding:20% 0;position:relative;}
.apptech-txt .small-title-line{display:inline-block;position:relative;top:-5px;width:60px;}
.apptech-box { width: 33%; box-sizing: border-box; padding: 50px 20px; border-radius: 5px; color: #fff; display: inline-block; margin: 10px; text-align: center; min-height: 210px; }
.blue-bg{background:#53e0d0;}
.violet-bg{background:#71105f;position:relative;top:100px;}
.skyblue-bg{background:#009bfa;}
.darkblue-bg{background:#00a3d3;position:relative;top:100px;}
.apptech-box span{display:inline-block;width:100%;margin:5px 0;}

#about-us .ourmission { background-image: url('/wp-content/themes/askantech/assets/images/ourmission.jpg') }
#about-us .ourvision { background-image: url('/wp-content/themes/askantech/assets/images/ourvision.jpg') }

.app-technology{padding:150px 0;background:url('/wp-content/themes/askantech/assets/images/pencil-phone-left.png') no-repeat left 40px,url(/wp-content/themes/askantech/assets/images/glass-right.png) no-repeat right 50%;	background-size:16%;}



.whyus-box{padding-right:30px;padding-left:25px;position:relative;}
.whyus-box:after{content:'';position:absolute;top:0px;right:0px;height:100%;width:1px;border-right:1px solid #ddd;}
.whyus-box:last-child:after{display:none;}
.whyus-box img{margin-bottom:15px;}
.whyus-box h3{color:#009bfa;text-transform:uppercase;line-height:28px;margin-bottom:15px;}
.whyus-box p{font-size:15px;}


.tick-list {list-style:none;float:left;width:100%;margin:35px 0 15px 0;padding:0 0 0 20px;}
.tick-list li {float:left;width:100%;position:relative;margin-bottom:25px;list-style:none;}
.tick-list li:before {content: "\f00c";font-family: FontAwesome;display: inline-block;margin-left: -1.3em;width: 1.3em;padding-right:20px;color:#009bfa;}

@media only screen and (max-width:768px) {
    /*about us*/
	#about-us .overlay-section.opacity0 .container .banner-content-right img{top:10px;max-width:100%;}
	#about-us .banner-section{height:auto;position:relative;padding-top:80px;background-color:#009bfa !important;}
	#about-us .banner-section .image-section{height:auto;position:relative;}
	#about-us .overlay-section.opacity0 .container{top: 0%;transform: translateY(0%);display:inline-block;width:100%;}
	#about-us .banner-section .overlay-section{position:relative;}
	#about-us .overlay-section.opacity0 .container .banner-content-right{width:100%;text-align:center;}
	#about-us .overlay-section.opacity0 .container .banner-content{width:100%;box-sizing:border-box;padding:10px;}
	#about-us .ourmission, #about-us .ourvision{max-width:100%;margin:25px 0 0 0;}
	#about-us .ourvision{margin-top:15px;margin-bottom:30px;}
	#about-us .mivisn{margin-bottom:0px;}
	.tick-list li{text-align:left;}
	.tick-list li:before{padding-right:0px;}
	#about-us .app-technology{padding:50px 0;}
	#about-us .apptech-txt h3, #about-us .apptechbox p{text-align:center;}
	#about-us .apptechbox{padding:10% 0;}
    .whyus-box:after{border:0px;}
    

    .tick-list li{text-align:left;}
	.tick-list li:before{padding-right:0px;}
 }
</style>
<?php  } ?>
<style>
@font-face{font-family:'FontAwesome';src:url('/wp-content/themes/askantech/assets/fonts/fontawesome-webfont.eot?v=4.7.0');src:url('/wp-content/themes/askantech/assets/fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'),url('/wp-content/themes/askantech/assets/fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'),url('/wp-content/themes/askantech/assets/fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'),url('/wp-content/themes/askantech/assets/fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'),url('/wp-content/themes/askantech/assets/fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');font-weight:normal;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-lg{font-size:1.33333333em;line-height:.75em;vertical-align:-15%}.fa-2x{font-size:2em}.fa-3x{font-size:3em}.fa-4x{font-size:4em}.fa-5x{font-size:5em}.fa-fw{width:1.28571429em;text-align:center}.fa-ul{padding-left:0;margin-left:2.14285714em;list-style-type:none}.fa-ul>li{position:relative}.fa-li{position:absolute;left:-2.14285714em;width:2.14285714em;top:.14285714em;text-align:center}.fa-li.fa-lg{left:-1.85714286em}.fa-border{padding:.2em .25em .15em;border:solid .08em #eee;border-radius:.1em}.fa-pull-left{float:left}.fa-pull-right{float:right}.fa.fa-pull-left{margin-right:.3em}.fa.fa-pull-right{margin-left:.3em}.pull-right{float:right}.pull-left{float:left}.fa.pull-left{margin-right:.3em}.fa.pull-right{margin-left:.3em}.fa-spin{-webkit-animation:fa-spin 2s infinite linear;animation:fa-spin 2s infinite linear}.fa-pulse{-webkit-animation:fa-spin 1s infinite steps(8);animation:fa-spin 1s infinite steps(8)}@-webkit-keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}@keyframes fa-spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg);transform:rotate(359deg)}}.fa-rotate-90{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";-webkit-transform:rotate(90deg);-ms-transform:rotate(90deg);transform:rotate(90deg)}.fa-rotate-180{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";-webkit-transform:rotate(180deg);-ms-transform:rotate(180deg);transform:rotate(180deg)}.fa-rotate-270{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";-webkit-transform:rotate(270deg);-ms-transform:rotate(270deg);transform:rotate(270deg)}.fa-flip-horizontal{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";-webkit-transform:scale(-1, 1);-ms-transform:scale(-1, 1);transform:scale(-1, 1)}.fa-flip-vertical{-ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";-webkit-transform:scale(1, -1);-ms-transform:scale(1, -1);transform:scale(1, -1)}:root .fa-rotate-90,:root .fa-rotate-180,:root .fa-rotate-270,:root .fa-flip-horizontal,:root .fa-flip-vertical{filter:none}.fa-stack{position:relative;display:inline-block;width:2em;height:2em;line-height:2em;vertical-align:middle}.fa-stack-1x,.fa-stack-2x{position:absolute;left:0;width:100%;text-align:center}.fa-stack-1x{line-height:inherit}.fa-stack-2x{font-size:2em}.fa-inverse{color:#fff}.fa-glass:before{content:"\f000"}.fa-music:before{content:"\f001"}.fa-search:before{content:"\f002"}.fa-envelope-o:before{content:"\f003"}.fa-heart:before{content:"\f004"}.fa-star:before{content:"\f005"}.fa-star-o:before{content:"\f006"}.fa-user:before{content:"\f007"}.fa-film:before{content:"\f008"}.fa-th-large:before{content:"\f009"}.fa-th:before{content:"\f00a"}.fa-th-list:before{con`Û®SÚU  `Û®SÚU                  ‡‰ÚQÚU           xıQÚU  »Û®SÚU          ÄÛ®SÚU   @      ÄÛ®SÚU          t:"\f00d"}.fa-search-plus:before{content:"\f00e"}.fa-search-minus:before{content:"\f010"}.fa-power-off:before{content:"\f011"}.fa-signal:before{content:"\f012"}.fa-gear:before,.fa-cog:before{content:"\f013"}.fa-trash-o:before{content:"\f014"}.fa-home:before{content:"\f015"}.fa-file-o:before{content:"\f016"}.fa-clock-o:before{content:"\f017"}.fa-road:before{content:"\f018"}.fa-download:before{content:"\f019"}.fa-arrow-circle-o-down:before{content:"\f01a"}.fa-arrow-circle-o-up:before{content:"\f01b"}.fa-inbox:before{content:"\f01c"}.fa-play-circle-o:before{content:"\f01d"}.fa-rotate-right:before,.fa-repeat:before{content:"\f01e"}.fa-refresh:before{content:"\f021"}.fa-list-alt:before{content:"\f022"}.fa-lock:before{content:"\f023"}.fa-flag:before{content:"\f024"}.fa-headphones:before{content:"\f025"}.fa-volume-off:before{content:"\f026"}.fa-volume-down:before{content:"\f027"}.fa-volume-up:before{content:"\f028"}.fa-qrcode:before{content:"\f029"}.fa-barcode:before{content:"\f02a"}.fa-tag:before{content:"\f02b"}.fa-tags:before{content:"\f02c"}.fa-book:before{content:"\f02d"}.fa-bookmark:before{content:"\f02e"}.fa-print:before{content:"\f02f"}.fa-camera:before{content:"\f030"}.fa-font:before{content:"\f031"}.fa-bold:before{content:"\f032"}.fa-italic:before{content:"\f033"}.fa-text-height:before{content:"\f034"}.fa-text-width:before{content:"\f035"}.fa-align-left:before{content:"\f036"}.fa-align-center:before{content:"\f037"}.fa-align-right:before{content:"\f038"}.fa-align-justify:before{content:"\f039"}.fa-list:before{content:"\f03a"}.fa-dedent:before,.fa-outdent:before{content:"\f03b"}.fa-indent:before{content:"\f03c"}.fa-video-camera:before{content:"\f03d"}.fa-photo:before,.fa-image:before,.fa-picture-o:before{content:"\f03e"}.fa-pencil:before{content:"\f040"}.fa-map-marker:before{content:"\f041"}.fa-adjust:before{content:"\f042"}.fa-tint:before{content:"\f043"}.fa-edit:before,.fa-pencil-square-o:before{content:"\f044"}.fa-share-square-o:before{content:"\f045"}.fa-check-square-o:before{content:"\f046"}.fa-arrows:before{content:"\f047"}.fa-step-backward:before{content:"\f048"}.fa-fast-backward:before{content:"\f049"}.fa-backward:before{content:"\f04a"}.fa-play:before{content:"\f04b"}.fa-pause:before{content:"\f04c"}.fa-stop:before{content:"\f04d"}.fa-forward:before{content:"\f04e"}.fa-fast-forward:before{content:"\f050"}.fa-step-forward:before{content:"\f051"}.fa-eject:before{content:"\f052"}.fa-chevron-left:before{content:"\f053"}.fa-chevron-right:before{content:"\f054"}.fa-plus-circle:before{content:"\f055"}.fa-minus-circle:before{content:"\f056"}.fa-times-circle:before{content:"\f057"}.fa-check-circle:before{content:"\f058"}.fa-question-circle:before{content:"\f059"}.fa-info-circle:before{content:"\f05a"}.fa-crosshairs:before{content:"\f05b"}.fa-times-circle-o:before{content:"\f05c"}.fa-check-circle-o:before{content:"\f05d"}.fa-ban:before{content:"\f05e"}.fa-arrow-left:before{content:"\f060"}.fa-arrow-right:before{content:"\f061"}.fa-arrow-up:before{content:"\f062"}.fa-arrow-down:before{content:"\f063"}.fa-mail-forward:before,.fa-share:before{content:"\f064"}.fa-expand:before{content:"\f065"}.fa-compress:before{content:"\f066"}.fa-plus:before{content:"\f067"}.fa-minus:before{content:"\f068"}.fa-asterisk:before{content:"\f069"}.fa-exclamation-circle:before{content:"\f06a"}.fa-gift:before{content:"\f06b"}.fa-leaf:before{content:"\f06c"}.fa-fire:before{content:"\f06d"}.fa-eye:before{content:"\f06e"}.fa-eye-slash:before{content:"\f070"}.fa-warning:before,.fa-exclamation-triangle:before{content:"\f071"}.fa-plane:before{content:"\f072"}.fa-calendar:before{content:"\f073"}.fa-random:before{content:"\f074"}.fa-comment:before{content:"\f075"}.fa-magnet:before{content:"\f076"}.fa-chevron-up:before{content:"\f077"}.fa-chevron-down:before{content:"\f078"}.fa-retweet:before{content:"\f079"}.fa-shopping-cart:before{content:"\f07a"}.fa-folder:before{content:"\f07b"}.fa-folder-open:before{content:"\f07c"}.fa-arrows-v:before{content:"\f07d"}.fa-arrows-h:before{content:"\f07e"}.fa-bar-chart-o:before,.fa-bar-chart:before{content:"\f080"}.fa-twitter-square:before{content:"\f081"}.fa-facebook-square:before{content:"\f082"}.fa-camera-retro:before{content:"\f083"}.fa-key:before{content:"\f084"}.fa-gears:before,.fa-cogs:before{content:"\f085"}.fa-comments:before{content:"\f086"}.fa-thumbs-o-up:before{content:"\f087"}.fa-thumbs-o-down:before{content:"\f088"}.fa-star-half:before{content:"\f089"}.fa-heart-o:before{content:"\f08a"}.fa-sign-out:before{content:"\f08b"}.fa-linkedin-square:before{content:"\f08c"}.fa-thumb-tack:before{content:"\f08d"}.fa-external-link:before{content:"\f08e"}.fa-sign-in:before{content:"\f090"}.fa-trophy:before{content:"\f091"}.fa-github-square:before{content:"\f092"}.fa-upload:before{content:"\f093"}.fa-lemon-o:before{content:"\f094"}.fa-phone:before{content:"\f095"}.fa-square-o:before{content:"\f096"}.fa-bookmark-o:before{content:"\f097"}.fa-phone-square:before{content:"\f098"}.fa-twitter:before{content:"\f099"}.fa-facebook-f:before,.fa-facebook:before{content:"\f09a"}.fa-github:before{content:"\f09b"}.fa-unlock:before{content:"\f09c"}.fa-credit-card:before{content:"\f09d"}.fa-feed:before,.fa-rss:before{content:"\f09e"}.fa-hdd-o:before{content:"\f0a0"}.fa-bullhorn:before{content:"\f0a1"}.fa-bell:before{content:"\f0f3"}.fa-certificate:before{content:"\f0a3"}.fa-hand-o-right:before{content:"\f0a4"}.fa-hand-o-left:before{content:"\f0a5"}.fa-hand-o-up:before{content:"\f0a6"}.fa-hand-o-down:before{content:"\f0a7"}.fa-arrow-circle-left:before{content:"\f0a8"}.fa-arrow-circle-right:before{content:"\f0a9"}.fa-arrow-circle-up:before{content:"\f0aa"}.fa-arrow-circle-down:before{content:"\f0ab"}.fa-globe:before{content:"\f0ac"}.fa-wrench:before{content:"\f0ad"}.fa-tasks:before{content:"\f0ae"}.fa-filter:before{content:"\f0b0"}.fa-briefcase:before{content:"\f0b1"}.fa-arrows-alt:before{content:"\f0b2"}.fa-group:before,.fa-users:before{content:"\f0c0"}.fa-chain:before,.fa-link:before{content:"\f0c1"}.fa-cloud:before{content:"\f0c2"}.fa-flask:before{content:"\f0c3"}.fa-cut:before,.fa-scissors:before{content:"\f0c4"}.fa-copy:before,.fa-files-o:before{content:"\f0c5"}.fa-paperclip:before{content:"\f0c6"}.fa-save:before,.fa-floppy-o:before{content:"\f0c7"}.fa-square:before{content:"\f0c8"}.fa-navicon:before,.fa-reorder:before,.fa-bars:before{content:"\f0c9"}.fa-list-ul:before{content:"\f0ca"}.fa-list-ol:before{content:"\f0cb"}.fa-strikethrough:before{content:"\f0cc"}.fa-underline:before{content:"\f0cd"}.fa-table:before{content:"\f0ce"}.fa-magic:before{content:"\f0d0"}.fa-truck:before{content:"\f0d1"}.fa-pinterest:before{content:"\f0d2"}.fa-pinterest-square:before{content:"\f0d3"}.fa-google-plus-square:before{content:"\f0d4"}.fa-google-plus:before{content:"\f0d5"}.fa-money:before{content:"\f0d6"}.fa-caret-down:before{content:"\f0d7"}.fa-caret-up:before{content:"\f0d8"}.fa-caret-left:before{content:"\f0d9"}.fa-caret-right:before{content:"\f0da"}.fa-columns:before{content:"\f0db"}.fa-unsorted:before,.fa-sort:before{content:"\f0dc"}.fa-sort-down:before,.fa-sort-desc:before{content:"\f0dd"}.fa-sort-up:before,.fa-sort-asc:before{content:"\f0de"}.fa-envelope:before{content:"\f0e0"}.fa-linkedin:before{content:"\f0e1"}.fa-rotate-left:before,.fa-undo:before{content:"\f0e2"}.fa-legal:before,.fa-gavel:before{content:"\f0e3"}.fa-dashboard:before,.fa-tachometer:before{content:"\f0e4"}.fa-comment-o:before{content:"\f0e5"}.fa-comments-o:before{content:"\f0e6"}.fa-flash:before,.fa-bolt:before{content:"\f0e7"}.fa-sitemap:before{content:"\f0e8"}.fa-umbrella:before{content:"\f0e9"}.fa-paste:before,.fa-clipboard:before{content:"\f0ea"}.fa-lightbulb-o:before{content:"\f0eb"}.fa-exchange:before{content:"\f0ec"}.fa-cloud-download:before{content:"\f0ed"}.fa-cloud-upload:before{content:"\f0ee"}.fa-user-md:before{content:"\f0f0"}.fa-stethoscope:before{content:"\f0f1"}.fa-suitcase:before{content:"\f0f2"}.fa-bell-o:before{content:"\f0a2"}.fa-coffee:before{content:"\f0f4"}.fa-cutlery:before{content:"\f0f5"}.fa-file-text-o:before{content:"\f0f6"}.fa-building-o:before{content:"\f0f7"}.fa-hospital-o:before{content:"\f0f8"}.fa-ambulance:before{content:"\f0f9"}.fa-medkit:before{content:"\f0fa"}.fa-fighter-jet:before{content:"\f0fb"}.fa-beer:before{content:"\f0fc"}.fa-h-square:before{content:"\f0fd"}.fa-plus-square:before{content:"\f0fe"}.fa-angle-double-left:before{content:"\f100"}.fa-angle-double-right:before{content:"\f101"}.fa-angle-double-up:before{content:"\f102"}.fa-angle-double-down:before{content:"\f103"}.fa-angle-left:before{content:"\f104"}.fa-angle-right:before{content:"\f105"}.fa-angle-up:before{content:"\f106"}.fa-angle-down:before{content:"\f107"}.fa-desktop:before{content:"\f108"}.fa-laptop:before{content:"\f109"}.fa-tablet:before{content:"\f10a"}.fa-mobile-phone:before,.fa-mobile:before{content:"\f10b"}.fa-circle-o:before{content:"\f10c"}.fa-quote-left:before{content:"\f10d"}.fa-quote-right:before{content:"\f10e"}.fa-spinner:before{content:"\f110"}.fa-circle:before{content:"\f111"}.fa-mail-reply:before,.fa-reply:before{content:"\f112"}.fa-github-alt:before{content:"\f113"}.fa-folder-o:before{content:"\f114"}.fa-folder-open-o:before{content:"\f115"}.fa-smile-o:before{content:"\f118"}.fa-frown-o:before{content:"\f119"}.fa-meh-o:before{content:"\f11a"}.fa-gamepad:before{content:"\f11b"}.fa-keyboard-o:before{content:"\f11c"}.fa-flag-o:before{content:"\f11d"}.fa-flag-checkered:before{content:"\f11e"}.fa-terminal:before{content:"\f120"}.fa-code:before{content:"\f121"}.fa-mail-reply-all:before,.fa-reply-all:before{content:"\f122"}.fa-star-half-empty:before,.fa-star-half-full:before,.fa-star-half-o:before{content:"\f123"}.fa-location-arrow:before{content:"\f124"}.fa-crop:before{content:"\f125"}.fa-code-fork:before{content:"\f126"}.fa-unlink:before,.fa-chain-broken:before{content:"\f127"}.fa-question:before{content:"\f128"}.fa-info:before{content:"\f129"}.fa-exclamation:before{content:"\f12a"}.fa-superscript:before{content:"\f12b"}.fa-subscript:before{content:"\f12c"}.fa-eraser:before{content:"\f12d"}.fa-puzzle-piece:before{content:"\f12e"}.fa-microphone:before{content:"\f130"}.fa-microphone-slash:before{content:"\f131"}.fa-shield:before{content:"\f132"}.fa-calendar-o:before{content:"\f133"}.fa-fire-extinguisher:before{content:"\f134"}.fa-rocket:before{content:"\f135"}.fa-maxcdn:before{content:"\f136"}.fa-chevron-circle-left:before{content:"\f137"}.fa-chevron-circle-right:before{content:"\f138"}.fa-chevron-circle-up:before{content:"\f139"}.fa-chevron-circle-down:before{content:"\f13a"}.fa-html5:before{content:"\f13b"}.fa-css3:before{content:"\f13c"}.fa-anchor:before{content:"\f13d"}.fa-unlock-alt:before{content:"\f13e"}.fa-bullseye:before{content:"\f140"}.fa-ellipsis-h:before{content:"\f141"}.fa-ellipsis-v:before{content:"\f142"}.fa-rss-square:before{content:"\f143"}.fa-play-circle:before{content:"\f144"}.fa-ticket:before{content:"\f145"}.fa-minus-square:before{content:"\f146"}.fa-minus-square-o:before{content:"\f147"}.fa-level-up:before{content:"\f148"}.fa-level-down:before{content:"\f149"}.fa-check-square:before{content:"\f14a"}.fa-pencil-square:before{content:"\f14b"}.fa-external-link-square:before{content:"\f14c"}.fa-share-square:before{content:"\f14d"}.fa-compass:before{content:"\f14e"}.fa-toggle-down:before,.fa-caret-square-o-down:before{content:"\f150"}.fa-toggle-up:before,.fa-caret-square-o-up:before{content:"\f151"}.fa-toggle-right:before,.fa-caret-square-o-right:before{content:"\f152"}.fa-euro:before,.fa-eur:before{content:"\f153"}.fa-gbp:before{content:"\f154"}.fa-dollar:before,.fa-usd:before{content:"\f155"}.fa-rupee:before,.fa-inr:before{content:"\f156"}.fa-cny:before,.fa-rmb:before,.fa-yen:before,.fa-jpy:before{content:"\f157"}.fa-ruble:before,.fa-rouble:before,.fa-rub:before{content:"\f158"}.fa-won:before,.fa-krw:before{content:"\f159"}.fa-bitcoin:before,.fa-btc:before{content:"\f15a"}.fa-file:before{content:"\f15b"}.fa-file-text:before{content:"\f15c"}.fa-sort-alpha-asc:before{content:"\f15d"}.fa-sort-alpha-desc:before{content:"\f15e"}.fa-sort-amount-asc:before{content:"\f160"}.fa-sort-amount-desc:before{content:"\f161"}.fa-sort-numeric-asc:before{content:"\f162"}.fa-sort-numeric-desc:before{content:"\f163"}.fa-thumbs-up:before{content:"\f164"}.fa-thumbs-down:before{content:"\f165"}.fa-youtube-square:before{content:"\f166"}.fa-youtube:before{content:"\f167"}.fa-xing:before{content:"\f168"}.fa-xing-square:before{content:"\f169"}.fa-youtube-play:before{content:"\f16a"}.fa-dropbox:before{content:"\f16b"}.fa-stack-overflow:before{content:"\f16c"}.fa-instagram:before{content:"\f16d"}.fa-flickr:before{content:"\f16e"}.fa-adn:before{content:"\f170"}.fa-bitbucket:before{content:"\f171"}.fa-bitbucket-square:before{content:"\f172"}.fa-tumblr:before{content:"\f173"}.fa-tumblr-square:before{content:"\f174"}.fa-long-arrow-down:before{content:"\f175"}.fa-long-arrow-up:before{content:"\f176"}.fa-long-arrow-left:before{content:"\f177"}.fa-long-arrow-right:before{content:"\f178"}.fa-apple:before{content:"\f179"}.fa-windows:before{content:"\f17a"}.fa-android:before{content:"\f17b"}.fa-linux:before{content:"\f17c"}.fa-dribbble:before{content:"\f17d"}.fa-skype:before{content:"\f17e"}.fa-foursquare:before{content:"\f180"}.fa-trello:before{content:"\f181"}.fa-female:before{content:"\f182"}.fa-male:before{content:"\f183"}.fa-gittip:before,.fa-gratipay:before{content:"\f184"}.fa-sun-o:before{content:"\f185"}.fa-moon-o:before{content:"\f186"}.fa-archive:before{content:"\f187"}.fa-bug:before{content:"\f188"}.fa-vk:before{content:"\f189"}.fa-weibo:before{content:"\f18a"}.fa-renren:before{content:"\f18b"}.fa-pagelines:before{content:"\f18c"}.fa-stack-exchange:before{content:"\f18d"}.fa-arrow-circle-o-right:before{content:"\f18e"}.fa-arrow-circle-o-left:before{content:"\f190"}.fa-toggle-left:before,.fa-caret-square-o-left:before{content:"\f191"}.fa-dot-circle-o:before{content:"\f192"}.fa-wheelchair:before{content:"\f193"}.fa-vimeo-square:before{content:"\f194"}.fa-turkish-lira:before,.fa-try:before{content:"\f195"}.fa-plus-square-o:before{content:"\f196"}.fa-space-shuttle:before{content:"\f197"}.fa-slack:before{content:"\f198"}.fa-envelope-square:before{content:"\f199"}.fa-wordpress:before{content:"\f19a"}.fa-openid:before{content:"\f19b"}.fa-institution:before,.fa-bank:before,.fa-university:before{content:"\f19c"}.fa-mortar-board:before,.fa-graduation-cap:before{content:"\f19d"}.fa-yahoo:before{content:"\f19e"}.fa-google:before{content:"\f1a0"}.fa-reddit:before{content:"\f1a1"}.fa-reddit-square:before{content:"\f1a2"}.fa-stumbleupon-circle:before{content:"\f1a3"}.fa-stumbleupon:before{content:"\f1a4"}.fa-delicious:before{content:"\f1a5"}.fa-digg:before{content:"\f1a6"}.fa-pied-piper-pp:before{content:"\f1a7"}.fa-pied-piper-alt:before{content:"\f1a8"}.fa-drupal:before{content:"\f1a9"}.fa-joomla:before{content:"\f1aa"}.fa-language:before{content:"\f1ab"}.fa-fax:before{content:"\f1ac"}.fa-building:before{content:"\f1ad"}.fa-child:before{content:"\f1ae"}.fa-paw:before{content:"\f1b0"}.fa-spoon:before{content:"\f1b1"}.fa-cube:before{content:"\f1b2"}.fa-cubes:before{content:"\f1b3"}.fa-behance:before{content:"\f1b4"}.fa-behance-square:before{content:"\f1b5"}.fa-steam:before{content:"\f1b6"}.fa-steam-square:before{content:"\f1b7"}.fa-recycle:before{content:"\f1b8"}.fa-automobile:before,.fa-car:before{content:"\f1b9"}.fa-cab:before,.fa-taxi:before{content:"\f1ba"}.fa-tree:before{content:"\f1bb"}.fa-spotify:before{content:"\f1bc"}.fa-deviantart:before{content:"\f1bd"}.fa-soundcloud:before{content:"\f1be"}.fa-database:before{content:"\f1c0"}.fa-file-pdf-o:before{content:"\f1c1"}.fa-file-word-o:before{content:"\f1c2"}.fa-file-excel-o:before{content:"\f1c3"}.fa-file-powerpoint-o:before{content:"\f1c4"}.fa-file-photo-o:before,.fa-file-picture-o:before,.fa-file-image-o:before{content:"\f1c5"}.fa-file-zip-o:before,.fa-file-archive-o:before{content:"\f1c6"}.fa-file-sound-o:before,.fa-file-audio-o:before{content:"\f1c7"}.fa-file-movie-o:before,.fa-file-video-o:before{content:"\f1c8"}.fa-file-code-o:before{content:"\f1c9"}.fa-vine:before{content:"\f1ca"}.fa-codepen:before{content:"\f1cb"}.fa-jsfiddle:before{content:"\f1cc"}.fa-life-bouy:before,.fa-life-buoy:before,.fa-life-saver:before,.fa-support:before,.fa-life-ring:before{content:"\f1cd"}.fa-circle-o-notch:before{content:"\f1ce"}.fa-ra:before,.fa-resistance:before,.fa-rebel:before{content:"\f1d0"}.fa-ge:before,.fa-empire:before{content:"\f1d1"}.fa-git-square:before{content:"\f1d2"}.fa-git:before{content:"\f1d3"}.fa-y-combinator-square:before,.fa-yc-square:before,.fa-hacker-news:before{content:"\f1d4"}.fa-tencent-weibo:before{content:"\f1d5"}.fa-qq:before{content:"\f1d6"}.fa-wechat:before,.fa-weixin:before{content:"\f1d7"}.fa-send:before,.fa-paper-plane:before{content:"\f1d8"}.fa-send-o:before,.fa-paper-plane-o:before{content:"\f1d9"}.fa-history:before{content:"\f1da"}.fa-circle-thin:before{content:"\f1db"}.fa-header:before{content:"\f1dc"}.fa-paragraph:before{content:"\f1dd"}.fa-sliders:before{content:"\f1de"}.fa-share-alt:before{content:"\f1e0"}.fa-share-alt-square:before{content:"\f1e1"}.fa-bomb:before{content:"\f1e2"}.fa-soccer-ball-o:before,.fa-futbol-o:before{content:"\f1e3"}.fa-tty:before{content:"\f1e4"}.fa-binoculars:before{content:"\f1e5"}.fa-plug:before{content:"\f1e6"}.fa-slideshare:before{content:"\f1e7"}.fa-twitch:before{content:"\f1e8"}.fa-yelp:before{content:"\f1e9"}.fa-newspaper-o:before{content:"\f1ea"}.fa-wifi:before{content:"\f1eb"}.fa-calculator:before{content:"\f1ec"}.fa-paypal:before{content:"\f1ed"}.fa-google-wallet:before{content:"\f1ee"}.fa-cc-visa:before{content:"\f1f0"}.fa-cc-mastercard:before{content:"\f1f1"}.fa-cc-discover:before{content:"\f1f2"}.fa-cc-amex:before{content:"\f1f3"}.fa-cc-paypal:before{content:"\f1f4"}.fa-cc-stripe:before{content:"\f1f5"}.fa-bell-slash:before{content:"\f1f6"}.fa-bell-slash-o:before{content:"\f1f7"}.fa-trash:before{content:"\f1f8"}.fa-copyright:before{content:"\f1f9"}.fa-at:before{content:"\f1fa"}.fa-eyedropper:before{content:"\f1fb"}.fa-paint-brush:before{content:"\f1fc"}.fa-birthday-cake:before{content:"\f1fd"}.fa-area-chart:before{content:"\f1fe"}.fa-pie-chart:before{content:"\f200"}.fa-line-chart:before{content:"\f201"}.fa-lastfm:before{content:"\f202"}.fa-lastfm-square:before{content:"\f203"}.fa-toggle-off:before{content:"\f204"}.fa-toggle-on:before{content:"\f205"}.fa-bicycle:before{content:"\f206"}.fa-bus:before{content:"\f207"}.fa-ioxhost:before{content:"\f208"}.fa-angellist:before{content:"\f209"}.fa-cc:before{content:"\f20a"}.fa-shekel:before,.fa-sheqel:before,.fa-ils:before{content:"\f20b"}.fa-meanpath:before{content:"\f20c"}.fa-buysellads:before{content:"\f20d"}.fa-connectdevelop:before{content:"\f20e"}.fa-dashcube:before{content:"\f210"}.fa-forumbee:before{content:"\f211"}.fa-leanpub:before{content:"\f212"}.fa-sellsy:before{content:"\f213"}.fa-shirtsinbulk:before{content:"\f214"}.fa-simplybuilt:before{content:"\f215"}.fa-skyatlas:before{content:"\f216"}.fa-cart-plus:before{content:"\f217"}.fa-cart-arrow-down:before{content:"\f218"}.fa-diamond:before{content:"\f219"}.fa-ship:before{content:"\f21a"}.fa-user-secret:before{content:"\f21b"}.fa-motorcycle:before{content:"\f21c"}.fa-street-view:before{content:"\f21d"}.fa-heartbeat:before{content:"\f21e"}.fa-venus:before{content:"\f221"}.fa-mars:before{content:"\f222"}.fa-mercury:before{content:"\f223"}.fa-intersex:before,.fa-transgender:before{content:"\f224"}.fa-transgender-alt:before{content:"\f225"}.fa-venus-double:before{content:"\f226"}.fa-mars-double:before{content:"\f227"}.fa-venus-mars:before{content:"\f228"}.fa-mars-stroke:before{content:"\f229"}.fa-mars-stroke-v:before{content:"\f22a"}.fa-mars-stroke-h:before{content:"\f22b"}.fa-neuter:before{content:"\f22c"}.fa-genderless:before{content:"\f22d"}.fa-facebook-official:before{content:"\f230"}.fa-pinterest-p:before{content:"\f231"}.fa-whatsapp:before{content:"\f232"}.fa-server:before{content:"\f233"}.fa-user-plus:before{content:"\f234"}.fa-user-times:before{content:"\f235"}.fa-hotel:before,.fa-bed:before{content:"\f236"}.fa-viacoin:before{content:"\f237"}.fa-train:before{content:"\f238"}.fa-subway:before{content:"\f239"}.fa-medium:before{content:"\f23a"}.fa-yc:before,.fa-y-combinator:before{content:"\f23b"}.fa-optin-monster:before{content:"\f23c"}.fa-opencart:before{content:"\f23d"}.fa-expeditedssl:before{content:"\f23e"}.fa-battery-4:before,.fa-battery:before,.fa-battery-full:before{content:"\f240"}.fa-battery-3:before,.fa-battery-three-quarters:before{content:"\f241"}.fa-battery-2:before,.fa-battery-half:before{content:"\f242"}.fa-battery-1:before,.fa-battery-quarter:before{content:"\f243"}.fa-battery-0:before,.fa-battery-empty:before{content:"\f244"}.fa-mouse-pointer:before{content:"\f245"}.fa-i-cursor:before{content:"\f246"}.fa-object-group:before{content:"\f247"}.fa-object-ungroup:before{content:"\f248"}.fa-sticky-note:before{content:"\f249"}.fa-sticky-note-o:before{content:"\f24a"}.fa-cc-jcb:before{content:"\f24b"}.fa-cc-diners-club:before{content:"\f24c"}.fa-clone:before{content:"\f24d"}.fa-balance-scale:before{content:"\f24e"}.fa-hourglass-o:before{content:"\f250"}.fa-hourglass-1:before,.fa-hourglass-start:before{content:"\f251"}.fa-hourglass-2:before,.fa-hourglass-half:before{content:"\f252"}.fa-hourglass-3:before,.fa-hourglass-end:before{content:"\f253"}.fa-hourglass:before{content:"\f254"}.fa-hand-grab-o:before,.fa-hand-rock-o:before{content:"\f255"}.fa-hand-stop-o:before,.fa-hand-paper-o:before{content:"\f256"}.fa-hand-scissors-o:before{content:"\f257"}.fa-hand-lizard-o:before{content:"\f258"}.fa-hand-spock-o:before{content:"\f259"}.fa-hand-pointer-o:before{content:"\f25a"}.fa-hand-peace-o:before{content:"\f25b"}.fa-trademark:before{content:"\f25c"}.fa-registered:before{content:"\f25d"}.fa-creative-commons:before{content:"\f25e"}.fa-gg:before{content:"\f260"}.fa-gg-circle:before{content:"\f261"}.fa-tripadvisor:before{content:"\f262"}.fa-odnoklassniki:before{content:"\f263"}.fa-odnoklassniki-square:before{content:"\f264"}.fa-get-pocket:before{content:"\f265"}.fa-wikipedia-w:before{content:"\f266"}.fa-safari:before{content:"\f267"}.fa-chrome:before{content:"\f268"}.fa-firefox:before{content:"\f269"}.fa-opera:before{content:"\f26a"}.fa-internet-explorer:before{content:"\f26b"}.fa-tv:before,.fa-television:before{content:"\f26c"}.fa-contao:before{content:"\f26d"}.fa-500px:before{content:"\f26e"}.fa-amazon:before{content:"\f270"}.fa-calendar-plus-o:before{content:"\f271"}.fa-calendar-minus-o:before{content:"\f272"}.fa-calendar-times-o:before{content:"\f273"}.fa-calendar-check-o:before{content:"\f274"}.fa-industry:before{content:"\f275"}.fa-map-pin:before{content:"\f276"}.fa-map-signs:before{content:"\f277"}.fa-map-o:before{content:"\f278"}.fa-map:before{content:"\f279"}.fa-commenting:before{content:"\f27a"}.fa-commenting-o:before{content:"\f27b"}.fa-houzz:before{content:"\f27c"}.fa-vimeo:before{content:"\f27d"}.fa-black-tie:before{content:"\f27e"}.fa-fonticons:before{content:"\f280"}.fa-reddit-alien:before{content:"\f281"}.fa-edge:before{content:"\f282"}.fa-credit-card-alt:before{content:"\f283"}.fa-codiepie:before{content:"\f284"}.fa-modx:before{content:"\f285"}.fa-fort-awesome:before{content:"\f286"}.fa-usb:before{content:"\f287"}.fa-product-hunt:before{content:"\f288"}.fa-mixcloud:before{content:"\f289"}.fa-scribd:before{content:"\f28a"}.fa-pause-circle:before{content:"\f28b"}.fa-pause-circle-o:before{content:"\f28c"}.fa-stop-circle:before{content:"\f28d"}.fa-stop-circle-o:before{content:"\f28e"}.fa-shopping-bag:before{content:"\f290"}.fa-shopping-basket:before{content:"\f291"}.fa-hashtag:before{content:"\f292"}.fa-bluetooth:before{content:"\f293"}.fa-bluetooth-b:before{content:"\f294"}.fa-percent:before{content:"\f295"}.fa-gitlab:before{content:"\f296"}.fa-wpbeginner:before{content:"\f297"}.fa-wpforms:before{content:"\f298"}.fa-envira:before{content:"\f299"}.fa-universal-access:before{content:"\f29a"}.fa-wheelchair-alt:before{content:"\f29b"}.fa-question-circle-o:before{content:"\f29c"}.fa-blind:before{content:"\f29d"}.fa-audio-description:before{content:"\f29e"}.fa-volume-control-phone:before{content:"\f2a0"}.fa-braille:before{content:"\f2a1"}.fa-assistive-listening-systems:before{content:"\f2a2"}.fa-asl-interpreting:before,.fa-american-sign-language-interpreting:before{content:"\f2a3"}.fa-deafness:before,.fa-hard-of-hearing:before,.fa-deaf:before{content:"\f2a4"}.fa-glide:before{content:"\f2a5"}.fa-glide-g:before{content:"\f2a6"}.fa-signing:before,.fa-sign-language:before{content:"\f2a7"}.fa-low-vision:before{content:"\f2a8"}.fa-viadeo:before{content:"\f2a9"}.fa-viadeo-square:before{content:"\f2aa"}.fa-snapchat:before{content:"\f2ab"}.fa-snapchat-ghost:before{content:"\f2ac"}.fa-snapchat-square:before{content:"\f2ad"}.fa-pied-piper:before{content:"\f2ae"}.fa-first-order:before{content:"\f2b0"}.fa-yoast:before{content:"\f2b1"}.fa-themeisle:before{content:"\f2b2"}.fa-google-plus-circle:before,.fa-google-plus-official:before{content:"\f2b3"}.fa-fa:before,.fa-font-awesome:before{content:"\f2b4"}.fa-handshake-o:before{content:"\f2b5"}.fa-envelope-open:before{content:"\f2b6"}.fa-envelope-open-o:before{content:"\f2b7"}.fa-linode:before{content:"\f2b8"}.fa-address-book:before{content:"\f2b9"}.fa-address-book-o:before{content:"\f2ba"}.fa-vcard:before,.fa-address-card:before{content:"\f2bb"}.fa-vcard-o:before,.fa-address-card-o:before{content:"\f2bc"}.fa-user-circle:before{content:"\f2bd"}.fa-user-circle-o:before{content:"\f2be"}.fa-user-o:before{content:"\f2c0"}.fa-id-badge:before{content:"\f2c1"}.fa-drivers-license:before,.fa-id-card:before{content:"\f2c2"}.fa-drivers-license-o:before,.fa-id-card-o:before{content:"\f2c3"}.fa-quora:before{content:"\f2c4"}.fa-free-code-camp:before{content:"\f2c5"}.fa-telegram:before{content:"\f2c6"}.fa-thermometer-4:before,.fa-thermometer:before,.fa-thermometer-full:before{content:"\f2c7"}.fa-thermometer-3:before,.fa-thermometer-three-quarters:before{content:"\f2c8"}.fa-thermometer-2:before,.fa-thermometer-half:before{content:"\f2c9"}.fa-thermometer-1:before,.fa-thermometer-quarter:before{content:"\f2ca"}.fa-thermometer-0:before,.fa-thermometer-empty:before{content:"\f2cb"}.fa-shower:before{content:"\f2cc"}.fa-bathtub:before,.fa-s15:before,.fa-bath:before{content:"\f2cd"}.fa-podcast:before{content:"\f2ce"}.fa-window-maximize:before{content:"\f2d0"}.fa-window-minimize:before{content:"\f2d1"}.fa-window-restore:before{content:"\f2d2"}.fa-times-rectangle:before,.fa-window-close:before{content:"\f2d3"}.fa-times-rectangle-o:before,.fa-window-close-o:before{content:"\f2d4"}.fa-bandcamp:before{content:"\f2d5"}.fa-grav:before{content:"\f2d6"}.fa-etsy:before{content:"\f2d7"}.fa-imdb:before{content:"\f2d8"}.fa-ravelry:before{content:"\f2d9"}.fa-eercast:before{content:"\f2da"}.fa-microchip:before{content:"\f2db"}.fa-snowflake-o:before{content:"\f2dc"}.fa-superpowers:before{content:"\f2dd"}.fa-wpexplorer:before{content:"\f2de"}.fa-meetup:before{content:"\f2e0"}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}
</style>
<?php if(is_page(1365)){ ?>
<style>
.overlay-section.opacity0 .container .banner-content .more-btn .button-wrapper .btn-sty-one { display: inline-flex; cursor: pointer; padding: 15px 10px 15px 38px; background: transparent; box-shadow: none; border:1px solid #fff; text-decoration: none; color: #fff; font-size:16px; border-radius: 45px; transition: all ease-out 0.3s; margin-top:30px; }
.overlay-section.opacity0 .container .banner-content .more-btn .button-wrapper .btn-sty-one .arrow { display: inline-block; background: url(/wp-content/themes/askantech/assets/images/more-btn-arrow-white.png); background-repeat: no-repeat; background-size: 26px; background-position: 0px; margin-left: 10px; width: 48px; min-height: 16px; transition: all ease-out 0.3s; }

.cc-innerpage-banner .overlay-section.opacity0 .container .banner-content { width: 40%; }
.cc-innerpage-banner .overlay-section.opacity0 .container .banner-content-right { width: 60%; text-align: right; }

.text-center{text-align:center;}
.text-left{text-align:left;}


/* ecommerce style start */
#ecommerce .banner-section .overlay-section.opacity0 {background: rgba(0, 0, 0, 0.60);position: relative;}
#ecommerce .banner-content .text-two::before { background: rgba(83,224,208,1); background: -moz-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%); background: -webkit-gradient(left top, right top, color-stop(0%, rgba(83,224,208,1)), color-stop(100%, rgba(0,154,250,1))); background: -webkit-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%); background: -o-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%); background: -ms-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%); background: linear-gradient(to right, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#53e0d0', endColorstr='#009afa', GradientType=1 ); }
#ecommerce .overlay-section.opacity0 .container .banner-content-right img {top: 0;}
.cc-ecommerce-development .cc-row {align-items: center;}
#ecommerce .parallax-overlay-casestudy {background-size: cover; background-color: #f6f9fc;}
.cc-ecommerce-development {background-image: url('/wp-content/themes/askantech/assets/images/dots-map.png');background-size:contain;background-repeat: no-repeat; padding: 90px 0px; }
.cc-ecommerce-development .cc-row {align-items: center;}
.apptech-box-wrapper {position: relative;margin-bottom: 220px;}
.dark-blue-bg.apptech-box {background: #009bfa;position:absolute;top: 90%;left: 0;}
.cc-what-we-provide {margin-bottom: 35px;}
.cc-what-we-provide .cc-icon-list-wrapper { display: flex ;flex-wrap: wrap; }
.cc-what-we-provide .cc-icon-list-wrapper .cc-icon-wrapper  { text-align: center; width: 33.33%;flex-basis: 33.33%;margin: 30px 0px; }
.cc-what-we-provide .cc-icon-list-wrapper .cc-icon-wrapper h4 { margin-top: 20px; }
.cc-list-block .cc-content-box {height:100%;}
.cc-list-block .content-block .content-block-title h3 {color: #fff;}
.cc-list-block .content-block .content-block-sub-title h5 {color: #fff;}
.cc-list-block .small-title-line {background: #fff;}
.cc-what-we-provide .cc-list-wrapper {margin-top: 30px;}
.cc-what-we-provide .cc-list-wrapper ul {padding-left: 30px;}
.cc-what-we-provide .cc-list-wrapper li { list-style-type:none;font-size: 16px;font-family: "poppins";margin: 18px 0px; list-style-image: url(/wp-content/themes/askantech/assets/images/cart-list-icon.png) ; } 
.cc-what-we-provide .content-block { padding: 40px 20px 20px 54px;background: #009bfa;color: #fff;width: 90%;height: 100%;margin: 0px 0px 0px auto; background-image: url('/wp-content/themes/askantech/assets/images/shopping-cart-bg.png') ; background-repeat: no-repeat; background-position: bottom right; }
.cc-how-we-work { padding: 70px 0px 45px 0px;margin-top: 100px; background: rgba(83,224,208,1); background: -moz-linear-gradient(right, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%); background: -webkit-gradient(right top, left top, color-stop(0%, rgba(83,224,208,1)), color-stop(100%, rgba(0,154,250,1))); background: -webkit-linear-gradient(right, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%); background: -o-linear-gradient(right, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%); background: -ms-linear-gradient(right, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%); background: linear-gradient(to left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#53e0d0', endColorstr='#009afa', GradientType=1 ); color: #fff !important; }

.cc-how-we-work .content-block .content-block-title h3 {color: #fff;}
.cc-how-we-work .content-block .content-block-sub-title h5 {color: #fff;}
.cc-how-we-work .content-block-sub-title .right-line.small-title-line {background-color: #fff;}

.cc-how-we-work .cc-cont p {margin: 20px 0px;}

.cc-white-box-wrapper {padding: 70px 0px;}
.cc-white-box-wrapper {display: flex;justify-content: space-around;}
.cc-white-box-wrapper .cc-white-box {text-align: center;padding: 30px 40px 35px 40px;background: #fff;border-radius: 5px;max-width: 150px;}
.cc-white-box-wrapper .cc-white-box h3{color: #000;font-family: "poppins";font-size: 16px;font-weight: 500;margin-top: 5px;}

.footer-case-study { background: url(/wp-content/themes/askantech/assets/images/case-study-bg.png); background-repeat: no-repeat; background-position: top left; background-size: cover; display: inline-block; width: 100%; padding: 250px 0 50px 0; position: relative; }
.parallax-overlay-casestudy{position:absolute;top:0px;left:0px;width:100%;height:100%;background:url(/wp-content/themes/askantech/assets/images/case-study-parallax.png);background-repeat: no-repeat;background-position: top center;margin:100px 0;}

.app-technology{padding:150px 0;background:url(/wp-content/themes/askantech/assets/images/pencil-phone-left.png) no-repeat left 40px,url(/wp-content/themes/askantech/assets/images/glass-right.png) no-repeat right 50%;	background-size:16%;}
.apptech-txt h3{color:#009bfa;font-size:26px;text-align:left;font-weight: 500;padding:20% 0;position:relative;}
.apptech-txt .small-title-line{display:inline-block;position:relative;top:-5px;width:60px;}
.apptech-box{width:33%;box-sizing:border-box;padding:50px 20px;border-radius:5px;color:#fff;display:inline-block;margin:10px;text-align:center;min-height:210px;}
.blue-bg{background:#53e0d0;}
.violet-bg{background:#71105f;position:relative;top:100px;}
.skyblue-bg{background:#009bfa;}
.darkblue-bg{background:#00a3d3;position:relative;top:100px;}
.apptech-box span{display:inline-block;width:100%;margin:5px 0;}

/* ecommerce style start */

@media only screen and (min-width:1400px)  {
    .cc-white-box-wrapper .cc-white-box {min-width: 184px;}
}

@media only screen and (min-width:1024px) {
	/*ecommerce*/
	.cc-white-box-wrapper {background-image: url(/wp-content/themes/askantech/assets/images/line-bg.png);background-repeat: no-repeat;background-position: center;}
}




@media only screen and (max-width:768px) {

    #ecommerce .overlay-section.opacity0 .container .banner-content { box-sizing: border-box; padding: 10px; }
    .cc-innerpage-banner .overlay-section.opacity0 .container .banner-content ,
    .cc-innerpage-banner .overlay-section.opacity0 .container .banner-content-right { width: 100%;}

    /**ecommerce**/
	#ecommerce .banner-section {padding-top: 0 !important;}
    #ecommerce .banner-section .overlay-section {padding-top: 90px;}
    #ecommerce .cc-row {padding: 0px 10px;}
    #ecommerce .banner-section .overlay-section .cc-row {flex-wrap:wrap;}
    #ecommerce .banner-section .overlay-section .cc-row .banner-content , #ecommerce .banner-section .overlay-section .cc-row .banner-content-right {width: 100%;}
    #ecommerce .banner-section {height: auto;position: relative;padding-top: 90px;}
    #ecommerce .banner-section .overlay-section {position:relative;}
    #ecommerce .overlay-section.opacity0 .container {top: 0%;transform: translateY(0%);display: inline-block;width: 100%;}
    #ecommerce .overlay-section.opacity0 .container .banner-content {box-sizing: border-box;padding: 10px;}
    #ecommerce .banner-content-right {margin-bottom: 20px;}
    #ecommerce .footer-case-study {padding-top: 45px;}
    #ecommerce .parallax-overlay-casestudy {margin: 0;}
    #ecommerce .footer-contact {padding: 50px 0;}
    #ecommerce .cc-col-55.casestudy-left {padding: 0;}
    .parallax-overlay-casestudy .cc-col-45 {text-align: center;}
    .cc-white-box-wrapper {flex-wrap: wrap;padding: 10px 0px;}
    .cc-white-box-wrapper .cc-white-box {margin: 10px 0px}
    .cc-white-box-wrapper .cc-white-box {max-width: 113px !important;padding: 25px !important;}
    .cc-ecommerce-development {padding: 45px 0px; padding-bottom: 0px;}
    .cc-what-we-provide .cc-icon-list-wrapper {justify-content: center;}
    .cc-what-we-provide .content-block {width: 100%;padding:30px 10px;}
    .cc-what-we-provide .cc-icon-list-wrapper .cc-icon-wrapper {margin: 20px;}
    .cc-how-we-work{margin-top: 0;}
    .apptech-box {width: 45%; margin: 12px 6px;}
    #ecommerce .apptech-txt h3 {padding: 0;}
	#ecommerce .dark-blue-bg.apptech-box{position:relative;top:0px;}
    #ecommerce .violet-bg.apptech-box{top:0px;}
    
    .apptech-box-wrapper { margin-bottom: 0px; }
}

@media only screen and (min-width:320px) and (max-width:420px) { 

    .cc-innerpage-banner .banner-section .overlay-section.opacity0 .text-one h3{ font-size: 14px; }
    .cc-innerpage-banner .banner-section .overlay-section.opacity0 .text-two h2{ font-size: 28px; }   
}
</style>
<?php } else if(is_page(1596)){ ?> 
<style>
    .overlay-section.opacity0 .container .banner-content .more-btn .button-wrapper .btn-sty-one { display: inline-flex; cursor: pointer; padding: 15px 10px 15px 38px; background: transparent; box-shadow: none; border:1px solid #fff; text-decoration: none; color: #fff; font-size:16px; border-radius: 45px; transition: all ease-out 0.3s; margin-top:30px; }
.overlay-section.opacity0 .container .banner-content .more-btn .button-wrapper .btn-sty-one .arrow { display: inline-block; background: url(/wp-content/themes/askantech/assets/images/more-btn-arrow-white.png); background-repeat: no-repeat; background-size: 26px; background-position: 0px; margin-left: 10px; width: 48px; min-height: 16px; transition: all ease-out 0.3s; }
.text-center{text-align:center;}
.text-left{text-align:left;}
.content-block .content-block-title.green-title h3{color:#53e0d0;margin-bottom:25px;}

.space50 { display: inline-block; width: 100%; height: 50px; }

/**wp development**/
#wp-development .overlay-section.opacity0{position:relative;}
#wp-development .overlay-section.opacity0 .container .banner-content, #yii-development .overlay-section.opacity0 .container .banner-content-right{width:50%;}
#wp-development .overlay-section.opacity0 .container {transform: translateY(-20%);}
#wp-development .overlay-section.opacity0 .container .banner-content-right{text-align:center;}
#wp-development .overlay-section.opacity0 .container .banner-content-right img{top:0px;max-width:420px;}
#wp-development .wp-developdiv{padding:50px 0 30px 0;background:url(/wp-content/themes/askantech/assets/images/wp-aboutbg.png) no-repeat top left, url(/wp-content/themes/askantech/assets/images/wp-askan-expertisebg.png) no-repeat bottom left;	background-size:100%;}
#wp-development .wp-developdiv .content-block-contents p {  margin-bottom: 18px;  width: 80%;margin-left:auto;margin-right:auto;}
#wp-development .askan-expertise{display:flex;align-items: center;justify-content: center;}
#wp-development .box-exp{box-shadow:0px 0px 20px #dfdfdd;display:inline-block;padding:60px 20px;background:#fff;margin:15px;border-radius:5px;}
#wp-development .box-exp img{margin-bottom:20px;}
#wp-development .box-exp h3{text-transform:uppercase;font-weight:600;color:#009bfa;text-transform:uppercase;text-align:center;margin-bottom:5px;line-height:26px;}
#wp-development .box-exp p{text-align:center;}
#wp-development .casestudy-left{padding:0 0 70px 0;}
#wp-development .parallax-overlay-casestudy{background-size:100%;}
#wp-development .whywp-askan{padding:60px 0;}
#wp-development .whywp-askan{padding:0;background:url(/wp-content/themes/askantech/assets/images/whyaskan-wpbg.jpg) no-repeat 0px 0px;background-size:100%;margin:80px 0;position:relative;}
#wp-development .yaskan-steps{position:relative;height:100%;padding-bottom:60px;float:left;padding-left:10%;}
#wp-development .yaskan-steps .wsteps{float:left;width:100%;margin-bottom:20px;margin-top:5px;}
#wp-development .yaskan-steps .wsteps span.white-circle{float:left;width:75px;height:75px;background:#fff;text-align:center;border-radius:50%;line-height:60px;box-shadow:0px 0px 10px #dfdfdd;}
#wp-development .yaskan-steps .wsteps span.white-circle img{max-height:40px;position:relative;top:18px;}
#wp-development .yaskan-steps .wsteps p{padding:5px 0px 5px 95px;margin-bottom:0px;width:100%;font-size:14px;}
#wp-development .yaskan-steps .wsteps p span{font-size:18px;color:#009bfa;float:left;width:100%;margin-bottom:0px;font-weight:500;}
.mobile-whywp-askan img{display:none;}
#wp-development .whywordpress-askan{padding:80px 0 0 0;}
#wp-development .whywordpress-askan .content-block-contents p {  margin-bottom: 18px;  width: 80%;margin-left:auto;margin-right:auto;}




.footer-case-study{background:url(/wp-content/themes/askantech/assets/images/case-study-bg.png);background-repeat: no-repeat;background-position: top left;background-size:cover;display:inline-block;width:100%;padding:250px 0 50px 0;position:relative;}
.parallax-overlay-casestudy{position:absolute;top:0px;left:0px;width:100%;height:100%;background:url(/wp-content/themes/askantech/assets/images/case-study-parallax.png);background-repeat: no-repeat;background-position: top center;margin:100px 0;}
.casestudy-left{padding:100px 0;}
.casestudy-left .casestudy-testimonial{width:90%;float:left;}
.casestudy-left .casestudy-testimonial .case-study-title{font-size:15px;color:#000;position:relative;font-weight:600;display:inline-block;width:100%;margin-bottom:25px;}
.casestudy-left .casestudy-testimonial .case-study-title:after{content: "";  display: block;  height: 3px;  width: 70px;  background: rgba(83,224,208,1);  background: -moz-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);
    background: -webkit-gradient(left top, right top, color-stop(0%, rgba(83,224,208,1)), color-stop(100%, rgba(0,154,250,1))); background: -webkit-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);
    background: -o-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%); background: -ms-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);
    background: linear-gradient(to right, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#53e0d0', endColorstr='#009afa', GradientType=1 );
    position: absolute; left: 120px; top:5px;}
.casestudy-left .casestudy-testimonial h3{color:#53e0d0;font-size:36px;margin-bottom:25px;line-height:38px;}
.casestudy-left .casestudy-testimonial p{font-size:18px;line-height:32px;margin-bottom:25px;}
.casestudy-left .casestudy-testimonial p.author{color:#53e0d0;font-size:16px;font-weight:normal;}
.casestudy-left .casestudy-testimonial p.author span{color:#000;font-size:16px;}
.footer-case-study .container{position:relative;}




@media only screen and (max-width:768px) { 


    /**wp development**/
    #wp-development .overlay-section.opacity0 .container .banner-content-right img{top:10px;max-width:95%;}
    #wp-development .banner-section{height:auto;position:relative;padding-top:80px;background-color:#009bfa !important;}
    #wp-development .banner-section .image-section{height:auto;position:relative;}
    #wp-development .overlay-section.opacity0 .container{top: 0%;transform: translateY(0%);display:inline-block;width:100%;}
    #wp-development .banner-section .overlay-section{position:relative;}
    #wp-development .overlay-section.opacity0 .container .banner-content-right{width:100%;text-align:center;}
    #wp-development .overlay-section.opacity0 .container .banner-content{width:100%;box-sizing:border-box;padding:10px;}
    #wp-development .askan-expertise{display:block;}
    #wp-development .box-exp{margin:15px !important;}
    #wp-development .yaskan-steps{padding-left:10px;}
    #wp-development .yaskan-steps .wsteps p{text-align:left;}
    #wp-development .whywp-askan{margin:20px 0;}
    #wp-development .yaskan-steps{padding-bottom:0px;}
    #wp-development .casestudy-left{padding:0 0 20px 0;}
    #wp-development .parallax-overlay-casestudy{margin:100px 0 0 0;display:none;}
    #wp-development .footer-case-study{padding:50px 0 0 0;}

    .mobile-whywp-askan img {
        display: inline-block;
        margin-bottom: 75px;
    }
}


@media only screen and (max-width: 420px) and (min-width: 320px) { 

    .cc-innerpage-banner .banner-section .overlay-section.opacity0 .text-one h3 { font-size: 14px; }
    .cc-innerpage-banner .banner-section .overlay-section.opacity0 .text-two h2 { font-size: 28px;  }

}
</style>
<?php }else if(is_page(1007)){ ?>
<style>
    /* banner section */
.overlay-section.opacity0 .container .banner-content .more-btn .button-wrapper .btn-sty-one { display: inline-flex; cursor: pointer; padding: 15px 10px 15px 38px; background: transparent; box-shadow: none; border:1px solid #fff; text-decoration: none; color: #fff; font-size:16px; border-radius: 45px; transition: all ease-out 0.3s; margin-top:30px; }
.overlay-section.opacity0 .container .banner-content .more-btn .button-wrapper .btn-sty-one .arrow { display: inline-block; background: url(/wp-content/themes/askantech/assets/images/more-btn-arrow-white.png); background-repeat: no-repeat; background-size: 26px; background-position: 0px; margin-left: 10px; width: 48px; min-height: 16px; transition: all ease-out 0.3s; }
.cc-innerpage-banner .overlay-section.opacity0 .container .banner-content { width: 40%; }
.cc-innerpage-banner .overlay-section.opacity0 .container .banner-content-right { width: 60%; text-align: right; }
.overlay-section.opacity0 .container .banner-content-right img { position: relative; top: 100px; }



.footer-case-study{background:url(/wp-content/themes/askantech/assets/images/case-study-bg.png);background-repeat: no-repeat;background-position: top left;background-size:cover;display:inline-block;width:100%;padding:250px 0 50px 0;position:relative;}
.parallax-overlay-casestudy{position:absolute;top:0px;left:0px;width:100%;height:100%;background:url(/wp-content/themes/askantech/assets/images/case-study-parallax.png);background-repeat: no-repeat;background-position: top center;margin:100px 0;}
.casestudy-left{padding:100px 0;}
.casestudy-left .casestudy-testimonial{width:90%;float:left;}
.casestudy-left .casestudy-testimonial .case-study-title{font-size:15px;color:#000;position:relative;font-weight:600;display:inline-block;width:100%;margin-bottom:25px;}
.casestudy-left .casestudy-testimonial .case-study-title:after{content: "";  display: block;  height: 3px;  width: 70px;  background: rgba(83,224,208,1);  background: -moz-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);
    background: -webkit-gradient(left top, right top, color-stop(0%, rgba(83,224,208,1)), color-stop(100%, rgba(0,154,250,1))); background: -webkit-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);
    background: -o-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%); background: -ms-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);
    background: linear-gradient(to right, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#53e0d0', endColorstr='#009afa', GradientType=1 );
    position: absolute; left: 120px; top:5px;}
.casestudy-left .casestudy-testimonial h3{color:#53e0d0;font-size:36px;margin-bottom:25px;line-height:38px;}
.casestudy-left .casestudy-testimonial p{font-size:18px;line-height:32px;margin-bottom:25px;}
.casestudy-left .casestudy-testimonial p.author{color:#53e0d0;font-size:16px;font-weight:normal;}
.casestudy-left .casestudy-testimonial p.author span{color:#000;font-size:16px;}
.footer-case-study .container{position:relative;}
.mobile-app{margin-top:150px;}
.text-center{text-align:center;}
.text-left{text-align:left;}
.content-block .content-block-title.green-title h3{color:#53e0d0;margin-bottom:25px;}
.mobile-app .content-block-contents p {  margin-bottom: 18px;  width: 80%;margin-left:auto;margin-right:auto;}
.space50{display:inline-block;width:100%;height:50px;}
.space100{display:inline-block;width:100%;height:100px;}
.whyus-box{padding-right:30px;padding-left:25px;position:relative;}
.whyus-box:after{content:'';position:absolute;top:0px;right:0px;height:100%;width:1px;border-right:1px solid #ddd;}
.whyus-box:last-child:after{display:none;}
.whyus-box img{margin-bottom:15px;}
.whyus-box h3{color:#009bfa;text-transform:uppercase;line-height:28px;margin-bottom:15px;}
.whyus-box p{font-size:15px;}
.mobile-app{background:url(/wp-content/themes/askantech/assets/images/android-doll-left.png) no-repeat left 10%,url(/wp-content/themes/askantech/assets/images/android-doll-right.png) no-repeat right 75%;background-size:16%;}
.slant-blue{width:100%;padding:0;background:#d8effe;transform:rotate(2deg);margin:150px 0 50px 0;}
.android-whyaskan img{position:relative;top:-50px;}
.slant-blue .container{transform:rotate(-2deg);}
.whylist{padding:50px 20px;display:inline-block;box-sizing:border-box;}
.whylist-title{font-family: 'Bernard MT Condensed';font-size:42px;color:#009bfa;}
.whylist-title span{display:inline-block;font-size:22px;font-family: 'Poppins';}
.whylist-p{font-size:16px;margin:5px 0 25px 0;box-sizing:border-box;padding-left:45px;}
.app-technology{padding:150px 0;background:url(/wp-content/themes/askantech/assets/images/pencil-phone-left.png) no-repeat left 40px,url(/wp-content/themes/askantech/assets/images/glass-right.png) no-repeat right 50%;	background-size:16%;}
.apptech-txt h3{color:#009bfa;font-size:26px;text-align:left;font-weight: 500;padding:20% 0;position:relative;}
.apptech-txt .small-title-line{display:inline-block;position:relative;top:-5px;width:60px;}
.apptech-box{width:33%;box-sizing:border-box;padding:50px 20px;border-radius:5px;color:#fff;display:inline-block;margin:10px;text-align:center;min-height:210px;}
.blue-bg{background:#53e0d0;}
.violet-bg{background:#71105f;position:relative;top:100px;}
.skyblue-bg{background:#009bfa;}
.darkblue-bg{background:#00a3d3;position:relative;top:100px;}
.apptech-box span{display:inline-block;width:100%;margin:5px 0;}


@media only screen and (max-width:768px) { 

    .mobile-app {
        margin-top: 45px;
    }
    .slant-blue {
        margin: 80px 0 0px 0;
    }
    .android-whyaskan img {
        top: 0px;
    }


    /**android development**/
	#android-development .overlay-section.opacity0 .container .banner-content-right img{top:10px;}
	#android-development .banner-section{height:auto;position:relative;padding-top:80px;background-color:#009bfa !important;}
	#android-development .banner-section .image-section{height:auto;position:relative;}
	#android-development .overlay-section.opacity0 .container{top: 0%;transform: translateY(0%);display:inline-block;width:100%;}
	#android-development .banner-section .overlay-section{position:relative;}
	#android-development .overlay-section.opacity0 .container .banner-content-right{width:100%;text-align:center;}
	#android-development .overlay-section.opacity0 .container .banner-content{width:100%;box-sizing:border-box;padding:10px;}
	#android-development .slant-blue{transform: rotate(0deg);}
	#android-development .slant-blue .container{transform: rotate(0deg);}
	#android-development .whylist{padding:15px;}
	#android-development .app-technology{padding:50px 0;}
	#android-development .casestudy-left{padding:0px;}
	#android-development .footer-case-study{padding-top:175px;}
    #android-development .footer-contact{padding:50px 0;}
    #android-development .footer-case-study .cc-col-45 img { width: 80%; margin: 0 auto; display: block; }
    
}

@media only screen and (max-width:767px){
	#app-development .app-type-image img.android-phone{top:0px;}
}

@media only screen and (min-width:320px) and (max-width:420px) { 

    .cc-innerpage-banner .banner-section .overlay-section.opacity0 .text-one h3{ font-size: 14px; }
    #android-development .banner-section .overlay-section.opacity0 .text-two h2 { font-size: 28px; }
    /**android development**/
	#android-development .banner-section .overlay-section.opacity0 .text-two h2{font-size:28px;}
	#android-development .whylist-title{font-size:30px;}
	#android-development .whylist-title span{font-size:18px;}
	#android-development .whylist-p{padding-left:40px;font-size:14px;}
	#android-development .apptech-txt h3{text-align:center;padding:10% 0;}
	#android-development .apptech-box{width:46%;margin:1.5%;}
}
</style>
<?php } ?>
<?php if(is_page(916)){ ?>
<style>
/* html { scroll-behavior: smooth; } */
.cc-services-wrapper { padding: 45px 0px; max-width: 1180px; margin: 0 auto; }
.cc-services-box-wrapper { width: 20%; background-color: #20304f; color: #fff; text-align: center; margin: 10px; box-shadow: 0px 5px 7px #c0c0c0; }
.cc-services-box-wrapper .cc-more-info a:hover { cursor: pointer; }
.cc-services-container .container { width: 100%; }
.cc-services-container .cc-more-info a { 
    padding: 8px 25px; font-size: 16px; background: transparent; border: 4px double #fff; color: #fff; margin-top: 8px;
    display: inline-block; text-decoration: none;
 }
.cc-sbw  { position: relative;  }
.cc-service-name { margin-top: 10px; line-height: 21px; min-height: 42px; font-size: 14px; }
.cc-services-box { position: relative; z-index: 10; -webkit-transition: -webkit-transform 0.4s; -moz-transition: -moz-transform 0.4s; transition: transform 0.4s; padding: 30px 20px; background: #20304f; }
.cc-ef .cc-services-box { -webkit-transform: translateY(-68px); -moz-transform: translateY(-68px); -ms-transform: translateY(-68px); transform: translateY(-68px); }
.cc-more-info { min-height: 68px; width: 100%; top: auto; bottom: -100px; -webkit-transition: -webkit-transform 0.4s; -moz-transition: -moz-transform 0.4s; transition: transform 0.4s; max-width: 100%; position: absolute; visibility: hidden; opacity: 0; bottom: 0; }
.cc-ef .cc-more-info { opacity: 1; visibility: visible; z-index: 999; -webkit-transform: translateY(0); -moz-transform: translateY(0); -ms-transform: translateY(0); transform: translateY(0); }
.cc-ef .cc-services-box { background: #009bfa; }
.cc-ind-section .cc-indsec-bg { position: relative; opacity: 0; }
.cc-ind-section .cc-cl-btn { position: absolute; bottom: 0px; }
.cc-ind-section .content-block-contents p { width: 100%; }
/* .cc-indsec-bg { background: url(/wp-content/themes/askantech/assets/images/android-doll-left.png) no-repeat left 10%,url(/wp-content/themes/askantech/assets/images/android-doll-right.png) no-repeat right 92%; background-size: 43%; }  */
.cc-ind-section { padding: 45px 0px; }

.cc-indsec-seprator { height: 12px; }

.cc-service-icon img {
    max-width: 45px;
}

/* banner section */
.cc-innerpage-banner .banner-section .image-section { max-height: 700px; }
.cc-innerpage-banner .overlay-section .container { height: auto; }
.cc-innerpage-banner .banner-section { max-height: 700px; }

.cc-dbbg {  padding: 40px; color: #fff; background: #009bfa; }
.cc-ind-section h3 { color: #fff  !important; margin-bottom: 20px; font-size:24px !important; }
.cc-ind-section .grey-col { color: #20304f; }

.cc-sm-dbbg-row { justify-content: space-between; }
.sm-cc-dbbg { width: 49%; -ms-flex-preferred-size: 49%; flex-basis: 49%; }
.cc-cms-develop , .cc-cms-develops , .cc-yii-develops { background: #f6fafd; padding: 45px 0px; }
.cc-web-appications-develop  , .cc-megento-develop{ padding: 45px 0px; }

.cc-cwad-boxwrapper{ display: flex; flex-wrap: wrap; justify-content: center; } 
.cc-cwad-boxwrapper .cc-cwad-box{ width: 38%; text-align: center; padding: 45px 30px; background-color: #009bfa; margin: 5px; display: flex; flex-direction: column; justify-content: center; align-items: center; border-radius: 5px; box-shadow: -1px 3px 3px #bebebe; }
.cc-cwad-box span { margin-top: 25px; color: #fff; }
.cc-cwad-content { display: flex; justify-content: center; align-items: center; }

.cc-megento-imgwrap { display: flex; justify-content: center; align-items: center; }
.cc-megento-imgwrap img { width: 80%;; }

#cc-services .cc-image-wrapper { display: flex; justify-content: center; align-items: center; justify-content: center; height: 100%; }

@media only screen and (min-width:320px) and (max-width:767px) {
    .cc-services-container .cc-row { justify-content: space-around; }
    .cc-services-box-wrapper { width: 48%; margin:10px 0; }
}

@media only screen and (max-width:940px) {
    .cc-ind-section .cc-indsec-bg{ padding: 26%; margin-bottom: 20px; }
    .cc-and-app .cc-row{ flex-wrap: wrap;  }
    .cc-and-app >  .container > .cc-row > .cc-col-50{ width: 100%; -ms-flex-preferred-size: 100%; flex-basis: 100%; }
    .cc-ind-section .cc-cl-btn { left: 50%; transform: translateX(-50%); }
    .cc-cms-develops.cc-ecom-develop { padding-bottom: 0px; }
}

@media only screen and (min-width:768px) and (max-width:1023px) {
    .cc-services-container .cc-row { flex-wrap: wrap; justify-content: center; }
}

@media only screen and (max-width:567px) {
    .cc-row.cc-sm-dbbg-row { flex-wrap: wrap; }
    .cc-row.cc-sm-dbbg-row .cc-col-50{ width: 100%; -ms-flex-preferred-size: 100%; flex-basis: 100%; margin-bottom: 13px; }
    .cc-cwad-boxwrapper .cc-cwad-box { width: 46%; }
}

.cc-cms-develop .image-one  ,
.cc-ecom-develop .cc-image-wrapper ,
.cc-yii-develops .cc-image-wrapper ,
.cc-megento-develop .cc-megento-imgwrap
{ opacity: 0; }


.cc-andparalax { height: 100%; width: 100%; position: relative; }
.parallax-background { height: 100%; width: 100%; }
.parallax-background .parallax-inner {
    background: url(https://www.askantech.com/wp-content/themes/askantech/assets/images/android-doll-left.png) no-repeat left 10%,
    url(https://www.askantech.com/wp-content/themes/askantech/assets/images/android-doll-right.png) no-repeat right 92%;
    background-size: 43%; height: 100% !important; width: 100% !important; top: 0px !important; left: 0px !important;
}
</style>
<?php }else  if(is_page(1521)){ ?>
<style>
.overlay-section.opacity0 .container .banner-content .more-btn .button-wrapper .btn-sty-one { display: inline-flex; cursor: pointer; padding: 15px 10px 15px 38px; background: transparent; box-shadow: none; border:1px solid #fff; text-decoration: none; color: #fff; font-size:16px; border-radius: 45px; transition: all ease-out 0.3s; margin-top:30px; }
.overlay-section.opacity0 .container .banner-content .more-btn .button-wrapper .btn-sty-one .arrow { display: inline-block; background: url(/wp-content/themes/askantech/assets/images/more-btn-arrow-white.png); background-repeat: no-repeat; background-size: 26px; background-position: 0px; margin-left: 10px; width: 48px; min-height: 16px; transition: all ease-out 0.3s; }

.text-center{text-align:center;}
.text-left{text-align:left;}


.content-block .content-block-title.green-title h3{color:#53e0d0;margin-bottom:25px;}

.tick-list{list-style:none;float:left;width:100%;margin:35px 0 15px 0;padding:0 0 0 20px;}
.tick-list li{float:left;width:100%;position:relative;margin-bottom:25px;list-style:none;}
.tick-list li:before{content: "\f00c";font-family: FontAwesome;display: inline-block;margin-left: -1.3em;width: 1.3em;padding-right:20px;color:#009bfa;}

/*web application*/
#web-application .overlay-section.opacity0 .container .banner-content, #web-application .overlay-section.opacity0 .container .banner-content-right{width:50%;}
#web-application .banner-section .overlay-section.opacity0 .text-two h2{font-size:40px;}
#web-application .overlay-section.opacity0 .container {transform: translateY(-20%);}
#web-application .overlay-section.opacity0 .container .banner-content-right{text-align:center;}
#web-application .overlay-section.opacity0 .container .banner-content-right img{top:0px;max-width:420px;}
#web-application .webapp-developdiv .content-block-contents p {  margin-bottom: 18px;  width: 80%;margin-left:auto;margin-right:auto;}
#web-application .webapp-developdiv{margin-top:80px;}
#web-application .askan-adv{padding:80px 0;}
#web-application .askan-adv .image-one{text-align:center;}
#web-application .askan-adv .image-one img{padding:40px;}
#web-application .tick-list{margin-top:0px;}
#web-application .tick-list li{float:left;width:100%;position:relative;margin-bottom:20px;list-style:none;}
#web-application .webapp-framework{background:url(/wp-content/themes/askantech/assets/images/webapp-framebg.png) no-repeat 140% 5%;}
#web-application .bluebold{font-family: 'Poppins';font-weight:500;color:#009bfa;font-size:20px;}
#web-application .webapp-workflow{padding:80px 0;}
#web-application .webapp-steps{position:relative;height:100%;}
#web-application .webapp-steps .step-dash{width:1px;height:80%;position:absolute;top:5%;border-right:1px dashed #009bfa;left:50px;}
#web-application .webapp-steps .wsteps{float:left;width:100%;margin-bottom:30px;margin-top:15px;}
#web-application .webapp-steps .wsteps span.blue-circle{float:left;width:100px;height:100px;background:#019bfa;text-align:center;border-radius:50%;line-height:100px;}
#web-application .webapp-steps .wsteps span.blue-circle img{max-height:48px;position:relative;top:20px;}
#web-application .webapp-steps .wsteps p{padding:5px 0px 5px 125px;}
#web-application .webapp-steps .wsteps p span.title{font-size:18px;color:#000;float:left;width:100%;margin-bottom:5px;font-weight:600;}
#web-application .workflow-image img{max-height:500px;width:auto;}
#web-application  .webapp-workflow .pad5{padding-left:5%;}
#web-application .footer-case-study{padding:150px 0;}
#web-application .apptech-txt{position:relative;}
#web-application .webapp-casestudy{position:absolute;top:50%;transform:translateY(-50%);width:90%;}
#web-application .apptech-txt h3{padding:15px 0;}


.app-technology{padding:150px 0;background:url(/wp-content/themes/askantech/assets/images/pencil-phone-left.png) no-repeat left 40px,url(/wp-content/themes/askantech/assets/images/glass-right.png) no-repeat right 50%;	background-size:16%;}
.apptech-txt h3{color:#009bfa;font-size:26px;text-align:left;font-weight: 500;padding:20% 0;position:relative;}
.apptech-txt .small-title-line{display:inline-block;position:relative;top:-5px;width:60px;}
.apptech-box{width:33%;box-sizing:border-box;padding:50px 20px;border-radius:5px;color:#fff;display:inline-block;margin:10px;text-align:center;min-height:210px;}
.blue-bg{background:#53e0d0;}
.violet-bg{background:#71105f;position:relative;top:100px;}
.skyblue-bg{background:#009bfa;}
.darkblue-bg{background:#00a3d3;position:relative;top:100px;}
.apptech-box span{display:inline-block;width:100%;margin:5px 0;}

.footer-case-study{background:url(/wp-content/themes/askantech/assets/images/case-study-bg.png);background-repeat: no-repeat;background-position: top left;background-size:cover;display:inline-block;width:100%;padding:250px 0 50px 0;position:relative;}
.parallax-overlay-casestudy{position:absolute;top:0px;left:0px;width:100%;height:100%;background:url(/wp-content/themes/askantech/assets/images/case-study-parallax.png);background-repeat: no-repeat;background-position: top center;margin:100px 0;}
.casestudy-left{padding:100px 0;}
.casestudy-left .casestudy-testimonial{width:90%;float:left;}
.casestudy-left .casestudy-testimonial .case-study-title{font-size:15px;color:#000;position:relative;font-weight:600;display:inline-block;width:100%;margin-bottom:25px;}
.casestudy-left .casestudy-testimonial .case-study-title:after{content: "";  display: block;  height: 3px;  width: 70px;  background: rgba(83,224,208,1);  background: -moz-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);
    background: -webkit-gradient(left top, right top, color-stop(0%, rgba(83,224,208,1)), color-stop(100%, rgba(0,154,250,1))); background: -webkit-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);
    background: -o-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%); background: -ms-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);
    background: linear-gradient(to right, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#53e0d0', endColorstr='#009afa', GradientType=1 );
    position: absolute; left: 120px; top:5px;}
.casestudy-left .casestudy-testimonial h3{color:#53e0d0;font-size:36px;margin-bottom:25px;line-height:38px;}
.casestudy-left .casestudy-testimonial p{font-size:18px;line-height:32px;margin-bottom:25px;}
.casestudy-left .casestudy-testimonial p.author{color:#53e0d0;font-size:16px;font-weight:normal;}
.casestudy-left .casestudy-testimonial p.author span{color:#000;font-size:16px;}
.footer-case-study .container{position:relative;}


@media only screen and (max-width:768px) { 

    .overlay-section.opacity0 .container .banner-content .more-btn .button-wrapper .btn-sty-one { padding: 15px 10px 15px 25px; }

    /**web-application**/
    #web-application .overlay-section.opacity0 .container .banner-content-right img{top:10px;}
    #web-application .banner-section{height:auto;position:relative;padding-top:80px;background-color:#009bfa !important;}
    #web-application .banner-section .image-section{height:auto;position:relative;}
    #web-application .overlay-section.opacity0 .container{top: 0%;transform: translateY(0%);display:inline-block;width:100%;}
    #web-application .banner-section .overlay-section{position:relative;}
    #web-application .overlay-section.opacity0 .container .banner-content-right{width:100%;text-align:center;}
    #web-application .overlay-section.opacity0 .container .banner-content-right img{max-width:100%;}
    #web-application .overlay-section.opacity0 .container .banner-content{width:100%;box-sizing:border-box;padding:10px;}
    #web-application .webapp-framework{background:#f2f2f2;padding-top:40px;}
    #web-application .askan-adv{padding:10px 0;}
    #web-application .webapp-casestudy{position:relative;top:0px;transform: translateY(0%);width:100%;}
    #web-application .violet-bg , #web-application .darkblue-bg{top:0px;}
    #web-application .webapp-workflow{padding:80px 0 0 0;}
    #web-application .footer-case-study{padding:100px 0 0 0;}

    #web-application .webapp-workflow { padding: 45px 0px; }
    #web-application .webapp-developdiv { margin-top: 45px; }
    .apptech-box {width: 45%; margin: 12px 6px;}
    .tick-list li:before { padding-right: 0px; }
    #web-application .webapp-developdiv .content-block-contents p { width: 98%; }
}


@media only screen and (max-width: 420px) and (min-width: 320px) { 
    .cc-innerpage-banner .banner-section .overlay-section.opacity0 .text-one h3 { font-size :14px; }
    #web-application .banner-section .overlay-section.opacity0 .text-two h2 { font-size: 24px; }

    .tick-list li {
        padding-left: 30px;
    }
}
</style>
<?php }else if(is_page(1454)){ ?>
<style>
.overlay-section.opacity0 .container .banner-content .more-btn .button-wrapper .btn-sty-one { display: inline-flex; cursor: pointer; padding: 15px 10px 15px 38px; background: transparent; box-shadow: none; border:1px solid #fff; text-decoration: none; color: #fff; font-size:16px; border-radius: 45px; transition: all ease-out 0.3s; margin-top:30px; }
.overlay-section.opacity0 .container .banner-content .more-btn .button-wrapper .btn-sty-one .arrow { display: inline-block; background: url(/wp-content/themes/askantech/assets/images/more-btn-arrow-white.png); background-repeat: no-repeat; background-size: 26px; background-position: 0px; margin-left: 10px; width: 48px; min-height: 16px; transition: all ease-out 0.3s; }

.cc-innerpage-banner .overlay-section.opacity0 .container .banner-content { width: 40%; }
.cc-innerpage-banner .overlay-section.opacity0 .container .banner-content-right { width: 60%; text-align: right; }



.text-center{text-align:center;}
.text-left{text-align:left;}



/* megento style start */
#megento .megento-expertise {background: url(/wp-content/themes/askantech/assets/images/megento-expertise.png);background-repeat: no-repeat;background-size: contain;}
#megento .overlay-section.opacity0 .container .banner-content-right img {top: -40px;;width: 95%;}
#megento .content-block .content-block-title h3 {color: #53e0d0}
#megento .cc-why-megento {background-image: url('/wp-content/themes/askantech/assets/images/why-megento-banner.png') ;
    background-size: contain;background-repeat: no-repeat;background-position: center center;
    background-attachment: fixed;
}
.cc-why-megento {padding: 90px 0px;}
#megento .content-block-contents p {width: 95%;}
#megento .cc-why-megento .cc-row {align-items: center;}
#megento .megento-expertise {padding: 90px 0px;background-color: #f4f8fb;}
#megento .megento-expertise .block-titles {max-width: 960px ;}
.cc-block-content.megento-title-blocks {max-width: 1060px;margin: 0px auto;}
.megento-title-blocks h3 { font-size: 20px; font-family: "Poppins"; color: rgb(255, 255, 255);line-height: 1.3;text-align: center;font-weight: normal;margin-top: 17px;}
.white-box.box h3 {color: #009bfa;}
#megento .megento-icons {height: 70px; width: 70px;margin:0px auto;background-repeat: no-repeat;background-size: contain;background-position: center center;}
#megento .megento-title-blocks .two-iconbox {display: flex;min-width: 500px;}
#megento .megento-title-blocks .two-iconbox .box {max-width: 250px;min-width: 250px;padding: 80px 0px;}
.megento-title-blocks .cc-col-53 .white-box.box {padding: 80px 0px;}
.megento-title-blocks .white-box {background: #fff;}
.white-box.box.mv h3 {color:#fff;}
.megento-title-blocks .blue-box {
    background: rgba(83,224,208,1);
    background: -moz-linear-gradient(right, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);
    background: -webkit-gradient(right top, left top, color-stop(0%, rgba(83,224,208,1)), color-stop(100%, rgba(0,154,250,1)));
    background: -webkit-linear-gradient(right, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);
    background: -o-linear-gradient(right, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);
    background: -ms-linear-gradient(right, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);
    background: linear-gradient(to left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#53e0d0', endColorstr='#009afa', GradientType=1 );
}
#megento .megento-icons.td {background-image: url('/wp-content/themes/askantech/assets/images/seoimage/megento-them-design.png')} 
#megento .megento-icons.cs {background-image: url('/wp-content/themes/askantech/assets/images/seoimage/m-customize-service.png')} 
#megento .megento-icons.mvg {background-image: url('/wp-content/themes/askantech/assets/images/seoimage/m-version-migration.png');background-size:cover;background-repeat: no-repeat;background-position: center;} 
#megento .white-box.box.mv {background-image: url('/wp-content/themes/askantech/assets/images/megento-version-migration.jpg')}

#megento .cc-megento-why-askan {background-image: url(/wp-content/themes/askantech/assets/images/phone-earphone-bg.png);background-repeat: no-repeat;background-size: contain;background-position: center;}
#megento .whylist-title {color: #e5e4e4;font-size: 50px;}
#megento .whylist-title span {color: #009bfa}
#megento .whylist-p {padding-left: 60px;}
#megento .cc-megento-why-askan .cc-row {align-items: center;}
#megento .cc-megento-why-askan .cc-col-50.cc-img{text-align: center;}
#megento .cc-megento-why-askan .cc-col-50.cc-img img {width: 80%}



.whylist{padding:50px 20px;display:inline-block;box-sizing:border-box;}
.whylist-title{font-family: 'Bernard MT Condensed';font-size:42px;color:#009bfa;}
.whylist-title span{display:inline-block;font-size:22px;font-family: 'Poppins';}
.whylist-p{font-size:16px;margin:5px 0 25px 0;box-sizing:border-box;padding-left:45px;}

.footer-case-study{background:url(/wp-content/themes/askantech/assets/images/case-study-bg.png);background-repeat: no-repeat;background-position: top left;background-size:cover;display:inline-block;width:100%;padding:250px 0 50px 0;position:relative;}
.parallax-overlay-casestudy{position:absolute;top:0px;left:0px;width:100%;height:100%;background:url(/wp-content/themes/askantech/assets/images/case-study-parallax.png);background-repeat: no-repeat;background-position: top center;margin:100px 0;}
.casestudy-left{padding:100px 0;}
.casestudy-left .casestudy-testimonial{width:90%;float:left;}
.casestudy-left .casestudy-testimonial .case-study-title{font-size:15px;color:#000;position:relative;font-weight:600;display:inline-block;width:100%;margin-bottom:25px;}
.casestudy-left .casestudy-testimonial .case-study-title:after{content: "";  display: block;  height: 3px;  width: 70px;  background: rgba(83,224,208,1);  background: -moz-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);
    background: -webkit-gradient(left top, right top, color-stop(0%, rgba(83,224,208,1)), color-stop(100%, rgba(0,154,250,1))); background: -webkit-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);
    background: -o-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%); background: -ms-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);
    background: linear-gradient(to right, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#53e0d0', endColorstr='#009afa', GradientType=1 );
    position: absolute; left: 120px; top:5px;}
.casestudy-left .casestudy-testimonial h3{color:#53e0d0;font-size:36px;margin-bottom:25px;line-height:38px;}
.casestudy-left .casestudy-testimonial p{font-size:18px;line-height:32px;margin-bottom:25px;}
.casestudy-left .casestudy-testimonial p.author{color:#53e0d0;font-size:16px;font-weight:normal;}
.casestudy-left .casestudy-testimonial p.author span{color:#000;font-size:16px;}
.footer-case-study .container{position:relative;}


/* megento style end */


@media only screen and (max-width:768px) {

    #megento .cc-row { padding: 0px 10px; }


    .cc-innerpage-banner .overlay-section.opacity0 .container .banner-content ,
    .cc-innerpage-banner .overlay-section.opacity0 .container .banner-content-right { width: 100%; }

    .overlay-section.opacity0 .container .banner-content .more-btn .button-wrapper .btn-sty-one { padding: 15px 10px 15px 25px; }

    /**magento**/	
	 #megento .cc-row {padding: 0px 10px;}
     #megento .banner-section .overlay-section .cc-row {flex-wrap:wrap;}
     #megento .banner-section .overlay-section .cc-row .banner-content , #megento .banner-section .overlay-section .cc-row .banner-content-right {width: 100%;}
     #megento .banner-section {height: auto;position: relative;padding-top: 90px;}
     /* #case-study .banner-section .image-section {height: auto;position: relative} */
     #megento .banner-section .overlay-section {position:relative;}
     #megento .overlay-section.opacity0 .container {top: 0%;transform: translateY(0%);display: inline-block;width: 100%;}
     #megento .overlay-section.opacity0 .container .banner-content {box-sizing: border-box;padding: 10px;}
     #megento .banner-content-right {margin-bottom: 20px;}
     #megento .cc-why-megento {padding: 30px 0px;}
     #megento .cc-why-megento .cc-col-50.cc-img-wrap {text-align: center;}
     #megento .megento-title-blocks .two-iconbox {width: 100%;min-width: 100%;margin-bottom: 0;}
     #megento .megento-title-blocks .two-iconbox .box , #megento .megento-title-blocks .two-iconbox .box {width: 50%;min-width: 50%;max-width: 50%;}
     #megento .cc-block-content.megento-title-blocks .cc-col-53 {margin-bottom: 0;}
     #megento .cc-block-content.megento-title-blocks .cc-row {margin-bottom: 30px;}
 
     #megento .megento-expertise {padding: 45px 0px 25px 0px;}
     #megento .cc-megento-why-askan .cc-mws-wrapper {padding: 45px 0px 0px 0px;}
     #megento .cc-megento-why-askan .cc-col-50.cc-img img {width: 70%;}
     #megento .whylist {padding: 10px 0px;}
     #megento .whylist-p {padding-left: 10px;}
     #megento .whylist-title {font-size:40px;}
     #megento .whylist-title span {font-size: 18px;}
 
     #megento .cc-web-security {margin-bottom: 0;}
     #megento .footer-case-study {padding-top: 175px;}
     #megento .parallax-overlay-casestudy {margin: 0;}
     #megento .footer-contact {padding: 50px 0;}
     #megento .cc-col-55.casestudy-left {padding: 0;}
     .parallax-overlay-casestudy .cc-col-45 {text-align: center;}
 
     #megento .cc-megento-why-askan .cc-mws-wrapper .cc-col-50:last-child {margin-bottom: 0px;}
     .footer-case-study .cc-col-45 { text-align: center; }    

}

@media only screen and (max-width: 420px) and (min-width: 320px) {
    .cc-innerpage-banner .banner-section .overlay-section.opacity0 .text-one h3 { font-size: 14px; }
    .cc-innerpage-banner .banner-section .overlay-section.opacity0 .text-two h2 { font-size: 28px; }
}
</style>
<?php }else if(is_page(1667) || is_page(1989) || is_page(1992) || is_page(1989) ){ ?>
<style>
    .overlay-section.opacity0 .container .banner-content .more-btn .button-wrapper .btn-sty-one { display: inline-flex; cursor: pointer; padding: 15px 10px 15px 38px; background: transparent; box-shadow: none; border:1px solid #fff; text-decoration: none; color: #fff; font-size:16px; border-radius: 45px; transition: all ease-out 0.3s; margin-top:30px; }
.overlay-section.opacity0 .container .banner-content .more-btn .button-wrapper .btn-sty-one .arrow { display: inline-block; background: url(/wp-content/themes/askantech/assets/images/more-btn-arrow-white.png); background-repeat: no-repeat; background-size: 26px; background-position: 0px; margin-left: 10px; width: 48px; min-height: 16px; transition: all ease-out 0.3s; }
.text-center{text-align:center;}
.text-left{text-align:left;}
.content-block .content-block-title.green-title h3{color:#53e0d0;margin-bottom:25px;}

.space50 { display: inline-block; width: 100%; height: 50px; }

.tick-list{list-style:none;float:left;width:100%;margin:35px 0 15px 0;padding:0 0 0 20px;}
.tick-list li{float:left;width:100%;position:relative;margin-bottom:25px;list-style:none;}
.tick-list li:before{content: "\f00c";font-family: FontAwesome;display: inline-block;margin-left: -1.3em;width: 1.3em;padding-right:20px;color:#009bfa;}


/**yiiframework**/
#yii-development .overlay-section.opacity0{position:relative;}
#yii-development .overlay-section.opacity0 .container .banner-content, #yii-development .overlay-section.opacity0 .container .banner-content-right{width:50%;}
#yii-development .overlay-section.opacity0 .container {transform: translateY(-20%);}
#yii-development .overlay-section.opacity0 .container .banner-content-right{text-align:center;}
#yii-development .overlay-section.opacity0 .container .banner-content-right img{top:0px;max-width:420px;}
#yii-development .yii-developdiv .content-block-contents p {  margin-bottom: 18px;  width: 80%;margin-left:auto;margin-right:auto;}
#yii-development .yii-developdiv{margin-top:0px;}
#yii-development .whyyii-adv{background:url(/wp-content/themes/askantech/assets/images/yii-whyyiibg.png) no-repeat 0px 0px;background-size:30%;position:relative;}
#yii-development .whyyii-adv .tick-list{padding:40px 0 100px 0;}
#yii-development .whyyii-adv .whyyii-image{margin-top:30%;}
#yii-development .whyyii-adv .whyyii-image img{margin-left:-15%;}
#yii-development .whyyii-adv .whyyii-adv-right{position:relative;float:left;}
h3.shadowtext{font-size:70px;color:#ededed;letter-spacing:-1px;}
#yii-development .whyyii-adv h3.shadowtext{position:absolute;bottom:20px;right:15px;text-align:right;font-weight:900;}
.mobile-whyyii-askan{display:none;}
#yii-development .whyyii-askan{padding:0;background:url(/wp-content/themes/askantech/assets/images/yii-askan-bg.jpg) no-repeat 0px 0px;background-size:100%;margin:80px 0;position:relative;}
#yii-development .yaskan-steps{position:relative;height:100%;padding-bottom:60px;float:left;}
#yii-development .yaskan-steps .wsteps{float:left;width:100%;margin-bottom:10px;margin-top:5px;}
#yii-development .yaskan-steps .wsteps span.blue-circle{float:left;width:60px;height:60px;background:#019bfa;text-align:center;border-radius:50%;line-height:60px;}
#yii-development .yaskan-steps .wsteps span.blue-circle img{max-height:40px;position:relative;top:10px;}
#yii-development .yaskan-steps .wsteps p{padding:10px 0px 5px 95px;margin-bottom:0px;}
#yii-development .yaskan-steps .wsteps p span.title{font-size:18px;color:#000;float:left;width:100%;margin-bottom:5px;font-weight:600;}
#yii-development .whyyii-askan h3.shadowtext{position:absolute;bottom:0px;left:15px;text-align:right;font-weight:900;}
#yii-development .ouryii{padding:30px 0 60px 0;}
#yii-development .ouryii .content-block-contents p {  margin-bottom: 18px;  width: 80%;margin-left:auto;margin-right:auto;}
#yii-development .ouryii .box{box-shadow:0px 0px 3px #dfdfdd;border-radius:3px;padding:15px;float:left;margin:15px; width: calc(100% - 30px); height: calc(100% - 30px); }
#yii-development .ouryii .box:hover{background: #f0fcff;}
#yii-development .ouryii .box p{padding-left:30px;float:left;width:75%;}
#yii-development .ouryii .box img{max-height:48px;float:left;}


.yii-developdiv .green-title { opacity: 0; }

.footer-case-study{background:url(/wp-content/themes/askantech/assets/images/case-study-bg.png);background-repeat: no-repeat;background-position: top left;background-size:cover;display:inline-block;width:100%;padding:160px 0 50px 0;position:relative;}
.parallax-overlay-casestudy{position:absolute;top:0px;left:0px;width:100%;height:100%;background:url(/wp-content/themes/askantech/assets/images/case-study-parallax.png);background-repeat: no-repeat;background-position: top center;margin:10px 0;}
.casestudy-left{padding:100px 0;}
.casestudy-left .casestudy-testimonial{width:90%;float:left;}
.casestudy-left .casestudy-testimonial .case-study-title{font-size:15px;color:#000;position:relative;font-weight:600;display:inline-block;width:100%;margin-bottom:25px;}
.casestudy-left .casestudy-testimonial .case-study-title:after{content: "";  display: block;  height: 3px;  width: 70px;  background: rgba(83,224,208,1);  background: -moz-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);
    background: -webkit-gradient(left top, right top, color-stop(0%, rgba(83,224,208,1)), color-stop(100%, rgba(0,154,250,1))); background: -webkit-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);
    background: -o-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%); background: -ms-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);
    background: linear-gradient(to right, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#53e0d0', endColorstr='#009afa', GradientType=1 );
    position: absolute; left: 120px; top:5px;}
.casestudy-left .casestudy-testimonial h3{color:#53e0d0;font-size:36px;margin-bottom:25px;line-height:38px;}
.casestudy-left .casestudy-testimonial p{font-size:18px;line-height:32px;margin-bottom:25px;}
.casestudy-left .casestudy-testimonial p.author{color:#53e0d0;font-size:16px;font-weight:normal;}
.casestudy-left .casestudy-testimonial p.author span{color:#000;font-size:16px;}
.footer-case-study .container{position:relative;}



.block-titles { margin-bottom: 20px; }
.cc-inner-form-section { padding: 0 15px; }
.cc-inner-form-section button.animated-button.thar-three:hover:before { z-index: 1; }
.cc-inner-form-section button.animated-button.thar-three:hover span { z-index: 2; }

/* form section style start  */
.cc-inner-form-section { max-width: 920px; margin: 0px auto; margin-top: 30px; }
.form-wrapper form { display: -webkit-box; display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap; justify-content: space-between; }
.form-wrapper .wrapp-field { width: 48%; } 
.form-wrapper .full-wrap { width: 100%; }
.form-wrapper .wrapp-field input[type="text"], .form-wrapper .wrapp-field input[type="email"],
.form-wrapper .wrapp-field input[type="file"],
.form-wrapper .wrapp-field textarea {
    width: 100%; padding: 33px 0px 10px 0px; border-bottom: 2px solid #e2e2e2; font-size: 18px; text-transform: capitalize; outline: none; font-family: "poppins"; -webkit-transition: all ease-out 0.3s; transition: all ease-out 0.3s;
    background-color: transparent;
}
.form-wrapper .wrapp-field textarea { width: 100%; padding-bottom: 40px; resize: none; }
.filelabel { position: relative; display: block; width: 100%; padding: 33px 0px 10px 0px; border-bottom: 2px solid #e2e2e2; font-size: 18px; text-transform: capitalize; outline: none; font-family: "poppins"; color: grey; }
.filelabel .filetype { position: absolute; z-index: 232; padding: 0; height: 100%; width: 100%; left: 0; opacity: 0; top: 0; }
.wrap-submit-btn { width: 100%; text-align: right; margin-top: 45px; } 
.wrap-submit-btn.more-btn button { font-size: 16px; }

@media only screen and (max-width:567px) {
    .form-wrapper .wrapp-field {
        width:100%;
    }
    .form-wrapper .wrapp-field input[type="text"], .form-wrapper .wrapp-field input[type="email"], .form-wrapper .wrapp-field input[type="file"], .form-wrapper .wrapp-field textarea {
        width: 100%;
    }

    .cc-inner-form-section {
        padding: 0 20px;
    }
}

@media only screen and (max-width:768px) {
    html body .block-titles { margin-bottom: 0px; }
    .footer-case-study { padding-bottom: 0px; }
}


/* form section style end  */

@media only screen and (max-width:768px) {
	/**yii development**/
	#yii-development .overlay-section.opacity0 .container .banner-content-right img{top:10px;max-width:95%;}
	#yii-development .banner-section{height:auto;position:relative;padding-top:80px;background-color:#009bfa !important;}
	#yii-development .banner-section .image-section{height:auto;position:relative;}
	#yii-development .overlay-section.opacity0 .container{top: 0%;transform: translateY(0%);display:inline-block;width:100%;}
	#yii-development .banner-section .overlay-section{position:relative;}
	#yii-development .overlay-section.opacity0 .container .banner-content-right{width:100%;text-align:center;}
	#yii-development .overlay-section.opacity0 .container .banner-content{width:100%;box-sizing:border-box;padding:10px;}
	#yii-development .whyyii-adv .whyyii-image img{margin:0px;}
	#yii-development .whyyii-adv .whyyii-image{margin-top:0px;padding-top:30px;background:#54e0cc;}
	#yii-development .whyyii-adv{background:none;}
	#yii-development .whyyii-adv .tick-list{padding:0px;}
	#yii-development .whyyii-adv h3.shadowtext, #yii-development .whyyii-askan h3.shadowtext{position:relative;font-size:36px;left:0px;}
	#yii-development .whyyii-askan{background:none;}
	#yii-development .yaskan-steps .wsteps p{text-align:left;}
	#yii-development .yaskan-steps{padding-bottom:0px;}
    #yii-development .yii-serv{display:block;}
    
    #yii-development .yii-developdiv .content-block-contents p { width: 95%; }
    .tick-list li:before { padding-right: 0px; }
    .mobile-whyyii-askan { display: block; }
    #yii-development .whyyii-askan { margin: 45px 0px; }
    #yii-development .ouryii { padding-bottom: 0px;  }

    .footer-case-study { padding-top: 50px; }
    .casestudy-left { padding-bottom: 20px; }
    .footer-contact { padding-top: 0px; }
}


@media only screen and (max-width: 420px) and (min-width: 320px) { 

    .cc-innerpage-banner .banner-section .overlay-section.opacity0 .text-one h3 { font-size: 14px; }
    .cc-innerpage-banner .banner-section .overlay-section.opacity0 .text-two h2 { font-size: 28px; }

    .tick-list li { padding-left: 30px; }
    
}
</style>
<?php } ?>
<style>
/* burger menu in all screen */
@media only screen and (max-width: 2560px){
.navbar .menulist {
    position: fixed;
    height: 100%;
    width: 100%;
    background: rgba(0, 0, 0, 0.9);
    top: 0;
    overflow: auto;
    right: -100%;
    -webkit-transition: all ease-out 0.3s;
    transition: all ease-out 0.3s;
}
.menulist {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
}
.navbar .menulist.menu-from-right {
    right: 0%;
}
#menu-toggle {
    display: block !important;
}
.navbar ul li {
    display: block !important;
    padding: 15px;
    margin: 10px 18px;
}
.get-quote-button {
    max-width: 200px;
}
.close-menu img {
    width: 30px;
    padding: 20px 5px;
    margin-right: 10px;
}
.menulist .close-menu {
    display: block !important;
    order: -1;
    text-align: right;
}
}
/* burger menu in all screen */

* {border: 0px;margin: 0px;padding: 0px;-webkit-box-sizing: border-box;box-sizing: border-box;outline: none;}@font-face {font-display:block;font-family: 'Metropolis Semi';src: url("/wp-content/themes/askantech/assets/fonts/Metropolis-SemiBold.eot");src: local("Metropolis Semi Bold"), local("Metropolis-SemiBold"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-SemiBold.eot?#iefix") format("embedded-opentype"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-SemiBold.woff2") format("woff2"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-SemiBold.woff") format("woff"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-SemiBold.ttf") format("truetype"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-SemiBold.svg#Metropolis-SemiBold") format("svg");font-weight: 600;font-style: normal;}@font-face {font-display:block;font-family: 'Bernard MT Condensed';src: url("/wp-content/themes/askantech/assets/fonts/BernardMT-Condensed.eot");src: url("BernardMT-Condensed.eot?#iefix") format("embedded-opentype"), url("/wp-content/themes/askantech/assets/fonts/BernardMT-Condensed.woff2") format("woff2"), url("/wp-content/themes/askantech/assets/fonts/BernardMT-Condensed.woff") format("woff"), url("/wp-content/themes/askantech/assets/fonts/BernardMT-Condensed.ttf") format("truetype"), url("/wp-content/themes/askantech/assets/fonts/BernardMT-Condensed.svg#BernardMT-Condensed") format("svg");font-weight: normal;font-style: normal;}@font-face {font-display:block;font-family: 'Poppins';src: url("/wp-content/themes/askantech/assets/fonts/Poppins-Thin.eot");src: local("Poppins Thin"), local("Poppins-Thin"), url("/wp-content/themes/askantech/assets/fonts/Poppins-Thin.eot?#iefix") format("embedded-opentype"), url("/wp-content/themes/askantech/assets/fonts/Poppins-Thin.woff2") format("woff2"), url("/wp-content/themes/askantech/assets/fonts/Poppins-Thin.woff") format("woff"), url("/wp-content/themes/askantech/assets/fonts/Poppins-Thin.ttf") format("truetype"), url("/wp-content/themes/askantech/assets/fonts/Poppins-Thin.svg#Poppins-Thin") format("svg");font-weight: 100;font-style: normal;}@font-face {font-display:block;font-family: 'Metropolis';src: url("/wp-content/themes/askantech/assets/fonts/Metropolis-Bold.eot");src: local("Metropolis Bold"), local("Metropolis-Bold"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-Bold.eot?#iefix") format("embedded-opentype"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-Bold.woff2") format("woff2"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-Bold.woff") format("woff"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-Bold.ttf") format("truetype"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-Bold.svg#Metropolis-Bold") format("svg");font-weight: bold;font-style: normal;}@font-face {font-display:block;font-family: 'Metropolis';src: url("/wp-content/themes/askantech/assets/fonts/Metropolis-Black.eot");src: local("Metropolis Black"), local("Metropolis-Black"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-Black.eot?#iefix") format("embedded-opentype"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-Black.woff2") format("woff2"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-Black.woff") format("woff"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-Black.ttf") format("truetype"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-Black.svg#Metropolis-Black") format("svg");font-weight: 900;font-style: normal;}@font-face {font-display:block;font-family: 'Poppins';src: url("/wp-content/themes/askantech/assets/fonts/Poppins-Regular.eot");src: local("Poppins Regular"), local("Poppins-Regular"), url("/wp-content/themes/askantech/assets/fonts/Poppins-Regular.eot?#iefix") format("embedded-opentype"), url("/wp-content/themes/askantech/assets/fonts/Poppins-Regular.woff2") format("woff2"), url("/wp-content/themes/askantech/assets/fonts/Poppins-Regular.woff") format("woff"), url("/wp-content/themes/askantech/assets/fonts/Poppins-Regular.ttf") format("truetype"), url("/wp-content/themes/askantech/assets/fonts/Poppins-Regular.svg#Poppins-Regular") format("svg");font-weight: normal;font-style: normal;}@font-face {font-display:block;font-family: 'Metropolis Extra';src: url("/wp-content/themes/askantech/assets/fonts/Metropolis-ExtraLight.eot");src: local("Metropolis Extra Light"), local("Metropolis-ExtraLight"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-ExtraLight.eot?#iefix") format("embedded-opentype"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-ExtraLight.woff2") format("woff2"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-ExtraLight.woff") format("woff"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-ExtraLight.ttf") format("truetype"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-ExtraLight.svg#Metropolis-ExtraLight") format("svg");font-weight: 200;font-style: normal;}@font-face {font-display:block;font-family: 'Poppins';src: url("/wp-content/themes/askantech/assets/fonts/Poppins-ExtraLight.eot");src: local("Poppins ExtraLight"), local("Poppins-ExtraLight"), url("/wp-content/themes/askantech/assets/fonts/Poppins-ExtraLight.eot?#iefix") format("embedded-opentype"), url("/wp-content/themes/askantech/assets/fonts/Poppins-ExtraLight.woff2") format("woff2"), url("/wp-content/themes/askantech/assets/fonts/Poppins-ExtraLight.woff") format("woff"), url("/wp-content/themes/askantech/assets/fonts/Poppins-ExtraLight.ttf") format("truetype"), url("/wp-content/themes/askantech/assets/fonts/Poppins-ExtraLight.svg#Poppins-ExtraLight") format("svg");font-weight: 200;font-style: normal;}@font-face {font-display:block;font-family: 'Poppins';src: url("/wp-content/themes/askantech/assets/fonts/Poppins-MediumItalic.eot");src: local("Poppins Medium Italic"), local("Poppins-MediumItalic"), url("/wp-content/themes/askantech/assets/fonts/Poppins-MediumItalic.eot?#iefix") format("embedded-opentype"), url("/wp-content/themes/askantech/assets/fonts/Poppins-MediumItalic.woff2") format("woff2"), url("/wp-content/themes/askantech/assets/fonts/Poppins-MediumItalic.woff") format("woff"), url("/wp-content/themes/askantech/assets/fonts/Poppins-MediumItalic.ttf") format("truetype"), url("/wp-content/themes/askantech/assets/fonts/Poppins-MediumItalic.svg#Poppins-MediumItalic") format("svg");font-weight: 500;font-style: italic;}@font-face {font-display:block;font-family: 'Poppins';src: url("/wp-content/themes/askantech/assets/fonts/Poppins-Black.eot");src: local("Poppins Black"), local("Poppins-Black"), url("/wp-content/themes/askantech/assets/fonts/Poppins-Black.eot?#iefix") format("embedded-opentype"), url("/wp-content/themes/askantech/assets/fonts/Poppins-Black.woff2") format("woff2"), url("/wp-content/themes/askantech/assets/fonts/Poppins-Black.woff") format("woff"), url("/wp-content/themes/askantech/assets/fonts/Poppins-Black.ttf") format("truetype"), url("/wp-content/themes/askantech/assets/fonts/Poppins-Black.svg#Poppins-Black") format("svg");font-weight: 900;font-style: normal;}@font-face {font-display:block;font-family: 'Metropolis';src: url("/wp-content/themes/askantech/assets/fonts/Metropolis-Regular.eot");src: local("Metropolis Regular"), local("Metropolis-Regular"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-Regular.eot?#iefix") format("embedded-opentype"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-Regular.woff2") format("woff2"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-Regular.woff") format("woff"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-Regular.ttf") format("truetype"), url("/wp-content/themes/askantech/assets/fonts/Metropolis-Regular.svg#Metropolis-Regular") format("svg");font-weight: normal;font-style: normal;}@font-face {font-display:block;font-family: 'Poppins';src: url("/wp-content/themes/askantech/assets/fonts/Poppins-ExtraBold.eot");src: local("Poppins ExtraBold"), local("Poppins-ExtraBold"), url("/wp-content/themes/askantech/assets/fonts/Poppins-ExtraBold.eot?#iefix") format("embedded-opentype"), url("/wp-content/themes/askantech/assets/fonts/Poppins-ExtraBold.woff2") format("woff2"), url("/wp-content/themes/askantech/assets/fonts/Poppins-ExtraBold.woff") format("woff"), url("/wp-content/themes/askantech/assets/fonts/Poppins-ExtraBold.ttf") format("truetype"), url("/wp-content/themes/askantech/assets/fonts/Poppins-ExtraBold.svg#Poppins-ExtraBold") format("svg");font-weight: 800;font-style: normal;}@font-face {font-display:block;font-family: 'Oswald';font-style: normal;font-weight: 400;src: local("Oswald Regular"), local("Oswald-Regular"), url(https://fonts.gstatic.com/s/oswald/v16/TK3iWkUHHAIjg752HT8Ghe4.woff2) format("woff2");unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}@font-face {font-display:block;font-family: 'Oswald';font-style: normal;font-weight: 400;src: local("Oswald Regular"), local("Oswald-Regular"), url(https://fonts.gstatic.com/s/oswald/v16/TK3iWkUHHAIjg752Fj8Ghe4.woff2) format("woff2");unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;}@font-face {font-display:block;font-family: 'Oswald';font-style: normal;font-weight: 400;src: local("Oswald Regular"), local("Oswald-Regular"), url(https://fonts.gstatic.com/s/oswald/v16/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format("woff2");unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}@font-face {font-display:block;font-family: 'Oswald';font-style: normal;font-weight: 400;src: local("Oswald Regular"), local("Oswald-Regular"), url(https://fonts.gstatic.com/s/oswald/v16/TK3iWkUHHAIjg752GT8G.woff2) format("woff2");unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}html, body {min-height: 100%;min-width: 100%;font-family: "Metropolis";overflow-x: hidden;}body p {font-family: 'Poppins';}img {max-width: 100%;he`Û®SÚU  `Û®SÚU                  ‡‰ÚQÚU           xıQÚU  »Û®SÚU          ÄÛ®SÚU   @      ÄÛ®SÚU          -webkit-box;display: -ms-flexbox;display: flex;}.cc-col-25 {width: 25%;-ms-flex-preferred-size: 25%;flex-basis: 25%;}.cc-col-50 {width: 50%;-ms-flex-preferred-size: 50%;flex-basis: 50%;}.cc-col-55 {width: 55%;-ms-flex-preferred-size: 55%;flex-basis: 55%;}.cc-col-45 {width: 45%;-ms-flex-preferred-size: 45%;flex-basis: 45%;}.cc-col-60 {width: 60%;-ms-flex-preferred-size: 60%;flex-basis: 60%;}.cc-col-40 {width: 40%;-ms-flex-preferred-size: 40%;flex-basis: 40%;}.cc-col-33 {width: 33.33%;-ms-flex-preferred-size: 33.33%;flex-basis: 33.33%;}.cc-col-47 {width: 47%;-ms-flex-preferred-size: 47%;flex-basis: 47%;}.cc-col-53 {width: 53%;-ms-flex-preferred-size: 53%;flex-basis: 53%;}.cc-col-full {width: 100%;-ms-flex-preferred-size: 100%;flex-basis: 100%;}.animated {-webkit-animation-duration: 1s;animation-duration: 1s;-webkit-animation-fill-mode: both;animation-fill-mode: both;}.animated.infinite {-webkit-animation-iteration-count: infinite;animation-iteration-count: infinite;}.animated.delay-1s {-webkit-animation-delay: 1s;animation-delay: 1s;}.animated.delay-2s {-webkit-animation-delay: 2s;animation-delay: 2s;}.animated.delay-3s {-webkit-animation-delay: 3s;animation-delay: 3s;}.animated.delay-4s {-webkit-animation-delay: 4s;animation-delay: 4s;}.animated.delay-5s {-webkit-animation-delay: 5s;animation-delay: 5s;}.animated.fast {-webkit-animation-duration: 800ms;animation-duration: 800ms;}.animated.faster {-webkit-animation-duration: 500ms;animation-duration: 500ms;}.animated.slow {-webkit-animation-duration: 2s;animation-duration: 2s;}.animated.slower {-webkit-animation-duration: 3s;animation-duration: 3s;}.my-notify-error {color: red;}@media (prefers-reduced-motion) {.animated {-webkit-animation: unset !important;animation: unset !important;-webkit-transition: none !important;transition: none !important;}}@-webkit-keyframes bounce {from, 20%, 53%, 80%, to {-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);-webkit-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0);}40%, 43% {-webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);-webkit-transform: translate3d(0, -30px, 0);transform: translate3d(0, -30px, 0);}70% {-webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);-webkit-transform: translate3d(0, -15px, 0);transform: translate3d(0, -15px, 0);}90% {-webkit-transform: translate3d(0, -4px, 0);transform: translate3d(0, -4px, 0);}}@keyframes bounce {from, 20%, 53%, 80%, to {-webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);-webkit-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0);}40%, 43% {-webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);-webkit-transform: translate3d(0, -30px, 0);transform: translate3d(0, -30px, 0);}70% {-webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);-webkit-transform: translate3d(0, -15px, 0);transform: translate3d(0, -15px, 0);}90% {-webkit-transform: translate3d(0, -4px, 0);transform: translate3d(0, -4px, 0);}}@-webkit-keyframes fadeIn {from {opacity: 0;}to {opacity: 1;}}@keyframes fadeIn {from {opacity: 0;}to {opacity: 1;}}@-webkit-keyframes slideInLeft {from {-webkit-transform: translate3d(-100%, 0, 0);transform: translate3d(-100%, 0, 0);visibility: visible;opacity: 0;}to {-webkit-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0);opacity: 1;}}@keyframes slideInLeft {from {-webkit-transform: translate3d(-100%, 0, 0);transform: translate3d(-100%, 0, 0);visibility: visible;opacity: 0;}to {-webkit-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0);opacity: 1;}}@-webkit-keyframes slideInRight {from {-webkit-transform: translate3d(100%, 0, 0);transform: translate3d(100%, 0, 0);visibility: visible;opacity: 0;}to {-webkit-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0);opacity: 1;}}@keyframes slideInRight {from {-webkit-transform: translate3d(100%, 0, 0);transform: translate3d(100%, 0, 0);visibility: visible;opacity: 0;}to {-webkit-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0);opacity: 1;}}.bounce {-webkit-animation-name: bounce;animation-name: bounce;-webkit-transform-origin: center bottom;transform-origin: center bottom;}.fadeIn {-webkit-animation-name: fadeIn;animation-name: fadeIn;-webkit-animation-duration: 1s;animation-duration: 1s;-webkit-animation-fill-mode: both;animation-fill-mode: both;-webkit-animation-duration: 3s;animation-duration: 3s;}.slideInRight {-webkit-animation-name: slideInRight;animation-name: slideInRight;-webkit-animation-fill-mode: both;animation-fill-mode: both;-webkit-animation-duration: 1.5s;animation-duration: 1.5s;}.slideInLeft {-webkit-animation-name: slideInLeft;animation-name: slideInLeft;-webkit-animation-fill-mode: both;animation-fill-mode: both;-webkit-animation-duration: 1.5s;animation-duration: 1.5s;}a.animated-button.thar-three {position: relative;-webkit-transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1) 0s;transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1) 0s;overflow: hidden;}a.animated-button.thar-three:hover {color: #fff !important;background-color: transparent;}a.animated-button.thar-three:hover:before {left: 0%;right: auto;width: 100%;}a.animated-button.thar-three:before {display: block;position: absolute;top: 0px;right: 0px;height: 100%;width: 0px;z-index: -1;content: '';color: #000 !important;background: #53e0d0;background: -webkit-gradient(left top, right top, color-stop(0%, #53e0d0), color-stop(100%, #009afa));background: -webkit-gradient(linear, left top, right top, from(#53e0d0), to(#009afa));background: linear-gradient(to right, #53e0d0 0%, #009afa 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#53e0d0', endColorstr='#009afa', GradientType=1 );-webkit-transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1) 0s;transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1) 0s;border-radius: 45px;}a.animated-button.thar-three:hover .arrow {background-image: url(/wp-content/themes/askantech/assets/images/more-btn-arrow-white.png);}button.animated-button.thar-three {position: relative;-webkit-transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1) 0s;transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1) 0s;overflow: hidden;}button.animated-button.thar-three:hover {color: #fff !important;background-color: transparent;}button.animated-button.thar-three:hover:before {left: 0%;right: auto;width: 100%;}button.animated-button.thar-three:before {display: block;position: absolute;top: 0px;right: 0px;height: 100%;width: 0px;z-index: -1;content: '';color: #000 !important;background: #53e0d0;background: -webkit-gradient(left top, right top, color-stop(0%, #53e0d0), color-stop(100%, #009afa));background: -webkit-gradient(linear, left top, right top, from(#53e0d0), to(#009afa));background: linear-gradient(to right, #53e0d0 0%, #009afa 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#53e0d0', endColorstr='#009afa', GradientType=1 );-webkit-transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1) 0s;transition: all 0.4s cubic-bezier(0.42, 0, 0.58, 1) 0s;border-radius: 45px;}button.animated-button.thar-three:hover .arrow {background-image: url(/wp-content/themes/askantech/assets/images/more-btn-arrow-white.png);}.form-wrapper .wrapp-field input[type="text"]:focus, .form-wrapper .wrapp-field input[type="email"]:focus, .form-wrapper .wrapp-field input[type="file"]:focus, .form-wrapper .wrapp-field textarea:focus {border-bottom-color: #019bfa;border-bottom-width: 2px;}.form-wrapper .wrapp-field input[type="file"] {cursor: pointer;}.title-content {opacity: 0;}.content-block-title.web-app-title, .mobile-app-title, .wep-app-title-two {opacity: 0;}.header-section {z-index: 33333;position: absolute;width: 100%;top: 0px;left: 0px;background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.5)), color-stop(45%, rgba(25, 25, 25, 0.32)), to(rgba(0, 0, 0, 0)));background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(25, 25, 25, 0.32) 45%, rgba(0, 0, 0, 0) 100%);}nav {display: -webkit-box;display: -ms-flexbox;display: flex;}#menu-toggle {display: none;}#menu-toggle img {width: 30px;}.menulist .close-menu {display: none;}.nav-bar {display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-pack: justify;-ms-flex-pack: justify;justify-content: space-between;-webkit-box-align: center;-ms-flex-align: center;align-items: center;padding: 10px 0px;}.navbar ul {list-style: none;}.navbar ul li {display: inline-block;margin-right: 22px;}.navbar ul li a {font-size: 17px;color: #fff;text-decoration: none;text-transform: uppercase;}.get-quote-button {padding: 8px 15px;border: 1px solid #fff;border-radius: 120px;}.block-titles .title {position: relative;}.block-titles .title .big-title h2 {font-size: 95px;font-weight: 900;font-style: normal;text-transform: uppercase;color: rgba(83, 224, 208, 0.25);}.block-titles .small-title {position: absolute;top: 50%;left: 50%;-webkit-transform: translate(-50%, -50%);transform: translate(-50%, -50%);display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;-webkit-box-align: center;-ms-flex-align: center;align-items: center;width: 100%;}.block-titles .small-title .title-content h3 {font-size: 36px;text-transform: uppercase;color: #009bfa;}.small-title-line {height: 1px;width: 45px;background: #009bfa;margin: 0px 10px;}.block-titles .desc p {font-size: 16px;line-height: 24px;color: #333;}.image-block {position: relative;}.image-block .image-one {position: relative;}.image-block .image-two {position: absolute;top: 0;left: 0;}.image-block .image-two {left: 45px;}.content-block .content-block-title h3 {font-size: 35px;color: #009bfa;margin-bottom: 6px;}.grey-col {color: #888888;}.block-titles {max-width: 810px;text-align: center;margin: 0px auto;margin-bottom: 60px;}.content-block .content-block-sub-title {display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-align: center;-ms-flex-align: center;align-items: center;margin-bottom: 15px;}.content-block-sub-title .right-line.small-title-line {width: 65px;margin-left: 5px;}.content-block .content-block-sub-title h5 {font-size: 14px;text-transform: uppercase;color: #a9a9a9;}.content-block-contents p {margin-bottom: 18px;width: 80%;}.more-btn .button-wrapper .btn-sty-one {display: -webkit-inline-box;display: -ms-inline-flexbox;display: inline-flex;cursor: pointer;padding: 11px 10px 11px 38px;background: #fff;-webkit-box-shadow: 0px 0px 8px #c5c5c5;box-shadow: 0px 0px 8px #c5c5c5;text-decoration: none;color: #009bfa;border-radius: 45px;-webkit-transition: all ease-out 0.3s;transition: all ease-out 0.3s;}.more-btn .button-wrapper .btn-sty-one .arrow {display: inline-block;background: url(/wp-content/themes/askantech/assets/images/more-btn-arrow.png);background-repeat: no-repeat;background-size: 26px;background-position: 0px;margin-left: 10px;width: 48px;min-height: 16px;-webkit-transition: all ease-out 0.3s;transition: all ease-out 0.3s;}.more-btn .button-wrapper .btn-sty-one:hover .arrow {background-position: 10px;}.footer-address-row {padding: 80px 0px 0px 0px;background: #1f1f1f;position: relative;}.addressbox {font-family: "poppins";color: #fff;font-weight: normal;}.country-title h2 {font-weight: normal;font-size: 18px;}.footer-sep-45 {height: 45px;}.footer-sep-30 {height: 30px;}.footer-address-row .container {position: relative;}.footer-address-row .cc-col-33 {padding-bottom: 90px;margin-right: 35px;}.cc-col-33.united {background-repeat: no-repeat;background-position: bottom right;}.cc-col-33.india {background-repeat: no-repeat;background-position: bottom right;}.cc-col-33.thailand {background-repeat: no-repeat;background-position: bottom right;}.country-address p, .country-contact-details p {font-size: 14px;}footer {background: #353535;color: #fff;}footer .footer-details {text-align: center;font-size: 13px;padding: 40px 0px 30px 0px;}footer .privacymenu ul {list-style: none;margin-bottom: 10px;}footer .privacymenu ul li {display: inline-block;margin-right: 10px;}footer .privacymenu ul li a {text-decoration: none;color: #fff;}footer .social-links {position: absolute;right: 0;bottom: 45%;-webkit-transform: rotate(270deg);transform: rotate(270deg);}footer .social-links ul {list-style: none;margin-bottom: 10px;}footer .social-links ul li {display: inline-block;margin-right: 10px;}footer .social-links ul li a {text-decoration: none;color: #fff;position: relative;}footer .social-links ul li span {background-color: #fff;width: 30px;height: 1px;display: inline-block;position: relative;top: -3px;left: 3px;}.footer-address-row .cc-row {position: relative;}.cc-social-lins-sty {position: absolute;right: 0;bottom: 0;-webkit-transform: rotate(-90deg);transform: rotate(-90deg);}.cc-social-lins-sty ul {display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-pack: justify;-ms-flex-pack: justify;justify-content: space-between;}.cc-social-lins-sty li {display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;-webkit-box-align: center;-ms-flex-align: center;align-items: center;}.cc-link-line {width: 80px;height: 2px;background: #fff;display: inline-block;}.footer-contact {background: #f6fafd;display: inline-block;width: 100%;padding: 125px 0;}.footer-contact .block-titles .title h3 {font-size: 36px;margin-top: 20px;margin-bottom: 15px;display: inline-block;width: 100%;}.footer-contact .button-center {text-align: center;display: inline-block;width: 100%;margin-top: 35px;}.footer-contact a.animated-button.thar-three:hover:before {z-index: 0;}.footer-contact a.animated-button.thar-three span {position: relative;}.footer-part {position: relative;}.cc-footer-iso-logo {text-align: center;background: #fff;padding: 20px;display: flex;flex-wrap: wrap;justify-content: center;align-items: center;}.iso-img {max-width: 110px;}.cc-innerpage-banner .banner-section .image-section {position: absolute;height: 100%;width: 100%;left: 0;top: 0;background-size: cover;}.cc-innerpage-banner .banner-section {position: relative;height: 100vh;width: 100%;top: 0;left: 0;}.cc-innerpage-banner .banner-section .overlay-section.opacity0 {background: rgba(0, 0, 0, 0);z-index: 3333;height: 100%;width: 100%;left: 0;top: 0;}.cc-innerpage-banner .overlay-section .container {height: 100%;display: flex;justify-content: center;align-items: center;position: relative;}.cc-innerpage-banner .overlay-section.opacity0 .container {justify-content: start;top: 50%;transform: translateY(-25%);align-items: start;}.cc-innerpage-banner .overlay-section .container .banner-content {color: #fff;}.cc-innerpage-banner .overlay-section.opacity0 .container .banner-content , .cc-innerpage-banner .overlay-section.opacity0 .container .banner-content-right {width: 50%;}.cc-innerpage-banner .overlay-section.opacity0 .container .banner-content-right {text-align: center;}.cc-innerpage-banner .banner-section .overlay-section.opacity0 .text-one h3 {font-size: 20px;font-weight: normal;margin-bottom: 25px;}.cc-innerpage-banner .text-two {display: flex;position: relative;}.cc-innerpage-banner .banner-section .overlay-section.opacity0 .text-two::before {content: "";display: block;height: 4px;width: 145px;background: rgba(255,255,255,1);background: -moz-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 100%);background: -webkit-gradient(left top, right top, color-stop(0%, rgba(255,255,255,1)), color-stop(100%, rgba(255,255,255,1)));background: -webkit-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 100%);background: -o-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 100%);background: -ms-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 100%);background: linear-gradient(to right, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#53e0d0', endColorstr='#009afa', GradientType=1 );position: absolute;left: -175px;top: 45px;}.cc-innerpage-banner .text-two::before {content: "";display: block;height: 8px;width: 145px;background: rgba(83,224,208,1);background: -moz-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);background: -webkit-gradient(left top, right top, color-stop(0%, rgba(83,224,208,1)), color-stop(100%, rgba(0,154,250,1)));background: -webkit-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);background: -o-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);background: -ms-linear-gradient(left, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);background: linear-gradient(to right, rgba(83,224,208,1) 0%, rgba(0,154,250,1) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#53e0d0', endColorstr='#009afa', GradientType=1 );position: absolute;left: -175px;top: 25px;}.cc-innerpage-banner .banner-section .overlay-section.opacity0 .text-three h3 {font-size: 18px;line-height: 24px;font-weight: 400;}.cc-innerpage-banner .banner-section .overlay-section.opacity0 .text-two h2 {font-size: 50px;margin-bottom: 25px;text-shadow: 0px 3px 0px rgba(0, 0, 0, 0.60);}.cc-inner-form-section {padding: 0 15px;}.cc-inner-form-section button.animated-button.thar-three:hover:before {z-index: 1;}.cc-inner-form-section button.animated-button.thar-three:hover span {z-index: 2;}.cc-inner-form-section {max-width: 920px;margin: 0px auto;margin-top: 30px;}.form-wrapper form {display: -webkit-box;display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;justify-content: space-between;}.form-wrapper .wrapp-field {width: 48%;}.form-wrapper .full-wrap {width: 100%;}.form-wrapper .wrapp-field input[type="text"], .form-wrapper .wrapp-field input[type="email"], .form-wrapper .wrapp-field input[type="file"], .form-wrapper .wrapp-field textarea {width: 100%;padding: 33px 0px 10px 0px;border-bottom: 2px solid #e2e2e2;font-size: 18px;text-transform: unset;outline: none;font-family: "poppins";-webkit-transition: all ease-out 0.3s;transition: all ease-out 0.3s;background-color: transparent;}.form-wrapper .wrapp-field textarea {width: 100%;padding-bottom: 40px;resize: none;}.filelabel {position: relative;display: block;width: 100%;padding: 33px 0px 10px 0px;border-bottom: 2px solid #e2e2e2;font-size: 18px;text-transform: capitalize;outline: none;font-family: "poppins";color: grey;}.filelabel .filetype {position: absolute;z-index: 232;padding: 0;height: 100%;width: 100%;left: 0;opacity: 0;top: 0;}.wrap-submit-btn {width: 100%;text-align: right;margin-top: 45px;}.wrap-submit-btn.more-btn button {font-size: 16px;}@media only screen and (max-width:567px) {.form-wrapper .wrapp-field {width: 100%;}.form-wrapper .wrapp-field input[type="text"], .form-wrapper .wrapp-field input[type="email"], .form-wrapper .wrapp-field input[type="file"], .form-wrapper .wrapp-field textarea {width: 100%;}.cc-inner-form-section {padding: 0 20px;}}@media only screen and (max-width:768px) {html body .block-titles {margin-bottom: 0px;}.footer-case-study {padding-bottom: 0px;}}@media only screen and (max-width: 1200px) {footer .social-links {position: relative;right: 0;bottom: 0;-webkit-transform: rotate(0deg);transform: rotate(0deg);}footer .social-links ul li span {display: none;}footer .social-links ul {list-style: none;margin-top: 10px;margin-bottom: 10px;text-align: center;display: inline-block;width: 100%;}}@media only screen and (max-width: 768px) {.container {width: 98%;}.cc-row {display: -webkit-box;display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;}.cc-col-50, .cc-col-60, .cc-col-40, .cc-col-55, .cc-col-33, .cc-col-45, .cc-col-25, .cc-col-47, .cc-col-53 {width: 100%;-ms-flex-preferred-size: 100%;flex-basis: 100%;margin-bottom: 30px;}.text-two {display: block;}.text-two h2 {font-size: 40px;}.banner-content {text-align: center;}.banner-play-button {margin: 0px;display: block;}.text-three h3 {margin-top: 10px;}.overlay-section.opacity0 .container .banner-content .more-btn .button-wrapper .btn-sty-one {padding: 15px 10px 15px 25px;}.overlay-section.opacity0 .container .banner-content-right img {max-width: 100%;}#menu-toggle {display: block;}#menu-toggle img {width: 40px;}nav {display: block;}.menulist .close-menu {display: block;}.navbar .menulist {position: fixed;height: 100%;width: 100%;background: rgba(0, 0, 0, 0.9);top: 0;overflow: auto;right: -100%;-webkit-transition: all ease-out 0.3s;transition: all ease-out 0.3s;}.navbar .menulist.menu-from-right {right: 0%;}.close-menu {-webkit-box-ordinal-group: 0;-ms-flex-order: -1;order: -1;text-align: right;}.close-menu img {width: 30px;padding: 20px 5px;margin-right: 10px;}.menulist {display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-orient: vertical;-webkit-box-direction: normal;-ms-flex-direction: column;flex-direction: column;}.navbar ul li {display: block;padding: 15px;margin: 10px 18px;}.get-quote-button {max-width: 200px;}.order-up-col {-webkit-box-ordinal-group: 0;-ms-flex-order: -1;order: -1;}.block-titles .small-title .title-content h3 {font-size: 24px;}.block-titles .title .big-title h2 {font-size: 38px;}.content-block .content-block-title h3 {font-size: 30px;text-align: center;}.content-block-sub-title .right-line.small-title-line {width: 30px;margin-left: -40px;}.content-block .content-block-sub-title {-webkit-box-pack: center;-ms-flex-pack: center;justify-content: center;}.content-block-contents p {width: 100%;text-align: center;}.more-btn .button-wrapper {text-align: center;}.block-titles .title {margin-bottom: 25px;}.block-titles {margin-bottom: 40px;}.image-block {text-align: center;}.footer-wrapper .footer-address-row .cc-row {-webkit-box-pack: justify;-ms-flex-pack: justify;justify-content: space-between;}.footer-wrapper .footer-address-row .cc-row .cc-col-33 {width: 33.333%;-ms-flex-preferred-size: 33.333%;flex-basis: 33.333%;margin: 0;-webkit-box-ordinal-group: 4;-ms-flex-order: 3;order: 3;margin-bottom: 40px;}.footer-address-row {padding-left: 10px;padding-right: 10px;}.footer-address-row .cc-col-33 {padding-bottom: 20px;}.footer-contact {padding: 75px 0;}.apptech-txt h3 {text-align: center;padding: 5% 0;}.footer-sep-45 {height: 10px;}.cc-innerpage-banner .banner-content {text-align: center;}.cc-innerpage-banner .banner-section .overlay-section.opacity0 .text-two h2 {width: 100%;}.cc-innerpage-banner .banner-section {height: auto;position: relative;padding-top: 95px;background-color: #009bfa !important;}.cc-innerpage-banner .overlay-section.opacity0 .container {flex-wrap: wrap;top: 0%;transform: translateY(0%);display: inline-block;width: 100%;}.cc-innerpage-banner .overlay-section.opacity0 .container .banner-content , .cc-innerpage-banner .overlay-section.opacity0 .container .banner-content-right {width: 100%;}}@media only screen and (min-width: 320px) and (max-width: 567px) {.footer-wrapper .footer-address-row .cc-row .cc-col-33 {width: 100%;-ms-flex-preferred-size: 100%;flex-basis: 100%;}.cc-innerpage-banner .banner-section .overlay-section.opacity0 .text-two h2 {font-size: 40px;}}@media only screen and (min-width: 420px) and (max-width: 568px) {.logo img {width: 160px;}.text-two h2 {font-size: 30px;margin-bottom: 20px;}.text-one h3 {font-size: 22px;margin-bottom: 20px;}.text-three h3 {font-size: 20px;}.bottom-scroll img {width: 18px;}}@media only screen and (min-width: 568px) and (max-width: 767px) {.logo img {width: 160px;}.text-two h2 {font-size: 30px;margin-bottom: 20px;}.text-one h3 {font-size: 22px;margin-bottom: 20px;}.text-three h3 {font-size: 20px;}.bottom-scroll img {width: 18px;}.image-block .image-two {width: 100%;}}@media only screen and (min-width: 768px) and (max-width: 1023px) {.container {width: 96%;}.text-two h2 {font-size: 60px;margin-bottom: 25px;}.banner-section .image-section {background-position: center center !important;}.banner-play-button img {width: 40px;}.text-one h3 {font-size: 35px;margin-bottom: 10px;}.text-three h3 {font-size: 30px;}.bottom-scroll img {width: 20px;}.logo img {width: 175px;}#menu-toggle img {width: 30px;}.block-titles .title .big-title h2 {font-size: 60px;color: rgba(83, 224, 208, 0.43);}.image-block .image-two {width: 100%;left: 0;}.image-block .image-two img {left: 30px;position: relative;}.image-block {text-align: center;}.image-block .image-one img, .image-block .image-two img {width: 320px;}.content-block-contents p {width: 95%;}.navbar ul li {margin-right: 8px;}.navbar ul li a {font-size: 11px;}.banner-play-button {margin-left: 70px;}}@media only screen and (min-width: 1024px) and (max-width: 1200px) {.container {width: 95%;}.navbar ul li a {font-size: 15px;}.navbar ul li {margin-right: 18px;}.block-titles .title .big-title h2 {font-size: 70px;}.block-titles .small-title .title-content h3 {font-size: 30px;}.content-block .content-block-title h3 {font-size: 28px;}.testimonial, .testimonial-wrapper {min-height: 600px;}}@media only screen and (min-width: 1200px) and (max-width: 1420px) {.container {width: 1124px;}}@media only screen and (min-width: 1421px) {.container {width: 1300px;}}@media only screen and (min-width:768px) and (max-width:1024px) {.footer-address-row .cc-col-33 {background-size: 190px;}.footer-address-row .cc-col-33.united {background-size: 110px !important;}}@media only screen and (min-width: 1366px) {html body.page-id-1596 .cc-innerpage-banner .banner-section .image-section {height: 109%;}}
</style>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Askan Technologies Pvt Ltd",
  "alternateName": "Askan",
  "url": "https://www.askantech.com",
  "logo": "https://www.askantech.com/wp-content/themes/askantech/assets/images/alw-new.png",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+917871997663",
    "contactType": "sales",
    "areaServed": "IN",
    "availableLanguage": "en"
  },{
    "@type": "ContactPoint",
    "telephone": "+1 6469718889",
    "contactType": "sales",
    "areaServed": "US",
    "availableLanguage": "en"
  }],
  "sameAs": [
    "https://www.facebook.com/askantech/",
    "https://twitter.com/askantech/",
    "https://in.linkedin.com/company/askan-technologies/"
  ],
  
  "location": 
[ 
      { 
         "@type": "LocalBusiness", 
         "parentOrganization": {
         	"name": "Askan Technologies"
      	  },
         "name" : "Askan Technologies - India",
         "image": "https://www.askantech.com/wp-content/themes/askantech/assets/images/alw-new.png",
         "address": {
             "@type": "PostalAddress",
             "addressLocality": "Pondicherry",
             "addressCountry": "IN",
             "postalCode": "605005",
             "streetAddress": "No:48, Pavendhar St, Mariamman Nagar"
           },
           "geo": {
            "@type": "GeoCoordinates",
            "latitude": 11.9254023,
            "longitude": 79.80890999999997
          },
             "openingHoursSpecification": {
                  "@type": "OpeningHoursSpecification",
                  "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday"
                  ],
                  "opens": "09:30",
                  "closes": "18:30"
                },
             "telephone" : "0413 4500022",
             "priceRange": "1000USD"
      }, 
      { 
         "@type": "LocalBusiness", 
         "parentOrganization": {
         "name": "Askan Technologies"
      	  },
         "name" : "Askan Technologies - United States",
         "image": "https://www.askantech.com/wp-content/themes/askantech/assets/images/alw-new.png",
         "address": {
             "@type": "PostalAddress",
             "addressLocality": "Plano",
             "addressRegion": "Texas",
             "addressCountry": "US",
             "postalCode": "75024",
             "streetAddress": "8404 Memorial In, #4205"
           },
         "geo": {
            "@type": "GeoCoordinates",
            "latitude": 33.0936406,
            "longitude": -96.8009385
          },
             "openingHoursSpecification": {
                  "@type": "OpeningHoursSpecification",
                  "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday"
                  ],
                  "opens": "09:30",
                  "closes": "18:30"
                },
             "telephone" : "+1 (646) 971-8889",
             "priceRange": "1000USD"
           },
      { 
         "@type": "LocalBusiness", 
         "parentOrganization": {
         "name": "Askan Technologies"
      },
         "name" : "Askan Technologies - Thailand",
         "image": "https://www.askantech.com/wp-content/themes/askantech/assets/images/alw-new.png",
         "address": {
             "@type": "PostalAddress",
             "addressLocality": "Hua Mak",
             "addressRegion": "Bang Kapi",
             "addressCountry": "Bangkok",
             "postalCode": "10240",
             "streetAddress": "Sapsin1, R#209, 249, Soi Ramkhamhaeng 24 Yeak 30,"
           },
         "geo": {
            "@type": "GeoCoordinates",
            "latitude": 13.7495259,
            "longitude": 100.6270978
          },
             "openingHoursSpecification": {
                  "@type": "OpeningHoursSpecification",
                  "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday"
                  ],
                  "opens": "09:30",
                  "closes": "18:30"
                },
             "telephone" : "+66838762766",
             "priceRange": "1000USD"
           }
           
           
]}
</script>
   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-9250988-11"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-9250988-11');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->	
  </head>
<body <?php echo body_class() ?> >

    <div class="wrapper">
        <!--header section-->
        <div class="header-section">

            <header>

                <div class="container">

                    <div class="nav-bar">
                        <div class="logo-sectio">
                            <div class="logo">
                                 <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
                                    <a href="<?php echo site_url(); ?>"><img itemprop="logo" class="headerlogo"  src="<?php echo get_template_directory_uri();?>/assets/images/alw-new.png" alt="Askan Technologies"/></a>
                                <?php else : ?>
                                    <hgroup>
                                <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
                                <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
                                 <?php endif; ?>
                            </div>
                        </div>
                        <nav class="navbar">
                            <div class="menulist">
                                <?php
                                $defaults = array(
                                    'theme_location'  => 'header-menu',
                                    'menu'            => 'nav-menu',
                                    'container'       => 'div',
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => 'menu',
                                    'menu_id'         => 'header-menu',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '<ul id="%1$s" class="%2$s nav navbar-nav right">%3$s</ul>',
                                    'depth'           => 0,
                                    'walker'          => new Child_Wrap()
                                );
                                //wp_nav_menu( $defaults );?>
                                <ul>
                                    <li> <a href="https://www.askantech.com/about-us/">About us</a> </li>
                                    <li><a href="https://www.askantech.com/services/">Services</a></li>
                                    <li><a href="https://www.askantech.com/success-stories/">Portfolio</a></li>
                                    <li><a href="https://www.askantech.com/blog/">Blog</a></li>
                                    <!--li><a href="">Case study</a></li-->
                                    <!--li><a href="">testimonial</a></li-->
                                    <li class="get-quote-button"><a href="https://www.askantech.com/contact-us/">get a quote</a></li>
                                </ul>
                                <div class="close-menu">
                                    <img class="simplelazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/cancel-w.png" alt="cancel">
                                </div>
                            </div>

                            <div class="menu-close-btn" id="menu-toggle">
                            <img class="simplelazymenu" src="<?php echo get_template_directory_uri();?>/assets/images/menu-w.png" alt="menu toggle">
                            </div>
                        </nav>
                    </div>
                </div>

            </header>

        </div>
        <!--banner-section-->

        <?php if(is_front_page()) { ?>
            <div class="banner-section">   
                <div id="cc-dym-content"> </div>  

                    <div class="overlay-section">
                        <div class="container">
                            <div class="banner-content">
                                <div class="text-one">
                                    <!-- <h3>WELCOME TO ASKAN</h3> -->
                                </div>
                                <div class="text-two">

                                    <h2 class="mobile-text-two-sty">WE DO CUSTOM APP</h2>

                                    <div class="typed-effect">

                                        <div class="cc-typeeffect-one">
                                            <div class="type-wrap">
                                                <div id="typed-strings1">
                                                    <h2>WE DO CUSTOM APP</h2>
                                                </div>
                                                <div id="typed1" style="white-space:pre;display: inline"></div>
                                            </div>
                                        </div>

                                        <div class="show-typed">
                                            <div class="type-effect-style">WE DO CUSTOM
                                                <span class="cc-typeeffect-two">
                                                    <span class="type-wrap">
                                                        <span id="typed-strings">
                                                            <span>WEBSITES</span>
                                                            <span>E-COMMERCE</span>
                                                        </span>
                                                        <span id="typed" style="white-space:pre;"></span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="text-three">
                                    <h3>For Your Business Growth and Development </h3>
                                </div>
                                <div class="bottom-scroll bounce animated slow infinite">
                                    <a href="javascript:void(0);">
                                        <img class="simplelazy" data-src="<?php echo get_template_directory_uri();?>/assets/images/scroll-down.png" alt="scroll-down">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    <div class="content">