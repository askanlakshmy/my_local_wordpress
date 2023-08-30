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
<style>
	.before-popup-show {
    background: #E46F27;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.25);
}
.before-popup-show .container {
    max-width: 100%;
    width: 80%;
}
.flex-image {
    display: flex;
	align-items: center;
}
.question {
    display: flex;
    align-items: center;
	width: 90%;
    justify-content: space-between;
}
.img-finding {
    width: 10%;
	display: flex;
    align-items: center;
}
.flex-image{
	padding: 10px 0;
}
.ask-question p {
    color: rgba(255, 255, 255, 1);
    font-size: 24px;
    font-weight: 600;
    font-family: 'Work Sans';
}
button.yes {
    border-radius: 30px;
    background: #fff;
    border: none;
    padding: 11px 49px;
    font-size: 20px;
    font-family: 'Work Sans';
    text-transform: capitalize;
    color: #E46F27;
    font-weight: 600;
	margin-right: 36px;
}
button.No {
    border-radius: 30px;
    background: #C22C2A;
    border: none;
    padding: 11px 49px;
    font-size: 20px;
    font-family: 'Work Sans';
    color: #fff;
    font-weight: 600;
    text-transform: capitalize;
}
#popup-container{display:none;}
.new-class .popup_content .col-md-8 {
    display: none;
}
.new-class #popup .col-md-4{width:100%;}
.new-class div#popup {
    padding-bottom: 2%;
	width: 50% !important;
}
.new-class {
    display: flex !important;
	align-items: center;
}
@media screen and (max-width:991px){
.new-class .right-side-form{padding: 35px 10px 10px 10px !important;}
.new-class div.gform_confirmation_wrapper div.gform_confirmation_message{
	font-size: 15px !important;
    text-align: center !important;
}
.new-class  span#close-btn img{
	content: none !important;
}
.new-class span#close-btn{    top: 8px !important;}
}
.no-popup{display:none;}
.errro-new {
    height: 845px !important;
    overflow-y: scroll;
}
.my-html-class {
    overflow: hidden;
}
.stickycustom .before-popup-show {
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 9999;
    transition: .2s;
}
</style>
<?php if(is_single()){?>
<div class="before-popup-show" style="display:none;">
	<div class="container">
		<div class="flex-image">
			<div class="img-finding"><img src="https://autoaccidentreport.bestdemo.site/wp-content/uploads/2023/08/small-img.png"></div>
			<div class="question">
				<div class="ask-question">
					<p>Do you need help in finding your accident report?</p>
				</div>
				<div class="yes-no">
					<button class="yes">yes</button>
					<button class="No">No</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
jQuery(document).ready(function() {
      setTimeout(function() {
        jQuery('.before-popup-show').show();
      }, 2000); // 15 seconds delay
    });
    jQuery(document).ready(function() {
    //   jQuery('#showPopup').click(function() {
    //     jQuery('#popupDiv').fadeIn();
    //   });
      
    //   jQuery('.yes').click(function() {
    //     jQuery('#popup-container').fadeIn();
    //   });
      
    //   jQuery('.No').click(function() {
    //     jQuery('.before-popup-show').fadeOut();
    //   });
    });

	jQuery(document).ready(function() {
    //   if (localStorage.getItem('popupClicked') !== 'yes') {
    //     jQuery('#popup-container').fadeIn();
    //   }

      jQuery('.yes').click(function() {
        jQuery('#popup-container').fadeIn();
        jQuery("html").addClass("my-html-class");
      });
      
      jQuery('.yes').click(function() {
        localStorage.setItem('popupClicked', 'yes');
		jQuery('#popup-container').fadeIn();
        jQuery("html").addClass("my-html-class");
      });
      
      jQuery('.No').click(function() {
        jQuery('.before-popup-show').fadeOut();
        localStorage.removeItem('popupClicked');
      });
	  if (jQuery('.gform_validation_errors').length > 0) {
       
		jQuery('#popup-container').fadeIn();
		jQuery("#gform_146").addClass("errro-new");
        jQuery("html").addClass("my-html-class");
   }
//    if(jQuery('.gform_confirmation_message').length>0){
// 	jQuery('#popup-container').fadeOut();
//    }
    });
	jQuery(document).ready(function($) {
	// jQuery('.yes').click(function() {
	if(jQuery('.gform_confirmation_message').length>0){
	jQuery('#popup-container').fadeIn();
	$('#popup-container').addClass('new-class');
    jQuery("html").addClass("my-html-class");
   }
   if(jQuery('.gform_confirmation_message').length>0){
	jQuery("#close-btn").click(function() {
		$('.before-popup-show').addClass("no-popup");
		$('#popup-container').removeClass('new-class');

	});

   }
})
window.addEventListener('scroll', function (e) {
	var box = document.querySelector('#et-boc');
	var x = window.scrollY;
	if (x >= 100) {
		box.classList.add("stickycustom");
	} else {
		box.classList.remove("stickycustom");
	}
});
</script>
<?php } ?>
<div id="et-main-area">
	<?php
	/**
	 * Fires after the header, before the main content is output.
	 *
	 * @since 3.10
	 */
	do_action( 'et_before_main_content' );
	?>
