<?php 

namespace App\Repository;

class CoreRepository {
    

    protected \PDO $pdo;

    public function __construct()
    {
        $config=json_decode(file_get_contents('config/database.json'));
        $this->pdo=new \PDO('mysql:host='.$config->DB_SERVER.';dbname='.$config->DB_NAME.';charset=utf8', $config->DB_USERNAME, $config->DB_PASSWORD);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
    }
}