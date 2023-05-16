<?php 

    include_once $_SERVER['DOCUMENT_ROOT'] . '/finalwork3/classes/database.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/finalwork3/classes/users.php';

    if(isset($_POST)){
      // 1 - connect database
      $user = new Users($db);

      //2 - get the new values from the form 
      $namesurname = $_POST['namesurname'];
      $adress = $_POST['adress'];
      $salary = $_POST['salary'];
      $id = $_POST['id'];

      /**
       * 3 - prepare the SQL to UPDATE the user 
       * 4 - execute the SQL 
       */
      $result = $user->update($namesurname, $adress, $salary);
    }

  /**
   * 5 - redirect to page users to see the user after update
   */
  $url = "http://localhost/finalwork3/pages/user.php";
  header("Location: " . $url);