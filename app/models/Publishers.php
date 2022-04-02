<?php

namespace App\Models;


use App\Database;
use App\Models\Model;
use PDO, PDOException, PDOStatement;

class Publishers extends Model
{
    function __construct()
    {
        parent::$tableName = 'publishers';
    }
}