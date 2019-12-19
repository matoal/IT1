<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sende Skjema</title>
  </head>
  <body>
    <?php include "meny.php" ?>
    <form action="skjemaMotta.php" method="post">
      Navn:
      <input type="text" name="dittNavn">
      <br>

      Hva er din favorittfilm?
      <input type="text" name="film">

      <input type="submit" name="sendinn" value="Send inn">
    </form>

  </body>
</html>
