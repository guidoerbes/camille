<?php

    $destinatario = 'ochoquinceinfo@gmail.com';
/ /Esto es al correo al que se envia el mensaje 

    $Nombre = $_POST['Nombre'];
    $Mail = $_POST['Mail'];
    $Seleccion = $_POST['Seleccion'];
    $Fecha = $_POST['Fecha'];
    $Horario = $_POST['Horario'];
    $Celular = $_POST['Celular'];


    $header = "Enviado desde RESERVAS Malu Studio Web";
    $mensajeCompleto = $Mensaje . "\nAtentamente: " . $Nombre;
    
    mail($Nombre, $Mail, $Seleccion, $Fecha, $Horario, $Celular, $Header );
    echo "<script> alert('Correo enviado Exitosamente')</script>";
    echo "<script> setTimeOut(\"location.href='index.html'\",1000)</script>";




?>