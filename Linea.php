<?php

class Linea {
    private $pA;
    private $pB;
    private $pC;
    private $pD;

    public function __construct($a, $b, $c, $d){
        $this->pA = $a;
        $this->pB = $b;
        $this->pC = $c;
        $this->pD = $d;
    }

    public function __toString(){
        return
        "Punto 1: (" . $this->getPA() . ", " . $this->getPB() . ")\n" .
        "Punto 2: (" . $this->getPC() . ", " . $this->getPD() . ")\n";
    }

    public function getPA(){
        return $this->pA;
    }

    public function setPA($new){
        $this->pA = $new;
    }

    public function getPB(){
        return $this->pB;
    }

    public function setPB($new){
        $this->pB = $new;
    }

    public function getPC(){
        return $this->pC;
    }

    public function setPC($new){
        $this->pC = $new;
    }

    public function getPD(){
        return $this->pD;
    }

    public function setPD($new){
        $this->pD = $new;
    }

    public function moveRight($d){
        $newPA = $this->getPA() + $d;
        $newPC = $this->getPC() + $d;

        $this->setPA($newPA);
        $this->setPC($newPC);
    }

    public function moveLeft($d){
        $newPA = $this->getPA() - $d;
        $newPC = $this->getPC() - $d;

        $this->setPA($newPA);
        $this->setPC($newPC);
    }

    public function moveUp($d){
        $newPB = $this->getPB() + $d;
        $newPD = $this->getPD() + $d;

        $this->setPB($newPB);
        $this->setPD($newPD);
    }

    public function moveDown($d){
        $newPB = $this->getPB() - $d;
        $newPD = $this->getPD() - $d;

        $this->setPB($newPB);
        $this->setPD($newPD);
    }
}