<html>

<head lang="nl">
<script src="https://www.googletagmanager.com/gtag/js?id=UA-44162241-1"  type="text/javascript" data-cfasync="false" async></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-44162241-1');
</script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_title', true); ?> | VistaRepair</title>
<?php if(get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true)!=''){  ?>
<meta name="description" content="<?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true); ?>">
<?php }else{ 
    $my_post = get_post(get_the_ID()); 
    //echo "<pre>"; print_r($my_post);
  $my_excerpt = $my_post->post_excerpt;?>
<meta name="description" content="<?php echo $my_excerpt;  ?>">
<?php } ?>


<?php  wp_head() ?>
  <?php if(is_page(413) || is_page(10557)) {?>
  <link rel="stylesheet" href="/wp-content/themes/vistarepair/assets/css/custom-carousel.css">
  <?php } ?>
<?php if(!is_front_page()){?>
        <link rel="stylesheet" href="https://vistarepair.nl/wp-content/themes/vistarepair/assets/css/repair.css">
        <!-- <script src="https://vistarepair.nl/wp-includes/js/jquery/jquery.min.js"></script> -->
<?php } ?>    
        
<?php if(is_page('1461')) { ?>  
        <script src='https://www.google.com/recaptcha/api.js' async defer ></script>       
        <!-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<?php } ?>

<?php if(is_page_template('ipad-air-achterkant-vervangen.php')):?>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<?php endif; ?>

  <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
<?php if(is_page([1516,1291,469,530,605,682,777,833,857,875,930,986,1016,1053,1107,1187,1215,1344,1134,1247,1297,1316,1327,1377,1446,1178,1504,267,286,289,306])): ?>
  <style>ul.sub-menu{top: 68px !important;}</style>
<?php endif; ?>

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

@font-face{font-family:'eicons';font-display: swap;src:url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/eicons.eot);src:url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/eicons.eot?#iefix) format("embedded-opentype"),url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/eicons.woff2) format("woff2"),url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/eicons.woff) format("woff"),url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/eicons.ttf) format("truetype"),url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/eicons.svg?#eicon) format("svg");font-weight:400;font-style:normal}

@font-face {font-family: 'Ubuntu';font-style: italic;font-weight: 300;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/v15/4iCp6KVjbNBYlgoKejZftVyPN4Q.ttf) format('truetype');}

@font-face {font-family: 'Ubuntu';font-style: italic;font-weight: 400;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/4iCu6KVjbNBYlgoKej70l0w.ttf) format('truetype');}

@font-face {font-family: 'Ubuntu';font-style: italic;font-weight: 500;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/4iCp6KVjbNBYlgoKejYHtFyPN4Q.ttf) format('truetype');}

@font-face {font-family: 'Ubuntu';font-style: italic;font-weight: 700;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/4iCp6KVjbNBYlgoKejZPslyPN4Q.ttf) format('truetype');}

@font-face {font-family: 'Ubuntu';font-style: normal;font-weight: 300;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/4iCv6KVjbNBYlgoC1CzjsGyI.ttf) format('truetype');}

@font-face {font-family: 'Ubuntu';font-style: normal;font-weight: 400;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/4iCs6KVjbNBYlgoKfw7z.ttf) format('truetype');}

@font-face {font-family: 'Ubuntu';font-style: normal;font-weight: 500;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/4iCv6KVjbNBYlgoCjC3jsGyI.ttf) format('truetype');}

@font-face {font-family: 'Ubuntu';font-style: normal;font-weight: 700;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts//4iCv6KVjbNBYlgoCxCvjsGyI.ttf) format('truetype');}

@font-face {font-family: 'Ubuntu Condensed';font-style: normal;font-weight: 400;font-display: swap;src: url(https://vistarepair.nl/wp-content/themes/vistarepair/assets/fonts/u-4k0rCzjgs5J7oXnJcM_0kACGMtT-Dfrg.ttf) format('truetype');}


body{margin: 0px;line-height:1.5;}


/* footer */

.widget-area {width: 33.333%;}

.vist-rep-pari-hm-pg-wd-ov-al-con-wd {background-color: #51CAFF;}

.vist-rp-pair-hm-pg-ov-al-bk-grd-clr {max-width: 1140px;margin-left: auto;margin-right: auto;min-height:50px;display: grid !important;align-items: center;}

.vis-ta-para-hm-pg-fl-ex {display: flex;}

h3.elementor-heading-title.elementor-size-default {color: #FFFFFF;font-size: 12px;font-weight: 300;font-family: sans-serif;line-height:1;margin:0px;}

.vist-ta-pa-ra-blk-cl {padding: 10px;}

p.elementor-heading-title.elementor-size-default {color: #FFFFFF;font-size: 12px;font-weight: 300;line-height: 1;font-family: sans-serif;margin:0px}

div#d4a21 {width: 24.561%;}

div#d4231 {width: 28.334%;}

div#d4241 {width: 30.614%;}

div#d4251 {width: 16.447%;}

.vist-ta-pa-ra-blk-cl p a {color: #FFFFFF;font-size: 12px;font-weight: 300;text-decoration: none;font-family: sans-serif;}

footer.vis-ta-rep-air-wd-fot-sec-dary {border-top: 2px solid #fff;}

.vist-ta-rep-pair-foot-pri-mary-ov-al-wd {max-width: 1140px;margin-left: auto;margin-right: auto;min-height: 220px;}

.vis-ta-rep-pair-ov-al-pri-mary-foot-wd-fl-ex {display: flex;}

.vist-rep-pari-hm-pg-wd-ov-al-con-wd1 {background-color: #51CAFF;padding: 65px 0px 30px 0px;min-height:220px;}

h4.vis-ta-rep-tit-wd-tg {color: #ffffff;font-size: 18px;font-weight: 500;font-family: sans-serif;margin: 0px;line-height: 1;margin-bottom:20px;}

div#adef43 {margin: 0px 80px 0px 0px;}

p.vis-ta-sp-ov-al-cnt-pra {color: rgba(255, 255, 255, 0.9);font-size: 14px;font-weight: 400;line-height: 1.7em;font-family: sans-serif;margin-top: 0;margin-bottom: .9rem;}

ul.elementor-icon-list-items {list-style: none;}

ul.elementor-icon-list-items {list-style: none;margin-top: 0px;padding: 0px;margin-bottom: .9rem;}

li.elementor-icon-list-item a {text-decoration: none;color: #fff;font-size: 14px;font-weight: 300;font-family: sans-serif;}


@media (max-width:767px){

footer.vis-ta-rep-air-wd-fot-sec-dary {
    margin-bottom: 5vmax;
}
.widget-area {width: 100%;}

.vis-ta-rep-pair-ov-al-pri-mary-foot-wd-fl-ex {display: block;}

.vis-ta-para-hm-pg-fl-ex {display: block;padding-top: 0px;}div#d4231 { width: 100%;}

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
    display: inline-flex;align-items: center;margin-top: -100px !important;width: 100%;text-align: center;
}

.col-md-12 {display: block;min-height: 85px;}}
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

img.image.wp-image-10.attachment-full.size-full {position: absolute;width: 100%;}
}


/* header */

div#myHeader1 {max-width: 1525px;min-height: 90px;margin-left: auto;margin-right: auto;background-color:#fff;box-shadow: 0px 0px 0px 0px rgb(0 0 0 / 10%);}

.site-logo1 a img {width: 225px;height: 50px;min-height: 50px;padding-left: 0px;}

.col-md-3 ul li {list-style: none;}

.col-md-3 ul li a {text-decoration: none;}

.col-md-14 {display: flex;}

ul#menu-menu-head1 {display: flex;margin-right: auto;margin-top: 0px;margin-bottom: 0px;padding-top: 32px;padding-bottom: 37px;}

ul#menu-menu-head1 ul.sub-menu {display: none;}

.col-md-6 {width: 19.344%;}

ul#menu-menu-head1 li a {color: #000000;padding-left: 9px;padding-right: 9px;padding-top: 5px;padding-bottom: 5px;font-family: "Voces", Sans-serif;font-size: 15px;font-weight: 400;line-height: 20px;}

section#head-wd-bd {box-shadow: 0px 10px 20px 0px rgb(0 0 0 / 10%);margin-top: 0px;z-index: 10;}

/* div#main-menu ul li {margin-right: 25px;    display: flex;-webkit-box-orient: horizontal;-webkit-box-direction: reverse;-ms-flex-direction: row-reverse;flex-direction: row-reverse;

-webkit-box-orient: horizontal; -webkit-box-direction: reverse; -ms-flex-direction: row-reverse; flex-direction: row-reverse;} */
div#main-menu ul li {/*padding-left: 15px;padding-right: 15px;*/padding-top: 5px;padding-bottom: 5px;font-family: "Roboto",sans-serif;font-weight: 500;line-height: 20px;margin-right: 30px;}

.successing {display: flex;}

.site-logo1 {padding: 20px 10px 10px 10px;}

/* ul#menu-menu-head1 li a:after {content: '\f107';font-family: 'FontAwesome';line-height: 1;padding: 10px 0 10px 10px;} */

ul#menu-menu-head1 li:first-child a:after {content: '';padding:0px;}

ul#menu-menu-head1 li:nth-child(5) a:after {content: '';padding:0px;}

ul#menu-menu-head1 li:nth-child(7) a:after {content: '';padding:0px;}

ul#menu-menu-head1 li:last-child a:after {content: '';padding:0px;}

ul#menu-menu-head1 li:hover .sub-menu {display: block ;z-index: 3;}
/* @media (min-width:1199px){
    ul#menu-menu-head1 li:hover .sub-menu {display: block !important;z-index: 3;}
}  */
@media screen and (min-width:768px) and (max-width:1024px){
    ul.sub-menu {position: relative !important;background-color: transparent !important;box-shadow: none !important;margin-left: 0px !important;padding: 0px !important;top: 0px !important;}
   
}

ul.sub-menu {position: absolute;background-color: #fff;box-shadow: 0px 2px 15px 0px rgb(0 0 0 / 10%);margin-left: 0px;padding:0px;top: 68px;}

ul#menu-menu-head1 ul.sub-menu li a:after {content: '';}

ul#menu-menu-head1 .sub-menu li a {font-size: 13px;font-family: "Voces", sans-serif;margin: 0px;padding: 10px 20px 0px 25px;}

ul#menu-menu-head1 .sub-menu li {border-bottom: 1px solid darkgray;margin:0px;padding:5px;display:block;}

ul#menu-menu-head1 .sub-menu li:last-child {border-bottom: none;}

span.newSpan {font-size: 10px;line-height: 1;padding: 10px 0 10px 0px;margin-top: -6px;margin-bottom: -10px;color: #282828;font-family: "Font Awesome 5 Free";font-weight: 900;
    float: right;content: "";}

.menu-item-has-children span.newSpan:after {content: ""!important;}

ul#menu-menu-head1 {display: flex;margin: 0px;padding: 0px;padding-top: 35px;padding-left: 45px;}

ul#menu-menu-head1-1 li a {display: flex;flex-direction: row-reverse;}


ul#menu-menu-head1 li a:hover{border-bottom:2px solid #51CAFF;}

ul#menu-menu-head1 .sub-menu li a {border-bottom:0px solid #51CAFF;}





i.fa.fa-bars { display: inline-block; font-family: 'eicons'; font-size: inherit; font-weight: 400; font-style: normal; font-variant: normal; line-height: 1; text-rendering: auto; -webkit-font-smoothing: antialiased;}

@media (max-width:767px){

.site-logo1 a img {width: 550px;max-width: 46%;margin: 0px;min-height: 30px;height:30px;}

.col-md-6 {width: 100%;text-align: center;}

.site-logo1 {text-align: center;margin-top: 0px;min-height: 30px;min-width: 300px;padding: 15px 0 0 17px;}

.col-md-14 {display: block;}

ul.tm-mega-menu.menu.tm-mega-menu.mega-menu-direction-horizontal.total-columns-12.responsive {display:block !important;transform: scaleY(1);max-height: 100vh;}

ul.tm-mega-menu.menu.tm-mega-menu.mega-menu-direction-horizontal.total-columns-12 {display: none !important;}.fa-bars:before { content: "\e816";}



ul.sticky-menu.left.always {padding: 0px;margin:0px;}

.vis-ta-shp-ov-al-wd-me-nu {text-align: center;padding-bottom: 15px;padding-top: 15px;}

ul#menu-menu-head1{padding:0px;position: absolute; z-index: 100; width: 100%; background-color: #ffffff;}

ul#menu-menu-head1 li a {padding-left: 15px;padding-right: 15px;padding-top: 5px;padding-bottom: 5px;font-size: 15px;color: #000000;line-height: 20px;font-family: sans-serif;font-weight: 500;}

/* ul#menu-menu-head1 li a:after{float:right;padding:0px;}ul#menu-menu-head1 .sub-menu li{border-bottom:none;} */

ul.sub-menu {position: relative;background-color: #fff;box-shadow: none;top:0px;}

ul#menu-menu-head1 .sub-menu li a{padding-left: 15px;padding-right: 15px;padding-top: 5px;padding-bottom: 5px;font-size: 15px;color: #000000;line-height: 20px;font-family: sans-serif;font-weight: 500;}

/* i.fa.fa-bars.active{color:#51CAFF;border: 2px solid #51CAFF;} */

/* div#main-menu ul li#menu-item-19 {background-color: #00B0FD;margin-right: 0px !important;} */

/* div#main-menu ul li#menu-item-19 a {color: #FFFFFF;} */

a.left-off-canvas-toggle {color: #000;padding: 4px 4px 2px 4px;border: 2px solid #000;font-size: 15px;}

a.left-off-canvas-toggle.active {color: #51CAFF;border: 2px solid #51CAFF;}

span.newSpan{font-size:16px;margin-right: 10px;}

.menu-item-has-children span.newSpan:after {content: "";}

/* .col-md-3 {height: 260px;} */

div#main-menu ul li{margin-right:0px;}

ul#menu-menu-head1 .sub-menu li {border-bottom: 0px solid darkgray;}






}
@media screen and (min-width:768px) and (max-width:1024px){
    
    .col-md-14 {display: block;}

    .vis-ta-shp-ov-al-wd-me-nu {text-align: center;padding-bottom: 30px;padding-top: 15px;}

    ul.sticky-menu.left.always {padding: 0px;margin: 0px;}

    a.left-off-canvas-toggle {color: #000;padding: .25em;border: 2px solid #000;}

    a.left-off-canvas-toggle.active {color: #51CAFF;border: 2px solid #51CAFF;}

    i.fa.fa-bars {display: inline-block;font-family: 'eicons';font-size: inherit;font-weight: 400;font-style: normal;font-variant: normal;line-height: 1;
    text-rendering: auto;-webkit-font-smoothing: antialiased;}

    ul#menu-menu-head1 {/* display: flex; */margin: 0px;padding: 0px; padding-top: 0px; padding-bottom: 25px;position: absolute;z-index: 100;width: 100%;
    background-color: #ffffff;display:none;}

    span.newSpan{font-size:16px;margin-right: 2vmax;}

    .menu-item-has-children span.newSpan:after {content: "";}

    div#main-menu ul li{margin-right:0px;padding-top: 10px;padding-bottom: 10px;}

    ul#menu-menu-head1 .sub-menu li {border-bottom: 0px solid darkgray;padding: 8px;}

    /* div#main-menu ul li#menu-item-19 {background-color: #00B0FD;margin-right: 0px !important;}

    div#main-menu ul li#menu-item-19 a {color: #FFFFFF;} */
    ul#menu-menu-head1 .sub-menu li a{font-size:14px;}
    

}



@media (min-width:1025px){

.vis-ta-shp-ov-al-wd-me-nu {display: none;}





}

@media screen and (min-width:768px) and (max-width:1024px){

.vis-ta-rp-ov-al-wd-sec-ig{height:150px;}.vis-ta-rep-pair-ov-al-fl-ex-dena{padding:0 5%;}

.vis-ta-wel-sec-fl-sec-tit-ane-val span{font-size:12px;}.vis-ta-shp-vi-rep-lst-bl-sec-tit h2{padding-bottom:6%;}

.vis-ta-rep-pair-ov-al-pri-mary-foot-wd-fl-ex {display: block;}



















}



@media (max-width:767px){

    .widget-area0 { width: 97% !important;}

.widget-area1 {width: 80% !important;}

.widget-area2 {width: 80% !important;}

.widget-area3 {width: 23% !important;float: right;position: relative;bottom: 200px !important;right: 45px !important;left:-40px !important}



}

.vis-ta-re-pair-foot-cont-wid {display: contents;}

.widget-area1 {width: 21%;}

.widget-area0 {width: 34.33%;}

.widget-area2 {width: 17%;}

.widget-area3 { width: 75%; float: right;padding-top: 50px;}

section.main-sec-st {box-shadow: 0px 10px 20px 0px rgb(0 0 0 / 10%);margin-bottom:20px;background-color: #fff;}

.elementor-widget-container12 {padding-left: 70px;}

@media screen and (min-width:768px) and (max-width:1300px){

.col-md-6 {width: 100%;text-align: center;}

ul.tm-mega-menu.menu.tm-mega-menu.mega-menu-direction-horizontal.total-columns-12.responsive {display:block !important;}

/* ul.tm-mega-menu.menu.tm-mega-menu.mega-menu-direction-horizontal.total-columns-12 {display: none !important;} */
.fa-bars:before { content: "\e816";}

li.toggle-sidebar.menu-icon {text-align: center;}

}

@media (max-width: 1024px){

.vist-rep-pari-hm-pg-wd-ov-al-con-wd1{padding: 25px 20px 26px 20px;}

.widget-area0 {width: 100%;}

.vis-ta-re-pair-foot-cont-wid {display: flex;}

.widget-area1 {width: 30%;}

.widget-area2 { width: 25%;}

.widget-area3 {width: 120px;float: right;position: relative;bottom: 169px;left: -148px;padding:0px;}

}

@media (max-width:767px){

.vis-ta-re-pair-foot-cont-wid{display:block;}

}

.sticky {

  position: fixed;

  top: 0;

  width: 100%;

  z-index: 99999999;

}



.sticky + .content {

  padding-top: 102px;

}

/* a.left-off-canvas-toggle {color: #000;} */

/* i.fa.fa-bars {color: #000;padding: .25em;border: 2px solid #000;} */







/* iphone reparatie haarlem */

<?php if(is_page(195)); {?>

.vist-ta-rep-mic-ro-sft-sec-img-sec img{height:282px;}

.vist-rep-micr-sft-pg-rep-ter-sec-fl-ex .vis-ta-rep-sec-mic-ro-sft-phl-re:last-child .vist-ta-rep-mic-ro-sft-sec-img-sec img {height: auto;}

.vist-rep-micr-sft-pg-rep-ter-sec-fl-ex .vis-ta-rep-sec-mic-ro-sft-phl-re:last-child .vist-ta-rep-mic-ro-sft-sec-cont-sec {margin-bottom: 25%;}

.vist-ta-rep-mic-ro-sft-sec-img-sec {text-align: center;}

.vis-ta-rep-micro-dev-beden {margin-top: 10.7%;}

@media screen and (min-width:320px) and (max-width:767px){

h1.vis-ta-rep-ihp-tit-hed-sec{font-size:25px;}.vis-ta-rep-sec-ip-one-sec-ifr-mp-fl-ex{display:block;}

h2.vis-ta-rep-air-ipn-sec-tit-mp{font-size:20px;line-height: 1;}.vis-ta-iphone-sec-ifr-map-sec-rep {width: 100%;}

}

i.fa.fa-bars.resp:before {content: '\2716'!important;}

<?php } ?>

/*all page pop*/
.all-page-pop{background: #1a1919;DISPLAY: none;z-index: 998;clear: both;margin: 0 auto;position: fixed;bottom: 0;left: 0;width: 100%;overflow: hidden;padding: 10px 5px;
    box-sizing: border-box;}
.all-page-pop-left {width: 100%;display: flex;}
.all-page-pop-right {width: 100%;display: flex;}
.all-page-pop-left a {background: #56c2ee;color: #fff;display: block;padding: 10px;border-radius: 21px;height: 34px;line-height: 14px;font-size: 14px;margin: 0 5px;
    text-transform: uppercase;font-weight: normal;text-align: center;box-sizing: content-box;text-decoration: none !important;width: 100%;box-sizing: border-box;}
span.all-page-pop-left-span {transform: translatey(-3px) rotateY( 180deg );font-family: dashicons;display: inline-block;line-height: 1;font-weight: 400;font-style: normal;
    speak: never;text-decoration: inherit;text-transform: none;text-rendering: auto;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;
    width: 20px;height: 20px;font-size: 20px;vertical-align: top;text-align: center;transition: color .1s ease-in;}
span.all-page-pop-left-span:before {content: "\f525";}
.all-page-pop-right a {background: #7bd850;color: #fff;display: block;padding: 10px;border-radius: 21px;height: 34px;line-height: 14px;font-size: 14px;margin: 0 5px;
    text-transform: uppercase;font-weight: normal;text-align: center;box-sizing: content-box;text-decoration: none !important;width: 100%;box-sizing: border-box;}

span.all-page-pop-right-span {transform: translatey(-3px) rotateY( 180deg );font-family: dashicons;display: inline-block;line-height: 1;font-weight: 400;font-style: normal;
    speak: never;text-decoration: inherit;text-transform: none;text-rendering: auto;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;
    width: 20px;height: 20px;font-size: 20px;vertical-align: top;text-align: center;transition: color .1s ease-in;}
span.all-page-pop-right-span:before {content: "\f230";}
section.all-pg-pop {display: none;}
@media screen and (min-width:320px) and (max-width:767px){
    .all-page-pop{background: #1a1919;DISPLAY: flex;z-index: 998;clear: both;margin: 0 auto;position: fixed;bottom: 0;left: 0;width: 100%;overflow: hidden;padding: 10px 5px;
    box-sizing: border-box;}
.all-page-pop-left {width: 100%;display: flex;}
.all-page-pop-right {width: 100%;display: flex;}
.all-page-pop-left a {background: #56c2ee;color: #fff;display: block;padding: 10px;border-radius: 21px;height: 34px;line-height: 14px;font-size: 14px;margin: 0 5px;
    text-transform: uppercase;font-weight: normal;text-align: center;box-sizing: content-box;text-decoration: none !important;width: 100%;box-sizing: border-box;}
span.all-page-pop-left-span {transform: translatey(-3px) rotateY( 180deg );font-family: dashicons;display: inline-block;line-height: 1;font-weight: 400;font-style: normal;
    speak: never;text-decoration: inherit;text-transform: none;text-rendering: auto;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;
    width: 20px;height: 20px;font-size: 20px;vertical-align: top;text-align: center;transition: color .1s ease-in;}
span.all-page-pop-left-span:before {content: "\f525";}
.all-page-pop-right a {background: #7bd850;color: #fff;display: block;padding: 10px;border-radius: 21px;height: 34px;line-height: 14px;font-size: 14px;margin: 0 5px;
    text-transform: uppercase;font-weight: normal;text-align: center;box-sizing: content-box;text-decoration: none !important;width: 100%;box-sizing: border-box;}

span.all-page-pop-right-span {transform: translatey(-3px) rotateY( 180deg );font-family: dashicons;display: inline-block;line-height: 1;font-weight: 400;font-style: normal;
    speak: never;text-decoration: inherit;text-transform: none;text-rendering: auto;-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;
    width: 20px;height: 20px;font-size: 20px;vertical-align: top;text-align: center;transition: color .1s ease-in;}
span.all-page-pop-right-span:before {content: "\f230";}
section.all-pg-pop {display: block;}
}
html body .activeopen ul.sub-menu {display: block !important;z-index: 3;}
html body ul.sub-menu {display: none !important;}
ul.sub-menu {display: none !important;}

<?php if(is_page(413));{?>

    section.main-sec-st{margin-bottom:0px;}

<?php } ?>



@media screen and (min-width:1025px) and (max-width:1300px){
    ul#menu-menu-head1{
        padding-top: 0;
    padding-left: 0;
    }
    .site-logo1 a img{
    width: 150px;
    height: auto;
    min-height: auto;
}   
.col-md-14{
    display: flex;
    justify-content: space-between;
    align-items: center;
    min-height: 90px;
}

.site-logo1 {
    padding: 0;
}
.col-md-6{
    width: 18%;
}
div#main-menu ul li{
    margin-right: 13px;
}
}
.site-logo1 a img{
    object-fit: contain;
}

#ajaxsearchlite1 .probox, div.asl_w .probox{
	margin: 0px 0px 0px 0px !important;
}
@media screen and (min-width:1301px) and (max-width:1400px){
    div#main-menu ul li{
        margin-right: 15px;
    }
}
@media screen and (min-width:1401px) and (max-width:1600px){
    div#main-menu ul li{
        margin-right: 20px;
    }
}
@media screen and (min-width:1024px) and (max-width:1199px){
    ul.sub-menu {
    position: absolute !important;
    background-color: #fff!important;
    box-shadow: none !important;
    margin-left: 0px !important;
    padding: 0px !important;
    top: 70px !important;
}
div#main-menu ul li {
    margin-right: 0px;
}
ul#menu-menu-head1 li a{
    font-size:14px !important;
}
}

</style>

</head>

<body <?php body_class(); ?>>

<!-- <section id="head-wd-bd"> -->

    <!-- id="myHeader" -->

<section class="main-sec-st" id="myHeader2">

    <div class="main-head1" id="myHeader1">

 

        <div class="col-md-14" >



            <div class="col-md-6">



                <div class="site-logo1">

                    <a href="<?php echo site_url();?>">

                        <?php



				        $way = get_theme_mod('custom_logo');



				        $image = wp_get_attachment_image_src($way, 'full');



				        ?>



			            <img src="<?php echo $image[0]; ?>" alt="logo-image" class="logo1">

                    </a>



                </div>



            </div>

            <div class="vis-ta-shp-ov-al-wd-me-nu">

            <ul id="cl1" class="sticky-menu left always">



                <li class="toggle-sidebar menu-icon">



                    <a href="#" class="left-off-canvas-toggle" onclick="myFunction12()">



                        <i id="menu01" class="fa fa-bars" onclick="myFunction34()"></i>



                    </a>



                </li>



            </ul>

        </div>

            <div class="col-md-3">



                <?php wp_nav_menu(array('theme_location' => 'menu-head1', 'container_id' => 'main-menu', 'container_class' => '', 'menu_class' => 'tm-mega-menu menu tm-mega-menu mega-menu-direction-horizontal total-columns-12')); ?>

                <span class="sub-arrow"><i class="fa"></i></span>



            </div>

        </div>

        

    </div>

</section>

<script>
    jQuery('#main-menu ul li').on('click', function(){
        jQuery('ul#menu-menu-head1 .sub-menu li').removeClass('current');
   
});
</script>