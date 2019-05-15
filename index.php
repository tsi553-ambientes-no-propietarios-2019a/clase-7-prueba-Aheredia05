<?php

if ($_GET) {
    if (isset($_GET['error_message'])) {
        $error_message=$_GET['error_message'];
    }elseif (isset($_GET['log_out'])) {
        $log_out=$_GET['log_out'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>

</head>
<body>
<center>   <h1>Iniciar Secion</h1> <br> </center>


    <form action="inicio.php" method="post">

    <center>
    <label >Usuario:      </label>
    <input type="text" name="txtuser" id="iduser"> <br>
    <label >Clave:      </label>
    <input type="password" name="txtpass" id="idpass"> <br>
    <input type="submit" value="Iniciar Sesión">  <a href="registro_tienda.php">registro tienda</a>
    <br>
    </center>
    </form>
    <?php 


    if (isset($error_message)) {
      echo '<strong>'.$error_message.'</strong>';
      }elseif(isset($log_out)){
    echo '<strong>'.$log_out.'</strong>';  
      }
      ?>
</body>
</html>