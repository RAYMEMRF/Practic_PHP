<?php
    /**
    *comprobar combustible
    *chequeo general del vehículo(aire de cauchos, agua de motor, aceite, frenos)
     * encender
     *andar
     *apagar
     */
    class Carro{

        public $estado;
        public $combustible;
        public $aire_cauchos;
        public $agua_motor;
        public $aceite_motor;
        public $liga_frenos;
        public $movilizacion;

        public function __construct($estado,$combustible,$aire_cauchos,$agua_motor,$aceite_motor, $liga_frenos,$movilizacion){
            $this->estado = $estado;
            $this->combustible = $combustible;
            $this->aire_cauchos = $aire_cauchos;
            $this->agua_motor = $agua_motor;
            $this->aceite_motor = $aceite_motor;
            $this->liga_frenos = $liga_frenos;
            $this->movilizacion = $movilizacion;
            }
        //*********************
        // public function comprobar_combustible(){
        //     if ($this->combustible >= 50 ) {
        //         return "todavía hay combustible";
        //     }
        //     elseif ($this->combustible < 49) {
        //         echo "te queda medio tanque de gasolina";
        //     }else {
        //         echo "tanque vacío";
        //     }
        // }
        //*********************
        public function encender(){
            if ($this->combustible > 0){
                $this->estado = true;
                echo "carro encendido <br>";
                }else {
                    echo "no puede encender por falta de combustible";
                    // if ($estado) {
                    //     $estado = false;
                    //     echo "Apagando...";
                    //     return $estado;
                    // }
            }
        }
        //*********************
        public function chequeo_general(){
            $promedio_chequeo = ($this->aire_cauchos + $this->agua_motor + $this->aceite_motor  + $this->liga_frenos) / 4;
            if ( $promedio_chequeo  == 100) {
                echo "todo a tope (Y)";
            }
            // elseif ($promedio_chequeo >= 50) {
            //     echo "ATENCION! liga de grenos, agua de motor, y aceite casi al 50%";
            // }
            else {
                echo "aires de caucho: " . $this->aire_cauchos . "% <br>";
                echo "agua de motor: " . $this->agua_motor . "% <br>";
                echo "aceite de motor: " . $this->aceite_motor . "% <br>";
                echo "liga de frenos: " . $this->liga_frenos . "% <br>";
                if ($this->aire_cauchos == 0) {
                    echo "cauchos espichados <br>";
                }elseif ($this->agua_motor == 0) {
                    echo "recalentamiento de motor <br>";
                }elseif ($this->aceite_motor == 0) {
                    echo "motor fundido <br>";
                }elseif ($this->liga_frenos == 0) {
                    echo "sin frenos <br>";
                }
            }
        }
        //*********************
        public function traslado(){
            if ($this->estado){
                $this->movilizacion = true;
                echo "en movimiento...";
                
            }
            // while ($this->movilizacion == false && $this->estado == true) {
            //     echo $this->combustible. "<br>";
            //     $this->combustible = $this->combustible - 2;
            //     if ($this->combustible == 0) {
            //         echo " combustible agotado, dejaste el carro encendido";
            //         break;
            //         }
            //     }
        }

}
    $carrito = new Carro(false,100,0,100,100,100,false);
    $carrito->chequeo_general();
    $carrito->encender();
    $carrito->traslado();
    //Carro::chequeo_general();
    //Carro::encender(0,true,true);
 ?>
