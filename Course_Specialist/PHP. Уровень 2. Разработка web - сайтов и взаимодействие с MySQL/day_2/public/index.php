<?php

include "inc/lib.inc.php";
include "inc/data.inc.php";

$page = "index";
if( !empty($_GET["page"]) ){
    $page = $_GET["page"];
    //$page = trim(strip_tags($page));
}


?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
<style>
  li.active{
   background-color: #eef;
  }
</style>
    <title>PHP 2.</title>

    <!-- Bootstrap core CSS -->
    <link href="https://yastatic.net/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-<?= $className?>  navbar-fixed-top">
      <?php include "inc/nav.inc.php"; ?>
    </nav>

    <div class="container">

		<div class="col-md-3 col-sm-3 ">
		
		 <?php include "inc/menu.inc.php"; ?>

		</div>
		<div class="col-md-9 col-sm-9 ">
		  
		<?php
		
		switch( $page ){
		  case "index"     : include "inc/index.inc.php"; break;
		  case "calculator": include "inc/calculator.inc.php"; break;
		  case "feedback"  : include "inc/feedback.inc.php"; break;
		  case "calendar"  : include "inc/calendar.inc.php"; break;
		  case "catalog"   : include "inc/catalog.inc.php"; break;
		  case "test"      : include "test.php"; break;
		  case "log"       : include "inc/log.inc.php"; break;
		  case "basket"    : include "inc/basket.inc.php"; break;
		  case "order"     : include "inc/order.inc.php"; break;
		  case "orders"     : include "inc/orders.inc.php"; break;
		  case "my_orders"    : include "inc/my_orders.inc.php"; break;
		  
		  case "addbook"   : include "inc/addbook.inc.php"; break;
		  
		  case "download"  : include "inc/download.inc.php"; break;
		  case "upload"  : include "inc/upload.inc.php"; break;
		  
		  case "logout"  : include "inc/logout.inc.php"; break;
		  
	  
		  
		  default          : include "inc/404.inc.php"; break;
		}
		?>
		
		</div>
		
		<?php include "inc/footer.inc.php"; ?>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://yastatic.net/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
