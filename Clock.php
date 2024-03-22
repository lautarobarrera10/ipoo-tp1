<?php

// Diseñar e implementar la clase Reloj que simule el comportamiento de un cronómetro digital
// (con los comportamientos: puesta_a_cero, incremento, etc.). Cuando el contador llegue a 23:59:59 y
// reciba el mensaje de incremento deberá pasar a 00:00:00.

Class Clock {

    private $seconds = 0;
    private $minutes = 0;
    private $hours = 0;

    public function __construct($hours, $minutes, $seconds){
        $this->seconds = $seconds;
        $this->minutes = $minutes;
        $this->hours = $hours;
    }
    public function __toString(){
        $seconds = str_pad(strval($this->getSeconds()), 2, "0", STR_PAD_LEFT);
        $minutes = str_pad(strval($this->getMinutes()), 2, "0", STR_PAD_LEFT);
        $hours = str_pad(strval($this->getHours()), 2, "0", STR_PAD_LEFT);
        return $hours . ":" . $minutes . ":" . $seconds;
    }
    public function reset(){
        $this->setSeconds(0);
        $this->setMinutes(0);
        $this->setHours(0);
    }
    public function increment(){
        if ($this->getSeconds() != 59) {
            $newSeconds = $this->getSeconds() + 1;
            $this->setSeconds($newSeconds);
        } else {
            $this->setSeconds(0);
            if ($this->getMinutes() != 59) {
                $newMinutes = $this->getMinutes() + 1;
                $this->setMinutes($newMinutes);
            } else {
                $this->setMinutes(0);
                if ($this->getHours() != 23 ) {
                    $newHours = $this->getHours() + 1;
                    $this->setHours($newHours);
                } else {
                    $this->reset();
                }
            }
        }
    }

    // getters y setters
    public function getSeconds(){
        return $this->seconds;
    }

    public function setSeconds($newSeconds){
        $this->seconds = $newSeconds;
    }

    public function getMinutes(){
        return $this->minutes;
    }

    public function setMinutes($newMinutes){
        $this->minutes = $newMinutes;
    }

    public function getHours(){
        return $this->hours;
    }

    public function setHours($newHours){
        $this->hours = $newHours;
    }

}