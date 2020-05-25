<?php

function parseUrl(string $choosenUrl, array $routes): array {
    $url = $choosenUrl;


    $routeResult = [
        'controller' => '404',
        'params' => []
    ];

    foreach ($routes as $route) {
        $matches = [];
        if (preg_match($route['test'], $url, $matches)) {
            $routeResult['controller'] = $route['controller'];
            if (isset($route['params'])) {
                foreach ($route['params'] as $name => $num) {
                    $routeResult['params'][$name] = $matches[$num];
                }
            }
            break;
        }
    }
    return $routeResult;
}