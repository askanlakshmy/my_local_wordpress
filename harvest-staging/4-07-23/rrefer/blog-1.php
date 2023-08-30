<?php
/*
Template Name: Blog-1
*/
?>
<?php get_header(); ?>

<!-- <div class="cc-blog-banner" style="background: url('<?php echo site_url(); ?>/wp-content/themes/askantech/assets/assets/ig/blog-banner.jpg') no-repeat ;background-size: cover">
    <div class="cc-blog-banner-overlay"></div>
    <div class="cc-blog-banner-content">
        <h3><?php single_tag_title(); ?></h3>
    </div>
</div> -->

<!-- <div class="container">
    <div class="row">
        <div class="cc-full cc-author-page-wrapper">
            <div class="cc-content-wrapper">
                <div class="cc-pad cc-two-col-section">
                    <div class="cc-post-content-section-row">
                        <div class="trending-blog cc-post-content-section">
                            <div class="cc-horzintal-post">
                        
                                    <?php
                                        $author_posts = get_the_author();
                                        //print_r($author_posts);							
                                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                        $page = query_posts('posts_per_page=3'.'&paged=' . $paged);
                                        
                                    ?> 
                                    <?php if(have_posts()){ ?>
                                        <?php while(have_posts()): the_post(); ?>
            
                                <div class="cc-post-wrapper">
                                    <div class="cc-post-img-wrapper" style="background-image:url('<?php the_post_thumbnail_url( $size ); ?>')"></div>
                                    <div class="cc-post-content-wrapper">
                                        <div class="cc-title">
                                            <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="blog-link" ><h4 ><?php the_title();?></h4></a>
                                        </div>
                                        <hr>
                                        <div class="cc-post-date">
                                            <p><i class="fa fa-calendar"></i><?php echo get_the_time('M-d-Y'); ?> <span class="cc-cat"><i class="fas fa-hashtag"></i><?php $post_tags = get_the_tags();
                                                foreach( $post_tags as $tag ) { ?>
                                            <a href="<?php echo get_tag_link($tag); ?>" class="blog-link">
                                                <span class="cc-cat">
                                                <i class="fas fa-hashtag"></i><?php  echo $tag->name ; ?></span></a><?php } ?></p>
                                        </div>
                                        <div class="cc-post-content">
                                            <p><?php echo wp_trim_words(get_the_content(),25, '...'); ?></p>
                                        </div>
                                        <div class="cc-readmore">
                                            <a href="<?php echo get_permalink(); ?>">Read More</a>
                                        </div>
                                        <div class="cc-social-links cc-fx-row cc-jc-sb">
                                            <div class="cc-links">
                                                <table>
                                                    <tr>
                                                        <td><i class="fa fa-facebook"></i></td>
                                                        <td><i class="fa fa-twitter"></i></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="cc-comment"><i class="fa fa-comments"></i> <span class="count"></span>Comments</div>
                                        </div>
                                    </div>
                                </div>
            
                                <?php  
                                    endwhile;   
                                    
                                ?>
            
                                <div class="cc-pagination">
                                    <?php echo paginate_links(array( 'prev_text' => __('PREV'), 'next_text' => __('NEXT'), 'type' => 'list'));?>
                                </div>
            
                                <?php wp_reset_query(); ?>
                                <?php }else{  ?>
                                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                <?php }?>
            
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </div>
</div> -->
<div class="super_container">

	
	<!-- Home -->
	<?php
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post();
            
                    ?>
	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="#" data-speed="0.8" style="background-size:cover;"></div>
		<div class="home_content">
				<!-- <div class="home_slider_item_category trans_200"><a href="#"
					class="trans_200">Tech</a></div> -->
			<div class="post_title">What is SCA compliance?</div>
		</div>
	</div>
	
	<!-- Page Content -->

	<div class="page_content">
		<div class="container">
			<div class="row row-lg-eq-height">

				<!-- Post Content -->

				<div class="col-lg-9">
					<div class="post_content">

						<!-- Top Panel -->
						<div class="post_panel post_panel_top d-flex flex-row align-items-center justify-content-start">
							<div class="author_image"></div>
							<div class="post_meta">
							<p><i class="fa fa-calendar"></i><?php echo get_the_time('M-d-Y'); ?> <span class="cc-cat"><i class="fa fa-hashtag"></i><?php $post_tags = get_the_tags();
                                                foreach( $post_tags as $tag ) { ?>
                                            <a href="<?php echo get_tag_link($tag); ?>" class="blog-link">
                                                <span class="cc-cat">
                                                <i class="fas fa-hashtag"></i><?php  echo $tag->name ; ?></span></a><?php } ?></p>
                                <p><i class="fa fa-user"></i><?php the_author_posts_link(); ?></p>
							</div>
							<div class="post_share ml-sm-auto">
								<span>share</span>
								<ul class="post_share_list">
									<li class="post_share_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li class="post_share_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li class="post_share_item"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>

						<!-- Post Body -->

						<div class="post_body">
							<p class="post_p">
							<div> <?php the_content(); ?> </div>
							</p>
							<figure>
							<img src="<?php the_post_thumbnail_url(); ?>" alt="">
								<figcaption>Lorem Ipsum Dolor Sit Amet</figcaption>
							</figure>
							<!-- Post Tags -->
							<div class="post_tags">
								<ul>
									<li class="post_tag"><a href="#">SEO</a></li>
									<li class="post_tag"><a href="#">Magneto</a></li>
									<li class="post_tag"><a href="#">Wordpress</a></li>
									<li class="post_tag"><a href="#">Uncategorized</a></li>
								</ul>
							</div>
						</div>
						<?php
                            endwhile;
                        else :
                            echo wpautop( 'Sorry, no posts were found' );
                        endif;
                    ?>
						

						
					</div>
					
				</div>

<!-- Sidebar -->

<div class="col-lg-3">
		<div class="sidebar">
			<div class="sidebar_background"></div>

			<!-- Top Stories -->
			<!-- <div class="ss-searchbar">
				<div class="search-box">
					<input type="text" placeholder="Search" /><span></span>
				</div>
			</div> -->
			<div class="search">
				<form action="#">
					<input type="search" class="header_search_input menu_mm" required="required"
						placeholder="Type to Search...">
					<img class="header_search_icon menu_mm" src="<?php echo get_stylesheet_directory_uri()?>/assets/ig/search_2.png" alt="">
				</form>
			</div>

			<div class="sidebar_section">
				<div class="sidebar_title_container">
					<div class="sidebar_title">Recent Posts</div>
					<div class="sidebar_slider_nav">
						<div class="custom_nav_container sidebar_slider_nav_container">
							<div class="custom_prev custom_prev_top">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									width="7px" height="12px" viewBox="0 0 7 12"
									enable-background="new 0 0 7 12" xml:space="preserve">
									<polyline fill="#bebebe"
										points="0,5.61 5.609,0 7,0 7,1.438 2.438,6 7,10.563 7,12 5.609,12 -0.002,6.39 " />
								</svg>
							</div>
							<ul id="custom_dots" class="custom_dots custom_dots_top">
								<li class="custom_dot custom_dot_top active"><span></span></li>
								<li class="custom_dot custom_dot_top"><span></span></li>
								<li class="custom_dot custom_dot_top"><span></span></li>
							</ul>
							<div class="custom_next custom_next_top">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									width="7px" height="12px" viewBox="0 0 7 12"
									enable-background="new 0 0 7 12" xml:space="preserve">
									<polyline fill="#bebebe"
										points="6.998,6.39 1.389,12 -0.002,12 -0.002,10.562 4.561,6 -0.002,1.438 -0.002,0 1.389,0 7,5.61 " />
								</svg>
							</div>
						</div>
					</div>
				</div>
				<div class="sidebar_section_content">

					<!-- Top Stories Slider -->
					<div class="sidebar_slider_container">
						<div class="owl-carousel owl-theme sidebar_slider_top">

							<!-- Top Stories Slider Item -->
							<div class="owl-item">

								<!-- Sidebar Post -->
								<div class="side_post">
									<a href="#">
										<div
											class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
											<div class="side_post_image">
												<div><img src="<?php echo get_stylesheet_directory_uri()?>/assets/ig/top_1.jpg" alt=""></div>
											</div>
											<div class="side_post_content">
												<div class="side_post_title">How Did van Gogh’s
													Turbulent Mind</div>
												<small class="post_meta">Katy Liu<span>Sep
														29</span></small>
											</div>
										</div>
									</a>
								</div>

								<!-- Sidebar Post -->
								<div class="side_post">
									<a href="#">
										<div
											class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
											<div class="side_post_image">
												<div><img src="<?php echo get_stylesheet_directory_uri()?>/assets/ig/top_2.jpg" alt=""></div>
											</div>
											<div class="side_post_content">
												<div class="side_post_title">How Did van Gogh’s
													Turbulent Mind</div>
												<small class="post_meta">Katy Liu<span>Sep
														29</span></small>
											</div>
										</div>
									</a>
								</div>

								<!-- Sidebar Post -->
								<div class="side_post">
									<a href="#">
										<div
											class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
											<div class="side_post_image">
												<div><img src="<?php echo get_stylesheet_directory_uri()?>/assets/ig/top_3.jpg" alt=""></div>
											</div>
											<div class="side_post_content">
												<div class="side_post_title">How Did van Gogh’s
													Turbulent Mind</div>
												<small class="post_meta">Katy Liu<span>Sep
														29</span></small>
											</div>
										</div>
									</a>
								</div>

								<!-- Sidebar Post -->
								<div class="side_post">
									<a href="#">
										<div
											class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
											<div class="side_post_image">
												<div><img src="<?php echo get_stylesheet_directory_uri()?>/assets/ig/top_4.jpg" alt=""></div>
											</div>
											<div class="side_post_content">
												<div class="side_post_title">How Did van Gogh’s
													Turbulent Mind</div>
												<small class="post_meta">Katy Liu<span>Sep
														29</span></small>
											</div>
										</div>
									</a>
								</div>

							</div>

							<!-- Top Stories Slider Item -->
							<div class="owl-item">

								<!-- Sidebar Post -->
								<div class="side_post">
									<a href="#">
										<div
											class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
											<div class="side_post_image">
												<div><img src="<?php echo get_stylesheet_directory_uri()?>/assets/ig/top_1.jpg" alt=""></div>
											</div>
											<div class="side_post_content">
												<div class="side_post_title">How Did van Gogh’s
													Turbulent Mind</div>
												<small class="post_meta">Katy Liu<span>Sep
														29</span></small>
											</div>
										</div>
									</a>
								</div>

								<!-- Sidebar Post -->
								<div class="side_post">
									<a href="#">
										<div
											class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
											<div class="side_post_image">
												<div><img src="<?php echo get_stylesheet_directory_uri()?>/assets/ig/top_2.jpg" alt=""></div>
											</div>
											<div class="side_post_content">
												<div class="side_post_title">How Did van Gogh’s
													Turbulent Mind</div>
												<small class="post_meta">Katy Liu<span>Sep
														29</span></small>
											</div>
										</div>
									</a>
								</div>

								<!-- Sidebar Post -->
								<div class="side_post">
									<a href="#">
										<div
											class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
											<div class="side_post_image">
												<div><img src="<?php echo get_stylesheet_directory_uri()?>/assets/ig/top_3.jpg" alt=""></div>
											</div>
											<div class="side_post_content">
												<div class="side_post_title">How Did van Gogh’s
													Turbulent Mind</div>
												<small class="post_meta">Katy Liu<span>Sep
														29</span></small>
											</div>
										</div>
									</a>
								</div>

								<!-- Sidebar Post -->
								<div class="side_post">
									<a href="#">
										<div
											class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
											<div class="side_post_image">
												<div><img src="<?php echo get_stylesheet_directory_uri()?>/assets/ig/top_4.jpg" alt=""></div>
											</div>
											<div class="side_post_content">
												<div class="side_post_title">How Did van Gogh’s
													Turbulent Mind</div>
												<small class="post_meta">Katy Liu<span>Sep
														29</span></small>
											</div>
										</div>
									</a>
								</div>

							</div>

							<!-- Top Stories Slider Item -->
							<div class="owl-item">

								<!-- Sidebar Post -->
								<div class="side_post">
									<a href="#">
										<div
											class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
											<div class="side_post_image">
												<div><img src="<?php echo get_stylesheet_directory_uri()?>/assets/ig/top_1.jpg" alt=""></div>
											</div>
											<div class="side_post_content">
												<div class="side_post_title">How Did van Gogh’s
													Turbulent Mind</div>
												<small class="post_meta">Katy Liu<span>Sep
														29</span></small>
											</div>
										</div>
									</a>
								</div>

								<!-- Sidebar Post -->
								<div class="side_post">
									<a href="#">
										<div
											class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
											<div class="side_post_image">
												<div><img src="<?php echo get_stylesheet_directory_uri()?>/assets/ig/top_2.jpg" alt=""></div>
											</div>
											<div class="side_post_content">
												<div class="side_post_title">How Did van Gogh’s
													Turbulent Mind</div>
												<small class="post_meta">Katy Liu<span>Sep
														29</span></small>
											</div>
										</div>
									</a>
								</div>

								<!-- Sidebar Post -->
								<div class="side_post">
									<a href="#">
										<div
											class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
											<div class="side_post_image">
												<div><img src="<?php echo get_stylesheet_directory_uri()?>/assets/ig/top_3.jpg" alt=""></div>
											</div>
											<div class="side_post_content">
												<div class="side_post_title">How Did van Gogh’s
													Turbulent Mind</div>
												<small class="post_meta">Katy Liu<span>Sep
														29</span></small>
											</div>
										</div>
									</a>
								</div>

								<!-- Sidebar Post -->
								<div class="side_post">
									<a href="#">
										<div
											class="d-flex flex-row align-items-xl-center align-items-start justify-content-start">
											<div class="side_post_image">
												<div><img src="<?php echo get_stylesheet_directory_uri()?>/assets/ig/top_4.jpg" alt=""></div>
											</div>
											<div class="side_post_content">
												<div class="side_post_title">How Did van Gogh’s
													Turbulent Mind</div>
												<small class="post_meta">Katy Liu<span>Sep
														29</span></small>
											</div>
										</div>
									</a>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="sidebar_section ss-cat">
				<div class="sidebar_title_container">
					<div class="sidebar_title ss-title">Browse By Category</div>
					<ul class="ss-sim">
						<li><a href="#">Magento</a></li>
						<li><a href="#">SEO</a></li>
						<li><a href="#">Wordpress</a></li>
						<li><a href="#">Uncategorized</a></li>
					</ul>
				</div>
			</div>
			<div class="sidebar_section ss-ml">
				<div class="sidebar_title_container">
					<div class="sidebar_title">Write For Us</div>
					<div class="ss-sidebarcontent">
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
							when an unknown printer took a galley of type and scrambled it
							to make a type specimen book.</p>
					</div>
				</div>

				<div class="sidebar_section">
					<div class="sidebar_title_container">
						<a href="mailto:sakthivel.askan@gmail.com" class="ss-button">Become a Guset
							Writer</a>
						<div class="ss-tc"><a href="#">Terms & Conditions</a></div>
					</div>
				</div>
			</div>
			<div class="sidebar_section">
				<div class="sidebar_title_container">
					<div class="sidebar_title">Join Our Newsletter</div>
					<div class="ss-sidebarcontent">
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
							when an unknown printer took a galley of type and scrambled it
							to make a type specimen book.</p>
					</div>
				</div>
			</div>
			<div class="sidebar_section">
				<div class="sidebar_title_container">
					<input type="text" placeholder="Enter your email address">
				</div>
			</div>
			<div class="sidebar_section ss-cat">
				<div class="sidebar_title_container">
					<div class="sidebar_title ss-title1">Archives</div>
					<div class="row">
						<div class="column1">
							<ul class="ss-sim">
								<li><a href="#">Aug 2019</a></li>
								<li><a href="#">Nov 2018</a></li>
								<li><a href="#">Sep 2018</a></li>
							</ul>
						</div>
						<div class="column1">
							<ul class="ss-sim">
								<li><a href="#">Nov 2015</a></li>
								<li><a href="#">Oct 2015</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sidebar_section">
				<div class="sidebar_title_container">
					<div class="sidebar_title">Tags</div>
						<div class="ss-sidebarcontent">
							<div class="row">
								<div class="column1">
									<ul class="tag"> 
										<li><a title=""data-placement="top" data-toggle="tooltip" class="facebook" href="https://www.facebook.com">
										<i class="fa fa-tag txs"></i><span class="tx">3D Secures</span></a>
										</li> 
										<li><a title=""data-placement="top" data-toggle="tooltip" class="facebook" href="https://www.facebook.com">
											<i class="fa fa-tag txs"></i><span class="tx">SCA</span></a>
										</li> 
										<li><a title=""data-placement="top" data-toggle="tooltip" class="facebook" href="https://www.facebook.com">
											<i class="fa fa-tag txs"></i><span class="tx">SEO</span></a>
										</li> 
									</ul> 
								</div>
								<div class="column1">
									<ul class="tag"> 
										<li><a title=""data-placement="top" data-toggle="tooltip" class="facebook" href="https://www.facebook.com">
										<i class="fa fa-tag txs"></i><span class="tx">Stripe</span></a>
										</li> 
										<li><a title=""data-placement="top" data-toggle="tooltip" class="facebook" href="https://www.facebook.com">
											<i class="fa fa-tag txs"></i><span class="tx">Wordpress</span></a>
										</li>
									</ul> 
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>

</div>
</div>
</div>


</div>



<?php get_footer();?>