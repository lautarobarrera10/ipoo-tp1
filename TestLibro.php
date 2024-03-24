<?php

include "Libro.php";

$cienAnios = new Libro (9780065023961, "Cien años de soledad", 1967, "Sudamericana de Buenos Aires", "Gabriel García Márquez");
echo "\n ✅ Libro creado\n";
echo $cienAnios . "\n";

$sarmiento = new Libro (9789877692341, "Sarmiento", 2023, "Sudamericana de Buenos Aires", "Daniel Balmaceda");
echo "\n ✅ Libro creado\n";
echo $sarmiento . "\n";

$martinFierro = new Libro (9789502317441, "Martín Fierro", 1872, "Eudeba", "José Hernández");
echo "\n ✅ Libro creado\n";
echo $martinFierro . "\n";

$pertenece = $cienAnios->perteneceEditorial("Editorial Planeta Argentina");
var_dump($pertenece);
$pertenece = $cienAnios->perteneceEditorial("Sudamericana de Buenos Aires");
var_dump($pertenece);

echo "\nAños desde edición: " . $cienAnios->aniosDesdeEdicion() . "\n";

function iguales($plibro, $parreglo){
    $iguales = false;
    for ($i=0; $i < count($parreglo); $i++) {
        if ($parreglo[$i]->getISBN() == $plibro->getISBN()){
            $iguales = true;
        }
    }
    return $iguales;
}

$libros = [$cienAnios, $sarmiento, $martinFierro];

var_dump(iguales($cienAnios, $libros));

function librosEditorial($arregloLibros, $peditorial){
    $librosEditorial = [];
    for ($i=0; $i < count($arregloLibros); $i++) {
        if($arregloLibros[$i]->getEditorial() == $peditorial){
            array_push($librosEditorial, $arregloLibros[$i]);
        }
    }
    return $librosEditorial;
}

$librosDeSudamericana = librosEditorial($libros, "Sudamericana de Buenos Aires");
foreach ($librosDeSudamericana as $libro) {
    echo $libro;
}