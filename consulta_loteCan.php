<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    
    <style>
        /* Resetando margens e padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilo do corpo da página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
        }

        /* Estilo do conteúdo principal */
        .conteudo {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Estilo da tabela */
        table.tabela {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table.tabela th, table.tabela td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table.tabela th {
            background-color: #4CAF50;
            color: white;
        }

        table.tabela tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table.tabela tr:hover {
            background-color: #ddd;
        }

        /* Estilo dos links de ação (Deletar e Alterar) */
        a.deletar, a.alterar {
            display: inline-block;
            padding: 6px 12px;
            text-decoration: none;
            color: white;
            background-color: #f44336; /* Vermelho para deletar */
            border-radius: 4px;
            margin-right: 8px;
            text-align: center;
        }

        a.alterar {
            background-color: #4CAF50; /* Verde para alterar */
        }

        a.deletar:hover, a.alterar:hover {
            opacity: 0.8;
        }

        /* Estilo dos botões de navegação */
        a.voltar {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #008CBA;
            color: white;
            border-radius: 4px;
            margin-right: 10px;
            font-size: 16px;
            text-align: center;
            margin-top: 20px;
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

                $busca = $_POST["busca"];

                //Seleciona as colunas do banco de dados
                $query = mysqli_query($conexao, "SELECT can_candidato, can_nome, can_sobrenome, can_numero, can_partido FROM candidato 
                WHERE can_nome LIKE \"%$busca%\" GROUP BY 1");

                //Cria os títulos das colunas 
                echo "<tr> <th>Codigo</th> <th>Nome</th> <th>Sobrenome</th> <th>Numero</th> <th>Partido</th>
                <th>Deletar</th> <th>Alterar</th></tr>";//Títulos das colunas da tabela
                
                //Enquanto tiver registro dentro de $query, não sairá do laço
                while ($saida = mysqli_fetch_array($query)) {

                    $codigo     = $saida[0];
                    $nome       = $saida[1];//coluna 0
                    $sobrenome  = $saida[2];//coluna 1
                    $numero     = $saida[3];//coluna 2
                    $partido    = $saida[4];//coluna 3

                    //Cria a Tabela e coloca exibe na tela com as váriaveis que está no banco

                    echo ("<tr>");
                    echo (" <td> " . $codigo      .  "</td>");
                    echo (" <td> " . $nome      .  "</td>");
                    echo (" <td> " . $sobrenome .  "</td>");
                    echo (" <td> " . $numero    .  "</td>");
                    echo (" <td> " . $partido   .  "</td>");
                    echo (" <td> <a class=deletar href=excluirCan.php?id=". $codigo ." >Deletar</a></td>");
                    echo (" <td> <a class=alterar href=alterarCan.php?id=". $codigo ." >Alterar</a></td>");
                }
       
                echo ("</tr>");
                mysqli_close($conexao);
                
                ?>

            </table><!--Fim Classe Tabela-->

            <a class="voltar" href="inicio.php">INCLUIR</a><!--Botão para voltar para página index.php-->
            <a class="voltar" href="consultaCan.php">CONSULTA</a><!--Botão para voltar para página consulta.php-->

        </div><!-- Fim Estilo Padrão todos os sites -->
    </div> <!--Fim conteudo -->
</body>

</html>
