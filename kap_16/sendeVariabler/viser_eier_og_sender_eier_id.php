<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include "kobling.php";

      // Skriver ut alle eiere med en link som sender med eier_id
      // Ved å sende med eier_id kan man på neste side bruke eier_id til å hente ut
      // dyrene denne eieren eier
      $sql = "SELECT fornavn, etternavn, eier_id FROM eier";
      $resultat = $kobling->query($sql);
      while ($rad = $resultat->fetch_assoc()) {
        $fornavn = $rad["fornavn"];
        $etternavn = $rad["etternavn"];
        $eier_id = $rad["eier_id"];
        echo "<a href=viser_eierens_dyr.php?eier_id=$eier_id>$fornavn $etternavn</a> <br>";
      }
     ?>

  </body>
</html>
