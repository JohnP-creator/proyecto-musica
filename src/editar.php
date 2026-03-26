<?php 
require 'conexion.php'; 

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM registros WHERE id = ?");
$stmt->execute([$id]);
$r = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$r) { header('Location: index.php'); exit; }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Registro</title>
    </head>
<body>
    <h1>Editar Gusto Musical</h1>
    <form action="actualizar.php" method="POST">
        <input type="hidden" name="id" value="<?= $r['id'] ?>">

        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= htmlspecialchars($r['nombre']) ?>" required>

        <label>Género favorito:</label>
        <select name="genero_favorito" required>
            <option><?= $r['genero_favorito'] ?></option>
            <option>Rock</option>
            <option>Pop</option>
            <option>Hip-Hop</option>
            <option>Electrónica</option>
            <option>Reggaeton</option>
            <option>Metal</option>
        </select>

        <label>Artista favorito:</label>
        <input type="text" name="artista_favorito" value="<?= htmlspecialchars($r['artista_favorito']) ?>" required>

        <label>Canción favorita:</label>
        <input type="text" name="cancion_favorita" value="<?= htmlspecialchars($r['cancion_favorita']) ?>" required>

        <button type="submit" style="background: #2e7d32;">Actualizar cambios</button>
        <a href="index.php">Cancelar</a>
    </form>
</body>
</html>