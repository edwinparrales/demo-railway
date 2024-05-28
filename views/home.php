<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
<nav>
    <li>
        <a href="?c=categoria">Categorias</a>
    </li>
</nav>
     <h1>Hola soy el home</h1>
     <h2>Listado</h2>
     <?php
     include './src/config.php';
     $result = mysqli_query($conn,"Select * from categorias");

     print_r($result->fetch_all());

     ?>
</body>
</html>