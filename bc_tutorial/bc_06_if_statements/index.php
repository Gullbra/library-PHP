<?php
  $testvar_x = null;
  if ($testvar_x == null) {
    $testvar_x = "x";
    $testvar_y = "y";
  }

  // var declarations in if statements will be in scoped outside it
  echo "x: {$testvar_x}, y: {$testvar_y}";

  $test_bool_true = true;
  $test_bool_false = false;

  // conditional statments work like in JS
  if ($test_bool_true && !$test_bool_false) {
    echo "<br><br>testing conditional statements: &&; !";
  }
  if ($test_bool_false || $test_bool_true) {
    echo "<br><br>testing conditional statements: ||";
  }
?>