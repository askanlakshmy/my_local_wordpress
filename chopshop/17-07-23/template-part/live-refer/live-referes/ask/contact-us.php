<?php
/**
 * Template Name: Contact Us
 */
echo get_header(); ?>
<style>
@media screen and (max-width:979px) and (min-width:769px){
          .contactpage_form input[type="text"], .contactpage_form input[type="email"] {
                    border: none;
                    padding: 5px 3px;
                    font-family: 'open_sansregular';
                    font-size: 17px;
                    border-bottom: 1px solid #0bbff2;
                    width: 80%;
          }
          .contactpage_form textarea {
                    width: 80%;
                    border: 1px solid #0bbff2;
                    height: 150px;
                    padding: 5px 3px;
                    font-family: 'open_sansregular';
                    font-size: 17px;
          }
}

</style>
<section class="content">
    <!--innerbanner + title-->
    <div class="div100">
        <div class="innerbanner contact-banner">
            <div class="wrapper"><h1><?php echo get_field('contact_us')? the_field('contact_us'):'';?></h1></div>
        </div>
    </div>
    <!--innerbanner + title-->
    <!--breadcrumb-->
    <div class="div100">
        <div class="wrapper">
            <div class="breadcrumb">
                <a href="<?php echo site_url(); ?>">Home</a> >> <a class="current" href="#"/>Contact Us</a>
            </div>
        </div>
    </div>
    <!--breadcrumb-->
    <div class="div100 mt25">
        <div class="wrapper">
            <div class="100">
                <div class="inner-main-title"><?php echo get_field('help_you')? the_field('help_you'):'';?></div>
                <div class="div100"><hr class="sepl" /></div>
            </div>
            <div class="100">
                <?php echo get_field('help_you_description')? the_field('help_you_description'):'';?>
            </div>

            <div class="div100 mt40">
                <div class="div40 services-inner">
                    <div class="div95">
                        <div class="100">
                            <div class="inner-main-title">Contact Form</div>
                            <div class="div100"><hr class="sepl" /></div>
                        </div>
                        <div class="100">
                            <div class="contactpage_form">
                                <div id="div_req_error" style="color:red;"></div><br/>
                                <div id="display"></div>
                                <form name="contact" id="contact" method="POST" enctype="multipart/form-data" >
                                    <div class="field">
                                        <input type="text" name="fname" id="fname" placeholder="Name *"/>
                                    </div>
                                    <div class="field">
                                        <input type="text" name="email" id="email" placeholder="Email *"/>
                                    </div>
                                    <div class="field">
                                        <input type="text" name="phone" id="phone" placeholder="Phone"/>
                                    </div>
                                    <div class="field">
                                        <input type="text" name="website" id="website" placeholder="Website"/>
                                    </div>
									<div class="field">
									<input type="file" id="image_data" name="image_data" accept="">
									 </div>
                                    <div class="field-noborder">
                                        <textarea name="message" id="message"  placeholder="Message"></textarea>
                                    </div>
                                    <div class="field">
									<div class="g-recaptcha" data-sitekey="6Ld4Wz4cAAAAAAFbhgI1QOlCxHO5n2Bdab9PqWg9"></div>
                                    <?php
                                            if(!empty($_POST['g-recaptcha-response']))
                                            {
                                                
                                                $secret = '6Ld4Wz4cAAAAAF7lLzWXcW83ZQyteSqqMAuBDw86';
                                                    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
                                                    $responseData = json_decode($verifyResponse);
                                                    if($responseData->success)
                                                        $message = "g-recaptcha verified successfully";
                                                    else
                                                        $message = "Some error in verifying g-recaptcha";
                                                echo $message;
                                            }
                                     ?>
                                     
									 </div>
                                    <input type="hidden" id="siteurl" value="<?php echo get_template_directory_uri(); ?>"/>
                                    <input type="submit" name="contact_submit" id="contact_submit" value="Submit" />

                                    <div id="loading" style="display:none;">
                                        <img src="<?php echo get_template_directory_uri()?>/images/loading.gif" alt="Please wait" style="float:left;margin-right:5px;"/><p style="line-height:17px">Please wait...</p>
                                    </div>
                                    

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

				<div class="div60">
			   <div class="div100">
                <div class="div100 contact-address" style="margin-left:0px;">
				<div itemscope itemtype="http://schema.org/LocalBusiness">
                        <div class="div60">
							<!--address-->
							<div class="div100">
								<img src="<?php echo get_template_directory_uri(); ?>/images/contact-address.png" alt="address"/>
								<div class="contact-inner-main-title">India</div>
							</div>
							<div class="div100 mt10 mb30 address">
								<?php //echo get_field('contact_address')? the_field('contact_address'):'';?>
							<div itemscope itemtype="http://schema.org/LocalBusiness">
							<strong><span itemprop="name">ASKAN TECHNOLOGIES</span></strong>
							<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
							<span itemprop="streetAddress">No:48, (Backside), Pavendar Street,</span><br/>
							<span itemprop="addressLocality">Mariamman Nagar,</span><br/>
							<span itemprop="addressLocality">Mudaliarpet,</span><br/>
							<span itemprop="addressRegion">Puducherry - 605004</span>
							</div><br/>
							<span><strong>Landmark:</strong><br/>Near Janakiraman Inn Hotel (100ft Road)<br/><br/></span>
							</div>
							</div>
							<!--address-->
						</div>
						<div class="div40">
							<!--phone-->
							<div class="div100">
								<img src="<?php echo get_template_directory_uri(); ?>/images/contact-phone.png" alt="phone"/>
								<div class="contact-inner-main-title">Phone</div>
							</div>
							<div class="div100 mt5 mb20"><span itemprop="telephone">0413 4500022</span></div>
							<!--phone-->
							<!--email-->
							<div class="div100">
								<img src="<?php echo get_template_directory_uri(); ?>/images/contact-mail.png" alt="email"/>
								<div class="contact-inner-main-title">Email</div>
							</div>
							<div class="div100 mt5 mb20"><span itemprop="email">info@askantech.com</span></div>
							<!--email-->
							<!--skype-->
							<div class="div100">
								<img src="<?php echo get_template_directory_uri(); ?>/images/contact-skype.png" alt="skype"/>
								<div class="contact-inner-main-title">Skype</div>
							</div>
							<div class="div100 mt5 mb20"><span itemprop="Name">kan.speed</span></div>
							<!--skype-->
                       </div>
                    </div>
                </div>
            </div>

				<div class="div100 mt30">
                    <div class="div100 contact-address" style="margin-left:0px;">
					<div itemscope itemtype="http://schema.org/LocalBusiness">
                         <div class="div60">
						<!--address-->
                        <div class="div100">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/contact-address.png" alt="address"/>
                            <div class="contact-inner-main-title">Thailand</div>
                        </div>
                        <div class="div100 mt10 mb30 address">
                            <?php //echo get_field('contact_address')? the_field('contact_address'):'';?>
						<div itemscope itemtype="http://schema.org/LocalBusiness">
							<strong><span itemprop="name">Mr. Siva Sakthivel</span></strong>
							<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
							<span itemprop="streetAddress">Sapsin1, R#209, 249, </span><br/>
							<span itemprop="addressLocality">Soi Ramkhamhaeng 24 Yeak 30, </span><br/>
							<span itemprop="addressLocality">Hua Mak, Bang Kapi,</span><br/>
							<span itemprop="addressRegion">Bangkok 10240  - 605004</span>
							</div>
                        </div>
						</div>
                        <!--address-->
						</div>
						<div class="div40">
                        <!--phone-->
                        <div class="div100">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/contact-phone.png" alt="phone"/>
                            <div class="contact-inner-main-title">Phone</div>
                        </div>
                        <div class="div100 mt5 mb20"><span itemprop="telephone">+66838762766</span></div>
                        <!--phone-->
                       </div>
                    </div>
                </div>
            </div>
			
				</div>
			
			<div class="div100">
                <div class="div100 map">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/contact-flag.png" alt="map"/>
                    <div class="contact-inner-main-title">Map</div>
                </div>
                <div class="div100 mt15">
                    <div class="mapholder">
<!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7807.561923280099!2d79.80521312200399!3d11.920326313714241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a53619a0a4b43a1%3A0xaff83ca1ea7892a6!2sMudaliarpet%2C+Puducherry!5e0!3m2!1sen!2sin!4v1448367951101" width="100%" height="300" frameborder="0" style="border:4px solid #dedede;" allowfullscreen=""></iframe-->
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d975.9255729691752!2d79.8084835!3d11.9257946!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5361779929b62b%3A0x709d17b9a62e1f9!2sAskan+Technologies!5e0!3m2!1sen!2sin!4v1499065270142" width="100%" height="300" frameborder="0" style="border:4px solid #dedede;" allowfullscreen=""></iframe>
</div>
                </div>
            </div>


        </div>
    </div>

<?php echo get_footer(); ?>
