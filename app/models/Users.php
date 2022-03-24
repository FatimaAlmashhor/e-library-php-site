<?php

namespace App\Models;


use App\Database;
use PDO, PDOException, PDOStatement;

class Users
{
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

            $this->conn->query("INSERT INTO auth (" . $keys . ") VALUES ('" . $values . "')")->done();
            if ($this->conn->execute())
                return true;
        } catch (PDOException $thr) {
            return false;
        } catch (PDOStatement $thr) {
            return false;
        }
    }
}