<?php 
  echo"Hey World";
  echo"Tutorial link: https://www.youtube.com/watch?v=SI69DXbYHXU&list=PLZPZq0r_RZOO6bGTY9jbLOyF_x6tgwcuB&index=1"
  // comment!
  // * better comments extension support

  /*
  multiline comment
  */

  // Html templates work:
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
  </head>

  <body>
    <p>Hey there!</p>
    <p id="clickDisplay">0</p>

    <script>
      const clickHandler = () => {
        const newNum = Number(document.querySelector('#clickDisplay').textContent) + 1
        document.querySelector('#clickDisplay').textContent = newNum
      }
    </script>

    <button onclick="clickHandler()">click me</button>
  </body>
</html>