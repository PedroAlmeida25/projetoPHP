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
        <input type="number" id="num2" name="num2"><br>

        <label>Terceiro número:</label>
        <input type="number" id="num3" name="num3"><br>
    
        <button>Calcular
            <?php
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];
            ?>
        </button><br>

        <textarea cols="100" rows="100" readOnly>
            <?php 
               echo "\nA soma é: ".somar($num1, $num2).
                    "\nA subtração é: ".subtrair($num1, $num2).
                    "\nA multiplicação é: ".mult($num1, $num2).
                    "\nA divisão é: ".dividir($num1, $num2).
                    "\nA cor escolhida é: ".escolher($num1).
                    "\nA conversão de decimal para binário é: ".converterBinario($numero_binario).
                    "\nA conversão de binário para decimal é: ".converterDecimal($numero_decimal).
                    "\nEsse número é: ".parImpar($num1).
                    "\nVocê é: ".idade($num1).
                    "\nO dobro desse número é: ".dobro($num1).
                    "\nA conversão de celsius para fahrenheit é: ".converterfahrenheit($num1, $num2).
                    "\nO maior número é: ".maiorTres($num1, $num2, $num3).
                    "\nO número é: ".positivoNegativo($num1).
                    "\n".tabuada($num1).
                    "\nA média dos três números é: ".media($num1, $num2, $num3).
                    "\nEsse número: ".primo($num1);
            ?>
        </textarea>
    </form>
</body>
</html>