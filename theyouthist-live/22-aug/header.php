


<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>


<meta name="google-site-verification" content="Ce5zQ5ddkx9XiU0sIExMvFMi97m9dVE6d69QPKVosxg" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!-- <meta name="viewport" content="width=device-width" /> -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<!--
/**
 * @license
 * MyFonts Webfont Build ID 3164242, 2016-02-01T14:49:39-0500
 *
 * The fonts listed in this notice are subject to the End User License
 * Agreement(s) entered into by the website owner. All other parties are
 * explicitly restricted from using the Licensed Webfonts(s).
 *
 * You may obtain a valid license at the URLs below.
 *
 * Webfont: BrandonGrotesqueWeb-Light by HVD Fonts
 * URL: http://www.myfonts.com/fonts/hvdfonts/brandon-grotesque/light/
 *
 * Webfont: BrandonGrotesqueWeb-Regular by HVD Fonts
 * URL: http://www.myfonts.com/fonts/hvdfonts/brandon-grotesque/regular/
 *
 *
 * License: http://www.myfonts.com/viewlicense?type=web&buildid=3164242
 * Licensed pageviews: 10,000
 * Webfonts copyright: Copyright (c) 2015 by Hannes von Doehren. All rights reserved.
 *
 * © 2016 MyFonts Inc
*/

-->


<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php //echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<?php global $youthist_option;?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67616418-1', 'auto');
  ga('send', 'pageview');

</script>

</head>
<body id="bd" <?php body_class(); ?>>
<?php /*
<!-- Preloader -->
<div class="loadercontainer">
	<div id="loader"></div>
</div>
<!-- Preloader -->
*/
$is_mens_cat = (is_category([47,48,49,50,51,52,53])) ? true : false;

?>
<div class="yt-wrapper clr">
	<div class="yt-main">

		<div class="yt-top-nav clr">
			<?php
			wp_nav_menu(
				array(
					'container'		 => false,
					'theme_location' => 'topmenu',
					'menu_class'	 => '',
					'link_before'	 => '',
					'link_after'	 => ''
				 )
			);
			?>
		</div><!--topnav-->
	</div>

	<div class="yt-main header">
		<div class="yt-header clr">
			<div class="yt-mobilenav-button">
				<a href="javascript: void(0)" class="toggle-menu" title="Menu">
					<span>Menu</span>
				</a><!--Toggle Menu-->
			</div>
			<div class="yt-logo">
				<a href="<?php echo esc_url( home_url( ($is_mens_cat) ? '/category/men' : '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description' )); ?>">
				    <img class="skip-lazy"  src="<?php echo $youthist_option['logo_main_path']; ?>" width="297" height="45">
					<span><?php get_bloginfo( 'name' ); ?></span>
				</a>
			</div><!--logo-->
			<div class="mobile_search_box"><div class="yt-searchnav"><form method="get" action="https://www.theyouthist.com/" style="display: none;">
				<i class="close-searchnav fas fa-times fa-lg" aria-hidden="true" style="display: none;"></i>
<input type="text" maxlength="25" value="" class="animate border-box" name="s" id="search" placeholder="Search..." autofocus></form>
<i class="search-btn fas fa-search fa-lg" aria-hidden="true" style="display: block;"></i>
</div></div>

			<!--
			<div class="yt-blog-description">
				<?php //get_bloginfo( 'description' ); ?>
			</div>      -->

			<div class="yt-navigation clr">
				<div class="yt-navigation-inner animate clr">
					<div class="yt-mainnav">
						<?php
							if ($is_mens_cat) {
								wp_nav_menu(
									array(
										'theme_location' => 'mens-menu',
										'menu_class'     => 'sf-menu',
										'link_before'    => '<span>',
										'link_after'     => '</span>'
									 )
								);
							} else {
								wp_nav_menu(
									array(
										'theme_location' => 'primary',
										'menu_class'     => 'sf-menu',
										'link_before'    => '<span>',
										'link_after'     => '</span>'
									 )
								);
							}
						?>
						<div class="clr"></div>
					</div><!--mainnav-->

					<div class="yt-navright">

						<div class="yt-newsletter-btn">
							<p><a id="subscribe-btn" class="icon-newsletter" href="javascript:void(0);" title="Subscribe to our list!"><i class="fas fa-envelope"></i> <span class="BrandonGrotesqueWeb-Regular">SUBSCRIBE</span></a></p>
						</div>

						<div class="yt-socialnav border-box">
							<ul class="icon-list">
								<li><a class="icon-fb" href="<?php echo $youthist_option['facebook'];?>" title="Facebook" alt="youthist-facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								<li><a class="icon-tw" href="<?php echo $youthist_option['twitter'];?>" title="Twitter" alt="youthist-twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
								<li><a class="icon-pr" href="<?php echo $youthist_option['pinterest'];?>" title="Pinterest" alt="youthist-pinterest" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
								<li><a class="icon-ig" href="<?php echo $youthist_option['instagram'];?>" title="Instagram" alt="youthist-instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>

						<div class="yt-searchnav">
							<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<input
									type="text"
									maxlength="25"
									value=""
									class="animate border-box"
									name="s"
									id="search"
									placeholder="<?php _e('Search');?>"
									value="<?php the_search_query(); ?>"
									/>
							</form>
							<i class="search-btn fas fa-search fa-lg" aria-hidden="true"></i>
							<i class="close-searchnav fas fa-times fa-lg" aria-hidden="true"></i>
						</div><!--searchform-->

						<div class="clr"></div>

					</div>

					<!-- menu on Mobile -->
					<div class="yt-navleft" style="">
						<div class="yt-searchnav">
							<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<input
									type="text"
									maxlength="20"
									value=""
									class="animate border-box"
									name="s-mob"
									id="s-mob"
									placeholder="" />
							</form>

						</div><!--searchform-->

						<div class="clr"></div>
					</div>
					<!-- End of Menu mobile -->

					<div class="clr"></div>
				</div>

			</div><!--navigation-->

			 <div id="yt-mobilenav" class="yt-mobilenav clr" style="display:none;">
				<div class="menu-close">
					<i class="fas fa-times"></i>
				</div>
				<?php
					if ($is_mens_cat) {
						wp_nav_menu( array('theme_location' => 'mens-menu') );
					} else {
						wp_nav_menu( array('theme_location' => 'primary') );
					}
				?>
				<div class="yt-newsletter-btn">
					<p><a id="menu-subscribe-btn" class="icon-newsletter" href="javascript:void(0);" title="Subscribe to our list!"><i class="fas fa-envelope"></i> <span class="BrandonGrotesqueWeb-Regular">SUBSCRIBE</span></a></p>
				</div>
				<div class="yt-socialnav border-box">
					<ul class="icon-list">
						<li><a class="icon-fb" href="<?php echo $youthist_option['facebook'];?>" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li><a class="icon-tw" href="<?php echo $youthist_option['twitter'];?>" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
						<li><a class="icon-pr" href="<?php echo $youthist_option['pinterest'];?>" title="Pinterest" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
						<li><a class="icon-ig" href="<?php echo $youthist_option['instagram'];?>" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => '',
							'link_before'    => '',
							'link_after'     => ''
						)
					);
				?>

			</div><!--mobilenav-->
		</div><!--header-->
	</div>

	<?php if ( !is_front_page() ) : ?>
	<div class="yt-main top-banner">
		<div class="yt-top-banner yt-custom-banner clr">
			<?php get_template_part('includes/ad-728x90-3');?>
		</div><!--ads-top-->
	</div>
	<?php endif;?>

	<?php if(is_front_page()):?>
	<div class="yt-main slideshow">
		<div class="yt-slideshow clr">
			<div class="yt-featured-story">
				<!-- Disabled by Dendy 05/09/2015 -->
				<!--
				<span class="yt-story-label"><?php //_e('Featured Story');?></span>
				-->
				<?php
					$story_id	= $youthist_option['featured_story_id'];
					$story		= get_post($story_id, ARRAY_A);
					$story_ids	= get_post_thumbnail_id( $story_id );
					$story_src	= wp_get_attachment_image_src( $story_ids, 'large' );
				?>
				<?php //echo $youthist_option['logo_main_path'] ?>
				<a href="<?php echo get_permalink($story_id);?>" class="yt-story-inner animate clr">
					<div class="yt-story-pic animate clr " style="background-image:url(<?php echo $story_src[0];?>);" data-no-lazy="1"></div>
				</a>

				<h3 class="yt-story-caption animate border-box clr">
					<a href="<?php echo get_permalink($story_id);?>" class="yt-story-inner animate clr">
					   <?php echo $story['post_title'];?>
					</a>
				</h3>
			</div>

			<?php if (!empty($youthist_option['editor_choice_id'])): ?>

			<div class="yt-editor-choice">
				<?php
					$choice_id	= $youthist_option['editor_choice_id'];
					$choice		= get_post($choice_id, ARRAY_A);
					$choice_ids = get_post_thumbnail_id( $choice_id );
					$choice_src = wp_get_attachment_image_src( $choice_ids, 'large' );
				?>
				<a href="<?php echo get_permalink($choice_id);?>"
					class="yt-choice-inner animate clr">
					<div class="yt-choice-pic animate clr" style="background-image:url(<?php echo $choice_src[0];?>);"></div>
					<div class="yt-choice-caption animate clr border-box">
						<!-- Disabled by Dendy 05/09/2015 -->
						<!--
						<span class="yt-choice-label"><?php //_e('Editor Choice');?></span>
						-->
						<h3>
							<div id='dyo'>
							<span id='yo'><?php echo $choice['post_title'];?></span>
								</div>
						</h3>
					</div>
				</a>
			</div>
			<?php endif; ?>

		</div><!--slideshow-->

	</div>

	<?php if ( (!wp_is_mobile() && is_front_page()) || is_page() ) : ?>
	<div class="yt-main top-banner">
		<div class="yt-top-banner yt-front-banner clr">
			<?php get_template_part('includes/ad-728x90-2');?>
		</div><!--ads-top-->
	</div>
	<?php endif;?>

</div>
<?php endif;?>

<!-- SiteNavigation schema markup -->

    <?php

	$menuLocations = get_nav_menu_locations();
        $menuID = $menuLocations['primary'];
        $primaryNav = wp_get_nav_menu_items($menuID);

        //$nav_name = array();

	?>

    <span itemscope="" itemtype="http://schema.org/SiteNavigationElement">
        <?php
            foreach($primaryNav as $NavItem){
                //$nav_name[] = $NavItem->post_title;
               // array_push($nav_name, $NavItem->post_title);
            ?>

        <meta name="" content="<?= $NavItem->post_title; ?>" itemprop="name">
        <meta name="" content="<?= $NavItem->url; ?>" itemprop="url">

        <?php } ?>
        <meta name="" content="Men" itemprop="name">
        <meta name="" content="https://www.theyouthist.com/category/men/" itemprop="url">
    </span>

<div class="yt-main">
	<div class="yt-container clr">
		<div class="yt-content border-box">


<!-- //20-08-2020 -->

			<style>

			.footer-banner-mobile {
				position: fixed;
				bottom: -2px;
				left: 0;
				width: 100%;
				background-color: white;
				padding: 10px;
				box-sizing: border-box;
				box-shadow: 0px 0 5px rgba(0,0,0, 0.1);
				text-align: center;
				display: none;
				z-index: 999;
			}
			.footer-banner-mobile .close-banner {
				display: inline-block;
				position: absolute;
				top: 0;
				right: 0;
				width: 27px;
				background-color: white;
				transform: translate(0,-100%);
				font-size: 28px;
				text-align: center;
				color: #bbb;
				border-top-left-radius: 5px;
				box-shadow: 0px -5px 4px rgba(0,0,0, 0.05);
			}
			.wp-caption {
				max-width: 100%;
			}

			.yt-main.header {
				min-height: 5vh;
				height: 57px !important;
				overflow: hidden;
			}

			.yt-header.fixed {
				height: 47px;
				/*overflow: hidden !important;*/
			}

			.sf-menu {
				height: 47px;
				overflow: hidden;
			}

			@media screen and (max-width: 1024px) {
				.yt-mainnav {
					display: none
				}
				.yt-logo {
					margin-top: 4px;
				}
			}
			@media screen and ( max-width: 767px ){}
			@media screen and (max-width: 699px) {
				.mobile_search_box .yt-searchnav {
					top: 14px !important;
				}
				.toggle-menu {
					bottom: 1px;
				}
				.yt-header {
					position: fixed;
					z-index: 999;
				}
				.yt-header.fixed {
					overflow: visible !important;
					padding: 5px 0px !important;
					height: auto;
				}


				.mobile_search_box .yt-searchnav {
					top: 10px;
				}
				.yt-logo {
					margin-top: 5px;
				}
				.yt-logo a {
					margin-right: 0 !important;
				}
				.with-sidebar .yt-content, .yt-sidebar {
				  /*  width: 100%;
				    float: none;*/
				    padding-left: 0 !important;
				}
			}
			</style>
