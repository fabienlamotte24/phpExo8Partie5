<?php
/*Création du tableau avec les douze mois en Anglais*/
  $months = array ('January','February','march','april','may','june','july','august','september','october','november','december');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 8</title>
  </head>
  <body>
    <p>
<?php
/*Boucle for pour afficher toute les valeurs*/
  for($number = 0; $number < 12; $number++){
    echo $months[$number] . '<br />';
  }
?>
    </p>
  </body>
</html>
