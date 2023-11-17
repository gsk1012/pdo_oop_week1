<?php

class database {
    private $host;
    private $username;
    private $password;
    private $database;
    private $dbh;

    public function __construct() {
        $this->host = 'localhost:3308';
        $this->username = 'root';
        $this->password = '';
        $this->database = 'pdo_toets';

        $dsn = "mysql:host=$this->host;dbname=$this->database";
        $this->dbh = new PDO($dsn, $this->username, $this->password);
    }
}


?>