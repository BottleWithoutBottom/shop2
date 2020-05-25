<?php

return [
    [
        'test' => '/^$/',
        'controller' => 'index'
    ],
    [
        'test' => '/^catalog$/',
        'controller' => 'catalog'
    ],

    [
        'test' => '/^product\/([1-9]+\d*$)/',
        'controller' => 'product',
        'params' => [
            'product_id' => 1
        ]
    ],
    [
        'test' => '/^reg/',
        'controller' => 'reg'
    ],
    [
        'test' => '/^login/',
        'controller' => 'login'
    ],
    [
        'test' => '/^logout/',
        'controller' => 'logout'
    ]
];