<?php 

 if(isset($_POST['btn1'])){
include ("conexion.php");

   $destino= "";
   $fecha= $_POST['fecha'];
   $empresa= $_POST['empresa'];
   $numec= $_POST['numec'];
   $persona= $_POST['persona'];
   $descripcion= $_POST['descripcion'];
   $contenido= "Empresa:" . $empresa . "\nPersona que reporta:" . $persona . "\nDescripcion:" . $descripcion;

   mail("diegocatzim@gmail.com", "REPORTE", $contenido);

      mysqli_query("set names 'utf8'"); 
      
   $conexion->query("INSERT INTO reportes (fecha,empresa, numec, persona, descripcion) values ('$fecha','$empresa','$numec', '$persona','$descripcion')");

   
 }
header("location:visualticket.php")
 ?>