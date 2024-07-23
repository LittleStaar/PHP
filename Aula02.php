<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      p{
        color: red;
      }

    </style>
</head>
<body>
    <h1>Aprendendo PHP</h1>

    <?php
    echo "Aqui aparece um texto na tela do usuário";
    echo "<h1>Isso é o título</h1>";
    echo "<p>Parágrafo do texto</p>";

    print "<p>Texto dentro do print</p>";

    $nome = "Aline";
    $idade = 18;
    $altura = 1.65;

    echo "$nome tem $altura m e $idade anos de idade <br>";
    $a = 10; 
    $b = 5;
    $c = $a + $b;
    echo "A soma de $a e $b é $c<br>";
    $c = $a - $b;
    echo "A subtração de $a e $b é $c<br>";
    $c = $a * $b;
    echo "A multiplicação de $a e $b é $c<br>";
    $c = $a / $b;
    echo "A divisão de $a e $b é $c<br>";
    $c = $a % $b;
    echo "O resto da divisão de $a e $b é $c<br>";
    $c = $a ** $b;
    echo "A potência de $a e $b é $c<br>";



    ?>
</body>
</html>