<?php

use App\Router ;
use App\Controllers\User ;
require_once __DIR__ . "/../vendor/autoload.php";

$database = new \App\Database();
$router = new Router($database);

$router->get('/', [User::class, 'index']);
$router->get('/products', [User::class, 'index']);


$router->resolve();