<?php

require_once 'tienda/ProductoBase.php';
require_once 'tienda/productos/Bajo.php';
require_once 'tienda/productos/Guitarra.php';
require_once 'tienda/productos/Bateria.php';


use Tienda\Productos\{Bajo,Gritarra,Bateria};

$instrumento =new Bajo(2);
var_dump($instrumento->mostrarPrecioFinal());


?>