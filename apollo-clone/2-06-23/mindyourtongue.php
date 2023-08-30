
<?php 
include 'config.php';
?>
<?php
$main_find_url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] ;
$page_find_url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$countryArray = array(
    'AF'=>array('name'=>'AFGHANISTAN','code'=>'93'),
    'AL'=>array('name'=>'ALBANIA','code'=>'355'),
    'DZ'=>array('name'=>'ALGERIA','code'=>'213'),
    'AS'=>array('name'=>'AMERICAN SAMOA','code'=>'1684'),
	'AD'=>array('name'=>'ANDORRA','code'=>'376'),
    'AI'=>array('name'=>'ANGUILLA','code'=>'1264'),
    'AO'=>array('name'=>'ANGOLA','code'=>'244'),
    'AQ'=>array('name'=>'ANTARCTICA','code'=>'672'),
    'AG'=>array('name'=>'ANTIGUA AND BARBUDA','code'=>'1268'),
    'AR'=>array('name'=>'ARGENTINA','code'=>'54'),
    'AM'=>array('name'=>'ARMENIA','code'=>'374'),	
    'AW'=>array('name'=>'ARUBA','code'=>'297'),	
	'AT'=>array('name'=>'AUSTRIA','code'=>'43'),
	'AU'=>array('name'=>'AUSTRALIA','code'=>'61'),	
	'AZ'=>array('name'=>'AZERBAIJAN','code'=>'994'),
    'BH'=>array('name'=>'BAHRAIN','code'=>'973'),
    'BD'=>array('name'=>'BANGLADESH','code'=>'880'),	
	'BB'=>array('name'=>'BARBADOS','code'=>'1246'),	
    'BS'=>array('name'=>'BAHAMAS','code'=>'1242'),
	'BE'=>array('name'=>'BELGIUM','code'=>'32'),
    'BJ'=>array('name'=>'BENIN','code'=>'229'),	
    'BY'=>array('name'=>'BELARUS','code'=>'375'),
    'BM'=>array('name'=>'BERMUDA','code'=>'1441'),
    'BZ'=>array('name'=>'BELIZE','code'=>'501'),
    'BT'=>array('name'=>'BHUTAN','code'=>'975'),
    'BO'=>array('name'=>'BOLIVIA','code'=>'591'),
    'BW'=>array('name'=>'BOTSWANA','code'=>'267'),
    'BA'=>array('name'=>'BOSNIA AND HERZEGOVINA','code'=>'387'),
    'BN'=>array('name'=>'BRUNEI DARUSSALAM','code'=>'673'),	
	'BR'=>array('name'=>'BRAZIL','code'=>'55'),
	'BG'=>array('name'=>'BULGARIA','code'=>'359'),
	'BF'=>array('name'=>'BURKINA FASO','code'=>'226'),
	'BI'=>array('name'=>'BURUNDI','code'=>'257'),	
    'CV'=>array('name'=>'CAPE VERDE','code'=>'238'),
    'CA'=>array('name'=>'CANADA','code'=>'1'),
	'CM'=>array('name'=>'CAMEROON','code'=>'237'),
    'KH'=>array('name'=>'CAMBODIA','code'=>'855'),
    'KY'=>array('name'=>'CAYMAN ISLANDS','code'=>'1345'),
    'CF'=>array('name'=>'CENTRAL AFRICAN REPUBLIC','code'=>'236'),
	'CL'=>array('name'=>'CHILE','code'=>'56'),
    'CN'=>array('name'=>'CHINA','code'=>'86'),
    'TD'=>array('name'=>'CHAD','code'=>'235'),
    'CX'=>array('name'=>'CHRISTMAS ISLAND','code'=>'61'),	
	'CC'=>array('name'=>'COCOS (KEELING) ISLANDS','code'=>'61'),
	'CD'=>array('name'=>'CONGO, THE DEMOCRATIC REPUBLIC OF THE','code'=>'243'),	
	'CG'=>array('name'=>'CONGO','code'=>'242'),
	'CI'=>array('name'=>'COTE D IVOIRE','code'=>'225'),
	'CK'=>array('name'=>'COOK ISLANDS','code'=>'682'),
	'CO'=>array('name'=>'COLOMBIA','code'=>'57'),
	'CR'=>array('name'=>'COSTA RICA','code'=>'506'),
    'HR'=>array('name'=>'CROATIA','code'=>'385'),
    'KM'=>array('name'=>'COMOROS','code'=>'269'),
	'CU'=>array('name'=>'CUBA','code'=>'53'),	
	'CY'=>array('name'=>'CYPRUS','code'=>'357'),
	'CZ'=>array('name'=>'CZECH REPUBLIC','code'=>'420'),		
	'DK'=>array('name'=>'DENMARK','code'=>'45'),
    'DJ'=>array('name'=>'DJIBOUTI','code'=>'253'),
	'DM'=>array('name'=>'DOMINICA','code'=>'1767'),
	'DO'=>array('name'=>'DOMINICAN REPUBLIC','code'=>'1809'),	
	'EC'=>array('name'=>'ECUADOR','code'=>'593'),	
	'EG'=>array('name'=>'EGYPT','code'=>'20'),
    'SV'=>array('name'=>'EL SALVADOR','code'=>'503'),
    'GQ'=>array('name'=>'EQUATORIAL GUINEA','code'=>'240'),
	'ER'=>array('name'=>'ERITREA','code'=>'291'),
    'EE'=>array('name'=>'ESTONIA','code'=>'372'),	
    'ET'=>array('name'=>'ETHIOPIA','code'=>'251'),    
    'FO'=>array('name'=>'FAROE ISLANDS','code'=>'298'),
    'FK'=>array('name'=>'FALKLAND ISLANDS (MALVINAS)','code'=>'500'),	
	'FI'=>array('name'=>'FINLAND','code'=>'358'),
	'FJ'=>array('name'=>'FIJI','code'=>'679'),	
	'FR'=>array('name'=>'FRANCE','code'=>'33'),
    'PF'=>array('name'=>'FRENCH POLYNESIA','code'=>'689'),
	'GA'=>array('name'=>'GABON','code'=>'241'),
	'GM'=>array('name'=>'GAMBIA','code'=>'220'),
    'DE'=>array('name'=>'GERMANY','code'=>'49'),	
	'GE'=>array('name'=>'GEORGIA','code'=>'995'),
	'GH'=>array('name'=>'GHANA','code'=>'233'),
	'GI'=>array('name'=>'GIBRALTAR','code'=>'350'),
	'GL'=>array('name'=>'GREENLAND','code'=>'299'),
    'GD'=>array('name'=>'GRENADA','code'=>'1473'),
	'GR'=>array('name'=>'GREECE','code'=>'30'),
	'GN'=>array('name'=>'GUINEA','code'=>'224'),	
	'GT'=>array('name'=>'GUATEMALA','code'=>'502'),
	'GU'=>array('name'=>'GUAM','code'=>'1671'),
	'GW'=>array('name'=>'GUINEA-BISSAU','code'=>'245'),
	'GY'=>array('name'=>'GUYANA','code'=>'592'),
    'HT'=>array('name'=>'HAITI','code'=>'509'),
	'HK'=>array('name'=>'HONG KONG','code'=>'852'),
	'HN'=>array('name'=>'HONDURAS','code'=>'504'),		
    'VA'=>array('name'=>'HOLY SEE (VATICAN CITY STATE)','code'=>'39'),
    'HU'=>array('name'=>'HUNGARY','code'=>'36'),
    'IS'=>array('name'=>'ICELAND','code'=>'354'),
	'ID'=>array('name'=>'INDONESIA','code'=>'62'),
    'IN'=>array('name'=>'INDIA','code'=>'91'),
	'IE'=>array('name'=>'IRELAND','code'=>'353'),	
	'IQ'=>array('name'=>'IRAQ','code'=>'964'),
	'IR'=>array('name'=>'IRAN, ISLAMIC REPUBLIC OF','code'=>'98'),
    'IL'=>array('name'=>'ISRAEL','code'=>'972'),
	'IM'=>array('name'=>'ISLE OF MAN','code'=>'44'),
	'IT'=>array('name'=>'ITALY','code'=>'39'),
	'JM'=>array('name'=>'JAMAICA','code'=>'1876'),
    'JP'=>array('name'=>'JAPAN','code'=>'81'),
	'JO'=>array('name'=>'JORDAN','code'=>'962'),
    'KZ'=>array('name'=>'KAZAKSTAN','code'=>'7'),	
	'KE'=>array('name'=>'KENYA','code'=>'254'),	
	'KI'=>array('name'=>'KIRIBATI','code'=>'686'),	
	'KP'=>array('name'=>'KOREA DEMOCRATIC PEOPLES REPUBLIC OF','code'=>'850'),
	'KR'=>array('name'=>'KOREA REPUBLIC OF','code'=>'82'),
    'XK'=>array('name'=>'KOSOVO','code'=>'381'),
	'KW'=>array('name'=>'KUWAIT','code'=>'965'),  
    'KG'=>array('name'=>'KYRGYZSTAN','code'=>'996'), 
    'LV'=>array('name'=>'LATVIA','code'=>'371'),	
	'LA'=>array('name'=>'LAO PEOPLES DEMOCRATIC REPUBLIC','code'=>'856'),
	'LB'=>array('name'=>'LEBANON','code'=>'961'),
    'LS'=>array('name'=>'LESOTHO','code'=>'266'),	
	'LI'=>array('name'=>'LIECHTENSTEIN','code'=>'423'),	
	'LR'=>array('name'=>'LIBERIA','code'=>'231'),	
	'LT'=>array('name'=>'LITHUANIA','code'=>'370'),
    'LY'=>array('name'=>'LIBYAN ARAB JAMAHIRIYA','code'=>'218'),
	'LU'=>array('name'=>'LUXEMBOURG','code'=>'352'),
    'MT'=>array('name'=>'MALTA','code'=>'356'),
    'MY'=>array('name'=>'MALAYSIA','code'=>'60'),
	'MU'=>array('name'=>'MAURITIUS','code'=>'230'),
	'MV'=>array('name'=>'MALDIVES','code'=>'960'),
	'MW'=>array('name'=>'MALAWI','code'=>'265'),
    'MO'=>array('name'=>'MACAU','code'=>'853'),	
	'MR'=>array('name'=>'MAURITANIA','code'=>'222'),
    'MG'=>array('name'=>'MADAGASCAR','code'=>'261'),
	'MH'=>array('name'=>'MARSHALL ISLANDS','code'=>'692'),
	'MK'=>array('name'=>'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF','code'=>'389'),
	'ML'=>array('name'=>'MALI','code'=>'223'),
    'YT'=>array('name'=>'MAYOTTE','code'=>'262'),
    'MX'=>array('name'=>'MEXICO','code'=>'52'),	
    'FM'=>array('name'=>'MICRONESIA, FEDERATED STATES OF','code'=>'691'),
    'MA'=>array('name'=>'MOROCCO','code'=>'212'),
	'MC'=>array('name'=>'MONACO','code'=>'377'),
    'MN'=>array('name'=>'MONGOLIA','code'=>'976'),
    'MZ'=>array('name'=>'MOZAMBIQUE','code'=>'258'), 
	'MD'=>array('name'=>'MOLDOVA, REPUBLIC OF','code'=>'373'),
	'ME'=>array('name'=>'MONTENEGRO','code'=>'382'),
    'MS'=>array('name'=>'MONTSERRAT','code'=>'1664'),	   
	'MM'=>array('name'=>'MYANMAR','code'=>'95'),	   
	'NA'=>array('name'=>'NAMIBIA','code'=>'264'),
    'NR'=>array('name'=>'NAURU','code'=>'674'),
	'NC'=>array('name'=>'NEW CALEDONIA','code'=>'687'),
    'NL'=>array('name'=>'NETHERLANDS','code'=>'31'),
    'NP'=>array('name'=>'NEPAL','code'=>'977'),
    'NZ'=>array('name'=>'NEW ZEALAND','code'=>'64'),
    'AN'=>array('name'=>'NETHERLANDS ANTILLES','code'=>'599'),
	'NE'=>array('name'=>'NIGER','code'=>'227'),
	'NG'=>array('name'=>'NIGERIA','code'=>'234'),
	'NI'=>array('name'=>'NICARAGUA','code'=>'505'),	
	'NO'=>array('name'=>'NORWAY','code'=>'47'),
    'MP'=>array('name'=>'NORTHERN MARIANA ISLANDS','code'=>'1670'),
	'NU'=>array('name'=>'NIUE','code'=>'683'),	
	'OM'=>array('name'=>'OMAN','code'=>'968'),
	'PA'=>array('name'=>'PANAMA','code'=>'507'),
    'PW'=>array('name'=>'PALAU','code'=>'680'),
	'PY'=>array('name'=>'PARAGUAY','code'=>'595'),
	'PK'=>array('name'=>'PAKISTAN','code'=>'92'),
	'PG'=>array('name'=>'PAPUA NEW GUINEA','code'=>'675'),
    'PE'=>array('name'=>'PERU','code'=>'51'),
	'PH'=>array('name'=>'PHILIPPINES','code'=>'63'),
	'PN'=>array('name'=>'PITCAIRN','code'=>'870'),
	'PL'=>array('name'=>'POLAND','code'=>'48'),	
	'PT'=>array('name'=>'PORTUGAL','code'=>'351'),
	'PR'=>array('name'=>'PUERTO RICO','code'=>'1'),
	'QA'=>array('name'=>'QATAR','code'=>'974'),
	'RO'=>array('name'=>'ROMANIA','code'=>'40'),
    'RU'=>array('name'=>'RUSSIAN FEDERATION','code'=>'7'),
    'RW'=>array('name'=>'RWANDA','code'=>'250'),
    'WS'=>array('name'=>'SAMOA','code'=>'685'),
    'LC'=>array('name'=>'SAINT LUCIA','code'=>'1758'),
    'VC'=>array('name'=>'SAINT VINCENT AND THE GRENADINES','code'=>'1784'),
    'PM'=>array('name'=>'SAINT PIERRE AND MIQUELON','code'=>'508'),
    'KN'=>array('name'=>'SAINT KITTS AND NEVIS','code'=>'1869'),
    'SH'=>array('name'=>'SAINT HELENA','code'=>'290'),
	'SA'=>array('name'=>'SAUDI ARABIA','code'=>'966'),
    'SM'=>array('name'=>'SAN MARINO','code'=>'378'),
    'MF'=>array('name'=>'SAINT MARTIN','code'=>'1599'),
    'BL'=>array('name'=>'SAINT BARTHELEMY','code'=>'590'),
	'ST'=>array('name'=>'SAO TOME AND PRINCIPE','code'=>'239'),	
	'RS'=>array('name'=>'SERBIA','code'=>'381'),
    'SN'=>array('name'=>'SENEGAL','code'=>'221'),
    'SC'=>array('name'=>'SEYCHELLES','code'=>'248'),  
    'SG'=>array('name'=>'SINGAPORE','code'=>'65'), 
    'SL'=>array('name'=>'SIERRA LEONE','code'=>'232'),
    'SI'=>array('name'=>'SLOVENIA','code'=>'386'),
	'SK'=>array('name'=>'SLOVAKIA','code'=>'421'),
    'ZA'=>array('name'=>'SOUTH AFRICA','code'=>'27'),
	'SB'=>array('name'=>'SOLOMON ISLANDS','code'=>'677'),
    'SO'=>array('name'=>'SOMALIA','code'=>'252'),
    'ES'=>array('name'=>'SPAIN','code'=>'34'),
    'LK'=>array('name'=>'SRI LANKA','code'=>'94'),	
	'SD'=>array('name'=>'SUDAN','code'=>'249'),
    'SR'=>array('name'=>'SURINAME','code'=>'597'),
	'SE'=>array('name'=>'SWEDEN','code'=>'46'),       
	'SZ'=>array('name'=>'SWAZILAND','code'=>'268'),   
    'CH'=>array('name'=>'SWITZERLAND','code'=>'41'),
    'SY'=>array('name'=>'SYRIAN ARAB REPUBLIC','code'=>'963'),    
    'TJ'=>array('name'=>'TAJIKISTAN','code'=>'992'),
    'TW'=>array('name'=>'TAIWAN, PROVINCE OF CHINA','code'=>'886'),
	'TZ'=>array('name'=>'TANZANIA, UNITED REPUBLIC OF','code'=>'255'),
    'TH'=>array('name'=>'THAILAND','code'=>'66'),	
    'TL'=>array('name'=>'TIMOR-LESTE','code'=>'670'),	
	'TG'=>array('name'=>'TOGO','code'=>'228'),	
	'TK'=>array('name'=>'TOKELAU','code'=>'690'),
    'TO'=>array('name'=>'TONGA','code'=>'676'),	
    'TT'=>array('name'=>'TRINIDAD AND TOBAGO','code'=>'1868'),
    'TC'=>array('name'=>'TURKS AND CAICOS ISLANDS','code'=>'1649'),
	'TM'=>array('name'=>'TURKMENISTAN','code'=>'993'),
	'TN'=>array('name'=>'TUNISIA','code'=>'216'),	
	'TR'=>array('name'=>'TURKEY','code'=>'90'),	
	'TV'=>array('name'=>'TUVALU','code'=>'688'),	
    'UG'=>array('name'=>'UGANDA','code'=>'256'),
	'UA'=>array('name'=>'UKRAINE','code'=>'380'),	
    'AE'=>array('name'=>'UNITED ARAB EMIRATES','code'=>'971'),
	'US'=>array('name'=>'UNITED STATES','code'=>'1'),
    'AE'=>array('name'=>'UNITED ARAB EMIRATES','code'=>'971'),	
    'GB'=>array('name'=>'UNITED KINGDOM','code'=>'44'),	
    'UY'=>array('name'=>'URUGUAY','code'=>'598'),
    'UZ'=>array('name'=>'UZBEKISTAN','code'=>'998'),
	'VE'=>array('name'=>'VENEZUELA','code'=>'58'),
	'VG'=>array('name'=>'VIRGIN ISLANDS, BRITISH','code'=>'1284'),
	'VI'=>array('name'=>'VIRGIN ISLANDS, U.S.','code'=>'1340'),
	'VN'=>array('name'=>'VIET NAM','code'=>'84'),
	'VU'=>array('name'=>'VANUATU','code'=>'678'),
	'WF'=>array('name'=>'WALLIS AND FUTUNA','code'=>'681'),	
	'YE'=>array('name'=>'YEMEN','code'=>'967'),
	'ZM'=>array('name'=>'ZAMBIA','code'=>'260'),
	'ZW'=>array('name'=>'ZIMBABWE','code'=>'263')
    
    
    

);

?>



<html lang="en-in">

<head>
<?php $url =  $_SERVER['REQUEST_URI']; 
?> 
    <link rel="canonical" href="<?php echo  $baseURL ?><?php echo $url; ?>">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/cancer-icon.png">
    <title>Apollo landing page
    </title>
    <script src="./js/jquery-1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo  $baseURL ?>/css/camused.css"> 



<!-- End Google Tag Manager -->

    <style>
                 /* #hide{
            display:none;
        } */
        
        #width
        {
            width:49% ;
        }
    /* #select_state
        {
            display:none;
        } */
          @media screen and (min-width:320px) and (max-width:767px) {
        
        section.logo_img img {
            min-height: 51px;
        }
        .image_manage img {
            min-width: 100%;
    }
 
    
    }
    input#button_otp {
    cursor: pointer;
    background: black !important;
    color: white;
}
.banner_inner_cc.bglazy {
    background: none !important;
}
/* #button_otp {
    display: none;
} */
#otp_set_2 {
    display: none;
}
#otp_set_1 {
    display: none;
}
    @media screen and (min-width:360px) and (max-width:500px) {

    .banner_div_landing{
        min-height:219px;
    }
}
    .banner_inner_cc.bglazy {
        background: none !important;
    }

    #time{
  font-size: 16px;
}
#otp-timer {
    display: flex;
}
#timer {
    font-size: 16px;
    position: relative;
    width: 25%;
    margin: auto;
    display: flex;
    top: 15px;
    color: #0d83a1;
}

.form_field:nth-child(13) label {
    font-size: 13px;
    margin: 0;
    font-weight: 100;
}
.form_field:nth-child(13) {
    display: flex;
    margin-top: 12px;
    /* order: 11; */
    width: 100%;
}
#otp-timer {
    display : none;
}
#phone-validations {
    font-size: 15px;
    padding-left: 7px;
}
#btnemasub {
    display:none;
}
@media screen and (min-width:320px) and (max-width:767px) {
    
.form_field input, .form_field select, .form_field_text textarea {
    font-size: 11px;
}
.form_field select {
    background-size: 14px;
}
}
@media screen and (min-width:320px) and (max-width:425px) {
.form_field input#checkbox_app {
    width: 15px;
    margin-right:0;
}
.form_field:nth-child(13) label {
    font-size: 10px;
    margin: 0;
    font-weight: 100;
    width: 86%;
}
#timer {
    top: 9px;
}
}
@media screen and (min-width:426px) and (max-width:767px) {
.form_field:nth-child(13) label {
    font-size: 12px;
    margin: 0;
    font-weight: 100;
    width: 95%;
}
.form_field input#checkbox_app {
    width: 17px;
    height: 20px;
    margin-right: 0px;
}
#timer {
    top: 11px;
}
}
@media screen and (max-width:768px) {
#country {
padding-left: 10px;
padding-right: 22px;
}
}
@media screen and (min-width:767px) {
#country {
padding-left: 10px;
padding-right: 33px;
}
}
@media screen and (min-width:1520px) and (max-width:1880px) {

.form_field label {
    width: 499px;
}
}
#single-otp {
    display : none;
}
@media screen and (min-width:1920px) and (max-width:2560px) {
.form_field label {
    width: 508px;
}
.form_field:nth-child(13) label {
    font-size: 16px;
}
}
 .dropdown-content a:first-child,.dropdown-content a:nth-child(2){background-size:25px;background-position:10px;background-repeat:no-repeat}.form_field input#checkbox_app{width:15px;height:15px;margin-right:12px}.form_field:nth-child(14) label{font-size:13px;margin:0;font-weight:100}.form_field:nth-child(7) #button_otp{background-color:#000!important;color:#fff}.banner_top_title,.form_field:nth-child(6),.form_field:nth-child(7),.form_field:nth-child(8),.form_field:nth-child(9),div#first_form .form_field:nth-child(2),div#first_form .form_field:nth-child(3),div#first_form .form_field:nth-child(10){width:49%}.btn_book{text-align:center;padding-top:50px;margin-top:50px}.btn_book a{background:#0d83a1;border:none;color:#fff;font-size:22px;padding:15px 29px;border-radius:5px;cursor:pointer;text-decoration:none;text-transform:uppercase}div#second_form{width:90%;margin:auto;display:none}div#second_form .form_field{width:100%;margin:7px 0}.form_pare .form_field{width:49%!important}.form_pare{display:flex;justify-content:space-between}.form_field{width:100%;margin:10px 0}.checkout span{font-size:18px;text-transform:capitalize;color:#2e2e2e;margin-right:60px}.form_field_submit input{background:#0d83a1;border:none;color:#fff;font-size:22px;width:100%;text-transform:capitalize;padding:15px 0;border-radius:5px;cursor:pointer;font-weight:700;height:53px}.form_field_submit{margin-top:40px}.checkout{margin-bottom:40px}.banner_place{display:flex;flex-wrap:wrap;justify-content:space-between;width:80%;margin:auto;align-items:center;min-height:890px;    margin-right: 100px;}div#first_form{width:90%;margin:auto;display:flex;flex-wrap:wrap;justify-content:space-between}.form_book{width:40%}.banner_image{background:url('/img/mindyourtonguedesktop.jpg') center/100% no-repeat;min-height:950px;background-size:contain;background-position: 0px 0px;}.dropbtn,.dropbtn:focus,.dropbtn:hover{background-color:#0d83a1}.appoint_book h2{text-align:center;background:#b5b5b5;color:#2e2e2e;margin:0;padding:15px 0;font-weight:100;font-size:20px}.banner_top_title h4{font-size:30px;color:#edb90c;margin:0}.banner_top_title h1{color:#fff;font-size:56px;margin:0}.banner_top_title h1 span{color:#edb90c}.dropdown-content a:first-child{border-bottom:1px solid #e9dfdf;background-image:url('/img/sel_phone.png')}.dropdown-content a:nth-child(2){background-image:url('/img/web_phone.png')}.dropbtn span{background:#fff;height:45px;width:1px;display:inline-flex;position:absolute;top:0;right:45px}section.logo_img .container{display:flex;justify-content:space-between;align-items:center}button.dropbtn.mystyle{background-image:url('/img/Path 1.svg')}.dropbtn{color:#fff;padding:14px 54px 14px 15px;font-size:16px;border:none;cursor:pointer;border-radius:5px 5px 0 0;background-image:url('/img/arrow_pay.png');background-repeat:no-repeat;background-position:92% 20px;background-size:14px;width:213px}.dropdown{position:relative;display:inline-block}.dropdown-content{display:none;position:absolute;background-color:#fff;min-width:160px;overflow:auto;box-shadow:0 8px 16px 0 rgba(0,0,0,.2);z-index:1;border:1px solid #0d83a1}.dropdown-content a{color:#0d83a1;padding:12px 0 12px 44px;text-decoration:none;display:block;width:167px;text-align:left;font-weight:600}.dropdown a:hover{background-color:#ddd}.show,div#a{display:block}small.smallerror{color:#a19494;position:relative;top:5px;font-size:80%;font-weight:400}.cc-loadbtn-inner{background-image:url(<?php echo  $baseURL ?>/images/loader.gif)!important;background-position:center center!important;.form_field:nth-child(14){display:flex;margin-top:12px;order:11;width:100%}.form_field:nth-child(4),img{width:100%}.form_field:nth-child(11){width:100%;}background-size:28px!important;background-repeat:no-repeat!important;font-size:0px !important!important}.form_field:nth-child(12){width:100%}.checkout input{width:auto!important;margin:5px 12px 0 0}p.r_ucc{margin:16px 25px 16px 0;color:#2e2e2e;font-size:20px;font-weight:600}.appoint_book{background:#eaeaea;padding-bottom:20px}.form_field:nth-child(4),img{width:100%;min-height: 45px;}.form_field:nth-child(10){width:49%;}.copy_cc p{margin:0;color:#fff;text-align:center;padding:15px 0}section.landing_copyrtg .container{background:#fdb813}.center_cards{width:16%;padding:30px 12px;background:#0d83a1}section.center_card_sec .container{padding:100px 0;background:#f8f5f4}.center_cards p{color:#fff;margin:0;font-size:18px}.center_cards img{width:100px}.center_cards h5{font-size:22px;margin-bottom:0;margin-top:15px;color:#fff}.center_card_cc{display:flex;text-align:center;flex-wrap:wrap;justify-content:space-between;width:80%;margin:auto}.banner_inner_cc{background:url('/img/Home Banner _Apollo 34@2xlg.png') center/100% no-repeat;min-height:670px;display:flex;flex-direction:column;position:relative}.inner_banner_title p{color:#efb94e;font-size:20px;position:absolute;bottom:0}.inner_banner_title h2{color:#efb94e;font-size:57px;margin-top:0;width:78%}section.logo_img{text-align:center;padding:15px 0}.image_manage{width:65%;margin:auto}.inner_banner_title{width:80%;margin:auto}.inner_banner_title h3{color:#fff;font-size:35px;margin:0}body{margin:0;padding:0;font-family:Roboto,sans-serif}.container{margin:auto}.form_appointment h2{font-size:45px;text-align:center;text-transform:uppercase}.manage_cc h2,.treament_cc h2,.view_filers_cc h2{font-size:62px;text-align:center}.tab_title button{border:none;background:0 0;font-size:32px;font-weight:700;padding:9px 12px;text-transform:uppercase}.list_treament,.view_filers_cc{width:90%;margin:auto}.result-cards{display:flex;justify-content:space-between;flex-wrap:wrap}.result-cards h3{width:48.2%;font-size:25px;text-align:center;border:3px solid #bfbfbf;color:#0d83a1;padding:55px 0;font-weight:500;margin:15px 0;align-items:center;display:flex;justify-content:center}.tab_title{display:flex;justify-content:center;align-items:center;flex-wrap:wrap}.tab_title span{height:25px;width:3px;background-color:#000}button.tablink_fil.change_color{color:#eb9c18;text-decoration:underline;text-underline-offset:5px;text-decoration-thickness:4px}.view_result{padding:10px 12px}.result_list{display:none}section.treament_sec .container{background:#0d83a1;padding:20px 0}.list_treament li:first-child{margin-top:24px}.list_treament ul{display:flex;flex-wrap:wrap;list-style:none;justify-content:center;align-items:center;margin-bottom:60px;padding:0}.list_treament ul li a{text-align:center;color:#fff;text-decoration:none;margin-right:2px;font-size:20px}.list_treament li{margin-top:20px}.list_treament ul li+li:before{content:" | ";color:#fff;font-size:24px}section.tab_filers{margin-bottom:35px}.manage_cc h2{margin-bottom:0;width:60%;margin-left:auto;margin-right:auto}.manage_cc h3{text-align:center;color:#484848bf;font-size:27px;margin:4px 0}@media screen and (min-width:1920px){section.banner_section .container,section.center_card_sec .container,section.inner_banner_image .container,section.landing_copyrtg .container,section.treament_sec .container{max-width:1920px;width:1920px}.container{width:1800px}}@media screen and (min-width:768px) and (max-width:991px){.appoint_book h2,.checkout span,p.r_ucc{font-size:16px}.banner_image{background-size:cover!important}p.r_ucc{margin:10px 0}.checkout span{margin-right:20px}.checkout{margin-bottom:35px}.form_field_submit{margin-top:18px}.form_field_submit input{font-size:20px}.form_field:nth-child(11){width:100%!important}.form_field:nth-child(10){width:49%!important}.form_field{margin:10px 0}.banner_place,.container{width:90%}.banner_top_title h1{font-size:33px}.banner_top_title h4{font-size:22px}.banner_image,.banner_place{min-height:500px}section.banner_section .container,section.center_card_sec .container,section.inner_banner_image .container,section.landing_copyrtg .container,section.treament_sec .container{width:100%}}@media screen and (max-width:474px){.banner_image,.banner_place{min-height:210px}}@media screen and (min-width:475px) and (max-width:660px){.banner_image,.banner_place{min-height:300px}}@media screen and (min-width:661px) and (max-width:767px){.banner_image,.banner_place{min-height:375px}}@media screen and (max-width:767px){.banner_place,.banner_top_title,.form_book,.image_manage,.manage_cc h2{width:100%}.btn_book,.list_treament li:first-child{margin-top:0}.btn_book{padding-bottom:62px}.btn_book a{font-size:16px}.banner_image{background:0 0}section.banner_section{position:relative}.form_book{margin-top:15px}.banner_top_title h4{font-size:18px;text-align:center}.banner_top_title h1{font-size:25px;text-align:center;width:300px}.copy_cc p{font-size:11px}.list_treament li{margin-top:7px}.list_treament ul li a{font-size:18px}.list_treament ul{width:99%;text-align:center}.treament_cc{padding:10px 0}.result-cards h3{padding:24px 15px;margin:12px 0}.view_result{padding:0;margin-top:22px;margin-bottom:45px}section.logo_img img{width:140px}.container{padding:0 15px}section.banner_section .container,section.center_card_sec .container,section.inner_banner_image .container,section.landing_copyrtg .container,section.treament_sec .container{padding:0}}@media screen and (min-width:992px) and (max-width:1199px){.appoint_book h2{font-size:24px}p.r_ucc{font-size:18px}.checkout{margin-bottom:43px}.form_field_submit{margin-top:35px;font-size:18px}.banner_top_title h1{font-size:38px}.banner_image,.banner_place{min-height:600px}.form_field label{font-size:16px!important;width:320px!important}p#file-chosen{padding:10px 3px!important}.for_width_input label{font-size:15px!important;padding:11px 5px 7px 7px!important;width:37%!important}section.banner_section .container,section.center_card_sec .container,section.inner_banner_image .container,section.landing_copyrtg .container,section.treament_sec .container{width:100%}.container{width:90%}}@media screen and (min-width:1200px) and (max-width:1440px){section.banner_section .container,section.center_card_sec .container,section.inner_banner_image .container,section.landing_copyrtg .container,section.treament_sec .container{width:100%}.container{width:90%}.banner_image,.banner_place{min-height:670px}}@media screen and (min-width:1441px) and (max-width:1880px){section.banner_section .container,section.center_card_sec .container,section.inner_banner_image .container,section.landing_copyrtg .container,section.treament_sec .container{width:100%}.container{width:90%}}@media screen and (min-width:767px){section.logo_img img{width:180px}}.form_element{display:flex;flex-wrap:wrap;justify-content:space-between}.form_field input,.form_field select,.form_field_text textarea{width:100%;background-color:#fff!important;border:1px solid #70707045;border-radius:5px;font-size:16px;padding:10px 15px}.form_field label{font-size:15px;font-weight:600;width:370px;color:#000}.for_width_input{display:flex;align-items:center;width:-webkit-fill-available}.form_field:nth-child(11){width:100%;display:flex;justify-content:space-between;align-items:center}p#file-chosen{    word-break: break-all;border:1px solid #70707045;border-radius:5px 0 0 5px;width:82%;background:#f3f3f3;font-size:16px;padding:10px 15px;margin:0;color:#757589;height:auto}.for_width_input label{border-radius:0 5px 5px 0;background:#2e2e2e;color:#fff;width:24%;text-align:center;padding:11px 15px 7px;margin:0;height:40px;font-size:16px;cursor:pointer}.form_field select{-webkit-appearance:none;-moz-appearance:none;appearance:none;background:url('/img/right-arrow@2xlg.png') 97% 11px/16px no-repeat;color:#757589}.form_field_text{margin:10px 0}.form_field_text textarea{height:75px}@media screen and (max-width:500px){.appoint_book h2,.form_field_submit input{font-size:20px}section.logo_img .container{position:relative;display:flex}p.r_ucc{margin-right:0}.form_field:nth-child(10),.form_field:nth-child(4),.view_filers_cc{width:100%}.center_cards{width:85%;margin-bottom:25px;margin-right:auto;margin-left:auto;padding:40px 12px}.center_card_cc{padding-top:90px}.inner_banner_title p{bottom:14px;margin:0;font-size:11px}.banner_inner_cc{min-height:200px;background-size:cover}.inner_banner_title h2{font-size:25px}.inner_banner_title h3{font-size:13px;margin-bottom:5px}.treament_cc{padding:2px 0}.result-cards h3{width:100%;font-size:17px}button.tablink_fil.change_color{text-decoration:none}.form_appointment h2,.tab_title button{font-size:22px}.manage_cc h2,.treament_cc h2,.view_filers_cc h2{font-size:40px}.form_field{width:100%;margin:7px 0}.form_field:nth-child(11){width:100%;flex-wrap:wrap;justify-content:center}.form_field label{text-align:center;margin-bottom:10px}.for_width_input label{margin:0!important}}.form_field_text textarea::placeholder{font-family:sans-serif}@media screen and (min-width:501px) and (max-width:767px){section.logo_img .container{position:relative;display:flex;width:72%;margin:auto},.form_field,.form_field:nth-child(10),.form_field:nth-child(11),.form_field:nth-child(4),.form_field:nth-child(6),.view_filers_cc{width:100%}.form_field label{font-size:16px;width:305px}p#file-chosen{padding:10px 4px}.for_width_input label{padding:11px 12px 7px 16px;width:24%!important;font-size:15px}.form_field input,.form_field select,.form_field_text textarea{font-size:15px}.center_cards{width:42%;margin-bottom:25px}.center_card_cc{padding-top:80px}.inner_banner_title p{bottom:14px;margin:0;font-size:13px}.banner_inner_cc{min-height:300px;background-size:cover}.inner_banner_title h2{font-size:33px}.inner_banner_title h3{font-size:15px;margin-bottom:5px}.result-cards h3{font-size:17px;padding:24px 0}button.tablink_fil.change_color{text-decoration:none}.tab_title button{font-size:22px}.manage_cc h2,.treament_cc h2,.view_filers_cc h2{font-size:40px}.form_field:nth-child(11){display:flex}.form_appointment h2{font-size:30px}}@media screen and (min-width:768px) and (max-width:1024px){.center_card_cc{justify-content:flex-start}.center_cards:nth-child(3){margin-right:0}.center_cards{width:26%;margin-bottom:25px;margin-right:30px}.inner_banner_title h2{font-size:44px}.inner_banner_title h3{font-size:21px}.banner_inner_cc{min-height:390px}.image_manage,.view_filers_cc{width:100%}.inner_banner_title p{font-size:17px}.result-cards h3{font-size:17px;padding:24px 0}.tab_title button{font-size:22px}.manage_cc h2,.treament_cc h2,.view_filers_cc h2{font-size:40px}.form_appointment h2{font-size:30px}.form_field label{width:320px}.form_field input,.form_field select,.form_field_text textarea,p#file-chosen{font-size:15px}.for_width_input label{font-size:14px;padding:11px 6px 7px;width:40%;height:33px}p#file-chosen{padding:10px 5px}.form_field select{background-size:12px;background-position:97% 13px}}@media screen and (min-width:1025px) and (max-width:1399px){.banner_inner_cc{min-height:500px}.result-cards h3{font-size:22px;padding:24px 0}.manage_cc h2,.treament_cc h2,.view_filers_cc h2{font-size:50px}.form_appointment h2{font-size:38px}}@media screen and (min-width:1880px){.form_field label{width:370px}}@media screen and (min-width:768px){section.banner_section img{display:none}}@media screen and (min-width:1440px) and (max-width:1800px){.banner_top_title h1{font-size:51px}.banner_top_title h4{font-size:28px}}@media screen and (min-width:1200px) and (max-width:1439px){.banner_top_title h4{font-size:24px}.banner_top_title h1{font-size:45px}}
    @media screen and (max-width:425px){.banner_top_title{position:absolute;top:6%;width:100%;margin:auto;display:flex;flex-direction:column;justify-content:center;align-items:center;height:136px}}@media screen and (min-width:426px) and (max-width:600px){.banner_top_title{position:absolute;top:9%;width:100%;margin:auto;display:flex;flex-direction:column;justify-content:center;align-items:center;height:150px}}@media screen and (min-width:601px) and (max-width:767px){.banner_top_title{position:absolute;top:13%;width:100%;margin:auto;display:flex;flex-direction:column;justify-content:center;align-items:center;height:200px}.banner_top_title h1{font-size:37px;width:500}}span#mandaoty,span#mandatory{color:#ae0b0f;font-size:14px;top:-20px;position:relative}.form_field_submit{text-align:center;width:100%}#register_error{display:none;position:relative;top:-33px;color:red;font-size:18px}@media screen and (min-width:381px) and (max-width:500px){.dropbtn{font-size:12px;background-size:10px;width:177px}.dropbtn span{right:38px}.dropdown-content a{width:auto;font-size:13px;padding:11px 22px 9px 39px}.dropdown-content a:first-child,.dropdown-content a:nth-child(2){background-size:22px}.dropdown-content{min-width:auto}}@media screen and (max-width:380px){.dropbtn{background-position:90% 20px;font-size:12px;background-size:10px;width:auto}span.mob_scre{display:none}.dropbtn span{right:38px}.dropdown-content a{width:auto;font-size:12px;padding:11px 3.2px 9px 36px}.dropdown-content a:first-child,.dropdown-content a:nth-child(2){background-size:22px}.dropdown-content{min-width:auto}}@media screen and (min-width:380px){span.mob_scre{position:relative;display:contents}}
        
   /* latha */
   .form_field.new_stagechange {
    width: 49%;
    display: block;
}
select#lookingfor {
    padding: 11px 10px;
}
.form_field:nth-child(13){
    display: block;
}
.form_field.new_stagechange select {
    font-size: 15px !important;
}
@media screen and (max-width:500px){
    .form_field.new_stagechange {
    width: 100%;
    display: block;
}

}
@media screen and (min-width:768px) and (max-width:1490px){
    .form_field.new_stagechange {
    width: 100%;
    display: block;
}
}
small.smallerror {
    color: red;
    position: relative;
    top: 5px;
    font-size: 15px;
    font-weight: 400
}
#otp_set_1 {
    display: none;
    width: 49%;
}
/* @media screen and (min-width: 768px) and (max-width: 991px){
.banner_image {
    background-size: 100% 112% !important;
}
} */
   

  /*! CSS Used from: http://apollo.bestdemo.site/css/bootstrap.min.css */
  *,::after,::before{box-sizing:border-box;}
.container-fluid{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto;}
.embed-responsive{position:relative;display:block;width:100%;padding:0;overflow:hidden;}
.embed-responsive::before{display:block;content:"";}
.embed-responsive .embed-responsive-item,.embed-responsive iframe{position:absolute;top:0;bottom:0;left:0;width:100%;height:100%;border:0;}
.embed-responsive-16by9::before{padding-top:56.25%;}

.video.section {
    padding: 27px 10px;
}
   </style>
</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KD76H9F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php

		$app_url_str_array = explode("/",$_SERVER['REQUEST_URI']);	
		$app_url_str_array = array_filter($app_url_str_array);	
		foreach($app_url_str_array as $keyv) {
			$app_url_str_new_array[] = $keyv;
		}
		
		$frmSpecialityName = "";
		$frmDoctorName = "";
		$frmPatientCityName = "";
			
		if(isset($app_url_str_new_array) && count($app_url_str_new_array)>3 && strtolower($app_url_str_new_array[0]) == 'locations') { 
			$frmSpecialityName = $app_url_str_new_array[2];
			$frmDoctorName = $app_url_str_new_array[3];
			// $frmDoctorName = str_replace("-", " ", $frmDoctorName);
			$frmPatientCityName = $app_url_str_new_array[1];
			// $frmPatientCityName = str_replace("-", " ", $frmPatientCityName);
		
		} 
		
		?>


<!-- End Google Tag Manager (noscript) -->
    <section class="logo_img">
    <div class="container">
        <img src="/images/ACC_Logo.jpg">
        <div class="phone_number">
        <div class="dropdown">
  <button onclick="mytollFree()" id="myDrop" class="dropbtn">Contact Us<span></span></button>
  <div id="myDropdown" class="dropdown-content">
    <a class="in-phone" href="tel:1800 203 1066">1800 203 1066</a>
    <!-- <a class="world-phone" href="tel:+91 404 896 4515">(+91) 404 896 4515</a> -->
  </div>
</div>

        </div>
</div>
    </section>
    <section class="banner_section">
    <div class="banner_div_landing">
    <img src="/img/mindyourtonguemobile.png" alt="banner">
    </div>
        <div class="container"> 
            <div class="banner_image">
                <div class="banner_place">
                <div class="banner_top_title">
                    <!-- <img src="/img/banner_img_lang.png"> -->
                    <!-- <h4>ACCESS TO OVER</h4>
                    <h1><span>240</span> ONCOLOGISTS ACROSS <span>14</span> CANCER CENTRES IN INDIA</h1> -->
                </div>
                <div class="form_book">
                    <form id="frmBook" name="frmBook" method="post" enctype="multipart/form-data" action="">
					
					<input type="hidden" name="frmSpecialityName" id="frmSpecialityName" data-txt="<?php echo $frmSpecialityName; ?>" value="<?php echo $frmSpecialityName; ?>"> 
					<input type="hidden" name="frmDoctorName" id="frmDoctorName" data-txt="<?php echo $frmDoctorName; ?>" value="<?php echo $frmDoctorName; ?>"> 
                    <input type="hidden" name="txtadgroupid" id="txtadgroupid" value="<?php echo $_REQUEST['adgroupid']; ?>"> 
					<input type="hidden" name="txtnetwork" id="txtnetwork"  value="<?php echo $_REQUEST['network']; ?>">
					<input type="hidden" name="txtdevice" id="txtdevice"  value="<?php echo $_REQUEST['device']; ?>">
                    <input type="hidden" name="txtcampaign_id" id="txtcampaign_id"  value="<?php echo $_REQUEST['utm_campaign']; ?>">
					<input type="hidden" name="txtcampaignid" id="txtcampaignid"  value="<?php echo $_REQUEST['campaignid']; ?>">
                    <input type="hidden" name="txtgclid" id="txtgclid"  value="<?php echo $_REQUEST['gclid']; ?>">
                    <input type="hidden" name="txtsourceid" id="txtsourceid"  value="<?php echo $_REQUEST['utm_source']; ?>">
                    <input type="hidden" name="txtmediumid" id="txtmediumid"  value="<?php echo $_REQUEST['utm_medium']; ?>">
                    <input type="hidden" name="txtutmterm" id="txtutmterm"  value="<?php echo $_REQUEST['utm_term']; ?>">
                    <input type="hidden" name="txtutmcontent" id="txtutmcontent"  value="<?php echo $_REQUEST['utm_content']; ?>">

						<div class="appoint_book" id="bookapp">
                        <h2>BOOK AN APPOINTMENT</h2>
                        <div id="first_form">
                        <div class="form_field">
                            <div class="checkout">
                            <p class="r_ucc">Are you a Patient? *</p>
                            <input type="checkbox" id="ResponseSaidCBY" name="ResponseSaidCBY" value="yes" class="landingfrmcls"><span>yes</span>
                            <input type="checkbox" id="ResponseSaidCBN" name="ResponseSaidCBN" value="no" class="landingfrmcls"><span>no</span>                           
                            </div>
                            <p id="are" style="margin-top: -30px;"></p>
                        </div>
                        <div class="form_field">
                            <input type="text" name="firstName" id="firstName" placeholder="First Name*" autocomplete="off" class="landingfrmcls">
                            <!--<small class="smallerror" id="smallerror">Please Enter Your First Name</small>-->
                        </div>
                        <div class="form_field">
                            <input type="text" name="lastName" id="lastName" placeholder="Last Name*"  autocomplete="off" class="landingfrmcls">
                        </div>
                        <div class="form_field">
                            <input type="email" name="email" id="email" placeholder="Email*"  autocomplete="off" class="landingfrmcls">
                        </div>
                        <div class="form_field">
                            <input type="tel" name="phone" id="phone" minlength="10" maxlength="10" placeholder="Phone*"  autocomplete="off" class="landingfrmcls">
                            <span id="disable-phone"></span>
                            <input type="hidden" name="phone_hide" id="phone_hide" value ="">
                        </div>
                        <div class="form_field" id="otp_set_1">
                            <input type="text" name="otp" id="otp" maxlength="6" placeholder="Enter your OTP pin"  autocomplete="off" class="landingfrmcls">
                            <span id="phone-validations"></span>
                        </div>
                        <div class="form_field" id="otp-timer">
                      <span id="timer"><span>00:</span>
                   
                      
                      <span id="single-otp">0</span><span id="time">50
                                   </span>
                              </span></div>
                        <div class="form_field" id="otp_set_2">
                            <input type="button" name="button_otp" id="button_otp" value="Resend OTP"  autocomplete="off" class="landingfrmcls">
                        </div>
                        
						<div class="form_field" id='width'>
                            <input type="text"name="country" id="country" value="India" disabled/>
                            <!-- <select name="country" id="country"  class="landingfrmcls">
                                 <option value="">Select Country*</option>
                                 <?php 
											// foreach ($countryArray as $key=> $value){ ?>
											// 	<option value="<?php //echo $value['code'] ;?>"><?php //echo $value['name'] ;?></option>
											// 	<?php
											// }
											?>
                                
							</select> -->
                        </div>
                        <div class="form_field" id="hide">


<select class='custom-select width100percent mb-2' name="select_state" id="select_state">
<option value="">Select State</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Arunachal Pradesh"> Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="Chhattisgarh">Chhattisgarh</option>
            <option value="Goa">Goa</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Haryana">Haryana</option>
            <option value="Himachal Pradesh">Himachal Pradesh</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Madhya Pradesh">Madhya Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Manipur">Manipur</option>
            <option value="Meghalaya">Meghalaya</option>
            <option value="Mizoram">Mizoram</option>
            <option value="Nagaland">Nagaland</option>
            <option value="Odisha">Odisha</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Sikkim">Sikkim</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Telangana">Telangana</option>
            <option value="Tripura">Tripura</option>
            <option value="Uttarakhand">Uttarakhand</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="West Bengal">West Bengal</option>
            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Dadra and Nagar Haveli andDaman & Diu">Dadra and Nagar Haveli andDaman & Diu</option>
            <option value="Delhi">Delhi</option>
            <option value="Jammu & Kashmir">Jammu & Kashmir</option>
            <option value="Ladakh">Ladakh</option>
            <option value="Lakshadweep">Lakshadweep</option>
            <option value="Puducherry">Puducherry</option>
            

        </select>
        <!-- <option value="">Select State</option> -->
        <!-- <option value="others">Others</option>
    </select> -->

    <select hidden  name="select_state_others" id="select_state_others" placeholder="State*"  autocomplete="off"  class="landingfrmcls">
        <!-- <option value="">Select State</option> -->
        <option value="others">Others</option>
    </select>
    <input type="hidden" name="state" id="state" value="others" placeholder="State*"  autocomplete="off"  class="landingfrmcls">
</div>
<div class="form_field new_stagechange">
                            <input type="text" name="city" id="city" placeholder="City*"  autocomplete="off"  class="landingfrmcls">
                        </div>
                        <div class="form_field new_stagechange">
                            <select name="looking for" id="lookingfor"  class="landingfrmcls">
                                <option value="">What are you looking for?*</option>
                                <option value="For Medical opinion"> Medical opinion </option>

									<option value="For Treatment">Treatment </option>

									<option value="For Cancer Support Group">Cancer Support Group </option>
                            </select>
                        </div>
                        <div class="form_field">
                            <input type="text" name="description" id="description" placeholder="Description*"  autocomplete="off"  class="landingfrmcls">
                        </div>
                        <div class="form_field">
                        <div class="col-md-12c choose_file_part">
                                <p class="mb-2 choose_title">Upload your reports</p>
                                <div class="for_width_input">
                                    <input hidden id="actual-btn" name="report" accept=".png,.pdf,.doc,.docx,.odt" type="file"
                                        class="form-control mb-2">
                                    <p id="file-chosen">Choose File</p>
                                    <label class="filde_tit" for="actual-btn">UPLOAD</label>
                                </div>
                            </div>
                        </div>
                        <div class="form_field">
                            <input type="checkbox" name="checkbox_app" id="checkbox_app"  autocomplete="off"  class="landingfrmcls" checked>
                            <label for="ggg">I hereby declare that the above mentioned information is true to the best of my knowledge and belief</label>
                        </div>
                        <input type="url" id="location" name="location" value="<?php echo $page_find_url;?>" hidden />
                        <div class="form_field_submit">
                        <span id="register_error"></span>
						<span id="mandaoty">* Please fill all the above fields to submit the details</span>
                        <input type="button" id="generateotp" name="generateotp"  value="Generate OTP" class="firstfrmbtncls">
                            <input type="hidden" name="verifyotp" id="verifyotp" value ="not_verified">
                            <input type="button" id="btnemasub" name="btnemasub"  value="Submit" class="firstfrmbtncls btn_disabled" disabled>
                        </div>
                    </div>
                    <div id="second_form" >
						<input type="hidden" id="lastID" name="lastID" >
                    
                        <div class="form_field">
                            <input type="text" name="city" id="city" placeholder="City*"  autocomplete="off"  class="landingfrmcls">
                        </div>
            
                        <div class="form_field">
                            <select name="language" id="language"  class="landingfrmcls">
                                <option>Language Preference*</option>
                                
									<option value="English">English</option>

                                        <option value="Tamil">Tamil</option>

                                        <option value="Malayalam">Malayalam</option>

                                        <option value="Telugu">Telugu</option>

                                        <option value="Bengali">Bengali</option>

                                        <option value="Hindi">Hindi</option>

                                        <option value="Others">Others</option>
                            </select>
                        </div>

                        <div class="form_field">
                            <select name="communication" id="communication"  class="landingfrmcls">
                                <option>Communication Preference*</option>
                                <option value="Email">Via Email</option>

                                <option value="Via Call">Via Call</option>

                                <option value="Via WhatsApp">Via WhatsApp</option>
                            </select>
                        </div>
                        <div class="form_field">
                            <select name="cancer management team" id="ccancermanagementteam"  class="landingfrmcls">
                                <option>Cancers*</option>
                                <option value="Bone &amp; Soft Tissue"> Bone &amp; Soft Tissue Oncology </option>

                                                    <option value="Breast Oncology">Breast Oncology </option>

                                                    <option value="Gastrointestinal Oncology"> Gastrointestinal Oncology </option>

                                                    <option value="Gynaecological Oncology"> Gynaecological Oncology </option>

                                                    <option value="Head &amp; Neck Oncology"> Head &amp; Neck Oncology </option>

                                                    <option value="Hemato-oncology">Hemato-Oncology </option>

                                                    <option value="Neuro Oncology"> Neuro Oncology </option>

                                                    <option value="Ophthalmic Oncology">Ophthalmic Oncology </option>

                                                    <option value="Paediatric Oncology">Paediatric Oncology </option>

                                                    <option value="Skin Cancer">Skin Cancer </option>

                                                    <option value="Thoracic Oncology">Thoracic Oncology </option>

                                                    <option value="Uro Oncology">Uro Oncology </option>
                            </select>
                        </div>
                        
                        <div class="form_field">
                            <!-- <label for="upload">Upload your reports</label> -->
                            <div class="for_width_input">
                                <input type="file" hidden="" id="actual-btn" name="report" accept=".png,.pdf,.doc,.docx,.odt" class="form-control mb-2"  class="landingfrmcls">
                                <p id="file-chosen">Choose files(optional)</p>
                                <label class="filde_tit" for="actual-btn">UPLOAD</label>

                            </div>
                        </div>
                        <div class="form_field_text">
                            <textarea id="message" name="message" placeholder="Type your message*"></textarea>
                        </div>
                        <div class="form_field_submit">
                        <span id="mandatory">* Please fill all the above fields to submit the details</span>
                            <input type="submit" id="btnSubmitApp" name="btnSubmitApp" value="Submit" class="secondfrmbtncls btn_disabled" disabled>
                        </div>
                    </div>
                    </div>
					
					</form>
                    
                </div>
</div>
            </div>
        </div>
    </section>

   <div class="video section"> 			
	<div class="y container-fluid">
	    <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/y47bs3nqRA0"  allowfullscreen></iframe>
	    </div>
    </div>
    </div>
    
    <section class="tab_filers">
        <div class="container">
            <div class="view_filers_cc">
                <h2>Cancer Types</h2>
                <div class="tab_title">
                    <button class="tablink_fil change_color" onclick="filter_alpha(event,'a')">a</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'b')">b</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'c')">c</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'d')">d</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'e')">e</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'f')">f</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'g')">g</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'h')">h</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'i')">i</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'j')">j</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'k')">k</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'l')">l</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'m')">m</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'n')">n</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'o')">o</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'p')">p</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'q')">q</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'r')">r</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'s')">s</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'t')">t</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'u')">u</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'v')">v</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'w')">w</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'x')">x</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'y')">y</button><span></span>
                    <button class="tablink_fil" onclick="filter_alpha(event,'z')">z</button>
                </div>
                <div class="view_result">
                    <div id="a" class="result_list">
                        <div class="result-cards">
                            <h3>Acute Myeloid Leukemia (AML)</h3>
                            <h3>Acute Lymphoblastic Leukemia (ALL)</h3>
                            <h3>Appendix Cancer</h3>
                            <h3>Anal Cancer</h3>
                        </div>
                    </div>
                    <div id="b" class="result_list">
                        <div class="result-cards">
                            <h3> Bladder Cancer </h3>
                            <h3> Brain Tumors </h3>
                            <h3> Bone Cancer </h3>
                            <h3> Breast Cancer </h3>
                        </div>
                    </div>
                    <div id="c" class="result_list">
                        <div class="result-cards">
                            <h3> Cervical Cancer </h3>
                            <h3> Cholangiocarcinoma </h3>
                            <h3> Colorectal Cancer </h3>
                            <h3> Chronic Lymphocytic Leukemia </h3>
                            <h3> Chronic Myeloid Leukemia </h3>
                        </div>
                    </div>
                    <div id="d" class="result_list">
                        <div class="result-cards">
                            <h3> Duodenum Cancer </h3>
                        </div>
                    </div>
                    <div id="e" class="result_list">
                        <div class="result-cards">
                            <h3> Esophageal Cancer</h3>

                        </div>
                    </div>
                    <div id="f" class="result_list">
                        <div class="result-cards">
                            <h3> Fallopian Tube Cancer</h3>

                        </div>
                    </div>
                    <div id="g" class="result_list">
                        <div class="result-cards">
                            <h3> Gallbladder Cancer</h3>

                        </div>
                    </div>
                    <div id="h" class="result_list">
                        <div class="result-cards">
                            <h3> Hypopharyngeal Cancer</h3>
                            <h3>Hodgkin's Lymphoma</h3>

                        </div>
                    </div>
                    <div id="i" class="result_list">
                        <div class="result-cards">
                            <h3> Ileum Cancer</h3>

                        </div>
                    </div>
                    <div id="j" class="result_list">
                        <div class="result-cards">
                            <h3> Jejunum Cancer</h3>

                        </div>
                    </div>
                    <div id="k" class="result_list">
                        <div class="result-cards">
                            <h3> Kidney Cancer</h3>

                        </div>
                    </div>
                    <div id="l" class="result_list">
                        <div class="result-cards">
                            <h3> Liver Cancer</h3>
                            <h3> Lung Cancer</h3>

                        </div>
                    </div>
                    <div id="m" class="result_list">
                        <div class="result-cards">
                            <h3> Mediastinal Tumors</h3>

                        </div>
                    </div>
                    <div id="n" class="result_list">
                        <div class="result-cards">
                            <h3>Nasopharynx Cancer</h3>
                            <h3>Non - Hodgkin's Lymphoma</h3>
                        </div>
                    </div>
                    <div id="o" class="result_list">
                        <div class="result-cards">
                            <h3> Oral Cancer</h3>
                            <h3> Oropharyngeal Cancer</h3>
                            <h3> Ovarian Cancer</h3>
                        </div>
                    </div>
                    <div id="p" class="result_list">
                        <div class="result-cards">
                            <h3> Pancreas Cancer</h3>
                            <h3> Pediatric Thalassemia</h3>
                            <h3> Penile Cancer</h3>
                            <h3> Prostate Cancer</h3>
                            <h3>Pediatirics Brain Tumor</h3>
                            <h3>Pediatric Sickle Cell Anemia</h3>
                            <h3>Paediatrics Chronic Myeloid Leukemia</h3>
                            <h3>Paediatrics Non hodgkins Lymphoma</h3>

                        </div>
                    </div>
                    <div id="q" class="result_list">
                        <div class="result-cards">

                        </div>
                    </div>
                    <div id="r" class="result_list">
                        <div class="result-cards">
                            <h3>Retinoblastoma</h3>

                        </div>
                    </div>
                    <div id="s" class="result_list">
                        <div class="result-cards">
                            <h3> Salivary Gland Tumors</h3>
                            <h3>Soft Tissue Sarcoma</h3>
                            <h3> Stomach Cancer</h3>
                            <h3> Skin Cancer</h3>
                            <h3> Spine Tumors</h3>
                            <h3>Sickle Cell Anemia</h3>
                        </div>
                    </div>
                    <div id="t" class="result_list">
                        <div class="result-cards">
                            <h3>Testicular Cancer</h3>
                            <h3>Thalassemia</h3>
                            <h3> Thyroid Cancer</h3>

                        </div>
                    </div>
                    <div id="u" class="result_list">
                        <div class="result-cards">
                            <h3> Urethral Cancer</h3>
                            <h3> Uterine Cancer</h3>
                        </div>
                    </div>
                    <div id="v" class="result_list">
                        <div class="result-cards">
                            <h3>Vaginal Cancer</h3>
                            <h3>Vulvar Cancer</h3>

                        </div>
                    </div>
                    <div id="w" class="result_list">
                        <div class="result-cards">
                            <h3>Wilms Tumor</h3>

                        </div>
                    </div>
                    <div id="x" class="result_list">
                        <div class="result-cards">

                        </div>
                    </div>
                    <div id="y" class="result_list">
                        <div class="result-cards">

                        </div>
                    </div>
                    <div id="z" class="result_list">
                        <div class="result-cards">

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <section class="treament_sec">
        <div class="container">
            <div class="treament_cc">
                <h2>Treatments</h2>
                <div class="list_treament">
                <ul>
                        <li><a >Blood and Marrow Transplantation </a></li>
                        <li><a >Brachytherapy</a></li>
                        <li><a >Breast Reconstruction</a></li>
                        <li><a >Chemotherapy</a></li>
                        <li><a >HIPEC</a></li>
                        <li><a >Image-guided Radiation Therapy </a></li>
                        <li><a >Immunotherapy</a></li>
                        <li><a >Intensity Modulated Radiation Therapy</a></li>
                        <li><a >Microvascular Flaps in Head and Neck Cancer</a></li>
                        <li><a >MIS</a></li>
                        <li><a >PIPAC</a></li>
                        <li><a >Proton Therapy</a></li>
                        <li><a >Reconstruction after Resection of the Jaw Bone</a></li>
                        <li><a >RFA</a></li>
                        <li><a>Robotic Onco Surgery</a></li>
                        <li><a>Stereotactic Body Radiation Therapy</a></li>
                        <li><a >Stereotatic Radiosurgery</a></li>
                        <li><a >Targeted Therapy</a></li>
                        <li><a >Theranostics</a></li>
                        <li><a >3D - Conformal Radiation Therapy </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="manage_team_sec">
        <div class="container">
            <div class="manage_cc">
                <h2>Organ Specific Cancer Management Teams</h2>
                <h3>for singular focus and exceptional outcomes</h3>
                <div class="image_manage">
                    <img class="lazy" data-src="/img/Cancer Management terms@2xlg.png">
                </div>
            </div>
        </div>
    </section>
    <section class="inner_banner_image">
        <div class="container">
            <div class="banner_inner_cc bglazy">
                <div class="inner_banner_title">
                    <h3>Apollo Cancer Centre ranked as the</h3>
                    <h2>Best Private Cancer Hospital in India*</h2>
                    <p>The Week 2021, Ranking*</p>
                </div>

            </div>
        </div>
    </section>
    <section class="center_card_sec">
        <div class="container">
            <div class="center_card_cc">
                <div class="center_cards">
                    <img class="lazy" width="110" height="110" data-src="/img/cancer@2xlg.png">
                    <h5>240+</h5>
                    <p>Oncologists</p>
                </div>
                <div class="center_cards">
                    <img class="lazy" width="105" height="105" data-src="/img/cancer2lg.png">
                    <h5>14</h5>
                    <p>Cancer Centres</p>
                </div>
                <div class="center_cards">
                    <img class="lazy" width="100" height="100" data-src="/img/cance3lg.png">
                    <h5>2 lakh </h5>
                    <p>Onco Surgeries</p>
                </div>
                <div class="center_cards">
                    <img class="lazy" width="100" height="100" data-src="/img/cancer5lg.png">
                    <h5>2 Million</h5>
                    <p> Chemos</p>
                </div>
                <div class="center_cards">
                    <img class="lazy" width="100" height="100" data-src="/img/cancer7lg.png">
                    <h5>4000+</h5>
                    <p> Robotic Surgeries</p>
                </div>
            </div>
            <div class="btn_book">
                <a href="#bookapp">Book an Appointment</a>
            </div>
        </div>
    </section>
    <section class="landing_copyrtg">
        <div class="container">
            <div class="copy_cc">
                <p>© Copyright 2022 Apollo Hospitals Enterprises Ltd. All Rights Reserved.</p>
            </div>
        </div>
    </section>
    <div id="footer-wrapper"></div>
    <script>
const search = document.getElementById("otp");

search.addEventListener("keyup", function (e) {
  const inputText = e.target.value; // Get the text typed by user
  var hiddenText = document.getElementById('phone_hide').value;
  var verify_otp = document.getElementById('verifyotp').value;
//   console.log(hiddenText,'eeee');
  if(hiddenText == inputText && hiddenText != ''){
    document.getElementById('phone-validations').innerHTML = 'Valid OTP';
    $("#otp_set_1").css({"width":"100%"});
    document.getElementById('otp_set_2').style.display = 'none';
    document.getElementById('phone-validations').style.color = 'green';
    document.getElementById('verifyotp').value = 'verified';
    document.getElementById('otp-timer').style.display = 'none';
    document.getElementById('otp').readOnly = true;
    // document.getElementById("otp_set_2").style.pointerEvents = "none";
		document.getElementById('btnemasub').disabled = false;
        document.getElementById('phone').readOnly = true;
    
  }
 
  else if(hiddenText != inputText && hiddenText != ''){
    // console.log('error');
    document.getElementById('phone-validations').innerHTML = 'Invalid OTP';
    document.getElementById('verifyotp').value = 'not_verified';
    document.getElementById('otp').readOnly = false;
    document.getElementById('phone-validations').style.color = 'red';
    document.getElementById('otp-timer').style.display = 'block';
    // document.getElementById('otp_set_2').style.display = 'none';
    // document.getElementById('phone_hide').value = 'Invalid OTP';
    // document.getElementById("otp_set_2").style.pointerEvents = "unset";
		document.getElementById('btnemasub').disabled = true;

}else if( verify_otp == 'not_verified' && hiddenText == '') {
    document.getElementById('phone-validations').innerHTML = 'Invalid OTP';
    document.getElementById('phone-validations').style.color = 'red';
    document.getElementById('otp').readOnly = false;
    document.getElementById('btnemasub').disabled = true;
	document.getElementById('otp_set_2').style.display = 'block';
    document.getElementById('phone').readOnly = false;
  }
  else {
    // console.log('asdfg');
    document.getElementById('verifyotp').value = 'not_verified';
    document.getElementById('phone-validations').style.color = 'red';
    document.getElementById('phone-validations').innerHTML = '';
    document.getElementById('otp-timer').style.display = 'none';
    document.getElementById('otp_set_2').style.display = 'block';
    document.getElementById('otp').readOnly = false;
  }
  console.log(inputText); // log the input text out

});
    </script>

    <script>
        function filter_alpha(evt, alphabets) {
            var i, x, tablinks;
            x = document.getElementsByClassName("result_list");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink_fil");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" change_color", "");
            }
            document.getElementById(alphabets).style.display = "block";
            evt.currentTarget.className += " change_color";
        }
    </script>
    <script>
 document.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById("ResponseSaidCBY").onchange = clickYes;
document.getElementById("ResponseSaidCBN").onchange = clickNo;
})

function clickYes() {
	if (document.getElementById("ResponseSaidCBN").checked) {
		document.getElementById("ResponseSaidCBN").checked = false;
	}
}
function clickNo() {
	if (document.getElementById("ResponseSaidCBY").checked) {
		document.getElementById("ResponseSaidCBY").checked = false;
	}
}
</script>
    <script>
            document.addEventListener('DOMContentLoaded', (event) => {
            document.getElementById('actual-btn').addEventListener('change', function(){
            document.getElementById('file-chosen').textContent = this.files[0].name
              });
             })

    </script>
<script defer src="./js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
	$('#city').keyup(function() {
		$('.smallerror').remove();
        var description =$('#description').val();
         var city = $('#city').val();
         var state = $('#state').val();
         var select_state = $('#select_state').val();
         var report =$('#file-chosen').html()
		 var choice1=document.getElementById("ResponseSaidCBY").checked;
		var choice2=document.getElementById("ResponseSaidCBN").checked;
		if ((choice1=="")&&(choice2==""))
		{
			$('#are').after('<small class="smallerror" id="smallerror">Please Choose Are You A Patient?</small>');
            return false;
			}
            if ($("#lookingfor").prop('selectedIndex')< 1){
                $('#lookingfor').after('<small class="smallerror" id="smallerror">Please Select What are you looking for?</small>');

			return false;
		 } 
         if ($("#country").prop('selectedIndex') < 1){
			 $('#country').after('<small class="smallerror" id="smallerror">Please Select Your Country</small>');
			 return false;
		 }
         else if(select_state.trim() == '') {
			 $('#select_state').after('<small class="smallerror" id="smallerror">Please Select Your State</small>');
             return false;
		 }
         else if(state.trim() == '') {
			 $('#state').after('<small class="smallerror" id="smallerror">Please Select Your Country</small>');
             return false;
		 }
         else if(city.trim() == '') {
			 $('#city').after('<small class="smallerror" id="smallerror">Please Enter Your City</small>');	 
             return false;
		 }
         else if(description.trim() == '') {
            $('#description').after('<small class="smallerror" id="smallerror">Please Enter Your Description?*</small>');

			return false;
		}
    });
});

 function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}

    $('input[type="checkbox"]').change(function() {
			$('.smallerror').remove();
			$('#btnemasub').attr('disabled','disabled');	
		    $('#btnemasub').addClass('btn_disabled');	
			var choice1=document.getElementById("ResponseSaidCBY").checked;
		var choice2=document.getElementById("ResponseSaidCBN").checked;
		var name2 = $('#firstName').val();
		var lastName1 = $('#lastName').val();
		var email = $('#email').val();
        var report =$('#file-chosen').html()
		var phone = $('#phone').val();
        var country = $('#country').val();
        var select_state = $('#select_state').val();
        var state =$('#state').val();
        var city =$('#city').val();
        var lookingfor = $('#lookingfor').val();
        var description = $('#description').val();
        var location = $('#location').val();
        
        if ((choice1=="")&&(choice2==""))
			{
				$('#are').after('<small class="smallerror" id="smallerror">Please Choose Are You A Patient?</small>');
				return false;
			}
			else if(name2.trim() == '') {
				 $('#firstName').after('<small class="smallerror" id="smallerror">Please Enter Your First Name</small>');
				 return false;
			 }
             else if(lastName1.trim() == '') {
			 $('#lastName').after('<small class="smallerror" id="smallerror">Please Enter Your Last Name</small>');
			 return false;
		 }
		 else if(email.trim() == '') {
			 $('#email').after('<small class="smallerror" id="smallerror">Please Enter Your Email</small>');
			 return false;
		 }
		 else if( !validateEmail(email.trim())) { 
			$('#email').after('<small class="smallerror" id="smallerror">Please Enter Valid Email</small>');
			 return false;
		 }
		 else if(phone.trim() == '') {
			 $('#phone').after('<small class="smallerror" id="smallerror">Please Enter Your Phone No.</small>');
			 return false;
		 }
		 else if(phone.trim().length <10) {
			 $('#phone').after('<small class="smallerror" id="smallerror">Please Enter Valid Phone No.</small>');
			 return false;
		 }
        else if ($("#country").prop('selectedIndex') < 1){
			 $('#country').after('<small class="smallerror" id="smallerror">Please Select Your Country</small>');
			return false;
		 }
         else if(select_state.trim() == '') {
			 $('#select_state').after('<small class="smallerror" id="smallerror">Please Select Your State</small>');
             return false;
		 }
         else if (state.trim() == ''){
	         $('#state').after('<small class="smallerror" id="smallerror">Please Select Your State</small>');
	        return false;
	    }
         else if (city.trim() == ''){
	         $('#city').after('<small class="smallerror" id="smallerror">Please Select Your City</small>');
	   return false;
	    }
         else if ($("#lookingfor").prop('selectedIndex')< 1){
            $('#lookingfor').after('<small class="smallerror" id="smallerror">Please Select What are you looking for?</small>');
             return false;
		 } 
         else if(description.trim() == '') {
            $('#description').after('<small class="smallerror" id="smallerror">Please Enter Your Description?*</small>');

			return false;
		 } else {
			 
			  $('#btnemasub').removeAttr('disabled');
			 $('#btnemasub').removeClass('btn_disabled');
			 
		 }
		 
         //$('#country').trigger('change');
		//   $('#btnemasub').removeAttr('disabled');
		//  $('#btnemasub').removeClass('btn_disabled');
    });
    function fir() {
		
		var choice1=document.getElementById("ResponseSaidCBY").checked;
		var choice2=document.getElementById("ResponseSaidCBN").checked;
		

        var report =$('#file-chosen').html()
		var name2 = $('#firstName').val();
		var lastName1 = $('#lastName').val();
		var email = $('#email').val();
		var phone = $('#phone').val();
        var select_state = $('#select_state').val();
        var state =$('#state').val();
        var city =$('#city').val();
        var description =$('#description').val();
		


		$('.smallerror').html('');
		$('.smallerror').remove();
		$('#register_error').html('');
		
		//alert("Test");
		 $('#btnemasub').attr('disabled','disabled');	
		 $('#btnemasub').addClass('btn_disabled');	

		if ((choice1=="")&&(choice2==""))
		{
			$('#are').after('<small class="smallerror" id="smallerror">Please Choose Are You A Patient?</small>');
			return false;
		}
		else if(name2.trim() == '') {
			 $('#firstName').after('<small class="smallerror" id="smallerror">Please Enter Your First Name</small>');
			 return false;
		 }
		 else if(lastName1.trim() == '') {
			 $('#lastName').after('<small class="smallerror" id="smallerror">Please Enter Your Last Name</small>');
			 return false;
		 }
		 else if(email.trim() == '') {
			 $('#email').after('<small class="smallerror" id="smallerror">Please Enter Your Email</small>');
			 return false;
		 }
		 else if( !validateEmail(email.trim())) { 
			$('#email').after('<small class="smallerror" id="smallerror">Please Enter Valid Email</small>');
			 return false;
		 }
		 else if(phone.trim() == '') {
			 $('#phone').after('<small class="smallerror" id="smallerror">Please Enter Your Phone No.</small>');
			 return false;
		 }
		 else if(phone.trim().length <10) {
			 $('#phone').after('<small class="smallerror" id="smallerror">Please Enter Valid Phone No.</small>');
			 return false;
		 } 
		 else if (country.selectedIndex < 1){
		  $('#country').after('<small class="smallerror" id="smallerror">Please Select Your Country</small>');
		   return false;
		}
        else if(select_state.trim() == '') {
			 $('#select_state').after('<small class="smallerror" id="smallerror">Please Select Your State</small>');
             return false;
		 }
        else if (state.trim() == ''){
	      $('#state').after('<small class="smallerror" id="smallerror">Please Select Your State</small>');
		   return false;
		}
        else if (city.trim() == ''){
            $('#city').after('<small class="smallerror" id="smallerror">Please Select Your City</small>');
	   return false;
	    }
		else if (lookingfor.selectedIndex < 1){
			 $('#lookingfor').after('<small class="smallerror" id="smallerror">Please Select What are you looking for?</small>');
             return false;
		 }    
         else if(description.trim() == '') {
			 $('#description').after('<small class="smallerror" id="smallerror">Please Enter Your Description?*</small>');

			return false;
		 }                                
		 else { 
		 
			 $('#btnemasub').removeAttr('disabled');
			 $('#btnemasub').removeClass('btn_disabled');
		 }
		
	}
    // $('#country').change(function() {
	// 	var city =$('#city').val();
    //     var state =$('#state').val();
    //     var report =$('#file-chosen').html();
    //       // $('#state').val('')
    //       var state = $('#state').val();
    //     var country =document.getElementById('country').value;
       
    //    var country_name= $('#country option:selected').html();
    // //    alert(state)
    //     // if($('#country').val() == '91'){

    //     // }
    //     if(country_name=='INDIA' && country=='91')
    //     {
    //         $('#state').val('');
    //         var select_state = $('#select_state').val();
    //         if(select_state != ''){
    //             var state = $('#state').val(select_state);
    //         }else{
    //             var state = $('#state').val();
    //         }
    //         $('#state').css("display","none");
    //         $('#select_state').css("display","block");
    //         $('#select_state_others').css("display","none");
    //         //    alert("test")
    //     }else{
    //         // alert(state,"ddfdf");
    //         $('#state').val('others');

    //         if(state != 'others'){
    //             $('#state').val('');
    //         }
    //         $('#state').css("display","block");
    //         $('#select_state').css("display","none");
    //         $('#select_state_others').css("display","block");
    //         // $('#state').val('others');
    //         //    alert(" sjdkja sdkfj")
    //     }
    //     var description =$('#description').val();
	// 	$('.smallerror').remove();
	// 	$('#btnemasub').attr('disabled','disabled');	
	// 	$('#btnemasub').addClass('btn_disabled');	
    //       if ($("#country").prop('selectedIndex') < 1){
    //         $('#country').after('<small class="smallerror" id="smallerror">Please Select Your Country</small>');
	// 		return false;
	// 	 }
    //      else if (state == ''){            
    //         if(state.trim()==""){
	//       $('#state').after('<small class="smallerror" id="smallerror">Please Select Your State</small>');
    //         }
    //         return false;
    //     }
    //      else if (city.trim() == ''){
    //         $('#city').after('<small class="smallerror" id="smallerror">Please Select Your City</small>');
	//    return false;
	//     }
    //      else if ($("#lookingfor").prop('selectedIndex')< 1){
    //         $('#lookingfor').after('<small class="smallerror" id="smallerror">Please Select What are you looking for?</small>');
    //          return false;
	// 	 } 
    //      else if(description.trim() == '') {
    //         $('#description').after('<small class="smallerror" id="smallerror">Please Enter Your Description?*</small>');

	// 		return false;
	// 	 } 
	// 	 fir();
	// 	// $('#btnemasub').removeAttr('disabled');
	// 	// $('#btnemasub').removeClass('btn_disabled');
     
    // });
	
	
	$('#lookingfor').change(function() {
         fir();
		 //sec();
    });
	
	function sec() {
		
		$('.smallerror').remove();
		
	 	$('#btnemasub').attr('disabled','disabled');	
		$('#btnemasub').addClass('btn_disabled');	
	
		
	
    var report =$('#file-chosen').html()
	var country = $('#country').val();
    var select_state = $('#select_state').val();
    var city =$('#city').val();
    var state =$('#state').val();
	var lookingfor = $('#lookingfor').val();
    var description = $('#description').val();
	
	
	  if ($("#country").prop('selectedIndex') < 1){
        $('#country').after('<small class="smallerror" id="smallerror">Please Select Your Country</small>');

        return false;
	 }   
     if(select_state.trim() == '') {
			 $('#select_state').after('<small class="smallerror" id="smallerror">Please Select Your State</small>');
        return false;
	 }   
     if (state.trim() == ''){
	  $('#state').after('<small class="smallerror" id="smallerror">Please Select Your State</small>');
		return false;
	 }   
     if (city.trim() == ''){
        $('#city').after('<small class="smallerror" id="smallerror">Please Select Your City</small>');
	   return false;
	}
	  if ($("#lookingfor").prop('selectedIndex')< 1){
		$('#lookingfor').after('<small class="smallerror" id="smallerror">Please Select What are you looking for?</small>');

		return false;
	 }
     else if(description.trim() == '') {
        $('#description').after('<small class="smallerror" id="smallerror">Please Enter Your Description?*</small>');

			return false;
		 }
	 
	  $('#btnemasub').removeAttr('disabled');
 	 $('#btnemasub').removeClass('btn_disabled');
	

	
	
	}
	
	


$('.landingfrmcls').on('keypress, keyup',function() {

	
	var choice1=document.getElementById("ResponseSaidCBY").checked;
	var choice2=document.getElementById("ResponseSaidCBN").checked;
	

    var report =$('#file-chosen').html()
	var name2 = $('#firstName').val();
	var lastName1 = $('#lastName').val();
	var email = $('#email').val();
	var phone = $('#phone').val();
    var select_state = $('#select_state').val();
    var state =$('#state').val();
    var city =$('#city').val();
    var description =$('#description').val();
	
	


	$('.smallerror').html('');
	$('.smallerror').remove();
    $('#register_error').html('');
    
	
	 $('#btnemasub').attr('disabled','disabled');	
	 $('#btnemasub').addClass('btn_disabled');	

	if ((choice1=="")&&(choice2==""))
	{
		$('#are').after('<small class="smallerror" id="smallerror">Please Choose Are You A Patient?</small>');
		return false;
	}
	else if(name2.trim() == '') {
		 $('#firstName').after('<small class="smallerror" id="smallerror">Please Enter Your First Name</small>');
		 return false;
	 }
	 else if(lastName1.trim() == '') {
		 $('#lastName').after('<small class="smallerror" id="smallerror">Please Enter Your Last Name</small>');
		 return false;
	 }
	 else if(email.trim() == '') {
		 $('#email').after('<small class="smallerror" id="smallerror">Please Enter Your Email</small>');
		 return false;
	 }
	 else if( !validateEmail(email.trim())) { 
		$('#email').after('<small class="smallerror" id="smallerror">Please Enter Valid Email</small>');
		 return false;
	 }
	 else if(phone.trim() == '') {
		 $('#phone').after('<small class="smallerror" id="smallerror">Please Enter Your Phone No.</small>');
		 return false;
	 }
	 else if(phone.trim().length <10) {
		 $('#phone').after('<small class="smallerror" id="smallerror">Please Enter Valid Phone No.</small>');
		 return false;
	 } 
     else if (country.selectedIndex < 1){
	  $('#country').after('<small class="smallerror" id="smallerror">Please Select Your Country</small>');
	   return false;
	}
    else if(select_state.trim() == '') {
			 $('#select_state').after('<small class="smallerror" id="smallerror">Please Select Your State</small>');
             return false;
    }
    else if (state.trim() == ''){
	  $('#state').after('<small class="smallerror" id="smallerror">Please Select Your State</small>');
	   return false;
	}
    else if (city.trim() == ''){
	  $('#city').after('<small class="smallerror" id="smallerror">Please Select Your City</small>');
	   return false;
	}
    else if (lookingfor.selectedIndex < 1){
		 $('#lookingfor').after('<small class="smallerror" id="smallerror">Please Select What are you looking for?</small>');
         return false;
	 }    
     else if(description.trim() == '') {
			 $('#description').after('<small class="smallerror" id="smallerror">Please Enter Your Description?*</small>');

     	return false;
	 }                                
     else { 
	 
		 $('#btnemasub').removeAttr('disabled');
		 $('#btnemasub').removeClass('btn_disabled');
	 }
	 

	 
	
	 
	
 });

$('#btnemasub').click(function(e) {	
    $("#otp_set_1").css('display',"block");
		 e.preventDefault();	
		var choice1=document.getElementById("ResponseSaidCBY").checked;
		var choice2=document.getElementById("ResponseSaidCBN").checked;
		var file = document.getElementById("actual-btn");
	
		var name2 = $('#firstName').val();
		var lastName1 = $('#lastName').val();
		var email = $('#email').val();
		var phone = $('#phone').val();
        // var country = $('#country').val();
        var country = 91;
        var state =$('#select_state').val();
        var city =$('#city').val();
        var lookingfor = $('#lookingfor').val();
        var location = $('#location').val();
        var description = $('#description').val();
        var txtadgroupid = $('#txtadgroupid').val();
        var txtnetwork = $('#txtnetwork').val();
        var txtdevice = $('#txtdevice').val();
        var txtcampaign_id = $('#txtcampaign_id').val();
        var txtcampaignid = $('#txtcampaignid').val();
        var txtgclid = $('#txtgclid').val();
        var txtsourceid = $('#txtsourceid').val();
        var txtmediumid = $('#txtmediumid').val();
        var lookingfor=$('#lookingfor').val();
	var txtutmterm = $('#txtutmterm').val();
    var txtutmcontent = $('#txtutmcontent').val();
    var report =  $('#actual-btn')[0].files[0];
    var form_data = new FormData();                  
        form_data.append('firstName', name2);
        form_data.append('lastName', lastName1);
        form_data.append('email', email);
        form_data.append('phone', phone);
        form_data.append('country', country);
        form_data.append('state', state);
        form_data.append('city', city);
        form_data.append('location', location);
        form_data.append('lookingfor', lookingfor);
        form_data.append('description', description);
        form_data.append('txtadgroupid', txtadgroupid);
        form_data.append('txtnetwork', txtnetwork);
        form_data.append('txtdevice', txtdevice);
        form_data.append('txtcampaign_id', txtcampaign_id);
        form_data.append('txtcampaignid', txtcampaignid);
        form_data.append('txtgclid', txtgclid);
        form_data.append('txtsourceid', txtsourceid);
        form_data.append('txtmediumid', txtmediumid);
        form_data.append('txtutmterm', txtutmterm);
        form_data.append('txtutmcontent', txtutmcontent);
        form_data.append('report', report);
        form_data.append('ResponseSaidCBN', choice2);
        form_data.append('ResponseSaidCBY', choice1);
		 var formData = new FormData($("#frmBook")[0]);
         $('#btnemasub').attr('disabled','disabled');
			$('#btnemasub').addClass('btn_disabled');
            var Verify_Otp = document.getElementById('verifyotp').value;
            if(Verify_Otp == 'not_verified') {
                $('#btnemasub').attr('disabled','disabled');
                // $('#btnemasub').addClass('btn_disabled');
            }
            else{
                document.getElementById("otp_set_2").style.display = "none";
                document.getElementById("otp_set_1").style.display = "none";
		 $.ajax({
			 url: "<?php echo  $baseURL ?>/include/crm_campaign.php",
			 type: "POST",
			 data : form_data,
            //  { 'firstName' : encodeURIComponent(name2), 'lastName' : encodeURIComponent(lastName1), 'email': encodeURIComponent(email), 'phone':encodeURIComponent(phone), 'country':encodeURIComponent(country),'city':encodeURIComponent(city), 'lookingfor': encodeURIComponent(lookingfor),'location':encodeURIComponent(location), 'description':encodeURIComponent(description), 'ResponseSaidCBY':choice1, 'ResponseSaidCBN':choice2,'txtadgroupid':txtadgroupid,'txtnetwork':txtnetwork,'txtdevice':txtdevice,'txtcampaign_id':txtcampaign_id,'txtcampaignid':txtcampaignid,'txtgclid':txtgclid, 'txtsourceid':txtsourceid, 'txtmediumid':txtmediumid, 'txtutmterm' :txtutmterm, 'txtutmcontent' :txtutmcontent },		
            processData: false,
            contentType: false,		
			 beforeSend: function() {
				 document.querySelector("#btnemasub").classList.add("cc-loadbtn-inner");
				 document.getElementById('btnemasub').value;
				 document.getElementById('btnemasub').innerHTML="";
				 document.getElementById('btnemasub').disabled = true;

										 },
						 success: function(data){
					
							 if(data == 2 || data == '2') {
                                $('#btnemasub').removeClass('cc-loadbtn-inner');
								  document.getElementById('register_error').innerHTML= "You have already booked an appointment";
								  document.getElementById('register_error').style.display = "block";
                                  $('#btnemasub').attr('disabled','disabled');
								$('#btnemasub').addClass('btn_disabled');
                                
								  $('#frmBook')[0].reset();
                                  document.getElementById("file-chosen").innerHTML="Choose File";
							 } else {
								 
								 document.querySelector("#btnSubmitApp").classList.remove("cc-loadbtn-inner");										
								document.getElementById('btnSubmitApp').value;
								document.getElementById('btnSubmitApp').innerHTML="submit your application";
								document.getElementById('btnSubmitApp').disabled =false;

                                   window.location.href = "<?php echo  $baseURL ?>/thank_you/thank_you.php";	  

							 
								// form.reset(); 
							 

							 }
							 
								
                            // document.querySelector("#btnemasub").classList.remove("cc-loadbtn-inner");
							
							// 	$('#btnemasub').attr('disabled','disabled');
							// 	$('#btnemasub').addClass('btn_disabled');
						 //}
						
						 },
						 error: function(xhr, ajaxOptions, thrownError) {
						 console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
						 }
	   });
    }
	
});

$('#generateotp').click(function(e) {	
    var phone = $('#phone').val();
    var lookingfor = $('#lookingfor').val();
    var report = $('#file-chosen').html();
    var name2 = $('#firstName').val();
		var lastName1 = $('#lastName').val();
        var description =$("#description").val();
    // if ($("#lookingfor").prop('selectedIndex')< 1){
    //     // console.log('test');
	// 		//  $('#lookingfor').after('<small class="smallerror" id="smallerror">Please Select what are you Looking for?</small>');
    //          return false;
	// 	 } 
    var choice1=document.getElementById("ResponseSaidCBY").checked;
		var choice2=document.getElementById("ResponseSaidCBN").checked;

    var state_names = $("#state").val();
        var email_names = $("#email").val();
        var country_names = $("#country").val();
        var select_state = $('#select_state').val();
         var  city_names = $("#city").val();
         var upload = $("#actual-btn").val();


         
         if ((choice1=="")&&(choice2==""))
		{
            if($('#smallerror').html()==undefined)
                $('#are').after('<small class="smallerror" id="smallerror">Please Choose Are You A Patient?</small>');
            return false;
			}

            if (name2=="")
		{
            if($('#smallerror').html()==undefined)
                // $('#firstName').after('<small class="smallerror" id="smallerror">Please Choose Are you a Patient?</small>');
            return false;
			}

            
            if (lastName1=="")
		{
            if($('#smallerror').html()==undefined)
                // $('#lastName').after('<small class="smallerror" id="smallerror">Please Choose Are you a Patient?</small>');
            return false;
			}

            

if(email_names == '')
{
    return false;
}
        
            if(country_names == "")
        {
return false;
        }
        if(select_state == ""){
            return false;
        }

        if( state_names == "")
        {
         return false;  
        }

        if( lookingfor == "")
        {
         return false;  
        }

        if( description  == "")
        {
         return false;  
        }

        // if(upload=='')
        // {
        //     if($('#smallerror').html()==undefined)
        //     {
        //         $('.for_width_input').after('<small class="smallerror" id="smallerror">Please Upload your Files</small>');}
        //     return false;
        // }

if(city_names == "")
{
    if($('#smallerror').html()==undefined)
                $('#city').after('<small class="smallerror" id="smallerror">Please Select your City</small>');
            return false;
             return false;
		 } 
    if(phone.trim() == '') {
        $('#phone').html('<small class="smallerror" id="smallerror">Please Enter Your Phone No.</small>');
		 return false;
	 }
	 else if(phone.trim().length <10) {
		$('#phone').html('<small class="smallerror" id="smallerror">Please Enter valid Phone No.</small>');
		 return false;
	 } 
     else { 
    $('.smallerror').html('');
	$('.smallerror').remove();
     $('#btnemasub').removeAttr('disabled');
     $('#btnemasub').removeClass('btn_disabled');
 }
 if(email_names == '')
{
    return false;
}
    // if($('#phone').val() !="" && ){
        // fir();
    // $test= $('#btnemasub').val("test");
    $("#otp_set_1").css('display',"block");
    // $("#otp_set_2").css('display',"block");
		 e.preventDefault();	
		var choice1=document.getElementById("ResponseSaidCBY").checked;
		var choice2=document.getElementById("ResponseSaidCBN").checked;
		var file = document.getElementById("actual-btn");
        var otp = Math.floor(1000 + Math.random() * 9000);
        document.getElementById('phone_hide').value = otp;
        document.getElementById("btnemasub").style.display = "block";
        document.getElementById("generateotp").style.display = "none";

        document.getElementById("otp").style.display = "block";
        document.getElementById("otp-timer").style.display = "block";
        document.getElementById('phone').readOnly = true;
	

        var counter = 50;
        var interval = setInterval(function() {
        counter--;
        var verify_otp = document.getElementById('verifyotp').value;
        if (counter < 10) {
            document.getElementById("single-otp").style.display = "block";
        }
        else {
            document.getElementById("single-otp").style.display = "none";
        }
        // console.log(counter);
        if (counter <= 0) {
     		clearInterval(interval);
             document.getElementById("otp-timer").style.display = "none";
             document.getElementById('phone').readOnly = true;
             if(verify_otp == 'not_verified') {
             document.getElementById("otp_set_2").style.display = "block";
             document.getElementById('phone').readOnly = false;
                document.getElementById('otp').value = '';
				document.getElementById('phone_hide').value = '';
                document.getElementById('phone-validations').innerHTML = ' ';
        }
            //  document.getElementById('phone_hide').value = '';
            return;
        }else{
            $('#time').text(counter);
        }
        }, 1000);

	
	
		var phone = $('#phone').val();
		 $.ajax({
			 url: "<?php echo  $baseURL ?>/include/verify_otp.php",
			 type: "POST",
			 data : { 'phone':encodeURIComponent(phone),'otp':encodeURIComponent(otp)} ,			
			
						 success: function(data){
						
						 },
						 error: function(xhr, ajaxOptions, thrownError) {
						 console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
						 }
	   });
    // }    
	
});

$("#phone").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        //$("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });

   $('#otp_set_2').click(function(e) {	
    // $test= $('#btnemasub').val("test");
    $("#otp_set_1").css('display',"block");
    // $("#otp_set_2").css('display',"block");
		 e.preventDefault();	
		var choice1=document.getElementById("ResponseSaidCBY").checked;
		var choice2=document.getElementById("ResponseSaidCBN").checked;
		var file = document.getElementById("actual-btn");

        var otp = Math.floor(1000 + Math.random() * 9000);
        document.getElementById('phone_hide').value = otp;

        document.getElementById("otp_set_2").style.display = "none";

        document.getElementById("otp").style.display = "block";
        document.getElementById("otp-timer").style.display = "block";
        document.getElementById('phone').readOnly = true;
        var counter = 50;
        var interval = setInterval(function() {
        counter--;
        var verify_otp = document.getElementById('verifyotp').value;
        if (counter < 10) {
            document.getElementById("single-otp").style.display = "block";
        }
        else {
            document.getElementById("single-otp").style.display = "none";
        }
        if (counter <= 0) {
     		clearInterval(interval);
             document.getElementById("otp-timer").style.display = "none";
            document.getElementById('phone').readOnly = true;
             if(verify_otp == 'not_verified') {
             document.getElementById("otp_set_2").style.display = "block";
             document.getElementById('phone').readOnly = false;
				document.getElementById('otp').value = '';
				document.getElementById('phone_hide').value = '';
                document.getElementById('phone-validations').innerHTML = ' ';
             }
            return;
        }else{
            $('#time').text(counter);
        }
        }, 1000);

	
	
		var phone = $('#phone').val();
		 $.ajax({
			 url: "<?php echo  $baseURL ?>/include/verify_otp.php",
			 type: "POST",
			 data : { 'phone':encodeURIComponent(phone),'otp':encodeURIComponent(otp)} ,			
			
						 success: function(data){
						
						 },
						 error: function(xhr, ajaxOptions, thrownError) {
						 console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
						 }
	   });
	
});

$("#phone").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        //$("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });

   $('#otp_set_1').keypress(function(e) { 
    // var k = e.which;
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        //$("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
});
$(function(){
   $('#otp_set_1').on("cut copy paste",function(e) {
      e.preventDefault();
   });
});
// $("#frmBook").on('submit',function(e) {
// 	e.preventDefault();		
	 
	 
// 	  var formData = new FormData($("#frmBook")[0]);
// 	 $.ajax({
// 		 url: "<?php echo  $baseURL ?>/include/secondcrm.php",
// 		 type: "POST",
// 		 data : new FormData(this),
// 		 processData: false,
// 		 contentType: false,
// 		 beforeSend: function() {
// 			 document.querySelector("#btnSubmitApp").classList.add("cc-loadbtn-inner");
// 			 document.getElementById('btnSubmitApp').value;
// 			 document.getElementById('btnSubmitApp').innerHTML="";
// 			 document.getElementById('btnSubmitApp').disabled = true;
// 									 },
// 					 success: function(data){
						 
// 						 document.querySelector("#btnSubmitApp").classList.remove("cc-loadbtn-inner");										
// 						 document.getElementById('btnSubmitApp').value;
// 						 document.getElementById('btnSubmitApp').innerHTML="submit your application";
// 						 document.getElementById('btnSubmitApp').disabled =false;
// 						 $('#btnSubmitApp').removeClass('btn_disabled');
// 						//  if(data=='1' | data == 1){
// 							//  alert("Your Application sent successfully");
// 							//  $("#myElem").show();
// 						window.location.href = "<?php echo  $baseURL ?>/landing_thank_q.php";
						
//                         //  }
						
// 															 },
// 								 error: function(xhr, ajaxOptions, thrownError) {
// 								 console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
// 								 }
// 							 });
 
		
	
// });
    
    
       

                 $( document ).ready(function() {
                     $('a[href = "#makeanappontment"]').click(function(){
                     
                         var href = $(this).next().next().attr('href');

                         if(href!=undefined) {
                     
                             var result = href.replace("../", "");
                             var myArray = result.split("/");
                     


                                     if(myArray.length>2 && myArray[0]=='locations') { 											
                                                 document.getElementById("frmSpecialityName").value = myArray[2];
                                                 document.getElementById("frmDoctorName").value = myArray[3];
                                                 document.getElementById("frmPatientCityName").value = myArray[1];
                                     } else {	
                                         
                                         var result = href.replace("./", "");											
                                         var lastChar = result.slice(-1);											 
                                         if(lastChar == "/") {												
                                             result = result.substring(0,result.length - 1);
                                         }
                                         
                                             var myArray_frm= result.split("/");												
                                                                                             
                                             if(myArray_frm.length == 1) { 	
                                                 document.getElementById("frmDoctorName").value = myArray_frm[0];
                                             }
                                             var pathname = window.location.pathname;
                                                                                     
                                             var newpath = trimWord(pathname,"/");								
                                             
                                             
                                             var myArray_str = newpath.split("/");
                                         
                                             if(myArray_str.length == 3 && myArray_str[0]=='locations') { 	
                                                 document.getElementById("frmSpecialityName").value =myArray_str[2];													
                                                 document.getElementById("frmPatientCityName").value = myArray_str[1];

                                             }				

                                     }
                             } else {

                                 if($(this).hasClass('acc-txt')) {
                                     // alert("Test1")
                                     $("#frmSpecialityName").val('') ;
                                     $("#frmDoctorName").val('') ;
                                     $("#frmPatientCityName").val('') ;

                                 } else {
                                     // alert("Test2")
                                     $("#frmSpecialityName").val($("#frmSpecialityName").attr("data-txt")) ;
                                     $("#frmDoctorName").val($("#frmDoctorName").attr("data-txt")) ;
                                     $("#frmPatientCityName").val($("#frmPatientCityName").attr("data-txt")) ;
                                 }

                                 
                                             
                                 
                             }

                                     
                                     document.getElementById("makeanappontment").style.display = "block";
                                 
                                     });

                         
                             });  
                             
                             
                             

                             function trimWord(str, word) {
                                 var start = 0,
                                     end = str.length,
                                     len = word.length;

                                 while (start < end && hasSubstringAt(str, word, start))
                                     start += word.length;

                                 while (end > start && hasSubstringAt(str, word, end - len))
                                     end -= word.length

                                 return (start > 0 || end < str.length) ? str.substring(start, end) : str;
                             }
                             
                             
                             function hasSubstringAt(str, substr, pos) {
                                 var idx = 0, len = substr.length;

                                 for (var max = str.length; idx < len; ++idx) {
                                     if ((pos + idx) >= max || str[pos + idx] != substr[idx])
                                         break;
                                 }

                                 return idx === len;
                             }
</script>


<script>
    function onlyNumberKey(evt) {
          
        // Only ASCII character in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }

    function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!regex.test(email)) {
    return false;
  }else{
    return true;
  }
}

$(function () {
      $('#firstName').keydown(function (e) {
          if (e.shiftKey || e.ctrlKey || e.altKey) {
              e.preventDefault();
          } else {
              var key = e.keyCode;
              if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                  e.preventDefault();
              }
          }
      });
  });
  $(function(){
   $('#firstName').on("cut copy paste",function(e) {
      e.preventDefault();
   });
});
$(function(){
   $('#email').on("cut copy paste",function(e) {
      e.preventDefault();
   });
});
$(function(){
   $('#phone').on("cut copy paste",function(e) {
      e.preventDefault();
   });
});
$(function(){
   $('#select_state').on("cut copy paste",function(e) {
      e.preventDefault();
   });
});
$(function(){
   $('#state').on("cut copy paste",function(e) {
      e.preventDefault();
   });
});
$(function(){
   $('#city').on("cut copy paste",function(e) {
      e.preventDefault();
   });
});
$(function(){
   $('#lastName').on("cut copy paste",function(e) {
      e.preventDefault();
   });
});
  $(function () {
      $('#lastName').keydown(function (e) {
          if (e.shiftKey || e.ctrlKey || e.altKey) {
              e.preventDefault();
          } else {
              var key = e.keyCode;
              if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                  e.preventDefault();
              }
          }
      });
  });	
  $(function () {
      $('#city').keydown(function (e) {
          //alert("Test")
          if (e.shiftKey || e.ctrlKey || e.altKey) {
              e.preventDefault();
          } else {
              var key = e.keyCode;
              if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                  e.preventDefault();
              }
          }
      });
  });
  $(function () {
      $('#state').keydown(function (e) {
          //alert("Test")
          if (e.shiftKey || e.ctrlKey || e.altKey) {
              e.preventDefault();
          } else {
              var key = e.keyCode;
              if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                  e.preventDefault();
              }
          }
      });
  });
</script>

<script>
function mytollFree() {
  document.getElementById("myDropdown").classList.toggle("show");
  document.getElementById("myDrop").classList.toggle("mystyle");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
  
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


<!-- <script>
jQuery(document).mouseup(function(e) 
{
var container = jQuery("#myBtn_call");
jQuery("#on_clik_loc").show();
jQuery('#myBtn_call').css("color","#000");
jQuery('#myBtn_call').css("background","url('/img/phone%20Icon.png'),#eee");
jQuery('#myBtn_call').css("backgroundRepeat","no-repeat");
jQuery('#myBtn_call').css("backgroundPosition","12px 7px ");
if (!container.is(e.target) && container.has(e.target).length === 0) 
{
	jQuery("#on_clik_loc").hide();
jQuery('#myBtn_call').css("color","#fff");
jQuery('#myBtn_call').css("background","url('/img/telephone.png'),transparent");
jQuery('#myBtn_call').css("backgroundRepeat","no-repeat");
jQuery('#myBtn_call').css("backgroundPosition","12px 7px");

}
});
</script> -->
<script>
document.addEventListener("DOMContentLoaded", function() {
  var lazyloadImages;    

  if ("IntersectionObserver" in window) {
    lazyloadImages = document.querySelectorAll(".bglazy");
    var imageObserver = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var image = entry.target;
          image.src = image.dataset.src;
          image.classList.remove("bglazy");
          imageObserver.unobserve(image);
        }
      });
    });

    lazyloadImages.forEach(function(image) {
      imageObserver.observe(image);
    });
  } else {  
    var lazyloadThrottleTimeout;
    lazyloadImages = document.querySelectorAll(".bglazy");
    
    function lazyload () {
      if(lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }    

      lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('bglazy');
            }
        });
        if(lazyloadImages.length == 0) { 
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
      }, 20);
    }

    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
  }
})
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
  var lazyloadImages = document.querySelectorAll("img.lazy");    
  var lazyloadThrottleTimeout;
  
  function lazyload () {
    if(lazyloadThrottleTimeout) {
      clearTimeout(lazyloadThrottleTimeout);
    }    
    
    lazyloadThrottleTimeout = setTimeout(function() {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function(img) {
            if(img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('lazy');
            }
        });
        if(lazyloadImages.length == 0) { 
          document.removeEventListener("scroll", lazyload);
          window.removeEventListener("resize", lazyload);
          window.removeEventListener("orientationChange", lazyload);
        }
    }, 20);
  }
  
  document.addEventListener("scroll", lazyload);
  window.addEventListener("resize", lazyload);
  window.addEventListener("orientationChange", lazyload);
});
</script>

   <!-- change state name on change -->
 
   <script>

$('#country').change(function() {
		var city =$('#city').val();
        var state = $('#state').val();
        var country =document.getElementById('country').value;
       
       var country_name= $('#country option:selected').html();
    //    alert(state)
        // if($('#country').val() == '91'){

        // }
        if(country_name=='INDIA' && country=='91')
        {
            $('#state').val('');
            var select_state = $('#select_state').val();
            if(select_state != ''){
                $('#state').val(select_state);
                state = $('#state').val();
            }else{
                state = $('#state').val();
            }
            $('#state').css("display","none");
            // $('#select_state').css("display","block");
            // $('#select_state_others').css("display","none");
            //    alert("test")
            $('#hide').css("display","block");
            $('#width').css("width","49%");
        }else{
            // alert(state,"ddfdf");
            $('#state').val('others');
            state = $('#state').val()
            // alert( $('#state').val());
            $('#state').css("display","block");
            // $('#select_state').css("display","none");
            $('#select_state_others').css("display","none");
            // $('#state').val('others');
            //    alert(" sjdkja sdkfj")
            $('#hide').css("display","none");
            $('#width').css("width","100%");
        
        }

        var description =$('#description').val();
		$('.smallerror').remove();
		$('#btnemasub').attr('disabled','disabled');	
		$('#btnemasub').addClass('btn_disabled');	
          if ($("#country").prop('selectedIndex') < 1){
			 $('#country').after('<small class="smallerror" id="smallerror">Please Select Your Country</small>');
			return false;
		 }
         else if (state.trim() == ''){
	      $('#state').after('<small class="smallerror" id="smallerror">Please Select Your State</small>');
	   return false;
	    }
         else if (city.trim() == ''){
	      $('#city').after('<small class="smallerror" id="smallerror">Please Select Your City</small>');
	   return false;
	    }
         else if ($("#lookingfor").prop('selectedIndex')< 1){
			 $('#lookingfor').after('<small class="smallerror" id="smallerror">Please Select What are you looking for?</small>');
             return false;
		 } 
         else if(description.trim() == '') {
			 $('#description').after('<small class="smallerror" id="smallerror">Please Enter Your Description?*</small>');

			return false;
		 } 
		 fir();
		// $('#btnemasub').removeAttr('disabled');
		// $('#btnemasub').removeClass('btn_disabled');
     
    });
	


$("#select_state").change(function(){
	var state_name = document.getElementById('select_state').value;
    if(state_name != ''){
        var name= $('#state').val(state_name);

    }else{
        var name= $('#state').val('');
    }

         var city =$('#city').val();
        var state = $('#state').val();
       
        var description =$('#description').val();
		$('.smallerror').remove();
		$('#btnemasub').attr('disabled','disabled');	
		$('#btnemasub').addClass('btn_disabled');
        
        // if(state=='')
        // {
        //     $('#btnemasub').attr('disabled','disabled');	
		//     $('#btnemasub').addClass('btn_disabled');
        // }
        // else
        // {
        //     $('#btnemasub').removeAttr('disabled');
		// 	 $('#btnemasub').removeClass('btn_disabled');
        // }
          if ($("#country").prop('selectedIndex') < 1){
			 $('#country').after('<small class="smallerror" id="smallerror">Please Select Your Country</small>');
			return false;
		 }
         else if (state.trim() == ''){
	      $('#state').after('<small class="smallerror" id="smallerror">Please Select Your State</small>');
	   return false;
	    }
         else if (city.trim() == ''){
	      $('#city').after('<small class="smallerror" id="smallerror">Please Select Your City</small>');
	   return false;
	    }
         else if ($("#lookingfor").prop('selectedIndex')< 1){
			 $('#lookingfor').after('<small class="smallerror" id="smallerror">Please Select What are you looking for?</small>');
             return false;
		 } 
         else if(description.trim() == '') {
			 $('#description').after('<small class="smallerror" id="smallerror">Please Enter Your Description?*</small>');

			return false;
		 } 
		 fir();
});

</script>
</body>

</html>