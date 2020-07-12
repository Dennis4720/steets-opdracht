<?php

namespace App;

use PDO;
use PDOException;

class Database
{
    public $PDO;
    public function __construct(){
        $dsn = 'mysql:dbname=[removed];host=[removed]';
        $user = 'root';
        $password = 'X';
        try {
            $PDO = new PDO($dsn, $user, $password);
            $this->PDO = $PDO;
            return $PDO;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
}