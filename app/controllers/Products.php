<?php

namespace App\Controllers;



use App\Router;
use App\Models\Products as ProductsModel;
use App\Models\Categories as CategoriesModel;
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
        $cates = new CategoriesModel();
        if ($cates->selectAll()) {
            print_r(CategoriesModel::$categories);
        }
        // $router->renderView('admin/books/add');
    }
}