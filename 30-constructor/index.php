<?php 
require_once 'libs/matematica/Aritmetica.php';
require_once 'libs/matematica/Financiera.php';
// echo Libs\Matematica\Aritmetica\suma(1,2);
// echo "</br>";
// echo Libs\Matematica\Financiera\tea(10000,0.9,2);

use Libs\Matematica\{Aritmetica, Financiera};

$obj2 = new Financiera(30000, 0.25,4);
echo '<br>';
var_dump($obj2 -> tea() );
?>