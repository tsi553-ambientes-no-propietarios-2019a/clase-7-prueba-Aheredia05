<?php
/*
Escribir una página PHP que presente un formulario 
con los campos “usuario” y “contraseña” y un botón que 
permita iniciar sesión. Al iniciar la sesión se debe 
redireccionar a la página de inicio.php que mostrará 
los datos guardados en la sesión y un saludo mostrando 
el nombre del usuario ingresado. La página de inicio debe 
tener un link que permita cerrar la sesión del usuario.
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tienda</title>
</head>
<body>

<form action="php/inicio.php" method ="post">
<center>
<h1>Registro tienda</h1>
<div>
<label >Nombre de Tienda:</label>
<input type="text" id = "userId" name="nombre" required="required">
</div>
<br>

<div>
<label >Direccion:      </label>
<input type="text"  name="Direccion" required="required">
</div>
<br>
<div>
<label >Usuario:        </label>
<input type="text" id = "userId" name="nombre" required="required">
</div>
<br>

<div>
<label>Password:        </label>
<input type="password" name="password" required ="required">
</div>
<br>
<button>Registrar</button>

</center>
</form>

    
</body>
</html>