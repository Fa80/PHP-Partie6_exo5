<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie6_Exo5</title>
</head>
<body>
  <?php
  //Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher:
  //index.php?week=12

  ?>
  <a href="index.php?week=12">Envoi Info dans l'URL</a>
  <?php
  if (isset($_GET['week'])){
    for ($weekend = 1; $weekend <= $_GET['week']; $weekend ++){
        ?>
    <p><?php echo 'Le nombre de week-end est ' . ' ' . $_GET['week'];
      } ?></p>
    <?php
  } else {?>
    <p>Le paramétre nombre de week-end n'est pas défini dans l'URL</p>
    <?php
  }
  ?>

</body>
</html>
