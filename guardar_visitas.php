<?php
include "conexion.php";

$nombre = $_POST["nombre"];
$comentario = $_POST["comentario"];

$sql = "INSERT INTO visitantes (nombre, comentario) VALUES ('$nombre', '$comentario')";
mysqli_query($conexion, $sql);

header("Location: listar_visitas.php");
exit;
?>
