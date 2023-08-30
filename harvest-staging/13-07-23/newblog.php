<?php
/*
Template Name: newblog
*/  get_header('blog1'); ?>


	<div class="super_container">

		<!-- Home -->

		<div class="home">

			<!-- Home Slider -->

			<div class="home_slider_container">
				<div class="owl-carousel  home_slider">

					<!-- Slider Item -->
					<div class="owl-item">
						<div class="home_slider_background"></div>
							<div class="home_slider_content_container">
								<div class="container">
									<div class="row">
										<div class="col">
											<div class="home_slider_content">
												<!-- <div class="home_slider_item_category trans_200"><a href="#"
														class="trans_200">Tech</a></div> -->
												<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts('posts_per_page=1&paged=' . $paged); ?>
												<?php if(have_posts()): ?>
												<?php while(have_posts()): the_post(); ?>	
												<div class="home_slider_item_title">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												</div>
												<?php endwhile; ?><?php endif; ?>
												<div class="home_slider_item_link">
												<div class="author_image"><div>
												<?php if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE): ?>
																	<img src="https://www.askantech.com/wp-content/themes/askantech/images/at-ig.png">
																<?php else: ?>
																<img src="<?php echo $avatar; ?>" alt="">
																<?php endif; ?>
											</div>
										</div>
										<div class="post_meta">
											<?php $name = get_the_author_meta('first_name');
												if(empty($name)) : echo get_the_author_meta('display_name');
												else:
												echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name');
												endif;
											?>
											<span><?php the_time('M d Y'); ?></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

						<!-- Similar Posts -->
						<!-- <div class="similar_posts_container">
							<div class="container">
								<div class="row d-flex flex-row align-items-end">
								<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts('posts_per_page=3&paged=' . $paged); ?>
                            			<?php if(have_posts()): ?>
                                			<?php while(have_posts()): the_post(); ?>
									<div class="col-lg-3 col-md-6 similar_post_col">
										<div class="similar_post trans_200">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</div>
									</div>
									<?php endwhile; ?><?php endif; ?>
								</div>
							</div>

							<div class="home_slider_next_container">
								<div class="home_slider_next">
									<div class="home_slider_next_background trans_400"></div>
									<div class="home_slider_next_content trans_400">
										<a href="post.html"><div class="home_slider_next_title">Latest Post</div>
											<div class="home_slider_next_link">Lorem Ipsum has been the industry's
												standard
												dummy text ever since the 1500s</div></a>
									</div>
								</div>
							</div>

						</div> -->
					</div>
				</div>


			</div>
		</div>

		<!-- Page Content -->
		<div class="page_content">
			<div class="container">
				<div class="row row-lg-eq-height">
				
					<!-- Main Content -->

					<div class="col-lg-12">
						<div class="main_content">

							<!-- Blog Section - Don't Miss -->

							<div class="blog_section">
								<div class="section_panel d-flex flex-row align-items-center justify-content-start">
									<!-- <div class="section_title"><a href="<?php echo site_url(); ?>">Home</a> >> <a class="current" href="#"/>Blog</a></div> -->
									<?php $categories = get_categories();
									foreach($categories as $category) { echo '<div class="section_tags ml-auto"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';} ?></a>
								</div>
								<div class="section_content">
									<div class="grid clearfix">
										<div class="row">
											<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts('posts_per_page=5&paged=' . $paged); ?>
                            				<?php if(have_posts()): ?>
                                			<?php while(have_posts()): the_post(); ?>
											<div class="column">
												<!-- Largest Card With Image -->
												<div class="card card_largest_with_image grid-item">
													<?php $thumbnail = get_post( get_post_thumbnail_id() ); ?>
													<img class="card-img-top" src="<?php if(get_post_thumbnail_id()) { echo rw_resize(get_post_thumbnail_id(),1920,1080); } else {  echo get_template_directory_uri()."/images/askantech_blog.png"; } ?>"
														alt="<?php if(get_post_thumbnail_id()) { echo get_post_meta( $thumbnail->ID, '_wp_attachment_image_alt', true );} else { echo "askantech-blog"; } ?>"
														title="<?php if(get_post_thumbnail_id()) { echo $thumbnail->post_title; } else { echo "askantech-blog"; } ?>" />
													<div class="card-body">
														<div class="card-title">
                                                			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                		</div>
														<div class="ss-author">
															<div class="author_image"><div>
															<?php if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE): ?>
																<img src="https://www.askantech.com/wp-content/themes/askantech/images/at-ig.png">
															<?php else: ?>
															<img src="<?php echo $avatar; ?>" alt="">
															<?php endif; ?>
															</div>
														</div>
														<div class="post_meta">
															<?php $name = get_the_author_meta('first_name');
														    if(empty($name)) : echo get_the_author_meta('display_name');
															else:echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name');endif;?> 
															<span><?php the_time('M d Y'); ?></span>
														</div>
													</div>
														<!-- <div class="blog-date"><?php the_time('M d Y'); ?></div> -->
                                            			<!-- <div class="blog-tag"><?php the_tags(); ?></div> -->
														<p class="card-text"><?php the_excerpt(); ?></p>
														<a href="<?php the_permalink(); ?>">Read more</a>
													</div>
													
												</div>
											</div>
											<?php endwhile; ?><?php endif; ?>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="div100 post-navi">
						<div class="div50 prev-navi">
								<a href="">
								<!--img src="images/prev-post.jpg" alt=""/--><span><?php previous_post_link('%link', __( '&larr; Previous Post', 'ft' ) ); ?></span>
								</a>
						</div>
						<div class="div50 next-navi">
								<a href="">
								<!--img src="images/next-post.jpg" alt=""/--> <span><?php next_post_link('%link', __( 'Next Post &rarr;', 'ft' ) ); ?></span>
								</a>
						</div>
					</div>
					<div class="blogPagination">  </div>
					<!-- Sidebar -->

					<!-- <div class="col-lg-3">
						<div class="sidebar">
							<div class="sidebar_background"></div>
							<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                                <div class="sidebar_section">
                                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                                </div>
                            <?php endif; ?>
							
						</div>
					</div> -->


				</div>
			</div>
		</div>


	</div>
	
	<?php get_footer('blog1');?>