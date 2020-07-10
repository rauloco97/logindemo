<?php  

$servidor = 'localhost';
$base_datos = 'login_php';
$usuario = 'root';
$clave = '';


$conexion = new PDO("mysql:host=$servidor; dbname=$base_datos", $usuario, $clave);

$conn = mysqli_connect($servidor, $usuario, $clave, $base_datos);
	

$conexion->exec("SET CHARACTER SET utf8");
?>