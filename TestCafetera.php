<?php

include "Cafetera.php";

$cafetera = new Cafetera(10, 2);
echo "\n ✔ Cafetera creada \n";
echo $cafetera;

$cafetera->llenarCafetera();
echo "\n ✔ Cafetera llena \n";
echo $cafetera;

function servirTaza($cantidad){
    global $cafetera;
    $servido = $cafetera->servirTaza($cantidad);
    if ($servido){
        echo "\n ✔ Café servido \n";
        echo $cafetera;
    } else {
        echo "\n ❗ Se sirvió lo que quedaba pero no alcanzó la cantidad indicada. \n";
        echo $cafetera;
    }
}

servirTaza(5);
servirTaza(6);

function agregarCafe($cantidad){
    global $cafetera;
    $agregado = $cafetera->agregarCafe($cantidad);
    if ($agregado){
        echo "\n ✔ Café agregado \n";
        echo $cafetera;
    } else {
        echo "\n ❗ Cafetera llena. \n";
        echo $cafetera;
    }
}

agregarCafe(5);
agregarCafe(6);
