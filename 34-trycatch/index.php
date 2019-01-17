<?php
function exception_error_handler($serveridad,$mensaje,$fichero,$linea){
    if (!(error_reporting() & $serveridad)) {
        //Este codigo de error no esta incluido en error_reporting
        return;
    }
    throw new ErrorException($mensaje,0,$serveridad,$fichero,$linea);
}
 set_error_handler('exception_error_handler');
require_once 'matematica/aritmetica.php';
use Matematica\{Aritmetica};
// try{
//   $a =10;
//   $b =0;
//   if($b===0){
//       throw new Exception("No se puede dividir entre 0");
//   }
//   $c=$a/$b;
// }catch(Exception $e){
//   echo $e -> getMessage();
// }
  
try {
    echo Aritmetica::esPar(5);
} catch (Exception $e ) {
    echo $e -> getMessage();
}
// echo Aritmetica::division(10,0);
  
?>