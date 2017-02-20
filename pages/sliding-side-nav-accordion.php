<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Accordion Navigation</title>
  <meta name="description" content="">
  <meta name="author" content="root" >

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
   <link rel="stylesheet" href="../css/normalize.css">  
  <link rel="stylesheet" href="../css/skeleton.css">
    <link rel="stylesheet" href="../css/base.css"> 
   <link rel="stylesheet" href="../css/simple-slideshow-styles.css">
    <link rel="stylesheet" href="../css/accordion.css">
  
         
 <!-- JavaScript
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!-- Required for Accordion -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="../images/favicon.png">

</head>
<body>
 <!-- Header - fixed top menu
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<header>
<div>
<ul class="top-bar">
  <li>	<!-- <span class="hamburger" onclick="openSideNav()">&#9776;</span> -->
     <a class="hamburger" href="#slidingSideNav">&#9776;</a>
  </li>
   <li><a href="../skel-index.html"><img class="home" src="../images/icons/home.svg" alt="Home"></a></li>
  <li><a href="gallery1.html">Gallery 1</a></li>
  <li><a href="gallery2.html">Gallery 2</a></li> 
  <li><a href="gallery3.html">Gallery 3</a></li>
  <li><a href="gallery4.html">Gallery 4</a></li>
</div>
</header>
 <!-- sliding side navigation
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <!-- The overlay -->
 <!-- Overlay content -->
<div id="slidingSideNav" class="overlay">
 <!--  <a href="javascript:void(0)" class="sideClosebtn" onclick="closeSideNav()">&times;</a> -->
   <a class="sideClosebtn" href="#">&times;</a>
  <div class="side-overlay-content">
  <!-- ACCORDION
    ================================================== -->
	<?php
	require '../library/accordion.inc'
	?>
  </div>
</div>
  

<header>
<div class="logo-header">
			<img class="logo" src="../images/logo.png">
			<h1>Skin and Bones Skeleton</h1>
					<h5>Based on <a href="http://getskeleton.com"> Skeleton - Version 2.0.4</a></h5>
			</header>
		</div><br class="clear">
<hr>

<!-- Breadcrumbs
    ================================================== -->
    <ul class="breadcrumb">
  <li><a href="../skel-index.html">Home</a></li>
  <li>Accordion Sliding Side Nav</li>
 </ul>
 <div class="container">
 <div class="main">
  		<!-- A Better Simple Slideshow Used here
    ================================================== -->
		<div class="sixteen columns">
			<div class="bss-slides num1" tabindex="1">
				<figure>
					<img src="../images/slides/skel-slide1.jpg" width="100%">
					<figcaption>
						Anterior
					</figcaption>
				</figure>
				<figure>
					<img src="../images/slides/skel-slide2.jpg" width="100%">
					<figcaption>
						Right Side
					</figcaption>
				</figure>
				<figure>
					<img src="../images/slides/skel-slide3.jpg" width="100%">
					<figcaption>
						Posterior
					</figcaption>
				</figure>
				<figure>
					<img src="../images/slides/skel-slide4.jpg" width="100%">
					<figcaption>
						Left Side
					</figcaption>
				</figure>
			</div>
		</div>
		
		<!-- slideshow  end-->
		 <hr>
    <div class="row">
      <div class="one-half column" style="margin-top: 5%">
        <h4>Basic Page</h4>
        <p>This index.html page is a placeholder with the CSS, font and favicon. It's just waiting for you to add some content! If you need some help hit up the <a href="http://www.getskeleton.com">Skeleton documentation</a>.</p>
      
      </div>
    </div>
    </div>
  </div>
  <!-- end container -->
  <hr>
	<!-- Footer Container
    ================================================== -->
	<footer>
		<div class="footer-container centertxt">
			<p><!-- Unless otherwise noted, all photography and artwork on this website is copyrighted and is not to be used without the permission of the copyright holder.<br> -->
			&copy; Copyright Holder 2017 <a href="http://getskeleton.com">www.getskeleton.com</a><br>
			All Rights Reserved</p>
		</div>
	</footer><!-- end footer container -->
  
  

	<!-- Slideshow js
================================================== -->
<!-- <script src="../js/site.js"></script> -->
<script src="../js/accordion.js"></script>
	<script src="../js/hammer.min.js">	</script><!-- for swipe support on touch interfaces -->
	<script src="../js/better-simple-slideshow.min.js">	</script> 
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
	</script>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
