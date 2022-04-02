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
    // client part


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
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $book = new ProductsModel();
            $publisher = new PublishersModel();
            $author = new AuthorsModel();
            $row = $book->getOneRow('id', $_POST['id']);
            echo "Inside the details </br>";
            print_r($row);
            if ($row) {
                $authIfo = $author->getOneRow('id', $row->author_id);
                $publisherIfo = $publisher->getOneRow('id', $row->publisher_id);
                print_r($authIfo);
                print_r($publisherIfo);
                // $pubAndAuht = array(
                //     'publisher_name' => $publisherIfo->name,
                //     'publisher_date' => $publisherIfo->created_at,
                //     'author_name' => $authIfo->name,
                // );
                // $router->renderView('client/details', ['book' => $row, 'addtional' => $pubAndAuht]);
            }
        }
        // $router->renderView('client/index');
    }



    // admin part
    public static function admin(Router $router)
    {
        $book  = new ProductsModel();
        $router->renderView('admin/books/index',  ["books" => $book->selectAll()]);
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
                "authors" => $auth->selectAll(),
                "publishers" => $publishers->selectAll(),
            );
            $router->renderView('admin/books/add',  $data);
        } else {
            $router->renderView('admin/books/add', ['faild_massage' => 'Something seems not right']);
        }
    }

    // inset new data to the database
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
            $book = new ProductsModel();
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
            if ($book->create($data)) {
                $message = array(
                    "success_massage" => "Book added scuccessfuly"
                );
            } else {
                $message = array(
                    "faild_massage" => "Book could not be adding"
                );
            }

            $router->renderView('admin/books/index', [$message, 'books' => $book->selectAll()]);
        }
    }

    static function delete(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            print_r($_POST['id']);
            $book = new ProductsModel();
            if ($book->deleteOneRow('id', $_POST['id'])) {
                $message = array(
                    "success_massage" => "scuccessfuly deleted the book"
                );
            } else {
                $message = array(
                    "faild_massage" => "Failed delete the book "
                );
            }
            $router->renderView('admin/books/index', ['massage' => $message, 'books' => $book->selectAll()]);
        }
    }
    static function showBook(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            print_r($_POST['id']);

            $book = new ProductsModel();
            $row = $book->getOneRow('id', $_POST['id']);
            if ($row) {
                print_r($row);
                $message = array(
                    "success_massage" => ''
                );
                $cates = new CategoriesModel();
                $auth = new AuthorsModel();
                $publishers = new PublishersModel();
                if ($cates->selectAll() && $auth->selectAll() && $publishers->selectAll()) {
                    $data = array(
                        "categories" => CategoriesModel::$categories,
                        "authors" => $auth->selectAll(),
                        "publishers" => $publishers->selectAll(),
                    );
                }

                $router->renderView('admin/books/add', ['massage' => $message, 'book' => $row, 'data' => $data]);
            } else {
                $message = array(
                    "faild_massage" => "There is no exist book "
                );
                $router->renderView('admin/books/index', ['massage' => $message, 'books' => $book->selectAll()]);
            }
        }
    }

    // this is function for update the book
    static function update(Router $router)
    {
        $book = new ProductsModel();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $book->id = $_POST['id'];
            $book->title = $_POST['title'];
            $book->description = $_POST['des'];
            $book->category_id = $_POST['category'];
            $book->author_id = $_POST['author'];
            $book->publisher_id = $_POST['publisher'];
            $book->quantity = $_POST['qty'];
            $book->pages_number = $_POST['pageNumber'];
            $book->format = $_POST['format'];
            $book->price = $_POST['price'];
            $book->is_active =  1; //$_POST['isActive'];
            $bookImage = $_FILES['bookImage'];

            print_r($_REQUEST);
            // check if the image not empty or put the default
            if (empty($bookImage['name']) == 1) {
                $book->image = $_POST['image'];
            } else {
                // upload the image 
                $image = new UploadFile();
                if ($image->uploadIamge($bookImage)) {
                    $book->image = $image->uploadIamge($bookImage);
                }
            }

            if ($book->update()) {
                $message = array(
                    "success_massage" => "Book edit scuccessfuly"
                );
            } else {
                $message = array(
                    "faild_massage" => "Book could not be edit"
                );
            }
            new ProductsModel();
            $router->renderView('admin/books/index', ['massage' => $message, 'books' => $book->selectAll()]);
        }
    }
}