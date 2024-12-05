<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão</title>

    <style>
        /* Resetando margens e preenchimentos */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilos gerais para o corpo */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
        }

        /* Estilos para o conteúdo */
        .conteudo {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Estilos para o título */
        .titulo {
            font-size: 36px;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .titulo span {
            color: #FF5722;
        }

        /* Estilo da tabela */
        .tabela {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        /* Estilos para os botões de navegação */
        .voltar {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
            margin-right: 10px;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        .voltar:hover {
            background-color: #45a049;
        }

        .voltar:active {
            background-color: #3e8e41;
        }
        
    </style>
</head>

<body>
    <div class="conteudo"> <!--Início conteudo -->
        <div class="interface"><!-- Início Estilo Padrão todos os sites -->

            <?php
            include "mysqlconecta.php"; //Incluir os comandos do mysqlconecta.php

            $id = $_GET["id"];

            // Realiza a exclusão no banco de dados
            $query = mysqli_query($conexao, "DELETE FROM eleitor WHERE ele_cod = '$id'") or die("Erro ao excluir");

            // Exibe uma mensagem de sucesso
            echo ("<h1 class='titulo'>DELE<span>TADO!!!</span></h1>");
            ?>

            <!-- Botões de navegação -->
            <a class="voltar" href="inicio.php">INCLUIR</a>
            <a class="voltar" href="consultaEle.php">CONSULTA</a>

        </div><!-- Fim Estilo Padrão todos os sites -->
    </div> <!-- Fim conteudo -->
</body>

</html>
