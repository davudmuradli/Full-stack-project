<?php
include ('check.php');
$conn = mysqli_connect("localhost", "root", "", "users");


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $salary = $_POST["salary"];
  $address = $_POST["address"];
  $phone = $_POST["phone"];

  $sql = "INSERT INTO users (name, surname, salary, address, phone) VALUES ('$name', '$surname', $salary, '$address', '$phone')";
  mysqli_query($conn, $sql);

  header("Location: index.php");
  exit;
}

mysqli_close($conn);
?>

<form method="POST">
  <label for="name">Name:</label>
  <input type="text" name="name" required>

  <label for="surname">Surname:</label>
  <input type="text" name="surname" required>

  <label for="salary">Salary:</label>
  <input type="number" name="salary" required>

  <label for="address">Address:</label>
  <input type="text" name="address" required>

  <label for="phone">Phone:</label>
  <input type="text" name="phone" required>

  <input type="submit" value="Add User">
</form>
