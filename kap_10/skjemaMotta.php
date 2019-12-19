<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Motta Skjema</title>
  </head>
  <body>
    <?php
      if (isset($_POST["sendinn"])) {
        $navn = $_POST["dittNavn"];
        $film = $_POST["film"];
        echo "Hei $navn! Din favorittfilm er $film";
      }
     ?>
  </body>
</html>
