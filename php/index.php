<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <h1>Cálculos</h1>
    <form method="POST">
        <?php 
            include 'funcoes.php'; //Conectando com o arquivo de funções
        ?>

        <label>Primeiro número:</label>
        <input type="number" id="num1" name="num1"><br>

        <label>Segundo número:</label>
        <input type="number" id="num1" name="num2"><br>

        <button>Calcular
            <?php
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
            ?>
        </button><br>

        <textarea cols="40" rows="100" readOnly>
            <?php 
                echo somar($num1, $num2).
                    "\n".subtrair($num1, $num2).
                    "\n".mult($num1, $num2).
                    "\n".dividir($num1, $num2).
                    "\n".escolher($num1).
                    "\n".decbin($num2).
                    "\n".bindec($num1);
            ?>
        </textarea>
    </form>
</body>
</html>