<?php

class Cuadrado {
    private $verticeIzquierdaArriba;
    private $verticeDerechaArriba;
    private $verticeDerechaAbajo;
    private $verticeIzquierdaAbajo;

    /**
     * @param array $verticeIzquierdaArriba
     * @param array $verticeDerechaArriba
     * @param array $verticeDerechaAbajo
     * @param array $verticeIzquierdaAbajo
     */
    public function __construct($verticeIzquierdaArriba, $verticeDerechaArriba, $verticeDerechaAbajo, $verticeIzquierdaAbajo){
        $this->verticeIzquierdaArriba = $verticeIzquierdaArriba;
        $this->verticeDerechaArriba = $verticeDerechaArriba;
        $this->verticeDerechaAbajo = $verticeDerechaAbajo;
        $this->verticeIzquierdaAbajo = $verticeIzquierdaAbajo;
    }

    public function __toString(){
        $verticeIzqArriba = $this->getVerticeIzquierdaArriba();
        $verticeDerArriba = $this->getVerticeDerechaArriba();
        $verticeDerAbajo = $this->getVerticeDerechaAbajo();
        $verticeIzqAbajo = $this->getVerticeIzquierdaAbajo();
        return
        "Vertice izquierda arriba: " . implode("-", $verticeIzqArriba) . "\n" .
        "Vertice derecha arriba: " . implode("-", $verticeDerArriba) . "\n" .
        "Vertice derecha abajo: " . implode("-", $verticeDerAbajo) . "\n" .
        "Vertice izquierda abajo: " . implode("-", $verticeIzqAbajo) . "\n" ;
    }

    public function getVerticeIzquierdaArriba(){
        return $this->verticeIzquierdaArriba;
    }

    /**
     * @param array $nuevoVertice
     */
    public function setVerticeIzquierdaArriba($nuevoVertice){
        $this->verticeIzquierdaArriba = $nuevoVertice;
    }

    public function getVerticeDerechaArriba(){
        return $this->verticeDerechaArriba;
    }

    /**
     * @param array $nuevoVertice
     */
    public function setVerticeDerechaArriba($nuevoVertice){
        $this->verticeDerechaArriba = $nuevoVertice;
    }

    public function getVerticeDerechaAbajo(){
        return $this->verticeDerechaAbajo;
    }

    /**
     * @param array $nuevoVertice
     */
    public function setVerticeDerechaAbajo($nuevoVertice){
        $this->verticeDerechaAbajo = $nuevoVertice;
    }

    public function getVerticeIzquierdaAbajo(){
        return $this->verticeIzquierdaAbajo;
    }

    /**
     * @param array $nuevoVertice
     */
    public function setVerticeIzquierdaAbajo($nuevoVertice){
        $this->verticeIzquierdaAbajo = $nuevoVertice;
    }

    /**
     * @return int area en m2
     */
    public function calcularArea(){
        $ladoA = $this->getVerticeIzquierdaArriba()[1] - $this->getVerticeIzquierdaAbajo()[1];
        $ladoB = $this->getVerticeDerechaAbajo()[0] - $this->getVerticeIzquierdaAbajo()[0];
        $area = $ladoA * $ladoB;
        return $area;
    }

    /**
     * @param array $nuevoPunto
     */
    public function desplazar($nuevoPunto){
        $distanciaEnX = $nuevoPunto[0] - $this->getVerticeIzquierdaAbajo()[0];
        $distanciaEnY = $nuevoPunto[1] - $this->getVerticeIzquierdaAbajo()[1];

        $nuevoXVerticeIzqArriba = $this->getVerticeIzquierdaArriba()[0] + $distanciaEnX;
        $nuevoYVerticeIzqArriba = $this->getVerticeIzquierdaArriba()[1] + $distanciaEnY;
        $this->setVerticeIzquierdaArriba([$nuevoXVerticeIzqArriba, $nuevoYVerticeIzqArriba]);

        $nuevoXVerticeDerArriba = $this->getVerticeDerechaArriba()[0] + $distanciaEnX;
        $nuevoYVerticeDerArriba = $this->getVerticeDerechaArriba()[1] + $distanciaEnY;
        $this->setVerticeDerechaArriba([$nuevoXVerticeDerArriba, $nuevoYVerticeDerArriba]);

        $nuevoXVerticeDerAbajo = $this->getVerticeDerechaAbajo()[0] + $distanciaEnX;
        $nuevoYVerticeDerAbajo = $this->getVerticeDerechaAbajo()[1] + $distanciaEnY;
        $this->setVerticeDerechaAbajo([$nuevoXVerticeDerAbajo, $nuevoYVerticeDerAbajo]);

        $nuevoXVerticeIzqAbajo = $this->getVerticeIzquierdaAbajo()[0] + $distanciaEnX;
        $nuevoYVerticeIzqAbajo = $this->getVerticeIzquierdaAbajo()[1] + $distanciaEnY;
        $this->setVerticeIzquierdaAbajo([$nuevoXVerticeIzqAbajo, $nuevoYVerticeIzqAbajo]);
    }

    /**
     * @param int $aumento
     */
    public function aumentarTamaño($aumento){
        $xDerAbajo = $this->getVerticeDerechaAbajo()[0] + $aumento;
        $yDerAbajo = $this->getVerticeDerechaAbajo()[1];
        $this->setVerticeDerechaAbajo([$xDerAbajo, $yDerAbajo]);

        $xIzqArriba = $this->getVerticeIzquierdaArriba()[0];
        $yIzqArriba = $this->getVerticeIzquierdaArriba()[1] + $aumento;
        $this->setVerticeIzquierdaArriba([$xIzqArriba, $yIzqArriba]);

        $xDerArriba = $this->getVerticeDerechaArriba()[0] + $aumento;
        $yDerArriba = $this->getVerticeDerechaArriba()[1] + $aumento;
        $this->setVerticeDerechaArriba([$xDerArriba, $yDerArriba]);
    }
}