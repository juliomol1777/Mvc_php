<?php
    require_once "./config/app.php";
    require_once "./autoload.php";
    require_once "./app/views/inc/sesion_start.php";
    

    if (isset($_GET['views'])) {
        //explode divide el string en partes, obtenido de $_GET['views'] cada vez que encuentra un /
        $url= explode("/", $_GET['views']);
    }
    else{
        $url= ["login"];
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once "./app/views/inc/head.php"; ?>
</head>
<body>
    <?php 
        use app\controllers\viewsController;
        $viewsController = new viewsController();
        $vista = $viewsController->obtenerVistasController($url[0]);
        if ($vista=="login" || $vista=="404") {
            require_once  "./app/views/content/". $vista. "-view.php";
        } else {
            require_once "./app/views/inc/navbar.php";
            require_once $vista;
        }
        
        require_once "./app/views/inc/script.php"; ?>
</body>
</html>