<?php
include "conexion.php";

$resultado = mysqli_query($conexion, "SELECT * FROM visitantes ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Libro de Visitas</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #000, #e6b42d); 
    padding: 30px;
    color:#333;
}

h2{
    text-align:center;
    color: #fff;
    font-size: 28px;
    margin-bottom: 20px;
    text-shadow: 1px 1px 3px #000;
}

.table-container{
    width: 85%;
    margin: auto;
    overflow: hidden;
    border-radius: 8px;
    background: white;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    border: 1px solid #af8019;
}

table{
    width: 100%;
    border-collapse: collapse;
    font-size: 15px;
}

th{
    background: #e5e5e5;
    color:#333;
    padding: 12px;
    text-align:left;
}

td{
    padding: 12px;
    border-bottom: 1px solid #e6e6e6;
}

tr:hover td{
    background: #f9f9f9;
}

.btn{
    display:block;
    width:200px;
    text-align:center;
    margin: 25px auto;
    padding:10px;
    background:#6a8afc;
    color:white;
    text-decoration:none;
    border-radius:6px;
    font-size: 15px;
    transition: 0.3s;
}

.btn:hover{
    background:#5874d8;
}
</style>
</head>
<body>

<h2>Comentarios del Libro de Visitas</h2>

<div class="table-container">
    <table>
        <tr>
            <th>Nombre</th>
            <th>Comentario</th>
        </tr>

        <?php while($fila = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?= htmlspecialchars($fila['nombre']) ?></td>
            <td><?= htmlspecialchars($fila['comentario']) ?></td>
        </tr>
        <?php } ?>
    </table>
</div>

<a href="formulario.html" class="btn">Volver al formulario</a>

<?php mysqli_close($conexion); ?>

</body>
</html>

