<!DOCTYPE html>
<script src="https://www.googletagmanager.com/gtag/js?id=UA-44162241-1"  type="text/javascript" data-cfasync="false" async></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-44162241-1');
</script>
<html lang="nl">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_title', true); ?> | VistaRepair</title>
<meta name="description" content="<?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true); ?>">

<?php wp_head() ?>

<!-- <link rel="stylesheet" href="https://www.vistarepair.nl/public_html/revamp/wp-content/themes/vistarepair/assets/css/home.css"> -->

<!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->

<script src="https://vistarepair.nl/wp-includes/js/jquery/jquery.min.js"></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

<script src="//www.googletagmanager.com/gtag/js?id=UA-44162241-1"  type="text/javascript" data-cfasync="false" async></script>

<link rel="stylesheet" href="/wp-content/themes/vistarepair/assets/css/custom-carousel.css">



<style>
    @font-face {font-family: 'Montserrat';font-style: italic;font-weight: 100;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/JTUOjIg1_i6t8kCHKm459WxZqh7k29Y.ttf) format('truetype');}

@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 200;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/JTUPjIg1_i6t8kCHKm459WxZBg_z_PZ1.ttf) format('truetype');}

@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 300;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/JTUPjIg1_i6t8kCHKm459WxZYgzz_PZ1.ttf) format('truetype');}

@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 400;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/JTUQjIg1_i6t8kCHKm459WxRyS7j.ttf) format('truetype');}

@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 500;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/JTUPjIg1_i6t8kCHKm459WxZOg3z_PZ1.ttf) format('truetype');}

@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 600;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/JTUPjIg1_i6t8kCHKm459WxZFgrz_PZ1.ttf) format('truetype');}

@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 700;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/JTUPjIg1_i6t8kCHKm459WxZcgvz_PZ1.ttf) format('truetype');}

@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 800;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/JTUPjIg1_i6t8kCHKm459WxZbgjz_PZ1.ttf) format('truetype');}

@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 900;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/JTUPjIg1_i6t8kCHKm459WxZSgnz_PZ1.ttf) format('truetype');}

@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 100;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/JTUQjIg1_i6t8kCHKm45_QpRyS7j.ttf) format('truetype');}

@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 200;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/JTURjIg1_i6t8kCHKm45_aZA3gnD-w.ttf) format('truetype');}

@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 300;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/JTURjIg1_i6t8kCHKm45_cJD3gnD-w.ttf) format('truetype');}

@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 400;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/JTUSjIg1_i6t8kCHKm459Wlhzg.ttf) format('truetype');}

@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 500;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/JTURjIg1_i6t8kCHKm45_ZpC3gnD-w.ttf) format('truetype');}

@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 600;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/JTURjIg1_i6t8kCHKm45_bZF3gnD-w.ttf) format('truetype');}

@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 700;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/JTURjIg1_i6t8kCHKm45_dJE3gnD-w.ttf) format('truetype');}

@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 800;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/JTURjIg1_i6t8kCHKm45_c5H3gnD-w.ttf) format('truetype');}

@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 900;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/JTURjIg1_i6t8kCHKm45_epG3gnD-w.ttf) format('truetype');}

@font-face {font-family: 'Roboto';font-style: italic;font-weight: 100;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/KFOiCnqEu92Fr1Mu51QrEzAdKg.ttf) format('truetype');}

@font-face {font-family: 'Roboto';font-style: italic;font-weight: 300;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/KFOjCnqEu92Fr1Mu51TjASc6CsE.ttf) format('truetype');}

@font-face {font-family: 'Roboto';font-style: italic;font-weight: 400;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/KFOkCnqEu92Fr1Mu51xIIzc.ttf) format('truetype');}

@font-face {font-family: 'Roboto';font-style: italic;font-weight: 500;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/KFOjCnqEu92Fr1Mu51S7ACc6CsE.ttf) format('truetype');}

@font-face {font-family: 'Roboto';font-style: italic;font-weight: 700;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/KFOjCnqEu92Fr1Mu51TzBic6CsE.ttf) format('truetype');}

@font-face {font-family: 'Roboto';font-style: italic;font-weight: 900;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/KFOjCnqEu92Fr1Mu51TLBCc6CsE.ttf) format('truetype');}

@font-face {font-family: 'Roboto';font-style: normal;font-weight: 100;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/KFOkCnqEu92Fr1MmgVxIIzc.ttf) format('truetype');}

@font-face {font-family: 'Roboto';font-style: normal;font-weight: 300;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/KFOlCnqEu92Fr1MmSU5fBBc9.ttf) format('truetype');}

@font-face {font-family: 'Roboto';font-style: normal;font-weight: 400;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/KFOmCnqEu92Fr1Mu4mxP.ttf) format('truetype');}

@font-face {font-family: 'Roboto';font-style: normal;font-weight: 500;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/KFOlCnqEu92Fr1MmEU9fBBc9.ttf) format('truetype');}

@font-face {font-family: 'Roboto';font-style: normal;font-weight: 700;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/KFOlCnqEu92Fr1MmWUlfBBc9.ttf) format('truetype');}

@font-face {font-family: 'Roboto';font-style: normal;font-weight: 900;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/KFOlCnqEu92Fr1MmYUtfBBc9.ttf) format('truetype');}

@font-face {font-family: 'Roboto Slab';font-style: normal;font-weight: 100;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjojIWmb2Rm.ttf) format('truetype');}

@font-face {font-family: 'Roboto Slab';font-style: normal;font-weight: 200;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoDISmb2Rm.ttf) format('truetype');}

@font-face {font-family: 'Roboto Slab';font-style: normal;font-weight: 300;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjo0oSmb2Rm.ttf) format('truetype');}

@font-face {font-family: 'Roboto Slab';font-style: normal;font-weight: 400;font-display: swap;src: url(https://fonts.gstatic.com/s/robotoslab/v13/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjojISmb2Rm.ttf) format('truetype');}

@font-face {font-family: 'Roboto Slab';font-style: normal;font-weight: 500;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjovoSmb2Rm.ttf) format('truetype');}

@font-face {font-family: 'Roboto Slab';font-style: normal;font-weight: 600;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoUoOmb2Rm.ttf) format('truetype');}

@font-face {font-family: 'Roboto Slab';font-style: normal;font-weight: 700;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoa4Omb2Rm.ttf) format('truetype');}

@font-face {font-family: 'Roboto Slab';font-style: normal;font-weight: 800;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoDIOmb2Rm.ttf) format('truetype');}

@font-face {font-family: 'Roboto Slab';font-style: normal;font-weight: 900;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/BngbUXZYTXPIvIBgJJSb6s3BzlRRfKOFbvjoJYOmb2Rm.ttf) format('truetype');}

@font-face {font-family: 'Voces';font-style: normal;font-weight: 400;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/-F6_fjJyLyU8d7PGDmo.ttf) format('truetype');}

@font-face{font-family:"Font Awesome 5 Free";font-style:normal;font-weight:900;font-display: swap;src:url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/fa-solid-900.eot);src:url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/fa-solid-900.eot?#iefix) format("embedded-opentype"),url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/fa-solid-900.woff2) format("woff2"),url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/fa-solid-900.woff) format("woff"),url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/fa-solid-900.ttf) format("truetype"),url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/fa-solid-900.svg#fontawesome) format("svg")}.fa,.fas{font-family:"Font Awesome 5 Free";font-weight:900}



@font-face{font-family:"Font Awesome 5 Free";font-style:normal;font-weight:400;font-display: swap;src:url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/fa-regular-400.eot);src:url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/fa-regular-400.eot?#iefix) format("embedded-opentype"),url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/fa-regular-400.woff2) format("woff2"),url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/fa-regular-400.woff) format("woff"),url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/fa-regular-400.ttf) format("truetype"),url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/fa-regular-400.svg#fontawesome) format("svg")}.far{font-family:"Font Awesome 5 Free";font-weight:400}

@font-face{font-family:'eicons';font-display: swap;src:url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/eicons.eot?5.10.0);src:url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"),url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/eicons.woff2?5.10.0) format("woff2"),url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/eicons.woff?5.10.0) format("woff"),url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/eicons.ttf?5.10.0) format("truetype"),url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/eicons.svg?5.10.0#eicon) format("svg");font-weight:400;font-style:normal}





body{margin: 0px;line-height:1.5;overflow-x: hidden;}

#slide{visibility: hidden;}

#settime2{visibility: hidden;}

section.animation.zoom-in {min-height: 253px;}

.vis-ta-re-pair-primry-head-lo-wid-get {max-width: 1140px;margin-left: auto;margin-right: auto;position: relative;min-height: 112px;}

.vis-ta-rep-sh-ka-wlk-in-ser-sec-ex {min-height: 203px;}

.site-logo a img {width: 264px;/*height: 57px;*/margin-top:32px;}

.site-logo {text-align: left;min-height: 92px;}

.col-md-12 {display: flex;width: 100%;min-height: 112px;}

.col-md-8 {float: right;width: 66.842%;display: flex;min-height: 112px;}

.col-md-4 {float: left;width: 33.158%;}

.widget-area {width: 33.333%;min-height: 112px;}

.elementor-column-wrap.elementor-element-populated {padding: 10px;}

h3.elementor-icon-box-title {margin: 0px;line-height: 1.2;font-size: 14px;margin-top: 0.5rem;color: #282828;margin-bottom: 5px;font-family: "Roboto",sans-serif;text-align: left;margin-bottom: 5px;
    margin-top: 8px;}

p.elementor-icon-box-description {margin: 0px;font-weight: 400;color: #000000;font-size: 14px;text-align: left;font-family: "Roboto",sans-serif;}

/* footer */

.vist-rep-pari-hm-pg-wd-ov-al-con-wd {background-color: #51CAFF;}

.vist-rp-pair-hm-pg-ov-al-bk-grd-clr {max-width: 1140px;margin-left: auto;margin-right: auto;min-height:50px;display: grid;align-items: center;}

.vis-ta-para-hm-pg-fl-ex {display: flex;width:100%;}

h3.elementor-heading-title.elementor-size-default {color: #FFFFFF;font-size: 12px;font-weight: 300;font-family: "Roboto",sans-serif;line-height:1;margin:0px;}

.vist-ta-pa-ra-blk-cl {padding: 10px;}

p.elementor-heading-title.elementor-size-default {color: #FFFFFF;font-size: 12px;font-weight: 300;line-height: 1;font-family: "Roboto",sans-serif;margin:0px}

div#d4a21 {width: 24.561%;}

div#d4231 {width: 28.334%;}

div#d4241 {width: 30.614%;}

div#d4251 {width: 16.447%;}

.vist-ta-pa-ra-blk-cl p a {color: #FFFFFF;font-size: 12px;font-weight: 300;text-decoration: none;font-family: "Roboto",sans-serif;}

footer.vis-ta-rep-air-wd-fot-sec-dary {border-top: 2px solid #fff;}

.vist-ta-rep-pair-foot-pri-mary-ov-al-wd {max-width: 1140px;margin-left: auto;margin-right: auto;position: relative;}

.vis-ta-rep-pair-ov-al-pri-mary-foot-wd-fl-ex {display: flex;width:100%;}

.vist-rep-pari-hm-pg-wd-ov-al-con-wd1 {background-color: #51CAFF;padding: 65px 0px 30px 0px;}

h4.vis-ta-rep-tit-wd-tg {color: #ffffff;font-size: 18px;font-weight: 500;font-family: "Roboto",sans-serif;margin: 0px;line-height: 1;margin-bottom:20px;}

div#adef43 {margin: 0px 80px 0px 0px;}

p.vis-ta-sp-ov-al-cnt-pra {color: rgba(255, 255, 255, 0.9);font-size: 14px;font-weight: 400;line-height: 1.7em;font-family: "Roboto",sans-serif;margin-top: 0;margin-bottom: .9rem;}

ul.elementor-icon-list-items {list-style: none;}

ul.elementor-icon-list-items {list-style: none;margin-top: 0px;padding: 0px;margin-bottom: .9rem;}

li.elementor-icon-list-item a {text-decoration: none;color: #ffffffe6;font-size: 14px;font-weight: 300;font-family: "Roboto",sans-serif;}


@media (max-width:767px){

.widget-area {width: 100%;}

.vis-ta-rep-pair-ov-al-pri-mary-foot-wd-fl-ex {display: block;}

.vis-ta-para-hm-pg-fl-ex {display: block;padding-top: 30px;}div#d4231 { width: 100%;}

div#d4a21 {width: 100%;}div#d4241 { width: 100%;}div#d4251 {width: 100%;}

.vist-rep-pari-hm-pg-wd-ov-al-con-wd {padding: 30px 20px 20px 20px;}

div#adef43 {margin: 0px;}

/* aside#custom_html-5 {padding: 25px 25px 30px 25px;} */

.vist-rep-pari-hm-pg-wd-ov-al-con-wd1 {padding: 25px 25px 2px 25px !important;}

/* aside#custom_html-6 {padding: 25px 25px 30px 25px;} */

/* aside#custom_html-7 {padding: 25px 25px 30px 25px;} */

li.elementor-icon-list-item a {font-size: 13px;font-weight: 300;font-family: "Roboto",sans-serif;color: rgba(255, 255, 255, 0.9);}

p.vis-ta-sp-ov-al-cnt-pra {color: rgba(255, 255, 255, 0.9);font-size: 14px;font-weight: 400;line-height: 1.7em;font-family: "Roboto",sans-serif;
    margin-top: 0;margin-bottom: 40px;}

.vis-ta-sh-wd-ov-tit-cont-para {margin-bottom: 40px;}

.vist-rp-pair-hm-pg-ov-al-bk-grd-clr { /* max-width: 1140px; */margin-left: auto;/* position: relative; */margin-right: auto;/* min-height: 50px; */
    display: inline-block;align-items: center;margin-top: -100px !important;width: 100%;text-align: center;
}

.col-md-12 {display: block;min-height: 85px;}}

/* header */



div#myHeader1 {max-width: 1525px;min-height: 90px;margin-left: auto;margin-right: auto;}

.site-logo1 a img {width: 230px;height: auto;}

.col-md-3 ul li {list-style: none;}

.col-md-3 ul li a {text-decoration: none;}

.col-md-14 {display: flex;}

ul#menu-menu-head1 {display: flex;margin-right: auto;margin-top: 0px;margin-bottom: 0px;padding-top: 35px;padding-bottom: 34px;}

ul#menu-menu-head1 ul.sub-menu {display: none;}

.col-md-6 {width: 19.344%;}

ul#menu-menu-head1 li a {color: #000000;padding-left: 9px;padding-right: 9px;padding-top: 5px;padding-bottom: 5px;font-family: "Voces", Sans-serif;font-size: 15px;font-weight: 400;line-height: 20px;}

section#head-wd-bd {box-shadow: 0px 10px 20px 0px rgb(0 0 0 / 10%);margin-top: 0px;z-index: 10;}

div#main-menu ul li {padding-left: 15px; padding-right: 15px; padding-top: 5px; padding-bottom: 5px;font-family: "Roboto",sans-serif;font-weight: 500;line-height: 20px;}

div#main-menu ul li {margin-right: 25px;}

.site-logo1 {padding: 20px 10px 10px 10px;}

/* ul#menu-menu-head1 li a:after {content: '\f107';font-family: 'FontAwesome';line-height: 1;padding: 10px 0 10px 10px;} */

ul#menu-menu-head1 li:first-child a:after {content: '';padding:0px;}

ul#menu-menu-head1 li:nth-child(5) a:after {content: '';padding:0px;}

ul#menu-menu-head1 li:nth-child(7) a:after {content: '';padding:0px;}

ul#menu-menu-head1 li:last-child a:after {content: '';padding:0px;}

ul#menu-menu-head1 li:hover .sub-menu {display: block;z-index: 3;}

ul.sub-menu {position: absolute;background-color: #fff;box-shadow: 0px 2px 15px 0px rgb(0 0 0 / 10%);margin-left: 0px;padding:0px;}

ul#menu-menu-head1 ul.sub-menu li a:after {content: '';}

ul#menu-menu-head1 .sub-menu li a {font-size: 13px;font-family: "Voces", sans-serif;margin: 0px;padding: 10px 20px 0px 25px;}

ul#menu-menu-head1 .sub-menu li {border-bottom: 1px solid darkgray;margin:0px;padding:5px;}

ul#menu-menu-head1 .sub-menu li:last-child {border-bottom: none;}

ul.tm-mega-menu.menu.tm-mega-menu.mega-menu-direction-horizontal.total-columns-12 {display: none !important;}

.menu-item.menu-item-type-post_type.menu-item-object-page.menu-item-home.current-menu-item.page_item.page-item-8.current_page_item.menu-item-19 a:active{color:#51CAFF;}

/* ul#menu-menu-head1 li a:after{float:right;padding:0px;font-size: 16px;line-height: 1;padding: 10px 0 10px 10px;margin-top: -10px;margin-bottom: -10px;color: #282828;font-family: "Font Awesome 5 Free";font-weight: 900;content: "";} */

div#main-menu ul li a:hover{border-bottom:2px solid #51CAFF;}

ul#menu-menu-head1-1 li:nth-child(1) a {color: #51CAFF;}

ul#menu-menu-head1-1 ul.sub-menu li:nth-child(1) a {color: #282828;}

.view{color: #51CAFF;}

@media (max-width:767px){
div#main-menu ul li a:hover{border-bottom:0px solid #51CAFF;}

ul#menu-menu-head1-1 li:nth-child(1) a {color: #51CAFF;}

.site-logo1 a img {width: 550px;max-width: 50%;}

.col-md-6 {width: 100%;text-align: center;}

.site-logo1 {margin-top: 20px;padding:0px;}

.col-md-14 {display: block;}

ul.tm-mega-menu.menu.tm-mega-menu.mega-menu-direction-horizontal.total-columns-12.responsive {display:block !important;visibility: visible;
    opacity: 1;z-index: 1;transform: translateY(0%);transition-delay: 0s, 0s, 0.3s;}

ul.tm-mega-menu.menu.tm-mega-menu.mega-menu-direction-horizontal.total-columns-12 {display: none !important;}.fa-bars:before { content: "\e816";}

ul.tm-mega-menu.menu.tm-mega-menu.mega-menu-direction-horizontal.total-columns-12 {position: absolute;z-index: -1;width: 100%;background-color: #ffffff;
    visibility: hidden;opacity: 0;top: 100%;left: 0;transform: translateY(-2em);transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;}

i.fa.fa-bars { display: inline-block; font-family: 'eicons'; font-size: inherit; font-weight: 400; font-style: normal; font-variant: normal; line-height: 1; text-rendering: auto; -webkit-font-smoothing: antialiased;
   }

ul.sticky-menu.left.always {padding: 0px;}

.vis-ta-shp-ov-al-wd-me-nu {text-align: center;}

ul#menu-menu-head1{padding:0px;}

ul#menu-menu-head1.active{padding:0px;}

/* ul#menu-menu-head1 li a {padding-left: 15px;padding-right: 15px;padding-top: 5px;padding-bottom: 5px;font-size: 15px;color: #000000;line-height: 20px;font-family: sans-serif;font-weight: 500;} */

/* ul#menu-menu-head1 li a:after{float:right;padding:0px;font-size: 16px;line-height: 1;padding: 10px 0 10px 10px;margin-top: -10px;margin-bottom: -10px;color: #282828;font-family: "Font Awesome 5 Free";font-weight: 900;content: "";} */
ul#menu-menu-head1 .sub-menu li{border-bottom:none;}

/* ul#menu-menu-head1 li a:after{float:right;padding:0px;}ul#menu-menu-head1 .sub-menu li{border-bottom:none;}

ul.sub-menu {position: relative;background-color: #fff;box-shadow: none;} */

ul#menu-menu-head1 .sub-menu li a{padding-left: 15px;padding-right: 15px;padding-top: 5px;padding-bottom: 5px;font-size: 15px;color: #000000;line-height: 12px;font-family: "Roboto",sans-serif;font-weight: 500;}

.col-md-8{display:none;}.site-logo a img {width: 550px;max-width: 46%;margin:0px;min-height: 30px;}.col-md-4 {float: none;width: 100%;padding-left: 0px;}

.site-logo {text-align: center;margin-top: 0px;min-height: 30px;min-width:300px;padding: 15px 0 0 17px;}

.sticky {

position: fixed;

top: 0;

width: 100%;

z-index: 9;

background-color: #ffffff;

}



.sticky + .content {

padding-top: 102px;

}
ul#menu-menu-head1 li a{font-family: "Roboto", Sans-serif;font-weight:500;padding-left: 0px;padding-right: 0px;}
div#myHeader {box-shadow: 0px 10px 20px 0px rgb(0 0 0 / 10%);}
}



div#main-menu ul li#menu-item-19 {background-color: #00B0FD;margin-right: 0px !important;}

div#main-menu ul li#menu-item-19 a{color: #FFFFFF;}

div#main-menu ul li{margin-right:0px;}

.vis-ta-re-pair-primry-head-lo-wid-get{min-height: 113px;}





@media (min-width:1025px){

.vis-ta-shp-ov-al-wd-me-nu {display: none;}}

@media (min-width:768px){

    ul#cl1 {display: none;}

}
/*banner*/
.vist-re-paur-mn-cint-back-ig-ov-al-wd {min-height: 720px;}

.vist-shp-re-inv-vis-rp-ov-al-bgrnd {min-height: 720px;}

/* .vis-ta-sh-re-de-wd-ad {min-height: 720px;} */

.vist-pri-pg-wd-ov-al-str {min-height: 250px;}

.vis-pri-pg-wd-oc-al-st{min-height:90px;}

.plugin-section {min-height: 38px;}

.trt_img {background-position: top right;background-repeat: no-repeat;background-size: cover;min-height: 720px;background-attachment: fixed;z-index:9999;position: relative;}

.pric-ban-tit {background-color: #51CAFF;opacity: 0.3;/*transition: background 0.3s, border-radius 0.3s, opacity 0.3s;*/min-height:720px;}

/* .vis-pri-pg-wd-oc-al-st {min-height: 90px;} */

.vist-pri-pg-wd-ov-al-str {text-align: center;position: absolute;display: flex;flex-direction: column;align-items: center;width: 100%;justify-content: center;z-index:1;padding-top: 182px;}

h2.vis-hm-pg-ban-sec-frt-tit {color: #FFFFFF;font-family: "Voces", Sans-serif;font-size: 50px;text-shadow: 0px 0px 10px rgb(0 0 0 / 80%);margin: 0px;min-height: 74px;margin-bottom:5px;line-height: 1;font-weight: 600;padding: 0;}

/* section.animation-element.bounce-up.in-view {min-height: 192px;} */

.vist-pri-pg-wd-ov-al-str img{min-height:90px;min-width: 411px;
    /* opacity: 0.1; */
    margin-left: -6px;}

.vis-pri-pg-wd-oc-al-st {margin-bottom: 20px;}

@media (max-width:767px){

.vist-pri-pg-wd-ov-al-str{/*width:100% !important;*/height:350px !important;min-height: 350px !important;padding:0px}.vis-pri-pg-wd-oc-al-st img {display: none;}
h2.vis-hm-pg-ban-sec-frt-tit{font-size:18px !important;padding: 0px 10px 25px 10px;min-height:0px !important;margin-top: -70px;}

.trt_img{/*background-position:bottom;min-height:425px;background-position: top right;*/background-repeat: no-repeat;background-size: cover;
     min-height: 545px; background-attachment: inherit;background-position: -335px -100px;z-index: 9999;position:relative;}
     
.pric-ban-tit{min-height:445px;}

.vis-ta-re-pair-primry-head-lo-wid-get {min-height: 85px !important;}

.vist-shp-re-inv-vis-rp-ov-al-bgrnd {min-height: 545px;}

.vis-ta-sh-re-de-wd-ad {min-height: 545px;}

section.animation-element.bounce-up.in-view {min-height: 345px;}

.vis-ta-re-pa-ir-ban-un-sec-bor-bx{min-height: 345px;}

}

@media (max-width:1024px){

    .vist-pri-pg-wd-ov-al-str{height:500px;width:100%;padding: 0px;}h2.vis-hm-pg-ban-sec-frt-tit{font-size:40px;/*min-height:180px;*/}

}
/* @media (min-width: 1440px) and (max-width: 2559px)  {
    .vist-pri-pg-wd-ov-al-str{width:1440px;}
}
@media (min-width: 2560px){
    .vist-pri-pg-wd-ov-al-str{width:2560px;}
} */


.vis-ta-sh-re-cpm-vist-re-pair-hm-sec-lst-cnt-wd { clear: both;}

.vis-ta-re-pair-cpm-vist-my-be-cl-wh-nd {max-width: 830px;margin-left: auto;margin-right: auto;padding-top:10%;}

.vis-ta-rep-pair-cmt-sec-ov-al-sp {padding: 10px;}

.vis-ta-lst-para p {color: #7a7a7a;font-family: "Roboto",sans-serif;line-height: 1.5;font-size: 1rem;margin-bottom: 0.9rem;margin-top: 0px;font-weight: 400;}

 .vis-ta-rep-pair-hm-sec-emp-ty-sect {height: 92px;max-width: 1140px;} 

@media (min-width: 768px) and (max-width: 1024px)  {

.col-md-4{width:20%;}.col-md-8{width:80%;padding-left:22px;}.site-logo a img{width:100%;margin-top:45px;}h3.elementor-icon-box-title{font-size:13px;}

p.elementor-icon-box-description{font-size:12px;}div#myHeader{padding: 0px 20px;}

.vis-ta-re-pair-primry-head-lo-wid-get {min-height: 85px !important;}

.vis-ta-sh-wd-ov-tit-cont-para {margin-bottom: 30px;}

.vis-ta-para-hm-pg-fl-ex {display: block;width: 100%;}

div#d4a21 {width: 40%;float: left;}

div#d4231 {width: 40%;float: left;}

div#d4241 {width: 12%;float: left;}

div#d4251 {width: 95%;float: left;}
}
@media (min-width: 768px) and (max-width: 991px)  {

ul#menu-menu-head1-1{padding: 0px 25px 0px 25px !important;}
}

.vis-ta-shp-bl-sec-ov-al-rep-sec-cl {max-width: 1200px;margin-left: auto;margin-right: auto;padding-top:10%;}

.vis-ta-shp-vi-rep-lst-bl-sec-tit h2 {color: #484848;font-size: 37px;font-weight: 500;font-family: "Roboto",sans-serif;text-align: center;padding: 0px;margin: 0px;line-height: 1;}

.vis-ta-rep-pair-ov-al-fl-ex-dena {display: flex;flex-wrap: wrap;}

.vis-ta-rep-pair-ov-al-blck-sec { width: 33.333%;}

.vis-ta-rp-ov-al-wd-sec-ig {box-shadow: 0px 0px 20px 0px rgb(0 0 0 / 24%);transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin: 3% 3% 3% 3%;padding: 14% 14% 14% 14%;border-radius: 15px 15px 15px 70px;/*height:215px*/}

.vis-ta-ph-rep-sec-sp-mr-gn {text-align: center;height:170px;}

.van-welk-sec-img {width: 100%;margin:auto;}

.van-welk-sec-img a img {max-width: 100%;height: 158px;transition-duration: 0.3s;object-fit: contain;}

.vist-ta-re-pair-img-sec-ov-l-wd { margin-bottom: 20px;}

.vis-ta-wel-sec-fl-sec-tit-ane-val {text-align: center;}

.vis-ta-wel-sec-fl-sec-tit-ane-val span {font-family: "Montserrat", Sans-serif;font-size: 16px;font-weight: bold;fill: #51caff;color: #51caff;background-color: rgba(255,255,255,0);padding: 0px 0px 0px 0px;}

.fa, .fas {font-family: "Font Awesome 5 Free";font-weight: 900;}

i.fas.fa-arrow-right:before {content: "\f061";}

.vist-ta-welk-sec-fl-lex-sec { display: flex; align-items: center;transition: all .3s;}

.vist-ta-welk-sec-fl-lex-sec:hover, .vist-ta-welk-sec-fl-lex-sec:focus {transform: scale(1.1);}

@media (max-width:767px){

.vis-ta-rep-pair-ov-al-fl-ex-dena {display: block;flex-wrap: nowrap;}

.vis-ta-rp-ov-al-wd-sec-ig{padding:10%;/*height:175px;*/}

.vis-ta-rep-pair-ov-al-blck-sec {width: 88%;margin: auto;}.van-welk-sec-img{width:100%;}

.vis-ta-wel-sec-fl-sec-tit-ane-val span{font-size:12px;}

/* .widget-area0 { width: 97% !important;} */

.widget-area1 {width: 80% !important;}

.widget-area2 {width: 50% !important;}

.widget-area3 {width: 26% ;float: right;position: relative;bottom: 200px;right: 45px;}

.van-welk-sec-img a img {max-width: 100%;height: 150px;}

.elementor-widget-container12 {width: 100% !important;}

img.image.wp-image-10.attachment-full.size-full {width: 85% !important;}







}

@media screen and (min-width:768px) and (max-width:1024px){

    .vis-ta-rp-ov-al-wd-sec-ig{/*height:150px;*/}.vis-ta-rep-pair-ov-al-fl-ex-dena{padding:0 5%;}

    .vis-ta-wel-sec-fl-sec-tit-ane-val span{font-size:12px;}.vis-ta-shp-vi-rep-lst-bl-sec-tit h2{padding-bottom:6%;}

    .vis-ta-rep-pair-ov-al-pri-mary-foot-wd-fl-ex {display: block;}

    .van-welk-sec-img a img {max-width: 100%; height: 100px;}

    .pric-ban-tit {min-height: 540px;}

    .trt_img {min-height: 540px;background-attachment: inherit;}

    .vis-ta-ic-on-sec-bef-sec.fas.fa{margin-right: 25px !important;}

    .vis-ta-rp-sec-ban-un-num-tit{font-size: 15px;}

    .wrapper{margin-top:150px !important;}

    .vis-ta-rep-at-al-sec-meest-sec-cl{margin-top:200px !important;}

    .vis-ta-rep-at-al-sec-meest-sec-im-fl-ex{display: flex !important;}

   

}
@media (min-width: 768px){

    .vis-vis-ta-rep-at-al-sec-meest-frt-sec-frst-part.animation-elements1.slide-left.in-views1 {width: 37.545%;}

    .vis-vis-ta-rep-at-al-sec-meest-frt-sec-scnd-part.animation-elements23.slide-right.in-view23 {width: 62.455%;}

    .vis-ta-rep-meest-sec-scnd-accu-img{margin-right:0px;}

}


.vis-ta-re-pair-foot-cont-wid {display: contents;}

.widget-area1 {width: 20.702%;}

.widget-area0 {width: 33.684%;}

.widget-area2 {width: 16.667%;}

.elementor-widget-container12 {width: 28.925%;}

.widget-area3 { /*width: 75%; float: right;*/text-align: center;margin: 35px 10px 0px 0px;}

img.image.wp-image-10.attachment-full.size-full {width: 36%;}

.vis-ta-re-pa-ir-ban-un-sec-bor-bx {max-width: 1200px;margin-left: auto;margin-right: auto;position: relative;min-height:192px;}

.vis-ta-re-pa-ir-ban-un-sec-ani-eft {min-height: 93px;}

.vis-ta-re-pa-ir-ban-un-sec-ov-al-fl-ex {display: flex;}

.vis-ta-rep-ir-ban-us-rep-ov-al-wd {width: 25%;min-height: 93px;}

.vis-ta-rep-air-sec-al-cont-al { border-style: solid; border-width: 0px 1px 0px 0px; border-color: #d7d7d9; transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s; padding: 0px 0px 0px 0px;}

.vis-ta-rep-sec-cont-bder-wd {-webkit-transition: background .3s,border .3s,-webkit-border-radius .3s,-webkit-box-shadow .3s;transition: background .3s,border .3s,-webkit-border-radius .3s,-webkit-box-shadow .3s;-o-transition: background .3s,border .3s,border-radius .3s,box-shadow .3s; transition: background .3s,border .3s,border-radius .3s,box-shadow .3s;transition: background .3s,border .3s,border-radius .3s,box-shadow .3s,-webkit-border-radius .3s,-webkit-box-shadow .3s;}

span.elementor-counter-number {color: #000000;font-family: "Montserrat", Sans-serif;font-size: 45px;font-weight: 700;line-height: 1;}

.vis-ta-rp-sec-ban-un-num-tit {color: #4a4a4a;font-family: "Montserrat", Sans-serif;font-size: 18px;font-weight: 300;text-transform: capitalize;text-align:center;min-height: 26px;line-height: 2.5;margin-top: -1px;}

.vis-ta-rp-sec-cnt-sp-fnt-sz {text-align: center;/*min-height: 67px;*/}

.vis-ta-re-pa-ir-ban-sec-un-wd {border-style: solid;border-width: 0px 0px 4px 0px;border-color: #51CAFF;box-shadow: 0px 0px 30px 0px rgb(0 0 0 / 15%);transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin: -90px 0px 0px 0px;padding: 50px 20px 42px 20px;background-color: #ffffff;}

.vis-ta-rep-ir-ban-us-rep-ov-al-wd:last-child .vis-ta-rep-air-sec-al-cont-al {border: none;}



@media (max-width:1024px){

.vis-ta-re-pa-ir-ban-sec-un-wd{margin: -85px 15px 15px 15px;}

span.elementor-counter-number{font-size:34px;}.vis-ta-re-pa-ir-ban-un-sec-ov-al-fl-ex{flex-wrap:wrap;}

.vis-ta-rp-sec-ban-un-num-tit{font-size:15px;}



}

@media (max-width:767px){

/* .vis-ta-rep-air-sec-al-cont-al {border-width: 0px 0px 1px 0px;margin:0px 15px 15px 15px;padding: 0px 0px 30px 0px;}  */

.vis-ta-rep-ir-ban-us-rep-ov-al-wd:nth-child(1) .vis-ta-rep-air-sec-al-cont-al{border-width: 0px 0px 1px 0px;margin:0px 15px 30px 15px;padding: 0px 0px 30px 0px;}

.vis-ta-rep-ir-ban-us-rep-ov-al-wd:nth-child(2) .vis-ta-rep-air-sec-al-cont-al{border-width: 0px 0px 1px 0px;margin:0px 15px 30px 15px;padding: 0px 0px 30px 0px;}

.vis-ta-rep-ir-ban-us-rep-ov-al-wd:nth-child(3) .vis-ta-rep-air-sec-al-cont-al {border: none;margin:20px 0px 0px 0px;padding: 0px 0px 0px 0px;}

.vis-ta-rep-ir-ban-us-rep-ov-al-wd:nth-child(4) .vis-ta-rep-air-sec-al-cont-al{border: none;margin:10px 0px 0px 0px;padding: 0px 0px 0px 0px;min-width: 128px;}

.vis-ta-rep-ir-ban-us-rep-ov-al-wd {width: 50%;}

}
@media screen and (min-width:320px) and (max-width:768px){
    .vis-ta-re-pa-ir-ban-sec-un-wd{margin: -185px 15px 15px 15px;}
    .vist-re-paur-mn-cint-back-ig-ov-al-wd {min-height: 545px;}
}
@media screen and (min-width: 768px) and (max-width: 1024px){
.vis-ta-re-pa-ir-ban-sec-un-wd {margin: -265px 15px 15px 15px;padding: 50px 20px 24px 20px;}
.vis-ta-rep-sec-wlk-sec-img img{min-width: 20% !important;}
}


ul#menu-menu-head1-1 {display: flex;margin: 0px;padding: 0px 0px 0px 0px;min-height: 46px;}

ul#menu-menu-head1-1 li {list-style: none;padding: 7px 0px 0px 0px;}

ul#menu-menu-head1-1 li a {text-decoration: none;}

#main-menu2 a:active{color: #51CAFF;}

ul#menu-menu-head1-1 li a {font-size: 15px;font-weight: 500;padding-left: 0px;padding-right: 0px;padding-top: 5px;padding-bottom: 5px;line-height: 20px;font-family: "Roboto",sans-serif;color:#282828;padding: 12px 20px 0px 22px;}

/* ul#menu-menu-head1-1 li a:after {content: '\f0d7 ';font-family: 'Fontawesome';font-size: 16px;line-height: 1;padding: 10px 0 10px 10px;margin-top: -10px;margin-bottom: -10px;} */

.vis-hm-sh-re-inv-vis-rep-sec-menu-sec-wd { padding: 0px;min-height:46px;}

ul#menu-menu-head1-1 li:first-child a:after {content: '';padding:0px;}

ul#menu-menu-head1-1 li:nth-child(5) a:after {content: '';padding:0px;}

ul#menu-menu-head1-1 li:nth-child(7) a:after {content: '';padding:0px;}

ul#menu-menu-head1-1 li:last-child a:after {content: '';padding:0px;}

ul#menu-menu-head1-1 li:hover .sub-menu {display: block ;z-index: 3;}
@media (min-width:768px){
    ul#menu-menu-head1-1 li:hover .sub-menu {display: block !important;z-index: 3;}   
}

.vis-hm-sh-re-inv-vis-rep-sec-menu-sec-wd {max-width: 930px;margin-left: auto;margin-right: auto;min-height:45px;}

.col-md-22 {min-height: 46px;}

ul#menu-menu-head1-1 ul.sub-menu li a:after {content: '';}

ul#menu-menu-head1-1 .sub-menu li a {font-size: 13px;font-family: "Voces", sans-serif;margin: 0px;padding: 0px 0px 0px 17px;}

ul#menu-menu-head1-1 .sub-menu li {border-bottom: 1px solid #E8E8E8;margin:0px;padding:5px;}

ul#menu-menu-head1-1 .sub-menu li:last-child {border-bottom: none;}

ul#menu-menu-head1-1 ul.sub-menu{box-shadow:none;}

div#main-menu2 ul li a:hover {color: #51caff;}

div#main-menu2 .sub-menu {display: none;}

div#main-menu2 ul li a:active {color: #51caff;}

.vis-ta-shp-ov-al-wd-me-nu2{display:none;}

@media (max-width:767px){

ul.tm-mega-menu.menu.tm-mega-menu.mega-menu-direction-horizontal.total-columns-14.responsive {display:block !important;}

ul.tm-mega-menu.menu.tm-mega-menu.mega-menu-direction-horizontal.total-columns-14 {display: none !important;}

a.left-off-canvas-toggle.active{color:#51CAFF;border: 2px solid #51CAFF;} 

a.left-off-canvas-toggle {color: #000;padding: 4px 4px 2px 4px;border: 2px solid #000;font-size:15px;}

.fa-bars:before { content: "\e816";}

i.fa.fa-bars { display: inline-block; font-family: 'eicons'; font-size: inherit; font-weight: 400; font-style: normal; font-variant: normal; line-height: 1; text-rendering: auto; -webkit-font-smoothing: antialiased;width:15px;}

ul.sticky-menu.left.always {padding: 0px;margin: 0px;margin-top: 17px;padding-bottom: 10px;}

.vis-ta-shp-ov-al-wd-me-nu1 {text-align: center;}

ul#menu-menu-head1-1{padding:0px;}

ul#menu-menu-head1-1 li a {padding-left: 10px;padding-right: 15px;padding-top: 0px;padding-bottom: 0px;font-size: 15px;color: #000000;line-height: 20px;font-family: "Roboto",sans-serif;font-weight: 400;display: block !important;flex-direction: row-reverse !important;}

/* ul#menu-menu-head1-1 li a:after{float:right;padding:0px;} */

ul#menu-menu-head1 .sub-menu li{border-bottom:none;}

ul.sub-menu {position: relative;background-color: #fff;box-shadow: none;padding-left: 10px;padding-right: 15px;}

ul#menu-menu-head1-1 .sub-menu li a{/*padding-left: 15px;padding-right: 15px;padding-top: 5px;padding-bottom: 5px;*/font-size: 15px;color: #000000;line-height: 20px;font-family: "Roboto",sans-serif;font-weight: 400;padding: 5px 0px 5px 5px;}

#main-menu2 > ul > li a:first-child >{color: #51caff;}

i.fa.fa-bars {display: inline-block;font-family: 'eicons';font-size: inherit;font-weight: 400;font-style: normal;font-variant: normal;line-height: 1;text-rendering: auto;-webkit-font-smoothing: antialiased;}

.fa-bars1:before {content: "\e816";}

a.left-off-canvas-toggle1 { text-decoration: none;}

.vis-ta-shp-ov-al-wd-me-nu2 {text-align: center;display:block;}

ul.sticky-menu.left.always2 {list-style: none;padding: 0px;margin: 0px;padding-top: 15px;}

a.left-off-canvas-toggle2 {color: #000;padding: 2.7px .25em;font-size: 22px;cursor: pointer;border: 0 solid;border-radius: 3px;
    background-color: rgba(0,0,0,.05);}
a.left-off-canvas-toggle2.active{color:#51CAFF;} 

i.fa.fa-bars2 {display: inline-block;font-family: 'eicons';font-size: inherit;font-weight: 400;font-style: normal;font-variant: normal;
    line-height: 1;text-rendering: auto;-webkit-font-smoothing: antialiased;width: 22px;}

.fa-bars2:before {content: "\e816";}

ul.menu {display: none !important;}

ul.menu {position: relative;z-index: 100;width: 100%;background-color: #ffffff;}

ul.menu.responsives{display: block !important;}

ul#menu-menu-head1-1 li{border-bottom: 1px solid #E8E8E8;}

span.newSpan{margin-top: 0px !important;padding: 0px 0 10px 10px !important;}

ul#menu-menu-head1-1 .sub-menu li{padding:0px;}




}

@media screen and (min-width:768px) and (max-width:991px){
    ul#menu-menu-head1-1 li a{padding:10px 5px;}

    span.newSpan{margin-top: 12px !important;}

    .myauto.cross{height:260px !important;}
}

@media (min-width:768px){

.vis-ta-shp-ov-al-wd-me-nu1 { display: none;}

.vis-ta-rep-meest-sec-rep-schrm-sec-img-tit-fl-ex {display: flex !important;margin: 15px 0px 15px 0px;}

}

.vis-ta-rep-sec-wlk-sec-img img {max-width: 100%;min-height: 65px;min-width: 65px;margin-bottom: 14px;}

.vis-ta-rep-sec-wlk-sec-img { width: 20%;margin:auto;min-height:65px;margin-bottom: 15px;}

.vis-ta-rep-cont-sec-ov-strt {min-height: 129px;}

.vis-ta-rep-pair-ban-aft-service-fl-ex {display: flex;min-height: 253px;}

.vis-ta-rep-frt-rep-wd-aply {width: 33.333%;min-height:253px}

section#wrap-sec-animte {margin-top: 150px;margin-bottom: 0px;padding: 50px 0px 50px 0px;}

.wrapper {max-width: 1140px;margin-left: auto;margin-right: auto;margin-top:71px;min-height:253px;}

.vis-ta-rep-sec-wlk-in-ser-sec-spc {text-align: center;padding:25px 25px 25px 25px;min-height:203px;}

h3.vist-elementor-wlk-in-serv-tit {color: #51CAFF;font-size: 25px;font-weight: 400;font-family: "Roboto",sans-serif;margin-top: .5rem;margin-bottom: 10px;min-height:36px;line-height: 1.2;}

p.vist-elementor-wlkin.serv-description {color: #bfbfbf;font-size: 16px;font-weight: 300;line-height: 1.6em;font-family: "Roboto",sans-serif;margin:0px;min-height:76px;}



.frame{height:100%;width:100%;background-position:center;background-size:cover;min-height: 253px;}

.vis-ta-rep-pair-ka-em-sec-zm-eft {min-height: 253px;}

.frame{-webkit-animation: zoomeffect 2s ; -moz-animation: zoomeffect 2s ; animation: zoomeffect 2s ;}

@-webkit-keyframes zoomeffect{

0%{background-position:center;transform:scale(0,0);}}

@keyframes zoomeffect{

0%{background-position:center;transform:scale(0,0);}}

@media (max-width:767px){

.wrapper { max-width: 768px;margin-top: 150px;}.vis-ta-rep-frt-rep-wd-aply { width: 100%;}h3.vist-elementor-wlk-in-serv-tit{font-size:20px;}.vis-ta-rep-sec-wlk-in-ser-sec-spc{padding:0px;}

section#wrap-sec-animte{padding: 25px 20px 50px 20px;}.vis-ta-rep-pair-ban-aft-service-fl-ex {display: block;}}

@media (max-width: 1024px){

.wrapper{max-width:1025px;}h3.vist-elementor-wlk-in-serv-tit{font-size:20px;}.vis-ta-rep-sec-wlk-in-ser-sec-spc{padding:15px;}.vist-rep-pari-hm-pg-wd-ov-al-con-wd1{padding: 65px 20px 26px 20px;}div#adef43 {margin: 0px;}.widget-area0 { width: 100%;}

.vis-ta-re-pair-foot-cont-wid {display: flex;}.widget-area1 {width: 30%;}.widget-area2 { width: 25%;}.widget-area3 { width: 120px; float: right; position: relative; bottom: 169px; left: -148px;}

}

@media screen and (min-width:768px) and (max-width:1024px){
    .vis-ta-rep-meest-sec-scnd-accu-img img {max-width: 100%;height: auto;min-height: 0px !important;width: 30px !important;}
    .vis-ta-rep-meest-sec-scnd-accu-img {width: 17% !important;margin-right: 14px;margin-top: 5px !important;}
    .vis-ta-rep-meest-sec-rep-scherm-rep-wd{margin:0px !important;}
    .vis-ta-rep-meest-sec-rep-schrm-sec-img-tit-fl-ex{margin: 20px 20px 20px 20px !important;}
    .vis-ta-rep-meest-sec-scnd-accu-img{margin-right:5px !important;}
    .vis-ta-rep-at-al-sec-meest-sec-wd{padding-top: 4%;padding-bottom: 10%;}
    .vist-ta-rep-meest-sec-rep-prt-ov-al-scherm{margin: 0px 0px 0px 0px !important;}
    .elementor-widget-container12 {width: 100%;}
    .widget-area3 {text-align: center;margin: 0px 0px 0px 0px;}
    img.image.wp-image-10.attachment-full.size-full {position: absolute;width: 100%;}
    
}

.vis-ta-rep-cont-sec-ov-strt a {text-decoration: none;}

.vis-ta-rep-at-al-sec-meest-sec-cl {background-color: #F0F0F0;margin-top: 242px;}

.vis-ta-rep-at-al-sec-meest-sec-im-fl-ex {display: flex;}

.vis-vis-ta-rep-at-al-sec-meest-frt-sec-frst-part {width: 37.545%;}

.vis-vis-ta-rep-at-al-sec-meest-frt-sec-scnd-part { width: 62.455%;}

.vis-ta-rep-meest-sec-frt-prt-wd-sec {padding: 10px;}

.vis-ta-rep-at-al-sec-meest-sec-wd { max-width: 1385px; margin-left: auto; margin-right: auto;padding-top:45px;padding-bottom:3.7%;}

.vis-ta-rep-meest-sec-frt-prt-tit h2 {color: #484848;font-size: 33px;font-weight: 500;font-family: "Roboto",sans-serif;line-height: 1;margin: 0;
    padding: 0;margin-bottom: 20px;margin-top:15px;}

.vis-ta-rep-meest-sec-frt-prt-tit p {color: #7a7a7a;font-family: "Roboto",sans-serif;margin-top: 0px;margin-bottom: 34px;line-height: 1.5;font-weight:400;}

.vis-ta-rep-meest-sec-but-link a {text-decoration: none;color: #ffffff;font-family: "Roboto",sans-serif;}

.vis-ta-rep-meest-sec-but-link {background-color: #3F3F3F;font-size: 15px;width: 190px;text-align: center;padding: 9px 0px;transition: all .3s;font-family: "Roboto",sans-serif;
    font-weight: 500;color: #ffffff;}

.vis-ta-rep-meest-sec-but-link:hover, .vis-ta-rep-meest-sec-but-link:focus {transform: scale(1.1);}

.vis-vis-ta-rep-at-al-sec-meest-frt-sec-scnd-part-wd {padding: 10px;}

.vis-meest-snd-prt-scnd-fl-ex {display: flex;flex-wrap: wrap;}

.vist-ta-rep-meest-sec-rep-prt-ov-al-scherm {width: 50%;margin:0px 20px 0px -20px;}

.vist-ta-rep-meest-sec-rep-prt-ov-al-scherm:nth-child(3) {margin-top:25px;}

.vist-ta-rep-meest-sec-rep-prt-ov-al-scherm:nth-child(4) {margin-top:25px;}

.vist-ta-rep-meest-sec-rep-prt-ov-al-scherm:nth-child(5) {margin-top:25px;}

.vist-ta-rep-meest-sec-rep-prt-ov-al-scherm:nth-child(6) {margin-top:25px;}

.vis-ta-rep-meest-sec-rep-scherm-rep-wd {margin: 15px 15px 15px 15px;}

.vis-ta-rep-meest-sec-rep-schrm-sec-img-tit-fl-ex { display: flex;}

.vis-ta-rep-meest-sec-scnd-accu-img img {max-width: 100%;height:auto;min-height: 43px;width: 43px;}

.vis-ta-rep-meest-sec-scnd-accu-img { width: 13%; margin-right: 15px;}

h3.elementor-image-box-title {color: #484848;font-size: 25px;font-weight: 400;font-family: "Roboto",sans-serif;margin-top: .5rem;margin-bottom: 1rem;line-height: 1.2;}

@media (max-width:1024px){

.vis-ta-rep-at-al-sec-meest-sec-im-fl-ex {display: block;}

.vis-vis-ta-rep-at-al-sec-meest-frt-sec-frst-part {width: 100%;}

.vis-ta-rep-meest-sec-frt-prt-tit h2{font-size:25px;}

.vis-ta-rep-meest-sec-frt-prt-wd-sec {padding: 10px;}

.vis-ta-rep-meest-sec-rep-schrm-sec-img-tit-fl-ex {display: block;}

.vis-ta-rep-meest-sec-scnd-accu-img{width:35%;}

.vis-vis-ta-rep-at-al-sec-meest-frt-sec-scnd-part {width: 100%;}

h3.elementor-image-box-title{font-size:20px;}}

@media (max-width:767px){

.vis-ta-re-pair-foot-cont-wid{display:block;}

.widget-area3{ float: right; position: relative;bottom: 200px !important;left: -10px !important;margin:20px 0px 0px 0px;}


.vis-ta-rep-at-al-sec-meest-sec-wd{padding-top: 10%;padding-bottom:20%;}
.vist-ta-rep-meest-sec-rep-prt-ov-al-scherm {padding-bottom: 10px;margin: 0px 0px 0px 0px;}
}

.vis-ta-rep-con-wd-pa-ra-sec {margin-left: 15px;}

.vis-sel-bt-wr-bij-moo-rm-bck-clr-frg {background-color: #F0F0F0;}

.vis-sl-bt-bij-moo-clr-sec-fl-ex {display: flex;width:100%;}

.vis-sl-bt-wr-bij-moo-rm-clr-sec-wd {max-width: 1385px;margin: auto;position: relative;}

.vis-sl-bt-bij-sec-k-srf-bk-cl { width: 50%; background-color: #51CAFF;border-radius: 15px 0px 0px 15px;padding:10px;}

/* .vis-sl-bt-bi-sec-nck-clr-sp-ce { padding: 10px;} */

h2.ele-ment-or-con-sp-or-tit {color: #FFFFFF;font-size: 30px;font-weight: 500;font-family: "Roboto",sans-serif;margin: 0px;padding: 0px;line-height: 1;margin-bottom:20px}

.vis-ta-bt-sec-ke-tit-trck {margin: 15px 0px 0px 15px;}

/* .vis-ta-rep-con-wd-pa-ra-sec {margin: 0px 0px 0px 15px;} */

.vis-sl-bt-bij-sec-k-srf-bk-cl.animation-elements1.slide-left.in-views1 {width: 50%;}

.vis-ta-moo-rm-sec-bck-clr.animation-elements23.slide-right.in-view23 {width: 50%;padding: 0px 0px 0px 19px;}

.vis-sl-bt-bi-sec-nck-clr-sp-ce {margin: 0px 3px 0 0px;}

p.ele-men-tor-sec-frt-cont { margin-bottom: .9rem; color: #FFFFFF; font-size: 17px; line-height: 1.5em; font-family: "Roboto",sans-serif; font-weight: 600;margin:0px;margin-bottom:14px}

p.ele-men-tor-sec-scnd-cont { margin-bottom: .9rem; margin: 0px; color: #FFFFFF; font-size: 17px; line-height: 1.5em; font-family: "Roboto",sans-serif; font-weight: 400;margin-bottom:44px;}

.vis-ta-moo-rm-sec-bck-clr {width: 50%;background-color: #3F3F3F;border-radius: 0px 15px 15px 0px;}

.vis-ta-mo-rm-sec-bck-sec-ke-sp-ce { padding: 10px;margin-bottom: 10px;}

h2.vis-ta-mor-ram-titi {color: #FFFFFF; font-size: 30px; font-weight: 500; font-family: "Roboto",sans-serif;margin: 10px 0px -10px 0px;/*margin-bottom: 20px;*/}

h3.elementor-icon-box-title-cust-cd span {font-size: 22px;font-weight: 400;margin-bottom: 5px;color: #FFFFFF;font-family: "Roboto",sans-serif;}

.vis-ta-ic-on-sec-bef-sec:before { content: "\f058"; font-family: "Font Awesome 5 Free";}

.vis-ta-rm-dv-sec-ic-on-to-fl-ex {display: flex;}

.vis-ta-ic-on-sec-bef-sec { margin-right: 20px;}

.vis-ta-ic-on-sec-bef-sec:before {content: "\f058";font-family: "Font Awesome 5 Free";position: absolute;left: 50%;width: 1em;height: 1em;position: relative;fill: #51CAFF !important;color: #51CAFF;

border-color: #51CAFF;font-size: 27px;text-align: center;font-weight:900;margin-right:-30px}

.myauto {display: block;} 

.splide__arrows {display: none;}

img {vertical-align: middle;}}





/* Slideshow container */

.slideshow-container {padding-bottom:3.7%;position: relative;}

.text {color: #737373;font-size: 14px;line-height: 1.5;text-align: center;font-family: "Roboto",sans-serif;font-weight: 700;margin-top: 25px;}

.myauto.cross {width: 728px;margin-right: 10px;margin: auto;padding: 20px;height:200px;}

.numbertext {color: #000000;font-family: "Voces", Sans-serif;font-size: 18px;text-align: center;font-style: italic;line-height: 1.5;}

.dot { transition: background-color 0.6s ease; width: 6px; height: 6px; display: inline-block; -webkit-border-radius: 50%; border-radius: 50%; background: #000; opacity: .2; cursor: pointer;margin: 0 4px;}

.slideshow-container .active {opacity:1;}



/* Fading animation */

/* .fade {

  -webkit-animation-name: fade;

  -webkit-animation-duration: 1.5s;

  animation-name: fade;

  animation-duration: 1.5s;

}



@-webkit-keyframes fade {

  from {opacity: .4} 

  to {opacity: 1}

}



@keyframes fade {

  from {opacity: .4} 

  to {opacity: 1}

} */



/* On smaller screens, decrease text size */

@media only screen and (max-width: 300px) {

  .text {font-size: 11px}

}



.vist-wat-kla-tan-bck-clr {background-color: #F0F0F0;padding-bottom:4%;}

h2.elementor-heading-tit-cust1 {color: #565656;font-family: "Voces", Sans-serif;font-size: 30px;font-weight: 500;padding: 0;margin: 0;line-height: 1;text-align: center;/*margin-bottom: 20px;*/}

.vis-ta-rep-war-kal-str-ig-fl-ex { display: flex;padding-top: 3%;}

i.elementor-star-full:before {content: "\e934";display: block;font-family: inherit;position: absolute;overflow: hidden;color: #FFD200;top: 0;left: 0;font-size: 21px;}

.vis-ta-rep-st-plu-cust-dv { color: #ccd6df; font-family: "eicons"; display: inline-block; width: 50%;position: relative;top: 11px}

.vis-ta-rep-sr-sec-plu-str {width: 50%;position: relative;/*padding-left: 15px;*/}

h2.elementor-heading-tit-cust {color: #727272;font-size: 14px;font-weight: 400;line-height: 2.4em;font-family: "Roboto",sans-serif;}

/* .vist-rep-wat-kla-tan-wd {padding: 3.7% 0;} */

span.elementor-button-icon.elementor-align-icon-right {font-family: "Montserrat", Sans-serif;font-size: 16px;font-weight: bold;fill: #51caff;color: #51caff;background-color: rgba(255,255,255,0);padding: 0px 0px 0px 0px;margin-left: 10px;}

.vis-ta-ig-tit-wd-cl {position: relative;left: 40px;}

.vis-ta-rep-tot-li-nk-to-cont a {font-size: 17px;fill: #3F3F3F;color: #3F3F3F;background-color: #FFFFFF;text-decoration: none;font-family: "Roboto",sans-serif;padding: 10px 24px;line-height: 1;font-weight: 500;}

/* .vis-ta-rep-con-wd-pa-ra-sec {margin-bottom: 40px;} */

.vis-ta-rep-tot-li-nk-to-cont {margin-left: 20px;transition: all .3s;width: 160px;}

.vis-ta-rep-tot-li-nk-to-cont:hover, .vis-ta-rep-tot-li-nk-to-cont:focus {transform: scale(1.1);width: 160px;}

.vis-ta-rm-mr-dv-sec-mar-bot-sp {border-bottom: 1px solid #fff;width: 54%;padding-top: 20px;padding-bottom: 12px;}

h3.elementor-icon-box-title-cust-cd{margin-top: .5rem;margin-bottom: 5px;}

@media screen and (min-width:320px) and (max-width:767px){

.vis-sl-bt-bij-moo-clr-sec-fl-ex {display: block;}.vis-sl-bt-bij-sec-k-srf-bk-cl{width:95%;}.vis-ta-moo-rm-sec-bck-clr{width:100%;}h2.ele-ment-or-con-sp-or-tit{font-size:19px !important}

.vis-ta-rep-tot-li-nk-to-cont{margin-bottom:7%;}h2.vis-ta-mor-ram-titi{font-size:20px;padding-left:15px;padding-top: 15px;margin:0px;}h3.elementor-icon-box-title-cust-cd span{font-size:15px;}

.vis-ta-rm-dv-sec-ic-on-to-fl-ex {display: block;}h3.elementor-icon-box-title-cust-cd{text-align:center;margin-top:20px;}.vis-ta-ph-rep-sec-sp-mr-gn{height:145px;}

.vis-ta-rm-mr-dv-sec-mar-bot-sp{width:63%;margin:auto;padding-top:10px;padding-bottom:10px;}.myauto.cross{width:294px;padding:10px;height:350px;}h2.elementor-heading-tit-cust1{font-size:20px;}

.vis-ta-ig-tit-wd-cl {position: relative;left: 50px;}

.vis-ta-rep-con-wd-pa-ra-sec{margin: 0px 0px 20px 15px;}

.vis-ta-rep-war-kal-str-ig-fl-ex {padding-top: 20%;}

}

@media (max-width:1024px){

p.ele-men-tor-sec-frt-cont{font-size:15px;margin-bottom: .9rem;}p.ele-men-tor-sec-scnd-cont{font-size:15px;}h2.ele-ment-or-con-sp-or-tit{font-size:20px;}h2.vis-ta-mor-ram-titi{font-size:20px;margin: 15px 0px 0px 15px;}

h3.elementor-icon-box-title-cust-cd span{font-size:15px;}

.vis-ta-ic-on-sec-bef-sec.fas.fa{margin-right:0px;}

}

@media screen and (min-width:768px) and (max-width:1023px){

.myauto.cross{width:409px;}.vis-ta-rm-mr-dv-sec-mar-bot-sp {border-bottom: 1px solid #fff;width: 65%;padding-top: 8px;padding-bottom: 0px;}.vis-ta-rep-tot-li-nk-to-cont{margin-bottom:6%;}

.vis-ta-ph-rep-sec-sp-mr-gn{height:100px;}.vis-ta-ig-tit-wd-cl{left:12px;}

h3.elementor-icon-box-title-cust-cd {margin-top: 0rem;margin-left: 10px;}

ul#menu-menu-head1-1 li{padding:0px;}

span.newSpan{float: right;padding: 0px;font-size: 16px;line-height: 1;/* padding: 10px 0 10px 10px; */ margin-top: 12px;/* margin-bottom: -10px; */
    color: #282828;font-family: "Font Awesome 5 Free";font-weight: 900;content: ""; margin-left: 0px !important;}
}

@media screen and (min-width:1024px) and (max-width:1335px){

    .vis-ta-rm-mr-dv-sec-mar-bot-sp{padding-top:2px;padding-bottom:2px;}.vis-ta-rep-at-al-sec-meest-sec-im-fl-ex{display:flex;}.vis-ta-rep-tot-li-nk-to-cont{margin-bottom:4.5%;}

    .vis-ta-ph-rep-sec-sp-mr-gn{height:125px;}.vis-ta-ig-tit-wd-cl{left:36px;}

}

.animation-element {

    position:unset !important;}

    .bounce-up  {

  opacity: 0;

  -moz-transition: all 700ms ease-out;

  -webkit-transition: all 700ms ease-out;

  -o-transition: all 700ms ease-out;

  transition: all 700ms ease-out;

  -moz-transform: translate3d(0px, 60px, 0px);

  -webkit-transform: translate3d(0px, 60px, 0px);

  -o-transform: translate(0px, 60px);

  -ms-transform: translate(0px, 60px);

  transform: translate3d(0px, 60, 0px);

  -webkit-backface-visibility: hidden;

  -moz-backface-visibility: hidden;

  backface-visibility: hidden;

}



.bounce-up.in-view  {

  opacity: 1;

  -moz-transform: translate3d(0px, 0px, 0px);

  -webkit-transform: translate3d(0px, 0px, 0px);

  -o-transform: translate(0px, 0px);

  -ms-transform: translate(0px, 0px);

  transform: translate3d(0px, 0px, 0px);

}

.animation-elements1 {

  opacity: 0;

  position: relative;

}

/*animation element sliding left*/



.animation-elements1.slide-left { opacity: 0; -moz-transition: all 500ms linear;/* -webkit-transition: all 500ms linear; -o-transition: all 500ms linear; transition: all 500ms linear;

-moz-transform: translate3d(-100px, 0px, 0px);-webkit-transform: translate3d(-100px, 0px, 0px);-o-transform: translate(-100px, 0px);-ms-transform: translate(-100px, 0px);

transform: translate3d(-100px, 0px, 0px);*/position:unset;right:400px;}

.animation-elements1.slide-left.in-views1 {opacity: 1;-moz-transform: translate3d(0px, 0px, 0px);-webkit-transform: translate3d(0px, 0px, 0px);-o-transform: translate(0px, 0px);

/*-ms-transform: translate(0px, 0px);transform: translate3d(0px, 0px, 0px);*/position:unset;right:0px;}



 /* @keyframes zoomIn {

  0% {

    opacity: 0;

    transform: scale(0.5);

  }

  100% {

    opacity: 1; 

    transform: none;

  } 

}

.zoomIn {

  animation-name: zoomIn;

}  */

.animation-elements23 {position: relative;}

.animation-elements23.slide-right {

        -webkit-transition: all 500ms ease;

        -moz-transition: all 500ms ease;

        -o-transition: all 500ms ease;

        transition: all 500ms ease;

        opacity: 0;

        -moz-transform: translate3d(50px, 0px, 0px);

        -webkit-transform: translate3d(50px, 0px, 0px);

        -o-transform: translate(50px, 0px);

        -ms-transform: translate(50px, 0px);

        transform: translate3d(50px, 0px, 0px);

        position: absolute;

    right: -400px;

    }

	

	 .slide-right.in-view23 {

        opacity: 1;

        -moz-transform: translate3d(0px, 0px, 0px);

        -webkit-transform: translate3d(0px, 0px, 0px);

        -o-transform: translate(0px, 0px);

        -ms-transform: translate(0px, 0px);

        transform: translate3d(0px, 0px, 0px);

        position:relative;right:0px;

    }



.vist-ta-rep-meest-sec-rep-prt-ov-al-scherm:hover {background-color: #ffffff;border-radius: 15px;transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}

section.animation-elements1.slide-left.in-views1 {min-height:720px;max-height:720px;height:720px;}

section.animation-element.bounce-up.in-view {min-height: 192px;}

@media screen and (min-width:320px) and (max-width:767px){

  .vis-ta-rep-at-al-sec-meest-sec-cl{overflow:hidden;margin-top: 200px;}

  .vist-sel-bt-wr-nij-moo-rm-snd-met-sec {overflow: hidden;}

  .animation-elements23.slide-right{position: relative;right: 0px;}

  .vis-ta-moo-rm-sec-bck-clr.animation-elements23.slide-right.in-view23 {width: 100%;padding: 0px 0px 0px 0px;}

  .vis-sl-bt-bij-sec-k-srf-bk-cl.animation-elements1.slide-left.in-views1 {width: 95%;}

  .vis-ta-mo-rm-sec-bck-sec-ke-sp-ce {padding: 10px;margin-bottom: 0px;}

  section.animation-elements1.slide-left.in-views1{min-height:545px;max-height: 545px;height: 545px;}

}

.vis-ta-shp-vi-rep-lst-bl-sec-tit {padding-bottom: 3.75%;}

span.newSpan {float: right;padding: 0px;font-size: 16px;line-height: 1;/*padding: 10px 0 10px 10px;*/margin-top: 15px;margin-bottom: -10px;color: #282828;font-family: "Font Awesome 5 Free";font-weight: 900;
    content: "";margin-left: -10px;margin-right: 17px;}

.menu-item-has-children span.newSpan:after {content: '\f0d7';}

i.elementor-star-full:before { content: "\e934"; display: block; font-family: inherit; position: relative; overflow: hidden; color: #FFD200; top: 0; left: 0; font-size: 21px;}

i.elementor-star-full {display: inline-block;position: relative;font-style: normal;cursor: default;}.elementor-star-rating {color: #ccd6df;font-family: 'eicons';display: inline-block;font-size: 21px;}

span.elementor-screen-only { position: absolute; top: -10000em; width: 1px; height: 1px; margin: -1px; padding: 0; overflow: hidden; clip: rect(0,0,0,0); border: 0;}

i.elementor-star-7:before { content: "\e934"; display: block; font-size: inherit; font-family: inherit; position: relative; overflow: hidden;color: #FFD200;top: 0;left: 0;width: 70%;}

i.elementor-star-7 {display: inline-block;position: relative;font-style: normal;cursor: default;z-index: 22222222;}

i.elementor-star-7-add {display: inline-block;position: relative;font-style: normal;cursor: default;z-index: 2222222;left:-27px;}

i.elementor-star-7-add:before {content: "\e934";display: block;font-size: inherit;font-family: inherit;position: relative;
    overflow: hidden;color: #ccd6df;top: 0;left: 0;width: 100%;z-index: 222222;}

.elementor-star-rating__wrapper {float: right;}

/* 26.07.2021 */

.vis-ta-mo-rm-sec-bck-sec-ke-sp-ce .vis-ta-rm-mr-dv-sec-mar-bot-sp:nth-child(3) .vis-ta-ic-on-sec-bef-sec:before {content: "\f164";}

.vis-ta-mo-rm-sec-bck-sec-ke-sp-ce .vis-ta-rm-mr-dv-sec-mar-bot-sp:nth-child(4) .vis-ta-ic-on-sec-bef-sec:before {content: "\f554";}

.vis-ta-mo-rm-sec-bck-sec-ke-sp-ce .vis-ta-rm-mr-dv-sec-mar-bot-sp:nth-child(5) .vis-ta-ic-on-sec-bef-sec:before {content: "\f54f";}

.vis-ta-mo-rm-sec-bck-sec-ke-sp-ce .vis-ta-rm-mr-dv-sec-mar-bot-sp:last-child .vis-ta-ic-on-sec-bef-sec:before {content: "\f0a3";}

.vis-ta-ic-on-sec-bef-sec.fas.fa {/*width: 1em;*/height: 1em;position: relative;display: block;margin-right: 50px;/*margin-left: 10px;*/}

ul#menu-menu-head1-1 li a {display: flex;flex-direction: row-reverse;}

ul.sub-menu li a span:after {display: none;}

ul.sub-menu li a {display: block !important;}

  .zoom-in {

    -webkit-transform: scale(0);

    transform: scale(0);



    -webkit-transition: all .8s ease-in-out;

    transition: all .8s ease-in-out;

}  
i.fa.fa-bars.resp:before {content: '\2716'!important;}
.animation {color: #fff;}








/*popup*/


.vis-rep-pop-max{max-width:1140px;margin-left:auto;margin-right:auto;position:relative;margin-top: 9px;}

.vis-rep-pop-wid{width:100%;}

.vis-rep-pop-head-pad{padding:10px;margin-bottom: 10px;}

/* .vis-rep-pop-left-mar {margin: 10px 0px 0px 0px;} */

h2.vis-rep-pop-hed {color: #000;font-size: 18px;padding: 0;margin: 0;line-height: 1;font-family: "Roboto",sans-serif;font-weight: 600;}

.vis-rep-pop-wid2{width:100%;display:flex;}

.vis-rep-pop-left{width:50%;}

.vis-rep-pop-right{width:50%;}

.vis-rep-pop-left-pad{padding:10px;}

.vis-rep-pop-right-pad{padding:10px;}

.vis-rep-pop-left-image img{vertical-align: middle;display: inline-block;height: auto;max-width: 100%;border: none;-webkit-border-radius: 0;border-radius: 0;
    -webkit-box-shadow: none;box-shadow: none;width: 220px;}

.vis-rep-pop-right-mar {margin: 2px 0px 0px 20px;}

.vis-rep-pop-right-button a{color: #FFFFFF;background-color: #51CAFF;border-radius: 0px 0px 0px 0px;display: inline-block;line-height: 1;
    /* background-color: #818a91; */font-size: 15px;padding: 12px 24px;/* -webkit-border-radius: 3px; *//*border-radius: 3px;*/text-align: center;-webkit-transition: all .3s;
    -o-transition: all .3s; transition: all .3s; text-decoration: none; font-family: "Roboto",sans-serif; font-weight: 500;}

.vis-rep-pop-end {justify-content: flex-end;align-items: flex-end;display: flex;pointer-events: none;background-color: transparent;-webkit-user-select: auto;
    -moz-user-select: auto;-ms-user-select: auto;user-select: auto; /* justify-content: flex-end; *//* align-items: flex-end; *//* display: -webkit-box; */
    position: fixed;height: 100%;width: 100%;bottom: 0;left: 0;/* background-color: rgba(0,0,0,.8); */z-index: 9999;-webkit-user-select: none;-moz-user-select: none;
    -ms-user-select: none;user-select: none;display: -ms-flexbox;}
.vis-rep-pop-end-shad { animation-duration: 1s; box-shadow: 2px 8px 23px 3px rgb(0 0 0 / 20%); width: auto; overflow: visible; max-width: 100%; max-height: 100%; border-radius: 0;
    margin: auto;background-color: #fff;position: absolute;width: 450px;height: 130px;}
.vis-rep-pop-end-shad-end {font-size: 15px;color: #495157;padding: 0px 0px 0px 0px;font-weight: 500;}
.vis-rep-pop-close {right: 2.5%;display: block;top: -6%;font-size: 22px;right: 11px;opacity: 1;z-index: 9999;pointer-events: all;cursor: pointer;
    position: absolute;margin-top: 0px;line-height: 1;}
i.pop-close {color: #FF0000;display: inline-block;font-family: 'eicons';font-size: inherit;font-weight: 400;font-style: normal;font-variant: normal;line-height: 1;
    text-rendering: auto;-webkit-font-smoothing: antialiased;}
i.pop-close:before {content: "\e87f";}

section#homepop {display: block;}


@media screen and (min-width:320px) and (max-width:767px){
    h2.vis-rep-pop-hed {margin-top: 15px;}
    .vis-rep-pop-right-mar {margin: 0px 0px 0px 0px;}
    .vis-rep-pop-wid2 {margin-top: -25px;}
}
section.all-pg-pop {display: none;}
html body .activeopen ul.sub-menu {display: block !important;}
ul.sub-menu {display: none !important;}
i.fa.fa-bars2.respon:before {content: '\2716'!important;}
.van-welk-sec-img img:hover {transform: translateY(-8px);}
/*all page pop*/
.all-page-pop{background: #1a1919;display: none;z-index: 998;clear: both;margin: 0 auto;position: fixed;bottom: 0;left: 0;width: 100%;overflow: hidden;padding: 10px 5px;
    box-sizing: border-box;}
.all-page-pop-left {width: 100%;display: flex;}
.all-page-pop-right {width: 100%;display: flex;}
.all-page-pop-left a {background: #56c2ee;color: #fff;display: block;padding: 10px;border-radius: 21px;height: 34px;line-height: 14px;font-size: 14px;margin: 0 5px;
    text-transform: uppercase;font-weight: normal;text-align: center;box-sizing: content-box;text-decoration: none !important;width: 100%;box-sizing: border-box;}
span.all-page-pop-left-span {transform: translatey(-3px) rotateY( 180deg );font-family: 'dashicons';display: inline-block;line-height: 1;font-weight: 400;font-style: normal;
    speak: never;text-decoration: inherit;text-transform: none;text-rendering: auto;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;
    width: 20px;height: 20px;font-size: 20px;vertical-align: top;text-align: center;transition: color .1s ease-in;}
span.all-page-pop-left-span:before {content: "\f525";}
.all-page-pop-right a {background: #7bd850;color: #fff;display: block;padding: 10px;border-radius: 21px;height: 34px;line-height: 14px;font-size: 14px;margin: 0 5px;
    text-transform: uppercase;font-weight: normal;text-align: center;box-sizing: content-box;text-decoration: none !important;width: 100%;box-sizing: border-box;}

span.all-page-pop-right-span {transform: translatey(-3px) rotateY( 180deg );font-family: 'dashicons';display: inline-block;line-height: 1;font-weight: 400;font-style: normal;
    speak: never;text-decoration: inherit;text-transform: none;text-rendering: auto;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;
    width: 20px;height: 20px;font-size: 20px;vertical-align: top;text-align: center;transition: color .1s ease-in;}
span.all-page-pop-right-span:before {content: "\f230";}
section.all-pg-pop {display: none;}
@media screen and (min-width:320px) and (max-width:767px){
    .all-page-pop{background: #1a1919;DISPLAY: flex;z-index: 998;clear: both;margin: 0 auto;position: fixed;bottom: 0;left: 0;width: 100%;overflow: hidden;padding: 10px 5px;
    box-sizing: border-box;}
.all-page-pop-left {width: 50%;display: flex;}
.all-page-pop-right {width: 50%;display: flex;}
.all-page-pop-left a {background: #56c2ee;color: #fff;display: block;padding: 10px;border-radius: 21px;height: 34px;line-height: 14px;font-size: 14px;margin: 0 5px;
    text-transform: uppercase;font-weight: normal;text-align: center;box-sizing: content-box;text-decoration: none !important;width: 100%;box-sizing: border-box;}
span.all-page-pop-left-span {transform: translatey(-3px) rotateY( 180deg );font-family: 'dashicons';display: inline-block;line-height: 1;font-weight: 400;font-style: normal;
    speak: never;text-decoration: inherit;text-transform: none;text-rendering: auto;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;
    width: 20px;height: 20px;font-size: 20px;vertical-align: top;text-align: center;transition: color .1s ease-in;}
span.all-page-pop-left-span:before {content: "\f525";}
.all-page-pop-right a {background: #7bd850;color: #fff;display: block;padding: 10px;border-radius: 21px;height: 34px;line-height: 14px;font-size: 14px;margin: 0 5px;
    text-transform: uppercase;font-weight: normal;text-align: center;box-sizing: content-box;text-decoration: none !important;width: 100%;box-sizing: border-box;}

span.all-page-pop-right-span {transform: translatey(-3px) rotateY( 180deg );font-family: 'dashicons';display: inline-block;line-height: 1;font-weight: 400;font-style: normal;
    speak: never;text-decoration: inherit;text-transform: none;text-rendering: auto;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;
    width: 20px;height: 20px;font-size: 20px;vertical-align: top;text-align: center;transition: color .1s ease-in;}
span.all-page-pop-right-span:before {content: "\f230";}
section.all-pg-pop {display: block;}
}


/*home search*/
div.asl_m textarea:focus, div.asl_m input:focus {
    outline: 2px solid #333;
}
#ajaxsearchlite1 .probox:focus-within, div.asl_w .probox:focus-within {
    border: 2px solid #333;
}
div.asl_w:focus-within{
    border: 2px solid #333;
}
 div.asl_w .probox .promagnifier{display:none;}
 div.asl_m .proinput input.orig{margin: 0px 330px 0px 0px !important;padding: 0 0 0px 0px !important;}
 #ajaxsearchlite1 .probox, div.asl_w .probox{/*padding: 4px 0px 3px 15px;border: 0px solid #e1e5eb;border-radius: 3px;*/}
  div.asl_w{border: 0px solid #e1e5eb;border-radius: 3px;padding:2px 2px;
    /* height:37px; */
    box-shadow: none;} 
 /* #ajaxsearchlite1 .probox, div.asl_w .probox:focus {border: 1px solid #22211b;} */
  div.asl_m .probox .proinput{margin:0px;padding:0px;}
 div#ajaxsearchliteres1{width: 536.4px !important; !important;top: 580px !important;left: 486.9px !important;border-radius: 3px;border: 1px solid #e1e5eb;padding-top: 6px;
    padding-bottom: 6px;box-shadow: 0px 0px 10px 0px rgb(0 0 0 / 50%);}
div.asl_w, div.asl_w *, div.asl_r, div.asl_r *, div.asl_s, div.asl_s *{fill: #4054B4;}
div.asl_m .probox .proclose svg{background-color: #fff;padding: 3px;margin-top: -8px;margin-left: -20px;}
div[id*='ajaxsearchlite'].wpdreams_asl_container{width: 524px;padding: 0px 0px 0px 18px;margin:1px 0px 0px -7px;}
div.asl_r .results .asl_nores{padding: 0px 10px;color: #333;font-size: 16px;font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif;text-align:left;}
#ajaxsearchlite1 .probox .proinput input, div.asl_w .probox .proinput input{font-size:14px; line-height:1.3;}
div[id*='ajaxsearchlite'].wpdreams_asl_container:focus{border: 1px solid #000 !important;}
@media screen and (min-width:320px) and (max-width:767px){
    div.asl_m .proinput input.orig{margin: 0px 0px 0px 0px !important;padding: 0 0 0px 0px !important;}
    div[id*='ajaxsearchlite'].wpdreams_asl_container{width: 260px;padding: 0px 0px 0px 20px;margin:1px 0px 0px 0px;}
    div#ajaxsearchliteres1{width: 270px !important;top: 350px !important;}
}
@media screen and (min-width:320px) and (max-width:375px){
    div#ajaxsearchliteres1{left: 19px !important;}
}
@media screen and (min-width:375px) and (max-width:425px){
    div#ajaxsearchliteres1{left: 48px !important;}
}
@media screen and (min-width:425px) and (max-width:767px){
    div#ajaxsearchliteres1{left: 73px !important;}
}
@media screen and (min-width:767px) and (max-width:991px){
    div[id*='ajaxsearchlite'].wpdreams_asl_container {width: 325px;}
    div.asl_m .proinput input.orig{margin: 0px 0px 0px 0px !important;padding: 0 0 0px 0px !important;}
    div.asl_r .results .asl_nores{padding: 0px;}
    div#ajaxsearchliteres1 {width: 330px !important;top: 490px !important;left: 215px !important;}
    h2.vis-hm-pg-ban-sec-frt-tit{margin-bottom: -8px;}
}
@media screen and (min-width:991px) and (max-width:1199px){
    div[id*='ajaxsearchlite'].wpdreams_asl_container {width: 460px;}
    div.asl_m .proinput input.orig{margin: 0px 0px 0px 0px !important;padding: 0 0 0px 0px !important;}
    div.asl_r .results .asl_nores{padding: 0px;}
    div#ajaxsearchliteres1 {width: 466px !important;top: 490px !important;left: 274px !important;}
}

@media screen and (min-width:425px) and (max-width:768px){
    .vis-ta-re-pair-cpm-vist-my-be-cl-wh-nd {
    max-width: 830px; margin-left: 0; margin-right: 0; padding-top: 10%;}
    }
@media screen and (min-width:767px) and (max-width:1024px){
    .vis-ta-ic-on-sec-bef-sec:before{font-size:19px;}
}




</style>

</head>

<body  <?php body_class(); ?> class="vist_over-al-str">

<section class="vis-ta-re-pair-primry-head-lo-wid-get" >

    <div class="main-head" id="myHeader">



        <div class="col-md-12" >



            <div class="col-md-4">



                <div class="site-logo">
                    <div class="site-img">
                    <a href="<?php echo site_url();?>">

                        <?php



                        $way = get_theme_mod('custom_logo');



                        $image = wp_get_attachment_image_src($way, 'full');



                        ?>



                        <img src="<?php echo $image[0]; ?>" alt="logo-image" class="logo">

                    </a>

</div>

                </div>

            </div>



            <div class="col-md-8">

                

                    <?php



                    if (is_active_sidebar('sidebar-1')) : ?>



                        <div id="secondary" class="widget-area" role="complementary">



                            <?php dynamic_sidebar('sidebar-1'); ?>



                        </div>



                    <?php endif; ?>





                    <?php



                    if (is_active_sidebar('sidebar-2')) : ?>



                        <div id="secondary" class="widget-area" role="complementary">



                            <?php dynamic_sidebar('sidebar-2'); ?>



                        </div>



                    <?php endif; ?>





                    <?php



                    if (is_active_sidebar('sidebar-3')) : ?>



                        <div id="secondary" class="widget-area" role="complementary">



                            <?php dynamic_sidebar('sidebar-3'); ?>



                        </div>



                    <?php endif; ?>



            





            </div>
            <div class="vis-ta-shp-ov-al-wd-me-nu">

                <div class="vis-ta-shp-ov-al-wd-me-nu-new">

                        <ul id="cl1" class="sticky-menu left always">



                            <li class="toggle-sidebar menu-icon">



                                <a href="Javascript:void(0);" class="left-off-canvas-toggle" onclick="myFunction()">



                                    <i id="menu01" class="fa fa-bars" onclick="myFunction34()"></i>



                                </a>



                            </li>



                        </ul>
                    
                </div>



            </div>


            <div class="col-md-3">



                <?php wp_nav_menu(array('theme_location' => 'menu-head1', 'container_id' => 'main-menu', 'container_class' => '', 'menu_class' => 'tm-mega-menu menu tm-mega-menu mega-menu-direction-horizontal total-columns-12')); ?>



            </div>

        </div>

      
    </div>

</section>