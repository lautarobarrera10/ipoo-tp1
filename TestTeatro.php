<?php

include "Teatro.php";

$obrasEnTenea = [
    ["nombre" => "Las aves", "precio" => 5000],
    ["nombre" => "Las troyanas", "precio" => 5500],
    ["nombre" => "Medea", "precio" => 7000],
    ["nombre" => "Romeo y Julieta", "precio" => 8500],
];

$tenea = new Teatro("Tenea", "Rio negro 1523, Neuquén, Argentina", $obrasEnTenea);
echo "\n ✅ Teatro creado \n";
echo $tenea;

$tenea->cambiarNombreTeatro("Tenea 2");
echo "\n ✅ Nombre cambiado \n";
echo $tenea;

$tenea->cambiarDireccionTeatro("Rio negro 1830, Neuquén, Argentina");
echo "\n ✅ Dirección cambiada \n";
echo $tenea;

function cambiarNombreObra($obra, $nuevoNombre){
    global $tenea;
    $cambio = $tenea->cambiarNombreFuncion($obra, $nuevoNombre);
    if ($cambio){
        echo "\n ✅ Nombre de función cambiado \n";
    } else {
        echo "\n ❌ No se encontró la función. \n";
    }
    echo $tenea;
}

cambiarNombreObra("Romeo y Julieta", "Romeo y Romina");
cambiarNombreObra("Romeo y Julieta", "Romeo y Romina");

function cambiarPrecioObra($obra, $precio){
    global $tenea;
    $cambio = $tenea->cambiarPrecioFuncion($obra, $precio);
    if ($cambio){
        echo "\n ✅ Precio de función cambiado \n";
    } else {
        echo "\n ❌ No se encontró la función. \n";
    }
    echo $tenea;
}

cambiarPrecioObra("Romeo y Romina", 3500);
cambiarPrecioObra("Medea", 7500);
cambiarPrecioObra("Romeo y Julieta", 12000);