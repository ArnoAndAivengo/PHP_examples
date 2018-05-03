<?php 
  
  $goods = [  
    [   
      "title" => "Разработка веб-приложений с помощью PHP и MySQL",   
      "description" => "Люк Веллинг, Лаура Томсон",   
      "price" => 1280 
    ],  

    [   
      "title" => "PHP. Объекты, шаблоны и методики программирования",   
      "description" => "Мэтт Зандстра",   
      "price" => 2124 
    ],  
    [   
      "title" => "PHP5", 
      "description" => "Дмитрий Котеров, Алексей Костарев  ",  
      "price" => 543 
    ],
    [  
      "title" => "PHP и MySQL Исчерпывающее руководство",   
      "description" => "Бретт Маклафлин",   
      "price" => 638 
    ], 
    [  
      "title" => "Head First PHP & MySQL",   
      "description" => "Lynn Beighley, Michael Morrison",   
      "price" => 2310 
     ] 
   ]

 ?>


<!DOCTYPE html>
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

</style>
    <title>PHP 1. Основы создания сайтов</title>

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

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">PHP Основы</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <!--<ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>-->
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

		<div class="col-md-3 col-sm-3 ">
		
		<h3>Навигация</h3>
		<ul class="nav">
			<li><a href="index.php">Главная</a></li>
			<li class="active"><a href="catalog.php">Каталог</a></li>
			<li><a href="feedback.php">Обратная связь</a></li>
			<li><a href="calendar.php">Календарь</a></li>
			<li><a href="calculator.php">Калькулятор</a></li>
		</ul>
		
		</div>
		<div class="col-md-9 col-sm-9 ">
		
		<h2>Каталог</h2>
		
		<div class="row">
		
		<!-- Начало описания товара -->
    <?php for ($i = 0; $i < count($goods); ++$i): ?>
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
			  <img src="img/item.png" alt="заглушка">
				<h3><?= $goods[$i]["title"] ?></h3>
        <p><?= $goods[$i]["description"] ?></p>
				<p><?= $goods[$i]["price"] ?></p>
				<p><a href="#<?= $i?>" class="btn btn-default" role="button">В корзину</a></p>
			</div>
		  </div>
    <?php endfor; ?>
		<!-- Завершение описания товара -->  
		</div>
		
		</div>
		
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
