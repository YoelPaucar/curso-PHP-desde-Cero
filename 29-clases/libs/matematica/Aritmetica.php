<?php
namespace Libs\Matematica;

class Aritmetica {
    // //propiedad
    // private $propiedad = 1;
    // //metodo
    // public function $hazAlgo(){

    // }
    public function suma( float $a, float $b): float {
        return $a+$b;
    }
    public function resta(float $a,float $b):float {
        return $a-$b;
    }
    public function multiplicacion(float $a,float $b  ):float {
        return $a*$b;
    }
    public function divicion(float $a,float $b):float {
        return $a/$b;
    }

    public function esPar(float $n){
        return $this -> calcularParOImpar($n);
    }
    public function esImpar(float $n){
        return $this -> calcularParOImpar($n,false);
    }
    private function calcularParOImpar(float $n,bool $par = true) : bool{
        if($par){
            return $n % 2 ===0;
        }else{
            return $n % 2 !==0;
        }
    }

}
?>