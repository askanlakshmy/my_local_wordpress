<?php
/**
 * Template partial used to add content to the page in Theme Builder.
 * Duplicates partial content from footer.php in order to maintain
 * backwards compatibility with child themes.
 */

?>
<?php if ( ! et_builder_is_product_tour_enabled() && ! is_page_template( 'page-template-blank.php' ) ) : ?>
	</div>
<?php endif; ?>
<style>
.yes-no button,span#close-btn,input#gform_submit_button_146 {
    cursor: pointer;
}
.gchoice.gchoice_146_8_0 {
    width: 50%;
}
#popup-container {
    position: fixed;
    z-index: 1;
    padding-top: 3px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
    z-index: 9999999;
}

#popup {
	/* position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #fff;
    border: 1px solid #ccc;
    z-index: 9999;
	width: 100%;
	border-radius:10px;
	max-width: 1487px; */
	background-color: #fefefe;
    margin: auto;
    width: 1487px;
    border-radius: 25px;
	position: relative;
}
span#close-btn {
    position: absolute;
    right: 23px;
	top: 15px;
}
div#popup-container.popup_show {
    display: block;
}
span#close-btn i {
    font-size: 13px;
}
.popup_content ul li {
    font-size: 18px;
    font-family: 'Karla';
	list-style: none;
	display: flex;
    align-items: center;
    line-height: 27px;
	font-weight: 300;
}
a.blue_buy {
    background: #3670AA;
    border: 1px solid #0299CC;
}
a.white_refinancing {
    border: 1px solid #000;
	border-radius: 3px;
}
.popup_content ul {
    margin: 0 !important;
	margin-bottom: 12% !important;
}
a.blue_buy {
    font-size: 18px;
    font-family: 'Karla';
    font-weight: 500;
    color: #fff;
    display: block;
    padding: 10px;
    width: 100%;
    margin: 0 auto;
    text-align: center;
    border-radius: 3px;
    margin-bottom: 3%;
	text-decoration: none;
}
a.white_refinancing {
    font-size: 18px;
    font-family: 'Karla';
    font-weight: 500;
    color: #000;
    display: block;
    padding: 10px;
    width: 100%;
    margin: 0 auto;
    text-align: center;
	text-decoration: none;
}
.popup_content ul li:not(last-child) {
    margin-bottom: 15px;
}
/* span#close-btn {
	text-align: end;
    display: block;
    position: relative;
    left: 20px;
    cursor: pointer;
    top: -16px;
} */
@media screen and (min-width:361px) and (max-width:991px){
    /* .img-finding img {
    height: 77px;
} */
button.yes,button.No{    padding: 2px 18px !important;
    font-size: 16px !important;width: 62px;
    height: 23px;}
.img-finding {
    width: 25% !important;
}
.question{width:75% !important;}
}
@media screen and (min-width:320px) and (max-width:360px){
    button.yes,button.No{padding: 4px 10px !important;font-size: 15px !important;}
    html body .ask-question p {
    font-size: 15px !important;
    line-height: 23px;
}
}
@media screen and (max-width:991px){
    .gchoice.gchoice_146_9_1 {
    display: flex;
    align-items: flex-start;
}
input#choice_146_9_1{    margin-right: 10px !important;}
    .ask-question p{font-size:18px !important;line-height: 23.46px;}
    .question {
    padding-left: 15px;
}
    .yes-no {
    display: flex !important;
    margin-top: 10px;
}
    .before-popup-show .container{    width: 95% !important;}
    .img-finding{width:auto !important;}
    .question{display:block !important;}
    .links a{    margin-top: 4% !important;
    display: block !important;color:#fff !important;}
    .left-side-content-popu p{color:#fff !important;}
    .left-side-content-popu h3{    margin-bottom: 10px !important;}
	/* span#close-btn{left: 10px !important;} */
    span#close-btn{
    right: 4px !important;}
	#popup{
		
		width:99% !important;
	}
}
.popup_content {
    display: flex;
}
#popup .col-md-8 {
    width: 50%;
}
#popup .col-md-4 {
    width: 50%;
}
.left-side-content-popu h3 {
    color: #C22C2A;
    font-family: 'Work Sans';
    font-size: 48px;
    font-weight: 800;
    text-align: left;
	text-transform: uppercase;
    margin-bottom: 20px;
}
.left-side-content-popu p {
    font-size: 20px;
    font-family: 'Open Sans';
    line-height: 30.6px;
    font-weight: 400;
	color: #000000;
}
#gform_146 label.gfield_label.gform-field-label {
    font-size: 16px;
    font-weight: 600;
    font-family: 'Open Sans';
    line-height: 24px;
}
#gform_146 legend.gfield_label.gform-field-label{
	font-weight: 600;
}
#gform_146 input{
background: #FFFFFF;
    border: 1px solid #D5D5D5;
    box-shadow: 3px 4px 5px #EFEFEF;
    border-radius: 3px;
    padding: 9px 12px;
}
#gform_146 h2.gform_title {
    color: #E46F27;
    font-size: 24px;
    font-family: 'Open Sans';
    text-transform: uppercase;
    font-weight: 700;
    text-align: center;
    line-height: 24px;
}
#gform_146 p.gform_description {
    font-size: 18px;
    font-family: 'Work Sans';
    line-height: 30.6px;
    font-weight: 400;
    text-align: center;
}
div#input_146_8 {
    display: flex;
}
.links {
    margin-top: 4%;
}
.your-haasle {
	padding-top: 0%;
    padding-left: 4.5%;
    padding-bottom: 8%;
}
.right-side-form {
	padding-top: 4%;
    padding-left: 7%;
}
.right-side-form h2.gform_title {
    font-size: 24px;
    line-height: 24px;
    font-family: 'Work Sans';
    color: #E46F27;
    text-align: center;
	font-weight: 700;
    text-transform: uppercase;
}
.right-side-form p.gform_description {
    font-size: 18px;
    text-align: center;
    font-family: 'Open Sans';
    line-height: 30.6px;
    font-weight: 300;
}
#gform_146 label#label_146_9_1 {
    font-family: 'Open Sans';
    font-size: 14px;
    line-height: 22.6px;
    font-weight: 300;
}
input#gform_submit_button_146 {
    background: #C22C2A;
    color: #fff;
    font-family: 'Open Sans';
    font-weight: 700;
    font-size: 20px;
    line-height: 21px;
    text-transform: uppercase;
    margin-bottom: 22px !important;
}
form#gform_146 {
    margin-top: 33px;
	width: 93%;
	padding-left: 11%;
}
.popup_content {
    padding-top: 1%;
    border-radius: 10px;

}
@media screen and (min-width:1280px) and (max-width:1535px){
    .your-haasle{height: 30% !important;}
    .image-section{    height: 60% !important;}
    .right-side-form .gform_heading{    margin: 0 auto;}
	.left-side-content-popu h3{    font-size: 40px !important;}
	.your-haasle {
    padding-bottom: 5% !important;
}
#popup{width:97% !important;margin: 0 auto;}
.links {
    margin-top: 3% !important;
}
}
.right-side-form .gform_heading {
    width: 92%;
}
#gform_fields_146 .gfield--type-post_custom_field,#gform_fields_146 .gfield--type-email,#gform_fields_146 .gfield--type-phone  {
    margin-bottom: 14px;
}
#gform_fields_146 fieldset#field_146_8 {
    margin-top: 3%;
    margin-bottom: 5%;
}
#gform_fields_146{
	grid-row-gap: 0 !important;
}
.gchoice.gchoice_146_8_0 label#label_146_8_0 {
	color:#E46F27;
}
input#choice_146_9_1 {
    vertical-align: top;
    margin-top: 7px;
}
input#input_146_7 {
    width: -webkit-fill-available;
}
#gform_146 input::placeholder {
    color: rgba(183, 183, 183, 1);
    font-size: 12px;
    font-weight: 400;
    font-family: 'Open Sans';
	line-height:24px;
}
.links p {
    font-weight: 300;
}
.links a {
    color: #E46F27;
    font-weight: 700;
    font-family: 'Open Sans';
    font-size: 20px;
}
@media screen and (max-width:991px){
    span#close-btn{    right: 9px !important;}
    span#close-btn img {
    content: url(https://autoaccidentreport.bestdemo.site/wp-content/uploads/2023/08/Vector-mobile.png);
}
    #popup{background-color:transparent !important;}
    .right-side-form {
    background: #fff;
    border-radius: 0px 0 25px 25px;
}
    .right-side-form p.gform_description{text-align:left;}
    .right-side-form h2.gform_title{    font-size: 17px !important;}
    .right-side-form {
    padding-left: 15px !important;
    padding-right: 15px !important;
}
    html body .right-side-form {
        padding-top: 6% !important;
    padding-left:0px !important;
    padding-right: 0px !important;
}
.right-side-form #gform_wrapper_146 {
    padding-left: 15px !important;
    padding-right: 15px !important;
}
	.popup_content {
    display: block !important;
}
#popup .col-md-8,#popup .col-md-4 {
    width: 100% !important;
}
.left-side-content-popu {
    background: linear-gradient(90deg, #C1282A 0%, #D1651A 100%);
    border-radius: 25px 25px 0 0;
}
.left-side-content-popu h3{
    font-size: 35px !important;
    line-height: 40px !important;
    color: #fff !important;
    width: 93%;
}
.left-side-content-popu h3 br {
    display: none;
}
form#gform_146{
	width: 100% !important;
    padding-left: 0 !important;
}
.right-side-form{
	padding-left: 0 !important;
}
}
.left-side-content-popu {
    display: flex;
    height: 100%;
    flex-wrap: wrap;
    align-items: end;
}
.your-haasle {
    height: 35%;
}
.image-section {
    background: url(https://autoaccidentreport.bestdemo.site/wp-content/uploads/2023/08/popup-images.png);
    height: 55%;
    width: 100%;
    border-radius: 0 0 0 25px;
    background-repeat: no-repeat;
    background-position: bottom;
}
div#gform_146_validation_container{
    width:90%;
    margin-left:auto;
    margin-right:auto;
}
@media screen and (min-width:992px) and (max-width:1279px){
    #popup{width: 97% !important;}
    .left-side-content-popu h3{    font-size: 35px !important;}
    .image-section{background-size: 118% !important;}
    .yes-no {
    display: flex;
}
.ask-question p{
    padding-left: 10px;
}
}
.right-side-form span.gfield_required.gfield_required_custom,.right-side-form p.gform_required_legend {
    display: none !important;
}
.errro-new::-webkit-scrollbar-thumb {
    border-radius: 10px;
    background-color: #C22C2A;
    height: 20px;
}
.errro-new::-webkit-scrollbar {
    width: 2px;
    background: #999;
    height: 30px;
    border-radius: 10px;
}
.errro-new{    padding-right: 12px;}
@media screen and (max-width:991px){
    form#gform_146 {
    margin-top: 2px !important;}
    .your-haasle{    padding-top: 5% !important;}
    html body .errro-new{height: auto !important;
    overflow-y: inherit !important;    padding-right: 0 !important;}
    .form-image img {
    width: 100%;
    position: relative;
    top: 9px;
    border-radius: 0px 0px 25px 25px;
}
}
@media screen and (min-width:992px){
    .form-image {
    display: none;
}
}
</style>
<?php if(is_single()){?>
<div id="popup-custom">
<div id="popup-container" class="modal">
<div id="popup">
<span id="close-btn" class="close"><img src="/wp-content/uploads/2023/08/Vector.png"></span>
<div class="popup_content">
<div class="col-md-8">
	<div class="left-side-content-popu">
		<div class="your-haasle">
		<h3>Your Hassle Free<br> Solution to Your Auto <br>Accident Report</h3>
		<p>Learn how to acquire your auto accident report.</p>
		  <div class="links">
          <p> Your accident report is the first document you need to file a claim.<br><a href="">Begin that process here.</a></p>
		</div>
</div>
		<div class="image-section"></div>
	</div>
</div>
<div class="col-md-4">
	<div class="right-side-form">
		<?php echo do_shortcode('[gravityform id="146" title="true"]'); ?>
        <div class="form-image">
            <img src="https://autoaccidentreport.bestdemo.site/wp-content/uploads/2023/08/mobile-image.png">
        </div>
	</div>
</div>
</div>
</div>
<script>

// window.addEventListener('scroll', function (e) {
//   var box = document.querySelector('#content');
//   var x = window.scrollY;
//   if (x >= 300 && !sessionStorage.getItem('popupShown')) {
//     jQuery("#popup-container").addClass("popup_show");
//     sessionStorage.setItem('popupShown', 'true');
//   }
// });

jQuery("#close-btn").on("click", function() {
  jQuery("#popup-container").fadeOut();
  jQuery("#popup-container").removeClass('popup_show');
  jQuery("html").removeClass("my-html-class");
});

var modalp = document.getElementById("popup-container");
window.onclick = function(event) {
  if (event.target == modalp) {
    modalp.style.display = "none";
  }
};
</script>
<?php } ?>