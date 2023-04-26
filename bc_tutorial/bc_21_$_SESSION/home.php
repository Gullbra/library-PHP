<?php
  session_start();

  if (empty($_SESSION["username"]) || empty($_SESSION["pwd"])) {
    header("location: index.php");
  }

  echo "<h1>Welcome {$_SESSION["username"]}!</h1>";
?>

<body>
  <br>
  <form action="home.php" method="post">
    <input type="submit" name="logout" value="logout">
  </form>
  <br>
</body>

<?php
  if(isset($_POST["logout"])) {
    session_destroy();
    header("location: index.php");
  }
?>