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

// ACA EMPIEZA OTRA CLASE


class Camion extends Coche {

    
    function Camion(){     /* metodo contructor, esta funcion define el estado inicial del objeto, se llama igual que la clase*/
    
        $this->ruedas=8;             /*this es lo mismo que poner coche, hace referencia a eso*/
        $this->color="gris";
        $this->motor=2600;                        
        
    }
    
    function establecer_color($color_camion,$nombre_camion){

        $this->color=$color_camion;
        echo "El color del camion marca " . $nombre_camion . " es " . $this->color . "<br>";
   
    
    
    }






?>