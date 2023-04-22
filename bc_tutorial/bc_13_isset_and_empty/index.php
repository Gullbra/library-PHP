<?php
  // * isset() = Returns TRUE if a variable is declared and not null
  // * empty() = Returns TRUE if a variable is not declared, false, null, ""


  if (isset($_POST["post_var"])) {
    echo "The variable is set";
  } else {
    echo "The var is not set yet";
  }

  $empty_string = null;

  echo "<br><br>";
  echo "for \"null\" isset returns:" . isset($empty_string) . "<br><br>";
  echo "for \"null\" empty returns:" . empty($empty_string) . "<br><br>";

?>


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
      <label for="post_var">Input var</label>
      <input type="text" name="post_var" id="post_var">
      <button type="submit">Submit</button>
    </form>
  </body>
</html>