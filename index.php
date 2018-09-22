<?php


require_once(dirname(__FILE__) . '/helpers.php');
require_once(dirname(__FILE__) . '/Route.php');
require_once(dirname(__FILE__) . '/controllers/TestController.php');

use \App\Route;

$route = new Route();

$route->add('/', function () {
    include dirname(__FILE__) . '/pages/home.php';
    return true;
});

$route->add('/bestellung', function () {
    include dirname(__FILE__) . '/pages/bestellung.php';
    return true;
});

$route->add('/test', '\App\TestController::json');

$route->run();
