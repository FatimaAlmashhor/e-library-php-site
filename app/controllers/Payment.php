<?php

namespace App\Controllers;



use App\Router;
use App\Utils\Validation;

use PDO;

class Payment
{
    /*
    @param Router to reach the database and view ;
    */
    public static function index(Router $router)
    {
        $router->renderView('client/checkout');
    }
}