<?php

namespace App\Controllers;


use App\Router;
// use App\Models\Users as UserModel;

use PDO;

class Users
{
    /*
    @param Router to reach the database and view ;
    */
    public static function index(Router $router)
    {
        $router->renderView('users/index');
    }
    public  function register(Router $router)
    {
        echo "We are here in register ";
    }
}