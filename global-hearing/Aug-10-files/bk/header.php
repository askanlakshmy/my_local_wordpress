<?php
/**
 * The Header template for our theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-THZH5TF');</script>
<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--NPID START css-->
<style>
.left_nav_details {
    display: flex;
    /* justify-content: center; */
}

.appoint_cta a {
    background-color: #fff;
    color: #0A67B1;
    position: relative;
    padding: 8px 20px;
    font-family: sans-serif;
    font-size: 18px;
    display: inline-block;
    margin-right: 20px;
    text-decoration: none;
}
.rigt_side_sec {
    width: 50%;
}
.rigt_side_sec {
    display: flex;
	justify-content: flex-end;
    align-items: center;
}
.social_icons a {
    padding-left: 12px;
}
.left_nav_details {
    width: 50%;
}
.nav_top {
    display: flex;
    align-items:center;
}
/* .mail_doc {
    width: 35%;
}
.whatsapp_doc {
    width: 30%;
} */

.header-top {
    position: relative;
    padding: 5px;
    background-color: #1f5ca9;
    transition: 0.5s ease-in;
    display: block;

}

.mail_doc a,
.whatsapp_doc a {
    padding-left: 5px;
    color: #fff !important;
    margin-bottom: 0px;
    display: flex;
    align-items: center;
    font-size: 18px;
    font-family: sans-serif;
    text-decoration: none;
}
.mail_doc img,.whatsapp_doc img {
	margin-right: 10px;
    width: 25px;
}
.mail_doc {
    margin-right: 18px;
}
@media screen and (min-width:1280px){
	ul#menu-main-menu {
    position: relative;
    left: 12%;
}
}
@media screen and (min-width:821px) and (max-width:1365px) {
    .social_icons a {
    padding-left: 4px;
}
.mail_doc {
    width: auto !important;
}
.mail_doc a, .whatsapp_doc a {
    font-size:14px;
}
/* .whatsapp_doc {
    width: 37%;
} */
.appoint_cta a {
    font-size: 15px;
}
.rigt_side_sec {
    align-items:center;
}
}
@media screen and (min-width:401px) and (max-width:820px) {
    .rigt_side_sec {
    width: auto;
    display: flex;
    justify-content: end;
    align-items: center;
}
.social_icons a {
    padding-left:0;
}
.left_nav_details {
    display: none;
}
.nav_top {
    display: inherit;
}
.header-top {
    padding: 9px;
}
.appoint_cta a {
    font-size:15px;
}
}
@media screen and (max-width:400px) {
	
    .appoint_cta a {
    background-color: #fff;
    color: #0A67B1;
    position: relative;
    padding: 9px 20px;
    font-family: sans-serif;
    font-size: 16px;
    display: inline-block;
    margin-right: 0 !important;
    text-decoration: none;
}
.rigt_side_sec {
    width: auto;
}
.left_nav_details {
    display: none;
}
.nav_top {
    display: inherit;
}
.header-top {
    padding: 9px;
}
.social_icons {
    display: none;
}
.header-top{
	display:none;
}
}
.trust_logo li {
    display: inline-block;
    margin-top: 17px;
}
.footer_inf a img {
    margin-right: 10px;
    width: 28px;
}
.footer_inf a {
    display: block;
    font-size: 18px;
    color: #fff;
    padding-left: 10px;
    margin-bottom: 10px;
}
@media screen and (max-width:767px){
	.socail_logos .social_icons {
		display: flex;
    justify-content: space-around;
}
.socail_logos {
    text-align: center;
}
.trust_logo ul{
	display: flex;
    justify-content: space-around;
}
}
</style>
	<?php wp_head(); ?>
	<?php if(is_page('489')){ ?>
		<script type="application/ld+json">
{
  "@context": "https://www.schema.org/",
  "@type": "MedicalClinic",
  "name": "Global Hearing Aid Centre -New Siddhapudur Coimbatore",
  "url": "https://www.globalhearing.in/",
  "@id": "",
  "logo": "https://www.globalhearing.in/wp-content/uploads/2023/02/logo-gh.gif",
  "image": "https://www.globalhearing.in/wp-content/uploads/2023/02/logo-gh.gif",
  "description": "Global Hearing Aid Centre in Gandhi Puram Coimbatore provides customized and personalized hearing aids to people with hearing impairment. We provide hearing evaluation and hearing aid fitting to people with hearing loss and other issues with brands like Phonak Resound, Widex, Unitron and many more.",
  "telephone": "87530 87530",
  "sameAs": [
	"https://www.facebook.com/globalhearingaidcenter/",
        "https://twitter.com/globalhearingca"],
  "openingHoursSpecification": [
    {
     "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
       "Monday",
       "Tuesday",
       "Wednesday",
       "Thursday",
       "Friday",
       "Saturday"  
     ],
     "opens": "10:00",
     "closes": "19:00"
   }],
  "priceRange": "",
  "address": {
	"@type": "PostalAddress",
	"streetAddress": "219, Venkatasamy Rd, Siddhapudur",
	"addressLocality": "New Siddhapudur",
	"addressRegion": "Tamil Nadu",
	"postalCode": "641044",
	"addressCountry": "IN"
		},
  "location": {
	"@type": "Place",
	"geo": {
	"@type": "GeoCoordinates",
		"latitude": "11.02124",
		"longitude": "76.97363"
			}
		},
  "areaServed": [{
	"@type": "City",
	"name": ["", ""]
		}],
"department": [
	{
	"@type": "MedicalClinic",
	"name": "Global Hearing Aid Centre - RS Puram, Coimbatore",
	"description": "Global Hearing Aid Centre in Coimbatore provides personalized hearing aids to people with hearing impairment. We offers hearing aids, hearing tests, and custom hearing devices in RS Puram of brands like Resound, Widex, Unitron and many more.",
	"image": "https://www.globalhearing.in/wp-content/uploads/2023/02/logo-gh.gif",
	"telephone": "96886 03000",
        "priceRange": "",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "10, E Periasamy Rd, R.S. Puram",
		"addressLocality": "Coimbatore",
		"addressRegion": "Tamil Nadu",
		"postalCode": "641002",
		"addressCountry": "IN"
		},
	"location": {
		"@type": "Place",
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "11.01512",
			"longitude": "76.95239"
			}
		},
	"areaServed": [{
		"@type": "City",
		"name": ["", ""]			
		}]
	},
    {
	"@type": "MedicalClinic",
	"name": "Global Hearing Aid Centre -Anna Nagar",
	"description": "Global Hearing Aid Centre in Anna Nagar provides personalized hearing aids to people with hearing impairment. We offer hearing aids, hearing tests, and custom hearing devices of brands like Resound, Widex, Unitron and many more.",
	"image": "https://www.globalhearing.in/wp-content/uploads/2023/02/logo-gh.gif",
	"telephone": "96985 54000",
        "priceRange": "",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "137, 8th Main Road, AH Block, Santhi colony, AI Block, Anna Nagar,",
		"addressLocality": "Chennai",
		"addressRegion": "Tamil Nadu",
		"postalCode": "600040",
		"addressCountry": "IN"
		},
	"location": {
		"@type": "Place",
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "13.08141",
			"longitude": "80.21241"
			}
		},
	"areaServed": [{
		"@type": "City",
		"name": ["", ""]			
		}]
	},
    {
	"@type": "MedicalClinic",
	"name": "Global Hearing Aid Centre - Edappaly",
	"description": "Global Hearing Aid Centre in Edappaly provides personalized hearing aids to people with hearing impairment. We offer hearing aids, hearing tests, and custom hearing devices of brands like Resound, Widex, Unitron and many more.",
	"image": "https://www.globalhearing.in/wp-content/uploads/2023/02/logo-gh.gif",
	"telephone": "80866 36667",
        "priceRange": "",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "METRO PILLAR 414, JJ ARCADE, Sahrudaya Nagar Rd, near SEVANA MEDICALS, Edappally",
		"addressLocality": "Ernakulam",
		"addressRegion": "Kerala",
		"postalCode": "682024",
		"addressCountry": "IN"
		},
	"location": {
		"@type": "Place",
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "10.02503",
			"longitude": "76.30670"
			}
		},
	"areaServed": [{
		"@type": "City",
		"name": ["", ""]			
		}]
	},
    {
	"@type": "MedicalClinic",
	"name": "Global Hearing Aid Centre - Kunnamkulam ,Thrissur",
	"description": "Global Hearing Aid Centre in Kunnamkulam provides personalized hearing aids to people with hearing impairment. We offer hearing aids, hearing tests, and custom hearing devices of brands like Resound, Widex, Unitron and many more.",
	"image": "https://www.globalhearing.in/wp-content/uploads/2023/02/logo-gh.gif",
	"telephone": "",
        "priceRange": "",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "Avenues Complex, Chavakkad - Wadakkanchery Rd",
		"addressLocality": "Kunnamkulam",
		"addressRegion": "Kerala",
		"postalCode": "680503",
		"addressCountry": "IN"
		},
	"location": {
		"@type": "Place",
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "10.65117",
			"longitude": "76.07162"
			}
		},
	"areaServed": [{
		"@type": "City",
		"name": ["", ""]			
		}]
	},
    {
	"@type": "MedicalClinic",
	"name": "Global Hearing Aid Centre -Mylapore",
	"description": "Global Hearing Aid Centre in Mylapore provides personalized hearing aids to people with hearing impairment. We offer hearing aids, hearing tests, and custom hearing devices of brands like Resound, Widex, Unitron and many more.",
	"image": "https://www.globalhearing.in/wp-content/uploads/2023/02/logo-gh.gif",
	"telephone": "98422 55543",
        "priceRange": "",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "bus stop, 4th street, No.6, Dr Radha Krishnan Salai, near yellow pages,",
		"addressLocality": "Chennai",
		"addressRegion": "Tamil Nadu",
		"postalCode": "600004",
		"addressCountry": "IN"
		},
	"location": {
		"@type": "Place",
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "13.04409",
			"longitude": "80.26915"
			}
		},
	"areaServed": [{
		"@type": "City",
		"name": ["", ""]			
		}]
	},
     {
	"@type": "MedicalClinic",
	"name": "Global Hearing Aid Centre- Kadavanthara",
	"description": "Global Hearing Aid Centre in Kadavanthara provides personalized hearing aids to people with hearing impairment. We offer hearing aids, hearing tests, and custom hearing devices of brands like Resound, Widex, Unitron and many more.",
	"image": "https://www.globalhearing.in/wp-content/uploads/2023/02/logo-gh.gif",
	"telephone": "80866 36666",
        "priceRange": "",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "Alunkal Building , Alunkal Road 37/147A, Kaloor- Kadavanthara Road Near Indoor Stadium, Kadavanthra",
		"addressLocality": "Kochi",
		"addressRegion": "Kerala",
		"postalCode": "682020",
		"addressCountry": "IN"
		},
	"location": {
		"@type": "Place",
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "9.97049",
			"longitude": "76.29830"
			}
		},
	"areaServed": [{
		"@type": "City",
		"name": ["", ""]			
		}]
	},
    {
	"@type": "MedicalClinic",
	"name": "Global Hearing Aid Centre - Thrissur",
	"description": "Global Hearing Aid Centre in Thrissur provides personalized hearing aids to people with hearing impairment. We offer hearing aids, hearing tests, and custom hearing devices of brands like Resound, Widex, Unitron and many more.",
	"image": "https://www.globalhearing.in/wp-content/uploads/2023/02/logo-gh.gif",
	"telephone": "80866 96666",
        "priceRange": "",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "Rasvi Towers, C Achutha Menon Rd, Punkunnam,",
		"addressLocality": "Thrissur",
		"addressRegion": "Kerala",
		"postalCode": "680002",
		"addressCountry": "IN"
		},
	"location": {
		"@type": "Place",
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "10.53278",
			"longitude": "76.20138"
			}
		},
	"areaServed": [{
		"@type": "City",
		"name": ["", ""]			
		}]
	},
    {
	"@type": "MedicalClinic",
	"name": "Global Hearing Aid Centre - Bengaluru",
	"description": "Global Hearing Aid Centre in Bengaluru provides personalized hearing aids to people with hearing impairment. We offer hearing aids, hearing tests, and custom hearing devices of brands like Resound, Widex, Unitron and many more.",
	"image": "https://www.globalhearing.in/wp-content/uploads/2023/02/logo-gh.gif",
	"telephone": "98422 55543",
        "priceRange": "",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "158, 1st floor 9th Main Road, opp. lawrence school, Sector 6, HSR Layout,",
		"addressLocality": "Bengaluru",
		"addressRegion": "Karnataka",
		"postalCode": "560102",
		"addressCountry": "IN"
		},
	"location": {
		"@type": "Place",
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "12.91417",
			"longitude": "77.63548"
			}
		},
	"areaServed": [{
		"@type": "City",
		"name": ["", ""]			
		}]
	},
    {
	"@type": "MedicalClinic",
	"name": "Global Hearing Aid Centre - Pollachi",
	"description": "Global Hearing Aid Centre Pollachi provides personalized hearing aids to people with hearing impairment. We offer hearing aids, hearing tests, and custom hearing devices of brands like Resound, Widex, Unitron and many more.",
	"image": "https://www.globalhearing.in/wp-content/uploads/2023/02/logo-gh.gif",
	"telephone": "98422 55543",
        "priceRange": "",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "Ramanathan Medical Complex, 146, New Scheme Rd, near Eye Foundation",
		"addressLocality": "Pollachi",
		"addressRegion": "Tamil Nadu",
		"postalCode": "642001",
		"addressCountry": "IN"
		},
	"location": {
		"@type": "Place",
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "10.66287",
			"longitude": "77.00977"
			}
		},
	"areaServed": [{
		"@type": "City",
		"name": ["", ""]			
		}]
	},
    {
	"@type": "MedicalClinic",
	"name": "Global Hearing Aid Centre - Tiruppur, Tamil Nadu",
	"description": "Global Hearing Aid Centre is authorized distributors of custom hearing aids such as digital, pediatric, rechargeable and many more. We also offers hearing test to people with hearing impairment in Tiruppur, Tamil Nadu.",
	"image": "https://www.globalhearing.in/wp-content/uploads/2023/02/logo-gh.gif",
	"telephone": "96883 03000",
        "priceRange": "",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "23, 60 Feet Rd, near City Ortho Hospital, Kumar Nagar, Kumarnathapuram",
		"addressLocality": "Tiruppur",
		"addressRegion": "Tamil Nadu",
		"postalCode": "641603",
		"addressCountry": "IN"
		},
	"location": {
		"@type": "Place",
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "11.12252",
			"longitude": "77.33528"
			}
		},
	"areaServed": [{
		"@type": "City",
		"name": ["", ""]			
		}]
	},
	{
	"@type": "MedicalClinic",
	"name": "Global Hearing Aid Centre PVT LTD- Ramanathapuram",
	"description": "Global Hearing Aid Centre in Coimbatore provides personalized hearing aids to people with hearing impairment. We offer hearing aids, hearing tests, and custom hearing devices of brands like Resound, Widex, Unitron, and many more.",
	"image": "https://www.globalhearing.in/wp-content/uploads/2023/02/logo-gh.gif",
	"telephone": "63844 92736",
        "priceRange": "",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "No 859, Trichy Road,",
		"addressLocality": "Coimbatore",
		"addressRegion": "Tamil Nadu",
		"postalCode": "641045",
		"addressCountry": "IN"
		},
	"location": {
		"@type": "Place",
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "10.9970026",
			"longitude": "76.9967683"
			}
		},
	"areaServed": [{
		"@type": "City",
		"name": ["", ""]			
		}]
	}]
}
</script>

	<?php } ?>
	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "DiagnosticLab",
  "name": "Global Hearing Aid Centre",
  "url": "https://www.globalhearing.in/",
  "logo": "https://www.globalhearing.in/wp-content/uploads/2023/02/logo-gh.gif",
  "sameAs": [
    "https://www.facebook.com/globalhearingaidcenter/",
    "https://twitter.com/globalhearingca"
  ]
}
</script>
<?php if(is_front_page()){ ?>
	<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "<?php echo get_site_url(); ?>" 
  }]
}
</script>

<?php } ?>
<?php if(!is_front_page()){ ?>
	<?php
    global $wp;
    $current_url = home_url( add_query_arg( array(), $wp->request ) );
     ?>
	<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "<?php echo get_site_url(); ?>" 
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "<?php echo get_the_title(); ?>",
    "item": "<?php echo $current_url; ?>"  
  }]
}
</script>

<?php } ?>

<?php if(is_page('143')){ ?>
	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What is Tinnitus?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Tinnitus refers to any sound heard in the head or ears for which there is no corresponding outside sound. Most tinnitus is reported as sounding like ringing, whistling, humming, cicadas, buzzing, static or the ocean. In most cases, tinnitus is reported as sounding like it is in both ears and the main cause is noise exposure. Tinnitus can cause anxiety and sleep disturbance however the good news is that tinnitus can be treated and relieved."
    }
  },{
    "@type": "Question",
    "name": "What is medical management?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Medical management consists of making a diagnosis as to the cause and providing an explanation to the patient. It involves taking a history of noise exposure, previous ear problems, head trauma, illness and drugs used in the past. An examination of the head, neck and ears and an accurate audiogram is also conducted.
If an unexplainable asymmetrical hearing loss is found, a Computed Tomography (CT) or Magnetic Resonance Imaging (MRI) scan to exclude an acoustic neuroma may be required."
    }
  },{
    "@type": "Question",
    "name": "What to expect at a tinnitus assessment?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "A tinnitus assessment will take 90 minutes, your clinician will start by asking you questions about your medical and hearing history, which is commonly known as case history. the Sample questions are as follows:

For how long and what have you noticed difficulty with your hearing?
Have you experienced hearing difficulty gradually or suddenly?
Do you have a history of ear infections/ surgeries?
Do you hear ringing, buzzing or humming in your ears?
Is there a family history of hearing loss
Next, your clinician will conduct a test or series of tests to assess, such as:

Loudness tinnitus pitch
Loudness and sound tolerance test
Finally, the clinician will discuss your assessment results with you and also help you to understand why tinnitus became a problem and how it can be treated. If your clinician detects any sign of an underlying medical condition, they will prepare a hearing test report explaining the results to your GP for further clinical assessments."
    }
  },{
    "@type": "Question",
    "name": "How can tinnitus be treated?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Tinnitus can be treated with a neurophysiological mode, called Tinnitus Retraining Therapy (TRT). This involves:

An extensive audiological evaluation
Counselling sessions
The use of external sound
The use of sound devices may also be employed"
    }
  },{
    "@type": "Question",
    "name": "What is Tinnitus Retraining Therapy (TRT)?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Tinnitus Retraining Therapy (TRT) is a process of retraining the subconscious parts of the brain to ignore the sound of tinnitus. The ultimate goal of retraining therapy is to achieve a state in which you are not aware of your tinnitus."
    }
  },{
    "@type": "Question",
    "name": "Will hearing aids help with my tinnitus?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "If you have hearing loss, there is a good chance that a pair of hearing aids will benefit your tinnitus and help you hear again. Request an appointment to get a check-up to determine if you will benefit from using hearing aids."
    }
  }]
}
</script>

<?php } ?>
<?php if(is_page('32')){ ?>
	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "What is hearing loss test?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Hearing Is a valuable and very essential function in every person’s life. Hearing is the ability to recognize noise and sounds. It helps in maintaining relationships and communications with friends and family and socialize.

Hearing loss :
It is a partial or total inability to hear. It can affect any one ear or both the ears. People face difficulties in hearing speech and other noise. It makes your day to day life difficult. It is also termed as deafness and hearing impairments"
    }
  },{
    "@type": "Question",
    "name": "What can cause hearing loss?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "There are multiple causes for hearing disorder. It is very important to identify the cause to help with the proper treatment. The causes for deafness can be classified as:

Congenital causes :
The causes which leads to hearing loss at the time of birth or immediately after birth.
Infections such as maternal rubella, syphilis and other infections during pregnancy. It can be heredity. and at times certain complications during pregnancy such as.
Inappropriate use of certain drugs during pregnancy.
Birth asphyxia, which is low level of oxygen at the time of birth.
Severe jaundice in newborn babies.
Low birth rate."
    }
  },{
    "@type": "Question",
    "name": "What are the Acquired causes :",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "These are the causes which develop over a period of time.
Ageing.
Noise exposure.
Head injury or trauma.
Damage to inner ear.
Genetic factors.
Illness such as high blood pressure, heart disease, meniere’s disease, meningitis and diabetics.
Infections or earwax.
Certain medications such as antibiotics, chemotherapy drugs and pain reliever abnormal bone growth or tumor.
Fluid in the ear."
    }
  },{
    "@type": "Question",
    "name": "What are the symptoms of hearing loss?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Frequently asking others to repeat themselves.
Asking people to speak louder and slow.
Difficulty in understanding day to day conversations.
Having turn up the volume of music or TV.
Tinnitus, ringing or buzzing sound in the ear.
Difficulty in hearing on telephone.
Infections or earwax.
Avoiding social situations."
    }
  },{
    "@type": "Question",
    "name": "How can hearing loss be treated?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Hearing loss treatment depends upon the type of hearing loss and causes it. Some of the treatments are:

Removing Wax Blockage :
It is a reversible cause of hearing loss. The doctor removes excess wax using an instrument called Curette or by suction. And also, by loosening the earwax with oil and flushing the softened wax out.

Surgical Procedures :
Some of the types of hearing loss may be treated with surgery, Such as repeated ear infections, Abnormality in ear drum or bone.

Hearing Aids :
If the hearing loss Is due to the damage to the inner ear and cannot be treated by surgery then your doctor will advise you to use hearing aids.

Cochlear Implant :
If the hearing loss is severe and hearing aid does not provide you with much relief then the doctor will suggest you a cochlear implant. Cochlear implant directly stimulates the hearing nerve bypassing the damaged or non-working parts of inner ear. An audiologist and ENT doctor will explain the risks and benefits of cochlear implantation."
    }
  }]
}
</script>

<?php } ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THZH5TF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="header-top">
    <div class="container">
        <div class="nav_top">
            <div class="left_nav_details">
                <div class="mail_doc">
                    <a href="mailto:info@globalhearing.in"><img
                            src="https://www.globalhearing.in/wp-content/uploads/2023/06/email-h.png"
                            alt="">info@globalhearing.in</a>
                </div>
                <div class="whatsapp_doc">
                    <a href="tel:87530 87530"><img
                            src="https://www.globalhearing.in/wp-content/uploads/2023/06/phone-h.png"
                            alt="">87530 87530</a>
                </div>
            </div>
            <div class="rigt_side_sec">
                <div class="appoint_cta">
                    <a href="https://www.globalhearing.in/appointment/">Book An Appointment</a>
                </div>
                <div class="social_icons">
                    <a href="https://www.facebook.com/globalhearingaidcenter"><img src="https://www.globalhearing.in/wp-content/uploads/2023/06/facebook-h.png"
                            alt="facebook"></a>
                    <a href="https://www.linkedin.com/company/globalhac/"><img src="https://www.globalhearing.in/wp-content/uploads/2023/06/linkedin-h.png"
                            alt="linkedin"></a>
                    <a href="https://www.instagram.com/globalhac/"><img src="https://www.globalhearing.in/wp-content/uploads/2023/06/instagram-h.png"
                            alt="insta"></a>
                    <a href="https://twitter.com/globalhac"><img src="https://www.globalhearing.in/wp-content/uploads/2023/07/twitter.png"
                            alt="twitter"></a>
                </div>
            </div>
        </div>
    </div>
</div>
	<?php if ( function_exists( 'wp_body_open' ) ) : ?>
		<?php wp_body_open(); ?>
	<?php endif; ?>

	<?php do_action( 'woodmart_after_body_open' ); ?>
	
	<div class="website-wrapper">
		<?php if ( woodmart_needs_header() ) : ?>
			<?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) : ?>
				<header <?php woodmart_get_header_classes(); // phpcs:ignore ?>>
					<?php whb_generate_header(); ?>
				</header>
			<?php endif ?>

			<?php woodmart_page_top_part(); ?>
		<?php endif ?>
