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
    <title></title>
</head>

<body>
    <center>
        
        <div>
        <h1>Bienvenido</h1>
            <br>
            <form action='login.php' method ='POST'>
                 <div>
                    Usuario: <input type="text" name="usuraio" placeholder="usuario" required>
                    <br>
                    <br>
                    contraseña: <input type="password" name="contraseña" placeholder="Password" required>
                    <br>
                    <br>
                    <button type="submit">Ingresar</button>

                    <a href='registro_tienda.php'>Registrar mi Tienda</a>
                </div>
            </form>
        </div>


        <?php if (isset($error_message)) { ?>
            <div><strong><?php echo $error_message; ?></strong></div>
        <?php 
        } ?>

    </center>
</body >
</html>