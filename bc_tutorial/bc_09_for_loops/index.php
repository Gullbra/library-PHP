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
      <label for="countLim">Enter number to count to:</label><br>
      <input type="number" name="countLim" id="countLim" placeholder="...Type number here"/>
    </form>
  </body>
</html>

<?php
  // foor loops are written exactly like in JS

  $localLim = $_POST["countLim"];

  if ($localLim) {
    if ($localLim > 20)
      $localLim = 20;

    echo"<br>Counting up until: {$localLim}<br><br>";

    for($i = 1; $i <= $localLim; $i++) {
      echo "Hello! {$i} <br>";
    }

    echo"<br>";
  }
?>