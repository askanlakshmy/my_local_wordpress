<?php

$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo "<input id='skdjfvhb' type='hidden' value='$actual_link'/>";
if (strpos($actual_link, "www.") !== false) {
    $actual_link = str_replace("www.", "", $actual_link);
    header("Location: $actual_link", true, 301);
    // exit();
}

$main_find_url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'];

$page_find_url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$haematology_menu = 1;

$medical_menu = 1;

$nuclear_medicine_menu = 1;

$radition_menu = 1;

$surgical_menu = 1;

$url_inside_city = 0;

if (strpos(strtolower($page_find_url), 'ahmedabad') !== false) {

    $haematology_menu = 1;

    $medical_menu = 1;

    $nuclear_medicine_menu = 0;

    $radition_menu = 1;

    $surgical_menu = 1;

    $url_inside_city = 1;

} else if (strpos(strtolower($page_find_url), 'bangalore') !== false) {

    $haematology_menu = 1;

    $medical_menu = 1;

    $nuclear_medicine_menu = 1;

    $radition_menu = 1;

    $surgical_menu = 1;

    $url_inside_city = 1;

} else if (strpos(strtolower($page_find_url), 'bhubaneshwar') !== false) {

    $haematology_menu = 0;

    $medical_menu = 1;

    $nuclear_medicine_menu = 1;

    $radition_menu = 1;

    $surgical_menu = 1;

    $url_inside_city = 1;

} else if (strpos(strtolower($page_find_url), 'bilaspur') !== false) {

    $haematology_menu = 0;

    $medical_menu = 1;

    $nuclear_medicine_menu = 0;

    $radition_menu = 1;

    $surgical_menu = 1;

    $url_inside_city = 1;

} else if (strpos(strtolower($page_find_url), 'chennai-acc') !== false) {

    $haematology_menu = 1;

    $medical_menu = 1;

    $nuclear_medicine_menu = 1;

    $radition_menu = 1;

    $surgical_menu = 1;

    $url_inside_city = 1;

} else if (strpos(strtolower($page_find_url), 'chennai-apcc') !== false) {

    $haematology_menu = 1;

    $medical_menu = 1;

    $nuclear_medicine_menu = 0;

    $radition_menu = 1;

    $surgical_menu = 1;

    $url_inside_city = 1;

} else if (strpos(strtolower($page_find_url), 'delhi') !== false) {

    $haematology_menu = 1;

    $medical_menu = 1;

    $nuclear_medicine_menu = 1;

    $radition_menu = 1;

    $surgical_menu = 1;

    $url_inside_city = 1;

} else if (strpos(strtolower($page_find_url), 'hyderabad') !== false) {

    $haematology_menu = 1;

    $medical_menu = 1;

    $nuclear_medicine_menu = 0;

    $radition_menu = 1;

    $surgical_menu = 1;

    $url_inside_city = 1;

} else if (strpos(strtolower($page_find_url), 'kolkata') !== false) {

    $haematology_menu = 1;

    $medical_menu = 1;

    $nuclear_medicine_menu = 1;

    $radition_menu = 1;

    $surgical_menu = 1;

    $url_inside_city = 1;

} else if (strpos(strtolower($page_find_url), 'lucknow') !== false) {

    $haematology_menu = 0;

    $medical_menu = 0;

    $nuclear_medicine_menu = 0;

    $radition_menu = 1;

    $surgical_menu = 0;

    $url_inside_city = 1;

} else if (strpos(strtolower($page_find_url), 'madurai') !== false) {

    $haematology_menu = 0;

    $medical_menu = 1;

    $nuclear_medicine_menu = 0;

    $radition_menu = 1;

    $surgical_menu = 1;

    $url_inside_city = 1;

} else if (strpos(strtolower($page_find_url), 'navi-mumbai') !== false) {

    $haematology_menu = 1;

    $medical_menu = 1;

    $nuclear_medicine_menu = 1;

    $radition_menu = 1;

    $surgical_menu = 1;

    $url_inside_city = 1;

} else if (strpos(strtolower($page_find_url), 'navsari') !== false) {

    $haematology_menu = 0;

    $medical_menu = 1;

    $nuclear_medicine_menu = 0;

    $radition_menu = 1;

    $surgical_menu = 1;

    $url_inside_city = 1;

} else if (strpos(strtolower($page_find_url), 'vizag') !== false) {

    $haematology_menu = 0;

    $medical_menu = 1;

    $nuclear_medicine_menu = 0;

    $radition_menu = 1;

    $surgical_menu = 1;

    $url_inside_city = 1;

}

if ($url_inside_city == 1) {

    $url_str_array = explode("/", $_SERVER['REQUEST_URI']);

    $url_str_array = array_filter($url_str_array);

    foreach ($url_str_array as $keyv) {
        $url_str_new_array[] = $keyv;
    }

    //print_r($url_str_new_array);

    if (count($url_str_new_array) > 2) {

        //echo $url_str_new_array[0]."/".$url_str_new_array[1];
        //echo "<br>";

        $page_changed_url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . "/" . $url_str_new_array[0] . "/" . $url_str_new_array[1] . "/";

    } else {
        $page_changed_url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    }

} else {
    $page_changed_url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . '/';
}

if (isset($_COOKIE['userpage'])) {
    $page_changed_url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . '/';
}

?>



<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Apollo Cancer Centres",
  "url": "http://apollo.bestdemo.site/",
  "logo": "http://apollo.bestdemo.site/images/ACC_Logo.jpg"
}
</script>



<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "Apollo Cancer Centres",
  "url": "http://apollo.bestdemo.site/",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>



<!-- Meta Pixel Code -->
<script>
     var agent = navigator.userAgent;
        var n = agent.includes("Chrome-Lighthouse");
        if(!n){
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '264717952411118');
fbq('track', 'PageView');
        }
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=264717952411118&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->


<!-- Google Tag Manager -->
<script>
     var agent = navigator.userAgent;
        var n = agent.includes("Chrome-Lighthouse");
        if(!n){
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KD76H9F');
        }
</script>
<!-- End Google Tag Manager -->

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php
$url = $_SERVER['REQUEST_URI'];
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if ($url == "/" || $url == "/index.php" || $url == "/index" || $url == "") {?>
    <!-- <link rel="stylesheet" type="text/css" href="http://apollo.bestdemo.site/css/head.css"> -->
<link rel="stylesheet" type="text/css" href="http://apollo.bestdemo.site/css/homeused.css">
<style>
    /* responsive.css */
    body,html{-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}a,a:focus,a:hover{text-decoration:none}.btn-menu,.flat-wrap-header,.nav-wrap{position:relative}.btn-menu span,.btn-menu:after,.btn-menu:before{width:100%;height:2px;left:0;top:50%;position:absolute}html{overflow-y:scroll}footer,header,nav{display:block}:focus{outline:0}img{border:0;-ms-interpolation-mode:bicubic;vertical-align:middle;max-width:100%;height:auto}button,input,select,textarea{font-size:100%;margin:0;max-width:100%;vertical-align:baseline;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}button,input{line-height:normal}input,textarea{background-image:-webkit-linear-gradient(hsla(0,0%,100%,0),hsla(0,0%,100%,0))}button,input[type=submit]{line-height:1;cursor:pointer;-webkit-appearance:button;border:none}input[type=checkbox],input[type=radio],ol,ul{padding:0}input[type=search]{-webkit-appearance:textfield}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}*,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}body{-webkit-font-smoothing:antialiased;font:400 15px/24px Roboto,sans-serif;background-color:#fff;color:#5a5a5a}a{color:#28293a;-webkit-transition:.3s ease-in-out;-moz-transition:.3s ease-in-out;-ms-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;}a:focus,a:hover{outline:0;-webkit-transition:.3s ease-in-out;-moz-transition:.3s ease-in-out;-ms-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;transition:.3s ease-in-out}b{font-weight:900}button{border:none}button,input[type=submit]{font-size:14px;font-weight:700;color:#28293a;text-transform:uppercase;padding:12px 24px;background-color:#f2c21a;-webkit-transition:.3s;-moz-transition:.3s;-ms-transition:.3s;-o-transition:.3s;transition:.3s}input[type=email]:focus,input[type=search]:focus,input[type=tel]:focus,input[type=text]:focus,input[type=url]:focus,textarea:focus{border:1px solid #f2c21a;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none}textarea{width:100%;height:100px;padding:30px}input[type=checkbox]{display:inline}input:-moz-placeholder,input::-moz-placeholder,textarea:-moz-placeholder,textarea::-moz-placeholder{color:#b3b7c8;opacity:1}input:-ms-input-placeholder{color:#b3b7c8}input::-webkit-input-placeholder,textarea::-webkit-input-placeholder{color:#b3b7c8;opacity:1}#mainnav>ul>li>a:hover,h2,h3{color:#000}.btn{background-image:none}input[type=email],input[type=search],input[type=submit],input[type=tel],input[type=text],input[type=url],textarea{-webkit-appearance:none;text-shadow:none;-webkit-box-shadow:none;-moz-box-shadow:none;-o-box-shadow:none;box-shadow:none;color:#000}h2,h3{font-family:Roboto,sans-serif;font-weight:700;margin-bottom:20px}h2{font-size:30px;line-height:35px;letter-spacing:.3px}h3{font-size:24px;line-height:30px}#mainnav ul.submenu,#mainnav ul.submenu>li>a{-webkit-transition:.3s ease-in-out;-moz-transition:.3s ease-in-out;-ms-transition:.3s ease-in-out;-o-transition:.3s ease-in-out;transition:.3s ease-in-out}#mainnav ul.submenu>li>a:hover,#mainnav>ul>li>a:hover{background-color:#005e77}.header.header-style1{background-color:#007c9d}#mainnav.color-white ul.submenu>li>a:hover,#mainnav.color-white>ul>li>a:hover,#mainnav>ul>li>a{color:#fff}#mainnav ul.submenu{opacity:0;visibility:hidden;box-shadow:0 20px 46px 0 rgba(0,0,0,.15)}#mainnav ul li:hover>ul.submenu{opacity:1;visibility:visible;background:#007c9d;top:100%}#header{z-index:999}#mainnav>ul{text-align:right}#mainnav ul{list-style:none;margin:0;padding:0}#mainnav>ul>li{display:inline-block;margin-right:-5px}#mainnav>ul>li>a{font-size:14px;font-weight:600;text-transform:uppercase;display:block;padding:0 25px 0 30px;line-height:60px}#mainnav>ul>li:nth-child(4)>a{padding:0 28px 0 30px}#mainnav ul.submenu>li>a{color:#fff!important;display:block;font-size:14px;font-weight:500;text-decoration:none;padding:0 30px;line-height:40px}#mainnav ul li ul li{margin-left:0}#mainnav ul.submenu li ul{position:absolute;top:40!important}.btn-menu{background:0 0;cursor:pointer;margin:22px 15px 22px 0;width:26px;height:16px;float:right;-webkit-transition:.238s;-moz-transition:.238s;transition:.238s;display:none}.btn-menu span,.btn-menu:after,.btn-menu:before{background-color:#f2c21a;-webkit-transition:.238s;-moz-transition:.238s;transition:.238s}.btn-menu:after,.btn-menu:before{content:'';-webkit-transform-origin:50% 50%;-ms-transform-origin:50% 50%;transform-origin:50% 50%}.btn-menu span{overflow:hidden;text-indent:200%}.btn-menu:before{-webkit-transform:translate3d(0,-7px,0);transform:translate3d(0,-7px,0)}.btn-menu:after{-webkit-transform:translate3d(0,7px,0);transform:translate3d(0,7px,0)}.copyright{margin:10px 0;font-size:13px}ul.submenu.second-submenu{top:0!important;left:100%;width:250px!important;margin-left:0!important;padding-left:0!important;right:10%!important}@media only screen and (min-width:800px){html body .diagnostic-menu,html body .explore-menu{text-align:left!important;padding:0!important}html body .treatments-menu{text-align:right!important;padding:0!important}}.ch_1{float:none;margin:18px 0 0;position:absolute;width:225px;z-index:111111111;background:#a0cde2;padding:15px;box-shadow:0 3px 3px rgb(0 0 0 / 20%);filter:drop-shadow(0px 12px 17.5px rgba(0,0,0,.08))}html body .sub2_lt{left:-110%!important}ul.submenu.ch_1 li a{text-align:left}ul.submenu.second-submenu.ul-right{left:-100%}@media only screen and (min-width:1280px) and (max-width:1439px){.ch_1{float:none;margin:18px 0 0;position:absolute;width:180px;z-index:111111111;background:#a0cde2;padding:15px;box-shadow:0 3px 3px rgb(0 0 0 / 20%);filter:drop-shadow(0px 12px 17.5px rgba(0,0,0,.08))}html body .sub2_lt{left:-139%!important}}@media only screen and (min-width:1024px) and (max-width:1279px){#mainnav>ul>li>a{padding:0 1px 0 21px!important}.ch_1{width:145px!important}html body .sub2_lt{left:-159%!important}}@media only screen and (min-width:768px)and (max-width:990px){.ch_1{float:none;margin:18px 0 0;position:inherit!important;width:100%;z-index:111111111;background:#a0cde2;padding:15px;box-shadow:0 3px 3px rgb(0 0 0 / 20%);filter:drop-shadow(0px 12px 17.5px rgba(0,0,0,.08))}ul.submenu.second-submenu{width:100%!important}ul.submenu.ch_1 li a{text-align:left;margin-left:25px}}@media only screen and (min-width:1540px)and (max-width:1920px){div#carouselExampleIndicators{min-height:718px!important}#mobile_view{display:none!important}}@media only screen and (min-width:1024px)and (max-width:1440px){div#carouselExampleIndicators{min-height:351px!important}#mobile_view{display:none!important}}@media only screen and (min-width:320px)and (max-width:767px){.ch_1{float:none;margin:18px 0 0;position:inherit!important;width:100%;z-index:111111111;background:#a0cde2;padding:15px;box-shadow:0 3px 3px rgb(0 0 0 / 20%);filter:drop-shadow(0px 12px 17.5px rgba(0,0,0,.08))}ul.submenu.second-submenu{width:100%!important}ul.submenu.ch_1 li a{text-align:left;margin-left:25px}div#carouselExampleIndicators{min-height:146px!important}#mobile_view{display:block}#desktop_view,nav#mainnav{display:none!important}}@media only screen and (min-width:768px)and (max-width:1024px){div#carouselExampleIndicators{min-height:351px!important}#mobile_view{display:none!important}}@media only screen and (min-width:992px) and (max-width:1299px){ul.submenu.second-submenu.ul-left.submenu_part_cc.fifth_index_sub.test_menu_bar{width:172px!important;left:-60%}ul.submenu.diagnostic-menu.ch_1{width:158px}ul.submenu.explore-menu.ch_1{width:185px}ul.submenu.second-submenu.padlab{width:172px!important}#mainnav>ul>li>a{padding:0 5px 0 10px!important}ul.submenu.second-submenu.ul-left.submenu_part_cc.test_menu_bar{left:99%}ul.submenu.treatments-menu.ch_1.test_menu_bar{width:150px;right:15px}}@media screen and (max-width:991px){.btn-menu{display:block!important}}@media screen and (min-width:992px){.btn-menu{display:none!important}}
    @media screen and (min-width:767px) and (max-width:2560px) {
        img.micro-speak {
        height: 32px !important;
    }
    .searchbox {
        padding-top:5px !important;
    }
    }

  
</style>

<?php } else {?>
<link rel="stylesheet" type="text/css" href="http://apollo.bestdemo.site/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="http://apollo.bestdemo.site/css/head.css">

<link rel="stylesheet" type="text/css" href="http://apollo.bestdemo.site/css/style.css">

<link rel="stylesheet" type="text/css" href="http://apollo.bestdemo.site/css/responsive.css">

<link rel="stylesheet" type="text/css" href="http://apollo.bestdemo.site/css/textcss.css">

<script defer src="http://apollo.bestdemo.site/textscript.js"></script>

<?php }?>


    <?php $url = parse_url($_SERVER['REQUEST_URI']);
console . log($url);
if ($url['path'] != '/blog/') {
    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>';
}?>

	<script defer src="http://apollo.bestdemo.site/js/main.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="/headjs/stellarnav.css">
</head>

<style>
    a.close-menu.full {
    display: none !important;
}
    .stellarnav.dark.right.mobile {
    text-align: end;
}
a.menu-toggle {
    font-size: 0;
}
.stellarnav .menu-toggle span.bars span{
    width: 25px !important;
    height: 2px !important;
    background: #fdb813 !important;
    margin: 0 0 5px;
}
   .autocom-box a,.dropdown-content a{text-align:left;text-decoration:none}li#mobcal a:before,li#mobcal_us a:before{margin:0!important;content:""!important;height:17px;width:17px;position:relative}.dropdown:hover .dropdown-text::before,.lowBtn,.menu-text,.search-btn1,.topnav{display:none}nav#mainnav ul li{padding-bottom:0}small.smallerror{color:red}h2.border-bt.border-bt-yellow{margin-left:16px}header .top-header ul{margin:0}@media screen and (min-width:320px) and (max-width:424px){.tab button{padding:12px 5px;font-size:15px}}@media screen and (min-width:424px) and (max-width:767px){.tab button{font-size:15px;padding:14px 11px}}@media screen and (max-width:991px){ul.submenu.second-submenu.ul-left.submenu_part_cc.fifth_index_sub{background-color:#199cbff2!important}ul.submenu.second-submenu.ul-left.submenu_part_cc{background-color:#017ea0!important}ul.submenu.second-submenu{width:87%!important;background:#036c87fc!important}ul.submenu.second-submenu.ul-left.submenu_part_cc li a{line-height:1.5!important;padding:14px 0!important}html body nav#mainnav-mobi{background-color:transparent}#mainnav-mobi ul{background-color:#014b5f}.ch_1{width:90%}.btn-submenu.active:before{content:"\f067";-webkit-transform:rotate(135deg);-ms-transform:rotate(135deg);-o-transform:rotate(135deg);transform:rotate(135deg);transition:transform .3s}.btn-submenu{width:100%;height:50px;right:0;top:0}.btn-submenu:before{content:"\f067";color:#fff;position:absolute;right:16px;top:16px;transition:transform .3s}ul.submenu.second-submenu.ul-left.submenu_part_cc a{margin-left:45px}}.searchbox{border:1px solid #cecece;border-radius:50px}.searchbox .form-control{border:0;margin-bottom:0}.collapse ul li,.header-icon,.pos-f-t .row{margin-bottom:0!important}.searchbox .btn{border-radius:40px;text-transform:none;background-color:#007c9d;color:#fff;width:100%}.search-input{float:left;margin-left:auto;margin-right:25px;background:#fff;width:91%;border-radius:20px;position:absolute;box-shadow:0 1px 5px 3px rgb(0 0 0 / 12%);right:-11px;top:86%;z-index:999;display:none}.autocom-box{padding:10px 8px;opacity:1;pointer-events:auto;max-height:280px;overflow-y:auto}.dropdown:hover .dropdown-content,.sh{display:block}.autocom-box a{padding:8px 12px;display:flex;cursor:pointer;border-radius:3px;width:fit-content;color:#000}.submenu{background-color:#007c9d!important}.dropdown-content,.dropdown-content a,.fixed-btn,.href-content .pop_button{background-color:#007c9d}#mainnav ul.submenu>li>a{color:#fff!important}@media only screen and (min-width:800px){.ul-left,.ul-right{width:max-content!important}.diagnostic-menu{text-align:left!important;padding:0 14.2rem!important}.treatments-menu{padding:0 7rem!important;text-align:right!important}.explore-menu,.pad-sur,.second-submenu{text-align:left!important}.explore-menu{padding:0 14rem!important}.second-submenu{display:inline-grid!important}.padlab{padding-left:225px!important}.pad-imag{padding-left:370px!important}.pad-hema{padding-left:625px!important}.pad-med{padding-left:775px!important}.pad-nuc{padding-left:900px!important}.pad-rad{padding-left:1080px!important}.pad-sur{padding-left:1210px!important}.pos-rel{position:relative}.ul-left{margin-left:80px!important}.ul-right{margin-left:-310px!important}}.dropdown a:hover+.dropdown-menu,.dropdown:hover .dropdown-menu{display:none!important}.dropdown.show a+.dropdown-menu.show{display:inline-block!important;opacity:1!important;height:auto;border:none;padding:0}.dropdown.show a+.dropdown-menu.flex.show{display:flex!important}.dropdown-toggle::after{vertical-align:.155em}.dropdown-item.dropdown-toggle.dropdown-toggle-show:focus::after,.dropdown-toggle[aria-expanded=true]::after{border-top:0;border-right:.3em solid transparent;border-bottom:.3em solid;border-left:.3em solid transparent}.dropdown-menu.submenu-menu li{margin-left:0}.row.icon-menu img{height:72px}.header-icon li{display:inline-block;padding:10px}.header-icon li:last-child{padding-right:0}.header-icon .call-now{color:inherit}.header-icon li .fa{font-size:30px}.navbar-toggler{border:none!important}header .custom-menu{width:100%}.navbar-toggler-icon:hover .menu-text{display:inline-block!important;margin-left:32px!important;margin-top:5px!important;padding-right:5px!important}.search-btn{color:#fdb813;float:right;width:50px;border-radius:0;display:flex;justify-content:center;align-items:center}.search-box:hover>.search-input{width:250px;padding:0 7px;border:1px solid #ddd}.search-box:hover .search-btn{color:#fff;background-color:#007c9d}.search-box:hover .fa{font-size:20px}.static{position:static!important}.logo img{margin-top:-10px}#dt.static.show{width:500px;text-align:center}.collapse ul li{padding-bottom:0!important}.dropdown-content{height:3px;display:none;position:absolute;min-width:140px;max-width:140px;box-shadow:0 8px 16px 0 rgba(0,0,0,.2);z-index:18}.dropdown-content a{color:#fff;padding:12px 16px;display:block;border-bottom:.5px solid #fff}.dropdown-content a:hover{background-color:#ddd}.hedmargin{margin-top:0!important}@media only screen and (max-width:600px){.lowBtn,.topnav{display:block}.headMob{width:21%}#locMob{min-width:0!important}#mobapp,#mobcal,#mobcal_us,.menubar{display:none}.hedmargin{margin-top:15px!important}}.fixed-btn{position:fixed;width:100%;height:45px;line-height:45px;bottom:.5%}.b{width:20%}.b a{background-color:#fff;padding-top:2%;padding-bottom:2%;border-radius:3px;width:200px}.call{margin-left:8%;padding-right:37%;padding-left:37%}.book{padding-right:5%;padding-left:5%}header .top-header li a{font-size:15px!important}li#mobcal_us a:before{background:url(http://apollo.bestdemo.site/img/globe.png) 0 0/99%;display:inline-block;top:2px}li#mobcal a:before{background:url(http://apollo.bestdemo.site/img/india.png) 0 0/99%;display:inline-block;top:3px}ul.submenu.second-submenu.pad-imag.test_menu_bar{width:380px!important}ul.submenu.second-submenu.pad-rad.sub2_lt.test_menu_bar{width:303px!important}ul.submenu.second-submenu.ul-right.test_menu_bar{width:360px!important}@media screen and (min-width:992px) and (max-width:1200px){ul.submenu.second-submenu.pad-rad.sub2_lt.test_menu_bar{left:-204%!important}ul.submenu.second-submenu.ul-right.test_menu_bar{left:-144%!important}ul.submenu.second-submenu.pad-hema.sub2_lt.test_menu_bar{width:280px!important;left:-192%!important}}@media screen and (min-width:1201px) and (max-width:1439px){ul.submenu.second-submenu.pad-rad.sub2_lt.test_menu_bar{left:-172%!important}ul.submenu.treatments-menu.ch_1.test_menu_bar{width:176px!important}ul.submenu.second-submenu.ul-right.test_menu_bar{left:-144%!important}ul.submenu.second-submenu.pad-hema.sub2_lt.test_menu_bar{width:280px!important;left:-155%!important}}@media screen and (min-width:1440px){ul.submenu.second-submenu.pad-hema.sub2_lt.test_menu_bar{width:282px!important;left:-125%!important}ul.submenu.second-submenu.pad-rad.sub2_lt.test_menu_bar{left:-134%!important;width:303px!important}ul.submenu.second-submenu.ul-right.test_menu_bar{left:-144%!important}}ul.submenu.second-submenu.ul-left.submenu_part_cc.test_menu_bar{width:290px!important}@media screen and (min-width:1024px) and (max-width:1279px){ul.submenu.treatments-menu.ch_1.test_menu_bar{width:182px!important}html body ul.submenu.second-submenu.pad-hema.sub2_lt.test_menu_bar{left:-153%!important}ul.submenu.second-submenu.pad-med.sub2_lt{left:-249px!important}ul.submenu.second-submenu.pad-nuc.sub2_lt.for_showfixed{left:-250px!important;top:79px!important}}@media screen and (min-width:992px){ul.submenu.second-submenu.pad-nuc.sub2_lt.for_showfixed{left:-250px!important;top:79px!important}}@media screen and (min-width:768px) and (max-width:1024px){.href-content{width:43%!important;left:30%!important}}@media screen and (min-width:1024px) and (max-width:1440px){.href-content{width:23%!important}}@media screen and (min-width:320px) and (max-width:767px){.href-content{background-color:#fefefe;margin:auto;padding:34px 4px!important;border:1px solid #888;width:71%!important;position:absolute;top:41%!important;left:15%!important;text-align:center}.href-content .pop_button{background-color:#007c9d;position:relative;left:0!important;top:10px!important;color:#fff;text-align:center!important}}.href_modal{position:fixed;z-index:9999;left:0;top:0;width:100%;height:100%;overflow:auto;background:#0000006b}.href-content{background-color:#fefefe;margin:auto;padding:37px 21px;border:1px solid #888;width:20%;position:absolute;top:50%;left:39%;text-align:center}.close{color:#aaa;float:right;font-size:28px;font-weight:700}.close:focus,.close:hover{color:#000;text-decoration:none;cursor:pointer}.href-content .close{position:relative;top:-35px}.href-content .pop_button{position:relative;left:0;top:15px;color:#fff;width:80px;height:37px;border-radius:.25rem}.href-content #de_value{text-transform:capitalize}.searchbox{padding:6px 20px 9px 25px}a.search-btn{top:1px;left:13px;position:relative;text-decoration:none!important}a.search-btn1,a.search-btn1:hover{color:#007d9d!important}a.search-btn:hover{color:#fdb813!important}.search-btn1{position:relative;right:-18px;top:10px;color:#fdb813}.searchbox.container-2 .fa-search:before{content:"\f002";font-size:18px}@media screen and (min-width:300px) and (max-width:600px){.searchbox .row{margin-top:-2px;margin-right:20px!important}.searchbox{padding:6px 9px 3px 25px}a.search-btn{top:0;left:-1px}.search-btn1{right:-5px;top:7px}}@media screen and (min-width:601px) and (max-width:767px){.search-btn1{right:-45px;top:4px;color:#fdb813}a.search-btn{top:-1px;left:29px}}@media screen and (min-width:768px) and (max-width:1024px){.searchbox .row{margin-top:0}.search-btn1{position:relative;right:-2px;top:7px}a.search-btn{top:1px;left:-5px}}@media screen and (min-width:1025px) and (max-width:1199px){.searchbox .row{margin-top:0}}@media screen and (min-width:1200px) and (max-width:1399px){.searchbox .row{margin-top:10px}.search-btn1{position:relative;right:-5px;top:5px}a.search-btn{top:-1px;left:-2px}.searchbox{padding:0 20px 9px 24px}}@media screen and (min-width:1400px) and (max-width:1440px){a.search-btn{top:-2px;left:2px}.search-btn1{top:3px;right:-10px}.searchbox{padding:0 20px 9px 25px}}@media screen and (min-width:1800px) and (max-width:1920px){.row{margin-top:4px!important}a.search-btn{top:-4px;left:13px}.search-btn1{position:relative;right:-22px;top:4px}}@media screen and (min-width:2560px){.searchbox{padding:8px 19px 16px 20px}.search-btn1{position:relative;right:-30px;top:9px}}@media screen and (min-width:1441px) and (max-width:1660px){.search-btn1{position:relative;right:-22px;top:6px}a.search-btn{top:-2px;left:12px}.row{margin-top:7px}}
/* a.search-btn{
    color: #f2c21a;
} */
@media screen and (max-width: 991px) {
.btn-submenu .submenu-plus{content:"\f067";color:#fff;position:absolute;right:16px;top:16px;transition:transform .3s;content:unset !important;}.btn-submenu.submenu-plus.active{content:unset !important;-webkit-transform:rotate(135deg);-ms-transform:rotate(135deg);-o-transform:rotate(135deg);transform:rotate(135deg);transition:transform .3s}.btn-submenu.active:before {content:unset !important;}
img.submenu-plus {
    position: absolute;
    right: 16px;
    top: 16px;
    transition: transform .3s;
    content: unset !important;
}}

img.submenu-plus {
    width: 20px;
    height: 20px;
}
.locate-right-arrow {
    -webkit-transform: rotate(-90deg);
    float: right;
    position: relative;
    top: 15px;
    left: 20px!important;
    width: 14px;
    height: 14px;

}
img.locate-down-arrow {
    width: 13px;
    height: 13px;
    vertical-align: middle;
    margin-bottom: 1.5px;
    margin-left: 0.5px;
}
@media screen and (min-width: 1201px) and (max-width: 1439px) {
    ul.submenu.treatments-menu.ch_1.test_menu_bar {
        width: 184px!important;
    }
}
@media only screen and (min-width: 1280px) and (max-width: 1439px){
html body .sub2_lt {
    left: -136% !important;
}
}
#mainnav ul.submenu > li > a {
    padding: 0 30px 0 15px;
}
@media screen and (min-width: 1201px) and (max-width: 1439px) {
ul.submenu.second-submenu.pad-hema.sub2_lt.test_menu_bar {
    width: 280px!important;
    left: -152%!important;
}
}
@media screen and (min-width: 1201px) and (max-width: 1439px) {
ul.submenu.second-submenu.pad-rad.sub2_lt.test_menu_bar {
    left: -164%!important;
}
}
@media screen and (max-width:475px){
    a#hide_new {
    position: relative;
}
img.locate-down-arrow{
    top: 16px;
    position: absolute;
}
}
img.submenu-plus {
    position: absolute;
    right: 16px;
    top: 16px;
    transition: transform .3s;
    content: unset !important;
}}

img.submenu-plus {
    width: 20px;
    height: 20px;
}
.locate-right-arrow {
    -webkit-transform: rotate(-90deg);
    float: right;
    position: relative;
    top: 15px;
    left: 20px!important;
    width: 14px;
    height: 14px;

}
img.locate-down-arrow {
    width: 13px;
    height: 13px;
    vertical-align: middle;
    margin-bottom: 1.5px;
    margin-left: 0.5px;
}
@media screen and (min-width: 1201px) and (max-width: 1439px) {
    ul.submenu.treatments-menu.ch_1.test_menu_bar {
        width: 184px!important;
    }
}
@media only screen and (min-width: 1280px) and (max-width: 1439px){
html body .sub2_lt {
    left: -136% !important;
}
}
#mainnav ul.submenu > li > a {
    padding: 0 30px 0 15px;
}
@media screen and (min-width: 1201px) and (max-width: 1439px) {
ul.submenu.second-submenu.pad-hema.sub2_lt.test_menu_bar {
    width: 280px!important;
    left: -152%!important;
}
}
@media screen and (min-width: 1201px) and (max-width: 1439px) {
ul.submenu.second-submenu.pad-rad.sub2_lt.test_menu_bar {
    left: -164%!important;
}
}
@media screen and (max-width:475px){
    a#hide_new {
    position: relative;
}
img.locate-down-arrow{
    top: 16px;
    position: absolute;
}
}
@media screen and (min-width:767px) and (max-width:2560px) {
        img.micro-speak {
        height: 32px !important;
    }
    .searchbox {
        padding-top:5px !important;
    }
    a.search-btn {
        top: 2px;
    left: 18px;
    }
    .search-btn1 {
        top: 8px;
    }
    }
    .voice-search-div {
        height:44px !important;
    }
    a.search-btn {
    top: 1px;
    left: 8px;
}
@media screen and (min-width:320px) and (max-width:767px) {
    img.micro-speak {
    width: 31px;
    height:32px;
    }
    .search-btn1 {
        right: 16px;
    }
    .search-btn {
        left: -15px !important;
    }
}
img.micro-speak {
    height: 32px !important;
    min-height: 32px !important;
}
@media screen and (min-width:768px) and (max-width:1024px) {

img.micro-speak {
    width: 100% !important;
    height: 25px !important;
}
.search-btn1 {
    right: -1px;
    top: 7px;
}   
.col-lg-2.col-sm-2 {
    max-width: 16% !important;
    height: 32px;
}
a.search-btn {
    top: 7px;
    left: 0px;
}
}
@media screen and (min-width:1025px) and (max-width:1280px) {
.search-btn1 {
    right: 3px;
    top: 8px;
}
}
@media screen and (min-width:1281px) and (max-width:1366px) {
    .search-btn1 {
    right: 0px;
    top: 10px;
}
a.search-btn {
    top: 7px;
    left: 0px;
}
}
@media screen and (min-width:1367px) and (max-width:1440px) {
a.search-btn {
    top: 1px;
    left: 8px;
}
.search-btn1 {
    top: 7px;
    right: -8px;
}
}
@media screen and (min-width:1441px) and (max-width:1660px) {
a.search-btn {
    top: 0px;
    left: 17px;
}
.search-btn1 {
right: -21px;
    top: 9px;
}
}
@media screen and (min-width:1661px) and (max-width:1880px) {
img.design-yellow {
   width:68%
}
a.search-btn {
    top: -2px;
    left: 14px;
}
.search-btn1 {
right: -22px;
    top: 7px;
}
}
@media screen and (min-width:1881px) and (max-width:1920px) {
a.search-btn {
    top: 1px;
    left: 17px;
}
}
@media screen and (min-width:2560px) {
img.micro-speak {
    width: 71% !important;
    height: 27px !important;
}
img.design-yellow {
width: 48%;
}
.search-btn1 {
right: -20px;
    top: 11px;
}
}
@media screen and (min-width:1280px){
    .stellarnav.dark ul ul {
    background: #007c9d;
    box-shadow: 0 20px 46px 0 rgba(0,0,0,.15);
}
.stellarnav > ul > li > a {
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    display: block;
    padding: 0 25px 0 30px;
}
}
@media screen and (max-width:960px){
    ul.new_8 {
    background-color: #007c9d!important;
}
    ul.new_2 span.icon-plus {
    margin-left: -31px;
}
    .lab {
    padding-left: 35px;
}
    .stellarnav.mobile {
    position: absolute;
}
    .stellarnav.mobile.dark ul ul {
    width: 90%;
    max-width: 600px!important;
    z-index: 8888888;
    /* background-color: #014b5f !important; */
}
.stellarnav.mobile.dark ul {
    background-color: #014b5f;
}
html body ul.l1 {
    background-color: #007c9d!important;
}
ul.l2 {
    background: #036c87fc!important;
}
ul.l3 {
    background-color: #017ea0!important;
}
ul.l2 li a {
    padding-left: 30px!important;
}
ul.l3 li a {
    padding-left: 40px !important;
}
html body ul.in-width {
    background: #036c87fc!important;
    width: 100% !important;
    max-width: 100% !important;
}
ul.in-width li a {
    padding-left: 40px;
}
ul.left-in {
    background-color: #017ea0!important;
}
ul.new_1 {
    background-color: #007c9d!important;
}
ul.new_1 li a {
    padding-left: 30px;
}
ul.new_2 {
    background: #036c87fc!important;
}
ul.new_2 li a {
    padding-left: 45px !important;
}
ul.new_2 ul {
    background-color: #017ea0!important;
}
ul.new_2 ul li a {
    padding-left: 60px !important;
}
ul.new_3,ul.new_4,ul.new_5,ul.new_7,ul.new_8 li a {
    background-color: #007c9d!important;
}
ul.new_3 li a,ul.new_4 li a,ul.new_5 li a,ul.new_7 li a,ul.new_8 li a {
    padding-left: 30px;
}
    /* ul.l1 {
    background-color: #007c9d!important;
    width: 90% !important;
}
ul.l2 {
    width: 87%!important;
    background: #036c87fc!important;
} */
    .stellarnav.dark.right.mobile ul.first-ul {
    position: static;
    max-width: 100%;
}
.mobile.active span.bars:nth-child(1) span:nth-child(3) {
    transform: rotate(45deg) translate(0px,0px);
}
.mobile.active span.bars:nth-child(1) span:nth-child(2) {
    display: none !important;
}
.mobile.active span.bars:nth-child(1) span:nth-child(1) {
    transform: rotate(-45deg) translate(-5px,4px);
}
    a.close-menu.full {
    display: none !important;
}
    .stellarnav.dark ul.first-ul {
    position: relative;
    max-width: 100%;
}
    .stellarnav.mobile.right > ul{
        z-index: 9999999;
    }
    a.call-btn-mobile.third, a.location-btn-mobile.third {
    display: none !important;
}
.stellarnav .call-btn-mobile, .stellarnav .location-btn-mobile {
    display: none !important;
}
.stellarnav.mobile > ul > li{
    clear: both;
    
}
a.close-menu.third {
    float: right;
}
.stellarnav.mobile.dark ul{
    background-color: #026079;
}
html body .ss-ss li a {
    background: #036c87fc!important;
}
ul.left-in li a {
    padding-left: 55px;
}
ul.left-in {
    background-color: #017ea0!important;
}
.light_green{
    background-color: #199cbff2!important;
}
.ss-ss li a {
    padding-left: 46px !important;
}
}
@media screen and (min-width:1280px){
    .left-in{
        left: 380px !important;
    }
    ul.in-width {
    width: 380px !important;
}
.stellarnav.dark ul ul li a {
    padding: 0 30px 0 15px !important;
    line-height: 40px;
    font-weight: 600;
}
.stellarnav li li.has-sub > a:after{
    top: 15px !important;
}


}
</style>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KD76H9F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

     <?php include 'include/make-an-appontment.php';?>

	<header>

	    <div>

	    </div>

		<div class="top-header">

			<div class="container-fluid">

				<ul>
                <li style="padding-bottom:0px !important;" id="mobcal_us" class="headMob">

                    <a href="tel:+914048964515" class="acc-txt">

                        <span class="white-chart">+9140 48964515</span>

                    </a>

                    </li>
				    <li style="padding-bottom:0px !important;" id="mobcal" class="headMob">

					   <a href="tel:1800 203 1066" class="acc-txt">

					       <span class="white-chart">1800 203 1066</span>

						</a>

					</li>

					<li style="padding-bottom:0px !important;" id="mobapp" class="headMob" >

					   <a href="#makeanappointment" class="acc-txt" onclick="getapp();">

					       <span class="white-chart">Appointment</span>

						</a>

					</li>

				    <li style="padding-bottom:0px !important;" style="width:35%;">

					   <a href="http://apollo.bestdemo.site/chairmanMessage.php" class="acc-txt">

					       <span class="white-chart">Chairman's Message</span>

						</a>

					</li>

				    <li style="padding-bottom:0px !important;" style="width:30%;">

					    <div style="min-width:140px;" id="locMob" class="dropdown">

					        <a style="text-align:center;" href="#" id="hide_new" class="acc-txt"><span

								class="white-chart location_hide">Location</span>

								<img class="locate-down-arrow" src="../../images/icons8-sort-down-48.png">

							</a>





								<div class="dropdown-content">

                                    <a href="http://apollo.bestdemo.site/locations/ahmedabad/">Ahmedabad</a>

                                    <a href="http://apollo.bestdemo.site/locations/bangalore/">Bangalore</a>

                                    <a href="http://apollo.bestdemo.site/locations/bhubaneshwar/">Bhubaneswar</a>

                                    <a href="http://apollo.bestdemo.site/locations/bilaspur/">Bilaspur</a>

                                    <a href="http://apollo.bestdemo.site/locations/chennai-acc/">Chennai-ACC</a>

                                    <a href="http://apollo.bestdemo.site/locations/chennai-apcc/">Chennai-APCC</a>

                                    <a href="http://apollo.bestdemo.site/locations/delhi/">Delhi</a>

                                    <a href="http://apollo.bestdemo.site/locations/hyderabad/">Hyderabad</a>

                                    <a href="http://apollo.bestdemo.site/locations/kolkata/">Kolkata</a>

                                    <a href="http://apollo.bestdemo.site/locations/lucknow/">Lucknow</a>

                                    <a href="http://apollo.bestdemo.site/locations/madurai/">Madurai</a>

                                    <a href="http://apollo.bestdemo.site/locations/navi-mumbai/">Mumbai</a>

                                    <a href="http://apollo.bestdemo.site/locations/navsari/">Navsari</a>

                                    <a href="http://apollo.bestdemo.site/locations/vizag/">Vizag</a>



                              </div>

                        </div>

					</li>

					<li style="padding-bottom:0px !important;" class="headMob">



					        <a href="http://apollo.bestdemo.site/overview.php" class="acc-txt"><span class="red-my">My</span><span

								class="white-chart">ACC</span>



								</a>

					</li>



				</ul>

			</div> <!-- container-fluid -->

		</div> <!-- top-header -->



		<div class="p-0">

			<div class="container-fluid pos-f-t">

				<div class="row icon-menu">

					<div class="col-lg-3 col-md-3 col-sm-12 menubar">

						<nav class="navbar navbar-light bg-white pt-1" style="
    display: none;">

							<button class="navbar-toggler" type="button" data-toggle="collapse"

								data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"

								aria-expanded="false" aria-label="Toggle navigation">

								<span class="navbar-toggler-icon" style="display:none;"></span>

							</button>

						</nav>

					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 pb-2 text-center">

						<a href="http://apollo.bestdemo.site/" class="logo">

							<!-- <img src="http://apollo.bestdemo.site/images/logo.jpeg" class="img-fluid"> -->

							<div class="logodiv"><img src="http://apollo.bestdemo.site/images/ACC_Logo.jpg" class="img-fluid"></div>

							<!-- <img src="./images/ACC_Logo.jpg" class="img-fluid"> -->

						</a>

					</div>

					<div class="col-lg-3 col-md-3 col-sm-12 text-right" style="padding-left: 16px; padding-right:13px;">



					    <div class="searchbox container-2">

                            <div class="row" style="margin-top: 0px; margin-right: 0px !important;">

                                <div class="col-lg-10 col-sm-10" style="padding:0px; display:flex; max-width:90%;"><input type="text" id="latest-word" class="form-control" placeholder="Search" style="border:none; border-color: inherit; -webkit-box-shadow: none; box-shadow: none;"></div>

                                <div class="col-lg-2 col-sm-2" style="padding:0px; display:flex; max-width:10%;">

                                <a href="javascript:;" class="search-btn"  onclick="myFunction()">
                                <img class="micro-speak" width=100% height="100%" src="../../images/icons8-mute-unmute-30.png" alt="">

							    		<!-- <i class="fa fa-search" aria-hidden="true" title="Search" style="font-size: 25px;"></i> -->

							  		</a>
                                      <a href="javascript:;"  class="search-btn1"  onclick="myFunction1()">
                                <img class="micro-speak" width=100% height="100%" src="../../images/icons8-microphone-30.png" alt="">
                                    </a>
							  	</div>

                            </div>

                            <div class="search-input">



                                <div class="autocom-box">

                                  <!-- here list are inserted from javascript -->



                                </div>

                            </div>

                        </div>



					</div>

				</div>

			</div> <!-- container-fluid  -->



			<header id="header" class="header header-style1 header-classic">

                <div class="container-fluid">

                    <div class="row hedmargin">

                        <div class="col-md-12 text-center pr-0 pl-0" >

                            <div class="flat-wrap-header text-center">

                                <div class="nav-wrap clearfix text-center">

                                  <!-- <nav id="mainnav" class="mainnav color-white" style="float: none;"> -->

      <div class="stellarnav">
      <ul class="first-ul">

<li><a href="http://apollo.bestdemo.site/cancer.php">Cancers</a></li>

<li>

    <a href="">Diagnostics </a>

    <ul class="l1">



        <li><a href="javascript:void(0);" class="lab">Laboratory</a>

            <ul class="l2">

                <li><a href="http://apollo.bestdemo.site/laboratory/biochemistry/">Biochemistry</a></li>

                <li><a href="http://apollo.bestdemo.site/laboratory/microbiology/">Microbiology</a></li>

                <li ><a href="javascript:void(0);">Pathology </a>

                    <ul class="l3">

                        <li><a href="http://apollo.bestdemo.site/laboratory/digital-pathology/">Digital Pathology</a></li>

<li><a href="http://apollo.bestdemo.site/laboratory/molecular-pathology/">Molecular Pathology</a></li>

<li><a href="http://apollo.bestdemo.site/laboratory/pathology/">Pathology</a></li>



                    </ul>

                </li>



            </ul>

        </li>

        <li>

<a href="javascript:void(0);">Imaging</a>

            <ul class="in-width">

                <li><a href="http://apollo.bestdemo.site/technologies/colonoscopy/">Colonoscopy</a></li>

                <li><a href="http://apollo.bestdemo.site/technologies/ercp/">Endoscopic Retrograde Cholangiopancreatography</a></li>

                <li><a href="http://apollo.bestdemo.site/technologies/endoscopy/">Endoscopy</a></li>

                <li ><a href="javascript:void(0);">Interventional Radiology </a>

                    <ul class="left-in">

<li><a href="http://apollo.bestdemo.site/technologies/tace/">TACE</a></li>

<li><a href="http://apollo.bestdemo.site/technologies/tare/">TARE</a></li>



                    </ul>

                </li>

<li><a href="http://apollo.bestdemo.site/technologies/mrcp/">Magnetic Resonance Cholangiopancreatography</a></li>

<li ><a href="javascript:void(0);">PET-CT </a>

                    <ul class="left-in">

                        <li><a href="http://apollo.bestdemo.site/technologies/pet-ct/">PET-CT</a></li>

<li><a href="http://apollo.bestdemo.site/technologies/psma/">PSMA PET-CT</a></li>



                    </ul>

                </li>
<li ><a href="javascript:void(0);">Radiology</a>

                    <ul class="left-in">

<li><a href="http://apollo.bestdemo.site/technologies/ct-scan/">CT-SCAN</a></li>

<li><a href="http://apollo.bestdemo.site/technologies/mri/">Magnetic Resonance Imaging (MRI)</a></li>

<li ><a href="javascript:void(0);">Mammogram</a>

<ul class="light_green">

                                <li><a href="http://apollo.bestdemo.site/technologies/contrast-enhanced-mammogram/">Contrast Enhanced Mammogram</a></li>

                                <li><a href="http://apollo.bestdemo.site/technologies/mammography/">Mammography</a></li>



                            </ul>

                        </li>

<li><a href="http://apollo.bestdemo.site/technologies/usg/">Ultrasound Scanning</a></li>



                    </ul>

                </li>



            </ul>

        </li>

    </ul>

    <!-- /.submenu -->

</li>



<li>

    <a href="#">Explore </a>

    <ul class="new_1">

        <li><a href="http://apollo.bestdemo.site/blog/">Blog </a></li>



        <li><a href="javascript:void(0);">Donate</a>

            <ul class="new_2">

                <li><a href="http://apollo.bestdemo.site/explore/donate/financial-support/">Financial Support</a></li>

                <li ><a href="javascript:void(0);">Tissue </a>

                    <ul>

<li><a href="http://apollo.bestdemo.site/explore/donate/blood-donation/">Blood</a></li>

                        <!-- <li><a href="#">Bone Banking</a></li>
                        <li><a href="#">Organ</a></li> -->

<li><a href="http://apollo.bestdemo.site/explore/donate/stem-cell/">Stem Cell</a></li>

                    </ul>

                </li>

            </ul>

        </li>

<li><a href="http://apollo.bestdemo.site/explore/hereditary-cancer">Hereditary Cancer </a></li>

        <li><a href="http://apollo.bestdemo.site/explore/apollo-pathshala.php">Pathshala </a></li>

        <li><a href="http://apollo.bestdemo.site/explore/patient-story/">Patient Story </a></li>

        <li><a href="http://apollo.bestdemo.site/explore/sunshine-store.php">Sunshine Store </a></li>



    </ul>

    <!-- /.submenu -->

</li>



<li>

    <a href="#">Life After Cancer</a>

    <ul class="new_3" >

        <li><a href="http://apollo.bestdemo.site/life-after-cancer/faq.php">FAQs </a></li>

        <li><a href="http://apollo.bestdemo.site/life-after-cancer/overview.php">Overview</a></li>

        <li><a href="http://apollo.bestdemo.site/life-after-cancer/prevention.php">Prevention </a></li>

        <li><a href="http://apollo.bestdemo.site/life-after-cancer/support-group.php">Support Group </a></li>

        <li><a href="http://apollo.bestdemo.site/life-after-cancer/cancer-care-videos.php">Videos </a></li>

    </ul>

    <!-- /.submenu -->

</li>



<li>

    <a href="#">News & Events </a>

    <ul class="new_4">

        <li><a href="http://apollo.bestdemo.site/news/">News & Media</a></li>

        <!--<li><a href="#">Media</a></li>-->

        <li><a href="#">Events </a></li>

    </ul>

    <!-- /.submenu -->

</li>



<li>

    <a href="#">Oncologists </a>

    <?php if (isset($_COOKIE['userpage'])) {?>

        <ul class="new_5">
                <li><a href="<?php echo $page_changed_url; ?>haematology/">Haematology </a></li>
                <li><a href="<?php echo $page_changed_url; ?>medical/">Medical</a></li>
                <li><a href="<?php echo $page_changed_url; ?>nuclear-medicine/">Nuclear Medicine </a></li>
                <li><a href="<?php echo $page_changed_url; ?>radiation/">Radiation </a></li>
                <li><a href="<?php echo $page_changed_url; ?>surgical/">Surgical </a></li>
        </ul>


    <?php } else {?>

        <ul class="new_6"> 
            <?php if ($haematology_menu == 1) {?>
                <li><a href="<?php echo $page_changed_url; ?>haematology/">Haematology </a></li>
            <?php }?>
            <?php if ($medical_menu == 1) {?>
                <li><a href="<?php echo $page_changed_url; ?>medical/">Medical</a></li>
            <?php }?>
            <?php if ($nuclear_medicine_menu == 1) {?>
                <li><a href="<?php echo $page_changed_url; ?>nuclear-medicine/">Nuclear Medicine </a></li>
            <?php }?>
            <?php if ($radition_menu == 1) {?>
                <li><a href="<?php echo $page_changed_url; ?>radiation/">Radiation </a></li>
            <?php }?>
            <?php if ($surgical_menu == 1) {?>
                <li><a href="<?php echo $page_changed_url; ?>surgical/">Surgical </a></li>
            <?php }?>
        </ul>
    <?php }?>


    <!-- /.submenu -->

</li>



<li>

    <a href="#">Services </a>

    <ul class="new_7">

        <li><a href="http://apollo.bestdemo.site/services/admission/">Admission </a></li>

        <li><a href="http://apollo.bestdemo.site/services/consultation/">Consultation </a></li>

        <li><a href="http://apollo.bestdemo.site/services/education/">Education </a></li>

        <li><a href="http://apollo.bestdemo.site/services/firstVisit/">First Visit </a></li>

        <?php
$url = $_SERVER['REQUEST_URI'];
//  echo $url;

if ($url == '/locations/chennai-acc/') {
echo "<li><a href='http://apollo.bestdemo.site/locations/chennai-acc/insurance/'>Insurance </a></li>";
} else if ($url == '/locations/navi-mumbai/') {
echo "<li><a href='http://apollo.bestdemo.site/locations/navi-mumbai/insurance/'>Insurance </a></li>";
} else if ($url == '/locations/bangalore/') {
echo "<li><a href='http://apollo.bestdemo.site/locations/bangalore/insurance/'>Insurance </a></li>";
} else if ($url == '/locations/navsari/') {
echo "<li><a href='http://apollo.bestdemo.site/locations/navsari/insurance/'>Insurance </a></li>";
} else if ($url == '/locations/vizag/') {
echo "<li><a href='http://apollo.bestdemo.site/locations/vizag/insurance/'>Insurance </a></li>";
} else if ($url == '/locations/lucknow/') {
echo "<li><a href='http://apollo.bestdemo.site/locations/lucknow/insurance/'>Insurance </a></li>";
} else if ($url == '/locations/bilaspur/') {
echo "<li><a href='http://apollo.bestdemo.site/locations/bilaspur/insurance/'>Insurance </a></li>";
} else if ($url == '/locations/hyderabad/') {
echo "<li><a href='http://apollo.bestdemo.site/locations/hyderabad/insurance/'>Insurance </a></li>";
} else if ($url == '/locations/madurai/') {
echo "<li><a href='http://apollo.bestdemo.site/locations/madurai/insurance/'>Insurance </a></li>";
} else if ($url == '/locations/bhubaneshwar/') {
echo "<li><a href='http://apollo.bestdemo.site/locations/bhubaneshwar/insurance/'>Insurance </a></li>";
} else if ($url == '/locations/kolkata/') {
echo "<li><a href='http://apollo.bestdemo.site/locations/kolkata/insurance/'>Insurance </a></li>";
} else if ($url == '/locations/delhi/') {
echo "<li><a href='http://apollo.bestdemo.site/locations/delhi/insurance/'>Insurance </a></li>";
} else {
echo "<li><a href='http://apollo.bestdemo.site/services/insurance/'>Insurance </a></li>";
}?>


        <li><a href="http://apollo.bestdemo.site/services/internationalPatients/">Int. Patients  </a></li>

        <li><a href="https://pay.apollohospitals.com/">Pay Online </a></li>

        <li><a href="http://apollo.bestdemo.site/services/rehabilitation/">Rehabilitation </a></li>

    </ul>

    <!-- /.submenu -->

</li>



<li class="drop-left">

    <a href="#">Treatments</a>

    <ul class="new_8">

        <li><a href="javascript:void(0);">Haematology</a>

            <ul class="new_9 ss-ss">

                <li><a href="http://apollo.bestdemo.site/treatments/bmt/">Blood And Marrow Transplantation</a></li>



            </ul>

        </li>

        <li><a href="javascript:void(0);">Medical</a>

            <ul class="new_10 ss-ss">

                <li><a href="http://apollo.bestdemo.site/treatments/chemotherapy/">Chemotherapy</a></li>

                <li><a href="http://apollo.bestdemo.site/treatments/immunotherapy/">Immunotherapy</a></li>

                <li><a href="http://apollo.bestdemo.site/treatments/targeted-therapy/">Targeted Therapy</a></li>



            </ul>

        </li>

        <li><a href="javascript:void(0);">Nuclear Medicine </a>

            <ul class="new_11 ss-ss">

                <li><a href="http://apollo.bestdemo.site/treatments/theranostics/">Theranostics</a></li>



            </ul>

        </li>

        <li><a href="javascript:void(0);">Radiation</a>

            <ul class="new_12 ss-ss">

                <li><a href="http://apollo.bestdemo.site/treatments/brachytherapy/">Brachytherapy</a></li>

                <li><a href="http://apollo.bestdemo.site/treatments/igrt/">Image-Guided Radiation Therapy</a></li>

                <li><a href="http://apollo.bestdemo.site/treatments/imrt/">Intensity-Modulated Radiation Therapy</a></li>

                <li><a href="http://apollo.bestdemo.site/treatments/proton-therapy/">Proton Therapy</a></li>

                <li><a href="http://apollo.bestdemo.site/treatments/sbrt/">Stereotactic Body Radiation Therapy</a></li>

                <li><a href="http://apollo.bestdemo.site/treatments/stereotactic-radio-surgery/">Stereotactic Radiosurgery</a></li>

                <li><a href="http://apollo.bestdemo.site/treatments/3d-crt/">3D Conformal Radiation Therapy</a></li>





            </ul>

        </li>

        <li><a href="javascript:void(0);">Surgery</a>

            <ul class="new_12 ss-ss">

                <li><a href="http://apollo.bestdemo.site/treatments/hipec/">HIPEC</a></li>

                <li><a href="http://apollo.bestdemo.site/treatments/limb-salvage-surgery/">Limb Salvage Surgery</a></li>

                <li><a href="http://apollo.bestdemo.site/treatments/minimally-invasive-surgery/">MIS</a></li>

                <li >

                    <a href="javascript:void(0);">Oncoplasty</a>

                    <ul class="new_13 ss-ss">

                        <li><a href="http://apollo.bestdemo.site/treatments/breast-reconstruction">Breast Reconstruction </a></li>

                        <li><a href="http://apollo.bestdemo.site/treatments/microvascular-flaps-head-and-neck-cancer">Microvascular Flaps In Head And Neck Cancer</a></li>

                        <li><a href="http://apollo.bestdemo.site/treatments/reconstruction-after-resection-of-the-jaw-bone/">Reconstruction After Resection Of The Jaw Bone </a></li>



                    </ul>

                </li>

                <li><a href="http://apollo.bestdemo.site/treatments/pipac/">PIPAC </a></li>

                <li><a href="http://apollo.bestdemo.site/treatments/radio-frequency/">RFA</a></li>

                <li><a href="http://apollo.bestdemo.site/treatments/robotic-onco-surgery/">Robotic Onco Surgery</a></li>



            </ul>

        </li>

    </ul>

    <!-- /.submenu -->

</li>





</ul><!-- /.menu -->
	</div><!-- .stellarnav -->
    <!-- required -->
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	<script type="text/javascript" src="/headjs/stellarnav.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			jQuery('.stellarnav').stellarNav({
				theme: 'dark',
				breakpoint: 960,
				position: 'right',
			});
		});
	</script>
	<!-- required -->

	<script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>

                                    <!-- </nav> -->
                                    <!-- /.mainnav -->



                                    

                                </div><!-- /.nav-wrap -->



                            </div>

                        </div>

                    </div>

                </div>

            </header>



<!--testing-->


			<!--new header end-->

		<!-- custom-menu -->

		<!--</nav>-->

	</header>



    <!-- <div class="fixed-btn lowBtn" style="z-index:100;">
     <div class="row" style="margin-top:0px !important;">
         <div class="col b">
             <a class="call" href="tel:1800 203 1066">Call</a>
         </div>
         <div class="col b">
             <a class="book" href="#makeanappointment" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Appointment&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
         </div>
     </div>
 </div> -->

         <!-- The Modal -->
<div style="display:none;" id="myModal" class="href_modal">

<!-- Modal content -->
<div class="href-content">
  <div class="close" id="close" onclick="close_form()" >&times;</div>
  <input type="hidden" name="Online_consultname" id="Online_consultname"  value="<?php echo $Online_consultname; ?>">

   <p>Online consultation is not available for <span id="de_value" ></span></p>


    <button type="button" class="pop_button" onclick="close_form()" >ok</button>

</div>


</div>
<script>
function openform() {

    // var value = $("#Online_consultname").val();
    //             $("p").after(value);
    //             return false;
                // var hide_val =   document.getElementById("Online_consultname").value;
                // console.log(hide_val);
                // alert(hide_val);
                // var ddd= document.getElementById("de_value").innerHTML= hide_val;
                // console.log(ddd,"biinijnij");
                // alert(ddd)
document.getElementById("myModal").style.display = "block";

}
function close_form(){
document.getElementById("myModal").style.display = "none";
}

window.onclick = function(event) {
if (event.target == myModal) {
  myModal.style.display = "none";
}
}

</script>

<script defer src="http://apollo.bestdemo.site/search.js"></script>

     <script defer src="http://apollo.bestdemo.site/script.js"></script>

    <script>



        var $ = jQuery;

        $( function() {

            var availableTags = [

              {value:"ActionScript", link:'https://google.com'},

              {value:"AppleScript",link:'https://google.com'},

              {value:"Asp",link:'https://google.com'},

              {value:"BASIC",link:'https://google.com'},

              {value:"C",link:'https://google.com'},

              {value:"C++",link:'https://google.com'},

              {value:"Clojure",link:'https://google.com'},

              {value:"COBOL",link:'https://google.com'},

              {value:"ColdFusion",link:'https://google.com'},

              {value:"Erlang",link:'https://google.com'},

              {value:"Fortran",link:'https://google.com'},

              {value:"Groovy",link:'https://google.com'},

              {value:"Haskell",link:'https://google.com'},

              {value:"Java",link:'https://google.com'},

              {value:"JavaScript",link:'https://google.com'},

              {value:"Lisp",link:'https://google.com'},



            ];

				/*
            $( "#tags" ).autocomplete({
              source: availableTags,
              select: function( event, ui ) {
                console.log(ui.item.link);
                window.location.replace(ui.item.link)
              }
            });
			*/





          } );



    </script>

    <script>

        var typingTimer;                //timer identifier
        var doneTypingInterval = 3000;  //time in ms, 3 seconds for example
        var $input = $('#latest-word');

        //on keyup, start the countdown
        $input.on('keyup', function () {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(doneTyping, doneTypingInterval);
    });


//user is "finished typing," do something
function doneTyping () {
    if ($.trim($("#latest-word").val()) == ""){
		return false;
}
    $.ajax({
                    url: "http://apollo.bestdemo.site/insert.php",
                    type: "post",
                    data: {
                        Name: $("#latest-word").val()
                    },
                    success: function(data) {

                        // $("#latest-word").val('');
                    }
                });

  //do something

}
</script>




	<!--<script src="js/bootstrap.min.js"></script> -->

	<script type="text/javascript">



		$('.dropdown-menu a.dropdown-toggle').on('click', function (e) {

			if (!$(this).next().hasClass('show')) {

				$(this).parents('.dropdown-menu').first().find('.show').removeClass("show");

			}

			let $subMenu = $(this).next(".dropdown-menu");

			$subMenu.toggleClass('show');

			$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {

				$('.dropdown-submenu .show').removeClass("show");

			});

			return false;

		});



		//   $("#mainnav ul li").click(function() {

        //   console.log("clicked")

        //   $("#mainnav ul  li  ul.submenu").css("display","");

        //  });

		jQuery( document ).ready(function() {
			jQuery('.card-anchor a:nth-child(2)').click(function() {
				var h = jQuery(this).attr('href');
				if (h==undefined || h=='#'){
					document.getElementById("myModal").style.display = "block";

					// alert(h);
					var u = jQuery(this).next().attr('href');

					var result = u.replace("../", "");
					result = trimWord(result,"/");
					var myArray = result.split("/");
				    var dr_consult = myArray;
                    var dr = dr_consult[myArray.length - 1];
					dr = dr.replace("-", " ");
                    dr = dr.replace("-", " ");
					$('#de_value').html(dr);
					//document.getElementById("de_value").innerHTML = myArray[3];

					//   var value = $("#Online_consultname").val();
					// $("p").after(value);
					// return false;
					// alert(myArray);

				}



			});
		});

        $(document).ready(function(){

            // online consultaion
            $('section.docter-profile .media-body a[href="#"]').click(function() {
                document.getElementById("myModal").style.display = "block";
                $("#de_value").html($('section.docter-profile .media-body h5').html())
                $("#de_value").html($('section.docter-profile .media-body h1').html())
                });


});

	</script>
     <script>

// new instance of speech recognition
	var recognition = new webkitSpeechRecognition();

	var allLinks = document.getElementsByTagName('a');
	// get last word said element
	var strongEl = document.getElementById('latest-word');

	// set params

function myFunction() {
	// get navigation links
	recognition.continuous = true;
	recognition.interimResults = true;

	if(strongEl.value=='') {

        document.getElementsByClassName("search-btn")[0].style.display = "none";
        document.getElementsByClassName("search-btn1")[0].style.display = "block";
        recognition.start();
	}

}
    function myFunction1() {
	// get navigation links
	recognition.continuous = false;
	recognition.interimResults = false;

	// if(strongEl.value=='') {
        document.getElementById('latest-word').value = '';
    document.getElementsByClassName("search-input")[0].style.display = "none";
		recognition.stop();
        document.getElementsByClassName("search-btn")[0].style.display = "flex";
        document.getElementsByClassName("search-btn1")[0].style.display = "none";

      // Set the onClick property of the stop button
//  else {
//     // Stop the Speech Recognition
//     recognition.stop();
//   };



}



recognition.onresult = function(event){
	  // delve into words detected results & get the latest
	  // total results detected
	  var resultsLength = event.results.length -1 ;
	  // get length of latest results
	  var ArrayLength = event.results[resultsLength].length -1;
	  // get last word detected
	  var saidWord = event.results[resultsLength][ArrayLength].transcript;

	  // loop through links and match to word spoken
	  for (i=0; i<allLinks.length; i++) {

		// get the word associated with the link
		var dataWord = allLinks[i].dataset.word;

		// if word matches chenge the colour of the link
		if (saidWord.indexOf(dataWord) != -1) {
		  allLinks[i].style.color = 'red';
		}
	  }
    //   setTimeout(function(){
        document.getElementById('latest-word').value = '';
        document.getElementsByClassName("search-input")[0].style.display = "none";
        var strongEl = document.getElementById('latest-word');
        // if(strongEl.value=='') {

        // document.getElementsByClassName("search-btn")[0].style.display = "flex";
        // document.getElementsByClassName("search-btn1")[0].style.display = "none";
        //      recognition.continuous = false;
        // recognition.interimResults = false;
        // recognition.stop();
        // }
      if((saidWord.replace('/\s/g','')).length ==  0){
      	recognition.continuous = false;
        recognition.interimResults = false;
        recognition.stop();
        document.getElementsByClassName("search-btn")[0].style.display = "block";
        document.getElementsByClassName("search-btn1")[0].style.display = "none";
        document.getElementById('latest-word').value = '';
        document.getElementsByClassName("search-input")[0].style.display = "none";

}
//  }, 20000);
	  // append the last word to the bottom sentence
	  document.getElementsByClassName("search-input")[0].style.display = "block";
	  strongEl.value = saidWord;
      //   filterprocess
    filterallapplo(saidWord.trim());

	}

	// speech error handling
	recognition.onerror = function(event){
	  console.log('error?');
	  console.log(event);

	}

</script>

