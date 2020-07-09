
<?php

require 'Conexion\conexion.php';




if(!isset($_SESSION)) 
{ 
    session_start(); 

    $correo = $_SESSION['correo'];



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
if($_SESSION['login']!=1)
{
    header("Location: index.php");
    exit;
}

?>
