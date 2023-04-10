<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post and Get</title>
  </head>

  <body>
    <a href="https://www.youtube.com/watch?v=6AzAYU8AOhQ&list=PLZPZq0r_RZOO6bGTY9jbLOyF_x6tgwcuB&index=4">BC tutorial nr 4</a>

    <h1>Post and Get</h1>
    <form action="index.php" method="get">
      <h2>GET!!</h2>
  
      <label for="nameInput">name:</label><br>
      <input type="text" name="nameInput" placeholder="...type some thing here"><br>
  
      <button type="submit">Submit</button>
    </form>

    <form action="index.php" method="post">
      <h2>POST!!</h2>

      <label for="pwdInput">pwd:</label><br>
      <input type="text" name="pwdInput" placeholder="...type some thing here"><br>
  
      <button type="submit">Submit</button>
    </form>
  </body>
</html>

<?php
  if ($_GET["nameInput"]) {
    // . is used for string cocatination
    // all info will show as query params in url
    echo "GET => " . $_GET["nameInput"] . " is your name";
  }
  if ($_POST["pwdInput"]) {
    echo "POST => " . $_GET["pwdInput"] . " is your PWD";
  }


  // ! storing to local variables might make caching more convinient
  $name = $_GET["nameInput"];
  echo $name;
?>