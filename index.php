<?php

include __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
include './src/config.php';
include './src/config/Route.php';



