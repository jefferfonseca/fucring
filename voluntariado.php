 <?php
$nombre = $_POST['nombre'];
$tipoDocumento = $_POST['tipoDocumento'];
$documento = $_POST['documento'];
$nacimiento = $_POST['nacimiento'];
$direccion = $_POST['direccion'];
$barrio = $_POST['barrio'];
$municipio = $_POST['municipio'];
$departamento = $_POST['departamento'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$ocupacion = $_POST['ocupacion'];

// Redacción de la solicitud de voluntariado
$solicitudVoluntariado = "https://api.whatsapp.com/send?phone=573102339306&text=";
$solicitudVoluntariado .= "*Solicitud de Voluntariado:* $nombre, $tipoDocumento $documento, *fecha de nacimiento: * $nacimiento, ";
$solicitudVoluntariado .= "*dirección:* $direccion, $barrio, $municipio, $departamento. ";
$solicitudVoluntariado .= "*Contacto:* Celular $celular, *Email:* $email. *Ocupación:* $ocupacion. Quiero ser parte de su equipo de servidores.";
$solicitudVoluntariado .= "Me pueden dar mas información por favor.";

echo '
<script>
    window.location.href = "' . $solicitudVoluntariado . '";
</script>';
?>
