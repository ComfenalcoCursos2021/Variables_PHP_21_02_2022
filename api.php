
<?php
header('Access-Control-Allow-Origin: *');
$nomUsu = (string) "Miguel Angel Castro Escamilla";
$edaUsu = (int) 23;
$altUsu = (float) 1.63;
$HobUsu = (array) [
    (string) "Desarrollo",
    (string) "Musica",
    (string) "Cocino"
];
$soyInt = (bool) true;
$rutUsu = (object) [];
$rutUsu->levantar = (int) 6;
$vacio = null;
// $notengoDependencia = uninitialized;
echo $nomUsu;
echo $edaUsu;
echo $altUsu;
var_dump($HobUsu);
echo $soyInt;
var_dump($rutUsu);
var_dump($vacio);



?>