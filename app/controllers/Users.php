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
        $router->renderView('users/index');
        // Pass info
        // $fname = $_POST['fname'];
        // $lname = $_POST['lname'];
        // $email = $_POST['email'];
        // $pass = $_POST['password'];
        // $cpass = $_POST['cpassword'];

        // // check password and email was valid before get into the model
        // $checkVaildOf = new Validation();
        // if (
        //     $checkVaildOf->password($pass, $cpass)->email($email)->check()
        // ) {
        //     // encrypt the password
        //     $hashedPass =   password_hash($pass, PASSWORD_DEFAULT);

        //     // prepar the data
        //     $date = array(
        //         "auth_name" => $fname + " " + $lname,
        //         "auth_email" => $email,
        //         "auth_password" => $hashedPass
        //     );
        //     $model = new UserModel();
        //     $isCreationDoneWell = $model->create($date);
        //     print_r($isCreationDoneWell);
        //     if ($isCreationDoneWell) {
        //         $router->renderView('users/index');
        //         echo "scuccess";
        //     } else {
        //         $router->renderView('books/index');
        //         echo "faild";
        //     }
        // }
    }
}