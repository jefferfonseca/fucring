 <?php
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$barrio = $_POST['barrio'];
$municipio = $_POST['municipio'];
$departamento = $_POST['departamento'];
$celular = $_POST['celular'];
$problema = $_POST['problema'];

// Redacción de la solicitud de voluntariado
$solicitudAyuda = "https://api.whatsapp.com/send?phone=573102339306&text=";
$solicitudAyuda .= "*Solicitud de Ayuda:* $nombre";
$solicitudAyuda .= "*dirección:* $direccion, $barrio, $municipio, $departamento. ";
$solicitudAyuda .= "*Contacto:* Celular $celular,  *Descripción del problema:* $problema.";

echo '
<script>
    window.location.href = "' . $solicitudAyuda . '";
</script>';
?>
