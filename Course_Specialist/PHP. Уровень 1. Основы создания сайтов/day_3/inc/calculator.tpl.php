<?php 

/* calculator */

  $S = 2200000;
  $p = 10;
  $n = 10;
  $A = calcCredit($S, $p , $n);

  function calcCredit($S = 2.2e6, $p = 10.9 , $n = 10) {
    $p = $p / 1200; // ставка в долях
    $n = $n * 12; // Кол-во месяцев
    
    return $A = $S * $p / (1 - pow(1+$p,-$n));
  }
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $S = !empty($_POST["S"]) ? 1 * $_POST["S"] : $S;
    $p = !empty($_POST["p"]) ? 1 * $_POST["p"] : $p;
    $n = !empty($_POST["n"]) ? 1 * $_POST["n"] : $n;

    $args = [
      "S" => FILTER_SANITIZE_NUMBER_FLOAT,
      "p" => FILTER_SANITIZE_NUMBER_FLOAT,
      "n" => FILTER_SANITIZE_NUMBER_FLOAT,
    ];

    $myinputs = filter_input_array(INPUT_POST, $args);

    $S = $myinputs["S"];
    $p = $myinputs["p"];
    $n = $myinputs["n"];

      if ($S and $p  and $n) {
        $A = calcCredit($S, $p , $n);
      }
  }

?>

<h2>Калькулятор</h2>
<div class="col-md-8 col-sm-8 ">

  <p class="bg-success">Платёж: <?= round($A,2) ?></p>
  <p class="bg-success">Переплата: <?= round($n * 12 * $A - $S) ?></p>

  <form action="" method="POST">

    <div class="row">
      <div class="form-group">
        <input type="text" class="form-control" name="S" value="<?= $S ?>" placeholder="размер кредита">
      </div>
    </div>	

    <div class="row">
      <div class="form-group">
        <input type="text" class="form-control" name="p" value="<?= $p ?>" placeholder="годовая процентная ставка">
      </div>
    </div>

    <div class="row">
      <div class="form-group">
        <input type="text" class="form-control" name="n" value="<?= $n ?>" placeholder="количество лет">
      </div>
    </div>

    <div class="row">
      <input type="submit" class="btn btn-default" value="Отправить" >
    </div>
  </form>

  <blockqute>
    Ещё один вариант ипотеки: кредит <?= $S + 2e5 ?>, платёж <?= calcCredit($S + 2e5,$p,$n) ?>
  </blockqute>

</div>