<?php
 session_start();
 $result = "";
 
 if($_SERVER["REQUEST_METHOD"]=="POST"){
     if(isset($_SESSION["randStr"])){
         if($_SESSION["randStr"] == $_POST["str"]){
             $result = "Хорошо";
         } else {
             $result = "Плохо";
         }
     } else  $result = "Включите графику";
 }
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Регистрация</title>
</head>
<body>
<h1>Регистрация</h1>
<form action="" method="post">
	<div>
		<img src="noise-picture.php">
	</div>
	<div>
		<label>Введите строку</label>
		<input type="text" name="str" size="6">
	</div>
	<input type="submit" value="OK">
</form>
<?php 
  echo $result;
?>
</body>
</html>
