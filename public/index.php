<?php

use App\Router;
use App\Controllers\Users as UsersController;

require_once __DIR__ . "/../vendor/autoload.php";

$database = new \App\Database();
$router = new Router($database);

$router->get('/', [UsersController::class, 'index']);
$router->get('/register', [UsersController::class, 'register']);


$router->resolve();