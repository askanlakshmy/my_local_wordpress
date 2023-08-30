<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kava
 */

?>

	</div><!-- #content -->
<style>
/* Style the popup container and popup, initially hidden */
#popup-container {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.28);
  z-index: 9998;
}

#popup {
	position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #EEEEEE;
    padding: 28px 38px;
    border: 1px solid #ccc;
    z-index: 9999;
    width: 32%;
	border-radius:5px;
	padding-bottom: 3.5%;
	max-width:520px;
}
div#popup-container.popup_show {
    display: block;
}
.popup_content h3 {
    font-size: 32px;
    font-family: 'Poppins';
    text-align: center;
	margin-bottom: 8%;
	margin-top: 0;
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
.popup_content img {
    margin-right: 10px;
    width: 20px;
}
.popup_content ul li:not(last-child) {
    margin-bottom: 15px;
}
span#close-btn {
	text-align: end;
    display: block;
    position: relative;
    left: 20px;
    cursor: pointer;
    top: -16px;
}
@media screen and (max-width:991px){
	span#close-btn{left: 10px !important;}
	#popup{
		padding-left:20px !important;
		padding-right:20px !important;
		padding-bottom: 8.5% !important;
		width:99% !important;
	}
}
</style>
	<footer id="colophon"  <?php echo kava_get_container_classes( 'site-footer' ); ?>>
		<?php kava_theme()->do_location( 'footer', 'template-parts/footer' ); ?>
	</footer><!-- #colophon -->
<div id="popup-custom">
<div id="popup-container" class="modal">
  <!-- <div id="popup">
    <span id="close-btn" class="close"><i class="fa fa-close"></i></span>
    <div class="popup_content">
		<h3>Get Fast Pre-Approvals</h3>
		<ul>
			<li><img src="https://staging.mortgagemark.com/wp-content/uploads/2023/07/click.png">We assist clients with all type of mortgage loan programs</li>
			<li><img src="https://staging.mortgagemark.com/wp-content/uploads/2023/07/click.png">Ensures loan approval and an on-time closing</li>
			<li><img src="https://staging.mortgagemark.com/wp-content/uploads/2023/07/click.png">We assist clients with all type of mortgage loan programs</li>
		</ul>
		<div class="button_new">
			<a href="https://my.cmghomeloans.com/" class="blue_buy">I’m Buying</a></div>
			<a href="https://my.cmghomeloans.com/" class="white_refinancing">I’m Refinancing</a></div>
		</div>
	</div>
  </div> -->
  <?php
if ( is_active_sidebar( 'popup_website' ) ) : ?>
<div id="secondary" class="widget-area" role="complementary">
<?php dynamic_sidebar( 'popup_website' ); ?>
</div>
<?php endif; ?>
</div>
</div>
</div><!-- #page -->
<script>

window.addEventListener('scroll', function (e) {
  var box = document.querySelector('#content');
  var x = window.scrollY;
  if (x >= 300 && !sessionStorage.getItem('popupShown')) {
    jQuery("#popup-container").addClass("popup_show");
    sessionStorage.setItem('popupShown', 'true');
  }
});

jQuery("#close-btn").on("click", function() {
  jQuery("#popup-container").fadeOut();
  jQuery("#popup-container").removeClass('popup_show');
});

var modalp = document.getElementById("popup-container");
window.onclick = function(event) {
  if (event.target == modalp) {
    modalp.style.display = "none";
  }
};
</script>


<?php wp_footer(); ?>

</body>
</html>
