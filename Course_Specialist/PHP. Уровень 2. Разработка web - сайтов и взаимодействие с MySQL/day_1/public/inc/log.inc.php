<h2>Журнал</h2>
<?php
$rows = file("log.log");
?>
<table class="table table-border">
  <tr>
    <th>Адрес
    <th>Откуда
    <th>Время посещения
<?php
foreach($rows as $row){
	list($url,$from,$time) = explode("|",$row);
	$time = date("d-m-Y H:i:s",$time);
?>
  <tr>
    <td><?php echo $url ?>
    <td><?php echo $from ?>
    <td><?php echo $time ?>
<?php	
}	
?>
</table>
