<?php

use Src\Model\Producto;
include __DIR__ . '/vendor/autoload.php';
require_once './src/config.php';

$producto = new Producto();
$producto->setNombre("Teclado usb");
$producto->setId("555");

print_r($producto);


