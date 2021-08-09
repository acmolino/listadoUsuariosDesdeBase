<?php

include 'database.php';
try {
    $conn = mysqli_connect($servidor,$usuario,$password,$base_datos);
} catch (Exception $ex) {
    die($ex->getMessage());
}

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['email'];

$consulta = "UPDATE usuariosPlataforma SET nombre = '$nombre', email = '$correo' WHERE id =$id";
$resultado = mysqli_query($conn , $consulta);

echo $consulta;

?>