CREATE DATABASE IF NOT EXISTS gustos_musicales;
USE gustos_musicales;

CREATE TABLE IF NOT EXISTS registros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    genero_favorito VARCHAR(100) NOT NULL,
    artista_favorito VARCHAR(100) NOT NULL,
    cancion_favorita VARCHAR(150) NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);