<?php

use App\Router;
use App\Controllers\Users as UsersController;

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../config/index.php";

$database = new \App\Database();
$router = new Router($database);

$router->get('/', [UsersController::class, 'index']);
$router->post('/register', [UsersController::class, 'register']);
$router->get('/login', [UsersController::class, 'login']);

$router->resolve();