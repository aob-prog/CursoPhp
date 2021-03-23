<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Primera pagina Php</title>
   
</head>
<body>

<?php
 
class Coche {

    var $ruedas;      /*propiedades o atributo de la clase Coche */
    var $color;
    var $motor;
    

    function Coche(){     /* metodo contructor, esta funcion define el estado inicial del objeto, se llama igual que la clase*/

        $this->ruedas=4;             /*this es lo mismo que poner coche, hace referencia a eso*/
        $this->color="";
        $this->motor=1600;                        


    }
    
    
    function arrancar () {

        echo "Estoy arrancando<br>";

    }
    function girar (){                  /*Estas son propiedades o metodos, que es lo que puede hacer el Coche */

        echo "Estoy girando<br>";

    }
    function frenar(){

        echo "Estoy frenando<br>";

    }

    function establecer_color($color_coche,$nombre_coche){

        $this->color=$color_coche;
        echo "El color del coche marca " . $nombre_coche . " es " . $this->color . "<br>";


    }

    
}

$renault=new Coche ();   //Crea una instancia de la clase Coche
$mazda= new Coche ();    //Le da un estado inicial al objeto que lo saca del metodo contructor, inicializa con eso
$seat= new Coche ();


$renault->establecer_color("Rojo","Renault");
$seat->establecer_color("Verde","Seat");


//$mazda->girar(); //se llama a un metodo para que nuestro objeto haga esa tarea

//echo $mazda->ruedas; //arriba llamo al metodo, abajo a la propiedad, se dif por el parentesis
                    // arriba no pongo echo porque ya lo tiene la function, abajo lo tengo que poner.

?>

</body>

</html>