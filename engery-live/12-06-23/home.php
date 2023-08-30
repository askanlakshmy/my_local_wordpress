<?php /**
 * Template Name: Home page
 */
get_header(); ?>
	<section>
		<!-- banner -->
		<div class="div100 homebanner">
			<div class="row">
				<div class="div70">
					<div class="callbacks_container">
						<?php echo do_shortcode( '[soliloquy id="9687"]' ); ?>
					</div>
					
				</div>
				<div class="div30">
					<div class="row">
						<div class="small-banner img-container">
						<!--a class="js_p_start"-->
						<a class="" href="<?php echo home_url(); ?>/membership/pricing/">
							<?php $right_top_smaller_image = get_field('right_top_smaller_image',1738);?>
							<img src="<?php echo $right_top_smaller_image; ?>" alt="top-small-banner"/>
							<h2 class="homeImageLink">
								<span>LEARN ENERGY<br/>MEDICINE ONLINE</span>
							</h2>
						</a>
						</div>
						<div class="small-banner img-container">
							<?php $right_small_banner = get_field('right_small_banner',1738);?>
							<a href="<?php the_field('right_small_banner_page_link',1738); ?>"><img src="<?php echo $right_small_banner; ?>" alt="small-banner"/>
							<h2 class="homeImageLink">
								<span><?php the_field('right_small_banner_text',1738); ?></span>
							</h2>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner -->
		<div class="div100 ctext" id="home-ad"></div>
		<!--our work-->
		<div class="div100 our-work">
			<div class="row">
				<h3 class="section-title"><?php the_field('our_work_title',1738); ?></h3>
				<div class="line-icon"></div>
				<p class="ctext section-subtitle"><?php the_field('_our_work_sub_title',1738); ?></p>
				<div id="effect-2" class="div100 effects clearfix">
				<?php if(get_field('our_works',1738)): ?>
					<?php while(has_sub_field('our_works',1738)):
						$section_image = get_sub_field('section_image',1738); ?>
					<div class="div33">
						<div class="row">
							<div class="img">
								<?php $works_thumb_id = get_sub_field('section_image',1738) ?>
								<?php $alt__works_thumb = get_post_meta($works_thumb_id, '_wp_attachment_image_alt', true); ?>
								<img src="<?php echo rw_resize($works_thumb_id,650,350); //364,273 ?>" alt="<?php echo $alt__works_thumb; ?>"/>
								<a href="<?php the_sub_field('section_page_link',1738)?>" class="expand">
								<div class="overlay">
									<div style="width:60px;height:60px;border: solid 1px #fff;border-radius: 30px;line-height: 60px;margin: 0 auto;"><i class="fa fa-search" aria-hidden="true"></i></div>
									<a class="close-overlay hidden">x</a>
								</div>
								</a>
							</div>
							<a href="<?php the_sub_field('section_page_link',1738); ?>"><div class="our-work-title"> <?php the_sub_field('section_title',1738)?></div></a>
						</div>
					</div>
					<?php endwhile; 
					wp_reset_query(); ?>
				<?php endif ?>
				</div>
			</div>
		</div>
		<!--our work-->
		<!-----testimonials---->
		<div class="div100 our-work">
		<div class="row">
		<div class="home-testimonials">
			<h3 class="section-title">PRAISE FOR ENERGY THERAPY</h3>
			<div class="line-icon"></div>
			<div class="abt-content section-subtitle">
				<div class="testi-div-style">
					<span class="cus-testi"><span class="ajax-testi" ></span> - 
					<span class="author"><a href="<?php echo home_url(); ?>/testimonials/"><span class="ajax-autho" ></span></a></span>
					<span class="author read-more-testimonials"><a style="display: block;" href="<?php echo home_url(); ?>/testimonials/">Read More Testimonials</a></span>
					</span>
					
				</div>
			</div>
		</div>
		</div>
		</div>
		<!-----testimonials---->
		<!--popular quotes-->
		<div class="div100 popular-quotes-home">
			<div class="row">
			<h3 class="quotes-h3">INSPIRING AND UPLIFTING QUOTES</h3>
			<div class="line-icon"></div>
			<p class="ctext section-subtitle">Brighten your day. Pause for deeper reflection.</p>
					<div class="div50">
					<h3 class="section-title ltext">POPULAR QUOTES</h3>
					<div class="line-icon-small"></div>
					<div class="divide20"></div>
						<!--landing single quote-->
					<div id="pop_quotes"> </div>
						<div class="div100 ltext" style="left: 10px;">
						<a href="<?php echo site_url();?>/popular-quotes/" class="read_more">See More Quotes</a>
						</div>
						<!--landing single quote-->
					</div>
					<div class="div50">
					<h3 class="section-title ltext">RECENT QUOTES</h3>
					<div class="line-icon-small"></div>
					<div class="divide20"></div>
						<!--landing single quote-->
					<div id="recent_quotes"> </div>
					<div class="div100 ltext" style="left: 10px;">
						<a href="<?php echo site_url();?>/quotes/" class="read_more">See More Quotes</a>
					</div>
						<!--landing single quote-->
				</div>
			</div>
		</div>
		<!--popular quotes-->
		<div class="divide30"></div>
		<!--popular topics author-->
		<div class="div100 topics-author">
			<div class="row">
				<!--popular topics-->
				<div class="div33">
					<h3 class="section-title">POPULAR TOPICS</h3>
					<div class="line-icon-small"></div>
					<div class="div100 home-topics">
						<p>Browse quotes by topic</p>
						<?php 
							global $wpdb;
							$the_query = new WP_Query('meta_key=total_share&orderby=meta_value_num&order=DESC&post_type=quote&showposts=-1');
							$term_name_arr = array();
							while ($the_query -> have_posts()) : $the_query -> the_post();
							//print_r($post->ID);
							$category = get_the_terms( $post->ID, 'topics' );
							array_push($term_name_arr,$category[0]->name);
							endwhile; 
							$uni_term_name = array_unique($term_name_arr);
							$uni_term_name = array_filter($uni_term_name);
							$top_term_name = array_slice($uni_term_name, 0, 22, true);
							wp_reset_query(); ?>
						<ol class="topics-list">
							<?php foreach($top_term_name as $name) {
								if(!empty($name)){ ?>
							<li><a href="<?php echo get_term_link($name,'topics')?>"><?php echo $name; ?></a></li>
						<?php } }?>
						</ol>
						<div class="div100 ltext">
							<a href="<?php echo site_url(); ?>/quotes/topics/a-z/" class="read_more">SEE ALL TOPICS</a>
						</div>
					</div>
				</div>
				<!--popular topics-->
				<!--popular books-->
				<div class="div33">
					<h3 class="section-title">POPULAR AUTHORS</h3>
					<div class="line-icon-small"></div>
					<div class="div100 home-topics">
						<p>Browse quotes by author:</p>
						<?php 
							global $wpdb;
							$the_query = new WP_Query('meta_key=total_share&orderby=meta_value_num&order=DESC&post_type=quote&showposts=-1');
							$auth_name_arr = array();
							while ($the_query -> have_posts()) : $the_query -> the_post();
							$author_det =  get_field('author',$post->ID);
							array_push($auth_name_arr,$author_det[0]->post_title);
							endwhile; 
							$uni_auth_name = array_unique($auth_name_arr);
							$uni_auth_name = array_filter($uni_auth_name);
							$top_author_name = array_slice($uni_auth_name, 0, 22, true);
							wp_reset_query();?>
						<ul class="topics-list">
						<?php foreach($top_author_name as $name) {
							if(!empty($name)){
								$slug = strtolower(str_replace(".","",$name)); 
								$slug = str_replace(" ","-",$slug) ?>
						<li><a href="<?php echo site_url(); ?>/quotes/author/<?php echo $slug; ?>"><?php echo $name; ?></a></li>
						<?php } }?>
						</ul>
						<div class="div100 ltext">
							<a href="<?php echo site_url(); ?>/quotes/authors/a-z/" class="read_more">SEE ALL AUTHORS</a>
						</div>
				</div>
				</div>
				<!--popular books-->
				<!--popular author-->
				<div class="div33">
					<h3 class="section-title">POPULAR BOOKS</h3>
					<div class="line-icon-small"></div>
					<div class="div100 home-topics">
						<p>Browse quotes by book title:</p>
						<?php 
							global $wpdb;
							$the_query = new WP_Query('meta_key=total_share&orderby=meta_value_num&order=DESC&post_type=quote&showposts=-1');
							$book_name_arr = array();
							while ($the_query -> have_posts()) : $the_query -> the_post();
							$book_det =  get_field('books',$post->ID);
							array_push($book_name_arr,$book_det[0]->post_title);
							endwhile; 
							$uni_book_name = array_unique($book_name_arr);
							$uni_book_name = array_filter($uni_book_name);
							$top_book_name = array_slice($uni_book_name, 0, 12, true);
							wp_reset_query(); ?>
						<ul class="topics-list">
						<?php foreach($top_book_name as $name) {
								if(!empty($name)){
									$slug = strtolower(str_replace(".","",$name)); 
									$slug = str_replace(" ","-",$slug) ?>
							<li><a href="<?php echo site_url(); ?>/quotes/books/<?php echo $slug; ?>"><?php echo $name; ?></a></li>
						<?php } }?>
						</ul>
						<div class="div100 ltext">
							<a href="<?php echo site_url(); ?>/quotes/books/a-z/" class="read_more">SEE ALL BOOKS</a>
						</div>
				</div>
				</div>
				<!--popular author-->
			</div>
			</div>
		<!--what-is-energy-therapy-->
		<div class="div100 about-content">
			<div class="row">
				<h3 class="section-title"><?php the_field('what_is_energy_therapy',1738); ?></h3>
				<div class="line-icon"></div>
					<p class="ctext section-subtitle"><?php the_field('energy_therapy_sub_title',1738); ?></p>
				<div class="abt-content">
					<?php the_field('energy_therapy_decscription',1738); ?>
				</div>
			</div>
		</div>
		<!--what-is-energy-therapy-->
		<!--about-->
		<div class="div100 about-content">
			<div class="row">
				<h3 class="section-title"><?php the_field('about_content_title',1738); ?></h3>
				<div class="line-icon"></div>
					<p class="ctext section-subtitle"><?php the_field('about_content_sub_title',1738); ?></p>
				<div class="abt-content">
					<?php the_field('about_content_decscription',1738); ?>
				</div>
			</div>
		</div>
		<!--about-->
		<!--latest article-->
		<div class="div100 latest-articles">
			<div class="row">
				<h3 class="section-title">ARTICLES</h3>
				<div class="line-icon"></div>
				<p class="ctext section-subtitle">Explore the latest information on Energy Medicine, Meditation, Yoga, Health & Consciousness</p>
				<div class="masonry">
					<article id="ajax-posts">
						<?php
						//$the_query = new WP_Query( 'tag=energy-medicine&post_status=publish&showposts=1');
						$the_query = new WP_Query( 'post_status=publish&posts_per_page=1&ignore_sticky_posts=1');
						if ( $the_query->have_posts() ) {
							while ( $the_query->have_posts() ) {
								$the_query->the_post(); 
								$do_not_duplicate = $post->ID; ?>
						<section>
							<div class="place-holder effectss">
								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<?php $thumb_id = get_post_thumbnail_id($post->ID); ?>
								<?php $alt_thumb = get_post_meta($thumb_id, '_wp_attachment_image_alt', true); ?>
								<div class="img">
									<img src="<?php echo rw_resize($thumb_id,399,225); ?>" alt="<?php echo $alt_thumb; ?>"/>
									<div class="overlay">
									<a href="<?php the_permalink();?>" class="expand"><i class="fa fa-link" aria-hidden="true"></i></a>
									<a class="close-overlay hidden">x</a>
								</div>
								</div>
								<p><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>" class="post-read-more">Read more &raquo; </a>
							</div>
						</section>
						<?php }	} wp_reset_postdata(); ?>
						<section class="subscribe">
							<div class="place-holder">
								<h4>Subscribe</h4>
								<p>Join our community and receive inspiring guidance on health and energy medicine.</p>
								<form name="subscribe">
									<label>First Name:</label>
									<input type="text" name="first-name" id="first-name" placeholder="Your First Name"/>
									<label>Email Address:</label>
									<input type="text" name="email-address" id="email-address" placeholder="Your Email Address"/>
									<a class="js_p_start">
									<input id="signupbutton" class="wpcf7-form-control wpcf7-submit btn btn-default btn-submit" type="submit" value="Subscribe Now">
									</a>
								</form>
							</div>
						</section>
						<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
						<?php
						//$count = 1;
						//$the_query = new WP_Query( 'tag=energy-medicine&showposts=5&post_status=publish&paged='.$paged);
						$args = array('posts_per_page' => 4,'ignore_sticky_posts'=>1,'post_status'=>'publish','category__not_in' => '3401','post__not_in' => array($do_not_duplicate),'paged'=>$paged);
						$the_query = new WP_Query($args);
						if ( $the_query->have_posts() ) {
							while ( $the_query->have_posts() ) {
								$the_query->the_post(); ?>
								<?php if( $post->ID != $do_not_duplicate ) { ?>
						<section>
							<div class="place-holder effectss">
								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<?php $thumb_id = get_post_thumbnail_id($post->ID); ?>
								<?php $alt_thumb = get_post_meta($thumb_id, '_wp_attachment_image_alt', true); ?>
								<div class="img">
								<img src="<?php echo rw_resize($thumb_id,400,225); ?>" alt="<?php echo $alt_thumb; ?>"/>
								<div class="overlay">
									<a href="<?php the_permalink();?>" class="expand"><i class="fa fa-link" aria-hidden="true"></i></a>
									<a class="close-overlay hidden">x</a>
								</div>
								</div>
								<p><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>" class="post-read-more">Read more &raquo; </a>
							</div>
						</section>
						<?php } $count++; } } wp_reset_postdata(); ?>
					</article>
					<div class="div100 ctext">
					<a id="more_posts" class="read_more" data-pg="1" href="javascript:void(0);" data-tag="energy-medicine">Load More Articles</a>
					</div>
				</div>

			</div>
		</div>
		<!--latest article-->
	</section>
<?php get_footer(); ?>