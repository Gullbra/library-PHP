<?php
  /** include() = copies the contents of a file (php/html/text)
   *              and includes it in your php file.
   *              PHP equivilent of require("...") and ES6 import
   * */ 
   
  include("header.html");
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
    <h2>This is the home page!</h2>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos impedit sunt qui aliquam iure atque ullam voluptatem rem mollitia? Dolore sapiente, quod nulla ad dignissimos consectetur nam tenetur rerum voluptatum!</p>
    
  </body>
</html>

<?php
  include("footer.html");
?>