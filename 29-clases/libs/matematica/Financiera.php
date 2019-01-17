<?php 
namespace Libs\Matematica;

class Financiera{
    private $capital;
    private $tasa;
    private $periodo;
    //Constructor es el primer metodo que se ejecuta en la clase
    public function __construct(float $capital, float $tasa, int $periodo){
       $this->capital =$capital;
       $this->tasa = $tasa;
       $this->periodo = $periodo;
       var_dump($this);
    }
    //destructor
    // public function __destruct(){
    //             echo "Ha finaliza el calculo para financiera";
    // }
    public function tea(): float{
        return $this->capital * ((1+$this->tasa)**$this->periodo);
    }

    // public function tea(float $capital,float $tasa,int $periodo ): float{
    //     return $capital * ((1+$tasa)**$periodo);
    // }
}

?>