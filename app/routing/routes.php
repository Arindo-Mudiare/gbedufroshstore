<?php

$router = new AltoRouter();

// map homepage
// $router->map('GET', '/', function () {
//     require __DIR__ . '/views/home.php';
// });
$router->map('GET', '/', '', 'home');

$match = $router->match();

if ($match) {
    require_once __DIR__ . '/../controllers/BaseController.php';
    require_once __DIR__ . '/../controllers/IndexController.php';
    $index = new \App\Controllers\IndexController();
    $index->show();
} else {
    header($_SERVER['SERVER_PROTOCOL'] . '404 Not Found');
    echo 'fresh toto Page not found';
}
