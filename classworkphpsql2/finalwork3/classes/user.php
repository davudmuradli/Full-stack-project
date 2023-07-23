<?php
  
  class Users{
    
    private $connection;
    public function __construct(Database $db){
      $this->connection = $db->getConnection();
    }

    public function create($namesurname,$adress,$salary){
      $sql = "INSERT INTO `employees`(`Name Surname`, `Adress`, `Salary`) VALUES (?,?,?)";
      $stmt = $this->connection->prepare($sql);
      $stmt->bind_param('sss',$namesurname,$adress,$salary);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result;
    }

    public function readAll() {
      $sql = "SELECT * FROM employees";
      $stmt = $this->connection->prepare($sql);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result;
    }

    public function readById($id) {
      $sql = "SELECT * FROM employees WHERE id = ?";
      $stmt = $this->connection->prepare($sql);
      $stmt->bind_param('s', $id);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result;
    }

    public function update($id,$namesurname,$adress,$salary) {
      $sql = "UPDATE `employees` SET `id`=?, `Name Surname`=?,`Adress`=?,`Salary`=? WHERE id = ?";
      $stmt = $this->connection->prepare($sql);
      $stmt->bind_param('ssss', $id,$namesurname,$adress,$salary);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result;
    }
    public function delete($id) {
      $sql = "DELETE FROM `employees` WHERE id = ?";
      $stmt = $this->connection->prepare($sql);
      $stmt->bind_param('s', $id);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result;
    }

  }