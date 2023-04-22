<?php
  $user_name = "Gullbra";

  $lower_user_name = strtolower($user_name); // strtoupper()
  echo "<br>" . $lower_user_name;

  $padded_user_name = str_pad($user_name, 10, 0);
  echo "<br>" . $padded_user_name;

  $replaced_user_name = str_replace("b", "B", $user_name);
  echo "<br>" . $replaced_user_name;

  $reversed_user_name = strrev($user_name);
  echo "<br>" . $reversed_user_name;

  $shuffled_user_name = str_shuffle($user_name);
  echo "<br>" . $shuffled_user_name;

  $compared_user_name = strcmp($user_name, 'Gulbra');
  echo "<br>" . $compared_user_name;

  $length_user_name = strlen($user_name);
  echo "<br>" . $length_user_name;

  // JS split equivalent
  $array_user_name = explode("ll", $user_name);
  echo "<br>";
  foreach ($array_user_name as $arr_element) {    
    echo "<br>" . $arr_element;
  }
  echo "<br>";

  // JS join equivalent
  $imploded_user_name = implode("LL", $array_user_name);
  echo "<br>" . $imploded_user_name;


  echo "<br><br> etc. More: <a href=\"https://www.youtube.com/watch?v=B-neQLCsORM&list=PLZPZq0r_RZOO6bGTY9jbLOyF_x6tgwcuB&index=17\">BroCode</a>";
?>