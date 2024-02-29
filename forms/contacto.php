<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Validar los datos (puedes agregar más validaciones según tus necesidades)
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Por favor, completa todos los campos.";
        exit;
    }

    // Crear el mensaje de correo electrónico
    $to = "agus.lopezleon@gmail.com"; 
    $headers = "From: $email";
    $message_body = "Nombre: $name\nCorreo Electrónico: $email\nAsunto: $subject\nMensaje:\n$message";

    // Enviar el correo electrónico
    if (mail($to, $subject, $message_body, $headers)) {
        echo "Tu mensaje fue enviado. Te responderemos a la brevedad. ¡Gracias!";
    } else {
        echo "Hubo un problema al enviar el mensaje. Por favor, intentalo nuevamente.";
    }
} else {
    // Si el formulario no fue enviado por POST, redirigir o mostrar un mensaje de error
    echo "Acceso no permitido.";
}
?>
