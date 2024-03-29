<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FUCRING | Fundación Cristiana por una Nueva Generación</title>


    <!--información de la vista previa de redes-->
    <meta property="og:type" content="website" />
    <meta name="author" content="Ing. Jeferson Fonseca Soto" />
    <meta property="og:title" content="FUCRING | Fundación Cristiana por una Nueva Generación">
    <meta property="og:description" content="Somos elegidos por Dios para llevar esperanza a jóvenes atrapados en las drogas, niños maltratados, personas de la
        tercera edad desamparados y mujeres en situaciones vulnerables. Buscamos sanar, proteger y brindar amor a quienes más lo necesitan. 
        Liberamos a los cautivos, proclamamos la libertad y anunciamos la gracia de 
        Dios para los más vulnerables, ofreciendo salvación eterna.">
        <meta property="og:image" content="https://fucring.org/page/assets/images/logo.png"><meta property="og:image:width" content="80" /><!-- Importante -->
    <meta property="og:image:height" content="80" /><!-- Importante -->
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

    <link rel="stylesheet" href="css/style.css">

    <!-- CSS Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Otros enlaces CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap enlaces JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- ------------------------------------ Navegacion Inicio--------------------------------------------- -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-lg-top" id="navbar">
        <div class="container-fluid">
            <!-- Imagen md y menores -->
            <a class="navbar-brand d-md-block d-lg-none" href="#">
                <img src="assets/images/logotipo.png" alt="FUCRING" width="auto" height="40">
            </a>

            <!-- Imagen lg y mayores -->
            <a class="navbar-brand d-none d-lg-block" href="#">
                <img src="assets/images/logotipo.png" alt="FUCRING" width="auto" height="60">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <a class="navbar-brand" href="#">
                        <img src="assets/images/logotipo.png" alt="FUCRING" width="auto" height="50">
                    </a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="quienes-somos.php">¿Quiénes somos?</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Proyectos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="obras.php">Obras</a></li>
                                <li><a class="dropdown-item" href="ayuda-legal.php">Ayuda Legal</a></li>
                                <li><a class="dropdown-item" href="ayuda.php">Solicitar Ayuda</a></li>
                                <!-- <li><a class="dropdown-item" href="constru.php">Proyectos Sotenibles</a></li> -->
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="constru.php">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- ------------------------------------ Navegacion Fin--------------------------------------------- -->
