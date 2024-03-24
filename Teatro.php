<?php

class Teatro {
    private $nombre;
    private $direccion;
    private $funciones;

    /**
     * @param string $nombre
     * @param string $direccion
     * @param array $funciones
     */
    public function __construct($nombre, $direccion, $funciones){
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->funciones = $funciones;
    }

    public function __toString(){
        return
        "Nombre: " . $this->getNombre() . "\n" .
        "Dirección: " . $this->getDireccion() . "\n" .
        "Obras: \n" .
        "🎭 " . $this->getFunciones()[0]["nombre"] . " $" . $this->getFunciones()[0]["precio"] . "\n" .
        "🎭 " . $this->getFunciones()[1]["nombre"] . " $" . $this->getFunciones()[1]["precio"] . "\n" .
        "🎭 " . $this->getFunciones()[2]["nombre"] . " $" . $this->getFunciones()[2]["precio"] . "\n" .
        "🎭 " . $this->getFunciones()[3]["nombre"] . " $" . $this->getFunciones()[3]["precio"] . "\n";
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($value){
        $this->nombre = $value;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function setDireccion($value){
        $this->direccion = $value;
    }

    public function getFunciones(){
        return $this->funciones;
    }

    public function setFunciones($value){
        $this->funciones = $value;
    }

    public function cambiarNombreTeatro($value){
        $this->setNombre($value);
    }

    public function cambiarDireccionTeatro($value){
        $this->setDireccion($value);
    }

    public function cambiarNombreFuncion($nombreFuncion, $nuevoNombre){
        $cambio = false;
        $funciones = $this->getFunciones();
        for ($i=0; $i < count($funciones); $i++) {
            if ($funciones[$i]["nombre"] == $nombreFuncion){
                $funciones[$i]["nombre"] = $nuevoNombre;
                $cambio = true;
            }
        }
        $this->setFunciones($funciones);
        return $cambio;
    }

    public function cambiarPrecioFuncion($funcion, $precio){
        $cambio = false;
        $funciones = $this->getFunciones();
        for ($i=0; $i < count($funciones); $i++) {
            if ($funciones[$i]["nombre"] == $funcion){
                $funciones[$i]["precio"] = $precio;
                $cambio = true;
            }
        }
        $this->setFunciones($funciones);
        return $cambio;
    }
}