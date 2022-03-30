<?php

namespace App\Controllers;



use App\Router;
use App\Utils\Validation;
use App\Models\Users as UserModel;

use PDO;

class Users
{
    /*
    @param Router to reach the database and view ;
    */
    public static function index(Router $router)
    {
        $router->renderView('client/index');
    }
    public static function register(Router $router)
    {

        // Pass info
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $cpass = $_POST['cpassword'];
            // check password and email was valid before get into the model
            $checkVaildOf = new Validation();

            $checkVaildOf->name('password')->value($pass)->required();
            $checkVaildOf->name('email')->value($email)->required();
            $checkVaildOf->name('name')->value($fname)->min(5)->max(10)->required();
            if (
                $checkVaildOf->isSuccess() && Validation::is_email($email) &&
                Validation::is_valid_pass($pass, $pass)
            ) {
                // encrypt the password
                $hashedPass =   password_hash($pass, PASSWORD_DEFAULT);

                // prepear the data
                $date = array(
                    "name" => $fname  . " " . $lname,
                    "email" => $email,
                    "password" => $hashedPass,
                    "is_active" => 1,
                    "role_id" => 1
                );

                // connect to the model
                $pass = false;
                $model = new UserModel();
                $isCreationDoneWell = $model->create($date);

                if ($isCreationDoneWell) {
                    $massage =   ["success_massage" => "User added scuccessfuly"];
                    $pass = true;
                    // $router->renderView('client/index');
                    echo "scuccess";
                } else {
                    $massage = ['faild_massage' => 'Something seems not correct '];
                    // $router->renderView('client/index', ['faild_massage' => 'Something seems not correct ']);
                    echo "faild";
                }
            } else {
                $massage = ['faild_massage' => $checkVaildOf->getErrors()];
                // $router->renderView('client/index', $checkVaildOf->getErrors());
            }
            echo  $_SERVER["REQUEST_URI"];
            $path = 'client/index';

            if ($_SERVER["REQUEST_URI"] == '/admin/users/add' && $pass)
                $path = 'admin/users/index';
            else if ($_SERVER["REQUEST_URI"] == '/admin/users/add' &&  !$pass)
                $path = 'admin/users/add';
            new UserModel();
            $router->renderView($path, ['massage' => $massage, 'users' =>  UserModel::$users]);
        }
    }
    public static function login(Router $router)
    {
        echo "Login ";
        $router->renderView('users/index');
    }

    public static function adminUsers(Router $router)
    {
        new UserModel();
        $router->renderView('admin/users/index', ['users' => UserModel::$users]);
    }
    public static function adminAddUsers(Router $router)
    {
        $router->renderView('admin/users/add');
    }
    public static function adminEditUsers(Router $router)
    {
        $router->renderView('admin/users/edit');
    }
    public static function adminDeleteUsers(Router $router)
    {
        $router->renderView('admin/users/add');
    }
}