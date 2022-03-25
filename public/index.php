<?php

use App\Router;
use App\Controllers\Users as UsersController;
use App\Controllers\Products as ProductsController;
use App\Controllers\Cart as CartController;
use App\Controllers\Payment as PaymentController;

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../config/index.php";

$database = new \App\Database();
$router = new Router($database);

$router->get('/', [ProductsController::class, 'index']);
$router->get('/register', [ProductsController::class, 'index']);
$router->post('/register', [UsersController::class, 'register']);
$router->post('/login', [UsersController::class, 'login']);

$router->get('/details', [ProductsController::class, 'details']);

$router->get('/cart', [CartController::class, 'index']);

$router->get('/checkout', [PaymentController::class, 'index']);

$router->resolve();