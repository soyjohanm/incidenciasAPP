<?php
  $mysqli=new mysqli("localhost","johan","root","incidenciasapp"); //MODIFICAR: servidor,usuario,contraseña,nombreBaseDatos
  if(mysqli_connect_errno()){
    echo 'Conexion Fallida : ', mysqli_connect_error();
    exit();
  }
?>
