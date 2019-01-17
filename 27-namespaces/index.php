<?php 
require_once 'libs\matematica/aritmetica/formula.php';
require_once 'libs\matematica/financiera/formula.php';
// echo Libs\Matematica\Aritmetica\suma(1,2);
// echo "</br>";
// echo Libs\Matematica\Financiera\tea(10000,0.9,2);

use function Libs\Matematica\Aritmetica\{suma,resta};
var_dump(suma(5,8));
var_dump(resta(15,8));
?>