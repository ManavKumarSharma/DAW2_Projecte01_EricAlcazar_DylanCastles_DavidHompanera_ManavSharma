INSERT INTO tbl_sala (ubicacion_sala) VALUES
('Sala'),
('Terraza Exterior'),
('Sala Privada');


INSERT INTO tbl_camarero (nombre_camarero, apellidos_camarero, username, password) VALUES
('Juan', 'García López', 'juang', '$2y$10$GMV4gk/G7uCYrrRf/4YnmukMLnLwYcTElPR3ssLZuS8cZ4D8JBI8W'),
('María', 'Pérez Fernández', 'mariap', '$2y$10$GMV4gk/G7uCYrrRf/4YnmukMLnLwYcTElPR3ssLZuS8cZ4D8JBI8W'),
('Carlos', 'Rodríguez Sánchez', 'carlosr', '$2y$10$GMV4gk/G7uCYrrRf/4YnmukMLnLwYcTElPR3ssLZuS8cZ4D8JBI8W'),
('Laura', 'Martínez Gómez', 'lauram', '$2y$10$GMV4gk/G7uCYrrRf/4YnmukMLnLwYcTElPR3ssLZuS8cZ4D8JBI8W');

-- Insertar mesas asociadas a cada sala
INSERT INTO tbl_mesa (id_sala, numero_sillas_mesa) VALUES
(2, 6),
(1, 8),  
(1, 8),  
(1, 8),  
(1, 8),  
(2, 6),
(2, 6), 
(1, 6),
(1, 6),
(1, 6),
(1, 6),
(2, 6), 
(3, 4), 
(1, 8),  
(1, 8),  
(1, 8),  
(1, 8),  
(3, 4), 
(3, 4), 
(2, 2), 
(2, 4), 
(2, 4), 
(2, 2), 
(3, 4); 

INSERT INTO tbl_ocupacion (id_mesa, id_camarero, fecha_inicio, fecha_final, estado_ocupacion) VALUES
(1, 1, '2024-11-08 12:00:00', '2024-11-08 13:00:00', 'Registrada'),
(2, 2, '2024-11-08 13:30:00', NULL, 'Ocupada'),
(3, 3, '2024-11-08 14:00:00', NULL, 'Disponible'),
(4, 1, '2024-11-08 14:30:00', '2024-11-08 15:30:00', 'Registrada'),
(5, 2, '2024-11-08 16:00:00', NULL, 'Ocupada'),
(6, 3, '2024-11-08 17:00:00', NULL, 'Disponible'),
(7, 1, '2024-11-08 18:00:00', '2024-11-08 19:00:00', 'Registrada');