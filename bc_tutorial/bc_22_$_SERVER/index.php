<?php
    // $_SERVER = SGB that contains headers, paths, and script locations. 
    //                       The entries in this array are created by the web server.
    //                       Shows nearly everything you need to know about the current web page env.

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
  <!-- 
    Will send request to itself 
    But is vulnerable to crosssite scripts -> use filters (like htmlspecialchars())
  -->

  <form 
    action="<?php
      htmlspecialchars(
        $_SERVER["PHP_SELF"]
      );
    ?>"
    method="post"
  >
    <input type="submit" value="POST">
  </form>

  <form 
    action="<?php
      htmlspecialchars(
        $_SERVER["PHP_SELF"]
      );
    ?>"
    method="get"
  >
    <input type="submit" value="GET">
  </form>
</body>
</html>

<?php
  // more relieble way of handling requests
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Hello!";
  } else {
    foreach($_SERVER as $key => $value) {
      echo "{$key}: {$value}" . "<br>";
    }
  }
?>