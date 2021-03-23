<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Primera pagina Php</title>
   
</head>
<body>

<?php

function frase_mayusc($frase, $conversion=true){

    $frase=strtolower($frase);

    if ($conversion==true){

        $resultado=ucwords($frase);

    } else 
    {

        $resultado=strtoupper($frase);

    }

return $resultado;

}

echo frase_mayusc("la concha de tu madre hijo de mil putas", false);



?>

</body>

</html>