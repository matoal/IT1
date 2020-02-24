<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vi mottar eieren og det blir registrert i databasen</title>
  </head>
  <body>
    <?php
      //Sjekker at knappen en trykket på
      if (!(isset($_POST["bekreft"]))) {
        die("Du må skrive inn et navn og en art");
      }
      include 'kobling.php';
      $fornavn = $_POST["fornavn"];
      $etternavn = $_POST["etternavn"];
      $tlf = $_POST["tlf"];

      $sql = "INSERT INTO eier(fornavn, etternavn, tlf) VALUES ('$fornavn', '$etternavn', '$tlf')";
      echo "$sql";
      if($kobling->query($sql)){
        echo "Hurra den ble lagt til";
      } else{
        echo "Noe galt skjedde...";
      }

     ?>
  </body>
</html>
