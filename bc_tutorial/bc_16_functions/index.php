<?php
  function happy_birthday (string $input_name, $language="en") {

    if($language == "en") {
      echo "Happy birthday to you,<br>";
      echo "Happy birthday to you,<br>";
      echo "Happy birthday dear {$input_name},<br>";
      echo "Happy birthday to you!<br><br>";
    } else if ($language == "es") {
      echo "Cumpleaños feliz,<br>";
      echo "Te deseamos a ti,<br>";
      echo "Cumpleaños {$input_name},<br>";
      echo "Cumpleaños feliz!<br><br>";
    } else {
      echo "Language unsupported";
    }
  }

  happy_birthday("Martin");
  happy_birthday("Martin", "es");
  happy_birthday("Martin", "se");
?>