<?php
include('../common/utils.php');
$user = $_POST['nombre'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Incio</title>
</head>
<body>
    <h1>Inicio</h1>
    <div>
    <?php echo 'Bienvenido :' .strtoupper($_POST['nombre']);?>
    <?php echo 'Nombre de la tienda :' .strtoupper($_POST['nomt']);?>
    </div>
   
    <div>
    <a href="home.php">LOGOUT</a>
    </div>
</body>
</html>