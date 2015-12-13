<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Practicas OO con PHP</title>
        <link rel="stylesheet" href="estilo_new.css" media="screen" title="no title" charset="utf-8">
    </head>
    <body>
        <h1>PROGRAMACION OO CON PHP</h1>
        <hr>
        <br>
        <?php
            class Persona{
                public $nombre;
                public $apellido;
                public $sexo;
                public $edad;
                public $animo;

                public function __construct($nombre, $apellido,$edad,$sexo,$animo){
                    $this->nombre = $nombre;
                    $this ->apellido = $apellido;
                    $this->edad = $edad;
                    $this->sexo = $sexo;
                    $this->animo = $animo;
                }

                public function comprobar_mayoria(){
                    if ($this->edad >= 18) {
                        echo $this->nombre . " Eres mayor <br>";
                    }else {
                        echo $this->nombre . " Aun eres menor <br>";
                    }
                }
                public function Llamar(){
                    if ($this->sexo == "Mujer" || $this->sexo == "mujer"){
                        echo "Las mujeres hacen muchas llamadas y " . $this->nombre . " no es la exepcion! <br>";
                    }else {
                        echo $this->nombre . " Es un mero macho y no se anda en esas <br>";
                    }
                }

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

                public static function Static_fun(){
                    echo "<p> Probando static :3";
                }
            }

            class Cosas_personas extends Persona{

                public function movilizar(){
                    if ($this->animo == "mal"){
                        ;
                    }
                }
            }

            $Juancho = new Persona("Juan","Sanchez", 17, "Hombre","mal");//mal-normal-excelente
            $Esther = new Persona ("Esther", "Rosales", 19,"mujer","exelente");//mal-normal-excelente

            $Esther->comprobar_mayoria();
            echo "<br>";
            $Esther->Llamar();
            echo "<br>";
            $Esther->Hablar();
            echo "<br>";
            $Juancho->Hablar();
            Persona::Static_fun();//Menoto estatico


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
    </body>
</html>
