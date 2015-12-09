<?php
//     $h = 1 + 8;
//     $variable = 23;
//     $vari = "holas";
//     $herodoc = <<<HO
//     Esto es una prueba de herodoc
// HO;
//
//     echo "Hola mundo<br><br>";
//     echo $h . "<br><br>";
//     echo gettype($variable) . "<br>";//consultar tipo de variable con gettype
//     echo "<br>" . $herodoc . "<br>";
//     echo "<br><br>esto es un saludo $vari";
//
//     if($variable == integer){
//         echo  "<hr>" . "jue verdadero :3 ";
//     }
//     else{
//         echo "<br>" . "no jue verdadero :(" ;
//     }
//
//     $gen = 'hola';
//
//     echo "<br> esto -> {$gen}"

    class Persona{
        public $nombre;
        public $apellido;
        public $sexo;
        public $edad;

        public function __construct($nombre, $apellido,$edad,$sexo){
            $this->nombre = $nombre;
            $this ->apellido = $apellido;
            $this->edad = $edad;
            $this->sexo = $sexo;
        }

        public function comprobar_mayoria(){
            if ($this->edad >= 18) {
                echo $this->nombre . " Eres mayor" . "<br>";
            }else {
                echo $this->nombre . " Aun eres menor" . "<br>";
            }
        }
        public function Llamar(){
            if ($this->sexo == "Mujer" || $this->sexo == "mujer"){
                echo "Las mujeres hacen muchas llamadas y " . $this->nombre . " no es la exepcion!" . "<br>";
            }else {
                echo $this->nombre . " Es un mero macho y no se anda en esas " . "<br>";
            }
        }
    }

    $Juancho = new Persona("Juan","Sanchez", 17, "Hombre");
    $Esther = new Persona ("Esther", "Rosales", 19,"Mujer");

    $Juancho->comprobar_mayoria() . $Juancho->Llamar();
    echo "<br>";
    $Esther->comprobar_mayoria() . $Esther->Llamar();

    // // usando los métodos constructores y destructores.
    //
    //    class Loteria {
    //       // atributos
    //       public $numero;
    //       public $intentos;
    //       public $total_intentos;
    //       public $resultado = false;
    //
    //       // metodos
    //       public function __construct($numero, $intentos){
    //          $this->numero = $numero;
    //          $this->intentos = $intentos;
    //       }
    //
    //       public function sortear(){
    //          $minimo = $this->numero / 2;
    //          $maximo = $this->numero * 2;
    //          for ($i=0; $i < $this->intentos; $i++) {
    //             if($this->resultado){
    //                break;
    //             }
    //             $int = rand($minimo, $maximo);
    //             self::intentos($int, $i);
    //          }
    //       }
    //
    //       public function intentos($int, $ciclo){
    //          if($int == $this->numero){
    //             echo "<strong>". $int ." == ". $this->numero ."</strong><br>";
    //             $this->total_intentos = $ciclo; // el numero de iteraciones del bucle será la cantidad de intentos
    //             $this->resultado = true;
    //          }else{
    //             echo $int ." != ". $this->numero . "<br>";
    //          }
    //       }
    //
    //       public function __destruct(){
    //          if($this->resultado){
    //             echo "¡Felicidades!, has acertado en ". ($this->total_intentos + 1) . " intentos";
    //          }else{
    //             echo "¡Rayos!, has perdido en ". $this->intentos . " intentos";
    //          }
    //       }
    //    }
    //
    //    $loteria = new Loteria(5,5);
    //    $loteria->sortear();﻿
    //192105082-3
?>
