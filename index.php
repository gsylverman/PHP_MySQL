<?php
  include './db.php';

  if (isset($_POST['user_email']) && isset($_POST['user_password'])) {
    if (!empty($_POST['user_email']) && !empty($_POST['user_password'])) {
      $email = $_POST['user_email'];
      $password =  $_POST['user_password'];

      if (!$DB) {
        die('Failed: ' . mysqli_connect_error());
      } else {  
        $query = "INSERT into users (user_email, user_password) VALUES ('$email', '$password')";
        $result = mysqli_query($DB, $query);
        
        echo 'succes';
      }
      mysqli_close($DB);

    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
  <title>Document</title>
</head>
<body>
  <form method="POST">
    <div class="row">
      <div class="twelve colums">
        <label for="email">Email:</label>
        <input
          type="email"
          placeholder="Enter email"
          name="user_email"
        >
      </div>
    </div>
    <div class="row">
      <div class="twelve colums">
        <label for="email">Password:</label>
        <input
          type="password"
          placeholder="Enter password"
          name="user_password"
        >
      </div>
    </div>
    <input type="submit" value="submit" class="button-primary"> 
  </form>
</body>
</html>