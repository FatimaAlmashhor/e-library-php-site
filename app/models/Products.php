<?php

namespace App\Models;


use App\Models\Model;
use PDO, PDOException, PDOStatement;
use App\Database;

class Products extends Model
{
    public static $books;
    public static $productsInstanse;


    function __construct()
    {
        parent::$tableName = 'books';

        self::$productsInstanse = $this;
        self::$books = $this->selectAll();
    }


    function selectBooksOfcategory($cate_id)
    {
        try {
            $this->conn = new Database();
            $this->conn->query("SELECT * FROM `books` WHERE `category_id` =:cateId ")->done();
            $this->conn->bind(':cateId',  $cate_id,  PDO::PARAM_INT);

            if ($this->conn->execute()) {
                return $this->conn->fetchAll();
            } else {
                return false;
            }
        } catch (PDOException $thr) {
            return false;
        } catch (PDOStatement $thr) {
            return false;
        }
    }
    function update()
    {
        try {
            // $this->conn = new Database();
            $set = '';
            foreach (get_object_vars($this) as $key => $property) {
                // need to get rid of the , in the end of last column
                // print_r(obj());
                if ($key !== 'id')
                    $set .= $key . "=" . $property . " , ";
            }
            echo " </br>";
            print_r($set);
            // $this->conn->query("UPDATE " . self::$tableName . " SET " . $set . " WHERE id=" . $this->id . "")->done();
        } catch (PDOException $thr) {
            return false;
        } catch (PDOStatement $thr) {
            return false;
        }
    }
}