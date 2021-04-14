<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Primera pagina Php</title>
   
</head>
<body>

<?php
 
$db_host="localhost"; //dir de la base de datos
$db_nombredb="pruebas"; //nombre de la base
$db_usuario="root"; //usuario
$db_contra="";//password de la base

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra); //conecta a la base

//si llega a dar error la conexion, se pone el if de abajo
if (mysqli_connect_errno()) {

    echo "Falla al conectar con la base de datos";

    exit(); //te saca afuera del php

}
mysqli_select_db($conexion, $db_nombredb) or die ("No se encuentra la BBDD"); 
//en vez de pasar la base como parametro en conexion, la elegimos aca, y si da error elegimos que hace


mysqli_set_charset($conexion, "utf8"); //elige el juego de caracteres para los acentos

$consulta="SELECT * FROM DATOSPERSONALES"; // FILTRA QUE QUEREMOS OBTENER

$resultados=mysqli_query($conexion, $consulta); //hace consulta y guarda en una tabla virtual ($resultados)


$registros=1;

while ($registros<=3){
$fila=mysqli_fetch_row($resultados); // mira dentro de esa tabla y la guarda en un array
//esto lee 1 registro por vez, para leer toda la base, recorrerlo todo

echo $fila[0] . " ";
echo $fila[1] . " "; 
echo $fila[2] . " ";
echo $fila[3] . " ";
echo "<br>";
$registros++;
}




?>

</body>

</html>