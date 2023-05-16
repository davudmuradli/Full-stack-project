<h1> Edit user <h1>
<?php
    include_once 'classes/database.php';
    include_once 'classes/user.php';

    $user = new Users($db);

    if(isset($_GET) && isset($_GET['id'])) {
      $result = $user->readById($_GET['id']);
      ?>
      <form action="./pages/actionedit.php" method="post">
        <input type="hidden" name="id" value='<?=$_GET['id']?>' />
      <?php 
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          echo "<input name='namesurname' value='" . $row['Name Surname'] . "' type='text' /> <br/> ";
          echo "<input name='adress' value='" . $row['Adress'] . "' type='text' /> <br/> ";
          echo "<input name='salary' value='" . $row['Salary'] . "' type='text' /> <br/> ";
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