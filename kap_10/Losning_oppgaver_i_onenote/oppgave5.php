<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //Skriver ut hvilket av 3 tall som er størst
      $tall1 = 3;
      $tall2 = 70;
      $tall3 = 10;
      if ($tall1>$tall2) {
        $storst = $tall1;
      } else {
        $storst = $tall2;
      }

      if ($storst>$tall3) {
        echo "<p> $storst er størst av $tall1, $tall2 og $tall3</p>";
      } else {
        echo "<p> $tall3 er størst av $tall1, $tall2 og $tall3</p>";
      }
    ?>
  </body>
</html>
