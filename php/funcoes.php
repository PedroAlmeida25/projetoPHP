<?php
    $num1 = 0;
    $num2 = 3;
    $par = 0;
    $impar = 0;
    $numero_binario = '1010';
    $numero_decimal = '32';

    function somar($num1, $num2){
        return $num1 + $num2;
    }//Fim do somar

    function subtrair($num1 , $num2){
        return $num1 - $num2;
    }//Fim do subtrair

    function mult($num1, $num2){
        return $num1 * $num2;
    }//Fim do multiplicar

    function dividir($num1, $num2){
        if($num2 <= 0){
            return "Impossível dividir por zero!";
        }else{
            return $num1 / $num2;
        }
    }//Fim do dividir

    function binario($numero_binario){
        $numero_decimal = decbin($numero_binario);
    }

    function decimal($numero_decimal){
        $numero_binario = bindec($numero_decimal);
    }

    function parImpar($num1){
    
    }

    function escolher($num1){
        switch ($num1){
            case 1:
                return "Azul";
                break;
            case 2:
                return "Preto";
                break;
            case 3:
                return "Branco";
                break;
            case 4:
                return "Amarelo";
                break;
            case 5:
                return "Marrom";
                break;
            case 6:
                return "Vermelho";
                break;
            case 7:
                return "Laranja";
                break;
            default:
                return "Cor não identificada";
                break;
        }//Fim do Switch
    }//Fim do escolher

    //Imprimir dados na tela
    // echo "<br>A soma dos números é: ".somar(5,6);
    // echo "<br>A subtração dos números é: ".subtrair(5,6);
    // echo "<br>A multiplicação dos números é: ".mult(5,6);
    // echo "<br>A divisão dos números é: ".dividir(5,6);
    // echo "<br>A transferência de número decimal para número binário é: ".decbin($numero_binario);
    // echo "<br>A tranferência de número binário para número decimal é: ".bindec($numero_decimal);
    // echo "<br>A escolha é: ".escolher(1);

?>