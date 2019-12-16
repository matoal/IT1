<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Repetisjon</title>
  </head>
  <body>
    <?php
      $sum = 0;
      
      for ($terning=0; $terning < 6; $terning++) {
        $terningkast = rand(1,6);
        if ($terningkast==3) {
          $sum = $sum + $terningkast;
        } elseif ($terningkast==5) {
          $sum = $sum + $terningkast;
        }
        echo "$terningkast";
      }
      echo "Summen blir $sum";

    ?>
  </body>
</html>
