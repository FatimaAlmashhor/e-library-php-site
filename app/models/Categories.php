<?php

namespace App\Models;


use App\Database;
use PDO, PDOException, PDOStatement;

class Categories
{
    public static $categories;
    private $conn;
    function __construct()
    {
        $this->conn = new Database();
    }
    function __set($name, $value)
    {
        $this->$name = $value;
    }
    function create($data)
    {
        try {
        } catch (PDOException $thr) {
            return false;
        } catch (PDOStatement $thr) {
            return false;
        }
    }
    function selectAll()
    {
        try {
            $this->conn->query("SELECT * FROM `categories`")->done();
            if ($this->conn->execute()) {
                self::$categories = $this->conn->fetchAll();
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