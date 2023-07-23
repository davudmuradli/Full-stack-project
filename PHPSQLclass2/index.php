<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include'dp.php';
$sql = "SELECT * FROM persons where id=" . $_GET['PersonID'] ;
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<a href='detail.php?id=".$row['PersonID']."'>" . $row["FirstName"] . "</a> <br/>";
    } 
  }

$connection->close();
  ?>
