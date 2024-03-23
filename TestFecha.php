<?php

include_once "Fecha.php";

function increase($days, $date){
    $newDate = $date->increaseDays($days);
    return $newDate;
}

$date = new Date(1,1,2024);
echo $date;

echo increase(365, $date);