<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
    <p>Hei !</p>
    <?php
      echo "<p>Hei verden!</p>";
      $tall1 = 4;
      $tall2 = 5;
      $sum = $tall1+$tall2;
      echo "Mine tall er $tall1 og $tall2 og summen er $sum";
      $sum = $sum+3;
      echo "Mine tall er $tall1 og $tall2 og summen er $sum";

     ?>
  </body>
</html>
