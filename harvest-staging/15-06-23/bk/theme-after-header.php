<?php
/**
 * Template partial used to add content to the page in Theme Builder.
 * Duplicates partial content from header.php in order to maintain
 * backwards compatibility with child themes.
 */

if ( et_builder_is_product_tour_enabled() || is_page_template( 'page-template-blank.php' ) ) {
	return;
}
?>
<link href="https://fonts.cdnfonts.com/css/avenir" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/Divi/js/stellarnav.css">

<style>
    /*new*/
    li.product_menu .subm_menu.active .hightled ul {
    display: none !important;
}
li.product_menu .hightled ul.sub-menu{
    display: flex !important;
}
    html body .subm_menu ul li a {
    padding: 0 !important;
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 400 !important;
    font-size: 14px !important;
    line-height: 19px;
    color: #666666 !important;
    word-break: unset;
    padding: 0;
    display: block;
    transition: unset !important;
    -webkit-transition: unset !important;
    -moz-transition: unset !important;
    -ms-transition: unset !important;
    -o-transition: unset !important;
    width: 100%;
    font-family: 'Montserrat';
}
    .subm_menu a {
    font-size: 16px !important;
}
   html body  .subm_menu li a {
    padding: 42px 0 !important;
    display: flex;
    justify-content: space-between;
}
html body .subm_menu ul li {
    padding: 0 !important;
    margin-bottom: 27px !important;
    padding: 0 !important;
}
html body .subm_menu ul li a {
    padding: 0 !important;
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 400;
    font-size: 14px;
    line-height: 19px;
    color: #666666 !important;
    word-break: unset;
    padding: 0;
    display: block;
    transition: unset !important;
    -webkit-transition: unset !important;
    -moz-transition: unset !important;
    -ms-transition: unset !important;
    -o-transition: unset !important;
    width: 100%;
}
span.f-link,.megacusbagde {
    font-weight: 800;
    position: relative;
    font-style: normal;
}
span.vertical--bar {
    margin: 0 8px;
    font-style: normal;
}
.subm_menu li {
    padding: 0 !important;
}
    .search-form-input {
    width: 100%;
}
    button.et_pb_menu__icon.et_pb_menu__close-search-button {
    background: transparent !important;
    border: none !important;
    outline: none;
}
    input#s {
    border: 0;
    width: 100%;
    color: #333;
    background: transparent;
    font-size: 14px;
    padding-left:6%;
}
    .novisbal_search {
        width: 88% !important;
    right: -3px;
    margin-left: auto;
    position: absolute;
    /* display: -webkit-box;
    display: -ms-flexbox;
    display: flex; */
    -webkit-box-pack: stretch;
    -ms-flex-pack: stretch;
    justify-content: stretch;
    -ms-flex-line-pack: stretch;
    align-content: stretch;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    z-index: -1;
}
.novisbal_search.addedClass {
    z-index: 99999999;
}
    .subm_menu a:after:not(ul) {
    font-family: ETmodules;
    content: "3" !important;
    font-size: 30px;
    right: 0;
    top: 50%;
    color: #666666;
    font-weight: 400;
    transition: 0.1s transform linear;
    -webkit-transition: 0.1s transform linear;
    -moz-transition: 0.1s transform linear;
    -ms-transition: 0.1s transform linear;
    -o-transition: 0.1s transform linear;
    margin-right: 16px;
    transform: rotate(-90deg)!important;
}
.subm_menu ul li a:hover .megacusbagde {
    color: #B19846  !important;
}
html body .subm_menu ul li a:hover:not(.megacusbagde){
    color: #666666 !important;
}
ul#menu-new-menu li:not(:first-child) {
    padding: 0 5px;
}
ul#menu-new-menu > li {
    padding: 0;
}
    /*new end*/
@media screen and (min-width:1800px){
   html body.logged-in .product_sub_menu,    html body.logged-in .product_sub_menu1,    html body.logged-in .product_sub_menu2,    html body.logged-in .product_sub_menu3 {
    top: 168px !important;
}
    .sticky .product_sub_menu, .sticky .product_sub_menu1, .sticky .product_sub_menu2, .sticky .product_sub_menu3{
        top: 102px !important;  
    }
    .product_sub_menu, .product_sub_menu1, .product_sub_menu2, .product_sub_menu3{
        top: 120px !important;  
    }
}
    header#custom_header {
    font-family: 'Avenir', sans-serif;
}
	.list_lang ul li:first-child {
    padding-right: 18px;
}
.list_lang ul {
    display: flex;
    justify-content: end;
}
.list_lang ul li a {
    color: #A9A9A9;
    font-weight: 400;
    font-size: 12px;
    line-height: 16px;
    color: #666666;
    cursor: pointer;
}
.header_list {
    display: flex;
    align-items: center;
}
ul#menu-new-menu {
    display: flex;
}
ul.sub-menu {
    display: none;
}
/* .subm_menu {
 
} */
.menu-item-has-children a:after {
    font-family: ETmodules;
    content: "3";
    font-size: 16px;
    font-weight: 400;
    position: unset !important;
    transform: unset !important;
    -webkit-transform: unset !important;
    -moz-transform: unset !important;
    -ms-transform: unset !important;
    -o-transform: unset !important;
    transition: 0.1s transform linear;
    -webkit-transition: 0.1s transform linear;
    -moz-transition: 0.1s transform linear;
    -ms-transition: 0.1s transform linear;
    -o-transition: 0.1s transform linear;
    color: #B19846;
}
li#menu-item-50049 ul li a {
    padding: 0 !important;
}
ul#menu-insigts-learing li:last-child {
    border-bottom: none;
}
li#menu-item-50049 ul li a {
    padding: 0 !important;
}
ul#menu-insigts-learing {
    border-right: 1px solid #9993;
}
ul#menu-new-menu li a {
    /* color: #333333; */
	/* padding: 25px 22px 25px 0; */
    font-weight: 500;
    font-size: 14px;
    line-height: 19px;
    color: #333333;
    padding: 31px 5px 26px 5px;
    font-family: 'Montserrat';
}
html body .subm_menu li a:hover, html body .subm_menu li a:hover:after {
    color: #B19846 !important;
}
.clearfix1 {
    display: flex;
	/* justify-content: end; */
}
button.button.button-default {
    display: flex;
    align-items: center;
    background: transparent;
    outline: none;
    border: none;
    font-weight: 400;
    font-size: 18px;
    line-height: 25px;
    color: #666666 !important;
    display: flex;
    flex-direction: row;
    cursor: pointer;
}
button.button.button-default:after {
    transform: scaleX(-1);
    padding-right: 12px;
    font-size: 16px;
    color: #B19846;
    content: "U";
    font-family: ETmodules;
}
header#custom_header .container {
    width: 89% !important;
    max-width: 100%;
}
.search_visible {
    width: 20%;
    position: relative;
    z-index: 99999;
}
.menu_list {
    width: 65%;
}
.logo_head {
    width: 15%;
}
.logo_head img {
    width: 78%;
}
.shap {
    background: #FFFFFF;
    border: 2px solid #08274224;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-left: 0;
    border-right: 0;
	border-bottom: 0;
	padding: 1% 0;
}
header#custom_header {
    padding-bottom: 2%;
}
.list_lang {
    width: 89%;
    margin: 0 auto;
	padding: 4px 0;
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

/* ul#menu-new-menu li {
    padding-right: 3%;
} */
ul.sub-menu {
    position: absolute;
    padding: 20px 0;
    z-index: 9999;
    width: max-content;
    background: #fff;
    opacity: 1;
    border-top: 3px solid #cdb460;
    box-shadow: 0 2px 5px rgba(0,0,0,.1);
    -moz-box-shadow: 0 2px 5px rgba(0,0,0,.1);
    -webkit-box-shadow: 0 2px 5px rgba(0,0,0,.1);
    -webkit-transform: translateZ(0);
    text-align: left;
    margin-top: 1.6%;
}
.removed_sub_menu ul li a:after {
    content: "";
}	
.removed_sub_menu ul li a {
    padding: 15px 15px !important;
    border: none !important;
}

.logged-in .sticky .product_sub_menu{top: 79px;}
.logged-in .product_sub_menu,.logged-in .product_sub_menu1,.logged-in .product_sub_menu2,.logged-in .product_sub_menu3{
    top: 143px; 
}
.product_sub_menu,.product_sub_menu1,.product_sub_menu2,.product_sub_menu3{
	position: fixed;
    width: 100%;
	right: 0;
    left: 0;
    top: 111px;
    /* overflow: hidden; */
    left: 0;
    /* top: 150px; */
    background-color: #fff;
    padding: 0px 0;
    border-top: 1px solid #eaeaea;
    line-height: 24px;
    z-index: 99999;
	opacity: 0;
	-webkit-transform: translateY(-300%);
    transform: translateY(-300%);
}
.sticky .product_sub_menu1, .sticky .product_sub_menu2, .sticky .product_sub_menu3 {
    top: 78px !important;
}
.product_sub_menu.selected,.product_sub_menu1.selected1,.product_sub_menu2.selected2,.product_sub_menu3.selected3{
	opacity: 1;
	/* display:block; */
	-moz-transform: translateY(0);
    -o-transform: translateY(0);
    -ms-transform: translateY(0);
    -webkit-transform: translateY(0);
    transform: translateY(0);
}

.main_menu,.main_menu1,.main_menu2,.main_menu3 {
    display: block;
    width:88%;
    margin: 0 auto;
}
.menu-soft-right,.menu-soft-right1,.menu-soft-right2,.menu-soft-right3 {
    display: inline-block;
	width: 30%;
}
/* .product_sub_menu2 ul#menu-about-harvest li a:after {
    display: none;
} */
.subm_menu li {
    padding: 6% 0;
    border-bottom: 2px solid #9999992e;
}
ul#menu-main-menu.subm_menu {
    border-right: 1px solid #9999992e;
}
.mega_menu_custom .product_sub_menu.selected ul li a,.product_sub_menu1.selected2 ul li a,.product_sub_menu2.selected2 ul li a,.product_sub_menu3.selected3 ul li a {
    border-bottom: 0 !important;
}
.subm_menu li a:after {
    float: right;
    transform: rotate(-270deg) !important;  
}

html body li.product_menu .subm_menu li:hover .sub-menu {
    display: flex !important;
}
li.product_menu .subm_menu ul.sub-menu {
    left: 31%;
    top: -23px;
    width: -webkit-fill-available;
	padding-left: 2%;
    flex-wrap: wrap;
    padding-top: 42px;
}
.subm_menu ul li a:after{content:none !important;}
li.product_menu .subm_menu ul.sub-menu:hover{
	display: flex !important;
}
.subm_menu ul li a {
    border-bottom: none !important;
    font-size:16px;
}
.subm_menu ul{
    box-shadow: none !important;
}
.subm_menu ul li {
    padding-top: 10px;
    padding-bottom: 10px;
    width: 50%;
    border: none !important;

}
.removed_sub_menu ul li {
    padding: 3% 0;
}
.left_position ul.sub-menu {
    left: 100%;
    margin-top: -22px;
    border-top: 0 !important;
}
/* input#s {
    border: none;
    border-bottom: 1px solid #fff;
    width: 0;
    right: -3px;
    position: relative;
} */
.show_line {
    border-color: #999 !important;
    width: 100% !important;
    right: 0 !important;
	transition: .2s;
}
.search-form-button{display:flex;    justify-content: end;}
@keyframes fadeOutTop{
    0% {
    opacity: 1;
    -webkit-transform: translatey(0);
    transform: translatey(0);
}
100% {
    opacity: 0;
    -webkit-transform: translatey(-60%);
    transform: translatey(-60%);
}
}
@media screen and (min-width:1536px) and (max-width:1600px){
   html body  ul#menu-new-menu li a{
    padding: 25px 21px 30px 0;
    padding-right: 0 !important;
    }
}
@media screen and (min-width:1601px){
   html body  ul#menu-new-menu li a {
    padding: 25px 21px 35px 0;
    padding-right: 0 !important;
}
}
@media screen and (min-width:1280px) and (max-width:1399px){
    .product_sub_menu,.product_sub_menu1,.product_sub_menu2,.product_sub_menu3{
    top: 104px !important;
    }
}
@media screen and (min-width:1212px){
    .subm_menu ul li a:after {
    display: none;
}
    .menu-item-has-children:hover a:after{
    content: "2" !important;
}
    .noshow_mobile {
    display: none !important;
}
    li.product_menu .sub-menu {
    display: none !important;
}
    li.insights_eductation .sub-menu {
    display: none !important;
}
    l.menu_media .menu-menu-media li:hover ul.sub-menu.mm {
    display: flex !important;
}
    .subm_menu .no_arrow a:after {
    content: "" !important;
}
    li.product_menu .subm_menu .noflex_list:hover .sub-menu {
    display: block !important;
}
    .left_p{
        position: relative;
    left: 4%;
    }
  .subm_menu ul.sub-menu{
    padding-top: 42px !important;
    padding-left: 41px !important;
    left:32% !important;
    }
    ul.sub-menu{
        background:transparent !important;
    }
    .subm_menu li a {
    border-bottom: 0 !important;
}
    /* li.menu_media .product_sub_menu3 {
    height: 400px;
} */
span.noc {
    font-weight: 400;
    font-size: 12px;
    line-height: 16px;
    color: #B19846;
    text-align: left;
}
    ul#menu-menu-media li {
    padding-top: 6%;
    padding-bottom: 6%;
}
    ul#menu-menu-media {
    border-right: 1px solid #9999994f;
}
.menu_fea {
    margin-bottom: 5%;
}
     .im2{margin-top:10%;}
    .content_c h3 {
        font-weight: 400;
    font-size: 18px;
    line-height: 25px;
    color: #666666 !important;
    margin-top: 18px;
    margin-bottom: 18px;
    text-align: left;
    padding-bottom:0 !important;
}
ul.sub-menu.mm {
    padding-top: 30px !important;
}
.menu_fea a:hover svg {
    transform: translate3d(6px, 0px, 0px);
    -webkit-transform: translate3d(6px, 0px, 0px);
    -moz-transform: translate3d(6px, 0px, 0px);
    -ms-transform: translate3d(6px, 0px, 0px);
    -o-transform: translate3d(6px, 0px, 0px);
}
html body .subm_menu ul li .menu_fea a:hover {
    color: #cdb460 !important;
}
.content_c {
    width: 95%;
}
html body .content_c a {
    padding: 0 !important;
    color: #cdb460 !important;
    font-weight: 300;
    font-size: 16px;
}
    ul#menu-menu-media li:hover .sub-menu.mm {
    display: flex !important;
}
    html body ul.sub-menu.mm {
    left: 31%;
    top: -23px;
    width: -webkit-fill-available;
    padding-left: 2%;
    flex-wrap: wrap;
    /* display: flex !important; */
}

    li.menu_media ul.sub-menu {
    display: none !important;
}
    li#menu-item-50064 ul li a {
    padding: 0 !important;
}
.menu-soft-right2 {
    border-right: 1px solid #9999994a;
}
ul#menu-about-harvest li:last-child {
    border-bottom: none !important;
}
html body .noflex_list:hover .sub-menu {
    display: block !important;
}
.menu-about-harvest-container .noflex_list ul li{width:100% !important}
li#menu-item-50064 ul.sub-menu {
    left: 31%;
    top: -23px;
    width: -webkit-fill-available;
    padding-left: 2%;
    flex-wrap: wrap;
}
    li.about_harves .sub-menu {
    display: none !important;
}
    .removed_sub_menu ul li {
    padding: 5% 0;
}
    .subm_menu li ul li {
        padding-top: 10px !important;
    padding-bottom: 10px !important;
    width: 50% !important;
    border: none !important;
}
    .subm_menu .sub-menu{border-top:none !important;}
    li.insights_eductation .subm_menu li:hover .sub-menu {
    display: flex !important;
}
    html body li.insights_eductation .subm_menu li:hover .sub-menu {
    display: flex !important;
}
li.insights_eductation .subm_menu ul.sub-menu {
    left: 31%;
    top: -23px;
    width: -webkit-fill-available;
    padding-left: 2%;
    flex-wrap: wrap;
}
    .product_sub_menu ul#menu-main-menu li a:hover,.product_sub_menu1 ul#menu-main-menu li a:hover,.product_sub_menu2 ul#menu-main-menu li a:hover,.product_sub_menu4 ul#menu-main-menu li a:hover {
    color: #cdb460;
}
    img#search-imag2 {
    margin-top: 10px;
}
    div#top_header {
    position: relative;
}
div#top_header.sticky {
    position: fixed;
    width: 100%;
    z-index: 9999;
    top: 0;
    transition: .2s;
}
    .menu-item-has-children:hover .sub-menu {
    display: block;
}
.menu-item-has-children:hover a {
    border-bottom: 2px solid #cdb460;
}
	.mobile_section{display:none;}
}
.sticky .product_sub_menu{top: 77px !important;}
@media screen and (max-width:1211px){
    .mobile_nav .subscribe-m a {
    font-family: 'Montserrat';
    font-size: 20px;
    font-weight: 400;
}
    .subscribe-m {
    border-top: 2px solid #fff;
}
    .viewall-m img, .mobile_nav .download-m img{margin-right:10px;}
    .viewall-m a, .mobile_nav .download-m a{ display: flex;
    align-items: center;}
   
    .download-m, .viewall-m,.mobile_nav .viewall-m a, .mobile_nav .download-m a{
        border-bottom: 0 !important;
    }
    .stellarnav.mobile > ul > li > a{
        font-weight: 400 !important;
    }
    .subscribe-m {
        background: #082742;
        text-align: center;
}
    .viewall-m img {
    width: 24px;
}
    .mobile_nav .viewall-m a,.mobile_nav .download-m a,  .mobile_nav .subscribe-m a {
    color: #fff !important;
}
    .download-m,.viewall-m {
    background: #082742;
}
    .image_search_list img {
    margin-top: 10px;
}
input[type="search"]::-webkit-search-decoration, input[type="search"]::-webkit-search-cancel-button, input[type="search"]::-webkit-search-results-button, input[type="search"]::-webkit-search-results-decoration {
    display: none;
}
    .main_menu, .main_menu1, .main_menu2, .main_menu3{
        display:none;
    }
    .hide_form {
    -webkit-animation: fadeOutTop 1s cubic-bezier(.77,0,.175,1) 1;
    animation: fadeOutTop 1s cubic-bezier(.77,0,.175,1) 1;
}
.hide_form.open-s {
    background: #fff;
    opacity: 1 !important;
    -webkit-animation: fadeInTop 1s cubic-bezier(.77,0,.175,1) 1;
    animation: fadeInTop 1s cubic-bezier(.77,0,.175,1) 1;
}
button.et_pb_menu__icon.et_pb_menu__close-search-button1{
background: transparent !important;
    border: none !important;
    outline: none;
}
button.et_pb_menu__icon.et_pb_menu__close-search-button1:after{
content: "M";
    font-size: 1.7em;
    font-family: ETmodules;
}
    /* .product_sub_menu2 ul#menu-about-harvest li a:after {
    display: none !important;
} */
li#menu-item-50064 {
    position: relative;
}
li#menu-item-50064 a:before{
    content: "\f078" !important;
    font-family: 'FontAwesome';
    font-weight: 400;
	font-size: 12px;
    position: relative;
    left: 4px;
	color:#cdb460;
}
    ul.sub-menu {
    padding-top: 0 !important;
    margin-top: 0 !important;
    border-top: 1px solid #9999996b !important;
}
li.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.menu-item-50007.has-sub{border-bottom:0 !important;}
    li.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.menu-item-49982.has-sub.open ul li,li.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.menu-item-49995.has-sub.open ul li,li.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.menu-item-50002.has-sub.open ul li,li.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.menu-item-50007.has-sub.open ul li  {
    border-bottom: none !important;

}
li.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.menu-item-49982.has-sub.open ul, li.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.menu-item-49995.has-sub.open ul{
    border-top:1px solid #999 !important;
    padding-top:0 !important;
    margin-top:0 !important;
}
.menu-item-49948.has-sub.open ul.sub-menu li {
    border-bottom: 1px solid #99999926!important;
}
input#sm::placeholder {
    color: #000 !important;
}
input#sm {
    width: 100%;
    color: #000 !important;
    border: none;
}

    .hide_form.open-s {
    display: block;
    width: 100%;
    position: absolute;
    width: 100%;
    background: #fff!important;
    padding: 10px;
    z-index: 9999;
    margin-top: 2%;
    transition: .2s;
    top: 13px;
}
/* input#sm {
    width: 250px;
    border: none;
    padding: 10px;
} */
button.button.button-default {
    background: #000;
    color: #fff;
}
    ul.sub-menu li {
    border-bottom: none;
}
    .mobile_nav ul li a{color:#000 !important;}
    .mobile_nav ul li {
        padding: 0;
    border-bottom: 1px solid #9999;
}
    .mobile_section {
    padding: 2.5% 0;
}
    .mobile_logo img {
    width: 60%;
}
	.desktop_view_only{
		display:none;
	}
	.mobile_list {
    display: flex;
    align-items: center;
}
.mobile_logo {
    width: 65%;
    text-align:center;
}
.mobile_search {
    width: 15%;
}
.menu_mobile {
    width: 15%;
}
.hamburger {
    display: block;
    position: absolute;
    cursor: pointer;
    right: 5%;
    top: 50%;
    transform: translate(-5%,-50%);
    z-index: 2;
    transition: all .7s ease;
    z-index: 0;
}
.hamburger div {
    width: 30px;
    height: 2px;
    background: #000;
    margin: 5px;
    transition: all .3s ease;
}
.menu_mobile {
    position: relative;
}
/* .mobile_nav ul#menu-new-menu-1 {
    z-index: 999;
    background:#f4f4f4;
    position: fixed;
    opacity: 1;
    left: 0;
    height: 100%;
    overflow: scroll;
    width: 100%;
    flex-direction: column;
   clip-path: circle(26px at 90% -20%); 
   -webkit-clip-path: circle(26px at 90% -10%);
    transition: all 1s ease-out;
    pointer-events: none;
    top: 60px;
} */
a.menu-toggle {
    opacity: 0;
}
.stellarnav.dark.right.mobile {
    background: transparent;
}
.lang_sec {
    display: none;
}
/* .mobile_nav.open ul#menu-new-menu-1 {
    -webkit-clip-path: circle(1330px at 58% -10%);
    pointer-events: all;
} */
span.newSpan:before {
    border: solid #000;
    border-width: 0 2px 2px 0;
    display: inline-block;
    padding: 3px;
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    content: "";
    position: absolute;
    right: 8px;
    top: 3px;
}
span.newSpan {
    width: 30px;
    height: 30px;
    display: inline-block;
    position: absolute;
    float: right;
    left: 0;
    right: 0;
    margin-left: auto;
}
.menu-item-has-children a:after{
    content:none !important
}
ul.sub-menu.slow1 {
    display: block;
    left: 0 !important;
    width: 100%;
    border-top: 0 !important;
    position: relative !important;
}
.menu_open ul.sub-menu {
    left: 0 !important;
    width: 100%;
    border-top: 0 !important;
    position: relative !important;
}
.menu_open .sub-menu {
    display: block;
}
.mobile_nav ul#menu-new-menu-1 {
    z-index: 999;
    background: #f4f4f4 !important;
    max-width: 100%;
}
.stellarnav.mobile.right > ul, .stellarnav.mobile.left > ul{
    top: 87px !important;
}
span.icon-plus:before {
    border: solid #000 !important;
    border-width: 0 2px 2px 0 !important;
    display: inline-block;
    padding: 3px;
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg) !important;
    content: "";
    position: absolute;
    right: 8px !important;
    /* top: 50px !important; */
    width: auto !important;
}
span.icon-plus:after{
display:none !important;
}
a.close-menu.full {
    display: none !important;
}
ul.sub-menu {
    background: #fff !important;
    border-top: 0;
}
ul.sub-menu li{
    border-bottom:none !important;
}
.stellarnav li.open > a.dd-toggle .icon-plus:before {
    -webkit-transform: rotate(220deg);
    -ms-transform: rotate(220deg);
    -o-transform: rotate(220deg);
    transform: rotate(220deg) !important;
}
.stellarnav li.open > a.dd-toggle .icon-plus {
    -webkit-transform: inherit !important;
    -ms-transform: inherit !important;
    -o-transform: inherit !important;
    transform: inherit !important;
}
div#top_header_mobile {
    position: relative;
}
div#top_header_mobile.sticky {
    position: fixed;
    width: 100%;
    z-index: 9999;
    background: #fff;
}
.image_search_list {
    padding-left: 15px;
}
.hide_form {
    display: none;
}
}
.borchure {
    background: #082742;
    display: flex;
    align-items: center;
    padding: 2% 0px;
    color: #fff;
}
.borchure .container {
    display: flex;
}
.file_one, .file_two {
    display: flex;
    align-items: center;
}
.file_one img, .file_two img{
padding-right:10px;
}
.file_two {
    padding-left: 10%;
}
.file_two a {
    padding: 0 !important;
    color: #fff !important;
    display: flex;
    align-items: center;
    border:none !important;
}
.file_one a{
    padding: 0 !important;
    color: #fff !important;
    display: flex;
    align-items: center;
    border:none !important;
}
.file_two a:after, .file_one a:after{
    display:none !important;
}
/* .logged-in ul#menu-new-menu li a:not(.sub-menu li a){
    padding: 31px 5px 24px 5px !important; 
} */
.list_lang li:first-child:after {
    content: "|";
    position: relative;
    left: 8px;
    color: #bbb;
    font-size: 15px;
    top: 2px;
}
.product_sub_menu ul#menu-main-menu:hover .sub-menu,.product_sub_menu1 ul#menu-main-menu:hover .sub-menu,.product_sub_menu2 ul#menu-main-menu:hover .sub-menu,.product_sub_menu3 ul#menu-main-menu:hover .sub-menu {
    border-top: none !important;
}
button.et_pb_menu__icon.et_pb_menu__close-search-button:after {
    content: "M";
    font-size: 1.7em;
    font-family: ETmodules;
}
.flex_searc{
    display:flex;
    align-items: center;
    padding: 10px 0;
}
form.search-form {
    width: 100%;
}
.novisbal_search {
    -webkit-animation: fadeOutTop 1s cubic-bezier(.77,0,.175,1) 1;
    animation: fadeOutTop 1s cubic-bezier(.77,0,.175,1) 1;
}
.novisbal_search.addedClass {
    background: #fff;
    opacity: 1 !important;
    -webkit-animation: fadeInTop 1s cubic-bezier(.77,0,.175,1) 1;
    animation: fadeInTop 1s cubic-bezier(.77,0,.175,1) 1;
}
@keyframes fadeInTop{
0%{opacity:0;webkit-transform:translatey(-60%);transform:translatey(-60%);}
100%{opacity:1;transform:translatey(0);transform:translatey(0);}
}
@keyframes fadeInBottom{
0% {opacity: 0;
    -webkit-transform: translatey(60%);
    transform: translatey(60%);
}
100% {
    opacity: 1;
    -webkit-transform: translatey(0);
    transform: translatey(0);
}
}
@keyframes fadeOutBottom{
    0% {
    opacity: 1;
    -webkit-transform: translatey(0);
    transform: translatey(0);
}
100% {
    opacity: 0;
    -webkit-transform: translatey(60%);
    transform: translatey(60%);
}
}
.menu_list,.search_visible{
    -webkit-animation: fadeInBottom 1s cubic-bezier(.77,0,.175,1) 1;
    animation: fadeInBottom 1s cubic-bezier(.77,0,.175,1) 1;
}

.header_list.addedClass .menu_list,.header_list.addedClass .search_visible{
    opacity: 0;
    -webkit-animation: fadeOutBottom 1s cubic-bezier(.77,0,.175,1) 1;
    animation: fadeOutBottom 1s cubic-bezier(.77,0,.175,1) 1;
}
.borchure svg path {
    fill: #fff;
}
.file_one a, .file_two a {
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 400 !important;
    font-size: 16px !important;
    line-height: 22px !important;
    display: flex;
    align-items: center;
    color: #FFFFFF !important;
    margin-left: 20px;
}
.file_one:hover svg path,.file_two:hover svg path {
    fill: #B19846;
}
.menu_fea img {
    margin: 0 18px;
}
html body .menu_fea span a {
    font-size: 14px !important;
    line-height: 19px !important;
    color: #666666 !important;
    display: flex;
    align-items: center;
    font-weight: 400 !important;
}
.menu_fea span {
    display: flex;
    max-width: 400px;
    align-items: center;
    margin-bottom: 26px;
    font-weight: 500 !important;
    font-size: 14px;
    line-height: 19px;
    color: #666666 !important;
    display: flex;
    align-items: center;
}
.menu_fea span svg {
    margin-left: 6px;
}
.menu_fea span a:hover svg path {
    fill: #B19846;
}
.subm_menu a.no_arrow:after{content:"" !important;}
</style>
<script>
    $(document).ready(function() {
  $("button.button.button-default").click(function() {
    $(".novisbal_search").addClass("addedClass");
    $(".header_list").addClass("addedClass");
  });
  $(".et_pb_menu__close-search-button1").click(function() {
    
    $(".hide_form ").removeClass("open-s");
});
  $(".et_pb_menu__close-search-button").click(function() {
    $(".novisbal_search").removeClass("addedClass");
    $(".header_list").removeClass("addedClass");
  });
});
$( document ).ready(function() {
    $('.image_search_list').click(function(){
        $('.hide_form').toggleClass("open-s");
    });
$(".hamburger").click(function(){
    $('.hamburger').toggleClass("toggle_m");
    $('.custom_header').toggleClass("change");
    $('.mobile_nav').toggleClass("open");
});
});
$( document ).ready(function() {
$('.mega_menu_custom').hover(function(){
$('.product_sub_menu').addClass("selected");
}, function(){
$('.product_sub_menu').removeClass("selected");
});
$('.menu-item-49950').hover(function(){
$('.product_sub_menu1').addClass("selected1");
}, function(){
$('.product_sub_menu1').removeClass("selected1");
});
$('.menu-item-49969').hover(function(){
$('.product_sub_menu2').addClass("selected2");
}, function(){
$('.product_sub_menu2').removeClass("selected2");
});
$('.menu_media').hover(function(){
$('.product_sub_menu3').addClass("selected3");
}, function(){
$('.product_sub_menu3').removeClass("selected3");
});

$("#search-imag2").click(function(){
 $("#s").toggleClass("show_line");
});
});
$(window).on('load', function() {
$(".product_menu").append('<div class="product_sub_menu"><div class="main_menu"><div class="menu-soft-right">'+ $("div#class_none").html()+'</div></div><div class="borchure"><div class="container"><div class="file_one"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">  <path fill-rule="evenodd" clip-rule="evenodd" d="M16 29.7931C23.6177 29.7931 29.7931 23.6177 29.7931 16C29.7931 8.38228 23.6177 2.2069 16 2.2069C8.38228 2.2069 2.2069 8.38228 2.2069 16C2.2069 23.6177 8.38228 29.7931 16 29.7931ZM16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32Z" fill="#BEA140"></path>  <path d="M23.0196 24.1627H8.75969C8.43488 24.1627 8.16553 23.8933 8.16553 23.5685C8.16553 23.2437 8.43488 22.9744 8.75969 22.9744H23.0196C23.3444 22.9744 23.6138 23.2437 23.6138 23.5685C23.6138 23.8933 23.3444 24.1627 23.0196 24.1627Z" fill="#BEA140"></path>  <path d="M10.8195 12.7776H9.55192C9.1162 12.7776 8.7597 13.1341 8.7597 13.5698V20.3987C8.7597 20.8344 9.1162 21.1909 9.55192 21.1909H10.8195C11.2552 21.1909 11.6117 20.8344 11.6117 20.3987V13.5698C11.6117 13.1262 11.2552 12.7776 10.8195 12.7776Z" fill="#BEA140"></path>  <path d="M16.5228 10.2524H15.2553C14.8195 10.2524 14.463 10.6089 14.463 11.0447V20.4008C14.463 20.8365 14.8195 21.193 15.2553 21.193H16.5228C16.9585 21.193 17.315 20.8365 17.315 20.4008V11.0447C17.315 10.6089 16.9585 10.2524 16.5228 10.2524Z" fill="#BEA140"></path>  <path d="M22.2277 7.72412H20.9602C20.5245 7.72412 20.168 8.08062 20.168 8.51634V20.3996C20.168 20.8354 20.5245 21.1918 20.9602 21.1918H22.2277C22.6635 21.1918 23.02 20.8354 23.02 20.3996V8.51634C23.02 8.08062 22.6635 7.72412 22.2277 7.72412Z" fill="#BEA140"></path>  </svg><a href=""><span>View All Products Daily Price</span></a></div><div class="file_two"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">  <path fill-rule="evenodd" clip-rule="evenodd" d="M16 29.7931C23.6177 29.7931 29.7931 23.6177 29.7931 16C29.7931 8.38228 23.6177 2.2069 16 2.2069C8.38228 2.2069 2.2069 8.38228 2.2069 16C2.2069 23.6177 8.38228 29.7931 16 29.7931ZM16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32Z" fill="#EEEEEE"></path>  <path d="M15.8897 7.50342C16.1165 7.50342 16.334 7.59352 16.4944 7.75389C16.6547 7.91427 16.7448 8.13178 16.7448 8.35859V17.4114L18.7057 15.4505C18.867 15.2948 19.083 15.2086 19.3073 15.2105C19.5315 15.2125 19.746 15.3024 19.9045 15.461C20.0631 15.6195 20.153 15.834 20.155 16.0582C20.1569 16.2824 20.0707 16.4985 19.915 16.6597L16.4943 20.0804C16.3339 20.2408 16.1164 20.3308 15.8897 20.3308C15.6629 20.3308 15.4454 20.2408 15.2851 20.0804L11.8644 16.6597C11.7827 16.5809 11.7175 16.4865 11.6727 16.3822C11.6279 16.2778 11.6043 16.1656 11.6033 16.0521C11.6023 15.9385 11.624 15.8259 11.667 15.7208C11.71 15.6157 11.7735 15.5202 11.8538 15.4399C11.9341 15.3596 12.0295 15.2961 12.1346 15.2531C12.2397 15.2101 12.3523 15.1885 12.4659 15.1895C12.5794 15.1905 12.6917 15.2141 12.796 15.2589C12.9003 15.3037 12.9947 15.3689 13.0736 15.4505L15.0345 17.4114V8.35859C15.0345 8.13178 15.1246 7.91427 15.285 7.75389C15.4453 7.59352 15.6629 7.50342 15.8897 7.50342ZM9.90345 20.331C10.1303 20.331 10.3478 20.4211 10.5081 20.5815C10.6685 20.7419 10.7586 20.9594 10.7586 21.1862V22.8965H21.0207V21.1862C21.0207 20.9594 21.1108 20.7419 21.2712 20.5815C21.4315 20.4211 21.6491 20.331 21.8759 20.331C22.1027 20.331 22.3202 20.4211 22.4806 20.5815C22.6409 20.7419 22.731 20.9594 22.731 21.1862V22.8965C22.731 23.3501 22.5508 23.7852 22.2301 24.1059C21.9093 24.4267 21.4743 24.6069 21.0207 24.6069H10.7586C10.305 24.6069 9.86998 24.4267 9.54923 24.1059C9.22848 23.7852 9.04828 23.3501 9.04828 22.8965V21.1862C9.04828 20.9594 9.13838 20.7419 9.29875 20.5815C9.45913 20.4211 9.67665 20.331 9.90345 20.331Z" fill="#EEEEEE"></path>  </svg><a href=""><span>Download Harvest ETFs Product Brochure</span></a></div></div></div></div>');
$(".insights_eductation").append('<div class="product_sub_menu1"><div class="main_menu1"><div class="menu-soft-right1">'+ $("div#class_none1").html()+'</div></div></div>');
$(".about_harves").append('<div class="product_sub_menu2"><div class="main_menu2"><div class="menu-soft-right2">'+ $("div#class_none2").html()+'</div></div></div>');
$(".menu_media").append('<div class="product_sub_menu3"><div class="main_menu3"><div class="menu-soft-right3">'+ $("div#class_none3").html()+'</div></div></div>');
});
</script>

<header id="custom_header">
<div class="menu-soft-right" id="class_none" style="display:none;"><?php $new_var= wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_class'=>'subm_menu' ) ); ?></div>
<div class="menu-soft-right" id="class_none1" style="display:none;"><?php $new_var= wp_nav_menu( array( 'theme_location' => 'insigts-learing', 'menu_class'=>'subm_menu') ); ?></div>
<div class="menu-soft-right" id="class_none2" style="display:none;"><?php $new_var= wp_nav_menu( array( 'theme_location' => 'about-harvest', 'menu_class'=>'subm_menu') ); ?></div>
<div class="menu-soft-right" id="class_none3" style="display:none;">
<ul id="menu-menu-media" class="subm_menu">
<li><a href="">In The News</a>
<?php
if ( is_active_sidebar( 'media_submenu_one' ) ) : ?>
<div id="secondary" class="widget-area" role="complementary">
<?php dynamic_sidebar( 'media_submenu_one' ); ?>
</div>
<?php endif; ?>
</li>
<li><a href="">TV Interviews</a>
<?php
if ( is_active_sidebar( 'media_submenu_two' ) ) : ?>
<div id="secondary" class="widget-area" role="complementary">
<?php dynamic_sidebar( 'media_submenu_two' ); ?>
</div>
<?php endif; ?>
</li>
<li><a href="">Press Releases</a>
<?php
if ( is_active_sidebar( 'media_submenu_three' ) ) : ?>
<div id="secondary" class="widget-area" role="complementary">
<?php dynamic_sidebar( 'media_submenu_three' ); ?>
</div>
<?php endif; ?>
</li>
<li><a href="" class="no_arrow">Media Contact</a>
</li>
</ul>
</div>
<div class="lang_sec">
<div class="list_lang">
<?php
if ( is_active_sidebar( 'header-lang' ) ) : ?>
<div id="secondary" class="widget-area" role="complementary">
<?php dynamic_sidebar( 'header-lang' ); ?>
</div>
<?php endif; ?>
</div></div>
<div class="shap desktop_view_only" id="top_header">
<div class="container">
	<div class="header_list">
		<div class="logo_head">
		<a href="<?php echo site_url();?>" class="ec-logo ">
                        <?php $custom_logo_id = get_theme_mod('custom_logo');
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        ?>
                        <img width="210" height="93" src="<?php echo $image[0];?>" alt="harveste Logo"width="210" height="93" class="no_lz">
                 </a>
		</div>
		<!-- logo -->
		<div class="menu_list">
		<nav class="main-navigation">
         <?php wp_nav_menu( array( 'theme_location' => 'new-menu', 'container_class' => '', 'menu_class'=>'header_menu nav-links') ); ?>
        </nav>
		</div>
		<div class="search_visible">
        <div class="search-form-button">
				  <!-- <img id="search-imag2" src="https://harvestetfsdev.wpengine.com/wp-content/uploads/2023/07/Search-Hover.png" alt="search"> -->
                     <button type="type" class="button button-default">Search</button>
                  </div>
		</div>
    
	</div>
    <div class="novisbal_search">
        <div class="flex_searc">
        <form role="search" method="get" class="search-form" action="/">
               <div class="clearfix1">
                  <div class="search-form-input">
                     <input type="search" value="" name="s" id="s" placeholder="search" aria-label="Search for:" required>
                  </div>
                  <button type="button" class="et_pb_menu__icon et_pb_menu__close-search-button"></button>
               </div>
</div>
  </form>
 
        </div>
</div>

</div>
<div class="mobile_section" id="top_header_mobile">
	<div class="mobile_list">
        
<div class="mobile_search">
<div class="image_search_list"><img id="search-imag2" src="https://harvestetfsdev.wpengine.com/wp-content/uploads/2023/07/Search-Hover.png" alt="search"></div>
<div class="hide_form">
		<form role="search" method="get" class="search-form" action="/">
               <div class="clearfix1">
                  
                  
				  <div class="search-form-input">
                     <input type="search" value="" name="s" id="sm" aria-label="Search for:" placeholder="search..." required>
                  </div>
                  <div class="search-form-button">
				  
                  <button type="button" class="et_pb_menu__icon et_pb_menu__close-search-button1"></button>
                  </div>
               </div>
  </form>
</div>
</div>
<div class="mobile_logo">
<a href="<?php echo site_url();?>" class="ec-logo ">
                        <?php $custom_logo_id = get_theme_mod('custom_logo');
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        ?>
                        <img width="210" height="93" src="<?php echo $image[0];?>" alt="harveste Logo"width="210" height="93" class="no_lz">
                 </a>
</div>
<div class="menu_mobile">
<div class="hamburger"><div class="bars1"></div><div class="bars2"></div><div class="bars3"></div></div>
<div class="mobile_nav">
<?php wp_nav_menu( array( 'theme_location' => 'new-menu', 'container_class' => 'stellarnav', 'menu_class'=>'header_menu nav-links') ); ?>
</div>
</div>

	</div>
</div>
</header>
<script type="text/javascript" src="/wp-content/themes/Divi/js/stellarnav.min.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			jQuery('.stellarnav').stellarNav({
				theme: 'dark',
				breakpoint: 960,
				position: 'right'
			});
		});
    window.addEventListener('scroll', function (e) {
	var box = document.querySelector('#top_header');
	var x = window.scrollY;
	if (x >= 20) {
		box.classList.add("sticky");
	} else {
		box.classList.remove("sticky");
	}
});
window.addEventListener('scroll', function (e) {
	var box = document.querySelector('#top_header_mobile');
	var x = window.scrollY;
	if (x >= 20) {
		box.classList.add("sticky");
	} else {
		box.classList.remove("sticky");
	}
});
/*mega*/
$(window).on('load', function() {
// $(document).ready(function() {
jQuery(".mega_column:not(.hightled)").hover(
function () {
jQuery(this).toggleClass('active');
jQuery('.subm_menu').toggleClass('active');
}
);
// jQuery(".mega_columne:not(.hightled)").hover(
// function () {
// jQuery(this).toggleClass('active');
// jQuery('#menu-insigts-learing').toggleClass('active');
// }
// );
});
</script>
<div id="et-main-area">
	<?php
	/**
	 * Fires after the header, before the main content is output.
	 *
	 * @since 3.10
	 */
	do_action( 'et_before_main_content' );
	?>
