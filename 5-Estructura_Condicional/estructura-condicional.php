<?php
 $a=28;
 $b=true;
 $destino= 'peru';
 if ($a===27) {
    echo 'La variable ingresada tiee el valor 27 ';
 }elseif($a===28){
     echo 'La variable ingresada tiee el valor  28';

 }else{
    echo 'la variable ingresada No tiene el valor 27';
 }
echo "<br>";
 echo $b ? 'Condicion aceptadda' : 'Condicion Invalida';
 echo "<br>";
 
 switch ($destino) {
     case 'mexico':
         echo 'El pasaje cuesta 900usd';
         break;
     case 'argentina':
         echo 'Pasaje cuesta 700usd';
         break;
    case 'peru':
        echo ' El pasaje cuesta 780usd';
        break;
     default:
         echo 'Destino no disponible';
         break;
 }

?>