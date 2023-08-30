<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="<?= get_site_icon_url(); ?>" type="image/x-icon" />
	<link rel="shortcut icon" href="<?= get_site_icon_url(); ?>" type="image/x-icon" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<?php
		$gtm_head_tag = get_field('gtm_head_tag', 'option');
		echo $gtm_head_tag;
	?>
	<?php wp_head(); ?>
	<?php if(is_front_page()) { ?>
		<style>
			html body .Box_header {
    position: revert !important;
}
li#menu-item-22862 .sub-menu {
	padding-bottom: 8px !important;
}
.sticky {
    top: 0;
    position: fixed;
    background: #ffff;
    z-index: 1111;
    box-shadow: 0 0 10px 5px rgb(0 0 0 / 10%);
    width: 100%;
}
		</style>
<?php } ?>
	<style>
		@media screen and (min-width:1200px) {
			.Box_header {
    position: absolute !important;
}
		}

		.below-desk ul#menu-header-below li a:hover {
    text-transform: uppercase;
}
.below-desk ul#menu-header-below li a:hover {
	/* font-size:14px; */
}
ul.sub-menu li a {
	text-transform: uppercase;
	font-size:13px !important;
}
.below-desk ul#menu-header-below li a:hover {
    font-weight: 500 !important;
	color: #000;
}
.soltech-head a {
	font-weight:400 !important;
}
/* ul.sub-menu li a:hover {
    font-weight: 600 !important;
} */
@media screen and (min-width:1400px) and (max-width:1535px) {
	li#menu-item-22862 .sub-menu {
    width: 110% !important;
}
}

@media screen and (min-width:1280px) and (max-width:1399px) {
	li#menu-item-22862 .sub-menu {
    width: 115% !important;
}
}
ul#menu-header-menuaabout li a:hover {
    font-weight: 500;
	color:#000;
}
		.menu-soft-left, .menu-soft-left1,.menu-soft-left2 {
    display: none;
}
		/* .below-desk ul#menu-header-below li a:hover{
			font-weight:600;} */
		.soltech-head {
			display: flex;
			justify-content: space-between;
			width: 100%;
			padding-top:10px;
		}
		header .Box_header .Container_header{
			justify-content : end;
		}
		.soltech-head ul {
			display: flex;
			padding-top: 10px;
			list-style: none;
			font-size: 14px;
			font-weight: 400;
			color: #6D6E71;
			padding-left: 0px;
			margin-bottom:0px;
		}
		.soltech-head ul li{
    		padding: 0px 30px;
		}
		.soltech-head a {
			color: #6D6E71;
			font-weight:400;
		}
		.soltech-menu {
			width: 70%;
			display: flex;
			justify-content: end;
		}
		.soltech-logo {
			width: 30%;
		}
		.insight-menu .sub-menu {
			display: none;
		}
		.about-menu .sub-menu{
			display:none;
		}
		.career-menu .sub-menu{
			display:none;
		}
		@media screen and (min-width:1601px) and (max-width:1745px){
			.menu-soft-right3{width:17% !important;}
		}
		header .Box_header .soltech-head .Form form{width:100%;position:relative;}
		header .Box_header .soltech-head .Form form input{width:100%;font-size:16px;border:0;background-color:#F2F2F2;padding:10px;padding-right:60px;font-size:14px;line-height:1;font-family:"Montserrat";color:#626366;outline:none;}
		@media (min-width: 1800px){
		.insight-menu:hover span.newSpan:before {
			transform: rotate(225deg);
			-webkit-transform: rotate(225deg);
			top: 0.5rem;
		}
		.insight-menu:hover .sub-menu {
			display: block;
		}
		}
		@media (min-width: 1200px){
		.insight-menu:hover .sub-menu{
			z-index: 2222;
			padding-bottom: 15px;
			position: absolute;

			background-color: #fff !important;
			box-shadow: 0px 15px 20px -6px rgb(0 0 1 / 60%);
		}
		header .Box_header .soltech-head .Form form input{border:1px solid #f2f2f2;}

		li.insight-menu.active1 span.newSpan:before {
				transform: rotate(225deg);
				-webkit-transform: rotate(225deg);
				top: 0.5rem;
		}

		.insight-menu .sub-menu{
			display:none;
		}

		.insight-menu span.newSpan:before {

			transform: rotate(45deg);
			-webkit-transform: rotate(45deg);

		}

		}
		header .Box_header .soltech-head .Form form button{position:absolute;top:0;right:0;width:50px;height:100%;border:0;background-color:#A4D65E;-webkit-transition:background-color 300ms  ease-in-out;transition:background-color 300ms  ease-in-out;cursor:pointer;}
		header .Box_header .soltech-head .Form form button:hover{background-color:#8DC63F;}
		header .Box_header .soltech-head .Form form button svg{width:32px;height:24px;}
		header .Box_header .soltech-head .Form form button svg path{fill:#fff;}
		header .Box_header .soltech-head .Results_search{border:none;}
		header .Box_header .soltech-head .Form.Form_with_ajax {
			padding-top: 0px;
		}
		header .Box_header .soltech-headul .Results_search {
			padding: 0px;
		}

		.insight-menu span.newSpan:before {
			border: solid #000;
			border-width: 0 2px 2px 0;
			display: inline-block;
			padding: 3px;
			transform: rotate(45deg);
			-webkit-transform: rotate(45deg);
			content: "";
			position: absolute;
			right: 26rem;
			top: 0.3rem;
		}
		.insight-menu span.newSpan {
			width: 60px;
			height: 60px;
			display: inline-block;
			position: absolute;
			float: right;
			left: 0;
			right: 0;
			margin-left: auto;
			z-index: 99999;
		}


		/* li#menu-item-22853:hover {
			background: #f2f2f2;
		} */
		.insight-menu .sub-menu li{
			padding-bottom: 5px ;
		}

		.sollogo-mob{
			display:none;
		}
		.solmenu-mob{
			display:none;
		}

		@media screen and (max-width:1199px) {
			ul#menu-header-menuaabout-1 {
    padding-bottom: 25px;
}
			li.insight-menu.active1 span.newSpan:before {
				transform: rotate(225deg);
				-webkit-transform: rotate(225deg);
				top: 0.5rem;
			}
			.insight-menu span.newSpan:before{
				right: -0.5rem;
				transform: rotate(45deg);
				-webkit-transform: rotate(45deg);
				padding: 2.5px;
			}
			ul.Sub_menu_one {
				background-color: #fff !important;
				box-shadow: 0px 15px 20px -6px rgb(0 0 1 / 60%);
				padding: 0px 10px !important;
			}
			.Sub_menu_two .Nav_item span, .Sub_menu_one .Nav_item span {
				color: #6D6E71 !important;
			}
			header .Box_header .Container_header .Menu .List_menu .Open_Level_one .Link_one, header .Box_header .Container_header .Menu .Sub_menu_one .Open_Level_one .Link_one, header .Box_header .Container_header .Menu .Sub_menu_two .Open_Level_one .Link_one {
				background-color: #F2F2F2 !important;
				border-bottom: 2px solid #A4D65E;
			}
			header .Box_header .Container_header .Menu .List_menu .Nav_item .Nav_link .Box_nav_link, header .Box_header .Container_header .Menu .Sub_menu_one .Nav_item .Nav_link .Box_nav_link, header .Box_header .Container_header .Menu .Sub_menu_two .Nav_item .Nav_link .Box_nav_link{
				padding-top:15px;
				padding-bottom:15px;
				font-size: 13px;
			}
			header .Box_header .Container_header .Menu .List_menu .Nav_item .Nav_link:hover .Box_nav_link {
				color: #6D6E71;
				font-size: 15px;
				font-weight: unset;
				font-family: 'Montserrat';
			}
			header .Box_header .Container_header .Menu .List_menu .Nav_item .Nav_link:hover {
				background-color: #fff;
			}
			header .Box_header .Container_header .Menu .List_menu .Open_Level_one .Link_one .Nav_link_one, header .Box_header .Container_header .Menu .Sub_menu_one .Open_Level_one .Link_one .Nav_link_one, header .Box_header .Container_header .Menu .Sub_menu_two .Open_Level_one .Link_one .Nav_link_one {
				color: #6D6E71;
				font-weight: 600;
			}
			.mobhide{
				display:none;
			}
			.mobsubhide{
				display:none;
			}
			li.mobsoft1 .Box_nav_link:before {
				content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/soft1.png);
				margin-right: 1rem;
			}
			li.mobsoft2 .Box_nav_link:before {
				content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/soft2.png);
				margin-right: 1rem;
			}
			li.mobsoft3 .Box_nav_link:before {
				content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/soft3.png);
				margin-right: 1rem;
			}
			li.mobsoft4 .Box_nav_link:before {
				content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/soft4.png);
				margin-right: 1rem;
			}
			li.mobsoft5 .Box_nav_link:before {
				content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/soft5.png);
				margin-right: 1rem;
			}
			li.mobsoft6 .Box_nav_link:before {
				content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/soft6.png);
				margin-right: 1rem;
			}
			li.mobsoft7 .Box_nav_link:before {
				content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/soft7.png);
				margin-right: 1rem;
			}
			li.mobsoft8 .Box_nav_link:before {
				content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/soft8.png);
				margin-right: 1rem;
			}
			li.mobsoft9 .Box_nav_link:before {
				content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/soft9.png);
				margin-right: 1rem;
			}
			li.mobstaff1 .Box_nav_link:before{
				content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/it3.png);
				margin-right: 1rem;
			}
			li.mobstaff2 .Box_nav_link:before{
				content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/it2.png);
				margin-right: 1rem;
			}
			li.mobstaff3 .Box_nav_link:before{
				content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/it1.png);
				margin-right: 1rem;
			}
			li.mobsales1 .Box_nav_link:before{
				content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/Salesforce-Service-Cloud-1.svg);
				margin-right: 1rem;
			}
			li.mobsales2 .Box_nav_link:before{
				content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/Salesforce-Sales-Cloud-Traced-1.svg);
				margin-right: 1rem;
			}
			li.mobsales3 .Box_nav_link:before{
				content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/Salesforce-Health-Cloud-Traced-1.svg);
				margin-right: 1rem;
			}
			li.mobsales4 .Box_nav_link:before{
				content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/Salesforce-Community-Cloud-Traced-1.svg);
				margin-right: 1rem;
			}
			li.mobsales5 .Box_nav_link:before{
				content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/Salesforce-Nonprofit-Success-Pack-Traced-1.svg);
				margin-right: 1rem;
			}
			li.mobsales6 .Box_nav_link:before{
				content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/Pardot-Traced-1.svg);
				margin-right: 1rem;
			}

			.soltech-head{
				display:none;
			}
			.sollogo-mob{
				display:block;
				width: 100%!important;
			}
			.solmenu-mob{
				display:block;
				width: 100%;
			}
			header .Box_header .Container_header {
				justify-content: space-between;
			}
			.solmenu-mob ul{
				padding-top: 0px;
				justify-content: space-around;
				font-size:13px;
				margin-right:12px;
			}
			.solmenu-mob ul li {
				padding: 0px 10px;
			}

			.insight-menu:hover .sub-menu{
				padding-top: 25px;
				display:none;
			}
			.insight-menu.active1 .sub-menu{
				display: block;
			}
			.insight-menu .sub-menu{
				display: none;
			}
			li.insight-menu.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.menu-item-22853 {
				position: relative;
			}
			.insight-menu .sub-menu{
				position: absolute;
				top: 100%;
				background: #fff;
				padding: 10px 20px;
				z-index: 9999;
				box-shadow: 0px 15px 20px -6px rgb(0 0 1 / 60%);
				text-align: left;
				width: max-content;
				padding-top: 20px !important;
			}
			.insight-menu .sub-menu li{    padding-left: 0 !important;
    padding-right: 0;}
	.career-menu ul.sub-menu.active{
	right: -0.5rem;
    padding: 5px;
    margin: 0px;
	width: max-content;
	}
	ul.sub-menu.active {
    display: block !important;
}
.career-menu .sub-menu li{    padding-left: 0 !important;
    padding-right: 0;}
		}

		header .Box_header .Container_header .Container_search{position:relative;margin-top:1px;padding:0 15px;}
		@media (min-width: 1200px){
		header .Box_header .Container_header .Menu .List_menu{align-items: center;}
		header .Box_header .Container_header .Menu .List_menu .Nav_item .Nav_link .Box_nav_link, header .Box_header .Container_header .Menu .Sub_menu_one .Nav_item .Nav_link .Box_nav_link, header .Box_header .Container_header .Menu .Sub_menu_two .Nav_item .Nav_link .Box_nav_link{
			padding-top:0px;
			padding-bottom:0px;
		}

		.search-solmob{display:none;}
		header .Box_header .Container_header .Container_search{padding:0;}
		}
		header .Box_header .Container_header .Container_search .Box{max-width:540px;margin-left:auto;margin-right:auto;}
		@media (min-width: 1200px){
		header .Box_header .Container_header .Container_search .Box{max-width:none;margin-left:none;margin-right:none;}
		}
		header .Box_header .Container_header .Container_search .Box .Icon{display:none;}
		@media (min-width: 1200px){
		header .Box_header .Container_header .Container_search .Box .Icon{display:block;margin-left:30px;padding-top:37.5px;padding-bottom:37.5px;-webkit-transition:padding-top 300ms ease-in-out,  padding-bottom 300ms ease-in-out;transition:padding-top 300ms ease-in-out,  padding-bottom 300ms ease-in-out;}
		header .Box_header .Container_header .Container_search .Box .Icon svg{width:16px;height:16px;cursor:pointer;}
		header .Box_header .Container_header .Container_search .Box .Icon svg path{fill:#626366;}
		}
		header .Box_header .Container_header .Container_search .Box .Form{margin-left:auto;margin-right:auto;width:100%;}
		@media (min-width: 1200px){
		header .Box_header .Container_header .Container_search .Box .Form{position:absolute;top:100%;right:0;min-width:330px;-webkit-transition:opacity 300ms ease-in-out;transition:opacity 300ms ease-in-out;display:none;}

		}
		header .Box_header .Container_header .Container_search .Box .Form form{width:100%;position:relative;}
		header .Box_header .Container_header .Container_search .Box .Form form input{width:100%;font-size:16px;border:0;background-color:#F2F2F2;padding:15px;padding-right:60px;font-size:14px;line-height:1;font-family:"Montserrat";color:#626366;outline:none;}
		@media (min-width: 1200px){
		header .Box_header .Container_header .Container_search .Box .Form form input{border:1px solid #A4D65E;}
		}
		header .Box_header .Container_header .Container_search .Box .Form form button{position:absolute;top:0;right:0;width:50px;height:100%;border:0;background-color:#A4D65E;-webkit-transition:background-color 300ms  ease-in-out;transition:background-color 300ms  ease-in-out;cursor:pointer;}
		header .Box_header .Container_header .Container_search .Box .Form form button:hover{background-color:#8DC63F;}
		header .Box_header .Container_header .Container_search .Box .Form form button svg{width:16px;height:16px;}
		header .Box_header .Container_header .Container_search .Box .Form form button svg path{fill:#fff;}
		.Results_search{background-color:#fff;border:1px solid #e3e3e3;border-top:none;border-bottom:none;overflow:auto;text-align:left;list-style:none;margin:0;padding:0;max-height:calc(100vh - 195px);}
		/* ul#menu-salesforce li:before {
			display: none;
		} */
		.menu-below-head ul li.belowmenu-contact a:hover {
			background-color: #3FA9F5;
		}
		@media screen and (max-width:1200px) {


		.search-solmob svg {
    			width: 30px;
		}
		.search-solmob .Icon {
			display: block !important;
		}

		}
		@media (max-width: 1199px){
			.Form.Form_with_ajax.opac {
			opacity: 1;
			}
			.Form.Form_with_ajax{
				opacity: 0;
			}
		}
		@media (max-width: 1200px){
		header .Box_header .Container_header .Container_search .Box .Form{position:absolute;top:190%;right:0;min-width:250px;-webkit-transition:opacity 300ms ease-in-out;transition:opacity 300ms ease-in-out;}

		}
		header .Box_header .Container_header .Container_search .Box .Form form{width:100%;position:relative;}
		header .Box_header .Container_header .Container_search .Box .Form form input{width:100%;font-size:16px;border:0;background-color:#F2F2F2;padding:15px;padding-right:60px;font-size:14px;line-height:1;font-family:"Montserrat";color:#626366;outline:none;}
		@media (max-width: 1200px){
		header .Box_header .Container_header .Container_search .Box .Form form input{border:1px solid #A4D65E;}
		}
		header .Box_header .Container_header .Container_search .Box .Form form button{position:absolute;top:0;right:0;width:50px;height:100%;border:0;background-color:#A4D65E;-webkit-transition:background-color 300ms  ease-in-out;transition:background-color 300ms  ease-in-out;cursor:pointer;}
		header .Box_header .Container_header .Container_search .Box .Form form button:hover{background-color:#8DC63F;}
		header .Box_header .Container_header .Container_search .Box .Form form button svg{width:16px;height:16px;}
		header .Box_header .Container_header .Container_search .Box .Form form button svg path{fill:#fff;}
		.Results_search{background-color:#fff;border:1px solid #e3e3e3;border-top:none;border-bottom:none;overflow:auto;text-align:left;list-style:none;margin:0;padding:0;max-height:calc(100vh - 195px);}


		/*menu below section start*/
		@media (max-width: 1199px){
			.below-desk {
				display: none;
			}
		}
		@media (min-width: 1200px){
			.above-desk{
				display:none;
			}
		}
		header .Box_header{border-bottom:none;}
		.menu-below-head ul{
			display: flex;
			list-style: none;
			justify-content: end;
			padding: 12px 0px;
			margin: 0px;
		}
		.menu-header-below-container{
			padding-left: 30px;
    		padding-right: 30px;
		}
		.menu-below-head ul li.belowmenu{
			padding-left: 2.5rem;
    		padding-right: 2.5rem;
			padding-top: 0.5rem;
			padding-bottom:1px;

		}
		.menu-below-head ul li.belowmenu a {
			color: #626366;
			font-weight: 400;
			font-size: 13px;
			font-family: 'Montserrat';
		}
		.menu-below-head ul li.belowmenu-contact {
			padding-left: 2.5rem;
		}
		/* .menu-below-head-section {
			padding-bottom: 1rem;
		} */
		@media screen and (min-width:600px) and (max-width:1199px) {
			header .Box_header .Container_header .Menu .Btn_primary_nav .Nav_link {
				width:fit-content;			}
		}
		.menu-below-head ul li.belowmenu-contact a{
			color: #fff;
			font-weight: 500 !important;
			font-size: 16px;
			font-family: 'Montserrat';
			background-color: #A4D65E;
			padding: 17px 25px;
		}
		.menu-below-head ul li.belowmenu-contact a:hover {
			font-weight: 500 !important;
    background-color: #8DC63F!important;
    color: #fff!important;
}

		#menu-item-22859:hover .downarrow, #menu-item-22860:hover .downarrow, #menu-item-22861:hover .downarrow, #menu-item-22862:hover .downarrow {
			transform: rotate(180deg);
		}
		#menu-item-22859 .downarrow, #menu-item-22860 .downarrow, #menu-item-22861 .downarrow, #menu-item-22862 .downarrow {
			transform: rotate(0deg);
		}
		/* .menu-below-head-section.below-desk {
			position: fixed;
			top: 115px;
			left: 0;
			width: 100%;
			background-color: #fff;
		} */
		/*software*/
		.menu-soft-common {
			display: flex;
			width: 100%;
			/* position: fixed; */
			position: relative;
			left: 25rem;
			right: 0;
			top: 0.5rem;
		}
		.menu-soft-right {
			width: 33%;
			margin: 0px;
			padding: 0px;
		}
		.menu-soft-left {
			width: 25%;
		}
		li#menu-item-22859:hover, li#menu-item-22860:hover, li#menu-item-22861:hover, li#menu-item-22862:hover {
			/* border-bottom: 2px solid #A4D65E; */
			background: #F2F2F2;
		}

		ul#menu-software {
			list-style: none;
			padding: 0px 40px !important;
    		padding-top: 30px !important;
			padding-bottom: 30px !important;
			/* padding: 0px; */
			margin: 0px;
			display: flex;
			background-color: #fff;
			box-shadow: 0 2px 20px 0 hsl(0deg 0% 51% / 15%);
			padding: 20px 20px;
			min-width: fit-content;
			flex-wrap: wrap;
			height: 300px;
			cursor: pointer;
			justify-content: flex-start;
		}
		ul#menu-software li {
			width: 50%;
			display: flex;
		}
		ul#menu-software li a{
			color: #6D6E71;
			font-size: 14px;
			font-weight: 400;
			font-family: 'Montserrat';
		}
		.menu-soft-left img {
			width: auto;
			height: 300px;
		}
		li#menu-item-22864:before {
			content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/soft1.png);
			margin-right: 1rem;
		}
		li#menu-item-22947:before {
			content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/soft2.png);
			margin-right: 1rem;
		}
		li#menu-item-22944:before {
			content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/soft3.png);
			margin-right: 0.7rem;
		}
		li#menu-item-22945:before {
			content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/soft4.png);
			margin-right: 0.7rem;
		}
		li#menu-item-22946:before {
			content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/soft5.png);
			margin-right: 1.1rem;
		}
		li#menu-item-22943:before {
			content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/soft6.png);
			margin-right: 0.8rem;
		}
		li#menu-item-22948:before {
			content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/soft7.png);
			margin-right: 0.7rem;
		}
		li#menu-item-22949:before {
			content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/soft8.png);
			margin-right: 0.6rem;
		}
		li#menu-item-22950:before {
			content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/soft9.png);
			margin-right: 0.6rem;
		}

		.menu-soft-cont {
			/* margin-top: 1rem; */
			position: absolute;
			left: 0;
			right: 0;
			overflow: hidden;
			width: 100%;
			text-transform: uppercase;
			display:none;
		}

		#menu-item-22859:hover .menu-soft-cont {
			display: block;
		}
		img#downarrow {
			left: 0.5rem;
			top: -0.1rem;
			position: relative;
			cursor: pointer;
			width: 12px;
		}
		@media screen and (min-width:1200px) and (max-width:1365px){
			.menu-soft-right {
    			width: 50%;
			}
			.menu-below-head ul li.belowmenu {
				padding-left: 0.3rem;
				padding-right: 2rem;
			}
		}
		@media screen and (min-width:1366px) and (max-width:1399px){
			.menu-below-head ul li.belowmenu {
				padding-left: 2rem;
				padding-right: 2rem;
			}
			.menu-soft-right {
    			width: 50%;
			}
		}
		@media screen and (min-width:1400px) and (max-width:1600px){
			.menu-below-head ul li.belowmenu {
				padding-left: 2rem;
				padding-right: 2rem;
			}
			.menu-soft-right {
    			width: 50%;
			}
		}
		@media screen and (min-width:1200px) and (max-width:1279px){
			.menu-soft-common{
				left: 4rem;
			}
		}
		@media screen and (min-width:1280px) and (max-width:1365px){
			.menu-soft-common{
				left: 8rem;
			}
		}
		@media screen and (min-width:1366px) and (max-width:1399px){
			.menu-soft-common {
				left: 6.5rem;
			}
		}
		@media screen and (min-width:1400px) and (max-width:1439px){
			.menu-soft-common{
				left: 9rem;
			}
		}
		@media screen and (min-width:1440px) and (max-width:1525px){
			.menu-soft-right {
				width:41% !important;
			}
			ul#menu-software {
				padding: 0px 27px!important;
				padding-top: 30px !important;
			}
			ul#menu-staffing {
				padding: 0px 30px!important;
			}
			.menu-soft-right1 {
				width: 23% !important;
			}
			.menu-soft-common{
				left: 11.3rem;
			}
		}

		@media screen and (min-width:1526px) and (max-width:1599px){
		.menu-soft-common{left: 17.4rem;}
		}
		@media screen and (min-width:1600px)and (max-width:1659px){
			.menu-soft-common{
				left: 21rem;
			}
			.menu-soft-common1 {
				left:40.5rem !important;
			}
			.menu-soft-common2 {
    left: 52rem !important;
}
.menu-soft-common3 {
    left: 73rem !important;
}
		}
		@media screen and (min-width:1660px) and (max-width:1700px) {
			.menu-soft-common1 {
					left: 41.2rem !important;
				}
				.menu-soft-common2 {
					left: 53.4rem !important;
				}
		}
		@media screen and (min-width:1660px)and (max-width:1800px){
		.menu-soft-common {
			left: 21rem;
		}
		}
		@media screen and (min-width:1800px) and (max-width:1879px) {
			.menu-soft-common {
				left: 29.7rem !important;
			}
			.menu-soft-common1 {
					left: 49.8rem !important;
				}
				.menu-soft-common2 {
				left: 62rem !important;
			}
		}
			@media screen and (min-width:1880px) and (max-width:1900px) {
				.menu-soft-common {
				left: 34.8rem !important;
			}
			.menu-soft-common1 {
				left:54.9rem !important;
			}
			.menu-soft-common2 {
				left: 67.2rem !important;
			}
			.menu-soft-common3 {
			left: 89.8rem !important;
					}
			}
		@media screen and (min-width:1800px){
		.menu-soft-common{left: 37.4rem;}
		}
		@media screen and (min-width:2560px) {
			.menu-soft-common1 {
				left: 97.5rem !important;
			}
			.menu-soft-common {
					left: 77.4rem !important;
				}
				.menu-soft-right {
    width: 24% !important;
				}
				.menu-soft-common2 {
					left:110rem !important;
				}
				.menu-soft-right2 {
					right:17% !important;
				}
				.menu-soft-common3 {
					left: 132.3rem !important;
				}
				.menu-soft-right3 {
				width: 11% !important;
				}
		}
		/*software-end*/

		/*staffing start*/
		.menu-soft-common1{display:flex;width:85%;position:relative;left:57.5rem;right:0;top: 0.5rem;}
		.menu-soft-right1{width:19%;margin:0px;padding:0px;}
		.menu-soft-left1{width:25%;}
		ul#menu-staffing{list-style:none;padding:0px 40px;padding-top:30px!important;padding-bottom:15px!important;margin:0px;background-color:#fff;box-shadow:0 2px 20px 0 hsl(0deg 0% 51% / 15%);padding:20px 10px;min-width:fit-content;flex-wrap:wrap;height:200px;cursor:pointer;}
		ul#menu-staffing li{width:100%;padding-bottom: 1rem;display: flex;}
		ul#menu-staffing li a{color:#6D6E71;font-size:14px;font-weight:400;font-family:'Montserrat';}
		.menu-soft-left1 img{width:auto;height:200px;}
		li#menu-item-22951:before{content:url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/it3.png);margin-right:1rem;}
		li#menu-item-22952:before{content:url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/it2.png);margin-right:1rem;}
		li#menu-item-22953:before{content:url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/it1.png);margin-right:1rem;}

		.menu-soft-cont1{position:absolute;left:0;right:0;overflow:hidden;width:100%;display:none;text-transform: uppercase;}
		#menu-item-22860:hover .menu-soft-cont1 {
			display: block;
		}

		@media screen and (min-width:1200px) and (max-width:1243px){
		.menu-soft-right1{width:22%;}
		}
		@media screen and (min-width:1244px) and (max-width:1600px){
		.menu-soft-right1{width:26%;}
		}
		@media screen and (min-width:1200px) and (max-width:1279px){
		.menu-soft-common1{left:20.55rem;}
		}
		@media screen and (min-width:1280px) and (max-width:1365px){
		.menu-soft-common1{left:25.5rem;}
		}
		@media screen and (min-width:1366px) and (max-width:1399px){
		.menu-soft-common1{left: 24.5rem;}
		}
		@media screen and (min-width:1400px) and (max-width:1439px){
		.menu-soft-common1{left: 27rem;}
		}
		@media screen and (min-width:1440px) and (max-width:1535px){
		.menu-soft-common1{left:30.5rem;}
		}
		@media screen and (min-width:1600px)and (max-width:1800px){
		.menu-soft-common1{left: 39.5rem;}
		}
		@media screen and (min-width:1536px)and (max-width:1599px){
		.menu-soft-common1{left: 36.5rem;}
		}

		/*staffing end*/

		/*salesforce start*/
		.menu-soft-common2{display:flex;width:100%;position:relative;left:70rem;right:0;top: 0.5rem;}
		.menu-soft-right2{width:20%;margin:0px;padding:0px;}
		.menu-soft-left2{width:25%;}

		ul#menu-salesforce{list-style:none;padding:0px 40px!important;padding-bottom:15px!important;padding-top:25px!important;margin:0px;background-color:#fff;box-shadow:0 2px 20px 0 hsl(0deg 0% 51% / 15%);padding:20px 10px;min-width:fit-content;flex-wrap:wrap;height:331px;cursor:pointer;}
		ul#menu-salesforce li{width:100%;padding-bottom: 0.7rem;display: flex;}
		ul#menu-salesforce li a{color:#6D6E71;font-size:14px;font-weight:400;font-family:'Montserrat';}
		.menu-soft-left2 img{width:auto;height:300px;}

		li#menu-item-22954:before{content:url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/Salesforce-Service-Cloud-1.svg);margin-right:1rem;}
		li#menu-item-22955:before{content:url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/Salesforce-Sales-Cloud-Traced-1.svg);margin-right:1rem;}
		li#menu-item-22956:before{content:url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/Salesforce-Health-Cloud-Traced-1.svg);margin-right:1rem;}
		li#menu-item-22957:before{content:url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/Salesforce-Community-Cloud-Traced-1.svg);margin-right:1rem;}
		li#menu-item-22958:before{content:url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/Salesforce-Nonprofit-Success-Pack-Traced-1.svg);margin-right:1rem;}
		li#menu-item-22959:before{content:url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/Pardot-Traced-1.svg);margin-right:1rem;}

		.menu-soft-cont2{position:absolute;left:0;right:0;overflow:hidden;width:100%;display:none;text-transform: uppercase;}
		#menu-item-22861:hover .menu-soft-cont2 {

			display: block;
		}
		@media screen and (min-width:1200px) and (max-width:1600px){
		.menu-soft-right2{width:30%;}
		}
		@media screen and (min-width:1200px) and (max-width:1279px){
		.menu-soft-common2{left:30.5rem;}
		}
		@media screen and (min-width:1280px) and (max-width:1365px){
		.menu-soft-common2{left:35.5rem;}
		}
		@media screen and (min-width:1366px) and (max-width:1439px){
		.menu-soft-common2{    left: 39rem;}
		}
		@media screen and (min-width:1440px) and (max-width:1535px){
		.menu-soft-common2{left:42rem;}
		}
		@media screen and (min-width:1600px)and (max-width:1800px){
		.menu-soft-common2{left:56rem;}
		}
		@media screen and (min-width:1536px)and (max-width:1599px){
		.menu-soft-common2{left:48rem;}
		}

		/*salesforce end*/

		/*casestudy start*/
		.menu-soft-common3{display:flex;width:95%;position:relative;left:92.5rem;right:0;top: 0.5rem;}
		.menu-soft-right3{width:15%;margin:0px;padding:0px;}
		.menu-soft-left3{width:25%;}

		ul#menu-casestudy{list-style:none;padding:10px 40px!important;
			/* padding-top:25px!important; */
			margin:0px;background-color:#fff;box-shadow:0 2px 20px 0 hsl(0deg 0% 51% / 15%);padding:20px 10px;min-width:fit-content;flex-wrap:wrap;
			/* height:300px; */
			cursor:pointer;}
		ul#menu-casestudy li{width:100%;padding-bottom: 0.7rem;display: flex;}
		ul#menu-casestudy li a{color:#6D6E71;font-size:14px;font-weight:400;font-family:'Montserrat';}
		.menu-soft-left3 img{width:auto;height:300px;}

		.menu-soft-cont3{position:absolute;left:0;right:0;overflow:hidden;width:100%;display:none;text-transform: uppercase;}
		#menu-item-22862:hover .menu-soft-cont3 {
			display: block;
		}
		@media screen and (min-width:1200px){
			li#menu-item-22853 {
    padding-right: 39px;
    padding-left: 25px;
}
			#soltech-header .soltech-head {
    padding-top: 0 !important;
}
.soltech-logo.sollogo-desk {
    padding-top: 10px;
}
#soltech-header .Form.Form_with_ajax {
    padding-top: 10px !important;
}
.soltech-head ul li a {
    padding-top: 10px;
    padding-bottom: 10px;
	font-size:13px;
}
.soltech-head ul li {
    padding-top: 10px;
}
.insight-menu:hover span.newSpan:before {
    transform: rotate(225deg);
    -webkit-transform: rotate(225deg);
    top: 0.5rem;
}

li#menu-item-22853 ul.sub-menu {
    width: 202px;
    background: #f2f2f2 !important;
    box-shadow: none !important;
    margin-left: -25px;
}
.insight-menu span.newSpan:before{
	right: 2rem !important;
}
li#menu-item-22853 ul.sub-menu li {
	padding-left: 24px !important;
    padding-right: 15px !important;
}
li#menu-item-22853:hover {
    background: #f2f2f2;
}
			.insight-menu:hover ul.sub-menu {
    display: block !important;
}
		}
		@media screen and (min-width:1200px) and (max-width:1600px){
			.menu-soft-right3{width:20%;}
		}
		@media screen and (min-width:1200px) and (max-width:1279px){
			.menu-soft-common3{left:50rem;}
		}
		@media screen and (min-width:1280px) and (max-width:1365px){
			.menu-soft-common3{left:55rem;}
		}
		@media screen and (min-width:1440px) and (max-width:1535px){
			.menu-soft-common3{left: 63.5rem;}
		}
		@media screen and (min-width:1366px) and (max-width:1439px){
			.menu-soft-common3{left: 59rem;}
		}
		@media screen and (min-width:1500px) and (max-width:1535px){
			.menu-soft-common3{left:65rem;}
		}
		@media screen and (min-width:1600px)and (max-width:1645px){
			.menu-soft-common3{left:70rem;}
		}
		@media screen and (min-width:1536px)and (max-width:1599px){
			.menu-soft-common3{left:69.5rem;}
		}
		@media screen and (min-width:1646px) and (max-width:1799px){
			.menu-soft-common3{
				left: 76rem;
			}
		}
		@media screen and (min-width:1800px)and (max-width:1850px){
			.menu-soft-common3{left:85rem;}
		}
		/*casestudy end*/

		/*sub-menu above (about)*/
		@media (min-width: 1800px){
.about-menu:hover span.newSpan:before{transform:rotate(225deg);-webkit-transform:rotate(225deg);top:0.5rem;}
.about-menu:hover .sub-menu{display:block;}
}
@media (min-width: 1200px){
.about-menu:hover .sub-menu{z-index:2222;padding-bottom:15px;position:absolute;background-color:#fff!important;box-shadow:0px 15px 20px -6px rgb(0 0 1 / 60%);}
.about-menu .sub-menu{display:none;}
.about-menu span.newSpan:before{transform:rotate(45deg);-webkit-transform:rotate(45deg);}

}
.about-menu span.newSpan:before{border:solid #000;border-width:0 2px 2px 0;display:inline-block;padding:3px;transform:rotate(45deg);-webkit-transform:rotate(45deg);content:"";position:absolute;right:26rem;top:0.3rem;}
.about-menu span.newSpan{width:60px;height:60px;display:inline-block;position:absolute;float:right;left:0;right:0;margin-left:auto;z-index:99999;}
.about-menu .sub-menu li{padding-bottom:5px;}
@media screen and (max-width:1199px){
li.about-menu.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.menu-item-22849{
	position: relative;
}
.about-menu span.newSpan:before{right:-0.3rem;transform:rotate(45deg);-webkit-transform:rotate(45deg);padding: 2.5px;}

li.about-menu.active1 span.newSpan:before {
				transform: rotate(225deg);
				-webkit-transform: rotate(225deg);
				top: 0.5rem;
			}
			.about-menu.active1 .sub-menu{
				display: block;
			}
/* .about-menu:hover .sub-menu{padding-top:25px;display:none;} */
.about-menu .sub-menu{display:none;}
/* li.about-menu.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.menu-item-22849{position:relative;} */

.about-menu .sub-menu{position:absolute;top:100%;background:#fff;padding:10px 20px;z-index:9999;box-shadow:0px 15px 20px -6px rgb(0 0 1 / 60%);text-align:left; width: max-content;padding-top:20px!important;}
.about-menu .sub-menu li{
	padding-left: 0 !important;
    padding-right: 0;
}
}
@media screen and (min-width:1200px){
li#menu-item-22849{padding-right:47px;padding-left:25px;}
li.about-menu.active1 span.newSpan:before {
				transform: rotate(225deg);
				-webkit-transform: rotate(225deg);
				top: 0.5rem;
}
/* .soltech-head ul li a{padding-top:10px;padding-bottom:10px;}
.soltech-head ul li{padding-top:10px;} */
.about-menu:hover span.newSpan:before{transform:rotate(225deg);-webkit-transform:rotate(225deg);top:0.5rem;}
li#menu-item-22849 ul.sub-menu{width:123px;background:#f2f2f2!important;box-shadow:none!important;margin-left:-25px;}
.about-menu span.newSpan:before{right:2rem!important;}
li#menu-item-22849 ul.sub-menu li{padding-left:22px!important;padding-right:15px!important;}
li#menu-item-22849:hover{background:#f2f2f2;}
.about-menu:hover ul.sub-menu{display:block!important;}
}

		/*career menu*/
			/*sub-menu above (about)*/
			@media (min-width: 1800px){
		.career-menu:hover span.newSpan:before{transform:rotate(225deg);-webkit-transform:rotate(225deg);top:0.5rem;}
		.career-menu:hover .sub-menu{display:block;}
		}
		@media (min-width: 1200px){
			li#menu-item-22849, li#menu-item-22853, li#menu-item-22854 {
				position: relative;
			}
			.career-menu span.newSpan:before {
				right:1rem !important;
			}
		.career-menu:hover .sub-menu{z-index:2222;padding-bottom:15px;position:absolute;background-color:#fff!important;box-shadow:0px 15px 20px -6px rgb(0 0 1 / 60%);}
		.career-menu .sub-menu{display:none;}
		.career-menu span.newSpan:before{transform:rotate(45deg);-webkit-transform:rotate(45deg);}

		}
		@media screen and (min-width:1200px) {
			.career-menu span.newSpan:before {
			right:1.3rem !important;
			}
		}
		.career-menu span.newSpan:before{border:solid #000;border-width:0 2px 2px 0;display:inline-block;padding:3px;transform:rotate(45deg);-webkit-transform:rotate(45deg);content:"";position:absolute;right:26rem;top:0.3rem;}
		.career-menu span.newSpan{width:60px;height:60px;display:inline-block;position:absolute;float:right;left:0;right:0;margin-left:auto;z-index:99999;}
		.career-menu.sub-menu li{padding-bottom:5px;}
		@media screen and (max-width:767px){
			.career-menu.active1 .sub-menu{
						right:-0.5rem;
						padding: 5px;
						margin:0px;
					}
		}
		@media screen and (min-width:768px) and (max-width:1199px){
			.career-menu.active1 .sub-menu{
						right:unset;
						padding: 5px;
						margin:0px;
					}
		}
		@media screen and (max-width:1199px){
		li.career-menu.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.menu-item-22854{
			position: relative;
		}
		.career-menu span.newSpan:before{right:-0.3rem;transform:rotate(45deg);-webkit-transform:rotate(45deg);padding: 2.5px;}

		li.career-menu.active1 span.newSpan:before {
						transform: rotate(225deg);
						-webkit-transform: rotate(225deg);
						top: 0.5rem;
					}
					.career-menu.active1 .sub-menu{
						display: block;
					}

		/* .about-menu:hover .sub-menu{padding-top:25px;display:none;} */
		.career-menu .sub-menu{display:none;}
		/* li.about-menu.menu-item.menu-item-type-custom.menu-item-object-custom.menu-item-has-children.menu-item-22849{position:relative;} */

		.career-menu .sub-menu{position:absolute;top:100%;background:#fff;padding:10px 20px !important;z-index:9999;box-shadow:0px 15px 20px -6px rgb(0 0 1 / 60%);text-align:left;width:max-content;padding-top:20px!important;}
		}
		@media screen and (min-width:1200px){
		li#menu-item-22854{padding-right:40px;padding-left:25px;}
		li.career-menu.active1 span.newSpan:before {
						transform: rotate(225deg);
						-webkit-transform: rotate(225deg);
						top: 0.5rem;
		}
		/* .soltech-head ul li a{padding-top:10px;padding-bottom:10px;}
		.soltech-head ul li{padding-top:10px;} */
		.career-menu:hover span.newSpan:before{transform:rotate(225deg);-webkit-transform:rotate(225deg);top:0.5rem;right:1rem !important;}
		li#menu-item-22854 ul.sub-menu{width:175px;background:#f2f2f2!important;box-shadow:none!important;margin-left:-25px;}
		/* .career-menu span.newSpan:before{right:19rem!important;} */
		li#menu-item-22854 ul.sub-menu li{padding-left:24px!important;padding-right:15px!important;}
		li#menu-item-22854:hover{background:#f2f2f2;margin-right: 6px; padding-right: 34px;}

		.career-menu:hover ul.sub-menu{display:block!important;}
		}


		/*menu below section end*/
	</style>
</head>

<body <?php body_class(); ?>>
<?php if (is_single('10898') ):?>
<div class="custom_overlya"></div>
<?php endif; ?>
	<!-- < ?php
		$gtm_body_tag = get_field('gtm_body_tag', 'option');
		echo $gtm_body_tag;
	?> -->

	<header class="Header" id="soltech-header">
		<div class="Padding_header"></div>
		<div class="Box_header">
			<div class="Container">
				<div class="soltech-head">
					<div class="soltech-logo sollogo-desk">
						<div class="Logo">
							<?php if (has_custom_logo()): ?>
								<?php the_custom_logo(); ?>
							<?php else: ?>
								<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo1.png" alt=""></a>
							<?php endif ?>
						</div>
					</div>
					<div class="soltech-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'header-about' ) ); ?>

						<div class="Form Form_with_ajax">
							<form action="/" role="Search" method="get" id="searchform" class="searchform">
								<input type="search" name="s" class="searchformajax" placeholder="" autocomplete="off">
								<button type="submit">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1664 1792">
										<path d="M1152 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"></path>
									</svg>
								</button>
							</form>
							<ul class="Results_search"></ul>
						</div>

					</div>

				</div>

				<div class="Container_header">
					<div class="soltech-logo sollogo-mob">
						<div class="Logo">
							<?php if (has_custom_logo()): ?>
								<?php the_custom_logo(); ?>
							<?php else: ?>
								<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt=""></a>
							<?php endif ?>
						</div>
					</div>

					<div class="Container_search search-solmob">
						<div class="Box">
							<div class="Icon">
								<img id="myImg" src="https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/search.png">
								<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1664 1792">
									<path d="M1152 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"></path>
								</svg> -->
							</div>

							<div class="Form Form_with_ajax" id="formbtn">
								<form action="/" role="Search" method="get" id="searchform" class="searchform">
									<input type="search" name="s" class="searchformajax" placeholder="Search..." autocomplete="off">
									<button type="submit">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1664 1792">
											<path d="M1152 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"></path>
										</svg>
									</button>
								</form>
								<ul class="Results_search"></ul>
							</div>

						</div>
					</div>

					<div class="Mobile">
						<div class="Container_mobile">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>

					<div class="Menu">
						<div class="soltech-menu solmenu-mob soltech-head">
							<?php wp_nav_menu( array( 'theme_location' => 'header-about' ) ); ?>
						</div>

						<div class="above-desk">
							<?php
								wp_nav_menu( array(
									'theme_location'	=> "header",
									'container_class'   => "Container_menu",
									'items_wrap'		=> '<ul class="List_menu">%3$s</ul>',
									'depth'			 => 3,
									'walker'			=> new Soltech_Menu()
								) );
							?>
						</div>

					</div>
				</div>
			</div>

			<div class="menu-below-head-section below-desk">
				<div class="menu-below-head">
					<?php wp_nav_menu( array( 'theme_location' => 'header-below' ) ); ?>
				</div>
			</div>
		</div>





	</header>
	<!-- akila -->
<style>
	li#menu-item-22862 img#downarrow {
    display: none;
}
	@media screen and (max-width:1199px){
		html body ul.sub-menu li a{    font-size: 13px !important;}
	}
	@media screen and (min-width:1280px) and (max-width:1399px){
	.menu-below-head ul li.belowmenu-contact {
    padding-left: 0.5rem !important;
}
	}
@media screen and (min-width:1280px) and (max-width:1599px){
	.Logo img {
    width: 140px !important;
    height: auto;
    position: relative;
    top: 8px !important;
}
}
	@media screen and (min-width:1200px){
		.Logo img {
    width: 165px;
    height: auto;
    position: relative;
    top: 12px;
}
ul#menu-header-below {
    padding-top: 0;
}
	}
ul.sub-menu {
    display: none;
}
li#menu-item-22942:before {
    content: url(https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/soft1.png);
    margin-right: 1rem;
}
li#menu-item-22859,li#menu-item-22860,li#menu-item-22861,li#menu-item-22862,li#menu-item-22863 {
	position: relative;
}
li#menu-item-22859:hover .sub-menu {
	display: flex;
	justify-content:inherit;
	width:570px !important;
	padding-right: 0;
}
li#menu-item-22859 .sub-menu li {
	width:50%;
}
li#menu-item-22861 .sub-menu {
	width:385px !important;
}
li#menu-item-22862 ul.sub-menu {
    width: 205px !important;
    padding-right: 0 !important;
	padding-bottom:8px !important;
}
li#menu-item-22860 .sub-menu{
	width:250px !important;
}
li#menu-item-22860:hover .sub-menu, li#menu-item-22861:hover .sub-menu,li#menu-item-22862:hover .sub-menu,li#menu-item-22863:hover .sub-menu {
display: block !important;

}
li#menu-item-22859 .sub-menu,li#menu-item-22860 .sub-menu, li#menu-item-22861 .sub-menu,li#menu-item-22862 .sub-menu,li#menu-item-22863 .sub-menu {
    position: absolute;
    width: 100%;
    left: 0;
    right: 0;
	list-style: none;
    padding: 0px 40px;
    margin: 0px;
    background-color: #fff;
    box-shadow: 0 2px 20px 0 hsl(0deg 0% 51% / 15%);
    padding: 20px 20px;
    /* min-width: max-content; */
    flex-wrap: wrap;
    cursor: pointer;
}
#menu-item-22859 ul.sub-menu li,#menu-item-22860 ul.sub-menu li,#menu-item-22861 ul.sub-menu li,#menu-item-22862 ul.sub-menu li {
    line-height: 2.5;
	margin-bottom:5px;
}
@media screen and (min-width:1200px) {
	ul.sub-menu li:before {
    position: relative;
    top: 6px;
}
}
li.Nav_item.Tec-line a {
    border-top: 1px solid #F2F2F2;
}
</style>
	<script>
// 		$('.nes').click(function(event){
//     $('.nes').not(this).next().next().removeClass("active")
//        $(this).next().next().toggleClass("active")

// 	});

// 	//close if menu clicked
// 	$(".sub-menu").click(function(e){

//     $(this).toggleClass("active")
//   })

		  // newspan for mobile responsive
			var acc=document.querySelectorAll(".menu-item-has-children");
			var i;
			for(i=0;i<acc.length;i++){
			var newSpan=document.createElement('span');
			newSpan.className="newSpan nes";
			acc[i].insertBefore(newSpan,acc[i].childNodes[0]);
			}
			var acc=document.querySelectorAll(".menu-item-has-children .newSpan");
			var i;
			for(i=0;i<acc.length;i++){
			acc[i].addEventListener("click",function(){
				// this.parentElement.classList.toggle("active1");
				// this.parentElement.classList.remove()
			});
			}
	 $('.newSpan').click(function(event){
      $('.newSpan').not(this).next().next().removeClass("active")
       $(this).next().next().toggleClass("active")

	});

	//close if menu clicked
	$(".sub-menu").click(function(e){

    $(this).toggleClass("active")
  })


	</script>
	<script>
		$("#myImg").click(function(){

		$(".Form").toggleClass("opac");

		});

		$(".belowmenu").append('<img id="downarrow" class="downarrow" src="https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/downarrow.png" />');

	</script>

<div class="menu-soft-right" id="class_none" style="display:none;"><?php $new_var= wp_nav_menu( array( 'theme_location' => 'software' ) ); ?></div>
<div class="menu-soft-right1" id="class_none1" style="display:none;"><?php $new_var= wp_nav_menu( array( 'theme_location' => 'staffing' ) ); ?></div>
<div class="menu-soft-right2" id="class_none2" style="display:none;"><?php $new_var= wp_nav_menu( array( 'theme_location' => 'salesforce' ) ); ?></div>
<div class="menu-soft-right3" id="class_none3" style="display:none;"><?php $new_var= wp_nav_menu( array( 'theme_location' => 'casestudy' ) ); ?></div>
<?php if(is_page('759')) { ?>
<script>
		window.onscroll = function() {myFunction()};

var header = document.getElementById("soltech-header");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
<?php } ?>


<!-- <script>

	$(window).on('load', function() {
		// alert("window is loaded");
		$("#menu-item-22859").append('<div class="menu-soft-cont"><div class="menu-soft-common"><div class="menu-soft-right">'+ $("div#class_none").html()+'</div><div class="menu-soft-left"><img src="https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/soft-img.png"></div></div></div>');

		$("#menu-item-22860").append('<div class="menu-soft-cont1"><div class="menu-soft-common1"><div class="menu-soft-right1">'+ $("div#class_none1").html()+'</div><div class="menu-soft-left1"><img src="https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/it-img.png"></div></div></div>');

		$("#menu-item-22861").append('<div class="menu-soft-cont2"><div class="menu-soft-common2"><div class="menu-soft-right2">'+ $("div#class_none2").html()+'</div><div class="menu-soft-left2"><img src="https://soltech22dev.wpengine.com/wp-content/uploads/2023/02/soft-img.png"></div></div></div>');

		$("#menu-item-22862").append('<div class="menu-soft-cont3"><div class="menu-soft-common3"><div class="menu-soft-right3">'+ $("div#class_none3").html()+'</div><div class="menu-soft-left3"></div></div></div>');


	});

</script> -->