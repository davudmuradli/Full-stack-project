<?php
  
  class Users{
    private $id;
    private $name;
    private $available;
    private $description;
    private $price;
    private $connection;
    public function __construct(Database $db){
      $this->connection = $db->getConnection();
    }

    public function create($firstName,$lastName,$county,$city){
      $sql = "INSERT INTO `users`(`PersonID`, `LastName`, `FirstName`, `county`, `City`) VALUES (?,?,?,?,?)";
      $stmt = $this->connection->prepare($sql);
      $stmt->bind_param('sssss', rand(), $lastName, $firstName, $county, $city);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result;
    }

    public function readAll() {
      $sql = "SELECT * FROM users";
      $stmt = $this->connection->prepare($sql);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result;
    }

    public function readById($id) {
      $sql = "SELECT * FROM users WHERE PersonID = ?";
      $stmt = $this->connection->prepare($sql);
      $stmt->bind_param('s', $id);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result;
    }

    public function update($firstName, $lastName, $id) {
      $sql = "UPDATE `users` SET `LastName`= ?,`FirstName`= ? WHERE PersonID = ?";
      $stmt = $this->connection->prepare($sql);
      $stmt->bind_param('sss', $lastName, $firstName, $id);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result;
    }
    public function delete($id) {
      $sql = "DELETE FROM users WHERE PersonID = ?";
      $stmt = $this->connection->prepare($sql);
      $stmt->bind_param('s', $id);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result;
    }

  }