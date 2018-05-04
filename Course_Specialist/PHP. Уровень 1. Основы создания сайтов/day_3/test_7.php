

<form method="GET">
	<fieldset>
		<input type="color" name="color">
		<br>
		<input type="checkbox" name="ch[dsf]" value="1">
		<br>
		<input type="checkbox" name="ch[wer]" value="2">
		<br>
		<input type="checkbox" name="ch[xcv]" value="3">
		<br>
		<input type="checkbox" name="ch[gde]" value="4">
		<br>
		<input type="checkbox" name="ch[add]" value="5">
		<br>	
	</fieldset>
	<input type="submit" value="Отправить" />
</form>

<?php 

	echo "<pre>",print_r($_GET),"</pre>";
	
?>