<style>
.resultado{
    color:red;
    font-weight:bold;
    font-size: 32px;
}

</style>    

<?php

if(isset($_POST["button"])){

    $numero1=$_POST["num1"];
    $numero2=$_POST["num2"];
    $operacion=$_POST["operacion"];
    calcular($numero1, $numero2,$operacion);

}

function calcular ($num1,$num2,$calculo){
    switch($calculo){

        case "Suma":
            echo("<p class='resultado'>El resultado es </p>" . ($num1+$num2));
            break;
        case "Resta":
                echo("<p class='resultado'>El resultado es </p>" . ($num1-$num2));
                break;
        case "Multiplicacion":
                echo("<p class='resultado'>El resultado es </p>" . ($num1*$num2));
                break;
        case "Division":
                echo("<p class='resultado'>El resultado es </p>" . ($num1/$num2));
                break;        
        case "Modulo":
                echo("<p class='resultado'>El resultado es </p>" . ($num1%$num2));
                break;        
        case "Incremento":
                echo("<p class='resultado'>El resultado es </p>" . (++$num1));
                break;        
        case "Decremento":
                echo("<p class='resultado'>El resultado es </p>" . (--$num1));
                break;        



    }
};

?>