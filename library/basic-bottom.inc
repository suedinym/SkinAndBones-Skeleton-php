	<!-- Slideshow js
================================================== -->
<!-- 	<script src="js/site.js">
	</script>  -->
	<script src="<?php print $path_to_root; ?>js/accordion.js">
	</script> 
	<script src="<?php print $path_to_root; ?>js/hammer.min.js">
	</script><!-- for swipe support on touch interfaces -->
	 
	<script src="<?php print $path_to_root; ?>js/better-simple-slideshow.min.js">
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