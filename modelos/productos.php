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
        echo 'Id: '.$this->Nombre.'<br>';
        echo 'Id: '.$this->Precio.'<br>';
        echo 'Id: '.$this->Stock.'<br>';
        echo '<hr>';
        echo 'Id: '.$this->TipoProducto->Id.'<br>';
        echo 'Id: '.$this->TipoProducto->Descripcion.'<br>';
    }

}