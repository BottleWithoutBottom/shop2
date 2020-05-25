<?php
include_once('core/dbActions.php');


function showAllProducts():array {
    $sql = "SELECT * FROM products JOIN prod_categories USING(prod_cat_id) ORDER BY product_name ASC";
    $query = getQuery($sql);
    return $query->fetchAll();
}

function showProduct(int $id) {
    $sql = "SELECT * FROM products JOIN prod_categories USING(prod_cat_id) WHERE product_id = :product_id";
    $query = getQuery($sql, ['product_id' => $id]);
    return $query->fetch();
}