<?php 
header("Location: ../index.php");

$database = 'database.db';
try {
    $db = new SQLite3($database);
    die("conexion exitosa");
} catch (Exception $e) {
    die("Error al abrir la base de datos: " . $e->getMessage());
}

if (!$db) {
    die("No se pudo abrir la base de datos.");
}

echo "Conexión exitosa a la base de datos.";
?>