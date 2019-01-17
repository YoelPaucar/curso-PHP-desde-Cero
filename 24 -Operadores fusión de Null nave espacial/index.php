<?php
// Operador NULL
$usuario_id = $_GET['id'] ?? 1;
var_dump($usuario_id);

//Operador de nave espacial
echo '<br>';
$i = 2;

switch($i <=> 5){
    case -1:
    echo $i.' Es menor';
    break;
    case 0:
    echo $i.' Es igual';
    break;
    case 5:
    echo $i.' Es mayor';
    break;
}