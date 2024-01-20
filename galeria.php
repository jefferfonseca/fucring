<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FUCRING | Fundación Cristiana por una Nueva Generación</title>

    <!--información de la vista previa de redes-->
    <meta property="og:type" content="website" />
    <meta name="author" content="FUCRING | Fundación Cristiana por una Nueva Generación" />
    <meta property="og:title" content="FUCRING | Fundación Cristiana por una Nueva Generación">
    <meta property="og:description" content="Somos elegidos por Dios para llevar esperanza a jóvenes atrapados en las drogas, niños maltratados, personas de la
        tercera edad desamparados y mujeres en situaciones vulnerables. Buscamos sanar, proteger y brindar amor a quienes más lo necesitan.
        Liberamos a los cautivos, proclamamos la libertad y anunciamos la gracia de
        Dios para los más vulnerables, ofreciendo salvación eterna.">
    <meta property="og:image" content="assets/images/logo.png">
    <meta property="og:image:width" content="80" /><!-- Importante -->
    <meta property="og:image:height" content="80" /><!-- Importante -->
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png" />

    <!-- Estilos e importaciones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        body {
            background: #00a130dc;
        }
    </style>
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
                            <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="quienes-somos.html">¿Quiénes somos?</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Proyectos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- ------------------------------------ Navegacion Fin--------------------------------------------- -->

<!-- leer carpetas y archivos -->

<?php

$rutaCarpeta = 'assets/images/obras/';
$barrio = 'Altamira';
$imagenes = array();

// Abre el directorio
if ($gestor = opendir($rutaCarpeta . '/' . $barrio)) {
    // Lee los archivos y directorios dentro de la carpeta
    while (false !== ($archivo = readdir($gestor))) {
        // Excluye los directorios padre
        if ($archivo != "." && $archivo != "..") {
            // Agrega el nombre del archivo al array si es una imagen
            if (esImagen($archivo)) {
                $imagenes[] = $archivo;
            }
        }
    }
    // Cierra el gestor del directorio
    closedir($gestor);
}

// Función auxiliar para verificar si un archivo es una imagen
function esImagen($archivo)
{
    $extensionesValidas = array("jpg", "jpeg", "png", "gif");

    // Obtiene la extensión del archivo
    $extension = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

    // Verifica si la extensión está en el array de extensiones válidas
    return in_array($extension, $extensionesValidas);
}
?>

    <!-- Gallery -->
    <div class="row">
         <?php
            foreach ($imagenes as $index => $imagen) {
                echo '<div class=" col-md-12 col-lg-4">';
                echo "<img src='$rutaCarpeta/$barrio/$imagen' class='w-100 shadow-1-strong rounded mb-4' alt='$barrio' />";
                echo '</div>';
            }
            ?>
    </div>
    <!-- Gallery -->







    <!-- <footer>
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <img src="assets/images/logo Footer.png" class="img-fluid" alt="">
            </div>

            <div class="col-sm-12 col-md-4">
                <p style="text-align: justify">Como parte esencial de nuestro compromiso contigo, te brindamos diversas
                    alternativas cargadas de
                    información valiosa, orientación y soluciones. Aquí te presentamos opciones clave que debes
                    considerar. Estamos aquí para guiarte y ofrecerte las respuestas que necesitas
                </p>
                <div class="enlaces">
                    <a href="">Solicitar Ayuda</a>
                    <a href="">Reportar algún caso</a>
                    <a href="">Politicas de Donación</a>
                    <a href="">Políticas de protección de datos</a>
                    <a href="">Documentos publicos</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <h1><b>Contactanos:</b> </h1>
                <div class="enlaces">
                    <div id="redes">
                        <a href=""><i class='bx bxl-facebook'></i></a>
                        <a href=""><i class='bx bxl-instagram'></i></a>
                        <a href=""><i class='bx bxl-youtube'></i></i></a>
                    </div>
                    <a href=""> <i class='bx bxl-whatsapp'></i>(+57) 310 233 9306</a>
                    <a href=""> <i class='bx bxl-whatsapp'></i>(+57) 310 313 9854</a>
                    <a href=""><i class='bx bxl-gmail'></i>fucringtunja@gmail.com</a>
                </div>

                <h3><b>Dirección</b></h3>
                <p>Cra. 3B 16a- 22 | Patriotas
                    Tunja, Boyaca, Colombia
                </p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3971.271398982765!2d-73.36045943033665!3d5.526693321711951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwMzEnMzYuMSJOIDczwrAyMScyMS4xIlc!5e0!3m2!1ses!2sco!4v1705077147450!5m2!1ses!2sco"
                    width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>

            </div>
            <div class="col-sm-12" id="derechos">
                <h1 class="lema">Nacidos para Servir</h1>
                <hr style="margin: 10px 0;">
                Copyright © 2024 | Fundación Cristiana por una Nueva Generación.
                <br>
                Todos los derechos reservados.
            </div>
        </div>
    </footer> -->
</body>

</html>