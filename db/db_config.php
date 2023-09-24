<?php 
$hostname = 'localhost';
$username = 'AdminSky';
$password = 'Administrador#1428';
$db_name = 'sistema_caja';
$conexion = mysqli_connect($hostname, $username, $password, $db_name);

if (!$conexion) {
    echo '<div>desconectado</div>';   
}
?>