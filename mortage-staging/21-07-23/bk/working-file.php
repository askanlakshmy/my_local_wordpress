<?php


//	include 'classes/userinfo.php';
    $userinfo = new userinfo();

	if($_SERVER['HTTP_HOST'] == 'dhiindia.com'){
 		$host = $userinfo->getBaseUrl('prod');
	}else{
	 	$host = $userinfo->getBaseUrl('test');
	}
	$ruri = $host.$_SERVER['REQUEST_URI'];






?>


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
        <a  href="<?php echo $host;?>"><img class="logo pt-2 pb-2" alt="direct hair implantation" src="<?php echo $host;?>/image/dhi-small.webp" width="150"></a>
    </div>
            <div class="col-sm-4" style="text-align: center;">
        <!--<a  href="<?php echo $host;?>/pdf/Covid-Shield.pdf" target="_blank"><img class="pt-2 pb-2" alt="Covid Shield" src="<?php echo $host;?>/image/Covied-Shield-Logo.png"></a>-->
    </div>
    <div class="col-sm-4 d-none d-sm-block">
         <form class="form-inline pt-3 pb-3 mt-md-0 float-right" id="mobilenav">
            <!-- <a href="<?php echo $host;?>/book-an-appointment.php" class="btn btn-outline-info my-sm-0 ">Book Your Consultation</a> -->
             <a style="color: #7cc4c3;" href="tel:18001039300" onclick="ga('send','event','button','click','18001039300')" class=" my-2 my-sm-0 hed_bt" ><i class="fas fa-phone-volume"></i> 1800 103 9300</a>
             <a id="pixelclick" href="<?php echo $host;?>/book-an-appointment.php" onclick="ga('send','event','button','click','book_an_appointment')" class="btn btn-outline-info my-3  ml-3 btn-sm">Book Consultation</a>
        </form>
    </div>
    </div>
    </div>

   <script>
     $('#pixelclick').click(function() {
       // alert('welcome');
     });
   </script>



</div>


<div class="custom_nav " >

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top-mobile">


        <a  href="<?php echo $host;?>" class="d-block d-sm-none"><img class="logo pt-2" alt="direct hair implantation" src="<?php echo $host;?>/image/dhi-small.webp" width="80"></a>
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
   						<a class="dropdown-item"  href="<?php echo $host;?>/blog/regenera-activa-hair-loss-treatment/"> Regenera Activa</a>
                           </div>
                           </div>
                           </div>
                </li>
                <li class="nav-item dropdown">
                  <!-- <a  href="<?php echo $host;?>/clinics.php"></a> -->
                  <a class="dropdown-toggle" href="https://www.dhiindia.com/clinics/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
		<li class="nav-item dropdown">
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
                  <a  href="<?php echo $host;?>/boost-your-immunity" target="_blank">IN-Vitality</a>
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
                        <!-- <a class="dropdown-item" href="https://shop.dhiindia.com/collections/supplements">Hair Supplements</a> -->
                        <a class="dropdown-item" href="https://shop.dhiindia.com/collections/supplements">Hair Tonic & Serum</a>
                        <a class="dropdown-item" href="https://shop.dhiindia.com/collections/laser-cap">Hair Supplements</a>
  						<a class="dropdown-item" href="https://shop.dhiindia.com/collections/combos">DHI Laser Cap</a>
   
   					    
   
                    </div>
                </li>
        
                <!-- <li class="nav-item">
                  <a  href="<?php echo $host;?>/client-feedback/"> Patient Feedback</a>
                </li> -->
        
        <!--    
                <li class="nav-item">
                  <a  href="<?php echo $host;?>/blog">Blog</a>
                </li>
        -->
		<!--<li class="nav-item">
                 <a  href="<?php echo $host;?>/medical-tourism">Medical Tourism</a>
                     
                </li>
                -->        
        <!---        
                <li class="nav-item">
                  <a  href="<?php echo $host;?>/questions-you-must-ask">FAQs</a>
                </li>
        --->         
            </ul>
        </div>
        <!--<a  href="<?php echo $host;?>/pdf/Covid-Shield.pdf" target="_blank" class="covid-logo-mobile"><img class="logo pt-2 pb-2" alt="Covid Shield" src="<?php echo $host;?>/image/Covied-Shield-Logo-white.png"></a>-->
    </nav>
</div>
</section>