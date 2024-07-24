<?php
    $num1 = 0;
    $num2 = 0;
    $num3 = 0;
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

    function converterBinario($decimal){
        $binario = "";
        while($decimal >= 1){
            $binario .= $decimal % 2;
            $decimal = $decimal / 2;
        }
        return strrev($binario);
    }

    function converterDecimal($binario){
        $tamanho = strlen($binario);
        $j = $tamanho - 1;
        $i = 0;
        $decimal = 0;
        while($i < $tamanho){
            if(substr($binario,$i,1) == "1"){
                $decimal += pow(2,$j);
            }                                                                                                                
            $j--;
            $i++; 
        }
        return $decimal;
    }

    function parImpar($num1){
        if($num1 % 2 == 0){
            return "par";
        }else{
            return "ímpar";
        }
    }

    function idade($num1){
        if($num1 < 18){
            return "menor de idade";
        }else if($num1 >= 18){
            return "maior de idade";
        }
    }

    function dobro($num1){
        return $num1 * 2;
    }

    function converterFahrenheit($num1, $num2){
        return $num1 = (9 * $num2 + 160) / 5;
    }

    function maiorTres($num1, $num2, $num3){
        if(($num1 > $num2) && ($num1 > $num3)){
            return $num1;
        }else if(($num2 > $num1) && ($num2 > $num3)){
            return $num2;
        }else{
            return $num3;
        }
    }

    function positivoNegativo($num1){
        if($num1 > 0){
            return "positivo";
        }else if($num1 = 0){
            return "igual a zero";
        }else if($num1 < 0){
            return "menor que zero";
        }
    }

    function tabuada($num1){
        for ($i = 0; $i <= 10; $i++) { 

            for ($contador = 0; $contador <= 10; $contador++){ 
                while ($i == $contador) {
                    echo "\n\nTabuada do $contador\n";
                    break;
                }
            }

            for ($num = 0; $num <= 10; $num ++){ 
                $calc = $i * $num;
                echo "$i X $num = $calc\n";
            }
        }
    }

    function media($num1, $num2, $num3){
        return ($num1 + $num2 + $num3) / 3;
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
            case 8:
                return "Verde";
                break;
            case 9:
                return "Azul escuro";
                break;
            case 10:
                return "Roxo";
                break;
            case 11:
                return "Vinho";
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