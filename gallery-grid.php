<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>    
       <?php 
       $pageTitle = "Gallery - Loves, Mariessa";
       $headContent = "Gallery. Fashion portfolio photos. Loves, Mariessa.";
	   require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); 
       ?>
	</head>
	
	<body>
		<!-- MAIN_WRAPPER -->
		<div class="main-wrapper animsition">
			<!-- HEADER -->
			<header id="header">
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/navigation.php'); ?>
			</header>
			<!-- /HEADER -->

			<!-- GALLERY -->
			<div class="container">
				<div class="grid gallery" data-gutter="5" data-columns="3">

					<div class="grid-item">
						<a href="/img/ars/teal-vest.jpg" data-background="/img/ars/teal-vest-resize.jpg" data-rel="lightcase:gal" title="Custom Vest Project - The Ars Supernova"></a>
					</div>
					<div class="grid-item">
						<a href="/img/ars/green-vest.jpg" data-background="/img/ars/green-vest-resize.jpg" data-rel="lightcase:gal" title="Custom Vest Project - The Ars Supernova"></a>
					</div>
					<div class="grid-item">
						<a href="/img/ars/red-vest.jpg" data-background="/img/ars/red-vest-resize.jpg" data-rel="lightcase:gal" title="Custom Vest Project - The Ars Supernova"></a>
					</div>
					<div class="grid-item">
						<a href="/img/ars/lady-vest.jpg" data-background="/img/ars/lady-vest-resize.jpg" data-rel="lightcase:gal" title="Custom Vest Project - The Ars Supernova"></a>
					</div>
					<div class="grid-item">
						<a href="http://placehold.it/800x600" data-background="http://placehold.it/800x600" data-rel="lightcase:gal" title="Image Caption"></a>
					</div>
					<div class="grid-item">
						<a href="http://placehold.it/800x600" data-background="http://placehold.it/800x600" data-rel="lightcase:gal" title="Image Caption"></a>
					</div>
					<div class="grid-item">
						<a href="http://placehold.it/800x600" data-background="http://placehold.it/800x600" data-rel="lightcase:gal" title="Image Caption"></a>
					</div>
					<div class="grid-item">
						<a href="http://placehold.it/800x600" data-background="http://placehold.it/800x600" data-rel="lightcase:gal" title="Image Caption"></a>
					</div>
					<div class="grid-item">
						<a href="http://placehold.it/800x600" data-background="http://placehold.it/800x600" data-rel="lightcase:gal" title="Image Caption"></a>
					</div>
				</div>
			</div>		
			<!-- /GALLERY -->
		
			<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
	</body>
</html>