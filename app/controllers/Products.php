<?php

namespace App\Controllers;



use App\Router;
use App\Models\Products as ProductsModel;
use App\Models\Categories as CategoriesModel;
use App\Models\Authors as AuthorsModel;
use App\Models\Publishers as PublishersModel;
use App\Utils\UploadFile;

use PDO;

class Products
{

    /*
    @param Router to reach the database and view ;
    */

    public static function index(Router $router)
    {
        $router->renderView('client/index');
    }
    public static function details(Router $router)
    {
        $router->renderView('client/details');
    }
    public static function admin(Router $router)
    {
        $books = new ProductsModel();
        $books->selectAll();
        $router->renderView('admin/books/index',  ["books" => ProductsModel::$books]);
    }
    public static function add(Router $router)
    {
        $cates = new CategoriesModel();
        $auth = new AuthorsModel();
        $publishers = new PublishersModel();

        if ($cates->selectAll() && $auth->selectAll() && $publishers->selectAll()) {
            $data = array(
                "categories" => CategoriesModel::$categories,
                "authors" => AuthorsModel::$authors,
                "publishers" => PublishersModel::$publishers
            );
            $router->renderView('admin/books/add',  $data);
        } else {
            $router->renderView('admin/books/add', ['faild_massage' => 'Something seems not right']);
        }
    }
    static function  upload(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $des = $_POST['des'];
            $cates = $_POST['category'];
            $author = $_POST['author'];
            $publisher = $_POST['publisher'];
            $qty = $_POST['qty'];
            $pageNumber = $_POST['pageNumber'];
            $format = $_POST['format'];
            $price = $_POST['price'];
            // $active = $_POST['isActive'];
            $bookImage = $_FILES['bookImage'];

            // upload the image 
            $image = new UploadFile();
            if ($image->uploadIamge($bookImage)) {
                echo 'hello';
                print_r($image->uploadIamge($bookImage));
            }
            // $data = array(
            //     "title"  => $title,
            //     "price" => $price,
            //     "description" => $des,
            //     "category_id" => $cates,
            //     "author_id" => $author,
            //     "publisher_id" => $publisher,
            //     "is_active" => $active,
            //     "format" => $format,
            //     "pages_number " => $pageNumber,
            //     "created_by" => 6,
            //     "quantity" => $qty
            // );
            // $book = new ProductsModel();
            // if ($book->create($data)) {
            //     $message = array(
            //         "success_massage" => "Book added scuccessfuly"
            //     );
            // } else {
            //     $message = array(
            //         "faild_massage" => "Book could not be adding"
            //     );
            // }
            // $router->renderView('admin/books/index', $message);
        }
    }
}