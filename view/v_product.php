<div class="solo-product row">
    <div class="product-image col col-6">
        <img src="<?=$BASE_URL?>assets/img/<?=$product['product_id']?>.png" alt="zzz">
    </div>
    <div class="solo-product-info col col-6">
        <h2><?=$product['product_name']?></h2>
        <div class="solo-product-desc-and-sharings">
        <p><?=$product['p_description']?></p>
        </div>
    </div>
</div>

<style>
.product-image {
    width: 400px;
    height: 400px;
}

.product-image img {
    width: 400px;
    height: 400px;
}
</style>