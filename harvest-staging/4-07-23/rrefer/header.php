<!DOCTYPE html>
<html lang="en" class="new_open">
  <head>
    <title><?php the_title(); ?></title>
    <!--<meta name="description" content="Looking for a skilled electrician in Brisbane? Contact Orange Electrical for all your commercial and residential electrical needs. Get expert service today!">-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Css Files -->
<link  rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/orange-elec/assets/custom-carousel.css">
<script src="<?php echo site_url(); ?>/wp-content/themes/orange-elec/assets/custom-carousel.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<!-- We use the full link to the CSS file in the rest of the tags -->
<link rel="preload" as="style"  href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" />

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" media="print" onload="this.media='all'" />

<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" />
</noscript>
<link rel="preload" as="style"  href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" media="print" onload="this.media='all'" />
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" />
</noscript>
<link rel="preload" as="style"  href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" media="print" onload="this.media='all'" />
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" />
</noscript>
    <link href="<?php echo site_url()?>/wp-content/themes/orange-elec/assets/header.css" rel="stylesheet">
    <link href="<?php echo site_url()?>/wp-content/themes/orange-elec/assets/footer.css" rel="stylesheet">
    <?php if(is_front_page()){ ?>
  <link href="<?php echo site_url()?>/wp-content/themes/orange-elec/assets/home.css" rel="stylesheet">
   <?php } ?>
   <?php if(is_page_template('project.php')){ ?>
    <link href="<?php echo site_url()?>/wp-content/themes/orange-elec/assets/project.css" rel="stylesheet">
   <?php } ?>
   <?php if(is_page_template('project_work.php')){ ?>
    <link href="<?php echo site_url()?>/wp-content/themes/orange-elec/assets/project.css" rel="stylesheet">
   <?php } ?>
    <?php wp_head(); ?>
     <!-- Google tag (gtag.js) -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-58515891-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-58515891-1');
    </script>
</head>
<header id="ec-header" class="ec-absolute">
<!--/ TopBar /-->
<div class="ec-topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <a href="<?php echo site_url();?>" class="ec-logo ">
                        <?php $custom_logo_id = get_theme_mod('custom_logo');
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        ?>
                        <img width="210" height="93" src="<?php echo $image[0];?>" alt="Orange Electrical Logo"width="210" height="93" class="no_lz">
                 </a>
    </div>
      <div class="col-md-10">
        <ul class="ec-stripinfo">
          <li>
            
            <?php
                    if ( is_active_sidebar( 'header-1' ) ) : ?>
                    <div id="secondary" class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'header-1' ); ?>
                    <!-- <span class="akilakarthik"></span> -->
                    </div>
                    <?php endif; ?>
          </li>
           <li>
           
            <?php
                    if ( is_active_sidebar( 'header-2' ) ) : ?>
                    <div id="secondary" class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'header-2' ); ?>
                    <!-- <span class="akilakarthik"></span> -->
                    </div>
                    <?php endif; ?>
          </li>



          <li>
            
            <?php
            if ( is_active_sidebar( 'header-3' ) ) : ?>
                    <div id="secondary" class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'header-3' ); ?>
                    <!-- <span class="akilakarthik"></span> -->
                    </div>
                    <?php endif; ?>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--/ TopBar /-->

<!--/ Main Header /-->
<div class="container">

  <div class="ec-mainheader">

    <div class="ec-left-section">
      <nav class="main-navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => '', 'menu_class'=>'header_menu nav-links') ); ?>
      </nav>


      <!--// Responsive Menu //-->
      <div id="as-menu" class="as-menuwrapper">
        <button class="as-trigger hamburger"><div class="hamburger1"><div class="bars1"></div><div class="bars2"></div><div class="bars3"></div></div></button>  
        
      </div>
      <div class="mobile_menu">
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => '', 'menu_class'=>'header_menu nav-links') ); ?>
      </div>
      <!--// Responsive Menu //-->
    </div>

    <a href="javascript:void(0)" class="ec-getqoute ec-bgcolor" id="popup_modal_header"><i class="fa fa-edit"></i> GET A QUOTE</a>
  </div>
</div>
<!--/ Main Header /-->

</header>
<body id="header_sec" <?php body_class(); ?>>