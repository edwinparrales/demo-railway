<?php
if(isset($_GET["c"])){
    $url = $_GET["c"];
}else{
    $url="home";
}

if(isset($url) && $url==="home"){
    require_once './src/controller/HomeController.php';
    $controlador = new \Src\controller\HomeController();
    $controlador->index();
}
if(isset($url) && $url==="categoria"){
    require_once './src/controller/CategoriaController.php';
    $controlador = new \Src\controller\CategoriaController();
    $controlador->index();
}

