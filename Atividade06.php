<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Arrays - Vetores</h1>";
    $carros = array('Fiesta', 'Palio', 'Corsa', 'Siena');
    echo $carros[1], "<br>";
    echo $carros[3], "<br>";

     //Novos elementos
    $carros[4] = "Clio";
    $carros[11] = "Versa";
    $carros[ ] = "Sandero";
    echo $carros [4] , "<br>"; //Resultado Clio
    echo $carros [5], "<br>"; //Sem Resultado
    echo $carros [11], "<br>"; //Resultado Versa
    echo $carros [12], "<br>"; //Resultado Sandero
    ?>
</body>
</html>