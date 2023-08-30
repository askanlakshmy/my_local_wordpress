<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
$postid = get_the_ID();
get_header(); ?>
	<section>
		<!-- single post -->
		<div class="div100 single-post">
			<div class="row">
				<?php //if(($postid != 20021) && ($postid != 20102)){?>
					<div class="div100 header-google-ads" id="myImage" style="text-align:center"></div>
				<?php /*} else { ?>
				<div class="div100 header-google-ads" id="myImage1" style="text-align:center"><a href="https://www.energytherapy.biz/membership/pricing/" target="_blank">
				<img src="https://www.energytherapy.biz/wp-content/uploads/ads/tap into your inner power v2 - 1150x232.jpg"></a></div>
				<?php }*/ ?>
			<div class="divide20"></div>
				<div class="div70"><!--Page title-->
					<?php echo do_shortcode('[social_large_icons]');?>
					<div class="pr30 post-content">
						<h2 class="page-title"><?php the_title(); ?></h2>
					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();
						$detail =  apply_filters('the_content',$wp_query->post->post_content);
					endwhile;

					if(get_field('suppress_google_ad', get_the_ID()) == true ){
						$suppress_google_ad = 1;
					} else {
						$suppress_google_ad = 0;
					}

					$content_block = explode('<p>',$detail);
					global $wpdb;
	
					$data = $wpdb->get_results ( "SELECT * FROM energy_aam WHERE post_type = 'Page' AND ad_position = 'After Paragraph' AND ad_order!='Before Last Paragraph' AND ad_order!='After Last Paragraph' AND ad_status ='0' ORDER BY length(ad_order) ASC" );
					
					$data1 = $wpdb->get_results ( "SELECT * FROM energy_aam WHERE post_type = 'Page' AND ad_position = 'After Paragraph' AND ad_order = 'Before Last Paragraph' AND ad_status ='0'" );
					$row1 = $wpdb->num_rows;
					
					$data2 = $wpdb->get_results ( "SELECT * FROM energy_aam WHERE post_type = 'Page' AND ad_position = 'After Paragraph' AND ad_order = 'After Last Paragraph' AND ad_status ='0'" );
					$row2 = $wpdb->num_rows;
					
					if ($row1 == 1){
					$befo_ad_type = $data1[0]->ad_type;
						if(($befo_ad_type == 'Google Ad') && ($suppress_google_ad == 0 )){
							$befo_last_content = stripslashes($data1[0]->ad_content);
						} else if ($befo_ad_type == 'Amazon Ad' ){
							$befo_last_content = stripslashes($data1[0]->ad_content);
						} else if ($befo_ad_type == 'Affiliate Ad' ) {
							$affi_ad_link = $data1[0]->affiliated_ad_url;
							$affi_ad_img = site_url().'/wp-content/uploads/ads/'.$data1[0]->affiliated_ad_img;
							$affi_ad = stripslashes("<a href='$affi_ad_link' target='_blank' style='text-align:center;display: block;' ><img src='$affi_ad_img' /></a>");
							$befo_last_content = $affi_ad;
						}
					}
					
					if ($row2 == 1){
					$aft_ad_type = $data2[0]->ad_type;
					if(($aft_ad_type == 'Google Ad') && ($suppress_google_ad == 0 )){
							$aft_last_content = stripslashes($data2[0]->ad_content);
						} else if ($aft_ad_type == 'Amazon Ad' ){
							$aft_last_content = stripslashes($data2[0]->ad_content);
						} else if ($aft_ad_type == 'Affiliate Ad') {
							$affi_ad_link = $data2[0]->affiliated_ad_url;
								$affi_ad_img = site_url().'/wp-content/uploads/ads/'.$data2[0]->affiliated_ad_img;
								$affi_ad = stripslashes("<a href='$affi_ad_link' target='_blank' style='text-align:center;display: block;' ><img src='$affi_ad_img' /></a>");
								$aft_last_content = $affi_ad;
						}
					}
					
					foreach ( $data as $k => $value ) {
						$ad_type = $value->ad_type;
						$ad_content = $value->ad_content;
						$ad_order = $value->ad_order;
						
						if (($ad_type == 'Google Ad') && ($suppress_google_ad == 0 )){
							${'after_paragraph_' . $ad_order} = stripslashes($ad_content);
						} else if ($ad_type == 'Amazon Ad'){
							${'after_paragraph_' . $ad_order} = stripslashes($ad_content);
						} else if ($ad_type == 'Affiliate Ad') {
							$affi_ad_link = $value->affiliated_ad_url;
							$affi_ad_img = site_url().'/wp-content/uploads/ads/'.$value->affiliated_ad_img;
							$affi_ad = stripslashes("<a href='$affi_ad_link' target='_blank' style='text-align:center;display: block;' ><img src='$affi_ad_img' /></a>");
							
							${'after_paragraph_' . $ad_order} = $affi_ad;
							
						}
					}
					
					$count = et_word_count();
					if($count > 400) {
					$block_count = count($content_block);
					$last_block =  $block_count - 1;
					$before_last_block =  $block_count - 2;
						 if (!empty($content_block[1])){
							$content_block[1] .= ${'after_paragraph_1'};
						}
						if (!empty($content_block[2])) {
							$content_block[2] .= ${'after_paragraph_2'};
						}
						if (!empty($content_block[3])) {
							$content_block[3] .= ${'after_paragraph_3'};
						}
						if (!empty($content_block[4])) {
							$content_block[4] .= ${'after_paragraph_4'};
						}
						if (!empty($content_block[5])) {
							$content_block[5] .= ${'after_paragraph_5'};
						}
						if (!empty($content_block[6])) {
							$content_block[6] .= ${'after_paragraph_6'};
						}
						if (!empty($content_block[7])) {
							$content_block[7] .= ${'after_paragraph_7'};
						}
						if (!empty($content_block[8])) {
							$content_block[8] .= ${'after_paragraph_8'};
						}
						if (!empty($content_block[9])) {
							$content_block[9] .= ${'after_paragraph_9'};
						}
						if (!empty($content_block[10])) {
							$content_block[10] .= ${'after_paragraph_10'};
						}
						if (!empty($content_block[$last_block])){
							$content_block[$last_block] .= $aft_last_content;
						}
						if (!empty($content_block[$before_last_block])){
							$content_block[$before_last_block] .= $befo_last_content;
						}
					}
					
					for($i=1;$i<count($content_block);$i++){	
						$content_block[$i] = '<p>'.$content_block[$i];
					}
					$content = implode('',$content_block);
					
						echo $content;
					?>
				</div>
					<?php echo do_shortcode('[social_large_icons]');?>
				</div>
				<div class="div30 sidebar-div">
					<div class="row">
						<?php
						if((is_page(19473)) || (is_page(2901)) || (is_page(2901)) || (is_page(6579))|| (is_page(20021)) || (is_page(20102))){ 
							dynamic_sidebar('sidebar-1');
						}
						/*if (($postid != 20021) && ($postid != 20102)){
							get_sidebar('quotes'); 
						} else {
							get_sidebar('articles');
						}*/
						get_sidebar('quotes');
						?>
					</div>
				</div>
				</div>
		</div>
		<!--contact-->

	</section>
<?php get_footer(); ?>