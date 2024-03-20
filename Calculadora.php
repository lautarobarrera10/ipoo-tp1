<?php

// Para cada una de las siguientes clases implementar los métodos de acceso de cada una de las variables instancias , el método _ _toString() (que permite visualizar los valores que poseen las variables instancia) y por último, implementar la clase TestNombreClase para probar cada uno de los métodos implementados en cada clase.

// A)Diseñar e implementar la clase Calculadora que permite realizar las operaciones básicas: + , - , *, /

class Calculadora {
    private $operando1;
    private $operando2;
    private $error;

    public function __construct($op1, $op2) {
        $this->operando1 = $op1;
        $this->operando2 = $op2;
        $this->error = '';
    }

    public function sumar() {
        return $this->getOperando1() + $this->getOperando2();
    }

    public function restar() {
        return $this->getOperando1() - $this->getOperando2();
    }

    public function multiplicar() {
        return $this->getOperando1() * $this->getOperando2();
    }

    public function dividir() {
        $resultado;
        if ($this->getOperando2() != 0) {
            $resultado = $this->getOperando1() / $this->getOperando2();
        } else {
            $resultado = 0;
            $this->setError("Error: división por 0 \n");
        }
        return $resultado;
    }

    public function __toString() {
        return "Operando 1: " . $this->getOperando1() . ", Operando 2: " . $this->getOperando2() . ", error: " . $this->getError();
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

    public function getError() {
        return $this->error;
    }

    public function setError($valor) {
        $this->error = $valor;
    }
}