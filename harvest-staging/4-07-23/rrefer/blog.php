<?php
/**
 * Template Name: Blog
 */
get_header('new'); ?>
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
                    <a href="<?php echo site_url(); ?>">Home</a> >> <a class="current" href="#"/>Blog</a>
                </div>
            </div>
        </div>
        <!--breadcrumb-->
        <div class="div100 mt25 ">
            <div class="wrapper">
                <div class="100">
                    <!--left content-->
                    <div class="div70 success-stories-inner">
                        <div class="inner-main-title">Check our Blog Upates</div>
                        <div class="div100"><hr class="sepl" /></div>
                        <div class="div100 mt15">
                            <p>Check our blog updates to explore the new technology informations and techie news of current web technology.</p>
                        </div>
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
  	                <div class="div100">
                            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts('posts_per_page=5&paged=' . $paged); ?>
                            <?php if(have_posts()): ?>
                                <?php while(have_posts()): the_post(); ?>

                                    <div class="blog-container">
                                        <div class="div40">
                                            <div class="blog-image">
                                                <?php $thumbnail = get_post( get_post_thumbnail_id() ); ?>
                                                <img src="<?php if(get_post_thumbnail_id()) { echo rw_resize(get_post_thumbnail_id(),235,185); } else {  echo get_template_directory_uri()."/images/askantech-blog.png"; } ?>"
                                                     alt="<?php if(get_post_thumbnail_id()) { echo get_post_meta( $thumbnail->ID, '_wp_attachment_image_alt', true );} else { echo "askantech-blog"; } ?>"
                                                     title="<?php if(get_post_thumbnail_id()) { echo $thumbnail->post_title; } else { echo "askantech-blog"; } ?>" height="185" width="235"/>
                                                <div class="blog-comment">
				 <?php comments_number( '0', '1', '% Comments' ); ?></div>
                                            </div>
                                        </div>
                                        <div class="div60">
                                            <div class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                            <div class="blog-date"><?php the_time('M d Y'); ?></div>
                                            <div class="blog-tag"><?php the_tags(); ?></div>
                                            <p><?php the_excerpt(); ?></p>
                                            <a href="<?php the_permalink(); ?>">Read more</a>
                                        </div>
                                    </div>
                                <?php endwhile; ?><?php endif; ?>
                        </div>


                    </div>
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

<?php get_footer('new'); ?>