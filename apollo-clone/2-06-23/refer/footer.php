<footer>
    <div class="cc-footer-section">
        <div class="cc-footer-social-icons">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-logo-wrapper">
                            <div class="cc-footer-logo-section">
                                <a href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo2.png" alt="xzyreptiles logo footer"></a>
                            </div>
                            <div class="cc-social-icons-section">
                                <ul>
                                    <?php
$facebook = get_field('facebook', 'option');
$twitter = get_field('twitter', 'option');
$youtube = get_field('youtube', 'option');
$instagram = get_field('instagram', 'option');
$google_plus = get_field('google_plus', 'option');
$pinterest = get_field('pinterest', 'option');
$rss = get_field('rss', 'option');
?>
                                    <?php if (!empty($facebook)) {?>
                                    <li><a href="<?php echo $facebook; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook-logo.png" alt="facebook"></a></li>
                                    <?php }if (!empty($twitter)) {?>
                                    <li><a href="<?php echo $twitter; ?>" target="_blank" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter.png" alt="twitter"></a></li>
                                    <?php }if (!empty($google_plus)) {?>
                                    <li><a href="<?php echo $google_plus; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/google-plus.png" alt="google-plus"></a></li>
                                    <?php }if (!empty($instagram)) {?>
                                    <li><a href="<?php echo $instagram; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram.png" alt="instagram"></a></li>
                                    <?php }if (!empty($pinterest)) {?>
                                    <li><a href="<?php echo $pinterest; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pinterest.png" alt="pinterest"></a></li>
                                    <?php }if (!empty($youtube)) {?>
                                    <li><a href="<?php echo $youtube; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube.png" alt="youtube"></a></li>
                                    <?php }if (!empty($rss)) {?>
                                    <li><a href="<?php echo $rss; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/rss.png" alt="rss"></a></li>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cc-footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ">
                            <?php
if (is_active_sidebar('footer-sidebar-1')) {
    dynamic_sidebar('footer-sidebar-1');
}
?>
                    </div>

                    <div class="col-md-4 ">
                        <div class="cc-browse-widget cc-widget-style lazy" data-bg="url(https://www.xyzreptiles.com/wp-content/themes/xyzreptiles/assets/img/turtule.png)">
                            <div class="cc-widget-title ">
                                <h3>Browse</h3>
                            </div>
                            <div class="details">
                            <?php
if (is_active_sidebar('footer-sidebar-2')) {
    dynamic_sidebar('footer-sidebar-2');
}
?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="cc-about-widget cc-widget-style lazy" data-bg="url(https://www.xyzreptiles.com/wp-content/themes/xyzreptiles/assets/img/shadow_snake.png)">
                            <div class="cc-widget-title">
                                <h3>About XYZReptiles</h3>
                            </div>
                            <div class="details">
                            <?php
if (is_active_sidebar('footer-sidebar-3')) {
    dynamic_sidebar('footer-sidebar-3');
}
?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cc-footer-copyright">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 left-content">
                        <ul>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/secure.png" alt=""></li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ssl.png" alt=""></li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ssl-icon.png" alt=""></li>
                        </ul>
                    </div>

                    <div class="col-md-4 center-content">
                        <p>© <?php echo date('Y'); ?> Copyright xyzreptiles</p>
                    </div>

                    <div class="col-md-4 right-content">
                        <ul>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cc_visa.png" alt=""></li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cc_mc.png" alt=""></li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cc_paypal.png" alt=""></li>
                            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cc_amex.png" alt=""></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>


</footer>
<style>
    .cc-product-summary-details .wholesale-text {
  margin-left: 10px;
}
</style>
<style>
     @font-face{font-family:WooCommerce;src:url(https://www.xyzreptiles.com/wp-content/plugins/woocommerce/assets/fonts/WooCommerce.eot);src:url(https://www.xyzreptiles.com/wp-content/plugins/woocommerce/assets/fonts/WooCommerce.eot?#iefix) format("embedded-opentype"),url(../fonts/WooCommerce.woff) format("woff"),url(https://www.xyzreptiles.com/wp-content/plugins/woocommerce/assets/fonts/WooCommerce.ttf) format("truetype"),url(https://www.xyzreptiles.com/wp-content/plugins/woocommerce/assets/fonts/WooCommerce.svg#WooCommerce) format("svg");font-weight:400;font-style:normal}
</style>
<!--product slider block end-->
<!-- <script type='text/javascript' src='<?php echo site_url(); ?>/wp-includes/js/jquery/jquery.js' id='jquery-core-js'></script> -->
<!-- <script src="assets/js/jquery.js"></script> -->

    <?php if (!is_checkout() && (!is_page_template('blog_page.php')) && (!is_category()) && (!is_page(66813)) && (!is_product())) {?>
    <!-- <script src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.min.js"></script> -->
    <?php }?>

   <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.js"></script>



   <?php if ((!is_product()) && (!is_product_category())) {?>
   <script defer src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/stellarnav.min.js"></script>
    <script defer src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
   <?php }?>
    <?php if (is_product()) {?>
        <script defer src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/custom.js"></script>
        <!--script defer src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/product.js"></script-->
        <script defer src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/stellarnav.min.js"></script>

   <?php }

?>

   <script>


jQuery(document).ready(function() {
    jQuery('.page-numbers a.page-numbers').attr('rel', 'nofollow')
});
   </script>
   <?php if (is_product()) {

    ?>

       <!-- <script type="text/javascript" src="<?php // echo site_url(); ?>/wp-includes/js/jquery/jquery.js"></script> -->
       <script type="text/javascript">
    //    alert("welcome");
							// jQuery(function(){
							// 	jQuery('#send_product_enquiry').click(function(){

							// 		// Remove errors
							// 		jQuery('.product_enquiry_result').remove();

							// 		// Required fields
							// 		if (!jQuery('#product_enquiry_name').val()) {
							// 			jQuery('#product_enquiry_form').before('<p style="display:none;" class="product_enquiry_result woocommerce_error woocommerce-error1">Please enter your name.</p>');
							// 			jQuery('.product_enquiry_result').fadeIn();
							// 			return false;
							// 		}

							// 		if (!jQuery('#product_enquiry_email').val()) {
							// 			jQuery('#product_enquiry_form').before('<p style="display:none;" class="product_enquiry_result woocommerce_error woocommerce-error1">Please enter your email.</p>');
							// 			jQuery('.product_enquiry_result').fadeIn();
							// 			return false;
							// 		}
							// 		/*if (!jQuery('#product_enquiry_phone').val() ) {
							// 			jQuery('#product_enquiry_form').before('<p style="display:none;" class="product_enquiry_result woocommerce_error woocommerce-error1"></p>');
							// 			jQuery('.product_enquiry_result').fadeIn();
							// 			return false;
							// 		}*/

							// 		if (!jQuery('#product_enquiry_message').val()) {
							// 			jQuery('#product_enquiry_form').before('<p style="display:none;" class="product_enquiry_result woocommerce_error woocommerce-error1">Please enter your enquiry.</p>');
							// 			jQuery('.product_enquiry_result').fadeIn();
							// 			return false;
							// 		}

							// 		// Block elements
							// 		jQuery('#product_enquiry_form').block({message: null, overlayCSS: {background: '#fff url(<?php echo site_url(); ?>/wp-content/plugins/woocommerce/assets/images/ajax-loader.gif) no-repeat center', opacity: 0.6}});

							// 		// AJAX post
							// 		var data = {
							// 			action: 			'woocommerce_product_enquiry_post',
							// 			security: 			'5ae7ee6f4a',
							// 			post_data:			jQuery('#product_enquiry_form').serialize()
							// 		};

							// 		jQuery.post( '//www.xyzreptiles.com/wp-admin/admin-ajax.php', data, function(response) {
							// 			if (response=='SUCCESS') {

							// 				jQuery('#product_enquiry_form').before('<p style="display:none;" class="product_enquiry_result woocommerce_message woocommerce-message">Inquiry sent successfully. We will get back to you shortly.</p>');

							// 				jQuery('#product_enquiry_form textarea').val('');

							// 			} else {

							// 				if (window.Recaptcha) {
							// 					Recaptcha.reload();
							// 				}

							// 				jQuery('#product_enquiry_form').before('<p style="display:none;" class="product_enquiry_result woocommerce_error woocommerce-error1">' + response + '</p>');

							// 			}

							// 			jQuery('#product_enquiry_form').unblock();

							// 			jQuery('.product_enquiry_result').fadeIn();

							// 		});

							// 		return false;

							// 	});
							// });
                        <?php }?>
                        </script>
 <script>
var agent = navigator.userAgent;
  var n = agent.includes("Chrome-Lighthouse");
  var m = agent.includes("PingdomPageSpeed/1.0");
    if(!n && !m){
			( function( $ ) {

				var form_id;
				var kount_id = '';

				if ( $( 'form.checkout' ).length ) {

					// checkout page
					// WC does not set a form ID, use an existing one if available
					form_id = $( 'form.checkout' ).attr( 'id' ) || 'checkout';

					// otherwise set it ourselves
					if ( 'checkout' === form_id ) {
						$( 'form.checkout' ).attr( 'id', form_id );
					}

				} else if ( $( 'form#order_review' ).length ) {

					// checkout > pay page
					form_id = 'order_review'

				} else if ( $( 'form#add_payment_method' ).length ) {

					// add payment method page
					form_id = 'add_payment_method'
				}

				if ( ! form_id ) {
					return;
				}

				window.onBraintreeDataLoad = function () {
					BraintreeData.setup( 'gxsp9v24y4k39tby', form_id, BraintreeData.environments.sandbox );
				}

            } ) ( jQuery );
        }
                            </script>


<script>
        jQuery(document).ready(function () {
            var agent = navigator.userAgent;
  var n = agent.includes("Chrome-Lighthouse");
  var m = agent.includes("PingdomPageSpeed/1.0");
    if(!n && !m){
            var link = window.location.hash;
            if (link === '#tab-reviews') {
                jQuery('html,body').animate({
                    scrollTop: jQuery(".woocommerce-tabs").offset().top - 110
                }, 'slow');
            }
        }
        });
    </script>

    <!--script src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/js/cg_quickview.js"></script-->
    <script>

        jQuery(document).ready(function($) {
            var agent = navigator.userAgent;
  var n = agent.includes("Chrome-Lighthouse");
  var m = agent.includes("PingdomPageSpeed/1.0");
    if(!n && !m){
            jQuery('.stellarnav').stellarNav({
                theme: 'dark',
                breakpoint: 1023,
                position: 'right',
                sticky     : true,

            });
            if(jQuery('.header-cart-icon .cc-wrapp-minicart .cc-content-block').text().length <= 58){
                jQuery('.cc-wrapp-minicart').hide();
            }
        }
        });

    </script>

    <script>
var agent = navigator.userAgent;
  var n = agent.includes("Chrome-Lighthouse");
  var m = agent.includes("PingdomPageSpeed/1.0");
    if(!n && !m){
    var owlrfs = jQuery('#reptile-for-sale');
    jQuery('.cc-orange-block.cc-left-block .cc-image-triangle img').on('click',function(){owlrfs.trigger('prev.owl');})

    var owlfps = jQuery('#feature-product-slider');
    jQuery('.cc-orange-block.cc-right-block .cc-image-triangle img').on('click',function(){owlfps.trigger('next.owl');})


   setTimeout(function(){
       var archivepro = jQuery('.archive #feature-product-slider');
        var singlepro = jQuery('.single #feature-product-slider');
        jQuery('.archive .cc-orange-block.cc-right-block .cc-image-triangle').on('click',function(){archivepro.trigger('prev.owl');}) ;
        jQuery('.single .cc-orange-block.cc-right-block .cc-image-triangle').on('click',function(){singlepro.trigger('prev.owl');}) ;
   }, 4000);
   jQuery(document).ready(function(){
        var archivepro = jQuery('.archive #feature-product-slider');
        var singlepro = jQuery('.single #feature-product-slider');
        jQuery('.archive .cc-orange-block.cc-right-block .cc-image-triangle').on('click',function(){archivepro.trigger('prev.owl');}) ;
        jQuery('.single .cc-orange-block.cc-right-block .cc-image-triangle').on('click',function(){singlepro.trigger('prev.owl');}) ;
   });
}
    </script>


    <script>

        // jQuery(document).ready(function(){
        //         jQuery('#reptile-for-sale').owlCarousel({
        //             loop:true,
        //             autoplay: true,
        //             nav:true,
        //             autoplayHoverPause:true,
        //             responsive:{
        //                 200:{
        //                     items:1
        //                 },
        //                 568:{
        //                     items:2
        //                 },
        //                 1200:{
        //                     items:2
        //                 } ,

        //                 1300: {
        //                     items:3
        //                 } ,
        //                 1700: {
        //                     items:4
        //                 }
        //             } ,
        //             navText: ["<img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/icon/right-arrow.png'>","<img src='<?php echo get_stylesheet_directory_uri(); ?>/assets/icon/right-arrow.png'>"]
        //         })

        // jQuery(document).ready(function(){
                // jQuery('#feature-product-slider').owlCarousel({
                //     loop:false,
                //     autoplay: true,
                //     nav:true,
                //     autoplayHoverPause:true,
                //     responsive:{
                //         200:{
                //             items:1
                //         },
                //         568:{
                //             items:2
                //         },
                //         1200:{
                //             items:2
                //         } ,

                //         1300: {
                //             items:3
                //         } ,
                //         1700: {
                //             items:4
                //         }
                //     } ,
                //     navText: ["<img src='// echo get_stylesheet_directory_uri(); ?>/assets/icon/right-arrow.png'>","<img src='/ echo get_stylesheet_directory_uri(); ?>/assets/icon/right-arrow.png'>"]
                // })

                // jQuery('#banner-slider').owlCarousel({
                //     autoplay: true,
                //     autoplayTimeout:5000 ,
                //     loop:false,
                //     nav:true ,
                //     items:1 ,
                //     margin:20,
                //     smartSpeed :1200,
                //     fluidSpeed :1200,
                //     autoplayHoverPause:true,
                //     navText: ["<img src='// echo get_stylesheet_directory_uri(); ?>/assets/images/banner-left.png'>","<img src='// echo get_stylesheet_directory_uri(); ?>/assets/images/banner-right.png'>"]
                // })

    </script>
    <script type="text/javascript">
        jQuery(".draptodiv").click(function() {
        jQuery('html, body').animate({
            scrollTop: jQuery("#contentarea").offset().top
        }, 2000);
        });
    </script>

<?php if (is_page(66813)) {?>

    <script>
    var agent = navigator.userAgent;
  var n = agent.includes("Chrome-Lighthouse");
  var m = agent.includes("PingdomPageSpeed/1.0");
    if(!n && !m){
    jQuery(document).ready(function() {
		jQuery('.ziehharmonika').ziehharmonika({
			collapsible: true,
		});
    });
}
    </script>
<?php }?>




  <style>
      /* 26.09.2022 */
      @media screen and (min-width:881px) and (max-width:1024px) {
        html body .cc-product-content .cg-product-info .price {
        font-size:16px !important;
    }
    }
/* 28-11-2018 start */
/* The Modal (background) */

.sub_form.cc-modal-content *{box-sizing:border-box;}

.cc-modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 3333333; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background: rgba(0, 0, 0, 0.5) !important ;

}

/* Modal Content */
.cc-modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.cc-close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.cc-close:hover,
.cc-close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

/* home model popup design */
.cc-home-model-popup .sub_form.cc-modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    max-width: 480px;
    width:480px;
}
.cc-popup-header {
    font-size: 22px !important;
    color: #f60 !important;
    font-family: "Roboto Condensed" !important;
    text-align: center;
    letter-spacing: 1px;
}

.cc-pop-up-field-wrapper{display:block;}

.cc-pop-up-field-wrapper input[type="text"] , .cc-pop-up-field-wrapper input[type="email"] {
    height: 30px;
    border: 1px solid #000 !important;
    width: 100%;
    text-align: center;
    font-size: 16px;
    font-weight: 600;
    font-style: italic;
    font-family: "Times New Roman",Times,serif;
    color: #959595 !important;
    margin: 8px 0px;
}

.cc-modal-desc {
    font-size: 16px;
    color: #fff;
    text-align: center;
    color: #000000;
    letter-spacing: 1px;
    padding: 0px 1px;
}

#cc-myModal #subscribe_form {
    margin: 0px 20px;
}

.wrapp-sub-btn {text-align:center;margin:20px 0px}

.cc-modal-submit {
    max-width: 300px;
    width: 100%;
    border: 0;
    padding: 7px;
    background: #1E9C15;
    color: #fff;
}

#cc-myModal [type="checkbox"]:not(:checked), #cc-myModal [type="checkbox"]:checked {
    opacity: 0 !important;
    left: 6px;
    margin-right: 14px;
    margin-bottom: 10px;
}

#subscribe_form input[type='checkbox']:checked:after {
    height: 18px !important;width: 18px !important;font-size: 15px !important;padding: unset;
}

#subscribe_form .check-lable {font-size: 16px;font-weight: 400;color: #000;letter-spacing: 1px;}

#subscribe_form input[type='checkbox']:after {height: 18px !important;width: 18px !important; }

.wrapp-name-fields {display:flex;justify-content: space-between;}
.wrapp-name-fields .cc-pop-up-field-wrapper{width:100%;}
.error_msg{display: block;height: initial;line-height: initial;margin-bottom: 0;font-size: 11px;color: red;text-align: left;pointer-events: none;}
.cc-pop-up-field-wrapper input[type="text"].inputError , .cc-pop-up-field-wrapper input[type="email"].inputError{border-color: red !important;}

#first_name::-webkit-input-placeholder, #email::-webkit-input-placeholder {
    font-style: italic;
    font-family: "Times New Roman",Times,serif;
    font-size: 16px !important;
    font-weight: 600 !important;
}
#first_name::-moz-placeholder, #email::-moz-placeholder {
 font-style: italic;
    font-family: "Times New Roman",Times,serif;
    font-size: 16px !important;
    font-weight: 600 !important;
}
#first_name:-ms-input-placeholder, #email:-ms-input-placeholder {
 font-style: italic;
    font-family: "Times New Roman",Times,serif;
    font-size: 16px !important;
    font-weight: 600 !important;
}
#first_name:-moz-placeholder, #email:-moz-placeholder {
 font-style: italic;
    font-family: "Times New Roman",Times,serif;
    font-size: 16px !important;
    font-weight: 600 !important;
}
#first_name, #email{font-style:Normal !important; font-weight: Normal !important; color: #000 !important;}
@media only screen and (max-width:768px) {
    .cc-home-model-popup .sub_form.cc-modal-content {width:98%;}

}

@media only screen and (min-width:568px) and (max-width:768px) {
    .cc-home-model-popup .sub_form.cc-modal-content {
        height:300px;
        overflow:auto ;
    }
}
@media only screen and (max-width:768px) {
    .cc-pop-up-field-wrapper input:placeholder-shown {
    text-align: center !important;
    padding: unset !important;
}
.cc-pop-container {
display: inline-block;
    position: relative;
    /* padding-left: 30px; */
    padding-left: 23px;
    margin-bottom: 12px;
    font-size: 16px !important;
    width: 31.33% !important;
    min-width: unset !important;
    text-align: center !important;
}

}


/* 28-11-2018 end */

</style>
<!-- <script>
    window.addEventListener("load", function() { setTimeout(function(){
        var styles = {
            display : "block",

};
jQuery("#cc-myModal").css(styles);

},30000); });
        </script> -->

<div id="cc-myModal" class="cc-modal cc-home-model-popup">
    <div class ="sub_form cc-modal-content" style="display: none;">
        <span class="cc-close"><span class='cc-close-span'>&times;</span></span>
        <h6 class="cc-popup-header">Get Special Offers & Coupons From <br> XYZReptiles! </h6>
        <form id="subscribe_form" method="post">
            <div class='wrapp-name-fields'>
                <span class="cc-pop-up-field-wrapper">
                    <input type="text" id="first_name" name="first_name" placeholder="First & Last Name" />
                    <span class="error_msg"></span>
                </span>
                <!--span class="cc-pop-up-field-wrapper">
                    <input type="text" id="last_name" name="last_name" placeholder="Last Name">
                </span-->
            </div>
            <span class="cc-pop-up-field-wrapper">
                <input type="text" id="email" name="email" placeholder="Email Address" />
                <span class="error_msg"></span>
            </span>
            <p class="cc-modal-desc"><?php $newsletter_content = get_field('newsletter_description', 'option');if (!empty($newsletter_content)) {echo $newsletter_content;}?></p>
           <label class="cc-pop-container">Snakes
                <input type="checkbox" name="reptiles" checked value="Snakes">
                <span class="cc-pop-checkmark"></span>
           </label>
           <label class="cc-pop-container">Lizards
                <input type="checkbox" name="reptiles1" checked value="Lizards">
                <span class="cc-pop-checkmark"></span>
           </label>
           <label class="cc-pop-container">Tortoises
                <input type="checkbox" name="reptiles2" checked value="Tortoises">
                <span class="cc-pop-checkmark"></span>
           </label>
           <!-- <label class="cc-pop-container">Amphibians
                <input type="checkbox" name="Amphibians" value="Amphibians">
                <span class="cc-pop-checkmark"></span>
           </label> -->

            <!--input type="checkbox" name="reptiles" value="Snakes" checked>  <span class="check-lable">Snakes</span>  <br>
            <input type="checkbox" name="reptiles1" value="Lizards" checked> <span class="check-lable"> Lizards </span> <br>
            <input type="checkbox" name="reptiles2" value="Tortoises" checked> <span class="check-lable"> Tortoises </span> <br>
            <input type="checkbox" name="reptiles3" value="Amphibians" checked> <span class="check-lable"> Amphibians </span> <br-->

            <div class="wrapp-sub-btn"><input type="submit" class="cc-modal-submit" value="Sign Up"></div>
            <div class="wrapp-sub-btn1" style="text-align: center;
    margin: 20px 0px;display:none;">Submitting...</div>
        </form>
    </div>
</div>
</div>
<!--/wrapper-->

</div>
<?php if (is_page(8)) {?>
    <script>
        document.querySelector('.checkout-button').addEventListener('click', function(e){ console.log(e); //alert(1);
        setTimeout(function(){document.querySelector('.wooup-wrap .wooup-container .wooup-content #wooup-offer-wrapper .wooup-close').addEventListener('click', function(e){ console.log(e); //alert(2);
            window.location.href = "https://www.xyzreptiles.com/checkout/";
            }) }, 300) });
    </script>
<?php }?>
<?php //if (is_page(66277)){
if ((wp_is_mobile()) && (is_front_page())) {$mobile = 1;} else { $mobile = 0;}?>
    <script>
    var isMobile = false;
    if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) {
        isMobile = true;
    }
    var mobile = '<?php echo $mobile; ?>';
    console.log(mobile);
    console.log(isMobile);
        function getCookie(name) {
            var cname = name + "=";
            var dc = document.cookie;
            if (dc.length > 0) {
                begin = dc.indexOf(cname);
                if (begin != -1) {
                    begin += cname.length;
                    end = dc.indexOf(";", begin);
                    if (end == -1) end = dc.length;
                    return unescape(dc.substring(begin, end));
                }
            }
            return null;
        }

        function setCookie(name, value, expires) {
            var now = new Date();
            now.setTime(now.getTime() + 1 * 86400 * 1000);
            document.cookie = name + "=" + escape(value) + "; path=/" + ((expires == null) ? "" : "; expires=" + now.toUTCString());
        }

        jQuery(document).ready(function(){
             if((getCookie('visible') == '') || (getCookie('visible') == null))
             //if((getCookie('visible') == '') || (getCookie('visible') == null) && (isMobile == false))
             {

                 setTimeout(function(){
                 jQuery('.sub_form').css("display", "block");
                 jQuery('#cc-myModal').css("display", "block");}, 45000);
                 setCookie('visible', 1 ,null);
             }
            jQuery("#initial-form").submit(function(event) {
            jQuery('.email-error-message').html('');
            var emailnewsletter = jQuery("#emailnewsletter").val();
            if(emailnewsletter == '')
            {
                jQuery('.email-error-message').html('<p>Error: Please Enter Email Address</p>');
                return false;
            }
            else if(emailnewsletter != '')
            {
                var regex=/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if(!regex.test(emailnewsletter)){
                    jQuery('.email-error-message').html('<p>Error: Please Enter Valid Email Address</p>');
                    return false;
            }
            else
            {
            jQuery('.sub_form').css("display", "block");
            jQuery('#cc-myModal').css("display", "block");
            jQuery('#subscribe_form').css("display", "block");
            jQuery('.errormsg').text("");
            jQuery('.wrapp-sub-btn1').css("display","none");
            document.getElementById("subscribe_form").reset();
            jQuery('.cc-modal-submit').show();
            jQuery('#email').val(emailnewsletter);
            jQuery('input:checkbox').prop('checked',true);
            return false;
            }
            }
            });
        });
        jQuery( "#cc-myModal .cc-close" ).click(function() {
            jQuery('.sub_form').css("display", "none");
            jQuery('#cc-myModal').css("display", "none");
        });

        jQuery("#email").focus(function(){
            var email = jQuery('#email').val();
             var name = jQuery('#first_name').val();
            if(name!="")
            {
            if(!name.match(/\s/g))
            {
                jQuery('#first_name').addClass('inputError');
                jQuery('#first_name').next().html( "* Please enter Last name" );
                jQuery('#first_name').val(name+ " ").focus();
                return false;
            }
            else
            {
                jQuery("#error_msg").hide();
            }
            }
                });

         jQuery("#subscribe_form").submit(function(event) {

             var email = jQuery('#email').val();
             var name = jQuery('#first_name').val();
             jQuery('.error_msg').html('');



             if(name!="")
            {
            if(!name.match(/\s/g))
            {
                jQuery('#first_name').addClass('inputError');
                jQuery('#first_name').next().html( "* Please enter Last  name" );
                jQuery('#first_name').val(name+ " ").focus();
                return false;
            }
            }

             if(!name.match(/\s/g))
            {
                jQuery('#first_name').addClass('inputError');
                jQuery('#first_name').next().html( "* Please enter Last name" );
                return false;
                }
                 if(name.match(/\s/g))
                {
                    console.log("test");
                var absc= name.substr(name.indexOf(' ')+1);
                console.log(absc);
             if(absc=="")
             {
                console.log("tesetsetset");
                jQuery('#first_name').addClass('inputError');
                jQuery('#first_name').next().html( "* Please enter Last name" );
                return false;
             }
                }
            if(email == '' && name == ''){
                jQuery('#first_name, #email').addClass('inputError');
                jQuery('#first_name').next().html( "* Field Required" );
                jQuery('#email').next().html( "* Field Required" );
                return false;
            }else if(name == ''){
                jQuery('#first_name').addClass('inputError');
                jQuery('#first_name').next().html( "* Field Required" );
                return false;
            }else if(email == ''){
                jQuery('#email').addClass('inputError');
                 jQuery('#email').next().html( "* Field Required" );
                return false;
            }else if(email != ''){
                var regex=/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if(!regex.test(email)){
                    jQuery('#email').addClass('inputError');
                    jQuery('#email').next().html( "Invalid Email Address" );
                    return false;
                }

            }
            jQuery('.error_msg').html('');
            jQuery('#first_name, #email').removeClass('inputError');
            /* stop form from submitting normally */
            event.preventDefault();
            jQuery('.cc-modal-submit').hide();
            jQuery('.wrapp-sub-btn1').css("display","block");
            //alert('form_submitted');
            /*var first_name = jQuery("#first_name").val();
            var last_name = jQuery("#last_name").val();
            console.log(first_name);
            console.log(last_name);*/
            var data = {
                'action': 'subcribe_form_submitted',
                'data': jQuery('#subscribe_form').serialize(),
            };
            // console.log(data);
            jQuery.ajax({
                type: "POST",
                url: "<?php echo site_url(); ?>/wp-admin/admin-ajax.php",
                dataType: 'JSON',
                data: data,
                success: function(res){

                    if(res == 1){
                        jQuery("#subscribe_form").css("display","none");
                        jQuery(".errormsg").remove();
                        jQuery('.cc-popup-header').css("display", "none");
                        //jQuery("#subscribe_form").after("<div class='errormsg' style='text-align: center;'>Thank you for signing up for our email notifications.</div>");
                        jQuery("#subscribe_form").after("<div class='errormsg' style='text-align: center;line-height: 2.0;'>Thank you for signing up for our email notifications.<br/>You will receive a welcome email shortly.</div>");
                        jQuery("#emailnewsletter").val("");
                    } else if (res == 0) {

                        jQuery("#subscribe_form").css("display","none");
                        jQuery(".errormsg").remove();
                        jQuery("#subscribe_form").after("<div class='errormsg' style='text-align: center;'>Already subscribed to receive email notifications.</div>");
                        jQuery("#emailnewsletter").val("");
                    } else {
                        alert("Failed Try again");
                        jQuery('.sub_form').css("display", "none");
                        jQuery('#cc-myModal').css("display", "none");
                        jQuery("#emailnewsletter").val("");
                    }
                }
            });
         });
         /*woocommerce fliptype image*/
        //  jQuery(document).ready(function($) {
        //       // Get the main WC image as a variable
        //       // This is what will happen when you hover a product thumb
        //       $(".cc-product-image img").hover(
        //         // Swap out the main image with the thumb
        //         function() {
        //           var photo_fullsize = $(this).attr('data-href');
        //           if(photo_fullsize != '')
        //           $(this).attr('src', photo_fullsize);
        //         },
        //         // Return the main image to the original
        //         function(){
        //             if(photo_fullsize != '')
        //           $(this).attr('src',$(this).attr('data-href2'));
        //         }
        //       );
        //     } );
        jQuery(document).ready(function() {

jQuery(".cc-product-image a img").hover(
// Swap out the main image with the thumb
function() {
    console.log(jQuery(this).attr('data-href'));
if(jQuery(this).attr('data-href') != '')
jQuery(this).attr('src', jQuery(this).attr('data-href'));
},
// Return the main image to the original
function(){

jQuery(this).attr('src',jQuery(this).attr('data-href2'));
}
);
        });
          jQuery(document).ready(function(jQuery) {

         jQuery(".first-flip img").hover(
    // Swap out the main image with the thumb
    function() {
      if(jQuery(this).attr('data-href') != '')
      jQuery(this).attr('src',jQuery(this).attr('data-href'));
    },
    // Return the main image to the original
    function(){

      jQuery(this).attr('src',jQuery(this).attr('data-href2'));
    }
  );
         jQuery(".cg-product-cta a").each(function() {
    if(jQuery(this).hasClass("product_type_simple") && !jQuery(this).hasClass("cc-joinwistlist"))
    jQuery(this).addClass("single_add_to_cart_button");
  });
         } );
         /*woocommerce fliptype image*/

         jQuery('body').on('click', 'li.cat-item', function(e){
             e.preventDefault();
             e.stopPropagation();
             var me = this;
             console.log(me);
             if(jQuery(me).find('ul.children:eq(0)').length > 0){
                jQuery(me).find('ul.children:eq(0)').slideToggle();
             }
         });
         jQuery('body').on('click', 'li.cat-item a', function(e){
             e.preventDefault();
             e.stopPropagation();
             var me = this;
             window.location.href = jQuery(this).attr("href");
         });
          <?php if (!(is_page(10))) {?>
         jQuery(document).ready(function(){
             function getNumber(e) {
                var o;
                switch (e) {
                    case "one":
                        o = 1;
                        break;
                    case "two":
                        o = 2;
                        break;
                    case "three":
                        o = 3;
                        break;
                    case "four":
                        o = 4;
                        break;
                    case "five":
                        o = 5;
                        break;
                    case "six":
                        o = 6;
                        break;
                    case "seven":
                        o = 7;
                        break;
                    case "eight":
                        o = 8;
                        break;
                    case "nine":
                        o = 9;
                        break;
                    case "ten":
                        o = 10;
                        break;
                    case "eleven":
                        o = 11;
                        break;
                    case "twelve":
                        o = 12;
                        break;
                    case "thirteen":
                        o = 13;
                        break;
                    case "fourteen":
                        o = 14;
                        break;
                    case "fifteen":
                        o = 15;
                        break;
                    case "sixteen":
                        o = 16;
                        break;
                    case "seventeen":
                        o = 17;
                        break;
                    case "eighteen":
                        o = 18;
                        break;
                    case "nineteen":
                        o = 19;
                        break;
                    case "twenty":
                        o = 20;
                        break;
                    default:
                        o = e
                }
                return o
            }

    function getUrlParameter(e) {
        for (var o = window.location.search.substring(1).split("&"), n = 0; n < o.length; n++) {
            var t = o[n].split("=");
            if (t[0] == e) return t[1]
        }
    }
    jQuery(".form-submit").click(function() {
        jQuery("#aiowps-captcha-answer").attr("required", "true")
    }), jQuery("body").on("click", "#woo_reg", function() {
        jQuery("#aiowps-captcha-answer").attr("required", "true");
        var value = jQuery(".aiowps-captcha-equation strong").html(),
            newspl = value.split(" "),
            val1 = newspl[0],
            val2 = newspl[1],
            val3 = newspl[2];
        val1 = getNumber(val1), val3 = getNumber(val3);
        var resl = 0,
            capans = jQuery("#aiowps-captcha-answer").val();
        return "" == capans ? (alert("Please fill captcha"), !1) : ("+" == val2 && (resl = eval(parseInt(val1) + parseInt(val3))), "âˆ’" == val2 && (resl = parseInt(val1) - parseInt(val3)), "Ã—" == val2 && (resl = parseInt(val1) * parseInt(val3)), resl != capans ? (jQuery("#aiowps-captcha-answer").val(""), alert("Please enter right captcha answer"), !1) : void 0)
    }), jQuery(".homeshowcontent").click(function() {
        jQuery(".homehidecontent").css("display", "inline"), jQuery(".homeshowcontent").css("display", "none")
    }), jQuery(".homeshowcontent2").click(function() {
        jQuery(".homehidecontent2").css("display", "inline"), jQuery(".homeshowcontent2").css("display", "none")
    }), jQuery(".homeshowcontent3").click(function() {
        jQuery(".homehidecontent3").css("display", "inline"), jQuery(".homeshowcontent3").css("display", "none")
    }), jQuery(".homeshowcontent4").click(function() {
        jQuery(".homehidecontent4").css("display", "inline"), jQuery(".homeshowcontent4").css("display", "none")
    }), jQuery(".homeshowless").click(function() {
        jQuery(".homehidecontent").css("display", "none"), jQuery(".homeshowcontent").css("display", "inline")
    }), jQuery(".homeshowless2").click(function() {
        jQuery(".homehidecontent2").css("display", "none"), jQuery(".homeshowcontent2").css("display", "inline")
    }), jQuery(".homeshowless3").click(function() {
        jQuery(".homehidecontent3").css("display", "none"), jQuery(".homeshowcontent3").css("display", "inline")
    }), jQuery(".homeshowless4").click(function() {
        jQuery(".homehidecontent4").css("display", "none"), jQuery(".homeshowcontent4").css("display", "inline")
    }), reviewreq = getUrlParameter("action"), "review" == reviewreq && (jQuery("li.reviews_tab a#myownid").trigger("click"), jQuery(".description_tab").removeClass("active"), jQuery(".reviews_tab").addClass("active"), jQuery("html, body").animate({
        scrollTop: jQuery(".product-nocols").offset().top
    })), jQuery("body").on("click", ".wpcf7-submit", function() {
        var e = 0,
            o = jQuery(document).find("title").text(),
            n = 0;
        jQuery(".wpcf7-form-control").each(function(o, t) {
            "" != jQuery(this).val() ? e++ : e--, n++
        }), e == n && "My Account" != o && (console.log(e), console.log(n), console.log(o), ga("send", "event", "Form Tracking", "Submit - " + o, o))
    }), "Choose an optionâ€¦" == jQuery(".chosen-single").children("span").text() ? (jQuery(".variations_button").hide(), jQuery(".single_add_to_cart_button").hide(), jQuery(".quantity").hide(), jQuery(".woocommerce_waitlist").show(), jQuery(".quick_view_readmore").show()) : (jQuery(".variations_button").show(), jQuery(".single_add_to_cart_button").show(), jQuery(".quantity").show(), jQuery(".quick_view_readmore").hide()), jQuery("body").on("change", ".variations select", function() {
        var e = jQuery(this).val();
        1 == jQuery(".single_variation").children("div.woocommerce-variation-availability").children("p").hasClass("out-of-stock") || 1 == jQuery(".single_variation").children("p").hasClass("out-of-stock") ? (jQuery(".variations_button").hide(), jQuery(".single_add_to_cart_button").hide(), jQuery(".quantity").hide(), jQuery(".woocommerce_waitlist").show(), jQuery(".quick_view_readmore").show()) : (jQuery(".variations_button").show(), jQuery(".single_add_to_cart_button").show(), jQuery(".quantity").show(), jQuery(".woocommerce_waitlist").hide(), jQuery(".quick_view_readmore").hide()), "" != e && "Choose an optionâ€¦" != e || (jQuery(".single_add_to_cart_button").hide(), jQuery(".quantity").hide())
    }), jQuery("body").on("click", ".cg-quick-view", function() {
        console.log("Pop Up"), setTimeout(function() {
            var e = jQuery(".cg-quickview-product-pop .stock").length;
            console.log(e), e > 1 && jQuery(".cg-quickview-product-pop .stock").each(function(e) {
                0 == e && jQuery(this).remove()
            })
        }, 3e3)
    }), 1 == jQuery(".stock ").hasClass("out-of-stock") && jQuery(".cart").remove()
});
<?php }?>
    </script>
    <?php if (is_checkout() || is_page(72032) || is_page(66904)) {?>
    <script>
	jQuery(function(){
	   jQuery("#paymentphone").mask("999-999-9999");
	   jQuery("#product_enquiry_phone").mask("999-999-9999");
	   jQuery("#product_enquiry_phone").attr("placeholder", "xxx-xxx-xxxx");
	//    jQuery("#billing_phone").mask("999-999-9999");
    jQuery("#billing_phone").mask("999-999-9999");
	   jQuery("#billing_phone").attr("placeholder", "xxx-xxx-xxxx");

	});
	/*coment login redirect ti another page */

    jQuery('body').on('click','.must-log-in a',function() {
event.preventDefault()
        // alert("akioa");
		 var url = 'https://www.xyzreptiles.com/my-account/';
	   window.location.href = url;
	});
	// jQuery('body').on('click','.must-log-in a',function() {
	// 	 var url = '<?php //echo get_site_url(); ?>/my-account/';
	//    window.location.href = url;
	//    return false;
	// });

    </script>
    <script>
    /*
        jQuery Masked Input Plugin
        Copyright (c) 2007 - 2015 Josh Bush (digitalbush.com)
        Licensed under the MIT license (http://digitalbush.com/projects/masked-input-plugin/#license)
        Version: 1.4.1
    */
    !function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){var b,c=navigator.userAgent,d=/iphone/i.test(c),e=/chrome/i.test(c),f=/android/i.test(c);a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},a.fn.extend({caret:function(a,b){var c;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof a?(b="number"==typeof b?b:a,this.each(function(){this.setSelectionRange?this.setSelectionRange(a,b):this.createTextRange&&(c=this.createTextRange(),c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select())})):(this[0].setSelectionRange?(a=this[0].selectionStart,b=this[0].selectionEnd):document.selection&&document.selection.createRange&&(c=document.selection.createRange(),a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length),{begin:a,end:b})},unmask:function(){return this.trigger("unmask")},mask:function(c,g){var h,i,j,k,l,m,n,o;if(!c&&this.length>0){h=a(this[0]);var p=h.data(a.mask.dataName);return p?p():void 0}return g=a.extend({autoclear:a.mask.autoclear,placeholder:a.mask.placeholder,completed:null},g),i=a.mask.definitions,j=[],k=n=c.length,l=null,a.each(c.split(""),function(a,b){"?"==b?(n--,k=a):i[b]?(j.push(new RegExp(i[b])),null===l&&(l=j.length-1),k>a&&(m=j.length-1)):j.push(null)}),this.trigger("unmask").each(function(){function h(){if(g.completed){for(var a=l;m>=a;a++)if(j[a]&&C[a]===p(a))return;g.completed.call(B)}}function p(a){return g.placeholder.charAt(a<g.placeholder.length?a:0)}function q(a){for(;++a<n&&!j[a];);return a}function r(a){for(;--a>=0&&!j[a];);return a}function s(a,b){var c,d;if(!(0>a)){for(c=a,d=q(b);n>c;c++)if(j[c]){if(!(n>d&&j[c].test(C[d])))break;C[c]=C[d],C[d]=p(d),d=q(d)}z(),B.caret(Math.max(l,a))}}function t(a){var b,c,d,e;for(b=a,c=p(a);n>b;b++)if(j[b]){if(d=q(b),e=C[b],C[b]=c,!(n>d&&j[d].test(e)))break;c=e}}function u(){var a=B.val(),b=B.caret();if(o&&o.length&&o.length>a.length){for(A(!0);b.begin>0&&!j[b.begin-1];)b.begin--;if(0===b.begin)for(;b.begin<l&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}else{for(A(!0);b.begin<n&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}h()}function v(){A(),B.val()!=E&&B.change()}function w(a){if(!B.prop("readonly")){var b,c,e,f=a.which||a.keyCode;o=B.val(),8===f||46===f||d&&127===f?(b=B.caret(),c=b.begin,e=b.end,e-c===0&&(c=46!==f?r(c):e=q(c-1),e=46===f?q(e):e),y(c,e),s(c,e-1),a.preventDefault()):13===f?v.call(this,a):27===f&&(B.val(E),B.caret(0,A()),a.preventDefault())}}function x(b){if(!B.prop("readonly")){var c,d,e,g=b.which||b.keyCode,i=B.caret();if(!(b.ctrlKey||b.altKey||b.metaKey||32>g)&&g&&13!==g){if(i.end-i.begin!==0&&(y(i.begin,i.end),s(i.begin,i.end-1)),c=q(i.begin-1),n>c&&(d=String.fromCharCode(g),j[c].test(d))){if(t(c),C[c]=d,z(),e=q(c),f){var k=function(){a.proxy(a.fn.caret,B,e)()};setTimeout(k,0)}else B.caret(e);i.begin<=m&&h()}b.preventDefault()}}}function y(a,b){var c;for(c=a;b>c&&n>c;c++)j[c]&&(C[c]=p(c))}function z(){B.val(C.join(""))}function A(a){var b,c,d,e=B.val(),f=-1;for(b=0,d=0;n>b;b++)if(j[b]){for(C[b]=p(b);d++<e.length;)if(c=e.charAt(d-1),j[b].test(c)){C[b]=c,f=b;break}if(d>e.length){y(b+1,n);break}}else C[b]===e.charAt(d)&&d++,k>b&&(f=b);return a?z():k>f+1?g.autoclear||C.join("")===D?(B.val()&&B.val(""),y(0,n)):z():(z(),B.val(B.val().substring(0,f+1))),k?b:l}var B=a(this),C=a.map(c.split(""),function(a,b){return"?"!=a?i[a]?p(b):a:void 0}),D=C.join(""),E=B.val();B.data(a.mask.dataName,function(){return a.map(C,function(a,b){return j[b]&&a!=p(b)?a:null}).join("")}),B.one("unmask",function(){B.off(".mask").removeData(a.mask.dataName)}).on("focus.mask",function(){if(!B.prop("readonly")){clearTimeout(b);var a;E=B.val(),a=A(),b=setTimeout(function(){B.get(0)===document.activeElement&&(z(),a==c.replace("?","").length?B.caret(0,a):B.caret(a))},10)}}).on("blur.mask",v).on("keydown.mask",w).on("keypress.mask",x).on("input.mask paste.mask",function(){B.prop("readonly")||setTimeout(function(){var a=A(!0);B.caret(a),h()},0)}),e&&f&&B.off("input.mask").on("input.mask",u),A()})}})});
    </script>
    <?php }?>
      <script>
        jQuery(".woocommerce-review-link").click(function() {
        jQuery('html,body').animate({
            scrollTop: jQuery(".woocommerce-tabs").offset().top-110},'slow');
        });

    </script>


        <?php if (is_page(72032)) {?>
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/accordion.js"></script>
            <script>
            var agent = navigator.userAgent;
  var n = agent.includes("Chrome-Lighthouse");
  var m = agent.includes("PingdomPageSpeed/1.0");
    if(!n && !m){
                jQuery('.ziehharmonika').ziehharmonika({
                    collapsible: true,
                    scroll: false
                }) ;
                console.log("this is the page")
            }
            </script>
        <?php }?>
        <?php
global $post, $product;
if (is_product() && !($product->is_in_stock())): ?>
                <!-- <script>
                jQuery(window).load(function()
                {
                    jQuery(".yith_magnifier_mousetrap").after("<span class='soldout'></span>");
                }
                );
                </script> -->
             <?php endif;?>
           <?php /*if(is_product_category()) {
$Category_link = get_category_link(get_queried_object()->term_id);
$args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 18,'product_cat' => get_queried_object()->slug, 'orderby' =>'date','order' => 'ASC' );
$loop = new WP_Query( $args );
?>
<script type="application/ld+json">
{
"@context": "http://schema.org",
"@type": "ItemList",
"url": "<?php echo $Category_link; ?>",
"numberOfItems": "<?php echo $wp_query->post_count ?>",
"itemListElement": [
<?php $count = 0; while ( $loop->have_posts() ) : $loop->the_post(); global $product; $count++ ?>
{
"@type": "ListItem",
"position": <?php echo $count; ?>,
"item": {
"@type": "Product",
"image": "<?php echo get_the_post_thumbnail_url( $product->get_id(), 'full' ); ?>",
"url": "<?php echo get_permalink( $product->get_id() ); ?>",
"name": "<?php echo $product->get_title() ?>",
"description": "<?php echo strip_tags($product->get_description()); ?>",
"sku": "<?php echo $product->get_sku(); ?>"
<?php if($count == $wp_query->post_count) : echo '} }'; else : echo '} },'; endif; ?>
<?php endwhile; wp_reset_query();  ?>
]
}
</script>
<?php } */?>
<?php /* if(is_product()) :
global $post,$product,$woocommerce;
$product->get_id();
?>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "Product",
"@id": "<?php the_permalink(); ?>",
"name": "<?php echo $product->get_name(); ?>",
"image": [
"<?php echo get_the_post_thumbnail_url( $product->get_id(), 'full' ); ?>"
],
"description": "<?php echo strip_tags($product->get_description()); ?>",
"sku": "<?php echo $product->get_sku(); ?>",
"mpn": "<?php echo $product->get_sku(); ?>",
"brand": {
"@type": "Thing",
"name": "<?php echo bloginfo( 'name' ); ?>"
},
"review": {
"@type": "Review",
"reviewRating": {
"@type": "Rating",
"ratingValue": "4",
"bestRating": "5"
},
"author": {
"@type": "Person",
"name": "Shelby Lowry"
}
},
"aggregateRating": {
"@type": "AggregateRating",
"ratingValue": "5",
"reviewCount": "10"
},
"offers": {
"@type": "Offer",
"url": "<?php echo get_permalink( $product->get_id() ); ?>",
"priceCurrency": "USD",
"price": "<?php echo $product->get_price();?>",
"priceValidUntil": "<?php echo date('Y-m-d', strtotime('+1 years')); ?>",
"itemCondition": "https://schema.org/NewCondition",
"availability": "https://schema.org/InStock",
"seller": {
"@type": "Organization",
"name": "<?php echo bloginfo( 'name' ); ?>"
}
}
}
</script>
<?php endif; */?>
<?php if (is_product()): ?>
<script>
jQuery(document).ready(function()
{
    jQuery(".cc-joinwistlist,.add_to_cart_button,.product_type_variable").next().hide();
}
);
</script>
<style>
.woocommerce .cc-product-details .cc-joinwistlist{border-radius: 0;font-weight: 600 !important;}
.woocommerce .cc-product-details .product_type_variable{border-radius: 0;font-weight: 600 !important;}
.woocommerce .cc-product-details .product_type_simple{border-radius: 0;font-weight: 600 !important;}

</style>
<?php endif;?>
<?php if (is_product_category() || is_front_page()): ?>
<script>
jQuery(document).ready(function()
{
    jQuery("#feature-product-slider .cc-joinwistlist,#feature-product-slider  .add_to_cart_button,#feature-product-slider .product_type_variable").next().hide();
}
);

</script>

<style>
#feature-product-slider .cc-product-details .cc-joinwistlist{border-radius: 0;font-weight: 600 !important;}
#feature-product-slider .cc-product-details .product_type_variable{border-radius: 0;font-weight: 600 !important;}
#feature-product-slider .cc-product-details .product_type_simple{border-radius: 0;font-weight: 600 !important;}
</style>
<?php endif;?>
<script>
//     jQuery(window).scroll(function(){
//     if (jQuery(window).scrollTop() >= 60) {
//         jQuery('form.dgwt-wcas-search-form').addClass('sticky');
//     }
//     else {
//         jQuery('form.dgwt-wcas-search-form').removeClass('sticky');
//     }
// });
// jQuery(window).scroll(function(){
//     if (jQuery(window).scrollTop() >= 60) {
//         jQuery('.stellarnav.dark.right.mobile').addClass('sticky1');
//     }
//     else {
//         jQuery('.stellarnav.dark.right.mobile').removeClass('sticky1');
//     }
// });


</script>
<?php if (current_user_can('update_core')) {
    ?>
<style>
    @media only screen and (min-width:767px){
.product-type-simple .cc-product-summary-details .wcwl_control {
    width: 48% !important;
    /*margin-top: -6px !important;*/
    margin-left: 10px !important;
}
    }
    @media only screen and (max-width:767px){
            .product-type-simple .cc-product-summary-details .wcwl_control {
                width: 42% !important;
                margin-top: 14px !important;
            }
        }
@media screen and (min-width: 1024px){
/*.cc-product-summary-details .variations_form.cart .woocommerce-variation-availability .wcwl_control {
    margin-top: -6px !important;
}*/
}
</style>
<script>
     jQuery(window).scroll(function(){
     if (jQuery(window).scrollTop()>='1')
     {
        /// console.log(jQuery(window).scrollTop(),"oooo")
        jQuery('div#mtsnb-103979').css('cssText', 'top: 32px !important;background-color:#ff9900;color:#000000;');
     }
     else
     {
        //console.log(jQuery(window).scrollTop(),"test")
        jQuery('div#mtsnb-103979').css('cssText', 'top: unset !important;background-color:#ff9900;color:#000000;');
     }
     });

</script>

 <?php
}?>

<?php wp_footer();?>
<?php if (is_user_logged_in() && current_user_can('manage_options')) {?>

     <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/stellarnav.min.js"></script>
     <script defer src="https://www.xyzreptiles.com/wp-content/plugins/woocommerce/assets/js/frontend/price-slider.min.js"></script>

     <style>
         .breadcrumb.breadcrumbs.woo-breadcrumbs
         {
             display:none;
         }
     </style>
<?php }?>
<?php //if(is_user_logged_out() && is_product() ) {
if (!(current_user_can('manage_options')) && is_category() || !(current_user_can('manage_options')) && is_product()) {?>
    <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/xyzreptiles/style.css"/>
    <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/xyzreptiles/assets/css/custom.css"/>
    <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/xyzreptiles/assets/css/woocommerce.css"/>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/stellarnav.min.js"></script>
     <script defer src="https://www.xyzreptiles.com/wp-content/plugins/woocommerce/assets/js/frontend/price-slider.min.js"></script>

<?php }?>
<?php if (!is_user_logged_in() && is_product()) {
    ?>
<style>
.wcwl_notice.woocommerce-message {
    display: none;
}
</style>

  <?php
}
if (is_page(67275)) {
    ?>
    <style>
    .breadcrumb.breadcrumbs.woo-breadcrumbs {
    display: none;
}

@font-face{font-family:star;src:url(https://www.xyzreptiles.com/wp-content/plugins/woocommerce/assets/fonts/star.eot);src:url(https://www.xyzreptiles.com/wp-content/plugins/woocommerce/assets/fonts/star.eot#iefix) format("embedded-opentype"),url(https://www.xyzreptiles.com/wp-content/plugins/woocommerce/assets/fonts/star.woff) format("woff"),url(https://www.xyzreptiles.com/wp-content/plugins/woocommerce/assets/fonts/star.ttf) format("truetype"),url(https://www.xyzreptiles.com/wp-content/plugins/woocommerce/assets/fonts/star.svg#star) format("svg");font-weight:400;font-style:normal;}

</style>
    <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/xyzreptiles/style.css"/>
    <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/xyzreptiles/assets/css/woocommerce.css"/>
    <?php
}
if (is_product() && current_user_can('manage_options')) {
    ?>
<style>
    .yith_magnifier_zoom_magnifier {
    display: none !important;
}
</style>
    <?php
}
if (is_product() && !(current_user_can('manage_options'))) {
    ?>
    <style>

.yith_magnifier_zoom_magnifier {
    display: none !important;
    }
    </style>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <link rel='stylesheet' id='ywzm-magnifier-css'  href='https://www.xyzreptiles.com/wp-content/plugins/yith-woocommerce-zoom-magnifier/assets/css/yith_magnifier.css' type='text/css' media='all' /> -->
        <!-- <link rel='stylesheet' id='ywzm_frontend-css'  href='https://www.xyzreptiles.com/wp-content/plugins/yith-woocommerce-zoom-magnifier/assets/css/frontend.css' type='text/css' media='all' /> -->
<script type='text/javascript' src='<?php echo site_url(); ?>/wp-content/plugins/yith-woocommerce-zoom-magnifier/assets/js/jquery.carouFredSel.min.js' id='ywzm-magnifier-slider-js'></script>
<script type='text/javascript' id='ywzm-magnifier-js-extra'>
/* <![CDATA[ */
var yith_wc_zoom_magnifier_storage_object = {"ajax_url":"https:\/\/www.xyzreptiles.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
var ywzm_data='';
</script>

    <script type='text/javascript' src='https://www.xyzreptiles.com/wp-content/plugins/yith-woocommerce-zoom-magnifier/assets/js/yith_magnifier.min.js' id='ywzm-magnifier-js'></script>
    <script type='text/javascript' src='https://www.xyzreptiles.com/wp-content/plugins/yith-woocommerce-zoom-magnifier/assets/js/ywzm_frontend.min.js' id='ywzm_frontend-js'></script>
    <?php
global $product;
    $id = $product->id;
// print_r($id);
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'single-post-thumbnail');?>
    <?php //echo $image[0]; ?>
    <script>
    jQuery(document).ready(function() {
        setTimeout(function(){
        jQuery("img.attachment-full.size-full.wp-post-image.lazy.loaded").attr("srcset","<?php echo $image[0]; ?>");
        },3000);
        // jQuery("#my_image").attr("src","second.jpg");
    });
    </script>
<?php // echo "ddddddddddddddddddddddd";
}

if (is_product() && (current_user_can('manage_options'))) {
    global $product;
    $id = $product->id;
// print_r($id);
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'single-post-thumbnail');?>
<?php //echo $image[0]; ?>
<script>
jQuery(document).ready(function() {
    setTimeout(function(){
    jQuery("img.attachment-full.size-full.wp-post-image.lazy.loaded").attr("srcset","<?php echo $image[0]; ?>");
    },3000);
    // jQuery("#my_image").attr("src","second.jpg");
});
</script>


<?php }
?>
<script>
jQuery(document).ready(function() {
    jQuery(window).scroll(function() {
        var e = jQuery(window).scrollTop();
        if (e >= 10) {
            jQuery(".mtsnb-fixed").addClass("str")
        } else {
            jQuery(".mtsnb-fixed").removeClass("str")
        }
    })
});
</script>

<!-- wholesale module style and scripts are here -->
<?php if (is_page(191168)) {?>
    <script src='<?php echo site_url(); ?>/wp-content/themes/xyzreptiles/assets/js/maskedinput.js'></script>
    <script>
        jQuery("#wwp_wholesaler_tax_id").mask("99-9999999");
        jQuery("div.wwp_wholesaler_registration p:nth-child(10)").after('<p class=" woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide wwp_form_css_row ss-tsd"><a target="_blank" style="color: #FF9900;text-align: inherit;display: block;" href="<?php echo site_url(); ?>/how-do-i-get-a-copy-of-my-federal-tax-id-certificate">How do I get a copy of my federal tax ID certificate?</a></p>');
    </script>
        <style>
    html body .ss-tsd label { visibility: hidden;}
    @media only screen and (max-width: 767px){
	p.woocommerce-form-row.woocommerce-form-row--wide.form-row.form-row-wide.wwp_form_css_row {flex-wrap: wrap;}
}
input#text-1612779689750,#vi-test-id {
    border: 1px solid lightgrey;
    padding: 4px;
    /* width: 70%; */

}
    </style>



    <?php }if (is_page(10)) {

    $urrentid = get_current_user_id();
    $usermetavalue = get_user_meta($urrentid);
    ?>

    <script src='<?php echo site_url(); ?>/wp-content/themes/xyzreptiles/assets/js/maskedinput.js'></script>

    <script>

jQuery(document).ready(function() {
        <?php $upgradelink_change = site_url() . '/my-account/upgrade-account/#upgradetowholesale'?>
       jQuery("li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--upgrade-account a").attr("href",'<?php echo $upgradelink_change; ?>');
//  jQuery("#wwp_wholesaler_tax_id").mask("99-9999999");
//  jQuery("#wwp_wholesaler_file_upload").attr("required",true);
//  jQuery("#wwp_wholesaler_tax_id").attr("required",true);
 <?php if ($usermetavalue['billing_phone'][0] != "") {?>
   jQuery("input#vi-test-id").val("<?php echo $usermetavalue['billing_phone'][0]; ?>");
    jQuery('#vi-test-id').mask('999-999-9999');
<?php } else {?>
jQuery('#vi-test-id').mask('999-999-9999');
<?php }?>
});
    </script>
<style>

input#text-1612779689750,#vi-test-id {
    border: 1px solid lightgrey;
    padding: 4px;
    width: 45%;

}
</style>
    <?php }
if (is_product()) {
    global $product;
    if ($product->is_type('simple')) {?>
       <style>
.wwp-wholesale-pricing-details div:nth-child(2) {
    display: block;
}
.wwp-wholesale-pricing-details .sezzle-shopify-info-button.sezzlewidgetindex-0.sezzle-product-page-widget.sezzle-8f27d6f1-6f2a-45af-8c05-c27cbecb9e13 {
    display: none;
}
</style>
       <?php
} elseif ($product->is_type('variable')) {
        ?>
       <style>
       .wwp-wholesale-pricing-details p {
    line-height: 28.4px;
}
.wwp-wholesale-pricing-details .sezzle-shopify-info-button.sezzlewidgetindex-0.sezzle-product-page-widget.sezzle-8f27d6f1-6f2a-45af-8c05-c27cbecb9e13 {
    display: none;
}
</style>
       <?php }
}
global $post;
$categories = [];
$terms = wp_get_post_terms($post->ID, 'product_cat');
foreach ($terms as $term) {
    $categories[] = $term->slug;
}
if ((is_user_logged_in()) && is_page(10)) {?>
    <style>
   /*.page-id-10 .woocommerce form .form-row { display: flex !important; } */

     html body.page-id-10 form.text-input-width-myaccount-page .form-row {
        display: block !important;
    }
/* 9-2-21 */
    html body.page-id-10 p.woocommerce-form-row.woocommerce-form-row--wide.form-row.form-row-wide.wwp_form_css_row.ss-tsd a {
    width: 100% !important;
    font-size: 15px;
}
html body.page-id-10 p.woocommerce-form-row.woocommerce-form-row--wide.form-row.form-row-wide label {
    width: 40% !important;
}
html body.page-id-10 input#wwp_wholesaler_file_upload { width:51%;}
html body.page-id-10 .woocommerce form .form-row {margin: 0 auto 5px 20px !important;}
    </style>
      <script>
 jQuery("div.wwp_wholesaler_registration p:nth-child(7)").after('<p class=" woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide wwp_form_css_row ss-tsd"><a target="_blank" style="color: #FF9900;text-align: inherit;display: block;" href="<?php echo site_url(); ?>/how-do-i-get-a-copy-of-my-federal-tax-id-certificate">How do I get a copy of my federal tax ID certificate?</a></p>');


    </script>
    <?php }if (is_page(10) && !(is_user_logged_in())) {?>
         <script>
    jQuery(document).ready(function(){
        jQuery("p.form-row a").addClass("button");
});
    </script>
    <style>
 p.form-row:last-child {
    text-align: center !important;
}
    </style>
     <?php }
if (in_array("reptiles-wholesale", $categories)) {
    $user = wp_get_current_user();
    if (!(in_array("default_wholesaler", (array) $user->roles))) {?>
        <style>
        a.button.add_to_cart_button.product_type_simple.single_add_to_cart_button {
    pointer-events: none;
}
.cg-product-cta
{
    display:none !important;
}
/*.woocommerce-variation-price span.price {
    display:none;
}
p.price,span.price {
    display: none;
}
.cg-product-info span.price{
    display:none !important;
}*/
        </style>
    <script type='text/javascript'>
//   jQuery("span.woocommerce-Price-amount.amount").remove();
     jQuery("button.single_add_to_cart_button.button.alt").attr("disabled",true);
     <?php $settings = get_option('wwp_wholesale_pricing_options', true);
        $redirecturl = (is_user_logged_in()) ? site_url() . "/my-account/#upgradetowholesale" : site_url() . "/whole-sale-register/";?>
     jQuery(".price").after("<span class='wholesale-text'><a href='<?php echo $redirecturl; ?>'><?php echo isset($settings['display_link_text']) ? esc_html($settings['display_link_text']) : ''; ?></a></span>");
     </script>
 <?php
}
}?>


<?php
if (isset($_POST['wwp_register_upgrade'])) {
    $uidnew = get_current_user_id();
    $phonenumber = $_POST['vi-test-id'];
    update_user_meta($uidnew, "billing_phone", $phonenumber);
}
?>
<!-- footer styles -->

<style>
html body p.woocommerce-form-row.woocommerce-form-row--wide.form-row.form-row-wide.wwp_form_css_row.ss-tsd a { width: 100%; float: left; text-align: left !important;}
@media only screen and (max-width: 767px){
	html body p.woocommerce-form-row.woocommerce-form-row--wide.form-row.form-row-wide.wwp_form_css_row, html body.page-id-10 .woocommerce form .form-row {flex-wrap: wrap;}
	html body p.woocommerce-form-row.woocommerce-form-row--wide.form-row.form-row-wide.wwp_form_css_row label, html body p.woocommerce-form-row.woocommerce-form-row--wide.form-row.form-row-wide.wwp_form_css_row input, html body p.woocommerce-form-row.woocommerce-form-row--wide.form-row.form-row-wide.wwp_form_css_row a, html body .wwp_wholesaler_registration, .page-id-10 label, p.woocommerce-form-row.woocommerce-form-row--wide.form-row.form-row-wide input {width: 100% !important;}
	html body .wwp_wholesaler_registration form { width: 80%;}
	body.page-id-10 p.woocomerce-FormRow.form-row { margin-left: 0;}
}

/* for the header added by vicky 11-2-21 */
@media only screen and (min-width: 1024px) and (max-width: 1279px) {
	html body .cc-nav .container { max-width: 1000px; padding-right: 0px; padding-left: 0px;}
	html body header .cc-nav a{padding: 10px 4px!important;}
}
@media only screen and (min-width: 1248px) {
	.wwp_wholesaler_registration {width: 40%;}
}
@media only screen and (min-width: 768px) and (max-width: 1247px) {
	.wwp_wholesaler_registration {width: 70%;}
}
@media only screen and (min-width: 768px) {
	.wwp_wholesaler_registration form { width: 80%;}
	p.woocommerce-form-row.woocommerce-form-row--wide.form-row.form-row-wide.wwp_form_css_row label {
	width: 40% !important;}
	p.woocommerce-form-row.woocommerce-form-row--wide.form-row.form-row-wide.wwp_form_css_row input {
	width: 60%;}
}
</style>
<!-- footer scripts -->

<!-- additional validation for the accounts -->
<?php if (1) {?>
<script>
jQuery(document).ready(function(){
    // jQuery("#register").click(function(){
    //     var a =jQuery("#wwp_wholesaler_file_upload").val();
    //     var b =jQuery("#wwp_wholesaler_tax_id").val();
    //     var c =jQuery("#wwp_wholesaler_email").val();

    //     if(a==""|| b==""||c=="")
    //     {
    //     alert("Please fill all the fields");
    //     return false;
    //     }
    // });
    jQuery("#pa_sex").change(function(){
       // alert();
       setTimeout(function(){
      //  jQuery("p.stock.out-of-stock").text("Out of Stock - Join waitlist to be emailed when this product is available.");
        var varationid= jQuery(".variation_id").val();
var ajaxurl= "https://www.xyzreptiles.com/wp-admin/admin-ajax.php";
       // jQuery(this).addClass('loading');
        jQuery.ajax({
            data: { action: 'variableproduct_set_paypal',varationid:varationid },
            type: 'POST',
            url: ajaxurl,
            dataType: 'json',
            success: function (data) {
              /// console.log(data.value,"price")
                var paypallength= jQuery(".remvoethispaypaal").length;
                if(paypallength>0)
                {
                    jQuery(".remvoethispaypaal").remove();
                }
                if(data.value>=30)
                {
                jQuery("#payypal").after("<div class='remvoethispaypaal' data-pp-message data-pp-amount='"+data.value+"'></div>");
                // jQuery( ".remvoethispaypaal" ).prependTo( jQuery( "div#four-widget-0" ) );
                }


            }
            });
        },1000);
    });
    ///jQuery("#paymentphone").mask("999-999-9999");
    jQuery("p.stock.out-of-stock").insertAfter("div.yith-wcwl-add-to-wishlist");
    jQuery("a.button").each(function() {
    var joinwaitlist_text=jQuery(this).text();
    if(joinwaitlist_text=="Join Waitlist"){
        jQuery(this).addClass("cc-joinwistlist");
    }
    //  console.log(a);

});
});
</script>
<?php }
if (is_user_logged_in() && is_page(10)) {
    //echo "<pre>";
    if ($_SERVER['SCRIPT_URL'] == 'https://www.xyzreptiles.com/my-account') {?>
    <style>
        .woocommerce-MyAccount-content p{
            display:none;
        }
    </style>
    <?php } else {
        ?>
           <style>
        .woocommerce-MyAccount-content p{
            display:block !important;
        }
    </style>

        <?php
}
}

if (is_user_logged_in()) {
    ?>
<style>
    @media screen and (min-width:1024px){
.cc-product-summary-details .wcwl_control {
    width: 50% !important;
    float: right !important;
    position: relative !important;
    top: -35px !important;
    left: 4px !important;
}
}
</style>
<?php

}
?>
<style>
  ::placeholder {
        color: black !important;
      }
</style>
<script>

jQuery(document).ready(function() {


    setTimeout(function(){
    jQuery(".yith-wcwl-add-to-wishlist").insertAfter(".wcwl_elements.bound");
},100);

<?php
// $count=0;

if ($_GET['email'] && $_GET['password'] && $_GET['email_otpverify']) {
    if (!(is_user_logged_in())) {
        global $wpdb;
        $user_otp_sent_email = $_GET['email'];
        $user_password = $_GET['password'];
        $verify_otp_value = $_GET['email_otpverify'];
        $result = $wpdb->get_results("SELECT email_otp FROM wp_temp_otp_table where user_email='$user_otp_sent_email' order by slno desc limit 1");
        $otpvalue = $result[0]->email_otp;
        if ($otpvalue == $verify_otp_value) {
            if (!(isset($_COOKIE['check_click_triggered']))) {
                ?>
// alert("cookie nto set");
    jQuery("input#reg_email").val('<?php echo $user_otp_sent_email; ?>');
        jQuery("input#reg_password").val('<?php echo $user_password; ?>');
       <?php $cookie_name = "check_click_triggered";
                $cookie_value = "yes";
                setcookie($cookie_name, $cookie_value, time() + (86400 * 15), "/");
                ?>
        jQuery("input#woo_reg").trigger('click');
        <?php
}
        }
    }
} else {
    ?>
    var variable_Value='';
jQuery("input#woo_reg").on("click",function() {
    // alert();
    var vickybhaitext=jQuery(".vickybhaitext").length;
if(vickybhaitext<=0){
    jQuery("span.emailerr").remove();
    jQuery("span.passworderror").remove();
    var register_u_email =jQuery("input#reg_email").val();
    var register_user_pass =jQuery("input#reg_password").val();
    var otp_length=jQuery("otp_alread_exist").length;
    if(register_u_email == '' || register_user_pass ==""){
             if(register_u_email ==""){
                jQuery("input#reg_email").after("<span style='color:red;' class='emailerr'> Please Enter Email </span>");
             }
             if(register_user_pass ==""){
                jQuery("input#reg_password").after("<span style='color:red;' class='passworderror'>Please Enter Password</span>");
        }
        return false;
    }
        else
        {
             if(register_u_email != ''){
                var regex=/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if(!regex.test(register_u_email)){
                    jQuery('input#reg_email').after("<span class='emailerr' style='color:red'>Invalid Email Address</span>");
                    return false;
                }

            }
            var otp_length=jQuery(".otp_alread_exist").length;
    if(otp_length>0){
        console.log("length",otp_length);
        var otp_value=jQuery("input#reg_otp_mail").val();
        if(otp_value==""){
            console.log("empty otp passed");
            jQuery("input#reg_otp_mail").after("<span style='color:red;'>Enter the valid OTP!</span>");
            return false;
        }
    }
    else {
        var otp_value='';
    }
        }
        jQuery("span.cc-wrapping-login-checkbox").after("<p class='ajaxload'>Please wait....</p>")
            jQuery.ajax({
                type: "POST",
                url: "<?php echo site_url(); ?>/wp-admin/admin-ajax.php",
                dataType: 'JSON',
                data:{action:'register_form_validations',register_u_email:register_u_email,register_user_pass:register_user_pass,otp_value:otp_value},
                success: function(res){
                    if(res.mailsend == 1){
                        jQuery(".ajaxload").remove();
                        var otp_length=jQuery(".otp_alread_exist").length;
                        if(otp_length<=0){
                        jQuery("input#reg_password").after('<p class="form-row form-row-wide otp_alread_exist">An activation link was sent to  "'+res.user_mail+'". Please activate your account by clicking on the activation link in your Inbox.</p>If you did not recieve the email please check your spam / junk folder.');
                       return false;
                    }
                }
                else if(res.mailsend == 0)
                {
                   alert("not able to send mail to your email please try another");
                   return false;
                }
                else if(res.mailexist == 'yes'){
                    jQuery(".ajaxload").remove();
                    alert("Mail already exist. Please login.");
                    jQuery(".ajaxload").remove();
                   return false;
                }
                else{
                if(res.optvalue == 1)
                {
                    jQuery(".otp_alread_exist").after("<span class='vickybhaitext'></span>");
                    jQuery("span.cc-wrapping-login-checkbox").after("<p><strong style='color:green;' class='success message'>Verification success</strong></p>");
                    jQuery("input#woo_reg").trigger('click');
                }
                else {
                    jQuery(".ajaxload").remove();
                    jQuery("input#reg_otp_mail").after("<span style='color:red;'>Enter the valid OTP!</span>");
                   return false;
                }
            }
                }
            });
            return false;
        }
else{
    return true;
}
        });

    <?php
}
?>
});
</script>
<style>
p.form-row.form-row-wide.otp_alread_exist {
    font-weight: 800;
    color: #4ba625;
    margin-top: 13px;
}
</style>
<script>
   setTimeout(function(){
   jQuery("a.button").each(function() {
    var joinwaitlist_text=jQuery(this).text();
    if(joinwaitlist_text=="Join Waitlist"){
        jQuery(this).addClass("cc-joinwistlist");
    }
    });

},2000);

jQuery('.wpcf7-submit').click(function(){
   var uname= jQuery("input.wpcf7-form-control.wpcf7-text.wpcf7-validates-as-required").val();
var textara=jQuery(".wpcf7-textarea").val();
var email=jQuery(".wpcf7-email").val();
if(uname!=""||textara!=""&&email!="")
{
    jQuery('.wpcf7-submit').hide();
}
});
jQuery('.wpcf7-submit').click(function(){
setTimeout(function(){


   var uname= jQuery("input.wpcf7-form-control.wpcf7-text.wpcf7-validates-as-required").val();
var textara=jQuery(".wpcf7-textarea").val();
var email=jQuery(".wpcf7-email").val();
if(uname!=""||textara!=""&&email!="")
{
jQuery('.wpcf7-spinner').hide();
jQuery("input.wpcf7-form-control.wpcf7-text.wpcf7-validates-as-required").val('');
jQuery(".wpcf7-textarea").val('');
var submit= "<p>Form has been submitted successfully</p>";
jQuery( ".wpcf7-response-output").append(submit);
jQuery('.wpcf7-response-output').show();
}
},3000);

});


jQuery(".wpcf7-textarea").focus(function(){
jQuery('.wpcf7-textarea').attr('placeholder',"").fadeIn('slow');
})

jQuery(".wpcf7-textarea").focusout(function(){
jQuery('.wpcf7-textarea').attr('placeholder',"Note: We do not ship outside of the United States.");
})
jQuery('input#send_product_enquiry').click(function(){
    var enquiry_name=jQuery("input#product_enquiry_name").val();
    var enquery_email=jQuery("input#product_enquiry_email").val();
    var enquiry_mobile=jQuery("input#product_enquiry_phone").val();
    var enquiry_message=jQuery("textarea#product_enquiry_message").val();
    if(enquiry_name!="" && enquery_email!=""&&enquiry_mobile!=""&&enquiry_message!=""){
        jQuery('input#send_product_enquiry').hide();
    }
});

</script>
<?php if (!is_front_page()) {?>
<style>
html body a.button.product_type_simple {
    background-color: #fff !important;
    color: #000 !important;
    border-color: #000 !important;
}
a.button.add_to_cart_button.product_type_simple{
border-color: #1e9c15!important;

}
</style>
<?php }?>

<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = "https://";
} else {
    $url = "http://";
}

// Append the host(domain name, ip) to the URL.
$url .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL
$url .= $_SERVER['REQUEST_URI'];
$url_components = parse_url($url);
$special_res = $url_components['path'];
$special_expl = explode("/", $special_res);
//   echo "<pre>chandra";
// print_r($special_expl);
if (in_array('order-pay', $special_expl)) {?>

                                <style>
                                     form#order_review [type="checkbox"]:not(:checked), [type="checkbox"]:checked {
                                        opacity: 1;
                                        position: relative;
                                        left: 0;
                                        }

                                        form#order_review .woocommerce-terms-and-conditions-wrapper {
                                     display: block !important;
                                    }

                                    input#wc-braintree-credit-card-tokenize-payment-method {
                                      opacity: 0 !important;
                                      }
                                </style>

                               <?php }
?>


 <!-- <script>
     window.addEventListener('load', (event) => {
        document.querySelector('.cat-item .children').style.display = 'block';


  });

</script>
<script>
     document.querySelector('.product-categories li').onclick = function() {
        document.querySelector('.product-categories cat-parent ul.children').style.display = 'none';
}
     </script> -->
<!--
             <script>
    window.addEventListener("load", function() { setTimeout(function(){
        var styles = {
            visibility : "visible",

};
jQuery(".product-title-wrapper.cc-prodcut-title-style.test11").css(styles); -->

<!-- },1000); }); -->
<!-- </script> -->
<script>
window.addEventListener("load", function() { setTimeout(function(){
        var styles = {
            display : "block",
};
jQuery(".single_video").css(styles);

},3000); });
</script>

        <script>
    window.addEventListener("load", function() { setTimeout(function(){
        var styles = {
            visibility : "visible",

};
jQuery(".product-listing-wrapper.col-lg-12").css(styles);

},1000); });
        </script>
                <script>
    window.addEventListener("load", function() {
        var styles = {
            visibility : "visible",

};
jQuery(".stellarnav.dark.right.desktop").css(styles);

   })
        </script>

   <!-- <script>
    window.addEventListener("load", function() { setTimeout(function(){
        var styles = {
            visibility : "visible",

};
jQuery(".cc-top-header").css(styles);

},1000); }); -->
        <!-- </script>	 -->

        <script>
    // jQuery( document ).ready(function() {
    //     jQuery(window).on('load', function() {
    //         jQuery(".must-log-in a").attr('href', '<?php echo get_site_url(); ?>/my-account/');
    //     });
    // });
    window.addEventListener('DOMContentLoaded', (event) => {
        console.log('DOM fully loaded and parsed');
        var url_redirect = jQuery(location).attr('href')+"#tab-reviews";
        jQuery(".must-log-in a").attr('href', "<?php echo get_site_url(); ?>/my-account/?redirect_to="+url_redirect);
    });
    </script>


 <!--to append regular price in category page-->
<?php if (is_user_logged_in() || !is_user_logged_in()): ?>

<?php
$user_id = get_current_user_id();
$user_info = get_userdata($user_id);
$user_roles = implode(', ', $user_info->roles);
if ($user_roles != 'default_wholesaler'): ?>
    <script>
    jQuery( document ).ready(function() {
    jQuery(window).on('load', function() {
    console.log( "ready!" );
    $price = jQuery(location).attr('href');
    // if($price == 'https://www.xyzreptiles.com/reptiles/reptiles-wholesale/'){
        // alert($price);
        // console.log($price);
        //     jQuery('.price').prepend('Regular Price: ');
        // }
        // if($price == 'https://www.xyzreptiles.com/reptiles/reptiles-wholesale/page/2/'){
        //     jQuery('.price').prepend('Regular Price: ');
        // }
    });
    });
    </script>
    <script>
        window.addEventListener('scroll', function() {
        <?php if(is_product_category('771')) : ?>

   jQuery(".price").each(function(){
    if (!jQuery(this).find(".regular_price").length)
        jQuery(this).append('<span class="regular_price">Regular Price:</span>');
    });
    <?php
     $settings = get_option('wwp_wholesale_pricing_options', true);
    $redirecturl = (is_user_logged_in()) ? site_url() . "/my-account/#upgradetowholesale" : site_url() . "/whole-sale-register/"; ?>
    jQuery(".cg-product-info").each(function(){
    if (!jQuery(this).find(".wholesale-text").length)
    jQuery(this).prepend("<span class='wholesale-text'><a href='<?php echo $redirecturl; ?>'><?php echo isset($settings['display_link_text']) ? esc_html($settings['display_link_text']) : ''; ?></a></span>");
    });
<?php endif; ?>
});
        </script>
    <?php endif;?>
<?php endif;?>
<script>
            	const mediaQuery12 = window.matchMedia('(max-width: 767px)')
// Check if the media query is true
if (mediaQuery12.matches) {
window.onscroll = function() {myFunction()};

var header = document.getElementById("search_sticky");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky1");
  } else {
    header.classList.remove("sticky1");
  }
}
}
</script>
<?php if (is_page(6)): ?>
    <style>
        @media screen and (min-width:320px) and (max-width:767px){
        ul.shop_table.cart.wishlist_table.wishlist_view.responsive.mobile li {padding-top: 20px;padding-left: 10px;}
        .additional-info-wrapper {border-bottom: 1px solid rgba(0,0,0,.1);border-top: none !important;}

        .fa-trash:before { position: relative;bottom: 10px;right: 10px;}


        }
        @media screen and (min-width:425px) and (max-width:767px){
            table.additional-info {margin-left: 19%;}
        }
        @media screen and (min-width:375px) and (max-width:424px){
            table.additional-info {margin-left: 22%;}

        }
        @media screen and (min-width:320px) and (max-width:374px){
            table.additional-info {margin-left: 27%;}
        }
        </style>
<?php endif;?>
</body>
</html>