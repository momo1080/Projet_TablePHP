<?php

  if ($_GET['table']) {
      echo "<h2>";
      $t=$_GET['table'];

    for ($q = 1; $q < 11; $q++) {
  echo $q." x " .$t. " = ".$q*$t. "<br>";
  }
  }

 ?>
