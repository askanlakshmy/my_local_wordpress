<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title(); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?x=1556021590">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css">
	<!--menu-->
	<?php if(!wp_is_mobile()){ ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mega-menu.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu.css"/>
	<?php } ?>
	<!--slider-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsiveslides.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.popup.css">
	<?php //if(!is_page_template('category.php')) { ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/salvattore.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dark-top.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/et-custom-sshare.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
	<?php if(wp_is_mobile()){ ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-mobile-mega-menu-min.css">
	<?php } ?>
	<?php //} ?>
	<style>
	a {color: #ee8b14;}
	option[value="et-events-new"]{display:none;}
	option[value="events"]{display:none;}
	</style>
	<?php /*if (!is_page(1738)){
			if (!is_page(2904)){
				if (!is_page(18866)){
					if (!is_page(18872)){
						if (!is_page(19378)){
							if (!is_page(20021)){
								if (!is_page(20102)){
									$postid = get_the_ID();
									if($postid != 12187){?>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-2406935392655147",
			enable_page_level_ads: true
		});
	</script>
	<?php } } } } } } } } */ ?>
	<!--script type="text/javascript">
          window._taboola = window._taboola || [];
          _taboola.push({article:'auto'});
          !function (e, f, u, i) {
              if (!document.getElementById(i)){
                  e.async = 1;
                  e.src = u;
                  e.id = i;
                  f.parentNode.insertBefore(e, f);
              }
          }(document.createElement('script'),
              document.getElementsByTagName('script')[0],
              '//cdn.taboola.com/libtrc/energytherapy/loader.js',
              'tb_loader_script');
      </script-->
		<style type="text/css">
			.cookie-banner { color:#fff; background-color:#9c6894;text-align:center;}
			.cookie-banner a { padding:0.2em 1em; background-color:#03A9F4; display:inline-block; margin:10px; border-radius:5px; color:#fff; text-decoration:none;}
		</style>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<header>
	<div class="header">
		<div class="row">
			<div class="div100">
				<div class="topbar">
					<a href="<?php echo site_url(); ?>" class="logo" itemprop="url">
						<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
						<?php if($image[0]!='') { ?>
							<img itemprop="logo" src="<?php echo $image[0];?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" width="244" height="44"/>
						<?php } else { echo $_SERVER['SERVER_NAME'];}?>
					</a>

					<div class="social-div">
						<ul class="social-share" itemscope itemtype="http://schema.org/Organization">
							<?php if(get_field('mail_link','options')) {?>
							<li><a itemprop="sameAs" href="<?php the_field('mail_link','options'); ?>" target="_blank" title="Join our email list"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
							<?php } ?>
							<!-- <?php // if(get_field('twitter_link','options')) {?>
							<li><a itemprop="sameAs" href="<?php the_field('twitter_link','options'); ?>" target="_blank" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<?php // } ?> -->
							<?php if(get_field('pinterest_link','options')) {?>
							<li><a itemprop="sameAs" href="<?php the_field('pinterest_link','options'); ?>" target="_blank" title="Join us on Pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
							<?php } ?>
							<?php if(get_field('instagram_link','options')) {?>
							<li><a itemprop="sameAs" href="<?php the_field('instagram_link','options'); ?>" target="_blank" title="Join us on Telegram"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
							<?php } ?>
							<!-- <?php // if(get_field('youtube_link','options')) {?>
							<li><a itemprop="sameAs" href="<?php the_field('youtube_link','options'); ?>" target="_blank" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
							<?php // } ?> -->
							<?php if(wp_is_mobile()){ ?>
							<li><a href="javascript:void(0);" title="Search"  id="mobile_search"><i class="fa fa-search" aria-hidden="true"></i></a></li>
							<?php } ?>
						</ul>
						<?php global $woocommerce;?>
						<a href="<?php echo site_url().'/cart/'; ?>" class="cart-mini-icon">
							<span class="count"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></span>
						</a>
						<div class="clear"></div>
						<div class="account-link">
							<?php if (!is_user_logged_in()){ ?>
								<a href="/my-account">Login</a>&nbsp;&nbsp;
								<a href="<?php echo site_url(); ?>/membership/pricing/"> Register </a>
							<?php } else { ?>
								<a href="/my-account">My Account</a> <a href="/?customer-logout=true">Logout</a>
							<?php } ?>
							<!--<li><a href="<?php /*echo site_url();*/?>/my-account/" title="Login">Login</a></li>
							<li><a href="<?php /*echo site_url();*/?>/my-account/?action=register" title="Register">Register</a></li>-->
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="div100 menubar">
			<div class="row">
				<?php if(!wp_is_mobile()) { ?>
					<div class="div100">
						<!--Menu HTML Code-->
						<nav class="applePie">
							<div class="menubtn"><i class="fa fa-bars" aria-hidden="true"></i></div>
							<?php $defaults = array(
								'theme_location'  => 'Header-menu',
								'menu'            => 'Main-menu',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'menu',
								'menu_id'         => 'Menu-1',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul id="nav" class="%2$s nav">%3$s</ul>',
								'depth'           => 0,
								'walker'          => new Child_Wrap()
							);
							wp_nav_menu( $defaults ); ?>
							<?php if(!wp_is_mobile()){ ?>
								<div style="padding-top: 13px;">
									<a href="javascript:void(0);" title="Search"  id="search-show"><i class="fa fa-search" aria-hidden="true"></i></a>
								</div>
							<?php } ?>
						</nav>
						<!--Menu HTML Code-->
						<div style="display: block;" id="category_posts_sub_menu_14854" class="category_posts_sub_menu inactive animate-drop slide-top" data-cid="14854">
							<div class="medium-12 column">
								<div class="category_tags">
									<?php $defaults = array(
										'theme_location'  => 'Extra-menu',
										'menu'            => 'sub-menu',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'menu_id'         => 'Sub-Menu',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul>%3$s</ul>',
										'depth'           => 0,
										'walker'          => new Child_Wrap1()
									);
									wp_nav_menu( $defaults ); ?>
									<span class="spacer"></span>
								</div>
								<div class="discover-courses divtab">
									<?php $defaults = array(
										'theme_location'  => '',
										'menu'            => 'Discover-courses',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'menu_id'         => 'Discover-courses',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '<div class="category_submenu_post">',
										'after'           => '</div>',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<div class="owl-carousel owl-theme" id="courses">%3$s</div>'.$courses_ul,
										'depth'           => 0,
										'walker'          => new Child_Wrap3()
									);
									wp_nav_menu( $defaults ); ?>
								</div>
								<div class="discover-retreats divtab">
									<?php $defaults = array(
										'theme_location'  => '',
										'menu'            => 'Discover-retreats',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'menu_id'         => 'Discover-retreats',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '<div class="category_submenu_post">',
										'after'           => '</div>',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<div class="owl-carousel owl-theme" id="retreats">%3$s</div>'.$retreats_ul,
										'depth'           => 0,
										'walker'          => new Child_Wrap3()
									);
									wp_nav_menu( $defaults ); ?>
								</div>
								<div class="discover-workshops divtab">
								<?php $defaults = array(
									'theme_location'  => '',
									'menu'            => 'Discover-workshops',
									'container'       => '',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'menu',
									'menu_id'         => 'Discover-workshops',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '<div class="category_submenu_post">',
									'after'           => '</div>',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<div class="owl-carousel owl-theme" id="workshops">%3$s</div>'.$workshops_ul,
									'depth'           => 0,
									'walker'          => new Child_Wrap3()
								);
								wp_nav_menu( $defaults );
								?>
							</div>
								<div class="discover-posts divtab owl-carousel owl-theme" id="posts" style="display:none;">
									<?php
									query_posts('post_type=post&posts_per_page=5');
									while (have_posts()) : the_post();?>
										<div class="category_submenu_post">
											<a class="th post-thumbnail" href="<?php the_permalink(); ?>">
												<?php $thumbnail_ajax = rw_resize(get_post_thumbnail_id($post->ID),268,155); ?>
												<?php if(!get_post_thumbnail_id($post->ID)) {
													$thumbnail_ajax = get_template_directory_uri().'/images/et-images-267x173.jpg';
												} ?>
												<img src="<?php echo $thumbnail_ajax;?>" class="attachment-th-medium wp-post-image" alt="<?php the_title(); ?>" height="154" width="266">
											</a>
											<h5>
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h5>
										</div>
									<?php endwhile;
									wp_reset_query(); ?>
								</div>
							</div>
							<div class="row in-container"><div class="medium-12 column"></div></div>
						</div>
						<div style="display: block;" id="category_posts_sub_menu_12986" class="category_posts_sub_menu inactive animate-drop slide-top" data-cid="12986">
							<div class="medium-12 column">
								<div class="category_tags">
									<?php $defaults = array(
										'theme_location'  => 'Extra-menu',
										'menu'            => 'discover-quotes',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'menu_id'         => 'discover-quotes',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul>%3$s</ul>',
										'depth'           => 0,
										'walker'          => new Child_Wrap1()
									);
									wp_nav_menu( $defaults ); ?>
									<span class="spacer"></span>
								</div>
								<div class="menu-popular-quotes">
								<?php $count = 1;
								$pop_args = array(
								'post_type'			=>	'quote',
								'posts_per_page'	=>	-1,
								'orderby'			=>	'rand',
								'meta_query' 		=> 	array(
									'relation' 		=> 	'AND',
										array(
											'key'     => 'total_share',
											'value'	  => 1000,
											'compare' => '>',
											'type'	  => 'NUMERIC'
										),
									array(
										'relation' => 'OR',
											array(
											'key'     	=> 'gallery_images',
											'value'     => 0,
											'compare'   => '!='
										),
											array(
											'key'     => '_thumbnail_id',
										),
									),
								),
							);
							$the_query = new WP_Query($pop_args);
							$author_det = get_posts( $args ); $i=0;?>
							<?php while ($the_query -> have_posts()) : $the_query -> the_post();
								if($count < 6) { ?>
								<div class="category_submenu_post">
									<a class="th post-thumbnail" href="<?php the_permalink(); ?>">
									<?php if(has_post_thumbnail()){ ?>
									<?php $thumbnail_ajax = rw_resize(get_post_thumbnail_id($post->ID),268,176); ?>
									<img src="<?php echo $thumbnail_ajax;?>" class="attachment-th-medium wp-post-image" alt="<?php the_title(); ?>" style="height:175px !important; width:266px !important;">
									<?php }else if (!empty(get_field('gallery_images',$post->ID))) {
										$rows = get_field('gallery_images',$post->ID);
										$first_row = $rows[0];
										$first_quote_image = $first_row['quotes_images'];
										$image = $first_quote_image['url'];
										$image_alt = $first_quote_image['alt'];
										$author_det =  get_field('author',$post->ID);
											foreach($author_det as $author_details) {
											$author_name_gal = get_the_title( $author_details->ID );
											}
											$image_url = str_replace(' ','_',$author_name_gal).'_quote_'.$first_quote_image['id'].'_'.$post->ID.'.jpg';
											if(file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/uploads/ads/'.$image_url)){
												$final_image_url = $image_url;
											}
										if($final_image_url != '') { ?>
											<img src="<?php echo site_url();?>/wp-content/uploads/ads/<?php echo $final_image_url; ?>"alt="<?php echo $image_alt; ?>" class="attachment-th-medium wp-post-image" style="height:175px !important; width:266px !important;" />
									<?php } } else{ ?>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/et-images-267x173.jpg" class="attachment-th-medium wp-post-image" alt="<?php the_title(); ?>" style="height:175px !important; width:266px !important;">
									<?php } ?>
									</a>
									<h5>
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h5>
								</div>
								<?php } $count++;  endwhile; wp_reset_query(); ?>
								</div>
								<div class="menu-recent-quotes" style="display:none;">
									<?php $count = 1;
										$qr_args = array(
										'post_type'		=> 'quote',
										'posts_per_page'=> -1,
										'orderby'		=> 'post_date',
										'order'			=> 'DESC',
										'date_query' 	=> array(
										  'after'   => '-6 month',
										),
									);
									query_posts($qr_args);
									while (have_posts()) : the_post();
									if($count < 6) {?>
										<div class="category_submenu_post">
											<a class="th post-thumbnail" href="<?php the_permalink(); ?>">
											<?php if(has_post_thumbnail()){ ?>
											<?php $thumbnail_ajax = rw_resize(get_post_thumbnail_id($post->ID),268,176); ?>
											<img src="<?php echo $thumbnail_ajax;?>" class="attachment-th-medium wp-post-image" alt="<?php the_title(); ?>" style="height:175px !important; width:266px !important;">
											<?php } else if (!empty(get_field('gallery_images',$post->ID))) {
												$rows = get_field('gallery_images',$post->ID);
												$first_row = $rows[0];
												$first_quote_image = $first_row['quotes_images'];
												$image = $first_quote_image['url'];
												$image_alt = $first_quote_image['alt'];
												$author_det =  get_field('author',$post->ID);
													foreach($author_det as $author_details) {
													$author_name_gal = get_the_title( $author_details->ID );
													}
													$image_url = str_replace(' ','_',$author_name_gal).'_quote_'.$first_quote_image['id'].'_'.$post->ID.'.jpg';
													if(file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/uploads/ads/'.$image_url)){
														$final_image_url = $image_url;
													}
												if($final_image_url != '') { ?>
													<img src="<?php echo site_url();?>/wp-content/uploads/ads/<?php echo $final_image_url; ?>"alt="<?php echo $image_alt; ?>" class="attachment-th-medium wp-post-image" style="height:175px !important; width:266px !important;" />
											<?php } } else if (empty(get_field('gallery_images',$post->ID))) {
												$author_det =  get_field('author',$post->ID);
												foreach($author_det as $author_details) {
												$author_name_gal = get_the_title( $author_details->ID );
												}
												if(has_post_thumbnail($author_details->ID)) {
													$thumbnail_src_url = rw_resize(get_post_thumbnail_id($author_details->ID),268,176);
													echo'<img src="'. esc_attr( $thumbnail_src_url ) .'" class="attachment-th-medium wp-post-image" alt="<?php the_title(); ?>" style="height:175px !important; width:266px !important;">';
												} else {
													echo '<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/et-images-267x173.jpg" class="attachment-th-medium wp-post-image" alt="<?php the_title(); ?>" style="height:175px !important; width:266px !important;">'; }
											} else { ?>
											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/et-images-267x173.jpg" class="attachment-th-medium wp-post-image" alt="<?php the_title(); ?>" style="height:175px !important; width:266px !important;">
											<?php } ?>
											</a>
											<h5>
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h5>
										</div>
									<?php } $count++;
									endwhile; wp_reset_query(); ?>
								</div>
								<div class="menu-recent-pic-quotes" style="display:none;">
								<?php $count = 1;
									$qr_args = array(
										'post_type'   => 'quote',
										'showposts'   => -1,
										'orderby'		=> 'post_modified',
										'order'			=> 'DESC',
										'paged'       => $paged,
										'date_query'  => array(
											'after'   => '-6 month',
										),
										'meta_query' => array(
											array(
												'key'     => 'gallery_images',
												'value'	  => 0,
												'compare' => '>',
												'type' => 'NUMERIC'
											),
										),
									);
									//query_posts('post_type=quote&posts_per_page=-1&orderby=post_date&order=DESC');
									query_posts($qr_args);
									while (have_posts()) : the_post(); ?>
								<?php //if(get_post_thumbnail_id($post->ID)) {
									if($count < 6) {?>
									<div class="category_submenu_post">
										<a class="th post-thumbnail" href="<?php the_permalink(); ?>">
										<?php if (!empty(get_field('gallery_images',$post->ID))) {
											$rows = get_field('gallery_images',$post->ID);
											$first_row = $rows[0];
											$first_quote_image = $first_row['quotes_images'];
											$image = $first_quote_image['url'];
											$image_alt = $first_quote_image['alt'];
											$author_det =  get_field('author',$post->ID);
												foreach($author_det as $author_details) {
												$author_name_gal = get_the_title( $author_details->ID );
												}
												$image_url = str_replace(' ','_',$author_name_gal).'_quote_'.$first_quote_image['id'].'_'.$post->ID.'.jpg';
												if(file_exists($_SERVER['DOCUMENT_ROOT'].'/wp-content/uploads/ads/'.$image_url)){
													$final_image_url = $image_url;
												}
											if($final_image_url != '') { ?>
												<img src="<?php echo site_url();?>/wp-content/uploads/ads/<?php echo $final_image_url; ?>"alt="<?php echo $image_alt; ?>" class="attachment-th-medium wp-post-image" style="height:175px !important; width:266px !important;" />
										<?php } } else{ ?>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/et-images-267x173.jpg" class="attachment-th-medium wp-post-image" alt="<?php the_title(); ?>" style="height:175px !important; width:266px !important;">
										<?php } ?>
										</a>
										<h5>
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h5>
									</div>
									<?php } $count++; //}
									endwhile; wp_reset_query(); ?>
								</div>
							</div>
							<div class="row in-container"><div class="medium-12 column"></div></div>
						</div>
						<div style="display: block;" id="category_posts_sub_menu_14855" class="category_posts_sub_menu inactive animate-drop slide-top" data-cid="14855">
							<div class="medium-12 column">
								<div class="category_tags">
									<?php $defaults = array(
										'theme_location'  => 'Extra-menu',
										'menu'            => 'discover-articles',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'menu_id'         => 'discover-articles',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul>%3$s</ul>',
										'depth'           => 0,
										'walker'          => new Child_Wrap1()
									);
									wp_nav_menu( $defaults ); ?>
									<ul class="archive_article">
										<li data-count="180618" id="menu-item-180618" class="menu-item menu-item-type-taxonomy menu-item-object-category hasMenu">
											<a href="/articles/archives/">View Archived Articles</a>
										</li>
									</ul>
									<span class="spacer"></span>
								</div>
								<div class="category-0">
									<?php
								// $cat_ids = get_terms( 'COVID', array( 'fields' => 'ids', 'exclude' => 1 ) );
								// print_r($cat_ids);
								// echo "awdaewd";
									 $args = array('orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => 5,'post_status' => 'publish',  'category__not_in' => '3401');
									query_posts($args);
									while (have_posts()) : the_post(); ?>
										<div class="category_submenu_post">
											<a class="th post-thumbnail" href="<?php the_permalink(); ?>">
												<?php $thumbnail_ajax = rw_resize(get_post_thumbnail_id($post->ID),268,155); ?>
												<?php if(!get_post_thumbnail_id($post->ID)) {
													$thumbnail_ajax = get_template_directory_uri().'/images/et-images-267x173.jpg';
												} ?>
												<img src="<?php echo $thumbnail_ajax;?>" class="attachment-th-medium wp-post-image" alt="<?php the_title(); ?>" height="154" width="266">
											</a>
											<h5>
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h5>
										</div>
									<?php endwhile;
									wp_reset_query(); ?>
								</div>
								<div class="category-1" style="display: none">
									<?php $args = array('cat' => 6, 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => 5,'post_status' => 'publish');
									query_posts($args);
									while (have_posts()) : the_post(); ?>
										<div class="category_submenu_post">
											<a class="th post-thumbnail" href="<?php the_permalink(); ?>">
												<?php $thumbnail_ajax = rw_resize(get_post_thumbnail_id($post->ID),268,155); ?>
												<?php if(!get_post_thumbnail_id($post->ID)) {
													$thumbnail_ajax = get_template_directory_uri().'/images/et-images-267x173.jpg';
												} ?>
												<img src="<?php echo $thumbnail_ajax;?>" class="attachment-th-medium wp-post-image" alt="<?php the_title(); ?>" height="154" width="266">
											</a>
											<h5>
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h5>
										</div>
									<?php endwhile;
									wp_reset_query(); ?>
								</div>
								<div class="category-2" style="display: none">
									<?php $args = array('cat' => 7, 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => 5,'post_status' => 'publish');
									query_posts($args);
									while (have_posts()) : the_post(); ?>
										<div class="category_submenu_post">
											<a class="th post-thumbnail" href="<?php the_permalink(); ?>">
												<?php $thumbnail_ajax = rw_resize(get_post_thumbnail_id($post->ID),268,155); ?>
												<?php if(!get_post_thumbnail_id($post->ID)) {
													$thumbnail_ajax = get_template_directory_uri().'/images/et-images-267x173.jpg';
												} ?>
												<img src="<?php echo $thumbnail_ajax;?>" class="attachment-th-medium wp-post-image" alt="<?php the_title(); ?>" height="154" width="266">
											</a>
											<h5>
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h5>
										</div>
									<?php endwhile;
									wp_reset_query(); ?>
								</div>
								<div class="category-3" style="display: none">
									<?php $args = array('cat' => 2, 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => 5,'post_status' => 'publish');
									query_posts($args);
									while (have_posts()) : the_post(); ?>
										<div class="category_submenu_post">
											<a class="th post-thumbnail" href="<?php the_permalink(); ?>">
												<?php $thumbnail_ajax = rw_resize(get_post_thumbnail_id($post->ID),268,155); ?>
												<?php if(!get_post_thumbnail_id($post->ID)) {
													$thumbnail_ajax = get_template_directory_uri().'/images/et-images-267x173.jpg';
												} ?>
												<img src="<?php echo $thumbnail_ajax;?>" class="attachment-th-medium wp-post-image" alt="<?php the_title(); ?>" height="154" width="266">
											</a>
											<h5>
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h5>
										</div>
									<?php endwhile;
									wp_reset_query(); ?>
								</div>
								<div class="category-4" style="display: none">
									<?php $args = array('cat' => 9, 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => 5,'post_status' => 'publish');
									query_posts($args);
									while (have_posts()) : the_post(); ?>
										<div class="category_submenu_post">
											<a class="th post-thumbnail" href="<?php the_permalink(); ?>">
												<?php $thumbnail_ajax = rw_resize(get_post_thumbnail_id($post->ID),268,155); ?>
												<?php if(!get_post_thumbnail_id($post->ID)) {
													$thumbnail_ajax = get_template_directory_uri().'/images/et-images-267x173.jpg';
												} ?>
												<img src="<?php echo $thumbnail_ajax;?>" class="attachment-th-medium wp-post-image" alt="<?php the_title(); ?>" height="154" width="266">
											</a>
											<h5>
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h5>
										</div>
									<?php endwhile;
									wp_reset_query(); ?>
								</div>
								<div class="category-5" style="display: none">
									<?php $args = array('cat' => 8, 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => 5,'post_status' => 'publish');
									query_posts($args);
									while (have_posts()) : the_post(); ?>
										<div class="category_submenu_post">
											<a class="th post-thumbnail" href="<?php the_permalink(); ?>">
												<?php $thumbnail_ajax = rw_resize(get_post_thumbnail_id($post->ID),268,155); ?>
												<?php if(!get_post_thumbnail_id($post->ID)) {
													$thumbnail_ajax = get_template_directory_uri().'/images/et-images-267x173.jpg';
												} ?>
												<img src="<?php echo $thumbnail_ajax;?>" class="attachment-th-medium wp-post-image" alt="<?php the_title(); ?>" height="154" width="266">
											</a>
											<h5>
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h5>
										</div>
									<?php endwhile;
									wp_reset_query(); ?>
								</div>
								<div class="category-6" style="display: none">
									<?php $args = array('cat' => 4, 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => 5,'post_status' => 'publish');
									query_posts($args);
									while (have_posts()) : the_post(); ?>
										<div class="category_submenu_post">
											<a class="th post-thumbnail" href="<?php the_permalink(); ?>">
												<?php $thumbnail_ajax = rw_resize(get_post_thumbnail_id($post->ID),268,155); ?>
												<?php if(!get_post_thumbnail_id($post->ID)) {
													$thumbnail_ajax = get_template_directory_uri().'/images/et-images-267x173.jpg';
												} ?>
												<img src="<?php echo $thumbnail_ajax;?>" class="attachment-th-medium wp-post-image" alt="<?php the_title(); ?>" height="154" width="266">
											</a>
											<h5>
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h5>
										</div>
									<?php endwhile;
									wp_reset_query(); ?>
								</div>
								<div class="category-7" style="display: none">
									<?php $args = array('cat' => 5, 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => 5,'post_status' => 'publish');
									query_posts($args);
									while (have_posts()) : the_post(); ?>
										<div class="category_submenu_post">
											<a class="th post-thumbnail" href="<?php the_permalink(); ?>">
												<?php $thumbnail_ajax = rw_resize(get_post_thumbnail_id($post->ID),268,155); ?>
												<?php if(!get_post_thumbnail_id($post->ID)) {
													$thumbnail_ajax = get_template_directory_uri().'/images/et-images-267x173.jpg';
												} ?>
												<img src="<?php echo $thumbnail_ajax;?>" class="attachment-th-medium wp-post-image" alt="<?php the_title(); ?>" height="154" width="266">
											</a>
											<h5>
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h5>
										</div>
									<?php endwhile;
									wp_reset_query(); ?>
								</div>
								<div class="category-8" style="display: none">
									<?php $args = array('cat' => 3, 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => 5,'post_status' => 'publish');
									query_posts($args);
									while (have_posts()) : the_post(); ?>
										<div class="category_submenu_post">
											<a class="th post-thumbnail" href="<?php the_permalink(); ?>">
												<?php $thumbnail_ajax = rw_resize(get_post_thumbnail_id($post->ID),268,155); ?>
												<?php if(!get_post_thumbnail_id($post->ID)) {
													$thumbnail_ajax = get_template_directory_uri().'/images/et-images-267x173.jpg';
												} ?>
												<img src="<?php echo $thumbnail_ajax;?>" class="attachment-th-medium wp-post-image" alt="<?php the_title(); ?>" height="154" width="266">
											</a>
											<h5>
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h5>
										</div>
									<?php endwhile;
									wp_reset_query(); ?>
								</div>
								<!--div class="category-9" style="display: none">
									<?php /*$args = array('cat' => 3, 'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => 5,'post_status' => 'publish');
									query_posts($args);
									while (have_posts()) : the_post(); */?>
										<div class="category_submenu_post">
											<a class="th post-thumbnail" href="<?php //the_permalink(); ?>">
												<?php //$thumbnail_ajax = rw_resize(get_post_thumbnail_id($post->ID),268,155); ?>
												<?php /*if(!get_post_thumbnail_id($post->ID)) {
													$thumbnail_ajax = get_template_directory_uri().'/images/et-images-267x173.jpg';
												}*/ ?>
												<img src="<?php //echo $thumbnail_ajax;?>" class="attachment-th-medium wp-post-image" alt="<?php //the_title(); ?>" height="154" width="266">
											</a>
											<h5>
												<a href="<?php //the_permalink(); ?>"><?php the_title(); ?></a>
											</h5>
										</div>
									<?php /*endwhile;
									wp_reset_query();*/ ?>
								</div-->
								<div class="category-10" style="display: none">
								<?php $args = array(
										'orderby' => 'post_date',
										'order' => 'DESC',
										'posts_per_page' => 5,
										'post_status' => 'publish',
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
								query_posts($args);
								while (have_posts()) : the_post(); ?>
									<div class="category_submenu_post">
										<a class="th post-thumbnail" href="<?php the_permalink(); ?>">
											<?php $thumbnail_ajax = rw_resize(get_post_thumbnail_id($post->ID),268,155); ?>
											<?php if(!get_post_thumbnail_id($post->ID)) {
												$thumbnail_ajax = get_template_directory_uri().'/images/et-images-267x173.jpg';
											} ?>
											<img src="<?php echo $thumbnail_ajax;?>" class="attachment-th-medium wp-post-image" alt="<?php the_title(); ?>" height="154" width="266">
										</a>
										<h5>
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h5>
									</div>
								<?php endwhile;
								wp_reset_query(); ?>
							</div>
							</div>
							<div class="row in-container"><div class="medium-12 column"></div></div>
						</div>
					</div>
					<?php } else { ?>
						<div class="menubtn">
							<a href="#" class="main-menu-toggle" style="color:#901b30 "><i class="fa fa-bars" aria-hidden="true"></i></a>
						</div>
						<div class="div100 main-menu mobile-mega-menu ">
							<div class="widget-region">
								<?php get_search_form(); ?>
							</div>
							<!--Menu HTML1 Code-->
							<nav>
								<?php $defaults = array(
									'theme_location'  => 'Mobile-menu',
									'menu'            => 'Mobile',
									'container'       => '',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'menu',
									'menu_id'         => 'Menu-1',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul id="" class="%2$s ">%3$s</ul>',
									'depth'           => 0,
									'walker'          => new Child_Wrap()
								);
								wp_nav_menu( $defaults ); ?>
							</nav>
						</div>
					<?php } ?>
			</div>
		</div>
	</div>
</header>
<!--content-->
