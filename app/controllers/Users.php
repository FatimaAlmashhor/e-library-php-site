<?php

namespace App\Controllers;


use App\Router;
use App\Utiles;
use App\Models\Users as UserModel;

use PDO;

class Users
{
    /*
    @param Router to reach the database and view ;
    */
    public static function index(Router $router)
    {
        $router->renderView('books/index');
    }
    public static function register(Router $router)
    {
        // Pass info
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $cpass = $_POST['cpassword'];

        // check password and email was valid before get into the model
        if (
            Utiles::validPassword($pass, $cpass) &&
            Utiles::validEmail($email)
        ) {
            // TODO: User model create
        }
        $router->renderView('books/index');
    }
}