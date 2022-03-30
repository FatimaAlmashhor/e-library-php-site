<?php

namespace App\Controllers;



use App\Router;
use App\Models\Cities as CitiesModel;
use App\Utils\Validation;

use PDO;

class Cities
{
    /*
    @param Router to reach the database and view ;
    */
    public static function index(Router $router)
    {
        new CitiesModel();
        $router->renderView('admin/cities/index', ['cities' => CitiesModel::$cities]);
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