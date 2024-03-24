<?php

include "CuentaBancaria.php";

$cuenta = new CuentaBancaria(1, 43256254, 10000, 80);
echo "\n ✔ Cuenta creada \n";
echo $cuenta;

$cuenta->actualizarSaldo();
echo "\n ✔ Saldo actualizado \n";
echo $cuenta;

$cuenta->depositar(5000);
echo "\n ✔ Deposito exitoso \n";
echo $cuenta;

function retirar($cant){
    global $cuenta;
    $retiro = $cuenta->retirar($cant);
    if ($retiro) {
        echo "\n ✔ Retiro exitoso \n";
        echo $cuenta;
    } else {
        echo "\n ❌ No se pudo retirar, intente con un monto menor \n";
        echo $cuenta;
    }
}

retirar(6000);
retirar(10000);