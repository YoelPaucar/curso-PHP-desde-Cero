<?php
declare(strict_types=1);//Declaramos los parametros de entrada sea estricto
//esta espera cualquier cantidad de varibles pero enteros -> "function suma(int ...$valores)"
function suma(int ...$valores) : int{ // El " :int" es para el que el retorno sea entero 
    return array_sum($valores);
}
echo  suma(1,2,3,4,8);

//Para convertir de estring a entero 
//(int) '11125';