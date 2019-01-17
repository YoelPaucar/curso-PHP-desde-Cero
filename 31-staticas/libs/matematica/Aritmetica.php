<?php
namespace Libs\Matematica;

class Aritmetica {
    // //propiedad
    // private $propiedad = 1;
    // //metodo
    // public function $hazAlgo(){

    // }
    public static function suma( float $a, float $b): float {
        return $a+$b;
    }
    public static function resta(float $a,float $b):float {
        return $a-$b;
    }
    public static function multiplicacion(float $a,float $b  ):float {
        return $a*$b;
    }
    public static function divicion(float $a,float $b):float {
        return $a/$b;
    }

    public  static function esPar(float $n){
        return  self::calcularParOImpar($n);
    }
    public  static function esImpar(float $n){
        return self::calcularParOImpar($n,false);
    }
    private static function calcularParOImpar(float $n,bool $par = true) : bool{
        if($par){
            return $n % 2 ===0;
        }else{
            return $n % 2 !==0;
        }
    }

}
?>