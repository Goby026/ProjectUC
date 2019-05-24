<?php
include 'conexion1.php';

$email = $_POST['email'];
$pass = $_POST['password'];

$consulta = "SELECT * FROM usuarios WHERE emailU= '$email' and passwordU= '$pass' ";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas > 0) {
    session_start();
    $_SESSION['user'] = $email;
    header("location:bienvenidos.php?success=success");
} else {
    header("location:login.php?error=authFalse");
}
mysqli_free_result($resultado);
mysqli_close($conexion);
