<?php

namespace App\Models;


use App\Database;
use PDO, PDOException, PDOStatement;

class Products
{
    private $conn;
    function __construct()
    {
        $this->conn = new Database();
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
}