<?php
$id = $_GET['id'];
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urna Eletrônica</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .urna {
            margin-left: 915px;
            margin-top: 225px;
            position: absolute;
            width: 230px;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #tela {
            height: 37px;
            width: 200px;
            position: absolute;
            margin-left: 20px;
            margin-top: -60px;
        }

        .tela {
            background-color: #000;
            color: #00ff00;
            font-size: 32px;
            text-align: center;
            line-height: 50px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .botoes {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .botoes input {
            margin-top: -10%;
            width: 70%;
            padding: 5px;
            font-size: 15px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .botoes input:hover {
            background-color: #555;
        }

        .botoes input[type="submit"].confirma {
            background-color: green;
        }

        .botoes input[type="submit"].corrige {
            background-color: orange;
        }

        .botoes input[type="submit"].branco {
            background-color: gray;
        }

        .pk {
            position: absolute;
            margin-top: -10px;
            margin-left: 70px;
        }

        #bnt1 {
            width: 57px;
        }

        #bnt2 {
            width: 57px;
        }

        #bnt3 {
            width: 68px;
        }
    </style>
</head>

<body>
    <div>
        <img src="img/tela.jpg" alt="">
        <img class="topo" src="img/topo.jpg" alt="">
        <img class="fxdir" src="img/faixaDir.jpg" alt="">
        <img class="abx1" src="img/abaixoTec.jpg" alt="">
    </div>


    <style>
        .topo {
            position: absolute;
            margin-top: -3px;
        }

        .fxdir {
            position: absolute;
            margin-top: 32px;
            margin-left: 274px
        }

        .abx1 {
            position: absolute;
            margin-top: 544px;
        }

        .sc1 {
            width: 275px;
            height: 150px;
            position: absolute;
            margin-top: -350px;
            margin-left: 642px;
            background-color: black;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .sc2 {
            width: 275px;
            height: 50px;
            position: absolute;
            margin-top: -200px;
            margin-left: 642px;
            background-color: black;
            display: flex;
            justify-content: space-around
        }

        .btnzero {
            width: 85px;
            margin-top: 5px;
        }

        .sc3 {
            width: 275px;
            height: 50px;
            position: absolute;
            margin-top: -110px;
            margin-left: 642px;
            background-color: black;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .sc3 input[type="submit"].confirma {
            background-color: green;
        }

        .sc3 input[type="submit"].corrige {
            background-color: orange;
        }

        .sc3 input[type="submit"].branco {
            background-color: gray;
        }



        .sc4 {
            width: 275px;
            height: 40px;
            position: absolute;
            margin-top: -150px;
            margin-left: 642px;
            background-color: black;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .tela {
            width: 50px;
            height: 50px;
            background-color: white;
            color: black;
            font-size: 32px;
            margin-left: 100px;
            text-align: center;
            line-height: 50px;
            margin-top: -300px;
            border-radius: 5px;
            position: absolute;
        }

        .menutela {
            width: 50px;
            height: 50px;
            color: black;
            font-size: 32px;
            margin-left: 100px;
            text-align: center;
            line-height: 50px;
            margin-top: -350px;
            border-radius: 5px;
            position: absolute;
        }
    </style>

    <div class="urna">

        <form action="votos.php" id="votoform" method="GET">
            <Input type="hidden" id="voto" name="voto" value="<?php echo $id ?>">
            <Input type="hidden" id="voto" name="id" value="<?php echo $id ?>">
        </form>

        <div id="tela" class="tela">
            <h1 class="pk">--</h1>
        </div>

        <div class="botoes">
            <input type="submit" value="1" onclick="digitar(1)">
            <input type="submit" value="2" onclick="digitar(2)">
            <input type="submit" value="3" onclick="digitar(3)">
            <input type="submit" value="4" onclick="digitar(4)">
            <input type="submit" value="5" onclick="digitar(5)">
            <input type="submit" value="6" onclick="digitar(6)">
            <input type="submit" value="7" onclick="digitar(7)">
            <input type="submit" value="8" onclick="digitar(8)">
            <input type="submit" value="9" onclick="digitar(9)">
            <input type="submit" value="0" onclick="digitar(0)">
            <input type="submit" id="bnt1" value="Branco" class="branco" onclick="votarBranco()">
            <input type="submit" id="bnt2" value="Corrige" class="corrige" onclick="corrigir()">
            <input type="submit" id="bnt3" value="Confirma" class="confirma" onclick="confirmar()">
        </div>

    </div>

    <script>
        let voto = "";

        function digitar(num) {
            if (voto.length < 2) {
                voto += num;
                document.getElementById('tela').innerText = voto;
            }
        }

        function corrigir() {
            voto = "";
            document.getElementById('tela').innerText = "--";
        }

        function votarBranco() {
            voto = "Branco";
            document.getElementById('tela').innerText = voto;
        }

        function confirmar() {
            if (voto === "") {
                alert("Nenhum voto registrado.");
            } else {
                alert("Voto confirmado: " + voto);
                document.getElementById('voto').value = voto;
                document.getElementById("votoform").submit();
                corrigir(); // Limpa a tela após confirmação
            }
        }
    </script>

    <form action="votos.php" id="votoform" method="get">
        <Input type="hidden" id="voto" name="voto">
    </form>

</body>

</html>