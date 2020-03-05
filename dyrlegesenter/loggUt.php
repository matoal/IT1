<?php
session_start();
?>
<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Logget ut</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <?php include "header.php"; ?>
    <main>
      <?php
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();
       ?>
       <p>Du er logget ut.</p>
    </main>

  </body>
</html>
