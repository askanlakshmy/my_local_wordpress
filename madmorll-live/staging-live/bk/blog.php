<?php

/*

*Template name: Blog

*/

get_header();?>
<style>
    /* blog right section*/
    body {
        margin: 0px;
        padding: 0px;
    }
    .blog-section-container {
        width: 87%;
        margin: 0px auto;
    }
    .blog-section-flex {
        padding-top: 3.2rem;
        padding-bottom: 6.1rem;
    }
    .blog-section-common {
        display: flex;
        width: 100%;
        position: relative;
    }
    .blog-section-right {
        width: 65%;
    }
    .blog-section-left {
        width: 33%;
        position: relative;
        padding-left: 2rem;
    }
    .blog-section-posts {
        display: flex;
        flex-wrap: wrap;
        border-bottom: 2px solid #cdc5c5;
        justify-content: space-between;
        margin-bottom: 55px;
        width: 100%;
    }
    .blogcontent {
        width: 48%;
        padding-bottom: 40px;
        margin-top: 30px;
        /* border-bottom: 2px solid #cdc5c5; */
        /* margin-bottom: 40px; */
        position: relative;
        display: flex;
        flex-direction: column;
    }
    .box-container_blog:nth-child(1), .box-container_blog:nth-child(2){
        margin-top: 0px;
    }
    img.blog-img {
        width: 100%;
    height: 300px;
    object-fit: cover;
    border: 1px solid #99999924;
    padding: 10px;
    }


    span.card-des-cc1{position:absolute;right:10px;top:8px;background:#8cc122;color:#fff;font:normal normal normal 15px Arial;padding:4px 12px;border-radius:3px;}
    .card-des-cc1 a{color:white;text-decoration: none;}


    p.date_update_cc{color:#686868;font-family: 'Poppins', sans-serif;font-size:18px;font-weight:400;}
    a.order_post1 {
        text-decoration: none;
    }
    .order_post1 h3 {
        font-family: 'Poppins', sans-serif;font-size:22px;font-weight:400;
        margin: 0;
        color: #000000;
        line-height:1.5;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    p.conter_nks{font-family: 'Poppins', sans-serif;font-size:16px;font-weight:400;line-height:1.5;margin-bottom: 5rem;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }
    @media screen and (max-width:991px){
        .blog-section-flex {
            padding-top: 0rem;
            padding-bottom: 0rem;
        }
        .box-container_blog:nth-child(1), .box-container_blog:nth-child(2){
        margin-top: 30px;
    }
    p.conter_nks{font-size:14px;margin-top:0;margin-bottom: 2rem;}
    }
    /* .blogcontent-below {
        min-height: 430px;
    } */

    p.port_align {
        padding: 10px 0;
    }
    a.cnt_read{
        font-family: 'Poppins', sans-serif;font-size:14px;font-weight:400;
        color: #8cc122;
        border: 1px solid #8cc122;
        padding: 8px 30px;
        position: relative;
        text-decoration: none;
    }

    @media screen and (max-width:991px){

        /* .blogcontent-below {
         min-height: auto;
        } */

        .blog-section-common {
            display: block;
            width: 100%;
        }
        .blog-section-right {
            width: 100%;
        }
        .blog-section-left {
            width: 100%;
        }
        .blog-section-posts {
            display: block;

        }
        .blogcontent {
            width: 100%;
            position: relative;
        }
        p.date_update_cc{
            font-size: 14px;
            font-weight: 400;

        }
        .order_post1 h3{
            font-size: 17px;
            font-weight: 600;
            margin: 0;
        }
        .container_germ{
            padding-bottom: 40px;
        }
    }
    @media screen and (min-width:992px){
        p.conter_nks{
            margin-bottom: 2rem;
        }
        /* .blogcontent-below {
         min-height: auto;
        } */

    }


    .subcribe_log {
        position: sticky;
        top: 50px;
        border: 1px solid #D4D4D4;
        padding: 27px 20px 45px 20px;
        text-align: center;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
    }
    .subcribe_log h3 {
        font-size:22px;
        font-weight:300;
        font-family: 'Poppins', sans-serif;
        /* margin-top: 0; */
        margin:0px;
        text-align: center;
    }
    p#subscribe_hr {
        width: 100%;
        height: 1px;
        background: #D4D4D4;
    }
    p#state2 {
        opacity: .6;
        color: #2C2C2C;
        padding-top: 25px;
        margin-top: 1.8rem !important;
        width: 55%;
        margin: auto;
        font-size:17px;
        font-weight:400;
        font-family: 'Poppins', sans-serif;
    }
    .subcribe-form{
        width:100%;
    }
    .subcribe-form input#email_subscribe {
        border: 1px solid #808080;
        margin-top: 30px;
        width: 100%;
    padding: 14px 0 !important;
    color: #fff;
    font-size: 17px;
    font-weight: 300;
    font-family: 'Poppins', sans-serif;
    text-align:center;
    }
    .subcribe-form input#send1 {
        margin-top: 15px;
        background: #2C2C2C;
        border: 0;
        width: 100%;
        padding: 14px 0 !important;
        color: #fff;
        font-size:18px;
        font-weight:400;
        font-family: 'Poppins', sans-serif;

    }
    @media screen and (max-width:991px){
    .subcribe_log {
        display: none;
    }
    }

    .load_more_cc a:after{content:'';border:solid #2C2C2C;border-width:0 1.2px 1.2px 0;display:inline-block;padding:4px;transform:rotate(45deg);-webkit-transform:rotate(-40deg);position:absolute;right:34px;top:20px;}
    .load_more_cc{text-align:center;margin-bottom:65px;}
    .load_more_cc a{border:1px solid #2C2C2C;
    font-size:18px;font-family:'Poppins', sans-serif;font-weight:400;padding:14px 45px 14px 30px;position:relative;cursor:pointer;}
    @media screen and (max-width:991px){
    .load_more_cc a{font-size:14px;padding:8px 33px 7px 20px;}
    .load_more_cc a:after{right:22px;top:15px;}
    }

    .box-container_blog {

    display: none;
    }

    .box-container_blog:nth-child(1),
    .box-container_blog:nth-child(2),
    .box-container_blog:nth-child(3),
    .box-container_blog:nth-child(4) {
    display: inline-block;
    transition: 0.2s ease;
    }
    .box-container_blog:nth-child(1) {
    display: flex !important;
    flex-direction: column;
    }
    /* blog section end */

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
    .heliten_cc p{font-size:18px;font-family:'Poppins', sans-serif;font-weight:400;
    }
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
    @media screen and (min-width:991px) and (max-width:1440px){
        p#state2{width:100%;font-size:18px;}
        .subcribe_log h3{
        font-size:20px;
        }
    }
    @media screen and (min-width:1441px) and (max-width:1600px){
        p#state2{width:100%;font-size:20px;}
        .subcribe_log h3{
        font-size:20px;
        }
    }
    .subcribe_log h3:after {
        content: '';
        width: 100%;
        left: 0;
        top: 84px;
        height: 1px;
        background: #D4D4D4;
        display: inline-block;
        position: absolute;
    }
    @media screen and (min-width:768px) and (max-width:1199px){
        .blog-section-container {
            width: 95%;
            margin: 0px auto;
        }
    }
    @media screen and (min-width:1200px) and (max-width:1800px){
        .blog-section-container {
            width: 90%;
            margin: 0px auto;
        }
    }
    @media screen and (min-width: 2001px){
        .blog-section-container {
            width: 65%;
            margin: 0px auto;
        }
    }
    /* akila  */
.big-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
}
p.conter_nksa {
    padding-bottom: 0px;
    color: #808080;
    font: normal normal 300 18px Poppins;
    margin-bottom: 6px;
}
p.port_align {
    margin-bottom: 28px;
}
span.card-des-cc1 {
    display: none !important;
}
@media screen and (min-width:992px){
    .blogcontent-below {
    /* height: 428px; */
}
}
@media screen and (max-width:991px) {
    .big-image img {
        width: 100%;
    height: 182px;
    object-fit: cover;
    margin-top: 27px;
    }
}
/* .box-container_blog:nth-child(1) {
    display: none !important;
} */

</style>


<section class="blog_banner_sec">
    <div class="bcontainer">
            <div class="banner_blog">
                        <?php $imagetax1 = get_field('banner-img'); ?>
                            <img class="" id="desktop_view" src="<?php echo $imagetax1['url']; ?>"
                                alt="<?php echo $imagetax1['alt']; ?>">

                                <?php $imagetax2 = get_field('mobbanner-img'); ?>
                            <img class="" id="mobile_view" src="<?php echo $imagetax2['url']; ?>"
                                alt="<?php echo $imagetax2['alt']; ?>">

                        <div class="banner_blog_text">
                                <h1><?php echo get_field('banner-head');?></h1>
                                    <p><a href="<?php echo site_url();?>">Home</a>
                                        <a href="<?php echo site_url();?>/blog">Blog</a>
                                    </p>

                        </div>
        </div>
    </div>
</section>

<section>
    <div class="blog-section-container">
        <div class="blog-section-flex">
            <div class="blog-section-common">

            <div class="blog-section-right">
                <?php $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

$args = array(
    'post_type' => 'post' ,
    'posts_per_page' => 1,
    'paged' => get_query_var('paged'),

);
$the_query = new WP_Query($args);

if ($the_query->have_posts()): ?>

<?php while ($the_query->have_posts()):


        $the_query->the_post(); ?>
                <div class="blog-recent-post">
                        <div class="big-image">
                        <?php if ( '' != get_the_post_thumbnail() ) : ?>
                        <?php $thumbnail_url = get_the_post_thumbnail( get_the_ID(), 'big-image' ); ?>
                        <?php  echo wp_kses_post( $thumbnail_url ); ?>
                        <?php endif;?>
                        </div>
                        <div class="blog_txt">

<a class="order_post1" href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
<p class="date_update_cc"><?php echo get_the_date('F j, Y'); ?> </p>
<p class="conter_nks"> <?php echo wp_trim_words( get_the_content(),25, '' ); ?></p>
<p class="port_align"><a href="<?php the_permalink();?>" class="cnt_read">Continue Reading</a></p>
</div>
                  </div>
                  <?php wp_reset_query();
                                wp_reset_postdata();
                            endwhile;
                                else:
                            ?>
                                <h3>no posts found!!</h3>
                                <?php endif; ?>
                    <div class="blog-section-posts blog_parent_plex">
                        <?php $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                        $args = array(
                            'post_type' => 'post' ,
                             // 'posts_per_page' => 30,
                             'offset'         => 1,
                            'paged' => get_query_var('paged'),

                        );

                            $the_query = new WP_Query($args);

                            if ($the_query->have_posts()): ?>

                            <?php while ($the_query->have_posts()):
                                    $the_query->the_post(); ?>

                                        <div class="blogcontent box-container_blog">
                                            <div class="blogcontent-below">

                                                <a href="<?php the_permalink();?>"><?php
                                                $thumb = get_post_thumbnail_id();
                                                $img_url = wp_get_attachment_url( $thumb,'full');
                                                $image = $img_url;
                                                echo '<img class="blog-img" src="'.$img_url.'" alt="event-img" />'; ?></a>

                                                    <span class="card-des-cc1">
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

                                                    <p class="date_update_cc"><?php echo get_the_date('F j, Y'); ?> </p>

                                                <div class="blog_txt">

                                                    <a class="order_post1" href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>

                                                    <p class="conter_nks"> <?php echo wp_trim_words( get_the_content(),25, '' ); ?></p>

                                                </div>
                                            </div>
                                            <div class="port_align">
                                                        <a class="cnt_read" href="<?php the_permalink();?>">Continue Reading</a>
                                            </div>

                                        </div>
                            <?php wp_reset_query();
                                wp_reset_postdata();
                            endwhile;
                                else:
                            ?>
                                <h3>no posts found!!</h3>
                                <?php endif; ?>
                    </div>

                    <div class="load_more_cc" id="load-more-btn1"><a>Load More</a></div>
                </div>

                <div class="blog-section-left" id="main_header">

                    <div class="subcribe_log">
                         <h3>Subscribe to Newsletter</h3>
                         <!-- <p id="subscribe_hr"></p> -->
                         <p id="state2">Subscribe our newsletter and get discount 20% Off</p>

                         <div class="subcribe-form">
                         <?php echo do_shortcode('[contact-form-7 id="139" title="newsletter"]'); ?>
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
                    <?php if (have_rows('choose-repeater')) : ?>
                    <?php while (have_rows('choose-repeater')) : the_row(); ?>
                <div class="heliten_cc">
                        <?php $imagetax = get_sub_field('choose-img'); ?>
                                <img class="" src="<?php echo $imagetax['url']; ?>"
                                    alt="<?php echo $imagetax['alt']; ?>">

                    <p><?php echo get_sub_field('choose-para');?></p>
                </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
            </div>

        </div>
    </div>

</section>



<script>
    currLoc = jQuery(location).attr('pathname');
console.log("currLoc");

      let loadMoreBtn1 = document.querySelector('#load-more-btn1');
        let currentItem = 4;

        loadMoreBtn1.onclick = () => {
            let boxes = [...document.querySelectorAll('.blog_parent_plex .box-container_blog')];

            for (var i = currentItem; i < currentItem + 4; i++) {
                boxes[i].style.display = "inline-block";
            }

            currentItem += 4;

            if (currentItem >= boxes.length) {
                loadMoreBtn1.style.display = "none"
            }

        }

    </script>

<?php get_footer(); ?>