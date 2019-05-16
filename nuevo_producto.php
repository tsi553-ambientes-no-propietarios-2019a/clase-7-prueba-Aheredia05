<?php
session_start();

if (isset($_SESSION['user'])) {

?>
<!DOCTYPE html>
<html>

<head>
<title></title>
</head>

    <body>
        <center>
            <div>
                <h1><b> Registro de un Producto </b></h1>
                <br>
                <form action='reg_producto.php' method='POST'>
                    <div>
                        Codigo: <input type="text" name="codigo" placeholder="Codigo" required>
                        <br>
                        <br>
                        Nombre: <input type="text" name="nombre" placeholder="Nombre" required>
                        <br>
                        <br>
                        <label>Tipo:
                            <select name="tipo" required>
                                <option value="Alimento">Alimento</option>
                                <option value="Vestiment">Vestimenta</option>
                                <option value="Salud">Salud</option>
                            
                            </select> </label>
                        
                        <br>
                        <br>
                        Cantidad: <input type="numeric" name="cantidad" placeholder="Cantidad" required>
                        <br>
                        <br>
                        Precio: <input type="float" name="precio" placeholder="Precio" required>
                        <br>
                        <br>
                        <button type="submit">Registrar</button>
                        
                    </div>
                </form>
            </div>
        </center>
    </body>

    </html>
<?php
} else {
    header('Location: ../index.php');
}

