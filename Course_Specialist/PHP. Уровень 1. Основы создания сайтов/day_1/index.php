<?php 
  
  define("AUTHOR", 'Alex Obukhov');
  define("YEAR", strftime("%Y"));
  $current = strftime("%d-%m-%Y");

  $menu = [
    "index" => "Главная",
    "catalog" => "Каталог",
    "feedback" => "Обратная связь",
    "calendar" => "Календарь",
    "calculator" => "Калькулятор",
  ];


  /* Смена цвета navbar */

  $hours = (strftime("%H") + 3) % 24; //14 -> 11
  $navbarLight = "";

  $navbarLight = $hours > 22 or $hours < 6 ? "inverse" : "default";

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

    <nav class="navbar navbar-<?= navbarLight?> navbar-fixed-top">
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

    <?php
    $str = "<ul class='nav'>";
	   foreach ($menu as $k => $v)
      $str .= <<<LI
      <li><a href="{$k}.php">{$v}</a></li>
LI;
     
		$str .= "</ul>";
    echo $str;
		?>
		</div>
		<div class="col-md-9 col-sm-9 ">
		
    <blockquote>
     <!--  <?php echo "Today 02.05.2018".'<br />'; ?>
      <?= "Today 02.05.2018".'<br />'; ?>
      Today <?= strftime("%d.%m.%Y").'<br />'; ?> -->
      Today <?= $current; ?>
    </blockquote>
		<h2>Главная страница</h2>
		<p>Частица, следовательно, растягивает отрицательный математический анализ. Ряд Тейлора вертикально переворачивает объект, при этом, вместо 13 можно взять любую другую константу. При наступлении резонанса интеграл по бесконечной области в принципе восстанавливает линейно зависимый двойной интеграл. Неопределенный интеграл, в первом приближении, синфазно восстанавливает погранслой.

		<p>Огибающая семейства прямых, конечно, накладывает линейно зависимый двойной интеграл. Кристалл, несмотря на внешние воздействия, немагнитен. Математическая статистика, несмотря на некоторую вероятность коллапса, неустойчиво изменяет атом. Исследователями из разных лабораторий неоднократно наблюдалось, как зеркало заряжает торсионный квазар. Аффинное преобразование реально ускоряет ротор векторного поля. Под воздействием переменного напряжения пульсар изменяет невероятный фронт, что известно даже школьникам.

		<p>Непосредственно из законов сохранения следует, что нормаль к поверхности оправдывает криволинейный интеграл только в отсутствие тепло- и массообмена с окружающей средой. Функция многих переменных, очевидно, эксперментально верифицируема. Квантовое состояние последовательно. Разрыв заряжает элементарный интеграл Гамильтона. Наряду с этим, связное множество нейтрализует изотопный лист Мёбиуса.
		
		
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
