<?php

class Coche {

protected $ruedas;      /*propiedades o atributo de la clase Coche */
var $color;
protected $motor;


function Coche(){     /* metodo contructor, esta funcion define el estado inicial del objeto, se llama igual que la clase*/

    $this->ruedas=4;             /*this es lo mismo que poner coche, hace referencia a eso*/
    $this->color="";
    $this->motor=1600;                        


}

function get_ruedas()  {


return $this->ruedas;


}

function get_motor() {

return $this->motor;

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

function set_color($color_coche,$nombre_coche){

    $this->color=$color_coche;
    echo "El color del coche marca " . $nombre_coche . " es " . $this->color . "<br>";


}


}

// Aca empieza una clase heredada de coche, la sin heredar esta abajo comentada

class Camion extends Coche {

    function Camion () {

        $this->ruedas=8;
        $this->color="gris";
        $this->motor=2600;
    }

    function establecer_color($color_camion, $nombre_camion) {
        $this->color=$color_camion;
        echo "El color de " . $nombre_camion . " es " . $this->color . "<br>";

    }
   
    function arrancar()
    {
        parent::arrancar();
        echo "Ya arranque el Camion capo <br>";
    }

}











// ACA EMPIEZA OTRA CLASE

/*
class Camion {

    var $ruedas;      propiedades o atributo de la clase Coche 
    var $color;
    var $motor;
    
    
    function Camion(){      metodo contructor, esta funcion define el estado inicial del objeto, se llama igual que la clase
    
        $this->ruedas=8;             this es lo mismo que poner coche, hace referencia a eso
        $this->color="gris";
        $this->motor=2600;                        
    
    
    }
    
    
    function arrancar () {
    
        echo "Estoy arrancando<br>";
    
    }
    function girar (){                  Estas son propiedades o metodos, que es lo que puede hacer el Coche 
    
        echo "Estoy girando<br>";
    
    }
    function frenar(){
    
        echo "Estoy frenando<br>";
    
    }
    
   
    
    
    } 

*/




?>