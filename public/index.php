<?php

use App\Router;
use App\Controllers\Users as UsersController;
use App\Controllers\Products as ProductsController;
use App\Controllers\Cart as CartController;
use App\Controllers\Payment as PaymentController;
use App\Controllers\Categories as CategoriesController;
use App\Controllers\Authors as AuthorsController;
use App\Controllers\Publishers as PublishersController;
use App\Controllers\Cities as CitiesController;
use App\Controllers\Offers as OffersController;
use App\Controllers\Orders as OrdersController;

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../config/index.php";

$database = new \App\Database();
$router = new Router($database);

// client section
$router->get('/', [ProductsController::class, 'index']);
$router->get('/register', [ProductsController::class, 'index']);
$router->post('/register', [UsersController::class, 'register']);
$router->post('/login', [UsersController::class, 'login']);

$router->get('/details', [ProductsController::class, 'details']);

$router->get('/cart', [CartController::class, 'index']);
$router->get('/admin/cart/:id/:country', [CartController::class, 'test($param)']);

$router->get('/checkout', [PaymentController::class, 'index']);

$router->get('/category', [CategoriesController::class, 'index']);



// Admin section 
// books
$router->get('/admin', [ProductsController::class, 'admin']);
$router->get('/admin/books', [ProductsController::class, 'admin']);
$router->get('/admin/books/add', [ProductsController::class, 'add']);

$router->post('/admin/books/add', [ProductsController::class, 'upload']);

// categories
$router->get('/admin/categories', [CategoriesController::class, 'admin']);
$router->get('/admin/categories/add', [CategoriesController::class, 'add']);
$router->post('/admin/categories/add', [CategoriesController::class, 'upload']);


// authors
$router->get('/admin/authors', [AuthorsController::class, 'index']);
$router->get('/admin/authors/add', [AuthorsController::class, 'add']);
$router->get('/admin/authors/edit', [AuthorsController::class, 'edit']);
$router->get('/admin/authors/delete', [AuthorsController::class, 'delete']);


// publishers
$router->get('/admin/publishers', [PublishersController::class, 'index']);
$router->get('/admin/publishers/add', [PublishersController::class, 'add']);
$router->get('/admin/publishers/edit', [PublishersController::class, 'edit']);
$router->get('/admin/publishers/delete', [PublishersController::class, 'delete']);


// users
$router->get('/admin/users', [UsersController::class, 'adminUsers']);
$router->get('/admin/users/add', [UsersController::class, 'adminAddUsers']);
$router->get('/admin/users/edit', [UsersController::class, 'adminEditUsers']);
$router->get('/admin/users/delete', [UsersController::class, 'adminDeleteUsers']);


// cities
$router->get('/admin/cities', [CitiesController::class, 'index']);
$router->get('/admin/cities/add', [CitiesController::class, 'add']);
$router->get('/admin/cities/edit', [CitiesController::class, 'edit']);
$router->get('/admin/cities/delete', [CitiesController::class, 'delete']);


// offers
$router->get('/admin/offers', [OffersController::class, 'index']);
$router->get('/admin/offers/add', [OffersController::class, 'add']);


// orders
$router->get('/admin/orders', [OrdersController::class, 'index']);
$router->get('/admin/orders/add', [OrdersController::class, 'add']);
$router->get('/admin/orders/edit', [OrdersController::class, 'edit']);
$router->get('/admin/orders/delete', [OrdersController::class, 'delete']);

// payment
$router->get('/admin/payments', [PaymentController::class, 'adminPayment']);
$router->get('/admin/payments/add', [UsersController::class, 'adminAddPayment']);
$router->get('/admin/payments/edit', [UsersController::class, 'adminEditPayment']);
$router->get('/admin/payments/delete', [UsersController::class, 'adminDeletePayment']);
$router->resolve();