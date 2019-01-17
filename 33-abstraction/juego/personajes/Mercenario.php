<?php
namespace Juego\Personajes;

use Juego\Personaje;
//las clases abstractas no se pueden instanciar
 class Mercenario extends Personaje{
   public function saludar(){
       return 'Soy un mercenario dime cuanto hay me encargo del trabajo';
   }
}

?>