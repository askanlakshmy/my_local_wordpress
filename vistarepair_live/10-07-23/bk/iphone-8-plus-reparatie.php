<?php

/*

*Template name: iphone-8-plus-reparatie

*/

get_header();?>


<section>
    <div class="iphone-8-plus-background">
        <div class="iphone-8-plus-content8">
            <div class="iphone-8-content">
                <h1 class="iphone-8-content-title"><?php echo get_field('iphone-8-title');?></h1>
            </div>
            <div class="iphone-8-head1">
                <h4 class="iphone-8-content-head1"><?php echo get_field('iphone-8-head1');?></h4>
            </div>
            <div class="iphone-8-head2">
                <div class="iphone-8-head2-centent">
                    <a href="<?php echo get_field('iphone-8-model-link');?>">
                        <span class="iphone-8-model"><?php echo get_field('iphone-8-modelling');?></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="iphone-plus-svgdiv">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                        c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                        c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z">
                    </path>
            </svg>

        </div>
    </div>

</section>
<section class="iphonecardsection">
    <div class="iphonecard">
        <div class="iphonecard-row">

                    <div class="card-iphone8">
                        <div class="iphonecard1">
                            <?php if (have_rows('card-repeater')) : ?>
                                <?php while (have_rows('card-repeater')) : the_row(); ?>

                                    <div class="iphonecard1-background">
                                        <div class="iphonecard-wrapsection">
                                            <div class="iphonecard-wrap1">

                                                <div class="iphonecard-image">
                                                    <?php $images = get_sub_field('iphonecard_img'); ?>
                                                    <img src="<?php echo $images['url']; ?>" alt="<?php echo $images['alt']; ?>">
                                                    <h5 class="iphonecard-paragraph"><?php echo get_sub_field('iphonecard-para');?></h5>
                                                        <div class="common-min8">
                                                            <h6 class="iphonecard-symbol"><?php echo get_sub_field('iphonecard-sym');?></h6>
                                                            <h6 class="iphonecard-line1"><?php echo get_sub_field('iphonecard-line1');?></h6>
                                                            <h6 class="iphonecard-line2"><?php echo get_sub_field('iphonecard-line2');?></h6>
                                                        </div>
                                                    <div class="hovereffect">
                                                    <?php $arrow_content = get_sub_field('iphone-8-cardmeer');?>
                                                        <a class="cardlink" href="<?php echo get_sub_field('iphone-cardmeer-link');?>">
                                                        <span class="iphone-8-cardmeer"><?php echo $arrow_content; ?></span>
                                                        <span class="iphone-button-content-wrapper">
                                                         <?php if($arrow_content != '') { ?>
                                                            <span class="iphone-button-icon iphone-align-icon-right">
                                                                <i aria-hidden="true" class="fas fa-arrow-right"></i>

                                                            </span>
                                                            <?php } ?>
                                                        </span>
                                                        </a>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                            <?php endif; ?>
                        </div>

                    </div>
        </div>
    </div>
</section>
<?php if (have_rows('center-repeaterphone8')) : ?>
    <?php while (have_rows('center-repeaterphone8')) : the_row(); ?>
        <?php $emty_cond = get_sub_field('center-iphone-para8(1)');?>
    <?php endwhile; ?>
<?php endif; ?>
<?php if(!empty($emty_cond)): ?>
<section class="iphone8section">
    <div class="iphone8-part">
        <div class="iphone8-part-row">
            <div class="right-iphone8">
            </div>
            <div class="center-iphone8">
                <div class="center-iphone8-content">
                        <?php if (have_rows('center-repeaterphone8')) : ?>
                        <?php while (have_rows('center-repeaterphone8')) : the_row(); ?>
                    <div class="iphone8-contentbelow">
                            <h2 class="center-iphone8-head"><?php echo get_sub_field('center-iphone8(1)');?></h2>
                            <p><?php echo get_sub_field('center-iphone-para8(1)');?></p>
                    </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                </div>

            </div>
            <div class="left-iphone8">
            </div>
        </div>
    </div>

</section>
<?php endif;?>
<?php $emty_map = get_field('map_title')?>
<?php if(!empty($emty_map)):?>
<section class="map-rep">
    <div class="vis-ta-rep-iph-one-map-ifr-me-sec-wd">
        <div class="vis-ta-rep-iph-one-mp-ifr-sec-clr">
            <div class="vis-ta-rep-iph-ne-ifr-tit-sec">
                <h1 class="vis-ta-rep-ihp-tit-hed-sec"><?php echo get_field('map_title')?></h1>
            </div>
            <div class="vis-ta-rep-sec-ip-one-sec-ifr-mp-fl-ex">
                    <?php if (have_rows('map_sec_rep')) : ?>
                        <?php while (have_rows('map_sec_rep')) : the_row(); ?>
                        <div class="vis-ta-iphone-sec-ifr-map-sec-rep">
                            <div class="vis-ta-iph-ne-ifr-sp-sec-wd">
                                <div class="vis-ta-iph-ne-me-sec-sp-pd">
                                    <div class="vis-ta-ihp-ne-sec-tit-hed-md-hd">
                                        <h2 class="vis-ta-rep-air-ipn-sec-tit-mp"><?php echo get_sub_field('map-head');?></h2>
                                    </div>
                                    <div class="vis-ta-rep-sec-mp-ira-frme">
                                        <p><?php echo get_sub_field('map_iframe_mp');?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                        <!-- <div class="vis-ta-iphone-sec-ifr-map-sec-rep">
                            <div class="vis-ta-iph-ne-ifr-sp-sec-wd">
                                <div class="vis-ta-iph-ne-me-sec-sp-pd">
                                    <div class="vis-ta-ihp-ne-sec-tit-hed-md-hd">
                                        <h2 class="vis-ta-rep-air-ipn-sec-tit-mp">VistaRepair Wormerveer</h2>
                                    </div>
                                    <div class="vis-ta-rep-sec-mp-ira-frme">
                                        <p><iframe class="iframelazy" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" data-src="https://maps.google.com/maps?q=Telecombinatie%20wormerveer&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="Telecombinatie wormerveer" aria-label="Telecombinatie wormerveer"></iframe></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vis-ta-iphone-sec-ifr-map-sec-rep">
                            <div class="vis-ta-iph-ne-ifr-sp-sec-wd">
                                <div class="vis-ta-iph-ne-me-sec-sp-pd">
                                    <div class="vis-ta-ihp-ne-sec-tit-hed-md-hd">
                                        <h2 class="vis-ta-rep-air-ipn-sec-tit-mp">VistaRepair Huizen</h2>
                                    </div>
                                    <div class="vis-ta-rep-sec-mp-ira-frme">
                                        <p><iframe class="iframelazy" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" data-src="https://maps.google.com/maps?q=Phone%20House%20huizen&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="Phone House huizen" aria-label="Phone House huizen"></iframe></p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
            </div>
        </div>
    </div>
</section>
<?php endif; ?>



<?php get_footer();?>