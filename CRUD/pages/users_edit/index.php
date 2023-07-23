<h1> Edit user <h1>
<?php
    include_once 'classes/database.php';
    include_once 'classes/users.php';

    $user = new Users($db);

    if(isset($_GET) && isset($_GET['id'])) {
      $result = $user->readById($_GET['id']);
      ?>
      <form action="./pages/users_edit/action.php" method="post">
        <input type="hidden" name="personId" value='<?=$_GET['id']?>' />
      <?php 
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          echo "<input name='first_name' value='" . $row['FirstName'] . "' type='text' /> <br/> ";
          echo "<input name='last_name' value='" . $row['LastName'] . "' type='text' /> <br/> ";
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