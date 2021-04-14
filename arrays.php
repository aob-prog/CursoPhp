<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Primera pagina Php</title>
   
</head>
<body>

<?php


$semana=array("lunes","martes","miercoles","jueves");

sort($semana);

for ($i=0;$i<count($semana);$i++) {

 echo $semana[$i] . "<br>";


}




/*$datos=array("Nombre"=>"Juan","Apellido"=>"Gomez","Edad"=>21);
$datos["Pais"]="Argentina";

//$datos="Martin";

foreach ($datos as $primero=>$segundo) {

    echo "Campo $primero tiene almacenado $segundo . <br>" ;

} //ASI SE RECORRE UN ARRAY ASOCIATIVO, ABAJO VA EJEMPLO DE UNO INDEXADO*/

/*
$semana []="lunes";
$semana []="martes";
$semana []="miercoles";
$semana []="jueves";

echo "el array tiene " . count($semana) . "<br><br><br>";

for ($i=0; $i<count($semana);$i++) {

    echo $semana [$i] . "<br>";

}
echo "<br><br><br><br>";

$semana []="viernes";
$semana []="sabado";
$semana []="domingo";


echo "el array tiene " . count($semana) . "<br><br><br>";

for ($i=0; $i<count($semana);$i++) {

    echo $semana [$i] . "<br>";

}

*/




?>

</body>

</html>