<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração</title>
    <link rel="stylesheet" href="estilo.css">

    <!-- 7 -->
</head>

<body>
    <div class="conteudo"> <!--Início conteudo -->
        <div class="interface"><!-- Início EStilo Padrão todos os sites -->

            <?php
            include "mysqlconecta.php"; // Inclui o arquivo de conexão com o banco de dados

            $id        = $_POST['codigo']; // Obtém o código do eleitor enviado pelo formulário
            $nome      = $_POST['nome']; // Obtém o nome do eleitor enviado pelo formulário
            $sobrenome = $_POST['sobrenome']; // Obtém o sobrenome do eleitor enviado pelo formulário
            $telefone  = $_POST['telefone']; // Obtém o telefone do eleitor enviado pelo formulário
            $cpf       = $_POST['cpf']; // Obtém o cpf do eleitor enviado pelo formulário         
          

            // Atualiza os dados do eleitor no banco de dados com base no código fornecido
            mysqli_query($conexao, "update eleitor set ele_nome = \"$nome\", ele_sobrenome = \"$sobrenome\", ele_telefone = \"$telefone\", 
            ele_cpf = \"$cpf\"
            WHERE ele_cod = '$id'") or die("erro1000"); // Mensagem de erro caso a consulta falhe
            ?>

            <h1 class="titulo">ELEITOR ALTERADO COM <span>SUCESSO</span></h1>

            <a class="voltar" href="inicio.php">INCLUIR</a><!--Botão para voltar para página index.php-->
            <a class="voltar" href="consultaEle.php">CONSULTA</a><!--Botão para voltar para página consulta.php-->

        </div><!-- Fim EStilo Padrão todos os sites -->
    </div> <!--Fim conteudo -->
</body>

</html>