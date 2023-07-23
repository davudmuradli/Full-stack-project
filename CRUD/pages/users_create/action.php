<?php 

    include_once $_SERVER['DOCUMENT_ROOT'] . '/myapp/class_8/classes/database.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/myapp/class_8/classes/users.php';

    if(isset($_POST)){
      // 1 - connect database
      $user = new Users($db);
       //2 - get the new values from the form 
       $firstName = $_POST['first_name'];
       $lastName = $_POST['last_name'];
       $county = $_POST['county'];
       $city = $_POST['city'];
      /**
       * 2 - prepare the SQL to CREATE the user 
       * 3 - execute the SQL 
       */
      $result = $user->create($firstName, $lastName, $county, $city);
      
    }

  /**
   * 5 - redirect to page users to see the user after delete
   */
  $url = "http://localhost/myapp/class_8/index.php?page=users";
  header("Location: " . $url);