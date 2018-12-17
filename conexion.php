<?php 


$s="localhost";
$bd="briceno";
$u="root";
$p="";


$conexion=new mysqli($s,$u,$p,$bd);

if($conexion->connect_errno){
    echo "no conecto";
}else{

	echo "";


}

 ?>