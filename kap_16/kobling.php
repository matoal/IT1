<!doctype html>
<html>
   <head>
     <title> Opprette en tilkobling </title>
     <meta charset = "UTF-8">
  </head>
  <body>
    <?php
      //Tikoblingsinformasjon
      $tjener = "localhost";
      $brukernavn = "root";
      $passord = "";
      $database = "DyrDyrlege";

      // Opprette tilkobling
      $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
      // Sjekke om koblingen virker
      if ($kobling -> connect_error) {
        die("Noe gikk galt: " . $kobling -> connect_error);
      }
      else {
        echo "Koblinger virker";
      }
    ?>
  </body>
</html>
