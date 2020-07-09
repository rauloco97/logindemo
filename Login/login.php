<?php

require '../Conexion/conexion.php';
session_start();

try {

 $email=htmlentities(addslashes($_POST['email']));
 $clave=htmlentities(addslashes($_POST['clave']));


 $contador = 0;


 $sql = "SELECT * FROM usuarios WHERE correo = :email";


 $resultado=$conexion->prepare($sql);


 $resultado->execute(array(":email"=>$email));


 while($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {

  if(password_verify($clave, $registro['pass'])) {

   $contador++;
  }
 }


 if ($contador>0) {

$_SESSION['correo'] = $email;
    header('Location: ../lista.php');
 } else {
  echo "El usuario no exixte o clave erronea <br>";
  echo "  <a href='../index.php'>Reintentar...</a>";

 }
 $conexion = null;
} catch(Exception $e) {
   die($e->getMessage());
}
?>