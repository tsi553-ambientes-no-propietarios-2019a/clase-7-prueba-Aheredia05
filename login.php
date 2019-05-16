<?php
session_start();

if(isset($_POST['usuraio'])  and isset($_POST['contraseña'])){
    $conn=mysqli_connect("localhost","root","","pruebab1");
    $usuario=$_POST['usuraio'];
    $pass=$_POST['contraseña'];
    $sql="SELECT usuario, clave FROM tienda";
    $tab=mysqli_query($conn,$sql);


    while($row=mysqli_fetch_array($tab)){
        if($row['usuario']=="$usuario" and $row['clave']=="$pass"){
            $_SESSION['user']="$usuario";

            header('Location: inicio.php');
        }else{
            header('Location: ../index.php?error_message=usuario o clave incorrectos!');
        }
    }
   
}else{
    header('Location: index.php');
}