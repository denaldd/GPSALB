<?php 
include '../../../DataBase/DB.php';
include '../../../functions/Login.php';
require_once ('../../functions/setOnline.php');
include 'getValues.php';
$values = getValue::values();
$photos = getValue::getPhotos();
LoggedIn::isLoggedIN();
$params = WhoIsLoggedIn::whoislogged();
$user_id = $params[0];
$firstname = $params[1];
$lastname = $params[2];
$user_mail = $params[3];
$date_registered = $params[4];
$user_adress = $params[5];
$user_last_login = $params[6];
   if (!$user_id) {
      die('Module name is missing or incorrect. Please check the module name.');
   }
?>

<html lang = "en">
   <head>
      <title>Admin GPS</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel = "stylesheet" href = "https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">
      <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
      <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
      <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
      <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>
      <script src = "https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/ngprogress/1.1.3/ngProgress.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-cookies.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-strap/2.3.12/modules/tooltip.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/allmighty-autocomplete/1.0.140706/autocomplete.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>
      <script src="//cdn.jsdelivr.net/angular.chartjs/latest/angular-chart.min.js"></script>
      <script src="../../libraries/angular-google-maps.js"></script>
      <link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <script src="../../../functions/admin_functions.js"></script>
      <script src="../../functions/app.js"></script>
      <script src="../general.js"></script>
      <link rel="stylesheet" type="text/css" href="../../../style/style.css"> 
      <script type='text/javascript' src='unitegallery/js/jquery-11.0.min.js'></script>	
	
	<script type='text/javascript' src='unitegallery/js/ug-common-libraries.js'></script>	
	<script type='text/javascript' src='unitegallery/js/ug-functions.js'></script>
	<script type='text/javascript' src='unitegallery/js/ug-thumbsgeneral.js'></script>
	<script type='text/javascript' src='unitegallery/js/ug-thumbsstrip.js'></script>
	<script type='text/javascript' src='unitegallery/js/ug-touchthumbs.js'></script>
	<script type='text/javascript' src='unitegallery/js/ug-panelsbase.js'></script>
	<script type='text/javascript' src='unitegallery/js/ug-strippanel.js'></script>
	<script type='text/javascript' src='unitegallery/js/ug-gridpanel.js'></script>
	<script type='text/javascript' src='unitegallery/js/ug-thumbsgrid.js'></script>
	<script type='text/javascript' src='unitegallery/js/ug-tiles.js'></script>
	<script type='text/javascript' src='unitegallery/js/ug-tiledesign.js'></script>
	<script type='text/javascript' src='unitegallery/js/ug-avia.js'></script>
	<script type='text/javascript' src='unitegallery/js/ug-slider.js'></script>
	<script type='text/javascript' src='unitegallery/js/ug-sliderassets.js'></script>
	<script type='text/javascript' src='unitegallery/js/ug-touchslider.js'></script>
	<script type='text/javascript' src='unitegallery/js/ug-zoomslider.js'></script>	
	<script type='text/javascript' src='unitegallery/js/ug-video.js'></script>
	<script type='text/javascript' src='unitegallery/js/ug-gallery.js'></script>
	<script type='text/javascript' src='unitegallery/js/ug-lightbox.js'></script>
	<script type='text/javascript' src='unitegallery/js/ug-carousel.js'></script>
	<script type='text/javascript' src='unitegallery/js/ug-api.js'></script>

	<link rel='stylesheet' href='unitegallery/css/unite-gallery.css' type='text/css' />
	
	<script type='text/javascript' src='unitegallery/themes/default/ug-theme-default.js'></script>
	<link rel='stylesheet' 		  href='unitegallery/themes/default/ug-theme-default.css' type='text/css' />    	  
   </head>
   
   <body ng-app = "admin"> 
      <?php include '../../include/admin-menu.php'; ?>
      <?php include 'post.php'; ?>
   </body>
</html>