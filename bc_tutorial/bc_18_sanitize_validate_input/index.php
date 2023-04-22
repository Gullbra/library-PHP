<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>
    <form action="index.php" method="post">
      <label for="username">input username</label>
      <input type="text" id="username" name="username" require>

      <br>

      <label for="age">input age</label>
      <input type="text" id="age" name="age" require>

      <input type="submit" name="login">
    </form>  
  </body>
</html>

<?php
  if(isset($_POST["login"])) {

    $local_user_name= $_POST["username"];
    // unfortunatly this allows for script input in the form of:
    /**
     * $_POST["username"] = <script> ... JS logic ...</script>
     */

    // sanitizing:
    $local_user_name = filter_input(
      INPUT_POST, 
      "username", 
      FILTER_SANITIZE_SPECIAL_CHARS
    );
    echo "<br> Hallo {$local_user_name}";


    $local_age = filter_input(
      INPUT_POST,
      "age",
      FILTER_VALIDATE_INT
    );
    if (empty($local_age)) {
      echo "<br> Not a valid age input";
    } else {
      echo "<br> You are {$local_age} years old";
    }
  }
?>