<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Primera pagina Php</title>
   
</head>
<body>

<?php

    include ("concesionaria.php");

    Compra_vehiculo::descuento_gobierno();

    $compra_Antonio=new Compra_vehiculo("compacto");
    $compra_Antonio->climatizador();
    $compra_Antonio->tapiceria_cuero("blanco");

    echo $compra_Antonio->precio_final();

    echo "<br>";

    $compra_Ana=new Compra_vehiculo("compacto");
    $compra_Ana->climatizador();
    $compra_Ana->tapiceria_cuero("rojo");
    echo $compra_Ana->precio_final()




?>

</body>

</html>