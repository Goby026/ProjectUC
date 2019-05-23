<?php
include 'conexion.php';


$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$celular = $_POST["celular"];
$password = $_POST["password"];

$insertar = "INSERT INTO usuarios(NombreU, ApellidoU, emailU, telefonoU, passwordU) values ('$nombre','$apellido','$email','$celular','$password')";

//Ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
	echo 'Error al registrarse';

}else {
	echo 'usuarios registrado existosamente';
}

//cerrar conexion
mysqli_close($conexion);




?>