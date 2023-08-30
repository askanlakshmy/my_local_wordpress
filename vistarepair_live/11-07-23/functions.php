<?php

include('performancefix.php');
	

add_theme_support('custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array('vista-repair', 'My Site'),
));

function wpb_widgets_init()
{
    register_sidebar(array(
        'name' => __('header_menu1', 'wpb'),
        'id' => 'sidebar-1',
        'description' => __('The main sidebar appears on the right on each page except the front page template', 'wpb'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('header_menu2', 'wpb'),
        'id' => 'sidebar-2',
        'description' => __('The main sidebar appears on the right on each page except the front page template', 'wpb'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('header_menu3', 'wpb'),
        'id' => 'sidebar-3',
        'description' => __('The main sidebar appears on the right on each page except the front page template', 'wpb'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'wpb_widgets_init');

function wpb_widgets_init12()
{
    register_sidebar(array(
        'name' => __('footer_menu1', 'wpb'),
        'id' => 'sidebar-4',
        'description' => __('The main sidebar appears on the right on each page except the front page template', 'wpb'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('footer_menu2', 'wpb'),
        'id' => 'sidebar-5',
        'description' => __('The main sidebar appears on the right on each page except the front page template', 'wpb'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('footer_menu3', 'wpb'),
        'id' => 'sidebar-6',
        'description' => __('The main sidebar appears on the right on each page except the front page template', 'wpb'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('footer_menu4', 'wpb'),
        'id' => 'sidebar-7',
        'description' => __('The main sidebar appears on the right on each page except the front page template', 'wpb'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'wpb_widgets_init12');


function register_my_menus()
{
    register_nav_menus(
        array(
            'menu-head1' => __('Menu Head1'),   
			'menu-head2' => __('Menu Head2')       
        )
    );   
}   
add_action('init', 'register_my_menus');

if(isset($_POST['sm']))
{
  $fname = $_POST['n'];
  $pname  = $_POST['p'];
  $email = $_POST['m'];
  $phno  = $_POST['t']; 
  $kvk = $_POST['k'];
  $btw  = $_POST['b'];
  $strt  = $_POST['s'];
  $code  = $_POST['pp']; 
  $comment = $_POST['v'];
 
    global $wpdb;     
    $tablename = 'custom_contact_form';

$test = $wpdb->insert($tablename,array('name' => $fname,'contact_person' => $pname,'email' => $email,'phone' => $phno, 'kvk'=> $kvk, 'btw_nm'=> $btw, 'street' => $strt,
        'plot_nb' => $code, 'comment' => $comment,
)
);
   if($test==1)
   {
     
    $headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Website <noreply@vistarepair.com>" . "\r\n";
    "Reply-To: $email" . "\r\n" .
		$subject=' Contact Form';

		$to_message="<!DOCTYPE html>
		<html>
		<head>
		<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}
		
		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}
		
		tr:nth-child(even) {
		  background-color: #dddddd;
		}
		</style>
		</head>
		<body>
		<table>
		  <tr>
			<td>Bedrijfsnaam</td>
			<td>$fname</td>
		
          </tr>
          <tr>
          <td>Contactpersoon</td>
          <td>$pname</td>
      
        </tr>
         
		  <tr>
			<td>Contact mail adres</td>
			<td>$email</td>
		
		  </tr>
		  <tr>
			<td>Telefoonnummer</td>
			<td>$phno</td>
		 
            </tr>
            <tr>
			<td>KVK</td>
			<td>$kvk</td>
		 
            </tr>
            <tr>
			<td>BTW Nummer</td>
			<td>$btw</td>
		 
            </tr>
            <tr>
			<td>Straatnaam & Huisnummer</td>
			<td>$strt</td>
		 
            </tr>
            <tr>
			<td>Postcode & Plaats</td>
			<td>$code</td>
		 
            </tr>
     
		  <tr>
			<td>Comments</td>
			<td>$comment</td>
		  </tr>
		</table>		
		</body>
		</html>";
		$to_mail='akilam.askan@gmail.com';		
		$mailsend=wp_mail($to_mail,$subject,$to_message,$headers);  		
		if($mailsend==true)
		{
			 $mailsend = 'sent'; //echo 1;
	 		
		}

		else 
		{
			//echo "0";
			$mailsend = 'not sent';
			
		}
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Website <noreply@vistarepair.com>" . "\r\n";
    "Reply-To: $email" . "\r\n" .
		$subject=' Contact Form';

		$to_message="<!DOCTYPE html>
		<html>
		<head>
		<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}
		
		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}
		
		tr:nth-child(even) {
		  background-color: #dddddd;
		}
		</style>
		</head>
		<body>
		<table>
		  <tr>
			<td>Bedrijfsnaam</td>
			<td>$fname</td>
		
          </tr>
          <tr>
          <td>Contactpersoon</td>
          <td>$pname</td>
      
        </tr>
         
		  <tr>
			<td>Contact mail adres</td>
			<td>$email</td>
		
		  </tr>
		  <tr>
			<td>Telefoonnummer</td>
			<td>$phno</td>
		 
            </tr>
            <tr>
			<td>KVK</td>
			<td>$kvk</td>
		 
            </tr>
            <tr>
			<td>BTW Nummer</td>
			<td>$btw</td>
		 
            </tr>
            <tr>
			<td>Straatnaam & Huisnummer</td>
			<td>$strt</td>
		 
            </tr>
            <tr>
			<td>Postcode & Plaats</td>
			<td>$code</td>
		 
            </tr>
     
		  <tr>
			<td>Comments</td>
			<td>$comment</td>
		  </tr>
		</table>		
		</body>
		</html>";
		$to_mail=$email;		
		$mailsend=wp_mail($to_mail,$subject,$to_message,$headers);  		
		if($mailsend==true)
		{
			 $mailsend = 'sent'; //echo 1;
	 		
		}

		else 
		{
			//echo "0";
			$mailsend = 'not sent';
			
		}
   	    //    $response = json_encode(array("status" => 'ok','mailstauts'=> $mailsend));
	   echo "Form Submitted";
	   return false;
       
   }
   else 
   {
	   echo"else";
     $response = json_encode(array("status" => 'false'));  
	 return false;
	 
   }
  
}
// to add category for page
// function add_categories_to_pages() {
//   register_taxonomy_for_object_type( 'category', 'page' );
//   }
//  add_action( 'init', 'add_categories_to_pages' );


//overige-validation

function  overigevalidation()
{
// if(isset($_POST['sut']))
// {
  $name = $_POST['nm'];
  $gmail = $_POST['ml'];
  $onder  = $_POST['op']; 
  $coment = $_POST['bc'];
  
 
    global $wpdb;     
    $tablename = 'contact_form';

	$test = $wpdb->insert($tablename,array('naam' => $name,'emails' => $gmail,'onderwerp' => $onder,'bericht' => $coment,
	)
	);
   if($test==1)
   {
     
    $headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Website <noreply@vistarepair.com>" . "\r\n";
    "Reply-To: $gmail" . "\r\n" .
		$subject=' Contact Form';

		$to_message="<!DOCTYPE html>
		<html>
		<head>
		<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}
		
		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}
		
		tr:nth-child(even) {
		  background-color: #dddddd;
		}
		</style>
		</head>
		<body>
		<table>
		  <tr>
			<td>Naam</td>
			<td>$name</td>
		
      </tr>
               
		  <tr>
			<td>Email</td>
			<td>$gmail</td>
		
		  </tr>
		  <tr>
			<td>Onderwerp</td>
			<td>$onder</td>
		 
      </tr>
              
		  <tr>
			<td>Bericht</td>
			<td>$coment</td>
		  </tr>
		</table>		
		</body>
		</html>";
		$to_mail='reshmanoora.askan@gmail.com';		
		$mailsend=mail($to_mail,$subject,$to_message,$headers);  		
		if($mailsend==true)
		{
			 $mailsend = 'sent'; //echo 1;
	} 
	else 
	{
        //echo "0";
        $mailsend = 'not sent';
	}
       $response = json_encode(array("status" => 'ok','mailstauts'=> $mailsend));
       die;
   }
   else 
   {
     $response = json_encode(array("status" => 'false'));  
   }
}

//telefoonreparatie-haarlem

add_action("wp_ajax_televalidation", "televalidation");

add_action("wp_ajax_nopriv_televalidation", "televalidation");

function televalidation()
{
// if(isset($_POST['sub']))
// {
  $names = $_POST['naa'];
  $gmails = $_POST['em'];
  $onders  = $_POST['on']; 
  $coments = $_POST['cht'];
 
    global $wpdb;     
    // $tablename = 'contact_form';

	$testing = $wpdb->query("INSERT INTO contact_form ('naam', 'emails', 'onderwerp', 'bericht') VALUES ('".$names."', '".$gmails."', '".$onders."', '".$coments."')");

   if($test==1)
   {
     
    $headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Website <noreply@vistarepair.com>" . "\r\n";
    "Reply-To: $gmails" . "\r\n" .
		$subject=' Contact Form';

		$to_message="<!DOCTYPE html>
		<html>
		<head>
		<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}
		
		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}
		
		tr:nth-child(even) {
		  background-color: #dddddd;
		}
		</style>
		</head>
		<body>
		<table>
		  <tr>
			<td>Naam</td>
			<td>$names</td>
		
      </tr>
               
		  <tr>
			<td>Email</td>
			<td>$gmails</td>
		
		  </tr>
		  <tr>
			<td>Onderwerp</td>
			<td>$onders</td>
		 
      </tr>
              
		  <tr>
			<td>Bericht</td>
			<td>$coments</td>
		  </tr>
		</table>		
		</body>
		</html>";
		$to_mail='reshmanoora.askan@gmail.com';		
		$mailsend=mail($to_mail,$subject,$to_message,$headers);  		
		if($mailsend==true)
		{
			 $mailsend = 'sent'; //echo 1;
	} 
	else 
	{
        //echo "0";
        $mailsend = 'not sent';
	}
       $response = json_encode(array("status" => 'ok','mailstauts'=> $mailsend));
       die;
   }
   else 
   {
     $response = json_encode(array("status" => 'false'));  
   }
}

//Hello world

// if(isset($_POST['comsub']))
// {
//   $react = $_POST['rea']; 
//   $names = $_POST['am']; 
//   $mailtrg = $_POST['il']; 
//   $site = $_POST['st']; 
 
//     global $wpdb;     
//     $tablename = 'response_form';

// $test = $wpdb->insert($tablename,array('response' => $react,'rnaam' => $names,'remail' => $mailtrg,'site' => $site,
// )
// );
//    if($test==1)
//    {
     
//     $headers = "MIME-Version: 1.0" . "\r\n";
// 		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//     $headers .= "From: Website <noreply@vistarepair.com>" . "\r\n";
//     "Reply-To: $mailtrg" . "\r\n" .
// 		$subject=' Contact Form';

// 		$to_message="<!DOCTYPE html>
// 		<html>
// 		<head>
// 		<style>
// 		table {
// 		  font-family: arial, sans-serif;
// 		  border-collapse: collapse;
// 		  width: 100%;
// 		}
		
// 		td, th {
// 		  border: 1px solid #dddddd;
// 		  text-align: left;
// 		  padding: 8px;
// 		}
		
// 		tr:nth-child(even) {
// 		  background-color: #dddddd;
// 		}
// 		</style>
// 		</head>
// 		<body>
// 		<table>
// 		  <tr>
// 			<td>Reactie</td>
// 			<td>$react</td>
		
//       </tr>
//       <tr>
// 			<td>Name</td>
// 			<td>$names</td>
		
//       </tr>
//       <tr>
// 			<td>Email</td>
// 			<td>$mailtrg</td>
		
//       </tr>
//       <tr>
// 			<td>Site</td>
// 			<td>$site</td>
		
//       </tr>
// 		</table>		
// 		</body>
// 		</html>";
// 		$to_mail='reshmanoora.askan@gmail.com';		
// 		$mailsend=mail($to_mail,$subject,$to_message,$headers);  		
// 		if($mailsend==true)
// 		{
// 			 $mailsend = 'sent'; //echo 1;
// 	} 
// 	else 
// 	{
//         //echo "0";
//         $mailsend = 'not sent';
// 	}
//        $response = json_encode(array("status" => 'ok','mailstauts'=> $mailsend));
//        header('Location:https://vistarepair.nl/wp-comments-post/');
//        die;
//    }
//    else 
//    {
//      $response = json_encode(array("status" => 'false'));  
//    }
// }

//offerte-aanvragen
add_action("wp_ajax_offertevalidation", "offertevalidation");

add_action("wp_ajax_nopriv_offertevalidation", "offertevalidation");

function offertevalidation()
{
//     if(isset($_POST['sub1']))
// {
  $fsname = $_POST['voo'];
  $ltname = $_POST['acht'];
  $mailad  = $_POST['adr']; 
  $brand = $_POST['me'];
  $type = $_POST['toe'];
  $device = $_POST['om'];
  $descp = $_POST['omsc'];

    global $wpdb;  
	// $test = "INSERT INTO request_form (voornaam, achternaam, mailadres, merktoestel, toestel, device, description)". VALUES (saran, sra, asha@gmail.com, sara, saranya, asha);
	// $test = $wpdb->query("INSERT INTO request_form (voornaam, achternaam, mailadres, merktoestel, toestel, device, description)". "VALUES ($fsname, $ltname, $mailad, $brand, $type, $device, $descp)";  
	$test = $wpdb->query("INSERT INTO request_form (`voornaam`, `achternaam`, `mailadres`, `merktoestel`, `toestel`, `device`, `description`) VALUES ('".$fsname."', '".$ltname."', '".$mailad."', '".$brand."', '".$type."', '".$device."', '".$descp."')");  
//     $tablename = 'request_form';


// $test = $wpdb->insert($tablename,array('voornaam' => $fsname,'achternaam' => $ltname,'mailadres' => $mailad,'merktoestel' => $brand,'toestel' => $type,'device' => $device,'description' => $descp
// )
// );
// $wpdb->query($wpdb->prepare("INSERT INTO `aka_usermeta` (user_id,meta_key,meta_value) VALUES ($user_id,'phone_number','".$args['MobilePhone-5']."')"));
// echo "INSERT INTO 'request_form' ('voornaam', 'achternaam', 'mailadres', 'merktoestel', 'toestel', 'device', 'description') VALUES ('$fsname', '$ltname', '$mailad', '$brand', '$type', '$device', '$descp')";
// print_r ($test);
//    if($test)
//    {
	//    echo "meassage";
	//    exit ();
    $headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Website <noreply@vistarepair.com>" . "\r\n";
    "Reply-To: $mailad" . "\r\n" .
		$subject=' Contact Form';

		$to_message="<!DOCTYPE html>
		<html>
		<head>
		<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}
		
		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}
		
		tr:nth-child(even) {
		  background-color: #dddddd;
		}
		</style>
		</head>
		<body>
		<table>
		  <tr>
			<td>Voornaam</td>
			<td>$fsname</td>
		
      </tr>
               
		  <tr>
			<td>Achternaam</td>
			<td>$ltname</td>
		
		  </tr>
		  <tr>
			<td>E-mail adres</td>
			<td>$mailad</td>
		 
      </tr>
              
		  <tr>
			<td>Merk Toestel</td>
			<td>$brand</td>
		  </tr>

      <tr>
			<td>Type Toestel</td>
			<td>$type</td>
		  </tr>

      <tr>
			<td>Om welk device gaat het?</td>
			<td>$device</td>
		  </tr>

      <tr>
			<td>Omschrijving van het defect</td>
			<td>$descp</td>
		  </tr>
		</table>		
		</body>
		</html>";
		$to_mail='reshmanoora.askan@gmail.com';		
		$mailsend=mail($to_mail,$subject,$to_message,$headers); 
	
			if($mailsend==true)
			{
				$mailsend = 'sent'; //echo 1;
				
			} 
			else 
			{
				//echo "0";
				$mailsend = 'not sent';
			}
			$response = json_encode(array("status" => 'ok','mailstauts'=> $mailsend));
			return json_encode($response);
			
		// }
		// else 
		// {
		// 	$response = json_encode(array("status" => 'false'));  
		// 		//  echo "Your form was not submitted";
		// }

// }
}



//Hello world

if(isset($_POST['comsub']))
{
  $react = $_POST['rea']; 
  $names = $_POST['am']; 
  $mailtrg = $_POST['il']; 
  $site = $_POST['st']; 
 
    global $wpdb;     
    $tablename = 'response_form';

$test = $wpdb->insert($tablename,array('response' => $react,'rnaam' => $names,'remail' => $mailtrg,'site' => $site,
)
);

   if($test==1)
   {
     
    $headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Website <noreply@vistarepair.com>" . "\r\n";
    "Reply-To: $mailtrg" . "\r\n" .
		$subject=' Contact Form';

		$to_message="<!DOCTYPE html>
		<html>
		<head>
		<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}
		
		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}
		
		tr:nth-child(even) {
		  background-color: #dddddd;
		}
		</style>
		</head>
		<body>
		<table>
		  <tr>
			<td>Reactie</td>
			<td>$react</td>
		
      </tr>
      <tr>
			<td>Name</td>
			<td>$names</td>
		
      </tr>
      <tr>
			<td>Email</td>
			<td>$mailtrg</td>
		
      </tr>
      <tr>
			<td>Site</td>
			<td>$site</td>
		
      </tr>
		</table>		
		</body>
		</html>";
		$to_mail='reshmanoora.askan@gmail.com';		
		$mailsend=mail($to_mail,$subject,$to_message,$headers);  		
		if($mailsend==true)
		{
			 $mailsend = 'sent'; //echo 1;
	} 
	else 
	{
        //echo "0";
        $mailsend = 'not sent';
	}
       $response = json_encode(array("status" => 'ok','mailstauts'=> $mailsend));
       header('Location:https://vistarepair.nl/wp-comments-post/');
       die;
   }
   else 
   {
     $response = json_encode(array("status" => 'false'));  
   }
}
if( function_exists('acf_add_options_page') ) {

    acf_add_options_sub_page('button_iphone8');
}
?>