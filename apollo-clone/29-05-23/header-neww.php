<meta name="viewport" content="width=device-width, initial-scale=1.0">
<header>
    <style>
        html {
  scroll-behavior: smooth;
}
        /* https://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}

main {
	display: block;	
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

body {
	font-family: Constantia, "Lucida Bright", "DejaVu Serif", Georgia, serif;
}

header {
	height: 48px;
	overflow: hidden;
	background-color: #009900;	
}

header h1 {
	font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
	font-weight: bold;
	color: #fff;
	font-size: 28px;
	line-height: 48px;
	margin-left: 15px;
	float: left;	
}

header nav ul {
	display: none;	
}

.btn-menu {
	display: block;
	float: right;
	margin-top: 13px;
	margin-bottom: 2px;
	margin-right: 13px;
	border: 0;
	width: 40px;
	height: 25px;
	background-color: transparent;
	cursor: pointer;
	display: block;
	position: relative;
}

.btn-menu:focus {
	outline: 1px dotted #E0AE19;	
}

.show_menu .btn-menu:focus {
	outline: none;	
}

.btn-menu .text {
	display: block;
	text-indent: 150%;
	white-space: nowrap;
	overflow: hidden;	
}

.btn-menu .bar,
.btn-menu .bar:before,
.btn-menu .bar:after {
	display: block;
	position: absolute;
	width: 40px;
	height: 5px;
	background-color: #fff;
	/* -webkit-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out; */
}

.btn-menu .bar {
	top: 10px;
	left: 0;	
}
	
.btn-menu .bar:before {
	position: absolute;
	content: '';
	top: 10px;
	left: 0;
}

.btn-menu .bar:after {
	position: absolute;
	content: '';
	top: -10px;	
	left: 0;
}

.show .btn-menu .bar {
	background-color: transparent;	
}

.show .btn-menu .bar:before {
	top: 0;
	-webkit-transform: rotate(45deg);
	transform: rotate(45deg);	
}

.show .btn-menu .bar:after {
	top: 0;
	-webkit-transform: rotate(-45deg);
	transform: rotate(-45deg);	
}

.mobile-nav {
	height: 0;
	overflow: hidden;
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	background-color: #009900;
	border: 1px solid #005500;
	border-top: none;
	border-bottom: none;
	/* -webkit-transition: height 0.3s ease-in-out;
	transition: height 0.3s ease-in-out;	 */
}

.mobile-nav a {
	text-decoration: none;
	color: #fff;
	font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
	font-size: 18px;
	text-indent: 10px;
	display: block;
	line-height: 42px;
	border-bottom: 1px solid #005500;	
}

.mobile-nav a:focus,
.mobile-nav a:hover,
.mobile-nav a:active {
	background-color: #004301;	
}

.mobile-nav li:first-child a {
	border-top: 1px solid #005500;	
}

.show .mobile-nav {
	height: auto;
}

.mobile-nav .dd + ul {
	height: 0;
	overflow: hidden;
	background-color: #093CB3;
	/* -webkit-transition: height 0.3s ease-in-out;
	transition: height 0.3s ease-in-out;	 */
    transition:.2s;
}

.mobile-nav .dd + ul a {
	text-indent: 30px;	
}

.mobile-nav .dd + ul a:focus,
.mobile-nav .dd + ul a:hover,
.mobile-nav .dd + ul a:active {
	background-color: #001E66;	
}

.mobile-nav .dd:after {
	content: '\25BC';
	margin-left: 5px;
	font-size: 12px;	
}

.mobile-nav .dd-show + ul {
	height: auto;	
}

main {
	padding: 15px;
	position: relative;	
}

article h1 {
	font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
	font-size: 24px;
	font-weight: bold;
	margin-bottom: 16px;	
}

article p {
	line-height: 1.2;
	font-size: 18px;	
}

    </style>
<h1>Mobile Menu</h1>
<nav>
<button class="btn-menu">
  <span class="bar"></span>
  <span class="text">Menu</span>
</button>
<ul>
	<li><a href="#">Home</a></li>
	<li><a href="#" class="dd dd-01">About</a>
    	<ul class="dd-01-ul">
        	<li><a href="#">One</a></li>
        <li><a href="#">Two</a></li>
        <li><a href="#">Three</a></li>
        <li><a href="#">Four</a></li>
        <li><a href="#">Five</a></li>
        <li><a href="#">Six</a></li>
     </ul>
</li>
	<li><a href="#" class="dd dd-02">Services</a>
    	<ul class="dd-02-ul">
    		<li><a href="#">Lorem</a></li>
    		<li><a href="#">Fuga</a></li>
    		<li><a href="#">Veniam</a></li>
    		<li><a href="#">Amet</a></li>
    		<li><a href="#">Repudiandae</a></li>
    	</ul>
    </li>
	<li><a href="#">Blog</a></li>
	<li><a href="#">Contact</a></li>
</ul>
</nav>
</header>
<main role="main">
<article>
<h1>Mobile Menu - With Sub Menu</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, ipsum, pariatur, debitis, minima sit perferendis totam illum eos ea officiis assumenda placeat laudantium accusamus repudiandae asperiores nam eveniet nihil praesentium necessitatibus nemo iste aspernatur adipisci sapiente soluta ut at mollitia voluptate dignissimos delectus reprehenderit distinctio exercitationem quisquam ex explicabo voluptatum accusantium dolorem. Eligendi, magnam, deleniti, temporibus sequi tenetur beatae laudantium quos a ut aperiam aliquam earum praesentium eveniet doloremque similique. Maxime, et voluptatem nemo doloribus illo voluptates tempore dolorum ducimus veniam at. Doloremque, voluptas, magnam, repellendus nostrum ad rerum voluptatum laborum cum perferendis eaque suscipit fugit libero corporis laudantium perspiciatis.</p>
</article>
</main>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script scr="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    var menu01 = new MobileMenu;

menu01.init();

function MobileMenu(){
	
	// set variables
	var $body = $('body');
	var $btnMenu = $('.btn-menu');
	// get the nav li elements from the 
	// desktop menu
	var navLiHTML = $('header nav ul').html();
	// create the mobile menu from the desktop li elements...
	var mobileNavHTML = $('<nav class="mobile-nav"><ul>' + navLiHTML  + '</ul></nav>');
	
	// Add the mobile menu to the main element...
	$('main').prepend(mobileNavHTML);
	
	// select the newly created mobile menu
	var $mobileNav = $('.mobile-nav');
	
	// select all the "a" links that have a 
	// sub menu
	var $dd = $('.mobile-nav .dd');
	
	// initialization method for the
	// MobileMenu class	
	this.init = function(){
		
		// measure height of menu in open state
		// then close the menu
		$body.addClass('show');
		var mobileNavOriginalHeight = $mobileNav.height();
		var mobileNavHeight = $mobileNav.height();
		$body.removeClass('show');
		
		// Open all the menus and the sub menus 
		// and measure the height of each
		// sub menu then close all the 
		// sub menus
		$body.addClass('show');
		$('.mobile-nav .dd').addClass('dd-show');
		// Loop through the sub menus add get the height
		// of the sub menus and set a data attribute to 
		// that height
		$('.mobile-nav .dd').each(function(){
			var theHeight = $(this).next().height();
			$(this).next().attr('data-height', theHeight);	
		}); // end each...
		// Close the menu and the sub menus
		$body.removeClass('show');
		$('.mobile-nav .dd').removeClass('dd-show');

		// Click event handler for the mobile menu
		$btnMenu.click(function(){
			// check if body element has the
			// class show
			if($body.hasClass('show')){
				// menu is open...
				// remove any heights set on the mobile nav
				$mobileNav.removeAttr('style');
				// remove the "show" class from the body
				// element
				$body.removeClass('show');
				// remove any heights set on the sub
				// menus
				$dd.next().removeAttr('style');
				// remove the "dd-show" class from the
				// links that have sub menu items 				
				$dd.removeClass('dd-show');	
			}else{
				// menu is closed...
				// set height of mobile menu to the open height
				$mobileNav.css('height', mobileNavOriginalHeight);
				// add the class "show" to the body element
				$body.addClass('show');	
			} // end if menu is open...
				
		}); // end mobile menu click event handler
				
		$dd.click(function(){
			// check if this sub menu link
			// is open
			if($(this).hasClass('dd-show')){
				// this sub menu is open...
				// get current height of mobile menu
				mobileNavHeight = $mobileNav.outerHeight();
				// set new height of mobile menu by taking the
				// existing height of the mobile menu and
				// subtracting the height of the sub menu that
				// was clicked on...
				$mobileNav.css('height', (mobileNavHeight - $(this).next().data('height')));
				// remove the height style that was applied to this
				// sub menu
				$(this).next().removeAttr('style');
				// remove the "dd-show" class from the sub menu link
				// that was clicked on
				$(this).removeClass('dd-show');	
			}else{
				// this sub menu is closed
				// remove any height styles applied
				// to any sub menus
				$dd.next().removeAttr('style');
				// remove the "dd-show" class from
				// any sub menu link elements
				$dd.removeClass('dd-show');
				// set the new height of the 
				// mobile menu by adding the
				// height of mobile navs orginal 
				// open state height to the height
				// of the sub menu item that was
				// clicked on
				$mobileNav.css('height', (mobileNavOriginalHeight + $(this).next().data('height')));
				// set the height of the sub menu that
				// was clicked on
				$(this).next().css('height', $(this).next().data('height'))
				// add the "dd-show" class to
				// sub menu link that was clicked on...
				$(this).addClass('dd-show');
			} // end if sub menu is open	
		}) // end sub menu click event handler

	} // end init()
	
} // end MobileMenu Constructor
</script>
