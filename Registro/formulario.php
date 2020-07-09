<?php  
require 'localhost\logindemo\Concexion\coneccion.php';

$clave = $_POST['clave'];

$clave_cifrada = password_hash($clave, PASSWORD_DEFAULT, array("cost"=>15));


if ($conexion == true) {
	

 $insert = $conexion->prepare("INSERT INTO usuarios (correo, pass) VALUES (  :email, :clave)");

 $insert->bindParam(':email', $_POST['email']);
 $insert->bindParam(':clave', $clave_cifrada);



 $insert->execute();


 $conexion = null;


 header('Location: lista.php');
} else {
 echo "Algo ha fallado";
}
?>