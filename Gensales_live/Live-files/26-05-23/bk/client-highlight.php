<section class="client-highlight">

    <div class="container">

       <img src="http://gensales.com/wp-content/uploads/Icon-Quotation.png" class="icons_quotation">
        <div class="quote"><?php the_sub_field('testimonial'); ?></div>
     
        <div class="author"><?php the_sub_field('author'); ?></div>
        <span class="lined-heading"><h5><?php the_sub_field('title'); ?></h5></span>
    
    </div>

</section>
<style>
    section.client-highlight {
    background: #F1F3F6;
}
@media screen and (min-width:1280px){
    section.client-highlight .container {
    width: 75%;
    margin: 0 auto;
}
.quote p {
    font-family: 'Poppins';
    font-size: 20px;
    text-align: center;
    width: 83%;
    margin: 0 auto;
}
}
.author {
    text-align: center;
    font-family: 'Poppins';
    font-size: 15px;
    font-weight: 600;
    margin-top: 3%;
}
span.lined-heading:after {
    display: none;
}
.lined-heading h5 {
    text-transform: capitalize;
    background: transparent;
    text-align: center;
    display: inherit;
    z-index: 1;
    position: relative;
    padding: 0 15px;
    font-size: 15px;
    font-family: 'Poppins';
    letter-spacing: inherit;
}
img.icons_quotation {
    position: relative;
    top: 15px;
    left: 18px;
}
@media screen and (max-width:767px){
    img.icons_quotation{
    top: 0 !important;
    left: 0 !important;
}
section.client-highlight .container {
    text-align: center;
}
}
@media screen and (min-width:1280px) and (max-width:1399px){
    img.icons_quotation {
    top: 11px;
    left: -21px;
}
section.client-highlight {
    padding-top: 18% !important;
}
.quote p{
    width: 94% !important;
}
}
@media screen and (min-width:1440px) and (max-width:1600px){
    section.client-highlight .container {
    width: 70% !important;
}
.quote p{    width: 88% !important;}
img.icons_quotation{left: 0 !important;}
}
@media screen and (min-width:1601px){
    section.client-highlight .container {
    width: 68% !important;}
    section.client-highlight {
    padding-top: 17% !important;
}
}
</style>
<?php if(is_page('9010') || is_page('9031') || is_page('9043')){ ?>
<style>
   section.client-highlight{
    padding-top: 14%;
}
</style>
<?php } ?>