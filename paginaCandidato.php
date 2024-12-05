<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justiça Eleitoral</title>
    <link rel="stylesheet" href="">

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

        .container {
            background-color: #ffffff;
            border: 2px solid #333;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .titulo {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            margin-bottom: 20px;
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
    <div class="container">
        <h1 class="titulo">Registro <span>Candidato</span></h1>
        <form method="post" action="gravarCan.php">
            <fieldset>
                <label>Nome:</label>
                <input type="text" name="nome" required>

                <label>Sobrenome:</label>
                <input type="text" name="sobrenome" required>

                <label>Partido Candidato:</label>
                <input type="text" name="partido" required>

                <label>Número Candidato:</label>
                <input type="number" name="numero" required>

                <input class="submit" type="submit" value="GRAVAR SEU VOTO">
            </fieldset>
        </form>
    </div>
</body>

</html>
