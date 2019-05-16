<?php
session_start();
if($_POST['nombretienda'] and $_POST['usuario'] and _POST['clave']){

    $pass=$_POST['clave'];
    $pass2=$_POST['clave1'];
    
    if($pass != $pass2){
        header('Location: registro_tienda.php?Las Claves no coinciden');
    }else{
        $tienda=$_POST['nombretienda'];
        $usu=$_POST['usuario'];
        $conn=mysqli_connect("localhost","root","","pruebab1");
        $sql="INSERT INTO tienda(Nombretienda, usuario, clave) VALUES ('$tienda','$usu','$pass')";
        $tab=mysqli_query($conn,$sql);
     
        if($tab){
            header('Location: ../index.php?Tienda registrada correctamente, puede iniciar sesión');
        }else{
            header('Location: registro_tienda.php?no se pudo registrar la tienda');
        }
    }
}else{
    header('Location: ../index.php');
}

?>