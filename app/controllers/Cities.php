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
    public static function upload(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            // $active = $_POST['isActive'];



            $data = array(
                "name"  => $name,
                "created_by" => 6,
                "is_active" => 1,
            );
            $city = new CitiesModel();
            if ($city->create($data)) {
                $message = array(
                    "success_massage" => "Book added scuccessfuly"
                );
            } else {
                $message = array(
                    "faild_massage" => "Book could not be adding"
                );
            }
            $city->selectAll();
            $router->renderView('admin/cities/index', [$message, 'cities' => CitiesModel::$cities]);
        }
    }
}