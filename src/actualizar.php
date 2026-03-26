<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id       = $_POST['id'];
    $nombre   = trim($_POST['nombre']);
    $genero   = trim($_POST['genero_favorito']);
    $artista  = trim($_POST['artista_favorito']);
    $cancion  = trim($_POST['cancion_favorita']);

    $sql = "UPDATE registros SET nombre=?, genero_favorito=?, artista_favorito=?, cancion_favorita=? WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nombre, $genero, $artista, $cancion, $id]);
}

header('Location: index.php');
exit;