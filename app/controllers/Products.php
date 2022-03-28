<?php

namespace App\Controllers;



use App\Router;
use App\Utils\Validation;

use PDO;

class Products
{
    /*
    @param Router to reach the database and view ;
    */
    public static function index(Router $router)
    {
        $router->renderView('client/index');
    }
    public static function details(Router $router)
    {
        $router->renderView('client/details');
    }
    public static function admin(Router $router)
    {
        $router->renderView('admin/books/index');
    }
    public static function add(Router $router)
    {
        $router->renderView('admin/books/add');
    }
}