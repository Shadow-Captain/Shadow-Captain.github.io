<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Variables del formulario
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];
    
    // Configuración de correo
    $to = 'tu_correo@example.com'; // Reemplaza con tu dirección de correo electrónico
    $subject = 'Nuevo mensaje de contacto';
    $body = "Nombre: $firstName $lastName\n";
    $body .= "Email: $email\n";
    $body .= "Teléfono: $mobile\n";
    $body .= "Mensaje:\n$message";
    $headers = "From: $email\r\n";
    
    // Envío de correo
    if (mail($to, $subject, $body, $headers)) {
        echo 'Correo enviado correctamente.';
    } else {
        echo 'Hubo un error al enviar el correo.';
    }
}
?>
