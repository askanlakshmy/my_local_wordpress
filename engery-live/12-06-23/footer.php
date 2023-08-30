<footer>
	<?php $post_id = get_the_ID(); 
		if(get_field('suppress_google_ad', $post_id) == true ){
			$suppress_google_ad = 1;
		} else {
			$suppress_google_ad = 0;
		} ?>
    <div class="div100 footerwidget">
        <div class="row">
            <!--widget 1-->
            <div class="div25 widget">
                <div class="row">
					<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
						<?php dynamic_sidebar( 'footer-1' ); ?>
					<?php endif; ?>
                </div>
            </div>
            <!--widget 1-->
            <!--widget 2-->
            <div class="div25 widget">
            <div class="row">
             <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
             <?php dynamic_sidebar( 'footer-2' ); ?>
             <?php endif; ?>
            </div>
            </div>
            <!--widget 2-->
            <!--widget 3-->
            <div class="div25 widget telegra_wid">
		<div class="row">
                    <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-3' ); ?>
                    <?php endif; ?>
			</div>
            </div>
            <!--widget 3-->
            <!--widget 4-->
            <div class="div25 widget">
                <div class="row">
                <div class="widget_recent_entries">
                    <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-4' ); ?>
                    <?php endif; ?>
                </div>
		</div>
            </div>
            <!--widget 4-->
        </div>
    </div>
    <div class="div100 copyright">
        <div class="row">
            <div class="div50">
                © 2005-<?php echo date('Y'); ?> Energy Therapy. All rights reserved.
            </div>
            <div class="div50">
            <?php if(is_front_page()) {?>
			<a href="https://www.askantech.com" target="_blank" style="font-size:11px;float:right;margin-left:15px;">Askan Technologies</a>
            <?php } ?>
                <?php $defaults = array(
                    'theme_location'  => 'Extra-menu',
                    'menu'            => 'Footer-menu',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'menu',
                    'menu_id'         => 'Menu-1',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="nav" class="copyright-link">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => new Child_Wrap()
                );
                wp_nav_menu( $defaults ); ?>
            </div>
        </div>
    </div>
</footer>
<div class="p_body js_p_body js_fadeout"></div>
<div class="popup js_popup js_slide_top">
    <div class="ctct-embed-signup" style="font: 16px Helvetica Neue, Arial, sans-serif; font: 1rem Helvetica Neue, Arial, sans-serif; line-height: 1.5; -webkit-font-smoothing: antialiased;">
        <div style="color:#5b5b5b; background-color:#e8e8e8; border-radius:5px;padding:15px 20px;position:relative;">
            <!--<a href="javascript: void(0);" class="p_close js_p_close" id="hide-form"><div class="close-signup close-load-new">X</div></a>-->
       <span id="success_message" style="display:none;">
		   <a href="javascript: void(0);" class="p_close js_p_close" id="hide-form"><div class="close-signup close-load-new">X</div></a>
           <div style="text-align:left;font-size:18px;padding:40px 0;color:#656c02;min-height:130px;width:100%;"><div style="width:40px;height:70px;float:left;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/notify_large_success.png"/></div><div style="float:left;font-size:20px;font-weight:bold;width:84%;">Thank you!
                   <div style="color:#656c02;font-size:16px;font-weight:normal;">We've added you to the mailing lists you selected.</div></div>
           </div>
       </span>
	               <form data-id="embedded_signup:form" class="ctct-custom-form Form" name="embedded_signup" method="POST" action="https://visitor.r20.constantcontact.com/d.jsp?llr=9ecbvocab&p=oi&m=1102150928538&sit=iyj7wpldb&f=c4deb0d9-48b3-48ff-8ae6-010e8719df0f">

                <a href="javascript: void(0);" class="p_close js_p_close" id="hide-form"><div class="close-signup">X</div></a>
                <h2 style="margin:0;">Sign up to receive Inspirational Newsletters &amp; <br/> Messages from us!</h2>
                <p class="form-desp">Thanks for your interest in joining our mailing list. Please select any additional areas you would like to receive information on.
                    We look forward to staying in touch with you, and seeing you on one of our classes, workshops or retreats!
                    Simply click 'sign up' to finish</p>
                <!-- The following code must be included to ensure your sign-up form works properly. -->
                <input data-id="ca:input" type="hidden" name="ca" value="86f9da0e-43c2-44e6-bb7b-7efd50a7b2ec">
                <input data-id="source:input" type="hidden" name="source" value="EFD">
                <input data-id="required:input" type="hidden" name="required" value="list,email,first_name">
                <input data-id="url:input" type="hidden" name="url" value="">
                <div class="formholder">
                    <p data-id="Email Address:p" ><label data-id="Email Address:label" data-name="email" class="ctct-form-required">Email Address</label> <input data-id="Email Address:input" class="adduseremail" type="text" name="email" value="" maxlength="80"></p>
                    <p data-id="First Name:p" ><label data-id="First Name:label" data-name="first_name" class="ctct-form-required">First Name</label> <input data-id="First Name:input" class="addusername" type="text" name="first_name" value="" maxlength="50"></p>
                    <p data-id="Lists:p" ><label data-id="Lists:label" data-name="list" class="ctct-form-required">Email Lists</label>
					<div><input data-id="Lists:input" type="checkbox" name="list_0" value="1913861676"><span data-id="Lists:span">Inspirational Weekly Emails On Health &amp; Energy Medicine</span></div>
					<div><input data-id="Lists:input" type="checkbox" name="list_0" value="1930172457"><span data-id="Lists:span">NEW &amp; EXCLUSIVE! LIVING THE LAW OF ATTRACTION E-COURSE (LAUNCHES DEC 2017)</span></div>
					<!--div>
					<input data-id="Lists:input" type="checkbox" name="list_1" value="4">
					<span data-id="Lists:span">Inspiring Articles, Conscious Living Tips, Discounts and More!</span>
					</div-->
					<div><input data-id="Lists:input" type="checkbox" name="list_1" value="1508961319"><span data-id="Lists:span">Sacred Mandalas</span></div>
					</p>
                    <button type="submit" class="Button ctct-button Button--block Button-secondary" data-enabled="enabled">Sign Up</button>
                </div>
                <div><p class="ctct-form-footer">By submitting this form, you are granting: Energy Therapy, 102 Grove Vale, London, , SE22 8DR, United Kingdom, http://www.energytherapy.biz permission to email you. You may unsubscribe via the link found at the bottom of every email.  (See our <a href="http://www.constantcontact.com/legal/privacy-statement" target="_blank">Email Privacy Policy</a> for details.) Emails are serviced by Constant Contact.</p></div>
            </form>
        </div>
    </div>
</div>
<?php if(!wp_is_mobile()){ ?>
<div class="dropdown-menu1">
	<a href="javascript:void(0);" class="search-popclose">
	<span class="srchf-icon">×</span>
	<span class="srchf-text">Close</span></a>
<?php get_search_form(); ?>
	<div class="error_msg" style="display:none;">
		<p style="color:red;">Oops, you didn’t enter anything.  Try again or <a href="https://www.energytherapy.biz/get-in-touch/">contact us</a></p>
	</div>
</div>
<?php } else { ?>
<div class="mobile_view">
	<div class="popup-body-div">
		<a href="javascript:void(0);" class="mobileclose-icon">×</a>
		<img src="https://www.energytherapy.biz/wp-content/uploads/ads/logo-Horizontal-transparent-white.png" style="max-height:60px;"/>
		<?php get_search_form(); ?>
		<div class="error_msg_mobile" style="display:none; margin-bottom:0px;">
			<p style="color:red;">Oops, you didn’t enter anything.  Try again or <a href="https://www.energytherapy.biz/get-in-touch/">contact us</a></p>
		</div>
	</div>
</div>
<?php } ?>
<?php wp_footer(); ?>
<?php
	if((is_page(18866)) || (is_page(19378))){ ?>
	<script type="text/javascript">
	function checkPasswordStrength( $pass1,$pass2,$strengthResult,$submitButton,blacklistArray ){
        var pass1 = $pass1.val();
    	var pass2 = $pass2.val();
		// Reset the form & meter
		$submitButton.attr( 'disabled', 'disabled' );
        $strengthResult.removeClass( 'short bad good strong' );
		// Extend our blacklist array with those from the inputs & site data
		blacklistArray = blacklistArray.concat( wp.passwordStrength.userInputBlacklist() );
		// Get the password strength
		var strength = wp.passwordStrength.meter( pass1, blacklistArray, pass2 );
		// Add the strength meter results
		switch ( strength ) {
			case 2:
				$strengthResult.addClass( 'bad' ).html( pwsL10n.bad );
				break;
			case 3:
				$strengthResult.addClass( 'good' ).html( pwsL10n.good );
				break;
			case 4:
				$strengthResult.addClass( 'strong' ).html( pwsL10n.strong );
				break;
			case 5:
				$strengthResult.addClass( 'short' ).html( pwsL10n.mismatch );
				break;
			default:
				$strengthResult.addClass( 'short' ).html( pwsL10n.short );
		}
    // The meter function returns a result even if pass2 is empty,
    // enable only the submit button if the password is strong and
    // both passwords are filled up
    /*if ( 4 === strength && '' !== pass2.trim() ) {
		//$strengthResult.removeClass( 'short bad good strong' );
        $submitButton.removeAttr( 'disabled' );
		//$strengthResult.removeClass( 'short bad' );
	}*/
	if(((3 === strength)|| ( 4 === strength)) && (pass2 == pass1) ){
		$submitButton.removeAttr( 'disabled' );
	}
	//console.log(strength);
    return strength;
	}
jQuery( document ).ready( function( $ ) {
    // Binding to trigger checkPasswordStrength
    $( 'body' ).on( 'keyup', '#reg_password, #reg_password2',
        function( event ) {
            checkPasswordStrength(
                $('#reg_password'),         // First password field
                $('#reg_password2'), // Second password field
                $('#password-strength'),           // Strength meter
                $('#register_popupbtn'),           // Submit button
                ['black', 'listed', 'word']        // Blacklisted words
            );
        }
    );
});
</script>
	<?php if(is_user_logged_in()){ ?>
<script type="text/javascript">
	jQuery(".pricing-btn").click(function() {	
		var txtType = jQuery(this).data('type');
		if(txtType == 'monthly') {
			jQuery('#popup1').css('display','block');
			jQuery('#monthly_subscribe_popup').show();
			jQuery('#yearly_subscribe_popup').hide();
			jQuery('#customer_login_popup').hide();
			jQuery('#free_user_popup').hide();
			jQuery('#plan_period').val(txtType);
		} else if(txtType == 'annual') {
			jQuery('#popup1').css('display','block');
			jQuery('#yearly_subscribe_popup').show();
			jQuery('#monthly_subscribe_popup').hide();
			jQuery('#customer_login_popup').hide();
			jQuery('#free_user_popup').hide();
			jQuery('#plan_period1').val(txtType);
		}
	});
	jQuery(".js-modal-close").click(function() {		
		jQuery("#popup1").hide();
		jQuery(".modal-overlay").css('display','none');
		//window.location.href = "https://www.energytherapy.biz/pricing/";
	});

</script>
<?php } else { ?>
	<script type="text/javascript">
	function set_Cookie(name, value, expires) {
		document.cookie = name + "=" + escape(value) + "; path=/" + ((expires == null) ? "" : "; expires=" + expires);
	}
	jQuery("#divCheckPasswordMatch").html("");
	jQuery(".pricing-btn").click(function() {
		var txtType = jQuery(this).data('type');
		jQuery('#txtType').val(txtType);
		if(txtType == 'monthly'){
			jQuery(".reg_form_title h2").append(" for Monthly Plan");
		} else if(txtType =='annual'){
			jQuery(".reg_form_title h2").append(" for Annual Plan");
		}
		jQuery('html, body').animate({
			scrollTop: (jQuery('.modal-box').offset().top-5000)},500);	
		jQuery('#popup1').css('display','block');
		jQuery('.modal-overlay').css('display','block');
		
	});
	jQuery(".js-modal-close").click(function() {
		if(jQuery(this).parents('.modal-box').hasClass('tech_issue')){
			jQuery("#tech_issue").hide();
			jQuery(".modal-overlay.tech_issue").css('display','none');
		}/*else{
			jQuery("#popup1").hide();
			jQuery(".modal-overlay").css('display','none');
			delete_cookie('user_email');
			window.location.href = "https://www.energytherapy.biz/membership/pricing/";
		}*/
	});
	jQuery(".register-modal .js-modal-close").click(function() {
		var user_id = jQuery("#custom").val();
		var data = {
			'action': 'send_act_mail',
			'user_id':user_id,
		};
		jQuery.ajax({
			type: "POST",
			url: "/wp-admin/admin-ajax.php",
			dataType: 'JSON',
			data: data,
			success: function(res){
				if(res != 2){
					jQuery("#popup1").hide();
					jQuery(".modal-overlay").css('display','none');
					delete_cookie('user_email');
					window.location.href = "https://www.energytherapy.biz/membership/pricing/";
				}
			}
		});		
	});
	jQuery(".free_user_close").click(function() {		
		jQuery("#free_user").hide();
		jQuery(".modal-overlay").css('display','none');
		delete_cookie('user_email');
		//jQuery('#frmRegister')[0].reset();
		window.location.href = "https://www.energytherapy.biz/my-account";
	});
	jQuery("#existing_user").click(function() {
		set_Cookie('existing_user',1,null);
	});
	jQuery('#reg_comfirm_email').bind('copy paste', function(e) { e.preventDefault(); });
	jQuery("#register_popupbtn").click(function (e) {
		e.preventDefault();
		var first_name = jQuery("#first_name").val();
		var last_name = jQuery("#last_name").val();
        var password = jQuery("#reg_password").val();
        var confirmPassword = jQuery("#reg_password2").val();
        var reg_email = jQuery("#reg_email").val();
        var reg_comfirm_email = jQuery("#reg_comfirm_email").val();
        if (first_name == ''){
			jQuery("#divCheckPasswordMatch").html("Please Enter your first name!");
            return false;
		} else if (last_name == ''){
			jQuery("#divCheckPasswordMatch").html("Please Enter your last name!");
            return false;
		} else if (reg_email == '') {
            jQuery("#divCheckPasswordMatch").html("Please Enter Email!");
            return false;
        } else if (reg_comfirm_email == '') {
            jQuery("#divCheckPasswordMatch").html("Please Enter Confirm Email!");
            return false;
        } else if (password == '') {
            jQuery("#divCheckPasswordMatch").html("Please Enter Password!");
            return false;
        } else if (confirmPassword == '') {
            jQuery("#divCheckPasswordMatch").html("Please Enter Confirm Password!");
            return false;
        } else if (reg_email != reg_comfirm_email) {
            jQuery("#divCheckPasswordMatch").html("Email do not match!");
            jQuery('input[type="submit"]').addClass("disabled");
            return false;
        } else if (password != confirmPassword) {
            jQuery("#divCheckPasswordMatch").html("Passwords do not match!");
            jQuery('input[type="submit"]').addClass("disabled");
            return false;
        } else if (!jQuery("#terms_condition").is(':checked')){
			jQuery("#divCheckPasswordMatch").html("Please accept membership terms & privacy policy");
 			return false;
		} else {
            jQuery("#divCheckPasswordMatch").html("");
        }
        var username = reg_email.substring(0, reg_email.indexOf('@'));
		var txttype = jQuery("#txtType").val();
		set_Cookie('user_email',reg_comfirm_email,null);
		var data = {
			'action': 'create_mem_user',
			'data': jQuery('#frmRegister').serialize(),
		};
		jQuery.ajax({
			type: "POST",
			url: "<?php echo site_url(); ?>/wp-admin/admin-ajax.php",
			dataType: 'JSON',
			data: data,
			beforeSend: function(res){
				jQuery('#overlay').show();
				//console.log(res);
			},
			success: function(res){
				jQuery('#overlay').hide();
				//console.log(res);
				var obj = res;			
				if(obj.flag == '0' && obj.user_id>0) {
					jQuery('.custom_user').val(obj.user_id);
					jQuery('#stripeEmail').val(reg_comfirm_email);
					jQuery('#stripeName').val(first_name);
					if(txttype == 'monthly') {
						jQuery('#popup1').addClass("stripe_subscription");
						jQuery('#yearly_subscribe_popup').hide();
						jQuery('#monthly_subscribe_popup').show();
						jQuery('#free_user_popup').hide();
						jQuery('#plan_period').val(txttype);
					}else if(txttype == 'annual') {
						jQuery('#popup1').addClass("stripe_subscription");
						jQuery('#yearly_subscribe_popup').show();
						jQuery('#monthly_subscribe_popup').hide();
						jQuery('#free_user_popup').hide();
						jQuery('#plan_period1').val(txttype);
					} else {
						jQuery('#yearly_subscribe_popup').hide();
						jQuery('#monthly_subscribe_popup').hide();
						jQuery('.modal-box').hide();
						jQuery('#free_user').show();
						jQuery('#free_user_popup').show();
					}
					jQuery('#customer_login_popup').hide();
				}				
				if(	obj.flag == '1' && obj.user_id==null) {
					jQuery('#divCheckPasswordMatch').html('Enter valid Email address');
					return false;
				} else if( obj.flag == '2' && obj.user_id != null) {
					jQuery('#existing_user').html('<p class="form-row">Your email address is already registered. <a href="/my-account">Click Here</a> to Login<br>Forgot your password?<a href="/my-account/lost-password/">Click here to reset it.</a></p>');
					return false;
				}
			},
		});
    });
</script>
<?php } 
$geo_detail = get_currency_code();
$country_code = $geo_detail['geoplugin_countryCode'];
$continent_code = $geo_detail['geoplugin_continentCode'];
$enable_old_price = get_field('enable_old_price','options');
if($country_code == 'GB'){
	if ( (isset($_GET["price"])) && (trim($_GET["price"]) == 'zero') && ($enable_old_price == 1) ) {
		//$month_price = 12;
		//$year_price = 108;
		$month_price = 0;
		$year_price = 0;
	} else {
		$month_price = get_field('gbp_monthly_price', 'option');
		$year_price = get_field('gbp_annual_price', 'option');
		$plan_id = 'plan_Ds0jKAaWjM8yp1';
	}
	$year_price_mon = $year_price/12;
	$diff = $month_price - $year_price_mon;
	$save_percent = floor($percent = $diff / $month_price *100);
	$ann_price_month = round($year_price_mon);
	$currency_symbol = '£';
	$currency_code = 'GBP';
	//echo "UK";
} else if($country_code == 'US'){
	//echo "USA";
	if ( (isset($_GET["price"])) && (trim($_GET["price"]) == 'zero') && ($enable_old_price == 1) ) {
		//$month_price = 18;
		//$year_price = 180;
		$month_price = 0;
		$year_price = 0;
	} else {
		$month_price = get_field('usd_monthly_price', 'option');
		$year_price = get_field('usd_annual_price', 'option');
		$plan_id = 'plan_DkQctIMXatIjPz';
	}
	$year_price_mon = $year_price/12;
	$diff = $month_price - $year_price_mon;
	$save_percent = floor($percent = $diff / $month_price *100);
	$ann_price_month = round($year_price_mon);
	$currency_symbol = '$';
	$currency_code = 'USD';
} else if($country_code == 'JP'){
	//echo "JP";
	if ( (isset($_GET["price"])) && (trim($_GET["price"]) == 'zero') && ($enable_old_price == 1) ) {
		//$month_price = 1800;
		//$year_price = 18000;
		$month_price = 0;
		$year_price = 0;
	} else {
		$month_price = get_field('jpy_monthly_price', 'option');
		$year_price = get_field('jpy_annual_price', 'option');
		$plan_id = 'plan_DkQctIMXatIjPz';
	}
	$year_price_mon = $year_price/12;
	$diff = $month_price - $year_price_mon;
	$save_percent = floor($percent = $diff / $month_price *100);
	$ann_price_month = round($year_price_mon);
	$currency_symbol = '￥';
	$currency_code = 'JPY';
} else if($country_code == 'AU'){
	//echo "AU";
	if ( (isset($_GET["price"])) && (trim($_GET["price"]) == 'zero') && ($enable_old_price == 1) ) {
		//$month_price = 24;
		//$year_price = 216;
		$month_price = 0;
		$year_price = 0;
	} else {
		$month_price = get_field('aud_monthly_price', 'option');
		$year_price = get_field('aud_annual_price', 'option');
		$plan_id = 'plan_DipgsFFFqErTUU';
	}
	$year_price_mon = $year_price/12;
	$diff = $month_price - $year_price_mon;
	$save_percent = floor($percent = $diff / $month_price *100);
	$ann_price_month = round($year_price_mon);
	$currency_symbol = 'AU$';
	$currency_code = 'AUD';
} else if(($continent_code == 'EU') && ($country_code != 'GB')){
	//echo "CON EU";
	if ( (isset($_GET["price"])) && (trim($_GET["price"]) == 'zero') && ($enable_old_price == 1) ) {
		//$month_price = 15;
		//$year_price = 144;
		$month_price = 0;
		$year_price = 0;
	} else {
		$month_price = get_field('eur_monthly_price', 'option');
		$year_price = get_field('eur_annual_price', 'option');
		$plan_id = 'plan_DPSw7Rtxr1MQ48';
	}
	$year_price_mon = $year_price/12;
	$diff = $month_price - $year_price_mon;
	$save_percent = floor($percent = $diff / $month_price *100);
	$ann_price_month = round($year_price_mon);
	$currency_symbol = '€';
	$currency_code = 'EUR';
} else {
	//echo "None";
	if ( (isset($_GET["price"])) && (trim($_GET["price"]) == 'zero') && ($enable_old_price == 1) ) {
		//$month_price = 18;
		//$year_price = 180;
		$month_price = 0;
		$year_price = 0;
	} else {
		$month_price = get_field('usd_monthly_price', 'option');
		$year_price = get_field('usd_annual_price', 'option');
		$plan_id = 'plan_DkQctIMXatIjPz';
	}
	$year_price_mon = $year_price/12;
	$diff = $month_price - $year_price_mon;
	$save_percent = floor($percent = $diff / $month_price *100);
	$ann_price_month = round($year_price_mon);
	$currency_symbol = '$';
	$currency_code = 'USD';
} ?>
<!--script type="text/javascript">
jQuery(window).load(function(){
	var stripe = Stripe('pk_live_hhND9oekvcao7dzDPte2wnTn');
    var checkoutButton = document.querySelector('#customButton');
    checkoutButton.addEventListener('click', function () {
      stripe.redirectToCheckout({
        items: [{
          // Define the product and plan in the Dashboard first, and use the plan
          // ID in your client-side code.
        //   plan: 'plan_DNybxpwh3MrvcX',
          //plan: 'plan_Fh3ZbLTS2nUX5e',
          plan: '<?php echo $plan_id; ?>',
          quantity: 1
        }],
        successUrl: 'https://www.energytherapy.biz/stripe-pay/',
        cancelUrl: 'https://www.energytherapy.biz/pricing/'
      });
    });
	/*var handler = StripeCheckout.configure({
	key: 'pk_live_hhND9oekvcao7dzDPte2wnTn',
	//key: 'pk_test_g03i1sI1rVml8iq9XdWPU0v4',
	image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
		token: function(token) {
			var price = <?php echo $month_price; ?>;
			var currency_code = '<?php echo $currency_code; ?>';
			jQuery("#stripeToken").val(token.id);
			jQuery("#stripeEmail").val(token.email);
			jQuery("#amountInCents").val(price*100);
			jQuery("#currency_code").val(currency_code);
			jQuery("#myForm").submit();
		},
		closed: function(){
			var user_id = jQuery("#custom").val();
			var data = {
				'action': 'send_act_mail',
				'user_id':user_id,
			};
			jQuery.ajax({
				type: "POST",
				url: "/wp-admin/admin-ajax.php",
				dataType: 'JSON',
				data: data,
				success: function(res){
					if(res != 2){
						window.location.href = "https://www.energytherapy.biz/membership/pricing/";
					}
				}
			});
		}
	});*/
	jQuery('#customButton').on('click', function(e) {
		var amount = <?php echo $month_price; ?>;
		var amountInCents = Math.floor(amount*100);
		var displayAmount = parseFloat(Math.floor(amount*100) /100 ).toFixed(2);
		var displaySymbol = '<?php echo $currency_symbol; ?>';
		var displayCurrency = '<?php echo $currency_code ?>';
		var customerEmail = jQuery(".user_email").val();
		// Open Checkout with further options
		handler.open({
			name: 'EnergyTherapy',
			description: 'Amount ('+ displaySymbol + displayAmount + ')',
			//amount: amountInCents,
			panelLabel: "Subscribe",
			currency: displayCurrency,
			email: customerEmail,
		});
	e.preventDefault();
	});
	// Close Checkout on page navigation
	jQuery(window).on('popstate', function() {
		handler.close();
	});
});

jQuery(window).load(function(){
    var stripe = Stripe('pk_live_hhND9oekvcao7dzDPte2wnTn');
    var checkoutButton = document.querySelector('#customButton1');
    checkoutButton.addEventListener('click', function () {
      stripe.redirectToCheckout({
        items: [{
          // Define the product and plan in the Dashboard first, and use the plan
          // ID in your client-side code.
        //   plan: 'plan_DNybxpwh3MrvcX',
          //plan: 'plan_Fh3ZbLTS2nUX5e',
          plan: '<?php echo $plan_id; ?>',
          quantity: 1
        }],
        successUrl: 'https://www.energytherapy.biz/stripe-pay/',
        cancelUrl: 'https://www.energytherapy.biz/pricing/'
      });
    });
	/*var handler = StripeCheckout.configure({
	key: 'pk_live_hhND9oekvcao7dzDPte2wnTn',
	//key: 'pk_test_g03i1sI1rVml8iq9XdWPU0v4',
	image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
		token: function(token) {
			var price = <?php echo $year_price; ?>;
			var currency_code = '<?php echo $currency_code; ?>';
			jQuery("#stripeToken1").val(token.id);
			jQuery("#stripeEmail1").val(token.email);
			jQuery("#amountInCents1").val(price*100);
			jQuery("#currency_code1").val(currency_code);
			jQuery("#myForm1").submit();
		},
		closed: function(){
			var user_id = jQuery("#custom1").val();
			var data = {
				'action': 'send_act_mail',
				'user_id':user_id,
			};
			jQuery.ajax({
				type: "POST",
				url: "/wp-admin/admin-ajax.php",
				dataType: 'JSON',
				data: data,
				success: function(res){
					if(res != 2){
						window.location.href = "https://www.energytherapy.biz/membership/pricing/";
					}
				}
			});
		}
	});*/
/* 	jQuery('#customButton1').on('click', function(e) {
		var amount = <?php echo $year_price; ?>;
		var amountInCents = Math.floor(amount*100);
		var displayAmount = parseFloat(Math.floor(amount*100) /100 ).toFixed(2);
		var displaySymbol = '<?php echo $currency_symbol; ?>';
		var displayCurrency = '<?php echo $currency_code ?>';
		var customerEmail = jQuery(".user_email").val();
		// Open Checkout with further options
		handler.open({
			name: 'EnergyTherapy',
			description: 'Amount ('+ displaySymbol + displayAmount + ')',
			//amount: amountInCents,
			panelLabel: "Subscribe",
			currency: displayCurrency,
			email: customerEmail,
		});
	e.preventDefault();
	});
	// Close Checkout on page navigation
	jQuery(window).on('popstate', function() {
		handler.close();
	}); 
});*/
</script--> 
<?php } if (is_page(2904)){?>
<script type="text/javascript">
	jQuery( ".ctext .cancel_mem" ).click(function() {
	var conf = confirm("You are about to lose all access rights to the membership site. If you cancel now, you will have access until the end of your paid term. Please download all material you wish to keep well before the expiry date. The material is subject to copyright. And not all material is downloadable.");
	var user_id = <?php echo get_current_user_id();?>; 
	if (conf == true){
		var data = {
			'action': 'cancel_membership',
			'user_id': user_id,
		};
		jQuery.ajax({
			type: "POST",
			url: "/wp-admin/admin-ajax.php",
			dataType: 'JSON',
			data: data,
			success: function(res){
					if (res == 1){
						alert("You have successfully cancelled subscription");
						location.reload();	
					} else {
						alert("Subscription cancel failed");
					}
				}
			});
		}
	});

	/*jQuery(".free_content").click(function() {
		jQuery('html, body').animate({
			scrollTop: (jQuery('#free_pop').offset().top-100)},500);
		jQuery("#free_pop").css('display','block');
	});*/

	jQuery(".free_content").click(function(e){
	 	console.log(e.target.className);
		console.log(e.pageX);
		console.log(e.pageY);
		 //return false;
		/*if(e.target.className.indexOf("free_content") ==-1) {
			jQuery('#popuup_div').hide();
		} else {*/
			var height = jQuery('#popuup_div').height();
			var width = jQuery('#popuup_div').width();
			var position = jQuery('#popuup_div').position();
			console.log(height);
			console.log(width);
			//calculating offset for displaying popup message
			leftVal=(e.pageX-90)+"px";
			topVal=e.pageY+"px"; 
			 console.log(leftVal, topVal);
			//show the popup message and hide with fading effect
			jQuery('#popuup_div').css({left:leftVal,top:topVal}).show();
		//}
	});

	/*jQuery(".popup_msg .js-modal-close.close.close_free_pop").click(function(e) {
		alert('test');
		jQuery("#popuup_div").css('display','none');
	});*/

	/*jQuery('.close_free_pop').on('click', function(){
		jQuery("#popuup_div").css('display','none');
	});*/

	/**/

	jQuery(".trial_pre").click(function() {
		jQuery('html, body').animate({
			scrollTop: (jQuery('#trial_pop').offset().top-100)},500);
		jQuery("#trial_pop").css('display','block');
	});

	jQuery(".close_trial_pop").click(function() {
		jQuery("#trial_pop").css('display','none');
	});
	
	jQuery( "#accept_disclaimer" ).click(function() {
		var user_now = jQuery('#user_now').val();
		var data = {
			'action': 'accept_disclaimer',
			'accept':1,
			'user_now':user_now,
		};
		jQuery.ajax({
			type: "POST",
			url: "/wp-admin/admin-ajax.php",
			data: data,
			dataType: 'JSON',
			success: function(res){
				if(res == 1){
					jQuery('#disclaimer_msg').hide();
					jQuery('.modal-overlay').hide();
				} else {
					jQuery('#disclaimer_msg').show();
					jQuery('.modal-overlay').show();
				}
			},
		});
	});
</script>
<?php } if (is_page(18866)){ ?>
	<script type="text/javascript">
		jQuery( ".upgrade_mem" ).click(function() {
			var conf = confirm("Please confirm to upgrade your account");
			var user_id = <?php echo get_current_user_id();?>; 
			if (conf == true){
				var data = {
					'action': 'upgrade_membership',
					'user_id': user_id,
				};
				jQuery.ajax({
					type: "POST",
					url: "/wp-admin/admin-ajax.php",
					dataType: 'JSON',
					data: data,
					success: function(res){
						if (res == 1){
							alert("Your account has been successfully upgraded");
							window.location.href = "https://www.energytherapy.biz/my-account/";
						} else {
							alert("Account update failed");
						}
					}
				});
			}
		});

	jQuery( window ).load(function() {
		//jQuery('#program_table').show();
	//	jQuery('.modal-overlay.program_table_overlay').show();
	});
	jQuery(".pro_table").click(function (e) {
		e.preventDefault();
		jQuery('#program_table').show();
		jQuery('.modal-overlay.program_table_overlay').show();
	});
	jQuery(".program_table_close").click(function (e) {
		e.preventDefault();
		jQuery('#program_table').hide();
		jQuery('.modal-overlay.program_table_overlay').hide();
	});
	jQuery( ".energy_medicine" ).mouseover(function() {
		jQuery('#energy_medicine').css('display','block');
		jQuery('#sound_healing').css('display','none');
		jQuery('#movement_yoga').css('display','none');
		jQuery('#meditation_mindfulness').css('display','none');
		jQuery('#chakras').css('display','none');
		jQuery('#energy_psychology').css('display','none');
	});
	
	jQuery( ".sound_healing" ).mouseover(function() {
		jQuery('#energy_medicine').css('display','none');
		jQuery('#sound_healing').css('display','block');
		jQuery('#movement_yoga').css('display','none');
		jQuery('#meditation_mindfulness').css('display','none');
		jQuery('#chakras').css('display','none');
		jQuery('#energy_psychology').css('display','none');
	});

	jQuery( ".movement_yoga" ).mouseover(function() {
		jQuery('#energy_medicine').css('display','none');
		jQuery('#sound_healing').css('display','none');
		jQuery('#movement_yoga').css('display','block');
		jQuery('#meditation_mindfulness').css('display','none');
		jQuery('#chakras').css('display','none');
		jQuery('#energy_psychology').css('display','none');
	});

	jQuery( ".meditation_mindfulness" ).mouseover(function() {
		jQuery('#energy_medicine').css('display','none');
		jQuery('#sound_healing').css('display','none');
		jQuery('#movement_yoga').css('display','none');
		jQuery('#meditation_mindfulness').css('display','block');
		jQuery('#chakras').css('display','none');
		jQuery('#energy_psychology').css('display','none');
	});

	jQuery( ".chakras" ).mouseover(function() {
		jQuery('#energy_medicine').css('display','none');
		jQuery('#sound_healing').css('display','none');
		jQuery('#movement_yoga').css('display','none');
		jQuery('#meditation_mindfulness').css('display','none');
		jQuery('#chakras').css('display','block');
		jQuery('#energy_psychology').css('display','none');
	});
	

	jQuery( ".energy_psychology" ).mouseover(function() {
		jQuery('#energy_medicine').css('display','none');
		jQuery('#sound_healing').css('display','none');
		jQuery('#movement_yoga').css('display','none');
		jQuery('#meditation_mindfulness').css('display','none');
		jQuery('#chakras').css('display','none');
		jQuery('#energy_psychology').css('display','block');
	});
	jQuery( "#chakras" ).mouseover(function() {		
		jQuery('#chakras').css('display','block');
	});
	
	jQuery( "#chakras" ).mouseleave(function() {		
		jQuery('#chakras').css('display','block');
	});
	</script>
<?php if(!wp_is_mobile()){?>
	<script type="text/javascript">
		jQuery( ".div-image-gallery .div33" ).mouseover(function() {
			jQuery('#program_table').addClass('extended');		
		});
		
		jQuery( ".div-image-gallery .div33" ).mouseleave(function() {
			jQuery('#program_table').removeClass('extended');
		});
		
		jQuery( ".div-content-gallery #chakras" ).mouseover(function() {
			jQuery('#program_table').addClass('extended');
		});
		
		jQuery( ".div-content-gallery #chakras" ).mouseleave(function() {
			jQuery('#program_table').removeClass('extended');
		});
	</script>
<?php } else {?>
	<script type="text/javascript">
		jQuery( ".div-image-gallery .div33" ).click(function() {
			jQuery('#program_table').addClass('extended');	
			if(jQuery('#energy_medicine').css('display') == 'block'){
				jQuery('html, body').animate({scrollTop: jQuery("#energy_medicine").offset().top}, 2000);
			} 
			if(jQuery('#sound_healing').css('display') == 'block'){
				jQuery('html, body').animate({scrollTop: jQuery("#sound_healing").offset().top}, 2000);
			}
			if(jQuery('#movement_yoga').css('display') == 'block'){
				jQuery('html, body').animate({scrollTop: jQuery("#movement_yoga").offset().top}, 2000);
			}
			if(jQuery('#meditation_mindfulness').css('display') == 'block'){
				jQuery('html, body').animate({scrollTop: jQuery("#meditation_mindfulness").offset().top}, 2000);
			}
			if(jQuery('#chakras').css('display') == 'block'){
				jQuery('html, body').animate({scrollTop: jQuery("#chakras").offset().top}, 2000);
			}
			if(jQuery('#energy_psychology').css('display') == 'block'){
				jQuery('html, body').animate({scrollTop: jQuery("#energy_psychology").offset().top}, 2000);
			}
		});

		jQuery( ".div-content-gallery-close" ).click(function() {
			jQuery('#program_table').removeClass('extended');
		});
		if((jQuery(window).width() >= 1024) || (jQuery(window).width() <= 1366)){
			jQuery(".div-content-gallery-close").css("display", "block");
			jQuery(".bottom-visible.modal-box.program_table_style_content").css('z-index', 10001);
			//jQuery(".program_table_close").css('z-index', 1000);
		}
	</script>
<?php } } if (is_page(19145)){?>
	<script type="text/javascript">
		jQuery('body').on('click', '.link_copy', function (ele) {
			ele.preventDefault();
			var me = this;
			var hrelink = jQuery('.linkinput').val();
			var tempInput = document.createElement("input");
			tempInput.style = "position: absolute; left: -1000px; top: -1000px";
			tempInput.value = hrelink;
			document.body.appendChild(tempInput);
			tempInput.select();
			document.execCommand("copy");
			document.body.removeChild(tempInput);
			jQuery(this).attr('disabled', 'true');
			jQuery(this).text('Copied to Clipboard!');
			jQuery(this).removeClass('btn-taylor-blue');
			jQuery(this).addClass('btn-success');
			setTimeout(function () {
				jQuery(me).removeClass('btn-success');
				jQuery(me).addClass('btn-taylor-blue');
				jQuery(me).attr('disabled', false);
				jQuery(me).text('Copy Link');
			}, 2000);
		});

		jQuery( ".social-icon.mail" ).click(function() {
			var share_code = jQuery('.mail_share_code').val();
			jQuery('.modal-box.refer-modal').css('display','block');
			jQuery('.modal-overlay.refer-modal').css('display','block');
			jQuery( "#email_send" ).click(function(e) {
				e.preventDefault();
				jQuery(".msg_div").css('display','none');
				var ref_name = jQuery('#ref_name').val();
				var ref_email = jQuery('#ref_email').val();
				var con_ref_email = jQuery('#con_ref_email').val();
				var ur_name = jQuery('#ur_name').val();
				var ur_email = jQuery('#ur_email').val();
				var title = jQuery('#email_title').val();
				var email_msg = jQuery.trim(jQuery('#email_msg').val());
				if (ur_name == ""){
					jQuery(".email_error").css('display','block');
					jQuery(".email_error").html("Enter your first name");
					return false;
				} else if (ur_email == ""){
					jQuery(".email_error").css('display','block');
					jQuery(".email_error").html("Your email id can't be blank");
					return false;
				} else if (!ValidateEmail(jQuery("#ur_email").val())) {
					//alert("Enter a valid email id");
					jQuery(".email_error").css('display','block');
					jQuery(".email_error").html("Enter a valid email id");
					return false;
				}  else if (ref_name == ""){
					jQuery(".email_error").css('display','block');
					jQuery(".email_error").html("Enter your friend's first name");
					return false;
				} else if (ref_email == ""){
					jQuery(".email_error").css('display','block');
					jQuery(".email_error").html("Your friend's email id can't be blank");
					return false;
				} else if (!ValidateEmail(jQuery("#ref_email").val())) {
					//alert("Enter a valid email id");
					jQuery(".email_error").css('display','block');
					jQuery(".email_error").html("Enter a valid email id");
					return false;
				} else if (con_ref_email == ""){
					jQuery(".email_error").css('display','block');
					jQuery(".email_error").html("Confirm your friend's email id");
					return false;
				} else if (!ValidateEmail(jQuery("#con_ref_email").val())) {
					//alert("Enter a valid email id");
					jQuery(".email_error").css('display','block');
					jQuery(".email_error").html("Enter a valid email id");
					return false;
				} else if (ref_email != con_ref_email) {
					//alert("Enter a valid email id");
					jQuery(".email_error").css('display','block');
					jQuery(".email_error").html("Emails don’t match – please check and try again");
					return false;
				} else if (title == ""){
					jQuery(".email_error").css('display','block');
					jQuery(".email_error").html("Enter title");
					return false;
				} else if (email_msg == ""){
					jQuery(".email_error").css('display','block');
					jQuery(".email_error").html("Enter message");
					return false;
				} else { 
					jQuery(".email_error").css('display','none');
					var data = {
						'action': 'refer_mail',
						'share_code': share_code,
						'ref_name':ref_name,
						'ref_email':ref_email,
						'ur_name':ur_name,
						'ur_email':ur_email,
						'title':title,
						'email_msg':email_msg,
					};
					console.log(data);
					//return false;
					jQuery.ajax({
						type: "POST",
						url: "/wp-admin/admin-ajax.php",
						data: data,
						dataType: 'JSON',
						beforeSend: function(res){
							jQuery('#overlay').show();
						},
						success: function(res){
							jQuery('#overlay').hide();
							console.log(res);
							if(res == 1){	
								jQuery('#ref_name').val("");
								jQuery('#ref_email').val("");
								jQuery('#con_ref_email').val("");
								jQuery('#ur_name').val("");
								jQuery('#ur_email').val("");
								jQuery('#email_title').val("");
								jQuery('#email_msg').val("");
								jQuery(".msg_div").html("Mail Sent Successfully");
								jQuery(".msg_div").css('display','block');
							} else {
								/*jQuery('#ref_name').val("");
								jQuery('#ref_email').val("");
								jQuery('#con_ref_email').val("");
								jQuery('#ur_name').val("");
								jQuery('#ur_email').val("");
								jQuery('#email_title').val("");
								jQuery('#email_msg').val("");*/
								jQuery(".email_error").css('display','block');
								jQuery(".email_error").html("Mail Sending Failed");
							}
						},
					});
				}
			});
		});
		jQuery( "#share_email .close_mail" ).click(function() {
			jQuery('.modal-box.refer-modal').css('display','none');
			jQuery(".email_error").css('display','none');
			jQuery(".msg_div").css('display','none');
			jQuery('.modal-overlay.refer-modal').css('display','none');
			/*jQuery('#ref_name').val("");
			jQuery('#ref_email').val("");
			jQuery('#con_ref_email').val("");
			jQuery('#ur_name').val("");
			jQuery('#ur_email').val("");
			jQuery('#email_title').val("");
			jQuery('#email_msg').val("");*/
		});
		jQuery( ".no_refer" ).click(function(e) {
			e.preventDefault();
			jQuery('html, body').animate({
				scrollTop: (jQuery('#free_pop').offset().top-100)},500);
			jQuery("#free_pop").css('display','block');
		});
		jQuery(".close_free_pop").click(function() {
			jQuery("#free_pop").css('display','none');
		});
	</script>
<?php }
	global $wpdb;
	$data = $wpdb->get_results ( "SELECT * FROM energy_aam WHERE post_type ='Top Banner' AND ad_status ='0' ORDER BY top_ad_order ASC");
	$row = $wpdb->num_rows;
	foreach($data as $k => $v){
		$ad_type = $v->ad_type;
		$top_ad_order = $v->top_ad_order;
		$ad_content = $v->ad_content;
		$ad_total .= $top_ad_order.',';
		
		if ($ad_type == 'Google Ad'){
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/google_top_'.$top_ad_order.'.html', "w") or die("Unable to open file!");
			$txt = stripslashes($ad_content);
			$txt = stripslashes($txt);
			$txt = stripslashes($txt);
			fwrite($myfile, $txt);
			fclose($myfile);
		} elseif ($ad_type == 'Amazon Ad'){
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/google_top_'.$top_ad_order.'.html', "w") or die("Unable to open file!");
			$txt = stripslashes($ad_content);
			$txt = stripslashes($txt);
			$txt = stripslashes($txt);
			fwrite($myfile, $txt);
			fclose($myfile);
		}elseif ($ad_type == 'Affiliate Ad'){
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/google_top_'.$top_ad_order.'.html', "w") or die("Unable to open file!");
			$ad_aff_link = $v->affiliated_ad_url;
			$ad_aff_img = site_url().'/wp-content/uploads/ads/'.$v->affiliated_ad_img;
			$aff_add = stripslashes("<a href='$ad_aff_link' target='_blank' ><img src='$ad_aff_img' /></a>");				
			fwrite($myfile, $aff_add);
			fclose($myfile);
		}elseif($ad_type == 'Custom Ad'){				
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/google_top_'.$top_ad_order.'.html', "w") or die("Unable to open file!");
			$ad_custom_link = $v->custom_ad_url;
			$custom_ad_title = $v->custom_ad_title;
			$custom_ad_desc = $v->custom_ad_description;
			$ad_custom_img = site_url().'/wp-content/uploads/ads/'.$v->custom_ad_image;		
			$custom_add = stripslashes('<div class="cc-banner-ad"> <div class="cc-banner-img"><a href="'.$ad_custom_link.'" target="_blank"><img src="'.$ad_custom_img.'" alt="custom-ad-image"></a></div><div class="cc-banner-title"><a href="'.$ad_custom_link.'" target="_blank"><h3>'.$custom_ad_title.'</h3></a></div><div class="cc-banner-desc"><a href="'.$ad_custom_link.'" target="_blank"><p>'.$custom_ad_desc.'</p></a></div><div class="cc-banner-adlink"> <div class="cc-btn-wrapper"> <a href="'.$ad_custom_link.'" target="_blank"> <div class="cc-arr-wrapper"> <?xml version="1.0" encoding="iso-8859-1"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;" xml:space="preserve"> <g> <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744 L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284 c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"/> </g> </svg> </div></a> </div></div></div>');	
			fwrite($myfile, $custom_add);
			fclose($myfile);	
		}
	}
	$ad_total = rtrim($ad_total,',');
		
	$data = $wpdb->get_results ( "SELECT * FROM energy_aam WHERE post_type ='Home' AND ad_status ='0' ORDER BY top_ad_order ASC");
	$tot_rec = $wpdb->num_rows;
	foreach($data as $k => $v){
		$ad_type = $v->ad_type;
		$top_ad_order = $v->top_ad_order;
		$ad_content = $v->ad_content;
		$home_ad_total .= $top_ad_order.',';
		if ($ad_type == 'Google Ad'){
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/home_ad_'.$top_ad_order.'.html', "w") or die("Unable to open file!");
			$txt = stripslashes($ad_content);
			$txt = stripslashes($txt);
			$txt = stripslashes($txt);
			fwrite($myfile, $txt);
			fclose($myfile);
		} elseif ($ad_type == 'Amazon Ad'){
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/home_ad_'.$top_ad_order.'.html', "w") or die("Unable to open file!");
			$txt = stripslashes($ad_content);
			$txt = stripslashes($txt);
			$txt = stripslashes($txt);
			fwrite($myfile, $txt);
			fclose($myfile);
		} elseif($ad_type == 'Affiliate Ad'){
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/home_ad_'.$top_ad_order.'.html', "w") or die("Unable to open file!");
			$ad_aff_link = $v->affiliated_ad_url;
			$ad_aff_img = site_url().'/wp-content/uploads/ads/'.$v->affiliated_ad_img;
			$aff_add = stripslashes("<a href='$ad_aff_link' target='_blank' ><img src='$ad_aff_img' /></a>");				
			fwrite($myfile, $aff_add);
			fclose($myfile);
		}elseif($ad_type == 'Custom Ad'){				
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/home_ad_'.$top_ad_order.'.html', "w") or die("Unable to open file!");
			$ad_custom_link = $v->custom_ad_url;
			$custom_ad_title = $v->custom_ad_title;
			$custom_ad_desc = $v->custom_ad_description;
			$ad_custom_img = site_url().'/wp-content/uploads/ads/'.$v->custom_ad_image;		
			$custom_add = stripslashes('<div class="cc-banner-ad"> <div class="cc-banner-img"><a href="'.$ad_custom_link.'" target="_blank"><img src="'.$ad_custom_img.'" alt="custom-ad-image"></a></div><div class="cc-banner-title"><a href="'.$ad_custom_link.'" target="_blank"><h3>'.$custom_ad_title.'</h3></a></div><div class="cc-banner-desc"><a href="'.$ad_custom_link.'" target="_blank"><p>'.$custom_ad_desc.'</p></a></div><div class="cc-banner-adlink"> <div class="cc-btn-wrapper"> <a href="'.$ad_custom_link.'" target="_blank"> <div class="cc-arr-wrapper"> <?xml version="1.0" encoding="iso-8859-1"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;" xml:space="preserve"> <g> <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744 L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284 c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"/> </g> </svg> </div></a> </div></div></div>');		
			fwrite($myfile, $custom_add);
			fclose($myfile);	
		}
	}
	$home_ad_total = rtrim($home_ad_total,',');
	
	$data = $wpdb->get_results ( "SELECT * FROM energy_aam WHERE post_type ='Quotes' AND ad_position ='All Side Bar 1' AND ad_status ='0' ORDER BY ad_order ASC");
	$sidebar_1_rec = $wpdb->num_rows;
	foreach($data as $k => $v){
		$ad_type = $v->ad_type;
		$ad_order = $v->ad_order;
		$ad_content = $v->ad_content;
		$quote_sidebar_1_total .= $ad_order.',';
		if ($ad_type == 'Google Ad'){
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/sidebar_1_ad_'.$ad_order.'.html', "w") or die("Unable to open file!");
			$txt = stripslashes($ad_content);
			$txt = stripslashes($txt);
			$txt = stripslashes($txt);
			fwrite($myfile, $txt);
			fclose($myfile);
		} elseif ($ad_type == 'Amazon Ad'){
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/sidebar_1_ad_'.$ad_order.'.html', "w") or die("Unable to open file!");
			$txt = stripslashes($ad_content);
			$txt = stripslashes($txt);
			$txt = stripslashes($txt);
			fwrite($myfile, $txt);
			fclose($myfile);
		} elseif ($ad_type == 'Affiliate Ad'){
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/sidebar_1_ad_'.$ad_order.'.html', "w") or die("Unable to open file!");
			$ad_aff_link = $v->affiliated_ad_url;
			$ad_aff_img = site_url().'/wp-content/uploads/ads/'.$v->affiliated_ad_img;
			$aff_add = stripslashes("<a href='$ad_aff_link' target='_blank' ><img src='$ad_aff_img' /></a>");				
			fwrite($myfile, $aff_add);
			fclose($myfile);
		}elseif($ad_type == 'Custom Ad'){				
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/sidebar_1_ad_'.$top_ad_order.'.html', "w") or die("Unable to open file!");
			$ad_custom_link = $v->custom_ad_url;
			$custom_ad_title = $v->custom_ad_title;
			$custom_ad_desc = $v->custom_ad_description;
			$ad_custom_img = site_url().'/wp-content/uploads/ads/'.$v->custom_ad_image;		
			$custom_add = stripslashes('<div class="cc-banner-ad"> <div class="cc-banner-img"><a href="'.$ad_custom_link.'" target="_blank"><img src="'.$ad_custom_img.'" alt="custom-ad-image"></a></div><div class="cc-banner-title"><a href="'.$ad_custom_link.'" target="_blank"><h3>'.$custom_ad_title.'</h3></a></div><div class="cc-banner-desc"><a href="'.$ad_custom_link.'" target="_blank"><p>'.$custom_ad_desc.'</p></a></div><div class="cc-banner-adlink"> <div class="cc-btn-wrapper"> <a href="'.$ad_custom_link.'" target="_blank"> <div class="cc-arr-wrapper"> <?xml version="1.0" encoding="iso-8859-1"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;" xml:space="preserve"> <g> <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744 L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284 c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"/> </g> </svg> </div></a> </div></div></div>');		
			fwrite($myfile, $custom_add);
			fclose($myfile);	
		}
	}
	$quote_sidebar_1_total = rtrim($quote_sidebar_1_total,',');
	
	$data = $wpdb->get_results ( "SELECT * FROM energy_aam WHERE post_type ='Quotes' AND ad_position ='All Side Bar 2' AND ad_status ='0' ORDER BY ad_order ASC");
	$sidebar_2_rec = $wpdb->num_rows;
	foreach($data as $k => $v){
		$ad_type = $v->ad_type;
		$ad_order = $v->ad_order;
		$ad_content = $v->ad_content;
		$quote_sidebar_2_total .= $ad_order.',';
		if ($ad_type == 'Google Ad'){
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/sidebar_2_ad_'.$ad_order.'.html', "w") or die("Unable to open file!");
			$txt = stripslashes($ad_content);
			$txt = stripslashes($txt);
			$txt = stripslashes($txt);
			fwrite($myfile, $txt);
			fclose($myfile);
		} elseif ($ad_type == 'Amazon Ad'){
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/sidebar_2_ad_'.$ad_order.'.html', "w") or die("Unable to open file!");
			$txt = stripslashes($ad_content);
			$txt = stripslashes($txt);
			$txt = stripslashes($txt);
			fwrite($myfile, $txt);
			fclose($myfile);
		} elseif($ad_type == 'Affiliate Ad'){
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/sidebar_2_ad_'.$ad_order.'.html', "w") or die("Unable to open file!");
			$ad_aff_link = $v->affiliated_ad_url;
			$ad_aff_img = site_url().'/wp-content/uploads/ads/'.$v->affiliated_ad_img;
			$aff_add = stripslashes("<a href='$ad_aff_link' target='_blank' ><img src='$ad_aff_img' /></a>");				
			fwrite($myfile, $aff_add);
			fclose($myfile);
		}elseif($ad_type == 'Custom Ad'){				
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/sidebar_2_ad_'.$top_ad_order.'.html', "w") or die("Unable to open file!");
			$ad_custom_link = $v->custom_ad_url;
			$custom_ad_title = $v->custom_ad_title;
			$custom_ad_desc = $v->custom_ad_description;
			$ad_custom_img = site_url().'/wp-content/uploads/ads/'.$v->custom_ad_image;		
			$custom_add = stripslashes('<div class="cc-banner-ad"><div class="cc-banner-img"><a href="'.$ad_custom_link.'" target="_blank"><img src="'.$ad_custom_img.'" alt="custom-ad-image"></a></div><div class="cc-banner-title"><a href="'.$ad_custom_link.'" target="_blank"><h3>'.$custom_ad_title.'</h3></a></div><div class="cc-banner-desc"><a href="'.$ad_custom_link.'" target="_blank"> <p>'.$custom_ad_desc.'</p></a></div><div class="cc-banner-adlink"> <div class="cc-btn-wrapper"> <a href="'.$ad_custom_link.'" target="_blank"> <div class="cc-arr-wrapper"> <?xml version="1.0" encoding="iso-8859-1"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;" xml:space="preserve"> <g> <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744 L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284 c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"/> </g> </svg> </div></a> </div></div></div>');			
			fwrite($myfile, $custom_add);
			fclose($myfile);		
		}
	}
	$quote_sidebar_2_total = rtrim($quote_sidebar_2_total,',');
	
	$data = $wpdb->get_results ( "SELECT * FROM energy_aam WHERE post_type ='Quotes' AND ad_position ='All Side Bar 3' AND ad_status ='0' ORDER BY ad_order ASC");
	$sidebar_3_rec = $wpdb->num_rows;
	foreach($data as $k => $v){
		$ad_type = $v->ad_type;
		$ad_order = $v->ad_order;
		$ad_content = $v->ad_content;
		$quote_sidebar_3_total .= $ad_order.',';
		if ($ad_type == 'Google Ad'){
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/sidebar_3_ad_'.$ad_order.'.html', "w") or die("Unable to open file!");
			$txt = stripslashes($ad_content);
			$txt = stripslashes($txt);
			$txt = stripslashes($txt);
			fwrite($myfile, $txt);
			fclose($myfile);
		} elseif ($ad_type == 'Amazon Ad'){
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/sidebar_3_ad_'.$ad_order.'.html', "w") or die("Unable to open file!");
			$txt = stripslashes($ad_content);
			$txt = stripslashes($txt);
			$txt = stripslashes($txt);
			fwrite($myfile, $txt);
			fclose($myfile);
		} elseif($ad_type == 'Affiliate Ad'){
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/sidebar_3_ad_'.$ad_order.'.html', "w") or die("Unable to open file!");
			$ad_aff_link = $v->affiliated_ad_url;
			$ad_aff_img = site_url().'/wp-content/uploads/ads/'.$v->affiliated_ad_img;
			$aff_add = stripslashes("<a href='$ad_aff_link' target='_blank'><img src='$ad_aff_img' /></a>");				
			fwrite($myfile, $aff_add);
			fclose($myfile);
		}elseif($ad_type == 'Custom Ad'){				
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/sidebar_3_ad_'.$top_ad_order.'.html', "w") or die("Unable to open file!");
			$ad_custom_link = $v->custom_ad_url;
			$custom_ad_title = $v->custom_ad_title;
			$custom_ad_desc = $v->custom_ad_description;
			$ad_custom_img = site_url().'/wp-content/uploads/ads/'.$v->custom_ad_image;		
			$custom_add = stripslashes('<div class="cc-banner-ad"> <div class="cc-banner-img"><a href="'.$ad_custom_link.'" target="_blank"><img src="'.$ad_custom_img.'" alt="custom-ad-image"></a></div><div class="cc-banner-title"><a href="'.$ad_custom_link.'" target="_blank"><h3>'.$custom_ad_title.'</h3></a></div><div class="cc-banner-desc"><a href="'.$ad_custom_link.'" target="_blank"><p>'.$custom_ad_desc.'</p></a></div><div class="cc-banner-adlink"> <div class="cc-btn-wrapper"> <a href="'.$ad_custom_link.'" target="_blank"> <div class="cc-arr-wrapper"> <?xml version="1.0" encoding="iso-8859-1"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;" xml:space="preserve"> <g> <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744 L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284 c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"/> </g> </svg> </div></a> </div></div></div>');			
			fwrite($myfile, $custom_add);
			fclose($myfile);	
		}
	}
	$quote_sidebar_3_total = rtrim($quote_sidebar_3_total,',');
	
	$data = $wpdb->get_results ( "SELECT * FROM energy_aam WHERE post_type ='Quotes' AND ad_position ='Below Content' AND ad_status ='0' ORDER BY ad_order ASC");
	$quote_below_con = $wpdb->num_rows;
	foreach($data as $k => $v){
		$ad_type = $v->ad_type;
		$ad_order = $v->ad_order;
		$ad_content = $v->ad_content;
		$quote_below_con_total .= $ad_order.',';
		if ($ad_type == 'Google Ad'){
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/quote_below_ad_'.$ad_order.'.html', "w") or die("Unable to open file!");
			$txt = stripslashes($ad_content);
			$txt = stripslashes($txt);
			$txt = stripslashes($txt);
			fwrite($myfile, $txt);
			fclose($myfile);
		} elseif ($ad_type == 'Amazon Ad'){
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/quote_below_ad_'.$ad_order.'.html', "w") or die("Unable to open file!");
			$txt = stripslashes($ad_content);
			$txt = stripslashes($txt);
			$txt = stripslashes($txt);
			fwrite($myfile, $txt);
			fclose($myfile);
		} elseif($ad_type == 'Affiliate Ad'){
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/quote_below_ad_'.$ad_order.'.html', "w") or die("Unable to open file!");
			$ad_aff_link = $v->affiliated_ad_url;
			$ad_aff_img = site_url().'/wp-content/uploads/ads/'.$v->affiliated_ad_img;
			$aff_add = stripslashes("<a href='$ad_aff_link' target='_blank'><img src='$ad_aff_img' /></a>");				
			fwrite($myfile, $aff_add);
			fclose($myfile);
		}elseif($ad_type == 'Custom Ad'){				
			$myfile = fopen($_SERVER['DOCUMENT_ROOT'] .'/wp-content/uploads/ads/quote_below_ad_'.$ad_order.'.html', "w") or die("Unable to open file!");
			$ad_custom_link = $v->custom_ad_url;
			$custom_ad_title = $v->custom_ad_title;
			$custom_ad_desc = $v->custom_ad_description;
			$ad_custom_img = site_url().'/wp-content/uploads/ads/'.$v->custom_ad_image;		
			$custom_add = stripslashes('<div class="cc-banner-ad"> <div class="cc-banner-img"><a href="'.$ad_custom_link.'" target="_blank"><img src="'.$ad_custom_img.'" alt="custom-ad-image"></a></div><div class="cc-banner-title"><a href="'.$ad_custom_link.'" target="_blank"><h3>'.$custom_ad_title.'</h3></a></div><div class="cc-banner-desc"><a href="'.$ad_custom_link.'" target="_blank"><p>'.$custom_ad_desc.'</p></a></div><div class="cc-banner-adlink"> <div class="cc-btn-wrapper"> <a href="'.$ad_custom_link.'" target="_blank"> <div class="cc-arr-wrapper"> <?xml version="1.0" encoding="iso-8859-1"?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"> <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;" xml:space="preserve"> <g> <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744 L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284 c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"/> </g> </svg> </div></a> </div></div></div>');			
			fwrite($myfile, $custom_add);
			fclose($myfile);
		}
	}
	$quote_below_con_total = rtrim($quote_below_con_total,',');
?>
<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri();?>/js/owl.carousel.js'></script>
<script type="text/javascript">
	jQuery(window).on('load',function () {
		
		 var owl3 = jQuery('#courses');
		  owl3.owlCarousel({
			items: 5,
			margin: 10,
			nav: true,
			loop: false
		  });
		  var owl4 = jQuery('#retreats');
		  owl4.owlCarousel({
			items: 5,
			margin: 10,
			nav: true,
			loop: false
		  });
		  var owl5 = jQuery('#workshops');
		  owl5.owlCarousel({
			items: 5,
			margin: 10,
			nav: true,
			loop: false
		  });
		  var owl6 = jQuery('#posts');
		  owl6.owlCarousel({
			items: 5,
			margin: 10,
			nav: true,
			loop: false
		  });
		jQuery(".owl-prev").html('<i class="fa fa-chevron-left"></i>');
		jQuery(".owl-next").html('<i class="fa fa-chevron-right"></i>');
	});
	
jQuery('.gallery').owlCarousel({
    loop:false,
    //margin:10,
    nav:true,
    responsive:{
        0:{
            items:5
        },
        600:{
            items:5
        },
        1000:{
            items:5
        }
    }
});		
</script>
<?php if(wp_is_mobile()) { ?>
<script>
jQuery(document).ready(function(){
	jQuery( '.main-menu' ).mobileMegaMenu({
		//changeToggleText: true,
		changeToggleText: false,
		//enableWidgetRegion: true,
		enableWidgetRegion: false,
		//prependCloseButton: true,
		prependCloseButton: false,
		//stayOnActive: true,
		stayOnActive: false,
		toogleTextOnClose: 'Close Menu',
		menuToggle: 'main-menu-toggle'
	});
});
</script>
<div class="mobile_author_menu" style="display:none;">
<ul class="mobile_sub_menu">
		<li id="a_z_menu_mobile"><a href="#" class="menu-item has-next-button"> Authors A - Z </a>
		<a class="next-button" href="#" id="nxt-btn"><div class="arrow">Next</div></a>
			<ul class="sub-menu0 level-0">
			<li><a class="back-button" href="#">Back</a></li>
				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-childrenhasMenu has-dropdown not-click has-category-dropdown "><a href="javascript:void(0);" class="menu-item has-next-button" >A - E</a>
					<a class="next-button" href="#">
						<div class="arrow">Next</div>
					</a>
					<ul class="sub-menu1 level-1">
						<li><a class="back-button" href="#">Back</a></li>
						<?php $args = array(
							'posts_per_page' => -1, 
							'post_type' =>'quote_author',
							'orderby'=> 'title',
							'order' => 'ASC' 
							);
							foreach (range('A', 'E') as $char) { 
								$count=1; 
								$author_post = new WP_Query($args);
								if( $author_post->have_posts() ) : while( $author_post->have_posts() ) : $author_post->the_post(); 					
									$name = get_the_title();
									$cletter =  substr($name,0,1);
									if( $cletter == $char){ ?>
										<li class="menu-item menu-item-type-post_type menu-item-object-quote_authorhasMenu has-dropdown not-click has-category-dropdown ">
										<a class="menu-item" href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
										</li>
							<?php	} 
							endwhile; endif; wp_reset_postdata(); 
							} 
						?>
					</ul>
				</li>
				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-childrenhasMenu has-dropdown not-click has-category-dropdown "><a href="javascript:void(0);" class="menu-item has-next-button">F - J</a>
					<a class="next-button" href="#">
						<div class="arrow">Next</div>
					</a>
					<ul class="sub-menu1 level-1">
						<li><a class="back-button" href="#">Back</a></li>
						<?php $args = array(
							'posts_per_page' => -1, 
							'post_type' =>'quote_author',
							'orderby'=> 'title',
							'order' => 'ASC' 
							);
							foreach (range('F', 'J') as $char) { 
								$count=1; 
								$author_post = new WP_Query($args);
								if( $author_post->have_posts() ) : while( $author_post->have_posts() ) : $author_post->the_post(); 					
									$name = get_the_title();
									$cletter =  substr($name,0,1);
									if( $cletter == $char){ ?>
										<li class="menu-item menu-item-type-post_type menu-item-object-quote_authorhasMenu has-dropdown not-click has-category-dropdown ">
										<a class="menu-item" href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
										</li>
							<?php	} 
							endwhile; endif; wp_reset_postdata(); 
							} 
						?>
					</ul>
				</li>
				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-childrenhasMenu has-dropdown not-click has-category-dropdown "><a href="javascript:void(0);" class="menu-item has-next-button">K - O</a>
					<a class="next-button" href="#">
						<div class="arrow">Next</div>
					</a>
					<ul class="sub-menu1 level-1">
						<li><a class="back-button" href="#">Back</a></li>
						<?php $args = array(
							'posts_per_page' => -1, 
							'post_type' =>'quote_author',
							'orderby'=> 'title',
							'order' => 'ASC' 
							);
							foreach (range('K', 'O') as $char) { 
								$count=1; 
								$author_post = new WP_Query($args);
								if( $author_post->have_posts() ) : while( $author_post->have_posts() ) : $author_post->the_post(); 					
									$name = get_the_title();
									$cletter =  substr($name,0,1);
									if( $cletter == $char){ ?>
										<li class="menu-item menu-item-type-post_type menu-item-object-quote_authorhasMenu has-dropdown not-click has-category-dropdown ">
										<a class="menu-item" href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
										</li>
							<?php	} 
							endwhile; endif; wp_reset_postdata(); 
							} 
						?>
					</ul>
				</li>
				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-childrenhasMenu has-dropdown not-click has-category-dropdown "><a href="javascript:void(0);" class="menu-item has-next-button">P - T</a>
					<a class="next-button" href="#">
						<div class="arrow">Next</div>
					</a>
					<ul class="sub-menu1 level-1">
						<li><a class="back-button" href="#">Back</a></li>
						<?php $args = array(
							'posts_per_page' => -1, 
							'post_type' =>'quote_author',
							'orderby'=> 'title',
							'order' => 'ASC' 
							);
							foreach (range('P', 'T') as $char) { 
								$count=1; 
								$author_post = new WP_Query($args);
								if( $author_post->have_posts() ) : while( $author_post->have_posts() ) : $author_post->the_post(); 					
									$name = get_the_title();
									$cletter =  substr($name,0,1);
									if( $cletter == $char){ ?>
										<li class="menu-item menu-item-type-post_type menu-item-object-quote_authorhasMenu has-dropdown not-click has-category-dropdown ">
										<a class="menu-item" href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
										</li>
							<?php	} 
							endwhile; endif; wp_reset_postdata(); 
							} 
						?>
					</ul>
				</li>
				<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-childrenhasMenu has-dropdown not-click has-category-dropdown "><a href="javascript:void(0);" class="menu-item has-next-button">U - Z</a>
					<a class="next-button" href="#">
						<div class="arrow">Next</div>
					</a>
					<ul class="sub-menu1 level-1">
						<li><a class="back-button" href="#">Back</a></li>
						<?php $args = array(
							'posts_per_page' => -1, 
							'post_type' =>'quote_author',
							'orderby'=> 'title',
							'order' => 'ASC' 
							);
							foreach (range('U', 'Z') as $char) { 
								$count=1; 
								$author_post = new WP_Query($args);
								if( $author_post->have_posts() ) : while( $author_post->have_posts() ) : $author_post->the_post(); 					
									$name = get_the_title();
									$cletter =  substr($name,0,1);
									if( $cletter == $char){ ?>
										<li class="menu-item menu-item-type-post_type menu-item-object-quote_authorhasMenu has-dropdown not-click has-category-dropdown ">
										<a class="menu-item" href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
										</li>
							<?php	} 
							endwhile; endif; wp_reset_postdata(); 
							} 
						?>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
</div>
<?php } else {?>
	<div class="author_menu" style="display:none;">
<ul id="test_menu" class="menu nav menu-item-has-children has_children">
	<li id="a_z_menu"><a href="/quotes/authors/a-z/" class="sf-with-ul"> Authors A - Z </a>
		<ul class="sub-menu0 level-0">
			<li class=""><a href="javascript:void(0);" class="sf-with-ul">A - E</a>
				<ul class="sub-menu1 level-1">
					<?php $args = array(
						'posts_per_page' => -1, 
						'post_type' =>'quote_author',
						'orderby'=> 'title',
						'order' => 'ASC' 
						);
						foreach (range('A', 'E') as $char) { 
							$count=1; 
							$author_post = new WP_Query($args);
							if( $author_post->have_posts() ) : while( $author_post->have_posts() ) : $author_post->the_post(); 					
								$name = get_the_title();
								$cletter =  substr($name,0,1);
								if( $cletter == $char){ ?>
									<li class="">
									<a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
									</li>
						<?php	} 
						endwhile; endif; wp_reset_postdata(); 
						} 
					?>
				</ul>
			</li>
			<li><a href="javascript:void(0);" class="sf-with-ul">F - J</a>
				<ul class="sub-menu1 level-1">
					<?php $args = array(
						'posts_per_page' => -1, 
						'post_type' =>'quote_author',
						'orderby'=> 'title',
						'order' => 'ASC' 
						);
						foreach (range('F', 'J') as $char) { 
							$count=1; 
							$author_post = new WP_Query($args);
							if( $author_post->have_posts() ) : while( $author_post->have_posts() ) : $author_post->the_post(); 					
								$name = get_the_title();
								$cletter =  substr($name,0,1);
								if( $cletter == $char){ ?>
									<li><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></li>
						<?php	} 
						endwhile; endif; wp_reset_postdata(); 
						} 
					?>
				</ul>
			</li>
			<li><a href="javascript:void(0);" class="sf-with-ul">K - O</a>
				<ul class="sub-menu1 level-1">
					<?php $args = array(
						'posts_per_page' => -1, 
						'post_type' =>'quote_author',
						'orderby'=> 'title',
						'order' => 'ASC' 
						);
						foreach (range('K', 'O') as $char) { 
							$count=1; 
							$author_post = new WP_Query($args);
							if( $author_post->have_posts() ) : while( $author_post->have_posts() ) : $author_post->the_post(); 					
								$name = get_the_title();
								$cletter =  substr($name,0,1);
								if( $cletter == $char){ ?>
									<li><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></li>
						<?php	} 
						endwhile; endif; wp_reset_postdata(); 
						} 
					?>
				</ul>
			</li>
			<li><a href="javascript:void(0);" class="sf-with-ul">P - T</a>
				<ul class="sub-menu1 level-1">
					<?php $args = array(
						'posts_per_page' => -1, 
						'post_type' =>'quote_author',
						'orderby'=> 'title',
						'order' => 'ASC' 
						);
						foreach (range('P', 'T') as $char) { 
							$count=1; 
							$author_post = new WP_Query($args);
							if( $author_post->have_posts() ) : while( $author_post->have_posts() ) : $author_post->the_post(); 					
								$name = get_the_title();
								$cletter =  substr($name,0,1);
								if( $cletter == $char){ ?>
									<li><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></li>
						<?php	} 
						endwhile; endif; wp_reset_postdata(); 
						} 
					?>
				</ul>
			</li>
			<li><a href="javascript:void(0);" class="sf-with-ul">U - Z</a>
				<ul class="sub-menu1 level-1">
					<?php $args = array(
						'posts_per_page' => -1, 
						'post_type' =>'quote_author',
						'orderby'=> 'title',
						'order' => 'ASC' 
						);
						foreach (range('U', 'Z') as $char) { 
							$count=1; 
							$author_post = new WP_Query($args);
							if( $author_post->have_posts() ) : while( $author_post->have_posts() ) : $author_post->the_post(); 					
								$name = get_the_title();
								$cletter =  substr($name,0,1);
								if( $cletter == $char){ ?>
									<li><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></li>
						<?php	} 
						endwhile; endif; wp_reset_postdata(); 
						} 
					?>
				</ul>
			</li>
		</ul>
	</li>
</ul>
</div>
<?php } ?>
<style>
.category_posts_sub_menu .owl-item .category_submenu_post{width:100%;}
.divtab{float:right;width:80%;}
</style>
<script type="text/javascript">
	var localizedErrMap = {};
	localizedErrMap['required'] = 		'This field is required.';
	localizedErrMap['ca'] = 			'An unexpected error occurred while attempting to send email.';
	localizedErrMap['email'] = 			'Please enter your email address in name@email.com format.';
	localizedErrMap['birthday'] = 		'Please enter birthday in MM/DD format.';
	localizedErrMap['anniversary'] = 	'Please enter anniversary in MM/DD/YYYY format.';
	localizedErrMap['custom_date'] = 	'Please enter this date in MM/DD/YYYY format.';
	localizedErrMap['list'] = 			'Please select at least one email list.';
	localizedErrMap['generic'] = 		'This field is invalid.';
	localizedErrMap['shared'] = 		'Sorry, we could not complete your sign-up. Please contact us to resolve this.';
	localizedErrMap['state_mismatch'] = 'Mismatched State/Province and Country.';
	localizedErrMap['state_province'] = 'Select a state/province';
	localizedErrMap['selectcountry'] = 	'Select a country';
	var postURL = 'https://visitor2.constantcontact.com/api/signup';
</script>
<script type="text/javascript">

function ValidateEmail(email) {
	var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	return expr.test(email);
};

jQuery( ".tech_pro" ).click(function() {
	jQuery('.modal-box.tech_issue').css('display','block');
	jQuery('.modal-overlay.tech_issue').css('display','block');
});
	
jQuery( "#send_tech_email" ).click(function(e) {
	e.preventDefault();
	jQuery(".msg_div").css('display','none');
	var ur_fname = jQuery.trim(jQuery('#ur_fname').val());
	var ur_email = jQuery.trim(jQuery('#ur_email').val());
	var confirm_email = jQuery.trim(jQuery('#confirm_email').val());
	var select_device = jQuery.trim(jQuery('#select_device option:selected').val());
	var device_make = jQuery.trim(jQuery('#device_make').val());
	var device_os = jQuery.trim(jQuery('#device_os').val());
	var subject = jQuery.trim(jQuery('#email_subject').val());
	var email_msg = jQuery.trim(jQuery('#email_msg').val());
	if (ur_fname == ""){
		jQuery(".email_error").css('display','block');
		jQuery(".email_error").html("Please enter a your name");
		return false;
	} else if (ur_email == ""){
		jQuery(".email_error").css('display','block');
		jQuery(".email_error").html("Please enter your email id");
		return false;
	} else if (!ValidateEmail(jQuery("#ur_email").val())){
		jQuery(".email_error").css('display','block');
		jQuery(".email_error").html("Please enter a valid email id");
		return false;
	} else if (confirm_email == ""){
		jQuery(".email_error").css('display','block');
		jQuery(".email_error").html("Please confirm your email id");
		return false;
	} else if (!ValidateEmail(jQuery("#confirm_email").val())){
		jQuery(".email_error").css('display','block');
		jQuery(".email_error").html("Please enter a valid email id");
		return false;
	}else if (ur_email != confirm_email ){
		jQuery(".email_error").css('display','block');
		jQuery(".email_error").html("Email do not match!");
		return false;
	} else if (select_device == ""){
		jQuery(".email_error").css('display','block');
		jQuery(".email_error").html("Please select your device type");
		return false;
	} else if (device_make == ""){
		jQuery(".email_error").css('display','block');
		jQuery(".email_error").html("Please enter your device make");
		return false;
	}  else if (subject == ""){
		jQuery(".email_error").css('display','block');
		jQuery(".email_error").html("Please enter a subject");
		return false;
	} else if (email_msg == ""){
		jQuery(".email_error").css('display','block');
		jQuery(".email_error").html("Please enter a message");
		return false;
	}  else { 
		jQuery(".email_error").css('display','none');
		var data = {
			'action':'send_tech_mail',
			'ur_fname':ur_fname,
			'ur_email':ur_email,
			'subject':subject,
			'email_msg':email_msg,
			'selected_device':select_device,
			'device_make':device_make,
			'device_os':device_os,
		};
		jQuery.ajax({
			type: "POST",
			url: "/wp-admin/admin-ajax.php",
			data: data,
			dataType: 'JSON',
			beforeSend: function(res){
				jQuery('#overlay').show();
			},
			success: function(res){
				jQuery('#overlay').hide();
				console.log(res);
				if(res == 1){	
					jQuery('#ur_fname').val("");
					jQuery('#ur_email').val("");
					jQuery('#confirm_email').val("");
					jQuery('#select_device').val("");
					jQuery('#device_make').val("");
					jQuery('#device_os').val("");
					jQuery('#email_subject').val("");
					jQuery('textarea#email_msg').val("");							
					jQuery(".msg_div").html("Mail Sent Successfully");
					jQuery(".msg_div").css('display','block');
				} else {
					/*jQuery('#ur_fname').val("");
					jQuery('#ur_email').val("");
					jQuery('#email_subject').val("");
					jQuery('textarea#email_msg').val("");*/
					jQuery(".email_error").css('display','block');
					jQuery(".email_error").html("Mail Sending Failed");
				}
			},
		});
	}
});

jQuery( "#tech_issue .close_mail" ).click(function() {
	jQuery('.modal-box.tech_issue').css('display','none');
	jQuery(".modal-overlay.tech_issue").css('display','none');
	jQuery(".email_error").css('display','none');
	jQuery(".msg_div").css('display','none');
	jQuery('#ur_fname').val("");
	jQuery('#ur_email').val("");
	jQuery('#confirm_email').val("");
	jQuery('#select_device').val("");
	jQuery('#device_make').val("");
	jQuery('#device_os').val("");
	//jQuery('#email_subject').val("");
	jQuery('textarea#email_msg').val("");
});

jQuery(document).ready(function(){
	showImage();
});

function showImage() {
	var myImg = document.getElementById('myImage');
	if(myImg != null){
		var thePath = '<?php echo get_home_url();?>/wp-content/uploads/ads';
		var theImages = new Array();
		var ad_count = "<?php echo $row; ?>";
		var ad_order = "<?php echo $ad_total; ?>";
		var ad_type = "<?php echo $ad_type; ?>";
		var suppress_google_ad = "<?php echo $suppress_google_ad; ?>";
		var valNew=ad_order.split(',');
			jQuery.each(valNew,function(i,v){
				theImages[i] = v;
			});
		if(ad_count > 0){
			jQuery.ajax({
				type: "POST",
				url: "<?php echo plugins_url();?>/ad-management/ad_cookie.php",
				dataType: 'JSON',
				data: {top_ad_cookie : "2" },
				success: function(top_cookie){
					if((suppress_google_ad == 0 ) || ((suppress_google_ad != 0 ) && (top_cookie[1] !='Google Ad') ) ){
						jQuery("#myImage").load("<?php echo get_home_url();?>/wp-content/uploads/ads/google_top_"+top_cookie[0]+".html");
					}
				},
			});
		}
	}
}
	
jQuery(document).ready(function(){
	homeAd();
});

function homeAd() {
	var ad = document.getElementById('home-ad');
	if(ad != null){
		var thePath = '<?php echo get_home_url();?>/wp-content/uploads/ads';
		var theImages = new Array();
		var ad_count = "<?php echo $tot_rec; ?>";
		var home_ad_total = "<?php echo $home_ad_total; ?>";
		var ad_type = "<?php echo $ad_type; ?>";
		var suppress_google_ad = "<?php echo $suppress_google_ad; ?>";
		var home_ad = home_ad_total.split(',');
			jQuery.each(home_ad,function(i,v){
				theImages[i] = v;
			});
		if(ad_count > 0){
			jQuery.ajax({
				type: "POST",
				url: "<?php echo plugins_url();?>/ad-management/ad_cookie.php",
				dataType: 'JSON',
				data: {hm_ad_cookie : "1" },
				success: function(cookie){
					if((suppress_google_ad == 0 ) || ((suppress_google_ad != 0 ) && (cookie[1] !='Google Ad') ) ){
						jQuery("#home-ad").load("<?php echo get_home_url();?>/wp-content/uploads/ads/home_ad_"+cookie[0]+".html");
					}
				},
			});
		}
	}
}
	
jQuery(document).ready(function(){
	quotes_sidebar1();
});
function quotes_sidebar1() {
	var ad = document.getElementById('quotes_sidebar1');
	if(ad != null){
		var thePath = '<?php echo get_home_url();?>/wp-content/uploads/ads';
		var theImages = new Array();
		var ad_count = "<?php echo $sidebar_1_rec; ?>";
		var ad_type = "<?php echo $ad_type; ?>";
		var suppress_google_ad = "<?php echo $suppress_google_ad; ?>";
		var quote_sidebar_1_total = "<?php echo $quote_sidebar_1_total; ?>";
			var quote_sidebar_1 = quote_sidebar_1_total.split(',');
			jQuery.each(quote_sidebar_1,function(i,v){
				theImages[i] = v;
			});
		if(ad_count > 0){
			jQuery.ajax({
				type: "POST",
				url: "<?php echo plugins_url();?>/ad-management/ad_cookie.php",
				dataType: 'JSON',
				data: {qo_si_ad_cookie : "3" },
				success: function(si_cookie){
					if((suppress_google_ad == 0 ) || ((suppress_google_ad != 0 ) && (si_cookie[1] !='Google Ad') ) ){
						jQuery("#quotes_sidebar1").load("<?php echo get_home_url();?>/wp-content/uploads/ads/sidebar_1_ad_"+si_cookie[0]+".html");
					}
				},
			});
		}
	}
}
	
jQuery(document).ready(function(){
	quotes_sidebar2();
});

function quotes_sidebar2() {
	var ad = document.getElementById('quotes_sidebar2');
	if(ad != null){
		var thePath = '<?php echo get_home_url();?>/wp-content/uploads/ads';
		var theImages = new Array();
		var ad_count = "<?php echo $sidebar_2_rec; ?>";
		var quote_sidebar_2_total = "<?php echo $quote_sidebar_2_total; ?>";
		var ad_type = "<?php echo $ad_type; ?>";
		var suppress_google_ad = "<?php echo $suppress_google_ad; ?>";
		var quote_sidebar_2 = quote_sidebar_2_total.split(',');
			jQuery.each(quote_sidebar_2,function(i,v){
				theImages[i] = v;
			});
		if(ad_count > 0){
			jQuery.ajax({
				type: "POST",
				url: "<?php echo plugins_url();?>/ad-management/ad_cookie.php",
				dataType: 'JSON',
				data: {qo_si2_ad_cookie : "4" },
				success: function(si2_cookie){
					if((suppress_google_ad == 0 ) || ((suppress_google_ad != 0 ) && (si2_cookie[1] !='Google Ad') ) ){
						jQuery("#quotes_sidebar2").load("<?php echo get_home_url();?>/wp-content/uploads/ads/sidebar_2_ad_"+si2_cookie[0]+".html");
					}
				},
			});
		}
	}
}
		
jQuery(document).ready(function(){
	quotes_sidebar3();
});

function quotes_sidebar3() {
var ad = document.getElementById('quotes_sidebar3');
if(ad != null){
	var thePath = '<?php echo get_home_url();?>/wp-content/uploads/ads';
	var theImages = new Array();
	var ad_count = "<?php echo $sidebar_3_rec; ?>";
	var quote_sidebar_3_total = "<?php echo $quote_sidebar_3_total; ?>";
	var ad_type = "<?php echo $ad_type; ?>";
	var suppress_google_ad = "<?php echo $suppress_google_ad; ?>";
	var quote_sidebar_3 = quote_sidebar_3_total.split(',');
		jQuery.each(quote_sidebar_3,function(i,v){
			theImages[i] = v;
		});
		if(ad_count > 0){
			jQuery.ajax({
				type: "POST",
				url: "<?php echo plugins_url();?>/ad-management/ad_cookie.php",
				dataType: 'JSON',
				data: {qo_si3_ad_cookie : "5" },
				success: function(si3_cookie){
					if((suppress_google_ad == 0 ) || ((suppress_google_ad != 0 ) && (si3_cookie[1] !='Google Ad') ) ){
						jQuery("#quotes_sidebar3").load("<?php echo get_home_url();?>/wp-content/uploads/ads/sidebar_3_ad_"+si3_cookie[0]+".html");
					}
				},
			});
		}
	}
}
	
jQuery(document).ready(function(){
	quotes_below_content();
});
		
function quotes_below_content() {
	var ad = document.getElementById('below_content');
	if(ad != null){
		var thePath = '<?php echo get_home_url();?>/wp-content/uploads/ads';
		var theImages = new Array();
		var ad_count = "<?php echo $quote_below_con; ?>";
		var quote_below_con_total = "<?php echo $quote_below_con_total; ?>";
		var ad_type = "<?php echo $ad_type; ?>";
		var suppress_google_ad = "<?php echo $suppress_google_ad; ?>";
		var quote_below_cont = quote_below_con_total.split(',');
			jQuery.each(quote_below_cont,function(i,v){
				theImages[i] = v;
			});
		if(ad_count > 0){
			jQuery.ajax({
				type: "POST",
				url: "<?php echo plugins_url();?>/ad-management/ad_cookie.php",
				dataType: 'JSON',
				data: {qo_be_ad_cookie : "6" },
				success: function(si_be_cookie){
					if((suppress_google_ad == 0 ) || ((suppress_google_ad != 0 ) && (si_be_cookie[1] !='Google Ad') ) ){ 
						console.log(si_be_cookie[0]);
						jQuery("#below_content").load("<?php echo get_home_url();?>/wp-content/uploads/ads/quote_below_ad_"+si_be_cookie[0]+".html");
					}
				},
			});
		}
	}
}
</script>
<?php if(is_page(1738)){ ?>
<script>
jQuery(document).ready(function(){
	show_testimonials();
});

function show_testimonials() {
	jQuery.ajax({
		url: "/wp-admin/admin-ajax.php",
		type: "POST",
		dataType: 'JSON',
		data : {
			action: "show_testimonials", 
		},
		success: function(data){
			jQuery('.ajax-testi').html(data.tb_testimonial);
			jQuery('.ajax-autho').html(data.tb_name);
		},
	});
}

jQuery(document).ready(function(){
	show_pop_quote();
});

function show_pop_quote() {
	jQuery("#pop_quotes").html('');
	jQuery.ajax({
		url: "/wp-admin/admin-ajax.php",
		type: "POST",
		data : {
			action: "show_pop_quote", 
		},
		success: function(pop_data){
			 var $pop_data = jQuery(pop_data);
			 jQuery("#pop_quotes").html($pop_data);
		},
	});
}

jQuery(document).ready(function(){
	show_recent_quote();
});

function show_recent_quote() {
	jQuery("#recent_quotes").html('');
	jQuery.ajax({
		url: "/wp-admin/admin-ajax.php",
		type: "POST",
		data : {
			action: "show_recent_quote", 
		},
		success: function(recent_data){
			 var $recent_data = jQuery(recent_data);
			 jQuery("#recent_quotes").html($recent_data);
		},
	});
}
</script>
<?php } ?>
<?php if(!wp_is_mobile()){ ?>
<script>
jQuery(document).ready(function(){
	//if(jQuery(window).width() <= 1023){
		var ro = jQuery('.radio-overlay') ;
		jQuery('.radio-container').on('mouseenter',function(){  
			jQuery(this).find(ro).slideDown(200);
		})
		jQuery('.radio-container').on('mouseleave',function(){
			jQuery(this).find(ro).slideUp(200);
		})
	//}
});
</script>
<?php } ?>
<script type='text/javascript' src='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/js/signup-form.js'></script>
<!--script type='text/javascript' src='<?php //echo get_stylesheet_directory_uri();?>/js/cookieBanner.js'></script-->
<!--script type="text/rocketscript" data-rocketsrc='https://static.ctctcdn.com/h/contacts-embedded-signup-assets/1.0.2/js/signup-form.js'></script-->
<?php 
$flash_message = get_field('flash_message','options');
$message_accept = get_field('show_flash_message','options');
$start_date = get_field('start_date','options');
$end_date = get_field('end_date','options');
$today_date = strtotime(date("Ymd"));
$sdate = strtotime($start_date);
$edate = strtotime($end_date); 
if (($message_accept == 1) && ($today_date >= $sdate) && ($today_date <= $edate)){ ?>
<script>
//instantiate cookie
var cookieBanner = new namespace.CookieBanner({
    //configure options here - see below
    duration: 28,
});

//when the close element of the cookie banner is clicked
cookieBanner.closeElement.on('click', function(e){

    //dont follow the anchor
    e.preventDefault();

    //remove the banner (setting a cookie to remember)
    cookieBanner.removeMe();
});
</script>
<?php  } ?>
<script type="text/javascript">
          window.cookieconsent_options = {"message":"\"To help personalise content, tailor and measure ads and provide the best possible experience for you, we use cookies. By clicking on or navigating the site, you agree to our use of cookies.\"","dismiss":"I Agree","learnMore":"[Our cookies explained]","link":"https://www.energytherapy.biz/legal/our-cookies-explained/","theme":"dark-top"};
      </script>
<script defer type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-11831778-1', 'auto');
  ga('send', 'pageview');
</script>
<?php if(!is_front_page()){ ?>
<script>
jQuery(document).ready(function(){
	 jQuery('.select_variation').change(function(){
		 var es = jQuery(this).val();
		 
        if (jQuery(this).val() > 0){
		jQuery(this).closest('form').find('.add-to-cart-button').show();
        }
        else {
          jQuery(this).closest('form').find('.add-to-cart-button').hide();
        }
     });
	  jQuery('.add-to-cart-button').click(function(event){
        event.preventDefault();
        var cart_div = jQuery(this).closest('form').find('.cart-msg');
        cart_div.addClass('woocommerce-info');
        cart_div.html('Adding Product(s)..');
        var variation_id = jQuery('input[name=available_variations]:checked').val();
        var product_id = jQuery(this).attr('data-product');
        var product_name = jQuery('input[name=available_variations]:checked').next().next().text();
        jQuery.post("/wp-content/themes/energytherapy/ajax/add_product.php", {
        		product_id: product_id,
				variation_id: variation_id
			})
			  .done(function(data) {
              var results = data.split('|');
              console.log(data);
              if (results[0] == 1){
                 cart_div.html('<a href="/cart/" class="button wc-forward" target="_parent">View Cart</a>'+product_name+' was successfully added to your cart.');
                 cart_div.removeClass('woocommerce-info').addClass('woocommerce-message');
				 jQuery(".woocommerce-message").css("float","left");
				 jQuery(".woocommerce-message").css("width","100%");
				 jQuery('html, body').animate({
					   scrollTop: (jQuery('.woocommerce-message').first().offset().top-50)},500);
              }
              else {
                  
                    cart_div.html('There was an error adding '+product_name+'!');
                cart_div.removeClass('woocommerce-info').addClass('woocommerce-error');
              }
		});
    });
	jQuery('.product-type-simple .single_add_to_cart_button, .add_to_cart_button').click(function(event){
		console.log('hai');
        event.preventDefault();
		var cart_div = jQuery('div.type-product');
        jQuery( ".woocommerce-message" ).remove();		
			if (jQuery('.woocommerce-result-count')[0]) { 
				console.log(1);			 
				var cart_div = jQuery('.woocommerce-result-count');		
			} else {			
				var cart_div = jQuery(this).closest('.type-product');	//jQuery(this).closest('.products');		
			}		 		
       
        cart_div.before('<div class="woocommerce-info">Adding Product(s)..</div>');
        var product_id = jQuery(this).attr('data-product_id');
		if(product_id  == undefined || product_id  == null || product_id  == ''){
			product_id = jQuery('input[name="add-to-cart"]').val();
		}else{
			product_id = jQuery(this).attr('data-product_id');
		}
		var product_name = jQuery('.product_title').html();
		if(product_name == undefined || product_name == null || product_name == ''){
			product_name = jQuery('.post-'+product_id).find('h3').text();
		}else{
			product_name =  jQuery('.product_title').html();
		}
        var base_url = '<?php echo site_url();?>/cart?add-to-cart=' + product_id;
        var $fragment_refresh = {
            url: wc_cart_fragments_params.wc_ajax_url.toString().replace( '%%endpoint%%', 'get_refreshed_fragments' ),
            type: 'POST',
            success: function( data ) {
                if ( data && data.fragments ) {

                    jQuery.each( data.fragments, function( key, value ) {
                        jQuery( key ).replaceWith( value );
                    });
                    var $supports_html5_storage;
                    var cart_hash_key = wc_cart_fragments_params.ajax_url.toString() + '-wc_cart_hash';
                    try {
                        $supports_html5_storage = ( 'sessionStorage' in window && window.sessionStorage !== null );
                    } catch( err ) {
                        $supports_html5_storage = false;
                    }

                    if ( $supports_html5_storage ) {
                        sessionStorage.setItem( wc_cart_fragments_params.fragment_name, JSON.stringify( data.fragments ) );
                        localStorage.setItem( cart_hash_key, data.cart_hash );
                        sessionStorage.setItem( cart_hash_key, data.cart_hash );

                        if ( data.cart_hash ) {
                            sessionStorage.setItem( 'wc_cart_created', ( new Date() ).getTime() );
                        }
                    }

                    jQuery( document.body ).trigger( 'wc_fragments_refreshed' );
                }
            }
        };
        jQuery.ajax({
            type: "POST", url: base_url, beforeSend: function () {

            }, success: function (response) {
                jQuery( ".woocommerce-info" ).remove();
				
                if(response){
					jQuery(".woocommerce-message").remove();
                    cart_div.before('<div class="woocommerce-message"><a href="/cart/" class="button wc-forward" target="_parent">View Cart</a>'+product_name+' was successfully added to your cart.</div>');
                   // jQuery('.woocommerce-message').fadeOut(4000);
                    jQuery.ajax( $fragment_refresh );										
					jQuery('html, body').animate({						scrollTop: (jQuery('.woocommerce-message').first().offset().top-50)					},500);
                }
            }
        });
        return false;
    });
// single product starts
	  jQuery('div.product-type-variable .single_add_to_cart_button').click(function(event){
        event.preventDefault();
        var cart_div = jQuery('div.type-product');			 		
        cart_div.before('<div class="woocommerce-info">Adding Product(s)..</div>');
        var product_id = jQuery('input[name="product_id"]').val();
		var variation_id = jQuery('input[name="variation_id"]').val();
	   	var product_name = jQuery('.post-title').html();
        jQuery.post("/wp-content/themes/energytherapy/ajax/add_product.php", {product_id: product_id,variation_id: variation_id})
			  .done(function(data) {
              var results = data.split('|');
              console.log(data);
              if (results[0] == 1){
					 jQuery( ".woocommerce-info" ).remove();
					 jQuery(".woocommerce-message").remove();
                  cart_div.before('<div class="woocommerce-message"><a href="/cart/" class="button wc-forward" target="_parent">View Cart</a>'+product_name+' was successfully added to your cart.</div>');               
                   jQuery('html, body').animate({
					   scrollTop: (jQuery('.woocommerce-message').first().offset().top-50)},500);
			}else {              
				cart_div.html('There was an error adding '+product_name+'!');
                cart_div.removeClass('woocommerce-info').addClass('woocommerce-error');
              }
		});
    });
	// single product ends
});

jQuery(document).ready(function(){
	if(jQuery(window).width() <= 480){
		//alert('coming');
		var width = jQuery('.g-recaptcha').parent().width();
			jQuery('.g-recaptcha').css('transform', 'scale(0.75)');
			jQuery('.g-recaptcha').css('-webkit-transform', 'scale(0.75)');
			jQuery('.g-recaptcha').css('transform-origin', '0 0');
			jQuery('.g-recaptcha').css('-webkit-transform-origin', '0 0');
	}else{
		var width = jQuery('.g-recaptcha').parent().width();
			jQuery('.g-recaptcha').css('transform', 'scale(1)');
			jQuery('.g-recaptcha').css('-webkit-transform', 'scale(1)');
			jQuery('.g-recaptcha').css('transform-origin', '0 0');
			jQuery('.g-recaptcha').css('-webkit-transform-origin', '0 0');
	}

	if(jQuery('.woocommerce-checkout').length > 0){
		jQuery( "<h3 style='color:#ee8b14;font-weight:bold;font-size:1.9em'>Payment Options</h3>" ).insertBefore( "#payment" );
	}
});

var delete_cookie = function(name) {
	document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
};

let searchParams = new URLSearchParams(window.location.search);
searchParams.has('form');
let value = searchParams.get('form');
	if(value == 'tech'){
		jQuery('html, body').animate({
			scrollTop: (jQuery('#tech_issue').offset().top-5000)},500);
		jQuery('.modal-box.tech_issue').css('display','block');
		jQuery('.modal-overlay.tech_issue').css('display','block');
	}
</script>
<?php } ?>
	<div id="amzn-assoc-ad-941d8b28-4638-415e-a931-5ce0b5434a95"></div>
		<script async src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US&adInstanceId=941d8b28-4638-415e-a931-5ce0b5434a95">
		</script>
<div id="popuup_div" class="popup_msg">
	<a href="javascript:void(0)" class="js-modal-close close close_free_pop">×</a>
	<div class="ctext">
		<p class="form-row form-row-wide">
			Sorry, Content not available for free members. <a href="/pricing" target='_blank'> <strong>Upgrade</strong> </a>
		</p>
	</div>
</div>

<script>
jQuery(document).ready(function(){
jQuery('div#automated_msg1').appendTo('div.automated_msg p:last');
});
</script>
<script type="text/javascript">

    (function(e,a){

        var t,r=e.getElementsByTagName("head")[0],c=e.location.protocol;

        t=e.createElement("script");t.type="text/javascript";

        t.charset="utf-8";t.async=!0;t.defer=!0;

        t.src=c+"//front.optimonk.com/public/"+a+"/js/preload.js";r.appendChild(t);

    })(document,"179497");

</script>
</body>
</html>
