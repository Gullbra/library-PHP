<?php
  $pwd = "IamAwesome";

  $pwd_hash = password_hash($pwd, PASSWORD_DEFAULT);
  echo "Hash: {$pwd_hash}" . "<br><br>"; 

  $pwd_compare = password_verify($pwd, $pwd_hash);
  echo "compare true: {$pwd_compare}" . "<br><br>";

  $pwd_compare = password_verify("pwd123", $pwd_hash);
  echo "compare false: {$pwd_compare}" . "<br><br>"; 
?>