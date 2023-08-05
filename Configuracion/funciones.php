<?php


function Reg_Cotización($Nombre,$Email,$celular,$opcion,$Fecha,$Detalles){

    // paso3.1: Conexión de base de datos 
    include_once("Conexion.php");

                      
    // Paso 4: insertar en nuestra Bd*
    $Insertar="

    INSERT INTO cotizacion (Nombre, Email, Telefono, Preferencia, Fecha, Detalles)
    
    VALUES ('$Nombre', '$Email', '$celular', '$opcion', '$Fecha', '$Detalles')";
    
    
    if(mysqli_query($con, $Insertar)){
    
    echo"Se enviaron los datos";
    
    } else {
    
        echo "Error: " . $Insertar . "<br>" . mysqli_error($con);
    
    }


}




function Reg_Contacto($Nombre,$Email,$celular,$Comentario){

    // paso3.1: Conexión de base de datos 
    include_once("Conexion.php");

                      
    // Paso 4: insertar en nuestra Bd*
    $Insertar="

    INSERT INTO contacto (Nombre, Email, Telefono, Comentario)
    
    VALUES ('$Nombre', '$Email', '$celular', '$Comentario')";
    
    
    if(mysqli_query($con, $Insertar)){
    
    echo"Se enviaron los datos";
    
    } else {
    
        echo "Error: " . $Insertar . "<br>" . mysqli_error($con);
    
    }


}


?>