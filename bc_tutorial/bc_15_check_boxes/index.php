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
      <!-- <input type="checkbox" name="pizza" value="pizza">Pizza <br>
      <input type="checkbox" name="hamburger" value="hamburger">hamburger <br>
      <input type="checkbox" name="lasagna" value="lasagna">lasagna <br>
      <input type="checkbox" name="beer" value="beer">beer <br> -->

      <!-- Will return an array -->
      <input type="checkbox" name="foods[]" value="pizza">Pizza <br>
      <input type="checkbox" name="foods[]" value="hamburger">hamburger <br>
      <input type="checkbox" name="foods[]" value="lasagna">lasagna <br>
      <input type="checkbox" name="foods[]" value="beer">Taco <br>

      <input type="submit" name="confirm" value="confirm">
    </form>
  </body>
</html>

<?php
  if(isset($_POST["confirm"])) {
    echo "<br><br>";

    if(!empty($_POST["foods"])) {
      $local_foods = $_POST["foods"];

      echo "You've selected:";

      foreach ($local_foods as $food) {
        echo "<br> {$food}";
      }
    } else {
      echo "<br><br>" . "please make a selection";
    }

    // if (isset($_POST["pizza"])) {
    //   echo "You've selected pizza!";
    // } else if (isset($_POST["hamburger"])) {
    //   echo "You've selected hamburger!";
    // } else if (isset($_POST["lasagna"])) {
    //   echo "You've selected lasagna!";      
    // } else if (isset($_POST["beer"])) {
    //   echo "You've selected beer!";
    // } else {
    //   echo "<br><br>" . "please make a selection";
    // }
  }
?>