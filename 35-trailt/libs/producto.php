<?php
namespace Libs;
class Producto{
    use Traits\CalculoVenta;
    
    private $nombre;
    private $marca;
    private $costoUnitario;
    private $precioUnitario;

    public function __construct(string $nombre, string $marca,float $costoUnitario,float $precioUnitario){
        $this->nombre =$nombre;
        $this->marca = $marca;
        $this->costoUnitario =$costoUnitario;
        $this->precioUnitario = $precioUnitario;
    }
    public function iva():float{
        return $this->calcularPrecioConIva($this->precioUnitario);
    }
    public function margen():float{
        return $this->margenDeGananciaUnitaria(
            $this->precioUnitario,
            $this->costoUnitario
        );
    }
    public function utilidad():float{
        return $this->utilidadUnitaria(
            $this->precioUnitario,
            $this->costoUnitario
        );
    }
}


