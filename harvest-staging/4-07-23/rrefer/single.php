<?php
/**
 * The Template for displaying all single posts
 *
 */
?>
<?php  get_header('blog'); ?>

<?php
/**
 * The Template for displaying all single posts
 *
 */
?>
<?php  get_header('blog'); ?>

<div class="super_container">

	
	<!-- Home -->

	<div class="home ss-desktop-post">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="#" data-speed="0.8">
			<?php $thumbnail = get_post( get_post_thumbnail_id() ); ?>
			<img class="card-img-top" src="<?php if(get_post_thumbnail_id()) { echo rw_resize(get_post_thumbnail_id(),1920,1080); } else {  echo get_template_directory_uri()."/images/default_postpage_image.jpg"; } ?>"
				alt="<?php if(get_post_thumbnail_id()) { echo get_post_meta( $thumbnail->ID, '_wp_attachment_image_alt', true );} else { echo "askantech-blog"; } ?>">
		</div>
	</div>
	<div class="home ss-mobile-post">
	<div class="home_background parallax-window" data-parallax="scroll" data-image-src="#" data-speed="0.8">
	<?php $thumbnail = get_post( get_post_thumbnail_id() ); ?>
	<img class="card-img-top" src="<?php if(get_post_thumbnail_id()) { echo rw_resize(get_post_thumbnail_id(),425,283); } else {  echo get_template_directory_uri()."/images/default_postpage_image.jpg"; } ?>"
			alt="<?php if(get_post_thumbnail_id()) { echo get_post_meta( $thumbnail->ID, '_wp_attachment_image_alt', true );} else { echo "askantech-blog"; } ?>">
		</div>
	</div>
    
<!--     
    <div class="div100">
		<div class="wrapper">
			<div class="breadcrumb">
				 <?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>
			<a href="<?php echo site_url();?>/">Home</a> >> <a href="<?php echo site_url();?>/blog/"/>Blog</a>  >> <a class="current" href="#"/><?php the_title(); ?></a> <?php endwhile; endif; ?>
			</div>
		</div>
	</div> -->
	<!-- Page Content -->

	<div class="page_content">
		<div class="container ss-container">
			<div class="row row-lg-eq-height">

				<!-- Post Content -->
                <?php if(have_posts()): ?>
						<?php while(have_posts()): the_post(); ?>
				<div class="col-lg-12">
					<div class="post_content">

						<!-- Top Panel -->
						<div class="post_title"><?php the_title(); ?></div>
						<div class="post_panel post_panel_top d-flex flex-row align-items-center justify-content-start">
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
                            <!-- <div class="blogdet-comments">
			<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></div>
								<div class="blogdet-tag"><?php the_tags(); ?></div> -->
						</div>

						<!-- Post Body -->
                    
						<div class="post_body">
							<!-- <img src="<?php the_post_thumbnail_url(); ?>" alt="">
							<figcaption><?php the_title(); ?></figcaption> -->
							<p class="post_p">
							<div> <?php the_content(); ?> </div>
							</p>
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
					</div>
                </div>
                <?php endwhile; ?><div class="blogPagination">  </div><?php endif; ?>

<!-- Sidebar -->

<!-- <div class="col-lg-3">
		<div class="sidebar">
			<div class="sidebar_background"></div>
            <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div>
				<?php endif; ?>
		</div>
	</div>

</div> -->
</div>
</div>


</div>


</div>
</div>


</div>

	
<?php get_footer('blog');?>





</div>
</div>


</div>

	
<?php get_footer('blog');?>


