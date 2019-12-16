<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Telle</title>
  </head>
  <body>
    <?php
      $tall = array(0, 4, 5, 8, 0, -5, -7, 90, 0);
      $nuller = 0;
      $positive = 0;
      $negative = 0;
      for ($i=0; $i < count($tall); $i++) {
        if ($tall[$i]==0) {
          $nuller++;
        } elseif ($tall[$i]>0) {
          $positive++;
        } else {
          $negative++;
        }
      }
      echo "Det er $nuller nuller, $positive positive tall og $negative negative tall i arrayaen";
    ?>
  </body>
</html>
