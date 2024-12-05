<?php
    include "mysqlconecta.php";
    $voto = $_GET['voto'];
    $id = $_GET['id'];

    $query = mysqli_query($conexao,"INSERT INTO voto (vot_ele_cod,vot_voto) VALUES ('$id','$voto')");

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voto Registrado</title>
    <link rel="stylesheet" href="style.css"> <!-- Link para o arquivo CSS -->
    <style>
        /* CSS personalizado aqui */
        body {
            background-color: #e0f7fa;
            font-family: Arial, sans-serif;
            color: #006064;
            margin: 0;
            padding: 20px;
        }
        button {
            background-color: #4fc3f7;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #29b6f6;
        }
        a {
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <br>
    <h1>Voto Registrado</h1>
    <p><strong>Voto:</strong> <?php echo $voto; ?></p>
    <p><strong>ID do Eleitor:</strong> <?php echo $id; ?></p>
    <br>
    <a href="inicio.php"><button>Voltar para página inicial</button></a>

</body>
</html>