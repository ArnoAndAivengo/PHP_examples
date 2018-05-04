<h2>Календарь</h2>
<?php 
  $dt = getdate();
  calendar($dt["mon"], $dt["year"]);
?>