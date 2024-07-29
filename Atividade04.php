<?php
// Defina o número de linhas e colunas da tabela
$rows = 10;
$cols = 1;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Fotos</title>
     <style>
        body{
            background-color: #81d4f4;
            margin-top: 70px;
        }
        .gallery img {
            width: 290px;
            height: 290px;
            margin: 1px
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 1px;
        }
    </style>
</head>
<body>
    </table>
    <div class="gallery">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<img src='img/foto$i.jpg' alt='Foto1$i'>";
        } 
        ?>
    </div>

</body>
</html>