<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
        echo "$navn er en $art <br>";
      }

      //Skriver ut det samme bare i en HTML-tabell
      echo "<table>";
      echo "  <tr>";
      echo "    <th>Navn</th>";
      echo "    <th>Art</th>";
      echo "  </tr>";

      $sql = "SELECT * FROM dyr";
      $resultat = $kobling->query($sql);
      while ($rad = $resultat->fetch_assoc()) {
        $navn = $rad["navn"];
        $art = $rad["art"];
        echo "<tr>";
        echo "  <td>$navn</td>";
        echo "  <td>$art</td>";
        echo "</tr>";
      }
      echo "</table>";
     ?>
  </body>
</html>
