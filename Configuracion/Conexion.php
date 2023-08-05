<?php

 // paso3.1: Conexión de base de datos
 $servidor = "localhost";
 $usuario = "root";
 $clave="";
 $BD = "db_Vinska";

 // variable para coneccion a servidor
 $con = mysqli_connect($servidor, $usuario, $clave, $BD) or die("error del servidor");

 if(!$con){

     echo 'no se conecto';

 }else{
     echo 'se conecto';

 }

?>