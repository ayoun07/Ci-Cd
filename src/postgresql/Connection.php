<?php

use PDO;

class Connection
{

    private $db_name;
    private $db_host;
    private $db_pass;
    private $db_user;
    private $pdo;
    private $db_port;

    public function __construct($db_name, $db_user = 'postgres', $db_pass = 'Postmalone0751@', $db_host = 'localhost', $db_port= 5432)
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
        $this->db_port = $db_port;
    }

    public function getPDO()
    {
        $pdo = new \PDO('pgsql:dbname=basepostgres;host=localhost', 'postgres', 'Postmalone0751@');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo = $pdo;
        return $pdo;
    }

    public function query($statement)
    {
        $req = $this->getPDO()->query($statement);
        $dates = $req->fetchAll(PDO::FETCH_OBJ);
        return $dates;
    }
}
