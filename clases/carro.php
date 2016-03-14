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

        public function __construct($estado,$combustible,$aire_cauchos,$agua_motor, $aceite_motor, $liga_frenos,$movilizacion){
            $this->estado = $estado;
            $this->combustible = $combustible;
            $this->aire_cauchos = $aire_cauchos;
            $this->agua_motor = $agua_motor;
            $this->aceite_motor = $aceite_motor;
            $this->liga_frenos = $liga_frenos;
            $this->movilizacion = $movilizacion;
            }
        //*********************
        public function comprobar_combustible(){
            if ($this->combustible >= 50 ) {
                return "todavía hay combustible";
            }
            elseif ($this->combustible < 49 and $this->combustible > 0) {
                echo "casi no tienes gasolina";
            }else{
                echo "tanque vacío";
            }
        }
        //*********************
        public function encender(){
            if ($this->combustible > 0){
                $this->estado = true;
                echo "carro encendido <br>";
                }else {
                    echo "no puede encender por falta de combustible";
            }
        }
        //*********************
        public function chequeo_general(){
            $promedio_chequeo = ($this->aire_cauchos + $this->agua_motor + $this->aceite_motor  + $this->liga_frenos) / 4;
            if ( $promedio_chequeo  == 100) {
                echo "todo a tope (Y)";
            }else {
                echo " <br> aires de caucho: " . round($this->aire_cauchos) . "% <br>";
                echo "agua de motor: " . round($this->agua_motor) . "% <br>";
                echo "aceite de motor: " . round($this->aceite_motor) . "% <br>";
                echo "liga de frenos: " . round($this->liga_frenos) . "% <br>";
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
        public function andar($km){
            if ($this->estado){

                $this->movilizacion = true;
                echo "en movimiento... <br>";

                for ($i=0; $i <= $km; $i++) {

                    $this->aire_cauchos = $this->aire_cauchos - 0.3;
                    if ($this->aire_cauchos <= 0) {
                        $this->aire_cauchos = 0;
                        echo "<br> sin aire <br> ";
                        $this->chequeo_general();
                        break;
                    }

                    $this->agua_motor = $this->agua_motor - 0.1;
                    if ($this->agua_motor <= 0) {
                        $this->agua_motor = 0;
                        echo "<br> motor sin agua <br>";
                        break;
                    }

                    $this->combustible = $this->combustible - 1;
                    if ($this->combustible <= 0) {
                        $this->combustible = 0;
                        echo "<br> sin combustible <br>";
                        $this->comprobar_combustible();
                        break;
                    }

                    $this->aceite_motor = $this->aceite_motor - 0.5;
                    if ($this->aceite_motor <= 0) {
                        $this->aceite_motor = 0;
                        echo "<br> sin aceite <br> ";
                        $this->chequeo_general();
                        break;
                    }
                    $this->liga_frenos = $this->liga_frenos - 0.2;
                //Fin_FOR
                }
                //Cuando el auto llegue a su destino se apagará
                $this->Auto_shutdown() ;
                //Hacer el chequeo nuevamente
                $this->chequeo_general();
            //Fin_Si
            }else {
                echo "Enciendelo primero :P";
            }
        }
        //***************************
        public function Auto_shutdown(){
            echo "<br> Apagando...";
            $this->movilizacion = false;
        }

}
    $carrito = new Carro(false,100,100,100,100,100,false); #estado, combustible,aire de cauchos,agua de motor, aceite de motor, liga de frenos, movilizacion
    $carrito->chequeo_general();
    echo ' <hr>';
    $carrito->encender();
    echo ' <hr>';
    $carrito->andar(2);
    echo ' <hr>';
    $carrito->encender();
    echo ' <hr>';
    $carrito->andar(50);
    echo ' <hr>';
    $carrito->encender();
    echo ' <hr>';
    $carrito->andar(100);
 ?>
