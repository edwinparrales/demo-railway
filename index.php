<?php

use Src\Model\Producto;
include __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
require_once './src/config.php';

$producto = new Producto();
$producto->setNombre("Teclado usb");
$producto->setId("555");

print_r($producto);


