<?php

namespace App\Models;

use App\Database;
use PDO, PDOException, PDOStatement;

class Model
{

    public static $tableName;
    public static $data;
    function __set($name, $value)
    {
        $this->$name = $value;
    }
    function create($data)
    {
        try {
            $conn = new Database();
            $keys = implode(",", array_keys($data));
            $values = implode("','", array_values($data));

            $conn->query("INSERT INTO " . self::$tableName . " (" . $keys . ") VALUES ('" . $values . "')")->done();
            if ($conn->execute())
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
            $conn = new Database();
            $conn->query("SELECT * FROM `" . self::$tableName . "` WHERE is_active = 1 ")->done();
            if ($conn->execute()) {
                return  $conn->fetchAll();
            } else {
                return false;
            }
        } catch (PDOException $thr) {
            return false;
        } catch (PDOStatement $thr) {
            return false;
        }
    }
    /**
     * @param $row string row column name
     */
    function deleteOneRow($column, $id)
    {
        try {
            $conn = new Database();
            $conn->query("UPDATE  `" . self::$tableName . "` SET  is_active = 0  WHERE " . $column . " =:id ")->done();
            $conn->bind(':id',  $id,  PDO::PARAM_INT);

            if ($conn->execute()) {
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

    function getOneRow($column, $id)
    {
        try {
            $conn = new Database();
            $conn->query("SELECT * FROM  `" . self::$tableName . "`   WHERE " . $column . " =:id ")->done();
            $conn->bind(':id',  $id,  PDO::PARAM_INT);

            if ($conn->execute()) {
                return $conn->fetch();
            } else {
                echo "<h1>false</h1> ";
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
    }
}