<?php 

    include_once $_SERVER['DOCUMENT_ROOT'] . '/myapp/class_8/classes/database.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/myapp/class_8/classes/users.php';

    if(isset($_POST)){
      // 1 - connect database
      $user = new Users($db);

      //2 - get the new values from the form 
      $firstName = $_POST['first_name'];
      $lastName = $_POST['last_name'];
      $id = $_POST['personId'];

      /**
       * 3 - prepare the SQL to UPDATE the user 
       * 4 - execute the SQL 
       */
      $result = $user->update($firstName, $lastName, $id);
    }

  /**
   * 5 - redirect to page users to see the user after update
   */
  $url = "http://localhost/myapp/class_8/index.php?page=users";
  header("Location: " . $url);