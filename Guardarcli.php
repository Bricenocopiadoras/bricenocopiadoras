<?php 

 if(isset($_POST['btn1'])){
include ("conexion.php");

   $nombre= $_POST['nombre'];
   $direccion= $_POST['direccion'];
   $telefono= $_POST['telefono'];
   $contacto= $_POST['contacto'];

   $conexion->query("INSERT INTO clientes (nombre, direccion, telefono, contacto) values ('$nombre','$direccion', '$telefono','$contacto')");

   
 }
header("location:Carga.php")
 ?>