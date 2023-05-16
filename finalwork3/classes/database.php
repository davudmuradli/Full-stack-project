<?php 
  class Database {
    public $connection;

    public function __construct(){
      $this->connection = new mysqli("localhost","root","","test");
      //now check the connection
      if ($this->connection->connect_error) {
        die("Connection Failed:" . $this->connection->connect_error);
      } 
    }

    public function getConnection(): mysqli {
        return $this->connection;      
    }
  }

  $db = new Database();