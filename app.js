form = document = querySelector('form');

myForm.addEventListener('submit', function(e){

  //Interrompre l'evenement par défaut du navigateur
  e.preventDefault();

  numberCheckboxHasChecked = document.querySelectorAll('input {type="checkbox"}:checked');

  console.log(numberCheckboxHasChecked);
});
<script>
//Selectionne le formulaire
const myForm = document.querySelector('form');

//On affecte une écoute d'événement submit
myForm.addEventListener('submit', function(e){

  //Interrompre l'evenement par défaut du navigateur
  e.preventDefault();

  numberCheckboxHasChecked = document.querySelectorAll('input {type="checkbox"}:checked');

  console.log(numberCheckboxHasChecked);

  if ( numberCheckboxHasChecked.lengh == 0){
    alert('Cocher des table');
    return;
  }
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


})
