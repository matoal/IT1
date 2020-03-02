<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Legg inn nye verdier</title>
  </head>
  <body>

    <?php
      if (!(isset($_POST["tilendreskjema"]))) {
        die ("Du må velge et dyr du vil endre på");
      }
      include "kobling.php";
      $dyr_id = $_POST["dyr_id"];
      echo "<form method='POST' action='endre.php'>";

      $sql = "SELECT * from dyr WHERE dyr_id='$dyr_id'";
      $resultat = $kobling->query($sql);
      while ($rad = $resultat->fetch_assoc()) {
        $navn = $rad["navn"];
        $art = $rad["art"];
        $aar = $rad["fødselsår"];
        echo "Dyr_id:";
        echo "<input type=number name='dyr_id' value='$dyr_id' readonly><br><br>";
        echo "Navn: <input type=tekst name='navn' value='$navn'><br>";
        echo "Art: <input type=tekst name='art' value='$art'><br>";
        echo "Fødselsår: <input type=number name='aar' value='$aar'><br>";
        echo "<input type='submit' name='bekreft' value='Bekreft'>";
      }
      echo "</form>";


     ?>

  </body>
</html>
