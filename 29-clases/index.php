<?php 
require_once 'libs/matematica/Aritmetica.php';
require_once 'libs/matematica/Financiera.php';
// echo Libs\Matematica\Aritmetica\suma(1,2);
// echo "</br>";
// echo Libs\Matematica\Financiera\tea(10000,0.9,2);

use Libs\Matematica\{Aritmetica, Financiera};
$obj = new Aritmetica();
var_dump($obj -> multiplicacion(5,2));
echo '<br>';
var_dump($obj -> esPar(3));
echo '<br>';
$obj2 = new Financiera(10000, 0.25,2);
echo '<br>';
var_dump($obj2 -> tea() );
?>