<?php
  /**
   * @param cookie key
   * @param cookie value
   * @param time in seconds
   * @param path where stored
   */
  setcookie(
    "fav_food",
    "pizza",
    time() + 60*60*24,
    "/"
  );
  setcookie(
    "fav_drink",
    "pizza",
    time() + 60*60*24,
    "/"
  );
  // as usual: to delete cookie, set expiration date to an expired date (ex: -1)

  echo "<br><br>";
  foreach ($_COOKIE as $key => $value) {
    echo"{$key}: {$value} <br>";
  }
?>