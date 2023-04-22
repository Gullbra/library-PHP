
<?php 
  // Array:

  $foods = array("apple", "banana", true, 5);

  // Arrays can't be directly printed with "echo", they have to be accessed through their elements
  // Can combine types

  echo $foods[1] . "<br>";
  echo $foods[3] . "<br>";

  // foreach slightly different
  echo "<br>";
  foreach($foods as $food) {
    echo $food . "<br>";
  }

  // Array manipulation is done through functions
  array_push($foods, "PUSH!");
  echo "<br>";
  foreach($foods as $food) {
    echo $food . "<br>";
  }
  array_pop($foods);
  echo "<br>";
  foreach($foods as $food) {
    echo $food . "<br>";
  }

  // some array functions leaves the original array unchanged and returns a new array
  echo "<br>";
  foreach (array_reverse($foods) as $food) {
    echo $food . "<br>";
  }

  // Length
  echo "<br>";
  echo "Length: " . count($foods);
?>