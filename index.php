<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta charset="utf-8">
	<title>SkinAndBones | Skeleton</title>
	<meta content="" name="description">
	<meta content="sue" name="author"><!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta content="width=device-width, initial-scale=1" name="viewport"><!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css"><!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link href="css/normalize.css" rel="stylesheet">
	<link href="css/skeleton.css" rel="stylesheet">
	<link href="css/base.css" rel="stylesheet">
	<link href="css/multiple-modal.css" rel="stylesheet">
	<link href="css/simple-slideshow-styles.css" rel="stylesheet">
	<link href="css/accordion.css" rel="stylesheet"><!--  Font Awesome by Dave Gandy - http://fontawesome.io -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"><!-- JavaScript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<!-- Required for Accordion -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js">
	</script><!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link href="images/favicon.png" rel="icon" type="image/png">
</head>
<body>
	<!-- Header - fixed top menu
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<header>
		<div>
			<ul class="top-bar">
			<li class="right">
		 	<a href="#openLoginModal"><img class="bones" src="images/icons/bones.png" alt=""></a> 
				<!--	<a href="#openLoginModal"><i class="fa fa-user"></i></a> -->
				</li>
				<!-- <li><span class="hamburger" onclick="openSideNav()">&#9776;</span></li> -->
				 <a  class="hamburger" href="#slidingSideNav">&#9776;</a> 
				<li>
					<a href="index.html"><img alt="Home" class="home" src="images/icons/home.svg"></a>
				</li>
				<li>
					<a href="pages/gallery1.html">Gallery 1</a>
				</li>
				<li>
					<a href="pages/gallery2.html">Gallery 2</a>
				</li>
				<li>
					<a href="pages/gallery3.html">Gallery 3</a>
				</li>
				<li>
					<a href="pages/gallery4.html">Gallery 4</a>
				</li>
				<li>
					<a href="pages/faq.html">FAQ page</a>
				</li>
			</ul>
		</div>
	</header><!-- sliding side navigation
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<!-- The overlay -->
	<!-- Overlay content -->
	<div class="overlay" id="slidingSideNav">
	<!-- 	<a class="sideClosebtn" href="javascript:void(0)" onclick="closeSideNav()">&times;</a> -->   <a class="sideClosebtn" href="#">&times;</a>
		<div class="side-overlay-content">
			<!-- ACCORDION
    ================================================== -->
			<h1 id="accordion">Credits</h1>
			<aside class="accordion">
				<h1>Framework</h1>
				<div>
					<ul>
						<li>
							<a href="http://getskeleton.com/" target="blank">Get Skeleton</a>
						</li>
						<li>
							<a href="https://github.com/dhg/Skeleton" target="blank">Skeleton on Github</a>
						</li>
					</ul>
				</div>
				<h1>Navigation</h1>
				<div>
					<h2>Vertical</h2>
					<div>
						<h3>Accordion</h3>
						<div>
							<ul>
								<li>
									<a href="http://codepen.io/rbobrowski/pen/likvA" target="blank">Codepen - Multi-level Accordion</a>
								</li>
									<li>
									<a href="http://codepen.io/suedinym/pen/ggewjb" target="blank">Responsive Sliding Accordion Side Nav </a>
								</li>
							</ul>
						</div>
						<h3>Sliding Overlay</h3>
							<div>
							<ul>
								<li>
									<a href="http://www.w3schools.com/howto/howto_js_sidenav.asp" target="blank">W3schools -How-to</a>
								</li>
								<li>
									<a href="http://codepen.io/suedinym/pen/pRmQPO" target="blank">CSS Sliding Side Navagation</a>
								</li>
								<li>
									<a href="http://codepen.io/suedinym/pen/QdRZJg" target="blank">CSS Sliding Top Navagation</a>
								</li>
							</ul>
						</div>
						<h3>js Media Query How-to</h3>
						<div>
							<ul>
								<li>
									<a href="http://krasimirtsonev.com/blog/article/Using-media-queries-in-JavaScript-AbsurdJS-edition" target="blank">Krasimir Tsonev -blog post</a>
								</li>
								<li>
									<a href="https://www.sitepoint.com/javascript-media-queries/" target="blank">Article by Craig Buckler</a>
								</li>
								<li>
									<a href="http://blogs.sitepointstatic.com/examples/tech/jsmediaqueries/index.html" target="blank">js Media Query Demo</a>
								</li>
							</ul>
						</div>
					</div>
					<h2>Horizontal</h2>
					<div>
						<h3>W3schools - How-to</h3>
						<div>
							<ul>
								<li>
									<a href="http://www.w3schools.com/howto/howto_css_fixed_menu.asp" target="blank">Fixed Top Menu</a>
								</li>
								<li>
									<a href="http://www.w3schools.com/howto/howto_js_fullscreen_overlay.asp" target="blank">Fullscreen Navigation</a>
								</li>
								<li>
									<a href="http://www.w3schools.com/howto/howto_css_icon_bar.asp" target="blank">Icon Bar</a>
								</li>
							</ul>
						</div>
					
						<h3>Responsive Split Nav Bar</h3>
						<div>
							<ul>
								<li>
									<a href="https://codepen.io/suedinym/pen/ygvjzo/" target="blank">Eight Part</a>
								</li>
								<li>
									<a href="http://codepen.io/suedinym/pen/EZQLLe" target="blank">Six Part</a>
								</li>
							
							</ul>
						</div>
								<h2>Accordion FAQ</h2>
						<div>
							<ul>
								<li>
									<a href="https://tympanus.net/codrops/2012/02/21/accordion-with-css3/" target="blank">Codrops CSS3 Radio Button Accordion </a>
								</li>
								<li>
									<a href="https://tympanus.net/codrops/licensing/" target="blank">Codrops Licensing</a>
								</li>
							
							</ul>
						</div>
					</div>
				</div>
				<h1>Photo Display</h1>
				<div>
					<h2>Better Simple Slideshow</h2>
					<div>
						<ul>
							<li>
								<a href="http://leemark.github.io/better-simple-slideshow/" target="blank">Slideshow Demo</a>
							</li>
							<li>
								<a href="https://github.com/leemark/better-simple-slideshow" target="blank">Slideshow on Github</a>
							</li>
							<li>
								<a href="http://hammerjs.github.io/">Hammer js</a>
							</li>
						</ul>
					</div>
					<h2>Modal How-to</h2>
					<div>
						<ul>
							<li>
								<a href="http://www.webdesignerdepot.com/2012/10/creating-a-modal-window-with-html5-and-css3" target="blank">Article by Keenan Payne</a>
							</li>
							<li>
								<a href="http://jsfiddle.net/3Vykc/" target="blank">Multiple Modal</a>
							</li>
							<li>
								<a href="http://codepen.io/suedinym/pen/MJXOqd" target="blank">Modal Login</a>
							</li>
						</ul>
					</div>
				</div>
				<h1>Fonts and Icons</h1>
				<div>
					<ul>
						<li>
							<a href="http://fontawesome.io/" target="blank">Font Awesome</a>
						</li>
						<li>
							<a href="https://www.fontsquirrel.com/fonts/heydings-common-icons" target="blank">Heydings Icons</a>
						</li>
					</ul>
				</div>
				<h1>Images</h1>
				<p>Public Domain skeleton Images -Dover images. Background images and icons made in GIMP or Inkscape.</p>
			</aside>
		</div>
	</div>
	<div class="logo-header">
		<img class="logo" src="images/logo5.png">
		<h1>Skin and Bones Skeleton</h1>
		<h5>Based on <a href="http://getskeleton.com">Skeleton - Version 2.0.4</a></h5>
	</div><br class="clear">
	<!-- Horizontal Navigation
    ================================================== -->
	<nav>
		<div class="main-nav">
			<ul class="nav-horiz-a">
				<li id="active" class="nav-six">
					<a href="index.html">Home</a>
				</li>
				<li class="nav-six">
					<a href="pages/nav8.html">8 Tab Nav</a>
				</li>
				<li class="nav-six">
					<a href="pages/nav6.html">6 Tab Nav</a>
				</li>
			</ul>
			<ul class="nav-horiz-b">
				<li class="nav-six">
					<a href="pages/sliding-top-nav.html">Top Nav</a>
				</li>
				<li class="nav-six">
					<a href="pages/sliding-side-nav.html">Side Nav</a>
				</li>
			<li class="nav-six">
					<a href="pages/sliding-side-nav-accoridon.html">Accordion</a>
				</li>
			</ul>
		</div><!-- Share icons
    ================================================== -->
		<div class="find-us-bar">
			<ul>
				<li>
					<a href="https://www.facebook.com" target="blank"><i class="fa fa-facebook-square"></i></a>
				</li>
				<li>
					<a href="https://twitter.com/" target="blank"><i class="fa fa-twitter-square"></i></a>
				</li>
				<li>
					<a href="https://www.pinterest.com/" target="blank"><i class="fa fa-pinterest-square"></i></a>
				</li>
				<li>
					<a href="https://www.linkedin.com/" target="blank"><i class=" fa fa-linkedin-square"></i></a>
				</li>
				<li>
					<a href="https://github.com/" target="blank"><i class="fa fa-github-square"></i></a>
				</li>
				<li>
					<a href="https://www.instagram.com/" target="blank"><i class="fa fa-instagram"></i></a>
				</li>
			</ul>
		</div>
	</nav>
	<hr>
	<div class="container">
		<div class="main">
		<div class="row">
		<div class="one-third column">
					<h5>SkinAndBones-Skeleton</h5>
					<p>SkinAndBones-Skeleton is a template based on the Skeleton boilerplate. It was developed to flesh out the basic boilerplate with common features of a basic website, such as a slideshow and navigation, turning it into more of a UI framework, for use in quickly comping up a functional website.</p>

				</div>
			<!-- A Better Simple Slideshow Used here
    ================================================== -->
			<div class="one-third column">
			<p>The basic Skeleton boilerplate is lightweight and simple. Skin And Bones Skeleton, not so much.</p>
		
				<div class="bss-slides num1" tabindex="1">
					<figure>
						<img src="images/slides/skel-slide1.jpg" width="100%">
						<figcaption>
							Anterior
						</figcaption>
					</figure>
					<figure>
						<img src="images/slides/skel-slide2.jpg" width="100%">
						<figcaption>
							Right Side
						</figcaption>
					</figure>
					<figure>
						<img src="images/slides/skel-slide3.jpg" width="100%">
						<figcaption>
							Posterior
						</figcaption>
					</figure>
					<figure>
						<img src="images/slides/skel-slide4.jpg" width="100%">
						<figcaption>
							Left Side
						</figcaption>
					</figure>
				</div>
					<p>For links to more information on various added features, open the side navigation using the hamburger icon.</p>
			</div><!-- slideshow  end-->
				<div class="one-third column">
					<h5>Additions:</h5>
				
				<ul>
				<li>A Better Simple Slideshow</li>
				<li>Two arrangements of horizontal navigation</li>
				<li>Additional folders to aid in organization</li>
				<li>Sliding top navigation</li>
				<li>Gallery pages with a css modal</li>
				<li>The grid and basic style codes are seperated</li>
				<li>Side navigation with and without multilevel accordion menus</li>
				
				</ul>
				</div>
			</div>
		</div>
	</div><!-- end container -->
	<hr>
	<!-- Footer Container
    ================================================== -->
	<footer>
		<div class="footer-container centertxt">
			<p><!-- Unless otherwise noted, all photography and artwork on this website is copyrighted and is not to be used without the permission of the copyright holder.<br> -->
			 &copy; Copyright Holder 2017 <a href="http://getskeleton.com">www.getskeleton.com</a><br>
			All Rights Reserved
			<br>
			<a href="credits.html" target="blank">Credits</a>
			</p>
		</div>
	</footer><!-- end footer container -->
	<!-- login Modal starts here    ================================================== -->
<div class="modalDialog" id="openLoginModal">
	<div class="login-container">
		<div class="img-container"><img alt="Avatar" class="login-avatar" src="images/skull-av.png"></div>
		<div class="login-info">
			<form action="">
				<label><b>Username</b></label> <input name="uname" placeholder="Enter Username" required="" type="text">
				<label><b>Password</b></label> <input name="psw" placeholder="Enter Password" required="" type="password">
				<button class="login" type="submit">Login</button>
				<div class="login-bottom-container">
					<span class="psw">Forgot <a href="#">password?</a> &nbsp; &#124; &nbsp; Create <a href="#">Account</a></span>
				</div><a class="login-modal-close" href="#close">Cancel</a> <input checked="checked" type="checkbox"> Remember me
			</form>
		</div>
	</div>
</div>
	<!-- Slideshow js
================================================== -->
<!-- 	<script src="js/site.js">
	</script>  -->
	<script src="js/accordion.js">
	</script> 
	<script src="js/hammer.min.js">
	</script><!-- for swipe support on touch interfaces -->
	 
	<script src="js/better-simple-slideshow.min.js">
	</script> 
	<script>
	   var opts = {
	      auto : {
	          speed : 3500, 
	          pauseOnHover : true
	      },
	      fullScreen : false, 
	      swipe : true
	   };
	   makeBSS('.num1', opts);

	   var opts2 = {
	      auto : false,
	      fullScreen : true,
	      swipe : true
	   };
	   makeBSS('.num2', opts2);
	</script> <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>