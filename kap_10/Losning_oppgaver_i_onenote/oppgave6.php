<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Skriver ut ukedagen</title>
  </head>
  <body>
    <?php
      //Skriver ut en ukedag i forhold til dagnr.
      $dagnr = 3;
      if ($dagnr==1) {
        $ukedag = "mandag";
      } elseif ($dagnr==2) {
        $ukedag = "tirsdag";
      }elseif ($dagnr==3) {
        $ukedag = "onsdag";
      } elseif ($dagnr ==4){
        $ukedag = "torsdag";
      }elseif ($dagnr==5) {
        $ukedag = "fredag";
      }elseif ($dagnr==6) {
        $ukedag ="lørdag";
      } else {
        $ukedag ="søndag";
      }

      echo "<p>Dagen med nummer $dagnr er en $ukedag.</p>"
    ?>
  </body>
</html>
