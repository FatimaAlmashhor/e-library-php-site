<?php

namespace App\Controllers;



use App\Router;
use App\Models\Publishers as PublisherModel;
use App\Utils\UploadFile;

use PDO;

class Publishers
{
    /*
    @param Router to reach the database and view ;
    */
    public static function index(Router $router)
    {
        $publisher = new PublisherModel();
        $router->renderView('admin/publishers/index', ['publisher' =>   $publisher->selectAll()]);
    }
    public static function add(Router $router)
    {
        $router->renderView('admin/publishers/add');
    }
    public static function edit(Router $router)
    {
        $router->renderView('admin/publishers/edit');
    }
    public static function delete(Router $router)
    {
        $router->renderView('admin/publishers/add');
    }
    static function  upload(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $fax = $_POST['fax'];
            $country = $_POST['country'];
            $address = $_POST['address'];
            // $active = $_POST['isActive'];
            $publisherImage = $_FILES['image'];

            // check if the image not empty or put the default
            if (empty($image['name'])) {
                $imageName = '465531.jpg';
            } else {
                // upload the image 
                $image = new UploadFile();
                if ($image->uploadIamge($publisherImage)) {
                    $imageName = $image->uploadIamge($publisherImage);
                }
            }

            $data = array(
                "name"  => $name,
                "email" => $email,
                "phone" => $phone,
                "address" => $address,
                "country" => $country,
                "fax" => $fax,
                "is_active" => 1,
                "created_by" => 6,
                "image" => $imageName
            );
            $publisher = new PublisherModel();
            if ($publisher->create($data)) {
                $message = array(
                    "success_massage" => "Publisher added scuccessfuly"
                );
            } else {
                $message = array(
                    "faild_massage" => "Publisher could not be adding"
                );
            }

            $router->renderView('admin/publishers/index', ['massage' => $message, 'publisher' =>   $publisher->selectAll()]);
        }
    }
}