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
/* Style the popup container and popup, initially hidden */
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
@media screen and (max-width:991px){
	span#close-btn{left: 10px !important;}
	#popup{
		padding-left:20px !important;
		padding-right:20px !important;
		padding-bottom: 8.5% !important;
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
	padding-top: 5.5%;
    padding-left: 4.5%;
    padding-bottom: 8%;
}
.right-side-form {
	padding-top: 3%;
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
}
form#gform_146 {
    margin-top: 33px;
	width: 93%;
	padding-left: 12%;
}
.popup_content {
    padding-top: 1%;
    border-radius: 10px;

}
@media screen and (min-width:1280px) and (max-width:1535px){
	.left-side-content-popu h3{    font-size: 40px !important;}
	.your-haasle {
    padding-top: 4% !important;
    padding-bottom: 5% !important;
}
#popup{width:95% !important;}
.links {
    margin-top: 3% !important;
}
}
.right-side-form .gform_heading {
    width: 92%;
}
#gform_fields_146 .gfield--type-post_custom_field {
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
	.popup_content {
    display: block !important;
}
#popup .col-md-8,#popup .col-md-4 {
    width: 100% !important;
}
.left-side-content-popu {
    background: linear-gradient(90deg, #C1282A 0%, #D1651A 100%);
}
.left-side-content-popu h3{
	font-size: 36px !important;
	color: #fff !important;
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
</style>
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
		<div class="image-section"><img src="https://autoaccidentreport.bestdemo.site/wp-content/uploads/2023/08/popup-images.png"></div>
	</div>
</div>
<div class="col-md-4">
	<div class="right-side-form">
		<?php echo do_shortcode('[gravityform id="146" title="true" ajax="true"]'); ?>
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

// jQuery("#close-btn").on("click", function() {
//   jQuery("#popup-container").fadeOut();
//   jQuery("#popup-container").removeClass('popup_show');
// });

var modalp = document.getElementById("popup-container");
window.onclick = function(event) {
  if (event.target == modalp) {
    modalp.style.display = "none";
  }
};
</script>