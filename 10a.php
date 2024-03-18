<?php

// Para cada una de las siguientes clases implementar los métodos de acceso de cada una de las variables instancias , el método _ _toString() (que permite visualizar los valores que poseen las variables instancia) y por último, implementar la clase TestNombreClase para probar cada uno de los métodos implementados en cada clase.

// A)Diseñar e implementar la clase Calculadora que permite realizar las operaciones básicas: + , - , *, /

class Calculadora {
    private $operando1;
    private $operando2;

    public function __construct($op1, $op2) {
        $this->operando1 = $op1;
        $this->operando2 = $op2;
    }

    public function sumar() {
        return $this->operando1 + $this->operando2;
    }

    public function restar() {
        return $this->operando1 - $this->operando2;
    }

    public function multiplicar() {
        return $this->operando1 * $this->operando2;
    }

    public function dividir() {
        if ($this->operando2 != 0) {
            return $this->operando1 / $this->operando2;
        } else {
            return "Error: división por cero";
        }
    }

    public function __toString() {
        return "Operando 1: " . $this->operando1 . ", Operando 2: " . $this->operando2;
    }

    // Métodos de acceso
    public function getOperando1() {
        return $this->operando1;
    }

    public function setOperando1($valor) {
        $this->operando1 = $valor;
    }

    public function getOperando2() {
        return $this->operando2;
    }

    public function setOperando2($valor) {
        $this->operando2 = $valor;
    }
}

// Clase de prueba
class TestCalculadora {
    public static function probar() {
        $calc = new Calculadora(5, 3);

        echo "Suma: " . $calc->sumar() . "\n";
        echo "Resta: " . $calc->restar() . "\n";
        echo "Multiplicación: " . $calc->multiplicar() . "\n";
        echo "División: " . $calc->dividir() . "\n";

        // Métodos de acceso
        echo "Operando 1: " . $calc->getOperando1() . "\n";
        echo "Operando 2: " . $calc->getOperando2() . "\n";

        // Modificar operandos y probar nuevamente
        $calc->setOperando1(10);
        $calc->setOperando2(2);

        echo "Operando 1 (nuevo): " . $calc->getOperando1() . "\n";
        echo "Operando 2 (nuevo): " . $calc->getOperando2() . "\n";

        echo "Suma (nueva): " . $calc->sumar() . "\n";
        echo "Resta (nueva): " . $calc->restar() . "\n";
        echo "Multiplicación (nueva): " . $calc->multiplicar() . "\n";
        echo "División (nueva): " . $calc->dividir() . "\n";

        echo "Información: " . $calc;
    }
}

// Ejecutar la prueba
TestCalculadora::probar();

