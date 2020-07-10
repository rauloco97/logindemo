<?php  
require '../Conexion/conexion.php';

$clave = $_POST['clave'];
$email = $_POST['email'];

$clave_cifrada = password_hash($clave, PASSWORD_DEFAULT, array("cost"=>15));


if ($conexion == true) {
    

$consulta = mysqli_query ($conn, "SELECT correo FROM usuarios WHERE correo = '$email' ");  




if(!$consulta){ 


 $insert = $conexion->prepare("INSERT INTO usuarios (correo, pass) VALUES ( :email, :clave)");

 $insert->bindParam(':email', $_POST['email']);
 $insert->bindParam(':clave', $clave_cifrada);



 $insert->execute();


 $conexion = null;


 echo json_encode(array('success' => 1));
}else 
echo json_encode(array('success' => 0));
} else {
 echo "Algo ha fallado";
}
