<?php

include_once('model/products.php');
include_once('model/categories.php');
$id = (int)URL_PARAMS['product_id'];
$product = showProduct($id);

$title = $product['product_name'];

$content = template('v_product', [
    'title' => $title,
    'product' => $product,
    'BASE_URL' => $BASE_URL
]);