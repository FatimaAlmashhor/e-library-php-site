<?php

namespace App;

use PDO;
use PDOException;

class Database
{

    private $conn;
    function __construct()
    {
        try {
            $this->conn  = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'Scussesfuly connected ';
        } catch (PDOException $e) {
            echo 'Failed To Connected' . $e;
        }
    }
    function query(string $sql)
    {
        $this->sql = $sql;
        return $this;
    }
    function orderBY($sql)
    {
        $this->sql = $this->sql . "  "  . $sql;
        return $this;
    }
    function groupBy($sql)
    {
        $this->sql = $this->sql . "  "  . $sql;
        return $this;
    }
    function done()
    {
        echo $this->sql;
        return $this->stmt = $this->conn->prepare($this->sql);
    }
    function bind(string $param, string $value, int $type)
    {
        $this->stmt->bindParam($param, $value, $type);
    }
    function execute(): bool
    {
        if ($this->stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // return object
    function fetch()
    {
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    // return array 
    public function fetchAll(): array
    {
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function rowCount(): int
    {
        return $this->stmt->rowCount();
    }

    public function __destruct()
    {
        $this->db = null;
        $this->stmt = null;
    }
}