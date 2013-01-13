<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<?php
		$site_name = 'Atolle';
		$site_root = 'http://www.atolle.fr';
		$site_keywords = array($site_name, $site_root);
		$site_author = 'sbierti';
		include('../../languages/fr/lang.php');
	?>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Atolle</title>
	<meta name="description" content="">
	<meta name="author" content="itaco, sbierti">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="../../stylesheets/base.css">
	<link rel="stylesheet" href="../../stylesheets/skeleton.css">
	<link rel="stylesheet" href="../../stylesheets/layout.css">
	<link rel="stylesheet" href="../../stylesheets/personalized.css">
	<link href="../../royalslider/royalslider.css" rel="stylesheet">

    <script  src="../../royalslider/jquery-1.8.0.min.js"></script>
    <script src="../../royalslider/jquery.royalslider.min.js"></script>

    <script src="../../preview-assets/js/highlight.pack.js"></script>
    <script src="../../preview-assets/js/jquery-ui-1.8.22.custom.min.js"></script>
    <script> hljs.initHighlightingOnLoad();</script>


	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/giuman_favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	<!-- preview-related stylesheets -->
    <link href="../../preview-assets/css/reset.css" rel="stylesheet">
    <link href="../../preview-assets/css/grid.css" rel="stylesheet">
    <link href="../../preview-assets/css/smoothness/jquery-ui-1.8.22.custom.css" rel="stylesheet">
    <link href="../../preview-assets/css/github.css" rel="stylesheet">

    <link href="../../royalslider/default/rs-default.css" rel="stylesheet">
	<link href="../../preview-assets/css/main.css" rel="stylesheet">

    <!-- slider stylesheets -->
    
     <style type="text/css">
     	#gallery-2 {
		  width: 100%;
		}
     </style>

</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

  <div class="wrap topbar"><!-- Start Wrap Tobar -->
  </div><!-- End Wrap Topbar -->

  <div class="wrap topheader"><!-- Start Wrap TopHeader -->
	<div class="container">
		<div class="three columns social">
			<a class="socialfade logos" href="http://www.atolle.fr" title="atolle"><img src="../../images/atolle_logo_h.png" alt="our logo"></a>
		</div>

		<div class="thirteen columns social righty">
			<a class="navlinks" href="../../savoir.php" title="savoir">savoir</a>
			<a class="navlinks" href="../../projets.php" title="projets">projets</a>
			<a class="navlinks" href="../../contacts.php" title="contacts">contacts</a>
			<a class="navlinks" href="../../links.php" title="links">links</a>
		</div>
	</div><!-- End Container -->
  </div><!-- End Wrap TopHeader -->

  <div class="wrap seperateline"><!-- Start Wrap SeperateLine -->
	<div class="container">

		<div class="sixteen columns sepline">


		</div>

	</div><!-- End Container -->
  </div><!-- End Wrap SeperateLine -->

  <div id="contents4all"><!-- Start Wrap container4all -->
  	<div class="container">
		<div class="sixteen columns">
	        
			<?php 
				$projet_nom = 'beauliu_sur_mer';
				$attachments = array('1.jpg','2.jpg','3.jpg','4.jpg','5.jpg');
				$description = 'Villa Beaulieu Sur Mer';
				$long = array('Rénovation d\'une villa précieuse.','Beailieu Sur Mer - France','2005','construction de tous les systèmes de climatisation, d\'électricité et de vidéosurveillance.');
				include '../wrapper/struct.php';
			?>

		</div>  
	</div>
  </div><!-- End contents4all -->

  <div class="wrap mainseperateline"><!-- Start Wrap MainSeperateLine -->
	<div class="container">

		<div class="sixteen columns mainsepline">


		</div>

	</div><!-- End Container -->
  </div><!-- End Wrap MainSeperateLine -->


      <div class="wrap lastfooterbody"><!-- Start Wrap LastFooterBody -->
	  <div class="container">

      <div class="sixteen columns sepline">
      	<p class="three column alpha socialized">
      		<a href="#"><img class="socialicons" src="../../images/glyfacebook.png"/></a>
      		<a href="#"><img class="socialicons" src="../../images/glytwitter.png"/></a>
      		<a href="#"><img class="socialicons" src="../../images/glylinked.png"/></a>
      	</p>
      	<div class="offset-by-eleven">
      		<p class="copyrightcol five columns omega">&copy; 2012-2013 Giuman. All Rights Reserved.</p>
      	</div>
      </div>

	</div><!-- End Container -->
  </div><!-- End Wrap LastFooterBody -->
  


	<!-- JS
	================================================== -->
	<script src="../../javascripts/tabs.js"></script>
	<script src="../../javascripts/jquery.tipsy.js"></script>
	<script src="../../javascripts/custom_tipsy.js"></script>
	
	<script type="text/javascript">
	$('a[data-rel]').each(function() {
    $(this).attr('rel', $(this).data('rel'));
    });
	</script>
	
	<script id="addJS" type="text/javascript">
		jQuery(document).ready(function($) {
		  $('#gallery-1').royalSlider({
		    fullscreen: {
		      enabled: true,
		      nativeFS: true
		    },
		    controlNavigation: 'thumbnails',
		    //autoScaleSlider: true, 
		    //autoScaleSliderWidth: 960,     
		    //autoScaleSliderHeight: 850,
		    loop: false,
		    numImagesToPreload:4,
		    arrowsNavAutohide: true,
		    arrowsNavHideOnTouch: true,
		    keyboardNavEnabled: true
		  });
		});
	</script>

<!-- End Document
================================================== -->
</body>
</html>