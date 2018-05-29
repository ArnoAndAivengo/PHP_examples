<?php
ob_start();
function myAutoload($className){
    include "$className.class.php";
};
spl_autoload_register("myAutoload");
$news = new NewsDB();
//var_dump($news);

$errors = [];
if( $_SERVER['REQUEST_METHOD'] == "POST"){
    include "save_news.inc.php";
    header("Location: /news/news.php");
    die;
}

if( isset($_GET["del"])){
    include "delete_news.inc.php";
    header("Location: /news/news.php");
    die;
}
?>

<!DOCTYPE html >

<html  lang="ru">
<head>
	<title>Новостная лента</title>
	<meta charset="utf-8" />
</head>
<body>

<h1>Последние новости</h1>
<?php

?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

Заголовок новости:<br />
<input type="text" name="title" /><br />
Выберите категорию:<br />
<select name="category">
<option value="1">Политика</option>
<option value="2">Культура</option>
<option value="3">Спорт</option>
</select>
<br />
Текст новости:<br />
<textarea name="description" cols="50" rows="5"></textarea><br />
Источник:<br />
<input type="text" name="source" /><br />
<br />
<input type="submit" value="Добавить!" />

</form>

<?php
include "get_news.inc.php";
?>

</body>
</html>
<?php
ob_end_flush();
?>