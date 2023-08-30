<?php
/*Template Name: Homepage */
get_header();
?>
<script>
  document.addEventListener( 'DOMContentLoaded', function () {
    // setTimeout(function() {
  new Splide('#hero-image-sliderucc', {
    type: 'loop',
    perPage: 1,
    // autoplay: true,
    rewind: true,
    pagination: true,
    breakpoints: {
      1440: {
        perPage: 1,
      }
    }
  }).mount();
// }, 3000);
});
</script>
  <!--/ Main Banner /-->
  <section id="main_div">
  <div class="ec-mainbanner">
        <div class="flexslider">
        <div class="splide" id="hero-image-sliderucc">
          <style>
            @media screen and (min-width:767px){
              .mobile_only{display:none;}
            }
            @media screen and (max-width:767px){
              .desktop_only{display:none;}
            }
            @media screen and (max-width:767px){
                          img.mobile_only {
                display: none;
            }
           /* .h0{display:block !important;} */
            }
            @media screen and (min-width:768px){
              /* .h0{display:block !important;} */
            }
            .h0, .h1, .h2 {
    display: none;
}
.is-active .h1, .is-active .h2 {
    display: block;
}
          </style>
        <div class="splide__track">
          <ul class="splide__list">
          <?php if (have_rows('banner_slider')):?>
          <?php $i = 0; while (have_rows('banner_slider')): the_row(); ?>
                <?php $image = get_sub_field('banner_image');?>
                    <?php $sect_image = get_sub_field('banner_image');
           $sect_image_mobile = get_sub_field('banner_image_mobile');?>
                    <?php
		                        $banner_image = get_sub_field('banner_image');
								$banner_image_mobile = get_sub_field('banner_image_mobile');
                                if (!empty($banner_image)) {
		                        $bn_image = $banner_image;
								$bn_image_mobile = $banner_image_mobile;
		                        } else if($sect_image!=''){
									$bn_image=array('url' =>$sect_image);
									$bn_image_mobile=array('url' =>$sect_image_mobile);
								}else {
		                        $bn_image = array('url' => '');
								$bn_image_mobile = array('url' => '');
		                        } ?>
            <li class="splide__slide">
            <div class="h<?php echo $i;?>" <?php if($i<=0){?> style="display:block;"<?php } ?>>
            <?php if($i==0){ ?>
              <style>
                @media screen and (max-width:767px){
                .mobile_only{display:block !important;}
               
              }
              @media screen and (min-width:768px){
                /* .h1{display:block !important;} */
              }
              </style>
              <?php } ?>
            <!-- <div class="banner_images" style="background-image:url(<?php //echo $bn_image['url']; ?>)"> -->
           <div class="desktop_only"> <img src="<?php echo $bn_image['url']; ?>" alt="<?php echo $bn_image['alt']; ?>" ></div>
           <div class="mobile_only"> <img src="<?php echo $bn_image_mobile['url']; ?>" ></div>
            <span class="ec-line-pattren"></span>
              <div class="ec-caption">
                <div class="container">
                  <div class="caption-left-section">
                    <h3 class="ec-bgcolor"><?php echo get_sub_field('banner_title');?></h3>
                    <div class="clearfix"></div>
                    <div class="as-captiontitle"> <span><?php echo get_sub_field('banner_sub_text');?></span> </div>
                    <div class="clearfix"></div>
                    <p><?php echo get_sub_field('banner_text'); ?></p>
                  
                    <a href="<?php echo get_sub_field('banner_button_link');?>" class="ec-bgcolor"><?php echo get_sub_field('banner_button_text');?></a>
                  </div>
                </div>
              </div>
              <!-- </div> -->
            </div>
            </li>
            <?php $i++; endwhile; ?>
                <?php endif;?>
           
          </ul>
          </div>
          </div>
        </div>
      </div>
 </section>
 <div class="ec-main-content">
 <section id="main_section">
  <!--/ Main Content /-->


<!--/ Section /-->
<div style="background-color:#000" class="ec-main-section ec-main-services">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="ec-fancy-title">
          <h2><?php echo get_field('our_brisbane_title'); ?></h2>
          <div class="clearfix"></div>
          <h3><?php echo get_field('our_brisbane_title_sub'); ?></h3>
          <div class="clearfix"></div>
          <p><?php echo get_field('our_brisbane_sub_content'); ?></p>
        </div>
      </div>

      <div class="col-md-12">
        <div class="ec-services ec-small-view">
          <ul class="row">
          <?php if (have_rows('emergency_electrical')):?>
          <?php $i = 0; while (have_rows('emergency_electrical')): the_row(); ?>
            <li class="col-md-4">
              <div class="ec-service-wrap">
                <span class="ec-icon ec-color"> <i class="fa <?php echo get_sub_field('ec_icons'); ?>"></i> </span>
                <div class="ec-infowrap">
                  <h4><?php echo get_sub_field('title'); ?> </h4>
                  <p><?php echo get_sub_field('content'); ?> </p>
                </div>
              </div>
            </li>
            <?php $i++; endwhile; ?>
                <?php endif;?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Section /-->
 </section>
 <section id="infortw">
  <!--/ Section /-->
  <div class="ec-main-section ec-main-infotw">
          <div class="container">
            <div class="row">

              <div class="col-md-6">
                <div class="ec-main-title"> <h2><?php echo get_field('info_title'); ?></h2>
                  <h3><?php echo get_field('info_sub_title'); ?></h3>
                </div>
                <div class="ec-wellcome-text">
                <?php echo get_field('info_content_before_image'); ?>
                  <p><img src="<?php echo get_field('info_content_image_one'); ?>" alt="Orange Electrical Team Prekaro" width="243" height="162"> <img src="<?php echo get_field('info_content_image_two'); ?>" alt="Orange Electrical Team" width="247" height="162"></p>
                  <?php echo get_field('info_content_after_image'); ?>
               
                </div>
              </div>
              <div class="col-md-6">
                <div class="ec-main-title"> <h2><?php echo get_field("faq_title");?></h2> </div>
                <!--// Accordion //-->
                <div class="ec-accordion">
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <?php if (have_rows('faq_accordion')):?>
                  <?php $i = 0; while (have_rows('faq_accordion')): the_row(); ?>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne">
                        <h3 class="panel-title">
                          <a><?php echo get_sub_field('faq_title'); ?></a>
                        </h3>
                      </div>
                      <div>
                        <div class="panel-body">
                          <p><?php echo get_sub_field('faq_content'); ?></p>
                        </div>
                      </div>
                    </div>
                    <?php $i++; endwhile; ?>
                    <?php endif;?>
                  </div>
                </div>
                <!--// Accordion //-->
              </div>

            </div>
          </div>
        </div>
        <!--/ Section /-->
 </section>
 <section id="ec-main-testimonial">
 <div style="background-color:#000" class="ec-main-section ec-main-testimonial">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="ec-main-title"> <h2 style="color:#ccc"><?php echo get_field('custom_review'); ?></h2> </div>
                <div class="flexslider ec-testimonial">
                <div class="splide" id="google_review">
                <div class="splide__track">
                  <ul class="splide__list">
                <?php if (have_rows('google_review_slider')):?>
                <?php $i = 0; while (have_rows('google_review_slider')): the_row(); ?>
                    <li class="splide__slide">
                      <div class="ec-testimonial-wrap">
                        <i class="ec-color"></i>
                        <p><?php echo get_sub_field('review_text'); ?><span><?php echo get_sub_field('reviewer'); ?></span></p>
                      </div>
                    </li>
                    <?php $i++; endwhile; ?>
                <?php endif;?>
                  </ul>
          </div>
          </div>
                </div>
              </div>
              <p class="testimonial-info"><img src="<?php echo get_field('google_review_images');?>" alt="Google Review" width="130" height="65"> <img src="<?php echo get_field("true_local_image");?>" alt="True Local"  width="130" height="65"></p>
            </div>

          </div>
        </div>
 </section>
 <section id="ec-portfolio">
 <div class="container-full">

<div class="col-md-12">

</div>
  <div class="ec-portfolio ec-modren">
    <div class="portfolio-items">
      <ul class="row gallery">
      <?php if (have_rows('image_hover')):?>
          <?php $i = 0; while (have_rows('image_hover')): the_row(); ?>
        <li class="col-md-3 jquery">
          <figure><a href="<?php echo get_sub_field('company_logo_link'); ?>"><img src="<?php echo get_sub_field('company_logo'); ?>" alt=""></a>

          </figure>
        </li>
        <?php $i++; endwhile; ?>
        <?php endif;?>
        <!-- <li class="col-md-3 wordpress">
          <figure><a href="/projects/"><img src="images/extra-images/portfolio-full-2.jpg" alt="Hutchinson Builders"></a>

          </figure>
        </li>
        <li class="col-md-3 php" >
          <figure><a href="/projects/"><img src="images/logos/jil.png" alt="JIL"></a>

          </figure>
        </li>
        <li class="col-md-3 jquery">
          <figure><a href="/projects/"><img src="images/extra-images/portfolio-full-4.jpg" alt="Leukaemia Foundation"></a>

          </figure>
        </li>
        <li class="col-md-3 php">
          <figure><a href="/projects/"><img src="images/logos/westbuilt.jpg" alt="FK Gardener &amp; Sons"></a>

          </figure>
        </li>
        <li class="col-md-3 wordpress">
          <figure><a href="/projects/"><img src="images/logos/urban.png" alt="Urban"></a>

          </figure>
        </li>
        <li class="col-md-3 jquery">
          <figure>
            <a href="/projects/"><img src="images/logos/QHEALTH.jpg" alt="Queensland Health"></a>
          </figure>
        </li>
        <li class="col-md-3 php" >
          <figure>
            <a href="/projects/"><img src="images/logos/cbre.png" alt="CBRE"></a>
          </figure>
        </li> -->
      </ul>
    </div>
</div>

</div>
 </section>
</div>
      <!--/ Main Banner /-->
<?php get_footer(); ?>
<script>

document.addEventListener( 'DOMContentLoaded', function () {
  new Splide('#google_review', {
    type: 'loop',
    perPage: 1,
    focus: 'center',
    autoplay: false,
    pagination: true,
    arrows:false,
    breakpoints: {
      1440: {
        perPage: 1,
      }
    }
  }).mount();
});

</script>
