<?php

    class Persona{
        public $nombre;
        public $apellido;
        public $sexo;
        public $edad;
        public $animo;

        //************************
        public function __construct($nombre, $apellido,$edad,$sexo,$animo){
            $this->nombre = $nombre;
            $this ->apellido = $apellido;
            $this->edad = $edad;
            $this->sexo = $sexo;
            $this->animo = $animo;
        }
        //************************
        public function comprobar_mayoria(){
            if ($this->edad >= 18) {
                echo $this->nombre . " Eres mayor <br>";
            }else {
                echo $this->nombre . " Aun eres menor <br>";
            }
        }
        //************************
        public function Llamar(){
            if ($this->sexo == "Mujer" || $this->sexo == "mujer"){
                echo "Las mujeres hacen muchas llamadas y " . $this->nombre . " no es la exepcion! <br>";
            }else {
                echo $this->nombre . " Es un mero macho y no se anda en esas <br>";
            }
        }
        //******************
        public function Hablar(){
            if ($this->sexo == 'hombre' || $this->sexo == 'Hombre') {
                if ($this->edad <= 10){
                    echo $this->nombre . " habla mas con niños de su edad, poco con jovenes y mas con sus abuelos";
                }
                if ($this->edad <= 30) {
                    echo $this->nombre . " habla mejor con chicos de su edad y niños pero poco con personas de la tercera edad";
                }else {
                    echo $this->nombre . " es capaz de hablar y dar consejos a todos incluso si son mayores que él";
                }
            } else {
                echo $this->nombre . " es mujer y entre mujeres se entienden ";
            }
        }
        //************************
        public static function Static_fun(){
            echo "<p> Probando static :3";
        }
    }
//+++++++++++++++++++++++++++++++++++++++
    class Cosas_personas extends Persona{
        /**
        *Cosas que puede hacer segun su estado de animo
        */
        //************************
        public function what_can_do(){
            echo "<hr><br>" . $this->nombre . $this->caminar() . ",". $this->trabajar() . "<hr><br>";
        }
        //************************
        protected function caminar(){
            if ($this->animo == 'mal'){
                return " no puede caminar";
            }
            elseif ($this->animo == 'normal'){
                return " caminar solo de su casa al trabajo y biciversa";
            }
            elseif ($this->animo == 'exelente'){
                return " recorrer el mundo es lo que quiere";
            }
        }
        //************************
        protected function trabajar(){
            if ($this->animo == 'mal'){
                return " no puede trabajar";
            }
            elseif ($this->animo == 'normal'){
                return " puede hacer lo que acostumbra";
            }
            elseif ($this->animo == 'exelente'){
                return " puede hacer lo que se proponga en el dia";
            }
        }
        //************************
        protected function comer(){
            if ($this->animo == 'mal'){
                return " no tiene ganas de comer";
            }
            elseif ($this->animo == 'normal'){
                return " come lo normal";
            }
            elseif ($this->animo == 'exelente'){
                return " se puede comer hasta un elefante";
            }
        }
    }
//+++++++++++++++++++++++++++++++++++++++
    //192105082-3
?>
