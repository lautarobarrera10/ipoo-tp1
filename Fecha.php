<?php
// Diseñar e implementar la clase Fecha. La clase deberá disponer de los atributos mínimos y
// necesarios para almacenar el día, el mes y el año, además de métodos que devuelvan un String con la
// fecha en forma abreviada (16/02/2000) y extendida (16 de febrero de 2000) . Implementar una función
// incremento, que reciba como parámetros un entero y una fecha, que retorne una nueva fecha, resultado
// de incrementar la fecha recibida por parámetro en el numero de días definido por el parámetro entero.
// Nota 1: Son años bisiestos los múltiplos de cuatro que no lo son de cien, salvo que lo sean de
// cuatrocientos, en cuyo caso si son bisiestos.
// Nota 2: Para la solución de este problema puede ser útil definir un método incrementa_un_dia.


Class Date {
    private $day;
    private $month;
    private $year;
    private $daysOfTheMonth;

    public function __construct($day, $month, $year){
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
        $this->setDaysOfTheMonth($month);

        echo $this->getDaysOfTheMonth() . "\n";
    }

    public function __toString(){
        return $this->getAbbreviatedDate() . "\n";
    }

    public function getDay(){
        return $this->day;
    }
    public function setDay($newDay){
        $this->day = $newDay;
    }
    public function getMonth(){
        return $this->month;
    }
    public function setMonth($newMonth){
        $this->month = $newMonth;
    }
    public function getYear(){
        return $this->year;
    }
    public function setYear($newYear){
        $this->year = $newYear;
    }
    public function getDaysOfTheMonth(){
        return $this->daysOfTheMonth;
    }
    public function setDaysOfTheMonth($month){
        switch($month) {
            case 2:
                if ($this->checkIsLeapYear()) {
                    $this->daysOfTheMonth = 29;
                } else {
                    $this->daysOfTheMonth = 28;
                }
                break;
            case 4:
                $this->daysOfTheMonth = 30;
                break;
            case 6:
                $this->daysOfTheMonth = 30;
                break;
            case 9:
                $this->daysOfTheMonth = 30;
                break;
            case 11:
                $this->daysOfTheMonth = 30;
                break;
            default:
                $this->daysOfTheMonth = 31;
                break;
        };
        return $month;
    }

    public function getAbbreviatedDate(){
        $day = str_pad(strval($this->getDay()), 2, 0, STR_PAD_LEFT);
        $month = str_pad(strval($this->getMonth()), 2, 0, STR_PAD_LEFT);
        $year = str_pad(strval($this->getYear()), 4, 0, STR_PAD_LEFT);

        return $day . "/" . $month . "/" . $year;
    }

    public function getExtendedDate(){
        $months = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
        $day = str_pad(strval($this->getDay()), 2, 0, STR_PAD_LEFT);
        $month = $months[$this->getMonth() - 1];
        $year = str_pad(strval($this->getMonth()), 4, 0, STR_PAD_LEFT);

        return $day . " de " . $month . " de " . $year;
    }

    private function checkIsLeapYear(){
        $year = $this->getYear();
        $isLeap = ($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0;
        return $isLeap;
    }


    public function increaseDays($numberOfDays){
        for ($i=0; $i < $numberOfDays; $numberOfDays--) {
            if ($this->getDay() == $this->getDaysOfTheMonth()){
                $this->setDay(1);
                if ($this->getMonth() == 12){
                    $this->setMonth(1);
                    $this->setYear($this->getYear() + 1);
                } else {
                    $this->setMonth($this->getMonth() + 1);
                }
                $this->setDaysOfTheMonth($this->getMonth());
            } else {
                $this->setDay($this->getDay() + 1);
            }
        }

        return $this->getAbbreviatedDate();
    }
}