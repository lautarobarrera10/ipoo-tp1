<?php

class Libro {
    private $ISBN;
    private $titulo;
    private $anioDeEdicion;
    private $editorial;
    private $nombreApellidoAutor;

    public function __construct($ISBN, $titulo, $anioDeEdicion, $editorial, $nombreApellidoAutor){
        $this->ISBN = $ISBN;
        $this->titulo = $titulo;
        $this->anioDeEdicion = $anioDeEdicion;
        $this->editorial = $editorial;
        $this->nombreApellidoAutor = $nombreApellidoAutor;
    }

    public function __toString(){
        return
        "\n📙 Libro\n" .
        "ISBN: " . $this->getISBN() . "\n" .
        "Título: " . $this->getTitulo() . "\n" .
        "Año de edición: " . $this->getAnioDeEdicion() . "\n" .
        "Editorial: " . $this->getEditorial() . "\n" .
        "Autor: " . $this->getNombreApellidoAutor() . "\n\n";
    }

    public function getISBN(){
        return $this->ISBN;
    }

    public function setISBN($value){
        $this->ISBN = $value;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($value){
        $this->titulo = $value;
    }

    public function getAnioDeEdicion(){
        return $this->anioDeEdicion;
    }

    public function setAnioDeEdicion($value){
        $this->anioDeEdicion = $value;
    }

    public function getEditorial(){
        return $this->editorial;
    }

    public function setEditorial($value){
        $this->editorial = $value;
    }

    public function getNombreApellidoAutor(){
        return $this->nombreApellidoAutor;
    }

    public function setNombreApellidoAutor($value){
        $this->nombreApellidoAutor = $value;
    }

    public function perteneceEditorial($peditorial){
        $pertenece = false;
        if ($this->getEditorial() == $peditorial){
            $pertenece = true;
        }
        return $pertenece;
    }

    public function aniosDesdeEdicion(){
        $anioActual = intval(date("o"));
        return $anioActual - $this->getAnioDeEdicion();
    }
}