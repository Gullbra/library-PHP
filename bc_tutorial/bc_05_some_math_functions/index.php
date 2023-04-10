<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Some math functions</title>
  </head>

  <body>
    <h1>Some math functions</h1>

    <form action="index.php" method="post">
      <label for="inputX">x:</label>
      <input type="text" name="inputX" required>

      <label for="inputY">y:</label>
      <input type="text" name="inputY" required>

      <input type="submit" value="total">

    </form>
  </body>
</html>

<?php
  $localX = $_POST["inputX"];
  $localY = $_POST["inputY"];
  $total = null;

  //$total = abs($localX);
  //$total = round($localX);
    // & ceil, floor

  //$total = sqrt($localX);

  //$total = pow($localX, $localY);
  //$total = max($localX, $localY);
    // & min

  //$total = rand($localX, $localY);
  //$total = rand();

  //$total = pi();

  echo $total;
?>