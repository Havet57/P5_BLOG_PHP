<?php 

namespace App\Repository;

class CoreRepository {
    const DB_USERNAME='root';
    const DB_PASSWORD='';
    const DB_NAME="blog";
    const DB_SERVER='localhost';

    protected \PDO $pdo;

    public function __construct()
    {
        $this->pdo=new \PDO('mysql:host='.self::DB_SERVER.';dbname='.self::DB_NAME.';charset=utf8', self::DB_USERNAME, self::DB_PASSWORD);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
    }
}