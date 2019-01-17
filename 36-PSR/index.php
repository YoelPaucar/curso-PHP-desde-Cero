<?php
#composer init -> se inicializa el composer.json
#composer dump-autoload -> para ejecutar el composer
require_once 'vendor/autoload.php';

$imagen = new \Libs\Imagen\ImageThumb();
var_dump($imagen);