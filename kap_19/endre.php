<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nå er dyret endret</title>
  </head>
  <body>
    <?php
      if (!(isset($_POST["bekreft"]))) {
        die ("Du må bekrefte det du vil endre");
      }
      $dyr_id = $_POST["dyr_id"];
      $navn = $_POST["navn"];
      $art = $_POST["art"];
      $aar = $_POST["aar"];
      include "kobling.php";
      $sql = "UPDATE dyr SET navn='$navn', art='$art', fødselsår='$aar' WHERE dyr_id='$dyr_id'";

      if ($kobling->query($sql)) {
        echo "Dyret ble endret";
      } else {
        echo "Noe gikk galt med spørringen: $sql ($kobling->connect_error)";
      }

     ?>
  </body>
</html>
