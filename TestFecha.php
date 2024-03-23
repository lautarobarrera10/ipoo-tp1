<?php

include_once "Fecha.php";

function increase($days, $date){
    $newDate = $date->incrementarDia($days);
    return $newDate;
}

$date = new Date(1,1,2000);

$increase(2, $date);