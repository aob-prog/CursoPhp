<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Primera pagina Php</title>
   
</head>
<body>

<?php
    
include ("vehiculos.php");

$mazda= new Coche();
$pegaso= new Camion();

echo "El Mazda tiene  " . $mazda->ruedas . "ruedas <br>";
echo "El Pegaso tiene " . $pegaso->ruedas . "ruedas <br>";





?>

</body>

</html>