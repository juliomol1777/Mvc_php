<?php

    spl_autoload_register(function($clase){
        //obtengo el path de la clase
        $archivo=__DIR__ . "/" . $clase . ".php";
        //reemplazo el valor \ que da la funcion __DIR__ por el /
        // se usa doble \\ porque una sola representa un simbolo de eascape
        $archivo=str_replace("\\" , "/", $archivo);
        if(is_file($archivo)){
            require_once $archivo;
        }
    });