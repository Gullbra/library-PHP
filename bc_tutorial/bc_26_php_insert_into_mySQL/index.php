<?php
  include('database.php');

  $sqlQuery = "
    INSERT INTO users (user, password)
    VALUES ('Patrick', 'star1')
  ";

  try {
    // it will still work even though it's marked red
    mysqli_query($connection, $sqlQuery);
  }
  catch (mysqli_sql_exception) {
    echo "<br>SQL query failed";
  }

  // it will still work even though it's marked red
  mysqli_close($connection);

  echo "<br><br> rest of tutorial is all basic sql, just in php";
?>