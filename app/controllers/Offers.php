<?php

namespace App\Controllers;



use App\Router;
use App\Models\Offers as OffersModel;
use App\Models\Categories as CategoriesModel;
use App\Models\Products as ProductsModel;
use App\Utils\Validation;

use PDO;

class Offers
{
    /*
    @param Router to reach the database and view ;
    */
    public static function index(Router $router)
    {
        new OffersModel();
        $router->renderView('admin/offers/index', ['offers' => OffersModel::$offers]);
    }
    public static function add(Router $router)
    {
        $cates = new CategoriesModel();
        $books = new ProductsModel();

        if ($cates->selectAll() && $books->selectAll()) {
            $data = array(
                "categories" => CategoriesModel::$categories,
                "books" => ProductsModel::$books,
            );
        } else $data = [];
        $router->renderView('admin/offers/add', $data);
    }
    public static function edit(Router $router)
    {
        $router->renderView('admin/offers/edit');
    }
    public static function delete(Router $router)
    {
        $router->renderView('admin/offers/add');
    }

    static function  upload(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $discountType = $_POST['discountType'];
            $discount = $_POST['discount'];
            $books = $_POST['books'];
            $categories = $_POST['categories'];
            $start = $_POST['startDay'];
            $end = $_POST['endDay'];

            $booksString = null;
            $catesString = null;
            $all = null;
            print_r($discountType);
            if ($discountType == 'books') {
                $booksString = implode(',', $books);
            }
            if ($discountType == 'categories') {

                $catesString = implode(',', $categories);
            }
            if ($discountType == 'all') {
                $all = 1;
            }
            print_r($catesString);
            print_r($booksString);
            print_r($all);
            // $active = $_POST['isActive'];


            $data = array(
                "title"  => $title,
                "discount" => $discount,
                "end_date" => $end,
                "start_date" => $start,
                "is_active" => 1,
                "all_books" => $all,
                "category_ids " => $catesString,
                "book_ids" => $booksString,
                "created_by" => 6,

            );
            $offers = new OffersModel();
            if ($offers->create($data)) {
                $message = array(
                    "success_massage" => "Offer added scuccessfuly"
                );
            } else {
                $message = array(
                    "faild_massage" => "Offer could not be adding"
                );
            }
            $offers->selectAll();
            $router->renderView('admin/offers/index', ['massage' => $message, 'offers' => OffersModel::$offers]);
        }
    }
}