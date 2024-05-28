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
