<?php
 //funciones
 function doSomething(){
     return 'Hola Mundo';
 }
 //echo doSomething();

 //funciones con parámetros
 function sayHelloTo($name){
     return "HOla $name";
 }
 //echo sayHelloTo('Andres');

 //Funciones con parametros inicializados
 function howAreYouDoing($name2= 'xd'){
     return "Como estas $name2?";
 }
 //echo howAreYouDoing();

 //funciones con parámetros de referencia
 $x=1;

 function increment(&$x){
     $x++;
 }
 increment($x);
 //echo $x

 //Funcion con parametro de longitud de variable PHP 5.6+
 function addToshoppinCart(...$items){
     foreach($items as $item){
         echo "$item, ";
     }
 }

 addToshoppinCart(
     'zapatilla',
     'guitarra',
      'cuerda para guitarra',
     'teclado'
 );

 //functiones recursivas
 function findPairYears($year){
     if($year % 2 === 0){
         echo "$year:PAR ,";
     }
     if($year != date('Y')){
         findPairYears($year +1);
     }
 }
 findPairYears(2000);


?>