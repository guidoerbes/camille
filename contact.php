<?php

    $destinatario = 'ochoquinceinfo@gmail.com';
/ /Esto es al correo al que se envia el mensaje 

    $Nombre = $_POST['Nombre'];
    $Mail = $_POST['Mail'];
    $Asunto = $_POST['Asunto'];
    $Mensaje = $_POST['Mensaje'];


    $header = "Enviado desde contacto Malu Studio Web";
    $mensajeCompleto = $Mensaje . "\nAtentamente: " . $Nombre;
    
    mail($Nombre, $Mail, $Asunto, $Mensaje, $header );
    echo "<script> alert('Correo enviado Exitosamente')</script>";
    echo "<script> setTimeOut(\"location.href='index.html'\",1000)</script>";




?>