<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $para = 'saucyburguer@gmail.com'; // Cambia esto por tu dirección de correo electrónico
    $titulo = 'Nuevo mensaje desde el sitio web';
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo Electrónico: $correo\n\n";
    $contenido .= "Mensaje:\n$mensaje\n";

    $headers = "From: $correo";

    if (mail($para, $titulo, $contenido, $headers)) {
        echo "Correo enviado exitosamente. Gracias por tu mensaje.";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>