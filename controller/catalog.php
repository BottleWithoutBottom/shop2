<?php
include_once('model/products.php');
include_once('model/categories.php');
$products = showAllProducts();
$categories = showAllCategories();
$choosenCategory = false;
$title = 'Наша продукция';

$catmain = template('v_catmain', [
    'products' => $products,
    'BASE_URL' => $BASE_URL,
    'choosenCategory' => $choosenCategory,
]);

$filter = template('v_filter', [
    'categories' => $categories
]);

$content = template('v_catalog', [
    'mainpart' => $catmain,
    'filter' => $filter,
    'title' => $title,
    'BASE_URL' => $BASE_URL,

    'categories' => $categories
]);

if (isset($_POST['category'])) {

    $productsInCategory = showCategoryByCatName($_POST['category']);
    $choosenCategory = true;
    echo "<pre>";
    print_r($productsInCategory);
    echo "</pre>";
    unset($_POST['category']);
}

?>