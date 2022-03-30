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
                $model = new UserModel();
                $isCreationDoneWell = $model->create($date);

                if ($isCreationDoneWell) {
                    $router->renderView('client/index');
                    echo "scuccess";
                } else {
                    $router->renderView('client/index', ['faild_massage' => 'Something seems not correct ']);
                    echo "faild";
                }
            } else {
                $router->renderView('client/index', $checkVaildOf->getErrors());
                echo "not valid";
                print_r($checkVaildOf->getErrors());
            }
        }
        $router->renderView('client/index');
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