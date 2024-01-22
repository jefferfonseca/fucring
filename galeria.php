<?php include_once('header.php');?>

    <style>
        body {
            background: #00a130dc;
        }

        .vista-previa {
            display: none;
            position: fixed;
            top: 9%;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .foto {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90%;
        }

        .foto span {
            position: fixed;
            top: 15%;
            right: 10px;
            color: bisque;
            font-size: 30px;
            cursor: pointer;
        }

        .foto img {
            padding-top: 20px;
            height: 90%;
            cursor: pointer;
        }
        
        .imagen{
            cursor: pointer;
        }
    </style>

    <!-- Vista previa de la foto Inicio -->
    <div class="vista-previa" id="modal" onclick="cerrarVentana()">
        <div class="foto">
            <img src="" id="imagenGrande">
            <span class="cerrar" onclick="cerrarVentana()"><i class='bx bxs-x-circle'></i></span>
        </div>
    </div>

    <!-- Vista previa de la foto Fin -->

<!-- leer carpetas y archivos -->
<?php

$rutaCarpeta = 'assets/images/obras/';
$barrio = $_GET['barrio'];
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
                echo "<img src='$rutaCarpeta/$barrio/$imagen' class='w-100 shadow-1-strong rounded mb-4 img-fluid imagen' alt='$barrio' />";
                echo '</div>';
            }
        ?>
    </div>
    <!-- Gallery -->

    <script>
        document.querySelectorAll('.imagen').forEach(function(imagen) {
            imagen.addEventListener('click', function() {
                document.getElementById('modal').style.display = 'block';
                document.getElementById('imagenGrande').src = this.src;
            });
        });

        function cerrarVentana() {
            document.getElementById('modal').style.display = 'none';
        }
    </script>

<?php include_once('footer.php');?>
