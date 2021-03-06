<?php $path_to_root = '../';
require $path_to_root . 'library/basic-top.inc' ;?>
  <title>FAQ Page</title>
<?php require $path_to_root . 'library/basic-csslinks-etc.inc';
require $path_to_root . 'library/basic-jq-links.inc';?>

	<script>
	/*For local link TO radio accordion from css overlay -getting the hash doesn't work, because the overlay target is a hash and becomes the default  url*/
jQuery(document).ready(function() {

$('.open-local-faq').click(function(){
 // get the #section from the anchor clicked on.
var href = $(this).attr('href');
$(this).prop("hash");
    // open accordion
     $(href).prop("checked", true);
         //scroll
   var accordionTop =  $(hash).closest('section');
   $('html, body').animate({
            scrollTop: $(accordionTop).offset().top
       }, 500);
     });

	//for external Link to accordion -external links are on sliding-side-nav-accordion page
    var hash = window.location.hash; 
      $(hash).prop("checked", true);
    var accordionTop =  $(hash).closest('section');
   $('html, body').animate({
            scrollTop: $(accordionTop).offset().top
        }, 500);
});

</script> 
<?php require $path_to_root . 'library/basic-jslinks-etc.inc'; 
 require $path_to_root . 'library/top-bar.inc' ;?>


  

<header>
<div class="logo-header" >

			<img class="logo" src="../images/logo.png">
			<h1 >Skin and Bones Skeleton</h1>
					<h5>Based on <a href="http://getskeleton.com"> Skeleton - Version 2.0.4</a></h5>
			</header>
		</div><br class="clear">
		 <!-- Faq same page links
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  	<div  class="faq-links">
  
				<ul class="faq-a">
					<li>
						<a class="open-local-faq" href="#ac-1">FAQ 1</a>
					</li>
					<li>
						<a class="open-local-faq" href="#ac-2">FAQ 2</a>
					</li>
					<li>
						<a class="open-local-faq"  href="#ac-3">FAQ 3</a>
					</li>
					<li>
						<a class="open-local-faq"  href="#ac-4">FAQ 4</a>
					</li>
					</ul>
					<ul class="faq-b">
						<li>
						<a class="open-local-faq" href="#ac-5">FAQ 5</a>
					</li>
					<li>
						<a class="open-local-faq" href="#ac-6">FAQ 6</a>
					</li>
					<li>
						<a class="open-local-faq"  href="#ac-7">FAQ 7</a>
					</li>
					<li>
						<a class="open-local-faq"  href="#ac-8">FAQ 8</a>
					</li>
				</ul>
			</div>
<hr>


 
 <div class="container">
 <div class="main">
 

   <div class="row">		
   <!-- Accordion Faq
    ================================================== -->
		<div class="sixteen columns">
	<?php
	 require $path_to_root .'library/faq-accordion.inc'
	;?>

		</div>
		</div>
    </div>
  </div>
  <!-- end container --> 
  <?php require $path_to_root . 'library/footer.inc'; 
require $path_to_root . 'library/basic-bottom.inc';?>