<?php

class Cafetera {
    private $capacidadMaxima;
    private $cantidadActual;

    public function __construct($maxima, $actual){
        $this->capacidadMaxima = $maxima;
        $this->cantidadActual = $actual;
    }

    public function __toString(){
        return
        "Capacidad máxima: " . $this->getCapacidadMaxima() . "\n" .
        "Cantidad actual: " . $this->getCantidadActual() . "\n";
    }

    public function getCapacidadMaxima(){
        return $this->capacidadMaxima;
    }

    public function setCapacidadMaxima($new){
        $this->capacidadMaxima = $new;
    }

    public function getCantidadActual(){
        return $this->cantidadActual;
    }

    public function setCantidadActual($new){
        $this->cantidadActual = $new;
    }

    public function llenarCafetera(){
        $this->setCantidadActual($this->getCapacidadMaxima());
    }

    public function servirTaza($cantidad){
        $rta;
        if ($this->getCantidadActual() - $cantidad >= 0){
            $this->setCantidadActual($this->getCantidadActual() - $cantidad);
            $rta = true;
        } else {
            $this->setCantidadActual(0);
            $rta = false;
        }
        return $rta;
    }

    public function agregarCafe($cantidad){
        $rta;
        if ($this->getCantidadActual() + $cantidad <= $this->getCapacidadMaxima()){
            $this->setCantidadActual($this->getCantidadActual() + $cantidad);
            $rta = true;
        } else {
            $this->setCantidadActual($this->getCapacidadMaxima());
            $rta = false;
        }
        return $rta;
    }
}