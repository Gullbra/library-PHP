<?php
  $name = "Martin";

  // Switches look like C langs
  switch ($name) {
    case 'Martin':
      echo "That's a good name";
      break;
    
    default:
      echo "I guess everybody can't be named Martin";
      break;
  }

  // date object - how does it work?
  $date = date("1");
  echo $date 
?>