<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre   = trim($_POST['nombre']);
  $genero   = trim($_POST['genero_favorito']);
  $artista  = trim($_POST['artista_favorito']);
  $cancion  = trim($_POST['cancion_favorita']);

  $stmt = $pdo->prepare("INSERT INTO registros (nombre, genero_favorito, artista_favorito, cancion_favorita) VALUES (?, ?, ?, ?)");
  $stmt->execute([$nombre, $genero, $artista, $cancion]);
}

header('Location: index.php');
exit;
