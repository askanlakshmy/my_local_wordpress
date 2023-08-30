<?php
header('Content-Type: text/html; charset=utf-8');
$ts = gmdate("D, d M Y H:i:s") . " GMT";
header("Expires: $ts");
header("Last-Modified: $ts");
header("Pragma: no-cache");
header("Cache-Control: no-cache, must-revalidate");
    include 'classes/userinfo.php';
    $userinfo = new userinfo();

	if($_SERVER['HTTP_HOST'] == 'dhiindia.com'){
 		$host = $userinfo->getBaseUrl('prod');
	}else{
	 	$host = $userinfo->getBaseUrl('test');
	}
	$ruri = $host.$_SERVER['REQUEST_URI'];







$uri_arr = parse_url($ruri);

$uri_path = $uri_arr['path'];

$query = $_GET;

unset($query['utm_campaign']);
unset($query['utm_id']);
unset($query['utm_medium']);
unset($query['utm_source']);


$query_str = http_build_query($query);

if(!empty($query_str)){
	$canonical_uri = "$host$uri_path?$query_str" ;
}else{
	$canonical_uri = $host.$uri_path ;
}



?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">



<link rel="icon" href="https://www.dhiindia.com/image/favicon.png">

    <meta name="Robots" content="index, follow" />
    <meta name="allow-search" content="yes" />
    <meta name="distribution" content="global" />
    <meta name="author" content="DHIIndia.com" />
    <meta name="copyright" content="DHIIndia.com" />
   
<!-- Bootstrap core CSS -->

<link rel="stylesheet" href="<?php echo $host;?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $host;?>/css/all.min.css" >
<link href="<?php echo $host;?>/css/carousel.min.css" rel="stylesheet">

<link href="<?php echo $canonical_uri; ?>" rel="canonical">

<link href="<?php echo $host;?>/css/jquery-ui.min.css" rel="stylesheet">
<link href="<?php echo $host;?>/css/wpcustom.min.css" rel="stylesheet">
<link href="<?php echo $host;?>/css/owl.carousel.min.css" rel="stylesheet">
<link href="<?php echo $host;?>/css/owl.theme.default.min.css" rel="stylesheet">

<link rel="stylesheet" href="<?php echo $host;?>/css/open-iconic-bootstrap.min.css" >
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script type='text/javascript'> 
window.data_1686 = window.data_1686 || [];
window.data_1686.push({
'ProductId': '$ProductId$',
'ProductCategoryList': '$ProductCategoryList$',
'PageType': 'product'
});
(function(d) {
		var s = d.createElement('script'); s.async = true;s.id='DLFNPMMP1';s.type='text/javascript';
		s.src ='https://cdn.preciso.net/aud/clientjs/ptag.js?1686';
		var a = d.getElementsByTagName('script')[0]; a.parentNode.insertBefore(s, a);
	}(document));
</script>
<!-- Facebook Pixel Code -->
<script>
setTimeout(function(){
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '269390897852945');
fbq('track', 'PageView');
}, 2000);
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=269390897852945&ev=PageView&noscript=1"
/></noscript>

<!-- EndFacebook Pixel Code -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
if (location.hostname == 'dev.newdhi.com') {
  ga('set', 'sendHitTask', null);
}
  ga('create', 'UA-71179767-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- Global site tag (gtag.js) - Google Ads: 924761625 -->
<script async
src="https://www.googletagmanager.com/gtag/js?id=AW-924761625"></script>
<script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());
   gtag('config', 'AW-924761625', {'allow_enhanced_conversions':true});
</script>
<script>
  gtag('config', 'AW-924761625/rAvSCNrigIcBEJn8-rgD', {
    'phone_conversion_number': '1800 103 9300'
  });
</script>
<!-- Taboola Pixel Code -->
<script>
  window._tfa = window._tfa || [];
  window._tfa.push({notify: 'event', name: 'page_view', id: 1157126});
  !function (t, f, a, x) {
         if (!document.getElementById(x)) {
            t.async = 1;t.src = a;t.id=x;f.parentNode.insertBefore(t, f);
         }
  }(document.createElement('script'),
  document.getElementsByTagName('script')[0],
  '//cdn.taboola.com/libtrc/unip/1157126/tfa.js',
  'tb_tfa_script');
</script>
<!-- End of Taboola Pixel Code -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TFD49LS');</script>
<!-- End Google Tag Manager -->

<style>
    .covid-logo-mobile{display: none;}
    @media (max-width: 480px) {
        .covid-logo-mobile{display: block;}
        
    }
    .submenunew_changes{
        display: flex;
    }
@media (max-width:991px){
    .mobile_overflow{
        height:455px;
        overflow:auto;
    }
.submenunew_changes {
    display: inline-block;
}
.dropdown-menu.show {
    display: block !important;
}
.dropdown-menu {
    display: none !important;
}
.custom_nav ul li:hover {
    border-bottom: none !important;
}
.dropdown-menu.show {
    border-bottom: 1px solid #fff;
    border-radius: 0;
}
}
</style>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TFD49LS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<input type="hidden" name="baseurl" id="baseurl" value="<?php echo $host;?>">
<section class="box-position">
    <div class="container-fluid">
        <?php
            $width = "<script>var windowWidth = screen.width; document.writeln(windowWidth); </script>";
            $sizeofwindow = "700";
            if($width > $sizeofwindow){
        ?>
        <!--Start of Tawk.to Script-->
             <script style="display: none;">
                var mobile = (/iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
                if(!mobile){
                     var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                    (function(){
                    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                    s1.async=true;
                    s1.src='https://embed.tawk.to/5a83fb094b401e45400ceb5b/default';
                    s1.charset='UTF-8';
                    s1.setAttribute('crossorigin','*');
                    s0.parentNode.insertBefore(s1,s0);
                    })();

                }
        </script>


        <!--End of Tawk.to Script-->
        <?php } ?>
        <div class=" pull-right message_box d-block d-sm-none" style="display: none !important;">

            <!-- Message box title    -->
            <div class="panel clearfix">
                <div class="panel-heading top-bar float-right" role="tab" id="open-message">
                    <div class="panel-title">
                        <a class="collapsed" data-plussign="" data-toggle="collapse" data-parent="#accordion" href="#message" aria-expanded="false" aria-controls="collapseTwo">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Message body  -->

            <div id="message" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body p-2">
                    <form  action="#" name="needHelpForm" id="needHelpForm">
                        <input type="hidden" name="sourse" value="Need Help">
                        <p class="text-center">Request a Callback</p>
                        <small id="emailHelp" class="pb-2 form-text text-muted text-center">Speak to Our Hair Loss Experts</small>

                        <div class="form-group ">
                            <input type="text" class="form-control" data-input="name" name="name"  placeholder="Name*" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" data-input="phone" name="phone" placeholder="Phone*" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" data-input="email" name="email" placeholder="Email*" required="required">
                        </div>

                        <div class="form-group">
                            <select  class="form-control" data-input="city" name="city" required="">
                                <option value="">Select City</option>
                                <option value="Bangalore">Bangalore</option>
                                <option value="Calicut">Calicut</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Coimbatore">Coimbatore</option>
                                <option value="Delhi">Delhi </option>
                                <option value="Gurugram">Gurugram</option>
                                <option value="Guwahati">Guwahati</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Jaipur">Jaipur</option>
                                <option value="Kochi">Kochi</option>
                                <option value="Kolkata">Kolkata</option>
                                <option value="Lucknow">Lucknow</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="button" data-formsubmitbtn="" class="form-control btn-common"  value="Send">
                        </div>

                    </form>
                    <div class="alert alert-success" data-successdiv="" style='display:none;'>
                        Thanks for contacting us! We will get in touch with you shortly.
                    </div>
                </div>
            </div>
        </div>
    <?php //endif;?>
    </div>
</section>
<section id="myHeader" style="background: #fff;">
<div class="top_nav d-none d-sm-block">
    <div class="container-fluid">
        <div class="row clearfix">
        <div class="col-sm-4">
        <a  href="<?php echo $host;?>"><img class="logo pt-2 pb-2" alt="direct hair implantation" src="<?php echo $host;?>/image/dhi-small.png" width="150"></a>
    </div>
            <div class="col-sm-4" style="text-align: center;">
        <!--<a  href="<?php echo $host;?>/pdf/Covid-Shield.pdf" target="_blank"><img class="pt-2 pb-2" alt="Covid Shield" src="<?php echo $host;?>/image/Covied-Shield-Logo.png"></a>-->
    </div>
    <div class="col-sm-4 d-none d-sm-block">
         <form class="form-inline pt-3 pb-3 mt-md-0 float-right" id="mobilenav">
            <!-- <a href="<?php echo $host;?>/book-an-appointment.php" class="btn btn-outline-info my-sm-0 ">Book Your Consultation</a> -->
             <a href="tel:18001039300" onclick="ga('send','event','button','click','18001039300')" class=" my-2 my-sm-0 hed_bt" ><i class="fas fa-phone-volume"></i> 1800 103 9300</a>
             <a id="pixelclick" href="<?php echo $host;?>/book-an-appointment.php" onclick="ga('send','event','button','click','book_an_appointment')" class="btn btn-outline-info my-3  ml-3 btn-sm">Book Consultation</a>
        </form>
    </div>
    </div>
    </div>

<!--
  <script>
   	const element = document.getElementById("pixelclick");
	element.addEventListener("click", myFunction);
	function myFunction() {
 		<script>!function(px){function e(t,e,c){var n="",r="";try{""!=(n=function(t,e){try{var c={};e.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(t,e,n){c[e]=n});return c.hasOwnProperty(t)?c[t]:""}catch(t){return""}}(t,c))?function(t,e,c){try{var n,r;c?((n=new Date).setTime(n.getTime()+864e5),r="; expires="+n.toGMTString()):r="",document.cookie=t+"="+e+r+";Path=/"}catch(t){}}(e,n,1):n=function(t){try{var e=document.cookie.match(new RegExp("(^| )"+t+"=([^;]+)"));if(e)return e[2]}catch(t){}return null}(e),r=""!=n&&null!=n?"&"+t+"="+n:"&"+t+"="}catch(t){}return r}var c="",n="",r="";try{n=e("ad","acf",c=window.location.href),r=e("col_ci","col_ci",c)}catch(t){console.log(t)}var a="https://ade.clmbtech.com/cde/eventTracking.htm?pixelId="+px+"&_w=1&_t=2"+n+r+"&rd="+(new Date).getTime();(new Image).src=a}('12923');</script><noscript><img height='1' width='1' style='display:none' src='https://ade.clmbtech.com/cde/eventTracking.htm?pixelId=12923&_w=1&_t=2'/></noscript>
	}
  </script> -->

</div>


<div class="custom_nav " >

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top-mobile">


        <a  href="<?php echo $host;?>" class="d-block d-sm-none"><img class="logo pt-2" alt="direct hair implantation" src="<?php echo $host;?>/image/dhi-small.png" width="80"></a>
<a href="tel:18001039300" onclick="ga('send','event','button','click','18001039300')" class="  my-sm-0  text-white d-block d-sm-none" ><i class="fas fa-phone-volume"></i> 1800 103 9300</a>
  <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto mx-auto mobile_overflow">
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hair Transplant
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="<?php echo $host;?>/direct-hair-implantation/"> Direct Hair Implantation - DHI</a>
                        <a class="dropdown-item" href="<?php echo $host;?>/hair-transplant-results/"> Results</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Direct Hair Fusion
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo $host;?>/direct-hair-fusion/">Cosmetic Hair Patch</a>
                        <!--<a class="dropdown-item" href="<?php echo $host;?>/achievements">Milestone</a>-->
                         <a class="dropdown-item" href="https://www.dhiindia.com/dhi-hair-replacement-before-after-results/">  Results</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Treatments
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="submenunew_changes">
                    <div class="submenu_changes">
                        <a class="dropdown-item" href="<?php echo $host;?>/hair-loss-diagnosis">Alopecia Diagnostic Test</a>
                        <a class="dropdown-item" href="<?php echo $host;?>/direct-hair-implantation">Direct Hair Implantation</a>
                        <a class="dropdown-item" href="<?php echo $host;?>/direct-hair-fusion">Cosmetic Hair Patch</a>
                        <a  class="dropdown-item"  href="<?php echo $host;?>/scalp-micro-pigmentation">Scalp Micropigmentation</a>
                        <a class="dropdown-item" href="<?php echo $host;?>/eyebrow-restoration">Eyebrow Restoration</a>
                        </div>
                        <div class="submenu_changes">
                        <a class="dropdown-item"  href="<?php echo $host;?>/beard-transplant">Beard Restoration</a>
                        <a class="dropdown-item"  href="<?php echo $host;?>/scar-repair-treatments">Scar Repair</a>   
                        <a class="dropdown-item"  href="https://dhiindia.com/blog/growth-factor-concentrate-therapy-treatment-for-hair-loss/"> GFC</a>
                        <a class="dropdown-item"  href="<?php echo $host;?>/prp-hair-treatments/"> PRP</a>
                        <a class="dropdown-item"  href="<?php echo $host;?>/blog/regenera-activa-hair-loss-treatment/">Regenera Activa</a>

</div>
</div>
                        
                        <!--<a class="dropdown-item"  href="https://shop.dhiindia.com/">Hair Care Products</a>-->
                    </div>
                </li>
		<li class="nav-item dropdown">
        <a class="dropdown-toggle" href="/clinics/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Clinic Locations
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                    <div class="submenunew_changes">
                                <div class="submenu_changes">
                                    <a class="dropdown-item" href="<?php echo $host;?>/hair-transplant-clinic-delhi/">Delhi</a>
                                    <a class="dropdown-item" href="<?php echo $host;?>/hair-transplant-clinic-gurgaon/">Gurgaon</a>
                                    <a class="dropdown-item" href="<?php echo $host;?>/hair-transplant-clinic-kolkata/">Kolkata </a>
                                    <a  class="dropdown-item"  href="<?php echo $host;?>/hair-transplant-clinic-noida/">Noida</a>
                                    <a class="dropdown-item" href="<?php echo $host;?>/hair-transplant-clinic-chandigarh/">Chandigarh</a>
                                    <a class="dropdown-item" href="<?php echo $host;?>/hair-transplant-clinic-kochi/">Kochi</a>
                                    <a class="dropdown-item" href="<?php echo $host;?>/hair-transplant-clinic-jaipur/">Jaipur</a>
                               </div>
                               <div class="submenu_changes">
                                    <a class="dropdown-item" href="<?php echo $host;?>/hair-transplant-clinic-chennai/">Chennai</a>
                                    <a class="dropdown-item" href="<?php echo $host;?>/hair-transplant-clinic-hyderabad/">Hyderabad</a>
                                    <a class="dropdown-item" href="<?php echo $host;?>/hair-transplant-clinic-bangalore/">Bangalore</a>
                                    <a  class="dropdown-item"  href="<?php echo $host;?>/hair-transplant-clinic-lucknow/">Lucknow</a>
                                    <a class="dropdown-item" href="<?php echo $host;?>/hair-transplant-clinic-guwahati/">Guwahati</a>
                                    <a class="dropdown-item" href="<?php echo $host;?>/hair-transplant-clinic-calicut/">Calicut</a>
                                    <a class="dropdown-item" href="<?php echo $host;?>/hair-transplant-clinic-coimbatore/">Coimbatore</a>
                                </div>
                       </div>
                    
                    <!--<a class="dropdown-item"  href="https://shop.dhiindia.com/">Hair Care Products</a>-->
                </div>
                </li>
                <li class="nav-item  dropdown">
                    <!-- <a  href="<?php echo $host;?>/clinics.php"></a> -->
                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        All About Hair
                    </a>
                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                      <div class="submenunew_changes">
                                  <div class="submenu_changes">
                                      <a class="dropdown-item" href="<?php echo $host;?>/hair-loss/">Hair Loss</a>
                                      <a class="dropdown-item" href="<?php echo $host;?>/hair-loss/">Male Hair Loss</a>
                                      <a class="dropdown-item" href="<?php echo $host;?>/female-hair-loss/">Female Hair Loss</a>
                                      <a  class="dropdown-item"  href="<?php echo $host;?>/hair-loss-causes/">Causes of Hair Loss</a>
                                      <a class="dropdown-item" href="<?php echo $host;?>/Hair-loss-glossary/">Hair Loss Glossary</a>
                                      <a class="dropdown-item" href="<?php echo $host;?>/alopecia-types/">Alopecia</a>
                                      <a class="dropdown-item" href="<?php echo $host;?>/medical-tourism/">Medical Tourism</a>
                                   
                                 </div>
                                 <div class="submenu_changes">
                                      <a class="dropdown-item" href="<?php echo $host;?>/hair-transplant-cost/">Hair Transplant Cost</a>
                                      <a class="dropdown-item" href="<?php echo $host;?>/hair-transplant-videos/">Hair Transplant Videos</a>
                                      <a class="dropdown-item" href="<?php echo $host;?>/hair-transplant-guide/">Hair Transplant Guide</a>
                                      <a  class="dropdown-item"  href="<?php echo $host;?>/questions-you-must-ask/">Hair Transplant FAQs</a>
                                      <a class="dropdown-item" href="<?php echo $host;?>/hair-transplant-technique/">Hair Transplant Techniques</a>
                                      <a class="dropdown-item" href="<?php echo $host;?>/blog/">Hair Transplant Blog</a>
                                      <a class="dropdown-item" href="<?php echo $host;?>/hair-transplant-cost-in-delhi/">Hair Transplant Cost in Delhi</a>
                
                                  </div>
                         </div>
                      
                      <!--<a class="dropdown-item"  href="https://shop.dhiindia.com/">Hair Care Products</a>-->
                  </div>
                </li>
                <!--<li class="nav-item">
                  <a  href="<?php echo $host;?>/boost-your-immunity.php" target="_blank">IN-Vitality</a>
                </li>-->

                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="<?php echo $host;?>/hair-transplant-results" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Results
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo $host;?>/dhi-hair-transplant-results-men">Men Hair Transplant</a>
                        <a class="dropdown-item" href="<?php echo $host;?>/dhi-hair-transplant-results-women">Female Hair Transplant</a>
                        <a class="dropdown-item" href="<?php echo $host;?>/dhi-hair-transplant-results-mens-beard">Beard Transplant</a>
                        <a  class="dropdown-item"  href="<?php echo $host;?>/dhi-eyebrows-hair-transplant-results-eyebrows">Eyebrow Transplant</a>
                        <a class="dropdown-item" href="<?php echo $host;?>/dhi-hair-transplant-results-scalp">Scalp Micro Pigmentation</a>
                        
                    </div>
                    
                </li>
		<li class="nav-item dropdown">
                  <a class="dropdown-toggle" href="https://shop.dhiindia.com/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hair Care Products</a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="https://shop.dhiindia.com/collections/shampoos">Shampoos & Conditioner</a>
                    <!--    <a class="dropdown-item" href="https://shop.dhiindia.com/collections/lotions-serums">Hair Lotions & Serum</a>	-->
                        <a class="dropdown-item" href="https://shop.dhiindia.com/collections/supplements">Hair Tonic & Serum</a>
                        <a class="dropdown-item" href="https://shop.dhiindia.com/collections/laser-cap">Hair Supplements</a>
  						<a class="dropdown-item" href="https://shop.dhiindia.com/collections/combos">DHI Laser Cap</a>
                  		
                    </div>
                </li>
  		<!-- <li class="nav-item">
                  <a  href="<?php echo $host;?>/client-feedback/"> Patient Feedback</a>
        </li> -->
	
  <!----
  		<li class="nav-item">
                  <a  href="<?php echo $host;?>/blog">Blog</a>
        </li>
  -->
		<!--
  				<li class="nav-item">
                 <a  href="<?php echo $host;?>/medical-tourism">Medical Tourism</a>     
                </li>
                -->        
  <!---- 
  		<li class="nav-item">
                  <a  href="<?php echo $host;?>/questions-you-must-ask">FAQs</a>
       </li>
  ---->
                 
            </ul>
        </div>
        <!--<a  href="<?php echo $host;?>/pdf/Covid-Shield.pdf" target="_blank" class="covid-logo-mobile"><img class="logo pt-2 pb-2" alt="Covid Shield" src="<?php echo $host;?>/image/Covied-Shield-Logo-white.png"></a>-->
    </nav>
</div>
</section>