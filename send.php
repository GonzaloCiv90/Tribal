<?php
header('Content-Type: application/json');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
    exit;
}

// Verificar que todos los campos necesarios estén presentes
if (!isset($_POST['nombre']) || !isset($_POST['email']) ||  !isset($_POST['mensaje']) || !isset($_POST['g-recaptcha-response'])) {
    echo json_encode(['success' => false, 'message' => 'Faltan campos requeridos']);
    exit;
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$token = $_POST['g-recaptcha-response'];

// Verificar reCAPTCHA v3
$recaptchaSecret = 'Secret_Key'; // Clave secreta de reCAPTCHA
$verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$token}");
$captcha_success = json_decode($verify);

if (!$captcha_success->success) {
    echo json_encode(['success' => false, 'message' => 'Por favor, verifica que no eres un robot']);
    exit;
}

// Configurar PHPMailer
$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP
    $mail->SMTPDebug = 0; // Desactivar debug
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@tribalheavymetal.com';
    $mail->Password = 'Judas3271*';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    // Configuración del correo
    $mail->setFrom('info@tribalheavymetal.com', 'Tribal'); // Remitente autorizado
    $mail->addAddress('info@tribalheavymetal.com'); // Destinatario (tu casilla de correo)
    $mail->addReplyTo($email, $nombre,); // Responder al correo del cliente
    $mail->CharSet = 'UTF-8';

    // Contenido del correo
    $mail->isHTML(true);
    $mail->Subject = 'Consulta desde tribalheavymetal.com';
    $mail->Body = "
        <h2>Nueva consulta desde el sitio web</h2>
        <p><strong>Nombre:</strong> {$nombre}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Mensaje:</strong><br>{$mensaje}</p>
    ";

    // Enviar el correo
    $mail->send();
    echo json_encode(['success' => true, 'message' => '¡El mensaje ha sido enviado correctamente!']);
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => "Error al enviar el mensaje: {$mail->ErrorInfo}"
    ]);
}
