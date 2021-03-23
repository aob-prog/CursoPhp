<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Primera pagina Php</title>
<style>

.resaltar {

    color: #F00;
    font-weight:bold;

}


</style>


</head>
<body>

<?php
 
$variable1 ="casaaaa";

$variable2= "Casa";

$resultado=strcasecmp($variable1,$variable2 );

if ($resultado){

        echo "no coinciden";
}
else {

        echo "coinciden";

}


?>

</body>

</html>