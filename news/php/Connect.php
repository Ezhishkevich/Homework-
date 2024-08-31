<?php

namespace php;

require_once "vendor/autoload.php";

use Exception;
use PDO;

class Connection
{
    public PDO $db;
    public function getConection()
    {
        $conn = "mysql:host=127.0.0.1;3306;dbname=News;charset=utf8;";
        $option = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION


        ];
        try {
            $this->db = new PDO($conn, 'root', '', $option);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }
}
