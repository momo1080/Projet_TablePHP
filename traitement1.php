<?php
// var_dump($_POST);
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