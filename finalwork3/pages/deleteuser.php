<?php include('head.php')?>
<h1> Please confirm you want to delete the User below: <h1>
<?php
    include_once "finalwork3/classes/database.php";
    include_once '/finalwork3/classes/user.php';

    $product = new Users($db);

    if(isset($_GET) && isset($_GET['id'])) {
      $result = $product->readById($_GET['id']);
      ?>
      <form action="./pages/actiondelete.php" method="post">
        <input type="hidden" name="id" value='<?=$_GET['id']?>' />
        <?php 
          if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
              echo "<h3>" . $row['namesurname'] . "<h3>";
            }
          }
        ?>
        <input type='submit'  value="Confirm" />
      </form>
      <?php
    } else {
      die(' missing product id');
    }

    // 1 - navigate to show page
    // 2 - connect to database 
    // 3 - execute query user readById 
    // 4 - bring result  
    // 5 - if result has value show the user  
?>