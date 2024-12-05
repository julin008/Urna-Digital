<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravar Eleitor</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }

        .conteudo {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .interface {
            text-align: center;
        }

        h1 {
            font-size: 24px;
            color: #2d8f2d;
            margin-bottom: 20px;
        }

        .gravado {
            color: green;
            font-size: 26px;
            font-weight: bold;
        }

        .gravado span {
            font-style: italic;
            color: antiquewhite;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
        }

        td {
            background-color: #f9f9f9;
        }

        .voltar {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
        }

        .voltar:hover {
            background-color: #45a049;
        }

    </style>
</head>

<body>
    <div class="conteudo"><!--Início Conteudo-->
        <div class="interface"><!-- Início Estilo Padrão todos os sites -->
            <?php
            include "mysqlconecta.php";
            /*Recebe as informações do form do index.php e cria variáveis */
            $nome       =     $_POST['nome']; 
            $sobrenome  =     $_POST['sobrenome'];
            $telefone   =     $_POST['telefone'];
            $cpf        =     $_POST['cpf'];

            if (empty($nome) || empty($sobrenome) || empty($telefone) || empty($cpf)) {
                header("location: paginaPrincipal.php");
                exit();
                /*Se todos os campos forma preenchidos, cria uma simples tabela com as variáveis coletadas */
            } else {
                echo "<table class='tabela'>";
                echo "  <tr><th>Nome</th><th>Sobrenome</th><th>telefone</th><th>cpf</th>";
                echo "  <tr>";
                echo "      <td>" . $nome      . "</td>";
                echo "      <td>" . $sobrenome . "</td>";
                echo "      <td>" . $telefone  . "</td>";
                echo "      <td>" . $cpf       . "</td>";
                echo "</tr>";
                echo "</table>";
                /*Adiciona as variáveis no banco de dados chamando produto */
                try{
                    $query = mysqli_query($conexao, "INSERT INTO eleitor (ele_nome, ele_sobrenome, ele_telefone, ele_cpf) 
                VALUES ('$nome', '$sobrenome', '$telefone', '$cpf');");
                }catch(Exception $e){
                    echo '<script>console.log('.$e.')</script>';
                }
       
                /*Confirma que está gravado no banco da dados*/
                echo "<h1 class='gravado'>Gra<span>vado!!</span></h1>";

                mysqli_close($conexao);
            }
            ?>

            <a class="voltar" href="consultaEle.php">Consulta</a>
            
        </div><!-- Fim Estilo Padrão todos os sites -->
    </div><!--Fim Conteudo-->
</body>

</html>
