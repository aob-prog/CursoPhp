<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Primera Prueba</title>
<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>
</head>

<body>
<h1>USANDO OPERADORES COMPARACIÓN</h1>

<form method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
      <td>Nombre:</td>
      <td><label for="nombre_usuario"></label>
      <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td>Contraseña:</td>
      <td><label for="contra_usuario"></label>
      <input type="text" name="contra_usuario" id="contra_usuario"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>

<?php

if (isset($_POST["enviando"])){

  $usuario=$_POST["nombre_usuario"];
  $contra=$_POST["contra_usuario"];

 /* if ($usuario=="Andres"){
    echo "<p class='validado'>Podes entrar</p>";
  }else {

    echo "<p class='no_validado'>No podes entar</p>";

  } */




switch (true){

  case $usuario=="Andres" && $contra=="1234":
    echo "Hola Andres, podes pasar";
    break;
  case $usuario=="Mica" && $contra=="8888":
    echo "Hola Mica, podes pasar";
    break;
  case $usuario=="Martu" && $contra=="456":
    echo "Hola Martu, podes pasar";
    break;
  default: 
    echo "ANDATE A LA MIERDA"; 

};

};

?>

</body>
</html>