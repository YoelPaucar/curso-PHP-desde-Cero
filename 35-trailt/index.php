<?php
require_once 'libs/traits/CalculoVenta.php';
require_once 'libs/Producto.php';

$obj = new Libs\Producto('laptop0','Ane',1000,3000);
var_dump($obj->margen());