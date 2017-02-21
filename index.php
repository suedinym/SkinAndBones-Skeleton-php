
<?php require 'library/basic-top.inc' ?> 
<title>SkinAndBones | Skeleton</title> 
<?php require 'library/basic-csslinks-etc.inc' ?> 
<?php require 'library/top-bar-static-sideNav.inc' ?>
	
	<!-- sliding side navigation
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<!-- The overlay -->
	<!-- Overlay content -->
	<div class="overlay" id="slidingSideNav">
	<!-- 	<a class="sideClosebtn" href="javascript:void(0)" onclick="closeSideNav()">&times;</a> -->   <a class="sideClosebtn" href="#">&times;</a>
		<div class="side-overlay-content">
		
<?php  require 'library/credits-accordion.inc'  ?>  
</div>  </div>  <?php  require 'library/logo-header.inc'  ?>  
<!-- Horizontal Navigation  ================================================== -->  
<nav>  
<?php  require 'library/horiz-nav-landing.inc'  ?> 
 <?php  require 'library/horiz-icons.inc'  ?>
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
		
<?php require 'library/slideshow.inc'	?>
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
<?php require 'library/footer.inc' ?> 
<?php require 'library/login.inc' ?> 
<?php require 'library/basic-bottom.inc' ?>