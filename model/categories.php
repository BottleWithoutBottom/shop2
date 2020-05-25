<?php

function showAllCategories():array {
    $sql = "SELECT * FROM prod_categories";
    $query = getQuery($sql);
    return $query->fetchAll();
}

function showCategory(int $id):array {
    $sql = "SELECT * FROM prod_categories JOIN products USING(prod_cat_id) WHERE prod_cat_id = :prod_cat_id";
    $query = getQuery($sql, ['prod_cat_id' => $id]);
    return $query->fetchAll();
}

function showCategoryByCatName(array $cats):array {
    $sql = "SELECT * FROM prod_categories JOIN products USING(prod_cat_id)";
    $query = getQuery($sql, $cats);
    return $query->fetchAll();
}