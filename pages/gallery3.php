<?php $path_to_root = '../';
require $path_to_root . 'library/basic-top.inc' ;?> 
<title>3 Image Gallery | Skeleton</title> 
<?php require $path_to_root . 'library/basic-csslinks-etc.inc';
require $path_to_root . 'library/basic-jq-links.inc';
require $path_to_root . 'library/basic-jslinks-etc.inc'; ?>  
<!-- don't comment out above here -->

<?php require $path_to_root . 'library/top-bar.inc'; ?>
		<hr>
		<div class="container">
			<!-- columns should be the immediate child of a .row -->
			<div class="row">
			
<?php require $path_to_root . 'library/gal3-modal.inc'; ?>
				
				<div class="one-third column view-detail"><!-- Modal starts here
    ================================================== -->
				<!-- modal two -->
				<h3 class="modal-head centertxt">Skull</h3><!-- trigger modal --><a href="#openModal2">
				<i class="open-modal-gal3  fa fa-expand fa-lg"></i>
				</a> <img class="gal3" src="../images/gallery/image2.png"></div><!-- The Modal -->
				<!-- note: id is anchor  -->
				<div class="modalDialog" id="openModal2">
					<div><!-- The Close Button -->
					<a class="modal-close" href="#close">&times;</a>
					<h2>Alas, poor Yorick!</h2><img class="skel-gal" alt="" src="../images/gallery/image2.png"></div>
				</div><!-- end modal two -->
				<div class="one-third column view-detail"><!-- Modal starts here
    ================================================== -->
				<!-- modal three -->
				<h3 class="modal-head centertxt">Skull</h3><!-- trigger modal --><a href="#openModal3">
				<i class="open-modal-gal3  fa fa-expand fa-lg"></i>
				</a> <img class="gal3" src="../images/gallery/image1.png"></div><!-- The Modal -->
				<!-- note: id is anchor  -->
				<div class="modalDialog" id="openModal3">
					<div><!-- The Close Button -->
					<a class="modal-close" href="#close">&times;</a>
					<h2>Alas, poor Yorick!</h2><img  class="skel-gal" alt="" src="../images/gallery/image1.png"></div>
				</div><!-- end modal three -->
			</div><!-- end row one -->
			
			<!-- ROW TWO !!! -->
			<div class="row">
				<div class="one-third column view-detail">
				<!-- Modal starts here
    ================================================== -->
				<h3 class="modal-head centertxt">Hand</h3><!-- modal four --><a href="#openModal4"><i class="open-modal-gal3  fa fa-expand fa-lg"></i></a> <img class="gal3" src="../images/gallery/image4.png"></div><!-- The Modal -->
				<!-- note: id is anchor  -->
				<div class="modalDialog" id="openModal4">
					<div><!-- The Close Button -->
					<a class="modal-close" href="#close">&times;</a>
					<h2>Hand Detail</h2><img class="skel-gal" alt="" src="../images/gallery/image4.png"></div>
				</div><!-- end modal four -->
				<div class="one-third column view-detail"><!-- Modal starts here
    ================================================== -->
			
				<h3 class="modal-head centertxt">Feet</h3>
				<!-- modal five --><a href="#openModal5"><i class="open-modal-gal3  fa fa-expand fa-lg"></i></a> <img class="gal3" src="../images/gallery/image6.png"></div><!-- The Modal -->
				<!-- note: id is anchor  -->
				<div class="modalDialog" id="openModal5">
					<div><!-- The Close Button -->
					<a class="modal-close" href="#close">&times;</a>
					<h2>Feet Detail</h2><img class="skel-gal" alt="" src="../images/gallery/image6.png"></div>
				</div><!-- end modal five -->
				<div class="one-third column view-detail"><!-- Modal starts here
    ================================================== -->
				<!-- modal six -->
				<h3 class="modal-head centertxt">Hand</h3>
				<a href="#openModal6"><i class="open-modal-gal3  fa fa-expand fa-lg"></i></a> <img class="gal3" src="../images/gallery/image5.png"></div><!-- The Modal -->
				<!-- note: id is anchor  -->
				<div class="modalDialog" id="openModal6">
					<div><!-- The Close Button -->
					<a class="modal-close" href="#close">&times;</a>
					<h2>Hand Detail</h2><img class="skel-gal" alt="" src="../images/gallery/image5.png"></div>
				</div><!-- end modal six -->
			</div><!-- end row two -->
		</div>
	 <!-- end container --> 
  <?php require $path_to_root . 'library/footer.inc'; 
require $path_to_root . 'library/basic-bottom.inc';?>