<?php

namespace App\Models;


use App\Models\Model;
use PDO, PDOException, PDOStatement;
use App\Database;

class Products extends Model
{
    function __construct()
    {
        parent::$tableName = 'books';
        // self::$books = $this->selectAll();
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

            $setQuery = '';
            $end = end(get_object_vars($this));
            foreach (get_object_vars($this) as $key => $property) {
                // need to get rid of the , in the end of last column
                // print_r(obj());
                if ($key !== 'id' && $property != self::$tableName) {
                    $stringValue = is_string($property) ? "'" . $property . "'" : $property;
                    if ($end == $property) {

                        $setQuery .= "" . $key . "" . "= " . $stringValue .   "";
                    } else
                        $setQuery .= "" . $key . "" . "= "  .  $stringValue .  " ,";
                }
            }
            echo " </br>";
            print_r($setQuery);
            $this->conn = new Database();
            $this->conn->query("UPDATE " . self::$tableName . " SET " . $setQuery . " WHERE id=" . $this->id . "")->done();
            if ($this->conn->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $thr) {
            return false;
        } catch (PDOStatement $thr) {
            return false;
        }
    }
}