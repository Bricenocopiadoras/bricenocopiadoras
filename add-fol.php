<?php 

 if(isset($_POST['btn1'])){
include ("conexion.php");

   $id= $_POST['id'];
   $folionu= $_POST['folionu'];
   echo $folionu;
      mysqli_query("set names 'utf8'"); 
   $conexion->query("INSERT INTO Foliorel (id_reporte,folionu) values ('$id','$folionu')");

   
 }
  header("location:admin.php")
 ?>
       