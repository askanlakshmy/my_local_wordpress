<?php
/**
 * The Template for displaying all single posts
 *
 */

get_header(); ?>
<section class="container ip">
    <?php
    $args = array(
        'type'                     => 'post',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'name',
        'order'                    => 'ASC',
        'hide_empty'               => 1,
        'hierarchical'             => 1,
        'exclude'                  => '',
        'include'                  => '',
        'number'                   => '',
        'taxonomy'                 => 'category',
        'pad_counts'               => false

    );
    $categories = get_categories( $args );
    ?>
<section class="content">
	<!--innerbanner + title-->
	<div class="div100">
		<div class="innerbanner blog-banner">
			<div class="wrapper"><h1>Blog</h1></div>
		</div>
	</div>
	<!--innerbanner + title-->
	<!--breadcrumb-->
	<div class="div100">
		<div class="wrapper">
			<div class="breadcrumb">
				 <?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>
			<a href="<?php echo site_url();?>/">Home</a> >> <a href="<?php echo site_url();?>/blog/"/>Blog</a>  >> <a class="current" href="#"/><?php the_title(); ?></a> <?php endwhile; endif; ?>
			</div>
		</div>
	</div>
	<!--breadcrumb-->	
	
	<div class="div100 mt25 ">
			<div class="wrapper">
				<div class="100">
					<!--left content-->
					 <?php if(have_posts()): ?>
						<?php while(have_posts()): the_post(); ?>
					<div class="div70 success-stories-inner">
						<div class="inner-main-title"><?php the_title(); ?></div>
						<div class="div100"><hr class="sepl" /></div>
						
						<div class="div100">
							<div class="blogdetail-container">
							
							<div class="div100 blog-info">
								<div class="blogdet-date"><?php the_time('M d Y'); ?></div>
								<div class="blogdet-author"><?php
                            $name = get_the_author_meta('first_name');
                            if(empty($name)) : echo get_the_author_meta('display_name');
                            else:
                                echo get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name');
                            endif;
                            ?> </div>
								<div class="blogdet-comments">
			<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></div>
								<div class="blogdet-tag"><?php the_tags(); ?></div>
							</div>
														
							<?php if(has_post_thumbnail()){ /*the_post_thumbnail('full' ); */}?>
							<?php the_content(); ?>
							</div>
							</div>
							<?php endwhile; ?><div class="blogPagination">  </div><?php endif; ?>
							<div class="div100">
							<!--p class="sharethis">Share this post :&nbsp; </p--> 
							<!--ul class="socialshare"> <?php //echo do_shortcode('[simple-social-share]'); ?>
								<li class="facebook" onclick="window.open('http://www.facebook.com','_self')"></li>
								<li class="twitter" onclick="window.open('http://www.facebook.com','_self')"></li>
								<li class="linkedin" onclick="window.open('http://www.facebook.com','_self')"></li>
								<li class="googleplus" onclick="window.open('http://www.facebook.com','_self')"></li>
								<li class="pinterest" onclick="window.open('http://www.facebook.com','_self')"></li>
							</ul-->
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
					<!--left content-->
					 <!--right content-->
                    <div class="div30">
                        <div class="blog-sidebar">
                          
                          <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div>
				<?php endif; ?>
                           
                        </div>

                    </div>
                    <!--right content-->
        </div>
		</div>
    </div>
</section>
<?php get_footer(); ?>
