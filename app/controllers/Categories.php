<?php

namespace App\Controllers;



use App\Router;
use App\Utils\UploadFile;
use App\Models\Categories as CategoriesModel;
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
        $cates = new CategoriesModel();
        $router->renderView('admin/category/index',  ['categories' => CategoriesModel::$categories]);
    }
    public static function add(Router $router)
    {
        $router->renderView('admin/category/add');
    }
    public static function upload(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            // $active = $_POST['isActive'];
            $image = $_FILES['cateImage'];

            // upload the image 
            $cate = new UploadFile();
            if ($cate->uploadIamge($image)) {
                $imageName = $cate->uploadIamge($image);
            }
            $data = array(
                "name"  => $name,
                "created_by" => 6,
                "is_active" => 1,
                "image" => $imageName
            );
            $cates = new CategoriesModel();
            if ($cates->create($data)) {
                $message = array(
                    "success_massage" => "Book added scuccessfuly"
                );
            } else {
                $message = array(
                    "faild_massage" => "Book could not be adding"
                );
            }
            $router->renderView('admin/category/index', [$message, 'categories' => CategoriesModel::$categories]);
        }
    }
}