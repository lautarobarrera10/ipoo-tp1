<?php

include "Linea.php";

echo "\n ✔ Objeto creado \n";
$linea = new Linea(1,1,3,3);
echo $linea;

echo "\n ✔ Movido a la derecha \n";
$linea->moveRight(3);
echo $linea;

echo "\n ✔ Movido a la izquierda \n";
$linea->moveLeft(6);
echo $linea;

echo "\n ✔ Movido hacia arriba \n";
$linea->moveUp(2);
echo $linea;

echo "\n ✔ Movido hacia abajo \n";
$linea->moveDown(8);
echo $linea;