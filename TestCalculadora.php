<?php

include_once "./Calculadora.php";

$calc = new Calculadora(5, 0);

echo "Suma: " . $calc->sumar() . "\n";
echo "Resta: " . $calc->restar() . "\n";
echo "Multiplicación: " . $calc->multiplicar() . "\n";

echo "División: " . $calc->dividir() . "\n";
if ($calc->getError() != ''){
    echo $calc->getError();
}

// Métodos de acceso
//echo "Operando 1: " . $calc->getOperando1() . "\n";
//echo "Operando 2: " . $calc->getOperando2() . "\n";
echo $calc;

// Modificar operandos y probar nuevamente
$calc->setOperando1(10);
$calc->setOperando2(2);
$calc->setError('');

echo "Operando 1 (nuevo): " . $calc->getOperando1() . "\n";
echo "Operando 2 (nuevo): " . $calc->getOperando2() . "\n";

echo "Suma (nueva): " . $calc->sumar() . "\n";
echo "Resta (nueva): " . $calc->restar() . "\n";
echo "Multiplicación (nueva): " . $calc->multiplicar() . "\n";
echo "División (nueva): " . $calc->dividir() . "\n";

echo "Información: " . $calc;