<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Arrayer</title>
  </head>
  <body>
    <?php
      $figur1 = "Asterix";
      $figur2 = "Langbein";
      $figur3 = "Obelix";
      $figurer = array("Asterix", "Langbein", "Obelix");
      echo "$figurer[2]";

      for ($i=0; $i < count($figurer); $i++) {
        echo "$figurer[$i] <br>";
      }

      $hovedsteder = array('Norge' => "Oslo", 'Sverige'=>"Stockholm");
      echo $hovedsteder['Sverige'];

    ?>
  </body>
</html>
