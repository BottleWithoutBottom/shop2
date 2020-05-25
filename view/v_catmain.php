
<div class="row products">
<? if (!$choosenCategory): ?>
<? foreach ($products as $product): ?>
<div class="card product-item col col-2">
<img src="<?$BASE_URL?>assets/img/<?=$product['product_id']?>.png" alt="" class="card-img-top">

<div class="card-body">
<h6 class="card-title"><?=$product['product_name']?></h6>
<p class="card-text">Количество:<?=$product['quantity']?></p>
<p>Категория: <?=$product['cat_title']?></p>
<a class="card-link" href="<?=$BASE_URL?>product/<?=$product['product_id']?>">Подробнее</a>
</div>
</div>
<? endforeach;?>

<? elseif($choosenCategory): ?>
<? foreach ($productsInCategory as $productsInCategory): ?>
<div class="card product-item col col-2">
<img src="<?$BASE_URL?>assets/img/<?=$productInCategory['product_id']?>.png" alt="" class="card-img-top">

<div class="card-body">
<h6 class="card-title"><?=productInCategory['product_name']?></h6>
<p class="card-text">Количество:<?=$productInCategory['quantity']?></p>
<p>Категория: <?=$product['cat_title']?></p>
<a class="card-link" href="<?=$BASE_URL?>product/<?=$productsInCategory['product_id']?>">Подробнее</a>
</div>
</div>
<? endforeach;?>
<? endif; ?>

</div>

