<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Her blir det slettet</title>
  </head>
  <body>
    <?php
      if (!(isset($_POST['slett']))) {
        die ("Du må velge et dyr for å kunne slette");
      }
      $dyr_id = $_POST["dyr_id"];
      include "kobling.php";
      $sql = "DELETE FROM dyr WHERE dyr_id='$dyr_id'";

      if($kobling->query($sql)){
        echo "Dyret ble slettet";
      } else {
        echo "Noe gikk galt med spørringen: $sql ($kobling->connect_error)";
      };

    ?>
  </body>
</html>
