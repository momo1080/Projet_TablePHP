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

	<h1>Mode super révision</h1>
	<p> Choississez une table et répondez aux opérations.  Vous obtiendrez 1 points à chaque bonne réponse. </p> </br>

  <ul id = "Menu de table">
    <li>
      <a href="multiplications_super_rev.php?table=1">Table du 1</a>
    </li>
      <li>
         <a href="multiplications_super_rev.php?table=2">Table du 2</a>
      </li>
        <li>
           <a href="multiplications_super_rev.php?table=3">Table du 3</a>
      </li>
        <li>
            <a href="multiplications_super_rev.php?table=4">Table du 4</a>
        </li>
        <li>
      <a href="multiplications_super_rev.php?table=5">Table du 5</a>
        </li>
          <li>
         <a href="multiplications_super_rev.php?table=6">Table du 6</a>
          </li>
        <li>
           <a href="multiplications_super_rev.php?table=7">Table du 7</a>
      </li>
        <li>
            <a href="multiplications_super_rev.php?table=8">Table du 8</a>
        </li>
        <li>
           <a href="multiplications_super_rev.php?table=9">Table du 9</a>
      </li>
        <li>
            <a href="multiplications_super_rev.php?table=10">Table du 10</a>
        </li>
</ul> <br> <br>

<form method = "post" action = "multiplications_super_rev.php">
 <?php 
 if(isset($_GET['table'])) :
for ($i=0; $i < 5 ; $i++) { 
	$table = $_GET['table'];
	$nombrealeatoire = rand(0,10);
	$res = $nombrealeatoire .' x '.$table.' = '.$nombrealeatoire*$table.'<br />';

	?>
	<label for="table" name="table"> résoudre les multiplications suivantes : <?php echo $_GET['table']."x" .$nombrealeatoire ?></label>
   	<input type="text" name="resultat<?=$i?>" value=""><br>
   	<input type="hidden" name="vrai_resultat<?=$i?>" value="<?php echo $nombrealeatoire * $table ?>">
<?php }
endif; ?>
<input type ="submit" value ="Valider"/> 
</form>

<?php
echo "<br>";
$score = 0;
for ($i=0; $i < 5; $i++) { 
	if(isset($_POST['resultat'.$i])) {
	if ($_POST['resultat'.$i] == $_POST['vrai_resultat'.$i]){
		$score++;
	  echo "bonne réponse !!!<br>";
	} 
	else {
	  echo "Vous n'avez pas la bonne réponse ... le bon résultat est  ".$_POST['vrai_resultat' .$i]."<br>";
	}
	}
}
echo "<br>";
echo "Vous avez obtenu un score de " .$score;

?>


</body>
</html>