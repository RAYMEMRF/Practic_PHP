<?php /*probando autoloads*/


    function autoloads($clase){
        include 'clases/' . $clase . '.php';
    }

    spl_autoload_register('autoloads');

    Carro_class::andar(400);
 ?>
