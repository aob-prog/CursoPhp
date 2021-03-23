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
        </select>
    </p>
<p>
    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
</p>
</form>
<p>&nbsp;</p>


<?php

if (isset($_POST["button"])) {

    $n1=$_POST["num1"];
    $n2=$_POST["num2"];
    $operacion=$_POST["operacion"];

  
  


    


};


?>
</body>


</html>
