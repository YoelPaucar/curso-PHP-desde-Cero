<?php
namespace Juego;
//las clases abstractas no se pueden instanciar
abstract class Personaje{
  abstract public function saludar();
  
  public function atacar(){
      return 'Estoy atacando';
  }
}
 interface IPersonaje{
      public function saludar();
      public function atacar();
  }
?>