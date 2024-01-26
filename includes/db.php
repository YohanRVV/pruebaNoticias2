<?php
// db.php
$host = 'localhost';
$usuario = 'root';
$contraseña = 'root';
$nombre_base_de_datos = 'noticias';

// Crear conexión
$db = new mysqli($host, $usuario, $contraseña, $nombre_base_de_datos);

// Verificar conexión
if ($db->connect_error) {
    die('Error de conexión a la base de datos: ' . $db->connect_error);
}
