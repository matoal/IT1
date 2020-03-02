<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Oppdatere</title>
  </head>
  <body>
    <?php
      include "kobling.php"; //Pass på at det står riktig database i kobling.php

      //Skriver ut dyrets navn og hvilken art det er
      $sql = "SELECT * FROM dyr";
      $resultat = $kobling->query($sql);
      while ($rad = $resultat->fetch_assoc()) {
        $navn = $rad["navn"];
        $art = $rad["art"];
        $dyr_id = $rad["dyr_id"];
        echo "$navn er en $art";
        echo "<form method='POST' action='endreskjema.php'>";
        echo  "<input type='hidden' name='dyr_id' value=$dyr_id>";
        echo  "<input type='submit' name='tilendreskjema' value='Endre'>";
        echo "</form>";
        echo "<br>";

      }
    ?>
  </body>
</html>
