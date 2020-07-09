
<?php

require 'Conexion\conexion.php';

session_start();
$correo = $_SESSION['correo'];

if(isset($_SESSION['correo'])){

$sql = "SELECT * FROM usuarios";


$resultado = $conexion->query($sql);

echo "<p>Bienvenido $correo </p>";
?>

<table border="solid">
 <tr>
  <td>Id</td>
  <td>Email</td>
  <td>Contraseña</td>
 </tr>

<?php

foreach($resultado as $fila) {
 echo "<tr>";
 echo "<td>".$fila['id']."</td>";
 echo "<td>".$fila['correo']."</td>";
 echo "<td>".$fila['pass']."</td>";
 echo "</tr>";
 
}
?>

</table>


<a href = "Login/logout.php"> Salir </a>

<?php
}

else
    header("location: index.php");




?>