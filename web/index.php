<?php

define('APPLICATION_PATH', __DIR__ . '/..');
defined('APPLICATION_ENV') || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

require __DIR__ . '/../vendor/autoload.php';

use Velosiped\Application;
use Velosiped\Router;
use Velosiped\Container;

//if (!empty($config['debug']) && $config['debug'] === true) {
    ini_set('display_errors', true);
    error_reporting(E_ALL & ~E_DEPRECATED);
//} else {
//    ini_set('display_errors', false);
//    error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
//}

$router = new Router;
$router->setRoutes(include __DIR__ . '/../app/routes.php');

$app = new Application;
$app->setContainer(new Container);
$app->run($router);
