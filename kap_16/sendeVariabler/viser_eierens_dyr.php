<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if (isset($_GET["eier_id"])) {
        $eier_id = $_GET["eier_id"];
      } else {
        die("Du må velge en eier");
      }
      include "kobling.php";
      $sql = "SELECT navn, fornavn, etternavn, art FROM dyr JOIN eier
              ON dyr.eier_id=eier.eier_id WHERE dyr.eier_id=$eier_id";
      $resultat = $kobling->query($sql);
      while ($rad = $resultat->fetch_assoc()) {
        $navn = $rad["navn"];
        $art = $rad["art"];
        $fornavn = $rad["fornavn"];
        $etternavn = $rad["etternavn"];
        echo "$fornavn $etternavn er eieren til $navn som er en $art <br>";
      }

     ?>
  </body>
</html>
