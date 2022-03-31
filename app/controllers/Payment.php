<?php

namespace App\Controllers;



use App\Router;
use App\Models\Payments as PaymentsModel;
use App\Utils\UploadFile;

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
    public static function uploadNewPaymentGetway(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            // $active = $_POST['isActive'];
            $image = $_FILES['image'];

            // check if the image not empty or put the default
            if (empty($image['name']) == 1) {
                $imageName = 'add-cart.svg';
            } else {
                // upload the image 
                $cate = new UploadFile();
                if ($cate->uploadIamge($image)) {
                    $imageName = $cate->uploadIamge($image);
                }
            }

            $data = array(
                "name"  => $name,
                "created_by" => 6,
                "is_active" => 1,
                "image" => $imageName
            );
            $payments = new PaymentsModel();
            if ($payments->create($data)) {
                $message = array(
                    "success_massage" => "Payment added scuccessfuly"
                );
            } else {
                $message = array(
                    "faild_massage" => "Payment could not be adding"
                );
            }
            $payments->selectAll();
            $router->renderView('admin/payment/index', ["massage" => $message, 'payments' => PaymentsModel::$payments]);
        }
    }
}