<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    
    $destinatario = "websoloportero@gmail.es"; // Cambia esto al correo de la escuela de porteros
    $asunto = "Mensaje de contacto de $nombre";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Email: $email\n\n";
    $contenido .= "Mensaje:\n$mensaje\n";

    $header = "From: $email";

    mail($destinatario, $asunto, $contenido, $header);

    // Redirigir a una página de confirmación o mostrar un mensaje de éxito
    header("Location: confirmacion.html");
}
?>
