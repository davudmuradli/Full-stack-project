<?php

// Database credentials
$host = "localhost";
$username = "root"; 
$password = ""; // Replace with your own password
$database = "users";

// Connect to MySQL server
$conn = mysqli_connect($host, $username, $password);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if the table exists
$result = mysqli_query($conn, "SHOW TABLES LIKE 'users'");
$tableExists = mysqli_num_rows($result) > 0;

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $database";
mysqli_query($conn, $sql);

// Select the database
mysqli_select_db($conn, $database);

// Create users table if it doesn't exist
if (!$tableExists) {
    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        surname VARCHAR(30) NOT NULL,
        salary FLOAT(10, 2) NOT NULL,
        address VARCHAR(100) NOT NULL,
        phone VARCHAR(20) NOT NULL
    )";
    mysqli_query($conn, $sql);

    // Insert some sample data
    $sql = "INSERT INTO `users`(`name`, `surname`, `salary`, `address`, `phone`) VALUES (?,?,?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssdss", $name, $surname, $salary, $address, $phone);

    $name = "John";
    $surname = "Doe";
    $salary = 5000.00;
    $address = "123 Main St";
    $phone = "555-5555";

    mysqli_stmt_execute($stmt);

    // Close MySQL statement
    mysqli_stmt_close($stmt);
}

// Display users table in HTML table format
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>

<table>
    <thead>
        <tr>
        <a href="createuser.php">Add User</a>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Salary</th>
            <th>Address</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['surname']; ?></td>
            <td><?php echo $row['salary']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['phone']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<?php
// Close MySQL connection
mysqli_close($conn);
?>
