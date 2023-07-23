<h1> Please confirm you want to delete the user below: <h1>
<?php
    include_once 'classes/database.php';
    include_once 'classes/users.php';

    $user = new Users($db);

    if(isset($_GET) && isset($_GET['id'])) {
      $result = $user->readById($_GET['id']);
      ?>
      <form action="./pages/users_delete/action.php" method="post">
        <input type="hidden" name="personId" value='<?=$_GET['id']?>' />
      <?php 
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          echo "<h1>" . $row['FirstName'] . " " . $row['LastName'] . "<h1>";
        }
      }
      ?>
        <input type='submit'  value="Confirm" />
      </form>
      <?php
    } else {
      die(' missing user id');
    }

    // 1 - navigate to show page
    // 2 - connect to database 
    // 3 - execute query user readById 
    // 4 - bring result  
    // 5 - if result has value show the user  
?>