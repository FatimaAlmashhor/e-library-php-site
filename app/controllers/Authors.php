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
    static function  upload(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $bio = $_POST['bio'];
            $phone = $_POST['phone'];
            // $active = $_POST['isActive'];



            $data = array(
                "name"  => $name,
                "email" => $email,
                "bio" => $bio,
                "phone" => $phone,
                "is_active" => 1,
                "created_by" => 6,
            );
            $author = new AuthorsModel();
            if ($author->create($data)) {
                $message = array(
                    "success_massage" => "Book added scuccessfuly"
                );
            } else {
                $message = array(
                    "faild_massage" => "Book could not be adding"
                );
            }
            $author->selectAll();
            $router->renderView('admin/authors/index', [$message, 'authors' => AuthorsModel::$authors]);
        }
    }
}