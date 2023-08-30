<?php
/*Template Name: blog Template */
get_header();

?>
<style>
    @media screen and (max-width:767px){
        .feature_image a {
    min-height: 280px;
}
.feature_image img {
    min-height: 234px;
}
.pure-u-1.pure-u-md-8-24.visible.list_li {
    width: 100%;
}}
    </style>
<section id="blog_main_banner" class="for-breadcrumb">
    <div class="blog_mob_height">
        <div class="banner_blog">
            <div class="heor_br">
            <div class="pure_lg featur_blog">
            <?php $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

$args = array(

    'post_type' => 'post',

    'post_status' => 'publish',

    'posts_per_page' => 1,

    'paged' => $paged,

);

$the_query = new WP_Query($args);

if ($the_query->have_posts()): ?>

   <?php while ($the_query->have_posts()):
        $the_query->the_post(); ?> 
                <div class="pure-u-1 pure-u-md-3-24"></div>
                <div class="pure-u-1 pure-u-md-9-24" id="blog-title" style="opacity: 0;">
                    <!-- <div class=""> -->
                    
                        <div class="blog_title_details">
                            <div class="category_details_title"><a href="<?php the_permalink();?>"><?php the_category(', '); ?></a></div>
                            <h1 class="blog_title"><a href="<?php the_permalink();?>"><?php echo get_the_title(); ?></a></h1>
                            <p class="info_p"><?php echo get_the_date( 'F j, Y' ); ?> <?php $count_val=round(str_word_count($post->post_content)/ 120);
echo ". $count_val mins read";
?></p>
 <a href="<?php the_permalink();?>" style="color: #af1e23;
    font-size: 13px;">Read more</a>
                        <!-- </div> -->
                    </div>
                  
                </div>
                <div class="pure-u-1 pure-u-md-9-24" id="blog-main-img" style="opacity: 0;">
                    <div class="feature_image">
                    <a class="r2_b2_im" href="<?php the_permalink();?>"><?php
                    $thumb = get_post_thumbnail_id();
                    $img_url = wp_get_attachment_url( $thumb,'small');
                    $image = $img_url; 
                    echo '<img class="blog-bannner no_lazy" src="'.$img_url.'" alt="event-img" />'; ?>
</a>
                    </div>
                </div>
                <div class="pure-u-1 pure-u-md-3-24"></div>
                <?php wp_reset_query();
        wp_reset_postdata();
    endwhile;
else:
?>
<h3>no posts found!!</h3>
<?php
endif; ?>
            </div>
        </div>
</div>
    </div>

</section>
<section id="categories_title" style="opacity: 0;">
    <div class="pure_lg">
        <div class="pure-u-1 pure-u-md-1-24"></div>
        <div class="pure-u-1 pure-u-md-17-24">
            <div class="blog_list">
             <ul>
             <li><a href="/blogs/" class="blog_a">All Blogs</a></li>
                 <li><a href="/blogs/category/go-with-the-flow">Go With The Flow</a></li>
                  <li><a href="/blogs/category/no-pause-in-menopause">No Pause in Menopause</a></li>
                  <li><a href="/blogs/category/problem-free-pcod">Problem Free - PCOD</a></li>
                  <li><a href="/blogs/category/rio-in-media">RIO in Media</a></li>
             </ul>
            </div>
        </div>
        <div class="pure-u-1 pure-u-md-3-24">
        <div class="form_opm" id="seaching_id">
    <form role="search" method="get" class="search-form" action="<?php echo get_site_url();?>" >
     <!-- <div class="clearfix"> -->
    <div class="search-form-input">
    <button type="button" onclick="remove_1()"><svg aria-hidden="true" focusable="false" data-prefix="fa" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="fa svg-inline--fa fa-chevron-left fa-w-10"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z" class=""></path></svg></button>
     <input type="search" value="" name="s" placeholder="Type here" aria-label="Search for:">
      </div>
      <div class="button-box dek">
            <a href="javascript:void(0)" onclick="searchNav()">
                <svg aria-hidden="true" focusable="false" data-prefix="fa" data-icon="search" 
                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" 
                class="fa svg-inline--fa fa-search fa-w-16"><path fill="currentColor"
                 d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" class=""></path></svg>
                  <span>Search</span>
    </a>
            </div>
            <div class="button-box mob">
            <button type="button" class="mobile_search" onclick="searchNav_1()">
                <svg aria-hidden="true" focusable="false" data-prefix="fa" data-icon="search" 
                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" 
                class="fa svg-inline--fa fa-search fa-w-16"><path fill="currentColor"
                 d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" class=""></path></svg>
                  <span>Search</span>
    </button>
            </div>
            <div class="bottom-line"></div>
  
<!-- </div> -->
</form>
    </div>
        </div>
        <div class="pure-u-1 pure-u-md-2-24"></div>
    </div>
</section>
<section id="blog_grid"  style="opacity: 0;">
    <div class="blog-listing">
        <div class="pure_lg">
            <div class="pure-u-1 pure-u-md-1-24"></div>
            <div class="pure-u-1 pure-u-md-22-24 list_new" id="list_show">
            <?php $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

$args = array(

    'post_type' => 'post',

    'post_status' => 'publish',

    'posts_per_page' => -1,

    'paged' => $paged,

);

$the_query = new WP_Query($args);

if ($the_query->have_posts()): ?>

   <?php while ($the_query->have_posts()):
        $the_query->the_post(); ?>  
       
                <div class="pure-u-1 pure-u-md-8-24 visible list_li">
                <div class="card-blog left">
                     <div class="feature-image"><a class="r2_b2_im" href="<?php the_permalink();?>"><?php 
											$thumb = get_post_thumbnail_id();
											$img_url = wp_get_attachment_url( $thumb,'full');
											$image = aq_resize( $img_url, 390, 260, true );
											if($image!='') { ?>
												<img width="390" height="260" data-src="<?php echo $image ?>"  alt="<?php the_title();?>" class="attachment-medium-thumb size-medium-thumb wp-post-image lazy"> 
											<?php 
											}
										?>
</a></div>
                          <div class="details">
                            <div class="category_list"><a href="<?php the_permalink();?>"><?php the_category(', '); ?></a></div>
                            <h3 class="title_list"><a href="<?php the_permalink();?>"><?php echo get_the_title(); ?></a></h3>
                            <div class="info">
                              <p><?php echo get_the_date( 'F j, Y' ); ?><?php $count_val=round(str_word_count($post->post_content)/ 120);
echo ". $count_val mins read";
?></p>
<a href="<?php the_permalink();?>" style="color: #af1e23;
    font-size: 13px;">Read more</a>
                            </div>
                           
                          </div>
                        </div>
                </div>
 
                <?php wp_reset_query();
        wp_reset_postdata();
    endwhile;
else:
?>
<h3>no posts found!!</h3>
<?php
endif; ?>
<div class="blog_log_more">
<button id="loadmore" class="hover_h">LOAD MORE</button>
</div>
            </div>
            <div class="pure-u-1 pure-u-md-1-24"></div>
        </div>
    </div>
</section>
<section id="tag_blog"  style="opacity: 0;">
    <div class="container">
        <div class="pure_lg">
            <div class="pure-u-1 pure-u-md-5-24"><h2></h2></div>
            <div class="pure-u-1 pure-u-md-14-24">
               <h3 class="hot_topice">Hot topics</h3>
               <p class="hot_topice_content">Looking for stories about a certain topic or from a specific discipline? Head straight over
                    to the articles you want to see by clicking on one of these super-focused tags.</p>
                    <?php 
        $tags = get_tags(array(
            'smallest'                  => 10, 
            'largest'                   => 22,
            'unit'                      => 'px', 
            // 'number'                    => -1,  
            'format'                    => 'flat',
            'separator'                 => " ",
            'orderby'                   => 'count', 
            'order'                     => 'AESC',
            'show_count'                => 1,
            'echo'                      => false
        ));
        echo '<ul class="AddYourClassUl">';
        foreach ($tags as $tag) {
        echo '<li class="AddYourClassLi"><a rel="nofollow" href="'. bloginfo("").'/blogs/tag/'.$tag->slug.'">' . $tag->name . '</a></li>';
        }
        echo '</ul>';
    ?>
            </div>
            <div class="pure-u-1 pure-u-md-5-24"></div>
        </div>
    </div>
</section>
<section id="start_use">
<div class="container">
    <div class="pure_lg pro_pro">
        <div class="pure-u-1 pure-u-md-2-24"></div>
        <div class="pure-u-1 pure-u-md-13-24">
            <div class="images_section_start">
                <img data-src="https://www.riopads.in/wp-content/uploads/2021/09/740-by-415-copy.png" alt="740-by-415-copy" class="desk_only lazy">
                <img data-src="https://www.riopads.in/wp-content/uploads/2022/04/375-by-231-copy.png" alt="375-by-231-copy" class="mobile_only lazy">
                <div class="btn-link dark y_mob"><a href="https://www.amazon.in/dp/B09CD7K6VL" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="amazon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fa svg-inline--fa fa-amazon fa-w-14 fa-2x"><path fill="currentColor" d="M257.2 162.7c-48.7 1.8-169.5 15.5-169.5 117.5 0 109.5 138.3 114 183.5 43.2 6.5 10.2 35.4 37.5 45.3 46.8l56.8-56S341 288.9 341 261.4V114.3C341 89 316.5 32 228.7 32 140.7 32 94 87 94 136.3l73.5 6.8c16.3-49.5 54.2-49.5 54.2-49.5 40.7-.1 35.5 29.8 35.5 69.1zm0 86.8c0 80-84.2 68-84.2 17.2 0-47.2 50.5-56.7 84.2-57.8v40.6zm136 163.5c-7.7 10-70 67-174.5 67S34.2 408.5 9.7 379c-6.8-7.7 1-11.3 5.5-8.3C88.5 415.2 203 488.5 387.7 401c7.5-3.7 13.3 2 5.5 12zm39.8 2.2c-6.5 15.8-16 26.8-21.2 31-5.5 4.5-9.5 2.7-6.5-3.8s19.3-46.5 12.7-55c-6.5-8.3-37-4.3-48-3.2-10.8 1-13 2-14-.3-2.3-5.7 21.7-15.5 37.5-17.5 15.7-1.8 41-.8 46 5.7 3.7 5.1 0 27.1-6.5 43.1z" class=""></path></svg>BUY ON AMAZON</a></div>
            </div>
        </div>
        <div class="pure-u-1 pure-u-md-7-24">
            <div class="product_info">
                <h4 class="product_info_h4"><p>Start using <span style="color: #af1e23;">RIO Heavy Flow Pads</span> during your heavy flow</p></h4>
                <div class="featrues">
                    <div class="featrue_item"><img src="https://www.riopads.in/wp-content/uploads/2020/02/anti-beacterial-sap-1.svg" alt="anti-beacterial"><p>Anti-bacterial SAP</p></div>
                    <div class="featrue_item"><img src="https://www.riopads.in/wp-content/uploads/2020/02/guards-not-wings-1.svg" alt="guards-not-wings"><p>Guards not wings</p></div>
                    <div class="featrue_item"><img src="https://www.riopads.in/wp-content/uploads/2020/02/odour-lock-1.svg" alt="odour-lock"><p>Odour lock</p></div>
                </div>
                <div class="links only-product">
                    <div class="btn-link dark no_m"><a href="https://www.amazon.in/dp/B09CD7K6VL" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="amazon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="fa svg-inline--fa fa-amazon fa-w-14 fa-2x"><path fill="currentColor" d="M257.2 162.7c-48.7 1.8-169.5 15.5-169.5 117.5 0 109.5 138.3 114 183.5 43.2 6.5 10.2 35.4 37.5 45.3 46.8l56.8-56S341 288.9 341 261.4V114.3C341 89 316.5 32 228.7 32 140.7 32 94 87 94 136.3l73.5 6.8c16.3-49.5 54.2-49.5 54.2-49.5 40.7-.1 35.5 29.8 35.5 69.1zm0 86.8c0 80-84.2 68-84.2 17.2 0-47.2 50.5-56.7 84.2-57.8v40.6zm136 163.5c-7.7 10-70 67-174.5 67S34.2 408.5 9.7 379c-6.8-7.7 1-11.3 5.5-8.3C88.5 415.2 203 488.5 387.7 401c7.5-3.7 13.3 2 5.5 12zm39.8 2.2c-6.5 15.8-16 26.8-21.2 31-5.5 4.5-9.5 2.7-6.5-3.8s19.3-46.5 12.7-55c-6.5-8.3-37-4.3-48-3.2-10.8 1-13 2-14-.3-2.3-5.7 21.7-15.5 37.5-17.5 15.7-1.8 41-.8 46 5.7 3.7 5.1 0 27.1-6.5 43.1z" class=""></path></svg>BUY ON AMAZON</a></div>
                    <div class="btn-link_n"><a href="/product/heavy-flow" class="">VIEW PRODUCT</a></div>
                </div>
    
            </div>
        </div>
        <div class="pure-u-1 pure-u-md-2-24"></div>
    </div>
</div>
</section>
<script>
     const loadmore = document.querySelector('#loadmore');
            let currentItems = 12;
            loadmore.addEventListener('click', (e) => {
                const elementList = [...document.querySelectorAll('.list_new .list_li')];
                for (let i = currentItems; i < currentItems + 12; i++) {
                    if (elementList[i]) {
                        elementList[i].style.display = 'inline-block';
                    }
                }
                currentItems += 12;

                if (currentItems >= elementList.length) {
                    event.target.style.display = 'none';
                }
            })
</script>
<style>
    @media screen and (max-width:767px){
        .banner_blog {
    max-height: 540px !important;
}
        .feature_image{max-height:256px;}
    }
    #list_show .list_li:nth-child(1), #list_show .list_li:nth-child(2), #list_show .list_li:nth-child(3), #list_show .list_li:nth-child(4), #list_show .list_li:nth-child(5),
    #list_show .list_li:nth-child(6), #list_show .list_li:nth-child(7), #list_show .list_li:nth-child(8), #list_show .list_li:nth-child(9), #list_show .list_li:nth-child(10), #list_show .list_li:nth-child(11), #list_show .list_li:nth-child(12){
        display:inline-block;
    }
    .list_li{display:none;}
    @media screen and (min-width:48em){
        .form_opm {
    position: absolute;
    z-index: 3;
    left: 0;
    width: 100%;
}
form.search-form {
    padding-left: 8.3333%;
    padding-right: 8.3333%;
}
.bottom-line {
    left: 8.3333% !important;
    width: 83.3334%;}
    }
    .search-form-input button {
    background: transparent;
    border: none;
    outline: none;
}
.bottom-line {
    position: absolute;
    left: 0;
    bottom: 0;
    height: 1px;
    background: rgba(0,37,97,.4);
}
.bottom-line{display:none;}
.button-box a {
    background: transparent;
    border: none;
    outline: none;
    text-align: left;
    padding: 0.5em 1em;
    width: 100%;
}
.is-searching .search-form-input {
    display: flex !important;
}
.is-searching .bottom-line {
    display: block !important;
}
.is-searching {
    background: #fff;
}
@media screen and (max-width:767px){
    .blog_log_more {
    padding-bottom: 2em;
}
    .blog_list {
    margin: 25px 0;
}
    form.search-form {
    padding-left: 1.5em;
    padding-right: 1.5em;
}
    .search-form-input input {
    border: 1px solid rgba(0,37,97,.4);
    border-radius: 5px;
    padding: 0 1em;
}
    .is-searching .button-box.mob span {
    display: none;
}
.is-searching .button-box.mob {
    border: none !important;
    width: auto !important;
}
    .button-box.dek {
    display: none;
}
.button-box.mob button {
    background: transparent;
    border: none;
    outline: none;
    text-align: left;
    padding: 0.5em 1em !important;
    width: 100%;
}
.button-box.mob {
    margin-right: 1.5em;
    display: block;
    width: 100%;
    margin-left: 1.5em;
    border: 1px solid rgba(0,37,97,.4);
    border-radius: 5px;
}
}
@media screen and (min-width:48em){
    .button-box.mob{display:none;}
}
</style>
<script>
    
function searchNav(){

console.log('test');

let element= document.getElementById("seaching_id");

// console.log(element)

element.classList.add("is-searching");



}
    
function searchNav_1(){

console.log('test');

let element= document.getElementById("seaching_id");

// console.log(element)

element.classList.add("is-searching");



}
function remove_1(){

console.log('test');

let element= document.getElementById("seaching_id");

// console.log(element)

element.classList.remove("is-searching");

}

window.addEventListener('load', function() { setTimeout(function(){
                document.getElementById("blog-title").style.opacity = "1";
                document.getElementById("categories_title").style.opacity = "1";
                document.getElementById("blog_grid").style.opacity = "1";
                document.getElementById("tag_blog").style.opacity = "1";
                document.getElementById("blog-main-img").style.opacity = "1";
            },100)});
</script>
<?php get_footer();?>