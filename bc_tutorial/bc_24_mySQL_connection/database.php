<?php
  $db_server = "localhost";
  $db_user = "root";
  $db_pwd = "";
  $db_name = "bc_tutorial_db";
  $connection = "";

  
  try {
    $connection = mysqli_connect($db_server, $db_user, $db_pwd, $db_name);    
    echo "You are connected!";
  } 
  catch (mysqli_sql_exception) {
    echo "Could not connect!";
  }
?>