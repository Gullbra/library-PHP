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
      <label for="country">Input country:</label>
      <input type="text" name="country" id="country">
      <button type="submit">submit</button>
    </form>
    
  </body>
</html>


<?php
  // associative array: key value pairs
  // php:s verson of JS objects and python dictionaries

  $capitals = array(
    "USA" => "Washington",
    "Sweden" => "Stockholm",
    "Germany" => "Berlin"
  );

  echo $_POST["country"] . ": " . $capitals[$_POST["country"]] . "<br><br>";

  //echo $capitals["USA"] . '<br><br>';

  foreach($capitals as $key => $value) {
    echo "{$key} {$value} <br>";
  }
?>

