<h2>Каталог</h2>

<div class="row">
  <!-- Начало описания товара -->
  <?php for ($i = 0; $i < count($goods); ++$i): ?>
  <div class="col-sm-6 col-md-4">
  	<div class="thumbnail">
  	  <img src="img/item.png" alt="заглушка">
  		<h3><?= $goods[$i]["title"] ?></h3>
      <p><?= $goods[$i]["description"] ?></p>
  		<p><?= $goods[$i]["price"] ?></p>
  		<p><a href="#<?= $i?>" class="btn btn-default" role="button">В корзину</a></p>
  	</div>
    </div>
  <?php endfor; ?>
  <!-- Завершение описания товара -->  
</div>