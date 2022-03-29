<?php

namespace App\Controllers;



use App\Router;
use App\Models\Products as ProductsModel;
use App\Models\Categories as CategoriesModel;
use App\Models\Authors as AuthorsModel;
use App\Models\Publishers as PublishersModel;
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
        $auth = new AuthorsModel();
        $publishers = new PublishersModel();
        if ($cates->selectAll()) {
            print_r(CategoriesModel::$categories);
        }
        if ($auth->selectAll()) {
            print_r(AuthorsModel::$authors);
        }
        if ($publishers->selectAll()) {
            print_r(PublishersModel::$publishers);
        }
        // $router->renderView('admin/books/add');
    }
}