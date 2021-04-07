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


// como estoy llamando a ruedas y esta encapsulado no me deja, esto de abajo no sirve.
//echo "El Mazda tiene  " . $mazda->ruedas . " ruedas <br>";
// echo "El Pegaso tiene " . $pegaso->ruedas . " ruedas <br>";


// primero voy a la; clase y creo una function get que retorne el valor que quiero, y ahora lo llamo;


echo "el mazda tiene " . $mazda->get_ruedas() . " ruedas <br>";
echo "el pegazo tiene " . $pegaso->get_ruedas() . " ruedas <br>";
echo "el mazda tiene " . $mazda->get_motor() . " centimetros cubicos <br>";
echo "el pegazo tiene " . $pegaso->get_motor() . " centimetros cubicos <br>";


?>

</body>

</html>