<?php
    /**
    *comprobar combustible
    *chequeo general del vehículo(aire de cauchos, agua de motor, aceite, frenos)
     * encender
     *andar
     *apagar
     */
    class Carro{

        public $estado = false;
        public $combustible = 100;
        public static $aire_cauchos = 30;
        public static $agua_motor =0;
        public static $aceite_motor = 30;
        public static $liga_frenos = 30;
        public $movilizacion = false;

        public function comprobar_combustible(){
            if ($this->$combustible >= 50 ) {
                echo "todavía hay combustible";
            }
            elseif ($this->combustible < 49) {
                echo "te queda medio tanque de gasolina";
            }else {
                echo "tanque vacío";
            }
        }
        //*********************
        public static function encender($combustible,$estado,$movilizacion){
            if ($combustible > 0){
                echo "carro encendido <br>";
                $estado = true;
                while ($movilizacion == false && $estado == true) {
                    echo $combustible. "<br>";
                    $combustible = $combustible - 2;
                    if ($combustible == 0) {
                        echo " combustible agotado, dejaste el carro encendido";
                        break;
                        }
                    }
                }else {
                    echo "no puede encender por falta de combustible";
                    // if ($estado) {
                    //     $estado = false;
                    //     echo "Apagando...";
                    //     return $estado;
                    // }
            }
        }
        //*******************************
        public static function chequeo_general(){
            if (self::$aire_cauchos && self::$agua_motor && self::$aceite_motor && self::$liga_frenos == 100) {
                echo "todo a tope (Y)";
            }
            elseif (self::$aire_cauchos && self::$agua_motor && self::$aceite_motor && self::$liga_frenos >= 50) {
                echo "ATENCION! liga de grenos, agua de motor, y aceite casi al 50%";
            }
            else {
                echo "aires de caucho: " . self::$aire_cauchos . "% <br>";
                echo "agua de motor: " . self::$agua_motor . "% <br>";
                echo "aceite de motor: " . self::$aceite_motor . "% <br>";
                echo "liga de frenos: " . self::$liga_frenos . "% <br>";
                if (self::$aire_cauchos == 0) {
                    echo "cauchos espichados <br>";
                }
                elseif (self::$agua_motor == 0) {
                    echo "recalentamiento de motor <br>";
                }
                elseif (self::$aceite_motor == 0) {
                    echo "motor fundido <br>";
                }
                elseif (self::$liga_frenos == 0) {
                    echo "sin frenos <br>";
                }
            }
        }
        //*************************
        public function traslado(){

        }

}
    Carro::chequeo_general();
    //Carro::encender(0,true,true);
 ?>
