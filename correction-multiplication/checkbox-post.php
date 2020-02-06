<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        <input value="1" type="checkbox" name="table[]"> Table de 1<br>
        <input value="2" type="checkbox" name="table[]"> Table de 2<br>
        <input value="3" type="checkbox" name="table[]"> Table de 3<br>
        <input value="4" type="checkbox" name="table[]"> Table de 4<br>
        <input value="5" type="checkbox" name="table[]"> Table de 5 <br>
        <input value="6" type="checkbox" name="table[]"> Table de 6<br>
        <input value="7" type="checkbox" name="table[]"> Table de 7<br>
        <input value="8" type="checkbox" name="table[]"> Table de 8<br>
        <input value="9" type="checkbox" name="table[]"> Table de 9<br>
        <input value="10" type="checkbox" name="table[]"> Table de 10 <br>
        <button>Valider</button>

    </form>

    <?php

        
        if(!isset($_POST['table'])) { //Si on a rien envoyé, on set la variable $table à une valeur par défaut, ici 0 , pour éviter les notice: undefined index
            $table = 0;
        }
        if(isset($_POST['table']) && is_array($_POST['table'])) { //Si $_POST['table'] existe et est un tableau, on boucle dessus avec foreach.
            foreach ($_POST['table'] as $key => $table) {
                for ($i=0; $i <= 10; $i++) { 
                    echo  $table.'x '.$i. ' = '.$table *$i. '<br>';
                }
            echo "<br>";
            }
        }
        else { //Sinon, $_POST['table'] n'est pas un tableau : on a choisi qu'une table (coché qu'une case), on ne fait qu'une seule boucle.
            for ($i=0; $i <= 10; $i++) { 
                echo  $table.'x '.$i. ' = '.$table *$i. '<br>';
            }
        }
        


    ?>
</body>
</html>