 <html>

  <head><title>Afficher le tableau multiplication</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <header>
    <?php
    // print_r($_POST);
    $pagetitle='Tutoriel Link';
    include ("menu.php");
    ?> 
  </header>


<body>
	<h1>Table de Multiplication</h1>

	

  <form action="#">
  Cocher les tables que vous voulez consulter :  <br><br>
  <?php
  
  for($i=1;$i<=10;$i++){
    echo '<input type="checkbox" name="table[]" value="'.$i.'">';
    echo '<label for="'.$i.'">table de '.$i.'</label> <br>';  
}
?>
<input type="submit" value="valider" />
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
  datas = new FormData(myForm);

  // on exécute une promessse ajax
  fetch('traitement1.php',{
                    method: 'POST',
                    body: datas
                })
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
// *****************************tables de multiplication  *************************************************************

foreach($_POST['table'] as $valeur){
for ($j=1; $j <= 10; $j++) {
if ($j == 10){

echo $valeur. 'x' .$j. '=' .$j * $valeur.'<br><br>';
} else {
echo $valeur. 'x' .$j. '=' .$j * $valeur.'<br>';
}

}
} 

 ?>
  </html>













