<?php

namespace App\Models;


use App\Database;
use PDO, PDOException, PDOStatement;

class Offers
{
    public static $offers;
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
            $keys = implode(",", array_keys($data));
            $values = implode("','", array_values($data));

            $this->conn->query("INSERT INTO offers (" . $keys . ") VALUES ('" . $values . "')")->done();
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
            $this->conn->query("SELECT * FROM `offers`")->done();
            if ($this->conn->execute()) {
                self::$offers = $this->conn->fetchAll();
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