<?php

namespace App\Models;


use App\Database;
use PDO, PDOException, PDOStatement;

class Products
{
    public static $books;
    private $conn;
    function __construct()
    {
        $this->conn = new Database();
    }
    function create($data)
    {
        try {
            $keys = implode(",", array_keys($data));
            $values = implode("','", array_values($data));

            $this->conn->query("INSERT INTO books (" . $keys . ") VALUES ('" . $values . "')")->done();
            if ($this->conn->execute())
                return true;
            else
                return false;
        } catch (PDOException $thr) {
            return false;
        } catch (PDOStatement $thr) {
            return false;
        }
    }
    
    
    function selectAll()
    {
        try {
            $this->conn->query("SELECT * FROM `books`")->done();
            if ($this->conn->execute()) {
                self::$books = $this->conn->fetchAll();
                return  true;
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