<?php 
include 'DataBase/DB.php';
include 'functions/Login.php';
LoggedIn::isLoggedIN();
$params = WhoIsLoggedIn::whoislogged();
$user_id = $params[0];
$firstname = $params[1];
$lastname = $params[2];
$user_mail = $params[3];
$date_registered = $params[4];
$user_adress = $params[5];
$user_last_login = $params[6];
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
      <script src="libraries/angular-google-maps.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuzKII55iOku0Vx1GYcDnDDDVO6X-wlKk"></script>
      <link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <script src="functions/admin_functions.js"></script>
      <link rel="stylesheet" type="text/css" href="style/style.css">     	  
   </head>
   
   <body ng-app = "admin"> 
      <?php include 'include/admin-menu.php'; ?>
      <?php include 'include/add-new-product.php'; ?>
   </body>
</html>
