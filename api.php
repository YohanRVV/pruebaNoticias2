<?php
require_once('includes/db.php');

if ($_GET['action'] == 'get_noticias') {
    $id_periodista = isset($_GET['id_periodista']) ? intval($_GET['id_periodista']) : 0;
    $query = $id_periodista > 0 ?
        "SELECT noticias.*, periodistas.nombre AS periodista_nombre, periodistas.apellido AS periodista_apellido FROM noticias JOIN periodistas ON noticias.id_periodista = periodistas.id_periodista WHERE noticias.id_periodista = $id_periodista" :
        "SELECT noticias.*, periodistas.nombre AS periodista_nombre, periodistas.apellido AS periodista_apellido FROM noticias JOIN periodistas ON noticias.id_periodista = periodistas.id_periodista";

    $result = $db->query($query);
    $noticias = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($noticias);
    exit();
}

$db->close();
