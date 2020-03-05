<?php
session_start();
?>
<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Min Side</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/input.css">
  </head>
  <body>
    <?php include "header.php" ?>
    <main>
      <h1>Min Side</h1>
      <?php

        if (isset($_POST["loggInn"])) {
          include "kobling.php";
          $passord = $_POST["passord"];
          $eier_id = $_POST["eier_id"];
          $sql = "SELECT COUNT(*) as antall FROM eier WHERE eier_id='$eier_id' AND passord='$passord'";
          $resultat = $kobling->query($sql);
          while ($rad = $resultat->fetch_assoc()) {
            $antalTreff = $rad["antall"];
            if ($antalTreff == 1) {
              $_SESSION["eier_id"] = $eier_id;
            } else {
              echo "Eier_id eller passord er galt. Prøv på nytt";
            }
          }
        }
        if (isset($_SESSION["eier_id"])) {
          echo "Du er logget inn<br>";
          echo "<form action=loggUt.php method='POST'>";
          echo "<input type='submit' value='Logg Ut'>";
          echo "</form>";

          echo "<a href='minedyr.php'>Mine registrerte dyr</a>";
        } else {
          echo "<form action='minSide.php' method='POST'>";
          echo "Eier_id: <input type='text' name=eier_id><br>";
          echo "Passord: <input type='password' name=passord><br>";
          echo "<input type='submit' name='loggInn' value='Logg Inn'>";
        }

       ?>
    </main>
  </body>
</html>
