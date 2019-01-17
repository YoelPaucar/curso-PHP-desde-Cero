<?php
$a=1;
$n=1;
while ($a <= 10) {
    echo "$a, ";
    $a=$a+1;

}
echo '<br>';
do{
    echo "$n,";
    $n=$n+1;
 }while($n<=10);
 echo '<br>';
 for ($i=0; $i < 10 ; $i++) { 
     if ($i===5) {
         echo "$i, ";
         break;
     }
 }
 echo '<br>';
 $letras=['a','b','c','d'];
 foreach($letras as $l){
     echo "$l, ";
 }
?>