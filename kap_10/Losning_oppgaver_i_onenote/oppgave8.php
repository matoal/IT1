<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>gjennomsnitt</title>
  </head>
  <body>
    <?php
      $tallene = array(1, 4, 5, 6);
      $sum=0;
      for ($tallNr=0; $tallNr < count($tallene); $tallNr++) {
        $sum += $tallene[$tallNr];
      }
      $gjennomsnittet=$sum/count($tallene);
      echo "gjennomsnittet er $gjennomsnittet";
     ?>
  </body>
</html>
