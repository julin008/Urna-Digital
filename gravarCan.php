<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravar Candidato</title>

    <style>
        /* Estilo básico da página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .conteudo {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .interface {
            max-width: 900px;
            margin: 0 auto;
        }

        /* Estilo da tabela */
        .tabela {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .tabela th, .tabela td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .tabela th {
            background-color: #4CAF50;
            color: white;
        }

        .tabela tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Estilo para o título de confirmação */
        .gravado {
            font-size: 24px;
            color: green;
            text-align: center;
            margin-top: 20px;
        }

        .gravado span {
            font-weight: bold;
            color: #2d8d2f;
        }

        /* Estilo para o link */
        .voltar {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .voltar:hover {
            background-color: #0056b3;
        }
    </style>

</head>

<body>
    <div class="conteudo"><!--Início Conteudo-->
        <div class="interface"><!-- Início Estilo Padrão todos os sites -->
            <?php
            include "mysqlconecta.php";
            /*Recebe as informações do form do inicio.php e cria variáveis */
            $nome       = $_POST['nome'];
            $sobrenome  = $_POST['sobrenome'];
            $partido    = $_POST['partido'];
            $numero     = $_POST['numero'];

            if (empty($nome) || empty($sobrenome) || empty($partido) || empty($numero)) {
                header("location: paginaPrincipal.php");
                exit();
                /*Se todos os campos forma preenchidos, cria uma simples tabela com as variáveis coletadas */
            } else {
                echo "<table class='tabela'>";
                echo "  <tr><th>Nome</th><th>Sobrenome</th><th>Partido</th><th>Numero</th>";
                echo "  <tr>";
                echo "      <td>" . $nome      . "</td>";
                echo "      <td>" . $sobrenome . "</td>";
                echo "      <td>" . $partido   . "</td>";
                echo "      <td>" . $numero    . "</td>";
                echo "</tr>";
                echo "</table>";
                /*Adiciona as variáveis no banco de dados chamando produto */
                try {
                    $query = mysqli_query($conexao, "INSERT INTO candidato (can_nome, can_sobrenome, can_partido, can_numero) 
                VALUES ('$nome', '$sobrenome', '$partido', '$numero');");
                } catch (Exception $e) {
                    echo '<script>console.log('.$e.')</script>';
                }

                /*Confirma que está gravado no banco da dados*/
                echo "<h1 class='gravado'>Gra<span>vado!!</span></h1>";

                mysqli_close($conexao);
            }
            ?>

            <a class="voltar" href="consultaCan.php">Consulta o  Candidato</a>

        </div><!-- Fim Estilo Padrão todos os sites -->
    </div><!--Fim Conteudo-->
</body>

</html>
