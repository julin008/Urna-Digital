<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gravadoo!!</title>


</head>
<body>
<?php
    include "mysqlconecta.php";
    $voto = $_GET['tipo'];
   
    echo $voto;
    
    $query = mysqli_query($conexao, "insert into voto (tipo_voto) values 
    ('$voto' );");

    echo("<div class='letra'>Gravado!! </div>" );
    mysqli_close($conexao);

    ?>
    <a href="votar.php"><button>votar</button></a>
    
        
</body>
</html>