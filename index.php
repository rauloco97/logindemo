<form action="Login\login.php" method="post">
<label id="icon" for="nombre"></label>

<input type="text" name="email" id="email" placeholder="Email" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required/>


<label id="icon" for="clave"></label>

<input type="password" name="clave" id="clave" placeholder="Contraseña" required/>


<input type="submit" value="Acceder" class="button">


</form>

<a href="Registro/registro.php"> Registrarse</a>