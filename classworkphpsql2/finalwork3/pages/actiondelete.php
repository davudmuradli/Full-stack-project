<?php 

    include_once $_SERVER['DOCUMENT_ROOT'] . '/finalwork3/classes/database.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/finalwork3/classes/products.php';

    if(isset($_POST)){
      // 1 - connect database
      $users = new Users($db);
      $id = $_POST['id'];
      /**
       * 2 - prepare the SQL to DELETE the user 
       * 3 - execute the SQL 
       */
      $result = $users->delete($id);
      
    }

  /**
   * 5 - redirect to page product to see the user after delete
   */
  $url = "http://localhost/finalwork3/pages/user.php";
  header("Location: " . $url);