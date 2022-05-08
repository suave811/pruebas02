<?php

/*-------    Clase simple    -------*/
  /*
    class Persona {
        public string $nombre = "Pepo";
        public int $edad = 10;

        public function mostrarVar(){
            echo "Mi nombre es $this->nombre y tengo $this->edad años.";
        }
    }

    $per = new Persona();
    $per->mostrarVar();

/*-------    Clase simple    -------*/

/*----------------------------------*/

/*------    Clase herencia    ------*/
  /*
    //final class Persona {   //Final no es posible heredar
    class Persona {
        public string $nombre = "Pepo";
        public int $edad = 10;

        public function mostrarVar(){
            echo "Mi nombre es $this->nombre y tengo $this->edad años.";
        }
    }

    class Hijo extends Persona {
        public $apellido = 'Andrade';

        public function mostrarVar(){
            $this->edad = 20;

            echo "Mi nombre es $this->nombre $this->apellido y tengo $this->edad años.<br />";
            //echo __CLASS__;      //Ver clase
        }
    }

    $ph = new Hijo();
    $ph->mostrarVar();

/*------    Clase herencia    ------*/


?>