<?php

require './vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
$mail = new PHPMailer();
try{
	//Aca van los datos de tu correo electronico, voy a poner de ejemplo uno de hotmail
        $mail->isSMTP();
        $mail->SMTPDebug = 2;
        $mail->Debugoutput = 'html';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.live.com';
        $mail->Port = 587;
        $mail->isHTML();
        $mail->Username = 'mailorigen@hotmail.com';
        $mail->Password = 'clavedelhotmail';
	//Destinatarios
	$mail->From = "mailorigen@ejemplo.com";
    $mail->FromName = "Contacto desde el formulario de contacto";
    $mail->AddReplyTo($_POST['Mail'], $_POST['Nombre']);
    $mail->addAddress($_POST['Mail'],$_POST['Nombre']);               // Name is optional


    $mail->WordWrap = 50;
    $mail->IsHTML(true);                                

    $mail->Subject = $_POST['Asunto'];
    $mail->Body    = $_POST['Mensaje'];
    if(!$mail->Send())   { //Error al enviar
        echo "El mensaje no se ha podido enviar. <p>";
        echo "Error: " . $mail->ErrorInfo;
        exit;
    }else{ //Se envio
        echo "<script>alert('Se envio con éxito');</script>";
        echo "<script>window.location.href='index.html';</script>";
    }
}catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>