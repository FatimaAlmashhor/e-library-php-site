<?php

namespace App\Models;


use App\Database;
use PDO, PDOException, PDOStatement;

class Cities
{
    public static $cities;
    private $conn;
    function __construct()
    {
        $this->conn = new Database();
        $this->selectAll();
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
            $this->conn->query("SELECT * FROM `cities`")->done();
            if ($this->conn->execute()) {
                self::$cities = $this->conn->fetchAll();
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