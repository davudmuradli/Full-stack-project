<?php include './layout/head.php'?>

<body>
    <?php include './layout/menu.php'?>

    <main>
        <h1>Login</h1>
    </main>

    <form action="log-me-in.php" method="post">   <!-- Email input -->
    
    <input type="text" name="loggedlnName" id="loggedlnName" class="form-control" />
    
    


  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

  
</form>




    <?php   include './layout/footer.php'?>
</body>