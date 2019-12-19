<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Motta en variabel</title>
  </head>
  <body>
    <?php
      if (isset($_GET["farge"])) {
        $mottat = $_GET["farge"];
        echo "fargen som ble skrevet inn er $mottat";
      }



     ?>
  </body>
</html>
