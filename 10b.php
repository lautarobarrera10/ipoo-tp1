<?php

class Reloj {
    private $horas;
    private $minutos;
    private $segundos;

    public function __construct($horas = 0, $minutos = 0, $segundos = 0) {
        $this->horas = $horas;
        $this->minutos = $minutos;
        $this->segundos = $segundos;
    }

    public function incremento() {
        $this->segundos++;
        if ($this->segundos == 60) {
            $this->segundos = 0;
            $this->minutos++;
            if ($this->minutos == 60) {
                $this->minutos = 0;
                $this->horas++;
                if ($this->horas == 24) {
                    $this->horas = 0;
                }
            }
        }
    }

    public function puesta_a_cero() {
        $this->horas = 0;
        $this->minutos = 0;
        $this->segundos = 0;
    }

    public function __toString() {
        return str_pad($this->horas, 2, '0', STR_PAD_LEFT) . ':' . str_pad($this->minutos, 2, '0', STR_PAD_LEFT) . ':' . str_pad($this->segundos, 2, '0', STR_PAD_LEFT);
    }

    // Métodos de acceso
    public function getHoras() {
        return $this->horas;
    }

    public function setHoras($horas) {
        $this->horas = $horas;
    }

    public function getMinutos() {
        return $this->minutos;
    }

    public function setMinutos($minutos) {
        $this->minutos = $minutos;
    }

    public function getSegundos() {
        return $this->segundos;
    }

    public function setSegundos($segundos) {
        $this->segundos = $segundos;
    }
}

// Clase de prueba
class TestReloj {
    public static function probar() {
        $reloj = new Reloj(23, 59, 58);

        echo "Reloj actual: " . $reloj . "\n";
        $reloj->incremento();
        echo "Reloj después del incremento: " . $reloj . "\n";

        $reloj->puesta_a_cero();
        echo "Reloj después de poner a cero: " . $reloj . "\n";

        // Métodos de acceso
        echo "Horas: " . $reloj->getHoras() . "\n";
        echo "Minutos: " . $reloj->getMinutos() . "\n";
        echo "Segundos: " . $reloj->getSegundos() . "\n";

        // Modificar valores y probar nuevamente
        $reloj->setHoras(12);
        $reloj->setMinutos(30);
        $reloj->setSegundos(45);

        echo "Nuevo reloj: " . $reloj . "\n";
        echo "Nuevo reloj (horas): " . $reloj->getHoras() . "\n";
        echo "Nuevo reloj (minutos): " . $reloj->getMinutos() . "\n";
        echo "Nuevo reloj (segundos): " . $reloj->getSegundos() . "\n";
    }
}

// Ejecutar la prueba
TestReloj::probar();
