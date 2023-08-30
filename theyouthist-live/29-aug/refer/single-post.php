<?php

get_header();?>

<style>
    body {
        margin: 0px;
        padding: 0px;
    }
    .post-section {
        max-width: 87%;
        margin: 0px auto;
        padding-top: 1.5rem;

    }
    .post-sec-whole {
        display: flex;
        width: 100%;
    }
    .post-sec-left {
        width: 75%;
        margin-right: 3vmax;
    }
    .post-sec-right {
        width: 25%;

    }
    h1.post-sec-head {
        color: #000000;
        margin: 0;
        font-size: 38px;
        font-family: 'Poppins', sans-serif;
        font-weight: normal;
        line-height: 1.5;
        text-align: left !important;
    }
    p.post-sec-date {
        color: #686868;
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: 400;
        margin-top:0px;
    }
    .fearture img{
        width: 100%;
        height: auto;
        object-fit: contain;
    }
    h2.post-rect-title {
        font-family: 'Poppins', sans-serif;
        font-size:21px;
        font-weight:600;
        border-bottom: 1px solid #8080806b;
        padding-bottom: 19px;
        padding-top:1rem;
    }
    .post-content-last:nth-child(1) {
        padding-top: 1rem;
    }
    .post-sec-text p{
        margin: 0;
        color: #808080;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 20px;
        line-height: 1.6;
        font-size: 16px;
    }
    .post-sec-text h2, .post-sec-text h3 {
        font-family: 'Poppins', sans-serif;
        margin: 3px;
        line-height: 1.5;
        color: black;
        font-size: 26px;
        font-weight: normal;
        margin-left: 0px;
    }
    .post-sec-text ul li{
        color: #808080;
    }
    .post-content-last {
            display: flex;
            width: 100%;
            position: relative;
            margin-bottom: 0.5vmax;
    }
    img.post-content-last-img {
        height: 120px;
        width: 155px;
        padding: 4px 6px;
        object-fit: cover;
    }

    h3.post-trim-tit {
        font-size: 15px;
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
        letter-spacing: 0px;
        color: #000000;
        opacity: .8;
        font-weight: 400;
        margin-bottom: 0.3rem;
    }
    .post-cont-trim {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }
    .post-trim-tit{
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }
    .post-content_txt-last a {
        font-size: 18px;
        line-height: 28px;
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        color: #222A35;
    }
    .post-content_txt-last {
        margin-left: 1vmax;
    }
    @media screen and (min-width:320px) and (max-width:767px) {
    .post-section {
            max-width: 90%;
            margin: 0px auto;
        }
    }
    @media screen and (min-width:768px) and (max-width:991px) {
    .post-section {
            max-width: 95%;
            margin: 0px auto;
        }
    }
    @media screen and (min-width:320px) and (max-width:991px) {
        .post-sec-whole {
            display: flex;
            flex-direction: column-reverse;
            width: 100%;
        }
        .post-sec-right {
            width: 100%;
        }
        .post-recent {
            display: none;
        }
        .post-sec-left {
            width: 100%;
            padding-top: 2rem;
        }
        .fearture img {
            width: 100%;
            height: 100%;
        }

        h1.post-sec-head {
            font-size: 24px;}
        .post-sec-text p{
            font-size: 16px;
        }
        h2.post-rect-title {
            font-size: 24px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
        }
        .post-content-last {
            display: flex;
            margin-right: 11px;
            align-items: center;
        }
        img.post-content-last-img {
            width: 100%;
            height: 200px;
            border-radius: 10px;
            object-fit: contain;

        }
        .post-cont-trim{
            margin-top: 2vmax;
        }
    }
    @media screen and (min-width:992px) and (max-width:1279px) {
        .post-section {
            max-width: 90%;
            margin: 0px auto;
            margin-top: 3vmax !important;
            margin-bottom: 4vmax !important;
        }
        h1.post-sec-head {
            font-size: 24px;}
        .post-sec-text p{
            font-size: 16px;
        }
        h2.post-rect-title {
            font-size: 24px;
            font-weight: 600;
            margin: 1.5vmax 0vmax;
            font-family: 'Poppins', sans-serif;
        }
        .fearture img {
            width: 100%;
            height: 100%;
        }
        img.post-content-last-img {
            width: 100px;
            height: 100px;
            border-radius: 10px;
            object-fit: cover;
        }
    }
    @media screen and (min-width:1280px) and (max-width:1799px) {
        .post-section {
            max-width: 90%;
            margin: 0px auto;
            margin-top: 3vmax !important;
            margin-bottom: 4vmax !important;
        }
        h1.post-sec-head {
            font-size: 24px;
        }
        .post-sec-text p{
            font-size: 16px;
        }
        h2.post-rect-title {
            font-size: 24px;
            font-weight: 600;
            margin: 1.5vmax 0vmax;
            font-family: 'Poppins', sans-serif;
        }
        .fearture img {
            width: 100%;
            height: 100%;
        }

    }

    /*banner section start*/
    @media screen and (max-width: 991px){
        img#desktop_view{display:none;}
        }
        @media screen and (min-width:1920px) and (max-width:2000px){
        .bcontainer{width:1650px;margin:auto;max-width:1920px;}
        }
        @media screen and (min-width:2001px){
        .bcontainer{width:1650px;margin:auto;max-width:1920px;}
        }
        @media screen and (min-width:992px) and (max-width:1199px){
        .bcontainer{width:95%;margin:auto;}
        }
        @media screen and (min-width:1200px) and (max-width:1399px){
        .bcontainer{width:90%;margin:auto;}
        }
        @media screen and (min-width:1400px) and (max-width:1880px){
        .bcontainer{width:90%;margin:auto;}
        }
        @media screen and (min-width:1881px) and (max-width:1919px){
        .bcontainer{width:90%;margin:auto;}
        }
        @media screen and (max-width:991px){
        .bcontainer{padding:0 15px;}
        }
        @media screen and (min-width:992px){
        img#mobile_view{display:none;}
        }

        .banner_blog_text p{margin:0px;}
        .banner_blog p a:nth-child(1)::after{content:'';border:solid #ffffff;border-width:0 2px 2px 0;display:inline-block;padding:3px;transform:rotate(-40deg);-webkit-transform:rotate(-40deg);position:relative;margin-right:8px;margin-left:5px;}
        section.blog_banner_sec .bcontainer{width:100%;padding:0;}
        .banner_blog img{width:100%;filter:blur(3px);-webkit-filter:blur(3px);}
        .banner_blog .banner_blog_text{position:absolute;top:32%;text-align:center;width:100%;}
        .banner_blog{position:relative;}
        .banner_blog p a{color:#fff;font:normal normal normal 18px Poppins;text-decoration: none;}
        .banner_blog_text h1{font:normal normal 300 48px Poppins;color:#fff;margin-bottom:0;}
        @media screen and (max-width:500px){
        .banner_blog .banner_blog_text{top:18%;}
        .banner_blog_text h1{font:normal normal 300 36px Poppins;}
        .banner_blog p a{font:normal normal normal 15px Poppins;}
        }
    /*banner-section end*/

     /*choose section-start*/
     .container_germ {
        background: #fff;
        padding-top: 45px;
        padding-bottom: 60px;
        border-top: 2px solid #D4D4D4;
    }
    .container_germ h2:after{content:'';width:60px;display:flex;background:#8cc122;height:2px;margin:auto;position:relative;bottom:-12px;}
    @media screen and (max-width:767px){
    .container_germ h2{margin-bottom:70px;}
    .container_germ h2{font:normal normal 300 28px Poppins!important;}
    }
    .container_germ h2{font:normal normal 300 36px Poppins;text-align:center;margin-top:0;}


    @media screen and (max-width:500px){
    .heliten_cc{width:100%!important;}
    }
    .het_tel{display:flex;justify-content:space-between;text-align:center;margin:auto;flex-wrap:wrap;width:90%;}
    .heliten_cc{width:21.99999%;display:flex;align-items:center;text-align:left;border:1px solid #D4D4D4;border-radius:72px;padding:15px 15px;}
    .het_tel img{width:90px;margin-right:12px;margin-left: 12px;}
    .heliten_cc p{font:normal normal normal 16px/27px Poppins;}
    @media screen and (min-width:1024px) and (max-width:1340px){
    .heliten_cc{width:28.99999%;margin-bottom:22px;}
    }
    @media screen and (max-width:1023px){
    .heliten_cc{width:28.99999%;margin-bottom:22px;}
    .heliten_cc{padding:5px 11px;}
    .heliten_cc p{font:normal normal normal 14px/27px Poppins;}
    .het_tel img{width:65px;margin-right:12px;}
    }
    @media screen and (max-width:991px){
    .heliten_cc{width:273px;margin:auto;margin-bottom:12px!important;height:60px;align-items:center;padding:11px 11px;}
    }
    @media screen and (min-width:1399px) and (max-width:1440px){
    .heliten_cc:nth-child(1) p{width:63%;}
    .heliten_cc:nth-child(2) p{width:59%;}
    }
    @media screen and (min-width:1920px){
    .het_tel{width:1650px;}
    }
    /*! CSS Used from: Embedded */
    @media screen and (min-width:1200px) and (max-width:1300px){
    .het_tel{width:55%;}
    .heliten_cc{width:42.99999%;padding:15px 15px;}
    }
    /*choose section end*/

    span.card-des-cc11{position:absolute;
        /* right:10px;top:8px; */
        background:#8cc122;color:#fff;  font-family: 'Poppins', sans-serif;;padding:4px 12px;border-radius:3px;font-size:16px;
        right: 0;margin-top: 1rem;top:0; margin-right: 20px;}

    .card-des-cc11 a{color:white;text-decoration:none;}

    a.cnt_read {
        color: #8cc122!important;
        text-decoration: none;
        font-size: 16px;
    }


    h3#tableofcontent{
        border-bottom: 1px solid #8080806b;
        padding-bottom: 15px;
        font: normal normal 600 21px Poppins;
        margin: 0;
        padding-left: 12px;
    }
    ol#mainNav{list-style:none;padding-left:0;}
    ol{list-style:none;padding-left:0;}
    .nav{position: relative;}
    /* .nav{position:sticky;top:150px;} */
    @media screen and (min-width:1280px) and (max-width:1800px){
    .nav{padding-left:0!important;}
    }
    @media screen and (min-width:600px) and (max-width:1023px){
    ol#mainNav{text-align:center;}
    h3#tableofcontent{text-align:center;}
    .nav{padding-left:0!important;}
    }
    @media screen and (min-width:1024px) and (max-width:1279px){
    h3#tableofcontent{font-size:18px!important;}
    .nav{padding-left:0!important;}
    }
    @media screen and (max-width:599px){
    h3#tableofcontent{text-align:center;min-height:30px;}
    .nav{padding-left:0!important;display:block;}
    }
    a.navigation__link {
        color: #2C2C2C;
        text-align: left;
        font-family: 'Poppins', sans-serif;
        font-size:16px;
        letter-spacing: 0px;
        opacity: 0.6;
        text-transform: capitalize;
        font-weight: 300;
        text-decoration: none;
    }
    ul#mainNav {
        padding-left: 18px;
    }
    .fearture {
        position: relative;
    }
    @media screen and (min-width:320px) and (max-width:767px) {
        .post-sec-text h2, .post-sec-text h3{
            font-size:20px;
        }

        span.card-des-cc11{
            font-size: 12px;
            /* right: 40px; */
            position: absolute;
            right: 0px;
            border: 2px solid #f5bf26;
            background-color: #f5bf26;
            color: white;
            padding: 5px 20px;
            text-align: center;
            text-decoration: none;
            margin-top: 15px;
            margin-right: 20px;
            top:0;

        }
    }
    @media screen and (min-width:768px) and (max-width:991px) {
        span.card-des-cc11{
            font-size: 16px;
            right: 0;
        }
    }
    @media screen and (min-width:992px) and (max-width:1024px) {
        span.card-des-cc11{
            font-size: 16px;
            right:0;
        }
    }
    @media screen and (min-width:1025px) and (max-width:1800px) {
        span.card-des-cc11{
            right: 0;
        }
    }


    .mob-recent-blog {
        padding-top: 0px;
        padding-bottom: 80px;
    }
    .mob-recent-container {
        width: 85%;
        margin: 0px auto;
    }
    .mob-recent-sec h2{
        text-align: center;
        font: normal normal 300 36px/100px Poppins;
        position: relative;
        margin-top: 83px;
    }
    .mob-recent-content-last {
        width: 95%;
    }
    img.mob-recent-last-img {
        width: 100%;
        height: 200px;
        object-fit: fill;
    }

    span.card-des-cc22{position:absolute;right:35px;top:8px;background:#8cc122;color:#fff;font:normal normal normal 15px Arial;padding:4px 12px;border-radius:3px;}
    .card-des-cc22 a{color:white;text-decoration:none;}
    .mob-recent-b .splide__arrows {
        display: none;
    }
    .mob-recent-b .splide__pagination {
    display: none;
    }
    h3.mob-recent--tit {
        font: normal normal normal 18px Poppins;
        margin-top: 13px;
        margin-bottom: 16px;
        /* min-height: 55px; */
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }
        p.date_update_cc1{color:#686868;font-family:'Poppins', sans-serif;font-size:18px;font-weight:400;}
        @media screen and (max-width:991px){
        p.date_update_cc1{font-size:14px;font-weight:400;}
        }

        ::-webkit-scrollbar{display:none;}
        p.read_article{position:unset;background:url(<?php echo site_url();?>/wp-content/uploads/2023/01/readarrow.png) 115px -2px / 28px no-repeat;width:200px;color:#8cc122!important;font-size: 20px;}
        .card_cc p{font:normal normal normal 19px Poppins;margin-bottom:0;color:#686868;}
        @media screen and (max-width:500px){
        p.read_article{position:unset;bottom:8px;}
        }
        .mob-recent_align a{text-decoration:none;}
        .mob-recent-sec h2:after{
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            width: 75px;
            display: flex;
            background: #8cc122;
            height: 2px;
            margin: auto;
            bottom: 22px;
        }
        section.mob-recent-b {
            display: none;
        }
        @media screen and (max-width:991px){
            section.mob-recent-b {
                display: block;
            }
            .mob-recent-sec h2{
                font-size:24px;
                margin-top: 0px;
            }
            img.mob-recent-last-img {
                width: 100%;
                height: 155px;
                object-fit: fill;
            }
            p.date_update_cc1 {
                display: none;
            }
            span.card-des-cc22{
                display:none;
            }
        }
        @media screen and (max-width:767px){
            .mobright {
                width: auto;
                margin: 0px auto;
                margin-left: 1rem;
            }

        }
        @media screen and (min-width:768px) and (max-width:991px) {
            .mob-recent-container {
                width: 87%;
                margin: 0px auto;
            }
        }
        .post-right-common {
            position: sticky;
            top: 50px;
        }
        .post-sec {
            position: relative;
        }
</style>

<section class="blog_banner_sec">
    <div class="bcontainer">
            <div class="banner_blog">
                        <?php $imagetax1 = get_field('banner-img'); ?>
                            <img class="" id="desktop_view" src="<?php if($imagetax1 !=''){echo $imagetax1;} else { echo site_url()."/wp-content/uploads/2023/01/banner.jpg";} ?>"
                                alt="<?php echo $imagetax1['alt']; ?>">

                                <?php $imagetax2 = get_field('mobbanner-img'); ?>
                            <img class="" id="mobile_view" src="<?php if($imagetax2 !=''){echo $imagetax2;} else { echo site_url()."/wp-content/uploads/2023/01/mobilebanner.jpg";} ?>"
                                alt="<?php echo $imagetax2['alt']; ?>">

                        <div class="banner_blog_text">
                                <h1>All Blogs</h1>
                                    <p><a href="<?php echo site_url();?>">Home</a>
                                        <a href="<?php echo site_url();?>/blog">Blog</a>
                                    </p>

                        </div>
        </div>
    </div>
</section>

<div class="post-section">
        <div class="main_cotent" id="main_content_mob">

                <div class="post-sec-whole">
                    <div class="post-sec-left">
                            <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <div class="post-sec">

                                        <div class="post-sec-img-blog">
                                             <?php if ( has_post_thumbnail() ) : ?>
                                            <?php
                                            $featured_img_urls = get_the_post_thumbnail_url($post->ID, 'full'); ?>

                                            <div class="fearture">
                                                <img src="<?php echo esc_url( $featured_img_urls, 499, 281, true ); ?>"/>

                                                <span class="card-des-cc11">
                                                        <?php

                                                            $the_cat = get_the_category();

                                                            $category_name = $the_cat[0]->cat_name;

                                                            $category_link = get_category_link( $the_cat[0]->cat_ID );

                                                            ?>
                                                            <a href=”<?php the_permalink();?>”

                                                            title=”<?php echo $category_name ?>”  >

                                                            <?php echo $category_name ?>

                                                            </a>
                                                </span>
                                            </div>

                                            <?php endif; ?>

                                        </div>

                                        <div class="post-sec-blog">

                                                <h1 class="post-sec-head"><?php the_title(); ?></h1>

                                                <p class="post-sec-date"><?php echo get_the_date('F j, Y'); ?></p>
                                        </div>
                                </div>
                                    <div class="post-sec-text" id="mydiv">
                                        <?php echo wpautop(get_the_content()); ?>
                                    </div>
                            <?php endwhile; ?>
                                <?php endif; ?>
                    </div>
                    <div class="post-sec-right">
                        <div class="post-right-common">
                            <div class="nav">
                                <h3 id="tableofcontent">Table of Content</h3>
                                <ul class="navigation" id="mainNav">
                                </ul>
                            </div>
                            <div class="post-recent">
                                <h2 class="post-rect-title">Recent Posts</h2>

                                <div class="post-feat-rgt">
                                    <div id="feature-posts">
                                        <div class="posts-content-common">
                                            <?php
                                            $args = array(
                                                    'post_type' => 'post',
                                                    'post_status' => 'publish',
                                                    'posts_per_page' => 4,
                                                    'order' => 'ASC'
                                            );

                                            $the_query = new WP_Query($args);
                                            if ($the_query->have_posts()):  while ($the_query->have_posts()): $the_query->the_post();
                                            $thumb = get_post_thumbnail_id(); $img_url = wp_get_attachment_url($thumb, 'full'); ?>
                                            <div class="post-content-last">
                                                <a
                                                    href="<?php the_permalink();?>"><?php
                                                    $thumb = get_post_thumbnail_id();
                                                    $image = $img_url;
                                                    echo '<img height="100%;" width="100%;" class="post-content-last-img" src="'.$img_url.'" alt="event-img" />'; ?></a>
                                                <div class="post-content_txt-last">
                                                    <h3 class="post-trim-tit"><?php the_title();?></h3>
                                                    <div class="port_align">
                                                                <a class="cnt_read" href="<?php the_permalink();?>">Read More</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <?php endwhile;  else:  ?>
                                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
</div>

<section class="mob-recent-b">
        <div class="mob-recent-blog">
            <div class="mob-recent-container mobright">
                <div class="mob-recent-sec">
                    <h2>Recent Blogs</h2>

                    <div id="mob-recent-slider" class="splide mob-recent-splider">
                        <div class="splide__track">
                            <div class="splide__list">
                                                    <?php
                                                    $args = array(
                                                            'post_type' => 'post',
                                                            'post_status' => 'publish',
                                                            'posts_per_page' => 4,
                                                            'order' => 'ASC'
                                                    );

                                                    $the_query = new WP_Query($args);
                                                    if ($the_query->have_posts()):  while ($the_query->have_posts()): $the_query->the_post();
                                                    $thumb = get_post_thumbnail_id(); $img_url = wp_get_attachment_url($thumb, 'full'); ?>

                                        <!-- <div id="mob-recent-posts"> -->
                                            <div class="splide__slide">
                                                <div class="mob-recent-content-common">

                                                    <div class="mob-recent-content-last">
                                                        <a
                                                            href="<?php the_permalink();?>"><?php
                                                            $thumb = get_post_thumbnail_id();
                                                            $image = $img_url;
                                                            echo '<img height="100%;" width="100%;" class="mob-recent-last-img" src="'.$img_url.'" alt="event-img" />'; ?></a>
                                                             <span class="card-des-cc22">
                                                                    <?php

                                                                        $the_cat = get_the_category();

                                                                        $category_name = $the_cat[0]->cat_name;

                                                                        $category_link = get_category_link( $the_cat[0]->cat_ID );

                                                                        ?>
                                                                        <a href=”<?php the_permalink();?>”

                                                                        title=”<?php echo $category_name ?>”  >

                                                                        <?php echo $category_name ?>

                                                                        </a>
                                                            </span>
                                                        <div class="mob-recent-content_txt-last">
                                                            <p class="date_update_cc1"><?php echo get_the_date('F j, Y'); ?> </p>
                                                            <h3 class="mob-recent--tit"><?php the_title();?></h3>
                                                            <div class="mob-recent_align">
                                                                <a href=<?php the_permalink();?>>
                                                                        <p class="read_article" href="<?php the_permalink();?>">Read Article</p>
                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <?php endwhile;  else:  ?>
                                                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                                                    <?php endif; ?>
                                        <!-- </div> -->

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section>

<section>
    <div class="choose-section-container">
        <div class="container_germ">
            <h2>Why Choose Us</h2>

                <div class="het_tel">
                    <div class="heliten_cc">
                        <img class="" src="<?php echo site_url();?>/wp-content/uploads/2023/01/choose.jpg" alt="">
                        <p>There are many variations</p>
                    </div>
                    <div class="heliten_cc">
                        <img class="" src="<?php echo site_url();?>/wp-content/uploads/2023/01/choose1.jpg" alt="">
                        <p>chunk of Lorem Ipsum</p>
                    </div>
                    <div class="heliten_cc">
                        <img class="" src="<?php echo site_url();?>/wp-content/uploads/2023/01/choose.jpg" alt="">
                        <p>simply dummy text</p>
                    </div>
                    <div class="heliten_cc">
                        <img class="" src="<?php echo site_url();?>/wp-content/uploads/2023/01/choose1.jpg" alt="">
                        <p>The word Lorem Ipsum</p>
                    </div>
                </div>

        </div>
    </div>

</section>

<script>
    var x=document.getElementById('mydiv').querySelectorAll('h1,h2,h3,h4,h5,h6');
var y='';
var count=0;
let count2 = 0;
for(i=0; i< x.length;i++){
    var str=x[i].outerText;
    if(str!='' && str!=null && str.trim()!=''){
        str=str.replace(/ /g,'');
    str=str.substring(0,9);
    str=str+'_'+i;
    x[i].setAttribute("id", str);
    x[i].setAttribute("class", 'page-section');

    if(x[i].tagName=='H2' || x[i].tagName=='H1' || x[i].tagName=='H3'|| x[i].tagName=='H4'|| x[i].tagName=='H5'|| x[i].tagName=='H6'){
        count=1;
        count2++;
        var ul = document.getElementById("mainNav");
        var li = document.createElement("li");
        ul.appendChild(li);
        var a = document.createElement("a");
        a.textContent = x[i].outerText;
        a.setAttribute('href', '#'+str+'');
        a.className = "navigation__link";
        li.appendChild(a);

    }
    else{
        var lastchile = document.getElementById("mainNav").lastElementChild;
        if(count==1){
            console.log(x[i].outerText, "111111");
            var last_child=document.querySelector("#mainNav li");
            var node = document.createElement("ol");
            var newcontent='<li><a class="navigation__link" href="#'+str+'">'+ x[i].outerText +'</a></li>';
            node.innerHTML = newcontent;
            lastchile.appendChild(node);
            count++;

        }
        else{
            console.log(x[i].outerText, "222222");
            var last_child=document.querySelector("#mainNav li:last-child ol");
            var node = document.createElement("li");
            var newcontent='<a class="navigation__link" href="#'+str+'">'+ x[i].outerText +'</a>';
            node.innerHTML = newcontent;
            last_child.appendChild(node);
        }

    }
    }
}
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Splide('#mob-recent-slider', {
        perPage: 4,
        perMove: 1,
        type: 'loop',
        arrows: true,
        rewind: true,

        breakpoints: {

            '767': {

                perPage: 1,
                perMove: 1,
                autoplay: true,
                padding: {
                    right: '4rem',
                    // left: '1rem',

                },
            },

            '768': {
                perPage: 2,
                perMove: 1,

            },
            '1024': {
                perPage: 2,
                perMove: 1,


            },
            '1200': {
                perPage: 2,
                perMove: 1,

            },
        }
    }).mount();
});
</script>

<?php get_footer();?>