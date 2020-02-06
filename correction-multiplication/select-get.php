<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- En formulaire avec select -->
    <form action="" method="get">
        <select name="table">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <button>Valider</button>
    </form>
    <br><br>
    
        <!-- Ou directement en lien <a href=""></a> -->
        <?php for ($i=0; $i <= 10 ; $i++) { 
            echo '<a href="'.$_SERVER['PHP_SELF'].'?table='.$i.'">Table de '.$i.'</a><br>';
        }
        ?>
        <br><br>


    <?php


        if(!isset($_GET['table'])) { //Si on a rien envoyé, $_GET['table'] n'existe pas, on le set à une table par défaut (ici 0) pour éviter les notice: undefined index
            $_GET['table'] = 0;
        }
        for ($i=0; $i <= 10; $i++) { //On génère la table en fonction du chiffre envoyé dans $_POST['table'] (qui vaut 0 si rien d'envoyé)
            echo  $_GET['table'].'x '.$i. ' = '. $_GET['table']*$i. '<br>';
        }

    ?>
</body>
</html>