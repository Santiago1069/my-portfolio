<?php
if (isset($_POST['submit'])) {
    $nombre = $_POST['fullname'];
    $correo = $_POST['email'];
    $mensaje = $_POST['message'];

    $header = "Content-Type: text/plain";

    $mensaje_completo = "Este mensaje ha sido enviado por: $nombre\n";
    $mensaje_completo .= "Su correo es: $correo\n";
    $mensaje_completo .= "Su mensaje es: $mensaje\n";
    $mensaje_completo .= "Enviado el: " . date('d/m/Y', time());

    $para = 'casaba3131@gmail.com';
    $asunto = 'Mensaje enviado desde el sitio web del portafolio';

    mail($para, $asunto, $mensaje_completo, $header);

    header("Location: index.html");
    exit();
}
