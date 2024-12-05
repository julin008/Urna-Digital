<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta</title>
    
    <style>
        /* Reset de alguns estilos básicos */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Definindo a fonte e o fundo do corpo */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
        }

        /* Estilos para o conteúdo principal */
        .conteudo {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Estilos para o título */
        .titulo {
            font-size: 32px;
            text-align: center;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .titulo span {
            color: #FF5722;
        }

        /* Estilos para o formulário */

        fieldset {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            background-color: #fafafa;
        }

        input[type="text"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .submit {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit:hover {
            background-color: #45a049;
        }

    </style>
</head>

<body>
    <div class="conteudo"><!--Início Conteudo-->
        <div class="interface"><!-- Início Estilo Padrão todos os sites -->
            <h1 class="titulo">Con<span>sulta</span></h1>
            <div id="conteiner-form">

                <form method="post" action="consulta_loteEle.php"><!--Início Formulário-->
                    <fieldset>
                        <!--localizar-->
                        <label>localizador:</label>
                        <input type="text" name="busca">

                        <!--Botão que leva para a página -->
                        <input class="submit" type="submit" value="&">
                    </fieldset>
                </form><!--Fim Formulário-->
            </div>
        </div><!-- Fim Estilo Padrão todos os sites -->
    </div><!--Fim Conteudo-->
</body>

</html>
