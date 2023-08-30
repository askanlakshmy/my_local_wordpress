<?php get_header();?>
<!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->
<script>
    var gcaptchaOLCB = function() {
            grecaptcha.render( "commentcaptcha", {
                "sitekey" : "6LcjR0ciAAAAAOYkSfEIljlpVFQoDhFJ1taeabRW", //Replace this
                "callback" : function(response) {
                    document.getElementById("submit").removeAttribute("disabled");
                },
                "expired-callback" : function(response) {
                    document.getElementById("submit").setAttribute("disabled", "disabled");
                },
 
            });
            // grecaptcha.render('signupcaptchadiv', {'sitekey' : '6LcipFYiAAAAAFdLj8e1iz6naDCBYwgjyr1ZIaQJ'});
          }
</script>
<script>
// setTimeout(function(){
        // var script = document.createElement("script");
        // script.src = "https://www.google.com/recaptcha/api.js?onload=gcaptchaOLCB&render=explicit";
        // script.type = "text/javascript";
        // document.getElementsByTagName("head")[0].appendChild(script);
    // }, 1000);
        </script>
<style>
      input[type="submit"]:disabled {
    background: rgba(175,30,35,.5) !important;
}
    input#author::placeholder {
    color: #d78e90;
}
    p.comment-form-author {
    display: block !important;
    order: 7;
    margin:0 !important;
}
p.comment-form-author label {
    display: none;
}
    input#author {
    width: -webkit-fill-available;
    font-size: 14px;
    font-weight: 400;
    font-stretch: normal;
    font-style: normal;
    line-height: 2.07;
    letter-spacing: normal;
    color: #af1e23;
    outline: none;
    border: 0.6px solid #af1e23;
    border-radius: 5px;
    padding: 5px 15px;
    margin-bottom: 0.5em;
    margin-top: 30px;
    font-family: 'Gotham';
}
    section#start_use {
    clear: both;
}
.pure_lg{display:flex;flex-flow:row wrap;align-content:flex-start;}
@media all{
@media screen and (min-width:48em){
.btn-link.dark.y_mob{display:none;}
img.mobile_only{display:none;}
.featrues{position:absolute;width:12%;left:5.33%;top:8em;flex-direction:column;}
.featrue_item{text-align:center;display:flex;flex-direction:row;width:100%;padding-top:1em;}
.featrue_item img{margin-right:0.5em!important;margin-left:0!important;}
.featrue_item p{text-align:left;}
h4.product_info_h4{font-size:30px;line-height:1.39;text-align:left;}
.links.only-product{margin-top:3em;}
.btn-link.dark,.btn-link_n{width:45%;}
}
.btn-link_n{background:transparent!important;}
.btn-link_n a{display:block;font-size:12px;font-weight:900;font-stretch:normal;font-style:normal;line-height:4.17;letter-spacing:normal;text-align:center;color:#af1e23;text-decoration:none;cursor:pointer;transition:.2s;}
.btn-link.dark,.btn-link_n{background:#af1e23;margin:auto;border-radius:5px;border:1px solid #af1e23;transition:.2s;}
.btn-link.dark a{display:block;font-size:12px;font-weight:900;font-stretch:normal;font-style:normal;line-height:4.17;letter-spacing:normal;text-align:center;color:#fff;}
svg.fa.svg-inline--fa.fa-amazon.fa-w-14.fa-2x{width:0.875em;vertical-align:middle;margin-right:0.2em;font-size:2em;overflow:visible;}
.links.only-product{display:flex;flex-direction:row;justify-content:space-between;}
h4.product_info_h4{font-weight:700;font-stretch:normal;font-style:normal;letter-spacing:normal;color:#002561;text-transform:capitalize;}
.featrue_item p{margin-top:1em;font-size:14px;font-weight:700;font-stretch:normal;font-style:normal;line-height:1.36;letter-spacing:normal;color:#af1e23;}
.featrue_item img{width:auto;height:46px;margin:auto;vertical-align:middle;}
.featrues{display:flex;justify-content:space-between;align-items:flex-start;padding:1.5em 0;}
section#start_use .container{position:relative;}
@media screen and (max-width:767px){
    .pure-u-1.pure-u-md-10-24 {
    width: 100%;
}
    .comment_box .fb_img {
    padding-right: 15px;
}
    .comment_box h2 {
    padding-left: 15px;
}
    p.comment-form-email, p.comment-form-comment,p.form-submit {
    text-align: center;
}
    input#email, textarea#comment {
    width: -webkit-fill-available !important;
    }
    .post_fixed_social_side {
    padding-left: 15px;
    padding-right: 15px;
}
    h6.mobile_h6, h1.mobile_h1, .last_due, .post_social_media {
    padding-left: 15px;
    padding-right: 15px;
}
    .feature_image_mob {
    margin-top: 140px;
}
h4.product_info_h4{font-size:24px;font-weight:700;font-stretch:normal;font-style:normal;line-height:1.33;letter-spacing:normal;text-align:center;color:#002561;}
img.desk_only{display:none;}
.featrue_item{text-align:center;padding:0 5px;}
.btn-link_n{width:200px;}
.btn-link.dark.no_m{display:none;}
.links.only-product{display:block!important;}
.btn-link.dark.y_mob{width:200px;}
}
}

    @media screen and (min-width:48em){
    .comment_box { padding-left: 0;padding-right: 0; margin-top: 60px;}
    }
    p.comment-form-email, p.comment-form-comment {
    margin: 0;
}
.comment_box h2 {
    margin: 0;
}
    input#submit {
    margin-top: 30px;
    background: #af1e23;
    color: #fff;
    width: 50%;
    font-family: Gotham;
    font-size: 14px;
    font-weight: 700;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: .67px;
    text-align: center;
    border: none;
    padding: 1em;
    border-radius: 5px;
    cursor: pointer;
    outline: none;
    /* background: rgba(175,30,35,.5); */
}
    input#email::placeholder,textarea#comment::placeholder {
    color: #d78e91;
}
    p.comment-form-email label,p.comment-form-comment label {
    display: none;
}
p.form-submit {
    margin: 0 !important;
}
    input#email,textarea#comment {
    width: -webkit-fill-available;
    font-size: 14px;
    font-weight: 400;
    font-stretch: normal;
    font-style: normal;
    line-height: 2.07;
    letter-spacing: normal;
    color: #af1e23;
    outline: none;
    border: 0.6px solid #af1e23;
    border-radius: 5px;
    padding: 5px 15px;
    margin-bottom: 0.5em;
    margin-top: 30px;
    font-family: 'Gotham';
}
    section#comments_sections {
    clear: both;
}
    form#commentform {
    display: flex;
    flex-direction: column-reverse;
}
/* p.comment-form-comment,p.form-submit {order: 6;} */
p.comment-form-comment {
    order: 5;
}
p.comment-form-email {
    order: 6;
}
.g-recaptcha {
    order: 4;
}
div#recaptcha_error {
    order: 3;
}
p.comment-form-author,p.comment-form-url {display: none;}
    span#reply-title {
    visibility: hidden;
}
p.comment-notes {
    display: none;
}
    .post_social_media img {
    width: 100% !important;
    height: auto;
}
    .last_due p {
    font-size: 12px;
    font-weight: 500;
    font-stretch: normal;
    font-style: normal;
    line-height: 2;
    letter-spacing: normal;
    color: #af1e23;
    margin-top: 1em;
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    flex-direction: column;
    margin: 0;
}
    .post_bb_left h6 a {
    display: block;
    cursor: pointer;
    font-size: 10px;
    font-weight: 400;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: .83px;
    color: #af1e23;
    text-decoration: none;
    text-transform: uppercase;
}
    @media screen and (min-width:48em){
        .post_bb_left h1 a {
    font-size: 30px !important;
    line-height: 1.36 !important;
}
    }
    section#footer_form {
    clear: both;
}
    .splide__list {
    display: flex;
}
    .splide__arrow--prev,.splide__arrow--next{
        display: none !important;
    }
    figure img {
    width: 100%;
}
.comment_section {
    position: relative;
    z-index: 1;
    width: 56%;
    float: left;
    margin-left: 4%;
}
.fb_img {
    display: flex;
    justify-content: space-between;
    width: 100px;
    align-items: center;
}
.comment_box {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
}
.comment_box h2 {
    font-weight: 700;
    font-stretch: normal;
    font-style: normal;
    letter-spacing: normal;
    color: #002561;
    font-size: 24px;
    line-height: 1.5;
}
.form_field input, .form_field textarea {
    width: 100%;
    font-size: 14px;
    font-weight: 400;
    font-stretch: normal;
    font-style: normal;
    line-height: 2.07;
    letter-spacing: normal;
    color: #af1e23;
    outline: none;
    border: 0.6px solid #af1e23;
    border-radius: 5px;
    padding: 5px 15px;
    margin-bottom: 0.5em;
    margin-top: 30px;
    
    font-family: 'Gotham';
}
.form_field {
    width: 100%;
    display: flex;
}
.form_field input::placeholder,.form_field textarea::placeholder {
    color: #d78e91;
}
.form_sec button {
    margin-top: 30px;
    background: #af1e23;
    color: #fff;
    width: 50%;
    font-family: Gotham;
    font-size: 14px;
    font-weight: 700;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: .67px;
    text-align: center;
    border: none;
    padding: 1em;
    border-radius: 5px;
    cursor: pointer;
    outline: none;
}
.form_sec button:disabled {
    background: rgba(175,30,35,.5);
}
.whole_comment_cc {
    width: 100%;
    float: left;
}
section.Readers_sec h2 {
    text-align: center;
    
}
section.Readers_sec {
    float: left;
    margin-top: 25px; 
    width: 100%;
}
section.Readers_sec h2 {
    font-weight: 700;
    font-stretch: normal;
    font-style: normal;
    letter-spacing: normal;
    text-align: center;
    color: #002561;
    margin-bottom: 1.8em;
    font-size: 30px;
    line-height: 1.36;
    padding-left: 1.5em;
    padding-right: 1.5em;
}
div#image-slider-list {
    display: flex;
}
.splide_whole_cc img {
    width: 100%;
        height: 220px;
    object-fit: cover;
    border-radius:5px 5px 0 0;
}
.splide__slide {
    padding: 0 12px;
}
.splide__slide p.slider-caption-class {
    text-decoration: none;
    font-size: 16px;
    font-weight: 700;
    font-stretch: normal;
    font-style: normal;
    line-height: 1.23;
    letter-spacing: normal;
    color: #002561;
    }
    .splide__slide p.last_update_right {
    cursor: pointer;
    font-size: 12px !important;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: .83px;
    color: #af1e23;
    text-decoration: none;
    text-transform: uppercase;
}
.splide_whole_cc {
    border: 1px solid #f2f2f2;
    border-radius: 5px;
}
.post_recent_slide {
    padding: 0 15px;
}
.more_blogs {
    text-align: center;
    display: flex;
    justify-content: center;
    margin: 60px 0;
    align-items: center;
}
.more_blogs a {
    text-decoration: none;
    color: #af1e23;
    display: flex;
    text-transform: uppercase;
    vertical-align: middle;
    font-size: 16px;
    font-weight: 700;
    font-stretch: normal;
    font-style: normal;
    line-height: 3.57;
    letter-spacing: 1px;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
}
    .feature_image img {
    width: 100%;
    border-radius: 6px;
    min-height: 330px;
    object-fit: contain;
    height: 100%;
}

/* .post_bb_left {
    width: 60%;
    float: left;
} */
.post_bb_right {
    /* width: 30%; */
    float: right;
    position: sticky;
    z-index: 1;
    top: 13.5em;
    margin-top: 22px;
}
.post_bb_right h2 {
    font-weight: 700;
    font-stretch: normal;
    font-style: normal;
    letter-spacing: normal;
    color: #002561;
    margin: 0;
    font-size: 30px;
    line-height: 1.36;
    margin-bottom: 25px;
}
.post_bb_left h6 a, .splide__slide h6 a{
    cursor: pointer;
    font-size: 10px !important;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: .83px;
    color: #af1e23;
    text-decoration: none;
    text-transform: uppercase;
}
.post_bb_left h1 a {
    font-weight: 700;
    font-stretch: normal;
    font-style: normal;
    letter-spacing: normal;
    color: #002561;
    margin: 0;
    font-size: 30px;
    line-height: 1.36;
}
.post_bb_left h1 {
    margin: 0 0;
    min-height: 90px;
}
.post_bb_left h6 {
    margin-bottom: 8px;
}
p.last_update {
    margin-top: 8px;
    font-size: 12px !important;
    font-stretch: normal;
    font-style: normal;
    line-height: 2;
    letter-spacing: normal;
    color: #af1e23;
}

.social_time {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 6px;
}
.post_social_media {
    width: 82px;
    display: flex;
    min-height: 25px;
    align-items: center;
    justify-content: space-between;
}
.post_content h2 {
    color: #002561;
    margin-bottom: 10px;
    line-height: 1.81;
    font-size: 25px;
}
.post_content {
    font-size: 16px;
    line-height: 1.81;
    margin: auto;
    width: 86%;
    color: #002561;
}
.post_content {
    font-weight: 400;
}
.post_content p, .post_content ul {
    font-stretch: normal;
    font-style: normal;
    line-height: 1.79;
    letter-spacing: normal;
    color: #002561;
    margin-bottom: 1em;
    word-wrap: break-word;
    font-size: 16px;
    margin-top: 0;
}
.post_content h3 {
    color: #002561;
    margin-bottom: 10px;
}
.post_content h2 span {
    font-weight: 600 !important;
}
.feature_image {
    min-height: 340px;
}
.post_content a {
    color: #af1e23;
    text-decoration: underline;
    cursor: pointer;
}
.post_content ul {
    list-style: disc;
    padding-left: 22px;
    
    margin-bottom: 0;

}
.post_content ul li::marker {
    font-size: 22px;
    color: #af1e23;
}
.side_bar_link a:nth-child(1) img {
    height: 100%;
    margin-top: 0;
}
.side_bar_link img {
    display: block;
    margin: 25px 0;
}
.side_bar_link {
    margin-top: 12px;
    position: sticky;
    top: 5em;
    float: left;
}
.post_main {
    float: right;
    position: relative;
    z-index: 1;
}
/* .recent_post {
    display: flex;
    justify-content: space-between;
    border-radius: 5px;
    border: 1px solid #f2f2f2;
    padding: 12px 11px;
    margin-bottom: 20px;
} */
.recent_post {
    margin-bottom: 1.25em;
}
.side_bar_link img {
    display: block;
    margin: 25px 0;
    width: auto !important;
    height: auto !important;
    margin-top: 0 !important;
}
.feature_image_right img {
    width: 100%;
    height: auto;
    border-radius: 5px;
    background-color: #e0dccc;
}
.feature_image_right {
    width: 80px;
    margin-right: 1em;
    height: auto !important;
}
.recent_post {
    display: flex;
    flex-direction: row;
    border-radius: 5px;
    border: 1px solid #f2f2f2;
    background-color: #fff;
    padding: 0.85em;
}
.post_right_info {
    width: calc(100% - 80px);
    display: flex;
    justify-content: space-between;
    flex-direction: column;
}
/* .feature_image_right img {
    width: 140px;
    height: 80px;
    object-fit: cover;
    border-radius: 5px;
} */
.post_right_info h6 {
    margin: 0;
}
.post_right_info h6 a {
    text-decoration: none;
    cursor: pointer;
    font-size: 10px;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: 1.1px;
    color: #af1e23;
    text-transform: uppercase;
}
.post_right_info h4 a {
    text-decoration: none;
    cursor: pointer;
    color: #002561;
    font-size: 14px;
    font-weight: 700;
    line-height: 1.29;
}
.post_right_info h4 {
    margin-top: 8px;
    margin-bottom: 8px;
}
.post_right_info p.last_update_right {
    font-size: 10px;
    font-weight: 500;
    line-height: 2.18;
    color: #af1e23;
    margin-top: 0;
}
.post_right_info p.last_update_right {
    font-size: 10px;
    font-weight: 500;
    line-height: 2.18;
    color: #af1e23;
    margin-top: 0;
}
/* .post_right_info {
    width: 55%;
} */
@media screen and (max-width:991px){
    body.menu-active .post_content ul li::marker{
    font-size: 0;
    }
    body.menu-active .whole_comment_cc,body.menu-active section.Readers_sec{
        display: none;
    }
    .post_bb_left,.post_bb_right{
    width: 100%;
    float: none;
}
.post_main{
    float: none;
}
.social_time{
    display: block;
}
.post_bb_left {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
}
.post_bb_left h6{
    order: 2;
}
.post_bb_left h1{
    order: 3;
}
.social_time {
    order: 4;
}
.feature_image{
    min-height: 130px;
    order: 1;
}
.post_fixed_social_side {
    order: 5;
}
.side_bar_link{
    display: none;
}
.post_content{
    width: 100%;
}
.post_bb_left h1 a{
    font-size: 24px;
    line-height: 1.2;
}
.post_content h2{
    line-height: 1.2;
    font-size: 20px;
}
.post_content p, .post_content ul{
    font-size: 14px;
}
.post_bb_right {
    display: none;
}
.comment_section{
    width: 100%;
    float: none;
    margin-left: 0;
}
.form_sec button{
    width: 100%;
}
section.Readers_sec h2{
    font-size: 24px;
}
.more_blogs a{
    font-size: 14px;
}
.more_blogs{
margin:15px 0 0 0;
}
}
@media screen and (min-width:992px) and (max-width:1199px) {
    .post_right_info {
    width: 48%;
}
.post_bb_right{
    width: 33%;
}

}
@media screen and (min-width:1920px){
    .splide_whole_cc img{
        height: 285px;
    }
    .splide__slide p.slider-caption-class{
        font-size: 20px;
    }
    .splide__slide h6 a,.splide__slide p.last_update_right{    font-size: 12px;}
    .post_right_info h6 a{
        font-size: 12px;
    }
    .post_right_info h4 a{
        font-size: 18px;
    }
    .post_right_info p.last_update_right{font-size: 14px;}
    /* .feature_image_right img{    width: 209px;
    height: 110px;} */

.post_bb_left h6 a{
  font-size: 14px;
}
.post_bb_left h1 a{
  font-size: 36px;
}
p.last_update{
  font-size: 14px;
}
.post_content h2{
  font-size: 24px;
}
.post_content h3{  
    font-size: 24px;
}
.post_content p, .post_content ul{
    font-size: 18px;
  }
}
@media screen and (min-width:992px){
    .spliper_post.trend {
    display: none;
}
}
@media screen and (min-width:768px) {
    .feature_image_mob {
    display: none;
}

}
@media screen and (max-width:767px) {
    input#submit{width: 100% !important;}
    section#comments_sections .pure_lg {
    align-content: center !important;
}
    section#comments_sections {
    margin-top: 50px;
    margin-bottom: 1em;
}
    /* .feature_image {
    display: none;
} */
.feature_image_mob img {
    width: 100%;
    border-radius: 6px;
    height: 100%;
    min-height:130px;
}
}
.image_pan img {
    height: 100%;
}
@media screen and (min-width:1440px){
    .post_bb_left h1{
        min-height: 46px;
    }
}
p.last_update_right {
    text-transform: capitalize !important;
}
.splide__pagination{
    display: none !important;
    }
    @media screen and (min-width:744px) and (max-width:767px){
        .feature_image_mob img{
            margin-bottom:135px;
        }
    }
    .post_right_info h6 a {
    text-decoration: none;
    cursor: pointer;
    font-size: 10px;
    font-weight: 400;
    font-stretch: normal;
    font-style: normal;
    line-height: normal;
    letter-spacing: 1.1px;
    color: #af1e23;
    text-transform: uppercase;
}
.post_right_info h4 a {
    text-decoration: none;
    cursor: pointer;
    color: #002561;
    font-size: 14px;
    font-weight: 700;
    line-height: 1.29;
}
p.last_update_right {
    font-size: 10px !important;
    font-weight: 500;
    line-height: 2.18;
    color: #af1e23;
}
.pure_lg{    flex-flow: row wrap;
    align-content: flex-start;}

a.whatsapp-desktop {
    display: none;
}
a.whatsapp-mobile {
    display: block;
}
@media screen and (min-width: 48em){
a.whatsapp-desktop  {
    display: block;
}
a.whatsapp-mobile {
    display: none;
}
}
input#submit.submit.submit-enable {
    background: #af1e23;
}
@media screen and (min-width:768px){
    section.post_body {margin-top: 100px !important;}
    
}
</style>
<main class="post">
<section class="post_body">
<div class="pure_lg">
<div class="pure-u-1 pure-u-md-1-24"></div>
    <!-- <div class="post_main"> -->
        <div class=" post_bb_left pure-u-1 pure-u-md-14-24">
        <?php $categories = get_the_category();
        // print_r($categories);
        // exit;
 if ( ! empty( $categories ) ) {?>
 <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "<?php echo get_permalink()?>"
  },
  "headline": "<?php echo the_title();?>",
  "description": "<?php echo wp_strip_all_tags(get_the_excerpt());?>",
  "image": "<?php
$thumb = get_post_thumbnail_id();
$img_url = wp_get_attachment_url( $thumb,'full');
$image = $img_url; 
echo "$img_url"; ?>",  
  "author": {
    "@type": "blog",
    "name": "riopads"
  },  
  "publisher": {
    "@type": "Organization",
    "name": "RIO Pads",
    "logo": {
      "@type": "ImageObject",
      "url": "https://www.riopads.in/_nuxt/img/logo.aa09e4d.png"
    }
  },
  "datePublished": "<?php echo get_the_date('F j, Y'); ?>"
}
</script>


     <h6 class="mobile_h6" id="blog-h6"  style="opacity: 0;"><?php the_category(', '); ?></h6>
 <?php } ?>
 <h1 class="mobile_h1"  id="blog-h1"  style="opacity: 0;"><a href="<?php echo get_permalink()?>"><?php echo the_title();?></a></h1>
 <div class="social_time" id="blog-social"  style="opacity: 0;">
     <div class="last_due">
<p class="last_update"><?php echo get_the_date('F j, Y'); ?><?php $count_val=round(str_word_count($post->post_content)/ 120);
echo ". $count_val mins read";
?></p>
 </div>
 <div class="post_social_media">
     <a href="https://www.facebook.com/sharer.php?u=<?php echo get_permalink()?>"><img weight="100" height="100" src="/wp-content/themes/riopads/assets/img/facebook-post.png"></a>
     <a href="https://twitter.com/intent/tweet?text=<?php echo the_title();?> <?php echo get_permalink()?>"><img weight="100" height="100" src="/wp-content/themes/riopads/assets/img/twitter_post.png"></a>
     <a class="whatsapp-desktop" href="https://web.whatsapp.com/send?text=<?php echo get_permalink()?>"><img weight="100" height="100" src="/wp-content/themes/riopads/assets/img/whatsapp.png"></a>
     <a class="whatsapp-mobile" href="https://api.whatsapp.com/send?text=<?php echo get_permalink()?>"><img weight="100" height="100" src="/wp-content/themes/riopads/assets/img/whatsapp.png"></a>
 </div>
 </div>
 <?php //$image_d=get_field('feature_image_desktop');?>
<!-- <div class="feature_image"><img id="desktop_im" src="<?php //echo $image_d['url']; ?>"  alt="<?php //echo $image_d['alt']; ?>"></div>
<?php //$image=get_field('feature_image_mobile');?>
<div class="feature_image_mob">
    <img src="<?php //echo $image['url']; ?>"  alt="<?php //echo $image['alt']; ?>"></div> -->
    <div class="feature_image">
    <a class="r2_b2_im" href="<?php the_permalink();?>"><?php
$thumb = get_post_thumbnail_id(get_the_ID());
$alt_text = get_post_meta($thumb , '_wp_attachment_image_alt', true);?>
<img src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo $alt_text ;?>" />
</a>
    </div>

<div class="post_fixed_social_side" id="blog-fixed-social"  style="opacity: 0;">
    <div class="side_bar_link">
    <a href="https://www.facebook.com/sharer.php?u=<?php echo get_permalink()?>"><img weight="100" height="100" src="/wp-content/themes/riopads/assets/img/facebook-post.png"></a>
     <a href="https://twitter.com/intent/tweet?text=<?php echo the_title();?> <?php echo get_permalink()?>"><img weight="100" height="100" src="/wp-content/themes/riopads/assets/img/twitter_post.png"></a>
     <a class="whatsapp-desktop" href="https://web.whatsapp.com/send?text=<?php echo get_permalink()?>"><img weight="100" height="100" src="/wp-content/themes/riopads/assets/img/whatsapp.png"></a>
     <a class="whatsapp-mobile" href="https://api.whatsapp.com/send?text=<?php echo get_permalink()?>"><img weight="100" height="100" src="/wp-content/themes/riopads/assets/img/whatsapp.png"></a>
 </div>
<div class="post_content">
<?php echo get_the_content(); ?>
 </div>
 </div>
        </div>
        <div class="pure-u-1 pure-u-md-2-24"></div>
        <div class=" pure-u-1 pure-u-md-6-24">
        <div class="post_bb_right">
            <h2>Trending Stories</h2>
<?php $the_query = new WP_Query( array ( 'orderby' => 'rand',  'category_name' => 'Go With The Flow', 'posts_per_page' => '3' ) );
while ( $the_query->have_posts() ) : $the_query->the_post();?>
<div class="recent_post">
<div class="feature_image_right"><a href="<?php echo get_permalink()?>"><?php the_post_thumbnail('single-post-thumbnail');?></a></div>
<div class="post_right_info">
   <?php $categories = get_the_category();
 if ( ! empty( $categories ) ) {?>
     <h6><?php the_category(', '); ?></h6>
     
 <?php } ?>
 <h4><a href="<?php echo get_permalink()?>"><?php echo the_title();?></a></h4>
 <p class="last_update_right"><?php echo the_modified_date('F j, Y'); ?><?php $count_val=round(str_word_count($post->post_content)/ 120);
echo ". $count_val mins read";
?></p>
 </div>
 </div>
<?php endwhile;

wp_reset_postdata(); ?>
        </div>
 </div>
        <div class="pure-u-1 pure-u-md-2-24"></div>
    </div>
   
</section>
<section id="comments_sections">
    <div class="pure_lg">
        <div class="pure-u-1 pure-u-md-2-24"></div>
        <div class="pure-u-1 pure-u-md-13-24">
            <div class="pure_lg">
                <div class="pure-u-1 pure-u-md-21-24">
                <div class="comment_box">
        <h2>Comments</h2>
        <div class="fb_img">
        <a href="https://www.facebook.com/sharer.php?u=<?php echo get_permalink()?>"><img src="/wp-content/themes/riopads/assets/img/facebook-post.png"></a>
     <a href="https://twitter.com/intent/tweet?text=<?php echo the_title();?> <?php echo get_permalink()?>"><img src="/wp-content/themes/riopads/assets/img/twitter_post.png"></a>
     <a class="whatsapp-desktop" href="https://web.whatsapp.com/send?text=<?php echo get_permalink()?>"><img src="/wp-content/themes/riopads/assets/img/whatsapp.png"></a>
     <a class="whatsapp-mobile" href="https://api.whatsapp.com/send?text=<?php echo get_permalink()?>"><img src="/wp-content/themes/riopads/assets/img/whatsapp.png"></a>
 </div>
        </div>
                <?php comments_template(); ?>
                </div>
                <div class="pure-u-1 pure-u-md-1-24"></div>
            </div>
        </div>
        <div class="pure-u-1 pure-u-md-19-24"></div>
    </div>

</section>
<section class="Readers_sec">
    <div class="container">
        <!-- mobile splider -->

<div class="spliper_post trend">
<h2>Trending Stories</h2>
            <div id="image-slider_mob" class="post_splide">
                <div class="splide__track">
                    <div class="splide__list">
                    <?php $the_query = new WP_Query( array ( 'orderby' => 'rand', 'posts_per_page' => '3' ) );
while ( $the_query->have_posts() ) : $the_query->the_post();?>
                        <div class="splide__slide">
                            <div class="splide_whole_cc">
                            <a href="<?php echo get_permalink() ?>">
                            <?php the_post_thumbnail('single-post-thumbnail');?>
                                <div class="post_recent_slide">
                                <?php $categories = get_the_category();
                                if ( ! empty( $categories ) ) {?>
                                    <h6><?php the_category(', '); ?></h6>
                                    
                                <?php } ?>
                                <p class="slider-caption-class">
                                <?php echo the_title();?>
                                    
                                </p>
                                <p class="last_update_right"><?php echo the_modified_date('F j, Y'); ?><?php $count_val=round(str_word_count($post->post_content)/ 120);
echo ". $count_val mins read";
?></p>
                                </div>
                            </a>
                        </div>
                                </div>
                        <?php endwhile;
                    wp_reset_postdata(); ?>

                        </div>
                </div>
            </div>
        </div>
<!-- end -->
        <h2>Readers also checked out</h2>
        <div class="spliper_post">
            <div id="image-slider" class="post_splide">
                <div class="splide__track">
                    <div class="splide__list">
                        <?php
                        $recent_posts = wp_get_recent_posts(array(
                            'numberposts' => 3, // Number of recent posts thumbnails to display
                            'post_status' => 'publish' // Show only the published posts
                        ));
                        foreach( $recent_posts as $post_item ) : ?>
                        <div class="splide__slide">
                            <div class="splide_whole_cc">
                            <a href="<?php echo get_permalink($post_item['ID']) ?>">
                                <?php echo get_the_post_thumbnail($post_item['ID']); ?>
                                <div class="post_recent_slide">
                                <?php $categories = get_the_category();
                                if ( ! empty( $categories ) ) {?>
                                    <h6><?php the_category(', '); ?></h6>
                                    
                                <?php } ?>
                                <a href="<?php echo get_permalink($post_item['ID']) ?>"><p class="slider-caption-class">
                                    <?php echo $post_item['post_title'] ?>
                                    
                                </p></a>
                                <p class="last_update_right"><?php echo the_modified_date('F j, Y'); ?><?php $count_val=round(str_word_count($post->post_content)/ 120);
echo ". $count_val mins read";
?></p>
                                </div>
                            </a>
                        </div>
                                </div>
                        <?php endforeach; ?>

                        </div>
                </div>
            </div>
        </div>
        <div class="more_blogs">
            <a href="/blogs">ALL ARTICLES</a>
            <img class="lazy" data-src="/wp-content/themes/riopads/assets/img/rgh.png">
        </div>
    </div>
</section>

</main>
<section id="start_use">
<div class="container">
    <div class="pure_lg">
        <div class="pure-u-1 pure-u-md-2-24"></div>
        <div class="pure-u-1 pure-u-md-13-24">
            <div class="images_section_start">
                <img src="https://www.riopads.in/wp-content/uploads/2021/09/740-by-415-copy.png" class="desk_only">
                <img src="https://www.riopads.in/wp-content/uploads/2022/04/375-by-231-copy.png" class="mobile_only">
                <div class="btn-link dark y_mob"><a href="https://www.amazon.in/dp/B09CD7K6VL" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="amazon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fa svg-inline--fa fa-amazon fa-w-14 fa-2x"><path fill="currentColor" d="M257.2 162.7c-48.7 1.8-169.5 15.5-169.5 117.5 0 109.5 138.3 114 183.5 43.2 6.5 10.2 35.4 37.5 45.3 46.8l56.8-56S341 288.9 341 261.4V114.3C341 89 316.5 32 228.7 32 140.7 32 94 87 94 136.3l73.5 6.8c16.3-49.5 54.2-49.5 54.2-49.5 40.7-.1 35.5 29.8 35.5 69.1zm0 86.8c0 80-84.2 68-84.2 17.2 0-47.2 50.5-56.7 84.2-57.8v40.6zm136 163.5c-7.7 10-70 67-174.5 67S34.2 408.5 9.7 379c-6.8-7.7 1-11.3 5.5-8.3C88.5 415.2 203 488.5 387.7 401c7.5-3.7 13.3 2 5.5 12zm39.8 2.2c-6.5 15.8-16 26.8-21.2 31-5.5 4.5-9.5 2.7-6.5-3.8s19.3-46.5 12.7-55c-6.5-8.3-37-4.3-48-3.2-10.8 1-13 2-14-.3-2.3-5.7 21.7-15.5 37.5-17.5 15.7-1.8 41-.8 46 5.7 3.7 5.1 0 27.1-6.5 43.1z" class=""></path></svg>BUY ON AMAZON</a></div>
            </div>
        </div>
        <div class="pure-u-1 pure-u-md-7-24">
            <div class="product_info">
                <h4 class="product_info_h4"><p>Start using <span style="color: #af1e23;">RIO Heavy Flow Pads</span> during your heavy flow</p></h4>
                <div class="featrues">
                    <div class="featrue_item"><img src="https://www.riopads.in/wp-content/uploads/2020/02/anti-beacterial-sap-1.svg"><p>Anti-bacterial SAP</p></div>
                    <div class="featrue_item"><img src="https://www.riopads.in/wp-content/uploads/2020/02/guards-not-wings-1.svg"><p>Guards not wings</p></div>
                    <div class="featrue_item"><img src="https://www.riopads.in/wp-content/uploads/2020/02/odour-lock-1.svg"><p>Odour lock</p></div>
                </div>
                <div class="links only-product">
                    <div class="btn-link dark no_m"><a href="https://www.amazon.in/dp/B09CD7K6VL" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="amazon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fa svg-inline--fa fa-amazon fa-w-14 fa-2x"><path fill="currentColor" d="M257.2 162.7c-48.7 1.8-169.5 15.5-169.5 117.5 0 109.5 138.3 114 183.5 43.2 6.5 10.2 35.4 37.5 45.3 46.8l56.8-56S341 288.9 341 261.4V114.3C341 89 316.5 32 228.7 32 140.7 32 94 87 94 136.3l73.5 6.8c16.3-49.5 54.2-49.5 54.2-49.5 40.7-.1 35.5 29.8 35.5 69.1zm0 86.8c0 80-84.2 68-84.2 17.2 0-47.2 50.5-56.7 84.2-57.8v40.6zm136 163.5c-7.7 10-70 67-174.5 67S34.2 408.5 9.7 379c-6.8-7.7 1-11.3 5.5-8.3C88.5 415.2 203 488.5 387.7 401c7.5-3.7 13.3 2 5.5 12zm39.8 2.2c-6.5 15.8-16 26.8-21.2 31-5.5 4.5-9.5 2.7-6.5-3.8s19.3-46.5 12.7-55c-6.5-8.3-37-4.3-48-3.2-10.8 1-13 2-14-.3-2.3-5.7 21.7-15.5 37.5-17.5 15.7-1.8 41-.8 46 5.7 3.7 5.1 0 27.1-6.5 43.1z" class=""></path></svg>BUY ON AMAZON</a></div>
                    <div class="btn-link_n"><a href="/product/heavy-flow" class="">VIEW PRODUCT</a></div>
                </div>
    
            </div>
        </div>
        <div class="pure-u-1 pure-u-md-2-24"></div>
    </div>
</div>
</section>

<!-- <script>
    var splide = new Splide( '.post_splide', {
  type    : 'loop',
  perPage : 3,
  autoplay: true,
} );

splide.mount();
</script> -->
<script>
document.addEventListener( 'DOMContentLoaded', function () {
new Splide( '#image-slider', {
 type   : 'loop',
 autoplay :  'true',
 perPage: 3,
perMove: 1,
breakpoints: {
 '640': {
     perPage: 2,    
     padding: {
     right: '0',
     left : '0',
     },    
 }, 
 '768': {
perPage: 2,
padding: {
right: '0',
left : '0',
},
},
'1024': {
perPage: 3,
padding: {
right: '0',
left : '0',
},
},
 '480': {
     perPage: 1,
     padding: {
     right: '0',
     left : '0',
     },   
 },
}
} ).mount();   
} );
</script>
<script>
document.addEventListener( 'DOMContentLoaded', function () {
new Splide( '#image-slider_mob', {
 type   : 'loop',
 autoplay :  'true',
 perPage: 3,
perMove: 1,
breakpoints: {
 '640': {
     perPage: 2,    
     padding: {
     right: '0',
     left : '0',
     },    
 }, 
 '768': {
perPage: 2,
padding: {
right: '0',
left : '0',
},
},
'1024': {
perPage: 3,
padding: {
right: '0',
left : '0',
},
},
 '480': {
     perPage: 1,
     padding: {
     right: '0',
     left : '0',
     },   
 },
}
} ).mount();   
} );
</script>
<script>
            window.addEventListener('load', function() { setTimeout(function(){
                document.getElementById("blog-h6").style.opacity = "1";
                document.getElementById("blog-h1").style.opacity = "1";
                document.getElementById("blog-social").style.opacity = "1";
                document.getElementById("blog-fixed-social").style.opacity = "1";
            },100)});

// const email = document.getElementById('email');
// const comment = document.getElementById('comment');
// const submit = document.getElementById('submit');

// const inputHandler = function(e) {
//   if(email.value !='' && comment.value !=''){
//     submit.classList.add("submit-enable");
//     submit.disabled = false;
//   } else {
//     submit.classList.remove("submit-enable");
//     submit.disabled = true;
//   }
// }

// email.addEventListener('input', inputHandler);
// email.addEventListener('propertychange', inputHandler); 
// comment.addEventListener('input', inputHandler);
// comment.addEventListener('propertychange', inputHandler); 

        </script>
<?php //require_once("shop_product.php"); ?>
<?php //require_once("footer_enquiry.php"); ?>
<?php get_footer(); ?>