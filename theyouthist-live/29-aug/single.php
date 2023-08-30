<?php get_header(); ?>

<style>
.with-sidebar .yt-content {
	/*float: none !important;
	margin: 0 auto;
	padding-left: 0;*/
}
</style>

<div id="content single-page">
	<?php $main_post = null; ?>

	<?php while ( have_posts() ) : the_post(); $main_post = get_the_ID(); ?>

	    <article id="post-<?php the_ID(); ?>" <?php post_class('post-single'); ?> itemscope itemtype="http://schema.org/Article" >

			<div class="entry-topnav tags">
				<div class="atr_blog">
					<!-- <span class="entry-categories">.</span> -->
					<span class="entry-categories"><?php the_category(' . ');?></span>
					<span class="entry-tags"><?php the_tags( 'Tags: ', ' . ', '' ); ?> </span>
				</div>
			</div>

			<header class="entry-header">
				<h1 class="entry-title"><?php the_title();?></h1>
				<p class="entry-author"><?php the_author_posts_link(); ?></p>
			</header>

			<div class="entry-topnav social">
				<div class="article-social">
					<ul class="article-header icon-list icon-share">
						<li><a class="icon-fb" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li><a class="icon-tw" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title_attribute(); ?>" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
						<li><a class="icon-pr" href="http://pinterest.com/pin/create/link/?url=<?php the_permalink(); ?>" title="Pinterest" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="entry-content">

				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'youthist' ), 'after' => '</div>' ) ); ?>
			</div><!-- .entry-content -->

			<footer class="entry-meta">
				<?php //youthist_entry_meta(); ?>
				<div class="article-social">
					<div class="article-footer icon-list icon-share">
						<div class="icon-block fb">
							<a class="" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" title="Facebook" target="_blank">
								<i class="fab fa-facebook-f"></i>
								<span>Share</span> <span>on Facebook</span>
							</a>
						</div>
						<div class="icon-block tw">
							<a class="" href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title_attribute(); ?>" title="Twitter" target="_blank">
								<i class="fab fa-twitter"></i>
								<span>Tweet</span> <span>in Twitter</span>
							</a>
						</div>
						<div class="icon-block pr">
							<a class="" href="http://pinterest.com/pin/create/link/?url=<?php the_permalink(); ?>" title="Pinterest" target="_blank">
								<i class="fab fa-pinterest-p"></i>
								<span>Pin</span> <span>on Pinterest</span>
							</a>
						</div>
					</div>
				</div>
			</footer>
			<?php echo do_shortcode('[instagram-feed feed=1]') ?>


                        <meta name="" content="<?php echo get_the_title(); ?>" itemprop="name">
                        <?php
                            $meta = get_post_meta(get_the_id());
                            $description = $meta['_aioseop_description'][0];
                        ?>
                        <meta name="" content="<?= $description; ?>" itemprop="description" >
                        <!--<meta name="" content="<?php //$description = get_the_content(); $description  = strip_tags($description ); echo substr($description,0,200); ?>" itemprop="description">-->
                        <meta name="" content="<?php $image = get_the_post_thumbnail_url(); if($image == ""){ echo "https://www.theyouthist.com/wp-content/uploads/2017/11/youthist-futuraregular.svg"; }else{ echo $image; }?>" itemprop="image">
                        <meta name="" content="<?php echo get_the_permalink(); ?>" itemprop="url">
                        <meta name="" content="<?php echo get_the_title(); ?>" itemprop="headline">
                        <meta name="" content="<?php echo get_the_date(); ?>" itemprop="DatePublished">
                        <meta name="" content="<?php echo get_the_date(); ?>" itemprop="DateModified">
                        <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                            <meta name="" content="<?php echo get_the_author(); ?>" itemprop="name">
                        </span>
                        <span itemprop="Publisher" itemscope="" itemtype="http://schema.org/Organization">
                            <meta name="" content="The Youthist" itemprop="name">
                            <span itemprop="logo" itemscope="" itemtype="http://schema.org/ImageObject">
                                <meta name="" content="https://www.theyouthist.com/wp-content/uploads/2019/08/youthist-futuraregular.jpg" itemprop="url">
                                <meta name="" content="150" itemprop="width">
                            </span>
                        </span>
                        <meta name="" content="<?php echo get_the_permalink(); ?>" itemprop="http://schema.org/mainEntityOfPage">

		</article><!-- #post -->
		<?php
		
		$args = array(
			'post_type'		=> array('post'),
			'post_status'	=> 'publish',
			'orderby'		=> 'rand',
			'post__not_in'	=> array( get_the_ID() ),
			'posts_per_page'=> 2
		);
		$posts_related = new WP_Query();
		$posts_related->query($args);
		if ( $posts_related->have_posts()) :
		?>
		<div class="related-posts related-article">
			<div class="related-post-header">
				<label><?php _e('RECOMMENDED STORIES'); ?></label>
			</div>
		
			<div class="related-post-content">
				<?php while( $posts_related->have_posts()) : $posts_related->the_post(); ?>
				<div class="related-post-item">
					<div class="related-post-thumbnail square">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php
							// Featured image
							if ( has_post_thumbnail() ) {
								the_post_thumbnail('recommended-thumb');
							} else {
								echo '<img src="http://placehold.it/240x120&text=No+Photo" />';
							}
							?>
						</a>
					</div>
					<div class="related-post-detail">
						<h2 class="related-post-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>				
						<?php //youthist_entry_meta(); ?>
					</div>
				</div>
				<?php endwhile; 
			//wp_reset_postdata();
				$args = array(
			'post_type'		=> array('post'),
			'post_status'	=> 'publish',
			'orderby'		=> 'rand',
			'post__not_in'	=> array( get_the_ID() ),
			'post_taxonomy' => 'makeup',
			'posts_per_page'=> 1
		);
		$posts_related = new WP_Query();
		$posts_related->query($args);
		if ( $posts_related->have_posts()) :

			 while( $posts_related->have_posts()) : $posts_related->the_post(); ?>
				<div class="related-post-item">
					<div class="related-post-thumbnail square">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php
							// Featured image
							if ( has_post_thumbnail() ) {
								the_post_thumbnail('recommended-thumb');
							} else {
								echo '<img src="http://placehold.it/240x120&text=No+Photo" />';
							}
							?>
						</a>
					</div>
					<div class="related-post-detail">
						<h2 class="related-post-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>				
						<?php //youthist_entry_meta(); ?>
					</div>
				</div>
				<?php endwhile; 
				endif;
				?>
				<div class="clr"></div>
			</div>
		</div>
		<?php
		endif;
		wp_reset_postdata();
		
		//get_template_part('includes/related-posts');?>
	<?php endwhile;?>



    <?php get_template_part('includes/ad-728x90-2'); ?>

</div><!-- #content -->
<div class="clr"></div>

<?php 
 get_footer(); ?>



