<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Størst og minst</title>
  </head>
  <body>
    <?php
      $tall = array(1, 6, 3, -4, 9);
      $storst = $tall[0];
      $minst = $tall[0];
      for ($i=0; $i < count($tall); $i++) {
        if ($tall[$i]>$storst) {
          $storst = $tall[$i];
        }elseif ($tall[$i]<$minst) {
          $minst = $tall[$i];
        }
      }
      echo "Det minste tallet er $minst og det største tallet er $storst";

    ?>
  </body>
</html>
