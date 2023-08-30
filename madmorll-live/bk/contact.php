<?php
/*Template Name: contact */
get_header();
?>
<style>
    .form_section input {
    font-size: 18px;
}
.form_section textarea {
    padding-left: 0 !important;
    font-size: 18px;
    border-radius: 0;
}
    section#contact_info .container {
    width: 85%;
    margin: 0 auto;
}
@media screen and (min-width:1536px){
    .left_info_contact{width:35% !important;}
}
.left_info_contact, .right_info_contact {
    width: 50%;
}
.divi_two {
    display: flex;
    justify-content: center;
}
.box_coloru {
    background: #8cc122;
    padding: 10px;
    color: #fff;
    /* width: 90%; */
    height: 96.5%;
}
.cont_in ul li {
    list-style: none;
}
.cont_in ul {
    padding-left: 0 !important;
}
.contact_information h3 {
    font-size: 25px;
    font-weight: 500;
    margin-top: 0;
    margin-bottom: 5px;
}
.contact_information p {
    margin-top: 0;
    font-size: 18px;
}
.cont_in ul li {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}
.cont_in ul li img {
    margin-right: 10px;
}
/* Akila */
section#contact_info {
    margin-top: 3em;
    margin-bottom: 5em;
}
.cont_in {
    padding-top: 3em;
    width: 90%;
    margin: auto;
}
.contact_information {
    width: 90%;
    margin: auto;
    margin-top: 25px;
}
.cont_in ul li {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    padding-bottom: 21px;
    /* line-height: 42px; */
}
.social-icon-contact ul li {
    list-style-type: none;
}
.social-icon-contact ul {
	margin-top: 5em;
    padding-left:0;
    /* padding-left: 28px; */
    display: flex;
    /* width: 40%; */
    /* justify-content: space-between; */
}
.social-icon-contact {
    width: 95%;
    margin: auto;
}
.social-icon-contact ul li img {
    padding-left: 20px;
}
.social-icon-contact ul li {
    list-style-type: none;
}
input.wpcf7-form-control.wpcf7-text.wpcf7-email.wpcf7-validates-as-required.wpcf7-validates-as-email.new_group {
    width: 100%;
    padding: 12px 20px;
    margin: 18px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid silver;
}
input.wpcf7-form-control.wpcf7-text.fullname {
    width: 100%;
    padding: 12px 20px;
    margin: 18px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid silver;
}
textarea.wpcf7-form-control.wpcf7-textarea.wpcf7-validates-as-required.text_new {
        /* height: 4em; */
    /* width: 50em; */
    padding: 12px 20px;
    margin: 18px 0;
    box-sizing: border-box;
    /* border: none; */
    overflow: hidden;
    width: 100%;
}
textarea.wpcf7-form-control.wpcf7-textarea.wpcf7-validates-as-required.text_new {
      /* height: 4em; */
    /* width: 50em; */
    padding: 12px 20px;
    margin: 18px 0;
    box-sizing: border-box;
    /* border: none; */
    overflow: hidden;
    width: 100%;
}
textarea.wpcf7-form-control.wpcf7-textarea.wpcf7-validates-as-required.text_new {
    padding: 12px 20px;
    margin: 18px 0;
    box-sizing: border-box;
    overflow: hidden;
    width: 100%;
    border: none;
    border-bottom: 2px solid silver;
    border-radius: 4px;
    height: 5.5em;
    resize: none;
    white-space: nowrap;
    border-collapse: collapse;
    outline:none;
}
/* span.wpcf7-form-control-wrap {
    border-bottom: 2px solid silver;
} */
.right_info_contact form {
    padding: 40px !important;
    padding-bottom: 4em !important;
    box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;
}
.right_info_contact form  {
    padding: 22px;
    box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;
}
input.wpcf7-form-control.has-spinner.wpcf7-submit {
    border: 1px solid #8cc122;
    background: #8cc122;
    padding: 10px 17px !important;
    font: normal normal 300 16px Poppins;
    cursor: pointer;
    color: #fff !important;
    width: 40%;
}
.contact-send p {
    text-align: end;
}
.wpcf7-spinner {
    margin: 0 -13px;
}
.from_group label {
    color: #8cc122;
}
@media screen and (max-width:992px) {
    .cont_in {
    padding-top: 1em !important;}
    .divi_two {
    display: flex;
    flex-direction: column-reverse;
}
.left_info_contact, .right_info_contact {
    width: 95%;
    margin: auto;
}
.box_coloru {
    width:95%;
    margin: auto;
}
section#contact_info .container {
    width: 90%;
    margin: 0 auto;
}
input.wpcf7-form-control.has-spinner.wpcf7-submit {
    width:100%;
}
textarea.wpcf7-form-control.wpcf7-textarea.wpcf7-validates-as-required.text_new {
    padding: 12px 20px;
    margin: 13px 0;
}
.left_info_contact {
    margin-top: 2em;
}
.right_info_contact form  {
    padding-bottom: 2.6em;
}
}
/* akila */
@media screen and (min-width:320px) and (max-width:360px){
    section#contact_info .container {
    width: 100% !important;}
    .right_info_contact form{padding:0 !important;}
    .form_section {
    padding: 10px;
}
}
@media screen and (min-width:361px) and (max-width:380px){
    .right_info_contact form{
        padding: 10px !important;
    }
    section#contact_info .container {
    width: 100% !important;}
}
.cont_in ul li a {
    color: #fff;
}
</style>
<section id="contact_info">
    <div class="container">
        <div class="divi_two">
            <div class="left_info_contact">
                <div class="box_coloru">
                    <div class="contact_information">
                        <h3><?php echo get_field('contact_title'); ?></h3>
                        <p><?php echo get_field('contact_content'); ?></p>
                    </div>

                    <div class="cont_in">
                        <ul>
                            <li><img src="https://staging.madmorllc.com/wp-content/uploads/2023/02/telephone-new.png"><a href="<?php echo get_field('contact_link'); ?>"><?php echo get_field('contact_number'); ?></a></li>
                            <li><img src="https://staging.madmorllc.com/wp-content/uploads/2023/02/email.png"><a href="<?php echo get_field('contact_content_link'); ?>"><?php echo get_field('contact_email'); ?></a></li>
                        </ul>
                    </div>
                    <div class="social-icon-contact">
                         <ul>
                             <li><a href="<?php echo get_field('contact_facebook'); ?>"><img src="https://staging.madmorllc.com/wp-content/uploads/2023/02/facebook-app-symbol.png" alt="facebook"></a></li>
                             <li><a href="<?php echo get_field('contact_twitter'); ?>"><img src="https://staging.madmorllc.com/wp-content/uploads/2023/02/twitter.png" alt="twitter"></a></li>
                             <li><a href="<?php echo get_field('contact_insta'); ?>"><img src="https://staging.madmorllc.com/wp-content/uploads/2023/02/instagram.png" alt="instagram"></a></li>

                         </ul>
                    </div>
                </div>
            </div>
            <div class="right_info_contact">
                <?php echo do_shortcode('[contact-form-7 id="660" title="Contact us form"]'); ?>
            </div>
        </div>
    </div>
</section>
<script>
    $( document ).ready(function() {
     $( ".fullname" ).keypress(function(e) {
                    var key = e.keyCode;
                    if (key >= 48 && key <= 57) {
                        e.preventDefault();
                    }
                });
            });
    $( document ).ready(function() {
    $('input').on("cut copy paste",function(e) {
      e.preventDefault();
   });
});
</script>
<?php get_footer(); ?>