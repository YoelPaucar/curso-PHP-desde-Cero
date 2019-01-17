<?php
namespace App\Models;
use Exception;
class Empleado{
    private $pdo;
    // public function nuevoRegistro() : bool{
    //     return empty($this -> id);
    // }
    public function __construct(){
        $this -> pdo = \Core\Database::getConnection();
    }

    public function listar() : array{
        $result = [];
        try {
            $stm=$this -> pdo -> prepare("select * from empleado");
            $stm -> execute();
            $result = $stm -> fetchAll();
           
        } catch (Exception $e) {
            exit('ERROR '.$e->getMessage());
        }

        return $result;
    }

    public function guardar(Empleado $model) : bool{
        $result = false;
        try {
            if(empty($model -> id)){
                $sql= "insert into empleado(nombre, apellido, fecha_nacimiento,profesion_id) values (?,?,?,?)";
                $stm=$this -> pdo -> prepare($sql);
                $stm -> execute([
                    $model -> nombre,
                    $model -> apellido,
                    $model -> fecha_nacimiento,
                    $model -> profesion_id
                ]);
            }else{
                $sql = "update empleado set nombre = ?,apellido=?, fecha_nacimiento=?,profesion_id = ? where id=? ";
                $stm=$this -> pdo -> prepare($sql);
                $stm -> execute([
                    $model -> nombre,
                    $model -> apellido,
                    $model -> fecha_nacimiento,
                    $model -> profesion_id,
                    $model -> id
                ]);
            }
            $result = true;
        } catch (Exception $e) {
            exit('ERROR '.$e->getMessage());
        }

        return $result;
    }

    public function obtener($id) : Empleado{
        $result = new Empleado;
        try {
            $stm=$this -> pdo -> prepare("select * from empleado where id= ?");
            $stm -> execute([$id]);
            $fetch = $stm -> fetch();
            $result -> id = $fetch ->id;
            $result -> nombre = $fetch ->nombre;
            $result -> apellido = $fetch ->apellido;
            $result -> fecha_nacimiento = $fetch ->fecha_nacimiento;
            $result -> profesion_id = $fetch ->profesion_id;
           
        } catch (Exception $e) {
            exit('ERROR '.$e->getMessage());
        }

        return $result;
    }

    public function eliminar($id) : boll{
        $result = false;
        try {
            $stm=$this -> pdo -> prepare("delete from empleado where id=?");
            $stm -> execute([$id]);
            $result = true;
           
        } catch (Exception $e) {
            exit('ERROR '.$e->getMessage());
        }

        return $result;
    }
}