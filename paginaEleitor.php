<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justiça Eleitoral</title>
    <style>
        body {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-color: #f5f5dc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .conteudo {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .interface {
            background-color: #ffffff;
            border: 2px solid #333;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px; /* Ajusta a largura máxima */
        }

        .titulo {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            margin-bottom: 20px;
        }

        .titulo span {
            color: #4CAF50; /* Cor do texto 'Eleitor' */
        }

        #conteiner-form {
            width: 100%;
        }

        fieldset {
            border: none;
            padding: 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .submit {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="conteudo">
        <div class="interface">
            <h1 class="titulo">Registro<span>Eleitor</span></h1>
            <div id="conteiner-form">
                <form method="post" action="gravarEle.php">
                    <fieldset>
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" required>

                        <label for="sobrenome">Sobrenome:</label>
                        <input type="text" id="sobrenome" name="sobrenome" required>

                        <label for="telefone">Telefone do Eleitor:</label>
                        <input type="number" id="telefone" name="telefone" required>

                        <label for="cpf">CPF do Eleitor:</label>
                        <input type="number" id="cpf" name="cpf" required>

                        <input class="submit" type="submit" value="REGISTRAR ELEITOR">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
