<?php

define('APPLICATION_PATH', __DIR__ . '/..');
defined('APPLICATION_ENV') || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

require __DIR__ . '/../vendor/autoload.php';

use Velosiped\Application;

//if (!empty($config['debug']) && $config['debug'] === true) {
//    ini_set('display_errors', true);
//    error_reporting(E_ALL & ~E_DEPRECATED);
//} else {
//    ini_set('display_errors', false);
//    error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
//}

$app = new Application;
$app->setRoutes([
    'index' => '\Demo\Controller\IndexController',
])->run();
