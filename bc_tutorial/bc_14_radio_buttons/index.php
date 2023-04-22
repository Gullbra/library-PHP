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
      <input type="radio" name="credit_card" value="Visa">Visa<br>
      <input type="radio" name="credit_card" value="MarsterCard">MarsterCard<br>
      <input type="radio" name="credit_card" value="AmericanExpress">AmericanExpress<br>

      <input type="submit" name="confirm" value="confirm">
    </form>
  </body>
</html>

<?php
  if (empty($_POST["credit_card"]) && isset($_POST["confirm"])) {
    echo "<br><br>Please Make a Selection";
  }

  if (!empty($_POST["credit_card"])) {
    $local_credit_card = $_POST["credit_card"];

    echo "<br> You've selected: {$local_credit_card}";
  }
?>