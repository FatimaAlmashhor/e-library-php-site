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

    // function __construct()
    // {
    //     new ProductsModel();
    //     new CategoriesModel();
    //     new AuthorsModel();
    //     new PublishersModel();
    // }
    /*
    @param Router to reach the database and view ;
    */

    public static function index(Router $router)
    {
        $book = new ProductsModel();
        new CategoriesModel();
        foreach (CategoriesModel::$categories as $cate) {
            echo "</br>";
            $arr[$cate->id] = $book->selectBooksOfcategory($cate->id);
        }
        // print_r($arr);
        $router->renderView('client/index', ["books" => $arr, "categories" => CategoriesModel::$categories]);
    }
    public static function details(Router $router)
    {
        $router->renderView('client/details');
    }
    public static function admin(Router $router)
    {
        new ProductsModel();
        $router->renderView('admin/books/index',  ["books" => ProductsModel::$books]);
    }
    public static function add(Router $router)
    {

        // ! here need to fix it 
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

            // check if the image not empty or put the default
            if (empty($bookImage['name']) == 1) {
                $imageName = '465531.jpg';
            } else {
                // upload the image 
                $image = new UploadFile();
                if ($image->uploadIamge($bookImage)) {
                    $imageName = $image->uploadIamge($bookImage);
                }
            }

            $data = array(
                "title"  => $title,
                "price" => $price,
                "description" => $des,
                "category_id" => $cates,
                "author_id" => $author,
                "publisher_id" => $publisher,
                "is_active" => 1,
                "format" => $format,
                "pages_number " => $pageNumber,
                "created_by" => 6,
                "quantity" => $qty,
                "image" => $imageName
            );
            $book = new ProductsModel();
            if ($book->create($data)) {
                $message = array(
                    "success_massage" => "Book added scuccessfuly"
                );
            } else {
                $message = array(
                    "faild_massage" => "Book could not be adding"
                );
            }
            new ProductsModel();
            $router->renderView('admin/books/index', [$message, 'books' => ProductsModel::$books]);
        }
    }
}