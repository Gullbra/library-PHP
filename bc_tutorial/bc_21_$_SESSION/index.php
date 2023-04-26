<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
  </head>

  <body>
    <h1>This is the login page</h1>

    <form action="index.php" method="post">
      <label for="inputUserN">username:</label>
      <input type="text" placeholder="Username..." id="inputUserN" name="username">

      <br>
      <label for="inputPwd">username:</label>
      <input type="password" placeholder="Password..." id="inputPwd" name="pwd">

      <br>
      <input type="submit" name="login" value="login">
    </form>

    <!-- <a href="./home.php">Click to log in!</a> -->
  </body>
</html>

<?php
  if(isset($_POST["login"])) {

    if (!empty($_POST["username"]) && !empty($_POST["pwd"])) {
      $_SESSION["username"] = $_POST["username"];
      $_SESSION["pwd"] = $_POST["pwd"];

      header("location: home.php");
    } else {
      echo "The fields can not be empty!";
    }
  }
?>