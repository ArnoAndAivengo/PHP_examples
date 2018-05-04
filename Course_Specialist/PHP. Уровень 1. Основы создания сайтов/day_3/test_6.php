<?php 	

$mysecret = md5("fname,lname,ijjnjnj*JIN00j");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$secret = $_POST["secret"];

	$str = "";
	foreach ($_POST as $key => $value) {
		if ($key != "secret") {
		$str = "$key,";
		}
		$str .= "ijjnjnj*JIN00j";
		$m = md5($str);
		if ($mysecret == $m) {
			echo "Форму не звломали";
		} else {
			echo "Хаккер хватит!";
		}
	}
}
?>

<form method="POST">
	<input type="text" name="fname" />
	<input type="text" name="lname" />
	<input type="hidden" name="secret" value="<?= $mysecret ?>" />
	<input type="submit" value="Отправить" />
</form>

<?php 

	echo "<pre>",print_r($_POST),"</pre>";
	
?>