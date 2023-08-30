<?php
/**
 * Template Name: Article Archives
 */
get_header(); ?>

<section>
	<!--title-->
	<div class="div100">
		<div class="head-image">
			<div class="overlay light">
				<div class="row">
					<h1 class="page-title"><?php echo "Article Archives"; ?></h1>
				</div>
			</div>
		</div>
	</div>
	<!--title-->
	<!--latest article-->
	<div class="div100 latest-articles">
		<div class="row padding0">
			<div class="divide20"></div>
		<div class="div100 header-google-ads" id="myImage" style="text-align:center"></div>
			<div class="divide20"></div>
			<div id="effect-2" class="div100 effectss clearfix">
				<div id="timeline" data-columns>
                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                $pargs = array(
                    'post_type'    => 'post',
                    'showposts'    => 20,
                    'order'       => 'DESC',
                    'orderby'       => 'rand',
                    'paged'       => $paged,
                    'meta_query' => array(
                        'relation' => 'AND',
                        array(
                            'key'     => 'archive_this',
                            'value'	  => 1,
                            'compare' => '=',
                            'type' => 'NUMERIC'
                        ),
                    ),
                );
            query_posts($pargs); ?>
				<?php if ( have_posts() ) : 
				while ( have_posts() ) : the_post();?>
					<div class="item">
						<div class="row">
							<div class="img post-image">
								<?php $rslides_img_url = rw_resize(get_post_thumbnail_id($post->ID),400,225); ?>
								<?php $rslides_alt = get_post_meta($post->ID, '_wp_attachment_image_alt', true); ?>
								<?php if(@getimagesize($rslides_img_url)) {?>
								<img src="<?php echo $rslides_img_url; ?>" alt="<?php echo $rslides_alt; ?>" />
								<?php } else { the_post_thumbnail(); } ?>
								<div class="overlay">
									<a href="<?php the_permalink(); ?>" class="expand"><i class="fa fa-link" aria-hidden="true"></i></a>
									<a class="close-overlay hidden">x</a>
								</div>
							</div>
							<div class="bordered">
								<h3 class="post-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>
								<div class="meta meta-1">
									<div class="date"><?php echo get_the_date(); ?></div>
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
								</div>
								<?php echo do_shortcode('[social_small_icons]'); //social_warfare();?>
								<p><?php the_excerpt(); ?></p>
								<p><a href="<?php the_permalink(); ?>" class="post-read-more">Read More</a></p>
							</div>
						</div>
					</div>
					<?php endwhile;
					endif; ?>
				</div>
			</div>
			<!--pagination-->
			<div class="pagination div100">
				<?php 
				echo paginate_links (array(
					'prev_text'          => __('PREV'),
					'next_text'          => __('NEXT'),
					'type'         => 'list'
					)
				);
				?>
			</div>
			<!--pagination-->
		</div>
	</div>
	<!--latest article-->
</section>
<!--content-->
<?php get_footer(); ?>