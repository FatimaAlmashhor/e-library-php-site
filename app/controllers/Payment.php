<?php

namespace App\Controllers;



use App\Router;
use App\Models\Payments as PaymentsModel;
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
    public static function adminPayment(Router $router)
    {
        new PaymentsModel();
        $router->renderView('admin/payment/index', ['payments' => PaymentsModel::$payments]);
    }
    public static function adminAddPayment(Router $router)
    {
        $router->renderView('admin/payment/add');
    }
    public static function adminEditPayment(Router $router)
    {
        $router->renderView('admin/payment/edit');
    }
    public static function adminDeletePayment(Router $router)
    {
        $router->renderView('admin/payment/add');
    }
}