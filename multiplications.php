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


  <?php

$table = 3 ;
$res = 'table de multiplication du '.$table.'<br />'.'<br />';
$i = 0;

while ($i < 11) {
$res .= $i.' * '.$table.' = '.$i*$table.'<br />';
$i++;
}
echo $res .'<br />';

  ?>

<form action="#">
  Choisir une table de multiplication entre 1 et 10:
  <select id="table" type="text" name="table">
  <?php
     for($i=1;$i<=10;$i++){
      echo "<option>$i";
}
?>
  
  </select>
  <input type ="submit" value ="Valider"/>
  <div id="reponse"></div>
  </form>

  <script>
//Selectionne le formulaire
const myForm = document.querySelector('form');

//On affecte une écoute d'événement submit
myForm.addEventListener('submit', function(e){

  //Interrompre l'evenement par défaut du navigateur
  e.preventDefault();

  // on selectionne la case formulaire id table
  nameInpt= document.querySelector('#table');

  // on exécute une promessse ajax
  fetch(`traitement.php?table=${nameInpt.value}`)
  .then( function(theReponse){
  return theReponse.text();

  })
  .then( function(datas){
  const myDiv = document.querySelector('#reponse');
  // on met la reponse dans le paragraphe
  myDiv.innerHTML = datas;

  });
})

</script>

  </body>
  
<?php

  // if ($_POST['table']) {
  //     echo "<h2>";
  //     $t=$_POST['table'];

  //   for ($q = 1; $q < 11; $q++) {
  // echo $q." x " .$t. " = ".$q*$t. "<br>";
  // }
  // }

 ?>


  </html>







