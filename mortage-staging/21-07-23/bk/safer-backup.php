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
<link async rel="icon" href="https://www.dhiindia.com/image/favicon.png">
<meta name="Robots" content="index, follow" />
<meta name="allow-search" content="yes" />
<meta name="revisit-after" content="daily" />
<meta name="Rating" content="General" />
<meta name="distribution" content="global" />
<meta name="author" content="DHIIndia.com" />
<meta name="copyright" content="DHIIndia.com" />
<!-- Bootstrap core CSS -->
<link async rel="stylesheet" href="<?php echo $host;?>/css/bootstrap.min.css">
<link  async rel="stylesheet" href="<?php echo $host;?>/css/all.min.css" >
<link  async href="<?php echo $host;?>/css/carousel.min.css" rel="stylesheet">
<!---   <link async href="<?php echo $ruri; ?>" rel="canonical">  -->
<link async href="<?php echo $canonical_uri; ?>" rel="canonical">
<link async href="<?php echo $host;?>/css/jquery-ui.min.css" rel="stylesheet">
<link async href="<?php echo $host;?>/css/wpcustom.min.css" rel="stylesheet">
<link async href="<?php echo $host;?>/css/owl.carousel.min.css" rel="stylesheet">
<link async href="<?php echo $host;?>/css/owl.theme.default.min.css" rel="stylesheet">
<link async rel="stylesheet" href="<?php echo $host;?>/css/open-iconic-bootstrap.min.css" >
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

<!-- Google tag (gtag.js) --> 
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-924761625"></script> 
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'AW-924761625');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TFD49LS');</script>
<!-- End Google Tag Manager -->

<!-- Event snippet for Submit lead form conversion page -->
<script> gtag('event', 'conversion', {'send_to': 'AW-924761625/gRelCOXo8uIDEJn8-rgD'}); </script>

<style>
   .covid-logo-mobile{display: none;}
   @media (max-width: 480px) {
   .covid-logo-mobile{display: block;}
   }
</style>