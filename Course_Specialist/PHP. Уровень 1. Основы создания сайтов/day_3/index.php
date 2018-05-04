<?php 
  include "inc/functions.php";
  include "inc/data.php";

  if (!empty($_GET["page"])) {
    $page = $_GET["page"];
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta n
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
<style>
  li.active{
   background-color: #eef;
  }
</style>
    <title>PHP 1. Основы создания сайтов</title>

    <!-- Bootstrap core CSS -->
    <link href="https://yastatic.net/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style/starter-template.css" rel="stylesheet">

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
    <!--menu-->
    <nav class="navbar navbar-<?= navbarLight?> navbar-fixed-top">
      <?php include "inc/nav.tpl.php"; ?>
    </nav>
     
    <div class="container"> 
      <!--menu-left-->
      <div class="col-md-3 col-sm-3 ">
          <?php include "inc/menu-left.tpl.php"; ?>
      </div>  

      <!--main content-->
      <div class="col-md-9 col-sm-9 ">

        <?php
        // маршрутизатор
          switch($page) {
            case "index": include "inc/index.tpl.php"; break;
            case "catalog": include "inc/catalog.tpl.php"; break;
            case "feedback": include "inc/feedback.tpl.php"; break;
            case "calculator": include "inc/calculator.tpl.php"; break;
            case "calendar": include "inc/calendar.tpl.php"; break;
            default: 

              $page = strtolower(trim(strip_tags($page)));
              if (file_exists("page/$page.php"))
                include "page/$page.php";
              else
                include "inc/404.tpl.php"; 

            break;
          } 
        ?>
      </div>
      &copy; <?= AUTHOR," ", YEAR?>
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
