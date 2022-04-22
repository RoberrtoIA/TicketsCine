<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

$body = 'Nombre: ' . $nombre . '<br>Correo: ' . $correo;

require '../phpmailer/Exception.php';
require '../phpmailer/PHPMailer.php';
require '../phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'pedromontecasablanca@gmail.com';       //SMTP username
    $mail->Password   = 'contrasena';                                     //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('pedromontecasablanca@gmail.com', 'pedro');
    $mail->addAddress($correo);     //aqui queria aderir el correo que se ingresa al comprar para que vaya al cliente especifico

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'crompra de ticket';
    $mail->Body    = 'Gracias por su compra,' . $nombre; //aqui queria poner la variable $nombre que tiene la funcion post

    $mail->send();
    echo "Su pago se relizo, le mandaremos el resivo a su correo";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}