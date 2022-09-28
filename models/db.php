<?php
  class db{
    private $host, $dbname, $username, $pass, $pdo;

    public function __construct()
    {
      $this->host = "localhost";
      $this->dbname = "proyecto_servicio_tecnico";
      $this->username = "root";
      $this->pass = "";

      $this->connect();
    }

    protected function connect()
    {
      $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->pass);
    }

    public function __destruct(){ $this->pdo = null; }
  }