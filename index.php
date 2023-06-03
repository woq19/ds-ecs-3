<?php

require_once 'modelos/productos.php';
require_once 'modelos/tipoProducto.php';

$tp=new TipoProducto();
$tp->Id=2;
$tp->Descripcion='Galletitas';


$p=new producto();
$p->Id=1;
$p->Nombre='Merenguitas';
$p->Precio=1000;
$p->Stock=10;
$p->TipoProducto=$tp;

$p->MostrarDatos();