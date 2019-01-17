<?php
namespace Matematica;

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
    public static function division(float $a,float $b):float {
        // try{
        // if($b==0){
        //     throw new \Exception("No se puede dividir entre 0");
        // }
        // return $a/$b;
        // }catch(\Exception $e){
        //     // Guardar el error capturado
        //     // echo $e -> getMessage(); por mientras solo lo comentamos
        // }finally{
        //     //siempre se ejecuta
        //     return 0;
        // }
        return $a/$b;    
    }

    public  static function esPar(float $n){
        throw new \Exception("no es par papu");//Mandamos el error         
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