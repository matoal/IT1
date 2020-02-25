<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vi mottar eieren og det blir registrert i databasen</title>
  </head>
  <body>
    <?php
      //Sjekker at knappen en trykket på
      if (!(isset($_POST["registrer"]))) {
        die("Du må skrive inn et navn og en art");
      }
      include 'kobling.php';
      $navn = $_POST["navn"];
      $art = $_POST["art"];
      $aar = $_POST["aar"];
      $eier_id = $_POST["eier_id"];

      $sql = "INSERT INTO dyr(navn, art, fødselsår, eier_id) VALUES
      ('$navn', '$art', '$aar', '$eier_id')";
      if($kobling->query($sql)){
        echo "Dyret $navn($art) med eier_id $eier_id ble lagt til";
      } else{
        echo "Noe galt skjedde...";
      }

     ?>
  </body>
</html>
