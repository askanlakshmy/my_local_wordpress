<section class="awards-left">
<div class="container">
    <div class="awards_logo_flex">
        <div class="awards_left_logo">
        <?php if (have_rows('awards_left_section')):?>
          <?php $i = 0; while (have_rows('awards_left_section')): the_row(); ?> 
          <?php $awards= get_sub_field('awards');?>
            <div class="immg_logo_awards"><img src="<?php echo $awards;?>"></div>
            <?php $i++; endwhile;?>
            <?php endif;?>
        </div>
        <div class="awards_right_empty">

        </div>
    </div>
<div class="blue_box">
    <div class="blue_box_inner">
        <div class="blue_left">
            <div class="details_blue">
            <h3><?php the_sub_field('roof_title'); ?></h3>
            <p><?php the_sub_field('roof_description'); ?></p>
            <a href="tel:<?php the_sub_field('roof_link'); ?>"><?php the_sub_field('roof_CTA'); ?></a>
            </div>
        </div>
        <div class="blue_right">
            <img src="<?php the_sub_field('roofing');?>">
        </div>
    </div>
    <div class="survive_section">
        <div class="list_surv">
        <?php if (have_rows('success')):?>
          <?php $i = 0; while (have_rows('success')): the_row(); ?> 
            <div class="success_con">
                <h3><?php the_sub_field('success_count'); ?></h3>
                <p><?php the_sub_field('success_description'); ?></p>
            </div>
            <?php $i++; endwhile;?>
            <?php endif;?>
        </div>
    </div>
</div>
</div>
</section>
<style>
    .details_blue a {
    border: 1px solid #FFFFFF;
    padding: 10px 30px;
    display: inline-block;
    font-size: 16px;
    font-weight: 700;
    margin-top: 6%;
    color: #fff;
}
    .details_blue p {
    font-family: helvetica;
    font-size: 16px;
    color: #fff;
}
    .details_blue h3 {
    color: #fff;
    font-size: 24px;
    font-weight: 700;
    line-height: 1.5;
}
    .details_blue {
    padding-left: 7%;
    padding-top: 6%;
    padding-right: 7%;
    width: 90%;
}

    .blue_right img {
    position: relative;
    top: -115px;
}
    .blue_right {
    width: 45%;
}
    .blue_box_inner {
    display: flex;
}
.blue_left {
    width: 55%;
}
    .blue_box {
    background: #041D4D;
    padding-bottom: 5%;
}
    section.awards-left .container {
    width: 80%;
}
.awards_logo_flex {
    display: flex;
}
.awards_left_logo {
    width: 55%;
}
.awards_right_empty {
    width: 45%;
}
.awards_left_logo {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}
.immg_logo_awards {
    width: 25%;
}
.list_surv {
    display: flex;
    justify-content: space-between;
    padding: 0 4%;
}
.success_con h3 {
    font-size: 32px;
    color: #fff;
    margin-bottom: 5px;
    font-weight: 700;
}
.success_con p {
    color: #fff;
    font-size: 13px;
    line-height: 1.5;
}
.survive_section {
    margin-top: -25px;
}
@media screen and (max-width:767px){
    
    .awards_left_logo,.awards_right_empty,.blue_left,.blue_right {
    width: 100%;
}
    section.awards-left .container {
    width: 100% !important;
    padding: 0 15px !important;
}
.blue_right {
    text-align: center;
}
.blue_box_inner{
    flex-direction: column-reverse;
    margin-top: 65%;
}
.immg_logo_awards {
    width: 50%;
    text-align: center;
    margin-bottom: 10px;
}
.awards_logo_flex {
    display: block;
}
.blue_right img{
    top: 0;
    width: 95%;
    margin: 0 auto;
    margin-top: -55%;
}
.details_blue h3{
    font-size: 20px !important;
}
.survive_section {
    margin-top: 0;
}
.details_blue{
    padding-left: 4%;
    padding-right: 4%;
    width: 100%;
}
.list_surv{
    flex-wrap: wrap;
    padding-top: 10%;
    padding-bottom: 10%;
}
.success_con {
    width: 50%;
}
.details_blue a{
    width: 100%;
    text-align: center;
}
}
@media screen and (min-width:768px) and (max-width:1279px){
    section.client-highlight .container {
    text-align: center;
}
    img.icons_quotation{
        top: 0;
    left: 0;
    }
    section.client-highlight {
    padding-top: 18% !important;
}
    section.awards-left .container{
    width: 98%;
}
.survive_section {
    margin-top: 20px !important;
}
}
@media screen and (min-width:1280px) and (max-width:1399px){
    section.awards-left .container {
    width: 85%;
}
.blue_right img{
    width:95%;
}
}
@media screen and (min-width:1400px) and (max-width:1439px){
    section.awards-left .container {
    width: 85%;
}
}
@media screen and (min-width:1441px) {
    .blue_right img{
        right: 5%;
    }
    .blue_right {
    text-align: end;
}
}
</style>