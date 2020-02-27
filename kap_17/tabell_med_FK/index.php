<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Legge til et nytt dyr</title>
  </head>
  <body>
    <form action="insert.php" method="post">
      Navn: <input type="text" name="navn"><br>
      Art: <input type="text" name="art"><br>
      Fødselsår: <input type="text" name="aar"><br>
      <select name="eier_id">
        <?php
          include "kobling.php";
          $sql = "SELECT fornavn, etternavn, eier_id FROM eier ORDER BY fornavn";
          $resultat=$kobling->query($sql);
          while ($rad=$resultat->fetch_assoc()) {
            $fornavn = $rad["fornavn"];
            $etternavn = $rad["etternavn"];
            $eier_id = $rad["eier_id"];
            echo "<option value=$eier_id>$fornavn $etternavn </option>";
          }
         ?>
      </select>
      <input type="submit" name="registrer" value="Registrer dyr">
    </form>
  </body>
</html>
