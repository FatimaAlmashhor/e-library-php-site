<?php

namespace App\Controllers;



use App\Router;
use App\Utils\Validation;

use PDO;

class Categories
{
    /*
    @param Router to reach the database and view ;
    */
    public static function index(Router $router)
    {
        $router->renderView('client/category');
    }
    public static function admin(Router $router)
    {
        $router->renderView('admin/category/index');
    }
    public static function add(Router $router)
    {
        $router->renderView('admin/category/add');
    }
}