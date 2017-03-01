<?php $path_to_root = '../';
require $path_to_root . 'library/basic-top.inc' ; ?>
<title>Top Nav | Skeleton</title> 
<?php require $path_to_root . 'library/basic-csslinks-etc.inc';
require $path_to_root . 'library/basic-jq-links.inc';
require $path_to_root . 'library/basic-jslinks-etc.inc';  
 require $path_to_root . 'library/top-bar-static-topNav.inc' ; ?>

 <!-- sliding top navigation
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div id="slidingTopNav" class="overlay">
  
  <div class="top-overlay-content">
<?php require $path_to_root . '/library/overlay-content.inc'   ; ?>
  <!--   <a href="javascript:void(0)" class="topClosebtn" onclick="closeTopNav()">&times;</a> -->
    <a class="topClosebtn" href="#">&times;</a>
  
  </div>
</div>
<header>
<?php  require $path_to_root . 'library/logo-header.inc'  ; ?> 
<hr>
<!-- Breadcrumbs
    ================================================== -->
    <ul class="breadcrumb">
  <li><a href="../skel-index.html">Home</a></li>
  <li>Sliding Top Nav</li>
 </ul>
<div class="container">
 <div class="main">
  		<!-- A Better Simple Slideshow Used here
    ================================================== -->
		<div class="sixteen columns">
<?php require $path_to_root . 'library/slideshow.inc'	; ?>
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
 <?php require $path_to_root . 'library/footer.inc' ; 
 require $path_to_root . 'library/login.inc' ; ?> 
<!-- don't comment out below here -->
<?php require $path_to_root . 'library/basic-bottom.inc' ; ?>
