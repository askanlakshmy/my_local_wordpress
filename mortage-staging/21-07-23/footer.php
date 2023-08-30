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
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 9998;
}

#popup {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #ffffff;
  padding: 20px;
  border: 1px solid #ccc;
  z-index: 9999;
}

</style>
	<footer id="colophon"  <?php echo kava_get_container_classes( 'site-footer' ); ?>>
		<?php kava_theme()->do_location( 'footer', 'template-parts/footer' ); ?>
	</footer><!-- #colophon -->
<div id="popup-custom">
<div id="popup-container" class="modal">
  <div id="popup">
    <span id="close-btn" class="close">&times;</span>
    <div class="popup_content">
		<h3>Get Fast Pre-Approvals</h3>
		<ul>
			<li><img src="">We assist clients with all type of mortgage loan programs</li>
			<li><img src="">Ensures loan approval and an on-time closing</li>
			<li><img src="">We assist clients with all type of mortgage loan programs</li>
		</ul>
		<div class="button_new">
			<a href="" class="blue_buy">I’m Buying</div>
			<a href="" class="white_refinancing">I’m Refinancing</div>
		</div>
	</div>
  </div>

</div>
</div>
</div><!-- #page -->
<script>
// jQuery(document).ready(function() {
//   // Calculate 30% of the page height
//   var thirtyPercentHeight = jQuery(document).height() * 0.3;

//   // Add scroll event handler
//   jQuery(window).scroll(function() {
//     // Check if the user has scrolled to the 30% depth and the popup is not already shown
//     if (jQuery(this).scrollTop() >= thirtyPercentHeight && !jQuery("#popup-container").is(":visible")) {
//       // Show the popup container
//       jQuery("#popup-container").fadeIn();
//     }
//   });

//   // Close the popup when clicking the close button
//   jQuery("#close-btn").on("click", function() {
//     jQuery("#popup-container").fadeOut();
//   });
// });
window.addEventListener('scroll', function (e) {
	var box = document.querySelector('#content');
	var x = window.scrollY;
	if (x >= 100) {
		jQuery("#popup-container").fadeIn();
	}
	jQuery("#close-btn").on("click", function() {
    jQuery("#popup-container").fadeOut();
  });
});
</script>


<?php wp_footer(); ?>

</body>
</html>
