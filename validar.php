<?php 
include("conexion.php");

	$usuario = $_POST["usuario"];
	$contra = $_POST["contra"];

	$consulta = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario='$usuario' and contra='$contra'");
	 $cont=0;
 while ($datos= mysqli_fetch_array($consulta)) {
   $cont=1;
   session_start();
   $_SESSION['usuario']=$datos['usuario'];
   $_SESSION['contra']=$datos['contra'];
   $_SESSION['verificar']="si";
   }  
   if ($cont>0) {
  
   header("location:admin.php");
   }
   else
   {
     header("location:login.php");
     

   }

   ?>