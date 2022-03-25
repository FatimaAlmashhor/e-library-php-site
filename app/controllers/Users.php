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
        $router->renderView('books/index');
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
                    "auth_name" => $fname  . " " . $lname,
                    "auth_email" => $email,
                    "auth_password" => $hashedPass
                );

                // connect to the model
                $model = new UserModel();
                $isCreationDoneWell = $model->create($date);

                if ($isCreationDoneWell) {
                    $router->renderView('users/index');
                    echo "scuccess";
                } else {
                    $router->renderView('books/index', ['faild_massage' => 'Something seems not correct ']);
                    echo "faild";
                }
            } else {
                $router->renderView('users/index', $checkVaildOf->getErrors());
                echo "not valid";
                print_r($checkVaildOf->getErrors());
            }
        }
        // $router->renderView('users/index');
    }
    public static function login(Router $router)
    {
        echo "Login ";
        $router->renderView('users/index');
    }
}