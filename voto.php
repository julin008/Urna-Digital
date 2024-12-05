<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Voto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #4CAF50;
            margin-bottom: 20px;
        }

        fieldset {
            border: 2px solid black;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        legend {
            font-weight: bold;
            color: #4CAF50;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        input[type="number"] {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 16px;
        }

        .submit {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .submit:hover {
            background-color: #45a049;
        }
        
    </style>
</head>

<body>
    <h1>Registro de Voto</h1>

    <form method="post" action="consulta_cpfEle.php">
        <fieldset>
            <legend>Informações do Eleitor</legend>
            <label for="cpf">CPF do Eleitor:</label>
            <input type="number" id="cpf" name="busca" required>
            <button type="submit" class="submit">Verificar Documento</button>
        </fieldset>
    </form>
</body>

</html>
