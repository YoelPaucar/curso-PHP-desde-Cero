<?php
namespace Juego\Personajes;

use Juego\IPersonaje;
//las clases abstractas no se pueden instanciar
//  class Robot extends Personaje{
//    public function saludar(){
//        return 'plipiplipi plipiplipli :v';
//    }
// }

class Robot implements IPersonaje{
    public function saludar(){
        return 'plipiplipi plipiplipli :v';
    }
    public function atacar(){
        return 'Estoy Atacando y soy Robot ';
    }
 }

?>