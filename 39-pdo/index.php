<?php
// Errores de PHP a Try/Catch
function exception_error_handler($severidad, $mensaje, $fichero, $línea) {
    if (!(error_reporting() & $severidad)) {
        // Este código de error no está incluido en error_reporting
        return;
    }
    throw new ErrorException($mensaje, 0, $severidad, $fichero, $línea);
}

set_error_handler("exception_error_handler");

require_once './vendor/autoload.php'; #COMPOSER
define('_VIEW_PATH_', 'app/views/'); #PATH

$c = sprintf(
    'App\Controllers\%Controller',
    $_GET['c'] ?? 'Home'
);
$a = $_GET['a'] ?? 'index';

$c = trim(ucfirst($c));
$a = trim(strtolower($a));

// $controler = new $c;
// $controler  -> $a();

$homeControler = new  \App\Controllers\HomeController;

 $homeControler -> index();