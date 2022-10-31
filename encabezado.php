<?php
if (isset($_REQUEST['titulo']))
    $titulo = $_REQUEST['titulo'];
else
    $titulo = "CLAIRE | INICIO";

function activo($menu)
{
    echo strpos($_SERVER['PHP_SELF'], $menu) ? 'active' : 'Falso';
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title> <?php echo $titulo ?> </title>

    <!--ICONOS-->
    <link rel="shortcut icon" href="fav/favicon.ico" type="image/x-icon">
    <link rel="icon" href="fav/favicon.ico" type="image/x-icon">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--META-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  minimum-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@700&family=Assistant:wght@200;400&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/cedf025736.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <link rel="stylesheet" href="css/claire.css">

</head>

<body>
    <header>

        <nav class="navbar navbar-expand-md navbar-light bg-dark navegacion d-flex flex-md-column flex-row fixed-top">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="index.php"> <img src="imagenes/claire-logo.png" alt="imagen logo" class="logo mx-auto d-block"></a>


            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php activo('productos.php') ?>">
                        <a class="nav-link text-decoration-none" href="productos.php">Productos</a>
                    </li>
                    <li class="nav-item <?php activo('tez.php') ?>">
                        <a class="nav-link text-decoration-none" href="tez.php">Tez</a>
                    </li>

                    <li class="nav-item <?php activo('rubor.php') ?>">
                        <a class="nav-link text-decoration-none" href="rubor.php">Rubor</a>
                    </li>

                    <li class="nav-item <?php activo('ojos.php') ?>">
                        <a class="nav-link text-decoration-none" href="ojos.php">Ojos</a>
                    </li>

                    <li class="nav-item <?php activo('contacto.php') ?>">
                        <a class="nav-link text-decoration-none" href="contacto.php">Contacto</a>
                    </li>

                    <li class="nav-item <?php activo('carrito.php') ?>">
                        <a href="carrito.php">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-bag pt-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z" />
                            </svg>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>