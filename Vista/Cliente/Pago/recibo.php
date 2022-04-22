<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

require '../../../Modelo/Entidades/cliente.php';

if(isset($_POST['email'])){

    session_start();

    $email = $_POST['email'];

    $cliente = new Cliente($email);

   
    //Load composer's autoloader

    $mail = new PHPMailer(true);                            
    try {
        //Server settings
        $mail->isSMTP();                                     
        $mail->Host = 'smtp.gmail.com';                      
        $mail->SMTPAuth = true;                             
        // $mail->Username = '1dummy2020@gmail.com';     
        // $mail->Password = 'bermzwhiteknight8';  
        $mail->Username = 'raegar18@gmail.com';     
        $mail->Password = 'roberto99';             
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );                         
        $mail->SMTPSecure = 'ssl';                           
        $mail->Port = 465;                                   

        //Send Email
        $mail->setFrom('raegar18@gmail.com');
        
        //Recipients
        $mail->addAddress($cliente->getCorreo());              
        $mail->addReplyTo('raegar18@gmail.com');
        
        //Content
        $mail->isHTML(true);

        $parte1 = file_get_contents('invoice/recibo-parte1.html');
        // $encabezado = file('invoice/recibo-parte1.html');

        $encabezado = file_get_contents('invoice/encabezado.html');

        $pago = '<td width="50%" style="padding: 20px;"><strong style="color: #333; font-size: 24px;">$11.00</strong> Pagado</td>';
        
        $recibo = '<table cellspacing="0" style="border-collapse: collapse; margin-bottom: 40px;">';
        $recibo .= '<tbody>';
        $recibo .= '<tr>';
        $recibo .= '<td style="padding: 5px 0;">Concepto</td>';
        $recibo .= '<td align="right" style="padding: 5px 0;">Tickets de Cine: '. $_SESSION['numero']. '</td>';
        $recibo .= '</tr>';
        $recibo .= '<tr>';
        $recibo .= '<td style="padding: 5px 0;">Precio Individual</td>';
        $recibo .= '<td align="right" style="padding: 5px 0;">$4.50</td>';
        $recibo .= '</tr>';
        $recibo .= '<tr>';
        $recibo .= '<td style="padding: 5px 0;">Pelicula</td>';
        $recibo .= '<td align="right" style="padding: 5px 0;">'. $_SESSION['pelicula']. '</td>';
        $recibo .= '</tr>';
        $recibo .= '<tr>';
        $recibo .= '<td style="border-bottom: 2px solid #000; border-top: 2px solid #000; font-weight: bold; padding: 5px 0;">Total a pagar</td>';
        $recibo .= '<td align="right" style="border-bottom: 2px solid #000; border-top: 2px solid #000; font-weight: bold; padding: 5px 0;">$'. (((int) $_SESSION['numero'] ) * 4.50). '</td>';
        $recibo .= '</tr>';
        $recibo .= '</tbody>';

        $parte2 = file_get_contents('invoice/recibo-parte2.html');

        $mail->Subject = 'Gracias por su compra | Cinema';
        $mail->Body = $encabezado. $parte1. $recibo. $parte2;

        $mail->send();
		
       echo 'ok';
    } catch (Exception $e) {
	   echo 'error';
    }
    header("location: /TicketsCine/Vista/Cliente/Pago/thank.php");
}

?>