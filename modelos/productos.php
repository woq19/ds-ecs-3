<?php

class Producto
{
    public $Id;
    public $Nombre;
    public $Precio;
    public $Stock;
    public $TipoProducto;

    public function MostrarDatos()

    {
        echo 'Id: '.$this->Id.'<br>';
        echo 'Nombre: '.$this->Nombre.'<br>';
        echo 'Precio: '.$this->Precio.'<br>';
        echo 'Stock: '.$this->Stock.'<br>';
        echo '<hr>';
        echo 'Id Producto: '.$this->TipoProducto->Id.'<br>';
        echo 'Descripcion Producto: '.$this->TipoProducto->Descripcion.'<br>';
    }

}