<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Asegúrate de incluir la biblioteca PHPMailer

$mail = new PHPMailer(true);

try {
    // Configura el servidor SMTP y la autenticación
    $mail->isSMTP();
    $mail->Host = 'tu.servidor.smtp.com'; // Reemplaza con el servidor SMTP real
    $mail->SMTPAuth = true;
    $mail->Username = 'tu_correo@gmail.com'; // Reemplaza con tu dirección de correo
    $mail->Password = 'tu_contraseña'; // Reemplaza con tu contraseña de correo
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587; // Puerto SMTP adecuado

    // Configura los detalles del correo
    $mail->setFrom('tu_correo@gmail.com', 'Tu Nombre');
    $mail->addAddress('destinatario@example.com');
    $mail->Subject = 'Asunto del correo';
    $mail->Body = 'Cuerpo del correo';

    // Envía el correo
    $mail->send();
    echo 'El correo se ha enviado correctamente.';
} catch (Exception $e) {
    echo 'Hubo un error al enviar el correo: ' . $mail->ErrorInfo;
}
?>
