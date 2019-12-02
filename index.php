<!--ici on insère le PHP qui n'est pas lié à l'affichage-->
<?php
//Déclaration de la variable object
$object = 'objet du message';
//Déclaration de la variable message
$message = 'Contenu du message';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 1 Exercice 1</title>
  </head>
  <body>
    <p>
    <!--ici on insère le PHP qui est lié à l'affichage-->
      <?php echo $object; ?>
    </p>
    <p>
    <!--ici ce qu'il ne faut pas faire-->
      <?php echo 'objet du message'; ?>
    </p>
    <p><?= $message; ?></p>
  </body>
</html>
