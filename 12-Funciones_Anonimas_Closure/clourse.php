<?php
 
 //closure o anonimas
 /*$suma=function ($a , $b){
    return $a+$b;
};*/
 $suma=function ($a , $b,$c){
     return $c($a+$b);
 };
 echo $suma(2,2,function($r){
     echo $r;
 });


?>