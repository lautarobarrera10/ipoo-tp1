<?php

include_once "Clock.php";

$clock = new Clock(23,59,59);
echo $clock . "\n";

$clock->increment();
echo $clock . "\n";

$clock->setSeconds(59);
echo $clock . "\n";

$clock->increment();
echo $clock . "\n";

$clock->setMinutes(59);
$clock->setSeconds(59);
echo $clock . "\n";

$clock->increment();
echo $clock . "\n";