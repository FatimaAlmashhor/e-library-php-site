<?php

namespace App\Controllers;



use App\Router;
use App\Models\Authors as AuthorsModel;
use App\Utils\Validation;

use PDO;

class Authors
{
    /*
    @param Router to reach the database and view ;
    */
    public static function index(Router $router)
    {
        new AuthorsModel();
        $router->renderView('admin/authors/index', ['authors' => AuthorsModel::$authors]);
    }
    public static function add(Router $router)
    {
        $router->renderView('admin/authors/add');
    }
    public static function edit(Router $router)
    {
        $router->renderView('admin/authors/add');
    }
    public static function delete(Router $router)
    {
        $router->renderView('admin/authors/add');
    }
}