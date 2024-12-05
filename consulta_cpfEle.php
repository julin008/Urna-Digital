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

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .conteudo {
            width: 80%;
            max-width: 900px;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        /* Estilizando a tabela */
        .tabela {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .tabela th,
        .tabela td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .tabela th {
            background-color: #3498db;
            color: white;
        }

        .tabela tr:hover {
            background-color: #ecf0f1;
        }

        /* Estilo para o link de votar */
        .deletar {
            text-decoration: none;
            color: #27ae60;
            font-weight: bold;
            padding: 8px 12px;
            background-color: #2ecc71;
            border-radius: 5px;
        }

        .deletar:hover {
            background-color: #27ae60;
        }

        /* Botão de voltar */
        button {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>

</head>

<body>
    <div class="conteudo"> <!-- Início do conteúdo -->
        <div class="interface"> <!-- Início do estilo padrão -->
            <h1>Consulta de Eleitores</h1> <!-- Título da página -->

            <table class="tabela"> <!-- Início da tabela -->
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Voto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "mysqlconecta.php"; // Incluir os comandos do mysqlconecta.php
                    
                    $busca = $_POST["busca"]; // Pega o CPF que foi buscado

                    $query = mysqli_query($conexao, "SELECT ele_cod, ele_nome, ele_cpf from eleitor where ele_cpf like '$busca' GROUP BY ele_cod");

                    // Laço para exibir os dados na tabela
                    while ($saida = mysqli_fetch_array($query)) {
                        $codigo = $saida[0];  // Código do eleitor
                        $nome = $saida[1];    // Nome do eleitor
                        $cpf = $saida[2];     // CPF do eleitor

                        echo "<tr>";
                        echo "<td>$codigo</td>";
                        echo "<td>$nome</td>";
                        echo "<td>$cpf</td>";
                        echo "<td><a class='deletar' href='urna.php?id=$codigo'>Votar</a></td>";
                        echo "</tr>";
                    }

                    mysqli_close($conexao); // Fecha a conexão com o banco de dados
                    ?>
                </tbody>
            </table> <!-- Fim da tabela -->

            <a class="votar" href="voto.php"><button>Voltar para página anterior</button></a>
        </div> <!-- Fim do estilo padrão -->
    </div> <!-- Fim do conteúdo -->
</body>

</html>
