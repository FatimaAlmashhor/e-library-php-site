<?php

namespace App\Controllers;

require_once __DIR__ . "/../../vendor/autoload.php";


use App\Router;
use App\Models\Users;

use PDO;

class User
{
    /*
    @param Router to reach the database and view ;
    */
    function index(Router $route)
    {
        $route->renderView('users_view');
    }
}