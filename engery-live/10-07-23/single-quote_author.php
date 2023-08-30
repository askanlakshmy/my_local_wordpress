<?php
/**
 * The Template for displaying single posts.
 *
 * Theme: Twenty Eleven
 */

get_header(); ?>
	<section>
		<!--title-->
		<div class="div100">
			<div class="head-image">
				<div class="overlay light">
					<div class="row">
						<h1 class="page-title"><?php the_title();  echo " QUOTES"; ?></h1>
					</div>
				</div>
			</div>
		</div>
		<!--title-->
		<!-- single post -->
		<div class="div100 single-quote landing-quotes">
			<div class="row">
			<div class="divide20"></div>
			<div class="div100 header-google-ads" id="myImage" style="text-align:center">
			</div>
				<div class="div70">
					<div class="landing-quote-container">
						<?php echo do_shortcode('[social_author_icons pid="'.$quote->ID.'"]');?>
						<div id="effect-2" class="div100 effectss clearfix">
						<div id="author-quote" data-columns>
						<?php setPostViews(get_the_ID());
							if(isset($_REQUEST['pg'])){
									$paged = $_REQUEST['pg'];
								} else {
									$paged = 1;
								}
						 $the_query = get_posts(array(
							'posts_per_page' => 20,
							'post_type' => 'quote',
							'meta_query' => array(
								array(
									'key' => 'author', // name of custom field
									'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
									'compare' => 'LIKE'
								)
							),
							'paged' => $paged,
						));
						?>
						<?php //while ( have_posts()) :  the_post(); ?>
						<!--landing single quote-->
						<?php $i=0; if( $the_query ): ?>
						<?php foreach( $the_query as $quote ): ?>
						<!--div class="div50 effectss"-->
						<?php if(wp_is_mobile() && $i == 2){ 
							related_products_all(); } ?>
						<div class="item">
							<div class="row">
								<div class="quote-container">
								<?php $image_id = get_post_thumbnail_id($quote->ID);?>
								<?php $image_url = rw_resize($image_id,383,209);?>
								<!--a href="<?php echo get_permalink( $quote->ID ); ?>" class="landing-quote-link"-->
									<div class="img quote-image">
									<?php if($image_id) { 
									echo get_the_post_thumbnail($quote->ID, 'large'); ?>
										<div class="overlay">
											<a href="<?php echo get_permalink( $quote->ID ); ?>" class="expand"><i class="fa fa-link" aria-hidden="true"></i></a>
											<a class="close-overlay hidden">x</a>
										</div>
									<?php } else if (!empty(get_field('gallery_images',$quote->ID))) {
											$rows = get_field('gallery_images',$quote->ID);
											$first_row = $rows[0];
											$first_quote_image = $first_row['quotes_images'];
											$image = $first_quote_image['url'];
											$image_alt = $first_quote_image['alt'];
											$image_url = str_replace(' ','_',get_the_title()).'_quote_'.$first_quote_image['id'].'_'.$quote->ID.'.jpg';
												if(file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/uploads/ads/'.$image_url)){
													$final_image_url = $image_url;
												}
													if($final_image_url != '') { ?>
										<img src="<?php echo site_url();?>/wp-content/uploads/ads/<?php echo $final_image_url; ?>"alt="<?php echo $image_alt; ?>" />
										<div class="overlay">
											<a href="<?php echo get_permalink( $quote->ID ); ?>" class="expand">
											<i class="fa fa-link" aria-hidden="true"></i></a>
											<a class="close-overlay hidden">x</a>
										</div>
									<?php } }else { ?>
										<div class="img quote-content">
											<div class="quote-inner-content">
												<div class="no-img-content"><?php $cont = $quote->post_content; 
													$string = strip_tags($cont);
												if (strlen($string) > 400) {
													$stringCut = substr($string, 0, 350);
													$string = substr($stringCut, 0, strrpos($stringCut, ' ')).' [continue reading...]'; 
													echo $string;
													}
												else{
													echo $cont;
												}
												?></div>
												<div class="overlay">
													<a href="<?php echo get_permalink( $quote->ID ); ?>" class="expand">
													<i class="fa fa-link" aria-hidden="true"></i></a>
													<a class="close-overlay hidden">x</a>
												</div>
											</div>
										</div>
									<?php }?>
									</div>
								<!--/a-->
									<?php if($image_id) { ?>
									<div class="quote-excerpt"><?php $cont = $quote->post_content; 
									 $string = strip_tags($cont);
										if (strlen($string) > 140) {
											$stringCut = substr($string, 0, 140);
											$string = substr($stringCut, 0, strrpos($stringCut, ' ')).' [...]'; 
											echo $string;
										} else { echo $cont; }  ?>
									</div>
									<?php } else if (!empty(get_field('gallery_images',$quote->ID))){ ?>
									<div class="quote-excerpt"><?php $cont = $quote->post_content; 
									 $string = strip_tags($cont);
										if (strlen($string) > 140) {
											$stringCut = substr($string, 0, 140);
											$string = substr($stringCut, 0, strrpos($stringCut, ' ')).' [...]'; 
											echo $string;
										} else { echo $cont; }  ?>
									</div>
									<?php } ?>
									<div class="quote-author-name ml10">
										<a href="<?php the_permalink($quote->ID); ?>"><?php echo the_title();?></a>
									</div>
									<div class="landing-social-container">
										<div class="div100">
											<ul class="social-icons">
												<?php echo do_shortcode('[social_small_icons_quotes pid="'.$quote->ID.'"]'); //social_warfare(); ?>
											</ul>
										</div>
									</div>
									<?php $posttags = get_the_tags($quote->ID);
									if ($posttags) { ?>
									<div class="post-tags">
										<?php foreach($posttags as $tag) {
										$all_tags_arr = $tag -> name;
										$all_tags_arr1 = get_tag_link($tag->term_id);
										echo "<a href=".$all_tags_arr1.">".$all_tags_arr."</a>&nbsp;"; } ?>
									</div> <?php }?>
								</div>
							</div>
						</div>
						<!--/div-->
						<?php $taxonomy_name = 'topics';
							$term_objects = get_the_terms( $quote->ID, $taxonomy_name ); 
							foreach ( $term_objects as $term_object ) {
								$terms_list[ $term_object->name ] = $term_object;
							} $i++; //if(($i%2) == 0){ echo '<div class="clear-div div100" style="height:20px;"></div>';} ?>
								<?php endforeach; ?>
							<?php endif; ?>
						<?php //endwhile;?>
						<!--landing single quote-->
						</div>
						</div>
					</div>
					<?php
						$args = array(
							'posts_per_page' => -1,
							'orderby'        => 'date',
							'order'          => 'DESC',
							'post_type' 	 => 'quote',
							'meta_query' 	 => array(
								array(
									'key'	 => 'author', // name of custom field
									'value'	 => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
									'compare'=> 'LIKE'									
								)
							),
						); 
						$the_page = new WP_Query($args );
						$tot_pg = (($the_page->found_posts) / 20 ); 
						if($tot_pg >= 1) { ?>
					<!--pagination-->
					<div class="pagination div100">
						<?php  
						echo '<ul>';
						if((isset($_REQUEST['pg'])) && $_REQUEST['pg']!=1 ){ $z = ($_REQUEST['pg'] -1 );?>
						<li class="single_page"><a href="<?php echo the_permalink().'?pg='.$z; ?>">PREV</a></li>	
						<?php }
						for ($x = 1; $x <= $tot_pg; $x++) { ?>
						<li class="single_page"><a href="<?php echo the_permalink().'?pg='.$x; ?>"><?php echo $x; ?></a></li>
						<?php } if(($_GET['pg'] == '' || $_GET['pg'] == 1) &&( $tot_pg > 1 )){ ?>
						<li class="single_page"><a href="<?php echo the_permalink().'?pg=2'; ?>">Next</a></li>
						<?php }else if($_GET['pg'] > 1 && $_GET['pg'] < $tot_pg){  $y = ($_GET['pg'] +1 );?>
						<li class="single_page"><a href="<?php echo the_permalink().'?pg='.$y; ?>">Next</a></li>
						<?php } ?>
						</ul>
					</div>
					<?php } ?>
					<!--pagination-->
					<?php if(get_field('amazon_shop_link')) {?>
					<div class="row">
						<span class="amazon-text">Find on Amazon: <a class="orange-color" href="<?php the_field('amazon_shop_link'); ?>" target="_blank"><?php echo the_title();?></a></span>
					</div>
					<?php } ?>
					<div class="div100 google-ad" id="below_content"></div>
					<div class="clear-div div100" style="height:20px;"></div>
					<?php related_products_all(); ?>
					<div class="div100 single-quote-footer-links">
						<div class="row">
							<div class="div33">
							<div class="widget-1  first sidebox widget">
								<?php $author_name = strtolower (get_the_title( $author_details->ID )); 
										$author_name = str_replace (".","",$author_name);
										$author_name = str_replace (" ","-",$author_name);?>
								<h3><i class="fa fa-user-o" aria-hidden="true"></i><a class="orange-color" href="<?php echo Site_url(); ?>/<?php echo $author_name ?>-biography" target="_blank"> Author Bio</a></h3>
								<ul class="author-list">
									<li><?php if(has_post_thumbnail()){ ?>
										<a href="<?php echo Site_url(); ?>/<?php echo $author_name ?>-biography" target="_blank"><?php the_post_thumbnail('large'); ?></a>
										<?php } else { ?>
										<a href="<?php echo Site_url(); ?>/<?php echo $author_name ?>-biography" target="_blank">
										<img class="no-img" src="<?php echo get_template_directory_uri();?>/images/author_thumbnail.png"alt="author_img" /></a>
										<?php } ?>
									</li>
									<?php $format_in = 'Ymd'; // the format your value is saved in (set in the field options)
									$format_out = 'd-m-Y'; // the format you want to end up with ?>
									<li>Nationality: <?php the_field('nationality'); ?></li>
									<li>Profession: <?php the_field('type'); ?></li>
									<?php if(get_field('born')) { ?>
									<li>Born: <?php the_field('born');//$date = get_field('born'); $date = str_replace('/', '-', $date);
									//echo $date2 = date("F j, Y", strtotime($date)); ?></li><?php } ?>
										<?php if(get_field('died')) { ?>
									<li>Died: <?php the_field('died');//$date3 = get_field('died'); $date3 = str_replace('/', '-', $date3);
										 //echo $date4 = date("F j, Y", strtotime($date3)); ?></li><?php } ?>
								</ul>
							</div>
							</div>
							<div class="div33">
							<div class="widget-1  first sidebox widget">
								<h3><i class="fa fa-user-o" aria-hidden="true"></i> Related Authors</h3>
								<ul class="author-list">
									<?php $related_author = get_field('related_author'); if($related_author) { 
									foreach($related_author as $related_authors) { ?>
										<li><a href="<?php echo get_permalink( $related_authors->ID ); ?>"><?php echo get_the_title( $related_authors->ID ); ?></a></li>
									<?php } } else { ?><li class="div100 ctext" style="width:60%"> - </li><?php } ?>
								</ul>
							</div>
							</div>
							
							<div class="div33">
							<div class="widget-1  first sidebox widget">
								<h3><i class="fa fa-list" aria-hidden="true"></i> Category Topics</h3>
								<ul class="author-list">
									<?php 
								$taxonomy = 'topics';
								foreach ( $terms_list as $term ) { ?>
										<li><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></li>
									<?php } ?>
								</ul>
							</div>
							</div>
							
						</div>
					</div>
				</div>
				<div class="div30 sidebar-div">
					<div class="row">
						<?php get_sidebar('quotes'); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- single post -->
	</section>
	<!--content-->
<?php get_footer(); ?>