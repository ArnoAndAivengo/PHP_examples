<?php 

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["from"]))
      $from = trim(strip_tags($_POST["from"]));
    if (!empty($_POST["message"]))
      $message = trim(strip_tags($_POST["message"]));

    if ($from && $message) {
       mail("admon@jfdshf.com", $from, $message);
       echo <<<FLASH
        Почта отправлена!
FLASH;
      }
  }

?>
<h2>Обратная связь</h2>

<div class="col-md-8 col-sm-8 ">
  <form action="" method="POST">
    <div class="row">
      <input type="text" class="form-control" placeholder="от кого">
    </div>
    <div class="row">
      <textarea class="form-control" rows="3" placeholder="сообщение"></textarea>
    </div>
    <div class="row">
      <input type="submit" class="btn btn-default" value="Отправить" >
    </div>
  </form>
</div>