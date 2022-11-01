<?php

class Siswa_model {
    private $dbh; // database handler
    private $stmt;

    public function __construct() {
        $dsn = 'mysql:host=127.0.0.1;dbname=phpmvc'; // data source name
        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getData()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM siswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}