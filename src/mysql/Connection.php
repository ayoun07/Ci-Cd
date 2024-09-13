<?php

use PDO;

class Connection{

    private $db_name;
    private $db_host;
    private $db_pass;
    private $db_user;
    private $pdo;
    
    public function __construct($db_name, $db_user = 'root', $db_pass = 'Postmalone0751@', $db_host = 'localhost'){
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    public function getPDO(){
        $pdo = new \PDO ('mysql:dbname=task_management;host=localhost', 'root', 'Postmalone0751@');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo = $pdo;
        return $pdo;
    }

    public function query($statement){
        $req = $this->getPDO()->query($statement);
        $dates = $req->fetchAll(PDO::FETCH_OBJ);
        return $dates;
    }

}
