<?php

include_once "Fecha.php";

function increment($days, $date){
    $newDate = $date->incrementarDia($days);
    return $newDate;
}