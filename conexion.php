<?php

$connect = new mysqli("localhost","root","","clinica");

if($connect){
	// echo "Conexion exitosa";
}else{
	echo "Fallo, revise ip o firewall";
	exit();
}