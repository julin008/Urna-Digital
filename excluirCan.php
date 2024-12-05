<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusão</title>

    <style>
        /* Resetando margens e padding */
        * {
            margin: 0;
            box-sizing: border-box;
        }

        /* Estilo do corpo da página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            padding: 20px;
        }

        /* Estilo do conteúdo principal */
        .conteudo {
            width: 100%;
            max-width: 700px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Estilo do título */

        .titulo span {
            color: #f44336; /* Cor vermelha para destacar a palavra DELETADO */
        }

        /* Estilo dos botões de navegação */
        a.voltar {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #008CBA;
            color: white;
            border-radius: 4px;
            margin-top: 20px;
            font-size: 16px;
            text-align: center;
        }

        a.voltar:hover {
            background-color: #005f73;
        }

    </style>
</head>

<body>
    <div class="conteudo"> <!--Início conteudo -->
        <div class="interface"><!-- Início Estilo Padrão todos os sites -->
            <table class="tabela"><!--Início Classe Tabela-->

                <?php
                include "mysqlconecta.php";//Incluir os comandos do mysqlconecta.php
                
                $id = $_GET["id"];

                $query = mysqli_query($conexao, "delete from candidato where can_candidato = '$id'") or die ("error1000");
                
                // Exibe uma mensagem de sucesso com o estilo
                echo ("<h1 class='titulo'>DELE<span>TADO!!!</span></h1>");
                ?>

            </table><!--Fim Classe Tabela-->
            
            <!-- Botões de navegação -->
            <a class="voltar" href="inicio.php">INCLUIR</a><!-- Botão para voltar para página index.php -->
            <a class="voltar" href="consultaCan.php">CONSULTA</a><!-- Botão para voltar para página consulta.php -->

        </div><!-- Fim Estilo Padrão todos os sites -->
    </div> <!--Fim conteudo -->
</body>

</html>
