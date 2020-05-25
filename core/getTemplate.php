<?php


function template(string $path, array $variables = []):string {
    $contentPath = "view/$path.php";
    extract($variables);
    ob_start();
    include($contentPath);
    return ob_get_clean();
}