<?php

return [
    'production' => [
        'routes' => include APPLICATION_PATH . '/app/routes.php',
        'templates' => APPLICATION_PATH . '/views/',
    ],
    'testing' => [],
    'development' => [
        'debug' => true,
    ],
];
