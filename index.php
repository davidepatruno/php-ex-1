<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Censuratore</title>
  </head>
  <body>
    <h1>censuratore parole</h1>
    <h3>pippo pluto topolino paperino</h3>
    <h2>il risultato è :  <?php
      $badwords = 'pippo pluto topolino paperino';
      $parola = $_GET['parola'];
      $stringa = strpos($badwords , $parola);

      if ($stringa !== false)
      {
          $censura = str_replace($parola, '***', $badwords);
          echo $censura;
      }
      else {
      echo  'la tua parola non è stata censurata';
      };
    ?></h2>

  </body>
</html>
