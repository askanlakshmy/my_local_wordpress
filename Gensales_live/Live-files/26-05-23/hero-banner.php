<?php $image = get_sub_field('banner_images');?>
<?php 
	
	
  $sect_image = get_sub_field('banner_images');
  $sect_image_mobile = get_sub_field('banner_image_mobile');


?>
<?php
		                        $banner_image = get_sub_field('banner_images');
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
								<style>
									@media screen and (max-width:767px){
										.hero_banner{
											background-image:url(<?php echo $bn_image_mobile['url']; ?>) !important;
										}
									}
									@media screen and (min-width:768px){
										.hero_banner{background-image:url(<?php echo $bn_image['url']; ?>) !important;}
									}
                                   
								</style>
<section class="hero_banner">
<div class="container">
    <div class="flex_section">
    <div class="left_sec">
        <div class="background-image">

            <div class="back-gradient" ></div>

            <h1><?php the_sub_field('title'); ?></h1>
            
            <h2><?php the_sub_field('sub_title'); ?></h2>
            <div class="awards_icons_banner">
           <?php if (have_rows('awards_images')):?>
          <?php $i = 0; while (have_rows('awards_images')): the_row(); ?> 
                    <?php $office_location_image= get_sub_field('awards_logo');?>
            <div class="icons_awards">
                <img src="<?php echo $office_location_image;?>" />
           </div>
                <?php $i++; endwhile;?>
            <?php endif;?>
           </div>       
        </div>
           </div>

<div class="right_sect">

<div class="sub-content">
<?php

			$form_object = get_sub_field('form');
			echo do_shortcode('[gravityform id="' . $form_object['id'] . '" title="false" description="false" ajax="true"]');

		?>
</div>
    </div>
           </div>
           </div>
</section>
<style>
    @media screen and (max-width:360px){
        .sub-content form{    padding: 30px 15px !important;}
    }
    @media screen and (max-width:767px){
        .success_con p br{display:none;}
        .success_con p{
            width:120px;
        }
        .success_con {
    padding-left: 7%;
    padding-bottom: 9%;
}
    }
    section.hero_banner{padding:0 !important;}
    input#gform_submit_button_13 {
    padding: 0;
    height: 45px;
}
    @media screen and (min-width:1280px) and (max-width:1580px){
        /* section.hero_banner{
        background-position-x: -157px;
    } */
    }
    .gform_wrapper.gravity-theme .gform_fields{grid-row-gap: 5px !important;}
    div#field_13_11 label.gfield_label.gform-field-label {
    display: none;
}
    .gform_wrapper.gravity-theme .gfield textarea.small {
    height: 75px !important;
}
/* label.gfield_label.gform-field-label {
    display: none !important;
} */
    html body .gform_wrapper .gfield_label{
        margin-bottom: 3px!important;
    }
    .sub-content form#gform_13 input {
    height: 35px;
}
    p.gform_required_legend {
    display: none;
}
    @media screen and (min-width:1280px) and (max-width:1919px){
        .sub-content {
            width: 80%;
    margin-left: auto;
    margin-right: 30px;
}
        html body section.hero_banner .container {
            width: 95% !important;}
    }
    section.hero_banner .container {
    width: 80% !important;
    max-width: inherit;
}
.flex_section {
    padding: 1.5% 0;
    align-items: center;
}
    section.hero_banner {
    /* background-size: cover; */
    padding-bottom: 0 !important;
}
    .sub-content form {
    background: #fff;
    padding: 30px 30px;
    padding-bottom:0 !important;
}
    section.page-title {
    display: none;
}
    .flex_section {
    display: flex;
}
.left_sec {
    width: 50%;
}
.right_sect {
    width: 50%;
}
.background-image h1 {
    color: #fff;
    font-family: helvetica;
    font-size: 36px;
    line-height: 1.5;
}
.background-image h2 {
    color: #fff;
    font-family: helvetica;
    font-size: 24px;
    font-weight: 400;
}
a.phone-button {
    display: none;
}
.awards_icons_banner {
    display: flex;
}
.icons_awards {
    padding-right: 10%;
    padding-top: 3%;
}
form#gform_13 .gform_wrapper.gravity-theme #field_submit, form#gform_13 .gform_wrapper.gravity-theme .gform_footer{
    justify-content: end;
}
form#gform_13 .gform_wrapper.gravity-theme #field_submit input, form#gform_13 .gform_wrapper.gravity-theme .gform_footer input{
    align-self: center;
}
form#gform_13 input#gform_submit_button_13{
    height: 45px !important;
    align-self: center;
    min-width: 150px;
}
.gform_wrapper.gravity-theme .gfield_label{
    font-size: 13px !important;
    font-family: helvetica;
}
.gform_wrapper.gravity-theme .gform_footer, .gform_wrapper.gravity-theme .gform_page_footer{
    padding: 10px 0 !important;
}
@media screen and (min-width:1920px){
    .sub-content {
    width: 80%;
    margin-left: auto;
}
section.hero_banner {
    background-size: cover;
}
}
@media screen and (max-width:767px){
    .icons_awards img {
    width: 80%;
}
    .awards_icons_banner{
        justify-content: space-between;
    }
    .icons_awards{padding-right: 0 !important;
    padding-top: 3% !important;
    padding-bottom: 5% !important;}
    .background-image h2{
        font-size: 20px !important;
    }
    .background-image h2 br{display:none;}
    form#gform_13 input#gform_submit_button_13{
        width: 100%;
    }
    .sub-content form{
        box-shadow: -4px 4px 4px rgba(117, 117, 117, 0.25), 15px 15px 25px rgba(181, 181, 181, 0.25);
    }
    section.hero_banner .container{
        padding: 0 15px;    width: 100% !important;
    }
    .flex_section {
    padding-top: 8% !important;
}
    .background-image h1{
        font-size: 32px !important;
    line-height: 1.2 !important;
    }
    section.hero_banner{
        background-repeat: no-repeat;
    background-size: contain;
    }
    .flex_section {
    display: block;
}
.left_sec,.right_sect {
    width: 100%;
}
}
@media screen and (min-width:1280px) and (max-width:1399px){
    form#gform_13 input#gform_submit_button_13 {
    min-width: 120px !important;
    margin-left: 23px;
}
}
@media screen and (min-width:1024px) and (max-width:1279px){
    a.column h4{
        font-size: 15px !important;
    }
    .sub_title{
        width: 90%;
    margin: 0 auto;
    margin-bottom: 4% !important;
    }
    .background-image h2{
        font-size: 20px !important;
    }
    .background-image {
    width: 90%;
}
    .sub-content form{
        padding: 18px 15px !important;
    }
    section.hero_banner .container {
    width: 95% !important;}
    .background-image h1{
        font-size: 28px !important;
    }
    .background-image h2 br {
    display: none;
}
}
@media screen and (min-width:768px) and (max-width:1023px){
    section.hero_banner .container {
    width: 95% !important;}
    .background-image h1{
        font-size: 30px;
    }
    .background-image h2{
        font-size: 18px !important;
    }
    .background-image h2 br{display:none;}
}
</style>
<?php if(is_page('8977') || is_page('9088') || is_page('9093')){ ?>
<style>
    .header {
    position: relative;}
    section.hero_banner {
    margin-top: 0 !important;
}
@media screen and (min-width:768px) and (max-width:1023px){
    .gform_wrapper.gravity-theme .gfield.gfield--width-third{
        grid-column: span 5 !important;
    }
}
</style>
<?php } ?>