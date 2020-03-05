<?php
session_start();
?>
<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mine Dyr</title>
    <link rel="stylesheet" href="css/main.css">

  </head>
  <body>
    <?php include "header.php"; ?>
    <main>
      <?php
        if (isset($_SESSION["eier_id"])) {
          $eier_id = $_SESSION["eier_id"];
        } else {
          die("Du må logge inn <a href='minSide.php'>her</a>");
        }
        include "kobling.php";
        $sql = "SELECT navn, art FROM dyr JOIN eier
                ON dyr.eier_id=eier.eier_id WHERE dyr.eier_id=$eier_id";
        $resultat = $kobling->query($sql);
        while ($rad = $resultat->fetch_assoc()) {
          $navn = $rad["navn"];
          $art = $rad["art"];
          echo "Du er eieren til $navn som er en $art <br>";
        }
     ?>
    </main>


  </body>
</html>
