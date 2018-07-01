<a href="?name=Vasya">Вася</a><br>
<a href="?name=Asya">Ася</a><br>


<form action="">
	<input type="text" name="name">
</form>

<?php 

echo "<pre>",print_r($_GET), "</pre>";
echo "<pre>",$_GET["name"], "</pre>";

?>