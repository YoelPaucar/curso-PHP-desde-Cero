<?php 
require_once 'libs/matematica/Aritmetica.php';
require_once 'libs/matematica/Financiera.php';

use Libs\Matematica\{Aritmetica, Financiera};

var_dump(Aritmetica::suma(1,5));
var_dump(Aritmetica::esPar(5));
?>