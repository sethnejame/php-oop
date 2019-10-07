<?php include 'person.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Peeps & Pets</title>
  </head>
  <body>
  <?php
      $per01 = new Person();

      echo $per01->owner();
      echo '<br>';
    ?>

    <?php
      $pet01 = new Pet();

      echo $pet01->owner();
      echo '<br>';
    ?>
  </body>
</html>
