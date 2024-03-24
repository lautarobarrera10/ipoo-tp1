<?php

include "Login.php";

$lautaro = new Login("lautarobarrera10", "soy veloz", "rayo mcqueen");

echo $lautaro;

// validar contraseña
var_dump($lautaro->checkPassword("soy rapido"));
var_dump($lautaro->checkPassword("soy veloz"));

// ver frase
echo $lautaro->showPhrase("lautarobarrera12");
echo $lautaro->showPhrase("lautarobarrera10");

// cambiar contraseña
function updatePassword($newPassword){
    global $lautaro;
    $change = $lautaro->updatePassword($newPassword);
    if ($change){
        echo "✔ Contraseña cambiada correctamente. \n";
        echo $lautaro;
    } else {
        echo "❌ No se pudo cambiar la contraseña porque ya has utilizado esa contraseña recientemente. \n";
        echo $lautaro;
    }
}

updatePassword("corredor");
updatePassword("perro");
updatePassword("gato");
updatePassword("gatito");
updatePassword("perro");