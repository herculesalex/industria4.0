<?php

require("../modelo/Conexion.php");
// Creamos una nueva instancia
$query = new Conexion();
//Creacion de variables
$tabla = 'servidor';
$condition = 'id=1';
$consulta = $query->ConsultaUsuario($tabla, $condition);
echo "<div class='d-flex flex-column'>";
echo "<div>";
echo "<strong>ip servidor actual:&nbsp;<strong>" . $consulta['ip'];
echo "</div>";
echo "<div>";
echo "<strong>Última actualizacion:<strong>" . $consulta['fecha'];
echo "</div>"
?>