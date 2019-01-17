<?php
namespace App\Controllers;

class HomeController{
    private $empleado;
    public function __construct(){
        $this -> empleado = new \App\Models\Empleado;
        // var_dump($this->user);
    }
    public function index(){
        // $newRecord = new \App\Models\Empleado;
        //     $newRecord -> id = 2;
        //     $newRecord -> nombre = 'Andres';
        //     $newRecord -> apellido = 'Condori';
        //     $newRecord -> fecha_nacimiento = '1997-02-13';
        //     $newRecord -> profesion_id = '2';
        $empleados = $this -> empleado -> listar();
        // var_dump($empleados);
        // exit;
        require_once _VIEW_PATH_ .'header.php';
        require_once _VIEW_PATH_ .'home/index.php';
        require_once _VIEW_PATH_ .'footer.php';
    }
    public function crud(){
        $model = new \App\Models\Empleado;
        if(!empty($_GET['id'])){
            $model = $this -> empleado -> obtener($_GET['id']);
        }
        var_dump(empty($model -> id) );
        require_once _VIEW_PATH_ .'header.php';
        require_once _VIEW_PATH_ .'home/crud.php';
        require_once _VIEW_PATH_ .'footer.php';
    }

    public function test(){
        require_once _VIEW_PATH_ .'header.php';
        require_once _VIEW_PATH_ .'home/index.php/';
        require_once _VIEW_PATH_ .'footer.php';
    }
    public function hello(){
        echo 'Hello World';
    }
}