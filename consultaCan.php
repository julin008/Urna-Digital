<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta</title>
    
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Corpo da página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .conteudo {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        /* Estilo do título */
        .titulo {
            font-size: 2.5em;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .titulo span {
            color: #007BFF;
        }

        /* Estilo do formulário */
        #conteiner-form form {
            width: 100%;
        }

        fieldset {
            border: none;
            margin: 0;
            padding: 0;
        }

        label {
            display: block;
            font-size: 1.1em;
            margin-bottom: 10px;
            text-align: left;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 4px;
            font-size: 1em;
        }

        .submit {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1.1em;
            transition: background-color 0.3s;
        }

        .submit:hover {
            background-color: #0056b3;
        }

    </style>
    
</head>

<body>
    <div class="conteudo"><!--Início Conteudo-->
        <div class="interface"><!-- Início Estilo Padrão todos os sites -->
            <h1 class="titulo">Con<span>sulta</span></h1>
            <div id="conteiner-form">

                <form method="post" action="consulta_loteCan.php"><!--Início Formulário-->
                    <fieldset>
                        <!--localizar-->
                        <label for="busca">Localizador:</label>
                        <input type="text" name="busca" id="busca">

                        <!--Botão que leva para a página -->
                        <input class="submit" type="submit" value="Buscar">
                    </fieldset>
                </form><!--Fim Formulário-->
            </div>
        </div><!-- Fim Estilo Padrão todos os sites -->
    </div><!--Fim Conteudo-->

</body>

</html>
