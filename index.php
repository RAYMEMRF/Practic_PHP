<?php /*probando autoloads*/

    error_reporting(E_ALL);

    function autoloads($clase){
        include 'clases/' . $clase . '.php';
    }

    spl_autoload_register('autoloads');

    #$estado,$combustible,$aire_cauchos,$agua_motor, $aceite_motor, $liga_frenos,$movilizacion
    $Carrito = new Carro_class(false, 100, 100, 100, 100, 100,false);
    // $Carrito->encender();
    $Carrito->andar(50);
 ?>
