<?php

namespace App\Controllers;



use App\Router;
use App\Utils\Validation;

use PDO;

class Cart
{
    /*
    @param Router to reach the database and view ;
    */
    public static function index(Router $router)
    {
        $router->renderView('client/cart');
    }
}