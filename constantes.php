<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Prueba de Php</title>
</head>
<body>

<p>&nbsp;</p>
<form name="form1" method="post" action="">
    <p>
        <label for="num1"></label>
        <input type="text" name="num1" id="num1">
        <label for="num2"></label>
        <input type="text" name="num2" id="num2">
        <label for="operacion"></label>
        <select name="operacion" id="operacion">
            <option>Suma</option>
            <option>Resta</option>
            <option>Multiplicacion</option>
            <option>Division</option>
            <option>Modulo</option>
            <option>Incremento</option>     
            <option>Decremento</option>
        </select>
    </p>
<p>
    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
</p>
</form>
<p>&nbsp;</p>


<?php

if(isset($_POST["button"])){

    $numero1=$_POST["num1"];
    $numero2=$_POST["num2"];
    $operacion=$_POST["operacion"];


    switch($operacion){

        case "Suma":
            echo("El resultado es " . ($numero1+$numero2));
            break;
        case "Resta":
                echo("El resultado es " . ($numero1-$numero2));
                break;
        case "Multiplicacion":
                echo("El resultado es " . ($numero1*$numero2));
                break;
        case "Division":
                echo("El resultado es " . ($numero1/$numero2));
                break;        
        case "Modulo":
                echo("El resultado es " . ($numero1%$numero2));
                break;        
        case "Incremento":
                echo("El resultado es " . ($numero1++));
                break;        
        case "Decremento":
                echo("El resultado es " . ($numero1--));
                break;        
        
        
            }



};

?>
</body>


</html>
