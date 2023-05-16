<?php
 include('check.php');
 include('head.php');

$conn = mysqli_connect("localhost", "root", "", "users");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn, "users");

if (isset($_GET['query'])) {
    $query = $_GET['query'];

    $sql = "SELECT * FROM users WHERE name LIKE '%$query%' OR surname LIKE '%$query%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Surname</th>";
        echo "<th>Salary</th>";
        echo "<th>Address</th>";
        echo "<th>Phone</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['surname'] . "</td>";
            echo "<td>" . $row['salary'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "No users found.";
    }
}
?>

<form method="POST" action="">
    <label for="query">Search:</label>
    <input type="text" name="query" id="query">
    <button type="submit">Search</button>
</form>
