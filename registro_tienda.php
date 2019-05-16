<?php

if ($_GET) {
    if (isset($_GET['error_message'])) {
        $error_message = $_GET['error_message'];
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registro tienda</title>
</head>

<body>
    <center>
    <div>
                <h1> <b>Registro de Tienda </b> </h1>
            <br>
            <form action='reg_tienda.php' method ='POST'>
                <div>
                    Nombre de la tienda: <input type="text" name="nombretienda" placeholder="Nombre de la tienda" required>
                    <br>
                    <br>
                    usuario: <input type="text" name="usuario" placeholder="usuario" required>
                    <br>
                    <br>
                    clave: <input type="password" name="clave" placeholder="clave" required>
                    <br>
                    <br>
                    confirmar clave: <input type="password" name="clave1" placeholder="confirmar clave" required>
                    <br>
                    <br>
                    <button type="submit">Registrar</button>
                </div>
            </form>
        </div>


        <?php if (isset($error_message)) { ?>
            <div><strong><?php echo $error_message; ?></strong></div>
        <?php } ?>
    </center>

</body>
</html>