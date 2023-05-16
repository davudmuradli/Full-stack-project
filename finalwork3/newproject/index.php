<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>finalwork</title>
    <style>
    table, th,tr,td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    tr:nth-child(even){
        background-color: lightgray;
    }

    table td {
        padding: 5px;
    }</style>
</head>
<body>
    
</body>
</html>


<?php

$host = "localhost";
$username = "root"; 
$database = "users";

$conn = mysqli_connect($host, $username);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($conn, "SHOW TABLES LIKE 'users'");

$sql = "CREATE DATABASE IF NOT EXISTS $database";
mysqli_query($conn, $sql);

mysqli_select_db($conn, $database);

    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        surname VARCHAR(30) NOT NULL,
        salary FLOAT(10, 2) NOT NULL,
        address VARCHAR(100) NOT NULL,
        phone VARCHAR(20) NOT NULL
    ) AUTO_INCREMENT=1";
    
    mysqli_query($conn, $sql);

    $sql = "INSERT INTO `users`(`name`, `surname`, `salary`, `address`, `phone`) VALUES (?,?,?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssdss", $name, $surname, $salary, $address, $phone);

    $name = null;
    $surname = null;
    $salary = null;
    $address = null;
    $phone = null;

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>
<?php
include('check.php');
 include('head.php');
?>>
<h1>Users Page</h1>
<a href="createuser.php">Add User</br></a>
<a href="searchuser.php">Search User</a>
<table>
    <thead>
        <tr>
        
            <!-- <th>ID</th> -->
            <th>Name</th>
            <th>Surname</th>
            <th>Salary</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <<?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['surname']; ?></td>
        <td><?php echo $row['salary']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><a href="edituser.php?id=<?php echo $row['id']; ?>">Edit User  </a>
        <a href="deleteuser.php?id=<?php echo $row['id']; ?>">Delete User</a></td>
    </tr>
<?php } ?>

    </tbody>
</table>

<?php
mysqli_close($conn);
?>
