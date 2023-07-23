<?php 

    include_once $_SERVER['DOCUMENT_ROOT'] . '/myapp/class_8/classes/database.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/myapp/class_8/classes/users.php';

    if(isset($_POST)){
      // 1 - connect database
      $user = new Users($db);
      $id = $_POST['personId'];
      /**
       * 2 - prepare the SQL to DELETE the user 
       * 3 - execute the SQL 
       */
      $result = $user->delete($id);
      
    }

  /**
   * 5 - redirect to page users to see the user after delete
   */
  $url = "http://localhost/myapp/class_8/index.php?page=users";
  header("Location: " . $url);