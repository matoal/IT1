<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>If else</title>
  </head>
  <body>
    <?php
      $terningkast = rand(1, 6);
      echo $terningkast;
      if ($terningkast == 6) {
        echo "Hurra jeg fikk en sekser!";
      } elseif ($terningkast == 1) {
        echo "Æsj jeg fikk en";
      } else {
        echo "Jeg fikk noe mellom 2 og 5";
      }
    ?>
  </body>
</html>
