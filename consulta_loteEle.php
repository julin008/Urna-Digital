<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>

    <style>
        /* Reset de margens e padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilos gerais para o corpo da página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
        }

        /* Estilos para o conteúdo principal */
        .conteudo {
            max-width: 1100px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Estilos para a tabela */
        .tabela {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .tabela th, .tabela td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .tabela th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }

        .tabela tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .tabela a {
            color: #007BFF;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 4px;
            background-color: #f1f1f1;
        }

        .tabela a.deletar {
            background-color: #ff6b6b;
            color: white;
        }

        .tabela a.deletar:hover {
            background-color: #e60000;
        }

        .tabela a.alterar {
            background-color: #4CAF50;
            color: white;
        }

        .tabela a.alterar:hover {
            background-color: #45a049;
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
        }

        .voltar:hover {
            background-color: #45a049;
        }

    </style>
</head>

<body>
    <div class="conteudo"> <!--Início conteudo -->
        <div class="interface"><!-- Início Estilo Padrão todos os sites -->
            <table class="tabela"><!--Início Classe Tabela-->

                <?php
                include "mysqlconecta.php"; //Incluir os comandos do mysqlconecta.php

                $busca = $_POST["busca"];

                //Seleciona as colunas do banco de dados
                $query = mysqli_query($conexao, "SELECT ele_cod, ele_nome, ele_sobrenome, ele_telefone, ele_cpf from eleitor");

                //Cria os títulos das colunas 
                echo "<tr>  
                        <th>Código</th> 
                        <th>Nome</th> 
                        <th>Sobrenome</th> 
                        <th>Telefone</th> 
                        <th>CPF</th>
                        <th>Deletar</th> 
                        <th>Alterar</th>
                    </tr>"; //Títulos das colunas da tabela
                
                //Enquanto tiver registro dentro de $query, não sairá do laço
                while ($saida = mysqli_fetch_array($query)) {
                    $codigo       = $saida[0]; //coluna 0
                    $nome         = $saida[1]; //coluna 1
                    $sobrenome    = $saida[2]; //coluna 2
                    $telefone     = $saida[3]; //coluna 3
                    $cpf          = $saida[4]; //coluna 4
                   
                    //Cria a Tabela e coloca exibe na tela com as variáveis que estão no banco
                    echo "<tr>";
                    echo "<td>" . $codigo      . "</td>";
                    echo "<td>" . $nome        . "</td>";
                    echo "<td>" . $sobrenome   . "</td>";
                    echo "<td>" . $telefone    . "</td>";
                    echo "<td>" . $cpf         . "</td>";
                    echo "<td><a class='deletar' href='excluirEle.php?id=". $codigo ."'>Deletar</a></td>";
                    echo "<td><a class='alterar' href='alterarEle.php?id=". $codigo ."'>Alterar</a></td>";
                    echo "</tr>";
                }
                echo "</table>";

                mysqli_close($conexao);
                ?>

            </table><!-- Fim Classe Tabela -->

            <!-- Botões para navegação -->
            <a class="voltar" href="inicio.php">INCLUIR</a>
            <a class="voltar" href="consultaEle.php">CONSULTA</a>

        </div><!-- Fim Estilo Padrão todos os sites -->
    </div> <!-- Fim conteudo -->
</body>

</html>
