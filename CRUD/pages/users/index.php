<h1> Users </h1>
<?php
    include_once 'classes/database.php';
    include_once 'classes/users.php';

    $user = new Users($db);
    $result = $user->readAll();
?>

<a href="index.php?page=users_create"> Create New User </a>

<table>
  <tr>
    <th> First Name </th>
    <th> Last Name </th>
    <th> County </th>
    <th> City </th>
    <th> Actions </th>
  </tr>
  <?php 
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        echo " <tr> ";
          echo "<td> ".$row['FirstName']." </td>";
          echo "<td> ".$row['LastName']." </td>";
          echo "<td> ".$row['county']." </td>";
          echo "<td> ".$row['City']." </td>";
          echo "<td> <a href='index.php?page=users_show&id=".$row['PersonID']."'>Show</a> | <a href='index.php?page=users_edit&id=".$row['PersonID']."'>Edit</a> | <a href='index.php?page=users_delete&id=".$row['PersonID']."'>Delete</a>  </td>";
        echo " </tr> ";
      }
    }
  ?>
</table>
