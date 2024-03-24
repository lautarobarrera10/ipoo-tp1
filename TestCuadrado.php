<?php

include "Cuadrado.php";

$cuadrado = new Cuadrado([1,3], [3,3], [3,1], [1,1]);
echo $cuadrado;
echo "El area del cuadrado es: " . $cuadrado->calcularArea() . " metros cuadrados \n";

echo "\n cuadrado desplazado: \n";
$cuadrado->desplazar([3,3]);
echo $cuadrado;

echo "\n cuadrado aumentado: \n";
$cuadrado->aumentarTamaño(2);
echo $cuadrado;
echo "El area del cuadrado es: " . $cuadrado->calcularArea() . " metros cuadrados \n";
