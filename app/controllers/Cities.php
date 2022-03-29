<?php

namespace App\Controllers;



use App\Router;
use App\Utils\Validation;

use PDO;

class Cities
{
    /*
    @param Router to reach the database and view ;
    */
    public static function index(Router $router)
    {
        $router->renderView('admin/cities/index');
    }
    public static function add(Router $router)
    {
        $router->renderView('admin/cities/add');
    }
    public static function edit(Router $router)
    {
        $router->renderView('admin/cities/edit');
    }
    public static function delete(Router $router)
    {
        $router->renderView('admin/cities
        /add');
    }
}