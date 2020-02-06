 <html>
  <head><title>Afficher le tableau multiplication</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <header>
    <?php
    $pagetitle='Tutoriel Link';
    include ("menu.php");
    ?> 
  </header>


<body>

	<h1>Table de Multiplication</h1>
  <p> Choississez une table et répondez à l'opération.</p> </br>

  <ul id = "Menu de table">
    <li>
      <a href="multiplications_rev.php?table=1">Table du 1</a>
    </li>
      <li>
         <a href="multiplications_rev.php?table=2">Table du 2</a>
      </li>
        <li>
           <a href="multiplications_rev.php?table=3">Table du 3</a>
      </li>
        <li>
            <a href="multiplications_rev.php?table=4">Table du 4</a>
        </li>
        <li>
      <a href="multiplications_rev.php?table=5">Table du 5</a>
        </li>
          <li>
         <a href="multiplications_rev.php?table=6">Table du 6</a>
          </li>
        <li>
           <a href="multiplications_rev.php?table=7">Table du 7</a>
      </li>
        <li>
            <a href="multiplications_rev.php?table=8">Table du 8</a>
        </li>
        <li>
           <a href="multiplications_rev.php?table=9">Table du 9</a>
      </li>
        <li>
            <a href="multiplications_rev.php?table=10">Table du 10</a>
        </li>
</ul> <br> <br>


 <?php if(isset($_GET['table'])) :
	$table = $_GET['table'];
	$i = rand(0,10);
	$res = $i .' x '.$table.' = '.$i*$table.'<br />';
	?>
	<form method = "post" action = "multiplications_rev.php">
	<label for="table" name="table"> résoudre la multiplication :  <?php echo $_GET['table']."x" .$i ?></label>
   	<input type="text" name="resultat" value=""><br>
   	<input type="hidden" name="vrai_resultat" value="<?php echo $i * $table ?>">
   	<input type ="submit" value ="Valider"/>
  </form>
<?php endif; ?>

<?php

if(isset($_POST['resultat'])) {
	if ($_POST['resultat'] == $_POST['vrai_resultat']){
	  echo "bonne réponse, vous avez gagné le droit de recommencer !!!";
	} 
	else {
	  echo "Vous n'avez pas la bonne réponse ... le bon résultat est  ".$_POST['vrai_resultat'];
	}
}

?>

</body>
</html>