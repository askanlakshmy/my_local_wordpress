<section class="columns_three">

    <div class="container">

        <h2><?php the_sub_field('title'); ?></h2>
        <h3><?php the_sub_field('title_sub'); ?></h3>
        <p class="sub_title"><?php the_sub_field('title_description'); ?></p>

        <div class="columns-container">

            <?php while (have_rows('columns_repeater')): the_row(); ?>

                <a class="column" href="<?php if(get_sub_field('link')) {echo get_sub_field('link')['url'];} ?>" <?php if(get_sub_field("link")) {echo 'target="'.get_sub_field("link")['target'].'" rel="noreferrer noopener"';} ?>>
                    <div class="imgd">
                       <div class="im"> <img src="<?php echo wp_get_attachment_image_src(get_sub_field("image"),"medium")[0]; ?>"></div>
                       <div class="show_new">
                    <span><?php the_sub_field('steps'); ?></span>
                    <h4><?php the_sub_field('title'); ?></h4>

                    <p><?php the_sub_field('text'); ?></p>
</div>
                    </div>

                </a>
            
            <?php endwhile; ?>

        </div>
    
    </div>

</section>
<style>
    .columns_three .columns-container {
    /* display: grid;
    grid-template-columns: repeat(auto-fill, minmax(450px, 1fr));
    grid-gap: 5px; */
    margin: 0 -20px;
    display: flex;
}
.columns_three a.column{
    margin: 0 20px;
    max-width: 33.33%;
    flex: 1;
    display: flex;
    /* flex-direction: column;
    align-items: center;
    text-align: center; */
}
section.columns_three .container {
    width: 75%;
}
section.columns_three h2 {
    font-size: 24px;
    text-align: center;
}
section.columns_three h3 {
    color: #041D4D;
    text-align: center;
    font-size: 32px;
    font-weight:500;
}
.sub_title{
    color:#737272;
    font-size:20px;
    text-align: center;
    line-height: 1.5;
    margin-bottom: 4%;
}
a.column span {
    color: #041D4D;
    font-size: 13px;
    font-weight: 700;
}
a.column h4 {
    color: #041D4D;
    font-size: 16px;
    font-family: 'Poppins';
}
a.column p {
    color: #737272;
    font-family: helvetica;
    font-size: 16px;
    line-height: 1.2;
    min-height: 95px;
}
.im img {
    width: 100%;
}
.show_new {
    padding: 10px 25px;
    padding-bottom: 10%;
    box-shadow: -4px 4px 4px rgba(117, 117, 117, 0.25), 15px 15px 25px rgba(181, 181, 181, 0.25);
    background: #fff;
}
@media screen and (max-width:767px){
    section.columns_three .container {
    width: 100%;
    margin:0 !important;
}
section.columns_three h3{
    font-size: 24px !important;
    font-weight: 500;
}
.sub_title{
    font-size: 18px !important;    padding: 0 10px !important;
}
.columns_three .columns-container{
    display: block !important;
}
.columns_three a.column{
    max-width: 100% !important;
    margin:0;
}

}
@media screen and (min-width:768px) and (max-width:1279px){
    section.columns_three .container {
    width: 98%;
}
section.columns_three h3{
    font-size: 24px !important;
}
}
@media screen and (min-width:1280px) and (max-width:1399px){
    section.columns_three .container {
    width: 85%;
}


}
@media screen and (min-width:1400px) and (max-width:1439px){
    section.columns_three .container {
    width: 80% !important;
}
.quote p{
    width: 85% !important;
}
}
@media screen and (max-width:1279px){
    p.sub_title br {
    display: none;
}
}
@media screen and (min-width:768px) and (max-width:850px){
    .show_new {
    min-height: 265px;
}
html body section.client-highlight {
    padding-top: 25% !important;
}
}
@media screen and (min-width:851px) and (max-width:1279px){
    .show_new {
    min-height: 215px;
}
}
</style>
<?php if(is_page('9010') || is_page('9031') || is_page('9043')){ ?>
<style>
    section.columns_three {
    height: 540px;
    padding-bottom: 0;
}
@media screen and (max-width:767px){
    section.columns_three{
        height: auto !important;
    }
}
</style>
<?php } ?>