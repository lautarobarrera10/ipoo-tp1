<?php

class Fecha {
    private $dia;
    private $mes;
    private $anio;

    public function __construct($dia, $mes, $anio) {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->anio = $anio;
    }

    public function toStringAbreviado() {
        return sprintf("%02d/%02d/%04d", $this->dia, $this->mes, $this->anio);
    }

    public function toStringExtendido() {
        $nombre_mes = date('F', mktime(0, 0, 0, $this->mes, 1, 2000)); // Obtiene el nombre del mes
        return sprintf("%02d de %s de %04d", $this->dia, $nombre_mes, $this->anio);
    }

    public function incremento($dias) {
        // Convertir fecha a timestamp
        $timestamp = mktime(0, 0, 0, $this->mes, $this->dia, $this->anio);
        // Incrementar días
        $nueva_fecha_timestamp = strtotime("+$dias day", $timestamp);
        // Crear nueva fecha
        $nueva_fecha = new Fecha(date('d', $nueva_fecha_timestamp), date('m', $nueva_fecha_timestamp), date('Y', $nueva_fecha_timestamp));
        return $nueva_fecha;
    }

    public function __toString() {
        return $this->toStringAbreviado();
    }

    // Métodos de acceso
    public function getDia() {
        return $this->dia;
    }

    public function setDia($dia) {
        $this->dia = $dia;
    }

    public function getMes() {
        return $this->mes;
    }

    public function setMes($mes) {
        $this->mes = $mes;
    }

    public function getAnio() {
        return $this->anio;
    }

    public function setAnio($anio) {
        $this->anio = $anio;
    }
}

// Clase de prueba
class TestFecha {
    public static function probar() {
        $fecha = new Fecha(30, 3, 2022);

        echo "Fecha abreviada: " . $fecha->toStringAbreviado() . "\n";
        echo "Fecha extendida: " . $fecha->toStringExtendido() . "\n";

        $nueva_fecha = $fecha->incremento(5);
        echo "Nueva fecha después de incrementar 5 días: " . $nueva_fecha . "\n";

        // Métodos de acceso
        echo "Día: " . $fecha->getDia() . "\n";
        echo "Mes: " . $fecha->getMes() . "\n";
        echo "Año: " . $fecha->getAnio() . "\n";

        // Modificar valores y probar nuevamente
        $fecha->setDia(20);
        $fecha->setMes(6);
        $fecha->setAnio(2023);

        echo "Nueva fecha: " . $fecha . "\n";
    }
}

// Ejecutar la prueba
TestFecha::probar();
