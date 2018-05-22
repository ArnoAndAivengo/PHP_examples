		<h2>Каталог</h2>
		
		<div class="row">
		
		<!-- Начало описания товара -->
		
		<?php $goods = []; foreach($goods as $item):	?>
		
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
			  <img src="img/item.png" alt="заглушка">
				<h3><?= $item["title"] ?></h3>
				<p><?= $item["description"] ?></p>
				<p><a href="#" class="btn btn-default" role="button">В корзину</a></p>
			</div>
		  </div> 
		  
		<?php endforeach; ?>  
		<!-- Завершение описания товара -->  
		</div>