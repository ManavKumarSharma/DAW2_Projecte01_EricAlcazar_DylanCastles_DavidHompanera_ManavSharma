-- Creación de la base de datos
CREATE DATABASE restaurante_bbdd;
USE restaurante_bbdd;

-- Creación de las tablas
CREATE TABLE tbl_camarero (
    id_camarero INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre_camarero VARCHAR(50) NOT NULL,
    apellidos_camarero VARCHAR(50) NOT NULL,
    username VARCHAR(25) NOT NULL UNIQUE,
    password CHAR(60) NOT NULL
);

CREATE TABLE tbl_mesa (
    id_mesa INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    id_sala INT NOT NULL,
    numero_sillas_mesa INT NOT NULL  
);

CREATE TABLE tbl_sala ( 
    id_sala INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    ubicacion_sala VARCHAR(25) NOT NULL
);

CREATE TABLE tbl_ocupacion (
    id_ocupacion INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    id_mesa INT NOT NULL,
    id_camarero INT NOT NULL,
    fecha_inicio DATETIME NOT NULL,
    fecha_final DATETIME,
    estado_ocupacion VARCHAR(25)
);

-- Añadir FK
ALTER TABLE tbl_mesa 
ADD CONSTRAINT FK_mesa_sala
FOREIGN KEY(id_sala) REFERENCES tbl_sala(id_sala);

ALTER TABLE tbl_ocupacion 
ADD CONSTRAINT FK_ocupacion_mesa
FOREIGN KEY(id_mesa) REFERENCES tbl_mesa(id_mesa);

ALTER TABLE tbl_ocupacion
ADD CONSTRAINT FK_ocupacion_camarero
FOREIGN KEY(id_camarero) REFERENCES tbl_camarero(id_camarero);


-- INSERTS DE PRUEBA ERIC:

INSERT INTO tbl_sala (ubicacion_sala) VALUES
('Planta Baja'),
('Planta Alta'),
('Terraza Exterior'),
('Comedor Privado');


INSERT INTO tbl_camarero (nombre_camarero, apellidos_camarero, username, username_password) VALUES
('Juan', 'García López', 'juang', '$2y$10$GMV4gk/G7uCYrrRf/4YnmukMLnLwYcTElPR3ssLZuS8cZ4D8JBI8W'),
('María', 'Pérez Fernández', 'mariap', '$2y$10$GMV4gk/G7uCYrrRf/4YnmukMLnLwYcTElPR3ssLZuS8cZ4D8JBI8W'),
('Carlos', 'Rodríguez Sánchez', 'carlosr', '$2y$10$GMV4gk/G7uCYrrRf/4YnmukMLnLwYcTElPR3ssLZuS8cZ4D8JBI8W'),
('Laura', 'Martínez Gómez', 'lauram', '$2y$10$GMV4gk/G7uCYrrRf/4YnmukMLnLwYcTElPR3ssLZuS8cZ4D8JBI8W');

INSERT INTO tbl_mesa (id_sala, numero_sillas_mesa) VALUES
(1, 4),
(2, 6), 
(3, 2), 
(4, 8); 

INSERT INTO tbl_ocupacion (id_mesa, id_camarero, fecha_inicio, fecha_final, estado_ocupacion) VALUES
(1, 1, '2024-11-06 12:00:00', '2024-11-06 14:00:00', 'ocupada'),
(2, 2, '2024-11-06 13:00:00', NULL, 'ocupada'),
(3, 3, '2024-11-06 16:00:00', NULL, 'ocupada'),
(4, 4, '2024-11-06 18:30:00', '2024-11-06 20:00:00', 'liberada');
