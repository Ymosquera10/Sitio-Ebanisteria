<?php
$conexion=new mysqli("localhost","root","","arachoco");
if ($conexion) {
	echo" Esta funcionando correctamente";
}else{
	echo"No funcionna";
}
?>