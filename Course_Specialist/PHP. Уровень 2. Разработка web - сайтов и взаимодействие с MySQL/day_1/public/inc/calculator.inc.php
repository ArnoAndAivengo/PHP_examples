
 <?php

 if($_SERVER["REQUEST_METHOD"] == "POST"){
 	
 	$args = [
 	  "S" => FILTER_SANITIZE_NUMBER_FLOAT,	
 	  "p" => FILTER_SANITIZE_NUMBER_FLOAT,	
 	  "n" => FILTER_SANITIZE_NUMBER_FLOAT,	
    ];
 	$params = filter_input_array(INPUT_POST,$args);
 	$S = $params["S"];
 	$p = $params["p"];
 	$n = $params["n"];
 	
 	$A = ipoteka($S, $p, $n);
 }
  

?><h2>Калькулятор</h2>
		<div class="col-md-8 col-sm-8 ">
		<!--
		<p class="bg-success">...</p>
		<p class="bg-danger">...</p>
		-->
		<?php if( $A ) { ?>
		<p class="bg-success"><?= $A ?></p>
		<?php } ?>
		<form action="" method="POST">
		
		<div class="row">
		<div class="form-group">
		<input type="text" class="form-control" name="S" value="<?= $S?>" placeholder="размер кредита">
		</div>
		</div>	
		
		<div class="row">
		<div class="form-group">
		<input type="text" class="form-control" name="p" value="<?= $p?>" placeholder="годовая процентная ставка">
		</div>
		</div>
		
		<div class="row">
		<div class="form-group">
		<input type="text" class="form-control" name="n" value="<?= $n?>" placeholder="количество лет">
		</div>
		</div>

		<div class="row">
		<input type="submit" class="btn btn-default" value="Отправить" >
		</div>
		</form>
		</div>