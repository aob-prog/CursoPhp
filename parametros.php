<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Primera pagina Php</title>
   
</head>
<body>

<?php
 
 function incrementa ($valor1){

    $valor1++;

    return $valor1;

 }

$numero=8;

echo incrementa($numero) . "<br>";
echo $numero;


?>

</body>

</html>