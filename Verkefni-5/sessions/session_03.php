<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>title</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
    // check whether session variable is set
    if (isset($_SESSION['name'])) {
      // if set, greet by name
      echo 'Hi, ' . $_SESSION['name'] . '. See, I remembered your name!<br>';
      // unset session variable
      unset($_SESSION['name']);
      // invalidate the session cookie
      if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time()-86400, '/');
      }
      // end session
      session_destroy();
      echo '<a href="session_02.php">Page 2</a>';
    } else {
      // display if not recognized
      echo "Sorry, I don't know you.<br>";
      echo '<a href="session_01.php">Login</a>';
    }
    ?>
  </body>
</html>