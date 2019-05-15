<?php
session_start();

if($_POST){
    if (isset($_POST['txtuser']) && isset($_POST['txtpass'])) {
        $username=$_POST['txtuser'];
        $password=MD5($_POST['txtpass']);

        $conn=new mysqli('localhost','root','','registrot');

        if ($conn->connect_error) {
            echo 'Error en la conexion '. $conn->connect_error;
        }
        $sql="select * from user where username='$username' and passwd='$password'";

        $res=$conn->query($sql);

        if($conn->error){
            header('Location: index.php?error_message=Ocurrió un error: '.$conn->error);
            exit;
        }

        if ($res->num_rows> 0 ) {
            while ($row=$res->fetch_assoc()) {
                $_SESSION['user']=[
                'username'=>$row['username'],
                'id'=>$row['iduser']];
            }
        }else {
            header('Location: index.php?error_message= Usuario o clave incorrectas!');
            exit;
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>

<h1>Inicio</h1>
    <div>
    <?php echo 'Bienvenido :' .strtoupper($_POST['nombre']);?>
    <?php echo 'Nombre de la tienda :' .strtoupper($_POST['nomt']);?>
    </div>
   
    <div>
    <a href="php/home.php">LOGOUT</a>
    </div>

   


</body>
</html>