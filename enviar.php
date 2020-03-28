<?php
    $destino="contacto@cmmantequera.com"
    $Nombre= $_Post["Nombre"];
    $Correo= $_Post["Correo"];
    $Telefono= $_Post["Teléfono"];
    $mensaje= $_Post["mensaje"];    
    $contenido="Nombre:" .$Nombre . "\nCorreo:" $Correo . "\nTeléfono:" $Telefono . "\nmensaje:" . $Mensaje;
    mail($destino,"Contacto", $contenido);
    header("Location:gracias.html");
?>