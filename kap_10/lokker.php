<!DOCTYPE html>
<html lang="no" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Løkker</title>
  </head>
  <body>
    <?php
      $tall = 0;

      while ($tall<10) {
        echo "Hei på deg $tall <br>";
        $tall = $tall+1;
      }

      for ($i=0; $i < 10; $i++) {
        echo "Hei på deg også $i <br>";
      }
    ?>
  </body>
</html>
