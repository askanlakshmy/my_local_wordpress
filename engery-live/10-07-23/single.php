<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
$postid = get_the_ID();
if (function_exists('w3tc_pgcache_flush_post')){
 w3tc_pgcache_flush_post($post_id);
}
get_header(); ?>
	<section>
		<!-- single post -->
		<div class="div100 single-post">
			<div class="row">
				<div class="div100 header-google-ads test" id="myImage" style="text-align:center"></div>
				<div class="div70">
					<?php $queried_post_type = get_query_var('post_type');
					// Start the loop.
					while ( have_posts() ) : the_post(); ?>
					<div class="single-post-container">
						<div class="posts"><!--posts-->
							<div class="post"><!--post-->
								<!--date-wrapper-->
								<div class="date-wrapper">
									<a href="<?php the_permalink(); ?>" class="date"><span class="day"><?php echo get_the_date('d'); ?></span> <span class="month"><?php echo get_the_date('M'); ?></span> </a>
								</div>
								<!--date-wrapper-->
								<div class="format-wrapper"> <i class="fa fa-pencil" aria-hidden="true"></i> </div>
								<div class="post-content">
									<h2 class="post-title"><?php the_title(); ?></h2>
									<div class="meta">
										<?php $author_id=$post->post_author; ?>
										<span class="category"><?php $category = get_the_category( $post );
											foreach($category as $cat) {
												$cat_list = $cat->cat_name;
												$cat_link = get_tag_link($cat->term_id);
												echo "<a href=$cat_link>$cat_list</a>&nbsp;,&nbsp;";} ?></span>
										<span class="comments"><a href="<?php the_permalink(); ?>#comment"><?php comments_number( '0', '1', '% responses' ); echo" comments";?></a></span>
										<span class="author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php $name = get_the_author_meta('first_name');
												if(empty($name)) : echo get_the_author_meta('display_name');
												else:
													echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name');
												endif; ?></a></span>
										<label><a href="<?php echo site_url(); ?>/articles/">   | &nbsp; &nbsp; &lt; &lt; Back to articles </a></label>
									</div>
									<div class="post-image">
										<?php //the_post_thumbnail(); ?>
									</div>
									<?php echo do_shortcode('[social_large_icons]');?>
									<div class="post-content">
										<?php if($queried_post_type == 'subscribers_video'){ $id = get_the_ID(); $video = get_field("upload_video", $id);?>
											<iframe src="<?php echo $video; ?>" webkitallowfullscreen mozallowfullscreen allowfullscreen width="1000" height="500"></iframe>
										<?php } ?>
										<div class="automated_msg">
										<?php the_content(); ?>
									</div>
									<?php echo do_shortcode('[social_large_icons]');?>
									<div style="color:#ee8b14;"><?php echo get_the_date("F j, Y"); ?></div>
									<div class="meta tags"><?php $posttags = get_the_tags();
										if ($posttags) {
											foreach($posttags as $tag) {
												$all_tags_arr = $tag -> name;
												$all_tags_arr1 = get_tag_link($tag->term_id);
												echo "<a href=$all_tags_arr1>$all_tags_arr</a>&nbsp;,&nbsp;";
											} }?></div>
											<?php related_products_all(); ?>
									<!--<div class="div100 related-quotes-block single-post-related">
										<h2>Trending Articles </h2>
										<div class="clear-div div100" style="height:20px;"></div>
										<?php $category_detail=get_the_category( $post->ID );
										foreach($category_detail as $category_id) {
											$categoryid[] = $category_id->term_id;
										}
										?>
										<?php
										$the_query = get_posts(array(
											'posts_per_page' => 6,
											'post_type' => 'post',
											'category' => $categoryid,
											'orderby' => 'rand'
										));
										?>
										<?php $i=0; if( $the_query ): ?>
											<?php foreach( $the_query as $quote ):
												if( $quote->ID == $do_not_duplicate ) continue; ?>
												<div class="div33">
													<div class="row">
														<div class="quote-container" style="box-shadow: 0 0px 0px #ffffff;">
															<?php $image_id = get_post_thumbnail_id($quote->ID);?>
															<?php $image_url = rw_resize($image_id,370,208); $alt_text = get_post_meta(get_post_thumbnail_id($quote->id), '_wp_attachment_image_alt', true);?>
															<a href="<?php echo get_permalink( $quote->ID ); ?>" class="landing-quote-link" style="min-height:inherit;">
																<div class="quote-image">
																	<?php if($image_id) { ?>
																		<?php //echo get_the_post_thumbnail($quote->ID);?>
																		<img src="<?php echo $image_url;?>" alt="<?php echo $alt_text; ?>" />
																	<?php } else { ?>
																		<div class="quote-content">
																			<div class="quote-inner-content">
																				<p><?php  echo $cont = $quote->post_content; ?></p>
																				<div class="quote-author-name ml10">
																					<?php echo the_title();?>
																				</div>
																			</div>
																		</div>
																	<?php }?>
																</div>
															</a>
															<div class="quote-author-name ml10">
																<a style="font-size:18px;" href="<?php echo get_permalink($quote->ID); ?>"><h3><?php echo get_the_title($quote->ID);?></h3></a>
															</div>
														</div>
													</div>
												</div>
												<?php $taxonomy_name = 'topics';
												$term_objects = get_the_terms( $quote->ID, $taxonomy_name );
												foreach ( $term_objects as $term_object ) {
													$terms_list[ $term_object->name ] = $term_object;
												}?>
												<?php $i++; if(($i%3) == 0){ echo '<div class="clear-div div100" style="height:20px;"></div>';} ?>
											<?php endforeach; wp_reset_postdata(); wp_reset_query();  ?>
										<?php endif; ?>
									</div>-->
									<?php if ( is_active_sidebar( 'single_page_under-articles_ads' ) ) : ?>
									<?php dynamic_sidebar( 'single_page_under-articles_ads' ); ?>
									<?php endif; ?>		
								</div>
							</div><!--post-->
						</div><!--posts-->

						<div class="author-tab">
							<div class="abh_box abh_box_down abh_box_business">
								<ul class="abh_tabs">
									<li class="abh_about abh_active"><a href="#abh_about">About</a></li>
									<li class="abh_posts"><a href="#abh_posts">Latest Posts</a></li>
								</ul>
								<div class="abh_tab_content">

									<section class="vcard abh_about_tab abh_tab" style="display: block;">
										<table>
											<tr>
												<td valign="middle" style="width:29%;padding-right: 2rem;">
													<div class="abh_image">
														<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" class="url" title="Jaime Tanna">
															<?php $authorImage = get_the_author_meta('image', get_the_author_meta( 'ID' ));
															if($authorImage) { ?>
																<img src='<?php echo $authorImage; ?>' width="250" height="250" class="avatar" />
															<?php } else { ?>
																<?php $user_id = get_the_author_meta('ID');
																echo get_avatar($user_id, 250); } ?>
														</a>
													</div>
												</td>
												<td>
													<div class="abh_text">
														<h3 class="fn name"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" class="url"><?php $name = get_the_author_meta('first_name');
																if(empty($name)) : echo get_the_author_meta('display_name');
																else:
																	echo $auth_name =  get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name');
																endif;?></a></h3>
														<div class="abh_social">
															<?php $facebook = get_the_author_meta('facebook'); ?>
															<?php $twitter = get_the_author_meta('twitter'); ?>
															<?php $pinterest = get_the_author_meta('pinterest'); ?>
															<?php $web = get_the_author_meta('web'); ?>
															<?php $instagram = get_the_author_meta('instagram'); ?>
															<?php $youtube = get_the_author_meta('youtube'); ?>
															<!--div style="clear: both; font-size:12px; font-weight:normal; width: 85px; margin: 0 0 2px auto; line-height: 20px;">Follow me</div-->
															<?php if($facebook != '') { ?>
																<a href="<?php echo get_the_author_meta('facebook'); ?>" title="Facebook" class="abh_facebook" target="_blank" rel="nofollow"><i class="fa fa-facebook" aria-hidden="true"></i></a>
															<?php } ?>
															<?php if($twitter != '') { ?>
																<a href=" <?php echo get_the_author_meta('twitter'); ?>" title="Twitter" class="abh_twitter" target="_blank" rel="nofollow"><i class="fa fa-twitter" aria-hidden="true"></i></a>
															<?php } ?>
															<?php if($pinterest != '') { ?>
																<a href="<?php echo get_the_author_meta('pinterest'); ?>" title="Pinterest" class="abh_twitter" target="_blank" rel="nofollow"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
															<?php } ?>
															<?php if($youtube != '') { ?>
																<a href="<?php echo get_the_author_meta('youtube'); ?>" title="YouTube" class="abh_twitter" target="_blank" rel="nofollow"><i class="fa fa-youtube" aria-hidden="true"></i></a>
															<?php } ?>
															<?php if($instagram != '') { ?>
																<a href="<?php echo get_the_author_meta('instagram'); ?>" title="Instagram" class="abh_twitter" target="_blank" rel="nofollow"><i class="fa fa-instagram" aria-hidden="true"></i></a>
															<?php } ?>
															<?php if($web != '') { ?>
																<a href="<?php echo get_the_author_meta('web'); ?>" title="Website" class="abh_twitter" target="_blank" rel="nofollow"><i class="fa fa-external-link" aria-hidden="true"></i></a>
															<?php } ?>
														</div>
														<div class="abh_job"></div>
														<div class="description note abh_description"><?php echo get_the_author_meta('description');?></div>
														<br />
														<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">Read more by this author</a>
													</div>
												</td>
											</tr>
										</table>
									</section>

									<section class="abh_posts_tab abh_tab" style="display: none;">
										<table><tr>
												<td valign="middle" style="width:29%;padding-right: 2rem;">
													<div class="abh_image">
														<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" class="url" title="Jaime Tanna">
															<?php $authorImage = get_the_author_meta('image', get_the_author_meta( 'ID' ));
															if($authorImage) { ?>
																<img src='<?php echo $authorImage; ?>' width="250" height="250" class="avatar" />
															<?php } else { ?>
																<?php $user_id = get_the_author_meta('ID');
																echo get_avatar($user_id, 250); } ?>
														</a>
													</div>
												</td><td>
													<div class="abh_text">
														<h4>Latest posts by <?php $name = get_the_author_meta('first_name');
															if(empty($name)) : echo get_the_author_meta('display_name');
															else:
																echo $auth_name =  get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name');
															endif;?> <span class="abh_allposts">(<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">see all</a>)</span></h4>
														<div class="abh_social">
															<?php $facebook = get_the_author_meta('facebook'); ?>
															<?php $twitter = get_the_author_meta('twitter'); ?>
															<?php $pinterest = get_the_author_meta('pinterest'); ?>
															<?php $web = get_the_author_meta('web'); ?>
															<?php $instagram = get_the_author_meta('instagram'); ?>
															<?php $youtube = get_the_author_meta('youtube'); ?>
															<!--div style="clear: both; font-size:12px; font-weight:normal; width: 85px; margin: 0 0 2px auto; line-height: 20px;">Follow me</div-->
															<?php if($facebook != '') { ?>
																<a href="<?php echo get_the_author_meta('facebook'); ?>" title="Facebook" class="abh_facebook" target="_blank" rel="nofollow"><i class="fa fa-facebook" aria-hidden="true"></i></a>
															<?php } ?>
															<?php if($twitter != '') { ?>
																<a href=" <?php echo get_the_author_meta('twitter'); ?>" title="Twitter" class="abh_twitter" target="_blank" rel="nofollow"><i class="fa fa-twitter" aria-hidden="true"></i></a>
															<?php } ?>
															<?php if($pinterest != '') { ?>
																<a href="<?php echo get_the_author_meta('pinterest'); ?>" title="Twitter" class="abh_twitter" target="_blank" rel="nofollow"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
															<?php } ?>
															<?php if($youtube != '') { ?>
																<a href="<?php echo get_the_author_meta('youtube'); ?>" title="YouTube" class="abh_twitter" target="_blank" rel="nofollow"><i class="fa fa-youtube" aria-hidden="true"></i></a>
															<?php } ?>
															<?php if($instagram != '') { ?>
																<a href="<?php echo get_the_author_meta('instagram'); ?>" title="Twitter" class="abh_twitter" target="_blank" rel="nofollow"><i class="fa fa-instagram" aria-hidden="true"></i></a>
															<?php } ?>
															<?php if($web != '') { ?>
																<a href="<?php echo get_the_author_meta('web'); ?>" title="Twitter" class="abh_twitter" target="_blank" rel="nofollow"><i class="fa fa-external-link" aria-hidden="true"></i></a>
															<?php } ?>
														</div>
														<?php $auth_query_singlepage = new WP_Query('author='.$author_id.'&showposts=3&paged=' . $paged); ?>
														<?php while ($auth_query_singlepage->have_posts()) : $auth_query_singlepage->the_post(); ?>
															<div class="abh_description note">
																<ul>
																	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span> - <?php echo get_the_date(); ?></span></li>
																</ul>
															</div>
														<?php endwhile; wp_reset_postdata(); wp_reset_query();?>
													</div>
												</td>
											</tr></table>
									</section>
								</div>

							</div>
						</div>
						<!--author-tab-->
						<!--comment-->
						<div class="comment-form-wrapper">
							<div id="respond" class="comment-respond">
								<h3 id="reply-title-wp" class="comment-reply-title">Would you like to share your thoughts?</h3>
								<p>
								<?php if (!is_user_logged_in()){ ?>
								<a href="<?php echo site_url(); ?>/my-account">Login/</a><a href="<?php echo get_permalink(woocommerce_get_page_id('myaccount')); ?>?action=register">create an account for faster commenting...</a>
								<?php } ?></p>
								<?php
								// If comments are open or we have at least one comment, load up the comment template.
										
								
								if ( comments_open() || get_comments_number($postid) ) :
									comments_template();
								endif;
								// End the loop.
								?><!-- #respond -->
							</div>
						</div>
						<!--comment-->

					</div>
					<?php endwhile;  ?>
				</div>
				<div class="div30 sidebar-div">
					<div class="row">
					<?php
						if(($postid == 19489) ||($postid == 19479) ||($postid == 3113) ||($postid == 5902) 
							||($postid == 6686) ||($postid == 6592) ||($postid == 3150)){
								dynamic_sidebar('sidebar-1');
							}?>
						<?php get_sidebar('quotes'); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- single post -->
	</section>
<?php get_footer(); ?>